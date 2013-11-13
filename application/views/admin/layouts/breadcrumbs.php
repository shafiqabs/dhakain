<?php
$modules=$this->uri->segment(1,'none');
$controller2=$this->uri->segment(2,'none');
$mall=array('edit','update','shop_list','about','mall_disclaimer','banner_view','shop_preview');
$store=array('classified','about','disclaimer','banner','store');
$product=array('listing','product','type','specification','product_image','product_gallery','preview');
$website=array('websites','customize_menu','customize_template');
$page=array('customize_page','customize_content');
$additional_category=array('additional_category');
$advertisment=array('advertisment','advertisment_view','sponsor','sponsor_view');
$options=array('options');
$tradefair=array('tradefair');
$controller3=$this->uri->segment(3,'none');
$editURL=$this->global_model->getEditModules($modules);
?>
<div class="controls_action_button">
    <!------------------Start Manage shopping mall-------------------------------- -->
<!--  start step-holder -->
    <?php if($modules=='shoppingmall'){?>
    <div id="step-holder">
        <div class="<?php if($controller3 =='edit' || $controller3=='update' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
        <div class="<?php if($controller3 =='edit' || $controller3=='update' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url('shoppingmall/mall/edit/'.$access_slug)?>"><?php echo $this->lang->line('mall_info'); ?></a></div>
        <div class="<?php if($controller3 =='edit' || $controller3=='update' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller3 =='shop_list') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
        <div class="<?php if($controller3 =='shop_list') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url('shoppingmall/mall/shop_list/'.$access_slug)?>"><?php echo $this->lang->line('shop_listing'); ?></a></div>
        <div class="<?php if($controller3 =='shop_list') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='about') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
        <div class="<?php if($controller2 =='about') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url('shoppingmall/about/'.$access_slug)?>"><?php echo $this->lang->line('about'); ?></a></div>
        <div class="<?php if($controller2 =='about') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='disclaimer') echo 'step-no'; else echo 'step-no-off'; ?>">4</div>
        <div class="<?php if($controller2 =='disclaimer') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url('shoppingmall/disclaimer/'.$access_slug)?>"><?php echo $this->lang->line('disclaimer'); ?></a></div>
        <div class="<?php if($controller2 =='disclaimer') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='banner') echo 'step-no'; else echo 'step-no-off'; ?>">5</div>
        <div class="<?php if($controller2 =='banner') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url('shoppingmall/banner/'.$access_slug)?>"><?php echo $this->lang->line('banner_image'); ?></a></div>
        <div class="<?php if($controller2 =='banner') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='shop_preview') echo 'step-no'; else echo 'step-no-off'; ?>">6</div>
        <div class="<?php if($controller2 =='shop_preview') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a target="_blank" href="<?php echo site_url_ssl($access_slug)?>" class="preview" id=""><?php echo $this->lang->line('preview'); ?></a></div>
        <div class="<?php if($controller2 =='shop_preview') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
        <div class="clear"></div>
    </div>
    <?php } ?>
    <!--  end step-holder -->
    <!-- ----------------End Manage shopping mall-------------------------------- -->

<!--  start step-holder -->
    <?php if($editURL=='service' && in_array($controller2,$store) || $editURL=='shop' && in_array($controller2,$store)){?>
    <div id="step-holder">

                <div class="<?php if($controller2 =='store') echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
                <div class="<?php if($controller2 =='store') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($modules.'/store/'. $access_slug)?>"><?php echo $this->global_model->explode_string($store_name); ?>'info</a></div>
                <div class="<?php if($controller2 =='store') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
                <div class="<?php if($controller2 =='classified') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
                <div class="<?php if($controller2 =='classified') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($modules.'/classified/'. $access_slug)?>"><?php echo $this->lang->line('classified'); ?></a></div>
                <div class="<?php if($controller2 =='classified') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
                <?php if($storeInfo[0]->setup_website != 1 ){?>
                <div class="<?php if($controller2 =='about') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
                <div class="<?php if($controller2 =='about') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($modules.'/about/'.$access_slug)?>"><?php echo $this->lang->line('about'); ?></a></div>
                <div class="<?php if($controller2 =='about') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
                <?php } ?>
                <div class="<?php if($controller2 =='disclaimer') echo 'step-no'; else echo 'step-no-off'; ?>">4</div>
                <div class="<?php if($controller2 =='disclaimer') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($modules.'/disclaimer/'.$access_slug)?>"><?php echo $this->lang->line('disclaimer'); ?></a></div>
                <div class="<?php if($controller2 =='disclaimer') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
                <div class="<?php if($controller2 =='banner') echo 'step-no'; else echo 'step-no-off'; ?>">5</div>
                <div class="<?php if($controller2 =='banner') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($modules.'/banner/'. $access_slug)?>"><?php echo $this->lang->line('banner_image'); ?></a></div>
                <div class="<?php if($controller2 =='banner') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
                <div class="<?php if($controller2 =='shop_preview') echo 'step-no'; else echo 'step-no-off'; ?>">6</div>
                <div class="<?php if($controller2 =='shop_preview') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="javascript:void(0)" class="preview" id="<?php echo  $access_slug; ?>"><?php echo $this->lang->line('preview'); ?></a></div>
                <div class="<?php if($controller2 =='shop_preview') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
                <div class="clear"></div>
     </div>
    <?php } ?>
    <?php if(in_array($controller2,$product)){?>
        <div id="step-holder">
            <div class="<?php if($controller2 =='product' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
            <div class="<?php if($controller2 =='product' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/product/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('edit_product'); ?></a></div>
            <div class="<?php if($controller2 =='product' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='type') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller2 =='type' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/type/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('select_type'); ?></a></div>
            <div class="<?php if($controller2 =='type') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='specification') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
            <div class="<?php if($controller2 =='specification') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/specification/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('specification'); ?></a></div>
            <div class="<?php if($controller2 =='specification') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='product_image') echo 'step-no'; else echo 'step-no-off'; ?>">4</div>
            <div class="<?php if($controller2 =='product_image') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/product_image/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('product_image'); ?></a></div>
            <div class="<?php if($controller2 =='product_image') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='product_gallery') echo 'step-no'; else echo 'step-no-off'; ?>">5</div>
            <div class="<?php if($controller2 =='product_gallery') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/product_gallery/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('product_gallery'); ?></a></div>
            <div class="<?php if($controller2 =='product_gallery') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='shop_preview') echo 'step-no'; else echo 'step-no-off'; ?>">6</div>
            <div class="<?php if($controller2 =='shop_preview') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/listing_product_preview/'.$access_slug.'/'.$productInfo[0]->slug)?>"><?php echo $this->lang->line('product_preview'); ?></a></div>
            <div class="<?php if($controller2 =='shop_preview') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
            <div class="clear"></div>
        </div>
    <?php } ?>
<?php if(in_array($controller2,$website)){?>
        <div id="step-holder">
            <div class="<?php if($controller2 =='websites' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
            <div class="<?php if($controller2 =='websites' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/websites/'.$access_slug)?>"><?php echo $this->lang->line('website'); ?></a></div>
            <div class="<?php if($controller2 =='websites' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='customize_template') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller2 =='customize_template' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_template/'.$access_slug)?>"><?php echo $this->lang->line('customize_template'); ?></a></div>
            <div class="<?php if($controller2 =='customize_template') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller2 =='customize_menu') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
            <div class="<?php if($controller2 =='customize_menu') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_menu/'.$access_slug)?>"><?php echo $this->lang->line('customize_menu'); ?></a></div>
            <div class="<?php if($controller2 =='customize_menu') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
            <div class="clear"></div>
        </div>

        <?php } ?>
<!--  end step-holder -->
    <?php if(in_array($controller2,$page)){?>
    <!--  start step-holder -->
    <div id="step-holder">

        <div class="<?php if($controller2 =='website' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
        <div class="<?php if($controller2 =='website' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/websites/'.$access_slug)?>"><?php echo $this->lang->line('website'); ?></a></div>
        <div class="<?php if($controller2 =='website' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='customize_menu') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
        <div class="<?php if($controller2 =='customize_menu' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_menu/'.$access_slug)?>"><?php echo $this->lang->line('customize_menu'); ?></a></div>
        <div class="<?php if($controller2 =='customize_menu') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='customize_page') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
        <div class="<?php if($controller2 =='customize_page' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_page/'.$access_slug.'/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('menu_customization'); ?></a></div>
        <div class="<?php if($controller2 =='customize_page') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
        <div class="<?php if($controller2 =='customize_content') echo 'step-no'; else echo 'step-no-off'; ?>">4</div>
        <div class="<?php if($controller2 =='customize_content') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_content/'.$access_slug.'/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('page_content'); ?></a></div>
        <div class="<?php if($controller2 =='customize_content') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
        <div class="clear"></div>

    </div>
    <!--  end step-holder -->
    <?php } ?>

    <?php if(in_array($controller2,$additional_category)){?>
        <!--  start step-holder -->
        <div id="step-holder">

            <div class="<?php if($controller3 =='category' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
            <div class="<?php if($controller3 =='category' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/additional_category/category/'.$access_slug)?>"><?php echo $this->lang->line('add_product_category'); ?></a></div>
            <div class="<?php if($controller3 =='category' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='listing') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller3 =='listing' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/additional_category/listing/'.$access_slug)?>"><?php echo $this->lang->line('additional_category_list'); ?></a></div>
            <div class="<?php if($controller3 =='listing') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='ordering') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
            <div class="<?php if($controller3 =='ordering') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/additional_category/ordering/'.$access_slug)?>"><?php echo $this->lang->line('additional_category_sorting'); ?></a></div>
            <div class="<?php if($controller3 =='ordering') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
            <div class="clear"></div>

        </div>
        <!--  end step-holder -->
    <?php } ?>

    <?php if(in_array($controller2,$advertisment)){?>
        <!--  start step-holder -->
        <div id="step-holder">

            <div class="<?php if(($controller2=='advertisment' && $controller3==$access_slug) || ($controller2=='advertisment' && $controller3=='edit')) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
            <div class="<?php if(($controller2=='advertisment' && $controller3==$access_slug) || ($controller2=='advertisment' && $controller3=='edit')) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/advertisment/'.$access_slug)?>"><?php echo $this->lang->line('advertisment'); ?></a></div>
            <div class="<?php if(($controller2=='advertisment' && $controller3==$access_slug) || ($controller2=='advertisment' && $controller3=='edit')) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='listing' && $controller2 =='advertisment') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller3 =='listing' && $controller2 =='advertisment' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/advertisment/listing/'.$access_slug)?>"><?php echo $this->lang->line('listing'); ?></a></div>
            <div class="<?php if($controller3 =='listing' && $controller2 =='advertisment') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if(($controller2=='sponsor' && $controller3==$access_slug) || ($controller2=='sponsor' && $controller3=='edit') ) echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
            <div class="<?php if(($controller2=='sponsor' && $controller3==$access_slug) || ($controller2=='sponsor' && $controller3=='edit') ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/sponsor/'.$access_slug)?>"><?php echo $this->lang->line('sponsor'); ?></a></div>
            <div class="<?php if(($controller2=='sponsor' && $controller3==$access_slug) || ($controller2=='sponsor' && $controller3=='edit') ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='listing' && $controller2 =='sponsor' ) echo 'step-no'; else echo 'step-no-off'; ?>">4</div>
            <div class="<?php if($controller3 =='listing' && $controller2 =='sponsor' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/sponsor/listing/'.$access_slug)?>"><?php echo $this->lang->line('listing'); ?></a></div>
            <div class="<?php if($controller3 =='listing' && $controller2 =='sponsor' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='settings') echo 'step-no'; else echo 'step-no-off'; ?>">5</div>
            <div class="<?php if($controller3 =='settings') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/sponsor/settings/'.$access_slug)?>"><?php echo $this->lang->line('sponsor_setting'); ?></a></div>
            <div class="<?php if($controller3 =='settings') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
            <div class="clear"></div>

        </div>
        <!--  end step-holder -->
    <?php } ?>


    <?php if(in_array($controller2,$options)){?>
        <!--  start step-holder -->
        <div id="step-holder">

            <div class="<?php if($controller2 =='options' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
            <div class="<?php if($controller2 =='options' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/'.$access_slug)?>"><?php echo $this->lang->line('options'); ?></a></div>
            <div class="<?php if($controller2 =='options' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <?php
            $settings_shopping_cart=$this->options_model->get_settings_shopping_cart($this->uri->segment($access_slug));
            if( $settings_shopping_cart == 1 && $this->session->userdata('useraccess') !="3" ){
            ?>
            <div class="<?php if($controller3 =='settings_option') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller3 =='settings_option' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_option/'.$access_slug)?>"><?php echo $this->lang->line('settings_option'); ?></a></div>
            <div class="<?php if($controller3 =='settings_option') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='settings_bank') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
            <div class="<?php if($controller3 =='settings_bank') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_bank/'.$access_slug)?>"><?php echo $this->lang->line('settings_bank'); ?></a></div>
            <div class="<?php if($controller3 =='settings_bank') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
            <?php } ?>
            <div class="clear"></div>

        </div>
        <!--  end step-holder -->
    <?php } ?>

    <?php if(in_array($controller2,$tradefair)){?>
        <!--  start step-holder -->
        <div id="step-holder">

            <div class="<?php if($controller2 =='options' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
            <div class="<?php if($controller2 =='options' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/tradefair/listing')?>"><?php echo $this->lang->line('tradefair'); ?></a></div>
            <div class="<?php if($controller2 =='options' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>

                <div class="<?php if($controller3 =='settings_option') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
                <div class="<?php if($controller3 =='settings_option' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/tradefair/partner/')?>"><?php echo $this->lang->line('partner'); ?></a></div>
                <div class="<?php if($controller3 =='settings_option') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='settings_option') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller3 =='settings_option' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/tradefair/partner/')?>"><?php echo $this->lang->line('partner'); ?></a></div>
            <div class="<?php if($controller3 =='settings_option') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='settings_bank') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
                <div class="<?php if($controller3 =='settings_bank') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/tradefair/sponsor/')?>"><?php echo $this->lang->line('slider'); ?></a></div>
                <div class="<?php if($controller3 =='settings_bank') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>

            <div class="clear"></div>

        </div>
        <!--  end step-holder -->
    <?php } ?>



</div>

