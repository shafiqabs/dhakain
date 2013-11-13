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
class Service_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function runSQL($rsql) {
        return $result = $this->db->query($rsql)->result();
    }
    function countRec($sql) {
        return $this->db->query($sql)->num_rows();
    }

    function storePaging($shop_group){

        $this->input->post('query');
        $page = $this->input->post('page') ? $this->input->post('page'):1;
        $rp = $this->input->post('rp');
        $sortname = $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder');

        if (!$sortname) $sortname = 'shop_name';
        if (!$sortorder) $sortorder = 'desc';
        if($this->input->post('query')!=''){
            $where = "WHERE `shop_group` = '$shop_group' && `".$this->input->post('qtype')."` LIKE '%".$this->input->post('query')."%' ";
        } elseif($this->input->post('letter_pressed') == 'ALL' ){
            $where ="WHERE `shop_group` = '$shop_group' && `shop_name` LIKE '%' ";
        }elseif($this->input->post('letter_pressed')!='' || $this->input->post('letter_pressed')!='ALL'){
            $where = "WHERE `shop_group` = '$shop_group' && `".$this->input->post('qtype')."` LIKE '".$this->input->post('letter_pressed')."%' ";
        }
        $sort = "ORDER BY $sortname $sortorder";

        if (!$page) $page = 1;
        if (!$rp) $rp = 10;

        $start = (($page-1) * $rp);
        $limit = "LIMIT $start, $rp";
        $count = "SELECT agent_uid as shopID , shop_name ,location_id , business_phone,users.status,users.access_slug,users.domain_name,users.add_date
            FROM shop_details
            INNER JOIN users ON (shop_details.agent_uid = users.uid)
            $where";
        $sql = "SELECT agent_uid as shopID , shop_name ,location_id , business_phone,users.status,users.access_slug,users.domain_name,users.add_date
            FROM shop_details
            INNER JOIN users ON (shop_details.agent_uid = users.uid)
            $where $sort $limit";
        $result = $this->runSQL($sql);
        $total =  $this->countRec($count);
        header("Content-type: application/json");
        $jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
        foreach ($result as $row ) {
            if($row->status == 0 ){
                $status="unpublish-icon";
            }else{
                $status="publish-icon";
            }

            $entry = array('id' => $row->shopID,
                'cell'=>array(
                    'id'                    => $row->shopID,
                    'shop_name'    => '<a href="'.site_url($this->uri->segment(1,NULL).'/listing/'.$row->access_slug).'">'.$row->shop_name.'</a>',
                    'location_id'           => $this->settings_model->settings_name($row->location_id),
                    'business_phone'        => $row->business_phone,
//                    'total'                 => $this->totalProduct($row->shopID),
                    'add_date'                 => $this->global_model->customDateFormat($row->add_date,'d-m-Y'),
                    'action'                => '

                    <a id="'.$row->shopID.'" class="mall-status" href="javascript:void(0)" rel="'.site_url($this->uri->segment(1,NULL).'/service/change_status/'.$row->access_slug).'"><span id="mall-'.$row->shopID.'" class="'.$status.'"></span></a>
                    <a class="edit" href="'.site_url($this->uri->segment(1,NULL).'/store/'.$row->access_slug).'"><span class="edit-icon"></span></a>
                    <a id="'.$row->shopID.'" class="delete" href="javascript:void(0)"  rel="'.site_url($this->uri->segment(1,NULL).'/service/delete/'.$row->access_slug).'"><span class="delete-icon"></span></a>
                    <a target="_blank" href="'.site_url($row->domain_name).'"><span class="view-icon"></span></a>'
                )
            );

            $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = $total;
        return json_encode($jsonData);
    }


    public function create(){

        sleep(1);
        $shop_name=$this->input->post('shop_name');
        $location_id=$this->input->post('location_id');
        $password =$this->util_model->get_rendom_password();
        $access_slug=$this->util_model->get_slug($shop_name);
        $domainname=$this->util_model->get_domainname($shop_name);
        $username=$this->util_model->get_username($shop_name);
        $array=array('access_slug'=>$access_slug,'user_name'=>$username,'password'=>md5($password),'access_type'=>3,'add_date'=>time(),'status'=>1);
        $this->db->set($array);
        $this->db->insert('users');
        $agent_uid=$this->db->insert_id();

        $array=array('agent_uid'=>$agent_uid,'location_id'=>$location_id,'shop_name' =>trim($shop_name));
        $this->db->set($array);
        $this->db->insert('shop_details');


        $array=array('agent_uid'=>$agent_uid);
        $this->db->set($array);
        $this->db->insert('shop_shopping_mall');

        $array=array('agent_uid'=>$agent_uid,'brand_status'=>0);
        $this->db->set($array);
        $this->db->insert('shop_brand');

        $array=array('agent_uid'=>$agent_uid,'domain_name'=>$domainname,'template_name'=>1,'create_date'=>time(),'status' =>1);
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

        $file_path="uploads/shop/".$agent_uid;
        mkdir($file_path,0777,TRUE);
        $advertisment_path="uploads/shop/".$agent_uid."/advertisment";
        mkdir($advertisment_path,0777,TRUE);
        $crop_path="uploads/shop/".$agent_uid."/advertisment/crop";
        mkdir($crop_path,0777,TRUE);
        $sponsor="uploads/shop/".$agent_uid."/sponsor";
        mkdir($sponsor,0777,TRUE);
        $team_path="uploads/shop/".$agent_uid."/team";
        mkdir($team_path,0777,TRUE);
        $team_crop_path="uploads/shop/".$agent_uid."/team/crop";
        mkdir($team_crop_path,0777,TRUE);

        return  $access_slug;

    }

    function storeEdit($agent_uid){
        $sql = sprintf("SELECT users.status , users.email_notification ,users.domain_name ,shop_shopping_mall.*,shop_brand.*, shop_details.* FROM shop_details
              INNER JOIN users ON (shop_details.agent_uid = users.uid)
              LEFT JOIN shop_shopping_mall ON (shop_shopping_mall.agent_uid = users.uid)
              LEFT JOIN shop_brand ON (shop_brand.agent_uid = users.uid)
              WHERE (uid = '{$agent_uid}')");
        return $this->global_model->runSQL($sql);

    }

    function update($agent_uid){

        $domain_name=$this->util_model->validDomainName($this->input->post('domain_name'));
        $users=array('domain_name'=>$domain_name,'email_notification'=>$this->input->post('email_notification'),'status'=>$this->input->post('status'),'update_date'=>time());
        $this->db->set($users);
        $this->db->where('uid',$agent_uid);
        $this->db->update('users');

        $shop_details=array(
        'contact_person'=>$this->input->post('contact_person')
        ,'shop_name'=>$this->input->post('shop_name')
        ,'email'=>$this->input->post('email')
        ,'location_id'=>$this->input->post('location_id')
        ,'shopping_status'=>$this->input->post('shopping_status')
        ,'brand_status'=> $this->input->post('brand_status')
        ,'listing_type'=> $this->input->post('listing_type')
        ,'setup_website'=> $this->input->post('setup_website')
        ,'address'=>$this->input->post('address')
        ,'cell_phone'=>$this->input->post('cell_phone')
        ,'business_phone'=>$this->input->post('business_phone')
        ,'fax'=>$this->input->post('fax')
        ,'city'=>$this->input->post('city')
        ,'district'=>$this->input->post('district')
        ,'postal_code'=>$this->input->post('postal_code')
        );

        $this->db->set($shop_details);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shop_details');

        if($this->input->post('shopping_status') == 1){
            $shop_shopping_mall=array('shopping_mall_id'=>$this->input->post('shopping_mall_id'),'level'=>$this->input->post('level'),'shop_no'=>$this->input->post('shop_no'));
            $this->db->set($shop_shopping_mall);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_shopping_mall');
        }else{
            $shop_shopping_mall=array('shopping_mall_id'=>0,'level'=>0,'shop_no'=>0);
            $this->db->set($shop_shopping_mall);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_shopping_mall');
        }

        $shop_brand=array('agent_uid'=>$agent_uid,'brand_status'=>$this->input->post('brand_status') );
        $this->db->set($shop_brand);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shop_brand');
        return $access_slug= $this->uri->segment(4,NULL);

    }



}
