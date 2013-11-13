<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Customize_page_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}


    function getCustomizePage($agent_uid,$menu_id){

        $this->db->select('custom_menu.menu_id,custom_menu.menu_name,custom_menu.parent_id,custom_menu.menu_url,custom_menu.status,settings_template.plugin_id,settings_template.plugin_show,settings_template.layout_id,settings_template.is_home_page,settings_plugin.plugin_url,settings_plugin.settings_plugin_id,settings_template.settings_template_id,settings_template.background_color,settings_template.image_path,settings_template.image_name,settings_template.custom_contact_status,settings_layout.settings_layout_id ,settings_layout.layout_type,settings_layout.column_no,settings_layout.layout_divide,settings_website.settings_web_id,keywords_page.keywords_page_id');
        $this->db->from('settings_template');

        $this->db->join('custom_menu','custom_menu.menu_id = settings_template.menu_id AND settings_template.agent_uid = custom_menu.agent_uid','inner');
        $this->db->join('settings_website','custom_menu.agent_uid = settings_website.agent_uid','inner');
        $this->db->join('settings_plugin','settings_template.plugin_id = settings_plugin.settings_plugin_id','left');
        $this->db->join('keywords_page',' keywords_page.menu_id =custom_menu.menu_id  AND keywords_page.agent_uid = custom_menu.agent_uid','left');
        $this->db->join('settings_layout','settings_template.layout_id = settings_layout.settings_layout_id','inner');
        $this->db->where(array('settings_template.menu_id'=>$menu_id,'settings_template.agent_uid'=>$agent_uid));
        $query= $this->db->get();
        return $query->result();
    }

    function getCustomMenu($agent_uid){

        $this->db->where(array('agent_uid'=>$agent_uid,'status'=>1, 'parent_id'=>0));
        return $this->db->get('custom_menu')->result();
    }

    function getPluginPosition($access_slug,$menu_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $plugin_id=$this->input->post('plugin_id');
        $layoutid=$this->input->post('layoutid');
        $this->db->where('settings_layout_id',$layoutid);
        $query=$this->db->get('settings_layout');
        $col=$query->result();
        if(!$plugin_id==0){
            $data['column_no']= $col[0]->column_no;
        }else{
            $data['column_no']=0;
        }

        $this->db->where(array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id));
        $query= $this->db->get('settings_template');
        $plug=$query->result();
        $data['plugin_show']= $plug[0]->plugin_show;
        $data['plugin_id']= $plugin_id;
        return $this->load->view('websites/customize_page/pluginposition',$data);


    }

    function update($access_slug,$menuid)
    {
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);

        $data['title'] = $this->lang->line('page_information');
        $menu_name=$this->input->post('menu_name');
        $parent_id=$this->input->post('parent_id');
        $is_home_page=$this->input->post('is_home_page');
        $status=$this->input->post('status');
        $layout_id=$this->input->post('layout_id');
        $plugin_id=$this->input->post('plugin_id');
        $plugin_position=$this->input->post('plugin_position');
        $background_color=$this->input->post('background_color');
        $plugin_size=$this->input->post('plugin_size');
        $custom_contact_status=$this->input->post('custom_contact_status');

        $array=array('status'=>$status,'layout_id'=>$layout_id,'plugin_id'=>$plugin_id,'plugin_show'=>$plugin_position,'plugin_size'=>$plugin_size,'custom_contact_status'=>$custom_contact_status,'background_color'=>$background_color,'is_home_page'=>$is_home_page);
       // print_r($array);
        $this->db->set($array);
        $this->db->where(array('menu_id'=>$menuid,'agent_uid'=>$agent_uid));
        $this->db->update('settings_template');

        $menu_url=url_title(strtolower(trim($menu_name)),TRUE);
        $menu_url=$this->customize_menu_model->get_menuurl($agent_uid,$menu_url);
        $array=array('menu_name'=>$menu_name,'parent_id'=>$parent_id,'menu_url'=>$menu_url,'status'=>$status);
        $this->db->set($array);
        $this->db->where(array('menu_id'=>$menuid,'agent_uid'=>$agent_uid));
        $this->db->update('custom_menu');

        $page_content=array('menu_id'=>$menuid,'agent_uid'=>$agent_uid);

        if($this->db->where(array('menu_id'=>$menuid,'agent_uid'=>$agent_uid))->count_all_results('page_content')>0){
            $this->db->where(array('menu_id'=>$menuid,'agent_uid'=>$agent_uid));
            $this->db->set($page_content);
            $this->db->update('page_content');
        }else{
            $this->db->set($page_content);
            $this->db->insert('page_content');
        }

    }
    function webBackgroundImageUpload($access_slug,$menu_id){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $output_file_path ='uploads/shop/'.$agent_uid.'/common/';
        $file_temp =$_FILES["image_name"]["tmp_name"];
        $up_filename=$_FILES["image_name"]["name"];
        $file_name = $this->image_model->prep_filename($up_filename);
        $file_ext = $this->image_model->get_extension($up_filename);
        $filename = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);
        $targetFile =  str_replace('//','/',$output_file_path) .$filename;
        move_uploaded_file($file_temp,$targetFile);


        $this->db->where(array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id));
        $delete_path=$this->db->get('settings_template');
        $count=$delete_path->num_rows();
        $row=$delete_path->result();
        $image_path=isset($row[0]->image_path)? $row[0]->image_path :'';
        if(!empty($image_path)){
            if (file_exists($image_path)){
                unlink(RELATIVE_PATH.'/'.$image_path);
            }
        }
        $photo_path ='uploads/shop/'.$agent_uid.'/common/'.$filename;
        $array=array('image_name'=>$filename,'image_path'=>$photo_path);
        $this->db->set($array);
        $this->db->where(array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id));
        $this->db->update('settings_template');

    }

    public function deleteImage($access_slug,$menu_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->where(array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id));
        $delete_path=$this->db->get('settings_template');
        $count=$delete_path->num_rows();
        $row=$delete_path->result();
        $image_path=isset($row[0]->image_path)? $row[0]->image_path :'';
        if($image_path){
            if (file_exists($image_path)){
                unlink(RELATIVE_PATH.'/'.$image_path);
            }
        }
        $array=array('image_name'=>'','image_path'=>'');
        $this->db->set($array);
        $this->db->where(array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id));
        $this->db->update('settings_template');
    }

    function keywords_page($access_slug,$menu_id)
    {
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        return $rows=$this->db->where(array('agent_uid'=>$agent_uid ,'menu_id' => $menu_id ))->get('keywords_page')->result();
    }

    function seoInsert($access_slug,$menu_id){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $title_tag=$this->input->post('title_tag');
        $meta_keywords=$this->input->post('meta_keywords');
        $meta_description=$this->input->post('meta_description');
        $array=array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id,'title_tag' =>$title_tag,'meta_keywords' =>$meta_keywords,'meta_description' =>$meta_description);
        $this->db->set($array);
        $this->db->insert('keywords_page');

    }



    function seoUpdate($access_slug,$menu_id){


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $keywords_page_id=$this->input->post('keywords_page_id');
        $title_tag=$this->input->post('title_tag');
        $meta_keywords=$this->input->post('meta_keywords');
        $meta_description=$this->input->post('meta_description');

        $array=array('agent_uid'=>$agent_uid,'menu_id'=>$menu_id,'title_tag' =>$title_tag,'meta_keywords' =>$meta_keywords,'meta_description' =>$meta_description);
        $this->db->set($array);
        $this->db->where('keywords_page_id',$keywords_page_id);
        $this->db->update('keywords_page');

    }

    function seoDelete($access_slug,$menu_id,$keywords_page_id){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->where(array('agent_uid'=>$agent_uid ,'menu_id' => $menu_id , 'keywords_page_id'=>$keywords_page_id));
        $this->db->delete('keywords_page');
    }


    function get_contentpage($agent_uid,$menu_id){

        $this->db->select();
        $this->db->from('page_content');
        $this->db->join('page_revision','page_content.menu_id = page_revision.menu_id AND page_content.agent_uid = page_revision.agent_uid','left');
        $this->db->where('page_content.menu_id',$menu_id);
        $this->db->where('page_content.agent_uid',$agent_uid);
        $query= $this->db->get();
        return $query->result();

    }







}
?>
