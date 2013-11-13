<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helps extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}


	function index()
	{

        $helps=$this->db->where(array('status'=>1))->get('site_helps')->result();
        $data='';
        foreach($helps as $helpRows):
        $data .='<li><span class="help-content"><h3>'.$helpRows->title.'</h3><p>'.$helpRows->content.'</p></span></li>';
        endforeach;
        echo $data;

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */