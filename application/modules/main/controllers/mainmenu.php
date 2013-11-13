<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainmenu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function mainmenu_view()
	{
		
	$data['title']=$this->uri->segment(2,"NULL");
	$this->load->view($this->uri->segment(2,"NULL").'/'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}
	
	function newproduct_view()
	{
	
	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"0");
	$this->load->view('main/mainmenu/mainmenu_foods_view',$data);
	
	}

	function selloffer_view()
	{
	
	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"0");
	$this->load->view($this->uri->segment(2,"NULL").'/selloffer_'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}
	
	function categories_view()
	{
	
	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"0");
	$this->load->view($this->uri->segment(2,"NULL").'/categories_'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}
	
	function specialoffer_view()
	{
	
	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"0");
	$this->load->view($this->uri->segment(2,"NULL").'/specialoffer_'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}
	
	function brandshop_view()
	{
	
	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"25");
	$this->load->view($this->uri->segment(2,"NULL").'/brandshop_'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}

		
	function product_display_view()
	{
		$this->load->view('categories_products/products_display_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */