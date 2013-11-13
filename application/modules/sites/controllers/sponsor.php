<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('sites/sponsor_model'));
        $this->load->helper('imageUploader');
        $this->load->language('sites');
        //$this->output->enable_profiler(TRUE);

    }


    public function listing($tradefair_id=0){

        $data['tradefair_id']=$tradefair_id;
        $data['query']=$this->sponsor_model->sponsorList($tradefair_id);
        $data['title']=$this->lang->line('sponsor');
        $this->load->view('sites/sponsor/sponsor_view',$data);

    }


    public function edit($tradefair_id,$random_id){

        $data['tradefair_id']=$tradefair_id;
        $data['queryup']=$this->sponsor_model->getData($random_id);
        $data['title']=$this->lang->line('sponsor');
        $this->load->view('sites/sponsor/sponsor_view',$data);

    }




    public function save($tradefair_id){


        $data=$this->input->post();

        if (!empty($data)) {

            $this->check_validation();
            if ($this->form_validation->run()) {

                $this->saveData($data);

                $this->redirectToHome($tradefair_id);
            }

        }
    }

    private function check_validation()
    {

        $this->form_validation->set_rules('title','required|trim|xss_clean');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('target_url');
        $this->form_validation->set_rules('status');

    }

    private function saveData($data){

        $random_id = $this->input->post('random_id');

        if(empty($random_id)){

            $this->sponsor_model->insert($data);
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

        }else{

            $this->sponsor_model->update($data,$random_id);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }
    }

    function status($random_id=NULL){



        $this->sponsor_model->status($random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing');

    }

    function ordering(){

        $data = $this->input->post('listItem');
        $this->sponsor_model->sorting($data);
    }



    function delete($random_id=NULL)
    {

       $this->sponsor_model->delete($random_id) ;
       $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
       $this->redirectToHome('listing');

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/tradefair/sponsor/'.$redirect);
    }
}