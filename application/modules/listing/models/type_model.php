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
class Type_model extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    /*----------------List of selected product category--------------*/

    function productCategoryLabel1($access_slug){

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->from('shop_category');
        $this->db->select('shop_category.parent_id');
        $this->db->where('agent_uid', $agent_uid);
        $this->db->group_by('shop_category.parent_id');
        return $query=$this->db->get();
    }

    function productCategoryLabel2($access_slug,$parent){

        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->select('shop_category.category_id');
        $this->db->from('shop_category');
        $this->db->where('shop_category.parent_id',$parent);
        $this->db->where('agent_uid', $agent_uid);
        return $query=$this->db->get();

    }

    function update($agent_uid=0, $product_id=0){

        $catid_label_1=$this->input->post('catid_label_1')? $this->input->post('catid_label_1') :0;
        $catid_label_2=$this->input->post('catid_label_2')? $this->input->post('catid_label_2') :0;
        $catid_label_3=$this->input->post('catid_label_3')? $this->input->post('catid_label_3') :0;
        $catid_label_4=$this->input->post('catid_label_4')? $this->input->post('catid_label_4') :0;

        $this->db->where(array('agent_uid'=>$agent_uid, 'product_id'=>$product_id));
        if($this->db->count_all_results('listing_product_category') > 0){
            $array=array('catid_label_1'=>$catid_label_1,'catid_label_2'=>$catid_label_2,'catid_label_3'=>$catid_label_3,'catid_label_4'=>$catid_label_4);
            $this->db->set($array);
            $this->db->where(array('agent_uid'=>$agent_uid, 'product_id'=>$product_id));
            $this->db->update('listing_product_category');
        }else{
            $array=array('agent_uid'=>$agent_uid, 'product_id'=>$product_id,'catid_label_1'=>$catid_label_1,'catid_label_2'=>$catid_label_2,'catid_label_3'=>$catid_label_3,'catid_label_4'=>$catid_label_4);
            $this->db->set($array);
            $this->db->insert('listing_product_category');
        }

    }


}
