<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function categories_view()
	{
		
	$query=$this->settings_model->sell_offer_list($cetid_label_1=24);
			
		$uriID= $this->uri->segment(1,NULL);
		$get_uriID=$this->settings_model->get_uriID($uriID);
		echo $get_uriID; 
		//$this->load->view('categories_products/categories_products_view');
	}
	
	function product_display_view()
	{
		$this->load->view('categories_products/products_display_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */