<?php 
$controller_sub=$this->uri->segment(2,'none'); 
$global_settings=array('global_settings','plugins','themes','layouts');
$product_category=array('product_category','product_template','grouping');
$service_category=array('service_category','service_template');
$image_settings=array('image_settings_product','image_settings_service','image_setting');
?>
<ul id="wptouch-top-menu">
<li><a href="<?php echo site_url('admin/dashboard')?>" class="<?php if($controller_sub =='dashboard' ){ echo 'active'; } ?>" ><?php echo $this->lang->line('general'); ?></a></li>
<li><a href="<?php echo site_url('settings/global_settings')?>" class="<?php if(in_array($controller_sub,$global_settings)){ echo 'active'; } ?>"><?php echo $this->lang->line('global_settings'); ?></a></li>
<li><a href="<?php echo site_url('settings/product_category')?>" class="<?php if(in_array($controller_sub,$product_category)){ echo 'active'; } ?>" ><?php echo $this->lang->line('product_settings'); ?></a></li>
<li><a href="<?php echo site_url('settings/service_category')?>" class="<?php if(in_array($controller_sub,$service_category)){  echo 'active'; } ?>" ><?php echo $this->lang->line('service_settings'); ?></a></li>
<li><a href="<?php echo site_url('settings/image_setting')?>" class="<?php if(in_array($controller_sub,$image_settings)){  echo 'active'; } ?>" ><?php echo $this->lang->line('image_settings'); ?></a></li>
</ul>
