<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @paging function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paging_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	


function product_category_paging($per_page=10,$num_link=3)
{

            if(is_numeric($this->uri->segment(4,0))){
                $start = $this->uri->segment(4,0);
            }else{
                $start = 0;
            }

	        $base_url = site_url('settings/product_category/product_category_list');
			$total_rows = $this->db->count_all('product_category');
			$paging = make_paging($base_url, $total_rows,4,$per_page,$num_link); 
			$this->db->limit($per_page,$start);
			$this->db->order_by("parent_id","desc"); 
			$query =$this->db->get('product_category');
			return array($query,$paging);
	
}


function service_category_paging($per_page=10,$num_link=3)
{

            if(is_numeric($this->uri->segment(4,0))){
                $start = $this->uri->segment(4,0);
            }else{
                $start = 0;
            }

	        $base_url = site_url('settings/service_category/service_category_list');
			$total_rows = $this->db->where(array('category_type'=>2))->count_all_results('product_category');
			$paging = make_paging($base_url, $total_rows,4,$per_page,$num_link);
			$this->db->where(array('category_type'=>2));
            $this->db->limit($per_page,$start);
			$this->db->order_by("parent_id","desc");
			$query =$this->db->get('product_category');
			return array($query,$paging);

}


	

function shopping_mall_paging($per_page=10,$num_link=3)
{
		
			if($this->uri->segment(3)){
			if(is_numeric($this->uri->segment(3,0))){
			$start = $this->uri->segment(3);
			}else{
			$start = 0;
			}
			}else{
			$start = 0;
			}
			
	        $base_url = site_url('shopping_mall/shopping_mall_view');
			$total_rows = $this->db->count_all('shopping_mall');
			$paging = make_paging($base_url, $total_rows,3,$per_page,$num_link); 
			$this->db->select('shopping_mall_id,shopping_mall_name,location_id,status,business_phone');
		    $this->db->from('shopping_mall');
			$this->db->limit($per_page,$start);
			$this->db->order_by("shopping_mall_name", "asc"); 
			$query =$this->db->get();
			return array($query,$paging);
	
	}
	
	function shopping_under_paging($per_page=10,$num_link=3)
	{
		
			if($this->uri->segment(4)){
			if(is_numeric($this->uri->segment(4,0))){
			$start = $this->uri->segment(4);
			}else{
			$start = 0;
			}
			}else{
			$start = 0;
			}
			$shopping_mall_id=$this->uri->segment(3);
	        $base_url = site_url('shopping_mall/shopping_mall_view');
			$this->db->where('shop_shopping_mall.shopping_mall_id',$shopping_mall_id);
			$total_rows = $this->db->count_all('shop_shopping_mall');
			$paging = make_paging($base_url, $total_rows,3,$per_page,$num_link); 
			$this->db->select('shop_details.agent_uid,shop_details.shop_name,shop_details.location_id');
		    $this->db->from('shop_shopping_mall');
			$this->db->join('shop_details','shop_shopping_mall.agent_uid = shop_details.agent_uid','inner');
			$this->db->limit($per_page,$start);
			$this->db->where('shop_shopping_mall.shopping_mall_id',$shopping_mall_id);
			$this->db->order_by("shop_details.shop_name", "asc"); 
			$query =$this->db->get();
			return array($query,$paging);
	
	}

	
}
?>