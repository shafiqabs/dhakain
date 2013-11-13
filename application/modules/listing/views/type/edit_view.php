<?php $this->load->view('admin/layouts/header')?>

<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0)); ?>" ><?php echo $this->uri->segment(1,0); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/listing/'.$access_slug )?>" > <?php echo $store_name; ?>'info</a></li>
    <li><?php echo $productInfo[0]->product_name; ?></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" id="add_product" data-toggle="modal" href="#myModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_new_product'); ?></button></li>
</ul>

<div class="clear"></div>
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('admin/layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
    <?php $this->load->view('admin/layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/type/'.$access_slug.'/'.$productInfo[0]->slug )?>" method="post">
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
</div>
<div class="info_message">
    <h4 class="alert-heading" style="text-align: center"><?php echo $productInfo[0]->product_name; ?></h4>
</div>
<?php if(validation_errors()){?>
    <div class="alert-error">
        <a class="close" data-dismiss="alert">×</a>
        <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
        <div class="valiade_msg"><?php echo validation_errors(); ?></div>
    </div>
<?php }?>
<fieldset class="sheet">

    <div class="clear"></div>
    <legend><?php echo $title; ?></legend>
    <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
    <div class="clear"></div>
    <div class="content-inner-box">
        <div class="input_line input_line_mod">
            <div id="category_crumb" class="category_crumb"><strong><?php if(!empty($selected_category)){ ?><?php echo $this->lang->line('selected_categories'); ?>:</strong>&nbsp;<?php echo $this->settings_model->category_name($selected_category[0]->catid_label_1); ?> <?php if($this->settings_model->category_name($selected_category[0]->catid_label_2)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_2).'</span>'; } if($this->settings_model->category_custom_name($selected_category[0]->catid_label_3)){ echo "&raquo;<span>".$this->settings_model->category_custom_name($selected_category[0]->catid_label_3) .'</span>'; } if($this->settings_model->category_name($selected_category[0]->catid_label_4)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_4)."</span>"; }} ?></div>
        </div>
        <div class="clear"></div>
        <input type="hidden" name="catid_label_1" id="catid_label_1" value="<?php echo isset($selected_category[0]->catid_label_1) ?$selected_category[0]->catid_label_1:0; ?>" />
        <input type="hidden" name="catid_label_2" id="catid_label_2" value="<?php echo isset($selected_category[0]->catid_label_2) ?$selected_category[0]->catid_label_2:0; ?>" />
        <input type="hidden" name="catid_label_3" id="catid_label_3" value="<?php echo isset($selected_category[0]->catid_label_3) ?$selected_category[0]->catid_label_3:0; ?>" />
        <input type="hidden" name="catid_label_4" id="catid_label_4" value="<?php echo isset($selected_category[0]->catid_label_4) ?$selected_category[0]->catid_label_4:0; ?>" />
        <div class="category_list">
            <table class="agent_tbl">
                <?php
                $query=$this->type_model->productCategoryLabel1($access_slug);
                foreach ( $query->result() as $parent ){
                    ?>
                    <tr class="entry" id="entry-<?php echo $parent->parent_id ?>" ><td><a href="javascript:void(0)" id="<?php echo $parent->parent_id; ?>" class="parent"><?php echo $this->settings_model->category_name($parent->parent_id); ?></a></td></tr>
                <?php } ?>
            </table>
        </div>
        <div class="category_list">
            <?php
            $query=$this->type_model->productCategoryLabel1($access_slug);
            foreach ( $query->result() as $parent ){
                ?>
                <table class="agent_tbl subrows" id="subcat1-<?php echo $parent->parent_id; ?>" style="display:none">
                    <?php
                    $query=$this->type_model->productCategoryLabel2($access_slug,$parent->parent_id);
                    foreach ( $query->result() as $subrows ){
                        ?>
                        <tr class="entry entry-sub1" id="entry-<?php echo $subrows->category_id ?>" ><td><a href="javascript:void(0)" id="<?php echo $subrows->category_id ?>" class="sub-cat-1"><?php echo $this->settings_model->category_name($subrows->category_id); ?></a></td></tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>
        <div class="category_list">
            <?php

            $query=$this->type_model->productCategoryLabel1($access_slug);
            foreach ( $query->result() as $parent ){

                $query=$this->type_model->productCategoryLabel2($access_slug,$parent->parent_id);
                foreach ( $query->result() as $subrows ){

                    ?>
                    <table class="agent_tbl subrows1" id="subcat2-<?php echo $subrows->category_id ?>" style="display:none" >
                        <?php
                        $query=$this->settings_model->categorylist($subrows->category_id);
                        foreach ( $query->result() as $subrows2 ){
                            ?>
                            <tr class="entry entry-sub2" id="entry-<?php echo $subrows2->category_id ?>"><td><a href="javascript:void(0)" id="<?php echo $subrows2->category_id ?>" class="sub-cat-2"><?php echo ($subrows2->category_name); ?></a></td></tr>
                        <?php } ?>
                    </table>

                <?php } } ?>
        </div>
        <div class="category_list">
            <?php

            $query=$this->type_model->productCategoryLabel1($access_slug);
            foreach ( $query->result() as $parent ){

                $query=$this->type_model->productCategoryLabel2($access_slug,$parent->parent_id);
                foreach ( $query->result() as $subrows ){

                    $query=$this->settings_model->categorylist($subrows->category_id);
                    foreach ( $query->result() as $subrows2 ){

                        ?>
                        <table class="agent_tbl subrows2" id="subcat3-<?php echo $subrows2->category_id ?>" style="display:none">
                            <?php
                            $query=$this->settings_model->categorylist($subrows2->category_id);
                            foreach ( $query->result() as $subrows3 ){
                             ?>
                                <tr class="entry entry-sub3" id="entry-<?php echo $subrows3->category_id ?>" >
                                    <td><a href="javascript:void(0)" id="<?php echo $subrows3->category_id ?>" class="sub-cat-3"><?php echo ($subrows3->category_name); ?></a></td>
                                </tr>
                            <?php } ?>
                        </table>
                    <?php } } } ?>
        </div>
    </div>

</fieldset>


</div>
</form>
</div>
<div class="clear"></div>
</div>

</td>
</tr>
</tbody>
</table>

<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->
<?php $this->load->view('listing/product/add_product')?>
<?php $this->load->view('admin/layouts/footer'); ?>
<style type="text/css">
    .category_list {
        border: 1px solid #DCDEE1;
        float: left;
        height: 260px;
        margin-right: 1px;
        overflow: auto;
        width: 184px;
    }
</style>
<script type='text/javascript'>

    $(document).ready(function(){

        $('#entry-<?php echo isset($selected_category[0]->catid_label_1) ?$selected_category[0]->catid_label_1:0; ?>').addClass('parent_selected');
        $('#subcat1-<?php echo isset($selected_category[0]->catid_label_1) ?$selected_category[0]->catid_label_1:0; ?>').css({'display':''});
        $('#entry-<?php echo isset($selected_category[0]->catid_label_2) ?$selected_category[0]->catid_label_2:0; ?>').addClass('parent_selected');
        $('#subcat2-<?php echo isset($selected_category[0]->catid_label_2) ?$selected_category[0]->catid_label_2:0; ?>').css({'display':''});
        $('#entry-<?php echo isset($selected_category[0]->catid_label_3) ?$selected_category[0]->catid_label_3:0; ?>').addClass('parent_selected');
        $('#subcat3-<?php echo isset($selected_category[0]->catid_label_3) ?$selected_category[0]->catid_label_3:0; ?>').css({'display':''});
        $('#entry-<?php echo isset($selected_category[0]->catid_label_4) ?$selected_category[0]->catid_label_4:0; ?>').addClass('parent_selected');

        $('.parent').click(function(){
            var catid=$(this).attr('id');
            $('.subrows').css({'display':'none'});
            $('.subrows1').css({'display':'none'});
            $('.subrows2').css({'display':'none'});
            $('.subrows3').css({'display':'none'});
            $('.entry').removeClass('parent_selected');
            $('#entry-'+catid).addClass('parent_selected');
            $('#subcat1-'+catid).css({'display':''});
            $("#catid_label_1").val(catid);
            $("#catid_label_2").val('');
            $("#catid_label_3").val('');
            $("#catid_label_4").val('');

        })

        $('.sub-cat-1').click(function(){
            var catid=$(this).attr('id');
            $('.subrows1').css({'display':'none'});
            $('.subrows2').css({'display':'none'});
            $('.subrows3').css({'display':'none'});
            $('.entry-sub1').removeClass('parent_selected');
            $('#entry-'+catid).addClass('parent_selected');
            $('#subcat2-'+catid).css({'display':''});
            $("#catid_label_2").val(catid);
            $("#catid_label_3").val('');
            $("#catid_label_4").val('');


        })

        $('.sub-cat-2').click(function(){
            var catid=$(this).attr('id');
            $('.subrows2').css({'display':'none'});
            $('.subrows3').css({'display':'none'});
            $('.entry-sub2').removeClass('parent_selected');
            $('#entry-'+catid).addClass('parent_selected');
            $('#subcat3-'+catid).css({'display':''});
            $("#catid_label_3").val(catid);
            $("#catid_label_4").val('');


        })

        $('.sub-cat-3').click(function(){
            var catid=$(this).attr('id');
            $('.entry-sub3').removeClass('parent_selected');
            $('#entry-'+catid).addClass('parent_selected');
            $("#catid_label_4").val(catid);

        })
    })
</script>
