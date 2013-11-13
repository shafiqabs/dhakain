<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Options_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    function get_settings_shopping_cart($access_slug)
    {

        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->select('using_shopping_cart');
        $this->db->where('agent_uid',$agent_uid);
        $queryup=$this->db->get('options');
        if($queryup->num_rows() > 0){
            $row=$queryup->result();
            return $row[0]->using_shopping_cart;
        }else{
            return false;
        }
    }

    function options_insert($agent_uid)
	{

        $user_name=$this->input->post('user_name');
        $password=$this->input->post('password');
        $publish_main_website=$this->input->post('publish_main_website');
        $using_shopping_cart=$this->input->post('using_shopping_cart');
        $choose_transaction=$this->input->post('choose_transaction');

        $array=array('user_name' =>trim($user_name),'password'=>md5(trim($password)),);
        $this->db->set($array);
        $this->db->where('uid',$agent_uid);
        $this->db->update('users');


        $arr_option=array('agent_uid'=>$agent_uid , 'publish_main_website' =>$publish_main_website , 'using_shopping_cart' =>$using_shopping_cart ,'choose_transaction' =>$choose_transaction );

        if( $this->db->where(array('agent_uid'=>$agent_uid))->count_all_results('options') > 0){
            $this->db->set($arr_option);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('options');
        }else{
            $this->db->set($arr_option);
            $this->db->insert('options');
        }

        $this->db->where('agent_uid',$agent_uid);
        if(!$this->db->count_all_results('settings_website') > 0){

            $array=array('agent_uid'=>$agent_uid,'template_name'=>1,'listing_order' =>87,'create_date'=>time(),'status' =>1);
            $this->db->set($array);
            $this->db->insert('settings_website');

            $count=$this->db->count_all_results('settings_menu');
            for( $i=1; $count >= $i; $i++ ){

                $this->db->where('settings_menu_id',$i);
                $query=$this->db->get('settings_menu');
                $rows=$query->result();

                $array=array('menu_id'=>$rows[0]->settings_menu_id,'menu_name'=>$rows[0]->menu_name,'agent_uid'=>$agent_uid,'parent_id'=>$rows[0]->parent_id,'menu_url'=>$rows[0]->menu_url,'order'=>$rows[0]->order);
                $this->db->set($array);
                $this->db->insert('custom_menu');

                if($rows[0]->settings_menu_id ==7){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>0,'plugin_show'=>0,'is_home_page'=>1);
                }else if($rows[0]->settings_menu_id ==2 || $rows[0]->settings_menu_id ==8){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>5,'plugin_show'=>1,'is_home_page'=>2);
                }else if($rows[0]->settings_menu_id ==3 || $rows[0]->settings_menu_id ==9){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>3,'plugin_show'=>1,'is_home_page'=>2);
                }else if($rows[0]->settings_menu_id ==4 || $rows[0]->settings_menu_id ==12 ){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>4,'plugin_show'=>1,'is_home_page'=>2);
                }else if($rows[0]->settings_menu_id ==5 || $rows[0]->settings_menu_id ==14){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>2,'plugin_show'=>1,'is_home_page'=>2);
                }else if($rows[0]->settings_menu_id ==6 || $rows[0]->settings_menu_id ==15){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>6,'plugin_show'=>1,'is_home_page'=>2);
                }else if($rows[0]->settings_menu_id ==10){
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>7,'plugin_show'=>1,'is_home_page'=>2);
                }else{
                    $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>0,'plugin_show'=>0,'is_home_page'=>2);
                }

                $this->db->set($array);
                $this->db->insert('settings_template');

                $array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid);
                $this->db->set($array);
                $this->db->insert('page_content');

            }

            /*-------------Add plugin---------------*/

            $array=array('agent_uid'=>$agent_uid);
            $this->db->set($array);
            $this->db->insert('featurelist');

            $array=array('agent_uid'=>$agent_uid);
            $this->db->set($array);
            $this->db->insert('footercta');

            $array=array('agent_uid'=>$agent_uid);
            $this->db->set($array);
            $this->db->insert('testmonials');

            $array=array('agent_uid'=>$agent_uid);
            $this->db->set($array);
            $this->db->insert('evaluation_status');


            $data=array('agent_uid'=>$agent_uid);//for table settings_css_body
            $this->db->insert('settings_css_body',$data);

            $data=array('agent_uid'=>$agent_uid);//for table settings_css_header
            $this->db->insert('settings_css_header',$data);

            $data=array('agent_uid'=>$agent_uid);//for table settings_css_menu
            $this->db->insert('settings_css_menu',$data);
            $data=array('agent_uid'=>$agent_uid);//for table settings_css_submenu
            $this->db->insert('settings_css_submenu',$data);
            $data=array('agent_uid'=>$agent_uid);//for table settings_css_page_content
            $this->db->insert('settings_css_page_content',$data);
            $data=array('agent_uid'=>$agent_uid);//for table settings_css_footer
            $this->db->insert('settings_css_footer',$data);
        }
    }
	
	function settings_option_insert(){

        $agent_uid = $this->uri->segment(4,0);
        $array=array(
            'agent_uid'=>$agent_uid ,
            'shop_closed' =>$this->input->post('shop_closed'),
            'membership_signup' =>$this->input->post('membership_signup'),
            'use_counties'=> $this->input->post('use_counties'),
            'redirect_to_cart' => $this->input->post('redirect_to_cart'),
            'checkout_module' => $this->input->post('checkout_module') ,
            'allow_change_login' =>$this->input->post('allow_change_login'),
            'default_country'=>$this->input->post('default_country'),
            'default_city' =>$this->input->post('default_city') ,
            'currency_symbol' =>$this->input->post('currency_symbol') ,
            'currency_format' =>$this->input->post('currency_format'),
            'alter_currency_rate' =>$this->input->post('alter_currency_rate') ,
            'weight_symbol' =>$this->input->post('weight_symbol') ,
            'dimensions_symbol' =>$this->input->post('dimensions_symbol'),
            'minimal_order_amount'=>$this->input->post('minimal_order_amount') ,
            'maximum_order_amount' =>$this->input->post('maximum_order_amount') ,
            'maximum_order_items' =>$this->input->post('maximum_order_items') ,
            'provider_commission' =>$this->input->post('provider_commission') ,
            'providers_commission_min'=>$this->input->post('providers_commission_min') ,
            'show_outofstock_products' =>$this->input->post('show_outofstock_products') ,
            'preauth_expired_period_warning' =>$this->input->post('preauth_expired_period_warning') ,
            'enable_gift_wrapping' =>$this->input->post('enable_gift_wrapping'),
            'enable_greeting_message'=>$this->input->post('enable_greeting_message') ,
            'gift_wrapping_cost' =>$this->input->post('gift_wrapping_cost') ,
            'provider_register' =>$this->input->post('provider_register') ,
            'provider_register_moderated' =>$this->input->post('provider_register_moderated'),
            'provider_display_backoffice_link'=>$this->input->post('provider_display_backoffice_link') ,
            'provider_chat' =>$this->input->post('provider_chat')
        );
        if( $this->db->where(array('agent_uid'=>$agent_uid))->count_all_results('settings_general_options') > 0){
            $this->db->set($array);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('settings_general_options');
        }else{
            $this->db->set($array);
            $this->db->insert('settings_general_options');
        }

    }

    function settings_payment_method_insert(){
        $agent_uid= $this->uri->segment(4,0);
        $payment_method = $this->input->post('payment_method');
        $active = $this->input->post('active');
        //print_r($active);
        //exit;
        foreach($payment_method as $key => $value){
            $data = array(
                'agent_uid'             => $agent_uid,
                'payment_method'        => $_POST['payment_method'][$key],
                'active'                => isset($_POST['active'][$key]) ? $_POST['active'][$key]:0,
                'membershipids'         => $_POST['membershipids'][$key],
                'surcharge'             => $_POST['surcharge'][$key],
                'surcharge_type'        => $_POST['surcharge_type'][$key],
                'payment_details'       => $_POST['payment_details'][$key],
                'orderby'               => $_POST['orderby'][$key]
            );
            if($_POST['payment_method_id'][$key] > 0){
                $this->db->where(array('payment_method_id'=>$_POST['payment_method_id'][$key],'agent_uid'=>$agent_uid));
                $this->db->update('settings_payment_method',$data);
            }else{
                $this->db->insert('settings_payment_method',$data);
            }

        }
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

    function domain_name($agent_uid){

        $this->db->where(array('agent_uid'=>$agent_uid));
        if($this->db->count_all_results('settings_website') >0){

            $this->db->select('settings_website.domain_name');
            $this->db->from('settings_website');
            $this->db->where('settings_website.agent_uid',$agent_uid);
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
