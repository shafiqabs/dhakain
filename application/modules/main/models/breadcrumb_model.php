<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/26/13
 * Time: 7:01 AM
 * To change this template use File | Settings | File Templates.
 */

class Breadcrumb_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }




    function setBreadcrumb($switch,$group,$segment2,$data=array())
    {

        $this->session->unset_userdata('breadcrumb');
        switch ($switch)
        {
            case "directories":
                $getDirectoriesBreadcrumb = $this->getDirectoriesBreadcrumb($group,$data);
                $this->session->set_userdata(array('breadcrumb'=>$getDirectoriesBreadcrumb));
                break;
            case "products":
                $getDirectoriesBreadcrumb = $this->getProductDetailsBreadcrumb($group,$data);
                $this->session->set_userdata(array('breadcrumb'=>$getDirectoriesBreadcrumb));
                break;

            default:
                $getDefaultBreadcrumb = $this->getDefaultBreadcrumb($group);
                $this->session->set_userdata(array('breadcrumb'=>$getDefaultBreadcrumb));

        }

    }

    private function getDefaultBreadcrumb($group){

        return $breadcrumb= "Test breadcrumb";
        //$this->session->set_userdata(array('breadcrumb'=>$breadcrumb));
    }

    function getDirectoriesBreadcrumb($group,$data){

        if ($group =="products"){
          return $this->productsBreadcrumb($group,$data);
        }elseif($group =="shops"){
          return $this->shopsBreadcrumb($group,$data);
        }
    }

    private function shopsBreadcrumb(){

    }

    private function productsBreadcrumb ($group,$data){

        $count = count($data);
        $res="";

        $res .='<ul class="nav nav-pills">';

        $menuCategories = $this->directories_model->getMenuLabel();
                $res .='<li class="dropdown "><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop1" class="dropdown-toggle">'.ucfirst($group).'<b class="dropdown-icon-down"></b></a>';
                $res .='<ul aria-labelledby="drop1" role="menu" class="dropdown-menu" id="menu1">';
                foreach($menuCategories as $rows){
                    $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                }
                $res .='</ul>';

            $res .='</li>';

        if(isset($data['catid_label_1']) && $data['catid_label_1'] !=""){
            $labelCategory1 = $this->getProductCategory($data['catid_label_1']);
            $result = $this->getUnderProductCategory($data['catid_label_1'],'catid_label_2');

                $active = ($count == 1) ? 'active':'';
                $res .='<li class="dropdown ' .$active.'"><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop2" class="dropdown-toggle">'.$labelCategory1->category_name.'<b class="dropdown-icon-down"></b></a>';
                if($result ->num_rows() > 0 ){
                    $res .='<ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menu2">';
                    foreach($result->result() as $rows){
                        $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                    }
                    $res .='</ul>';
                }
                $res .='</li>';


        }
        if(isset($data['catid_label_2']) && $data['catid_label_2'] !=""){
            $labelCategory2 = $this->getProductCategory($data['catid_label_2']);
            $result = $this->getUnderProductCategory($data['catid_label_2'],'catid_label_3');

            $active = ($count == 1) ? 'active':'';
            $res .='<li class="dropdown ' .$active.'"><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop2" class="dropdown-toggle">'.$labelCategory2->category_name.'<b class="dropdown-icon-down"></b></a>';
            if($result ->num_rows() > 0 ){
                $res .='<ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menu2">';
                foreach($result->result() as $rows){
                    $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                }
                $res .='</ul>';
            }
            $res .='</li>';


        }
        if(isset($data['catid_label_3']) && $data['catid_label_3'] !=""){
            $labelCategory3 = $this->getProductCategory($data['catid_label_3']);
            $result = $this->getUnderProductCategory($data['catid_label_3'],'catid_label_4');

                $active = ( $count == 3 ) ? 'active':'';
                $res .='<li class="dropdown ' .$active.'"><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop4" class="dropdown-toggle">'.$labelCategory3->category_name.'<b class="dropdown-icon-down"></b></a>';
                if($result ->num_rows() > 0 ){
                    $res .='<ul aria-labelledby="drop4" role="menu" class="dropdown-menu" id="menu4">';
                    foreach($result->result() as $rows){
                        $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$labelCategory2->category_slug.'&catid_label_3='.$labelCategory3->category_slug.'&catid_label_4='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                    }
                    $res .='</ul>';
                }
                $res .='</li>';

        }
        if(isset($data['catid_label_4']) && $data['catid_label_4'] !=""){
            $labelCategory4 = $this->getProductCategory($data['catid_label_4']);
            if($count == 4){
                $res .='<li class="dropdown active"><a href="javascript:void(0)" role="button" id="drop5" class="dropdown-toggle">'.$labelCategory4->category_name.'<b class="dropdown-icon-right"></b></a></li>';
            }
        }

        $res .='</ul>';
        return $res;

    }

    private function getProductDetailsBreadcrumb($group,$data){

        $count =10; //count($data);
        $res="";


        $res .='<ul class="nav nav-pills">';

        $menuCategories = $this->directories_model->getMenuLabel();
        $res .='<li class="dropdown "><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop1" class="dropdown-toggle">'.ucfirst($group).'<b class="dropdown-icon-down"></b></a>';
        $res .='<ul aria-labelledby="drop1" role="menu" class="dropdown-menu" id="menu1">';
        foreach($menuCategories as $rows){
            $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
        }
        $res .='</ul>';

        $res .='</li>';

        if(isset($data['catid_label_1']) && $data['catid_label_1'] > 0 ){
            $labelCategory1 = $this->getProductCategoryID($data['catid_label_1']);
            $result = $this->getUnderProductDetailsCategory($data['catid_label_1'],'catid_label_2');
            $active = ($count == 1) ? 'active':'';


            $res .='<li class="dropdown ' .$active.'"><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop2" class="dropdown-toggle">'.$labelCategory1->category_name.'<b class="dropdown-icon-down"></b></a>';
            if($result ->num_rows() > 0 ){
                $res .='<ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menu2">';
                foreach($result->result() as $rows){
                    $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                }
                $res .='</ul>';
            }
            $res .='</li>';


        }

        if(isset($data['catid_label_2']) && $data['catid_label_2'] > 0 ){
            $labelCategory2 = $this->getProductCategoryID($data['catid_label_2']);
            $result = $this->getUnderProductDetailsCategory($data['catid_label_2'],'catid_label_3');

            $active = ($count == 1) ? 'active':'';
            $res .='<li class="dropdown ' .$active.'"><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop2" class="dropdown-toggle">'.$labelCategory2->category_name.'<b class="dropdown-icon-down"></b></a>';
            if($result ->num_rows() > 0 ){
                $res .='<ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menu2">';
                foreach($result->result() as $rows){
                    $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                }
                $res .='</ul>';
            }
            $res .='</li>';


        }
        if(isset($data['catid_label_3']) && $data['catid_label_3'] > 0 ){
            $labelCategory3 = $this->getProductCategoryID($data['catid_label_3']);
            $result = $this->getUnderProductDetailsCategory($data['catid_label_3'],'catid_label_4');

            $active = ( $count == 3 ) ? 'active':'';
            $res .='<li class="dropdown ' .$active.'"><a href="javascript:void(0)" data-toggle="dropdown" role="button" id="drop4" class="dropdown-toggle">'.$labelCategory3->category_name.'<b class="dropdown-icon-down"></b></a>';
            if($result ->num_rows() > 0 ){
                $res .='<ul aria-labelledby="drop4" role="menu" class="dropdown-menu" id="menu4">';
                foreach($result->result() as $rows){
                    $res .='<li role="presentation"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$labelCategory2->category_slug.'&catid_label_3='.$labelCategory3->category_slug.'&catid_label_4='.$rows->category_slug.'" tabindex="-1" role="menuitem">'.$rows->category_name.'</a></li>';
                }
                $res .='</ul>';
            }
            $res .='</li>';

        }
        if(isset($data['catid_label_4']) && $data['catid_label_4'] > 0){

            $labelCategory4 = $this->getProductCategoryID($data['catid_label_4']);
            $res .='<li class="dropdown"><a href="'.site_url('directories/'.$group.'/search/').'?catid_label_1='.$labelCategory1->category_slug.'&catid_label_2='.$labelCategory2->category_slug.'&catid_label_3='.$labelCategory3->category_slug.'&catid_label_4='.$rows->category_slug.'" role="button" id="drop5" class="dropdown-toggle">'.$labelCategory4->category_name.'<b class="dropdown-icon-right"></b></a></li>';

        }
        $res .='<li class="dropdown active"><a href="javascript:void(0)" role="button" id="drop5" class="dropdown-toggle">'.$data['product_name'].'</a></li>';

        $res .='</ul>';
        return $res;


    }

    function getProductCategory($product_slug)
    {
        $res= $this->db->select('category_name,slug AS category_slug')->where(array('slug'=>$product_slug))->get('product_category');
        if($res->num_rows() > 0){
            $result = $res->row();
            return $result;
        }
        return false;

    }

    function getProductCategoryID($category_id)
    {
        $res= $this->db->select('category_name,slug AS category_slug')->where(array('category_id'=>$category_id))->get('product_category');
        if($res->num_rows() > 0){
            $result = $res->row();
            return $result;
        }
        return false;

    }


    public function getProductCategories($slug)
    {
        $res = $this->db->select('category_id')->where(array('slug'=>$slug,'status'=>1))->get('product_category');
        if($res ->num_rows() > 0){
            $row = $res->row();
            return $row->category_id;
        } return false;
    }

    public function getUnderProductDetailsCategory($category_id,$catid_label=NULL)
    {

        if($category_id){
            $sql = "SELECT product_category.category_name,category_id,
        product_category.slug AS category_slug
    FROM listing_product_category INNER JOIN product_category ON listing_product_category.$catid_label = product_category.category_id
    WHERE product_category.parent_id = $category_id AND product_category.`status`= 1
    GROUP BY listing_product_category.$catid_label";
            $result = $this->db->query($sql);
            return $result;
        }else{
            return false;
        }

    }

    public function getUnderProductCategory($catid_value,$catid_label=NULL)
    {

        $category_id = $this->getProductCategories($catid_value);

        if($category_id){
        $sql = "SELECT product_category.category_name,category_id,
        product_category.slug AS category_slug
    FROM listing_product_category INNER JOIN product_category ON listing_product_category.$catid_label = product_category.category_id
    WHERE product_category.parent_id = $category_id AND product_category.`status`= 1
    GROUP BY listing_product_category.$catid_label";
            $result = $this->db->query($sql);
            return $result;
        }else{
            return false;
        }

    }
}