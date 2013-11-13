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
class Store_model extends CI_Model{

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



    public function changeStoreStatus($agentID){
        $row = $this->db->select('status')->where(array('uid'=>$agentID))->get('users')->result();
        $mall_status= $row[0]->status;
        if($mall_status == 0){
            $array=array('status'=>1);
            $jsonData = array('removeClass'=>"unpublish-icon",'addClass'=>"publish-icon");
        }else{
            $array=array('status'=>0);
            $jsonData = array('removeClass'=>"publish-icon",'addClass'=>"unpublish-icon");
        }
        $this->db->set($array);
        $this->db->where('uid',$agentID);
        $this->db->update('users');
        return $jsonData;
    }

    public function storeDelete($agentUID){

       $this->db->where(array('agent_uid'=>$agentUID))->delete('users');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('admin_options');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_details');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_type');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_about');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_brand');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_category');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_template');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_shopping_mall');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_website');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('custom_menu');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('page_content');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_body');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_header');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_menu');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_submenu');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_page_content');
       $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_footer');

        $this->db->where(array('agent_uid'=>$agentUID))->delete('team_details');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('branch');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('footercta');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('keywords');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('keywords_page');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('newsletter');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('newsletter_subscribers');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('options');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_general_options');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_payment_method');


        $this->db->where(array('agent_uid'=>$agentUID))->delete('banner_image');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('logo_image');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('mall_advertisment');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_footer');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('settings_css_footer');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('testmonials');


        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_product');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_status');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_notifications');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_product_category');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_product_gallery');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_product_image');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('listing_specific_value');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('product_category_custom');
        $this->db->where(array('agent_uid'=>$agentUID))->delete('product_category_ordering');





    }

    public function storeInformation($array_filed,$access_slug){


        if(empty($array_filed)){
            $array="*";
        }else{
            $array=$array_filed;
        }
        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        return $this->db->select($array)
        ->from('shop_details')
        ->join('users','users.uid = shop_details.agent_uid','left')
        ->where('agent_uid',$agent_uid)
        ->get()
        ->result();


    }

    public function storeName($id){

        $row = $this->db->select('shop_name')
        ->from('shop_details')
        ->where('agent_uid',$id)
        ->get()
        ->result();
        return $row[0]->shop_name;

    }

    public function create(){

        sleep(1);
        $shop_name=$this->input->post('shop_name');
        $location_id=$this->input->post('location_id');
        $shop_group=$this->input->post('shop_group');
        $categoryid=$this->input->post('shop_type');
        $password =$this->util_model->get_rendom_password();
        $access_slug=$this->util_model->get_slug($shop_name);
        $username=$this->util_model->get_username($shop_name);
        $array=array('access_slug'=>$access_slug, 'user_name'=>$username,'domain_name'=>$access_slug,'subdomain_name'=>$access_slug,'password'=>md5($password),'access_type'=>3,'add_date'=>time(),'status'=>1);
        $this->db->set($array);
        $this->db->insert('users');
        $agent_uid=$this->db->insert_id();
        if($shop_group =='shops'){
            $listing_type=122;
        }else if($shop_group =='shops'){
            $listing_type=123;
        }
        $array=array('agent_uid'=>$agent_uid,'shop_group'=>$shop_group,'location_id'=>$location_id,'shop_name' =>trim($shop_name),'listing_type'=>$listing_type);
        $this->db->set($array);
        $this->db->insert('shop_details');

        if(is_array($categoryid)){

            foreach ($categoryid as $key => $value)
            {
                $parentid[] = $this->settings_model->category_parent_id($value);

            }
        }
        $parent = array_unique($parentid);
        $array=array('agent_uid'=>$agent_uid,'parent_id'=>serialize($parent), 'category_id' => serialize($categoryid));
        $this->db->set($array)->insert('shop_type');

        if(is_array($categoryid)){

            $this->db->where(array('agent_uid'=>$agent_uid));
            $this->db->delete('shop_category');
            foreach ($categoryid as $key => $value)
            {
                $data = array(
                    'agent_uid'=> $agent_uid,
                    'category_id'=> $value,
                    'parent_id'=> $this->settings_model->category_parent_id($value)
                );
                $this->db->insert('shop_category',$data);
            }
        }


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

        /*

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
        */
        return  $access_slug;

    }

    function storeEdit($agent_uid)
    {
        $sql = "SELECT users.access_slug ,users.status , users.email_notification ,users.domain_name ,shop_shopping_mall.*,shop_brand.*, shop_details.* FROM shop_details
              INNER JOIN users ON (shop_details.agent_uid = users.uid)
              LEFT JOIN shop_shopping_mall ON (shop_shopping_mall.agent_uid = users.uid)
              LEFT JOIN shop_brand ON (shop_brand.agent_uid = users.uid)
              WHERE (uid = $agent_uid)";
        return $this->global_model->runSQL($sql);

    }

    private function getMallShop($agent_uid,$shopping_mall_id)
    {

        $res = $this->db->where(array('agent_uid'=>$agent_uid,'shopping_mall_id'=>$shopping_mall_id))->get('shop_shopping_mall');
        $count = $res->num_rows();
        return $count;

    }

    private function getShopBrand($agent_uid)
    {

        $res = $this->db->where(array('agent_uid'=>$agent_uid))->get('shop_brand');
        $count = $res->num_rows();
        return $count;

    }

    function update($access_slug)
    {


        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $domain_name=$this->util_model->validDomainName($this->input->post('domain_name'));
        $users=array('domain_name'=>$domain_name,'email_notification'=>$this->input->post('email_notification'),'status'=>$this->input->post('status'),'update_date'=>time());
        $this->db->set($users);
        $this->db->where('uid',$agent_uid);
        $this->db->update('users');

        $shop_details=array(

            'shop_name'=>$this->input->post('shop_name')
            ,'designation_id'=>$this->input->post('designation_id')
            ,'contact_person'=>$this->input->post('contact_person')
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

        $shopping_mall_id = $this->input->post('shopping_mall_id');
        $count = $this->getMallShop($agent_uid,$shopping_mall_id);

        if($this->input->post('shopping_status') == 1 && $count > 0 ){

            $shop_shopping_mall=array('agent_uid'=>$agent_uid ,'shopping_mall_id'=>$this->input->post('shopping_mall_id'),'level'=>$this->input->post('level'),'shop_no'=>$this->input->post('shop_no'),'status'=>1);
            $this->db->set($shop_shopping_mall);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_shopping_mall');
        }else if($this->input->post('shopping_status') == 0 && $count > 0 ){
            $shop_shopping_mall=array('status'=>0);
            $this->db->set($shop_shopping_mall);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_shopping_mall');

        }elseif($this->input->post('shopping_status') == 1 && $count == 0 ){
            $shop_shopping_mall=array('agent_uid'=>$agent_uid ,'shopping_mall_id'=>$this->input->post('shopping_mall_id'),'level'=>$this->input->post('level'),'shop_no'=>$this->input->post('shop_no'));
            $this->db->set($shop_shopping_mall);
            $this->db->insert('shop_shopping_mall');
        }


        $bcount = $this->getShopBrand($agent_uid);
        if($bcount == 0 && $this->input->post('brand_status') == 1){
            $shop_brand=array('agent_uid'=>$agent_uid,'brand_status'=>$this->input->post('brand_status') );
            $this->db->set($shop_brand);
            $this->db->insert('shop_brand');
        }elseif($bcount > 0 ){
            $shop_brand=array('brand_status'=>$this->input->post('brand_status') );
            $this->db->set($shop_brand);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_brand');
        }


        if($this->input->post('setup_website') == 1 && (!$this->global_model->getExistingCount('settings_website','agent_uid',$agent_uid) >0)){

            $array=array('agent_uid'=>$agent_uid ,'template_name'=>1,'create_date'=>time());
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

        }

        return $access_slug= $this->input->post('access_slug');

    }

    function storeAgentPaging(){

        $access_slug= $this->uri->segment(4,0);
        $mallID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->input->post('query');
        $page = $this->input->post('page') ? $this->input->post('page'):1;
        $rp = $this->input->post('rp');
        $sortname = $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder');

        if (!$sortname) $sortname = 'shopping_mall_name';
        if (!$sortorder) $sortorder = 'desc';
        if($this->input->post('query')!=''){
            $where = "WHERE shop_shopping_mall.shopping_mall_id = $mallID AND `".$this->input->post('qtype')."` LIKE '%".$this->input->post('query')."%' ";
        } else {
            $where ="WHERE shop_shopping_mall.shopping_mall_id = $mallID AND shop_shopping_mall.shopping_mall_id =". $mallID;
        }

        if($this->input->post('letter_pressed')!='' && $this->input->post('letter_pressed')!='ALL'){
            $where = "WHERE shop_shopping_mall.shopping_mall_id = $mallID AND `".$this->input->post('qtype')."` LIKE '".$this->input->post('letter_pressed')."%' ";
        }
        if($this->input->post('letter_pressed')=='#'){
            $where = "WHERE shop_shopping_mall.shopping_mall_id = $mallID AND `".$this->input->post('qtype')."` REGEXP '[[:digit:]]' ";
        }
        $sort = "ORDER BY $sortname $sortorder";

        if (!$page) $page = 1;
        if (!$rp) $rp = 10;

        $start = (($page-1) * $rp);
        $limit = "LIMIT $start, $rp";
        $sql="SELECT
                 users.access_slug
                , users.domain_name
                ,shop_shopping_mall.shopping_mall_id
                , shop_shopping_mall.shop_no
                , shop_shopping_mall.level
                , shop_shopping_mall.status
                , shop_details.agent_uid
                , shop_details.shop_name
                , shop_details.contact_person
                , shop_details.business_phone
                FROM  shop_shopping_mall
                INNER JOIN shop_details ON (shop_shopping_mall.agent_uid = shop_details.agent_uid)
                INNER JOIN users ON (shop_shopping_mall.agent_uid = users.uid)
                $where $sort $limit";
        $result =   $this->runSQL($sql);
        $total  =   $this->countRec($sql);
        header("Content-type: application/json");
        $jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
        foreach ($result as $row ){

            if($row->status == 0 ){
                $status="unpublish-icon";
            }else{
                $status="publish-icon";
            }
        $entry = array('id' => $row->agent_uid,
            'cell'=>array(
                'id'                    => $row->agent_uid,
                'shop_name'             => '<a target="_blank" href="'.site_url($row->domain_name).'">'.$row->shop_name.'</a>',
                'shop_no'               => $row->shop_no,
                'level'                 => $row->level,
                'contact_person'        => $row->contact_person,
                'business_phone'        => $row->business_phone,
                'action'                => '<a class="delete" id="'.$row->agent_uid.'" rel="'.site_url('shoppingmall/mall/mallShopDelete/'.$row->access_slug).'" href="javascript:void(0)"><span class="delete-icon"></span></a><a target="_blank" href="'.site_url($row->domain_name).'"><span class="view-icon"></span></a><a class="mall-status" id="'.$row->agent_uid.'" rel="'.site_url('shoppingmall/mall/changeMallShopStatus/'.$row->access_slug).'" href="javascript:void(0)"><span id="shop-'.$row->agent_uid.'" class="'.$status.'"></span></a>'
            )
        );

        $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = $total;
       // return json_encode($jsonData);

    }

    public function mallList(){

        $this->db->select('agent_uid,shop_name');
        $this->db->from('shop_details');
        $this->db->join('users', 'users.uid = shop_details.agent_uid', 'left');
        $this->db->where(array('users.status'=>1,'shop_group' => 'shopping-mall'));
        $this->db->order_by('shop_details.shop_name','asc');
        return $this->db->get()->result();

    }
    function changeMallShopStatus($agentID=0){

        $row = $this->db->select('status')->where(array('agent_uid'=>$agentID))->get('shop_shopping_mall')->result();
        $mall_status= $row[0]->status;

        if($mall_status == 0){
            $array=array('status'=>1);
            $jsonData = array('removeClass'=>"unpublish-icon",'addClass'=>"publish-icon");
        }else{
            $array=array('status'=>0);
            $jsonData = array('removeClass'=>"publish-icon",'addClass'=>"unpublish-icon");
        }
        $this->db->set($array);
        $this->db->where('agent_uid',$agentID);
        $this->db->update('shop_shopping_mall');

        return $jsonData;
    }


    public function checkUniqueTitle($agent_uid,$shop_group,$location_id){

               if(!empty($id)){
            $dbrow = $this->db->select('shop_name')
                ->where(array('agent_uid'=>$agent_uid, 'shop_group' => $shop_group , 'location_id'=>$location_id ))
                ->get('shop_details')->result();
            return $dbrow[0]->shop_name;

        }

    }
    public function checkStoreName($agent_uid ,$shop_group ,$location_id ,$shop_name){

        $dbshopname = $this->checkUniqueTitle($agent_uid,$shop_group,$location_id);
        if(strtolower($shop_name) != strtolower($dbshopname) ){

            $count=$this->db
                ->select('shop_name')
                ->where(array(strtolower('shop_name')=>strtolower('$shop_name') ,'location_id' => $location_id , strtolower('shop_group') => strtolower('$shop_group')))
                ->get('shop_details')
                ->num_rows();

            if($count > 0 )
            {
                $this->form_validation->set_message('check_store_name', $shop_name.' %s '.$this->lang->line('duplicate_msg'));
                return FALSE;
            }else{
                return TRUE;
            }
        }
    }

    public function ajaxCheckStoreName($shop_group,$location_id,$shop_name ){


            $count=$this->db
                ->select('shop_name')
                ->where(array(strtolower('shop_name')=>strtolower('$shop_name') ,'location_id' => $location_id , strtolower('shop_group') => strtolower('$shop_group')))
                ->get('shop_details')
                ->num_rows();
        if($count > 0 )
        {
            echo $shop_name.'&nbsp;Store name&nbsp;'.$this->lang->line('duplicate_msg');
        }else{
            echo  "success";
        }
    }
    public function checkExistingDomain($id){

        if(!empty($id)){
            $dbDomain = $this->db->select('domain_name')
                ->where('uid',$id)
                ->get('users')->result();
            return $dbDomain[0]->domain_name;

        }

    }

    function checkDomainName($name,$agent_uid){

        $dbDomain = $this->checkExistingDomain($agent_uid);
        $validDomain = $this->util_model->validDomainName($name);
        //if (preg_match ("/^[a-z0-9][a-z0-9\-]+[a-z0-9](\.[a-z]{2,4})+$/i", $validDomain)) {
            if( $validDomain != $dbDomain ){

                $sql="SELECT COUNT(uid) AS countValue FROM users WHERE (LOWER(domain_name) = LOWER('$validDomain'))";
                $count=$this->db->query($sql)->result();
                if($count[0]->countValue > 0 )
                {
                    $this->form_validation->set_message('check_domain_name', $validDomain .' %s '.$this->lang->line('duplicate_msg'));
                    return FALSE;
                }else{
                    return TRUE;
                }
            }
//        }else{
//            $this->form_validation->set_message('check_domain_name', 'Please enter only domain name ignore(http//:,www.,_,Special charecters)');
//            return FALSE;
//        }

    }


}
