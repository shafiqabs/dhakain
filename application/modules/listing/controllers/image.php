<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/product_model','listing/image_model'));
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
        $this->load->view('listing/image/product_image_view',$data);

    }

    public function gallery($access_slug=NULL,$slug=NULL)
    {

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
            $this->save_gallery($access_slug,$slug);
        }
        $this->session->set_flashdata('success_msg',$this->lang->line('gallery_msg'));
        $this->load->view('listing/image/product_image_view',$data);


    }
    private function save_gallery($access_slug=NULL,$slug=NULL){

        $data=$this->input->post();
        $this->image_model->saveGallery($access_slug, $slug,$data);
    }

    public function upload($access_slug,$slug)
    {
        $this->image_model->uploadImage($access_slug,$slug);

    }

    function single($access_slug,$slug)
    {
        $data=$this->input->post('save_type');
        if (!empty($data)) {
            $this->image_model->saveImageUpload($access_slug,$slug,$data);
        }
        $this->session->set_flashdata('success_msg',$this->lang->line('image_msg'));
        redirect($this->uri->segment(1,NULL).'/image/'.$access_slug.'/'.$slug);

    }


		
	function product_deleteimage(){
	
		$agent_uid=$this->uri->segment(4,0);
		$product_id=$this->uri->segment(5,0);
		$product_image_id=$this->uri->segment(6,0);

        $this->db->select('image_name');
        $this->db->where('product_image_id',$product_image_id);
		$result=$this->db->get('listing_product_image');
		$rows=$result->result();
	
		$delete_pic =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/large/'.$rows[0]->image_name;
		$delete_pic_square =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/square/'.$rows[0]->image_name;
		$delete_pic_thumb =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/thumb/'.$rows[0]->image_name;
		$delete_pic_small =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/small/'.$rows[0]->image_name;
        if (file_exists($delete_pic))
        {
            unlink($delete_pic);
            unlink($delete_pic_square);
            unlink($delete_pic_thumb);
            unlink($delete_pic_small);
        }

		$this->db->where('product_image_id',$product_image_id);
		$this->db->delete('listing_product_image');
		$this->session->set_flashdata('success_msg',$this->lang->line('image_delete_msg'));
		redirect('seller/listing_product/add_listing_image/'.$agent_uid.'/'.$product_id);
	
	}


	
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */