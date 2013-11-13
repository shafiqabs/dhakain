<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
  <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
  <li><a href="<?php echo site_url($this->uri->segment(1,0));?>" ><?php echo $this->uri->segment(1,0); ?></a></li>
  <li><?php echo $store_name; ?>'info</li>

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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,NULL).'/store/save/'.$access_slug); ?>" method="post">
<div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
    <div class="info_message">
    <h4 class="alert-heading" style="text-align: center"><?php echo $store_name; ?></h4>
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
         <input type="hidden" name="access_slug" value="<?php echo isset($queryup[0]->access_slug)? $queryup[0]->access_slug : set_value('access_slug'); ?>">
         <input type="hidden" name="shop_group" value="<?php echo isset($queryup[0]->shop_group)? $queryup[0]->shop_group : set_value('shop_group'); ?>">
         <div class="control-group" >
             <label  class="control-label" style="width: 100px;"><?php echo $this->lang->line('title'); ?></label>
             <div class="controls" style="margin-left: 122px;">
                 <input type="text" placeholder="Type <?php echo $this->lang->line('shop_name'); ?>" class="validate[required] input-large  span6 shop_change" name="shop_name" id="shop_name" value="<?php echo(isset($queryup[0]->shop_name))? $queryup[0]->shop_name:set_value('shop_name'); ?>" ><span class="small_loading"></span>
             </div>
         </div>
          <div class="form-box">

             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('contact_person'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type settings name" class="validate[required] input-medium  span3" name="contact_person" id="contact_person" value="<?php echo(isset($queryup[0]->contact_person))? $queryup[0]->contact_person : set_value('contact_person'); ?>" >
                 </div>
             </div>
              <div class="control-group">
                  <label  class="control-label"><?php echo $this->lang->line('designation'); ?></label>
                  <div class="controls">
                      <?php $designation_id=(isset($queryup[0]->designation_id))? $queryup[0]->designation_id : set_value('designation_id'); ?>
                      <select name="designation_id" id="designation_id">
                          <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                          <?php
                          foreach ( $designationList->result() as $rows ){
                              ?>
                              <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $designation_id ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                              <?php } ?>
                      </select>
                  </div>
              </div>
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('email'); ?></label>
                 <div class="controls">
                     <div class="input-prepend">
                         <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="Type settings name" class="validate[custom[email]] span2" name="email" id="email" value="<?php echo(isset($queryup[0]->email))? $queryup[0]->email : set_value('email'); ?>" >
                     </div>

                 </div>
             </div>

             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('cell_phone'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('cell_phone'); ?>" class="span3" name="cell_phone" id="cell_phone" value="<?php echo(isset($queryup[0]->cell_phone))? $queryup[0]->cell_phone : set_value('cell_phone'); ?>" >
                 </div>
             </div>
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('business_phone'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('business_phone'); ?>" class="validate[required,custom[phone]] span3" name="business_phone" id="business_phone" value="<?php echo(isset($queryup[0]->business_phone))? $queryup[0]->business_phone : set_value('business_phone'); ?>" >
                 </div>
             </div>
              <div class="control-group">
                  <label  class="control-label"><?php echo $this->lang->line('website'); ?></label>
                  <div class="controls">
                      <input type="text" placeholder="Type <?php echo $this->lang->line('domain_name'); ?>" class="span3" name="domain_name" id="website" value="<?php echo(isset($queryup[0]->domain_name))? $queryup[0]->domain_name : set_value('domain_name'); ?>" >
                  </div>
              </div>
         </div>
         <div class="form-box">
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('address'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('address'); ?>" class="validate[required] span3" name="address" id="shop_no" value="<?php echo(isset($queryup[0]->address))? $queryup[0]->address : set_value('address'); ?>" >
                 </div>
             </div>
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('location'); ?></label>
                 <div class="controls">
                     <?php $location_id=(isset($queryup[0]->location_id))? $queryup[0]->location_id : set_value('location_id'); ?>
                     <select name="location_id" id="location_id" class="validate[required]">
                         <option value="" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                         <?php
                          foreach ( $locationList->result() as $rows ){
                             ?>
                             <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $location_id ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                             <?php } ?>
                     </select>
                 </div>
             </div>

             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('city'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('city'); ?>" class="span2" name="city" id="city" value="<?php echo(isset($queryup[0]->city))? $queryup[0]->city : set_value('city'); ?>" >
                 </div>
             </div>
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('postal_code'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('postal_code'); ?>" class="span2" name="postal_code" id="postal_code" value="<?php echo(isset($queryup[0]->postal_code))? $queryup[0]->postal_code : set_value('postal_code'); ?>" >
                 </div>
             </div>
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('district'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('district'); ?>" class="span2" name="district" id="district" value="<?php echo(isset($queryup[0]->district))? $queryup[0]->district : set_value('district'); ?>" >
                 </div>
             </div>
             <div class="control-group">
                 <label  class="control-label"><?php echo $this->lang->line('fax'); ?></label>
                 <div class="controls">
                     <input type="text" placeholder="Type <?php echo $this->lang->line('fax'); ?>" class="span2" name="fax" id="fax" value="<?php echo(isset($queryup[0]->fax))? $queryup[0]->fax : set_value('fax'); ?>" >
                 </div>
             </div>

         </div>
     </div>

</fieldset>
<div class="clear"></div>
<fieldset class="sheet">
        <div class="clear"></div>
        <legend><?php echo $this->lang->line('settings'); ?></legend>
        <div class="clear"></div>
        <div class="content-inner-box">

            <div class="form-box">
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('brand_shop'); ?></label>
                    <div class="controls">
                        <?php $brand_status=(isset($queryup[0]->brand_status))? $queryup[0]->brand_status : set_value('brand_status'); ?>
                        <input title="<?php echo $this->lang->line('brand_shop'); ?>" name="brand_status" type="checkbox" value="1" <?php if($brand_status ==1 ){?>  checked="checked" <?php } ?>  />
                    </div>
                </div>
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('email_notify'); ?></label>
                    <div class="controls">
                        <?php $email_notification=(isset($queryup[0]->email_notification))? $queryup[0]->email_notification : set_value('email_notification'); ?>
                        <input title="<?php echo $this->lang->line('email_notify'); ?>" name="email_notification" type="checkbox" value="1" <?php if($email_notification ==1 ){?>  checked="checked" <?php } ?>  />
                    </div>
                </div>

                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('shopping_mall'); ?></label>
                    <div class="controls">
                        <?php $shopping_status=(isset($queryup[0]->shopping_status))? $queryup[0]->shopping_status : set_value('shopping_status'); ?>
                        <input title="<?php echo $this->lang->line('shopping_mall'); ?>" name="shopping_status" id="shopping_status" type="checkbox" value="1" <?php if($shopping_status ==1 ){?>  checked="checked" <?php } ?>  />
                    </div>
                </div>
            </div>
            <div class="form-box">
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('listing_type'); ?></label>
                    <div class="controls">
                        <?php $listing_type=(isset($queryup[0]->listing_type))? $queryup[0]->listing_type : set_value('listing_type'); ?>
                        <select name="listing_type" id="listing_type">
                            <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                            <?php
                            foreach ( $shopTypeList->result() as $rows ){
                                ?>
                                <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $listing_type ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('status'); ?></label>
                    <div class="controls">
                        <?php $status=(isset($queryup[0]->status))? $queryup[0]->status : set_value('status'); ?>
                        <input title="<?php echo $this->lang->line('status'); ?>" name="status" type="checkbox" value="1" <?php if($status ==1 ){?>  checked="checked" <?php } ?>  />
                    </div>
                </div>
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('setup_website'); ?></label>
                    <div class="controls">
                        <?php $setup_website=(isset($queryup[0]->setup_website))? $queryup[0]->setup_website : set_value('setup_website'); ?>
                        <input title="<?php echo $this->lang->line('setup_website'); ?>" name="setup_website" id="setup_website" type="checkbox" value="1" <?php if($setup_website ==1 ){?>  checked="checked" <?php } ?>  />
                    </div>
                </div>
            </div>
        </div>

    </fieldset>
<div class="clear"></div>
<fieldset class="sheet" id="shoppingmall" style="display: <?php if($shopping_status==1){ echo 'block'; }else{ echo 'none'; }?>" >
<div class="clear"></div>
<legend><?php echo $this->lang->line('add_shopping'); ?></legend>
<div class="clear"></div>
<div class="content-inner-box">
       <div class="form-box">
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('shopping_mall'); ?></label>
                    <div class="controls">
                        <?php $shopping_mall_id=(isset($queryup[0]->shopping_mall_id))? $queryup[0]->shopping_mall_id : set_value('shopping_mall_id'); ?>
                        <select name="shopping_mall_id" id="shopping_mall_id">
                            <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                            <?php foreach ( $mallList as $rows ){?>
                                <option value="<?php echo $rows->agent_uid ?>" <?php if( $rows->agent_uid  == $shopping_mall_id ){?> selected="selected" <?php } ?> ><?php echo $rows->shop_name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('level'); ?></label>
                    <div class="controls">
                        <?php $level=(isset($queryup[0]->level))? $queryup[0]->level : set_value('level'); ?>
                        <select name="level" id="level">
                            <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                            <?php

                            foreach ( $levelList->result() as $rows ){
                                ?>
                                <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $level ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="form-box">
                <div class="control-group">
                    <label  class="control-label"><?php echo $this->lang->line('shop_no'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="Type <?php echo $this->lang->line('shop_no'); ?>" class="validate[required] span3" name="shop_no" id="shop_no" value="<?php echo(isset($queryup[0]->shop_no))? $queryup[0]->shop_no : set_value('shop_no'); ?>" >
                    </div>
                </div>
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
<script language="javascript" type="text/javascript">
    $(document).ready(function(){

        $("#shopping_status").change(function(){

            if(jQuery('#shopping_status').is(':checked') ==true){

                $('#shoppingmall').slideDown();

            }else if(jQuery('#shopping_status').is(':checked') ==false){

                $('#shoppingmall').hide('slow');
            }
        });
    });
</script>
