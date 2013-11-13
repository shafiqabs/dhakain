<?php $this->load->view('admin/layouts/header')?>
<style type="text/css">
    .form-box-left{
        float: left;
        width: 500px;
    }
    .form-box-right{
        float: right;
        width: 230px;
    }
    .form-horizontal .control-group-checkbox{
        float: left;
        width: 250px;

    }
    .form-horizontal .control-group-checkbox .control-label{
        text-align: left;
        width: 190px;

    }
    .form-box{
        float: left;
        width: 370px;
    }


</style>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0)); ?>" ><?php echo $this->uri->segment(1,0); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/listing/'.$access_slug )?>" > <?php echo $store_name; ?>'info</a></li>
    <li><?php echo $productInfo[0]->product_name; ?></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" id="add_product" data-toggle="modal" href="#productModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_new_product'); ?></button></li>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/product/'.$access_slug.'/'.$productInfo[0]->slug )?>" method="post" enctype="multipart/form-data">
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
        <a class="close" data-dismiss="alert">?</a>
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
            <div id="category_crumb" class="category_crumb"><strong><?php echo $this->lang->line('selected_categories'); ?>:</strong><?php if(!empty($selected_category)){ ?>&nbsp;<?php echo $this->settings_model->category_name($selected_category[0]->catid_label_1); ?> <?php if($this->settings_model->category_name($selected_category[0]->catid_label_2)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_2).'</span>'; } if($this->settings_model->category_custom_name($selected_category[0]->catid_label_3)){ echo "&raquo;<span>".$this->settings_model->category_custom_name($selected_category[0]->catid_label_3) .'</span>'; } if($this->settings_model->category_name($selected_category[0]->catid_label_4)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_4)."</span>"; } } ?></div>
        </div>
        <div class="clear"></div>
        <div class="form-box-left">
            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('product_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Type <?php echo $this->lang->line('product_name'); ?>" class="validate[required] input-medium  span4" name="product_name" id="product_name" value="<?php echo(isset($queryup[0]->product_name))? $queryup[0]->product_name : set_value('product_name'); ?>" >

                    <p class="help-block"><?php echo $this->lang->line('product_name_help'); ?></p>
                </div>
            </div>
        </div>
        <div class="form-box-right">
            <div style="text-align:center; margin-top:10px; float: right;">
                <?php
                if($image_path){?>
                    <img src="<?php echo base_url().$image_path; ?>" style="max-height:200px; max-width:250px; margin-bottom:10px;" />
                <?php }else{ ?>
                    <img src="<?php echo base_url()?>assets/images/noimage.jpg" style="max-height:200px; max-width:250px; margin-bottom:10px;" />
                <?php } ?>
                <div class="clear"></div>
                <a href="<?php echo site_url($this->uri->segment(1,0).'/product_image/'.$access_slug."/".$productInfo[0]->slug);?>">Add/Edit Image</a>
            </div>

        </div>
    </div>

</fieldset>
<fieldset class="sheet">
    <div class="clear"></div>
    <legend><?php echo $this->lang->line('description'); ?></legend>
    <div class="content-inner-box">
        <div class="control-group">
            <textarea class="textarea-no-large" id="textarea" rows="3" name="description"><?php echo(isset($queryup[0]->description))? $queryup[0]->description : set_value('description'); ?></textarea>
        </div>
    </div>
</fieldset>

<fieldset class="sheet">
    <div class="clear"></div>
    <legend><?php echo $this->lang->line('additional_notification'); ?></legend>
    <div class="content-inner-box">

            <div class="control-group control-group-checkbox">
                <label class="control-label "><?php echo $this->lang->line('share_facebook'); ?></label>
                <div class="controls"><input type="checkbox" value="1" id="share_facebook" name="share_facebook" value="1" <?php if(isset($queryup[0]->share_facebook) ? $queryup[0]->share_facebook : set_value('share_facebook') ==1 ) echo 'checked="checked"'; ?> ></div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_wishlist'); ?></label>
                <div class="controls"><input type="checkbox" value="1" id="notification_wishlist" name="notification_wishlist" value="1" <?php if(isset($queryup[0]->notification_wishlist) ? $queryup[0]->notification_wishlist : set_value('notification_wishlist') ==1 ) echo 'checked="checked"'; ?> ></div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_region'); ?></label>
                <div class="controls"><input type="checkbox" name="notification_region" value="1"  <?php if(isset($queryup[0]->notification_region) ? $queryup[0]->notification_region : set_value('notification_region') ==1 ) echo 'checked="checked"'; ?> /></div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_comments'); ?></label>
                <div class="controls"><input type="checkbox" name="notification_comments" value="1"  <?php if(isset($queryup[0]->notification_comments) ? $queryup[0]->notification_comments : set_value('notification_comments') ==1 ) echo 'checked="checked"'; ?> /></div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_contactus'); ?></label>
                <div class="controls"><input type="checkbox" name="notification_contactus" value="1" <?php if(isset($queryup[0]->notification_contactus) ? $queryup[0]->notification_contactus : set_value('notification_contactus') ==1 ) echo 'checked="checked"'; ?> /></div>
            </div>

            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_reminder'); ?></label>
                <div class="controls">
                    <input type="checkbox" name="notification_reminder" value="1"  <?php if(isset($queryup[0]->notification_reminder) ? $queryup[0]->notification_reminder : set_value('notification_reminder') ==1 ) echo 'checked="checked"'; ?> />
                </div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_pricedrop'); ?></label>
                <div class="controls"><input type="checkbox" name="notification_pricedrop" value="1"  <?php if(isset($queryup[0]->notification_pricedrop) ? $queryup[0]->notification_pricedrop : set_value('notification_pricedrop') ==1 ) echo 'checked="checked"'; ?> /></div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('notification_enough_info'); ?></label>
                <div class="controls"><input type="checkbox" name="notification_enough_info" value="1"  <?php if(isset($queryup[0]->notification_enough_info) ? $queryup[0]->notification_enough_info : set_value('notification_enough_info') ==1 ) echo 'checked="checked"'; ?> /></div>
            </div>
            <div class="control-group control-group-checkbox">
                <label class="control-label" for="input01"><?php echo $this->lang->line('compare_another'); ?></label>
                <div class="controls"><input type="checkbox" name="compare_another" value="1"  <?php if(isset($queryup[0]->compare_another) ? $queryup[0]->compare_another : set_value('compare_another') ==1 ) echo 'checked="checked"'; ?> /></div>
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

<?php $this->load->view('admin/layouts/footer'); ?>
<?php $this->load->view('listing/product/add_product')?>
<script language="javascript" type="text/javascript">
    $(document).ready(function(){

        $("input[type=file]").filestyle({
            image: "<?php echo base_url()?>/assets/images/upload_file.gif",
            imagewidth :78,
            imageheight : 29,
            width :145
        });
    });
</script>
<script language="javascript" type="text/javascript" >
    $(document).ready(function(){

        $('#add_product').click(function(){

            $('#productModal').modal('toggle');
        })

        function log(event, data, formatted) {
            $("<li>").html( !data ? "No match!" : "Selected: " + formatted).appendTo("#result");
        }

        function formatItem(row) {
            return row[0] + " (<strong>id: " + row[0] + "</strong>)";
        }
        function formatResult(row) {
            return row[0].replace(/(<.+?>)/gi, '');
        }
        <?php
        if(!empty($selected_category)){
            $catid_label_2 = $selected_category[0]->catid_label_2;
        }else{
            $catid_label_2 = 0;
        }
        ?>
        $("#product_name").autocomplete("<?php echo site_url('listing/product/get_search_product/2'.$catid_label_2)?>", {
            matchContains: true,
            minChars: 0
        });

        $("#product_name").result(function(event, data, formatted) {
            var output = !data ? "No match!" :"<div class=\"list\">"+data[0]+"</div>";
            $('select').attr('disabled',false);
        });

        $("#clear").click(function() {
            $(":input").unautocomplete();
        });




    });
</script>
