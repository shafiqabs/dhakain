<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class product_category_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    function slugUnify($category_url=NULL,$parentid=0){


        $count=$this->db->where(array('slug'=>$category_url))->get('product_category')->num_rows();
        if($count > 0 ){

            $this->db->select('parent_id,slug');
            $this->db->where(array('category_id'=>$parentid));
            $query=$this->db->get('product_category');
            $rows=$query->result();
            if($rows[0]->slug){
                return $categoryurl=url_title($rows[0]->slug.'-'.$category_url);
            }else{
                return $categoryurl=url_title($category_url);
            }

        }else{

            return $categoryurl=$category_url;
        }

    }

    public function getCategory($category_id=0){

        $this->db->select('*');
        $this->db->where("category_id",$category_id);
        return $this->db->get('product_category')->result();

    }

    function insert($agent_uid=0)
    {


        $parent_id = $this->input->post('parent_id');
        $category_name = $this->input->post('category_name');
        $status=$this->input->post('status');
        $product_category_url = url_title(strtolower($category_name));
        $slug = $this->slugUnify($product_category_url,$parent_id);
        $array=array('parent_id'=>$parent_id,'category_name' =>trim($category_name),'slug'=> $slug,'agent_uid'=>$agent_uid,'status' =>$status);
        $this->db->set($array);
        $this->db->insert('product_category');

    }

    function update(){

        $category_id=$this->input->post('category_id');
        $parent_id=$this->input->post('parent_id');
        $category_name=$this->input->post('category_name');
        $status=$this->input->post('status');
        $product_category_url=url_title(strtolower($category_name));
        $slug = $this->slugUnify($product_category_url,$parent_id);
        $array=array('parent_id'=>$parent_id,'category_name' =>trim($category_name),'slug'=>$slug,'status' =>$status);
        $this->db->set($array);
        $this->db->where('category_id',$category_id);
        $this->db->update('product_category');

    }

    function status($category_id){

        $row = $this->getCategory($category_id);
        echo $status= $row[0]->status;

        if($status == 0){
            $array=array('status'=>1);
        }else{
            $array=array('status'=>0);
        }
        $this->db->set($array);
        $this->db->where(array('category_id'=>$category_id));
        $this->db->update('product_category');

    }

    function delete($category_id){


        $count=$this->global_model->getExistingCount("listing_product_category",$field="catid_label_3",$category_id);
        if(!$count > 0 ){

            $this->db->where('category_id',$category_id);
            $this->db->delete('product_category');
        }
        return false;
    }

    function category_multidelete(){

        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->set(array('status'=>2));
            $this->db->where('category_id',$val);
            $this->db->update('product_category');

        }
    }


    function additionalProductCategorySorting($data,$agent_uid)
    {
        foreach ($data as $position => $item) :
            $array=array('ordering'=>$position);
            $this->db->set($array);
            $this->db->where(array('category_id'=>$item,'agent_uid'=>$agent_uid));
            $this->db->update('product_category');

        endforeach;

    }


	
	function categorylisting(){
	
		$this->db->select();
		$this->db->order_by("parent_id", "asc"); 
		return $this->db->get('product_category');
	}
		
	function categorylist($parent_id=0){
	
		$this->db->select();
		$this->db->where(array('category_type'=>1,'parent_id'=>$parent_id));
		$this->db->order_by("parent_id", "asc"); 
		return $this->db->get('product_category');
	}
	
	
	function shop_type($agent_uid=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('category_id',$category_id);
		$this->db->where('agent_uid',$agent_uid);
		$query=$this->db->get('shop_category');
		return $rows=$query->result();
		//return $parent_id=$rows[0]->category_id;
		
		 
	}
	
	function category_parent_id($category_id=0){
	
		$this->db->select();
		$this->db->where('category_id',$category_id);
		$query=$this->db->get('product_category');
		$rows=$query->result();
		return $parent_id=$rows[0]->parent_id;
		
		 
	}
	
	function category_super_parent($category_id=0){
	
		$this->db->select();
		$this->db->where('category_id',$category_id);
		$query=$this->db->get('product_category');
		$rows=$query->result();
		$parent_id=$rows[0]->parent_id;
		$this->db->where('category_id',$parent_id);
		$query=$this->db->get('product_category');
		$rows1=$query->result();
		return $rows1[0]->parent_id;
		 
	}
	
	
	
	function category_parent($id=0)
	{
		if($id > 0){
		$this->db->select('category_name');
		$this->db->from('product_category');
		$this->db->where('category_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->category_name;
		}else{
		return "Parent lavel";
		}
	}
	
	
	function category_name($id=0)
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



	
	/* use custom category for every shop */


    function listSelectCategory($agent_uid=0){

        $this->db->where('agent_uid',$agent_uid);
        $this->db->group_by('category_id');
        $this->db->order_by('ordering','asc');
        $shop=$this->db->get('shop_category');
        if($shop->num_rows() >0){
            return $query=$shop->result();
        }else{

            $this->db->where('parent_id',0);
            $this->db->order_by('ordering','asc');
            $shop=$this->db->get('product_category');
            return $query=$shop->result();
        }
    }


    function listCustomSubCategory($access_slug=0,$parent_id=0)
    {
        $agent_uid=$this->global_model->getUserID($field_name='access_slug',$access_slug);
        $this->db->where(array("agent_uid" => $agent_uid,'parent_id' => $parent_id));
        $this->db->order_by('ordering','asc');
        return $this->db->get('product_category')->result();

    }



	
	/*----------------List of selected product category--------------*/
	
	function product_category_label1(){
	
		$this->db->from('shop_category');
		$this->db->select('shop_category.parent_id');
		$this->db->where('agent_uid', $this->uri->segment(3,0));
		$this->db->group_by('shop_category.parent_id');
		return $query=$this->db->get();
	}
	
	function product_category_label2($parent){
	
		$this->db->select('shop_category.category_id');
		$this->db->from('shop_category');
		$this->db->where('shop_category.parent_id',$parent);
		$this->db->where('agent_uid', $this->uri->segment(3,0));
		return $query=$this->db->get();
	}
	
	
	/*----------------end List of selected product category--------------*/
	
	function get_custom_parent_category($agent_uid=0){
		
		$this->db->select('parent_id');
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->group_by('parent_id'); 
		return $this->db->get('shop_category');

    }
	
	function get_custom_category($agent_uid=0,$parent_id=0){
	    
		$this->db->select('category_id');
		$this->db->where("parent_id",$parent_id); 
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->order_by('ordering','asc');
		return $this->db->get('shop_category');
	}
	
	
	function get_agent_selected_category($agent_uid=0)
	{
	
	    $this->db->select();
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->order_by("ordering", "ASC"); 
		return $this->db->get('shop_category');
		
	}
	
	
	function category_custom_listing($agent_uid=0)
	{
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->order_by('parent_id'); 
		return $this->db->get('product_category');
	
	}
		
	
	function get_agent_custom_selected_category($agent_uid=0)
	{
	
	    
		$this->db->select('parent_id');
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->group_by('parent_id'); 
		return $this->db->get('product_category');
		
	}
	
	function get_agent_selected_subcategory($parent_id=0)
	{


	    $agent_uid= $this->uri->segment(3,0);
		$this->db->select();
		$this->db->from('product_category');
		$this->db->where('parent_id',$parent_id);
		$this->db->or_where('parent_id',$parent_id);
		$this->db->where("agent_uid",$agent_uid); 
		$this->db->order_by("ordering", "ASC"); 
		return $this->db->get();
	
	}
	
	
	
	function category_list($menu_id=0){
   		
		$this->db->select();
		$this->db->where(array('parent_id'=>0));
		//$this->db->where(array('product_group'=>'shops','parent_id'=>0));
        $this->db->order_by('category_name','asc');
		$query=$this->db->get('product_category');
		
		$tree = "";					// Clear the directory tree
		$this->depth = 1;			// Child level depth.
		$top_level_on = 1;			// What top-level category are we on?
		$exclude = array();			// Define the exclusion array
		array_push($exclude, 0);	// Put a starting value in it
	$tree .= '<select class="select" name="parent_id" id="parent_id" ><option selected="selected" value=0 >'.$this->lang->line('select_level').'</option>'; 
		
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
			$selected = ($menu_id === $nav_row->category_id) ? 'selected="selected"' : ''; 
			$tree .= '<option value="'.$nav_row->category_id.'" '.$selected .' >'.$nav_row->category_name . "</option>";
	    	
			array_push($exclude, $nav_row->category_id);
			if ( $nav_row->category_id < 6 )
			{ $top_level_on = $nav_row->category_id; }
		    $tree .=$this->build_child($nav_row->category_id,$menu_id);	 
			}
		
		}
	return $tree .= '</select>';  
	}

	function build_child($oldID,$menu_id=0)	
	{
		
		global $exclude;
		//echo $menu_id;			
		$tempTree="";
		
	    $this->db->select('product_category.category_id,product_category.parent_id,product_category.category_name');
		$this->db->where(array('parent_id'=>$oldID));
		$this->db->order_by('category_name','asc');
		$query=$this->db->get('product_category');
		foreach ( $query->result() as $child ){
		
			if ( $child->category_id != $child->parent_id )
			{
		
				$selected = (  $menu_id == $child->category_id) ? 'selected="selected"' : '';
				$tempTree .= '<option value="'.$child->category_id.'" rel="'.$this->depth.'" '.$selected .' >';
				for ( $c=0;$c<$this->depth;$c++ )			
				{ $tempTree .= "&nbsp;&nbsp;&nbsp;"; }
				for ( $c=0;$c<$this->depth;$c++ )		
				{ $tempTree .= ">"; }
				$tempTree .= "" . $child->category_name. "</option>";
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




    public function checkUniqueCategory($category_id){

        if(!empty($category_id)){
            $dbrow = $this->db->select('category_name')
                ->where(array('category_id'=>$category_id))
                ->get('product_category')->result();
            return $dbrow[0]->category_name;

        }

    }
    public function productCategoryName($category,$category_id){


        $dbcategory = $this->checkUniqueCategory($category_id);
        if(strtolower($category) != strtolower($dbcategory) ){
            $count=$this->db
                ->select('category_name')
                ->where(array(strtolower('category_name')=>strtolower($category)))
                ->get('product_category')
                ->num_rows();

            if($count > 0 )
            {
                $this->form_validation->set_message('check_product_category', $category.' %s '.$this->lang->line('duplicate_msg'));
                return FALSE;
            }else{
                return TRUE;
            }
        }
        //exit;
    }







}
?>
