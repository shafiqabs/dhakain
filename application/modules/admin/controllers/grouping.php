<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grouping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('admin/grouping_model','admin/paging_model'));
		//$this->output->enable_profiler(TRUE);
		
	}
    private function redirectToHome($redirect = NULL)
    {
        redirect('settings/grouping/'.$redirect);
    }

	function listing($page=0)
	{
		
		$data['title']=$this->lang->line('grouping_list');
        $data['paging'] = $this->grouping_model->getListing($page);
		$this->load->view('admin/grouping/listing_view',$data);
		
	}

    function create()
    {
        $data['title']=$this->lang->line('grouping_add');
        $data['parentList'] = $this->grouping_model->getParentList();
        $data['getCategory'] = $this->grouping_model->getCategory();
        $this->load->view('admin/grouping/grouping_view',$data);

    }


    function edit($random_id)
	{

        $data['parentList'] = $this->grouping_model->getParentList();
        $data['getCategory'] = $this->grouping_model->getCategory();
        $this->db->where('random_id',$random_id);
        $data['queryup']=$this->grouping_model->getEdit($random_id);
        $data['title']=$this->lang->line('grouping_edit');
        $this->load->view('admin/grouping/grouping_view',$data);
	
	}

    public function save()
    {

        if (!empty($_POST)) {
            $this->addValidation();
            if ($this->form_validation->run()) {
                $this->saveData();
                $id =$this->input->post('random_id');
                if(!empty($id)) {
                    $this->redirectToHome('edit/'.$id);
                }else{
                    $this->redirectToHome();
                }
            }
        }
        $this->create();

    }

    private function addValidation()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_check_duplicate');
        $this->form_validation->set_rules('category_id');
        $this->form_validation->set_rules('parent_id');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('status');

    }


    private function saveData()
    {

        $data = $this->input->post();
        if (empty($data['random_id'])) {

            $this->grouping_model->insert($data);
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
        } else {
            $this->grouping_model->update($data, $data['random_id']);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }

    }

    /* checkDuplicate function use data array , table name */
    public function check_duplicate(){

        $data = $this->input->post();
        return  $this->grouping_model->checkDuplicate($data,'grouping');

    }

	function grouping_ordering()
	{

        $data['title']=$this->lang->line('grouping_ordering');
		$parent_id=$this->input->post('parent_id')?$this->input->post('parent_id'):0;
		$this->db->where('parent_id',$parent_id);
		$query=$this->db->get('grouping');
	 	$data['queryup']=$query->result();
		$this->load->view('admin/grouping/grouping_ordering_view',$data);
		
	}
	
	function grouping_sorting()
	{
	
		foreach ($_POST['listItem'] as $position => $item) :
			$array=array('ordering'=>$position);
			$this->db->set($array);
			$this->db->where('category_id',$item);
			$this->db->update('grouping');

		endforeach;
	
	}

	
	function delete($page=0,$random_id=NULL)
	{

        $this->grouping_model->delete($random_id);
		$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
        $this->redirectToHome('listing/'.$page);
	}
	
	
	
	
}