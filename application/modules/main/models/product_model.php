<?php
/**
* @author M Islam <shafiq@pul-group.com>
* @package Agent Showing
* @category Common used Variable
* @version 1.0
*/
class Product_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

    public function getIsHome(){

        $start =strtotime('- 7 days');
        $end =strtotime('+ 1 days');
        $result = $this->db
            ->select('listing_product.product_name,listing_product.slug,listing_product.price,listing_product.discount_price,listing_product_image.image_thumb_path')
            ->from('listing_product')
            ->join('listing_status','listing_status.product_id=listing_product.product_id')
            ->join('listing_product_image','listing_product_image.product_id=listing_product.product_id')
            ->join('shop_details','shop_details.agent_uid=listing_product.agent_uid')
            ->where(array('show_home'=>1,'shop_group'=>'shops','listing_type'=>122))
           // ->where(array('show_home'=>1,'shop_group'=>'shops','listing_type'=>122,'listing_product.created >' =>$start,'listing_product.created <' =>$end))
            ->get();
        if($result->num_rows() >0 ){
            $rows = $result->result();
            return $rows;
        }else{
            return false;
        }

    }

    public function getProductFeatures($product_group,$listing_type){


        $sql="SELECT
    listing_product_category.agent_uid
    , shop_details.shop_name
    , shop_details.location_id
	, users.subdomain_name
	, listing_product.product_name
	, listing_product.quantity
	, listing_product.slug AS product_slug
	, listing_product.price
	, listing_product.discount_price
	, product_category.category_name AS product_category_name
	, product_category.slug AS category_slug
	,listing_product_image.image_small_path
	,settings.settings_name as location_name
	,settings.settings_slug as location_slug
    FROM
    listing_product_category
    INNER JOIN product_category ON (listing_product_category.catid_label_1 = product_category.category_id)
    INNER JOIN shop_details ON (listing_product_category.agent_uid = shop_details.agent_uid)
	INNER JOIN users ON (shop_details.agent_uid = users.uid)
	INNER JOIN settings ON (shop_details.location_id = settings.settings_id)
	INNER JOIN listing_product ON (listing_product_category.product_id = listing_product.product_id)
	LEFT JOIN listing_product_image ON (listing_product_category.product_id = listing_product_image.product_id)
    WHERE (product_category.product_group ='$product_group' AND shop_details.listing_type=$listing_type)
    GROUP BY listing_product_category.agent_uid ORDER BY listing_product.created DESC
    LIMIT 0,10 ";

        $result = $this->db->query($sql);
        if($result ->num_rows() > 0){
            $rows = $result->result();
            return $rows;
        }
        return false;

    }


    public function getSearchProduct($catID,$q)
    {


        $this->db->select('product_name');
        $this->db->from('listing_product');
        $this->db->join('listing_product_category','listing_product.product_id = listing_product_category.product_id','left');
        if($catID > 0)$this->db->where('listing_product_category.catid_label_2',$catID);
        $this->db->like(strtolower('listing_product.product_name'),$q,'both');
        $this->db->group_by("listing_product.product_name");
        $this->db->order_by("listing_product.product_name",'ASC');
        $this->db->limit(0,20);

        $query =$this->db->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                echo $row->product_name."\n";
            }
        }else{
            echo $this->lang->line('type_product')."\n";
        }


    }


    public function typeProduct($agent_uid=0,$product_id=0){

        $this->db->select('*');
        $this->db->from('listing_product_category');
        $this->db->where(array('agent_uid'=>$agent_uid ,'product_id'=>$product_id ));
        $query=$this->db->get();
        return $query->result();

    }


    function productMainImage($product_id,$agent_uid)
    {
        $this->db->select('image_square_path');
        $this->db->from('listing_product_image');
        $this->db->where(array('product_id'=>$product_id,'listing_product_image.show_default'=>1,'agent_uid'=>$agent_uid));
        $result=$this->db->get();
        if($result ->num_rows() >0){
            $largeimage=$result->result();
            return $largeimage[0]->image_square_path;
        }else{
            return false;

        }
    }

    public  function productDefaultDetails($slug)
    {
        //$slug='new-lehenga';
        $sql ="SELECT listing_product.*,
            shop_details.*,
            settings.settings_name AS location_name,
            settings.settings_slug,
            listing_product_image.*,
            users.*,
            quantity_tbl.settings_name AS quantity_type_name,
            status_tbl.settings_name AS product_status,
            listing_product_category.catid_label_1 AS product_category_id
        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
             INNER JOIN users ON listing_product.agent_uid = users.uid
             LEFT OUTER JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
             LEFT OUTER JOIN settings quantity_tbl ON listing_product.quantity_type = quantity_tbl.settings_id
             LEFT OUTER JOIN listing_status ON listing_product.product_id = listing_status.product_id
             LEFT OUTER JOIN settings status_tbl ON listing_status.product_status = status_tbl.settings_id
             INNER JOIN settings ON shop_details.location_id = settings.settings_id
             INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid
        WHERE listing_product.slug='$slug'";
        $result = $this->db->query($sql);
        if($result ->num_rows() > 0){
            $products = $result->row();

        }else{
            $products="";
        }


        $sql_category="SELECT category_id,product_category.category_name, product_category.slug AS category_slug
        FROM listing_product INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
	    INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id
	    INNER JOIN product_category ON listing_product_category.catid_label_1 = product_category.category_id
        WHERE listing_product.archive !=1 && shop_details.listing_type=122 && listing_product.`status` =1 && shop_details.`status`=1
        GROUP BY listing_product_category.catid_label_1
        ORDER BY product_category.category_name ASC";
        $categories = $this->db->query($sql_category)->result();

        return array($categories,$products);



    }

    public  function productActionDetails($product_category_id,$product_id=0,$action=NULL)
    {
        //$slug='new-lehenga';

        if($product_id > 0){

            if ($action =='next') {
                $action="listing_product_category.catid_label_1 = $product_category_id && listing_product.product_id > $product_id ORDER BY listing_product.product_id DESC  LIMIT 0,1";
            }else{
                $action= "listing_product_category.catid_label_1 = $product_category_id && listing_product.product_id < $product_id ORDER BY listing_product.product_id DESC  LIMIT 0,1";
            }

        }else{

            $action="listing_product_category.catid_label_1 = $product_category_id ORDER BY listing_product.product_id DESC  LIMIT 0,1";
        }


            $sql ="SELECT listing_product.*,shop_details.*,settings.settings_name as location_name,
                     settings.settings_slug,listing_product_image.*,users.*,quantity_tbl.settings_name as quantity_type_name,status_tbl.settings_name AS product_status
                     FROM listing_product
                     INNER JOIN shop_details ON listing_product.agent_uid = shop_details.agent_uid
                     INNER JOIN users ON listing_product.agent_uid = users.uid
                     LEFT JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
                     LEFT JOIN settings AS quantity_tbl ON listing_product.quantity_type = quantity_tbl.settings_id
                     LEFT JOIN listing_status ON listing_product.product_id = listing_status.product_id
                     LEFT JOIN settings AS status_tbl ON listing_status.product_status = status_tbl.settings_id
                     INNER JOIN settings ON shop_details.location_id = settings.settings_id
                     INNER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid
                     WHERE $action ";
            $result = $this->db->query($sql);
            if($result ->num_rows() > 0){
                $products = $result->row();
            }else{
                $products="";
            }

            return $products;
    }

    function productDetails($slug)
	{


        $sql ="SELECT
product_tbl.*,
listing_product.*,
shop_details.*,
CONCAT_WS(',',shop_details.address , location_tbl.settings_name ,shop_details.city ,shop_details.postal_code) AS address_details,
    location_tbl.settings_name AS location_name,
    quant_tbl.settings_name AS quantity_type,
    product_status_tbl.settings_name AS product_status,
	listing_product_category.catid_label_1,
	listing_product_category.catid_label_2,
	listing_product_category.catid_label_3,
    listing_product_category.catid_label_4,
	product_category1.category_name AS category_name1,
    product_category1.slug AS category_slug1,
    product_category2.category_name AS category_name2,
    product_category2.slug AS category_slug2,
	product_category3.category_name AS category_name3,
    product_category3.slug AS category_slug3,
	product_category4.category_name AS category_name4,
    product_category4.slug AS category_slug4,
    listing_product_image.image_medium_path,
	listing_product_image.image_large_path,
	listing_specific_value.extra_field,
GROUP_CONCAT(DISTINCT listing_specific_value.meta_value SEPARATOR ',') AS meta_value,
GROUP_CONCAT(DISTINCT listing_specific_value.meta_value SEPARATOR ',') AS meta_value,
GROUP_CONCAT(DISTINCT listing_specific_value.label_name SEPARATOR ',') AS label_name,
GROUP_CONCAT(DISTINCT listing_product_gallery.image_large_path SEPARATOR ',') AS gallery_large_path,
parent_group_tbl.*,group_tbl.*, malllist_tbl.*,product_tbl.*
FROM listing_product
LEFT OUTER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid

LEFT OUTER JOIN product_category AS product_category1  ON listing_product_category.catid_label_1 = product_category1.category_id
LEFT OUTER JOIN product_category AS product_category2 ON listing_product_category.catid_label_2 = product_category2.category_id
LEFT OUTER JOIN product_category AS product_category3  ON listing_product_category.catid_label_3 = product_category3.category_id
LEFT OUTER JOIN product_category AS product_category4  ON listing_product_category.catid_label_4 = product_category4.category_id


LEFT OUTER JOIN shop_details  ON listing_product.agent_uid = shop_details.agent_uid
LEFT OUTER JOIN ( SELECT listing_product.agent_uid , COUNT(listing_product.agent_uid) AS total_product FROM listing_product
 WHERE listing_product.`archive` !=1 && listing_product.`status`=1 GROUP BY listing_product.agent_uid ) AS product_tbl  ON product_tbl.agent_uid = listing_product.agent_uid

LEFT OUTER JOIN settings as location_tbl ON shop_details.location_id = location_tbl.settings_id
LEFT OUTER JOIN settings as quant_tbl ON listing_product.quantity_type = quant_tbl.settings_id
LEFT OUTER JOIN settings as product_status_tbl ON listing_product.product_status = product_status_tbl.settings_id
LEFT OUTER JOIN listing_product_gallery ON listing_product.product_id = listing_product_gallery.product_id AND listing_product.agent_uid = listing_product_gallery.agent_uid
LEFT OUTER JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
LEFT OUTER JOIN listing_specific_value ON listing_product.product_id = listing_specific_value.product_id AND listing_product.agent_uid = listing_specific_value.agent_uid

LEFT JOIN (SELECT  shop_shopping_mall.agent_uid ,
   GROUP_CONCAT(DISTINCT mall_tbl.shop_name SEPARATOR ',') AS shopping_mall_name , GROUP_CONCAT( CONCAT_WS('#@#',mall_location_tbl.settings_name, mall_tbl.address,mall_location_tbl.settings_name , mall_tbl.city,mall_tbl.postal_code,mall_tbl.subdomain_name,mall_tbl.domain_name) SEPARATOR ',') AS mall_info , GROUP_CONCAT(DISTINCT shop_shopping_mall.shopping_mall_id SEPARATOR ',') AS shopping_mall_id ,GROUP_CONCAT(DISTINCT mall_level_tbl.settings_name SEPARATOR ',') AS level ,GROUP_CONCAT(DISTINCT shop_shopping_mall.shop_no SEPARATOR ',') AS shop_no  FROM shop_shopping_mall
LEFT  JOIN shop_details as mall_tbl ON mall_tbl.agent_uid = shop_shopping_mall.shopping_mall_id
LEFT  JOIN settings as mall_location_tbl ON mall_tbl.location_id = mall_location_tbl.settings_id
LEFT  JOIN settings as mall_level_tbl ON shop_shopping_mall.level = mall_level_tbl.settings_id
WHERE shop_shopping_mall.status=1 GROUP BY shop_shopping_mall.agent_uid
) AS malllist_tbl ON ( malllist_tbl.agent_uid = listing_product.agent_uid)

LEFT JOIN (SELECT  listing_product_group.product_id , GROUP_CONCAT(DISTINCT listing_product_group.grouping_parent_id SEPARATOR ',') AS grouping_parent_id ,GROUP_CONCAT(DISTINCT grouping.name SEPARATOR ',') AS parent_group_name , grouping.admin FROM listing_product_group

LEFT  JOIN grouping ON listing_product_group.grouping_parent_id = grouping.grouping_id WHERE grouping.admin !=1 GROUP BY listing_product_group.product_id
	) AS parent_group_tbl ON ( parent_group_tbl.product_id = listing_product.product_id)
	LEFT JOIN (SELECT  listing_product_group.product_id , GROUP_CONCAT(DISTINCT listing_product_group.grouping_id SEPARATOR ',') AS grouping_id , GROUP_CONCAT(DISTINCT listing_product_group.grouping_parent_id SEPARATOR ',') AS grouping_parent_id , GROUP_CONCAT(DISTINCT groups.name SEPARATOR ',') AS group_name , groups.admin FROM listing_product_group
	LEFT  JOIN grouping AS groups ON listing_product_group.grouping_id = groups.grouping_id GROUP BY listing_product_group.product_id
    ) AS group_tbl ON ( group_tbl.product_id = listing_product.product_id)
WHERE listing_product.slug='straip-shirt'";
        $result = $this->db->query($sql);
        if($result ->num_rows() > 0){
            $products = $result->row();

        }else{
            $products="";
        }

        return $products;

    }

    function brandName($product_id,$group){

        $sql = "SELECT
grouping.name AS parent_name ,
grouping.group_option,
GROUP_CONCAT(DISTINCT group_tbl.name SEPARATOR ',') AS group_name,
GROUP_CONCAT(DISTINCT group_tbl.slug SEPARATOR ',') AS group_slug
FROM grouping
INNER JOIN listing_product_group ON grouping.grouping_id = listing_product_group.grouping_parent_id
INNER JOIN grouping AS group_tbl ON listing_product_group.grouping_id = group_tbl.grouping_id
WHERE grouping.slug='$group' && listing_product_group.product_id='$product_id'";

        $result = $this->db->query($sql);
        if($result ->num_rows() > 0){
            $brand = $result->row();
        }else{
            $brand="";
        }

        return $brand;

    }
    function groupLists($product_id,$ignore=NULL){

        $ignore=array('brand');
        $sql = " SELECT listing_product_group.product_id, grouping.`name` AS parent_name, grouping.slug AS parent_slug,grouping.group_option,
GROUP_CONCAT(DISTINCT group_tbl.grouping_id SEPARATOR ',') AS grouping_id,
GROUP_CONCAT(DISTINCT group_tbl.slug SEPARATOR ',') AS grouping_slug,
GROUP_CONCAT(DISTINCT group_tbl.name SEPARATOR ',') AS grouping_name
FROM listing_product_group
INNER JOIN grouping ON listing_product_group.grouping_parent_id = grouping.grouping_id
INNER JOIN listing_product_group AS parent_tbl ON listing_product_group.grouping_parent_id = parent_tbl.grouping_parent_id
INNER JOIN grouping AS group_tbl ON parent_tbl.grouping_id = group_tbl.grouping_id
WHERE listing_product_group.product_id='$product_id' && grouping.`global` !=1 && grouping.`admin` !=1
GROUP BY listing_product_group.grouping_parent_id ";

        $result = $this->db->query($sql);
        $data="";
        if($result ->num_rows() > 0){
            $result = $result->result();
            foreach($result as $rows){
                if(!in_array($rows->parent_slug,$ignore)){
                    $grouping = explode(',',$rows->grouping_name);
                    $grouping_id = explode(',',$rows->grouping_id);
                    if(count($grouping) == 1){
                        $data .='<tr id="fobTr"><th class="proName">'.$rows->parent_name.':</th><td class="proValue">'.$rows->grouping_name.'</td></tr>';
                    }else{
                        $data .='<tr id="fobTr"><th class="proName">'.$rows->parent_name.':</th><td class="proValue">'.$this->selectBox($rows->parent_name,$grouping,$grouping_id).'</td></tr>';
                    }
                }
            }
            $group = $data;
        }else{
            $group = "";
        }

        return $group;

    }

    public function getCategoryURL($catval=array(),$data=array()){

        $category_slug='';
        $category_name="";
        if($data['catid_label_4']){
            $category_name=$catval['catid_val_4'];
            $category_slug = "catid_label_1=".$data['catid_label_1']."&catid_label_2=".$data['catid_label_2']."&catid_label_3=".$data['catid_label_3']."&catid_label_4=".$data['catid_label_4'];

        }elseif($data['catid_label_3']){
            $category_name=$catval['catid_val_3'];
            $category_slug = "catid_label_1=".$data['catid_label_1']."&catid_label_2=".$data['catid_label_2']."&catid_label_3=".$data['catid_label_3'];
        }elseif($data['catid_label_2']){
            $category_name=$catval['catid_val_2'];
            $category_slug = "catid_label_1=".$data['catid_label_1']."&catid_label_2=".$data['catid_label_2'];
        }elseif($data['catid_label_1']){
            $category_name=$catval['catid_val_1'];
            $category_slug = "catid_label_1=".$data['catid_label_1'];
        }

        return array('category_name'=>$category_name,'category_slug'=>$category_slug);

    }

    private function selectBox($parent_name,$grouping,$grouping_id)
    {
        $select="";
        $select .='<select class="group-select" name="group[]">';
        $select .='<option value="">Select '.$parent_name.'</option>';
        $i=0;
        foreach($grouping as $val){
            $select .='<option value="'.$grouping_id[$i].'">'.$val.'</option>';
            $i++;
        }
        $select .='<select name="">';

        return $select;

    }


}
?>
