<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/settings_model','admin/util_model','admin/paging_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

	function index(){
        $data['title']=$this->lang->line('seller_dashboard');
        $this->load->view('admin/dashboard/dashboard_view',$data);
    }

    function dashboard_view()
	{
		
		echo "fbgdhghg";
		exit();
		$useraccess = $this->session->userdata('useraccess');
		$userid = $this->session->userdata('userid');
		$data['title']=$this->lang->line('seller_dashboard');
		$this->load->view('shop/shoplist_view',$data);
		redirect ('seller/shop/shop_view');
		/*if($useraccess == 1 || $useraccess == 2 ){
		   redirect ('admin/shop/shop_view');
		}else{
		  redirect ('listing_product/listing_product_view/'.$userid);
		}*/
		
	}
	
}