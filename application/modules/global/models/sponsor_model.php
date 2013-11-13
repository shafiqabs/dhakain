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
class sponsor_model extends CI_Model{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('image_lib');
    }



    function sponsorList($agent_uid){

        $sql="SELECT
        shop_details.shop_name
        , sponsor.sponsor_id
        , users.access_slug
        , settings.settings_name
        , sponsor.created
        , sponsor.status
        , sponsor.random_id

        FROM  sponsor
        LEFT JOIN shop_details ON (sponsor.shop_id = shop_details.agent_uid)
        LEFT JOIN users ON (shop_details.agent_uid = users.uid)
        LEFT JOIN settings  ON (sponsor.position_id = settings.settings_id)
        WHERE (sponsor.agent_uid =$agent_uid) ORDER BY sponsor.ordering asc";
        return $this->global_model->runSQL($sql);

    }

    public function getsponsor($field_name,$field_value)
    {
        return $this->db->where(array($field_name =>$field_value))->get('sponsor')->row();
    }

    function insert($agent_uid,$path=NULL)
    {

        $this->image_model->create_dir_new($agent_uid);
        $random_id=$this->util_model->get_rendom_password();

        $array=array('agent_uid'=>$agent_uid,'random_id'=>$random_id,'shop_id'=>$this->input->post('shop_id'),'alternative_sponsor'=>$this->input->post('alternative_sponsor'),'sponsor_url'=>$this->input->post('sponsor_url'),'position_id'=>$this->input->post('position_id'),'status'=>$this->input->post('status'),'created'=>time());

        $this->db->set($array);
        $this->db->insert('sponsor');
        $sponsor_id=$this->db->insert_id();
        $this->doUpload($sponsor_id,$path);
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));


    }

    function update($random_id,$agent_uid,$path=NULL)
    {

        $this->image_model->create_dir_new($agent_uid);
        $row = $this->getsponsor('random_id',$random_id);

        $array=array('agent_uid'=>$agent_uid,'shop_id'=>$this->input->post('shop_id'),'alternative_sponsor'=>$this->input->post('alternative_sponsor'),'sponsor_url'=>$this->input->post('sponsor_url'),'position_id'=>$this->input->post('position_id'),'status'=>$this->input->post('status'),'created'=>time());

        $this->db->where(array('random_id'=>$random_id,'agent_uid'=>$agent_uid));
        $this->db->set($array);
        $this->db->update('sponsor');

        if(!empty($_FILES["sponsor_image"]["name"])){
            $this->doUpload($row[0]->sponsor_id,$path);
        }


        $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));


    }

    public function doUpload($sponsor_id,$path)
    {

        $this->global_model->createGlobalDir($path);
        $this->fileDelete($sponsor_id);

        $addverSize=$this->settings_model->image_common_size(7);
        $file_temp =$_FILES["sponsor_image"]["tmp_name"];
        $up_filename=$_FILES["sponsor_image"]["name"];

        $output_file_path =$path;
        $file_name = $this->image_model->prep_filename($up_filename);
        $file_ext = $this->image_model->get_extension($up_filename);
        $filename = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);
        $targetFile =  str_replace('//','/',$output_file_path) .$filename;

        move_uploaded_file($file_temp,$targetFile);
        resize_image($file_temp, $output_file_path,$addverSize[0]->large_image_width,$addverSize[0]->large_image_height);
        $photo_path =$path.$filename;
        $array=array('sponsor_image'=>$filename,'image_path'=>$photo_path);
        $this->db
            ->where(array('sponsor_id'=>$sponsor_id))
            ->set($array)
            ->update('sponsor');

    }

    public function fileDelete($sponsor_id)
    {
        $row = $this->getsponsor('sponsor_id',$sponsor_id);
        if (file_exists($row->image_path))
        {
            unlink(RELATIVE_PATH .$row->image_path);
        }


    }

    public function getShoplist($agent_uid){

        $sql="SELECT shop_shopping_mall.shopping_mall_id , shop_details.shop_name , shop_details.agent_uid
              FROM  shop_shopping_mall
              INNER JOIN shop_details ON (shop_shopping_mall.agent_uid = shop_details.agent_uid)
              INNER JOIN users ON (shop_shopping_mall.agent_uid = users.uid)
              WHERE (shop_shopping_mall.shopping_mall_id =$agent_uid && shop_shopping_mall.status =1 && users.status =1 )" ;
        return $this->db->query($sql)->result();



    }



    function delete($random_id=NULL){

        if(is_array($this->input->post('list'))){
            $row = $this->getsponsor('random_id',$random_id);
            $this->fileDelete($row->sponsor_id);
            $array=$this->input->post('list');
            foreach ($array as $item) :

                $row = $this->getsponsor('random_id',$item);
                $this->fileDelete($row->sponsor_id);

                $this->db
                    ->where(array('random_id'=>$item))
                    ->delete('sponsor');
            endforeach;

        }else if(!empty($random_id)){

            $row = $this->getsponsor('random_id',$random_id);
            $this->fileDelete($row->sponsor_id);
            $this->db->where('random_id',$random_id);
            $this->db->delete('sponsor');


        }
        return false;



    }

    function sorting($agent_uid){


        foreach ($_POST['listItem'] as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db
                ->where(array('random_id'=>$item,'agent_uid'=>$agent_uid))
                ->set($array)
                ->update('sponsor');
        endforeach;

    }

    function status($agent_uid,$random_id){

        $row = $this->getsponsor('random_id',$random_id);
        $status= $row[0]->status;
        if($status == 0){
            $array=array('status'=>1);
        }else{
            $array=array('status'=>0);
        }
        $this->db->set($array);
        $this->db->where(array('agent_uid'=>$agent_uid,'random_id'=>$random_id));
        $this->db->update('sponsor');

    }

}
