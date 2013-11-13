<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customize_content extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('websites');
        $this->load->model(array('store_model','customize_page_model','customize_content_model'));
         //$this->load->library('spaw');
        //$this->output->enable_profiler(TRUE);

    }

    function content($access_slug,$menu_id)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);

        $count = $this->db->where(array('page_content.agent_uid'=>$agent_uid , 'page_content.menu_id'=> $menu_id))->count_all_results('page_content');

        if($count > 0 )
        {

            $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
            $data['store_name'] = $this->storeInfo[0]->shop_name;
            $data['storeInfo']=$this->storeInfo;
            $data['access_slug'] = $access_slug;

            $data['queryup']=$this->customize_content_model->getCustomizeContent($agent_uid,$menu_id);
            $data['page_content']=$this->customize_content_model->getPageContent($agent_uid,$menu_id);
            $data['menu_id']=$menu_id;
            $data['title']="Page Content";
            $plugin_show=(isset($data['queryup'][0]->plugin_show))? $data['queryup'][0]->plugin_show : '';
            $column_no=(isset($data['queryup'][0]->column_no))? $data['queryup'][0]->column_no : '';
            if($plugin_show ==1 && $column_no ==1 )
                redirect ($this->uri->segment(1,0).'/customize_page/'.$access_slug.'/'.$menu_id);
            else
                $this->load->view('websites/customize_content/customize_content_view',$data);

        }else{

            redirect ($this->uri->segment(1,0).'/customize_page/page/'.$access_slug.'/'.$menu_id);

        }
    }

    public function save($access_slug=NULL,$menu_id=0)
    {

        $data=$this->input->post();
        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $this->saveData($access_slug,$menu_id);
                $this->redirectToHome($access_slug.'/'.$menu_id);
            }

        }
        $this->content($access_slug,$menu_id);

    }

    private function check_validation()
    {

        $this->form_validation->set_rules('page_content1');
        $this->form_validation->set_rules('page_content2');
        $this->form_validation->set_rules('page_content3');

    }


    private function saveData($access_slug,$menu_id)
    {

            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));

            $this->customize_content_model->update($access_slug,$menu_id);

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/customize_content/'.$redirect);
    }


}