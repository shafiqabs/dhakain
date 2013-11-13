<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sponsor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('store_model','global/sponsor_model'));
        //$this->output->enable_profiler(TRUE);

    }

    function sponsor_view($access_slug)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);

        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;


        $data['shoplist']=$this->sponsor_model->getShoplist($agent_uid);
        $data['position']=$this->settings_model->settings_under_list($id=62)->result();

        $data['title']=$this->lang->line('sponsor');
        $this->load->view('global/sponsor/sponsor_view',$data);


    }




    public function edit($access_slug,$random_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;

        $data['queryup']=$this->sponsor_model->getsponsor('random_id',$random_id);
        $data['shoplist']=$this->sponsor_model->getShoplist($agent_uid);
        $data['position']=$this->settings_model->settings_under_list($id=62)->result();

        $data['title']=$this->lang->line('sponsor');
        $this->load->view('global/sponsor/sponsor_view',$data);

    }

    function save($access_slug=NULL){

        $data=$this->input->post();
        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $this->saveData($access_slug);
                $this->redirectToHome('listing/'.$access_slug);
            }

        }
    }

    private function saveData($access_slug){

        $random_id = $this->input->post('random_id');
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $path = 'uploads/shop/'.$agent_uid.'/sponsors/';
        if(empty($random_id)){

            $this->sponsor_model->insert($agent_uid,$path);
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

        }else{

            $this->sponsor_model->update($random_id,$agent_uid,$path);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }
    }

    private function check_validation()
    {

        $this->form_validation->set_rules('shop_id');
        $this->form_validation->set_rules('alternative_sponsor');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('sponsor_url');
        $this->form_validation->set_rules('position_id','required|trim|xss_clean');

    }

    function listing($access_slug)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;

        $data['query']=$this->sponsor_model->sponsorList($agent_uid);
        $data['title']=$this->lang->line('sponsor_list');
        $this->load->view('global/sponsor/listing',$data);
    }


    function status($access_slug,$random_id=NULL){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->sponsor_model->status($agent_uid,$random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing/'.$access_slug);

    }

    function sorting($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->sponsor_model->sorting($agent_uid);
    }



    function delete($access_slug,$random_id=NULL)
    {

        if(!empty($random_id) || is_array($this->input->post('list'))){
            $this->sponsor_model->delete($random_id);
            $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
        }
        $this->redirectToHome('listing/'.$access_slug);

    }



    function settings($access_slug)
    {

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;

        $data['title']=$this->lang->line('sponsor');
        $this->load->view('global/sponsor/settings_view',$data);


    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/sponsor/'.$redirect);
    }


}

