<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Image_setting_product_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    function categorylist($parent_id=0){

        $this->db->select();
        $this->db->where('parent_id',$parent_id);
        $this->db->order_by("parent_id", "asc");
        return $this->db->get('product_category');
    }


    function image_setting_product_insert()
	{

        $image_size_type=$this->input->post('image_size_type');
        $settings_image_name=$this->input->post('settings_image_name');
		$large_image_width=$this->input->post('large_image_width');
		$large_image_height=$this->input->post('large_image_height');
		$medium_image_width=$this->input->post('medium_image_width');
		$medium_image_height=$this->input->post('medium_image_height');
		$thumb_image_width=$this->input->post('thumb_image_width');
		$thumb_image_height=$this->input->post('thumb_image_height');
		$small_image_width=$this->input->post('small_image_width');
		$small_image_height=$this->input->post('small_image_height');
        $status=$this->input->post('status');

        $array=array('image_setting_type'=>1,'image_size_type'=>$image_size_type,'settings_image_name' =>trim($settings_image_name),'large_image_width' =>trim($large_image_width),'large_image_height' =>trim($large_image_height),'medium_image_width' =>trim($medium_image_width),'medium_image_height' =>trim($medium_image_height),'thumb_image_width' =>trim($thumb_image_width),'thumb_image_height' =>trim($thumb_image_height),'small_image_width' =>trim($small_image_width),'small_image_height' =>trim($small_image_height),'status' =>$status);
        $this->db->set($array);
        $this->db->insert('settings_image_size');
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

	}
	
	function image_setting_product_update(){

        $image_size_type=$this->input->post('image_size_type');
        $settings_image_name=$this->input->post('settings_image_name');
		$large_image_width=$this->input->post('large_image_width');
		$large_image_height=$this->input->post('large_image_height');
		$medium_image_width=$this->input->post('medium_image_width');
		$medium_image_height=$this->input->post('medium_image_height');
		$thumb_image_width=$this->input->post('thumb_image_width');
		$thumb_image_height=$this->input->post('thumb_image_height');
		$small_image_width=$this->input->post('small_image_width');
		$small_image_height=$this->input->post('small_image_height');
        $status=$this->input->post('status');
        $settings_image_size_id=$this->input->post('settings_image_size_id');

        $array=array('image_setting_type'=>1,'image_size_type'=>$image_size_type,'settings_image_name' =>trim($settings_image_name),'large_image_width' =>trim($large_image_width),'large_image_height' =>trim($large_image_height),'medium_image_width' =>trim($medium_image_width),'medium_image_height' =>trim($medium_image_height),'thumb_image_width' =>trim($thumb_image_width),'thumb_image_height' =>trim($thumb_image_height),'small_image_width' =>trim($small_image_width),'small_image_height' =>trim($small_image_height),'status' =>$status);
        $this->db->set($array);
        $this->db->where('settings_image_size_id',$settings_image_size_id);
        $this->db->update('settings_image_size');
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
	}



	/* this function use for under template category select*/
	
	function get_image_category_check($category_id=array()){

		$this->db->select('category_id');
		$query=$this->db->get('settings_image_size');
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


	function get_image_size_category($settings_image_size_id=0,$category_id=0){

		$this->db->select();
		$this->db->where('settings_image_size_id',$settings_image_size_id);
		$query=$this->db->get('settings_image_size');
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


     function image_setting_product_add(){


         $settings_image_size_id=$this->input->post('settings_image_size_id');
         if(is_array($this->input->post('category_id'))){
             $array=array('category_id'=>'');
                $this->db->set($array);
                $this->db->where('settings_image_size_id',$settings_image_size_id);
                $this->db->update('settings_image_size');
                $serialize=$this->get_image_category_check($this->input->post('category_id'));


             if($this->get_image_category_check($this->input->post('category_id')) == true){

                 $category_id=serialize($serialize);
                 //print_r($category_id);
                 $array=array('category_id'=>$category_id);
                 $this->db->set($array);
                 $this->db->where('settings_image_size_id',$settings_image_size_id);
                 $this->db->update('settings_image_size');
                 $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
             }
         }


     }

    function image_setting_single_product_insert()
    {
        $settings_image_size_id=$this->input->post('settings_image_size_id');
        $parent_id=$this->input->post('parent_id');

         if($this->get_image_category_check(array($this->input->post('parent_id'))) ==true){
             $category_id=serialize(array($parent_id));
             $array=array('category_id'=>$category_id);
             $this->db->set($array);
             $this->db->where('settings_image_size_id',$settings_image_size_id);
             $this->db->update('settings_image_size');
             $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
         }
    }

    function image_setting_single_product_multidelete()
    {
        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->set(array('category_id'=>''));
            $this->db->where('settings_image_size_id',$val);
            $this->db->update('settings_image_size');
        }
	}

    function image_setting_single_product_delete()
    {
        $this->db->where('settings_image_size_id',$this->uri->segment(4,0));
        $this->db->set(array('category_id'=>''));
		$this->db->update('settings_image_size');
    }


    function image_setting_product_multidelete()
    {
        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->set(array('category_id'=>''));
            $this->db->where('settings_image_size_id',$val);
            $this->db->delete('settings_image_size');
        }
	}

    function image_setting_product_delete()
    {
        $this->db->where('settings_image_size_id',$this->uri->segment(4,0));
        $this->db->set(array('category_id'=>''));
		$this->db->delete('settings_image_size');
    }
	
}

