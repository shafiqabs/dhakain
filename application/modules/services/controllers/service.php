<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('service_model','global/classified_model'));
	}

    function index()
    {
        $data['title']=$this->lang->line('service_list');
        $data['colModel']=
        "{display: 'Title', name : 'shop_name',width : 260, sortable : true },
        {display: 'Location', name : 'location_id',width : 100, sortable : true},
        {display: 'Phone', name : 'business_phone',width : 160, sortable : false},
        //{display: 'Total', name : 'total', sortable : false,width : 50},
        {display: 'Created', name : 'add_date', sortable : true ,width :80},
        {display: 'Action', name : 'action', class : 'action',  sortable : false, width : 90}
        ";
        $data['searchitems']=
        "{display: 'Title', name : 'shop_name', isdefault: true},
        {display: 'Phone', name : 'business_phone'},
        {display: 'Location', name : 'location_id'}
        ";
        $data['usepager']=true;
        $data['sortname']='shop_name';
        $data['sortorder']='asc';
        $data['rp']=20;
        $data['url']= site_url($this->uri->segment(1,NULL).'/service/service_paging/services');
        $this->load->view($this->uri->segment(1,NULL).'/service/listing_view',$data);
    }

    function service_paging($shop_group)
    {
        echo $this->service_model->storePaging($shop_group);
    }

    function insert()
    {

        //$this->save();
        $data = $this->input->post();
        //$this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
        echo  $this->store_model->create($data);
    }

    function edit($access_slug=NULL)
    {
        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $data['queryup'] = $this->store_model->storeEdit($agent_uid);
        $this->storeInfo = $this->store_model->storeInformation(array('shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['mallList'] = $this->store_model->mallList();
        $data['locationList'] = $this->settings_model->settings_under_list($id=2);
        $data['levelList'] = $this->settings_model->settings_under_list($id=4);
        $data['designationList'] = $this->settings_model->settings_under_list($id=137);
        $data['serviceTypeList'] = $this->settings_model->settings_under_list($id=121);
        $data['title']=$this->lang->line('add_service');
        $data['access_slug'] = $access_slug;
        $this->load->view($this->uri->segment(1,0).'/service/service_view',$data);
    }

    function change_status($access_slug){

        $agentUID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $jsonData=$this->store_model->changeStoreStatus($agentUID);
        echo json_encode($jsonData);
    }

    function delete($access_slug){


        $agentUID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->store_model->stroreDelete($agentUID);
        echo json_encode(array('success'=>'success'));

    }

    public function save($access_slug=NULL)
    {
        $data=$this->input->post();

        if (!empty($data)) {
            $this->check_validation();
            if ($this->form_validation->run()) {
                $access_slug = $this->saveData();
                $this->redirectToHome($access_slug);
            }

        }
        $this->edit($access_slug);

    }

    private function check_validation()
    {

        $this->form_validation->set_rules('shop_name','Shop name','required|trim|xss_clean|callback_check_store_name');
        $this->form_validation->set_rules('location_id','Location name','required|trim');
        $this->form_validation->set_rules('contact_name');
        $this->form_validation->set_rules('email_address','Email address','valid_email|trim');
        $this->form_validation->set_rules('website');
        $this->form_validation->set_rules('listing_type');
        $this->form_validation->set_rules('business_phone');
        $this->form_validation->set_rules('mobile_no');
        $this->form_validation->set_rules('fax');
        $this->form_validation->set_rules('address');
        $this->form_validation->set_rules('city');
        $this->form_validation->set_rules('postal_code');
        $this->form_validation->set_rules('status');
        $this->form_validation->set_rules('domain_name','Domain name','trim|xss_clean|callback_check_domain_name');
        $this->form_validation->set_rules('agent_uid');
    }


    private function saveData()
    {

        $access_slug = $this->input->post('access_slug');
        if (empty($access_slug)) {

            $data = $this->input->post();
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            echo  $this->store_model->create($data);

        } else {
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            return $this->store_model->update($access_slug);
        }

    }

    private function redirectToHome($redirect = NULL)
    {
        redirect($this->uri->segment(1,NULL).'/store/'.$redirect);
    }


    function product_list($access_slug){


        $data['title']=$this->lang->line('mall_under_list');
        $data['colModel']=
        "{display: 'Shop Name', name : 'shop_name',width : 240, sortable : true },
        {display: 'Shop no', name : 'shop_no',width : 60, sortable : true},
        {display: 'Level', name : 'level',width : 40, sortable : true},
        {display: 'Phone', name : 'business_phone',width : 120, sortable : false},
        {display: 'Contact Person', name : 'contact_person', sortable : false,width : 140},
        {display: 'Action', name : 'action', class : 'action',  sortable : false, width : 70}
        ";
        $data['searchitems']=
        "{display: 'Shop Name', name : 'shop_name', isdefault: true},
        {display: 'Shop No', name : 'shop_no'},
        {display: 'Level', name : 'level'},
        {display: 'Phone', name : 'business_phone'}
        ";
        $data['usepager']=true;
        $data['sortname']='shop_name';
        $data['sortorder']='asc';
        $data['rp']=20;
        $data['accessFun']="mallUnderPaging/".$access_slug;
        $this->load->view('shoppingmall/mall/shop_list_view',$data);
    }

    function productPaging()
    {
       echo $this->store_model->mallUnderPaging();
    }

    function check_store_name($shop_name)
    {
        $access_slug=$this->input->post('access_slug');
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $location_id=$this->input->post('location_id');
        $shop_group=$this->input->post('shop_group');
        return $this->store_model->checkStoreName($agent_uid,$shop_group,$location_id,strtolower($shop_name));
    }

    function check_domain_name($name){
        $access_slug=$this->input->post('access_slug');
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        return $this->store_model->checkDomainName($name,$agent_uid);

    }


}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */