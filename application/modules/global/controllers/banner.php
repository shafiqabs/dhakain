<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('banner_model','store_model','banner_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

    function banner_view($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title']=$this->lang->line('custom_banner');
        $data['arr']=$this->banner_model->bannerImageLogo($agent_uid);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['agent_uid'] = $agent_uid;
        $data['access_slug'] = $access_slug;
        $this->load->view('global/banner/banner_view',$data);

    }


    public function save($access_slug)
    {

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $path = 'uploads/shop/'.$agent_uid.'/';
        if($_FILES['image_name']['name'] != ''){
            $this->banner_model->banner_upload($agent_uid,$path);
        }
        if(($_FILES['logo_name']['name'] !='')){
            $this->banner_model->site_logo($agent_uid,$path);
        }
        redirect($this->uri->segment(1,0).'/banner/'.$access_slug);

    }
        
    function delete($access_slug,$banner_id)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->banner_model->deleteBanner($agent_uid,$banner_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_image_msg'));
        redirect($this->uri->segment(1,0).'/banner/'.$access_slug);

    }

    function status($access_slug,$banner_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->banner_model->StatusBanner($agent_uid,$banner_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_image_msg'));
        redirect($this->uri->segment(1,0).'/banner/'.$access_slug);

    }

    function delete_logo($access_slug)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->banner_model->deleteLogo($agent_uid);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_image_msg'));
        redirect($this->uri->segment(1,0).'/banner/'.$access_slug);

    }

    function status_logo($access_slug){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->banner_model->statusLogo($agent_uid);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_image_msg'));
        redirect($this->uri->segment(1,0).'/banner/'.$access_slug);

    }


}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */