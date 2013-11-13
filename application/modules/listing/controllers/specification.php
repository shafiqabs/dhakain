<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Specification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('store_model','listing/product_model','listing/specification_model'));
		//$this->output->enable_profiler(TRUE);
		
	}


    public function edit($access_slug,$slug){

       // exit;
        $this->storeInfo = $this->store_model->storeInformation(array('agent_uid','shop_name','brand_status','setup_website','listing_type'),$access_slug);
        $data['store_name'] = $this->storeInfo[0]->shop_name;
        $agent_uid = $this->storeInfo[0]->agent_uid;
        $data['storeInfo']=$this->storeInfo;
        $data['access_slug'] = $access_slug;




        /*----------------  Information of product ----------------------*/


        $productInfo=$this->product_model->productInformation(array('product_id','product_name','slug'),$agent_uid , $slug);
        $data['productInfo']=$productInfo;
        $product_id= $productInfo[0]->product_id;
        $data['selected_category']=$this->product_model->typeProduct($agent_uid , $product_id);


        
        $catID = $this->product_model->typeProduct($agent_uid , $product_id);

        $data['cusquery']=$this->specification_model->checkSpecificTemplate($catID);



        $data['title']=$this->lang->line('product_specification');
        $data['result']=$this->specification_model->getSpecification($agent_uid , $product_id);


        $formdata=$this->input->post();

        if (!empty($formdata)) {
            $this->save($access_slug, $productInfo[0]->slug,$product_id);
        }

        $this->load->view('listing/specification/specification_view',$data);

    }

    private function save($access_slug=NULL,$slug=NULL,$product_id=0){


        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->specification_model->update($agent_uid, $product_id);
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        redirect($this->uri->segment(1,NULL).'/specification/'.$access_slug.'/'.$slug);

    }

function listing_product_specification()
{

       $data['selected_category'] = $this->product_model->typeProduct($agent_uid , $product_id);
       $catID = $this->listing_product_model->product_slected_category($agent_uid , $product_id);
       if($this->listing_product_model->return_template($catID[0]->catid_label_4) != false ){
           $data['cusquery']=$this->listing_product_model->return_template($catID[0]->catid_label_4);
       }elseif($this->listing_product_model->return_template($catID[0]->catid_label_3) != false ){
           $data['cusquery']=$this->listing_product_model->return_template($catID[0]->catid_label_3);
       }elseif($this->listing_product_model->return_template($catID[0]->catid_label_2) != false ){
           $data['cusquery']=$this->listing_product_model->return_template($catID[0]->catid_label_2);
       }elseif($this->listing_product_model->return_template($catID[0]->catid_label_1) != false ){
           $data['cusquery']=$this->listing_product_model->return_template($catID[0]->catid_label_1);
       }
       $this->listing_product_model->check_listing_product( $agent_uid , $product_id);
       $data['title']="Product specification";

       $this->db->where(array('agent_uid'=>$this->uri->segment(4,0),'product_id'=>$this->uri->segment(5,0),'extra_field'=>0));
       $this->db->order_by('additional_id','ASC');
       $query= $this->db->get('listing_specific_value');
       $data['specific_value'] =$query->result();
       $this->db->where(array('agent_uid'=>$this->uri->segment(4,0),'product_id'=>$this->uri->segment(5,0),'extra_field'=>1));
       $data['specific_extra'] = $this->db->get('listing_specific_value');
       $this->load->view('seller/listing_product/listing_product_specification_view',$data);
   
   }



public function add_listing_specification()
{
		$agent_uid=$this->uri->segment(4,0);
        $product_id=$this->uri->segment(5,0);
		$this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
		$this->db->delete('listing_specific_value');

        $label_name=$this->input->post('label_name');
       $label_name=$this->input->post('meta_value');
       //print_r($label_name);
		$count=count($label_name);
   		foreach ($label_name as $key => $value)
		{
			$data = array(
               'product_id'         => $product_id,
               'agent_uid'          => $agent_uid,
			   'label_name'         => $_POST['label_name'][$key],
               'meta_value'         => $_POST['meta_value'][$key],
               'extra_field'        => $_POST['extra_field'][$key]
            );
		    $this->db->insert('listing_specific_value',$data);

	   }
      redirect('seller/listing_product/listing_product_specification/'.$agent_uid.'/'.$product_id);
}

public function product_specification_ordering_view()
{

        $data['title']=$this->lang->line('specification_ordering');

        $this->db->where(array('agent_uid'=>$this->uri->segment(4,0),'product_id'=>$this->uri->segment(5,0)));
        $this->db->order_by('ordering','ASC');
        $data['specific_value'] = $this->db->get('listing_specific_value');
        $this->load->view('seller/listing_product/listing_product_specification_ordering_view',$data);

}

public function product_specification_ordering()
{
        $listItem=$this->input->post('listItem');
        print_r($listItem);
        $i=1;
        foreach ($listItem as $key => $value)
        {
            $data = array(
                  'ordering'        => $i
            );
            $additional_id=$_POST['listItem'][$key];
            $this->db->where('additional_id',$additional_id)->update('listing_specific_value',$data);
        $i++;

        }
}
	
	
 	
}
/* End of file Home.php */
/* Location: ./system/application/controllers/Home.php */