<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branch extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('global/branch_model'));
        //$this->output->enable_profiler(TRUE);

    }

    function branch_view($access_slug)
    {
        $data['title']=$this->lang->line('branch_add');
        $data['branch_list']=$this->lang->line('branch_list');
        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;

        $data['resultList']=$this->branch_model->getBranchList($agent_uid);

        $this->load->view('global/branch/branch_view',$data);


    }


    function edit($access_slug,$random_id)
    {

        $data['title']=$this->lang->line('branch_add');
        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;

        $data['resultList']=$this->branch_model->getBranchList($agent_uid);
        $data['queryup'] = $this->branch_model->getBranch($agent_uid,$random_id);
        $data['title']=$this->lang->line('branch_add');
        $data['branch_list']=$this->lang->line('branch_list');
        $this->load->view('global/branch/branch_view',$data);

    }



    function save($access_slug=NULL){

        $data=$this->input->post();
        if (!empty($data)) {
            $this->saveData($access_slug);
        }


    }



    private function saveData($access_slug=NULL)
    {

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data=$this->input->post();

        $this->check_validation();
        if ($this->form_validation->run()) {

            if(!empty($data['random_id'])){

                $this->branch_model->update($data,$agent_uid,$data['random_id']);
                $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));

            }else{


                $this->branch_model->insert($data,$agent_uid);
                $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));


            }

            $this->redirectToHome($access_slug);

        }
        $this->branch_view($access_slug);


    }



    function check_validation()
    {

        $this->form_validation->set_rules('location_id','Location name','trim|required|xss_clean');
        $this->form_validation->set_rules('address');
        $this->form_validation->set_rules('contact_person');
        $this->form_validation->set_rules('email','Email address','valid_email|trim|xss_clean');
        $this->form_validation->set_rules('cell_phone');
        $this->form_validation->set_rules('business_phone');
        $this->form_validation->set_rules('fax');
        $this->form_validation->set_rules('city');
        $this->form_validation->set_rules('postal_code');
        $this->form_validation->set_rules('district');
        $this->form_validation->set_rules('agent_uid');
        $this->form_validation->set_rules('status');
        $this->form_validation->set_rules('branch_id');

    }

    function status($access_slug,$random_id=NULL){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->branch_model->status($agent_uid,$random_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('status_update_msg'));
        $this->redirectToHome($access_slug);

    }

    function ordering($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data = $this->input->post('listItem');
        $this->branch_model->ordering($agent_uid,$data);
    }






    function delete($access_slug,$random_id=NULL)
    {

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);

        $array=$this->input->post('list');
        if(is_array($array)){

            $this->branch_model->multidelete($agent_uid,$array);
        }else{
            $this->branch_model->delete($agent_uid,$random_id);
        }
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
        $this->redirectToHome($access_slug);

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/branch/'.$redirect);
    }


}