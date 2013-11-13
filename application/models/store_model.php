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

       // $this->db->where(array('agent_uid'=>$agentUID))->delete('shop_details');

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
        $password =$this->util_model->get_rendom_password();
        $access_slug=$this->util_model->get_slug($shop_name);
        $username=$this->util_model->get_username($shop_name);
        $array=array('access_slug'=>$access_slug, 'user_name'=>$username,'password'=>md5($password),'access_type'=>3,'add_date'=>time(),'status'=>1);
        $this->db->set($array);
        $this->db->insert('users');
        $agent_uid=$this->db->insert_id();

        $array=array('agent_uid'=>$agent_uid,'shop_group'=>$shop_group,'location_id'=>$location_id,'shop_name' =>trim($shop_name));
        $this->db->set($array);
        $this->db->insert('shop_details');

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

    function storeEdit($agent_uid){
        $sql = sprintf("SELECT users.access_slug ,users.status , users.email_notification ,users.domain_name ,shop_shopping_mall.*,shop_brand.*, shop_details.* FROM shop_details
              INNER JOIN users ON (shop_details.agent_uid = users.uid)
              LEFT JOIN shop_shopping_mall ON (shop_shopping_mall.agent_uid = users.uid)
              LEFT JOIN shop_brand ON (shop_brand.agent_uid = users.uid)
              WHERE (uid = '{$agent_uid}')");
        return $this->global_model->runSQL($sql);

    }

    function update($access_slug){


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

        if($this->input->post('shopping_status') == 1){
            $shop_shopping_mall=array('shopping_mall_id'=>$this->input->post('shopping_mall_id'),'level'=>$this->input->post('level'),'shop_no'=>$this->input->post('shop_no'));
            $this->db->set($shop_shopping_mall);
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_shopping_mall');
        }
        if($this->input->post('brand_status') == 1){
            $shop_brand=array('agent_uid'=>$agent_uid,'brand_status'=>$this->input->post('brand_status') );
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
    function getAbout($agent_uid){


        return $query = $this->db
                ->from('shop_about')
                ->where(array('agent_uid'=>$agent_uid))
                ->get()
                ->result();

    }


    function storeAboutUpdate($agent_uid=0){

        $array=array('agent_uid'=>$agent_uid,'open_time'=>$this->input->post('open_time'),'close_time'=>$this->input->post('close_time'),'weekly_close'=>$this->input->post('weekly_close'),'car_parking'=>$this->input->post('car_parking'),'parking_capacity'=>$this->input->post('parking_capacity'),'escalator'=>$this->input->post('escalator'),'lift'=>$this->input->post('lift'),'air_condition'=>$this->input->post('air_condition'),'security'=>$this->input->post('security'),'other_facalities'=>$this->input->post('other_facalities'),'about_us'=>$this->input->post('about_us'));
        $this->db->set($array);
        if($this->global_model->getExistingCount('shop_about','agent_uid',$agent_uid) > 0 ){
            $this->db->where('agent_uid',$agent_uid);
            $this->db->update('shop_about');
        }else{
            $this->db->insert('shop_about');
        }


    }

    function getDisclaimer($agent_uid)
    {

        return $this->db
        ->select('disclaimer')
        ->from('shop_details')
        ->where('agent_uid',$agent_uid)
        ->get()
        ->result();
    }

    function storeDisclaimerUpdate($agent_uid){

        $disclaimer=$this->input->post('disclaimer');
        $array=array('disclaimer'=>$disclaimer);
        $this->db->set($array);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shop_details');
    }

    function bannerImageLogo($agent_uid){

        $list=$this->db->where(array('agent_uid'=>$agent_uid))->get('banner_image')->result();

        $this->db->select('image_path');
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'status'=>1));
        $this->db->order_by('banner_id','desc');
        $banner_image=$this->db->get('banner_image');

        $this->db->select('*');
        $this->db->where(array('logo_image.agent_uid'=>$agent_uid));
        $logo=$this->db->get('logo_image');
        return array($list,$banner_image,$logo);
    }

    function banner_upload($agent_uid,$path=NULL)
    {

        $this->image_model->create_dir_new($agent_uid);
        $file_temp =$_FILES["image_name"]["tmp_name"];
        $up_filename=$_FILES["image_name"]["name"];

        $output_file_path =$path;
        $file_name = $this->image_model->prep_filename($up_filename);
        $file_ext = $this->image_model->get_extension($up_filename);
        $filename = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);
        $targetFile =  str_replace('//','/',$output_file_path) .$filename;

        move_uploaded_file($file_temp,$targetFile);
        list($width, $height) = getimagesize($output_file_path.'/'.$filename);
        if(960 > $width  ||  100 > $height ){
            if (file_exists($path.'/'.$filename)){
                unlink(RELATIVE_PATH.'/'.$path.'/'.$filename);
            }
            $this->session->set_flashdata('error_msg',$this->lang->line('banner_size_valid').$width.'*'.$height);
        }else{

            resize_image($file_temp, $output_file_path,960,100);
            $photo_path =$path.$filename;
            $array=array('agent_uid'=>$agent_uid,'image_name'=>$filename,'image_path'=>$photo_path,'banner_name'=>$this->input->post('banner_name'),'status'=>$this->input->post('status'));
            $this->db->set($array);
            $this->db->insert('banner_image');
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));
        }


    }
    function site_logo($agent_uid,$path=NULL)
    {

        $this->image_model->create_dir_new($agent_uid);
        $file_temp =$_FILES["logo_name"]["tmp_name"];
        $up_filename=$_FILES["logo_name"]["name"];

        $output_file_path =$path;
        $file_name = $this->image_model->prep_filename($up_filename);
        $file_ext = $this->image_model->get_extension($up_filename);
        $filename = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);
        $targetFile =  str_replace('//','/',$output_file_path) .$filename;

        move_uploaded_file($file_temp,$targetFile);
        $photo_path =$path.$filename;

        $delete_path = $this->db->where('agent_uid', $agent_uid)->get('logo_image');
        if($delete_path->num_rows() > 0){
            $row=$delete_path->result();
            $delete_image_path=isset($row[0]->logo_path)? $row[0]->logo_path :'';
            if($delete_image_path){
                if (file_exists($delete_image_path)){
                    unlink(RELATIVE_PATH.'/'.$delete_image_path);
                }
            }
            $this->db->where('agent_uid', $agent_uid)->delete('logo_image');
        }
        $array=array('agent_uid'=>$agent_uid,'logo_name'=>$filename,'logo_path'=>$photo_path,'logo_height'=>$this->input->post('logo_height'),'logo_width'=>$this->input->post('logo_width'),'status'=>$this->input->post('logo_status'));
        $this->db->set($array);
        $this->db->insert('logo_image');
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));

    }

    function deleteBanner($agent_uid,$banner_id){
        $this->db->select('image_path')->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id));
        $sql=$this->db->get('banner_image');
        $row=$sql->result();
        $image_path=isset($row[0]->image_path)? $row[0]->image_path :'';
        if($image_path){
            if (file_exists($image_path)){
                unlink(RELATIVE_PATH.'/'.$image_path);
            }
        }
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))->delete('banner_image');

    }
    function statusBanner($agent_uid,$banner_id){
        $status = $this
            ->db
            ->select('status')
            ->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))
            ->get('banner_image')->result();
        if($status == 1){
            $status=0;
        }else{
            $status=1;
        }
        $this->db->where(array('banner_image.agent_uid'=>$agent_uid,'banner_id'=>$banner_id))->set(array('status'=>$status))->update('banner_image');

    }
    function deleteLogo($agent_uid){
        $this->db->select('logo_path')->where(array('logo_image.agent_uid'=>$agent_uid));
        $sql=$this->db->get('logo_image');
        $row=$sql->result();
        $logo_path=isset($row[0]->logo_path)? $row[0]->logo_path :'';
        if($logo_path){
            if (file_exists($logo_path)){
                unlink(RELATIVE_PATH.'/'.$logo_path);
            }
        }
        $this->db->where(array('logo_image.agent_uid'=>$agent_uid))->delete('logo_image');

    }
    function statusLogo($agent_uid){
        $status = $this
            ->db
            ->select('status')
            ->where(array('logo_image.agent_uid'=>$agent_uid))
            ->get('logo_image')->result();
        if($status == 1){
            $status=0;
        }else{
            $status=1;
        }
        $this->db->where(array('logo_image.agent_uid'=>$agent_uid))->set(array('status'=>$status))->update('logo_image');

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
        return json_encode($jsonData);

    }

    public function mallList(){

        $this->db->select('agent_uid,shop_name');
        $this->db->from('shop_details');
        $this->db->join('users', 'users.uid = shop_details.agent_uid', 'left');
        $this->db->where(array('users.status'=>1,'shop_group' => 12));
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
