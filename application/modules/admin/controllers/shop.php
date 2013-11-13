<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ezycu_model');
		$this->load->model('user_model');
		$this->load->model('util_model');
		//$this->output->enable_profiler(TRUE);
		
	}


	function shop_view()
	{

		$data['title']="shop Details";
		$this->load->view('shop/shoplist_view',$data);
	} 
	 
	function shop_add()
	{
		
		
		sleep(1);
		$location_id=$this->input->post('location_id');
		$shop_name=$this->input->post('shop_name');
		$shop_user_name=$this->input->post('shop_user_name');
		
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$str = '';
		for ($i = 0; $i < 8; $i++)
		{
		$str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		$password =strtolower($str);
		
		$domainname=$this->util_model->get_domainname($shop_name);
		//$username=$this->util_model->get_username($shop_user_name,$agent_uid);
		//$password =strtolower($username);
		$array=array('user_name'=>$password,'password'=>md5($password),'access_type'=>4,'status'=>1,'add_date'=>time());
		$this->db->set($array);
		$this->db->insert('users');
		$agent_uid=$this->db->insert_id();
			
		$array=array('agent_uid'=>$agent_uid,'location_id'=>$location_id,'contact_person' =>trim($shop_user_name),'shop_name' =>trim($shop_name));
		$this->db->set($array);
		$this->db->insert('shop_details');
		
			
		$array=array('agent_uid'=>$agent_uid);
		$this->db->set($array);
		$this->db->insert('shop_shopping_mall');
		
		$array=array('agent_uid'=>$agent_uid,'brand_status'=>0);
		$this->db->set($array);
		$this->db->insert('shop_brand');
	
	    $array=array('agent_uid'=>$agent_uid,'domain_name'=>$domainname,'template_name'=>1,'create_date'=>time(),'status' =>1);
		$this->db->set($array);
		$this->db->insert('settings_website');
		
	
		
		$count=$this->db->count_all_results('settings_menu');
		for( $i=1; $count >= $i; $i++ ){
		
		$this->db->where('settings_menu_id',$i);
		$query=$this->db->get('settings_menu');
		$rows=$query->result();
					
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'menu_name'=>$rows[0]->menu_name,'agent_uid'=>$agent_uid,'parent_id'=>$rows[0]->parent_id,'menu_url'=>$rows[0]->menu_url,'order'=>$rows[0]->order);
		$this->db->set($array);
		$this->db->insert('custom_menu');
		
    	if($rows[0]->settings_menu_id ==7){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>0,'plugin_show'=>0,'is_home_page'=>1);
		}else if($rows[0]->settings_menu_id ==2 || $rows[0]->settings_menu_id ==8){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>5,'plugin_show'=>1,'is_home_page'=>2);
		}else if($rows[0]->settings_menu_id ==3 || $rows[0]->settings_menu_id ==9){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>3,'plugin_show'=>1,'is_home_page'=>2);
		}else if($rows[0]->settings_menu_id ==4 || $rows[0]->settings_menu_id ==12 ){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>4,'plugin_show'=>1,'is_home_page'=>2);
		}else if($rows[0]->settings_menu_id ==5 || $rows[0]->settings_menu_id ==14){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>2,'plugin_show'=>1,'is_home_page'=>2);
		}else if($rows[0]->settings_menu_id ==6 || $rows[0]->settings_menu_id ==15){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>6,'plugin_show'=>1,'is_home_page'=>2);
		}else if($rows[0]->settings_menu_id ==10){
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>7,'plugin_show'=>1,'is_home_page'=>2);
		}else{
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid,'layout_id'=>1,'plugin_id'=>0,'plugin_show'=>0,'is_home_page'=>2);
		}
		
		$this->db->set($array);
		$this->db->insert('settings_template');
						
		$array=array('menu_id'=>$rows[0]->settings_menu_id,'agent_uid'=>$agent_uid);
	    $this->db->set($array);
		$this->db->insert('page_content');
		
		}
		
		$data=array('agent_uid'=>$agent_uid);//for table settings_css_body
		$this->db->insert('settings_css_body',$data);
		
		$data=array('agent_uid'=>$agent_uid);//for table settings_css_header
		$this->db->insert('settings_css_header',$data);
				
		$data=array('agent_uid'=>$agent_uid);//for table settings_css_menu
		$this->db->insert('settings_css_menu',$data);
		$data=array('agent_uid'=>$agent_uid);//for table settings_css_submenu
		$this->db->insert('settings_css_submenu',$data);
		$data=array('agent_uid'=>$agent_uid);//for table settings_css_page_content
		$this->db->insert('settings_css_page_content',$data);
		$data=array('agent_uid'=>$agent_uid);//for table settings_css_footer
		$this->db->insert('settings_css_footer',$data);
				
		$this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
		$msg=$this->lang->line('insert_msg');
		echo $agent_uid."#@$".$msg;
		
		$file_path="uploads/shop/".$agent_uid;
		mkdir($file_path,0777,TRUE);
		$crop=$file_path."/crop";
		mkdir($crop,0777,TRUE);
		$mypath=$file_path."/slidegallery/";
		mkdir($mypath,0777,TRUE);
		$mypath=$mypath."/thumb";
		mkdir($mypath,0777,TRUE);
		$mypath=$mypath."/large";
		mkdir($mypath,0777,TRUE);
	
	}
	
	function shop_edit(){
	
	    
		$agent_uid= $this->uri->segment(3,0);
	  	$data['title']="Edit shop";
		
		
		$this->db->where('shop_details.agent_uid',$agent_uid);
		$this->db->join('shop_shopping_mall','shop_details.agent_uid = shop_shopping_mall.agent_uid','left');
		$this->db->join('shop_brand','shop_details.agent_uid = shop_brand.agent_uid','left');
		$this->db->join('users','shop_details.agent_uid = users.uid','inner');
			
		$result1=$this->db->get('shop_details');
		$data['queryup']=$result1->result();
		$this->load->view('shop/shop_edit',$data);
	
	}
	
	function update_shop(){
		
		$data['title']="Edit shop";
		
		
		$agent_uid= $this->uri->segment(3,0);
		$contact_person=$this->input->post('contact_person');
		$password=$this->input->post('password');
		$user_name=$this->input->post('user_name');
		$old_user_name=$this->input->post('old_user_name');
		$email=$this->input->post('email');
		$old_email=$this->input->post('old_email');

		
		$this->form_validation->set_rules('shop_name','Shop name','required|trim');	
		$this->form_validation->set_rules('location_id','Location name','required|trim');	
		$this->form_validation->set_rules('contact_person','Shop user name ','required|trim');
		
		if( $user_name=="" || $user_name != $old_user_name ){
		$this->form_validation->set_rules('user_name','User name','trim|required|xss_clean|callback_check_server_username');	
		}
		
		if( $email=="" || $email != $old_email ){
		$this->form_validation->set_rules('email','Email address ','trim|required|xss_clean|callback_check_server_email');	
		}
		
		if($password ){
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[password]');
		}
		

		/*---------Shopping Mall-------*/
		$this->form_validation->set_rules('old_email');
		$this->form_validation->set_rules('shopping_status');
		$this->form_validation->set_rules('shopping_mall_id');	
		$this->form_validation->set_rules('lavel');
		$this->form_validation->set_rules('shop_no');
		
		$shopping_mall_id=$this->input->post('shopping_mall_id');
		$lavel=$this->input->post('lavel');
		$shop_no=$this->input->post('shop_no');	
	
		$this->form_validation->set_rules('brand_status');
		$this->form_validation->set_rules('agent_uid');
		
		$shop_name=$this->input->post('shop_name');
		$location_id=$this->input->post('location_id');
		$contact_person=$this->input->post('contact_person');
		$brand_status=$this->input->post('brand_status');
		$shopping_status=$this->input->post('shopping_status');
		$email_notification=$this->input->post('email_notification');
		$password=$this->input->post('password');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('shop/shop_edit',$data);
		}
		else
		{
				
				$array=array('user_name'=>$user_name,'password'=>md5($password),'email_notification'=>$email_notification,'add_date'=>time());
				$this->db->set($array);
				$this->db->where('uid',$agent_uid);
				$this->db->update('users');
				
				$array=array('contact_person'=>$contact_person,'shop_name'=>$shop_name,'email'=>$email,'location_id'=>$location_id,'shopping_status'=>$shopping_status);
				$this->db->set($array);
				$this->db->where('agent_uid',$agent_uid);
				$this->db->update('shop_details');
							
				if($shopping_status ==1){
				$array=array('shopping_mall_id'=>$shopping_mall_id,'lavel'=>$lavel,'shop_no'=>$shop_no);
				$this->db->set($array);
				$this->db->where('agent_uid',$agent_uid);
				$this->db->update('shop_shopping_mall');
				}else{
				$array=array('shopping_mall_id'=>0,'lavel'=>0,'shop_no'=>0);
				$this->db->set($array);
				$this->db->where('agent_uid',$agent_uid);
				$this->db->update('shop_shopping_mall');
				}
				
				if($brand_status == 1)
				 $brandstatus=1;
				 else
				 $brandstatus=0;
				
				$array=array('agent_uid'=>$agent_uid,'brand_status'=>$brandstatus);
				$this->db->set($array);
				$this->db->where('agent_uid',$agent_uid);
				$this->db->update('shop_brand');
									
				$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
				redirect('shop/shop_edit/'.$agent_uid);
		}
	}

	
	function shop_type(){
	
	    
		$agent_uid= $this->uri->segment(3,0);
		 // $this->access_model->cotroller_access($agent_uid);
		
		$data['title']="Edit shop";
		
		$this->db->where('agent_uid',$agent_uid);
		$queryup=$this->db->get('shop_details');
		$data['rows']=$queryup->result();
		
		$this->db->where('shop_details.agent_uid',$agent_uid);
		$this->db->join('shop_shopping_mall','shop_details.agent_uid = shop_shopping_mall.agent_uid','inner');
		$this->db->join('shop_brand','shop_details.agent_uid = shop_brand.agent_uid','inner');
			
		$result1=$this->db->get('shop_details');
		$data['queryup']=$result1->result();
		$this->load->view('shop/shop_type',$data);
	
	}
	
	function update_shop_type()
	{
				
				 
				$data['title']="Edit category shop";
				
				$agent_uid= $this->uri->segment(3,0);
				$category_id=$this->input->post('category_id');
				//print_r($category_id);
				if(is_array($category_id)){
				foreach ($category_id as $key => $value)
				{
				$data = array(
               		'agent_uid'=> $agent_uid,
					'category_id'=> $_POST['category_id'][$key],
					'parent_id'=> $this->settings_model->category_parent_id($_POST['category_id'][$key])
			 	);
				$category_id=$data['category_id'];
				$this->db->where(array('agent_uid'=>$agent_uid,'category_id'=>$category_id));
				$count=$this->db->count_all_results('shop_category');
				
				if($count >0){
				
				$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
				$this->db->where(array('agent_uid'=>$agent_uid));
				$this->db->delete('shop_category'); 
				$this->db->insert('shop_category',$data); 
					
				}else{
				$this->db->insert('shop_category',$data); 
				}
				}
				}else{
				
				$this->db->where(array('agent_uid'=>$agent_uid));
				$query=$this->db->get('shop_category'); 
				foreach($query->result() as $rows){
				$category_id=$rows->category_id;
				$this->db->where(array('agent_uid'=>$agent_uid,'catid_label_2'=>$category_id));
				if(!$this->db->count_all_results('listing_product_category') >0)
				{
				$this->db->where(array('agent_uid'=>$agent_uid,'category_id'=>$category_id));
				$this->db->delete('shop_category'); 
				}
				}
				}
								
				$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
				redirect('shop/shop_type/'.$this->uri->segment(3,0));	

					
	}
	
	function shop_contact_info(){
	
	    
		$agent_uid= $this->uri->segment(3,0);
	 	$data['title']="Edit contact info";
		
		$this->db->select('address,website,cell_phone,business_phone,fax,city,postal_code,district,disclaimer,agent_uid');
		$this->db->where('shop_details.agent_uid',$agent_uid);
		$result1=$this->db->get('shop_details');
		$data['queryup']=$result1->result();
		$this->load->view('shop/shop_contact_info',$data);
	
	}
	
	function update_shop_contact_info()
	{
		$data['title']="Edit contact info";
		
		$agent_uid= $this->uri->segment(3,0);
		$this->form_validation->set_rules('address');
		$this->form_validation->set_rules('website');
		$this->form_validation->set_rules('cell_phone');
		$this->form_validation->set_rules('business_phone');
		$this->form_validation->set_rules('fax');
		$this->form_validation->set_rules('city');
		$this->form_validation->set_rules('postal_code');
		$this->form_validation->set_rules('district');
		$this->form_validation->set_rules('agent_uid');
		$this->form_validation->set_rules('disclaimer');
		
		$address=$this->input->post('address');
		$email=$this->input->post('email');
		$website=$this->input->post('website');
		$cell_phone=$this->input->post('cell_phone');
		$business_phone=$this->input->post('business_phone');
		$fax=$this->input->post('fax');
		$city=$this->input->post('city');
		$postal_code=$this->input->post('postal_code');
		$district=$this->input->post('district');
		$disclaimer=$this->input->post('disclaimer');
		
		
		$domain_name=$this->input->post('website');
		$domain_name=strtolower(trim($domain_name));
		$domainname=url_title($domain_name,TRUE);
		
		$vowels = array("http","www.",'_','://','/');
        $onlyconsonants = str_replace($vowels,"",$domainname);
		$domain_name=trim($onlyconsonants);
				
		$this->form_validation->set_rules('domain_name');
		if($domain_name){
	    $this->form_validation->set_rules('domain_name','Domain name ','trim|xss_clean|callback_adddomainname');
		}
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('shop/shop_contact_info',$data);
			
		}
		else
		{
				$array=array('address'=>$address,'cell_phone'=>$cell_phone,'business_phone'=>$business_phone,'fax'=>$fax,'city'=>$city,'district'=>$district,'postal_code'=>$postal_code,'disclaimer'=>$disclaimer);
				$this->db->set($array);
				$this->db->where('agent_uid',$agent_uid);
				$this->db->update('shop_details');
				$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
				
				
				$array=array('domain_name'=>$domain_name);
				$this->db->set($array);
				$this->db->where('agent_uid',$agent_uid);
				$this->db->update('settings_website');
				
				redirect('shop/shop_contact_info/'.$this->uri->segment(3,0));	
	    }
	}
	
	function adddomainname($name)
	{	
			
	if (preg_match ("/^[a-z0-9][a-z0-9\-]+[a-z0-9](\.[a-z]{2,4})+$/i", $name)) {
			
			$this->db->where(array('domain_name'=>$name));
			$website=$this->db->count_all_results('settings_website');
			
			if($spotlight >0 || $website >0 )
				{
				$this->form_validation->set_message('domainname', '%s'.'The specified domain is already in use by another web site or listing.');
				return FALSE;
				}else
				{
					return TRUE;
				}
				
		}else{
		$this->form_validation->set_message('domainname', 'Please enter only domain name ignore(http//:,www.,_,Special charecters)');
				return FALSE;
		}
	}

	
	function shop_banner_image(){
	
	    
		$agent_uid= $this->uri->segment(3,0);
		$data['title']="Edit shop";
		$this->db->where('shop_image.agent_uid',$agent_uid);
		$result1=$this->db->get('shop_image');
		$data['queryup']=$result1->result();
		$this->load->view('shop/shop_banner_image',$data);
	
	}
	
	function upload_banner_image()
	{
		
		$this->image_model->shop_image_upload();			
		$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
		redirect('shop/shop_banner_image/'.$this->uri->segment(3,0));	
		
	}
	
	function upload_banner_image1()
	{
		
		$this->image_model->person_image_upload();			
		$this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
		redirect('shop/shop_banner_image/'.$this->uri->segment(3,0));	
		
	}
	
	function shop_preview(){
	
	    
		$agent_uid= $this->uri->segment(3,0);
	   // $this->access_model->cotroller_access($agent_uid);
		
		$data['title']="Edit shop";
		
		$this->db->where('agent_uid',$agent_uid);
		$queryup=$this->db->get('shop_details');
		$data['rows']=$queryup->result();
		
		$this->db->where('shop_details.agent_uid',$agent_uid);
		$this->db->join('shop_shopping_mall','shop_details.agent_uid = shop_shopping_mall.agent_uid','inner');
		$this->db->join('shop_brand','shop_details.agent_uid = shop_brand.agent_uid','inner');
			
		$result1=$this->db->get('shop_details');
		$data['queryup']=$result1->result();
		$this->load->view('shop/shop_preview',$data);
	
	}
	
		
	function shopname($name)
	{	
			$this->db->where(array('shop_name'=>$name));
			if($this->db->count_all_results('shop_details')>0)
				{
				$this->form_validation->set_message('shopname', '%s'.$this->lang->line('duplicate_msg'));
					return FALSE;
				}else{
					return TRUE;
				}
	}
	
	function check_server_username($name)
	{	
			$this->db->where(array('user_name'=>$name));
			if($this->db->count_all_results('users')>0)
				{
				$this->form_validation->set_message('check_server_username', '%s'.$this->lang->line('duplicate_msg'));
					return FALSE;
				}else{
					return TRUE;
				}
	}
	
	
	function check_server_email($email)
	{	
			$this->db->where(array('email'=>$email));
				
				if($this->db->count_all_results('shop_details')>0)
				
				{
				$this->form_validation->set_message('check_server_email', '%s is already taken by another client');
					return FALSE;
				}else{
					return TRUE;
				}
	}

	
		function shop_delete()
		{
		
		

			$agent_uid= $this->uri->segment(3,0);
			$this->access_model->cotroller_access("admin",$agent_uid);
			
			
			/* --------property listing base query--------*/
				
			if($_SERVER['HTTP_HOST'] =="localhost"){
			$file_path=$_SERVER['DOCUMENT_ROOT'].'/uploads/shop/'.$agent_uid;
			}else{
			$file_path=$_SERVER['DOCUMENT_ROOT'].'/uploads/shop/'.$agent_uid;
			}
			$this->util_model->delete_directory($file_path);
			
			
			$tables = array('shop_details','shop_shopping_mall','shop_brand','listing_product', 'listing_status','listing_vehicle','listing_jewellery','listing_product_image');
			$this->db->where('agent_uid',$agent_uid);
			$this->db->delete($tables);
			
			/* --------website base query--------*/
			
			$tables = array('users','team_details','settings_website','custom_menu', 'settings_template', 'page_content');
			$this->db->where('agent_uid',$agent_uid);
			$this->db->delete($tables);
			
		
			$tables = array('website_slide','newsletter','newsletter_subscribers');
			$this->db->where('agent_uid',$agent_uid);
			$this->db->delete($tables);
			
			
			/* --------plugin base query--------*/
			
			$tables = array('evaluation','evaluation_status','footercta','testmonials','featurelist');
			$this->db->where('agent_uid',$agent_uid);
			$this->db->delete($tables);
			
			
			/* --------website base css query--------*/
			
			$tables = array('settings_css_body','settings_css_header','settings_css_menu','settings_css_submenu','settings_css_page_content','settings_css_footer');
			$this->db->where('agent_uid',$agent_uid);
			$this->db->delete($tables);
			$this->session->set_flashdata('success_msg',$this->lang->line('delete_msg'));
			redirect('shop/shop_view');
		
		}
		
		function shop_status()
		{
			$agent_uid= $this->uri->segment(3,0);
			$staus= $this->uri->segment(4,0);
			if($staus ==1){
			$array=array('status'=>'');
			}else{
			$array=array('status'=>1);
			}
			$this->db->set($array);
			$this->db->where('uid',$agent_uid);
			$this->db->update('users');
			redirect('shop/shop_view');
		}
		
		
		/*-------------------Search liisting order----------------------------------------*/
		
		function get_shop_list()
		{
					//sleep(1);
					
					//$q=$this->input->post('q');
					//$q=$this->uri->segment(6);
					$q=strtolower($_REQUEST['q']);
					//echo $this->lang->line('no_shared')."|".$row_uid."\n";
					//exit();
					
					$this->db->select('shop_details.agent_uid,shop_details.shop_name,shop_details.contact_person,shop_details.email');
					$this->db->from('shop_details');
					//$this->db->join('users','users.uid = user_details.uid','inner');
					$this->db->like(strtolower('shop_details.shop_name'),$q,'both');
					$query = $this->db->get();
					
					//$this->db->distinct();
					$this->db->select('shop_details.shop_name');
					$this->db->like(strtolower('shop_details.shop_name'),$q,'both');
					//$this->db->or_like(strtolower('shop_details.last_name'),$q,'both');
					$total_count=$this->db->count_all_results('shop_details');
					$count=count($query->result());
					if( $count > 0 || $total_count > 1 ){
					foreach($query->result() as $row){
					echo $row->shop_name."|<table  border='1' style='border-collapse:collapse; width:99%; margin-top:2px;color:#1f252d' ><tr class='entry'><td width='30%'>".$row->shop_name."</td><td width='30%'>".$row->contact_person."</td><td width='30%'>".$row->email."</td><td width='10%'><a href=".site_url()."/listing_product/listing_product_view/".$row->agent_uid.">&nbsp;Edit&nbsp;</a></td></tr></table>"."\n";
					}
					}else{
					$row_uid='';
					echo $this->lang->line('no_shared')."|".$row_uid."\n";
					}	

		}

		function get_domain_list()
		{
					//sleep(1);
					
					//$q=$this->input->post('q');
					//$q=$this->uri->segment(6);
					$q=strtolower($_REQUEST['q']);
					//echo $this->lang->line('no_shared')."|".$row_uid."\n";
					//exit();
					
					$this->db->select('shop_details.agent_uid,settings_website.domain_name,shop_details.contact_person,shop_details.email');
					$this->db->from('shop_details');
					$this->db->join('settings_website','shop_details.agent_uid = settings_website.agent_uid','inner');
					$this->db->like(strtolower('settings_website.domain_name'),$q,'both');
					$query = $this->db->get();
					
					//$this->db->distinct();
					$this->db->select('settings_website.domain_name');
					$this->db->like(strtolower('settings_website.domain_name'),$q,'both');
					$total_count=$this->db->count_all_results('settings_website');
					$count=count($query->result());
					if( $count > 0 || $total_count > 1 ){
					foreach($query->result() as $row){
					echo $row->domain_name."|<table  border='1' style='border-collapse:collapse; width:100%; margin-top:2px' ><tr class='entry' ><td width='30%'>".$row->domain_name."</td><td width='30%'>".$row->contact_person."</td><td width='30%'>".$row->email."</td><td width='10%'><a href=".site_url()."/listing_product/listing_product_view/".$row->agent_uid.">&nbsp;Edit&nbsp;</a></td></tr></table>"."\n";
					}
					}else{
					$row_uid='';
					echo $this->lang->line('no_shared')."|".$row_uid."\n";
					}	

		}
		
   
}
