<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @category Common used Variable
* @version 1.0
*/

class Util_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function break_word($str = '', $word_no=3){
			   if(empty($str)) return $str;
				   $data = '';
				   $i = 2;
				   foreach(explode(' ', $str) as $value){
				   $data .= $value.' ';
				   if($i == $word_no){
					return $data;   
					//$data .= $value.' ';
						  // $i = 0;
				   }
				   $i++;
      		   }
       		
	}

	
	
	function shop_name($agent_uid){
	
	   $this->db->select('agent_uid,shop_name');
	   $this->db->from('shop_details');
	   $this->db->where('agent_uid',$agent_uid);
	   $query=$this->db->get();
	   $rows=$query->result();
	   return  $rows[0]->shop_name;
  
	 }
	
	
	function shop_list(){
	
	   $this->db->select('agent_uid,shop_name');
	   $this->db->from('shop_details');
	   $this->db->join('users','users.uid = shop_details.agent_uid','inner');
	   $this->db->where('users.status',1);
	   $this->db->where("users.access_type",3); 
	   $this->db->order_by('shop_details.shop_name','asc');	
	   return $this->db->get();
	}
	
	function shopping_mall_list(){
	
		$this->db->select('shopping_mall.shopping_mall_id,shopping_mall.shopping_mall_name');
		$this->db->from('shopping_mall');
		$this->db->where('shopping_mall.status',1);
		$this->db->order_by('shopping_mall.shopping_mall_name','asc');	
    	return $this->db->get();
	}
	
	function shoppingmalllist(){
	
		$this->db->select('shopping_mall.shopping_mall_id,shopping_mall.shopping_mall_name,shopping_mall.location_id,shopping_mall.business_phone,shopping_mall.status');
		$this->db->from('shopping_mall');
		$this->db->order_by('shopping_mall.shopping_mall_name','asc');	
    	return $this->db->get();
	}
	
	function shopping_mall_name($shopping_mall_id=0){
		
	   if($shopping_mall_id > 0){	
	   $this->db->select('shopping_mall_name');
	   $this->db->from('shopping_mall');
	   $this->db->where('shopping_mall_id',$shopping_mall_id);
	   $query=$this->db->get();
	   $rows=$query->result();
	   return  $rows[0]->shopping_mall_name;
	   }else{
	   return '';
	   }
	}
	
	function get_username($fname)
	{	
			$name=$fname;
			$name=trim($name);
			$re_type= array(" ", ".", "_", "-", "@","$","%","*");
			$username=str_replace($re_type,"",$name);
			$user_name=strtolower($username);
	
			$this->db->where('user_name',$user_name);
			$count=$this->db->count_all_results('users');
			if($count > 0){
			return str_replace(" ",'',strtolower($user_name));
			}else{
			return str_replace(" ",'',strtolower($user_name));
			}
			
				
	}
	
	function get_domainname($fname)
	{	
			$name=$fname;
			$name=trim($name);
			$re_type= array(" ", ".", "_", "-", "@","$","%","*");
			$username=str_replace($re_type,"",$name);
			$user_name=strtolower($username);
	
			$this->db->where('domain_name',$user_name);
			$count=$this->db->count_all_results('settings_website');
			if($count > 0){
			return str_replace(" ",'',strtolower($user_name));
			}else{
			return str_replace(" ",'',strtolower($user_name));
			}
			
				
	}
	
	function userstatus($uid=0){ 
		
			$this->db->where('uid',$uid);
			$query=$this->db->get('users');
	   		$rows=$query->result();
	   		return  $rows[0]->status;
		
	}
	
		
	/*--------------------Trade show name -----------------------*/
	
	function tradeshow_name($tradeshow_id=0){
	
	   if($tradeshow_id > 0){	
	   $this->db->select('tradeshow_title');
	   $this->db->from('tradeshow');
	   $this->db->where('tradeshow_id',$tradeshow_id);
	   $query=$this->db->get();
	   $rows=$query->result();
	   return $rows[0]->tradeshow_title;
	   }else{
	   return '';
	   }
	
	}
	
	/*-----------------------------Old---------------------------------------*/
	
	
	function imageposition($brokerage_uid=0){
	
	   if($brokerage_uid > 0){	
	   $this->db->from('brokerage_photo_position');
	   $this->db->where('brokerage_uid',$brokerage_uid);
	   $query=$this->db->get();
	   return $query->result();
	   }else{
	   return '';
	   }
	
	}
	
	function agent_name($agent_uid){
	
	   $this->db->select('agent_uid,first_name,last_name');
	   $this->db->from('agent_details');
	   $this->db->where('agent_uid',$agent_uid);
	   $query=$this->db->get();
	   $rows=$query->result();
	   return  $rows[0]->first_name." ".$rows[0]->last_name;
  
	   }
	   
	 function listing_agent_name($agent_uid){
	
	   $this->db->select('agent_uid,first_name,last_name');
	   $this->db->from('agent_details');
	   $this->db->where('agent_uid',$agent_uid);
	   $query=$this->db->get();
	   $rows=$query->result();
	   
	   $this->db->where(array('agent_uid'=>$agent_uid));
	   if($this->db->count_all_results('share_agent')>0)
	   {
	
	   $this->db->select('share_agent_uid');
	   $this->db->from('share_agent');
	   $this->db->where('agent_uid',$agent_uid);
	   $query1=$this->db->get();
	   $row1=$query1->result();
	   $share_agent_uid=$row1[0]->share_agent_uid;
	   
	   $this->db->select('first_name,last_name');
	   $this->db->from('agent_details');
	   $this->db->where('agent_uid',$share_agent_uid);
	   $query2=$this->db->get();
	   $rowe2=$query2->result();
	   
		return  $rows[0]->last_name.",".$rows[0]->first_name."&nbsp; & &nbsp;".$rowe2[0]->last_name.",".$rowe2[0]->first_name;
	   	}else{
	 	return  $rows[0]->last_name.",".$rows[0]->first_name;
		}   
	  }  
	
	
	function agentname($agent_uid){
	
	   $this->db->select('agent_uid,first_name,last_name');
	   $this->db->from('agent_details');
	   $this->db->where('agent_uid',$agent_uid);
	   $query=$this->db->get();
	   $rows=$query->result();
	   return  $rows[0]->first_name;
	}
	
	function check_second_agent($uid){
	
	$this->db->where(array('agent_uid'=>$uid));
	if($this->db->count_all_results('share_agent')>0)
	{
	
	$this->db->select('existing_agent');
	$this->db->from('share_agent');
	$this->db->where('agent_uid',$uid);
	$query=$this->db->get();
	$row=$query->result();
	return $row[0]->existing_agent;
		
	}else
	{
	return 3;
	}
	
	}
	
	
	function second_agent_name($second_agent){
	
	$this->db->select('share_agent_uid');
	$this->db->from('share_agent');
	$this->db->where('agent_uid',$second_agent);
	$query=$this->db->get();
	$row=$query->result();
	$share_agent_uid= $row[0]->share_agent_uid;

	$this->db->select('agent_uid,first_name,last_name');
	$this->db->from('agent_details');
	$this->db->where('agent_uid',$share_agent_uid);
	$query1=$this->db->get();
	return $query1->result();


	
	}
	
	
	
	
	function houselisting_details($hid)
	{
	    
		
		$this->db->select('agent_details.agent_uid,agent_details.first_name,agent_details.last_name,house_address.address1,house_address.address2,house_address.house_id,settings_website.domain_name');
		$this->db->from('agent_details');
		$this->db->join('house_address','house_address.agent_uid = agent_details.agent_uid','inner');	
		$this->db->join('settings_website','house_address.agent_uid = settings_website.agent_uid','left');	
		$this->db->where('house_address.house_id',$hid);
		$query=$this->db->get();
		return $query->result();
		
		
	}
	
	function domain_name($agent_uid){
		
		//echo "vvxc";
		//exit();
		$this->db->where(array('agent_uid'=>$agent_uid));
		if($this->db->count_all_results('settings_website') >0){
		
		$this->db->select('settings_website.domain_name');
		$this->db->from('settings_website');
		$this->db->where('settings_website.agent_uid',$agent_uid);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->domain_name;
		}else{
		return false;
		}
	}
	
	function domain_status($agent_uid){
	
	   
		$this->db->where('uid',$agent_uid);
		$this->db->where('publish_main_website',1);
		return $this->db->count_all_results('users');
		
	
	}
		
	function colisting($agent_uid){
	
		$this->db->where(array('co_listing_1'=>$agent_uid));
		$this->db->or_where(array('co_listing_2'=>$agent_uid));
		if($this->db->count_all_results('house_settings') >0){

		
		$this->db->distinct();
		$this->db->select('agent_uid');
		$this->db->where(array('co_listing_1'=>$agent_uid));
		$this->db->or_where(array('co_listing_2'=>$agent_uid));
		return $query=$this->db->get('house_settings');
		}else{
		return '';
		}
		
	
	}
	
	function colisting_result($colist_uid,$agent_uid){
	    
		$this->db->select('house_address.house_id, house_address.agent_uid, house_address.address1,house_address.city,house_details.house_status,house_details.mls,house_settings.status');
		$this->db->from('house_settings');
		$this->db->join('house_address','house_address.house_id = house_settings.house_id','inner');	
		$this->db->join('house_details','house_address.house_id = house_details.house_id','inner');	
		$this->db->where('house_settings.agent_uid',$colist_uid);
		$this->db->where('house_settings.co_listing_1',$agent_uid);
		$this->db->or_where('house_settings.agent_uid',$colist_uid);
		$this->db->where('house_settings.co_listing_2',$agent_uid);


		$this->db->order_by("address1", "ascending"); 
		return $this->db->get();
	}
	
	function allcolisting_result($agent_uid){
	    
		$this->db->select('house_address.house_id, house_address.agent_uid, house_address.address1,house_details.house_status,house_details.mls,house_settings.status,house_settings.gallery_id,house_settings.publishing');
		$this->db->from('house_settings');
		$this->db->join('house_address','house_address.house_id = house_settings.house_id','inner');	
		$this->db->join('house_details','house_address.house_id = house_details.house_id','inner');	
		$this->db->where('house_settings.agent_uid',$agent_uid);
		$this->db->order_by("address1", "ascending"); 
		return $this->db->get();
	}
	
	function mport_brokerage_group($agent_uid){
		
		$brokerage_uid=$this->brokerage_uid($agent_uid);
		$group_brokerages=array();
		$query=$this->db->get('group_brokerages');
		foreach ($query -> result() as $rows ){
		$group_value=$rows->group_value;
		$group_brokerages_id=$rows->group_brokerages_id;
		$groupvalue =unserialize($group_value);
			if(in_array($brokerage_uid,$groupvalue)){
				foreach ($groupvalue as $gropid ){
					$group_brokerages[]=$gropid;
				}
			}
			
		}
		$groupbrokerages=array_unique($group_brokerages);
		$mportbrokeragegroup=(count($groupbrokerages));
		if($mportbrokeragegroup > 0){
		return $groupbrokerages;
		}else{
		return array($brokerage_uid);
		}
		
	}
	
	function brokerage_uid($agent_uid){
		
	   $this->db->select('brokerage_uid');
	   $this->db->from('agent_details');
	   $this->db->where('agent_uid',$agent_uid);
	   $query=$this->db->get();
	   $rows=$query->result();
	   return  $rows[0]->brokerage_uid;

	}
	
	function import_brokerage($brokerage_uid,$agent_uid){
	

		$this->db->distinct();
		$this->db->where('brokerage_uid',$brokerage_uid);
		$this->db->where('agent_uid !=',$agent_uid);
		$this->db->count_all_results('agent_details'); 
		if($this->db->count_all_results('agent_details') >0){
		
		$this->db->distinct();
		$this->db->select('house_address.agent_uid');
		$this->db->from('house_address');
		$this->db->join('agent_details','agent_details.agent_uid = house_address.agent_uid','inner');	
		$this->db->where('brokerage_uid',$brokerage_uid);
		$this->db->where('agent_details.agent_uid !=',$agent_uid);
    	return $query=$this->db->get();
	
		}else{
		return false;
		}
	
		
	
	}
	
	function import_agent_listing($agent_uid){
	    		
		$this->db->select('house_address.house_id, house_address.agent_uid, house_address.address1,house_details.house_status,house_details.mls,house_address.status');
		$this->db->from('house_address');
		$this->db->join('house_details','house_address.house_id = house_details.house_id','inner');	
		$this->db->where('house_address.agent_uid',$agent_uid);
		$this->db->order_by("address1", "ascending"); 
		return $this->db->get();

	}
	
		
	function listing_import($agent_uid){
	    
		$this->db->select('house_address.house_id, house_address.agent_uid, house_address.address1,house_details.house_status,house_details.mls,house_address.status,house_settings.gallery_id,house_settings.publishing');
		$this->db->from('house_other_listings');
		$this->db->join('house_details','house_other_listings.house_id = house_details.house_id','inner');	
		$this->db->join('house_settings','house_other_listings.house_id = house_settings.house_id','inner');	
		$this->db->join('house_address','house_other_listings.house_id = house_address.house_id','inner');	
		$this->db->where('house_other_listings.agent_uid',$agent_uid);
		$this->db->order_by("address1", "ascending"); 
		return $this->db->get();
		
	}
	
	function agent_other_house_liting($agent_uid){
		$this->db->where('agent_uid', $agent_uid);
		$query = $this->db->get("house_other_listings");
		$data = array();
		foreach($query->result() as $row){
			array_push($data, $row->house_id);
		}
		return $data;
	}
	
	function gallery_status($hid){
	
	$this->db->where(array('house_id'=>$hid));
	$this->db->where('publishing',1);
	return $this->db->count_all_results('house_settings');
	
	}
	
	function house_gallery($house_id=0){
	
	   $this->db->where(array('house_id'=>$house_id));
	   $this->db->where('publishing',1);
	   $count=$this->db->count_all_results('house_settings');
	   
	   if($count > 0){	
	   $this->db->select('gallery_id');
	   $this->db->from('house_settings');
	   $this->db->where('house_id',$house_id);
	   $this->db->where('publishing',1);
	   $query=$this->db->get();
	   $row=$query->result();
	   return $row[0]->gallery_id;
	   }else{
	   return '';
	   }
	
	}

	function house_soptlight($house_id=0){
	
	   $this->db->where(array('house_id'=>$house_id));
	   $this->db->where('spotlight_publish',1);
	   $count=$this->db->count_all_results('house_settings');
	   
	   if($count > 0){	
	   $this->db->select('spotlight');
	   $this->db->from('house_settings');
	   $this->db->where('house_id',$house_id);
	   $this->db->where('spotlight_publish',1);
	   $query=$this->db->get();
	   $row=$query->result();
	   return $row[0]->spotlight;
	   }else{
	   return '';
	   }
	
	}

		
	function total_galleries($auid){
	
	$this->db->where(array('agent_uid'=>$auid));
	$this->db->where('publishing',1);
	return $this->db->count_all_results('house_settings');
	
	}
	function total_spotlight($auid){
	
	$this->db->where(array('agent_uid'=>$auid));
	$this->db->where('spotlight_publish',1);
	return $this->db->count_all_results('house_settings');
	
	}
	

	
	function settingslist(){
	
		$this->db->select();
		$this->db->order_by("settings_id", "asc"); 
		return $this->db->get('settings');
	}
	
	function settings_parent($id=0)
	{
		if($id > 0){
		$this->db->select('settings_name');
		$this->db->from('settings');
		$this->db->where('settings_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->settings_name;
		}else{
		return "Parent lavel";
		}
	}
	
	
	function settings_name($id=0)
	{
		if($id > 0){
		$this->db->select('settings_name');
		$this->db->from('settings');
		$this->db->where('settings_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->settings_name;
		}else{
		return "---";
		}
	}
	
	
	
	function check_agent_website($uid){
	

	$this->db->select('publish_main_website');
	$this->db->from('users');
	$this->db->where('uid',$uid);
	$query=$this->db->get();
	$row=$query->result();
	return $row[0]->publish_main_website;
	
	}
	
	function agentdetails($cid){
			
		$this->db->where('agent_uid',$cid);	
		$count=$this->db->count_all_results('agent_details');
		$this->db->where('agent_uid',$cid);
		$query= $this->db->get('agent_details');
		if($count >0){
		return $query->result();
		}else{
		return false;
		}
		
	
	}
	
	function image_path($cid){
	

		$this->db->where('agent_uid',$cid);	
		$count=$this->db->count_all_results('agent_details');
		
		$this->db->select('agent_photo_path');
		$this->db->from('agent_details');
		$this->db->where('agent_uid',$cid);
		$query= $this->db->get();
		$row=$query->result();
		if($count >0){
		return $row[0]->agent_photo_path;
		}else{
		return false;
		}
		
	
	}
	
	function teamimagepath($cid){
	

		$this->db->where('team_uid',$cid);	
		$count=$this->db->count_all_results('team_details');
		
		$this->db->select('team_photo_path');
		$this->db->from('team_details');
		$this->db->where('team_uid',$cid);
		$query= $this->db->get();
		$row=$query->result();
		if($count >0){
		return $row[0]->team_photo_path;
		}else{
		return false;
		}
		
	
	}
	
	function team_image_path($team_uid){
	

		$this->db->where('team_uid',$team_uid);	
		$count=$this->db->count_all_results('team_details');
		
		$this->db->select('team_photo_path');
		$this->db->from('team_details');
		$this->db->where('team_uid',$team_uid);
		$query= $this->db->get();
		$row=$query->result();
		if($count >0){
		return $row[0]->team_photo_path;
		}else{
		return '';
		}
		
	
	}
	
	function thumb_path($cid){
	
		$this->db->where('cid',$cid);	
		$count=$this->db->count_all_results('photo_nodes');
		
		$this->db->select('photo_nodes.thumb_path');
		$this->db->from('photo_nodes');
		$this->db->where('cid',$cid);
		$query= $this->db->get();
		$row=$query->result();
		
		if($count >0){
		return $row[0]->thumb_path;
		}else{
		return '';
		}
		
	
	}
	
	/* This part use for Website & template manage */
	
		function get_menuurl($agent_uid,$menu_url = FALSE){
		
		
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
	
	
		
	function web_template_list()
	{
	
		$this->db->select();
		$this->db->from('website_template');
		$this->db->where('status',1);
		$this->db->order_by('template_name','asc');
		return $this->db->get();
		
		
	}
	
	function  get_weburl($agent_uid,$menu_id){
	
		$this->db->select('custom_menu.menu_name,custom_menu.agent_uid,custom_menu.menu_url,settings_website.domain_name,settings_website.custom_title');
		$this->db->from('custom_menu');
		$this->db->join('settings_website','custom_menu.agent_uid = settings_website.agent_uid','inner');
		$this->db->where('custom_menu.menu_id',$menu_id);
		$this->db->where('custom_menu.agent_uid',$agent_uid);
		$query= $this->db->get();
		return $query->result();
	
	}
	
	function get_contentpage($agent_uid,$menu_id){
		
		$this->db->select();
		$this->db->from('page_content');
		$this->db->where('page_content.menu_id',$menu_id);
		$this->db->where('page_content.agent_uid',$agent_uid);
		$query= $this->db->get();
		return $query->result();
		
	}
	
	function brokerage_group_list($group_value){
		
			$users =unserialize($group_value);
			foreach($users as $uid => $val)
			{
			$brokeragename[]=$this->brokerage_name($val);
			}
			return implode(",",$brokeragename);
	}
	
	/*------------Ishtiak------------------*/
	function get_menu($agent_uid)
	{
		$this->db->select('*');
		$this->db->from('custom_menu');
		$this->db->where('agent_uid',$agent_uid);
		$this->db->where('parent_id',0);
		$this->db->order_by('order','asc');
		$query = $this->db->get();
		return $query;
	}
	
	function get_submenu($agent_uid,$parent_id)
	{
		$this->db->select('*');
		$this->db->from('custom_menu');
		$this->db->where('agent_uid',$agent_uid);
		$this->db->where('parent_id',$parent_id);
		$this->db->order_by('order','asc');
		$query = $this->db->get();
		return $query;
	}
	
	function get_no_submenu($agent_uid,$parent_id)
	{
		$this->db->select('*');
		$this->db->from('custom_menu');
		$this->db->where('agent_uid',$agent_uid);
		$this->db->where('parent_id',$parent_id);
		$query = $this->db->get();
		return count($query->result());
	}
	
	function get_level_list()
	{
		$this->db->select('*');
		$this->db->from('settings');
		$this->db->where('parent_id', 91);
		$this->db->where('status',1);
		return $this->db->get();
	}
	
	function get_room_list()
	{
		$this->db->select('*');
		$this->db->from('settings');
		$this->db->where('parent_id', 92);
		$this->db->where('status',1);
		return $this->db->get();
	}
	
	/*---------- added at 11-11-10 ----------*/
	
	function get_account_list($agent_uid)
	{
		$this->db->select('*');
		$this->db->from('website_email_accounts');
		$this->db->where('agent_uid',$agent_uid);
		$query = $this->db->get();
		$row = $query->result();
		return $row;
	}
	
	function get_account_details($website_email_id)
	{
		$this->db->select('*');
		$this->db->from('website_email_accounts');
		$this->db->where('website_email_id',$website_email_id);
		$query = $this->db->get();
		$row = $query->result();
		return $row;
	}
	
	function get_another_email_list($agent_uid)
	{
		$this->db->select('*');
		$this->db->from('website_email_accounts');
		$this->db->where('agent_uid',$agent_uid);
		$query = $this->db->get();
		$row = $query->result();
		return $row;
	}
	
	function num_email_list($agent_uid)
	{
		$this->db->select('*');
		$this->db->from('website_email_accounts');
		$this->db->where('agent_uid',$agent_uid);
		$query = $this->db->get();
		$num = $query->num_rows();
		return $num;
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
	
	function remove_photogallery_directory()
	{
	
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
?>
