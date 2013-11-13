<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/21/13
 * Time: 1:50 PM
 * To change this template use File | Settings | File Templates.
 */

class directories extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('paging'));
        $this->load->model(array('main/agent_model','main/directories_model','main/agent_model','main/product_model','main/breadcrumb_model'));
        $data = isset($_REQUEST)? $_REQUEST : '';
        $this->breadcrumb_model->setBreadcrumb($this->uri->segment(1,NULL),$this->uri->segment(2,NULL),$this->uri->segment(3,NULL),$data);

    }

    function index()
    {

    }

    function directory($directory,$page=1)
    {

        $this->session->unset_userdata('search_data');
        //$breadcrumb = $this->breadcrumb_model->getBreadcrumb();


        switch ($directory)
        {

            case "products":
                $this->products($directory,$page);
                break;
            case "shops":
                $this->shops($directory,$page);
                break;
            case "services":
                $this->services($directory,$page);
                break;
            case "brandshops":
                $this->brandshops($directory,$page);
                break;
            case "shoppingmalls":
                $this->shoppingmalls($directory,$page);
                break;
            case "wholesellers":
                $this->wholesellers($directory,$page);
                break;
            case "locations":
                $this->locations($directory,$page);
                break;
            case "default":
                redirect();
                braek;
        }


    }

    public function products($directory,$page){

        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']: 10 ;
        $this->data['group']=ucfirst($directory);
        $this->data['getProductListing'] = $this->directories_model->getProductListing($perpage,$page);
        $this->load->view('main/directories/products_view',$this->data);


    }
    public function shops($directory,$page){

        $this->session->unset_userdata('search_data');
        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $this->data['group']=ucfirst($directory);

        $this->data['where']=$this->input->post();
        $this->data['shop_group']=strtolower($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']:1;
        $this->data['getShopListing'] = $this->directories_model->getShopListing($this->data['shop_group'],$this->data['where'],$perpage,$page);
        $this->load->view('main/directories/shops_view',$this->data);
    }
    public function services($directory,$page){

        $this->session->unset_userdata('search_data');
        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $this->data['group']=ucfirst($directory);
        $this->data['locations'] = $this->directories_model->getGlobalSettings($setting_id=2);

        $this->data['where']=$this->input->post();
        $this->data['shop_group']=strtolower($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']:1;
        $this->data['getShopListing'] = $this->directories_model->getShopListing($this->data['shop_group'],$this->data['where'],$perpage,$page);
        $this->load->view('main/directories/shops_view',$this->data);

    }
    public function brandshops($directory,$page){

        $this->session->unset_userdata('search_data');
        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $this->data['group']=ucfirst($directory);
        $this->data['locations'] = $this->directories_model->getGlobalSettings($setting_id=2);

        $this->data['where']=$this->input->post();
        $this->data['shop_group']=strtolower($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']:1;
        $this->data['getShopListing'] = $this->directories_model->getBrandShopListing($this->data['shop_group'],$this->data['where'],$perpage,$page);
        $this->load->view('main/directories/services_view',$this->data);


    }

    public function wholesellers($directory,$page){

    }
    public function shoppingmalls($directory,$page){

    }
    public function locations($directory,$page){

    }



    function search($directory,$page=0)
    {

        switch ($directory)
        {
            case "products":
                $this->productSearch($directory,$page);
                break;
            case "shops":
                $this->shopSearch($directory,$page);
                break;
            case "services":

                $this->serviceSearch($directory,$page);
                break;
            case "brandshops":
                $this->brandshopSearch($directory,$page);
                break;
            case "wholesellers":
                $this->wholesellerSearch($directory,$page);
                break;
            case "shoppingmalls":
                $this->wshoppingmallSearch($directory,$page);
                break;
            case "locations":
                $this->serviceSearch($directory,$page);
                break;
            case "default":
                redirect();
                braek;
        }

    }


    public function productSearch($directory,$page){

        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']: 10 ;
        $this->data['group']=ucfirst($directory);
        $data =$_REQUEST;
        $this->data['getProductListing'] = $this->directories_model->productSearch($data,$perpage,$page);
        $this->load->view('main/directories/products_view',$this->data);


    }
    public function shopSearch($directory,$page){

        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $this->data['group']=ucfirst($directory);
        $this->data['locations'] = $this->directories_model->getGlobalSettings($setting_id=2);
        $this->data['data'] =$_REQUEST;
        $this->data['shop_group']=strtolower($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']: 1 ;
        $this->data['getShopListing'] = $this->directories_model->shopSearch($this->data['shop_group'] , $this->data['data'],$perpage,$page);
        $this->load->view('main/directories/shops_view',$this->data);


    }
    public function serviceSearch($directory,$page){

        $this->data['title']="Welcome DHAKA IN.::|::.".strtoupper($directory);
        $this->data['group']=ucfirst($directory);
        $this->data['locations'] = $this->directories_model->getGlobalSettings($setting_id=2);
        $this->data['data'] =$_REQUEST;
        $this->data['shop_group']=strtolower($directory);
        $perpage =isset($_REQUEST['perpage']) ? $_REQUEST['perpage']: 1 ;
        $this->data['getShopListing'] = $this->directories_model->shopSearch($this->data['shop_group'] , $this->data['data'],$perpage,$page);
        $this->load->view('main/directories/services_view',$this->data);

    }

    public function brandshopSearch($directory,$page){

    }
    public function wholesellerSearch($directory,$page){

    }
    public function shoppingmallSearch($directory,$page){

    }
    public function locationSearch($directory,$page){

    }



    function underProductCategory(){

        $catid_value = $_REQUEST['catid_value'];
        $catid_field = isset($_REQUEST['catid_field'])? $_REQUEST['catid_field'] : 1 ;

        $catid_label=((int)$catid_field+1);
        $catid_label ='catid_label_'.$catid_label;
        $result = $this->directories_model->getUnderProductCategory($catid_value,$catid_label);
        if(!empty($result) && $result ->num_rows() > 0){
            $this->data['catid_field']=((int)$catid_field+1);
            $this->data['category_field']=((int)$catid_field+2);
            $this->data['getCategories'] = $result->result();
           	$this->load->view('main/directories/product_category_combo_view',$this->data);
        }

    }

    public function agent_details()
    {

        $subdomain = isset($_REQUEST['agent']) ? $_REQUEST['agent']:'';
        $action = isset( $_REQUEST['action']) ? $_REQUEST['action']:'';
        $shop_group = isset( $_REQUEST['shop_group']) ? $_REQUEST['shop_group']:'shops';
        if(!empty($subdomain)){
            $this->session->set_userdata(array('sub_domain'=>$subdomain));
            $subdomain = $this->session->userdata('sub_domain');
        }else{
            $subdomain = $this->session->userdata('sub_domain');
        }

        switch ($action)
        {
            case "home":
                $this->agentHome($subdomain);
                break;
            case "products":
                $this->agentProducts($subdomain);
                break;
            case "locations":
                $this->agentLocations($subdomain);
                break;
            case "mall":
                $this->agentMall($subdomain);
                break;
            case "contact":
                $this->agentContact($subdomain);
                break;
            default:
                $this->agentDefault($subdomain,$shop_group);
                break;
        }

    }

    public function agentDefault($subdomain,$shop_group){

        $this->data['getAgentProductOffers'] = $this->agent_model->getAgentProductOffers($subdomain,'show_home');
        $this->data['agents'] = $this->agent_model->getAgentDetails($subdomain,$shop_group);
        $this->load->view('main/agent/default_view',$this->data);
    }

    public function agentHome($subdomain){

        $this->data['getAgentProductOffers'] = $this->agent_model->getAgentProductOffers($subdomain,'show_home');
        $this->data['row'] = $this->agent_model->getAgentDetails($subdomain);
        $this->load->view('main/agent/home_view',$this->data);
    }

    public function agentProducts($subdomain){

        $this->data['getAgentProducts'] = $this->agent_model->getAgentProducts($subdomain);
        $this->load->view('main/agent/products_view',$this->data);
    }
    public function agentCategories($subdomain){

        //$this->data['getAgentCategories'] = $this->agent_model->getAgentCategories($subdomain);
        $this->data['row'] = $this->agent_model->getAgentDetails($subdomain);
        $this->load->view('main/agent/categories_view',$this->data);
    }
    public function agentLocations($subdomain){

        $this->data['getAgentLocations'] = $this->agent_model->getAgentLocations($subdomain);
        $this->load->view('main/agent/locations_view',$this->data);
    }
    public function agentMall($subdomain){

        $this->data['getAgentMall'] = $this->agent_model->getAgentMall($subdomain);
        $this->load->view('main/agent/mall_view',$this->data);
    }
    public function agentContact($subdomain){

        $this->data['getAgentProductOffers'] = $this->agent_model->getAgentProductOffers($subdomain);
        $this->data['row'] = $this->agent_model->getAgentDetails($subdomain);
        $this->load->view('main/agent/contact_view',$this->data);
    }

    public function product_details(){

        $product_slug = $this->input->get('product_slug');
        $this->data['result'] = $this->product_model->productDefaultDetails($product_slug);
        $this->load->view('main/products/default_preview',$this->data);
    }

    public function product_preview(){

        $action = $this->input->post('action');
        $product_id = $this->input->post('product_id');
        $product_category_id = $this->input->post('product_category_id');
        $this->data['row'] = $this->product_model->productActionDetails($product_category_id,$product_id,$action);
        if(empty($this->data['row'])){
            echo "failed";
        }else{
            $this->load->view('main/products/preview',$this->data);
        }

    }

    public function product_category(){


        $product_category_id = $this->input->get('product_category_id');
        $this->data['row'] = $this->product_model->productActionDetails($product_category_id);
        if(empty($this->data['row'])){
            echo "failed";
        }else{
            $this->load->view('main/products/preview',$this->data);
        }

    }

    public  function mall_details()
    {
    echo "<strong>Pophover data loading</strong>";
    }


}
