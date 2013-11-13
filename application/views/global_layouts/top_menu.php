<?php 
$controller=$this->uri->segment(1,'none');
$controller_sub=$this->uri->segment(2,'none');
$mall=array('mall','mall_edit','disclaimer','mall_banner_image');
$advertisment=array('advertisment');
$website=array('website','customize_menu','customize_template','customize_page');
?>
<ul id="wptouch-top-menu">
<li><a href="<?php echo site_url('shoppingmall')?>" class="<?php if($controller =='shoppingmall' && $controller_sub =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('mall_list'); ?></a></li>
<?php if($controller =='shoppingmall' && $controller_sub !="none" ){ ?>
<li><a href="<?php echo site_url($this->uri->segment(1,'none').'/mall/mall_edit/'.$this->uri->segment(4,NULL));?>" class="<?php if(in_array($controller_sub,$mall)){ echo 'active'; } ?>" ><?php echo $this->global_model->explode_string($this->mall_model->mall_name($this->uri->segment(4,NULL))); ?>'info</a></li>
<li><a href="<?php echo site_url($this->uri->segment(1,'none').'/advertisment/advertisment_view/'.$this->uri->segment(4,NULL))?>" class="<?php if($controller_sub=='advertisment'){ echo 'active'; } ?>" ><?php echo $this->lang->line('advertisment'); ?></a></li>
<li><a href="<?php echo site_url($this->uri->segment(1,'none').'/sponsor/sponsor_view/'.$this->uri->segment(4,NULL))?>" class="<?php if($controller_sub=='sponsor'){  echo 'active'; } ?>" ><?php echo $this->lang->line('sponsor'); ?></a></li>
<li><a href="<?php echo site_url('shoppingmall/admin_options/admin_options_view/'.$this->uri->segment(4,NULL))?>" class="<?php if($controller_sub == 'admin_options'){  echo 'active'; } ?>" ><?php echo $this->lang->line('admin_options'); ?></a></li>
<?php } ?>
</ul>



