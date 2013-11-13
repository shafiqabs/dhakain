<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model(array('store_model','website_model'));
        $this->lang->load('websites');
		//$this->output->enable_profiler(TRUE);
		
	}

	function website_view($access_slug)
	{
        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;

        $data['title']=$this->lang->line('website_options');
        $data['queryup']=$this->website_model->getWebsite($agent_uid);
        if( $this->storeInfo[0]->setup_website == 1){
            $this->load->view('websites/website/website_view',$data);
        }else{
            redirect($this->uri->segment(1,NULL));
        }

		
		
	}

    public function save($access_slug=NULL)
    {

        $data=$this->input->post();

        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $this->saveData($access_slug);
                $this->redirectToHome($access_slug);
            }

        }
        $this->website_view($access_slug);

    }

    private function check_validation()
    {

        $this->form_validation->set_rules('domain_name','Domain name','trim|xss_clean|callback_check_domain_name');
        $this->form_validation->set_rules('custom_title');
        $this->form_validation->set_rules('template_name');
        $this->form_validation->set_rules('listing_order');
        $this->form_validation->set_rules('user_change_listing');
        $this->form_validation->set_rules('settings_web_id');
        $this->form_validation->set_rules('web_publish');
    }


    private function saveData($access_slug)
    {


        $settings_web_id=$this->input->post('settings_web_id');
        if (empty($settings_web_id)) {
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            $this->website_model->insert($access_slug);
        } else {
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            $this->website_model->update($access_slug);
        }

    }



    function check_domain_name($name){


           $access_slug=$this->input->post('access_slug');
           $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
           return $this->store_model->checkDomainName($name,$agent_uid);
    }

    function website_delete($id)
    {


        $array=$this->input->post('list');
        if(is_array($array)){
            $this->website_model->website_multidelete();
        }else{
            $this->website_model->website_delete();
        }
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
        redirect('seller/website/website_view/'.$this->uri->segment(4,0));

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/websites/'.$redirect);
    }


}