<?php
/*
 * Get the result by fetching the url and return
 * json converted string
 * @param $id: Id of the property
 *
*/
function getPropertyResult($id) {
	include_once("simple_html_dom/simple_html_dom.php");

	$debug = 0; //enable or disable debugging
	$result = array();

	//url to fetch
	$url = "http://www.mls.ca/PropertyResults.aspx?Mode=5&id=".$id;
	$contents = fake_user_agent_http_get($url);
	//print $contents;

	// create a DOM object
	$dom = new simple_html_dom();
	$dom->load($contents);

	$ret = $dom->find('a',0);
	$link = str_ireplace("&amp;", "&", $ret->href);
	//print $link;

	if($link !="") {
		$contents = fake_user_agent_http_get($link);
		//print $contents;
	}
	else {
		$status['error']['has_error'] = 1;
		$status['error']['error_type'] = 1;
		$status['error']['error_message'] = "Link not found";

		$output['status_data'] = $status;
		$output['raw_data'] = array();
		$output['json_data'] = '';

		return $output;
	}

	//load the contents again
	$dom->load($contents);

	// find the warning
	$ret = $dom->find('.Warning', 0);
	$ret_contents = $ret->innertext;
	if(trim($ret_contents) != "") {
		//id not found
		if($debug) print "Id : ".$id." not found.<br>";

		$status['error']['has_error'] = 1;
		$status['error']['error_type'] = 2;
		$status['error']['error_message'] = "Id : ".$id." not exists.";

		$output['status_data'] = $status;
		$output['raw_data'] = array();
		$output['json_data'] = '';

		return $output;
	}

	//MLS id and List Price
	$ret_mlsno = $dom->find('table.MainHeadingTable td.MainHeadingLeft', 0);
	$arr = explode(" ",$ret_mlsno->innertext);

	$value = str_ireplace("MLS®:", "", $arr[1]);
	$value = str_ireplace("<br>", " ", $value);
	$value = str_ireplace("<br/>", " ", $value);
	$value = str_ireplace("<br />", " ", $value);
	$value = strip_tags(trim($value));

	$result['property']['mls_no'] = trim($value);

	$ret_listprice_cols = $dom->find('table.MainHeadingTable td.MainHeadingRight DIV span');
	if(sizeof($ret_listprice_cols)) {
		foreach($ret_listprice_cols as $ret_listprice_col) {
			$pos = stripos($ret_listprice_col->innertext, 'For Sale:');
			if($pos !== false) {
				$list_price = $ret_listprice_col->innertext;
				break;
			}
		}
	}

	$value = str_ireplace("For Sale:", "", $list_price);
	$value = str_ireplace("<br>", " ", $value);
	$value = str_ireplace("<br/>", " ", $value);
	$value = str_ireplace("<br />", " ", $value);
	$value = strip_tags(trim($value));

	$result['property']['list_price'] = trim($value);


	//find all PropDetailsSummaryValue
	$ret_propertydetails = $dom->find('table#_ctl0_elListingSummary_rptSpecifications div.PropDetailsSummarySpecText');
	$count = 0;
	foreach($ret_propertydetails as $ret_propertydetail)
	{
		$value = str_ireplace("<br>", " ", $ret_propertydetail->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$value = strtolower(str_ireplace(" ", "_", trim($value)));

		$propdetail_prop[$count] = $value;
		++$count;
	}

	$ret_propertydetails_values = $dom->find('table#_ctl0_elListingSummary_rptSpecifications div.PropDetailsSummaryValue');
	$count = 0;
	foreach($ret_propertydetails_values as $ret_propertydetails_value)
	{
		$value = str_ireplace("<br>", " ", $ret_propertydetails_value->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$name = $propdetail_prop[$count];
		if(!$name) $name = 'error_finding_name_'.rand(5,15);

		$result['propdetail'][$name] = trim($value);

		++$count;
	}

	//General Discussions
	$ret_discussion = $dom->find('div.PropDetailsRemarksValue', 0);
	//print $ret_props->innertext;

	$value = str_ireplace("<br>", " ", $ret_discussion->innertext);
	$value = str_ireplace("<br/>", " ", $value);
	$value = str_ireplace("<br />", " ", $value);
	$value = strip_tags($value);
	$result['prop_details_summary']['general_discussion'] = $value;

	//Property Summary
	$ret_propertysummaries = $dom->find('table#_ctl0_elGeneralPropertyDetails_rptSpecifications div.PropDetailsSpecText');
	$count = 0;
	foreach($ret_propertysummaries as $ret_propertysummary)
	{
		$value = str_ireplace("<br>", " ", $ret_propertysummary->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$value = strtolower(str_ireplace(" ", "_", trim($value)));

		$propsummary_prop[$count] = $value;
		++$count;
	}

	$ret_propertysummary_values = $dom->find('table#_ctl0_elGeneralPropertyDetails_rptSpecifications div.PropDetailsSpecValue');
	$count = 0;
	foreach($ret_propertysummary_values as $ret_propertysummary_value)
	{
		$value = str_ireplace("<br>", " ", $ret_propertysummary_value->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$name = $propsummary_prop[$count];
		if(!$name) $name = 'error_finding_name_'.rand(5,15);

		$result['prop_details_summary'][$name] = trim($value);

		++$count;
	}

	//Parkings
	//parking no
	$ret_parking_no = $dom->find('div.PropDetailsFireplaceTitle span#_ctl0_elGeneralPropertyDetails_lblParkingTitle', 0);

	$value = str_ireplace("<br>", " ", $ret_parking_no->innertext);
	$value = str_ireplace("<br/>", " ", $value);
	$value = str_ireplace("<br />", " ", $value);
	$value = strip_tags($value);

	$value_array = explode(":", $value);
	$result['parking']['parking_no'] = trim($value_array[1]);

	//parking type
	$ret_parking_type = $dom->find('table#_ctl0_elGeneralPropertyDetails_rptParking div.PropDetailsSpecValue', 0);

	$value = str_ireplace("<br>", " ", $ret_parking_type->innertext);
	$value = str_ireplace("<br/>", " ", $value);
	$value = str_ireplace("<br />", " ", $value);
	$value = str_ireplace(": ", "", $value);
	$value = strip_tags($value);

	$result['parking']['parking_type'] = trim($value);

	//Building
	$ret_buildings = $dom->find('table#_ctl0_elBuildingDetails_rptSpecifications div.PropDetailsSpecText');
	$count = 0;
	foreach($ret_buildings as $ret_building)
	{
		$value = str_ireplace("<br>", " ", $ret_building->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$value = strtolower(str_ireplace(" ", "_", trim($value)));

		$buildings_prop[$count] = $value;
		++$count;
	}

	$ret_building_values = $dom->find('table#_ctl0_elBuildingDetails_rptSpecifications div.PropDetailsSpecValue');
	$count = 0;
	foreach($ret_building_values as $ret_building_value)
	{
		$value = str_ireplace("<br>", " ", $ret_building_value->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$name = $buildings_prop[$count];
		if(!$name) $name = 'error_finding_name_'.rand(5,15);

		$result['building'][$name] = trim($value);

		++$count;
	}


	//Rooms
	$ret_rooms = $dom->find('table#_ctl0_elBuildingDetails_rptRoomsSpecifications table td.PropDetailsSpecValue');
	$count = 0;
	$line = 1;
	$room = array();
	foreach($ret_rooms as $ret_room)
	{
		$value = str_ireplace("<br>", " ", $ret_room->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		if($line == 1) {
			$room['type'] = $value;
		}
		else if($line == 2) {
			$room['level'] = $value;
		}
		else if($line == 3) {
			$room['dimensions'] = $value;
		}
		else if($line == 4) {
			$room['unknown'] = $value;
		}
		++$line;

		if($line > 4) {
			$line = 1;
			$result['rooms']['room'][$count] = $room;

			unset($room);
			$room = array();

			++$count;
		}
	}

	//Heatings
	$ret_heatings = $dom->find('table#_ctl0_elBuildingDetails_rptHeatingInformation div.PropDetailsSpecText');
	$count = 0;
	foreach($ret_heatings as $ret_heating)
	{
		$value = str_ireplace("<br>", " ", $ret_heating->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$value = strtolower(str_ireplace(" ", "_", trim($value)));

		$heatings_prop[$count] = $value;
		++$count;
	}

	$ret_heating_values = $dom->find('table#_ctl0_elBuildingDetails_rptHeatingInformation div.PropDetailsSpecValue');
	$count = 0;
	foreach($ret_heating_values as $ret_heating_value)
	{
		$value = str_ireplace("<br>", " ", $ret_heating_value->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		$name = $heatings_prop[$count];
		if(!$name) $name = 'error_finding_name_'.rand(5,15);

		$result['heating'][$name] = trim($value);

		++$count;
	}


	//Basement
	$ret_basements = $dom->find('table#_ctl0_elBuildingDetails_rptBasementInformation td.PropDetailsBasementSpecText');
	$count = 0;
	$line = 1;
	$basement = array();
	foreach($ret_basements as $ret_basement)
	{
		$value = str_ireplace("<br>", " ", $ret_basement->innertext);
		$value = str_ireplace("<br/>", " ", $value);
		$value = str_ireplace("<br />", " ", $value);
		$value = str_ireplace(": ", "", $value);
		$value = strip_tags($value);

		if($line == 1) {
			$basement['type'] = $value;
		}
		else if($line == 2) {
			$basement['development'] = $value;
		}
		else if($line == 3) {
			$basement['feature'] = $value;
		}
		++$line;

		if($line > 3) {
			$line = 1;
			$result['basements']['basement'][$count] = $basement;

			unset($basement);
			$basement = array();

			++$count;
		}
	}

	//Land
	$ret_land = $dom->find('table#_ctl0_elLanddetails_rptSpecifications div.PropDetailsSpecValue', 0);

	$value = str_ireplace("<br>", " ", $ret_land->innertext);
	$value = str_ireplace("<br/>", " ", $value);
	$value = str_ireplace("<br />", " ", $value);
	$value = strip_tags($value);

	$result['land']['land_size'] = $value;

	if($debug) {
		print_r($result);
	}

	$status['error']['has_error'] = 0;
	$status['error']['error_type'] = 0;
	$status['error']['error_message'] = "Success";

	$output['status_data'] = $status;
	$output['raw_data'] = $result;
	$output['json_data'] = array_to_json_string($result);

	return $output;
}

/*
 * Generate fake agent information for the curl
 * @param: site url
 *
*/
function fake_user_agent_http_get($address) {
 $agents[] = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0)";
 $agents[] = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)";
 $agents[] = "Opera/9.63 (Windows NT 6.0; U; ru) Presto/2.1.1";
 $agents[] = "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5";
 $agents[] = "Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.18) Gecko/20081203 Firefox/2.0.0.18";
 $agents[] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16";
 $agents[] = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1";

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $address);
 curl_setopt($ch, CURLOPT_HEADER, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($ch, CURLOPT_USERAGENT, $agents[rand(0,(count($agents)-1))]);
 $data = curl_exec($ch);
 curl_close($ch);
 return $data;
}

/*
 * Convert php array into jason string
 * @param: array
 *
*/
function array_to_json_string($arraydata) {
	$output = "";
	$output .= "{";

	foreach($arraydata as $key=>$val){
    	if (is_array($val)) {
    		$output .= "\"".$key."\" : [{";
				foreach($val as $subkey=>$subval){
					$output .= "\"".$subkey."\" : \"".$subval."\",";
				}
      		$output .= "}],";
      	} else {
      		$output .= "\"".$key."\" : \"".$val."\",";
      	}
    }
    $output .= "}";

    return $output;
}

function prep_msl($str){
	$char = array(" ", ":", "\t", '\n', "\n\r");
	$str = trim($str);
	$str = preg_replace('/^:/', '', $str);
	$str = preg_replace('/\t/', '', $str);
	$str = preg_replace('/\n/', '', $str);
	$str = preg_replace('/\n\r/', '', $str);
	$str = trim($str);
	return $str;
	//return trim(str_replace($char, '', $str));
	//return preg_replace('/^:|\\s/', '', $char);
}

function format_lot_size($str){
	$split = split(" ", $str);
	$data = array();
	if(strtolower($split[1]) == 'ft' || strtolower($split[1]) == 'feet'){
		$data['type'] = 'Feet';
	}else{
		$data['type'] = 'Meters';
	}
	$split = split('x', $split[0]);
	$data['w'] = $split[0];
	$data['h'] = $split[1];
	return $data;
}

function format_room_dimension($str){
	//3.7500 m x 3.1600 m
	$split = split('x', $str);
	$split_w = split('m',$split[0]);
	$split_d = split('m',$split[0]);
	$data['w'] = $split_w[0];
	$data['d'] = $split_d[0];
	return $data;
}

function parse_address($str){
	$exp = explode(',', $str);
	$address = explode(' ', $exp[0]);
	$state_city = explode(' ', trim(str_replace('  ', '', $exp[1])), 2);
	
	$city = end($address);
	$location = '';
	foreach($address as $key => $val){
		if(count($address) > ($key + 1)){
			$location .= $val . ' ';
		}
	}
	$data = array(
		'address' => (isset($location)) ? $location : '',
		'city' => (isset($city)) ? $city : '',
		'zip' => (isset($state_city[0])) ? $state_city[0] : '',
		'state' => (isset($state_city[1])) ? $state_city[1] : ''
	);
	return $data;
}