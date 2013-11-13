<?php

/**
 * Seller  Model
 *
 * @package	
 * @subpackage	
 * @category	
 * @author	Md Shafiqul Islam
 * @link	
 */
class Listing_model extends CI_Model{

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

    function productPaging($modules,$access_slug){

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->input->post('query');
        $page = $this->input->post('page') ? $this->input->post('page'):1;
        $rp = $this->input->post('rp');
        $sortname = $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder');

        if (!$sortname) $sortname = 'product_id';
        if (!$sortorder) $sortorder = 'desc';
        if($this->input->post('query')!=''){
            $where = "WHERE `agent_uid` = $agent_uid && `archive`  = 0 && `".$this->input->post('qtype')."` LIKE '%".$this->input->post('query')."%' ";
        }
        if($this->input->post('letter_pressed') == 'ALL' ){
            $where ="WHERE `agent_uid` = $agent_uid && `archive`  = 0 && `product_name` LIKE '%' ";
        }
        if($this->input->post('letter_pressed')!='' && $this->input->post('letter_pressed')!='ALL'){
            $where = "WHERE `agent_uid` = $agent_uid && `archive`  = 0 && `".$this->input->post('qtype')."` LIKE '".$this->input->post('letter_pressed')."%' ";
        }else{
            $where ="WHERE `agent_uid` = $agent_uid && `archive`  = 0 && `product_name` LIKE '%' ";

        }
        $sort = "ORDER BY $sortname $sortorder";

        if (!$page) $page = 1;
        if (!$rp) $rp = 10;

        $start = (($page-1) * $rp);
        $limit = "LIMIT $start, $rp";
        $count_sql = "
            SELECT product_name ,product_code, slug , price , quantity ,created , expired , product_status , status

            FROM listing_product
            LEFT JOIN listing_status ON (listing_status.product_id = listing_product.product_id)
            $where ";

        $sql = "
            SELECT product_name ,product_code, slug , price , quantity ,created , expired , product_status , status

            FROM listing_product
            LEFT JOIN listing_status ON (listing_status.product_id = listing_product.product_id)
            $where $sort $limit";
        $result = $this->runSQL($sql);
        $total =  $this->countRec($count_sql);
        header("Content-type: application/json");
        $jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
        foreach ($result as $rows ) {
            if($rows->status == 0 ){
                $status="unpublish-icon";
            }else{
                $status="publish-icon";
            }

            $entry = array('id' => $rows->product_code,
                'cell'=>array(
                    'id'                    => $rows->product_code,
                    'product_name'          => '<a href="'.site_url($modules.'/product/'.$access_slug.'/'.$rows->slug).'">'.$rows->product_name.'</a>',
                    'created'               => $this->global_model->customDateFormat($rows->created,'d-m-Y'),
                    'price'                 => $rows->price,
                    'quantity'              => $rows->quantity,
                    'product_status'        => $this->settings_model->settings_name($rows->product_status),
                    'expired'               => $this->global_model->customDateFormat($rows->expired,'d-m-Y'),
                    'action'                => '

                    <a id="'.$rows->product_code.'" class="listing-status" href="javascript:void(0)" rel="'.site_url('listing/status/'.$access_slug.'/'.$rows->slug).'"><span id="listing-'.$rows->product_code.'" class="'.$status.'"></span></a>
                    <a class="edit" href="'.site_url($modules.'/product/'.$access_slug.'/'.$rows->slug).'"><span class="edit-icon"></span></a>
                    <a id="'.$rows->product_code.'" class="delete" href="javascript:void(0)"  rel="'.site_url('listing/delete/'.$access_slug.'/'.$rows->slug).'"><span class="delete-icon"></span></a>
                    <a target="_blank" href=""><span class="view-icon"></span></a>'
                )
            );

            $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = $total;
        return json_encode($jsonData);
    }

    public function informationList($access_slug){
        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        return $this->db->where(array('agent_uid'=>$agent_uid))->order_by('ordering','asc')->get('listing_product')->result();
    }

    function productStatus($access_slug,$slug){

            $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
            $product=$this->product_model->productInformation(array('status','product_id'),$agent_uid,$slug);
            $status=$product[0]->status;
            $product_id=$product[0]->product_id;
            if($status == 0){
                $array=array('status'=>1);
                $jsonData = array('removeClass'=>"unpublish-icon",'addClass'=>"publish-icon");
            }else{
                $array=array('status'=>0);
                $jsonData = array('removeClass'=>"publish-icon",'addClass'=>"unpublish-icon");
            }
            $this->db->set($array);
            $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
            $this->db->update('listing_product');
            return $jsonData;

    }

    function productDelete($access_slug,$slug){

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $product=$this->product_model->productInformation(array('product_id'),$agent_uid,$slug);
        $product_id=$product[0]->product_id;
        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id ,'product_status >'=> 0));
        $count=$this->db->count_all_results('buyer_orders');

        if(!$count > 0){

            $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
            $this->db->delete('listing_product');

            $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
            $this->db->delete('listing_specific_value');

            $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
            $this->db->delete('listing_product_category');


            $this->db->select('image_name');
            $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
            $result=$this->db->get('listing_product_image');

            foreach($result->result() as $rows ):
                $delete_pic =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/large/'.$rows->image_name;
                $delete_pic_square =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/square/'.$rows->image_name;
                $delete_pic_thumb =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/thumb/'.$rows->image_name;
                $delete_pic_slisting =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/products/slisting/'.$rows->image_name;
                if (file_exists($delete_pic))
                {
                    unlink($delete_pic);
                    unlink($delete_pic_square);
                    unlink($delete_pic_thumb);
                    unlink($delete_pic_slisting);
                }
            endforeach;

            $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
            $this->db->delete('listing_product_image');

            $this->db->where(array('product_id'=>$product_id));
            $this->db->delete('listing_status');


            $this->db->where('product_id',$product_id);
            $this->db->delete('listing_notifications');
            return array('success'=>'success');


        }else{
            return array('success'=>'wrong');
        }


    }

    function sortingProduct($agent_uid){
        foreach ($_POST['listItem'] as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db
                ->where(array('product_id'=>$item,'agent_uid'=>$agent_uid))
                ->set($array)
                ->update('listing_product');
        endforeach;
    }

}
