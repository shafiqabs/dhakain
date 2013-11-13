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
class Disclaimer_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function getDesclaimer($agent_uid){

        return $query =
            $this->db
                ->select('disclaimer')
                ->from('shop_details')
                ->where(array('agent_uid'=>$agent_uid))
                ->get()
                ->result();

    }

    function save($agent_uid=0){

        $array=array('disclaimer'=>$this->input->post('disclaimer'));
        $this->db->set($array);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shop_details');

    }

}
