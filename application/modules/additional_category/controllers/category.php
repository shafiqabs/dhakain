<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','admin/product_category_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

	function listing($access_slug){

        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $data['query']=$this->db->where(array('agent_uid'=>$agent_uid))->get('product_category');
        $data['title']=$this->lang->line('category_list');
        $this->load->view('additional_category/category/listing',$data);


    }

    function category_view($access_slug)
	{

        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $data['query']=$this->product_category_model->listSelectCategory($agent_uid);
        $data['title']=$this->lang->line('product_category_add');
		$this->load->view('additional_category/category/category_view',$data);
		
		
	}

	function edit($access_slug,$category_id)
	{

        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $data['query']=$this->product_category_model->listSelectCategory($agent_uid);

        $this->db->where(array('agent_uid' => $agent_uid,'category_id' => $category_id));
        $query= $this->db->get('product_category');
        $data['queryup']=$query->result();

        $data['title']=$this->lang->line('additional_product_category_edit');
        $this->load->view('additional_category/category/category_view',$data);
	
	}

    public function save($access_slug=NULL)
    {

        $data=$this->input->post();
        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $this->saveData($access_slug);
                $this->redirectToHome('category/'.$access_slug);
            }

        }
        $this->category_view($access_slug);

    }

    private function check_validation()
    {

        $this->form_validation->set_rules('category_name','category name', 'trim|required|xss_clean|callback_check_product_category');
        $this->form_validation->set_rules('category_id');
        $this->form_validation->set_rules('old_category_name');
        $this->form_validation->set_rules('parent_id');
        $this->form_validation->set_rules('status');
    }


    private function saveData($access_slug)
    {

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $category_id=$this->input->post('category_id');
        if (empty($category_id)) {
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            $this->product_category_model->insert($agent_uid);
        } else {
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            $this->product_category_model->update();
        }

    }


    function check_product_category($name){

        $category_id=$this->input->post('category_id');
        return $this->product_category_model->productCategoryName($name,$category_id);

    }


  	function ordering($access_slug)
	{

        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['parent'] = $this->product_category_model->listSelectCategory($agent_uid);
        $data['title']=$this->lang->line('ordering');
        $this->load->view('additional_category/category/ordering_view',$data);
		
	}
	
	function sorting($access_slug)
	{

        $data = $this->input->post('listItem');
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->product_category_model->additionalProductCategorySorting($data,$agent_uid);

	
	}

    function status($access_slug,$category_id=NULL){

        $this->product_category_model->status($category_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing/'.$access_slug);

    }




    function delete($access_slug,$category_id=NULL)
    {
        $this->product_category_model->delete($category_id);
        if($this->product_category_model->delete($category_id) != false){
            $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
        }else{
            $this->session->set_flashdata('warning_msg',$this->lang->line('delete_invalid_msg'));

        }
        $this->redirectToHome('listing/'.$access_slug);

    }

	
	function additional_product_category_delete()
	{

		if(is_array($this->input->post('list'))){

            $this->additional_product_category_model->category_multidelete();

        }else{

            $this->additional_product_category_model->category_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('seller/additional_product_category/additional_product_category_list/'.$this->uri->segment(4,0));
	
	}

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/additional_category/'.$redirect);
    }
	
	
	
	
}