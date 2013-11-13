<?php

class Tradefair_model extends CI_Model{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function tradefairList(){

        return $this->db->select('
        site_tradefair.title
        , site_tradefair.organizer
        , site_tradefair.status
        , site_tradefair.random_id
        , site_tradefair.created
        , site_tradefair.start_date
        , site_tradefair.end_date
        '
        )
            ->from('site_tradefair')
            ->get()
            ->result();

    }



    public function getData($random_id)
    {
        return $this->db->where(array('random_id' =>$random_id))->get('site_tradefair')->row();
    }

    function insert($data)
    {

        $data['created'] = time();
        $data['slug']=$this->getSlug($data['title']);
        $data['random_id'] = time();
        $data['start_date'] = setChangeDateFormat($data['start_date']);
        $data['end_date'] = setChangeDateFormat($data['end_date']);
        $data['start_time'] = setChangeTimeFormat($data['start_time']);
        $data['end_time'] = setChangeTimeFormat($data['end_time']);

        $this->db->set($data);
        $this->db->insert('site_tradefair');
        $this->db->insert_id();
        if (!empty($_FILES["image_name"]["name"])) {
           $this->doUpload($data['random_id']);
        }

    }

    function update($data,$random_id)
    {

        $data['created'] = time();
        $data['slug']=$this->getSlug($data['title']);
        $data['start_date'] = setChangeDateFormat($data['start_date']);
        $data['end_date'] = setChangeDateFormat($data['end_date']);
        $data['start_time'] = setChangeTimeFormat($data['start_time']);
        $data['end_time'] = setChangeTimeFormat($data['end_time']);

        $this->db->where(array('random_id'=>$random_id));
        $this->db->set($data);
        $this->db->update('site_tradefair');

        if(!empty($_FILES["image_name"]["name"])){
            $this->doUpload($random_id);
        }

    }


    public function doUpload($random_id)
    {

        $filePath = "uploads/tradefairs/";
        $file_name = resizeImage($_FILES['image_name'],$filePath,570,250);
        $filePath = $filePath.$file_name;
        $this->fileDelete($random_id);
        $this->db->set(array('image_path' => $filePath))->where(array('random_id' => $random_id))->update('site_tradefair');


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
            $this->fileDelete($row->tradefair_id);
            $array=$this->input->post('list');
            foreach ($array as $item) :

                $this->fileDelete($item);

                $this->db
                    ->where(array('random_id'=>$item))
                    ->delete('site_tradefair');
            endforeach;

        }else if(!empty($random_id)){

            $this->fileDelete($random_id);
            $this->db->where('random_id',$random_id);
            $this->db->delete('site_tradefair');


        }
        return false;

    }

    function sorting($data){


        foreach ($data as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db
                ->where(array('random_id'=>$item))
                ->set($array)
                ->update('site_tradefair');
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
        $this->db->update('site_tradefair');

    }


    function getSlug($menu_url = FALSE){


        $url_title = url_title($menu_url, 'dash', TRUE);
        $this->db->select('slug')->from('site_tradefair')->where(array('slug' => $url_title));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->slug)) ? $row->slug : '';
        if (empty($is_exists) ){
            return $url_title;
        }

        $url_title_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('slug')->from('site_tradefair')->where(array('slug' => $url_title.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->slug)) ? $row->slug : '';
            if ( empty($exists_url) ){
                $url_title_new = $url_title.'-'.$i;
                break;
            }
        }

        if ($url_title_new == ''){
            return $url_title.'_'.md5(time());
        }else{
            return $url_title_new;
        }
    }

}
