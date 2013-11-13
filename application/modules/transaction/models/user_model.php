<?php

/**
 * user_model Model
 *
 * @package	
 * @subpackage	
 * @category	
 * @author	Rakibul Islam
 * @link	
 */
class User_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function user_list($action='count',$per_page=0,$start=0,$order_field=FALSE,$order='ASC')
	{
		$field = ($this->input->post('field'))?$this->input->post('field'):'any';
		$value = trim(($this->input->post('value'))?$this->input->post('value'):'');
		$filter_field = ($this->input->post('filter_field'))?$this->input->post('filter_field'):'role_id';
		$filter_value = trim(($this->input->post('filter_value'))?$this->input->post('filter_value'):'');
		
		//mandatory where string
		$str_where = "user_id != '0' ";
		//other string during search
		$str_like = '';$str_filter = '';

		$value = $this->db->escape_like_str($value);
		if($value!='')
		{
			if($field!='any')
			{
				if($field=='fname'){
					$field = 'users.fname';
				}else if($field=='lname'){
					$field = 'users.lname';
				}else if($field=='email'){
					$field = 'users.email';
				}
				$str_like .= " AND ".$field." LIKE '%".$value."%'";
			}
			else
			{
				$arr_value = explode(" ",$value);
				$i = 0;
				foreach($arr_value as $v)
				{
					if($i){
						$str_like .= " OR users.fname LIKE '%".$v."%'";
					}else{
						$str_like .= " AND (users.fname LIKE '%".$v."%'";
					}
					$str_like .= " OR users.lname LIKE '%".$v."%'";
					$str_like .= " OR users.email LIKE '%".$v."%'";
					if((count($arr_value)-1)==$i){
						$str_like .= ")";
					}
					$i++;
				}
			}
		}
		$filter_value = $this->db->escape_like_str($filter_value);
		if($filter_value!=''){
			$str_filter = " AND ".$filter_field."='".$filter_value."'";
		}
		//full where
		$this->db->where($str_where.$str_like.$str_filter);
		//order
		if($order_field){
			$this->db->order_by($order_field, $order);
		}
		//query count
		if($action!='count'){
			$this->db->limit($per_page, $start);
		}
		
		$query = $this->db->get('users');
		if($action=='count')
			return $query->num_rows(); 
		else
			return $query->result(); 
	}
	
	function get_user($user_id)
	{
		$this->db->select();
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('users');
		return $query->result();
	}
	
	function delete_user($user_id)
	{
		$this->db->delete('users', array('user_id' => $user_id));
	}
	
}
?>