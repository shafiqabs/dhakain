<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/26/13
 * Time: 7:01 AM
 * To change this template use File | Settings | File Templates.
 */

class Directories_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getGlobalSettings($settings_id)
    {

        $res= $this->db->where(array('parent_id'=>$settings_id,'status'=>1))
            ->order_by('settings_name','asc')
            ->get('settings');
        if($res->num_rows() > 0){
            $result = $res->result();
            return $result;
        }
        return false;

    }

    function getLocationID($settings_slug)
    {

        $res= $this->db->select('settings_id')->where(array('settings_slug'=>$settings_slug,'status'=>1))
            ->order_by('settings_name','asc')
            ->get('settings');
        if($res->num_rows() > 0){
            $result = $res->row();
            return $result->settings_id;
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

    public function getUnderProductCategory($catid_value,$catid_label)
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
       }return false;

    }

    public function getMenuLabel(){

        $sql = " SELECT product_category.category_id,
	product_category.category_name,
	product_category.slug AS category_slug
FROM listing_product_category INNER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
GROUP BY listing_product_category.catid_label_1";
        $result = $this->db->query($sql);
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }

    }

    private function getGrouping($category_id){

        $query = "SELECT grouping_category.category_id,grouping.`name` AS parent_name,
	grouping_category.grouping_parent_id,
GROUP_CONCAT(DISTINCT group_cat_tbl.grouping_id SEPARATOR ',') AS grouping_id,
GROUP_CONCAT(DISTINCT group_tbl.name SEPARATOR ',') AS grouping_name
FROM grouping_category
LEFT JOIN grouping  ON grouping_category.grouping_parent_id = grouping.grouping_id
LEFT JOIN grouping_category as group_cat_tbl ON grouping_category.grouping_parent_id = group_cat_tbl.grouping_parent_id
LEFT JOIN grouping AS  group_tbl  ON group_cat_tbl.grouping_id = group_tbl.grouping_id
WHERE grouping_category.category_id='$category_id' && grouping_category.grouping_parent_id !=0
GROUP BY grouping_category.grouping_parent_id ORDER BY grouping.name ASC";

        $res = $this->db->query($query);
        if($res->num_rows() > 0){
            $result = $res->result();
           return $this->getListGrouping($result);
        }else{
            return false;
        }
    }

    private function getGlobalGrouping($category_id){

        $query = "SELECT grouping.`name` AS parent_name,
	listing_product_group.grouping_parent_id,
	GROUP_CONCAT(DISTINCT listing_product_group.grouping_id SEPARATOR ',') AS grouping_id,
    GROUP_CONCAT(DISTINCT group_tbl.name SEPARATOR ',') AS grouping_name
FROM listing_product_group
INNER JOIN grouping ON listing_product_group.grouping_parent_id = grouping.grouping_id
LEFT JOIN grouping AS group_tbl ON listing_product_group.grouping_id = group_tbl.grouping_id
WHERE listing_product_group.category_id = 2 &&  grouping.global=1
GROUP BY listing_product_group.grouping_parent_id ";

        $res = $this->db->query($query);
        if($res->num_rows() > 0){
            $result = $res->result();
            return $this->getListGrouping($result);
        }else{
            return false;
        }

    }

    private function getListGrouping($result){

            $data="";
            foreach($result as $group){

                $data .='<div class="filters-outer">';
                $data .='<div class="filters-head essFeatureHeader"><span class="group-handle"><i class="icon-minus icon-minus-custom " ></i><p class="group-title">'.$group->parent_name.'</p></span><div  class="reset-filter">Clear</div></div>';
                $data .='<ul class="featureList filters-cont scroll-pane">';

                            $i=0;
                            $subcatID =  explode(',',$group->grouping_id);
                            $grouping_name =  explode(',',$group->grouping_name);
                            foreach($subcatID  as $subid){
                                    $data .='<li>';
                                $data .='<input type="checkbox" class="filter-value" value="'.$subid.'"  name="group_id" >
  '.$grouping_name[$i].'</label>';
                                $data .='</li>';

                            $i++; }
                            $data .='</ul></div>';
            }

        return $data;

    }

    public function getDirectoriesCategory(){

        $sql_category="SELECT product_category.category_name, product_category.slug AS category_slug
                        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
                        INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id
                        INNER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
                        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && listing_product.`status` =1 && shop_details.`status`=1
                        GROUP BY listing_product_category.catid_label_1
                        ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();

        $sql_category="SELECT product_category.category_name,
                          product_category.slug AS category_slug
                          FROM listing_product_category
                          LEFT OUTER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
                          LEFT OUTER JOIN shop_details ON listing_product_category.agent_uid = shop_details.agent_uid
                          WHERE shop_details.shop_group='$shop_group' AND  shop_details.status=1
                          GROUP BY listing_product_category.catid_label_1
                          ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();
    }

    private function getProductMenuCategories(){



        $menu="";
                $menu='<ul id="categories_menu1">';
                    $menuCategories=$this->getMenuLabel();
                    foreach( $menuCategories as $label1){
                        $menu .='<li><a  href="'.site_url().'directories/products/search/?catid_label_1='.$label1->category_slug.'">'.$label1->category_name.'</a><span></span>';
                            $menu .='<div>';
                                    $result = $this->getUnderProductCategory($label1->category_slug,'catid_label_2');
                                    if(!empty($result) && $result ->num_rows() > 0 ){
                                    $menu .='<ul>';
                                             foreach($result->result() as $label2 ){
                                                   $menu .='<li><span></span><a href="'.site_url().'directories/products/search/?catid_label_1='.$label1->category_slug.'&catid_label_2='.$label2->category_slug.'" >'. $label2->category_name.'</a>';
                                                         $result = $this->getUnderProductCategory($label2->category_slug,'catid_label_3');
                                                         if(!empty($result) && $result ->num_rows() > 0 ){
                                                             $menu .='<div>';
                                                                 $menu .='<ul>';
                                                                     foreach($result->result() as $label3 ){
                                                                         $menu .='<li><span></span><a href="'.site_url().'directories/products/search/?catid_label_1='.$label1->category_slug.'&catid_label_2='.$label2->category_slug.'&catid_label_3='.$label3->category_slug.'" >'. $label3->category_name.'</a>';
                                                                             $result = $this->getUnderProductCategory($label3->category_slug,'catid_label_4');
                                                                             if(!empty($result) && $result ->num_rows() > 0 ){
                                                                                 $menu .='<div>';
                                                                                 $menu .='<ul>';
                                                                                 foreach($result->result() as $label4 ){
                                                                                     $menu .='<li><span></span><a href="'.site_url().'directories/products/search/?catid_label_1='.$label1->category_slug.'&catid_label_2='.$label2->category_slug.'&catid_label_3='.$label3->category_slug.'&catid_label_4='.$label4->category_slug.'" >'. $label4->category_name.'</a>';
                                                                                     $menu .='</li>';
                                                                                 }
                                                                                 $menu .='</ul>';
                                                                                 $menu .='</div>';
                                                                             }
                                                                         $menu .='</li>';
                                                                     }
                                                                 $menu .='</ul>';
                                                             $menu .='</div>';
                                                         }
                                                   $menu .='</li>';
                                             }
                                    $menu .='</ul>';
                                    }
                            $menu .='</div>';
                        $menu .='</li>';
                    }
                $menu .='</ul>';
        return $menu;
    }

    public function getProductListing($perpage=10,$start=0){


        $menu_categories = $this->getProductMenuCategories();

        $this->session->set_userdata(array('per_page'=>$perpage));
        $per_page = $this->session->userdata('per_page');

        $query="SELECT listing_product_image.image_small_path,
        listing_product_image.image_thumb_path,
        listing_product.slug,
        listing_product.product_name,
        listing_product.price,
        listing_product.discount_price,
        status_tbl.settings_name AS product_status
        FROM listing_product
	    LEFT JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id
	    INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    LEFT OUTER JOIN listing_status ON listing_product.product_id = listing_status.product_id
        LEFT OUTER JOIN settings status_tbl ON listing_status.product_status = status_tbl.settings_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && shop_details.status=1 && listing_product.`status` =1 ";


        $sql_category="SELECT product_category.category_name, product_category.slug AS category_slug
        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id
	    INNER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && listing_product.`status` =1 && shop_details.`status`=1
        GROUP BY listing_product_category.catid_label_1
        ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();



        $sql_location="SELECT settings.settings_name AS location_name,
	    settings.settings_slug AS location_slug
        FROM listing_product
        INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN settings ON shop_details.location_id = settings.settings_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && shop_details.status=1 && listing_product.`status` =1
        GROUP BY shop_details.location_id
        ORDER BY settings.settings_name ASC";
        $locations = $this->db->query($sql_location)->result();

        $sql_store="SELECT shop_details.shop_name,users.subdomain_name
        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN users ON shop_details.agent_uid = users.uid
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && listing_product.`status` =1 && shop_details.`status`=1
        GROUP BY shop_details.agent_uid ORDER BY shop_details.shop_name ASC";
        $store = $this->db->query($sql_store)->result();

        $page   = intval($start);
        if($page<=0)  $page  = 1;
        $limit=($page-1)*$per_page;
        $base_url = site_url('directories/products/');
        $num = $this->db->query($query);
        $total_rows = $num->num_rows();
        $paging = paginate($base_url, $total_rows,$start,$per_page);
        $limit = "LIMIT $limit , $per_page";
        $pagequery=$query.$limit;
        $query = $this->db->query($pagequery)->result();

        return array($categories,$locations,$store,$query,$paging,$total_rows,$limit,$menu_categories);



    }

    public function productSearch($data, $perpage , $start=0){


        if($start == 0 ){
            $this->session->set_userdata(array('search_data'=>$data));
            $data = $this->session->userdata('search_data');
        }else{
            $data = $this->session->userdata('search_data');
        }


        if(isset($data['catid_label_2']) && $data['catid_label_2'] !="" ){
            $catid = $this->getProductCategories($data['catid_label_2']);
            $product_group = $this->getGrouping($catid);
            $global_group = $this->getGlobalGrouping($catid);
        }else{
            $global_group ="";
            $product_group="";
        }


        $menu_categories = $this->getProductMenuCategories();
        /* Filtering by product category name, location , any shops */
        $product_category="";
        if(isset($data['catid_label_4']) && $data['catid_label_4'] != "" ){
            $catid_label_4 = $this->getProductCategories($data['catid_label_4']);
            if($catid_label_4)
                $product_category = "AND catid_label_4=".$catid_label_4;
        }elseif(isset($data['catid_label_3']) && $data['catid_label_3'] != "" ){
            $catid_label_3 = $this->getProductCategories($data['catid_label_3']);
            if($catid_label_3)
                $product_category = "AND catid_label_3=".$catid_label_3;
        }elseif(isset($data['catid_label_2']) && $data['catid_label_2'] != "" ){
            $catid_label_2 = $this->getProductCategories($data['catid_label_2']);
            if($catid_label_2)
                $product_category = "AND catid_label_2=".$catid_label_2;
        }elseif(isset($data['catid_label_1']) && $data['catid_label_1'] != "" ){
            $catid_label_1 = $this->getProductCategories($data['catid_label_1']);
            if($catid_label_1)
                $product_category = "AND catid_label_1=".$catid_label_1;
        }
        $search_categories="";
        $location="";
        $item_name="";
        if(isset($data['search_item']) && $data['search_item'] != "" ){
            $search_categories = $this->getProductCategories(strtolower($data['search_item']));
            $search_location = $this->getLocationID(strtolower($data['search_item']));
            if($search_categories){
                $search_categories = "|| catid_label_4=".$search_categories."|| catid_label_3=".$search_categories."|| catid_label_2=".$search_categories. "|| catid_label_1=".$search_categories;
            }elseif($search_location){
                $search_categories = "&& location_id=".$search_location;
            }else{
                $item_name = "&& product_name='".strtolower($data['search_item'])."'";
            }

        }

        if(isset($data['location_id']) && $data['location_id'] != "" ){
            $location = $this->getLocationID($data['location_id']);
            if($location){
                $location = "AND location_id=".$location;
            }
        }

        $this->session->set_userdata(array('per_page'=>$perpage));
        $per_page = $this->session->userdata('per_page');

        $query="SELECT listing_product_image.image_small_path,
        listing_product_image.image_thumb_path,
        listing_product.slug,
        listing_product.product_name,
        listing_product.price,
        listing_product.discount_price,
        status_tbl.settings_name AS product_status
        FROM listing_product
	    LEFT JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id
	    INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id
        LEFT OUTER JOIN listing_status ON listing_product.product_id = listing_status.product_id
        LEFT OUTER JOIN settings status_tbl ON listing_status.product_status = status_tbl.settings_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && shop_details.status=1 && listing_product.`status` =1 $product_category $search_categories $location $item_name
        GROUP BY listing_product_category.product_id
        ";



        $sql_category="SELECT product_category.category_name, product_category.slug AS category_slug
        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id
	    INNER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && listing_product.`status` =1 && shop_details.`status`=1
        GROUP BY listing_product_category.catid_label_1
        ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();

        $sql_location="SELECT settings.settings_name AS location_name,
	    settings.settings_slug AS location_slug
        FROM listing_product
        INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN settings ON shop_details.location_id = settings.settings_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && shop_details.status=1 && listing_product.`status` =1
        GROUP BY shop_details.location_id
        ORDER BY settings.settings_name ASC";
        $locations = $this->db->query($sql_location)->result();

        $sql_store="SELECT shop_details.shop_name,users.subdomain_name
        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN users ON shop_details.agent_uid = users.uid
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && listing_product.`status` =1 && shop_details.`status`=1
        GROUP BY shop_details.agent_uid ORDER BY shop_details.shop_name ASC";
        $store = $this->db->query($sql_store)->result();

        $page   = intval($start);
        if($page<=0)  $page  = 1;
        $limit=($page-1)*$per_page;
        $base_url = site_url('directories/products/search');
        $num = $this->db->query($query);
        $total_rows = $num->num_rows();
        $paging = paginate($base_url, $total_rows,$start,$per_page);
        $limit = "LIMIT $limit , $per_page";
        $pagequery=$query.$limit;
        $query = $this->db->query($pagequery)->result();

        return array($categories,$locations,$store,$query,$paging,$total_rows,$limit,$menu_categories,$global_group,$product_group);

    }

    public function getShopListing($shop_group=NULL,$where=NULL,$perpage=10,$start=0)
    {


        $this->getDirectoriesCategory();

    /* Filtering by product category name, location , any shops */

        $this->session->set_userdata(array('per_page'=>$perpage));
        $per_page = $this->session->userdata('per_page');

        $query ="SELECT users.subdomain_name,users.domain_name, shop_tbl.*, product_tbl.*,mall_tbl.*
            FROM users
            RIGHT JOIN  (SELECT
            shop_details.agent_uid,
            shop_details.shop_name,
            shop_details.location_id,
            shop_details.business_phone,
            shop_details.brand_status,
            listing_product_category.catid_label_1,
            listing_product_category.catid_label_2,
            listing_product_category.catid_label_3,
            listing_product_category.catid_label_4,
            settings.settings_name AS location_name,
            settings.settings_slug AS location_slug,
            shop_details.address,
            shop_details.city,
            shop_details.postal_code,
            shop_details.district,
            shop_details.contact_person,
            GROUP_CONCAT(DISTINCT pc.category_name SEPARATOR ',') AS category_name,
            GROUP_CONCAT(DISTINCT pc.slug SEPARATOR ',') AS category_slug
            FROM shop_details
             LEFT JOIN listing_product_category ON listing_product_category.agent_uid = shop_details.agent_uid
             LEFT JOIN product_category AS pc ON listing_product_category.catid_label_1 = pc.category_id
             LEFT JOIN settings ON shop_details.location_id = settings.settings_id
        WHERE (shop_details.shop_group='$shop_group' AND shop_details.status=1)
        GROUP BY listing_product_category.agent_uid
        ORDER BY shop_details.shop_name ASC
        ) AS shop_tbl
        ON(shop_tbl.agent_uid = users.uid)
        LEFT JOIN (
        SELECT
        listing_product.agent_uid, count(listing_product.product_id) as product_count
        FROM listing_product  WHERE (listing_product.archive !=1 AND listing_product.`status` = 1)
        GROUP BY agent_uid
        ) as product_tbl
        ON(product_tbl.agent_uid = users.uid)
        LEFT JOIN (
        SELECT
        shop_shopping_mall.agent_uid
        ,shop_shopping_mall.shopping_mall_id
        ,GROUP_CONCAT(DISTINCT shop_details.shop_name SEPARATOR ',') AS mall_name
        FROM shop_shopping_mall
          LEFT JOIN shop_details ON shop_shopping_mall.shopping_mall_id = shop_details.agent_uid
          WHERE (shop_shopping_mall.`status` = 1)
          GROUP BY agent_uid ) as mall_tbl ON(mall_tbl.agent_uid = users.uid)
          ORDER BY users.subdomain_name ASC ";

        $store_directories = $this->db->query($query)->result_array();
        $sql_category="SELECT product_category.category_name,
	                  product_category.slug AS category_slug
                      FROM listing_product_category
                      LEFT OUTER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
                      LEFT OUTER JOIN shop_details ON listing_product_category.agent_uid = shop_details.agent_uid
                      WHERE shop_details.shop_group='$shop_group' AND  shop_details.status=1
                      GROUP BY listing_product_category.catid_label_1
                      ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();

        $sql_location="SELECT settings.settings_name AS location_name,
                        settings.settings_slug AS location_slug
                        FROM shop_details INNER JOIN settings ON shop_details.location_id = settings.settings_id
                        WHERE shop_details.shop_group='$shop_group' AND shop_details.status=1
                        GROUP BY shop_details.location_id
                        ORDER BY settings.settings_name ASC";
        $locations = $this->db->query($sql_location)->result();

        if(!empty($store_directories)){
            $store = array_column($store_directories, 'shop_name','subdomain_name');
        }else{
            $store="";
        }

        $page   = intval($start);
        if($page<=0)  $page  = 1;
        $limit=($page-1)*$per_page;
        $base_url = site_url('directories/'.$shop_group);
        $num = $this->db->query($query);
        $total_rows = $num->num_rows();
        $paging = paginate($base_url, $total_rows,$start,$per_page);
        $limit = "LIMIT $limit , $per_page";
        $pagequery=$query.$limit;
        $query = $this->db->query($pagequery)->result();

        return array($categories,$locations,$store,$query,$paging,$total_rows,$limit);


    }



    public function shopSearch($shop_group, $data, $perpage , $start=0)
    {

        if($start == 0 ){
            $this->session->set_userdata(array('search_data'=>$data));
            $data = $this->session->userdata('search_data');
        }else{
            $data = $this->session->userdata('search_data');
        }



        /* Filtering by product category name, location , any shops */
        $product_category="";
        if(isset($data['catid_label_4']) && $data['catid_label_4'] != "" ){
            $catid_label_4 = $this->getProductCategories($data['catid_label_4']);
            if($catid_label_4)
            $product_category = "AND catid_label_4=".$catid_label_4;
        }elseif(isset($data['catid_label_3']) && $data['catid_label_3'] != "" ){
            $catid_label_3 = $this->getProductCategories($data['catid_label_3']);
            if($catid_label_3)
            $product_category = "AND catid_label_3=".$catid_label_3;
        }elseif(isset($data['catid_label_2']) && $data['catid_label_2'] != "" ){
            $catid_label_2 = $this->getProductCategories($data['catid_label_2']);
            if($catid_label_2)
            $product_category = "AND catid_label_2=".$catid_label_2;
        }elseif(isset($data['catid_label_1']) && $data['catid_label_1'] != "" ){
            $catid_label_1 = $this->getProductCategories($data['catid_label_1']);
            if($catid_label_1)
            $product_category = "AND catid_label_1=".$catid_label_1;
        }
        $search_categories="";
        $subdomain_name="";
        $location="";
        if(isset($data['search_categories']) && $data['search_categories'] != "" ){
            $search_categories = $this->getProductCategories(strtolower($data['search_categories']));
            $search_location = $this->getLocationID(strtolower($data['search_categories']));
            if($search_categories){
                $search_categories = "OR catid_label_4=".$search_categories."OR catid_label_3=".$search_categories."OR catid_label_2=".$search_categories. "OR catid_label_1=".$search_categories;
            }elseif($search_location){
                $search_categories = "AND location_id=".$search_location;
            }else{
                $subdomain_name = "AND subdomain_name='".strtolower($data['search_categories'])."'";
            }

        }

        if(isset($data['location_id']) && $data['location_id'] != "" ){
            $location = $this->getLocationID($data['location_id']);
            if($location)
                $location = "AND location_id=".$location;
        }


        $this->session->set_userdata(array('per_page'=>$perpage));
        $per_page = $this->session->userdata('per_page');

        $query ="SELECT users.*, shop_tbl.*, product_tbl.*,mall_tbl.*
            FROM users
            RIGHT JOIN  (SELECT
            shop_details.agent_uid,
            shop_details.shop_name,
            shop_details.location_id,
            shop_details.business_phone,
            shop_details.brand_status,
            shop_details.shopping_status,
            shop_shopping_mall.shopping_mall_id,
            shop_shopping_mall.`level`,
            shop_shopping_mall.shop_no,
            listing_product_category.catid_label_1,
            listing_product_category.catid_label_2,
            listing_product_category.catid_label_3,
            listing_product_category.catid_label_4,
            settings.settings_name AS location_name,
            settings.settings_slug AS location_slug,
            shop_details.address,
            shop_details.city,
            shop_details.postal_code,
            shop_details.district,
            shop_details.contact_person,
            GROUP_CONCAT(DISTINCT pc.category_name SEPARATOR ',') AS category_name,
            GROUP_CONCAT(DISTINCT pc.slug SEPARATOR ',') AS category_slug
            FROM shop_details
             LEFT JOIN listing_product_category ON listing_product_category.agent_uid = shop_details.agent_uid
             LEFT JOIN product_category AS pc ON listing_product_category.catid_label_1 = pc.category_id
             LEFT JOIN settings ON shop_details.location_id = settings.settings_id
             LEFT OUTER JOIN shop_shopping_mall ON shop_details.agent_uid = shop_shopping_mall.agent_uid
        WHERE (shop_details.shop_group='$shop_group' AND shop_details.status=1 $product_category $search_categories $location )
        GROUP BY listing_product_category.agent_uid
        ORDER BY shop_details.shop_name ASC
        ) AS shop_tbl
        ON(shop_tbl.agent_uid = users.uid)
        LEFT JOIN (
        SELECT
        listing_product.agent_uid, count(listing_product.product_id) as product_count
        FROM listing_product  WHERE (listing_product.archive !=1 AND listing_product.`status` = 1)
        GROUP BY agent_uid
        ) as product_tbl
        ON(product_tbl.agent_uid = users.uid)
        LEFT JOIN (
        SELECT
        shop_shopping_mall.agent_uid
        ,shop_shopping_mall.shopping_mall_id
        ,GROUP_CONCAT(DISTINCT shop_details.shop_name SEPARATOR ',') AS mall_name
        FROM shop_shopping_mall
          LEFT JOIN shop_details ON shop_shopping_mall.shopping_mall_id = shop_details.agent_uid
          WHERE (shop_shopping_mall.`status` = 1)
          GROUP BY agent_uid ) as mall_tbl ON(mall_tbl.agent_uid = users.uid)
        WHERE (users.status=1 $subdomain_name) ORDER BY users.subdomain_name ASC ";


        $store_directories = $this->db->query($query)->result_array();

        $sql_category="SELECT product_category.category_name,
	                  product_category.slug AS category_slug
                      FROM listing_product_category
                      LEFT OUTER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
                      LEFT OUTER JOIN shop_details ON listing_product_category.agent_uid = shop_details.agent_uid
                      WHERE shop_details.shop_group='$shop_group' AND  shop_details.status=1

                      GROUP BY listing_product_category.catid_label_1
                      ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();

        $sql_location="SELECT settings.settings_name AS location_name,
                        settings.settings_slug AS location_slug
                        FROM shop_details INNER JOIN settings ON shop_details.location_id = settings.settings_id
                        WHERE shop_details.shop_group='$shop_group' AND shop_details.status=1
                        GROUP BY shop_details.location_id
                        ORDER BY settings.settings_name ASC";
        $locations = $this->db->query($sql_location)->result();
        if(!empty($store_directories)){
            $store = array_column($store_directories, 'shop_name','subdomain_name');
        }else{
            $store="";
        }

        $page   = intval($start);
        if($page<=0)  $page  = 1;
        $limit=($page-1)*$per_page;
        $base_url = site_url('directories/'.$shop_group.'/search/');
        $num = $this->db->query($query);
        $total_rows = $num->num_rows();
        $paging = paginate($base_url, $total_rows,$start,$per_page);
        $limit = "LIMIT $limit , $per_page";
        $pagequery=$query.$limit;
        $query = $this->db->query($pagequery)->result();

        return array($categories,$locations,$store,$query,$paging,$total_rows,$limit);

    }

    public function  getBrandShopListing($shop_group=NULL,$where=NULL,$perpage=1,$start=0)
    {

        /* Filtering by product category name, location , any shops */

        $this->session->set_userdata(array('per_page'=>$perpage));
        $per_page = $this->session->userdata('per_page');

        $query ="SELECT users.*, shop_tbl.*, product_tbl.*
            FROM users
            RIGHT JOIN  (SELECT
            shop_details.agent_uid,
            shop_details.shop_name,
            shop_details.location_id,
            shop_details.business_phone,
            shop_details.brand_status,
            shop_details.shopping_status,
            shop_shopping_mall.shopping_mall_id,
            shop_shopping_mall.`level`,
            shop_shopping_mall.shop_no,
            listing_product_category.catid_label_1,
            listing_product_category.catid_label_2,
            listing_product_category.catid_label_3,
            listing_product_category.catid_label_4,
            settings.settings_name AS location_name,
            settings.settings_slug AS location_slug,
            shop_details.address,
            shop_details.city,
            shop_details.postal_code,
            shop_details.district,
            shop_details.contact_person,
            GROUP_CONCAT(DISTINCT pc.category_name SEPARATOR ',') AS category_name,
            GROUP_CONCAT(DISTINCT pc.slug SEPARATOR ',') AS category_slug
            FROM shop_details
             LEFT JOIN listing_product_category ON listing_product_category.agent_uid = shop_details.agent_uid
             LEFT JOIN product_category AS pc ON listing_product_category.catid_label_1 = pc.category_id
             LEFT JOIN settings ON shop_details.location_id = settings.settings_id
             LEFT OUTER JOIN shop_shopping_mall ON shop_details.agent_uid = shop_shopping_mall.agent_uid
        WHERE (shop_details.shop_group='shops' AND shop_details.status=1 AND brand_status =1 )
        GROUP BY listing_product_category.agent_uid
        ORDER BY shop_details.shop_name ASC
        ) AS shop_tbl
        ON(shop_tbl.agent_uid = users.uid)
        LEFT JOIN (
        SELECT
        listing_product.agent_uid, count(listing_product.product_id) as product_count
        FROM listing_product  WHERE (listing_product.archive !=1 AND listing_product.`status` = 1)
        GROUP BY agent_uid
        ) as product_tbl
        ON(product_tbl.agent_uid = users.uid)";

        $store_directories = $this->db->query($query)->result_array();
        $sql_category="SELECT product_category.category_name,
	                  product_category.slug AS category_slug
                      FROM listing_product_category
                      LEFT OUTER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
                      LEFT OUTER JOIN shop_details ON listing_product_category.agent_uid = shop_details.agent_uid
                      WHERE shop_details.shop_group='shops' AND  shop_details.status=1 AND brand_status =1
                      GROUP BY listing_product_category.catid_label_1
                      ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();

        $sql_location="SELECT settings.settings_name AS location_name,
                        settings.settings_slug AS location_slug
                        FROM shop_details INNER JOIN settings ON shop_details.location_id = settings.settings_id
                        WHERE shop_details.shop_group='shops' AND  shop_details.status=1 AND brand_status =1
                        GROUP BY shop_details.location_id
                        ORDER BY settings.settings_name ASC";
        $locations = $this->db->query($sql_location)->result();

       /* if(!empty($store_directories)){
            $store = array_column($store_directories, 'shop_name','subdomain_name');
        }else{
            $store="";
        }*/
        $store="";
        $page   = intval($start);
        if($page<=0)  $page  = 1;
        $limit=($page-1)*$per_page;
        $base_url = site_url('directories/'.$shop_group);
        $num = $this->db->query($query);
        $total_rows = $num->num_rows();
        $paging = paginate($base_url, $total_rows,$start,$per_page);
        $limit = "LIMIT $limit , $per_page";
        $pagequery=$query.$limit;
        $query = $this->db->query($pagequery)->result();

        return array($categories,$locations,$store,$query,$paging,$total_rows,$limit);


    }


    public function getStoreCategories($agent_uid)
    {

        $res = $this->db->select('parent_id')->where(array('agent_uid'=>$agent_uid))->get('shop_type');
        if($res -> num_rows() > 0){
            $result = $res->row();
            $parent_id = unserialize($result->parent_id);
            $count = count($parent_id);
            $i=1;
            foreach($parent_id as $categoryid):

                $res = $this->getCategoryName($categoryid);
                if($count == $i ){
                    echo  $res->title;
                }else{
                    echo  $res->title.',';
                }
                $i++;

            endforeach;


        }

    }

    public function  getMallInformation($agent_uid)
    {

    }





}