<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/service_category_model','admin/paging_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

	function index()
	{

        $data['title']=$this->lang->line('service_category_add');
		$this->load->view('admin/service_category/service_category_view',$data);
		
		
	}
	
	 function service_category_list()
	{
		
		$data['title']=$this->lang->line('service_category_list');
		$this->load->view('admin/service_category/service_category_list_view',$data);
		
		
	}
	
		
	function service_category_edit()
	{
	
        $id=$this->uri->segment(4,0);
        $this->db->where('category_id',$id);
        $query= $this->db->get('product_category');
        $data['queryup']=$query->result();

        $data['title']=$this->lang->line('service_category_edit');
        $this->load->view('admin/service_category/service_category_view',$data);
	
	}
	
	function service_category_add()
	{

        $data['title']=$this->lang->line('service_category_add');
        $category_id=$this->input->post('category_id');
        $parent_id=$this->input->post('parent_id');
        $category_name=$this->input->post('category_name');
        $old_category_name=$this->input->post('old_category_name');
        $this->form_validation->set_rules('category_name');
	
        if( $category_name=="" || $category_name != $old_category_name ){

        $this->form_validation->set_rules('category_name','category name', 'trim|required|xss_clean|callback_service_categoryname');

        }
		
	
        $this->form_validation->set_rules('category_id');
        $this->form_validation->set_rules('old_category_name');
        $this->form_validation->set_rules('parent_id');
        $this->form_validation->set_rules('status');
	    if ($this->form_validation->run() == FALSE)
	    {
	       $this->load->view('admin/service_category/service_category_view',$data);

        }else{
	
		    if($category_id > 0){
			    $this->service_category_model->category_update();
                redirect('settings/service_category/service_category_edit/'.$category_id);
		    }else{
			    $this->service_category_model->category_insert();
                redirect('settings/service_category');
	        }

		
		}	
	}
	
	
	function service_categoryname($name,$parent_id)
	{	
			$this->db->where(array('category_name'=>$name,'parent_id'=>$parent_id));
			if($this->db->count_all_results('product_category')>0)
				{
				$this->form_validation->set_message('service_categoryname', '%s'.$this->lang->line('duplicate_msg'));
				return FALSE;
				}else
				{
					return TRUE;
				}
	}
	
	

	function service_category_ordering()
	{

        $data['title']=$this->lang->line('service_category_ordering');
		$parent_id=$this->input->post('parent_id')?$this->input->post('parent_id'):0;
		$this->db->where('parent_id',$parent_id);
		$query=$this->db->get('product_category');
	 	$data['queryup']=$query->result();
		$this->load->view('admin/service_category/service_category_ordering_view',$data);
		
	}
	
	function service_category_sorting()
	{
	
		foreach ($_POST['listItem'] as $position => $item) :
			$array=array('ordering'=>$position);
			$this->db->set($array);
			$this->db->where('category_id',$item);
			$this->db->update('product_category');

		endforeach;
	
	}

	
	function service_category_delete()
	{

		if(is_array($this->input->post('list'))){

            $this->service_category_model->category_multidelete();

        }else{

            $this->service_category_model->category_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/service_category/service_category_list/'.$this->uri->segment(4,0));
	
	}
	
	
	
	
}