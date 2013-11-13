<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @paging function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function template_view_field_value($product_table){
	
			$product_id= $this->uri->segment(4,0);
			$this->db->where('product_id',$product_id);
			$query=$this->db->get($product_table);
			if($product_id >0 && $query->num_rows() >0 ){
				return $query->result();
			}else{
				$this->db->where('product_template_id',1);
				$query=$this->db->get($product_table);
				return $query->result();
			}
	}

}