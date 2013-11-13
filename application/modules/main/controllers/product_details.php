<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_details extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function product_details()
	{
		$this->load->view('product_details/product_details_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */