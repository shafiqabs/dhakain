<?php

/**
 * Shoppingmall  Model
 *
 * @package	
 * @subpackage	
 * @category	
 * @author	Md Shafiqul Islam
 * @link	
 */
class Banner_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        //$this->load->library('image_lib');
    }

    function bannerImageLogo($agent_uid){

        $list=$this->db->where(array('agent_uid'=>$agent_uid))->get('banner_image')->result();

        $this->db->select('image_path');
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'status'=>1));
        $this->db->order_by('banner_id','desc');
        $banner_image=$this->db->get('banner_image');

        $this->db->select('*');
        $this->db->where(array('logo_image.agent_uid'=>$agent_uid));
        $logo=$this->db->get('logo_image');
        return array($list,$banner_image,$logo);
    }

    function banner_upload($agent_uid,$path=NULL)
    {

        $this->image_model->create_dir_new($agent_uid);
        $file_temp =$_FILES["image_name"]["tmp_name"];
        $up_filename=$_FILES["image_name"]["name"];

        $output_file_path =$path;
        $file_name = $this->image_model->prep_filename($up_filename);
        $file_ext = $this->image_model->get_extension($up_filename);
        $filename = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);
        $targetFile =  str_replace('//','/',$output_file_path) .$filename;

        move_uploaded_file($file_temp,$targetFile);
        list($width, $height) = getimagesize($output_file_path.'/'.$filename);
        if(960 > $width  ||  100 > $height ){
            if (file_exists($path.'/'.$filename)){
                unlink(RELATIVE_PATH.'/'.$path.'/'.$filename);
            }
            $this->session->set_flashdata('error_msg',$this->lang->line('banner_size_valid').$width.'*'.$height);
        }else{

            resize_image($file_temp, $output_file_path,960,100);
            $photo_path =$path.$filename;
            $array=array('agent_uid'=>$agent_uid,'image_name'=>$filename,'image_path'=>$photo_path,'banner_name'=>$this->input->post('banner_name'),'status'=>$this->input->post('status'));
            $this->db->set($array);
            $this->db->insert('banner_image');
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));
        }


    }
    function site_logo($agent_uid,$path=NULL)
    {

        $this->image_model->create_dir_new($agent_uid);
        $file_temp =$_FILES["logo_name"]["tmp_name"];
        $up_filename=$_FILES["logo_name"]["name"];

        $output_file_path =$path;
        $file_name = $this->image_model->prep_filename($up_filename);
        $file_ext = $this->image_model->get_extension($up_filename);
        $filename = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);
        $targetFile =  str_replace('//','/',$output_file_path) .$filename;

        move_uploaded_file($file_temp,$targetFile);
        $photo_path =$path.$filename;

        $delete_path = $this->db
            ->where('agent_uid', $agent_uid)
            ->get('logo_image');
        if($delete_path->num_rows() > 0){
            $row=$delete_path->result();
            $delete_image_path=isset($row[0]->logo_path)? $row[0]->logo_path :'';
            if($delete_image_path){
                if (file_exists($delete_image_path)){
                    unlink(RELATIVE_PATH.'/'.$delete_image_path);
                }
            }
            $this->db->where('agent_uid', $agent_uid)->delete('logo_image');
        }
        $array=array('agent_uid'=>$agent_uid,'logo_name'=>$filename,'logo_path'=>$photo_path,'logo_height'=>$this->input->post('logo_height'),'logo_width'=>$this->input->post('logo_width'),'status'=>$this->input->post('logo_status'));
        $this->db->set($array);
        $this->db->insert('logo_image');
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));

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
        if($status[0]->status == 1){
            $status=0;
        }else{
            $status=1;
        }
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))->set(array('status'=>$status))->update('banner_image');

    }
    function deleteLogo($agent_uid){
        $this->db->select('logo_path')->where(array('logo_image.agent_uid'=>$agent_uid));
        $sql=$this->db->get('logo_image');
        $row=$sql->result();
        $logo_path=isset($row[0]->logo_path)? $row[0]->logo_path :'';
        if($logo_path){
            if (file_exists($logo_path)){
                unlink(RELATIVE_PATH.'/'.$logo_path);
            }
        }
        $this->db->where(array('logo_image.agent_uid'=>$agent_uid))->delete('logo_image');

    }
    function statusLogo($agent_uid){
        $status = $this
            ->db
            ->select('status')
            ->where(array('logo_image.agent_uid'=>$agent_uid))
            ->get('logo_image')->result();
        if($status[0]->status == 1){
            $status=0;
        }else{
            $status=1;
        }
        $this->db->where(array('logo_image.agent_uid'=>$agent_uid))->set(array('status'=>$status))->update('logo_image');

    }


}
