<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_setting_service extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/image_setting_service_model','admin/product_category_model'));
	}

	function index()
	{

		$data['title']=$this->lang->line('image_setting_category');
		$this->load->view('admin/image_setting/image_setting_service_view',$data);

	}

	function image_service_category()
	{

		$data['title']=$this->lang->line('image_setting_category');
		$this->load->view('admin/image_setting/image_setting_service_view',$data);

	}

	function image_setting_service_add()
	{
		$this->input->post('settings_image_size_id');
        $data['title']=$this->lang->line('image_setting_category');
		$this->image_setting_service_model->image_setting_service_add();
		redirect('settings/image_setting/image_service_category/'.$this->input->post('settings_image_size_id'));

	}

	function image_setting_filter_service()
	{
		$data['settings_image_size_id']=$this->input->post('id');
		$this->load->view('admin/image_setting/image_setting_filter_service_view',$data);

	}

     function image_setting_single_service()
	{
		$data['title']=$this->lang->line('image_setting_single_service');
		$this->load->view('admin/image_setting/image_setting_single_service_view',$data);
	}

	function image_setting_single_service_add()
	{
        $data['title']=$this->lang->line('image_setting_single_service');
		$this->image_setting_service_model->image_setting_single_service_insert();
		redirect('settings/image_setting/image_setting_single_service');
	}

    function image_setting_single_service_edit()
	{
		$data['title']=$this->lang->line('service_single_template');
        $this->db->where('settings_image_size_id',$this->uri->segment(4,0));
		$query=$this->db->get('settings_image_size');
		$data['queryup']=$query->result();
		$this->load->view('admin/image_setting/image_setting_single_service_view',$data);
	}

    function image_setting_single_service_delete()
	{
		if(is_array($this->input->post('list'))){
            $this->image_setting_service_model->image_setting_single_service_multidelete();
        }else{
            $this->image_setting_service_model->image_setting_single_service_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/image_setting/image_setting_single_service');

	}



	function image_setting_service_manage()
	{
		$data['title']=$this->lang->line('image_setting_product');
		$this->load->view('admin/image_setting/image_setting_service_manage_view',$data);
	}


	function image_setting_service_insert()
	{
		$this->form_validation->set_rules('settings_image_name','image size name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('large_image_width','large image width name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('large_image_height','large image height name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('square_image_width','square image width name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('square_image_height','square image height name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('thumb_image_width','thumb image width name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('thumb_image_height','thumb image height name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('small_image_width','small image width name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('small_image_height','small image height name', 'trim|required|xss_clean');

		$settings_image_size_id=$this->input->post('settings_image_size_id');
		$this->form_validation->set_rules('settings_image_size_id');
		$this->form_validation->set_rules('old_settings_image_size_name');
		$this->form_validation->set_rules('status');
		if ($this->form_validation->run() == FALSE)
		{

			$data['title']=$this->lang->line('image_setting_product');
		    $this->load->view('admin/image_setting/image_setting_service_manage_view',$data);
        }
           else
		{
			   if($this->input->post('settings_image_size_id') > 0){

				   $this->image_setting_service_model->image_setting_service_update();
			   }else{
				   $this->image_setting_service_model->image_setting_service_insert();
			   }
			   redirect('settings/image_setting/image_setting_service_manage');
		}
	}

    function image_setting_service_edit()
	{

		$data['title']=$this->lang->line('image_setting_product');
		$this->db->where('settings_image_size_id',$this->uri->segment(4,0));
		$query=$this->db->get('settings_image_size');
		$data['queryup']=$query->result();
		$this->load->view('admin/image_setting/image_setting_service_manage_view',$data);

	}

	function image_setting_service_list()
	{
		$data['title']=$this->lang->line('image_setting_product_list');
        $this->load->view('admin/image_setting/image_setting_service_list_view',$data);
	}



	function image_setting_service_delete()
	{
        if(is_array($this->input->post('list'))){
            $this->image_setting_service_model->image_setting_service_multidelete();
        }else{
            $this->image_setting_service_model->image_setting_service_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/image_setting/image_setting_service_list');
	}






}