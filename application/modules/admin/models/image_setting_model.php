<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Image_setting_model extends CI_Model
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


    function image_common_insert()
	{

		$image_setting_name=$this->input->post('settings_common_image_size_name');
	    $large_image_width=$this->input->post('large_image_width');
		$large_image_height=$this->input->post('large_image_height');
		$crop_image_width=$this->input->post('crop_image_width');
		$crop_image_height=$this->input->post('crop_image_height');
		$crop_image_left=$this->input->post('crop_image_left');
		$crop_image_top=$this->input->post('crop_image_top');
        $status=$this->input->post('status');

        $array=array('settings_common_image_size_name'=>$image_setting_name,'large_image_width' =>trim($large_image_width),'large_image_height' =>trim($large_image_height),'crop_image_width' =>trim($crop_image_width),'crop_image_height' =>trim($crop_image_height),'crop_image_left' =>trim($crop_image_left),'crop_image_top' =>trim($crop_image_top),'status' =>$status);
        $this->db->set($array);
        $this->db->insert('settings_common_image_size');
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

	}
	
	function image_common_update(){

        $settings_common_image_size_id=$this->input->post('settings_common_image_size_id');
        $image_setting_name=$this->input->post('settings_common_image_size_name');
	    $large_image_width=$this->input->post('large_image_width');
		$large_image_height=$this->input->post('large_image_height');
		$crop_image_width=$this->input->post('crop_image_width');
		$crop_image_height=$this->input->post('crop_image_height');
		$crop_image_left=$this->input->post('crop_image_left');
		$crop_image_top=$this->input->post('crop_image_top');
        $status=$this->input->post('status');

        $array=array('settings_common_image_size_name'=>$image_setting_name,'large_image_width' =>trim($large_image_width),'large_image_height' =>trim($large_image_height),'crop_image_width' =>trim($crop_image_width),'crop_image_height' =>trim($crop_image_height),'crop_image_left' =>trim($crop_image_left),'crop_image_top' =>trim($crop_image_top),'status' =>$status);
        $this->db->set($array);
        $this->db->where('settings_common_image_size_id',$settings_common_image_size_id);
        $this->db->update('settings_common_image_size');
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
	}

    function image_common_multidelete()
    {
        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->where('settings_common_image_size_id',$val);
            $this->db->delete('settings_common_image_size');
        }
	}

    function image_common_delete()
    {
        $this->db->where('settings_common_image_size_id',$this->uri->segment(4,0));
		$this->db->delete('settings_common_image_size');
    }


}

