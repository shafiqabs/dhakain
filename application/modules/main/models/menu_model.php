<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @settings function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
		

	function settings_under_list($id=0){
	
		$this->db->select();
		$this->db->where('parent_id',$id);
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
	
	function product_categoryid($category_name=NULL)
	{
		if($category_name){
		$this->db->select('category_id');
		$this->db->from('product_category');
		$this->db->where('category_name',$category_name);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->category_id;
		}else{
		return false;
		}
	}
	
	function product_category_name($id=0)
	{
		if($id > 0){
		$this->db->select('category_name');
		$this->db->from('product_category');
		$this->db->where('category_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->category_name;
		}else{
		return false;
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
		return false;
		}
	}
	
	function categorylisting(){
	
		$this->db->select();
		$this->db->where('parent_id',0);
		$this->db->order_by("parent_id", "asc"); 
		return $this->db->get('product_category');
	}
		
	function categorylist($category_id=0){
	
		
		$sql="SELECT listing_product_category.catid_label_2 
    , product_category.category_name
    , listing_product_category.agent_uid
FROM
    listing_product_category
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_2 = product_category.category_id)
WHERE (listing_product_category.catid_label_1 =$category_id
   )
GROUP BY listing_product_category.catid_label_2";
		return $query = $this->db->query($sql);
	}
	
	function sub_categorylist($category_id=0){
	
		
		$sql="SELECT listing_product_category.catid_label_3 , product_category.category_name FROM listing_product_category INNER JOIN product_category  ON (listing_product_category.catid_label_3 = product_category.category_id) WHERE (listing_product_category.catid_label_2 =$category_id) GROUP BY listing_product_category.catid_label_3";
		return $query = $this->db->query($sql);
		
	}
	
	function sub_under_subcategorylist($category_id=0){
	
		
		$sql="SELECT listing_product_category.catid_label_4 , product_category.category_name FROM listing_product_category INNER JOIN product_category  ON (listing_product_category.catid_label_4 = product_category.category_id) WHERE (listing_product_category.catid_label_3 =$category_id) GROUP BY listing_product_category.catid_label_4";
		return $query = $this->db->query($sql);
		
	}

	
	function locationlist($parent_id=0)
	{
		
	$sql="SELECT shop_details.location_id , settings.settings_name FROM listing_product_category  INNER JOIN shop_details ON (listing_product_category.agent_uid = shop_details.agent_uid) INNER JOIN settings ON (shop_details.location_id = settings.settings_id) WHERE (listing_product_category.catid_label_1 =$parent_id) GROUP BY shop_details.location_id";
        return $query = $this->db->query($sql);
	
	}
	
	function location_under_categorylist($catid_label_1=0,$location_id=0)
	{
		
		$sql="SELECT
    product_category.category_name
    , product_category.category_id
FROM
    listing_product_category
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_2 = product_category.category_id)
    INNER JOIN shop_details 
        ON (listing_product_category.agent_uid = shop_details.agent_uid)
WHERE (listing_product_category.catid_label_1 =$catid_label_1
    AND shop_details.location_id =$location_id)
GROUP BY listing_product_category.catid_label_2";
 return $query = $this->db->query($sql);
      
	}
	
	function shoplist($category_id=0,$location_id=0)
	{
	$sql="SELECT listing_product_category.catid_label_2 , shop_details.location_id , shop_details.shop_name , listing_product_category.agent_uid ,settings_website.domain_name ,settings_website.subdomain_name FROM  listing_product_category INNER JOIN shop_details ON (listing_product_category.agent_uid = shop_details.agent_uid) INNER JOIN settings_website ON (listing_product_category.agent_uid = settings_website.agent_uid) WHERE (listing_product_category.catid_label_2 =$category_id AND shop_details.location_id =$location_id)
GROUP BY listing_product_category.agent_uid";
	return $query = $this->db->query($sql);
	}
	
	function shop_details_list($category_id=0,$location_id=0)
	{
	$sql="SELECT
    shop_details.agent_uid
    , shop_details.shop_name
    , shop_brand.brand_status
    , shop_details.business_phone
    , shop_details.address
    , settings.settings_name
    , settings_website.domain_name
    , settings_website.subdomain_name
    , shop_shopping_mall.lavel
    , shop_shopping_mall.shop_no
    , shopping_mall.shopping_mall_name
FROM
    listing_product_category
    INNER JOIN shop_details
        ON (listing_product_category.agent_uid = shop_details.agent_uid)
    INNER JOIN settings 
        ON (shop_details.location_id = settings.settings_id)
    INNER JOIN settings_website 
        ON (shop_details.agent_uid = settings_website.agent_uid)
	LEFT JOIN shop_brand 
        ON (shop_details.agent_uid = shop_brand.agent_uid)
    LEFT JOIN shop_shopping_mall 
        ON (shop_details.agent_uid = shop_shopping_mall.agent_uid)
	LEFT JOIN shopping_mall 
        ON (shop_shopping_mall.shopping_mall_id = shopping_mall.shopping_mall_id)
WHERE (listing_product_category.catid_label_2 =$category_id
    AND shop_details.location_id =$location_id)
GROUP BY listing_product_category.agent_uid";
	return $query = $this->db->query($sql);
	}
	
	function shop_under_listproduct($category_id=0,$agent_uid=0)
	{
		$sql="SELECT
    product_category.category_name
	,catid_label_3
    , COUNT(listing_product_category.catid_label_3) AS counval
FROM
    listing_product_category
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_3 = product_category.category_id)
WHERE (listing_product_category.catid_label_2 =$category_id
    AND listing_product_category.agent_uid =$agent_uid)
GROUP BY listing_product_category.catid_label_3";
	
	return $query = $this->db->query($sql);
	
	}
	
	function shop_under_listproduct_custom($category_id=0,$agent_uid=0)
	{
		
	$sql="SELECT
    COUNT(listing_product_category.catid_label_3) AS counval
    , product_category_custom.category_name
	,catid_label_3
FROM
    listing_product_category
    INNER JOIN product_category_custom 
        ON (listing_product_category.catid_label_3 = product_category_custom.category_id)
WHERE (listing_product_category.catid_label_2 =$category_id
    AND listing_product_category.agent_uid =$agent_uid)
GROUP BY listing_product_category.catid_label_3";
	return $query = $this->db->query($sql);
	
	}
	
	function search_shop_details($agent_uid=0)
	{
	$sql="SELECT
    listing_product_category.agent_uid
    , shop_details.shop_name
	, shop_details.shop_url
    , shop_details.business_phone
    , shop_details.cell_phone
    , settings_website.domain_name
    , settings_website.subdomain_name
    , shopping_mall.shopping_mall_name
    , shop_brand.brand_status
    , shop_shopping_mall.lavel
    , shop_shopping_mall.shop_no
    , shop_details.email
    , settings.settings_name AS location_name
    , shop_details.address
    , shop_details.city
    , COUNT(listing_product_category.catid_label_3) AS total_product
    , product_category.category_name
FROM
    shop_brand, 
    settings_website
    INNER JOIN listing_product_category 
        ON (settings_website.agent_uid = listing_product_category.agent_uid)
    LEFT JOIN shop_shopping_mall 
        ON (listing_product_category.agent_uid = shop_shopping_mall.agent_uid)
    INNER JOIN shop_details 
        ON (listing_product_category.agent_uid = shop_details.agent_uid)
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_3 = product_category.category_id)
    LEFT JOIN shopping_mall 
        ON (shop_shopping_mall.shopping_mall_id = shopping_mall.shopping_mall_id)
    LEFT JOIN settings 
        ON (shop_details.location_id = settings.settings_id)
WHERE (listing_product_category.agent_uid =4)
GROUP BY listing_product_category.agent_uid";
	$query = $this->db->query($sql);
	return $query->result();  
	}
	
	function shop_details($agent_uid=0)
	{
	$sql="SELECT
    listing_product_category.agent_uid
    , shop_details.shop_name
	, shop_details.shop_url
    , shop_details.business_phone
    , shop_details.cell_phone
    , settings_website.domain_name
    , settings_website.subdomain_name
    , shopping_mall.shopping_mall_name
    , shop_brand.brand_status
    , shop_shopping_mall.lavel
    , shop_shopping_mall.shop_no
    , shop_details.email
    , settings.settings_name
    , shop_details.address
    , shop_details.city
    , COUNT(listing_product_category.catid_label_3)
    , product_category.category_name
FROM
    shop_brand, 
    settings_website
    INNER JOIN listing_product_category 
        ON (settings_website.agent_uid = listing_product_category.agent_uid)
    LEFT JOIN shop_shopping_mall 
        ON (listing_product_category.agent_uid = shop_shopping_mall.agent_uid)
    INNER JOIN shop_details 
        ON (listing_product_category.agent_uid = shop_details.agent_uid)
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_3 = product_category.category_id)
    LEFT JOIN shopping_mall 
        ON (shop_shopping_mall.shopping_mall_id = shopping_mall.shopping_mall_id)
    LEFT JOIN settings 
        ON (shop_details.location_id = settings.settings_id)
WHERE (listing_product_category.agent_uid =4)
GROUP BY listing_product_category.agent_uid";
	$query = $this->db->query($sql);
	return $query->result();  
	}

	
	
	function list_of_branch($agent_uid=0)
	{
	
	$sql="SELECT branch.location_id,branch.address FROM shop_brand INNER JOIN branch ON (shop_brand.agent_uid = branch.agent_uid) WHERE (shop_brand.brand_status =1 AND shop_brand.agent_uid =$agent_uid)";
	return $query = $this->db->query($sql);
	
	}
	
	function featureproductlist($category_id=0)
	{
		
	$sql="SELECT listing_product.product_name , listing_product_category.product_id FROM listing_product_category INNER JOIN listing_product ON (listing_product_category.product_id = listing_product.product_id) WHERE (listing_product_category.catid_label_2 =$category_id) ORDER BY listing_product.created_date DESC LIMIT 0, 4";
	return $query = $this->db->query($sql);

	}
	
	
	
	
	function selloffer_list($cetid_label_1=0)
	{
	$sql="SELECT
    sell_offer.offer_title
    , sell_offer.sell_offer_id
FROM
    listing_product_category
    INNER JOIN listing_status 
        ON (listing_product_category.product_id = listing_status.product_id)
    INNER JOIN sell_offer 
        ON (listing_status.sell_offer_id = sell_offer.sell_offer_id)
WHERE (listing_product_category.catid_label_1 =$cetid_label_1)
GROUP BY listing_product_category.catid_label_1, listing_status.sell_offer_id;";
		return $query = $this->db->query($sql);
		//return $query->result();
	
	}
	
	
	function selloffer_category_list($cetid_label_1=0,$sell_offer_id=0)
	{
	$sql="SELECT
    listing_product_category.catid_label_2
    , product_category.category_name
FROM
    listing_product_category
    INNER JOIN listing_status 
        ON (listing_product_category.product_id = listing_status.product_id)
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_2 = product_category.category_id)
WHERE (listing_product_category.catid_label_1 =$cetid_label_1
    AND listing_status.sell_offer_id =$sell_offer_id)
GROUP BY listing_product_category.catid_label_2";
    return $query = $this->db->query($sql);
	
	}
	
	function selloffer_subcategory_list($cetid_label_2=0,$sell_offer_id=0)
	{
		$sql="SELECT
    listing_product_category.catid_label_3
    , product_category.category_name
FROM
    listing_product_category
    INNER JOIN listing_status 
        ON (listing_product_category.product_id = listing_status.product_id)
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_3 = product_category.category_id)
WHERE (listing_product_category.catid_label_2 =$cetid_label_2
    AND listing_status.sell_offer_id =$sell_offer_id)
GROUP BY listing_product_category.catid_label_3";
 return $query = $this->db->query($sql);	
	
	}
	
	function selloffer_subsubcategory_list($catid_label_3=0,$sell_offer_id=0)
	{
		$sql="SELECT 
		listing_product_category.catid_label_4
    , product_category.category_name
FROM
    listing_product_category
    INNER JOIN listing_status 
        ON (listing_product_category.product_id = listing_status.product_id)
    INNER JOIN product_category 
        ON (listing_product_category.catid_label_4 = product_category.category_id)
WHERE (listing_product_category.catid_label_3 =$catid_label_3
    AND listing_status.sell_offer_id =$sell_offer_id)
GROUP BY listing_product_category.catid_label_4";
 return $query = $this->db->query($sql);	
	
	}
	
	function special_offer($cetid_label_1=0)
	{
	 
	 
	 $sql="SELECT
    listing_product_category.agent_uid
    , shop_details.shop_name
	, users.subdomain_name
	, listing_product.product_name
	, listing_product.slug AS product_slug
	, product_category.category_name
	, product_category.slug
    FROM
    listing_product_category
    INNER JOIN product_category ON (listing_product_category.catid_label_1 = product_category.category_id)
    INNER JOIN shop_details ON (listing_product_category.agent_uid = shop_details.agent_uid)
	LEFT JOIN users ON (shop_details.agent_uid = users.uid)
	INNER JOIN listing_product ON (listing_product_category.product_id = listing_product.product_id)
    WHERE (listing_product_category.catid_label_1 =$cetid_label_1  AND listing_status.special_offer =1)
    GROUP BY listing_product_category.agent_uid ORDER BY listing_product.created DESC
    LIMIT 0,10 ";

     return $this->db->query($sql);
	
	}


	
	function brand_shop($cetid_label_1=0)
	{

		
	$sql="SELECT listing_product_category.agent_uid , shop_details.shop_name , users.subdomain_name
	FROM listing_product_category
	INNER JOIN shop_details ON (listing_product_category.agent_uid = shop_details.agent_uid)
	INNER JOIN shop_brand ON (shop_details.agent_uid = shop_brand.agent_uid)
	LEFT JOIN users ON (shop_details.agent_uid = users.uid)
	WHERE (listing_product_category.catid_label_1 =$cetid_label_1 AND shop_brand.brand_status =1)
	GROUP BY listing_product_category.agent_uid LIMIT 0,10";
    return $this->db->query($sql);	
	
	}
	
	function category_custom_list($parent_id=0)
	{
	
		$agent_uid= $this->uri->segment(3,0);
		$this->db->select();
		$this->db->where('parent_id',$parent_id);
		$this->db->where('agent_uid',$agent_uid);
		$this->db->order_by("parent_id", "asc"); 
		return $this->db->get('product_category_custom');
	
	}
	
	function shop_type($agent_uid=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('category_id',$category_id);
		$this->db->where('agent_uid',$agent_uid);
		$query=$this->db->get('shop_category');
		return $rows=$query->result();
		//return $parent_id=$rows[0]->category_id;
		
		 
	}
	
	function category_parent_id($category_id=0){
	
		$this->db->select();
		$this->db->where('category_id',$category_id);
		$query=$this->db->get('product_category');
		$rows=$query->result();
		return $parent_id=$rows[0]->parent_id;
		
		 
	}
	
	function category_super_parent($category_id=0){
	
		$this->db->select();
		$this->db->where('category_id',$category_id);
		$query=$this->db->get('product_category');
		$rows=$query->result();
		$parent_id=$rows[0]->parent_id;
		$this->db->where('category_id',$parent_id);
		$query=$this->db->get('product_category');
		$rows1=$query->result();
		return $rows1[0]->parent_id;
		 
	}
	
	
	
	function category_parent($id=0)
	{
		if($id > 0){
		$this->db->select('category_name');
		$this->db->from('product_category');
		$this->db->where('category_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->category_name;
		}else{
		return "Parent lavel";
		}
	}
	
	
	function category_name($id=0)
	{
		
		if($id > 0){
		$this->db->select('category_name');
		$this->db->from('product_category');
		$this->db->where('category_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->category_name;
		}
	}
	
	function category_custom_name($id=0)
	{
		
		$this->db->select('category_name');
		$this->db->from('product_category');
		$this->db->where('category_id',$id);
		$query=$this->db->get();
		
		$this->db->select('category_name');
		$this->db->from('product_category_custom');
		$this->db->where('category_id',$id);
		$this->db->where('agent_uid', $this->uri->segment(3,0));
		$query_cus=$this->db->get();
		
		if($query->num_rows() > 0){
		$row=$query->result();
		return $row[0]->category_name;
		}else if($query_cus->num_rows() > 0){
		$row=$query_cus->result();
		return $row[0]->category_name;
		}else{
		return false;
		}
	
	}
	
	/* this function use for under template category select*/
	
	function get_template_category_check($category_id=array()){
	
		$this->db->select('category_id');
		$query=$this->db->get('product_template_manage');
		$query-> num_rows();
		//exit();
		$stack=array();
		$i=0;
		foreach ( $query->result() as $row ){
		if($row->category_id ==""){
		$stack[$i]=$row->category_id;
		}
		$i++;
		}
		
		
		if($query-> num_rows() == count($stack))
		{
			return $category_id;		
		}else{
			
			$serialize_id=array();
			$i=0;
			foreach ( $query->result() as $row ){
				$serialize_id[$i]=unserialize($row->category_id);
				$i++;
			}
			$serializeid=$this->array_flatten_recursive($serialize_id);
			return $result = array_diff($category_id,$serializeid);
			
		}
				 
	}
	
	function array_flatten_recursive($array) { 
	   if (!$array) return false;
	   $flat = array();
	   $RII = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
	   foreach ($RII as $value) $flat[] = $value;
	   return $flat;
	}

	/* this function use for under template category select*/
	
	function get_image_category_check($category_id=array()){
	
		$this->db->select('category_id');
		$query=$this->db->get('settings_image_size');
		$query-> num_rows();
		//exit();
		$stack=array();
		$i=0;
		foreach ( $query->result() as $row ){
		if($row->category_id ==""){
		$stack[$i]=$row->category_id;
		}
		$i++;
		}
		
		
		if($query-> num_rows() == count($stack))
		{
			return $category_id;		
		
		}else{
			
			$serialize_id=array();
			$i=0;
			foreach ( $query->result() as $row ){
				$serialize_id[$i]=unserialize($row->category_id);
				$i++;
			}
			$serializeid=$this->array_flatten_recursive($serialize_id);
			return $result = array_diff($category_id,$serializeid);
			
		}
				 
	}
	
		
	function get_template_category($product_template_manage_id=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('product_template_manage_id',$product_template_manage_id);
		$query=$this->db->get('product_template_manage');
		$row=$query->result();
		if($query-> num_rows() >0){
		$serialize_id=unserialize($row[0]->category_id);
		if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
    	return $category_id;
		}else{
		return false;
		}
		}else{
		return false;
		}
				 
	}
	
	function get_image_size_category($settings_image_size_id=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('settings_image_size_id',$settings_image_size_id);
		$query=$this->db->get('settings_image_size');
		$row=$query->result();
		if($query-> num_rows() >0){
		$serialize_id=unserialize($row[0]->category_id);
		if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
    	return $category_id;
		}else{
		return false;
		}
		}else{
		return false;
		}
				 
	}
	
	/* use custom category for every shop */
	
	function get_custom_parent_category($agent_uid=0){
	$sql="SELECT product_category.parent_id FROM shop_category INNER JOIN product_category  ON (shop_category.category_id = product_category.category_id) WHERE (shop_category.agent_uid=$agent_uid) GROUP BY product_category.parent_id";
return $this->db->query($sql);
}
	
	function get_custom_category($parent_id=0){
	$sql1="SELECT shop_category.category_id FROM product_category INNER JOIN shop_category  ON (product_category.category_id = shop_category.category_id) WHERE (product_category.parent_id=$parent_id)";
return $this->db->query($sql1);
	}
	
	function category_custom_listing($agent_uid=0)
	{
		
		$this->db->select();
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->order_by("category_id", "DESC"); 
		return $this->db->get('product_category_custom');
		
	}
	
	
	function category_list($menu_id=0){
   		
		$this->db->select();
		$this->db->where("parent_id",0); 
		$this->db->order_by("category_id", "asc"); 
		$query=$this->db->get('product_category');
		
		$tree = "";					// Clear the directory tree
		$this->depth = 1;					// Child level depth.
		$top_level_on = 1;			// What top-level category are we on?
		$exclude = array();			// Define the exclusion array
		array_push($exclude, 0);	// Put a starting value in it
		$tree .= '<select class="select" name="parent_id" id="parent_id" ><option selected="selected" value=0 >'.$this->lang->line('select_level').'</option>'; 
		
		foreach ($query -> result() as $nav_row ){

		
		$goOn = 1;			
		for($x = 0; $x < count($exclude); $x++ )
			{
				if ( $exclude[$x] == $nav_row->category_id )
				{
				$goOn = 0;
				break;	
				}
			}
		if ( $goOn == 1 )
			{
			$selected = ($menu_id === $nav_row->category_id) ? 'selected="selected"' : ''; 
			$tree .= '<option value="'.$nav_row->category_id.'" '.$selected .' >'.$nav_row->category_name . "</option>";
	    	
			array_push($exclude, $nav_row->category_id);
			if ( $nav_row->category_id < 6 )
			{ $top_level_on = $nav_row->category_id; }
		    $tree .=$this->build_child($nav_row->category_id,$menu_id);	 
			}
		
		}
	return $tree .= '</select>';  
	}

	function build_child($oldID,$menu_id=0)	
	{
		
		global $exclude;
		//echo $menu_id;			
		$tempTree="";
		
	     $this->db->select('product_category.category_id,product_category.parent_id,product_category.category_name');
		
		$this->db->where('parent_id',$oldID);
		$query=$this->db->get('product_category');
		foreach ( $query->result() as $child ){
		
			if ( $child->category_id != $child->parent_id )
			{
		
				$selected = (  $menu_id == $child->category_id) ? 'selected="selected"' : '';
				$tempTree .= '<option value="'.$child->category_id.'" rel="'.$this->depth.'" '.$selected .' >';
				for ( $c=0;$c<$this->depth;$c++ )			
				{ $tempTree .= "&nbsp;&nbsp;&nbsp;"; }
				for ( $c=0;$c<$this->depth;$c++ )		
				{ $tempTree .= ">"; }
				$tempTree .= "" . $child->category_name. "</option>";
				$this->depth++;		
				$tempTree .=$this->build_child($child->category_id);
				$this->depth--;	
				if(is_array($exclude)){
					array_push($exclude,$child->category_id);	
				}
			}
		}
	 
		return $tempTree;	
	}
	
	

	
}
?>
