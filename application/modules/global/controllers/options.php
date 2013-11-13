<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Options extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('store_model','options_model'));
        //$this->output->enable_profiler(TRUE);

    }


    function options_view($access_slug){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $settings_shopping_cart=$this->options_model->get_settings_shopping_cart($access_slug);
        $data['settings_shopping_cart']= isset($settings_shopping_cart) ? $settings_shopping_cart : 0 ;

        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;

        $this->db->select('users.user_name , users.password , options.publish_main_website , options.using_shopping_cart , options.choose_transaction ');
        $this->db->from('users');
        $this->db->join('options','users.uid = options.agent_uid','left');
        $this->db->where('uid',$agent_uid);
        $queryup=$this->db->get();
        $data['queryup']=$queryup->result();
        $data['title'] = $this->lang->line('options');
        $this->load->view('global/options/options_view',$data);

    }

    function save($access_slug)
    {

        $data['title'] = $this->lang->line('options');
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $user_name=$this->input->post('user_name');
        $password=$this->input->post('password');
        $old_user_name=$this->input->post('old_user_name');
        $this->form_validation->set_rules('user_name');

        if( $user_name=="" || $user_name != $old_user_name ){

            $this->form_validation->set_rules('user_name','User name ', 'trim|required|xss_clean|callback_username');

        }
        if($password ){
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[password]');
        }

        $this->form_validation->set_rules('uid');
        $this->form_validation->set_rules('old_user_name');

        $this->form_validation->set_rules('publish_main_website');
        $this->form_validation->set_rules('using_shopping_cart');
        $this->form_validation->set_rules('choose_transaction');

        if ($this->form_validation->run() == FALSE)
        {
            $this->options_view($this->uri->segment(4,NULL));
        }
        else
        {
            $this->options_model->options_insert($agent_uid);
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            $data['title'] = $this->lang->line('options');
            redirect($this->uri->segment(1,NULL).'/options/options_view/'.$this->uri->segment(4,NULL));

        }


    }

    function username($name)
    {
        $this->db->where(array('user_name'=>$name));
        if($this->db->count_all_results('users')>0)
        {
            $this->form_validation->set_message('username', '%s'.$this->lang->line('duplicate_msg'));
            return FALSE;
        }else
        {
            return TRUE;
        }
    }

    function settings_general_option(){


        $access_slug = $this->uri->segment(4,NULL);
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title'] = $this->lang->line('settings_general_options');
        $this->db->where('agent_uid',$agent_uid);
        $queryup=$this->db->get('settings_general_options');
        if($queryup ->num_rows() > 0 ){
            $data['queryup']=$queryup->result();
        }
        $this->load->view('options/settings_general_option_view',$data);
    }

    function settings_general_insert(){

        $access_slug = $this->uri->segment(4,NULL);
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->options_model->settings_option_insert();
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
        redirect($this->uri->segment(1,NULL).'/options/settings_general_option/'.$agent_uid);

    }

    function settings_payment_method_add(){

        $access_slug = $this->uri->segment(4,NULL);
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->options_model->settings_payment_method_insert();
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
        redirect('options/settings_bank/'.$agent_uid);

    }

    function settings_bank(){

        $access_slug = $this->uri->segment(4,NULL);
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title'] = $this->lang->line('settings_bank');
        $this->db->where('agent_uid',$agent_uid);
        $data['queryup']=$this->db->get('settings_payment_method');
        $this->load->view('options/settings_bank_view',$data);
    }

    function settings_bank_insert(){

        $access_slug = $this->uri->segment(4,NULL);
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->options_model->settings_bank_insert();
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
        redirect($this->uri->segment(1,NULL).'/options/settings_bank/'.$agent_uid);

    }


}