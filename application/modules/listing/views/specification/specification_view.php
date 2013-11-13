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
                        <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/specification/'.$access_slug.'/'.$productInfo[0]->slug )?>" method="post">
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
                                        <?php
                                        //$selected_category[0]->catid_label_1;\
                                        $i=0;
                                        if(!empty($cusquery)){
                                        $specific_value= $result['specific_value'];
                                        foreach( $cusquery->result() as $queryup ):
                                            $label_name=(isset($specific_value[$i]->label_name))?  $specific_value[$i]->label_name : set_value('label_name');
                                            if($label_name !== ""){
                                                $meta_label=(isset($specific_value[$i]->label_name))?  $specific_value[$i]->label_name : set_value('label_name');
                                            }else{
                                                $meta_label=(isset($queryup->meta_label))? $queryup->meta_label : set_value('');
                                            }
                                            ?>
                                            <div id="listItem_<?php echo $i; ?>" class="control-group">

                                                <label for="input01" class="control-label">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('label_name'); ?>" class="input-medium  span2 span2-extra" name="label_name[]" id="label_name" value="<?php echo $meta_label;  ?>" >
                                                </label>
                                                <div class="controls controls-extra">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('product_name'); ?>" class="input-medium  span3 span3-extra" name="meta_value[]" data-provide="typeahead" data-items="4" data-source="[<?php echo(isset($queryup->meta_description))? $queryup->meta_description : set_value(''); ?>]" id="meta_value" value="<?php echo(isset($specific_value[$i]->meta_value))? $specific_value[$i]->meta_value : set_value('meta_value'); ?>" >
                                                    <input type="hidden" name="extra_field[]" value="0" >
                                                </div>
                                            </div>
                                            <?php $i++; endforeach;
                                        }
                                        ?>
                                        <div class="clear"></div>
                                        <div class="input_line input_line_mod">
                                            <div id="category_crumb" class="category_crumb"><a href="javascript:void(0)" class="btn btn-small btn-primary newrows" style="float: right; margin-right: 20px;" ><?php echo $this->lang->line('add_additional_field'); ?></a></div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="clone-list">
                                            <?php

                                            $i=1;
                                            $num_rows = $result['specific_extra'] ->num_rows();
                                            if($result['specific_extra'] ->num_rows() > 0 ){
                                            foreach($result['specific_extra'] ->result() as $extra): ?>
                                                <div  class="control-group <?php if($i == $num_rows){ echo "addrow"; } ?>">
                                                    <label class="control-label">
                                                        <input type="text" placeholder="Type <?php echo $this->lang->line('label_name'); ?>" class="input-medium  span2 span2-extra" name="label_name[]" id="label_name" value="<?php echo(isset($extra->label_name))? $extra->label_name : set_value('label_name'); ?>" >
                                                    </label>
                                                    <div class="controls controls-extra">
                                                        <input type="text" placeholder="Type <?php echo $this->lang->line('product_name'); ?>" class="input-medium  span3 span3-extra" name="meta_value[]" id="meta_value" value="<?php echo(isset($extra->meta_value))? $extra->meta_value : set_value('meta_value'); ?>" ><?php if($i != 1){ ?><a class="btn btn-danger" href="javascript:void(0)"><i class="icon-trash icon-white"></i></a><?php } ?>
                                                        <input type="hidden" name="extra_field[]" value="1" >
                                                    </div>
                                                </div>
                                                <?php
                                                $i++; endforeach;
                                            ?>
                                        </div>
                                    <?php

                                    }else{
                                        ?>
                                        <div class="control-group addrow">
                                            <label class="control-label">
                                                <input type="text" placeholder="Type <?php echo $this->lang->line('label_name'); ?>" class="input-medium  span2 span2-extra" name="label_name[]" id="label_name" value="" >
                                            </label>
                                            <div class="controls controls-extra">
                                                <input type="text" placeholder="Type <?php echo $this->lang->line('product_name'); ?>" class="input-medium  span3 span3-extra" name="meta_value[]" id="meta_value" value="" >
                                                <input type="hidden" name="extra_field[]" value="1" >
                                            </div>
                                        </div>
                                    <?php } ?>

                                        <div class="clear"></div>
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
<script language="javascript" type="text/javascript">
    $(document).ready(function(){

        $(".newrows").click(function(){

            $(".addrow").closest('.addrow:last').clone(true).insertAfter(".addrow:last");
            $(".addrow:last input").val("");
            $('.addrow input[name="extra_field[]"]').val('1');
        });

        $(".clone-list").delegate('.btn-danger','click', function(){
            $(this).closest('.control-group').remove();
            return false;
        });



    })

</script>
<style>
    .form-horizontal .controls-extra {
        display: block;
        float: right;
        margin-left: 1px;
        margin-top: 5px;
    }
    input.span2, textarea.span2, .uneditable-input.span2-extra {
        width: 200px;
    }
    input.span3, textarea.span3, .uneditable-input.span3-extra {
        width: 480px;
    }

</style>

