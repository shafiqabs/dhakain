<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contentpage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('page_model');
	}

	function index()
	{
		$data['title']="Home";
		$this->load->view('dashboard/dashboard_view',$data);
		//$this->load->view('dashboard/inner_view');
	}
	
	function contentpage_view()
	{
	 sleep(2);
	 $view=$this->uri->segment('1',NULL);
	 $data['title']="Sell Guide";
	 $this->load->view('contentpage/'.$view,$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */