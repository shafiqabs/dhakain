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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/product/'.$access_slug.'/'.$productInfo[0]->slug )?>" method="post">
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
            <div id="category_crumb" class="category_crumb"><strong><?php echo $this->lang->line('selected_categories'); ?>:</strong>&nbsp;<?php echo $this->settings_model->category_name($selected_category[0]->catid_label_1); ?> <?php if($this->settings_model->category_name($selected_category[0]->catid_label_2)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_2).'</span>'; } if($this->settings_model->category_custom_name($selected_category[0]->catid_label_3)){ echo "&raquo;<span>".$this->settings_model->category_custom_name($selected_category[0]->catid_label_3) .'</span>'; } if($this->settings_model->category_name($selected_category[0]->catid_label_4)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_4)."</span>"; } ?></div>
        </div>
        <div class="clear"></div>
        <div class="form-box-left">
            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('product_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Type <?php echo $this->lang->line('product_name'); ?>" class="validate[required] input-medium  span3" name="product_name" id="product_name" value="<?php echo(isset($queryup[0]->product_name))? $queryup[0]->product_name : set_value('product_name'); ?>" >

                    <p class="help-block"><?php echo $this->lang->line('product_name_help'); ?></p>
                </div>
            </div>

            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('list_price'); ?></label>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <span class="add-on">৳</span><input type="text" size="16" id="" class="validate[required,custom[number]] input-small "  name="price"  value="<?php echo(isset($queryup[0]->price))? $queryup[0]->price : set_value('price'); ?>"><span class="add-on">BDT</span>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('discount_price'); ?></label>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <span class="add-on">৳</span><input type="text"  size="16" id="" class="validate[custom[number]] input-small"  name="discount_price"  value="<?php echo(isset($queryup[0]->discount_price))? $queryup[0]->discount_price : set_value('discount_price'); ?>"><span class="add-on">%</span>
                    </div>
                    <p class="help-block"><?php echo $this->lang->line('discount_price_help'); ?></p>
                </div>
            </div>
            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('quantity'); ?></label>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <input type="text"  size="16" id="" class="validate[required,custom[number]] input-small"  name="quantity"  value="<?php echo(isset($queryup[0]->quantity))? $queryup[0]->quantity : set_value('quantity'); ?>"><span class="add-on">Type</span>
                    </div>
                    <select style="width: 120px!important;" class="span2 validate[required]" name="quantity_type" id="quantity_type">
                        <option value=""><?php echo $this->lang->line('select_one'); ?></option>
                        <?php
                        $quantity_type=(isset($queryup[0]->quantity_type))? $queryup[0]->quantity_type : set_value('quantity_type');
                        foreach ($quantype as $quantity ){
                            ?>
                            <option value="<?php echo $quantity->settings_id; ?>" <?php if($quantity_type == $quantity->settings_id  ){?> selected="selected" <?php }?> ><?php echo $quantity->settings_name ?></option>
                        <?php } ?>
                    </select>


                </div>
            </div>
            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('brand_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Type <?php echo $this->lang->line('brand_name'); ?>" class="input-medium span3" name="brand_name" id="brand_name" value="<?php echo(isset($queryup[0]->brand_name))? $queryup[0]->brand_name : set_value('brand_name'); ?>" >
                </div>
            </div>
            <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('expired_date'); ?></label>
                <div class="controls">

                    <select name="expired" class="validate[required] span2" style="float: left;width:75x;">
                        <option value=""><?php echo $this->lang->line('select_one'); ?></option>
                        <?php
                        $expired_day = (isset($queryup[0]->expired))? $queryup[0]->expired : set_value('expired');
                        foreach ($expired as $day ){?>
                            <option value="<?php echo $day->day; ?>" <?php if($expired_day == $day->day  ){?> selected="selected" <?php }?> ><?php echo $day->title ?></option>
                        <?php } ?>

                    </select>


                </div>
            </div>
            <div class="control-group">
                <label for="select01" class="control-label"><?php echo $this->lang->line('product_status'); ?></label>
                <div class="controls">
                    <select class="validate[required]" id="product_status" name="product_status">
                        <option value="" >---<?php echo $this->lang->line('product_status'); ?>---</option>
                        <?php
                        $product_status=(isset($queryup[0]->product_status))? $queryup[0]->product_status : set_value('product_status');

                        foreach ($prostatus as $pstatus ){
                            ?>
                            <option value="<?php echo $pstatus->settings_id; ?>" <?php if($product_status == $pstatus->settings_id  ){?> selected="selected" <?php }?> ><?php echo $pstatus->settings_name ?></option>
                        <?php } ?>
                    </select>
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

<?php if(!empty($grouping)){
$grouping_id=(isset($queryup[0]->grouping_id))? $queryup[0]->grouping_id : set_value('grouping_id');
$dbsubcatID =explode(',',$grouping_id);
foreach($grouping as $group){
?>
    <fieldset class="sheet">
        <div class="clear"></div>
        <legend><?php echo $group->parent_name; ?></legend>
        <div class="content-inner-box">
            <div class="control-group">
                <?php
                $i=0;
                $subcatID =  explode(',',$group->grouping_id);
                $grouping_name =  explode(',',$group->grouping_name);
                foreach($subcatID  as $subid){
                    ?>
                    <label class="checkbox inline"><input type="checkbox" name="grouping_id[]"  value="<?php echo $subid ;?>"   <?php if(in_array($subid,$dbsubcatID)){ echo 'checked="checked"'; } ?> ><?php echo $grouping_name[$i]; ?></label>
                    <?php $i++; } ?>
            </div>
        </div>
    </fieldset>
<?php } } ?>
<fieldset class="sheet">
    <div class="clear"></div>
    <legend><?php echo $this->lang->line('description'); ?></legend>
    <div class="content-inner-box">
        <div class="control-group">
            <textarea class="textarea-no-large" id="textarea" rows="3" name="description"><?php echo(isset($queryup[0]->description))? $queryup[0]->description : set_value('description'); ?></textarea>
        </div>
    </div>
</fieldset>
<?php if(!empty($globalGrouping)){ ?>
    <input type="hidden" name="category_id" value="<?php echo $selected_category[0]-> catid_label_2; ?>">
    <?php
    $grouping_id=(isset($queryup[0]->grouping_id))? $queryup[0]->grouping_id : set_value('grouping_id');
    $dbsubcatID =explode(',',$grouping_id);
    foreach($globalGrouping as $group){
    if(!empty($group->grouping_id)){
        ?>
        <fieldset class="sheet">
            <div class="clear"></div>
            <legend><?php echo $group->parent_name; ?></legend>
            <div class="content-inner-box">
                <div class="control-group">
                    <?php
                    $i=0;
                    $subcatID =  explode(',',$group->grouping_id);
                    $grouping_name =  explode(',',$group->grouping_name);
                    foreach($subcatID  as $subid){
                        ?>
                        <label class="checkbox inline"><input type="checkbox" name="grouping_id[]"  value="<?php echo $subid ;?>"   <?php if(in_array($subid,$dbsubcatID)){ echo 'checked="checked"'; } ?> ><?php echo $grouping_name[$i]; ?></label>
                        <?php $i++; } ?>
                </div>
            </div>
        </fieldset>
    <?php } } } ?>
<fieldset class="sheet">
    <div class="clear"></div>
    <legend><?php echo $this->lang->line('feature_status'); ?></legend>
    <div class="content-inner-box">

        <div class="form-box">

            <div class="control-group">
                <?php $show_home=(isset($queryup[0]->show_home))? $queryup[0]->show_home : set_value('show_home'); ?>

                <label class="control-label" for="input01"><?php echo $this->lang->line('show_home'); ?></label>
                <div class="controls">
                      <label class="checkbox inline">
                        <input title="Check box" name="show_home" type="radio" value="1" <?php if($show_home ==1 ){?>  checked="checked" <?php } ?>  />  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                    </label>
                    <label class="checkbox inline">
                        <input title="Check box" name="show_home" type="radio" value="0" <?php if($show_home ==0 ){?>  checked="checked" <?php } ?>  /> <div class="radio_text">No</div>
                    </label>

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01"><?php echo $this->lang->line('feature_list'); ?></label>
                <div class="controls">
                    <?php $feature_list=(isset($queryup[0]->feature_list))? $queryup[0]->feature_list : set_value('feature_list'); ?>
                    <label class="checkbox inline">
                        <input title="Check box" name="feature_list" type="radio" value="1" <?php if($feature_list ==1 ){?>  checked="checked" <?php } ?>  />  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                    </label>
                    <label class="checkbox inline">
                        <input title="Check box" name="feature_list" type="radio" value="0" <?php if($feature_list ==0 ){?>  checked="checked" <?php } ?>  /> <div class="radio_text"><?php echo $this->lang->line('no'); ?></div>
                    </label>

                </div>
            </div>

        </div>

        <div class="form-box">

            <div class="control-group">
                <label class="control-label" for="input01"><?php echo $this->lang->line('special_offer'); ?></label>
                <div class="controls">
                    <?php $special_offer=(isset($queryup[0]->special_offer))? $queryup[0]->special_offer : set_value('special_offer'); ?>
                    <label class="checkbox inline">
                        <input title="Check box" name="special_offer" type="radio" value="1" <?php if($special_offer ==1 ){?>  checked="checked" <?php } ?>  />  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                    </label>
                    <label class="checkbox inline">
                        <input title="Check box" name="special_offer" type="radio" value="0" <?php if($special_offer ==0 ){?>  checked="checked" <?php } ?>  /> <div class="radio_text"><?php echo $this->lang->line('no'); ?></div>
                    </label>

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01"><?php echo $this->lang->line('discount_list'); ?></label>
                <div class="controls">
                    <?php $discount_list=(isset($queryup[0]->discount_list))? $queryup[0]->discount_list : set_value('discount_list'); ?>
                    <label class="checkbox inline">
                        <input title="Check box" name="discount_list" type="radio" value="1" <?php if($discount_list ==1 ){?>  checked="checked" <?php } ?>  />  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                    </label>
                    <label class="checkbox inline">
                        <input title="Check box" name="discount_list" type="radio" value="0" <?php if($discount_list ==0 ){?>  checked="checked" <?php } ?>  /> <div class="radio_text"><?php echo $this->lang->line('no'); ?></div>
                    </label>

                </div>
            </div>
        </div>
    </div>
</fieldset>
<fieldset class="sheet">
    <div class="clear"></div>
    <legend><?php echo $this->lang->line('product_promotion'); ?></legend>
    <div class="content-inner-box">

        <div class="control-group">
            <?php
            $sell_offer_id=(isset($queryup[0]->sell_offer_id))? $queryup[0]->sell_offer_id : set_value('sell_offer_id');
            if(isset($queryup[0]->product_id) > 0){
                $sell_offer =($queryup[0]->sell_offer !="" ) ? $queryup[0]->sell_offer : serialize(array());
            }else{
                $sell_offer =(isset($queryup[0]->sell_offer)) ? $queryup[0]->sell_offer : serialize(array());
            }
            $sell_offerid=(unserialize($sell_offer));
            foreach ($selloffer as $offer){
            ?>
            <label class="checkbox inline"><input type="checkbox" name="sell_offer[]"  value="<?php echo $offer->sell_offer_id; ?>"  <?php if( in_array($offer->sell_offer_id, $sell_offerid) ){  ?> checked="checked" <?php }?> ><?php echo $offer->offer_title; ?></label>
            <?php } ?>


        </div>

    </div>
</fieldset>

<fieldset class="sheet">
    <div class="clear"></div>
    <legend><?php echo $this->lang->line('additional_notification'); ?></legend>
    <div class="content-inner-box">

            <div class="control-group control-group-checkbox">
                <label class="control-label  "><?php echo $this->lang->line('share_facebook'); ?></label>
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
<style>
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
        font-weight: normal!important;
        color: #000!important;
    }
</style>
<?php $this->load->view('admin/layouts/footer'); ?>
<?php $this->load->view('listing/product/add_product')?>
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
        $("#product_name").autocomplete("<?php echo site_url('listing/product/get_search_product/'.$catid_label_2)?>", {
            matchContains: true,
            minChars: 0
        });

        $("#product_name").result(function(event, data, formatted) {
            var output = !data ? "No match!" :"<div class=\"list\">"+data[0]+"</div>";
            $('select').attr('disabled',false);
        });

        $("#brand_name").autocomplete("<?php echo site_url('seller/listing_product/get_brand_list')?>", {
            matchContains: true,
            minChars: 0
        });

        $("#brand_name").result(function(event, data, formatted) {
            var output = !data ? "No match!" :"<div class=\"list\">"+data[0]+"</div>";
            $('select').attr('disabled',false);
        });

        $("#clear").click(function() {
            $(":input").unautocomplete();
        });




    });
</script>
