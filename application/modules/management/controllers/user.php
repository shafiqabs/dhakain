<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ezycu_model');
		$this->load->model('user_model');
		$this->load->model('util_model');
		//$this->output->enable_profiler(TRUE);
		
	}
	
	function index()
	{
		echo 'sdsdsd';
		$this->db->select();
		$query = $this->db->get('users');
		print_r($query->result());
	}

	function user_list($ajax=0,$order_field='created',$order='desc')  
	{
		
		if($this->uri->segment(7)){
			$start = $this->uri->segment(7);
		}else{
			$start = 0;
		}
		
		$per_page = 2;
		$total_rows = $this->user_model->user_list('count',0,0,$order_field,$order);
		$str = 'umgt/user/user_list/1/'.$order_field.'/'.$order;
		$base_url = site_url($str);
		$data['header_url'] = $str;
		$uri_segment = 7;

		$this->load->library('pagination');
		$data['paging'] = $this->pagination->create_paging('admin',$base_url,$total_rows,$per_page,FALSE,$uri_segment);
		$data['items'] = $this->user_model->user_list('result',$per_page,$start,$order_field,$order);

		if($ajax){
			$this->load->view('user/user_list_sub',$data);
		}else{
			$this->load->view('user/user_list',$data);
		}
	}
	
	function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname','fname','required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/add');
		}
		else
		{
			$arr_param = array(
				'operation' => 'create',
				'arr_input' => array('created'=>time(),'role_id'=>'2','status'=>'1'),
			);
			$this->ezycu_model->manipul($arr_param);
			$this->session->set_flashdata('msg', 'User added'); 
			redirect('umgt/user/user_list');
		}
		
	}
	
	function update($user_id=0)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('hdn');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['items'] = $this->user_model->get_user($user_id);
			$this->load->view('user/update',$data);
		}
		else
		{
			$arr_param = array(
				'operation' => 'update',
				'where' => array('user_id'=>$this->input->post('hdn_user_id')),
				'arr_input' => array('updated'=>time(),'role_id'=>'2','status'=>'1'),
			);
			$this->ezycu_model->manipul($arr_param);
			$this->session->set_flashdata('msg', 'User updated'); 
			redirect('umgt/user/user_list');
		}
	}
	
	function delete($user_id=0)
	{
		$this->user_model->delete_user($user_id);
		redirect('user/user_list');
	}
	
	function res()
	{
		echo 'Allah hoo';
	}
}

/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */