<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class service_template_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    function categorylist($parent_id=0){

        $this->db->select();
        $this->db->where(array('category_type'=>2,'parent_id'=>$parent_id));
        $this->db->order_by("parent_id", "asc");
        return $this->db->get('product_category');
    }


    function template_insert()
	{

        $product_template_name=$this->input->post('product_template_name');
        $product_template_type=$this->input->post('product_template_type');
        $product_template_layout=$this->input->post('product_template_layout');
        $status=$this->input->post('status');

        $array=array('template_group'=>2,'product_template_name'=>$product_template_name,'product_template_type'=>$product_template_type,'product_template_layout'=>$product_template_layout,'status' => $status);
        $this->db->set($array);
        $this->db->insert('product_template_manage');
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

	}
	
	function template_update(){

        $product_template_manage_id=$this->input->post('product_template_manage_id');
        $product_template_name=$this->input->post('product_template_name');
        $product_template_type=$this->input->post('product_template_type');
        $product_template_layout=$this->input->post('product_template_layout');
        $status=$this->input->post('status');

        $array=array('template_group'=>2,'product_template_name'=>$product_template_name,'product_template_type'=>$product_template_type,'product_template_layout'=>$product_template_layout,'status' => $status);
        $this->db->set($array);
        $this->db->where('product_template_manage_id',$product_template_manage_id);
        $this->db->update('product_template_manage');
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
	}



	/* this function use for under template category select*/
	
	function get_template_category_check($category_id=array()){
	
		$this->db->select('category_id');
		$query=$this->db->get('product_template_manage');
		$query-> num_rows();
		//exit();
		$stack=array();
		$i=0;
		foreach ( $query->result() as $row ){
		if($row->category_id ==""){
		$stack[$i]=$row->category_id;
		}
		$i++;
		}
		
		
		if($query-> num_rows() == count($stack))
		{
			return $category_id;		
		}else{
			
			$serialize_id=array();
			$i=0;
			foreach ( $query->result() as $row ){
				$serialize_id[$i]=unserialize($row->category_id);
				$i++;
			}
			$serializeid=$this->array_flatten_recursive($serialize_id);
			return $result = array_diff($category_id,$serializeid);
			
		}
				 
	}
	
	function array_flatten_recursive($array) { 
	   if (!$array) return false;
	   $flat = array();
	   $RII = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
	   foreach ($RII as $value) $flat[] = $value;
	   return $flat;
	}

	/* this function use for under template category select*/

	function get_template_category($product_template_manage_id=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('product_template_manage_id',$product_template_manage_id);
		$query=$this->db->get('product_template_manage');
		$row=$query->result();
		if($query-> num_rows() >0){
		$serialize_id=unserialize($row[0]->category_id);
		if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
    	return $category_id;
		}else{
		return false;
		}
		}else{
		return false;
		}
				 
	}

     function service_template_category_add(){

         $product_template_manage_id=$this->input->post('product_template_manage_id');
         if(is_array($this->input->post('category_id'))){
             $array=array('category_id'=>'');
             $this->db->set($array);
             $this->db->where('product_template_manage_id',$product_template_manage_id);
             $this->db->update('product_template_manage');
             $serialize=$this->get_template_category_check($this->input->post('category_id'));
             //print_r($serialize);
             //exit();

             if($this->get_template_category_check($this->input->post('category_id')) ==true){

                 $category_id=serialize($serialize);
                 $array=array('category_id'=>$category_id);
                 $this->db->set($array);
                 $this->db->where('product_template_manage_id',$product_template_manage_id);
                 $this->db->update('product_template_manage');
                 $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
             }
         }


     }

    function service_single_insert()
    {
        $product_template_manage_id=$this->input->post('product_template_manage_id');
        $parent_id=$this->input->post('parent_id');
         if($this->get_image_category_check(array($this->input->post('parent_id'))) ==true){
             $category_id=serialize(array($parent_id));
             $array=array('category_id'=>$category_id);
             $this->db->set($array);
             $this->db->where('product_template_manage_id',$product_template_manage_id);
             $this->db->update('product_template_manage');
             $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
         }
    }

    function service_template_multidelete()
    {
        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->where('product_template_manage_id',$val);
            $this->db->delete('product_template_manage');
        }
	}

    function service_template_delete()
    {
        $this->db->where('product_template_manage_id',$this->uri->segment(4,0));
		$this->db->delete('product_template_manage');
    }

    function service_single_template_multidelete()
    {
        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->set(array('category_id'=>''));
            $this->db->where('product_template_id',$val);
            $this->db->update('product_template_manage');

        }
	}

    function service_single_template_delete()
    {
        $this->db->where('product_template_manage_id',$this->uri->segment(4,0));
		$this->db->set(array('category_id'=>''));
		$this->db->update('product_template_manage');
    }

    function service_template_value()
    {
        $product_template_id=$this->uri->segment(4,0);
		$this->db->where('product_template_id',$product_template_id);
		$this->db->delete('product_template_metadata');


		$meta_label=$this->input->post('meta_label');
		if(is_array($meta_label)){
			foreach ($meta_label as $key => $value)
			{
				$data = array(
					'product_template_id'    => $product_template_id,
					'meta_label'    => $_POST['meta_label'][$key],
					'meta_description'   => $_POST['meta_description'][$key]
				);
				$this->db->insert('product_template_metadata',$data);

			}
		}

    }

	

	
	
	
}

