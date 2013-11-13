<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce dhakain
* @Global variable function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();

        if($_SERVER['HTTP_HOST'] =="localhost"){
            define('GOOGLE_MAP_KEY', 'ABQIAAAAlgcUv4v5NM3eWzczQofqhRQbIF-iiizKm26zHoCWi8PHbGnWQhRbUvkT8xNA43JDVjdEBjtw-rOPHA');
            define('MAIN',"http://localhost/onclickbd");
            define('ADMIN',"http://localhost/onclickbd/admin");
            define('SALES',"http://localhost/onclickbd/sales");
            define('BUY',"http://localhost/onclickbd/buy");
            define('WHOLESALER', "http://localhost/onclickbd/wholesaler");
            define('PREVIEW',"http://localhost/onclickbd/preview");
            define('SERVICE',"http://localhost/onclickbd/service");
            define('TRANSACTION',"http://localhost/onclickbd/transaction");
            define('ACCOUNT',"http://localhost/onclickbd/account");
            define('MANAGEMENT', "http://localhost/onclickbd/management");
            define('CHAT', "http://localhost/onclickbd/chat");
            define('RELATIVE_PATH',$_SERVER['DOCUMENT_ROOT']."/onclickbd/");
            define('DOMAIN_IMAGE_PATH',"http://localhost/onclickbd/");
            define('WEBSITE_PREVIEW',"http://localhost/onclickbd/");

        }else{
            define('GOOGLE_MAP_KEY', 'ABQIAAAAlgcUv4v5NM3eWzczQofqhRQbIF-iiizKm26zHoCWi8PHbGnWQhRbUvkT8xNA43JDVjdEBjtw-rOPHA');
            define('MAIN',"http://onclickbd.com");
            define('ADMIN',"http://admin.onclickbd.com");
            define('SALES',"http://sales.onclickbd.com");
            define('BUY',"http://buy.onclickbd.com");
            define('WHOLESALER', "http://wholesaleronclickbd.com");
            define('PREVIEW',"http://preview.onclickbd.com");
            define('SERVICE',"http://service.onclickbd.com");
            define('TRANSACTION',"http://transaction.onclickbd.com");
            define('ACCOUNT',"http://account.onclickbd.com");
            define('MANAGEMENT', "http://management.onclickbd.com");
            define('CHAT', "http://chat.onclickbd.com");
            define('RELATIVE_PATH',$_SERVER['DOCUMENT_ROOT']);
            define('DOMAIN_IMAGE_PATH',"http://onclickbd.com/");
            define('WEBSITE_PREVIEW',"http://localhost/onclickbd/");

        }
        //This declare for image setting of product

        define('IMAGE_LIMIT',1);
        define('WATER_MARK',"DhakaIN");
        define('CUSTOM_TEMPLATE', serialize(array(8, 13, 14, 15, 16,17,18,19,20)));
        define('ENCRYPT', $this->config->item('umaar'));
		
	
    }

    function runSQL($rsql) {
        return $result = $this->db->query($rsql)->result();
    }
    function countRec($sql) {
        return $this->db->query($sql)->num_rows();
    }

    function customDateFormat($date,$format){
        if($date){

            return $date;

        }
        return false;

    }

    function getEditModules($modules){

        switch ($modules) :
            case  'shops': return 'shop';
            case  'services': return 'service';
            case  'shoppingmall': return 'mall';
            case  'wholesaller': return 'wholesale';
            case  'companies': return 'company';
        endswitch;
    }

    function explode_string($value=NUll,$narr=0)
    {
        $tokens = explode(" ", $value);
        return $tokens[0];

    }

    function getUserID($field_name=false,$slugval=false){

       $row=$this->db->select('uid')->where(array($field_name=>$slugval))->get('users');
       if($row -> num_rows() > 0 ){
           $rows=$row->result();
           return  $rows[0]->uid;
        }else{
            redirect ($this->uri->segment(1));
        }
    }
    function getAccessSlug($uid){

        $row=$this->db->select('access_slug')->where(array('uid' => $uid ))->get('users');
        if($row -> num_rows() > 0 ){
            $rows=$row->result();
            return  $rows[0]->access_slug;
        }else{
            redirect ($this->uri->segment(1));
        }
    }

    function getExistingCount($table,$field=NULL,$value=NULL){

        return $this->db->select($field)->where(array($field => $value ))->get($table)-> num_rows();


    }

    public function createGlobalDir($dir=""){

        if(!file_exists($dir)){

            if(mkdir($dir, 0777)){
            }else{
                return false;
            }

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

