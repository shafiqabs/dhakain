<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/settings_model','admin/paging_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

	function index()
	{

        $data['title']=$this->lang->line('settings_add');
		$this->load->view('admin/global_settings/settings_view',$data);
		
		
	}
	
	function settings_list()
	{
		
		$data['title']=$this->lang->line('settings_list');
		$this->load->view('admin/global_settings/settings_list_view',$data);
		
		
	}
	
	
	function settings_add()
	{
	
		$data['title']=$this->lang->line('settings_add');
		$parent_id=$this->input->post('parent_id');
		
		$settings_id=$this->input->post('settings_id');
		$parent_id=$this->input->post('parent_id');
		$settings_name=$this->input->post('settings_name');
		$old_settings_name=$this->input->post('old_settings_name');
		$status=$this->input->post('status');
		$this->form_validation->set_rules('settings_name');
		if( $settings_name=="" || $settings_name != $old_settings_name ){
			$this->form_validation->set_rules('settings_name','Settings name', 'trim|required|xss_clean|callback_settingsname');
		}
			
		$this->form_validation->set_rules('parent_id');
		$this->form_validation->set_rules('status');		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/global_settings/settings_view',$data);
		
		}else{


            $settings_name_url=url_title(strtolower($settings_name));
            $slug = $this->settings_model->slugUnify($settings_name_url,$parent_id);
            $array=array('parent_id'=>$parent_id,'settings_slug'=>$slug,'settings_name' =>trim($settings_name),'status' =>1);
			$this->db->set($array);
			if($settings_id > 0){
			$this->db->where('settings_id',$settings_id);
			$this->db->update('settings');
			$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
			redirect('settings/global_settings/settings_edit/'.$settings_id);
			}else{
			$this->db->insert('settings');
			$this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
			redirect('settings/global_settings',$data);
			}
			
		}
	
	}
	
	function settings_edit($id=0)
	{
	
		$this->db->where('settings_id',$id);
		$query= $this->db->get('settings');
		$data['queryup']=$query->result();
		
		$data['title']=$this->lang->line('settings_edit');
		$this->load->view('admin/global_settings/settings_view',$data);
	
	}
	
	function settings_update()
	{
	
		$data['title']=$this->lang->line('settings_edit');
		$settings_id=$this->input->post('settings_id');
		$parent_id=$this->input->post('parent_id');
		$settings_name=$this->input->post('settings_name');
		$old_settings_name=$this->input->post('old_settings_name');
		$this->form_validation->set_rules('settings_name');
		
		if( $settings_name=="" || $settings_name != $old_settings_name ){
		
		$this->form_validation->set_rules('settings_name','Settings name', 'trim|required|xss_clean|callback_settingsname');
		
		}


		$this->form_validation->set_rules('settings_id');
		$this->form_validation->set_rules('old_settings_name');
		$this->form_validation->set_rules('parent_id');
		$this->form_validation->set_rules('status');		
		if ($this->form_validation->run() == FALSE)
	    {
	    
		$this->load->view('settings/settingsedit_view',$data);
		}
		else
		{
	
		$array=array('parent_id'=>$parent_id,'settings_name' =>trim($settings_name),'status' =>1);
		$this->db->set($array);
		$this->db->where('settings_id',$settings_id);
		$this->db->update('settings');
		$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
		$data['title']="Settings Edit";
		$this->load->view('settings/settingsedit_view',$data);
		
		}	
	}
	

	function settingsname($name,$parent_id)
	{	
			$this->db->where(array('settings_name'=>$name,'parent_id'=>$parent_id));
			if($this->db->count_all_results('settings')>0)
				{
				$this->form_validation->set_message('settingsname', $name.' %s '.$this->lang->line('duplicate_msg'));
				return FALSE;
				}else
				{
					return TRUE;
				}
	}
	
	
	
	function settings_delete($id)
	{

		if(is_array($this->input->post('list'))){
			$array=$this->input->post('list');
			foreach( $array as $val ){
	
				$this->db->set(array('status'=>2));
				$this->db->where('settings_id',$val);
				$this->db->update('settings');
				
			}
		}else{
		
			$this->db->set(array('status'=>2));
			$this->db->where('settings_id',$this->uri->segment(5,0));
		    $this->db->update('settings');
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/global_settings/settings_list/'.$this->uri->segment(4,0));
	
	}
	
	
	
	
}