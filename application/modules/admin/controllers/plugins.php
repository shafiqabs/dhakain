<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plugins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model(array('admin/settings_model','admin/paging_model'));
		//$agent_uid= $this->uri->segment(3,0);
		//$this->access_model->cotroller_access("admin",$agent_uid);
		//$this->output->enable_profiler(TRUE);
		
	}

	function index()
	{
		
		$data['title']=$this->lang->line('plugins_add');
		$this->load->view('admin/plugins/plugins_view',$data);
		
		
	}
	
	function plugins_list()
	{
		
		$data['title']=$this->lang->line('plugins_list');
		$this->load->view('admin/plugins/plugins_list_view',$data);
		
		
	}
	
	
	function plugins_add()
	{
		$data['title']="Manage plugins";
		
		$plugin_name=$this->input->post('plugin_name');
	   	$old_plugin_url=$this->input->post('old_plugin_url');
		$plugin_url=$this->input->post('plugin_url');
		$status=$this->input->post('status');
	   	$this->form_validation->set_rules('plugin_url');
				
		$this->form_validation->set_rules('plugin_name','Plugin name', 'trim|required|xss_clean');
		if( $plugin_url=="" || $plugin_url != $old_plugin_url ){
		$this->form_validation->set_rules('plugin_url','Plugin URL name ','trim|required|callback_pluginsname');
		}
		$this->form_validation->set_rules('status');		
		$this->form_validation->set_rules('settings_plugin_id');		
		
		$plugin_url=strtolower(trim($plugin_url));
		
				
	   if ($this->form_validation->run() == FALSE)
	   {
		$this->load->view('admin/plugins/plugins_view',$data);
		}
		else
		{
		$settings_plugin_id=$this->input->post('settings_plugin_id');
		$array=array('plugin_name'=>trim($_POST['plugin_name']),'plugin_url'=>$plugin_url,'status' =>$status);
		$this->db->set($array);
		if($settings_plugin_id){
		$this->db->where('settings_plugin_id',$settings_plugin_id);
		$this->db->update('settings_plugin');
		$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
		redirect('settings/plugins/plugins_edit/'.$settings_plugin_id); 	
		}else{
	
		$this->db->insert('settings_plugin');
		$this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
		redirect('admin/plugins'); 	
		
		}
		
		
		}	

	
	}
	

	function pluginsname($name)
	{	
			$this->db->where(array('plugin_url'=>$name));
			if($this->db->count_all_results('settings_plugin')>0)
				{
				$this->form_validation->set_message('pluginsname', $name. ' %s'.$this->lang->line('duplicate_msg'));
				return FALSE;
				}else
				{
					return TRUE;
				}
	}
	

	function plugins_edit()
	{
	
	
		$plugin_id=$this->uri->segment(4,0);
		$sql=$this->db->where('plugin_id',$plugin_id)->from('settings_template')->get();
		if($sql->num_rows() > 0){
		$this->session->set_flashdata('warning_msg',$this->lang->line('plugins_restiction_edit'));
		redirect('settings/plugins/plugins_list');
		}	
		
		$this->db->where('settings_plugin_id',$plugin_id);
		$query= $this->db->get('settings_plugin');
		$data['queryup']=$query->result();
		
		$data['title']=$this->lang->line('plugins_edit');
		$this->load->view('admin/plugins/plugins_view',$data);
	
	}
	
		
	
	function plugins_delete($id)
	{
			
		if(is_array($this->input->post('list'))){
		
			$array=$this->input->post('list');
			$this->db->where_in('plugin_id',$array);
			$sql=$this->db->from('settings_template')->get();
			if($sql->num_rows() > 0)
			{
				$this->session->set_flashdata('warning_msg',$this->lang->line('plugins_restiction_edit'));
				redirect('settings/plugins/plugins_list');
				 
			}else{
			
				$this->db->where_in('settings_plugin_id',$array);
				$this->db->delete('settings_plugin');
				$this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));

			}
		}else{
		
			$plugin_id=$this->uri->segment(4,0);
			$sql=$this->db->where('plugin_id',$plugin_id)->from('settings_template')->get();
			if($sql->num_rows() > 0)
			{
				$this->session->set_flashdata('warning_msg',$this->lang->line('plugins_restiction_edit'));
				redirect('settings/plugins/plugins_list');
				 
			}else{
				$this->db->where('settings_plugin_id',$this->uri->segment(4,0));
		   		$this->db->delete('settings_plugin');
			}
			$this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
		}
		redirect('settings/plugins/plugins_list');
	
	}
	
	
	
	
}