<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/listing_model','listing/product_model'));
		//$this->output->enable_profiler(TRUE);
		
	}


    public function  lists($access_slug=NULL)
    {


        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;
        $data['title']=$this->lang->line('list_product');

        if($this->storeInfo[0]->listing_type == '122'){

        $data['colModel']=
            "{display: 'Title', name : 'product_name',width : 280, sortable : true },
            {display: 'Created', name : 'created',width : 60, sortable : true},
            {display: 'Price', name : 'price',width : 50, sortable : false},
            {display: 'Quantity', name : 'quantity', sortable : false,width : 50},
            {display: 'Expire Date', name : 'expired', sortable : true ,width :60},
            {display: 'Status', name : 'product_status', sortable : true ,width :80},
            {display: 'Action', name : 'action', class : 'action',  sortable : false, width : 90}
            ";
            $data['searchitems']=
            "{display: 'Title', name : 'product_name', isdefault: true},
            {display: 'Created', name : 'created'},
            {display: 'Expire Date', name : 'expired'},
            {display: 'Product Status', name : 'product_status'}
            ";
            $data['usepager']=true;
            $data['sortname']='product_name';
            $data['sortorder']='DESC';
            $data['rp']=20;
            $data['url']= site_url('listing/paging/'.$this->uri->segment(1,NULL).'/'.$access_slug);

            $this->load->view('listing/lists/list_view',$data);
        }else{

            $data['query']= $this->listing_model->informationList($access_slug);
            $this->load->view('listing/lists/information_list_view',$data);
        }
    }

    function paging($modules,$access_slug)
    {
        echo $this->listing_model->productPaging($modules,$access_slug);
    }

    function status($access_slug,$slug){

       //echo $slug;
        $jsonData = $this->listing_model->productStatus($access_slug,$slug);
        echo json_encode($jsonData);

    }

    function sorting($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->listing_model->sortingProduct($agent_uid);
    }
	function delete($access_slug,$slug){

        $jsonData = $this->listing_model->productDelete($access_slug,$slug);
        echo json_encode($jsonData);
	   
	}
	
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */