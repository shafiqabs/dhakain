<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Md Shafiqul Islam<shafiq@authenticbd.com>
* @package Product Category
* @grouping Common used Variable
* @version 1.0
*/

class Grouping_model extends CI_Model
{
	function __construct()
	{
       parent::__construct();
	}

    public function getParentList()
    {

        $this->db->select('*');
        $this->db->where(array("parent_id"=>0,'status'=>1));
        $this->db->order_by('name','asc');
        return $this->db->get('grouping')->result();

    }

    public function getCategory()
    {

        $sql ="SELECT product_category.category_name,
	product_category.category_id,
	product_category.parent_id,
	GROUP_CONCAT(DISTINCT cat_tabl.category_name SEPARATOR ',') AS sub_category,
	GROUP_CONCAT(DISTINCT cat_tabl.category_id SEPARATOR ',') AS subid
FROM product_category LEFT OUTER JOIN product_category cat_tabl ON product_category.category_id = cat_tabl.parent_id
WHERE product_category.parent_id = 0 && product_category.status = 1
GROUP BY product_category.category_id
ORDER BY product_category.category_name ASC";

        $result = $this->db->query($sql)->result();
        return $result;


    }


    function getListing($start=0)
    {
        $query="SELECT grouping.random_id,
	grouping.`name`,grouping.`status`,
	COALESCE(group_tbl.`name`,'Parent name') AS parent_name
    FROM grouping LEFT OUTER JOIN grouping group_tbl ON grouping.parent_id = group_tbl.grouping_id
	GROUP BY grouping.grouping_id
ORDER BY  group_tbl.`name` ASC , grouping.`parent_id` ASC ";

        $per_page=20;
        $base_url = site_url('settings/grouping/listing');

        $num = $this->db->query($query);
        $total_rows = $num->num_rows();
        $paging = make_paging($base_url, $total_rows,4,$per_page,3);

        $limit = "LIMIT $start , $per_page";
        $pagequery=$query.$limit;
        $query = $this->db->query($pagequery)->result();
        return array($query,$paging);




    }



    function insert($data)
    {

        $grouping_url = url_title(strtolower($data['name']));
        $data['slug'] = $this->slugUnify($grouping_url,$data['parent_id']);
        $data['random_id'] = formatPhoneNumber(time());
        $global = isset($data['global']) ? $data['global']:0;
        $admin = isset($data['admin']) ? $data['admin']:0;
        $group_option = isset($data['group_option']) ? $data['group_option']:0;
        $status = isset($data['status']) ? $data['status']:0;

        $this->db->set(array('random_id'=>$data['random_id'],'name' => $data['name'],'slug'=>$data['slug'],'parent_id'=>$data['parent_id'],'global'=>$global,'admin'=>$admin,'group_option'=>$group_option,'status'=>$status));
        $this->db->insert('grouping');
        $grouping_id = $this->db->insert_id();
        $this->groupingCategory($data,$grouping_id);


    }

    public function getEdit($random_id){

        $query ="SELECT grouping.*,
	GROUP_CONCAT(DISTINCT grouping_category.category_id SEPARATOR ',') AS category_id
FROM grouping LEFT OUTER JOIN grouping_category ON grouping.grouping_id = grouping_category.grouping_id
WHERE grouping.random_id='$random_id'";
        $query = $this->db->query($query)->result();
        return $query;

    }

    function update($data,$random_id){

        $global = isset($data['global']) ? $data['global']:0;
        $admin = isset($data['admin']) ? $data['admin']:0;
        $group_option = isset($data['group_option']) ? $data['group_option']:0;
        $status = isset($data['status']) ? $data['status']:0;

        $this->db->where('random_id',$random_id);
        $this->db->set(array('name' => $data['name'],'parent_id'=>$data['parent_id'],'global'=>$global,'admin'=>$admin,'group_option'=>$group_option,'status'=>$status))->update('grouping');
        $row = $this->getEdit($random_id);
        $this->groupingCategory($data,$row[0]->grouping_id);

    }

    private function groupingCategory($data,$grouping_id){

        $categories = $data['category_id'];
            $this->checkExistingCategory($grouping_id);
            foreach($categories as $category){
                $this->db->set(array('grouping_id'=>$grouping_id,'grouping_parent_id'=>$data['parent_id'],'category_id'=>$category))->insert('grouping_category');
            }


    }

    private function checkExistingCategory($grouping_id){

        $query = "SELECT COUNT(grouping_category.category_id) AS count
                  FROM grouping_category
                  WHERE grouping_category.grouping_id='$grouping_id'";
        $query = $this->db->query($query)->row();
        $count = $query->count;
        if($count > 0){
            $this->db->where(array('grouping_id'=>$grouping_id))->delete('grouping_category');
        }

    }

    function status($grouping_id){

        $row = $this->getGrouping($grouping_id);
        $status= $row[0]->status;

        if($status == 0){
            $array=array('status'=>1);
        }else{
            $array=array('status'=>0);
        }
        $this->db->set($array);
        $this->db->where(array('grouping_id'=>$grouping_id));
        $this->db->update('grouping');

    }

    function delete($random_id){

        $row = $this->getEdit($random_id);
        $grouping_id = $row[0]->grouping_id;
        $count=$this->global_model->getExistingCount("listing_product_grouping","grouping_id",$grouping_id);
        if(!$count > 0 ){
            $this->db->where(array('grouping_id'=>$grouping_id))->delete('grouping_category');
            $this->db->where('random_id',$random_id);
            $this->db->delete('grouping');
        }
        return false;
    }

    function slugUnify($grouping_url=NULL,$parentid=0){

        $count=$this->db->where(array('slug'=>$grouping_url))->get('grouping')->num_rows();
        if($count > 0 ){

            $this->db->select('parent_id,slug');
            $this->db->where(array('grouping_id'=>$parentid));
            $query=$this->db->get('grouping');
            $rows=$query->row();
            if($rows->slug){
                return $groupingurl=url_title($rows->slug.'-'.$grouping_url);
            }else{
                return $groupingurl=url_title($grouping_url);
            }

        }else{

            return $groupingurl=$grouping_url;
        }

    }

    /* This functions use for check duplicate field value*/

    public function checkUnique($data,$table_name){

        if(!empty($data['random_id'])){
            $dbrow = $this->db->select('name')
                ->where(array('random_id'=>$data['random_id'],'parent_id'=>$data['parent_id']))
                ->get($table_name)->row();
                return $dbrow->name;

        }

    }

    public function checkDuplicate($data,$table_name){

        $dbgrouping = $this->checkUnique($data,$table_name);
        if(strtolower($dbgrouping) != strtolower($data['name']) ){

            $count=$this->db
                ->select('name')
                ->where(array(strtolower('name')=>strtolower($data['name']),'parent_id'=>$data['parent_id']))
                ->get($table_name)
                ->num_rows();

            if($count > 0 )
            {
                $this->form_validation->set_message('check_duplicate', $data['name'].' %s '.$this->lang->line('duplicate_msg'));
                return FALSE;
            }else{
                return TRUE;
            }
        }
        //exit;
    }


}
?>
