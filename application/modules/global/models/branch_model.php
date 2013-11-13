<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Md Shafiqul Islam<shafiq@authenticbd.com>
 * @package Product Category
 * @category Common used Variable
 * @version 1.0
 */

class Branch_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function getBranchList($agent_uid){

        $result = $this->db
            ->select('branch.contact_person  , branch.random_id , branch.status , settings.settings_name')
            ->from('branch')
            ->join('settings','settings.settings_id = branch.location_id')
            ->where(array('agent_uid'=>$agent_uid))->order_by('branch.ordering','asc')->get();
        if($result -> num_rows() >0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function getBranch($agent_uid,$random_id)
    {
        return $this->db->where(array('agent_uid' =>$agent_uid , 'random_id' => $random_id))->get('branch')->row();
    }

    function insert($data,$agent_uid)
    {



        $data['agent_uid'] = $agent_uid;
        $data['random_id'] = $this->util_model->get_rendom_password();
        $this->db->set($data);
        $this->db->insert('branch');
        $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));

    }

    function update($data,$agent_uid,$random_id){

        $this->db->set($data);
        $this->db->where(array('random_id'=>$random_id,'agent_uid'=>$agent_uid));
        $this->db->update('branch');
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
    }

    function ordering($agent_uid,$data){


        foreach ($data as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db
                ->where(array('random_id'=>$item,'agent_uid'=>$agent_uid))
                ->set($array)
                ->update('branch');
        endforeach;

    }

    function status($agent_uid,$random_id){

        $row = $this->getBranch($agent_uid,$random_id);
        $status= $row->status;
        if($status == 0){
            $array=array('status'=>1);
        }else{
            $array=array('status'=>0);
        }
        $this->db->set($array);
        $this->db->where(array('agent_uid'=>$agent_uid,'random_id'=>$random_id));
        $this->db->update('branch');

    }

    function multidelete($agent_uid,$array){

        foreach( $array as $val ){
            $this->db->where(array('random_id'=>$val,'agent_uid'=>$agent_uid));
            $this->db->delete('branch');

        }
    }

    function  delete($agent_uid,$random_id){

        $this->db->where(array('random_id'=>$random_id,'agent_uid'=>$agent_uid));
        $this->db->delete('branch');

    }







}

