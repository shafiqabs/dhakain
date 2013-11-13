<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Date Format
 *
 * Returns formatted date by given timestamp
 *
 * @access	public
 * @param	integer	a number of seconds
 * @param	integer	php date format
 * @return	string
 */	
if ( ! function_exists('format_date')){
	function format_date($timestamp, $format = FALSE){
		$date_format = ($format == FALSE) ? DEFAULT_DATE_FORMAT : $format;
		return date($date_format, $timestamp);
	}
}

if ( ! function_exists('highlight_phrase2'))
{
	function highlight_phrase2($str, $phrase, $tag_open = '<strong>', $tag_close = '</strong>')
	{
		if ($str == '')
		{
			return '';
		}
		$phrase = explode(' ', $phrase);
		if(count($phrase) == 1){
			$phrase = implode('', $phrase);
		}
		if(!is_array($phrase)){
			if ($phrase != '')
			{
				return preg_replace('/('.preg_quote($phrase, '/').')/i', $tag_open."\\1".$tag_close, $str);
			}
		}else{
			$output = '';
			foreach($phrase as $string){
				$output .= preg_replace('/('.preg_quote($string, '/').')/i', $tag_open."\\1".$tag_close, $str);
			}
			return $output;
		}
		return $str;
	}
}

if ( ! function_exists('trim_array')){
	function trim_array(&$value){
		 $value = trim($value); 
	}
}
if ( ! function_exists('search_word_filter')){
	function search_word_filter($keyword, $content, $word_return = 20, $wrap_word = 20){
		$content_array = explode(" ", $content);
		$returnText = "";
		$word_no = 1;
		// getting number of word
		if(count($content_array) > 0){ 
			$keyword_array = explode(' ', $keyword);
			$exclude_keyword = array('on', 'a', 'in', 'as', 'to');
			foreach($keyword_array as $key => $element){
				if(in_array($element, $exclude_keyword)){
					unset($keyword_array[$key]);
				}
			}
			for($i = 0; $i < count($content_array); $i++){
				//if(preg_match("/$keyword/i", $content_array[$i])){
				
				if(in_array("$content_array[$i]", $keyword_array)){
					$word_no = $i;
					break;
				}
				/*
				foreach($content_array as $word){
					if(in_array($word, $keyword_array)){
						$word_no = $i;
						break;
					}
				}*/
			}
			if($word_no > $word_return){
				$start = $word_no - $wrap_word;
				$end = $word_no + $wrap_word;
				$returnText = ".. ";
				for($q = $start; $q < $end; $q++){
					if(isset($content_array[$q])){
						$returnText .= $content_array[$q] . " ";
					}
				}
			}else{
				for($q = 0; $q < $word_return; $q++){
					if(isset($content_array[$q])){
						$returnText .= $content_array[$q] . " ";
					}
				}
			}
		}
		return $returnText;
	}
}

if ( ! function_exists('make_paging')){
	function make_paging($base_url, $total_rows, $url_segment, $per_page = 10, $num_links = 5){
		$CI =& get_instance();
		$CI->load->library('pagination');
		$config['base_url'] = $base_url;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
	    $config['first_link'] = 'First';
		$config['next_link']= 'Next';
		$config['prev_link']= 'Prev';
		$config['last_link']= 'Last';
		
		$config['num_links'] = $num_links;
		$config['uri_segment'] = $url_segment;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a href="javascript:;" class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['num_tag_open'] = '';
		$config['num_tag_close'] = '';
		$CI->pagination->initialize($config);
		return $CI->pagination->create_links();
	}
}

if ( ! function_exists('paging')){

function paging($page,$rp,$total,$limit)
{
        $limit -= 1;

        $mid = floor($limit/2);
        
        if ($total>$rp)
            $numpages = ceil($total/$rp);
        else
            $numpages = 1;
        
        if ($page>$numpages) $page = $numpages;

            $npage = $page;

        while (($npage-1)>0&&$npage>($page-$mid)&&($npage>0))
            $npage -= 1;
        
        $lastpage = $npage + $limit;
        
        if ($lastpage>$numpages) 
            {
            $npage = $numpages - $limit + 1;
            if ($npage<0) $npage = 1;
            $lastpage = $npage + $limit;
            if ($lastpage>$numpages) $lastpage = $numpages;
            }
        
        while (($lastpage-$npage)<$limit) $npage -= 1;        
        
        if ($npage<1) $npage = 1;
            
        $paging['first'] = 1;
        if ($page>1) $paging['prev'] = $page - 1; else $paging['prev'] = 1;
        $paging['start'] = $npage;
        $paging['end'] = $lastpage;
        $paging['page'] = $page;            
        if (($page+1)<$numpages) $paging['next'] = $page + 1; else $paging['next'] = $numpages;
        $paging['last'] = $numpages;
        $paging['total'] = $total;
        $paging['iend'] = $page * $rp;
        $paging['istart'] = ($page * $rp) - $rp + 1;
        
        if (($page * $rp)>$total) $paging['iend'] = $total;
        
        return $paging;    
}

}

/**
 *
 * twitterStatusUrlConverter
 *
 * To convert links on a twitter status to a clickable url. Also convert @ to follow link, and # to search
 *
 * @author: Mardix - http://mardix.wordpress.com, http://www.givemebeats.net
 * @date: March 16 2009
 * @license: LGPL (I don't care, it's free lol)
 *
 * @param string : the status
 * @param bool : true|false, allow target _blank
 * @param int : to truncate a link to max length
 * @return String
 *
 *
 */
if ( ! function_exists('twitterStatusUrlConverter')){
	function twitterStatusUrlConverter($status,$targetBlank=true,$linkMaxLen=250){
	 
	  // The target
	  $target=$targetBlank ? " target=\"_blank\" " : "";
	 
		// convert link to url
		$status = preg_replace("/((http:\/\/|https:\/\/)[^ )
	]+)/e", "'<a href=\"$1\" title=\"$1\"  $target >'. ((strlen('$1')>=$linkMaxLen ? substr('$1',0,$linkMaxLen).'...':'$1')).'</a>'", $status);
	 
		// convert @ to follow
		$status = preg_replace("/(@([_a-z0-9\-]+))/i","<a href=\"http://twitter.com/$2\" title=\"Follow $2\" $target >$1</a>",$status);
	 
		// convert # to search
		$status = preg_replace("/(#([_a-z0-9\-]+))/i","<a href=\"http://search.twitter.com/search?q=%23$2\" title=\"Search $1\" $target >$1</a>",$status);
	 
		// return the status
		return $status;
	}
}
/* 
@ make a URL small 
* usage
* $short = make_bitly_url('http://webdimensionbd.net','iamhimu','R_cabf7b7094d0c531d12f08afe2c56cf8','json');
* $short returns:  http://bit.ly/11Owun
*/
if ( ! function_exists('make_bitly_url')){
	function make_bitly_url($url,$login,$appkey,$format = 'json',$version = '2.0.1'){
		if($login == '' || $appkey == ''){
			return '';
		}
		
		//create the URL
		$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;
		
		//get the url
		//could also use cURL here
		$response = file_get_contents($bitly);
		//parse depending on desired format
		if(strtolower($format) == 'json')
		{
			$json = @json_decode($response,true);
			if(isset($json->statusCode) && $json->statusCode == 'OK'){
				return $json->results->$url->shortUrl;
			}else{
				return '';
			}
		}
		else //xml
		{
			$xml = simplexml_load_string($response);
			return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
		}
	}
}


if ( ! function_exists('site_url_ssl'))
{
	function site_url_ssl($uri = '')
	{
		$CI =& get_instance();
		//return $CI->config->site_url($uri);
		if (is_array($uri))
		{
			$uri = implode('/', $uri);
		}

		if ($uri == '')
		{
			return $CI->config->slash_item('base_url').$CI->config->item('index_page');
		}
		else
		{
			$suffix = ($CI->config->item('url_suffix') == FALSE) ? '' : $CI->config->item('url_suffix');
			return $CI->config->slash_item('base_url_ssl').$CI->config->slash_item('index_page').trim($uri, '/').$suffix; 
		}
		
	}
}

if ( ! function_exists('base_url_ssl'))
{
	function base_url_ssl()
	{
		$CI =& get_instance();
		return $CI->config->slash_item('base_url_ssl');
	}
}


/* End of file date_helper.php */
/* Location: ./application/helpers/functions_helper.php */