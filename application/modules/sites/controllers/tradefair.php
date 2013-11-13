<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tradefair extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('sites/tradefair_model'));
        $this->load->helper('imageUploader');
        $this->load->language('sites');
        //$this->output->enable_profiler(TRUE);

    }

    function listing()
    {

        $data['position']=$this->settings_model->settings_under_list($id=62)->result();
        $data['query']=$this->tradefair_model->tradefairList();
        $data['title']=$this->lang->line('tradefair_list');
        $this->load->view('sites/tradefair/listing',$data);


    }

    public function create(){



        $data['title']=$this->lang->line('tradefair');
        $data['locationres']=$this->settings_model->settings_under_list($id=2)->result();
        $data['fairtyperes']=$this->settings_model->settings_under_list($id=140)->result();
        $this->load->view('sites/tradefair/tradefair_view',$data);

    }


    public function edit($random_id){

        $data['queryup']=$this->tradefair_model->getData($random_id);
        $data['locationres']=$this->settings_model->settings_under_list($id=2)->result();
        $data['fairtyperes']=$this->settings_model->settings_under_list($id=140)->result();
        $data['title']=$this->lang->line('tradefair');
        $this->load->view('sites/tradefair/tradefair_view',$data);

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

        $this->create();
    }

    private function check_validation()
    {


        $this->form_validation->set_rules('location_id','Location name','required|trim|xss_clean');
        $this->form_validation->set_rules('fair_type_id');
        $this->form_validation->set_rules('title','required|trim|xss_clean');
        $this->form_validation->set_rules('content');
        $this->form_validation->set_rules('excerpt');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('status');

    }

    private function saveData($data){

        $random_id = $this->input->post('random_id');

        if(empty($random_id)){


            $this->tradefair_model->insert($data);
            echo "dfgdfdf";
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

        }else{

            $this->tradefair_model->update($data,$random_id);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }
    }

    function status($random_id=NULL){



        $this->tradefair_model->status($random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing');

    }

    function ordering(){

        $data = $this->input->post('listItem');
        $this->tradefair_model->sorting($data);
    }



    function delete($random_id=NULL)
    {


        $this->tradefair_model->delete($random_id) ;
        $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
        $this->redirectToHome('listing');

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/tradefair/'.$redirect);
    }
}