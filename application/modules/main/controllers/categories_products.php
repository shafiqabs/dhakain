<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_products extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model(array('main/productcategory_model','main/product_model'));

    }

    public function MenuProductCategories($product_group=NUll){

        switch ($product_group) {

            case "shops":

                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getMenuCategorylisting($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/categories_products/menu_categories',$this->data);
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

    public function getAllFeature(){

        $product_feature=$this->input->post('shop_group');

        switch ($product_feature) {

            case "new-in":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('product_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;

            case "best-sellers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;

            case "brand-sellers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;

            case "top-offers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;

            case "brand-new":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;

            case "specials":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;

            case "all-offer":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/feature_products',$this->data);
                break;


        }



    }

    public function getProductOffers(){

        $product_feature=$_REQUEST['offer'];

        switch ($product_feature) {

            case "new-in":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='New In';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                //$this->data['getProductFeatures']=$query=$this->product_model->getProductFeatures($product_group='shops',$listing_type=122,'new-in');
                $this->load->view('main/categories_products/product_offer_view',$this->data);
                break;

            case "best-sellers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "brand-sellers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "top-offers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "brand-new":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "specials":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "all-offer":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;


        }

    }
    public function getDiscountOffers(){

        $product_feature=$_REQUEST['offer'];

        switch ($product_feature) {

            case "new-in":

                $offer=$_REQUEST['offer'];
                $this->data['offer_title']='New In';
                $product_group=$_REQUEST['product_group'];
                $this->data['getProductOffers']=$query=$this->product_model->getProductFeatures($product_group=$product_group,$listing_type=122,$offer=NULL);
                //$this->data['getProductFeatures']=$query=$this->product_model->getProductFeatures($product_group='shops',$listing_type=122,'new-in');
                $this->load->view('main/categories_products/product_offer_view',$this->data);
                break;

            case "best-sellers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "brand-sellers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "top-offers":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "brand-new":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "specials":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;

            case "all-offer":

                $wheres['location_id']=$this->input->post('location_id');
                $wheres['product_group']=$this->input->post('shop_group');
                $this->data['group']="catid_label_1";
                $this->data['getProductCategories'] = $this->productcategory_model->getProductCategories($wheres,$this->data['group']);
                $this->data['wheres']=$wheres;
                $this->load->view('main/products/product_offer_view',$this->data);
                break;


        }

    }

    public function categories($catid_label_1=NULL,$catid_label_2=NULL,$catid_label_3=NULL)
	{
		//echo $catid_label_1;
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
/* Location: ./application/controllers/welcome.php */