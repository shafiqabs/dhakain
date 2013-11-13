<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customize_template extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('seller/shop_model','seller/website_model'));
        //$this->output->enable_profiler(TRUE);

    }

	function customize_template_view(){
	
			$data['title']="Customize Template";
			$agent_id= $this->uri->segment(3,-1);
					
			/*echo trim($_POST['menu_selected_text_color']);
			exit();*/
			
				$data=array('agent_uid'=>$agent_id,
				'body_bgcolor'=>trim($_POST['body_bgcolor']));//for table settings_css_body
				$this->db->where('agent_uid',$agent_id);
				$this->db->update('settings_css_body',$data);
				$data=array('agent_uid'=>$agent_id,'header_bgcolor'=>trim($_POST['header_bgcolor']),
				'agent_name'=>trim($_POST['agent_name']),
				'custom_agent_name'=>trim($_POST['custom_agent_name']),
				'custom_agent_degignation'=>trim($_POST['custom_agent_degignation']),
				'agent_name_color'=>trim($_POST['agent_name_color'])
				);//for table settings_css_header
				$this->db->where('agent_uid',$agent_id);
				$this->db->update('settings_css_header',$data);
				$data=array('agent_uid'=>$agent_id,'normal_bgcolor'=>trim($_POST['normal_bgcolor']),
				'menu_normal_text_color'=>trim($_POST['menu_normal_text_color']),'menu_normal_hover_text_color'=>trim($_POST['menu_normal_hover_text_color']),
				'normal_border_color_top'=>trim($_POST['normal_border_color_top']),'normal_border_color_bottom'=>trim($_POST['normal_border_color_bottom']),
				'normal_border_color_left_right'=>trim($_POST['normal_border_color_left_right']),'selected_background_color'=>trim($_POST['selected_background_color']),
				'menu_selected_text_color'=>trim($_POST['menu_selected_text_color']),'menu_selected_hover_text_color'=>trim($_POST['menu_selected_hover_text_color']),
				'selected_border_color_top'=>trim($_POST['selected_border_color_top']),'selected_border_color_bottom'=>trim($_POST['selected_border_color_bottom']),
				'selected_border_color_left'=>trim($_POST['selected_border_color_left']),'selected_border_color_right'=>trim($_POST['selected_border_color_right']),
				'selected_remove_bottom_border'=>trim($_POST['selected_remove_bottom_border']),'remove_edge_borders'=>trim($_POST['remove_edge_borders']),
				'two_line_menu'=>trim($_POST['two_line_menu']));//for table settings_css_menu 
				$this->db->where('agent_uid',$agent_id);
				$this->db->update('settings_css_menu',$data);
				
				$data=array('agent_uid'=>$agent_id,
				'submenu_bgcolor'=>trim($_POST['submenu_bgcolor']),
				'normal_text_color'=>trim($_POST['normal_text_color']),
				'normal_hover_bgcolor'=>trim($_POST['normal_hover_bgcolor']),
				'normal_hover_text_color'=>trim($_POST['normal_hover_text_color']),
				'selected_text_color'=>trim($_POST['selected_text_color']),
				'selected_hover_bgcolor'=>trim($_POST['selected_hover_bgcolor']),
				'selected_hover_text_color'=>trim($_POST['selected_hover_text_color']),
				'border_color_top'=>trim($_POST['border_color_top']),
				'border_color_bottom'=>trim($_POST['border_color_bottom']),
				'show_top_border'=>trim($_POST['show_top_border']),
				'seperator_color'=>trim($_POST['seperator_color'])
				);//for table settings_css_submenu
				$this->db->where('agent_uid',$agent_id);
				$this->db->update('settings_css_submenu',$data);
				//echo $_POST['bgcolor'];
				$data=array('agent_uid'=>$agent_id,
				'bgcolor'=>trim($_POST['bgcolor']),
				'alt_bgcolor'=>trim($_POST['alt_bgcolor']),
				'text_color'=>trim($_POST['text_color']),
				'light_text_color'=>trim($_POST['light_text_color']),
				'link_color_hover'=>trim($_POST['link_color_hover']),
				'large_headers_color'=>trim($_POST['large_headers_color']),
				'text_color_on_alt_bg'=>trim($_POST['text_color_on_alt_bg']),
				'link_color_on_alt_bg_hover'=>trim($_POST['link_color_on_alt_bg_hover']),
				'large_headers_color_on_alt_bg'=>$_POST['large_headers_color_on_alt_bg'],
				'crumb_text'=>trim($_POST['crumb_text']),
				'crumb_text_hover'=>trim($_POST['crumb_text_hover']),
				'crumb_text_on_bg'=>trim($_POST['crumb_text_on_bg']),
				'crumb_text_on_alt_bg'=>trim($_POST['crumb_text_on_alt_bg']),
				'crumb_text_on_alt_bg_hover'=>trim($_POST['crumb_text_on_alt_bg_hover']),
				'logs_to_use'=>trim($_POST['logs_to_use'])
				);//for table settings_css_page_content
				$this->db->where('agent_uid',$agent_id);
				$this->db->update('settings_css_page_content',$data);
				
				$data=array('agent_uid'=>$agent_id,
				'bgcolor_top'=>trim($_POST['bgcolor_top']),
				'footer_bgcolor'=>trim($_POST['footer_bgcolor']),
				'footer_text_color'=>trim($_POST['footer_text_color']),
				'link_color'=>trim($_POST['link_color']),
				'footer_link_color_hover'=>trim($_POST['footer_link_color_hover']),
				'seperator_line_color'=>trim($_POST['seperator_line_color']),
				'logos_to_use'=>trim($_POST['logos_to_use']),
				'copyright_text_link_color'=>trim($_POST['copyright_text_link_color']),
				'copyright_link_color_hover'=>trim($_POST['copyright_link_color_hover'])
				);//for table settings_css_footer
				$this->db->where('agent_uid',$agent_id);
				$this->db->update('settings_css_footer',$data);
			
			redirect('customize_template/customize_css_template/'.$agent_id);

			
		
		}
		function customize_css_template(){
			
			$data['title']="Customize Template";
			$agent_id= $this->uri->segment(3,-1);
			
			$data['title']='Customize Template';
			if($agent_id!=-1){
			$this->db->where('agent_uid',$agent_id);
			$result=$this->db->get('settings_css_body');
			if($result->num_rows() == 0){
				$data=array('agent_uid'=>$agent_id,'body_bgcolor'=>'');//for table settings_css_body
				$this->db->insert('settings_css_body',$data);
				$data=array('agent_uid'=>$agent_id				
				);//for table settings_css_header
				$this->db->insert('settings_css_header',$data);
				
				$data=array('agent_uid'=>$agent_id,
				'selected_remove_bottom_border'=>'default',
				'remove_edge_borders'=>'default',
				'two_line_menu'=>'default');//for table settings_css_menu
				$this->db->insert('settings_css_menu',$data);
				
				$data=array('agent_uid'=>$agent_id,'show_top_border'=>'default'
				);//for table settings_css_submenu
				$this->db->insert('settings_css_submenu',$data);
				
				$data=array('agent_uid'=>$agent_id,'logs_to_use'=>'default');//for table settings_css_page_content
				$this->db->insert('settings_css_page_content',$data);
				
				$data=array('agent_uid'=>$agent_id,'logos_to_use'=>'default');//for table settings_css_footer
				$this->db->insert('settings_css_footer',$data);
				
			}
			$this->db->where('agent_uid',$agent_id);
			$result1=$this->db->get('settings_css_body');
			$this->db->where('agent_uid',$agent_id);
			$result2=$this->db->get('settings_css_header');
			$this->db->where('agent_uid',$agent_id);
			$result3=$this->db->get('settings_css_menu');
			$this->db->where('agent_uid',$agent_id);
			$result4=$this->db->get('settings_css_submenu');
			$this->db->where('agent_uid',$agent_id);
			$result5=$this->db->get('settings_css_page_content');
			$this->db->where('agent_uid',$agent_id);
			$result6=$this->db->get('settings_css_footer');
			$data['result1']=$result1;
			$data['result2']=$result2;
			$data['result3']=$result3;
			$data['result4']=$result4;
			$data['result5']=$result5;
			$data['result6']=$result6;
			$this->load->view("customize_template/customize_template_view",$data);
			}
			
		}
	
}
?>