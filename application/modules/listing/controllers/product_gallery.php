<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/product_model','listing/product_gallery_model'));
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
        $data['productGalleryImage']=$this->product_gallery_model->productGalleryImage($agent_uid , $product_id);
        $this->load->view('listing/product_gallery/product_gallery_view',$data);

    }

    public function save($access_slug=NULL,$slug=NULL){

        $data=$this->input->post();
        if (!empty($data)) {
            $this->product_gallery_model->saveGallery($access_slug, $slug,$data);
            $this->session->set_flashdata('success_msg',$this->lang->line('gallery_msg'));
        }
        redirect($this->uri->segment(1,NULL).'/product_gallery/'.$access_slug.'/'.$slug);

    }

    public function upload($access_slug,$slug)
    {
        $this->product_gallery_model->uploadImage($access_slug,$slug);

    }

	function delete($access_slug,$slug){

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $productInfo=$this->product_model->productInformation(array('product_id'),$agent_uid , $slug);
        $product_id= $productInfo[0]->product_id;
        $this->session->set_flashdata('success_msg',$this->lang->line('image_delete_msg'));
        $this->product_gallery_model->galleryDelete($agent_uid,$product_id);
		redirect($this->uri->segment(1,NULL).'/product_gallery/'.$access_slug.'/'.$slug);
	
	}


    function single_delete($access_slug,$slug,$product_gallery_id){

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $productInfo=$this->product_model->productInformation(array('product_id'),$agent_uid , $slug);
        $product_id= $productInfo[0]->product_id;
        $this->session->set_flashdata('success_msg',$this->lang->line('image_delete_msg'));
        $this->product_gallery_model->gallerySingleDelete($agent_uid,$product_id,$product_gallery_id);
		redirect($this->uri->segment(1,NULL).'/product_gallery/'.$access_slug.'/'.$slug);

	}


	
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */