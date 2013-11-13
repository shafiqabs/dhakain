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
class Shop_model extends CI_Model{

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
        $sql = "SELECT agent_uid as shopID , shop_name ,location_id , business_phone,users.status,users.access_slug,users.domain_name,users.add_date
            FROM shop_details
            INNER JOIN users ON (shop_details.agent_uid = users.uid)
            $where $sort $limit";

        $count = "SELECT agent_uid as shopID , shop_name ,location_id , business_phone,users.status,users.access_slug,users.domain_name,users.add_date
            FROM shop_details
            INNER JOIN users ON (shop_details.agent_uid = users.uid)
            $where";

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

                    <a id="'.$row->shopID.'" class="mall-status" href="javascript:void(0)" rel="'.site_url($this->uri->segment(1,NULL).'/shop/change_status/'.$row->access_slug).'"><span id="mall-'.$row->shopID.'" class="'.$status.'"></span></a>
                    <a class="edit" href="'.site_url($this->uri->segment(1,NULL).'/store/'.$row->access_slug).'"><span class="edit-icon"></span></a>
                    <a id="'.$row->shopID.'" class="delete" href="javascript:void()"  rel="'.site_url($this->uri->segment(1,NULL).'/shop/delete/'.$row->access_slug).'"><span class="delete-icon"></span></a>
                    <a target="_blank" href="'.site_url($row->domain_name).'"><span class="view-icon"></span></a>'
                )
            );

            $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = $total;
        return json_encode($jsonData);
    }





}
