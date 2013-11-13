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
class About_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    public function getAbout($agent_uid){

        return $query =
            $this->db
                ->select('about')
                ->from('shop_details')
                ->where(array('agent_uid'=>$agent_uid))
                ->get()
                ->result();

    }

    public function save($agent_uid){

        $array=array('about'=>$this->input->post('about'));
        $this->db->set($array);
        $this->db->where('agent_uid',$agent_uid);
        $this->db->update('shop_details');

    }

}
