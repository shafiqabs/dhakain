<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/image_setting_model'));

		//$this->output->enable_profiler(TRUE);

	}

	function index()
	{
		$data['title']=$this->lang->line('image_setting_common');
		$this->load->view('admin/image_setting/image_setting_view',$data);
	}

    function image_setting_add()
	{
		$data['title']=$this->lang->line('image_setting_common');
        $settings_image_size_id=$this->input->post('settings_common_image_size_id');

        $this->form_validation->set_rules('settings_common_image_size_name','image size name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('large_image_width','large image width', 'trim|required|xss_clean');
		$this->form_validation->set_rules('large_image_height','large image height', 'trim|required|xss_clean');
		$this->form_validation->set_rules('crop_image_width','crop image width', 'trim|required|xss_clean');
		$this->form_validation->set_rules('crop_image_height','crop image height', 'trim|required|xss_clean');
		$this->form_validation->set_rules('crop_image_left','crop image left', 'trim|required|xss_clean');
		$this->form_validation->set_rules('crop_image_top','crop image top', 'trim|required|xss_clean');


		$this->form_validation->set_rules('settings_image_size_id');
		$this->form_validation->set_rules('old_settings_image_size_name');
		$this->form_validation->set_rules('status');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/image_setting/image_setting_view',$data);
			}
			else
			{
			   if($settings_image_size_id > 0){

				   $this->image_setting_model->image_common_update();
			   }else{
				   $this->image_setting_model->image_common_insert();
			   }
			   redirect('settings/image_setting');

			}
	}

    function image_setting_edit()
	{

		$data['title']=$this->lang->line('image_setting_common');
		$this->db->where('settings_common_image_size_id',$this->uri->segment(4,0));
		$query=$this->db->get('settings_common_image_size');
		$data['queryup']=$query->result();
		$this->load->view('admin/image_setting/image_setting_view',$data);

	}


	function image_setting_list()
	{
		$data['title']=$this->lang->line('image_setting_list');
		$this->load->view('admin/image_setting/image_common_list_view',$data);
	}


	function image_common_delete()
	{
        if(is_array($this->input->post('list'))){
            $this->image_setting_model->image_common_multidelete();
        }else{
            $this->image_setting_model->image_common_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/image_setting/image_setting_list');
	}





}