<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/20/13
 * Time: 12:22 PM
 * To change this template use File | Settings | File Templates.
 */

class Ajaxload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('main/productcategory_model','main/product_model','main/agent_model'));

    }

    public function helps(){
        $this->data['helps']=$this->db->where(array('status'=>1))->get('site_helps')->result();
        $this->load->view('main/ajaxload/help_view',$this->data);
    }

    public function carousel(){

        sleep(1);
        $this->data['result'] =$this->product_model->getIsHome();
        $this->load->view('main/ajaxload/carousel',$this->data);

    }

    public function breadcrumb(){
        print_r($_REQUEST);

    }
    public function menuProductCategories($product_group=NUll){


        switch ($product_group) {

            case "shops":
                $this->data['searchProductCategories']=$query=$this->productcategory_model->listProductCategory($product_group='shops');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getMenuCategorylisting($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/ajaxload/menu_categories',$this->data);
                break;

            case "services":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "brand-shop":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "wholesalers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "shopping-mall":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "super-store":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "others":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

        }

    }
    public function locationProductCategories(){


        $product_group=$this->input->post('shop_group');

        switch ($product_group) {

            case "shops":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "services":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "brand-shop":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "wholesalers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "shopping-mall":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "super-store":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

            case "others":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/location_product_categories',$this->data);
                break;

        }

    }
    public function getFeatureCategories(){
        sleep(2);
        $this->load->view('main/ajaxload/feature_categories_view');
    }
    public function getProductOffers(){

        sleep(3);
        $product_feature=$_REQUEST['offer'];

        switch ($product_feature) {

            case "new-in":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='New In';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;

            case "best-sellers":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='Best Sellers';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;

            case "brand-sellers":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='Brand Sellers';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;

            case "top-offers":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='Top Offers';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;

            case "brand-new":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='Brand New';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;

            case "specials":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='Specials';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;

            case "all-offer":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='All Offer';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                $this->load->view('main/ajaxload/product_offer_view',$this->data);
                break;


        }

    }

    public function getShopSponsor(){

       sleep(10);
        $shop_group=$_REQUEST['shop_group'];
        $this->data['getSponsoredStore']=$query=$this->main_model->getSponsoredStore();
        $this->load->view('main/ajaxload/shop_sponsor_view', $this->data);

    }

    public function categories($catid_label_1=NULL,$catid_label_2=NULL,$catid_label_3=NULL)
    {

        $this->data['title']="All Product Categories";
        $wheres['location_id']=$this->input->post('location_id');
        $wheres['product_group']=$this->input->post('shop_group');
        $this->data['group']="catid_label_1";
        $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
        $this->load->view('main/categories_products/categories_products_view',$this->data);

    }
    public function locations($location=NULL,$catid_label_1=NULL,$catid_label_2=NULL)
    {
        $this->load->view('main/categories_products/location_categories_products_view');
    }

    function product_display_view()
    {
        $this->load->view('categories_products/products_display_view');
    }
}

/* End of file welcome.php */
/* Location: ./application/module/main/controllers/ajaxload.php */