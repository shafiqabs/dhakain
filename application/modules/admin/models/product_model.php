<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @category product function
* @version 1.0
*/

class Product_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function product_details($hid)
	{
	    	
		$this->db->select('listing_product.product_id,listing_product.agent_uid,listing_product.product_name,listing_product_category.*');
		$this->db->from('listing_product');
		$this->db->join('listing_product_category','listing_product.product_id = listing_product_category.product_id','inner');
		$this->db->where('listing_product.product_id',$hid);
		$query=$this->db->get();
		return $query->result();
		
		
	}
	
	

	
	function product_edit_view(){
	
		$product_id= $this->uri->segment(4,0);
		$this->db->select();
		$this->db->from('listing_product');
		$this->db->join('listing_status','listing_product.product_id = listing_status.product_id','inner');
		$this->db->join('product_notifications','listing_product.product_id = product_notifications.product_id','inner');
		$this->db->where('listing_product.product_id',$product_id);
		$query=$this->db->get();
		return $query->result();


	}
	
	
	
	function get_product_template_view($categoryid=0)
	{
		$id=$this->get_product_template_id($categoryid);
		$this->db->where('product_template_manage_id',$id);
		$query=$this->db->get('product_template_manage');
		if($query-> num_rows() >0){
		return $query->result();
		}else{
		return false;
		}
	}
	
	function get_product_template_id($categoryid=0)
	{
		
		$this->db->select();
		$query=$this->db->get('product_template_manage');
		$query-> num_rows();
		foreach ( $query->result() as $row ){
			if(in_array($categoryid,unserialize($row->category_id))){
					return $row->product_template_manage_id;
			}
		}
	}
	
	
	function get_image_size_view($categoryid=0)
	{
		$id=$this->get_image_size_id($categoryid);
		$this->db->where('settings_image_size_id',$id);
		$query=$this->db->get('settings_image_size');
		if($query-> num_rows() >0){
		return $query;
		}else{
		return false;
		}
	}
	
	function get_image_size_id($categoryid=0)
	{
		
		$this->db->select();
		$query=$this->db->get('settings_image_size');
		$query-> num_rows();
		foreach ( $query->result() as $row ){
			if(in_array($categoryid,unserialize($row->category_id))){
					return $row->settings_image_size_id;
			}
		}
	}
	
	function product_main_image($product_id=0)
	{
		$this->db->select('image_square_path');
		$this->db->from('listing_product_image');
		$this->db->where('product_id',$product_id);
		$this->db->where('listing_product_image.show_default',1);
		$result=$this->db->get();
		if($result ->num_rows() >0){
		$largeimage=$result->result();
		return $largeimage[0]->image_square_path;
		}else{
		$this->db->select('image_square_path');
		$this->db->from('listing_product_image');
		$this->db->where('product_id',$product_id);
		$this->db->order_by('product_image_id','random');
		$result=$this->db->get();
		if($result ->num_rows() >0){
		$largeimage=$result->result();
		return $largeimage[0]->image_square_path;
		}else{
		return false;
		}
		}
	}
	
	function sell_offer_list()
	{
		$this->db->select();
		$this->db->order_by("sell_offer_id", "asc"); 
		return $this->db->get('sell_offer');
	}


	
	
}
?>
