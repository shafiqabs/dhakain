<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Customize_content_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}


    function getCustomizeContent($agent_uid,$menu_id){


        $this->db->select('settings_template.plugin_show,
            settings_layout.layout_name,
            settings_layout.layout_type,
            settings_layout.column_no,
            settings_layout.layout_divide,
            settings_layout.layout_image,
            custom_menu.menu_name,custom_menu.menu_url,
            settings_plugin.plugin_name');
        $this->db->from('settings_template');
        $this->db->join('custom_menu','custom_menu.menu_id = settings_template.menu_id AND settings_template.agent_uid = custom_menu.agent_uid','inner');
        $this->db->join('settings_layout','settings_template.layout_id = settings_layout.settings_layout_id','inner');
        $this->db->join('settings_plugin','settings_template.plugin_id = settings_plugin.settings_plugin_id','left');
        $this->db->where(array('settings_template.menu_id'=> $menu_id , 'settings_template.agent_uid' => $agent_uid));
        $query= $this->db->get();
        return $query->result();
    }

    function getPageContent($agent_uid,$menu_id){

        $this->db->where(array('page_content.agent_uid'=>$agent_uid , 'page_content.menu_id'=> $menu_id));
        $query = $this->db->get('page_content');
        return $query->result();
    }



    function update($access_slug,$menu_id)
    {
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);

        $page_content1=$this->input->post('page_content1');
        $page_content2=$this->input->post('page_content2');
        $page_content3=$this->input->post('page_content3');
        if(empty($page_content1)){
            $page_content1=NULL;
        }
        if(empty($page_content2)){
            $page_content2=NULL;
        }
        if(empty($page_content3)){
            $page_content3=NULL;
        }

        $array=array('menu_id'=>$menu_id,'agent_uid'=>$agent_uid,'page_content1'=>$page_content1,'page_content2'=>$page_content2,'page_content3'=>$page_content3);
        $this->db->set($array);
        $this->db->where(array('menu_id'=>$menu_id, 'agent_uid'=>$agent_uid));
        $this->db->update('page_content');


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
