<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('sites/help_model'));
        $this->load->helper('imageUploader');
        $this->load->language('sites');
        //$this->output->enable_profiler(TRUE);

    }

    function listing()
    {

        $data['position']=$this->settings_model->settings_under_list($id=62)->result();
        $data['title']=$this->lang->line('help');
        $data['query']=$this->help_model->helpList();
        $data['title']=$this->lang->line('help_list');
        $this->load->view('sites/help/listing',$data);


    }

    public function create(){



        $data['title']=$this->lang->line('help');
        $this->load->view('sites/help/help_view',$data);

    }


    public function edit($random_id){

        $data['queryup']=$this->help_model->getFeature($random_id);
        $data['title']=$this->lang->line('help');
        $this->load->view('sites/help/help_view',$data);

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

        $this->form_validation->set_rules('title','required|trim|xss_clean');
        $this->form_validation->set_rules('content');
        $this->form_validation->set_rules('excerpt');
        $this->form_validation->set_rules('alternative_help');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('target_url');
        $this->form_validation->set_rules('status');

    }

    private function saveData($data){

        $random_id = $this->input->post('random_id');

        if(empty($random_id)){

            $this->help_model->insert($data);
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

        }else{

            $this->help_model->update($data,$random_id);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }
    }

    function status($random_id=NULL){



        $this->help_model->status($random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing');

    }

    function ordering(){

        $data = $this->input->post('listItem');
        $this->help_model->sorting($data);
    }



    function delete($random_id=NULL)
    {

       $this->help_model->delete($random_id) ;
       $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
       $this->redirectToHome('listing');

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/help/'.$redirect);
    }
}