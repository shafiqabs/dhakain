<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advertisment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('store_model','global/advertisment_model'));
        //$this->output->enable_profiler(TRUE);

    }

    function advertisment_view($access_slug)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;


        $data['shoplist']=$this->advertisment_model->getShoplist($agent_uid);
        $data['position']=$this->settings_model->settings_under_list($id=62)->result();

        $data['title']=$this->lang->line('advertisment');
        $this->load->view('global/advertisment/advertisment_view',$data);


    }




    public function edit($access_slug,$random_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;

        $data['queryup']=$this->advertisment_model->getAdvertisment('random_id',$random_id);
        $data['shoplist']=$this->advertisment_model->getShoplist($agent_uid);
        $data['position']=$this->settings_model->settings_under_list($id=62)->result();

        $data['title']=$this->lang->line('advertisment');
        $this->load->view('global/advertisment/advertisment_view',$data);

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
        $path = 'uploads/shop/'.$agent_uid.'/advertisments/';
        if(empty($random_id)){

            $this->advertisment_model->insert($agent_uid,$path);
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

        }else{

            $this->advertisment_model->update($random_id,$agent_uid,$path);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        }
    }

    private function check_validation()
    {

        $this->form_validation->set_rules('shop_id');
        $this->form_validation->set_rules('alternative_advertisment');
        $this->form_validation->set_rules('random_id');
        $this->form_validation->set_rules('advertisment_url');
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

        $data['query']=$this->advertisment_model->advertismentList($agent_uid);
        $data['title']=$this->lang->line('advertisment_list');
        $this->load->view('global/advertisment/listing',$data);
    }


    function status($access_slug,$random_id=NULL){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->advertisment_model->status($agent_uid,$random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome('listing/'.$access_slug);

    }

    function ordering($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data = $this->input->post('listItem');
        $this->advertisment_model->advertismentOrdering($agent_uid,$data);
    }



    function delete($access_slug,$random_id=NULL)
    {
        $this->advertisment_model->delete($random_id);
        if($this->advertisment_model->delete($random_id) != false){
            $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
        }
            $this->redirectToHome('listing/'.$access_slug);

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/advertisment/'.$redirect);
    }
}