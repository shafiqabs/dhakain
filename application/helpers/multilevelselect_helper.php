<?php
/**
 * MultiLevelSelect class file. 
 * A Simple Multi Level Select Input Creator Library
 *
 * @version	1.0
 * @author Roni Kumar Saha<roni@emicrograph.com>
 * @copyright Copyright &copy; 2012 Roni Saha
 * @license		GPL v3 - http://www.gnu.org/licenses/gpl-3.0.html
 * 
 */
class MultiLevelSelect{
	
	private $fn_getMenu;
	public $root_id=0;
    public $root_label="Root Category";
	private $separetor=">";
	
	private $tabsize=3;
	
	public $selected=0;
	
	function __construct($fngetMenu,$selected=0,$root){
        $this->root_id=($root['id'])?$root['id']:$this->root_id;
        $this->root_label=$root['label'];
		$this->selected=$selected;
		$this->fn_getMenu=$fngetMenu;
	}
	
	
	function populate_tree($attributes){
		$menu="";
		$this->buildTree($menu);
		return sprintf('<select %1$s><option value=%2$s >%3$s</option>%4$s</select>'
                        ,$attributes,$this->root_id,$this->root_label,$menu);
	}
	
	/**
	 * Get all menu array for a parent menu
	 * This function must be overriden 
	 * @access public
	 * @param int $parent Parent menu id
	 * @return array of menu list of given parent.
	 */
	function getMenu($parent=0){
		return call_user_func($this->fn_getMenu,$parent);
	}
	
	private function formatLabel($value, $level = 0) {
		if ($level > 0) {
			$value = str_repeat("&nbsp",$level * $this->tabsize).str_repeat ($this->separetor, $level). $value;
		}
		return $value;
	}
	
	private function buildTree(& $menu_str,$parent = 0, $level = 0) {
		$menus = $this->getMenu($parent);
		if(is_array($menus)){
			foreach ( $menus as $menu ) {
				$selected=($this->selected==(int)$menu['id'])?'selected="selected"':"";
				$menu_str.= "<option $selected value='$menu[id]'>" . $this->formatLabel ( $menu ['name'], $level ) . "</option>\n";
				$this->buildTree ($menu_str, $menu ['id'], $level + 1 );
			}
		}
	}
}
