<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Agent Showing
* @category Common used Variable
* @version 1.0
*/

class settings_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function settings_paging($per_page=10,$num_link=3)
    {

			//echo $start = $this->uri->segment(4,0);
			//exit();
			if(is_numeric($this->uri->segment(4,0))){
			$start = $this->uri->segment(4,0);
			}else{
			$start = 0;
			}


	        $base_url = site_url('settings/global_settings/settings_list');
			$total_rows = $this->db->count_all('settings');
			$paging = make_paging($base_url, $total_rows,4,$per_page,$num_link);
			$this->db->limit($per_page,$start);
			$this->db->order_by('parent_id','DESC');
			$query =$this->db->get('settings');
			return array($query,$paging);

    }
	
	function settingslist(){
	
		$this->db->select();
		$this->db->order_by("settings_id", "asc"); 
		return $this->db->get('settings');
	}
	
	function settingsUnderList($id=0){
	
		$this->db->select('*');
		$this->db->from('settings');
        $this->db->where(array('parent_id'=>$id,'status'=>1));
		$this->db->order_by("settings_id", "asc");
        $query=$this->db->get();
        if($query->num_rows() > 0)
            return $query->result();
        else
            return false;

	}

    function settings_under_list($id=0){

		$this->db->select();
		$this->db->where('parent_id',$id);
		$this->db->order_by("settings_id", "asc");
		return $this->db->get('settings');
	}
	
	function settings_parent($id=0)
	{
		if($id > 0){
		$this->db->select('settings_name');
		$this->db->from('settings');
		$this->db->where('settings_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->settings_name;
		}else{
		return "Parent lavel";
		}
	}
	
	
	function settings_name($id=0)
	{
		if($id > 0){
		$this->db->select('settings_name');
		$this->db->from('settings');
		$this->db->where('settings_id',$id);
		$query=$this->db->get();
		$row=$query->result();
		return $row[0]->settings_name;
		}else{
		return false;
		}
	}
	
	function categorylisting(){
	
		$this->db->select();
		$this->db->order_by("parent_id", "asc"); 
		return $this->db->get('product_category');
	}
		
	function categorylist($parent_id=0){
	
		$this->db->select();
		$this->db->where('parent_id',$parent_id);
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
		$this->db->where('agent_uid', $this->uri->segment(4,0));
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
	
	function product_category_label1($agent_uid){
	
		$this->db->from('shop_category');
		$this->db->select('shop_category.parent_id');
		$this->db->where('agent_uid', $agent_uid);
		$this->db->group_by('shop_category.parent_id');
		return $query=$this->db->get();
	}
	
	function product_category_label2($agent_uid,$parent){
	
		$this->db->select('shop_category.category_id');
		$this->db->from('shop_category');
		$this->db->where('shop_category.parent_id',$parent);
		$this->db->where('agent_uid', $agent_uid);
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
	
	   
	    $agent_uid= $this->uri->segment(4,0);
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
		$this->db->where("parent_id",0); 
		$this->db->where('agent_uid',0);
		$this->db->order_by("category_id", "asc"); 
		$query=$this->db->get('product_category');
		
		$tree = "";					// Clear the directory tree
		$this->depth = 1;					// Child level depth.
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
		
		$this->db->where('parent_id',$oldID);
		$this->db->where('agent_uid',0);
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
	
	function settings_list($menu_id=0){
   		
		$this->db->select('settings.settings_id,settings.parent_id,settings.settings_name');
		$this->db->where("parent_id",0); 
		$this->db->order_by("settings_id", "asc"); 
		$query=$this->db->get('settings');
		
		$tree = "";					// Clear the directory tree
		$this->depth = 1;					// Child level depth.
		$top_level_on = 1;			// What top-level category are we on?
		$exclude = array();			// Define the exclusion array
		array_push($exclude, 0);	// Put a starting value in it
		$tree .= '<select  name="parent_id" id="parent_id" ><option selected="selected" value=0 >'.$this->lang->line('select_level').'</option>'; 
		
		foreach ($query -> result() as $nav_row ){

		
		$goOn = 1;			
		for($x = 0; $x < count($exclude); $x++ )
			{
				if ( $exclude[$x] == $nav_row->settings_id )
				{
				$goOn = 0;
				break;	
				}
			}
		if ( $goOn == 1 )
			{
			$selected = ($menu_id === $nav_row->settings_id) ? 'selected="selected"' : ''; 
			$tree .= '<option value="'.$nav_row->settings_id.'" '.$selected .' >'.$nav_row->settings_name . "</option>";
	    	
			array_push($exclude, $nav_row->settings_id);
			if ( $nav_row->settings_id < 6 )
			{ $top_level_on = $nav_row->settings_id; }
		    $tree .=$this->settings_build_child($nav_row->settings_id,$menu_id);	 
			}
		
		}
	return $tree .= '</select>';  
	}

	function settings_build_child($oldID,$menu_id=0)	
	{
		
		global $exclude;
		//echo $menu_id;			
		$tempTree="";
		
	     $this->db->select('settings.settings_id,settings.parent_id,settings.settings_name');
		
		$this->db->where('parent_id',$oldID);
		$query=$this->db->get('settings');
		foreach ( $query->result() as $child ){
		
			if ( $child->settings_id != $child->parent_id )
			{
		
				$selected = (  $menu_id == $child->settings_id) ? 'selected="selected"' : '';
				$tempTree .= '<option value="'.$child->settings_id.'" rel="'.$this->depth.'" '.$selected .' >';
				for ( $c=0;$c<$this->depth;$c++ )			
				{ $tempTree .= "&nbsp;&nbsp;&nbsp;"; }
				for ( $c=0;$c<$this->depth;$c++ )		
				{ $tempTree .= ">"; }
				$tempTree .= "" . $child->settings_name. "</option>";
				$this->depth++;		
				$tempTree .=$this->settings_build_child($child->settings_id);
				$this->depth--;	
				if(is_array($exclude)){
					array_push($exclude,$child->settings_id);	
				}
			}
		}
	 
		return $tempTree;	
	}

    function image_common_size($size_id){

        return $this
            ->db
            ->where(array('settings_common_image_size_id'=>$size_id))
            ->get('settings_common_image_size')
            ->result();

    }

	
}
?>
