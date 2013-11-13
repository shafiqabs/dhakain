<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('store_model'));
    }

    function ajax_check_store_name()
    {
        $shop_name=$this->input->post('shop_name');
        $location_id=$this->input->post('location_id');
        $shop_group=$this->input->post('shop_group');
        return $this->store_model->ajaxCheckStoreName($shop_group ,$location_id , strtolower($shop_name));
    }


}