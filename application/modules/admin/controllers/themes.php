<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Themes extends CI_Controller {

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
		
		$data['title']=$this->lang->line('themes_add');
		$this->load->view('admin/themes/themes_view',$data);
		
		
	}
	
	function themes_list()
	{
		
		$data['title']=$this->lang->line('themes_list');
		$this->load->view('admin/themes/themes_list_view',$data);
		
		
	}
	
	
	function themes_add()
	{
		$data['title']=$this->lang->line('themes_add');
		
		$template_name=$this->input->post('template_name');
	   	$old_template_name=$this->input->post('old_template_name');
	   	$dashboard_publish=$this->input->post('dashboard_publish');	
		$status=$this->input->post('status');	
		$this->form_validation->set_rules('template_name');
		if(!$template_name && $template_name != $old_template_name){
		$this->form_validation->set_rules('template_name','Theme name','trim|required|themes_divide|callback_themesname');
		}

		$this->form_validation->set_rules('old_template_name');		
		$this->form_validation->set_rules('status');		
		$this->form_validation->set_rules('dashboard_publish');		
		$this->form_validation->set_rules('website_template_id');		
	

				
	    if ($this->form_validation->run() == FALSE)
	    {
		$this->load->view('settings/themes/themes_view',$data);
		}
		else
		{
		$website_template_id=$this->input->post('website_template_id');
	    $array=array('template_name'=>trim($_POST['template_name']),'dashboard_publish'=>$dashboard_publish,'status' =>$status);
		$this->db->set($array);
		if($website_template_id){
		$this->db->where('website_template_id',$website_template_id);
		$this->db->update('website_template');
		$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
		redirect('settings/themes/themes_edit/'. $website_template_id);	
		}else{
	
		$this->db->insert('website_template');
		$this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));	
		redirect('settings/themes'); 
		
		}
			
		
		
		}	
		

	
	}
	

	function themesname($name)
	{	
			$this->db->where(array('plugin_url'=>$name));
			if($this->db->count_all_results('website_template')>0)
				{
				$this->form_validation->set_message('themesname', $name. ' %s'.$this->lang->line('duplicate_msg'));
				return FALSE;
				}else
				{
					return TRUE;
				}
	}
	

	function themes_edit()
	{



        $website_template_id=$this->uri->segment(4,0);
		$sql=$this->db->where('template_name',$website_template_id)->from('settings_website')->get();
		if($sql->num_rows() > 0){
		$this->session->set_flashdata('warning_msg',$this->lang->line('themes_restiction_edit'));
		redirect('settings/themes/themes_list');
		}	
		
		$this->db->where('website_template_id',$website_template_id);
		$query= $this->db->get('website_template');
		$data['queryup']=$query->result();
		
		$data['title']=$this->lang->line('themes_edit');
		$this->load->view('admin/themes/themes_view',$data);
	
	}
	
		
	
	function themes_delete($id)
	{
			
		if(is_array($this->input->post('list'))){
		
			$array=$this->input->post('list');
			$this->db->where_in('template_name',$array);
			$sql=$this->db->from('settings_website')->get();
			if($sql->num_rows() > 0)
			{
				$this->session->set_flashdata('warning_msg',$this->lang->line('themes_restiction_edit'));
				redirect('settings/themes/themes_list');
				 
			}else{
			
				$this->db->where_in('website_template_id',$array);
				$this->db->delete('website_template');
				$this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));

			}
		}else{
		
			$template_name=$this->uri->segment(4,0);
			$sql=$this->db->where('template_name',$template_name)->from('settings_website')->get();
			if($sql->num_rows() > 0)
			{
				$this->session->set_flashdata('warning_msg',$this->lang->line('themes_restiction_edit'));
				redirect('settings/themes/themes_list');
				 
			}else{
				$this->db->where('website_template_id',$this->uri->segment(4,0));
		   		$this->db->delete('website_template');
			}
			$this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
		}
		redirect('settings/themes/themes_list');
	
	}
	
	
	
	
}