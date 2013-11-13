<?php
$controller1=$this->uri->segment(1,'none'); 
$controller2=$this->uri->segment(2,'none');
$controller3=$this->uri->segment(3,'none');
$global_settings=array('global_settings','plugins','themes','layouts');
$product_category=array('product_category','product_template','grouping');
$service_category=array('service_category','service_template');
$image_settings=array('image_setting_product','image_setting_service','image_setting');
?>
  
<?php if(in_array($controller2,$global_settings)){?>
  <ul>
        <li><a class="<?php if($controller2 =='global_settings' && $controller3=='none' || $controller3=='settings_edit'){ echo 'active'; } ?>" href="<?php echo site_url('settings/global_settings')?>"><?php echo $this->lang->line('settings'); ?></a></li>
        <li><a class="<?php if($controller3=='settings_list' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/global_settings/settings_list/0')?>"><?php echo $this->lang->line('settings_list'); ?></a></li>
        <li><a class="<?php if($controller2=='themes' && $controller3=='none' || $controller3=='themes_edit' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/themes')?>"><?php echo $this->lang->line('themes'); ?></a></li>
        <li><a class="<?php if($controller3=='themes_list'){ echo 'active'; } ?>" href="<?php echo site_url('settings/themes/themes_list')?>"><?php echo $this->lang->line('themes_list'); ?></a></li>
        <li><a class="<?php if($controller2=='layouts' && $controller3=='none'|| $controller3=='layouts_edit'  ){ echo 'active'; } ?>" href="<?php echo site_url('settings/layouts')?>"><?php echo $this->lang->line('layouts'); ?></a></li>
        <li><a class="<?php if($controller3=='layouts_list'){ echo 'active'; } ?>" href="<?php echo site_url('settings/layouts/layouts_list')?>"><?php echo $this->lang->line('layouts_list'); ?></a></li>
        <li><a class="<?php if($controller2 =='plugins' && $controller3=='none'|| $controller3=='plugins_edit' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/plugins')?>"><?php echo $this->lang->line('plugins'); ?></a></li>
        <li><a class="<?php if($controller3=='plugins_list'){ echo 'active'; } ?>" href="<?php echo site_url('settings/plugins/plugins_list')?>"><?php echo $this->lang->line('plugins_list'); ?></a></li>
  </ul>
    <?php } ?>
    <?php if(in_array($controller2,$product_category)){?>
    <ul>
        <li><a class="<?php if($controller2 =='product_category' && $controller3=='none' || $controller3=='product_category_edit'){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_category')?>"><?php echo $this->lang->line('product_category'); ?></a></li>
        <li><a class="<?php if($controller3=='product_category_list' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_category/product_category_list/0')?>"><?php echo $this->lang->line('product_category_list'); ?></a></li>
        <li><a class="<?php if($controller3=='product_category_ordering' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_category/product_category_ordering')?>"><?php echo $this->lang->line('product_category_ordering'); ?></a></li>
        <li><a class="<?php if($controller2=='product_template'&& $controller3=='none' || $controller3=='product_template_category'){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_template')?>"><?php echo $this->lang->line('product_multi_template'); ?></a></li>
        <li><a class="<?php if($controller3=='product_single_template'){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_template/product_single_template')?>"><?php echo $this->lang->line('product_single_template'); ?></a></li>
        <li><a class="<?php if($controller3=='product_template_manage' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_template/product_template_manage')?>"><?php echo $this->lang->line('product_template_manage'); ?></a></li>
        <li><a class="<?php if($controller3=='product_template_list' || $controller3 == 'product_template_view' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/product_template/product_template_list')?>"><?php echo $this->lang->line('product_template_list'); ?></a></li>
        <li><a class="<?php if($controller2 =='grouping' && $controller3=='none' || $controller3=='edit'){ echo 'active'; } ?>" href="<?php echo site_url('settings/grouping')?>"><?php echo $this->lang->line('grouping'); ?></a></li>
        <li><a class="<?php if($controller2 =='grouping' && $controller3=='listing' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/grouping/listing')?>"><?php echo $this->lang->line('listing'); ?></a></li>
        <li><a class="<?php if($controller2 =='grouping' && $controller3=='ordering' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/grouping/ordering')?>"><?php echo $this->lang->line('ordering'); ?></a></li>


    </ul>
    <?php } ?>
   <?php if(in_array($controller2,$service_category)){?>
    <ul>
        <li><a class="<?php if($controller2 == 'service_category' && $controller3=='none' || $controller3=='service_category_edit'){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_category')?>"><?php echo $this->lang->line('service_category'); ?></a></li>
        <li><a class="<?php if($controller3== 'service_category_list' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_category/service_category_list/0')?>"><?php echo $this->lang->line('service_category_list'); ?></a></li>
        <li><a class="<?php if($controller3== 'service_category_ordering' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_category/service_category_ordering')?>"><?php echo $this->lang->line('service_category_ordering'); ?></a></li>
        <li><a class="<?php if($controller2== 'service_template'&& $controller3=='none' || $controller3=='service_template_category'){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_template')?>"><?php echo $this->lang->line('service_multi_template'); ?></a></li>
        <li><a class="<?php if($controller3== 'service_single_template'){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_template/service_single_template')?>"><?php echo $this->lang->line('service_single_template'); ?></a></li>
        <li><a class="<?php if($controller3== 'service_template_manage' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_template/service_template_manage')?>"><?php echo $this->lang->line('service_template_manage'); ?></a></li>
        <li><a class="<?php if($controller3== 'service_template_list' || $controller3 == 'service_template_view' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/service_template/service_template_list')?>"><?php echo $this->lang->line('service_template_list'); ?></a></li>


    </ul>
    <?php } ?>
    <?php if(in_array($controller2,$image_settings)){?>
    <ul>
        <li><a class="<?php if($controller2 =='image_setting' && $controller3=='none' || $controller3=='image_setting_edit'){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting')?>"><?php echo $this->lang->line('image_setting_common'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_list'){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_list')?>"><?php echo $this->lang->line('image_setting_list'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_product' || $controller3 =='image_product_category' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_product')?>"><?php echo $this->lang->line('image_setting_category'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_single_product' || $controller3 =='image_setting_single_product_edit' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_single_product')?>"><?php echo $this->lang->line('image_setting_single_product'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_product_manage' || $controller3 == 'image_setting_product_edit' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_product_manage')?>"><?php echo $this->lang->line('image_setting_product'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_product_list'){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_product_list')?>"><?php echo $this->lang->line('image_setting_product_list'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_service' || $controller3 == 'image_service_category'){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_service')?>"><?php echo $this->lang->line('image_setting_service_category'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_single_service' || $controller3 =='image_setting_single_service_edit' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_single_service')?>"><?php echo $this->lang->line('image_setting_single_service'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_service_manage' || $controller3 == 'image_setting_service_edit' ){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_service_manage')?>"><?php echo $this->lang->line('image_setting_service'); ?></a></li>
        <li><a class="<?php if($controller3 =='image_setting_service_list'){ echo 'active'; } ?>" href="<?php echo site_url('settings/image_setting/image_setting_service_list')?>"><?php echo $this->lang->line('image_setting_service_list'); ?></a></li>

    </ul>
    <?php } ?>

