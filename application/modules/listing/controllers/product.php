<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/product_model'));
		//$this->output->enable_profiler(TRUE);
		
	}


		
function edit($access_slug,$slug){



    $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
    $data['store_name'] = $this->storeInfo[0]->shop_name;
    $agent_uid = $this->storeInfo[0]->agent_uid;
    $data['storeInfo']=$this->storeInfo;
    $data['access_slug'] = $access_slug;
    $data['title']=$this->lang->line('product');

    /*---------------List of product settings attribute-------*/
    $data['quantype'] = $this->settings_model->settingsUnderList($id=67);
    $data['expired'] = $this->product_model->dayUnderList($id=124);
    $data['prostatus'] = $this->settings_model->settingsUnderList($id=11);
    $data['selloffer'] = $this->product_model->sellOfferList();



    /*----------------  Information of product ----------------------*/


    $productInfo=$this->product_model->productInformation(array('product_id','product_name','slug'),$agent_uid , $slug);
    $data['productInfo']=$productInfo;
    $product_id= $productInfo[0]->product_id;
    $data['queryup']=$this->product_model->editProduct($slug);
    $data['selected_category']=$this->product_model->typeProduct($agent_uid , $product_id);
    $data['image_path']=$this->product_model->productMainImage($product_id,$agent_uid,$product_id);

   // print_r( $data['selected_category']);
     $catid_label_2 = $data['selected_category'][0]-> catid_label_2;
     if($catid_label_2 > 0){
         $data['grouping'] = $this->product_model->getProductGrouping($catid_label_2);
         $data['globalGrouping'] = $this->product_model->getProductGlobalGrouping($catid_label_2);
     }


    $fromdata=$this->input->post();
    if (!empty($data)) {
        $this->save($access_slug,$slug,$product_id,$fromdata);
    }
    if($this->storeInfo[0]->listing_type =="123"){

        $this->load->view('listing/product/information_view',$data);
    }else{
        $this->load->view('listing/product/product_view',$data);
    }




}

function insert($access_slug=NULL){

    $data=$this->input->post();
    if (!empty($data)) {
        $this->save($access_slug);
    }


}

private function save($access_slug=NULL, $slug=NULL,$product_id=0)
{

    $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
    $data=$this->input->post();
    $this->check_validation();
        if ($this->form_validation->run()) {

            if($product_id > 0 ){

                $this->product_model->update($product_id,$data);
                $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));

            }else{

                $slug=$this->product_model->insert($agent_uid,$data);
                $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));


            }
            redirect($this->uri->segment(1,NULL).'/product/'.$access_slug.'/'.$slug);

        }


}



function check_validation()
{

		$this->form_validation->set_rules('product_name','Product name','required|trim');	
	   	$this->form_validation->set_rules('price','Price','trim');
		$this->form_validation->set_rules('discount_price');
		$this->form_validation->set_rules('quantity','Quantity','trim');
	    $this->form_validation->set_rules('quantity_type');
        $this->form_validation->set_rules('brand_name');
		$this->form_validation->set_rules('day','trim');
        $this->form_validation->set_rules('month','trim');
        $this->form_validation->set_rules('year','trim');

		$this->form_validation->set_rules('condition_id');
		$this->form_validation->set_rules('show_home');
		$this->form_validation->set_rules('special_offer');	
		$this->form_validation->set_rules('feature_list');		
		$this->form_validation->set_rules('discount_list');
		$this->form_validation->set_rules('status_id');

	    $this->form_validation->set_rules('share_facebook');
		$this->form_validation->set_rules('compare_another');
        $this->form_validation->set_rules('notification_wishlist');
		$this->form_validation->set_rules('notification_reminder');
		$this->form_validation->set_rules('notification_region');
		$this->form_validation->set_rules('notification_pricedrop');
		$this->form_validation->set_rules('notification_comments');
		$this->form_validation->set_rules('notification_enough_info');
		$this->form_validation->set_rules('notification_contactus');
		$this->form_validation->set_rules('description');
		
}


function get_search_product($catID=0)
{

    $q=strtolower($_REQUEST['q']);
    $this->product_model->getSearchProduct($catID,$q);
}

function get_brand_list()
{
    $q=strtolower($_REQUEST['q']);
    $this->product_model->getSearchBrand($q);
}


}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */