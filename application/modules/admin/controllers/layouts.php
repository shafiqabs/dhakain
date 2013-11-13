<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layouts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model(array('admin/layouts_model'));
	}

	function index()
	{
		
		$data['title']=$this->lang->line('layouts_add');
		$this->load->view('admin/layouts/layouts_view',$data);
		
		
	}
	
	function layouts_list()
	{
		
		$data['title']=$this->lang->line('layouts_list');
		$this->load->view('admin/layouts/layouts_list_view',$data);
	}
	
	
	function layouts_add()
	{
		$data['title']=$this->lang->line('layouts_add');

		$settings_layout_id=$this->input->post('settings_layout_id');
		$layout_name=$this->input->post('layout_name');
	   	$old_layout_name=$this->input->post('old_layout_name');
        $up_filename = $_FILES['image_name']['name'];
	   	$this->form_validation->set_rules('layout_name');

		if( $layout_name=="" || $layout_name != $old_layout_name ){
		    $this->form_validation->set_rules('layout_name','Layout name ', 'trim|required|xss_clean|callback_layoutname');
		}
		
		$this->form_validation->set_rules('layout_type','Layout type', 'trim|required');
		$this->form_validation->set_rules('column_no');
		$this->form_validation->set_rules('layout_divide','Layout divide value','trim|required|layout_divide|callback_divideValue');
        if($up_filename){
            $this->form_validation->set_rules('image_name','You must','trim|image_name|callback_validateExtension');
        }
		$this->form_validation->set_rules('status');		
		$this->form_validation->set_rules('old_layout_name');		
	   
	    if ($this->form_validation->run() == FALSE)
	    {
		    $this->layouts();
	    }else{
            $this->layouts_model->uploadLayoutImage();
        }
	
	}
	

	function layoutsname($name)
	{	
			$this->db->where(array('plugin_url'=>$name));
			if($this->db->count_all_results('settings_layout')>0)
				{
				$this->form_validation->set_message('layoutsname', $name. ' %s'.$this->lang->line('duplicate_msg'));
				return FALSE;
				}else
				{
					return TRUE;
				}
	}
	
	function divideValue($layout_divide)
	{	
	    //$column_no=$this->input->post('column_no');
		$divide=explode(',',$layout_divide);
		$count=count($divide);
		$div=0;
		for( $i=0; $count >$i ; $i++){
		$div+=floatval($divide[$i]);
		}
		
		if($div > 921){
		$this->form_validation->set_message('divideValue', '%s '.$this->lang->line('layouts_restiction_size'));
		return FALSE;
		}else
		{
		return TRUE;
		}
		
	}

    function validateExtension($image_name) {

        $image_name = $_FILES['image_name']['name'];
        $extensions = array('.png', '.gif', '.jpg', '.jpeg','.PNG', '.GIF', '.JPG', '.JPEG');
        $extension = strtolower(strrchr($image_name,"."));
        if (!in_array($extension, $extensions))
        {
            $this->form_validation->set_message('validateExtension','%s '.$this->lang->line('image_extension_msg'));
            return false;

        }

    }
	

	function layouts_edit()
	{
	
	
		$settings_layout_id=$this->uri->segment(4,0);
		$sql=$this->db->where('layout_id',$settings_layout_id)->from('settings_template')->get();
		if($sql->num_rows() > 0)
		{
		$this->session->set_flashdata('warning_msg',$this->lang->line('layouts_restiction_edit'));
		redirect('settings/layouts/layouts_list');
		}	
		
		$this->db->where('settings_layout_id',$settings_layout_id);
		$query= $this->db->get('settings_layout');
		$data['queryup']=$query->result();
		
		$data['title']=$this->lang->line('layouts_edit');
		$this->load->view('admin/layouts/layouts_view',$data);
	
	}
	
		
	
	function layouts_delete($id)
	{
			
		$this->layouts_model->layoutsDelete($id);
        redirect('settings/layouts/layouts_list');
	
	}
	
	
	
	
}