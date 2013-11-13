<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paging_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	
	
	function settings_paging()
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
			
	        $base_url = site_url('admin/settings/settings_view');
			$total_rows = $this->db->count_all('settings');
			$paging = make_paging($base_url, $total_rows,4,10); 
			$this->db->limit(10,$start);
			$this->db->order_by("settings_id","desc"); 
			$query =$this->db->get('settings');
			return array($query,$paging);
	
	}
	
	function yarn_paging()
	{
	
		if($this->uri->segment(4))
		{
			if(is_numeric($this->uri->segment(4)))
			{
				$start = $this->uri->segment(4);
			}
			else
			{
				$start = 0;
			}
		}
		else
		{
			$start = 0;
		}
		$base_url = site_url('admin/yarn/yarn_view/');
		$total_rows = $this->db->count_all('yarn');
		$paging=make_paging($base_url, $total_rows,4,10); 
		$this->db->select();
		$this->db->order_by("created", "desc"); 
		$this->db->limit(10,$start);
		$query=$this->db->get('yarn');
		return array($query,$paging);
	
	}
	
	
	function price_paging()
	{
	
		if($this->uri->segment(4))
		{
			if(is_numeric($this->uri->segment(4)))
			{
				$start = $this->uri->segment(4);
			}
			else
			{
				$start = 0;
			}
		}
		else
		{
			$start = 0;
		}
		$base_url = site_url('admin/yarn/yarn_price_view/');
		$total_rows = $this->db->count_all('yarn');
		$data['paging']=make_paging($base_url, $total_rows,4,10); 
		$this->db->select();
		$this->db->limit(10,$start);
		$this->db->order_by("created", "desc"); 
		$data['query']=$this->db->get('yarn');
		return array($query,$paging);
	}
	
	function advertiment_paging()
	{
		
		    if($this->uri->segment(4)){
			if(is_numeric($this->uri->segment(4))){
			$start = $this->uri->segment(4,0);
			}else{
			$start = 0;
			}
			}else{
			$start = 0;
			}
			
	        $base_url = site_url('admin/advertisment/advertisment_view');
			$total_rows = $this->db->count_all('advertisment');
			$paging = make_paging($base_url, $total_rows,4,10); 
				
			$this->db->select();
			$this->db->from('advertisment');
			$this->db->limit(10,$start);
			$this->db->order_by("start_date", "asc"); 
			$query=$this->db->get();
			return array($query,$paging);
	
	}
	
	
	function resource_paging()
	{
		
		    if($this->uri->segment(4)){
			if(is_numeric($this->uri->segment(4))){
			$start = $this->uri->segment(4);
			}else{
			$start = 0;
			}
			}else{
			$start = 0;
			}
			
	        $base_url = site_url('admin/resource/resource_view');
			$total_rows = $this->db->count_all('resource');
			$paging = make_paging($base_url, $total_rows,4,10); 
				
			$this->db->select();
			$this->db->from('resource');
			$this->db->limit(10,$start);
			$this->db->order_by("created", "desc"); 
			$query=$this->db->get();
			return array($query,$paging);
	
	}
	
	
	function message_paging()
	{
		
		    if($this->uri->segment(4)){
			if(is_numeric($this->uri->segment(4))){
			$start = $this->uri->segment(4);
			}else{
			$start = 0;
			}
			}else{
			$start = 0;
			}
			
	        $base_url = site_url('admin/message/message_view');
			$total_rows = $this->db->count_all('resource');
			$paging = make_paging($base_url, $total_rows,4,10); 
				
			$this->db->select();
			$this->db->from('message');
			$this->db->limit(10,$start);
			$this->db->order_by("created", "desc"); 
			$query=$this->db->get();
			return array($query,$paging);
	
	}


	
	
}
?>