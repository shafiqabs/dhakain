<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model(array('main/agent_model','main/directories_model','main/agent_model','main/product_model','main/breadcrumb_model'));

    }

	function details($product_slug)
	{

		$data['title']=$product_slug;
        $data['row'] = $this->product_model->productDetails($product_slug);
        if(in_array(1,explode(',',$data['row']->grouping_parent_id))){
            $data['brand'] = $this->product_model->brandName($data['row']->product_id,'brand');
        }
        $data['groups'] = $this->product_model->groupLists($data['row']->product_id,$data['row']->grouping_parent_id);

        $catdata = array('catid_label_1'=>$data['row']->catid_label_1,'catid_label_2'=>$data['row']->catid_label_2,'catid_label_3'=>$data['row']->catid_label_3,'catid_label_4'=>$data['row']->catid_label_4,'product_name'=>$data['row']->product_name);
        $this->breadcrumb_model->setBreadcrumb($this->uri->segment(1,NULL),'products','',$catdata);

        $catslug = array('catid_label_1'=>$data['row']->category_slug1,'catid_label_2'=>$data['row']->category_slug2,'catid_label_3'=>$data['row']->category_slug3,'catid_label_4'=>$data['row']->category_slug4);
        $catval = array('catid_val_1'=>$data['row']->category_name1,'catid_val_2'=>$data['row']->category_name2,'catid_val_3'=>$data['row']->category_name3,'catid_val_4'=>$data['row']->category_name4);

        $data['category'] = $this->product_model->getCategoryURL($catval,$catslug);

        $this->load->view('products/details_view',$data);
	}

    public function getReletaedProducts(){
        $data=$_REQUEST;
        $this->load->view('products/related_products',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */