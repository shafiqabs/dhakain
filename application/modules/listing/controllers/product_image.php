<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_image extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/product_model','listing/product_image_model'));
    }

    public function edit($access_slug,$slug){


        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $data['title']=$this->lang->line('listing_type');
        /*----------------  Information of product ----------------------*/
        $productInfo=$this->product_model->productInformation(array('product_id','product_name','slug'),$agent_uid , $slug);
        $data['productInfo']=$productInfo;
        $product_id= $productInfo[0]->product_id;
        $data['selected_category']=$this->product_model->typeProduct($agent_uid , $product_id);
        $this->load->view('listing/product_image/product_image_view',$data);

    }

    function save($access_slug,$slug)
    {

        $data=$this->input->post();
        if (!empty($data)) {
            $this->product_image_model->saveImageUpload($access_slug,$slug);
        }
        $this->session->set_flashdata('success_msg',$this->lang->line('image_msg'));
        redirect($this->uri->segment(1,NULL).'/product_image/'.$access_slug.'/'.$slug);

    }


		
	function delete($access_slug,$slug,$image_id){
	
        $this->product_image_model->deleteImage($access_slug,$slug,$image_id);
		$this->session->set_flashdata('success_msg',$this->lang->line('image_delete_msg'));
		redirect($this->uri->segment(1,NULL).'/product_image/'.$access_slug.'/'.$slug);
	
	}


	
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */