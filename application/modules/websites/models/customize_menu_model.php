<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Customize_menu_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    function get_menu($agent_uid)
    {
        $this->db->select('*');
        $this->db->from('custom_menu');
        $this->db->where('agent_uid',$agent_uid);
        $this->db->where('parent_id',0);
        $this->db->order_by('order','asc');
        $query = $this->db->get();
        return $query;
    }

    function get_submenu($agent_uid,$parent_id)
    {
        $this->db->select('*');
        $this->db->from('custom_menu');
        $this->db->where('agent_uid',$agent_uid);
        $this->db->where('parent_id',$parent_id);
        $this->db->order_by('order','asc');
        $query = $this->db->get();
        return $query;
    }

    function get_no_submenu($agent_uid,$parent_id)
    {
        $this->db->select('*');
        $this->db->from('custom_menu');
        $this->db->where('agent_uid',$agent_uid);
        $this->db->where('parent_id',$parent_id);
        $query = $this->db->get();
        return count($query->result());
    }



    /* This part use for Website & template manage */

    function get_menuurl($agent_uid,$menu_url = FALSE){


        $url_title = url_title($menu_url, 'dash', TRUE);
        $this->db->select('menu_url')->from('custom_menu')->where(array('agent_uid' => $agent_uid, 'menu_url' => $url_title));
        $row = $this->db->get()->row();
        $is_exists = (isset($row->menu_url)) ? $row->menu_url : '';
        if (empty($is_exists) ){
            return $url_title;
        }

        $url_title_new = '';
        for ($i = 1; $i < 100; $i++){

            $this->db->select('menu_url')->from('custom_menu')->where(array('agent_uid' => $agent_uid, 'menu_url' => $url_title.'-'.$i));
            $row = $this->db->get()->row();
            $exists_url = (isset($row->menu_url)) ? $row->menu_url : '';
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



    function add_menu($agent_uid)
    {


        $this->db->where('agent_uid',$agent_uid);
        $this->db->order_by('menu_id','desc');
        $query=$this->db->get('custom_menu');
        $rows=$query->result();
        $menu_id=(floatval($rows[0]->menu_id));
        $menuid=($menu_id+1);

        $parent_id = $this->input->post('parent_id')?$this->input->post('parent_id'):0;
        $menu_title = $this->input->post('menu_title');
        $menu_url = $this->input->post('menu_url');
        $menu_name=strtolower(trim($menu_url));
        $menu_url=url_title($menu_name,TRUE);
        $newmenuurl=$this->customize_menu_model->get_menuurl($agent_uid,$menu_url);
        $array = array
        (
            'menu_id' =>$menuid,
            'agent_uid' => $agent_uid,
            'menu_name' => $menu_title,
            'parent_id' => $parent_id,
            'menu_url' => $newmenuurl,
            'order' =>$menuid,
            'status' => 1
        );
        $this->db->set($array);
        $this->db->insert('custom_menu');

        $array1=array('menu_id'=>$menuid,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>0,'plugin_show'=>0);
        $this->db->set($array1);
        $this->db->insert('settings_template');

        $array=array('menu_id'=>$menuid,'agent_uid'=>$agent_uid);
        $this->db->set($array);
        $this->db->insert('page_content');
    }

    public function menuRename($agent_uid,$menu_id,$rename){


        $new_menu_url =$rename;
        $menu_name=strtolower(trim($new_menu_url));
        $new_menu_url=url_title($menu_name,TRUE);
        $newmenuurl=$this->get_menuurl($agent_uid,$new_menu_url);
        $array = array
        (
            'menu_name' => $rename,
            'menu_url' => $newmenuurl
        );
        $this->db->set($array);
        $this->db->where(array('agent_uid'=> $agent_uid,'menu_id'=> $menu_id));
        $this->db->update('custom_menu');
        echo $rename;
    }

    function menuDelete($agent_uid,$menu_id){


        $query=$this->db->where(array('parent_id'=>$menu_id,'agent_uid'=>$agent_uid))->get('custom_menu');
        if($query ->num_rows() > 0){

            foreach($query->result() as $rows):
            $this->db->where(array('menu_id'=>$rows->menu_id,'agent_uid'=>$agent_uid));
            $this->db->delete('custom_menu');

            $this->db->where(array('menu_id'=>$rows->menu_id,'agent_uid'=>$agent_uid));
            $this->db->delete('settings_template');

            $this->db->where(array('menu_id'=>$rows->menu_id,'agent_uid'=>$agent_uid));
            $this->db->delete('page_content');
            endforeach;

        }

        $this->db->where(array('menu_id'=>$menu_id,'agent_uid'=>$agent_uid));
        $this->db->delete('custom_menu');

        $this->db->where(array('menu_id'=>$menu_id,'agent_uid'=>$agent_uid));
        $this->db->delete('settings_template');

        $this->db->where(array('menu_id'=>$menu_id,'agent_uid'=>$agent_uid));
        $this->db->delete('page_content');
    }



    function web_template_list()
    {

        $this->db->select();
        $this->db->from('website_template');
        $this->db->where('status',1);
        $this->db->order_by('template_name','asc');
        return $this->db->get();


    }

    function  get_weburl($agent_uid,$menu_id){

        $this->db->select('custom_menu.menu_name,custom_menu.agent_uid,custom_menu.menu_url,settings_website.domain_name,settings_website.custom_title');
        $this->db->from('custom_menu');
        $this->db->join('settings_website','custom_menu.agent_uid = settings_website.agent_uid','inner');
        $this->db->where('custom_menu.menu_id',$menu_id);
        $this->db->where('custom_menu.agent_uid',$agent_uid);
        $query= $this->db->get();
        return $query->result();

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
