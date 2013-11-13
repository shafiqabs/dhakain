<?php
$modules=$this->uri->segment(1,'none');
$controller2=$this->uri->segment(2,'none');
$controller3=$this->uri->segment(3,'none');
$store=array('classified','about','disclaimer','banner','store','seller');
$listing=array('listing','product','type','specification','product_image','product_gallery','preview');
$product=array('product','type','specification','product_image','product_gallery','preview');
$information=array('information','type','specification','information_gallery','preview');
$mall=array('mall','mall_update','mall_about','mall_edit','disclaimer','mall_banner_image');
$advertisment=array('advertisment','advertisment_view','sponsor','sponsor_view');
$website=array('websites','customize_menu','customize_template');
$page=array('customize_page','customize_content');
$additional_category=array('additional_category');
$sponsor=array('sponsor','sponsor_view','sponsor_list','sponsor_settings');
$branch=array('branch');
$options=array('options');
$sites=array('sites');
$editURL=$this->global_model->getEditModules($modules);
?>
<?php if($modules =="shoppingmall"){?>

    <ul>
        <li><a href="<?php echo site_url('shoppingmall')?>" class="<?php if($modules =='shoppingmall' && $controller2 =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('mall_list'); ?></a></li>
        <?php if($modules =='shoppingmall' && $controller2 !="none" ){ ?>
        <li><a class="<?php if($controller3=='edit' || $controller3=='update' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/edit/'.$access_slug)?>"><?php echo $this->lang->line('mall_info'); ?></a></li>

        <li><a class="<?php if($controller3=='shop_list' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/mall/shop_list/'.$access_slug)?>"  ><?php echo $this->lang->line('shop_listing'); ?></a></li>
        <li><a class="<?php if($controller2=='about' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/about/'.$access_slug)?>"  ><?php echo $this->lang->line('about'); ?></a></li>
        <li><a class="<?php if($controller2=='disclaimer' ){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/disclaimer/'.$access_slug)?>"><?php echo $this->lang->line('disclaimer'); ?></a></li>
        <li><a class="<?php if($controller2=='banner'){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall/banner/'.$access_slug)?>"><?php echo $this->lang->line('banner_image'); ?></a></li>
        <li><a class="preview" href="<?php echo site_url($access_slug)?>" id=""><?php echo $this->lang->line('preview'); ?></a></li>
    <?php } ?>
    </ul>


<?php } ?>
<?php if($editURL=='service' && in_array($controller2,$store)){?>
  <ul>
    <li><a href="<?php echo site_url('services')?>" class="<?php if($modules =='services' && $controller2 =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('service_list'); ?></a></li>
    <?php if($modules=='services' && $controller2 !="none" ){?>
    <li><a class="<?php if($controller2=='store'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/store/'. $access_slug)?>"><?php echo $this->global_model->explode_string($store_name); ?>'info</a></li>
    <li><a class="<?php if($controller2=='classified' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/classified/'. $access_slug)?>"  ><?php echo $this->lang->line('classified'); ?></a></li>
    <?php if($storeInfo[0]->setup_website != 1 ){?>
    <li><a class="<?php if($controller2=='about' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/about/'.$access_slug)?>"  ><?php echo $this->lang->line('about'); ?></a></li>
    <?php }?>
    <li><a class="<?php if($controller2=='disclaimer' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/disclaimer/'.$access_slug)?>"><?php echo $this->lang->line('disclaimer'); ?></a></li>
    <li><a class="<?php if($controller2=='banner'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/banner/'. $access_slug)?>"><?php echo $this->lang->line('banner_image'); ?></a></li>
    <li><a class="preview" href="javascript:void(0)" id="<?php echo  $access_slug; ?>"><?php echo $this->lang->line('preview'); ?></a></li>
  <?php } ?>
  </ul>
<?php } ?>
<?php if($editURL=='shop' && in_array($controller2,$store)){?>
    <ul>
        <li><a href="<?php echo site_url('shops')?>" class="<?php if($modules =='shops' && $controller2 =="none" ){ echo 'active'; } ?>" ><?php echo $this->lang->line('shop_list'); ?></a></li>
        <?php if($modules=='shops' && $controller2 !="none" ){?>
            <li><a class="<?php if($controller2=='store'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/store/'. $access_slug)?>"><?php echo $this->global_model->explode_string($store_name); ?>'info</a></li>
            <li><a class="<?php if($controller2=='classified' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/classified/'. $access_slug)?>"  ><?php echo $this->lang->line('classified'); ?></a></li>
            <?php if($storeInfo[0]->setup_website != 1 ){?>
                <li><a class="<?php if($controller2=='about' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/about/'.$access_slug)?>"  ><?php echo $this->lang->line('about'); ?></a></li>
            <?php }?>
            <li><a class="<?php if($controller2=='disclaimer' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/disclaimer/'.$access_slug)?>"><?php echo $this->lang->line('disclaimer'); ?></a></li>
            <li><a class="<?php if($controller2=='banner'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/banner/'. $access_slug)?>"><?php echo $this->lang->line('banner_image'); ?></a></li>
            <li><a class="preview" href="javascript:void(0)" id="<?php echo  $access_slug; ?>"><?php echo $this->lang->line('preview'); ?></a></li>
        <?php } ?>
    </ul>
<?php } ?>
<?php if(in_array($controller2,array('listing')) || in_array($controller2,$product )){?>
<ul>
    <li><a class="<?php if($controller2=='listing' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/listing/'.$access_slug)?>"><?php echo $this->lang->line('listing'); ?></a></li>
    <?php if(in_array($controller2,$product)){?>
            <li><a class="<?php if($controller2=='product' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/product/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('edit'); ?></a></li>
            <li><a class="<?php if($controller2=='type' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/type/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('select_type'); ?></a></li>
            <li><a class="<?php if($controller2=='specification' ){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/specification/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('specification'); ?></a></li>
            <li><a class="<?php if($controller2=='product_image'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/product_image/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('product_image'); ?></a></li>
            <li><a class="<?php if($controller2=='product_gallery'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/product_gallery/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('gallery'); ?></a></li>
            <li><a class="<?php if($controller2=='preview'){ echo 'active'; } ?>" href="<?php echo site_url($modules.'/listing/preview/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('product_preview'); ?></a></li>
    <?php } ?>
</ul>
<?php } ?>
<?php if(in_array($controller2,$website )){?>
<ul>
    <li><a class="<?php if($controller2=='websites' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/websites/'.$access_slug)?>"><?php echo $this->lang->line('website'); ?></a></li>
    <li><a class="<?php if($controller2=='customize_template'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_template/'.$access_slug)?>"><?php echo $this->lang->line('customize_template'); ?></a></li>
    <li><a class="<?php if($controller2=='customize_menu'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_menu/'.$access_slug)?>"><?php echo $this->lang->line('customize_menu'); ?></a></li>
</ul>
<?php } ?>
<?php if(in_array($controller2,$page )){?>
    <ul>
        <li><a class="<?php if($controller2=='websites' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/websites/'.$access_slug)?>"><?php echo $this->lang->line('website'); ?></a></li>
        <li><a class="<?php if($controller2=='customize_menu'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_menu/'.$access_slug)?>"><?php echo $this->lang->line('customize_menu'); ?></a></li>
        <li><a class="<?php if($controller2=='customize_page'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_page/'.$access_slug.'/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('menu_customization'); ?></a></li>
        <li><a class="<?php if($controller2=='customize_content'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_content/'.$access_slug.'/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('page_content'); ?></a></li>
    </ul>
<?php } ?>
<?php if(in_array($controller2,$additional_category )){?>
    <ul>
        <li><a class="<?php if($controller3=='category' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/additional_category/category/'.$access_slug)?>"><?php echo $this->lang->line('add_product_category'); ?></a></li>
        <li><a class="<?php if($controller3=='listing'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/additional_category/listing/'.$access_slug)?>"><?php echo $this->lang->line('additional_category_list'); ?></a></li>
        <li><a class="<?php if($controller3=='ordering'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/additional_category/ordering/'.$access_slug)?>"><?php echo $this->lang->line('additional_category_sorting'); ?></a></li>

    </ul>
<?php } ?>
<?php if(in_array($controller2,$advertisment)){?>
    <ul>
        <li><a class="<?php if(($controller2=='advertisment' && $controller3==$access_slug) || ($controller2=='advertisment' && $controller3=='edit')){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/advertisment/'.$access_slug)?>"><?php echo $this->lang->line('advertisment'); ?></a></li>
        <li><a class="<?php if($controller3=='listing' && $controller2=='advertisment' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/advertisment/listing/'.$access_slug)?>"><?php echo $this->lang->line('listing'); ?></a></li>
        <li><a class="<?php if(($controller2=='sponsor' && $controller3==$access_slug) || ($controller2=='sponsor' && $controller3=='edit') ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/sponsor/'.$access_slug)?>"><?php echo $this->lang->line('sponsor'); ?></a></li>
        <li><a class="<?php if($controller3=='listing' && $controller2=='sponsor' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/sponsor/listing/'.$access_slug)?>"><?php echo $this->lang->line('listing'); ?></a></li>
        <li><a class="<?php if($controller3=='settings' && $controller2=='sponsor'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/sponsor/settings/'.$access_slug)?>"><?php echo $this->lang->line('sponsor_setting'); ?></a></li>

    </ul>
<?php } ?>
<?php if(in_array($controller2,$options)){?>
    <ul>
        <li><a class="<?php if($controller2 =='options' && $controller3==$access_slug ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/'.$access_slug)?>"><?php echo $this->lang->line('options'); ?></a></li>
        <?php
        $settings_shopping_cart=$this->options_model->get_settings_shopping_cart($this->uri->segment($access_slug));
        if( $settings_shopping_cart == 1 && $this->session->userdata('useraccess') !="3" ){
            ?>
            <li><a class="<?php if($controller3 =='settings_option'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_option/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('settings_option'); ?></a></li>
            <li><a class="<?php if($controller3 =='settings_bank'){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_bank/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('settings_bank'); ?></a></li>
        <?php } ?>
    </ul>
<?php } ?>

<?php if(in_array($modules,$sites)){?>
    <ul>
        <li><a class="<?php if($controller2=='feature' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/feature')?>"><?php echo $this->lang->line('feature'); ?></a></li>
        <li><a class="<?php if($controller2=='sitecontent' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/sitecontent')?>"><?php echo $this->lang->line('sitecontent'); ?></a></li>
        <li><a class="<?php if($controller2=='tradefair' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/tradefair')?>"><?php echo $this->lang->line('tradefair'); ?></a></li>
        <li><a class="<?php if($controller2=='help' ){ echo 'active'; } ?>" href="<?php echo site_url($this->uri->segment(1,NULL).'/help')?>"><?php echo $this->lang->line('help'); ?></a></li>

    </ul>
<?php } ?>

