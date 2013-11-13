<?php
$modules=$this->uri->segment(1,'none');
$controller2=$this->uri->segment(2,'none');

$modulesSeller=array('seller');
$modulesServices=array('services');

$subService=array('store','classified','about','banner','disclaimer');
$advertisment=array('advertisment');
$shop=array('shop','shop_type','shop_info','shop_banner_image');
$product=array('listing','product','specification','type','product_image','product_gallery');
$website=array('websites','customize_menu','customize_template','customize_page','customize_content');
$mall=array('mall','mall_edit','disclaimer','mall_banner_image');
$advertisment=array('advertisment');
$additional_category=array('additional_category');
$editURL=$this->global_model->getEditModules($modules);
if($modules =="shoppingmall" ){
?>
<ul id="wptouch-top-menu">
    <li><a href="<?php echo site_url('shoppingmall')?>" class="<?php if($modules =='shoppingmall' && $controller2 =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('mall_list'); ?></a></li>
    <?php if($modules == 'shoppingmall' && $controller2 != "none" ){ ?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/mall/edit/'.$access_slug);?>" class="<?php if(in_array($controller2,$mall)){ echo 'active'; } ?>" ><?php echo $this->global_model->explode_string($store_name); ?>'info</a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/advertisment/'.$access_slug)?>" class="<?php if($controller2=='advertisment'){ echo 'active'; } ?>" ><?php echo $this->lang->line('advertisment'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/sponsor/'.$access_slug)?>" class="<?php if($controller2=='sponsor'){  echo 'active'; } ?>" ><?php echo $this->lang->line('sponsor'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/websites/'.$access_slug)?>" class="<?php if(in_array($controller2,$website)){  echo 'active'; } ?>" ><?php echo $this->lang->line('website'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/options/'.$access_slug)?>" class="<?php if($controller2 == 'options'){  echo 'active'; } ?>" ><?php echo $this->lang->line('options'); ?></a></li>
    <?php } ?>
</ul>
<?php } ?>
<?php if($modules == 'shops'){?>
    <ul id="wptouch-top-menu">
        <li><a href="<?php echo site_url($modules)?>" class="<?php if($modules =='shops' && $controller2 =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('shop_list'); ?></a></li>
        <?php if($modules =='shops' && $controller2 !="none" ){ ?>
            <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/store/'.$access_slug);?>" class="<?php if(in_array($controller2,$subService)){ echo 'active'; } ?>" ><?php echo $this->global_model->explode_string($store_name); ?>'info</a></li>
            <?php if($storeInfo[0]->listing_type > 0 ){?>
                <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/listing/'.$access_slug)?>" class="<?php if(in_array($controller2,$product)){  echo 'active'; } ?>" ><?php echo $this->lang->line('listing'); ?></a></li>
            <?php } ?>
            <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/additional_category/listing/'.$access_slug)?>" class="<?php if($controller2 == 'additional_category'){  echo 'active'; } ?>" ><?php echo $this->lang->line('additional_category'); ?></a></li>
            <?php if($storeInfo[0]->brand_status == 1 ){?>
                <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/branch/'.$access_slug)?>" class="<?php if($controller2=='branch'){ echo 'active'; } ?>" ><?php echo $this->lang->line('branch'); ?></a></li>
            <?php } if($storeInfo[0]->setup_website == 1 ){?>
                <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/websites/'.$access_slug)?>" class="<?php if(in_array($controller2,$website)){  echo 'active'; } ?>" ><?php echo $this->lang->line('website'); ?></a></li>
                <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/plugin/'.$access_slug)?>" class="<?php if($controller2 =='plugin'){  echo 'active'; } ?>" ><?php echo $this->lang->line('plugin'); ?></a></li>
            <?php }?>
            <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/options/'.$access_slug)?>" class="<?php if($controller2 == 'options'){  echo 'active'; } ?>" ><?php echo $this->lang->line('options'); ?></a></li>
        <?php } ?>
    </ul>
<?php } ?>
<?php if($modules == 'services' ){?>
<ul id="wptouch-top-menu">
<li><a href="<?php echo site_url($modules)?>" class="<?php if($modules =='services' && $controller2 =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('service_list'); ?></a></li>
<?php if($modules =='services' && $controller2 !="none" ){ ?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/store/'.$access_slug);?>" class="<?php if(in_array($controller2,$subService)){ echo 'active'; } ?>" ><?php echo $this->global_model->explode_string($store_name); ?>'info</a></li>
    <?php if($storeInfo[0]->listing_type > 0 ){?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/listing/'.$access_slug)?>" class="<?php if(in_array($controller2,$product)){  echo 'active'; } ?>" ><?php echo $this->lang->line('listing'); ?></a></li>
    <?php } ?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/additional_category/listing/'.$access_slug)?>" class="<?php if($controller2 == 'additional_category'){  echo 'active'; } ?>" ><?php echo $this->lang->line('additional_category'); ?></a></li>
    <?php if($storeInfo[0]->brand_status == 1 ){?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/branch/'.$access_slug)?>" class="<?php if($controller2=='branch'){ echo 'active'; } ?>" ><?php echo $this->lang->line('branch'); ?></a></li>
    <?php } if($storeInfo[0]->setup_website == 1 ){?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/websites/'.$access_slug)?>" class="<?php if(in_array($controller2,$website)){  echo 'active'; } ?>" ><?php echo $this->lang->line('website'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/plugin/'.$access_slug)?>" class="<?php if($controller2 =='plugin'){  echo 'active'; } ?>" ><?php echo $this->lang->line('plugin'); ?></a></li>
    <?php }?>
    <li><a href="<?php echo site_url($this->uri->segment(1,'none').'/options/'.$access_slug)?>" class="<?php if($controller2 == 'options'){  echo 'active'; } ?>" ><?php echo $this->lang->line('options'); ?></a></li>
<?php } ?>
</ul>
<?php } ?>




