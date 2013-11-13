<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @category Common used Variable
* @version 1.0
*/

class Variable_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
		 define('GOOGLE_MAP_KEY', 'ABQIAAAAlgcUv4v5NM3eWzczQofqhRQ9fsCgbZ8-cX8p4TjcsBMznzFyqhSJWD8D6MYfBOTdHe57LvG3KQSM0A');
		 if($_SERVER['HTTP_HOST'] =="localhost"){     
		 define('RELATIVE_PATH',$_SERVER['DOCUMENT_ROOT']."/admin-ebdshop/");
		 define('DOMAIN_IMAGE_PATH',"http://localhost/admin-ebdshop/");
		 define('GALLERY',"http://localhost/agent-show-gallery/index.php");
		 define('MLS',"http://localhost/mls.thegm.us/index.php");
		 define('SPOTLIGHT',"http://localhost/agent-show-spotlight/index.php");
		 define('WEBSITE_PREVIEW', "http://agent-preview/index.php");

	 	}else{
		 
		 define('RELATIVE_PATH',$_SERVER['DOCUMENT_ROOT']);
		 define('DOMAIN_IMAGE_PATH',"http://admin.ebdshop.com/");
		 define('GALLERY',"http://g.agentshowing.com");
		 define('MLS',"http://m.agentshowing.com");
		 define('SPOTLIGHT',"http://preview-spotlight.agentshowing.com");
		 define('WEBSITE_PREVIEW', "http://preview-website.agentshowing.com");
	 
	 	}
	}
}
