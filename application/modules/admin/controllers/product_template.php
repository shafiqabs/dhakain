<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_template extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/product_template_model','admin/template_model','admin/product_category_model'));

		//$this->output->enable_profiler(TRUE);

	}

	function index()
	{

		$data['title']=$this->lang->line('product_multi_template');
		$this->load->view('admin/product_template/product_template_view',$data);

	}

	function product_template_category()
	{

		$data['title']=$this->lang->line('product_multi_template');
		$this->load->view('admin/product_template/product_template_view',$data);

	}
	function product_single_template()
	{
		$data['title']=$this->lang->line('product_single_template');
		$this->load->view('admin/product_template/product_single_template_view',$data);
	}

	function product_single_template_add()
	{
		$data['title']=$this->lang->line('product_single_template');
		$this->product_template_model->product_single_insert();
		redirect('settings/product_template/product_single_template');
	}

    function product_single_template_edit()
	{
		$data['title']=$this->lang->line('product_single_template');
        $this->db->where('product_template_manage_id',$this->uri->segment(4,0));
		$query=$this->db->get('product_template_manage');
		$data['queryup']=$query->result();
		$this->load->view('admin/product_template/product_single_template_view',$data);
	}

	function product_template_category_add()
	{
		$data['title']=$this->lang->line('product_template');
		$this->product_template_model->product_template_category_add();
		redirect('settings/product_template/product_template_category/'.$this->input->post('product_template_manage_id'));

	}

	function product_select_template()
	{
		$data['product_template_manage_id']=$this->input->post('id');
		$this->load->view('admin/product_template/product_select_template_view',$data);

	}

	function product_template_manage()
	{
		$data['title']=$this->lang->line('add_product_template');
		$this->load->view('admin/product_template/product_template_manage_view',$data);
	}

	function product_template_manage_edit($id=0)
	{

		$data['title']="Product template manage view";
		$this->db->where('product_template_manage_id',$id);
		$query=$this->db->get('product_template_manage');
		$data['queryup']=$query->result();
		$this->load->view('product_template_manage/product_template_manage_view',$data);

	}

	function product_template_add()
	{
			$data['title']=$this->lang->line('product_template');
			$this->form_validation->set_rules('product_template_name','Product template name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('product_template_type');
			$this->form_validation->set_rules('product_template_layout','Product template layout', 'trim|required|xss_clean|callback_templatelayout');
			$this->form_validation->set_rules('status');
			$this->form_validation->set_rules('product_template_manage_id');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/product_template/product_template_manage_view',$data);
			}
			else
			{
			   if($this->input->post('product_template_manage_id') > 0){

				   $this->product_template_model->template_update();
			   }else{
				   $this->product_template_model->template_insert();
			   }
			   redirect('settings/product_template/product_template_manage');

			}


	}


	function templatelayout($name)
	{
		$this->db->where(array('product_template_layout'=>$name));
		if($this->db->count_all_results('product_template_manage')>0)
		{
			$this->form_validation->set_message('templatelayout', $name. ' %s '.$this->lang->line('duplicate_msg'));
			return FALSE;
		}else
		{
			return TRUE;
		}
	}

	function product_template_list()
	{
		$data['title']=$this->lang->line('product_template_list');
		$query=$this->db->get('product_template_manage');
		$data['managequery']=$query->result();
		$this->load->view('admin/product_template/product_template_list_view',$data);
	}


	function product_template_view()
	{
		$product_template_id=$this->uri->segment(4,0);
		$data['title']="Product template manage view";
		$this->db->select('product_template_name');
		$this->db->where('product_template_manage_id',$product_template_id);
		$query=$this->db->get('product_template_manage');
		$data['managequery']=$query->result();
		$this->db->where('product_template_id',$product_template_id);
		$data['tempvalue']=$this->db->get('product_template_metadata');
		$this->load->view('admin/product_template/product_template_table_view',$data);
	}

	function product_template_table_value()
	{
        $this->product_template_model->product_template_value();
		redirect('settings/product_template/product_template_view/'.$this->uri->segment(4,0));
	}

	function product_template_delete()
	{
        if(is_array($this->input->post('list'))){
            $this->product_template_model->product_template_multidelete();
        }else{
            $this->product_template_model->product_template_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/product_template/product_template_list');
	}

	function product_single_template_delete()
	{
		if(is_array($this->input->post('list'))){
            $this->product_template_model->product_single_template_multidelete();
        }else{
            $this->product_template_model->product_single_template_delete();
		}
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
		redirect('settings/product_template/product_single_template');

	}



}