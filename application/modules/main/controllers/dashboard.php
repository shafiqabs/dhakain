<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model(array('main/productcategory_model','main/product_model'));

    }

	function index()
	{
        $this->data['title']="Welcome DHAKA IN.:|:.Shops";
        $this->data['locations'] = $this->db->where(array('parent_id'=>2,'status'=>1))->order_by('settings_name','asc')->get('settings')->result();;

        $wheres['product_group']='services';
        $this->data['getServiceCategories'] = $this->productcategory_model->getServiceCategories($wheres);
        $this->load->view('main/dashboard/dashboard_view',$this->data);	//$this->load->view('dashboard/inner_view');
	}
	
	function dashboard_offer()
	{
	 sleep(2);
	 $id=$this->input->post('id');
	 $offer_name=$this->input->post('offer_name');
	 $data['offer_name']=$offer_name;
	 $this->load->view('dashboard/inner_view',$data);
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */