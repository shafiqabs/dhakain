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
class Specification_model extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    /*----------------List of selected product category--------------*/

    public function getSpecification($agent_uid,$product_id){

        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'extra_field'=>0));
        $this->db->order_by('additional_id','ASC');
        $query= $this->db->get('listing_specific_value');
        $specific_value =$query->result();
        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'extra_field'=>1));
        $specific_extra = $this->db->get('listing_specific_value');

        return array('specific_value'=> $specific_value,'specific_extra'=>$specific_extra);
    }



    function getTemplateCategory($product_template_manage_id=0,$category_id=0){

        $this->db->select();
        $this->db->where('product_template_manage_id',$product_template_manage_id);
        $query=$this->db->get('product_template_manage');
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

    function checkSpecificTemplate($catID)
    {
        if(!empty($catID)) {
            if($this->returnTemplate($catID[0]->catid_label_4) != false ){
                return $this->returnTemplate($catID[0]->catid_label_4);
            }elseif($this->returnTemplate($catID[0]->catid_label_3) != false ){
                return $this->returnTemplate($catID[0]->catid_label_3);
            }elseif($this->returnTemplate($catID[0]->catid_label_2) != false ){
                return $this->returnTemplate($catID[0]->catid_label_2);
            }elseif($this->returnTemplate($catID[0]->catid_label_1) != false ){
                return $this->returnTemplate($catID[0]->catid_label_1);
            }
        }
        return false;


    }

    function returnTemplate($id){

        
        $id_serialize = '"'.$id.'"';
        $SQL = sprintf("SELECT
        product_template_metadata.meta_label
        , product_template_metadata.meta_description
        FROM
        product_template_manage INNER JOIN product_template_metadata
        ON (product_template_manage.product_template_manage_id = product_template_metadata.product_template_id)
        WHERE category_id LIKE  '%s%s%s'", '%',$id_serialize, '%' );
        $query=$this->db->query($SQL);
        if($query ->num_rows() > 0){
            return  $query;
        }
        return false;

    }


    function update($agent_uid=0, $product_id=0){


        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
        $this->db->delete('listing_specific_value');

        $label_name=$this->input->post('meta_value');
        foreach ($label_name as $key => $value)
        {
            $data = array(
                'product_id'         => $product_id,
                'agent_uid'          => $agent_uid,
                'label_name'         => $_POST['label_name'][$key],
                'meta_value'         => $_POST['meta_value'][$key],
                'extra_field'        => $_POST['extra_field'][$key]
            );
            $this->db->insert('listing_specific_value',$data);

        }


    }


}
