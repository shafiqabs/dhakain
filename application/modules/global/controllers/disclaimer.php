<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disclaimer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('disclaimer_model','store_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

    function disclaimer_view($access_slug)
    {


        $data['title']=$this->lang->line('disclaimer');

        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $this->storeInfo[0]->agent_uid;
        $data['access_slug'] = $access_slug;
        $data['queryup'] = $this->disclaimer_model->getDesclaimer($this->storeInfo[0]->agent_uid);
        $this->load->view('admin/disclaimer/disclaimer_view',$data);

    }

    function save($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title']=$this->lang->line('disclaimer');
        $this->disclaimer_model->save($agent_uid);
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        redirect($this->uri->segment(1,0).'/disclaimer/'.$access_slug);
    }


}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */