<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @category Common used Variable
* @version 1.0
*/

class Service_category_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    function slug_unify($category_url=NULL,$parentid=0){

        $categoryurl="";
        $this->db->where(array('product_category_url'=>$category_url));
        $query=$this->db->get('product_category');
        $query->num_rows();
        if($query->num_rows() > 0 ){

            $this->db->select('parent_id,product_category_url');
            $this->db->where(array('category_id'=>$parentid));
            $query=$this->db->get('product_category');
            $rows=$query->result();
            if($rows[0]->product_category_url){
                return $categoryurl=url_title($rows[0]->product_category_url.'-'.$category_url);
            }else{
                return $categoryurl=url_title($category_url);
            }

        }else{

            return $categoryurl=$category_url;
        }

    }

    function category_insert()
	{
        $parent_id=$this->input->post('parent_id');
        $category_name=$this->input->post('category_name');
        $status=$this->input->post('status');
        $product_category_url=url_title(strtolower($category_name));
        $product_category_url=$this->slug_unify($product_category_url,$parent_id);
	   // exit();
        $array=array('category_type'=>2,'parent_id'=>$parent_id,'category_name' =>trim($category_name),'product_category_url'=> $product_category_url,'status' =>$status);
		$this->db->set($array);
		$this->db->insert('product_category');
		$this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
	
	}
	
	function category_update(){

        $category_id=$this->input->post('category_id');
        $parent_id=$this->input->post('parent_id');
        $category_name=$this->input->post('category_name');
        $status=$this->input->post('status');
        $product_category_url=url_title(strtolower($category_name));
        $array=array('category_type'=>2,'parent_id'=>$parent_id,'category_name' =>trim($category_name),'product_category_url'=>$product_category_url,'status' =>$status);
		$this->db->set($array);
		$this->db->where('category_id',$category_id);
		$this->db->update('product_category');
		$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
	}

    function category_multidelete(){

        $array=$this->input->post('list');
        foreach( $array as $val ){
            $this->db->set(array('status'=>2));
            $this->db->where('category_id',$val);
            $this->db->update('product_category');

        }
    }

    function category_delete(){

        //$this->db->set(array('status'=>2));
        $this->db->where('category_id',$this->uri->segment(5,0));
        $this->db->delete('product_category');
    }
	
	function categorylisting(){
	
		$this->db->select();
		$this->db->order_by("parent_id", "asc"); 
		return $this->db->get('product_category');
	}
		
	function categorylist($parent_id=0){
	
		$this->db->select();
        $this->db->where(array('category_type'=>2,'parent_id'=>$parent_id));
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
	
		
	/* this function use for under template category select*/
	
	function get_template_category_check($category_id=array()){
	
		$this->db->select('category_id');
		$query=$this->db->get('product_template_manage');
		$query-> num_rows();
		//exit();
		$stack=array();
		$i=0;
		foreach ( $query->result() as $row ){
		if($row->category_id ==""){
		$stack[$i]=$row->category_id;
		}
		$i++;
		}
		
		
		if($query-> num_rows() == count($stack))
		{
			return $category_id;		
		}else{
			
			$serialize_id=array();
			$i=0;
			foreach ( $query->result() as $row ){
				$serialize_id[$i]=unserialize($row->category_id);
				$i++;
			}
			$serializeid=$this->array_flatten_recursive($serialize_id);
			return $result = array_diff($category_id,$serializeid);
			
		}
				 
	}
	
	function array_flatten_recursive($array) { 
	   if (!$array) return false;
	   $flat = array();
	   $RII = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
	   foreach ($RII as $value) $flat[] = $value;
	   return $flat;
	}

	/* this function use for under template category select*/
	
	function get_image_category_check($category_id=array()){
	
		$this->db->select('category_id');
		$query=$this->db->get('settings_image_size');
		$query-> num_rows();
		//exit();
		$stack=array();
		$i=0;
		foreach ( $query->result() as $row ){
		if($row->category_id ==""){
		$stack[$i]=$row->category_id;
		}
		$i++;
		}
		
		
		if($query-> num_rows() == count($stack))
		{
			return $category_id;		
		
		}else{
			
			$serialize_id=array();
			$i=0;
			foreach ( $query->result() as $row ){
				$serialize_id[$i]=unserialize($row->category_id);
				$i++;
			}
			$serializeid=$this->array_flatten_recursive($serialize_id);
			return $result = array_diff($category_id,$serializeid);
			
		}
				 
	}
	
		
	function get_template_category($product_template_manage_id=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('product_template_manage_id',$product_template_manage_id);
		$query=$this->db->get('product_template_manage');
		$row=$query->result();
		if($query-> num_rows() >0){
		$serialize_id=unserialize($row[0]->category_id);
		if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
    	return $category_id;
		}else{
		return false;
		}
		}else{
		return false;
		}
				 
	}
	
	function get_image_size_category($settings_image_size_id=0,$category_id=0){
	
		$this->db->select();
		$this->db->where('settings_image_size_id',$settings_image_size_id);
		$query=$this->db->get('settings_image_size');
		$row=$query->result();
		if($query-> num_rows() >0){
		$serialize_id=unserialize($row[0]->category_id);
		if ($serialize_id !=false && in_array($category_id,$serialize_id)) {
    	return $category_id;
		}else{
		return false;
		}
		}else{
		return false;
		}
				 
	}
	
	/* use custom category for every shop */
	
	function category_custom_name($id=0)
	{
		
		$this->db->select('category_name');
		$this->db->from('product_category');
		$this->db->where('category_id',$id);
		$query=$this->db->get();
		
		$this->db->select('category_name');
		$this->db->from('product_category_custom');
		$this->db->where('category_id',$id);
		$this->db->where('agent_uid', $this->uri->segment(3,0));
		$query_cus=$this->db->get();
		
		if($query->num_rows() > 0){
		$row=$query->result();
		return $row[0]->category_name;
		}else if($query_cus->num_rows() > 0){
		$row=$query_cus->result();
		return $row[0]->category_name;
		}else{
		return false;
		}
	
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
		$this->db->where(array('category_type'=>2,'parent_id'=>0));
		$this->db->order_by("category_id", "asc"); 
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
		$this->db->where(array('category_type'=>2,'parent_id'=>$oldID));
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

	
	
	
	
	
}
?>
