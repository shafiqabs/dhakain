<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foods extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('foods_model');
	}

	function foods_view()
	{
	

	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"25");
	//$this->load->view($this->uri->segment(2,"NULL").'/'.$this->uri->segment(2,"NULL").'_view',$data);
	$this->load->view($this->uri->segment(2,"NULL").'/categories_'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}
	
	function categories_foods_view()
	{
	

	$data['title']=$this->uri->segment(2,"NULL");
	$data['category_id']=$this->uri->segment(3,"25");
	$this->load->view($this->uri->segment(2,"NULL").'/categories_'.$this->uri->segment(2,"NULL").'_view',$data);
	
	}
	
	function product_display_view()
	{
		$this->load->view('categories_products/products_display_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */