<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Website_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    public function getWebsite($agent_uid){

        return $query = $this->db
            ->select('users.domain_name,settings_website.*')
            ->from('settings_website')
            ->join('users','users.uid = settings_website.agent_uid','left')
            ->where('agent_uid',$agent_uid)
            ->get()
            ->result();
    }

    function insert($access_slug)
	{
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        /*  if($domain_name && !$old_domain_name ){
        exec('sudo /app_script/run.sh "website" "'.$domain_name.'"');
        exec('sudo /app_script/service-reload.sh');
        }else if($domain_name && $domain_name != $old_domain_name ){
        exec('sudo /app_script/del-domain.sh "'.$old_domain_name.'"');
        exec('sudo /app_script/run.sh "website" "'.$domain_name.'"');
        exec('sudo /app_script/service-reload.sh');
        }else if($domain_name && $domain_name == $old_domain_name ){
        }else if(!$domain_name){
        exec('sudo /app_script/del-domain.sh "'.$old_domain_name.'"');
        exec('sudo /app_script/service-reload.sh');
        }*/
        $domain_name = $this->input->post('domain_name');
        $domain_name = $this->util_model->validDomainName($domain_name);
        $subdomain_name = $this->util_model->validSubdomainName($domain_name);


        $array=array('domain_name'=>$domain_name,'subdomain_name'=>$subdomain_name);
        $this->db->set($array);
        $this->db->where(array('uid'=>$agent_uid));
        $this->db->update('users');

        $array1=array('custom_title'=>trim($this->input->post('custom_title')),'agent_uid'=>$agent_uid,'template_name'=>$this->input->post('template_name'),'breadcrumb'=>$this->input->post('breadcrumb'),'listing_order' =>$this->input->post('listing_order'),'user_change_listing'=>$this->input->post('user_change_listing'),'web_status'=>$this->input->post('web_status'),'create_date'=>time());
        $this->db->set($array1);
        $this->db->insert('settings_website');


    }
	
	function update($access_slug){

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $domain_name = $this->input->post('domain_name');
        $domain_name = $this->util_model->validDomainName($domain_name);
        $subdomain_name = $this->util_model->validSubdomainName($domain_name);


        $array=array('domain_name'=>$domain_name,'subdomain_name'=>$subdomain_name);
        $this->db->set($array);
        $this->db->where(array('uid'=>$agent_uid));
        $this->db->update('users');

        $array1=array('custom_title'=>trim($this->input->post('custom_title')),'template_name'=>$this->input->post('template_name'),'breadcrumb'=>$this->input->post('breadcrumb'),'listing_order' =>$this->input->post('listing_order'),'user_change_listing'=>$this->input->post('user_change_listing'),'web_status'=>$this->input->post('web_status'),'create_date'=>time());
        $this->db->set($array1);
        $this->db->where(array('agent_uid'=>$agent_uid));
        $this->db->update('settings_website');


    }

    function website_multidelete(){

        $agent_uid= $this->uri->segment(4,0);
        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->where(array('website_id'=>$val,'agent_uid'=>$agent_uid));
            $this->db->delete('website');

        }
    }

    function  website_delete(){
        $agent_uid= $this->uri->segment(4,0);
        $website_id=$this->uri->segment(5,0);
        $this->db->where(array('website_id'=>$website_id,'agent_uid'=>$agent_uid));
        $this->db->delete('website');

    }

    function domain_name($access_slug){

        if($this->db->where(array('access_slug'=>$access_slug))->count_all_results('users') >0){

            $this->db->select('users.domain_name');
            $this->db->from('users');
            $this->db->where(array('access_slug'=>$access_slug));
            $query=$this->db->get();
            $row=$query->result();
            return $row[0]->domain_name;
        }else{
            return false;
        }
    }

    function domain_status($agent_uid){


        $this->db->where('uid',$agent_uid);
        $this->db->where('publish_main_website',1);
        return $this->db->count_all_results('users');


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



}
?>
