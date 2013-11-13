<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msearch extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('settings_model'));
	}

	function searching()
	{
		
			$q= strtolower($this->input->post('str'));
			$category_name=str_replace('@!#$','&',$this->input->post('category'));
			$category=$this->settings_model->product_categoryid($category_name);
			$this->db->select('product_name,listing_product.agent_uid,price,created_date,quantity,product_name_url');
			$this->db->from('listing_product');
			$this->db->join('listing_product_category', 'listing_product_category.product_id = listing_product.product_id','inner');
			
			$this->db->like(strtolower('product_name'),$q,'both');
			$this->db->or_like(strtolower('product_code'),$q,'both');
			$this->db->or_like(strtolower('price'),$q,'both');
			$this->db->where('catid_label_1',$category);
			$query = $this->db->get();
			$num_rows=$query->num_rows();
			if($query->num_rows() > 0)
			{
				$html = '<ul style="margin:0px; padding:0px;">';
				foreach($query->result() as $row)
				{
				$html = $html.'<li class="y_search_result_list" id="'.$row->agent_uid.'" title="Price Tk&nbsp;'.$row->price.'&nbsp;,&nbsp;Qnt&nbsp;'.$row->quantity.'&nbsp;,&nbsp;Add date:&nbsp;'.date("d-m-Y",$row->created_date).'"><a href="'.site_url('more_details/'.$row->product_name_url).'">'.$row->product_name.'</a></li>';
				};
				$html = $html.'</ul>';
			}

				$data = array('html' => $html,'num_rows' => $num_rows);
				echo json_encode($data);
	

	}
	
	function search_result(){
    {

		$agent_uid = $this->input->post('agent_uid');
		$row=$this->settings_model->search_shop_details($agent_uid);
		if($row[0]->total_product) $total_product='<strong>Total products:'.$row[0]->total_product.'</strong>&nbsp;,';
		if($row[0]->location_name) $location_name='&nbsp;Location:'.$row[0]->location_name.',';
		if($row[0]->shopping_mall_name) $shoppingmall='Shopping mall:'.$row[0]->shopping_mall_name.',';
		
		$domain_name=isset($row[0]->domain_name)?'http://'.$row[0]->domain_name:MAIN.'/'.$row[0]->subdomain_name;
		$domain_name='&nbsp;Web:<a href="'.$domain_name.'">'.$domain_name.'</a>';
		
		if($row[0]->business_phone) $business_phone='Contact no:'.$row[0]->business_phone;
		
		$html = '<div class="search_list"><a href="'.PREVIEW.'/'.$row[0]->subdomain_name.'">'.$row[0]->shop_name.'</a></div><div class="clear"></div><div class="search_under_details">'.$total_product.$location_name.$domain_name.'</div><div class="clear"></div><div class="search_under_details">'.$shoppingmall.$business_phone.'</div><div class="clear"></div><div class="search_under_details">Address:'.$row[0]->address.'</div>';
		$data = array('html' => $html);
		echo json_encode($data);
		}
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */