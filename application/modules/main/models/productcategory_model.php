<?php

/**
 * Main  Model
 *
 * @package
 * @subpackage
 * @category
 * @author	Md Shafiqul Islam
 * @link
 */
class ProductCategory_model extends CI_Model
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

    public function allMenuCategorylisting($product_group=NULL)
    {

        $selectGroup="shops";
        $this->db->select('category_id,category_name');
        $this->db->where(array('parent_id'=>0,'product_group'=>$selectGroup));
        $this->db->order_by('category_name','asc');
        $this->db->limit(15);
        $getParent=$this->db->get('product_category');
        if($getParent->num_rows() >0){
            $selectGroup = $getParent->result();
            return $selectGroup;

        }
        return false;
    }

    public function getMenuCategorylisting($wheres,$group)
    {

        $res = $this->db->select('category_id,slug AS category_slug ,category_name,product_group')
            ->from('listing_product_category')
            ->join('shop_details','shop_details.agent_uid = listing_product_category.agent_uid','inner')
            ->join('product_category','product_category.category_id = listing_product_category.'.$group,'inner')
            ->where($wheres)
            ->group_by($group)
            ->order_by('category_name','asc')
            ->get();

        if($res->num_rows() > 0){
            return $res->result();
        }
        return false;


    }
    public function getMenuCountProducts($wheres,$group)
    {

        return $res = $this->db->select('listing_product_category.product_id')
            ->from('listing_product_category')
            ->join('shop_details','shop_details.agent_uid = listing_product_category.agent_uid','inner')
            ->join('product_category','product_category.category_id = listing_product_category.'.$group,'inner')
            ->where($wheres)
            ->get()->num_rows();


    }

    public function listProductCategory($product_group=NULL)

    {

        $selectGroup="";
        $this->db->select('category_id,category_name');
        $this->db->where(array('parent_id'=>0,'product_group'=>$product_group));
        $this->db->order_by('category_name','asc');
        $getParent=$this->db->get('product_category');
        if($getParent->num_rows() >0){
            foreach($getParent->result() as $parent):

                $selectGroup .='<optgroup label="'.$parent->category_name.'">';
                $selectGroup .=$this->getChildCategory($parent->category_id,$product_group);
                $selectGroup .="</optgroup>";

            endforeach;
            return $selectGroup;

        }
        return false;
    }

    private function getChildCategory($parent_id,$product_group)
    {
        $select='';
        $getChild=$this->db->select('slug,category_name')
            ->where(array('parent_id'=>$parent_id,'product_group'=>$product_group))
            ->order_by('category_name','asc')
            ->get('product_category');

        if($getChild->num_rows() >0){
            foreach($getChild->result() as $child):
                $select .='<option value="'.$child->slug.'">'.$child->category_name.'</option>';
            endforeach;
        }
        return $select;
    }

    public function listAgentSelectCategory($agent_uid=0)

    {

        $selectGroup="";
        $this->db->select('parent_id');
        $this->db->where('agent_uid',$agent_uid);
        $this->db->group_by('parent_id');
        $this->db->order_by('ordering','asc');
        $getParent=$this->db->get('shop_category');
        if($getParent->num_rows() >0){
            foreach($getParent->result() as $parent):

                $selectGroup .='<optgroup label="'.$this->category_name($parent->parent_id).'">';
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

    private function category_name($id=0)
    {

        if($id > 0){
            $this->db->select('category_name');
            $this->db->from('product_category');
            $this->db->where('category_id',$id);
            $query=$this->db->get();
            $row=$query->result();
            return $row[0]->category_name;
        }
    }

    public function getProductCategories($wheres,$group)
    {

        $res = $this->db->select('category_id,product_category.slug AS category_slug,category_name,product_group,settings_name AS location_name,settings_slug AS location_slug,settings_id as location_id ')
            ->from('listing_product_category')
            ->join('shop_details','shop_details.agent_uid = listing_product_category.agent_uid','inner')
            ->join('settings','shop_details.location_id = settings.settings_id','inner')
            ->join('product_category','product_category.category_id = listing_product_category.'.$group,'inner')
            ->where($wheres)
            ->group_by($group)
            ->order_by('category_name','asc')
            ->get();

        if($res->num_rows() > 0){
            return $res->result();
        }


    }

    public function getServiceCategories($wheres)
    {

            $res = $this->db->select('category_id,product_category.slug AS category_slug,category_name ')
            ->from('product_category')
            ->where($wheres)
            ->where(array('parent_id'=>0,'status'=>1))
            ->order_by('category_name','asc')
            ->get();


        if($res->num_rows() > 0){
            return $res->result();
        }


    }
    public function getCountProducts($wheres,$group)
    {

        return $res = $this->db->select('listing_product_category.product_id')
            ->from('listing_product_category')
            ->join('shop_details','shop_details.agent_uid = listing_product_category.agent_uid','inner')
            ->join('product_category','product_category.category_id = listing_product_category.'.$group,'inner')
            ->where($wheres)
            ->get()->num_rows();


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



    function LocationCategoryList($menu_id=0){




        $query = $this->db->select('category_id,slug,category_name,product_group,location_id')
            ->from('listing_product_category')
            ->join('shop_details','shop_details.agent_uid = listing_product_category.agent_uid','inner')
            ->join('product_category','product_category.category_id = listing_product_category.catid_label_1','inner')
            ->where(array('product_group' => 'shops','location_id'=>17))
            ->group_by('catid_label_1')
            ->order_by('category_name','asc')
            ->get();

        $tree = "";					// Clear the directory tree
        $this->depth = 1;					// Child level depth.
        $top_level_on = 1;			// What top-level category are we on?
        $exclude = array();			// Define the exclusion array
        array_push($exclude, 0);	// Put a starting value in it
        $tree .= '<ul class="select"  id="parent_id" ><li value=0 >'.$this->lang->line('select_level').'</li>';

        foreach ($query -> result() as $nav_row ){


            $goOn = 1;
            for($x = 0; $x < count($exclude); $x++ )
            {
                if ( $exclude[$x] == $nav_row->category_id )
                {
                    $goOn = 0;
                    break;
                }
            }
            if ( $goOn == 1 )
            {
                $tree .= '<li id="'.$nav_row->category_id.'" >'.$nav_row->category_name . "</li>";

                array_push($exclude, $nav_row->category_id);
                if ( $nav_row->category_id < 6 )
                { $top_level_on = $nav_row->category_id; }
                $tree .=$this->build_child($nav_row->category_id,$menu_id);
            }

        }
        return $tree .= '</ul>';
    }

    function build_child($oldID,$menu_id=0)
    {

        global $exclude;
        //echo $menu_id;
        $tempTree="";

        $query = $this->db->select('category_id,parent_id,slug,category_name,product_group,location_id')
            ->from('listing_product_category')
            ->join('shop_details','shop_details.agent_uid = listing_product_category.agent_uid','inner')
            ->join('product_category','product_category.category_id = listing_product_category.catid_label_2','inner')
            ->where(array('product_group' => 'shops','location_id'=>17,'parent_id'=>$oldID))
            ->group_by('catid_label_2')
            ->order_by('category_name','asc')
            ->get();
            foreach ( $query->result() as $child ){

            if ( $child->category_id != $child->parent_id )
            {


                $tempTree .= '<li id="'.$child->category_id.'" rel="'.$this->depth.'">';
                for ( $c=0;$c<$this->depth;$c++ )
                { $tempTree .= "&nbsp;&nbsp;&nbsp;"; }
                for ( $c=0;$c<$this->depth;$c++ )
                { $tempTree .= ">"; }
                $tempTree .= "" . $child->category_name. "</li>";
                $this->depth++;
                $tempTree .=$this->build_child($child->category_id);
                $this->depth--;
                if(is_array($exclude)){
                    array_push($exclude,$child->category_id);
                }
            }
        }

        return $tempTree;
    }



}
