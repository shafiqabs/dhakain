<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classified extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('classified_model','store_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

    function classified_view($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title']=$this->lang->line('classified_store');
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;
        $this->load->view('admin/classified/classified_view',$data);

    }

    function save($access_slug)
    {
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title']=$this->lang->line('classified_store');
        $this->classified_model->save($agent_uid);
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        redirect($this->uri->segment(1,0).'/classified/'.$access_slug);

    }
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */