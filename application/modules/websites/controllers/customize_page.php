<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customize_page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('websites');
        $this->load->model(array('store_model','website_model','customize_menu_model','customize_page_model','image_model'));
         //$this->load->library('spaw');
        //$this->output->enable_profiler(TRUE);

    }

    function page($access_slug,$menu_id){



        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);



        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;

        $data['queryup'] = $this->customize_page_model->getCustomizePage($agent_uid,$menu_id);
        $data['custom_menu'] = $this->customize_page_model->getCustomMenu($agent_uid);

        $data['menu_id']=$menu_id;
        $data['title'] = $this->lang->line('page_information');
        $this->load->view('websites/customize_page/customize_page_view',$data);

    }
    public function save($access_slug=NULL,$menu_id=0)
    {

        $data=$this->input->post();

        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $this->saveData($access_slug,$menu_id);
                $next=$this->input->post('next');
                if(!empty($next)){
                    redirect($this->uri->segment(1,0).'/customize_content/'.$access_slug.'/'.$menu_id);
                }else{
                    $this->redirectToHome($access_slug.'/'.$menu_id);
                }

            }

        }
        $this->page($access_slug,$menu_id);

    }

    private function check_validation()
    {


        $this->form_validation->set_rules('menu_name','Menu name','required|trim|xss_clean');
        $this->form_validation->set_rules('menu_id');
        $this->form_validation->set_rules('status');
        $this->form_validation->set_rules('is_home_page');
        $this->form_validation->set_rules('layout_id');
        $this->form_validation->set_rules('plugin_id');
        $this->form_validation->set_rules('plugin_position');
        $this->form_validation->set_rules('background_color');

    }


    private function saveData($access_slug,$menu_id)
    {

            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            $this->customize_page_model->update($access_slug,$menu_id);

    }


    function change_plugin_position($access_slug,$menu_id){

        sleep(0);
        $this->customize_page_model->getPluginPosition($access_slug,$menu_id);

    }


    function background_image($access_slug,$menu_id)
    {

        $this->customize_page_model->webBackgroundImageUpload($access_slug,$menu_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
        $this->redirectToHome($access_slug.'/'.$menu_id);

    }

    function delete_image($access_slug,$menu_id){

        $this->customize_page_model->deleteImage($access_slug,$menu_id);
        $this->session->set_flashdata('error_msg',$this->lang->line('delete_msg'));
        $this->redirectToHome($access_slug.'/'.$menu_id);
    }

    function seo($access_slug,$menu_id)
    {

            $keywords_page_id=$this->input->post('keywords_page_id');
            if($keywords_page_id >0 ){
                $this->customize_page_model->seoUpdate($access_slug,$menu_id);
                $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            }else{
                $this->customize_page_model->seoInsert($access_slug,$menu_id);
                $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            }
            $this->redirectToHome($access_slug.'/'.$menu_id);


    }



    function seo_delete($access_slug,$menu_id,$keywords_page_id)
    {

        $this->customize_page_model->seoDelete($access_slug,$menu_id,$keywords_page_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
        $this->redirectToHome($access_slug.'/'.$menu_id);

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/customize_page/'.$redirect);
    }


}