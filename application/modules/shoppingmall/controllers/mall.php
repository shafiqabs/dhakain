<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mall extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('shoppingmall/mall_model'));
		//$this->output->enable_profiler(TRUE);
		
	}

    function index()
    {
        $data['title']=$this->lang->line('mall_list');
        $data['colModel']=
        "{display: 'Mall Name', name : 'shop_name',width : 260, sortable : true },
        {display: 'Location', name : 'location_id',width : 160, sortable : true},
        {display: 'Phone', name : 'business_phone',width : 100, sortable : false},
        {display: 'Total', name : 'total', sortable : false,width : 50},
        {display: 'Action', name : 'action', class : 'action',  sortable : false, width : 120}
        ";
        $data['searchitems']=
        "{display: 'Mall Name', name : 'shop_name', isdefault: true},
        {display: 'Phone', name : 'business_phone'},
        {display: 'Location', name : 'location_id'}
        ";
        $data['usepager']=true;
        $data['sortname']='shop_name';
        $data['sortorder']='asc';
        $data['rp']=20;
        $data['url']= site_url($this->uri->segment(1,NULL).'/mall/mall_paging/shopping-mall');

        $this->load->view('shoppingmall/mall/mall_list_view',$data);
    }

    function mall_paging($shop_group)
    {
        echo $this->mall_model->mallPaging($shop_group);
    }

    function changeMallStatus(){
        $access_slug= $this->uri->segment(4,NULL);
        $agentID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $jsonData=$this->mall_model->changeMallStatus($agentID);
        echo json_encode($jsonData);
    }

    function mallDelete(){

        $access_slug= $this->uri->segment(4,NULL);
        $agentUID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        //$this->db->where(array('shopping_mall_id'=>$agentUID))->delete('shopping_mall');
        echo json_encode(array('success'=>'success'));

    }


    function insert()
    {
        $this->save();
    }


    function edit($access_slug=NULL)
    {

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['title']=$this->lang->line('mall_details');
        $data['locationList'] = $this->settings_model->settings_under_list($id=2);
        $data['designationList'] = $this->settings_model->settings_under_list($id=137);
        $data['queryup'] =$this->store_model->storeEdit($agent_uid);
        $data['store_name'] = $this->store_model->storeName($agent_uid);
        $data['access_slug']=$access_slug;
        $this->load->view('shoppingmall/mall/mall_view',$data);
    }
    public function save($access_slug=NULL)
    {
        $data=$this->input->post();
        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $access_slug = $this->saveData();
                $this->redirectToHome('edit/'.$access_slug);
            }

        }
        $this->edit($access_slug);

    }


    private function check_validation()
    {

        $this->form_validation->set_rules('shop_name','Shopping mall name','required|trim|xss_clean|callback_check_store_name');
        $this->form_validation->set_rules('location_id','Location name','required|trim');
        $this->form_validation->set_rules('contact_person');
        $this->form_validation->set_rules('email','Email address','valid_email|trim');
        $this->form_validation->set_rules('website');
        $this->form_validation->set_rules('business_phone');
        $this->form_validation->set_rules('cell_phone');
        $this->form_validation->set_rules('fax');
        $this->form_validation->set_rules('address');
        $this->form_validation->set_rules('city');
        $this->form_validation->set_rules('postal_code');
        $this->form_validation->set_rules('status');
        $this->form_validation->set_rules('access_slug');


    }
    private function saveData()
    {

        $access_slug = $this->input->post('access_slug');
        if (empty($access_slug)) {

            $data = $this->input->post();
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            return $this->store_model->create($data);
        } else {
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            return $this->store_model->update($access_slug);
        }

    }


    function shop_list($access_slug){

        $data['title']=$this->lang->line('mall_under_list');
        $data['colModel']=
        "{display: 'Shop Name', name : 'shop_name',width : 210, sortable : true },
        {display: 'Shop no', name : 'shop_no',width : 60, sortable : true},
        {display: 'Level', name : 'level',width : 100, sortable : true},
        {display: 'Phone', name : 'business_phone',width : 100, sortable : false},
        {display: 'Contact Person', name : 'contact_person', sortable : false,width : 140},
        {display: 'Action', name : 'action', class : 'action',  sortable : false, width : 70}
        ";
        $data['searchitems']=
        "{display: 'Shop Name', name : 'shop_name', isdefault: true},
        {display: 'Shop group', name : 'shop_group'},
        {display: 'Shop No', name : 'shop_no'},
        {display: 'Level', name : 'level'},
        {display: 'Phone', name : 'business_phone'}
        ";
        $data['usepager']=true;
        $data['sortname']='shop_name';
        $data['sortorder']='asc';
        $data['rp']=20;
        $data['accessFun']="mallUnderPaging/".$access_slug;
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['queryup'] =$this->store_model->storeEdit($agent_uid);
        $data['store_name'] = $this->store_model->storeName($agent_uid);
        $data['access_slug']=$access_slug;
        $this->load->view('shoppingmall/mall/shop_list_view',$data);
    }

    function mallUnderPaging($access_slug)
    {
        echo $this->mall_model->mallUnderPaging($access_slug);
    }

    function changeMallShopStatus($access_slug){
        $agentID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $jsonData=$this->mall_model->changeMallShopStatus($agentID);
        echo json_encode($jsonData);
    }

    function mallShopDelete($access_slug){
        $agentUID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_shopping_mall');
        echo json_encode(array('success'=>'success'));

    }


    function status_logo($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->store_model->statusLogo($agent_uid);
        $this->session->set_flashdata('success_msg',$this->lang->line('delete_image_msg'));
        redirect($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/banner_view/'.$access_slug);

    }



    function check_store_name($shop_name)
    {
        $access_slug=$this->input->post('access_slug');
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $location_id=$this->input->post('location_id');
        $shop_group=$this->input->post('shop_group');
        return $this->store_model->checkStoreName($agent_uid,$shop_group,$location_id,strtolower($shop_name));
    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/mall/'.$redirect);
    }



}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */