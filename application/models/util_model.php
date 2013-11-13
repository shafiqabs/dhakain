<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @Global variable function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Util_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

    function explode_string($value=NUll,$narr=0)
    {
        $tokens = explode(" ", $value);
        return $tokens[0];
    }
    public function checkExistingDomain($id){

        if(!empty($id)){
            $dbDomain = $this->db->select('domain_name')
                ->where('uid',$id)
                ->get('users')->result();
            return $dbDomain[0]->domain_name;

        }

    }

    function validDomainName($domain_name){

        $domain_name=strtolower(trim($domain_name));
        $domainname=url_title($domain_name,TRUE);
        $vowels = array("http","www.",'_','://','/'," ", "@","$","%","*");
        $onlyconsonants = str_replace($vowels,"",$domainname);
        return $domain_name=trim($onlyconsonants);
    }

    function validSubdomainName($domain_name){

        $vowels = array(".com",".info",'.org','.com.bd','.info.bd','.org.bd');
        $onlyconsonants = str_replace($vowels,"",$domain_name);
        return $subdomain_name=trim($onlyconsonants);
    }


    function get_domainname($fname)
    {
        $name=$fname;
        $name=trim($name);
        $re_type= array(" ", ".", "_", "-", "@","$","%","*");
        $username=str_replace($re_type,"",$name);
        $user_name=strtolower($username);

        $this->db->where('domain_name',$user_name);
        $count=$this->db->count_all_results('users');
        if($count > 0){
            return str_replace(" ",'',strtolower($user_name));
        }else{
            return str_replace(" ",'',strtolower($user_name));
        }
    }


    function get_username($uname = FALSE){

        $name=trim($uname);
        $re_type= array(" ", ".", "_", "-", "@","$","%","*","~","'","!");
        $username=str_replace($re_type,"",$name);
        $user_name=substr(strtolower($username),0,8);

        $this->db->select('user_name')->from('users')->where(array('user_name' => $user_name));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->user_name)) ? $row->user_name : '';
        if (empty($is_exists) ){
            return strtolower($user_name);
        }

        $user_name_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('user_name')->from('users')->where(array('user_name' => $user_name.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->access_slug)) ? $row->access_slug : '';
            if ( empty($exists_url) ){
                $user_name_new = $user_name.'-'.$i;
                break;
            }
        }

        if ($user_name_new == ''){
            return strtolower($user_name.'_'.md5(time()));
        }else{
            return strtolower($user_name_new);
        }
    }

    function get_rendom_password(){
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < 8; $i++)
        {
            $str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
        }
        return strtolower($str);
    }

    function getRendomPassword($tableID){
        $pool = '0123456789'.$tableID;
        $str = '';
        for ($i = 0; $i < 10; $i++)
        {
            $str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
        }
        return $this->formatPhoneNumber($str);
    }

    function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

        if(strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
            $areaCode = substr($phoneNumber, -10, 3);
            $nextThree = substr($phoneNumber, -7, 3);
            $lastFour = substr($phoneNumber, -4, 4);

            $phoneNumber = '+'.$countryCode.' -'.$areaCode.'-'.$nextThree.'-'.$lastFour;
        }
        else if(strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $nextThree = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, 6, 4);

            $phoneNumber = $areaCode.'-'.$nextThree.'-'.$lastFour;
        }
        else if(strlen($phoneNumber) == 7) {
            $nextThree = substr($phoneNumber, 0, 3);
            $lastFour = substr($phoneNumber, 3, 4);

            $phoneNumber = $nextThree.'-'.$lastFour;
        }

        return $phoneNumber;
    }

    function get_slug($menu_url = FALSE){


        $url_title = url_title($menu_url, 'dash', TRUE);
        $this->db->select('access_slug')->from('users')->where(array('access_slug' => $url_title));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->access_slug)) ? $row->access_slug : '';
        if (empty($is_exists) ){
            return $url_title;
        }

        $url_title_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('access_slug')->from('users')->where(array('access_slug' => $url_title.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->access_slug)) ? $row->access_slug : '';
            if ( empty($exists_url) ){
                $url_title_new = $url_title.'-'.$i;
                break;
            }
        }

        if ($url_title_new == ''){
            return $url_title.'_'.md5(time());
        }else{
            return $url_title_new;
        }
    }

    function getProductSlug($product_name = FALSE){


        $url_title = strtolower(url_title($product_name, 'dash', TRUE));
        $this->db->select('slug')->from('listing_product')->where(array('slug' => $url_title));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->slug)) ? $row->slug : '';
        if (empty($is_exists) ){
            return $url_title;
        }

        $url_title_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('slug')->from('listing_product')->where(array('slug' => $url_title.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->slug)) ? $row->slug : '';
            if ( empty($exists_url) ){
                $url_title_new = $url_title.'-'.$i;
                break;
            }
        }

        if ($url_title_new == ''){
            return $url_title.'_'.md5(time());
        }else{
            return $url_title_new;
        }
    }

    function get_url_slug($agent_uid,$menu_url = FALSE){


        $url_title = url_title($menu_url, 'dash', TRUE);
        $this->db->select('menu_url')->from('custom_menu')->where(array('agent_uid' => $agent_uid, 'menu_url' => $url_title));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->menu_url)) ? $row->menu_url : '';
        if (empty($is_exists) ){
            return $url_title;
        }

        $url_title_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('menu_url')->from('custom_menu')->where(array('agent_uid' => $agent_uid, 'menu_url' => $url_title.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->menu_url)) ? $row->menu_url : '';
            if ( empty($exists_url) ){
                $url_title_new = $url_title.'-'.$i;
                break;
            }
        }

        if ($url_title_new == ''){
            return $url_title.'_'.md5(time());
        }else{
            return $url_title_new;
        }
    }



    function create_dir($agent_uid, $dir){
		$assets_dir = './assets/agent_assets/';
		if(!file_exists($assets_dir.$agent_uid)){
			if(mkdir($assets_dir.$agent_uid, 0777)){
				//return $path;
			}else{
				return false;
			}
		}
		$path = $agent_uid.'/'.$dir;
		if(!file_exists($assets_dir.$path)){
			if(mkdir($assets_dir.$path, 0777)){
				return $path;
			}else{
				return false;
			}
		}
		return $path = $agent_uid.'/'.$dir;
	}


	function create_house_gallery_dir($gallery_id){

		$assets_dir = './uploads/photogallery/';
		if(!file_exists($assets_dir.$gallery_id)){
			if(mkdir($assets_dir.$gallery_id, 0777)){
				$mypath=$assets_dir."/".$gallery_id."/thumbs";
		        mkdir($mypath,0777,TRUE);
				$mypath=$assets_dir."/".$gallery_id."/large";
				mkdir($mypath,0777,TRUE);
			}else{
				return false;
			}
		}

	}

	function create_slide_dir($agent_uid){
		$assets_dir = './uploads/slidegallery/';
		if(!file_exists($assets_dir.$agent_uid)){
			if(mkdir($assets_dir.$agent_uid, 0777)){
			mkdir($assets_dir.$agent_uid.'/thumbs', 0777);
			mkdir($assets_dir.$agent_uid.'/larges', 0777);
				//return $path;
			}else{
				return false;
			}
		}


	}

    function deleteDirectory($dir) {
		if (!file_exists($dir)) return true;
		if (!is_dir($dir) || is_link($dir)) return unlink($dir);
			foreach (scandir($dir) as $item) {
				if ($item == '.' || $item == '..') continue;
				if (!deleteDirectory($dir . "/" . $item)) {
					chmod($dir . "/" . $item, 0777);
					if (!deleteDirectory($dir . "/" . $item)) return false;
				};
			}
			return rmdir($dir);
	}

	function delete_directory($dir) {
		if(is_dir($dir))
		{
			$dir = (substr($dir, -1) != "/")? $dir."/":$dir;
			$openDir = opendir($dir);
			while($file = readdir($openDir))
			{
				if(!in_array($file, array(".", "..")))
				{
					if(!is_dir($dir.$file))
						@unlink($dir.$file);

				}
			}
			closedir($openDir);
			@rmdir($dir);
		}
	}

	
	
		
}

