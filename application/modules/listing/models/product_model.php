<?php

/**
 * Seller  Model
 *
 * @package	
 * @subpackage	
 * @category	
 * @author	Md Shafiqul Islam
 * @link	
 */
class Product_model extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

public function productInformation($array_filed,$agent_uid,$slug)


    {


        if(empty($array_filed)){
            $array="*";
        }else{
            $array=$array_filed;
        }

        return $row = $this->db->select($array)
            ->from('listing_product')
            ->where(array('agent_uid'=>$agent_uid,'slug'=>$slug))
            ->get()
            ->result();


    }

public function listSelectCategory($agent_uid=0)

{

        $selectGroup="";
        $this->db->select('parent_id');
        $this->db->where('agent_uid',$agent_uid);
        $this->db->group_by('parent_id');
        $this->db->order_by('ordering','asc');
        $getParent=$this->db->get('shop_category');
        if($getParent->num_rows() >0){
            foreach($getParent->result() as $parent):

                $selectGroup .='<optgroup label="'.$this->settings_model->category_name($parent->parent_id).'">';
                    $selectGroup .=$this->getSelectedChildCategory($agent_uid,$parent->parent_id);
                $selectGroup .="</optgroup>";

            endforeach;
            return $selectGroup;

        }else{

            $select ='';
            $this->db->where('parent_id',0);
            foreach($getParent->result() as $parent):

                $selectGroup .='<optgroup label="'.$this->settings_model->category_name($parent->parent_id).'">';
                $selectGroup .=$this->getSelectedChildCategory($agent_uid,$parent->parent_id);
                $selectGroup .="</optgroup>";

            endforeach;
            return $select;
        }
}

private function getSelectedChildCategory($agent_uid,$parent_id)
{
        $select='';
        $getChild=$this->db->select('category_id')
            ->where(array('agent_uid'=>$agent_uid,'parent_id'=>$parent_id))
            ->order_by('ordering','asc')
            ->get('shop_category');

        if($getChild->num_rows() >0){
            foreach($getChild->result() as $child):
                $select .='<option value="'.$child->category_id.'">'.$this->settings_model->category_name($child->category_id).'</option>';
            endforeach;
        }
        return $select;
    }

public function dayUnderList()
{

        return $this->db->where(array('status'=>1))->get('product_expired')->result();
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

    function getProductGrouping($category_id){

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

        $result = $this->db->query($query)->result();
        return $result;

    }

    function getProductGlobalGrouping($category_id){

        $query = "SELECT grouping.`name` AS parent_name, grouping.parent_id, grouping.random_id,
        GROUP_CONCAT(DISTINCT group_tbl.grouping_id SEPARATOR ',') AS grouping_id,
        GROUP_CONCAT(DISTINCT group_tbl.name SEPARATOR ',') AS grouping_name
        FROM grouping INNER JOIN grouping_category ON grouping.grouping_id = grouping_category.grouping_id
	    LEFT OUTER JOIN grouping group_tbl ON grouping.grouping_id = group_tbl.parent_id
        WHERE grouping_category.category_id='$category_id' && grouping.`global`=1 && grouping.`admin` =1 && grouping.`status`=1
        GROUP BY grouping.grouping_id ORDER BY grouping.name ASC ";

        $result = $this->db->query($query)->result();
        return $result;

    }



public function insert($agent_uid=0,$data)
    {


		$product_name=$data['product_name'];
		$category_id=$data['category_id'];
		$parent_id=$this->settings_model->category_parent_id($category_id);
		$slug=$this->util_model->getProductSlug($product_name);


		$pool = '0123456789';
		$str = '';
		for ($i = 0; $i <4; $i++)
		{
		$str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		$product_code=$agent_uid."-".$str;
		$array=array('agent_uid'=>$agent_uid,'product_code'=>$product_code,'product_name'=>$product_name,'slug'=>$slug,'price'=>0.00,'discount_price'=>0.00,'created'=>time());
		$this->db->set($array);
		$this->db->insert('listing_product');
		$product_id=$this->db->insert_id();

		$array=array('product_id'=>$product_id,'agent_uid'=>$agent_uid,'catid_label_1'=>$parent_id,'catid_label_2'=>$category_id);
		$this->db->set($array);
		$this->db->insert('listing_product_category');

		$array=array('product_id'=>$product_id);
		$this->db->set($array);
		$this->db->insert('listing_status');

		$array=array('product_id'=>$product_id);
		$this->db->set($array);
		$this->db->insert('listing_notifications');


        $file_path="uploads/shop/".$agent_uid.'/'.$product_id;
        mkdir($file_path,0777,TRUE);
        $gallery=$file_path."/gallery";
        mkdir($gallery,0777,TRUE);
        $products=$file_path."/products";
        mkdir($products,0777,TRUE);

        return $slug;


    }
public function editProduct($slug){


        $query = "SELECT listing_product.product_id,
        listing_product.*,
        listing_status.*,
        listing_notifications.*,
        listing_product_category.catid_label_1,
        listing_product_category.catid_label_2,
        listing_product_category.catid_label_3,
        listing_product_category.catid_label_4,
        listing_product_group.grouping_parent_id,
        GROUP_CONCAT(DISTINCT listing_product_group.grouping_id SEPARATOR ',') AS grouping_id,
        listing_product_image.image_thumb_path
         FROM listing_product
         LEFT OUTER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid
         LEFT JOIN listing_product_group ON listing_product.product_id = listing_product_group.product_id
         LEFT JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
         LEFT JOIN listing_notifications ON listing_product.product_id = listing_notifications.product_id
         LEFT JOIN listing_status ON listing_product.product_id = listing_status.product_id WHERE listing_product.slug='$slug'";
         return $this->db->query($query)->result();

}
public function update($product_id=0,$data)
{

                $price = $data['price']!="" ? $data['price']:'0.00';
                $discount_price = $data['discount_price'];
                $sell_offer = $data['sell_offer'] ;
               // $sell_offer = (!empty($sell_offer)) ? $sell_offer :'';
               // $sell_offer =($sell_offer !="") ? serialize($sell_offer):'';

                $array=array('product_name'=>$data['product_name'],'sell_offer'=>'','price'=>$price,'discount_price'=>$discount_price,'expired'=>$data['expired'],'quantity'=>$data['quantity'],'quantity_type'=>$data['quantity_type'],'brand_name'=>$data['brand_name'],'description'=>$data['description']);
                $this->db->set($array);
				$this->db->where(array('product_id'=>$product_id));
				$this->db->update('listing_product');

				$array1=array('show_home'=>$data['show_home'],'special_offer'=>$data['special_offer'],'feature_list'=>$data['feature_list'],'discount_list'=>$data['discount_list'],'product_status'=>$data['product_status']);
				$this->db->set($array1);
				$this->db->where('product_id',$product_id);
				$this->db->update('listing_status');

				$array2=array('share_facebook'=>$data['share_facebook'],'notification_wishlist'=>$data['notification_wishlist'],'notification_reminder'=>$data['notification_reminder'],'notification_region'=>$data['notification_region'],'notification_pricedrop'=>$data['notification_pricedrop'],'notification_comments'=>$data['notification_comments'],'notification_enough_info'=>$data['notification_enough_info'],'notification_contactus'=>$data['notification_contactus'],'compare_another'=>$data['compare_another']);
				$this->db->set($array2);
				$this->db->where('product_id',$product_id);
				$this->db->update('listing_notifications');
                if(isset($data['category_id']) && $data['category_id'] > 0 ){
                        foreach($data['grouping_id'] as $groups ){
                            if($groups > 0 ){
                                $parent_id = $this->getParentGrouping($groups);
                                $array2=array('product_id'=>$product_id,'grouping_id' => $groups,'grouping_parent_id'=>$parent_id,'category_id'=>$data['category_id']);
                                $this->db->set($array2);
                                $this->db->where('product_id',$product_id);
                                $this->db->insert('listing_product_group');
                            }

                        }

                }
}

public function getParentGrouping($grouping_id)
{
        $this->db->select('parent_id');
        $this->db->from('grouping');
        $this->db->where(array('grouping_id'=>$grouping_id));
        $query=$this->db->get();
        $row = $query->row();
        return $row->parent_id;
}


public function typeProduct($agent_uid=0,$product_id=0){

        $this->db->select('*');
        $this->db->from('listing_product_category');
        $this->db->where(array('agent_uid'=>$agent_uid ,'product_id'=>$product_id ));
        $query=$this->db->get();
        return $query->result();

}
public function sellOfferList()
{
        $this->db->select('*');
        $this->db->from('sell_offer');
        $this->db->where(array('status'=>1));
        $this->db->order_by("sell_offer_id", "asc");
        $query=$this->db->get();
        if($query ->num_rows() > 0)
            return $query->result();
        else
            return false;

}


	function productMainImage($product_id,$agent_uid,$product_id)
	{
		$this->db->select('image_thumb_path');
		$this->db->from('listing_product_image');
        $this->db->where(array('product_id'=>$product_id,'listing_product_image.show_default'=>1,'agent_uid'=>$agent_uid));
		$result=$this->db->get();
		if($result ->num_rows() >0){
		$largeimage=$result->result();
            return $largeimage[0]->image_thumb_path;
		}else{
		    return false;

		}
	}



}
