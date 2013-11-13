<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
        $this->load->model(array('main/productcategory_model','main/product_model'));
		//$this->output->enable_profiler(TRUE);
		
	}
	
	public function index()
	{
		$this->data['title']="Dashboard";

        $this->data['getSponsoredStore']=$query=$this->main_model->getSponsoredStore();
        $this->data['menuCategorylisting']=$query=$this->productcategory_model->allMenuCategorylisting();
        $this->data['searchProductCategories']=$query=$this->productcategory_model->listProductCategory($product_group='shops');
        $this->data['getProductFeatures']=$query=$this->product_model->getProductFeatures($product_group='shops',$listing_type=122,'new-in');
        $this->data['locations'] = $this->db->where(array('parent_id'=>2,'status'=>1))->order_by('settings_name','asc')->get('settings')->result();;
        $this->load->view('main/dashboard/dashboard_view',$this->data);
		

	}




    public function carousel2(){

        sleep(1);
        $this->data['result'] =$this->product_model->getIsHome();
        $this->load->view('main/carousel',$this->data);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */