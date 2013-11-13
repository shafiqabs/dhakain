<?php

class Sitecontent_model extends CI_Model{

    function __construct()
    {
    // Call the Model constructor
    parent::__construct();
    }

    function sitecontentList(){

        return $this->db->select('site_contents.menu_name
        , site_contents.menu_slug
        , site_contents.menu_level
        , site_contents.ordering
        , site_contents.parent_id
        , site_contents.status
        , site_contents.random_id
        , sitecontents.menu_name AS parent_menu'
        )
            ->from('site_contents')
            ->join('site_contents AS sitecontents','sitecontents.sitecontent_id = site_contents.parent_id','left')
            ->get()
            ->result();

    }

    function getParentMneu(){

        return $this->db->where(array('parent_id' => 0))->get('site_contents')->result();

    }

    public function getFeature($random_id)
    {
        return $this->db->where(array('random_id' =>$random_id))->get('site_contents')->row();
    }

    function insert($data)
    {


        $data['created'] = time();




        $menu_slug = $this->getSlug($data['menu_name']);
        $data['menu_slug'] = trim($menu_slug);

        $menu_level = $this->getParentLevel($data['parent_id'],$menu_slug);
        $data['menu_level'] = trim($menu_level);

        $this->db->set($data);
        $this->db->insert('site_contents');
        $sitecontent_id = $this->db->insert_id();
        $random_id = $this->util_model->getRendomPassword($sitecontent_id);
        $this->db->where(array('sitecontent_id'=>$sitecontent_id));
        $this->db->set(array('random_id'=>$random_id));
        $this->db->update('site_contents');

        if (!empty($_FILES["image_name"]["name"])) {
            $this->doUpload($random_id);
        }



    }

    function update($data,$random_id)
    {

        $this->db->where(array('random_id'=>$random_id));
        $this->db->set($data);
        $this->db->update('site_contents');

        if(!empty($_FILES["image_name"]["name"])){
            $this->doUpload($random_id);
        }


    }

    function  getParentLevel($parent_id,$menu_slug){

        $result = $this->db->select('menu_slug')->where(array('sitecontent_id'=>$parent_id))->get('site_contents');
        if($result ->num_rows() > 0){
            $row = $result->row();
            return 'sites/'.$row->menu_slug.'/'.$menu_slug;
        }
        return 'sites/'.$menu_slug;

    }

    public function doUpload($random_id)
    {

        $filePath = "uploads/sitecontents/";
        $file_name = resizeImage($_FILES['image_name'],$filePath,570,250);
        $filePath = $filePath.$file_name;
        $this->fileDelete($random_id);
        $this->db->where(array('random_id' => $random_id))->set(array('image_path' => $filePath))->update('site_contents');


    }

    public function fileDelete($random_id)
    {
        $row = $this->getFeature($random_id);

        if (file_exists($row->image_path)) {
            unlink(RELATIVE_PATH . $row->image_path);
        }
    }




    function delete($random_id=NULL){


        if(is_array($this->input->post('list'))){
            $row = $this->getFeature($random_id);
            $this->fileDelete($row->sitecontent_id);
            $array=$this->input->post('list');
            foreach ($array as $item) :

                $this->fileDelete($item);

                $this->db
                    ->where(array('random_id'=>$item))
                    ->delete('site_contents');
            endforeach;

        }else if(!empty($random_id)){


            $this->fileDelete($random_id);
            $this->db->where('random_id',$random_id);
            $this->db->delete('site_contents');


        }
        return false;

    }

    function sorting($data){


        foreach ($data as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db
                ->where(array('random_id'=>$item))
                ->set($array)
                ->update('site_contents');
        endforeach;

    }

    function status($random_id){

        $row = $this->getFeature($random_id);
        $status= $row->status;
        if($status == 0){
            $array=array('status'=>1);
        }else{
            $array=array('status'=>0);
        }
        $this->db->set($array);
        $this->db->where(array('random_id'=>$random_id));
        $this->db->update('site_contents');

    }


    function getSlug($menu_url = FALSE){


        $url_title = url_title($menu_url, 'dash', TRUE);
        $this->db->select('menu_slug')->from('site_contents')->where(array('menu_slug' => $url_title));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->menu_slug)) ? $row->menu_slug : '';
        if (empty($is_exists) ){
            return $url_title;
        }

        $url_title_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('menu_slug')->from('site_contents')->where(array('menu_slug' => $url_title.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->menu_slug)) ? $row->menu_slug : '';
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
