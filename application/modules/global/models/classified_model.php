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
class Classified_model extends CI_Model{

	function __construct()
    {
        parent::__construct();
    }

    function categorylist($product_group=0, $parent_id=0){

        $this->db->select();
        $this->db->where(array('product_group'=>$product_group,'parent_id'=>$parent_id));
        $this->db->order_by("parent_id", "asc");
        return $this->db->get('product_category');
    }

    function save($agent_uid)
    {
        $product_type=$this->input->post('category_id');
        $parentid=$this->input->post('parent_id');
        // print_r($parentid);
        $sql=$this->db->select('catid_label_2')->where(array('agent_uid'=>$agent_uid))->get('listing_product_category');
        $catid_label=array();
        foreach($sql->result() as $rows){
            $catid_label[]=$rows->catid_label_2;
        }
        //$existid = array_diff($product_type, $catid_label);
        if($sql->num_rows() > 0){
            $categoryid=(array_merge($product_type, $catid_label)); //Array ( [0] => blue [1] => octarine )
        }else{
            $categoryid = $product_type;
        }
        //print_r($categoryid);
        //exit;
        $array=array('agent_uid'=>$agent_uid,'parent_id'=>serialize($parentid), 'category_id' => serialize($categoryid));
        $this->db->set($array);
        $this->db->where(array('agent_uid'=>$agent_uid));
        if($this->db->count_all_results('shop_type') >0)
        {
            $this->db->where(array('agent_uid'=>$agent_uid));
            $this->db->update('shop_type');
        }else{
            $this->db->insert('shop_type');
        }

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
    }

    function get_shop_categoryid($agent_uid=0,$category_id=0){

        $this->db->select('category_id');
        $this->db->where('agent_uid',$agent_uid);
        $query=$this->db->get('shop_type');
        $row=$query->result();
        if($query-> num_rows() >0){
            $serialize_id=unserialize($row[0]->category_id);
            if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
                return $category_id;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    function get_shop_parentid($agent_uid=0,$category_id=0){

        $this->db->select('parent_id');
        $this->db->where('agent_uid',$agent_uid);
        $query=$this->db->get('shop_type');
        $row=$query->result();
        if($query-> num_rows() >0){
            $serialize_id=unserialize($row[0]->parent_id);
            if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
                return $category_id;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }



}
