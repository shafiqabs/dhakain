<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitecontent extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('sites/sitecontent_model'));
        $this->load->helper('imageUploader');
        $this->load->language('sites');
        //$this->output->enable_profiler(TRUE);

    }

    function listing()
    {

        $data['position']=$this->settings_model->settings_under_list($id=62)->result();
        $data['title']=$this->lang->line('sitecontent');
        $data['query']=$this->sitecontent_model->sitecontentList();
        $data['title']=$this->lang->line('sitecontent_list');
        $this->load->view('sites/sitecontent/listing',$data);


    }

    public function create(){



        $data['title']=$this->lang->line('sitecontent');
        $data['parentmenu']=$this->sitecontent_model->getParentMneu();
        $this->load->view('sites/sitecontent/sitecontent_view',$data);

    }


    public function edit($random_id){

        $data['queryup']=$this->sitecontent_model->getFeature($random_id);
        $data['parentmenu']=$this->sitecontent_model->getParentMneu();
        $data['title']=$this->lang->line('sitecontent');
        $this->load->view('sites/sitecontent/sitecontent_view',$data);

    }



    public function save(){


        $data=$this->input->post();

        if (!empty($data)) {

            $this->check_validation();
            if ($this->form_validation->run()) {

                $this->saveData($data);

                $this->redirectToHome('listing');
            }

        }
    }

    private function check_validation()
    {


        $this->form_validation->set_rules('menu_name','Menu name','required|trim|xss_clean');
        $this->form_validation->set_rules('title','required|trim|xss_clean');
        $this->form_validation->set_rules('content');
        $this->form_validation->set_rules('excerpt');
        $this->form_validation->set_rules('alternative_sitecontent');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('target_url');
        $this->form_validation->set_rules('status');

    }

    private function saveData($data){

        $random_id = $this->input->post('random_id');

        if(empty($random_id)){


            $this->sitecontent_model->insert($data);
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

        }else{

            $this->sitecontent_model->update($data,$random_id);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }
    }

    function status($random_id=NULL){



        $this->sitecontent_model->status($random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing');

    }

    function ordering(){

        $data = $this->input->post('listItem');
        $this->sitecontent_model->sorting($data);
    }



    function delete($random_id=NULL)
    {

       $this->sitecontent_model->delete($random_id) ;
       $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
       $this->redirectToHome('listing');

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/sitecontent/'.$redirect);
    }
}