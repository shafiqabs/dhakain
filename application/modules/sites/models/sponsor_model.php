<?php

class Sponsor_model extends CI_Model{

    function __construct()
    {
    // Call the Model constructor
    parent::__construct();
    }

    function sponsorList($tradefair_id){

        $sql="SELECT 
        site_sponsors.title
        , site_sponsors.ordering
        , site_sponsors.status
        , site_sponsors.random_id
        FROM  site_sponsors
        WHERE tradefair_id=$tradefair_id ORDER BY site_sponsors.ordering asc";
        return $this->global_model->runSQL($sql);

    }

    public function getData($random_id)
    {
        return $this->db->where(array('random_id' =>$random_id))->get('site_sponsors')->row();
    }

    function insert($data)
    {


        $data['created'] = time();
        $data['random_id'] = time();
        $this->db->set($data);
        $this->db->insert('site_sponsors');
        if (!empty($_FILES["image_name"]["name"])) {
            $this->doUpload($data['random_id']);
        }


    }

    function update($data,$random_id)
    {

        $this->db->where(array('random_id'=>$random_id));
        $this->db->set($data);
        $this->db->update('site_sponsors');

        if(!empty($_FILES["image_name"]["name"])){

            $this->doUpload($random_id);
        }


    }

    public function doUpload($random_id)
    {

        $filePath = "uploads/sponsors/";
        $file_name = resizeImage($_FILES['image_name'],$filePath,570,250);
        $filePath = $filePath.$file_name;
        $this->fileDelete($random_id);
        $this->db->where(array('random_id' => $random_id))->set(array('image_path' => $filePath))->update('site_sponsors');


    }

    public function fileDelete($random_id)
    {
        $row = $this->getData($random_id);

        if (file_exists($row->image_path)) {
            unlink(RELATIVE_PATH . $row->image_path);
        }
    }




    function delete($random_id=NULL){


        if(is_array($this->input->post('list'))){
            $row = $this->getData($random_id);
            $this->fileDelete($row->sponsor_id);
            $array=$this->input->post('list');
            foreach ($array as $item) :

                $this->fileDelete($item);

                $this->db
                    ->where(array('random_id'=>$item))
                    ->delete('site_sponsors');
            endforeach;

        }else if(!empty($random_id)){


            $this->fileDelete($random_id);
            $this->db->where('random_id',$random_id);
            $this->db->delete('site_sponsors');


        }
        return false;



    }

    function sorting($data){


        foreach ($data as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db
                ->where(array('random_id'=>$item))
                ->set($array)
                ->update('site_sponsors');
        endforeach;

    }

    function status($random_id){

        $row = $this->getData($random_id);
        $status= $row->status;
        if($status == 0){
            $array=array('status'=>1);
        }else{
            $array=array('status'=>0);
        }
        $this->db->set($array);
        $this->db->where(array('random_id'=>$random_id));
        $this->db->update('site_sponsors');

    }
}
