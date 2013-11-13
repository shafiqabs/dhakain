<?php
$controller1=$this->uri->segment(1,'none'); 
$controller2=$this->uri->segment(2,'none');
$controller3=$this->uri->segment(3,'none');
$agent_uid= $this->uri->segment(4,NULL);
$product_id= $this->uri->segment(5,0);

$mall=array('mall','mall_update','mall_about','mall_edit','disclaimer','mall_banner_image');
$advertisment=array('advertisment','advertisment_view');
$sponsor=array('sponsor','sponsor_view','sponsor_list','sponsor_settings');
$branch=array('branch');
$website=array('website','customize_template','customize_menu','customize_page');
$options=array('options');
?>
<?php if(in_array($controller2,$mall)){?>
  <ul>
    <li><a class="<?php if($controller3=='mall_edit' || $controller3=='mall_update' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/mall_edit/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('mall_info'); ?></a></li>
    <li><a class="<?php if($controller3=='shop_list' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/shop_list/'.$this->uri->segment(4,NULL))?>"  ><?php echo $this->lang->line('shop_listing'); ?></a></li>
    <li><a class="<?php if($controller3=='mall_about' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/mall_about/'.$this->uri->segment(4,NULL))?>"  ><?php echo $this->lang->line('mall_about'); ?></a></li>
    <li><a class="<?php if($controller3=='mall_disclaimer' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/mall_disclaimer/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('disclaimer'); ?></a></li>
    <li><a class="<?php if($controller3=='banner_view'){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/banner_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('banner_image'); ?></a></li>
    <li><a class="preview" href="javascript:void(0)" id="<?php echo $this->uri->segment(4,NULL)?>"><?php echo $this->lang->line('preview'); ?></a></li>
  </ul>
<?php } ?>
<?php if(in_array($controller2,$advertisment)){?>
    <ul>
      <li><a class="<?php if($controller3=='advertisment_view' || $controller3=='advertisment_upload' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL).'/advertisment_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('advertisment'); ?></a></li>
      <li><a class="<?php if($controller3=='advertisment_list' || $controller3=='advertisment_list' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL).'advertisment/advertisment_list/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('advertisment_list'); ?></a></li>

    </ul>
<?php } ?>
<?php if(in_array($controller2,$sponsor)){?>
    <ul>
      <li><a class="<?php if($controller3=='sponsor_view' || $controller3=='sponsor_upload' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL).'/sponsor_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('sponsor'); ?></a></li>
      <li><a class="<?php if($controller3=='sponsor_list' || $controller3=='sponsor_list' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL).'/sponsor_list/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('sponsor_list'); ?></a></li>
      <li><a class="<?php if($controller3=='sponsor_settings'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL).'/sponsor_settings/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('sponsor_setting'); ?></a></li>

    </ul>
<?php } ?>
<?php if(in_array($controller2,$website)){?>
    <ul>
        <li><a class="<?php if($controller2 =='website'){ echo 'active'; } ?>" href="<?php echo site_url('seller/website/website_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('website'); ?></a></li>
        <li><a class="<?php if($controller2 =='customize_template'){ echo 'active'; } ?>" href="<?php echo site_url('seller/website/customize_template_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('customize_template'); ?></a></li>
        <li><a class="<?php if($controller2 =='customize_menu'){ echo 'active'; } ?>" href="<?php echo site_url('seller/customize_menu/customize_menu_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('customize_menu'); ?></a></li>
        <?php if($controller2 =='customize_page'){ ?>
        <li><a class="<?php if($controller2 =='customize_page'){ echo 'active'; } ?>" href="<?php echo site_url('seller/customize_page/customize_page_view/'.$this->uri->segment(4,NULL).'/'.$this->uri->segment(5,0))?>"><?php echo $this->lang->line('menu_customization'); ?></a></li>
        <?php } ?>
    </ul>
<?php } ?>
<?php if(in_array($controller2,$options)){?>
<ul>
  <li><a class="<?php if($controller3 =='options_view'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/admin_options/admin_options_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('admin_options'); ?></a></li>
    <?php

    if( $settings_shopping_cart == 1 && $this->session->userdata('useraccess') !="3" ){
    ?>
  <li><a class="<?php if($controller3 =='settings_general_option'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_general_option/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('settings_general_option'); ?></a></li>
  <li><a class="<?php if($controller3 =='settings_bank'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_bank/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('settings_bank'); ?></a></li>
   <?php } ?>
</ul>
<?php } ?>
