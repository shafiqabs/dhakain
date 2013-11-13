<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @Global variable function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layouts_model extends CI_Model
{


	function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');

	}




	function uploadLayoutImage()
    {
        //return(array($fileUp="1",$output_file="2"));
       // exit();
        $settings_layout_id=$this->input->post('settings_layout_id');
        $up_filename = $_FILES['image_name']['name'];
        $source_file = $_FILES['image_name']['tmp_name'];
        $mimetype = $_FILES['image_name']['type'];
        $filesize = $_FILES['image_name']['size'];
        $output_file_path = 'uploads/files/layouts/';

            if($up_filename && $settings_layout_id ){
                $rows=$this->db->select('layout_image')->where('settings_layout_id',$settings_layout_id)->from('settings_layout')->get()->result();
                if (file_exists(RELATIVE_PATH.'/'.$rows[0]->layout_image))
                {
                    unlink(RELATIVE_PATH.'/'.$rows[0]->layout_image);
                }
            }

            if(file_exists($source_file) && is_file($source_file)){

                $file_name = $this->image_model->prep_filename($up_filename);
                $file_ext = $this->image_model->get_extension($up_filename);
                $fileUp = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);

                $outputFile='uploads/files/layouts/'.$fileUp;
                resize_image($source_file, $outputFile, 100,100);

            }else if($settings_layout_id >0 && !file_exists($source_file) ){

                $rows=$this->db->select('image_name,layout_image')->where('settings_layout_id',$settings_layout_id)->from('settings_layout')->get()->result();
                $fileUp =   isset($rows[0]->image_name) ? $rows[0]->image_name:'';
                $outputFile = isset($rows[0]->layout_image) ? $rows[0]->layout_image:'';

            }else{

                $fileUp='';
                $outputFile='';
            }

        $array=array('layout_name'=>trim($_POST['layout_name']),'layout_type'=>$_POST['layout_type'],'column_no'=>$_POST['column_no'],'layout_divide'=>$_POST['layout_divide'],'image_name'=>$fileUp,'layout_image'=>$outputFile,'status' =>$_POST['status']);
        $this->db->set($array);
        if($settings_layout_id > 0){
            $this->db->where('settings_layout_id',$settings_layout_id);
            $this->db->update('settings_layout');
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            redirect('settings/layouts/layouts_edit/'. $settings_layout_id);

        }else{

            $this->db->insert('settings_layout');
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            redirect('settings/layouts');
        }



    }

    function layoutsDelete($id)
    {

        if(is_array($this->input->post('list'))){

            $array=$this->input->post('list');
            $sql=$this->db->where_in('layout_id',$array)->from('settings_template')->get();
            if($sql->num_rows() > 0)
            {
                $this->session->set_flashdata('warning_msg',$this->lang->line('layouts_restiction_edit'));
                redirect('settings/layouts/layouts_list');

            }else{

                foreach($array as $layoutID){

                    $this->db->select('layout_image')->where(array('settings_layout.settings_layout_id'=>$layoutID));
                    $sql=$this->db->get('settings_layout');
                    $row=$sql->result();
                    $image_path=isset($row[0]->layout_image)? $row[0]->layout_image :'';
                    if($image_path){
                        if (file_exists($image_path)){
                            unlink(RELATIVE_PATH.'/'.$image_path);
                        }
                    }
                }

                $this->db->where_in('settings_layout_id',$array);
                $this->db->delete('settings_layout');
                $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));

            }
        }else{

            $settings_layout_id=$this->uri->segment(4,0);
            $sql=$this->db->where('layout_id',$settings_layout_id)->from('settings_template')->get();
            if($sql->num_rows() > 0)
            {
                $this->session->set_flashdata('warning_msg',$this->lang->line('layouts_restiction_edit'));
                redirect('settings/layouts/layouts_list');

            }else{

                $this->db->select('layout_image')->where(array('settings_layout.settings_layout_id'=>$this->uri->segment(4,0)));
                $sql=$this->db->get('settings_layout');
                $row=$sql->result();
                $image_path=isset($row[0]->layout_image)? $row[0]->layout_image :'';
                if($image_path){
                    if (file_exists($image_path)){
                        unlink(RELATIVE_PATH.'/'.$image_path);
                    }
                }

                $this->db->where('settings_layout_id',$this->uri->segment(4,0));
                $this->db->delete('settings_layout');
            }
            $this->session->set_flashdata('delete_msg',$this->lang->line('delete_msg'));
        }
        redirect('settings/layouts/layouts_list');

    }

    function deleteBanner($agent_uid,$banner_id){

        $this->db->select('image_path')->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id));
        $sql=$this->db->get('banner_image');
        $row=$sql->result();
        $image_path=isset($row[0]->image_path)? $row[0]->image_path :'';
        if($image_path){
            if (file_exists($image_path)){
                unlink(RELATIVE_PATH.'/'.$image_path);
            }
        }
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))->delete('banner_image');

    }
    function statusBanner($agent_uid,$banner_id){
        $status = $this
            ->db
            ->select('status')
            ->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))
            ->get('banner_image')->result();
        if($status == 1){
            $status=0;
        }else{
            $status=1;
        }
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))->set(array('status'=>$status))->update('banner_image');

    }
	
	

}