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
class Mall_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function total_shop($mall_ID)
    {
          return $this->db->where(array('agent_uid'=>$mall_ID))->count_all_results('shop_shopping_mall');
    }

    function runSQL($rsql) {
       return $result = $this->db->query($rsql)->result();
    }
    function countRec($sql) {
        return $this->db->query($sql)->num_rows();
    }
    function setCookie($value){

        setcookie ("cookieValue", "", time() - 3600);
        setcookie ("cookieValue", "", time() - 3600, "/~rasmus/", "example.com", 1);
        setcookie("cookieValue", $value);
        setcookie("cookieValue", $value, time()+3600);  /* expire in 1 hour */
        setcookie("cookieValue", $value, time()+3600, "/~rasmus/", "example.com", 1);
        return  ($_COOKIE['cookieValue']!='' ? $_COOKIE['cookieValue'] : '1');
    }
    function mallPaging($shop_group){

        $this->input->post('query');
        $page = $this->input->post('page') ? $this->input->post('page'):1;
        $rp = $this->input->post('rp');
        $sortname = $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder');

        if (!$sortname) $sortname = 'shop_name';
        if (!$sortorder) $sortorder = 'desc';
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
        $sql = "SELECT agent_uid as agent_uid , shop_name ,location_id , business_phone,users.status,users.access_slug,users.domain_name,users.add_date
            FROM shop_details
            INNER JOIN users ON (shop_details.agent_uid = users.uid)
            $where $sort $limit";

        $sql_count = "SELECT agent_uid as agent_uid , shop_name ,location_id , business_phone,users.status,users.access_slug,users.domain_name,users.add_date
            FROM shop_details
            INNER JOIN users ON (shop_details.agent_uid = users.uid)
            $where ";


        $result = $this->runSQL($sql);
        $total =  $this->countRec($sql_count);
        header("Content-type: application/json");
        $jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
        foreach ($result as $row ) {
            if($row->status == 0 ){
                $status="unpublish-icon";
            }else{
                $status="publish-icon";
            }

            $entry = array('id' => $row->agent_uid,
                'cell'=>array(
                    'id'                    => $row->agent_uid,
                    'shop_name'    => '<a href="'.site_url('shoppingmall/mall/shop_list/'.$row->access_slug).'">'.$row->shop_name.'</a>',
                    'location_id'           => $this->settings_model->settings_name($row->location_id),
                    'business_phone'        => $row->business_phone,
                    'total'                 => $this->mall_model->total_shop($row->agent_uid),
                    'action'                => '
                    <a class="edit" href="'.site_url('shoppingmall/mall/edit/'.$row->access_slug).'"><span class="edit-icon"></span></a>
                    <a id="'.$row->agent_uid.'" class="mall-status" href="javascript:void(0)" rel="'.site_url('shoppingmall/mall/changeStatus/'.$row->access_slug).'"><span id="mall-'.$row->agent_uid.'" class="'.$status.'"></span></a>
                    <a id="'.$row->agent_uid.'" class="delete" href="javascript:void()"  rel="'.site_url('shoppingmall/mall/delete/'.$row->access_slug).'"><span class="delete-icon"></span></a>
                    <a target="_blank" href="'.site_url($row->domain_name).'"><span class="view-icon"></span></a>'
                )
            );

            $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = $total;
        return json_encode($jsonData);
    }

    function changeMallStatus($agentID){
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


    function mallEdit($agent_uid){
        $sql="SELECT users.status , shop_details.* FROM shop_details
              INNER JOIN users ON (shop_details.agent_uid = users.uid)
              WHERE (shop_details.agent_uid =$agent_uid)";
        return $this->global_model->runSQL($sql);

    }


    function mall_about_update($agent_uid=0){

        $array=array('open_time'=>$this->input->post('open_time'),'close_time'=>$this->input->post('close_time'),'weekly_close'=>$this->input->post('weekly_close'),'car_parking'=>$this->input->post('car_parking'),'parking_capacity'=>$this->input->post('parking_capacity'),'escalator'=>$this->input->post('escalator'),'lift'=>$this->input->post('lift'),'air_condition'=>$this->input->post('air_condition'),'security'=>$this->input->post('security'),'other_facalities'=>$this->input->post('other_facalities'),'about_us'=>$this->input->post('about_us'));
        $this->db->set($array);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shopping_mall_about');

    }

    function mall_disclaimer_update($agent_uid){

        $disclaimer=$this->input->post('disclaimer');
        $array=array('disclaimer'=>$disclaimer);
        $this->db->set($array);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shopping_mall');
    }

	function mallUnderPaging($access_slug)
    {

        $mallID=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->input->post('query');
        $page = $this->input->post('page') ? $this->input->post('page'):1;
        $rp = $this->input->post('rp');
        $sortname = $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder');

        if (!$sortname) $sortname = 'shopping_mall_name';
        if (!$sortorder) $sortorder = 'desc';
        if($this->input->post('query')!=''){
            $where = "WHERE shop_details.shopping_status=1 AND shop_shopping_mall.shopping_mall_id = $mallID AND `".$this->input->post('qtype')."` LIKE '%".$this->input->post('query')."%' ";
        } else {
            $where ="WHERE shop_details.shopping_status=1 AND shop_shopping_mall.shopping_mall_id =". $mallID;
        }

        if($this->input->post('letter_pressed')!='' && $this->input->post('letter_pressed')!='ALL'){
            $where = "WHERE shop_details.shopping_status=1 AND shop_shopping_mall.shopping_mall_id = $mallID AND `".$this->input->post('qtype')."` LIKE '".$this->input->post('letter_pressed')."%' ";
        }
        if($this->input->post('letter_pressed')=='#'){
            $where = "WHERE shop_details.shopping_status=1 AND shop_shopping_mall.shopping_mall_id = $mallID AND `".$this->input->post('qtype')."` REGEXP '[[:digit:]]' ";
        }
        $sort = "ORDER BY $sortname $sortorder";

        if (!$page) $page = 1;
        if (!$rp) $rp = 10;

        $start = (($page-1) * $rp);
        $limit = "LIMIT $start, $rp";
        $sql="SELECT
                 users.access_slug
                , users.domain_name
                ,shop_shopping_mall.agent_uid
                , shop_shopping_mall.shop_no
                , shop_shopping_mall.level
                , shop_shopping_mall.status
                , shop_details.agent_uid
                , shop_details.shop_name
                , shop_details.shop_group
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
                'level'                 => $this->settings_model->settings_name($row->level),
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



}
