<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customize_menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('websites');
        $this->load->model(array('store_model','websites/customize_menu_model'));
        //$this->output->enable_profiler(TRUE);

    }

	function menu($access_slug)
	{

        $data['title'] = $this->lang->line('menu_customization');
        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $data['menu'] = $this->customize_menu_model->get_menu($agent_uid);
		$this->load->view('websites/customize_menu/customize_menu_view.php',$data);
	}

    function  customize_menu_sorting($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        foreach ($_POST['listItem'] as $position => $item) :
            $array=array('order'=>$position);
            $this->db->set($array);
            $this->db->where(array('menu_id'=>$item,'agent_uid'=>$agent_uid));
            $this->db->update('custom_menu');

        endforeach;
    }
	
	function rename_menu($access_slug)
	{


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $menu_id = $this->input->post('menu_id');
        $rename = $this->input->post('page_name');
        echo $this->customize_menu_model->menuRename($agent_uid,$menu_id,$rename);



	}

	function add_menu($access_slug)
	{
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->customize_menu_model->add_menu($agent_uid);
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
		redirect($this->uri->segment(1,0).'/customize_menu/'. $access_slug);
	
	}

    function delete($access_slug,$menu_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->customize_menu_model->menuDelete($agent_uid,$menu_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
        redirect( $this->uri->segment(1,0).'/customize_menu/'.$access_slug);
    }



}