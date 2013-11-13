<?php 
if ( ! function_exists('json_encode')){
	    function json_encode($arg){
		require_once 'JSON.php';
		global $services_json;
		if (!isset($services_json)) {
			$services_json = new Services_JSON();
		}
		return $services_json->encode($arg);
	}
}

if ( ! function_exists('json_decode')){
	    function json_decode($arg){
		require_once 'JSON.php';
		global $services_json;
		if (!isset($services_json)) {
			$services_json = new Services_JSON();
		}
		return $services_json->decode($arg);
	}
}
/* End of file date_helper.php */
/* Location: ./application/helpers/functions_helper.php */