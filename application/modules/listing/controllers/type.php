<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/product_model','listing/type_model'));
		//$this->output->enable_profiler(TRUE);
		
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

        $fromdata=$this->input->post();

        if (!empty($fromdata)) {
            $this->save($access_slug, $productInfo[0]->slug,$product_id);
        }

        $this->load->view('listing/type/edit_view',$data);

    }

    private function save($access_slug=NULL,$slug=NULL,$product_id=0){


        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->type_model->update($agent_uid, $product_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        redirect($this->uri->segment(1,NULL).'/type/'.$access_slug.'/'.$slug);

    }


	

	
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */