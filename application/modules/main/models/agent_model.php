<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/26/13
 * Time: 7:01 AM
 * To change this template use File | Settings | File Templates.
 */

class Agent_model extends CI_Model
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

    function getGroupByAgent($shops)
    {
        $sql="SELECT shop_details.shop_name,
	users.subdomain_name
FROM shop_details INNER JOIN users ON shop_details.agent_uid = users.uid
WHERE shop_details.shop_group='shops' && shop_details.`status`=1 ORDER BY shop_name ASC";

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function  getAgentDetails($agent,$shop_group=NULL)
    {

        $sql="SELECT users.*, shop_details.*, settings.settings_name AS location_name,product_tbl.*
        FROM users
        INNER JOIN shop_details ON users.uid = shop_details.agent_uid
	    INNER JOIN settings ON shop_details.location_id = settings.settings_id
 LEFT JOIN (
        SELECT
        listing_product.agent_uid, count(listing_product.product_id) as product_count
        FROM listing_product  WHERE (listing_product.archive !=1 AND listing_product.`status` = 1)
        GROUP BY agent_uid
        ) as product_tbl
        ON(product_tbl.agent_uid = users.uid)
WHERE users.subdomain_name='$agent'";
        $res = $this->db->query($sql);
        if($res ->num_rows() > 0 ){
            $agent_info=$res->row();
        }else{
            $agent_info="";
        }

        if(!empty($shop_group)){
            $agent_sql ="SELECT shop_details.shop_name,
	    users.subdomain_name
        FROM users
        INNER JOIN shop_details ON users.uid = shop_details.agent_uid
        WHERE users.status=1 AND shop_details.shop_group ='shops' ";
            $res = $this->db->query($agent_sql);
            if($res ->num_rows() > 0 ){
                $all_agent =$res->result();
            }else{
                $all_agent="";
            }

            return array($agent_info,$all_agent);
        }else{

            $sql="SELECT shop_details.about
        FROM users
        INNER JOIN shop_details ON users.uid = shop_details.agent_uid
        WHERE users.subdomain_name='$agent'";
            $res = $this->db->query($sql);
            if($res ->num_rows() > 0 ){
                return $agent_info=$res->row();
            }return false;

        }



    }

    public function getAgentProductOffers($subdomain_name,$offer=NULL){

        if(!empty($offer)){
            $offer ='&& listing_status.'.$offer.'=1';
        }else{
            $offer='';
        }
        $sql="SELECT listing_product.*,listing_product.slug AS product_slug,
	listing_product_image.image_small_path,
	product_category.slug AS category_slug, product_category.category_name AS product_category_name
FROM users INNER JOIN listing_product ON users.uid = listing_product.agent_uid
	 LEFT OUTER JOIN listing_status ON listing_product.product_id = listing_status.product_id
	 LEFT OUTER JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
	 LEFT JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid
	 LEFT JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
WHERE users.subdomain_name='$subdomain_name' && listing_product.archive !=1 $offer";

        $result = $this->db->query($sql);
        if($result ->num_rows() > 0){
            $rows = $result->result();
            return $rows;
        }
        return false;

    }

    public function getAgentCategories($agent_uid,$subdomain_name)
    {

        $sql= "SELECT product_category.category_name,
	product_category.slug AS category_slug,
	listing_product_category.catid_label_1
FROM listing_product_category LEFT OUTER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
WHERE listing_product_category.agent_uid=$agent_uid
GROUP BY listing_product_category.catid_label_1
ORDER BY product_category.category_name ASC";

        $res = $this->db->query($sql);
        if($res ->num_rows() > 0 ){
            $first = $res->result();
            echo  "<a href='/".$subdomain_name.'/'.$first[0]->category_slug."'>".$first[0]->category_name."</a>";

        }
     }

    public function getAgentProducts($subdomain_name)
    {

       $sql ="SELECT listing_product.*, listing_product.slug AS product_slug,
	listing_product_image.image_small_path,
	product_category.category_name AS product_category_name,
	product_category.slug AS category_slug
FROM users INNER JOIN listing_product ON users.uid = listing_product.agent_uid
	 LEFT OUTER JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
	 LEFT OUTER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid
	 LEFT OUTER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
WHERE users.subdomain_name='anchal'&& listing_product.archive !=1";
        $res = $this->db->query($sql);
        if($res ->num_rows() > 0 ){
            return $res->result();

        }

     }

    public function getAgentLocations($subdomain_name)
    {
        $sql ="SELECT settings.settings_name AS location_name,branch.*
               FROM users INNER JOIN branch ON users.uid = branch.agent_uid
	           INNER JOIN settings ON branch.location_id = settings.settings_id
               WHERE users.subdomain_name='$subdomain_name'";
                $res = $this->db->query($sql);
                if($res ->num_rows() > 0 ){
                    return $res->result();

                } return false;
    }

    public function getAgentMall($subdomain_name=NULL)
    {

        $sql= "SELECT settings.settings_name AS location_name,settings.settings_slug AS location_slug,
	shop_details.shop_name,
	shop_shopping_mall.shop_no,
	mall_tbl.subdomain_name AS mall_subdomain,
	shop_shopping_mall.`level`,
	shop_details.business_phone,
	shop_details.address,
	shop_details.city,
	shop_details.district,
	shop_details.postal_code,
	shop_details.email
FROM users INNER JOIN shop_shopping_mall ON users.uid = shop_shopping_mall.agent_uid
INNER JOIN shop_details AS shop_tbl ON users.uid = shop_tbl.agent_uid
INNER JOIN shop_details ON shop_shopping_mall.shopping_mall_id = shop_details.agent_uid
INNER JOIN users mall_tbl ON shop_shopping_mall.shopping_mall_id = mall_tbl.uid
INNER JOIN settings ON shop_details.location_id = settings.settings_id
WHERE users.subdomain_name='anchal' AND shop_tbl.shopping_status=1
ORDER BY shop_details.shop_name ASC";

        $res = $this->db->query($sql);
        if($res ->num_rows() > 0){
            return $result  = $res->result();

        }return false;
    }

    public function  getMallInformation($agent_uid)
    {

    }





}