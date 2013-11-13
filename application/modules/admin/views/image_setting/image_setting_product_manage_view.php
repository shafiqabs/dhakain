<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $title;; ?></li> 
</ul>

<div class="clear"></div>   
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('admin/admin_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('admin/admin_layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/image_setting/image_setting_product_insert')?>" method="post">
<div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
    <?php /*?><div class="info_message">
    <a class="close" data-dismiss="alert">×</a>
    <h4 class="alert-heading"><?php echo $this->lang->line('instruction'); ?></h4>
   	<ul>
    <li>Demo with jQuery You can put anything you</li>
    </ul>
    </div><?php */?>
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
<div class="controls_action_button">
<!--  start step-holder -->
    <div id="step-holder">
        <div class="step-no-off">1</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_product')?>"><?php echo $this->lang->line('image_setting_category'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no-off">2</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_single_product')?>"><?php echo $this->lang->line('image_setting_single_product'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no">3</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/image_setting/image_setting_product_manage')?>"><?php echo $this->lang->line('image_setting_product'); ?></a></div>
        <div class="step-dark-right">&nbsp;</div>
        <div class="step-no-off">5</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_product_list')?>"><?php echo $this->lang->line('image_setting_product_list'); ?></a></div>
        <div class="step-light-round">&nbsp;</div>
        <div class="clear"></div>
    </div>
<!--  end step-holder -->
</div>
<div class="clear"></div> 
<div class="content-inner-box">

    <div class="control-group">
            <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('image_setting_type'); ?></label>
            <div class="controls">
                <?php $image_size_type=(isset($queryup[0]->image_size_type))? $queryup[0]->image_size_type : 1; ?>
              <label class="radio">
               <input type="radio" <?php if($image_size_type ==1){ ?> checked="checked" <?php } ?> value="1" id="optionsRadios1" name="image_size_type">
               <?php echo $this->lang->line('image_setting_multiple_size'); ?>
              </label>
              <label class="radio">
              <input type="radio" value="2" <?php if($image_size_type ==2){ ?> checked="checked" <?php } ?> id="optionsRadios2" name="image_size_type">
                <?php echo $this->lang->line('image_setting_single_size'); ?>
              </label>

            </div>
    </div>
    <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('image_setting_name'); ?></label>
            <div class="controls">
                <input type="text" placeholder="Type <?php echo $this->lang->line('image_setting_name'); ?>" class="validate[required] input-xlarge span3" name="settings_image_name" id="settings_image_name" value="<?php echo(isset($queryup[0]->settings_image_name))? $queryup[0]->settings_image_name : set_value('settings_image_name'); ?>" >
                <p class="help-block"><?php echo $this->lang->line('image_setting_name_help'); ?></p>
            </div>
        </div>
      <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('large_image_width'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('large_image_width'); ?>" class="validate[required] input-xlarge span3" name="large_image_width" id="large_image_width" value="<?php echo(isset($queryup[0]->large_image_width))? $queryup[0]->large_image_width : set_value('large_image_width'); ?>" >
            </div>
      </div>

      <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('large_image_height'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('large_image_height'); ?>" class="validate[required] input-xlarge span3" name="large_image_height" id="large_image_height" value="<?php echo(isset($queryup[0]->large_image_height))? $queryup[0]->large_image_height : set_value('large_image_height'); ?>" >
            </div>
      </div>
      <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('medium_image_width'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('medium_image_width'); ?>" class="validate[required] input-xlarge span3" name="medium_image_width" id="medium_image_width" value="<?php echo(isset($queryup[0]->medium_image_width))? $queryup[0]->medium_image_width : set_value('medium_image_width'); ?>" >
            </div>
      </div>
      <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('medium_image_height'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('medium_image_height'); ?>" class="validate[required] input-xlarge span3" name="medium_image_height" id="medium_image_height" value="<?php echo(isset($queryup[0]->medium_image_height))? $queryup[0]->medium_image_height : set_value('medium_image_height'); ?>" >
            </div>
      </div>
         <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('thumb_image_width'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('thumb_image_width'); ?>" class="validate[required] input-xlarge span3" name="thumb_image_width" id="thumb_image_width" value="<?php echo(isset($queryup[0]->thumb_image_width))? $queryup[0]->thumb_image_width : set_value('thumb_image_width'); ?>" >
            </div>
      </div>
         <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('thumb_image_height'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('thumb_image_height'); ?>" class="validate[required] input-xlarge span3" name="thumb_image_height" id="thumb_image_height" value="<?php echo(isset($queryup[0]->thumb_image_height))? $queryup[0]->thumb_image_height : set_value('thumb_image_height'); ?>" >
            </div>
      </div>
    <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('small_image_width'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('small_image_width'); ?>" class="validate[required] input-xlarge span3" name="small_image_width" id="small_image_width" value="<?php echo(isset($queryup[0]->small_image_width))? $queryup[0]->small_image_width : set_value('small_image_width'); ?>" >
            </div>
      </div>
         <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('small_image_height'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('small_image_height'); ?>" class="validate[required] input-xlarge span3" name="small_image_height" id="small_image_height" value="<?php echo(isset($queryup[0]->small_image_height))? $queryup[0]->small_image_height : set_value('small_image_height'); ?>" >
            </div>
      </div>

          <div class="control-group">
            <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('publish_status'); ?></label>
            <div class="controls">
                <?php $status=(isset($queryup[0]->status))? $queryup[0]->status : 1; ?>
              <label class="radio">
               <input type="radio" <?php if($status ==1){ ?> checked="checked" <?php } ?> value="1" id="optionsRadios1" name="status">
               <?php echo $this->lang->line('publish'); ?>
              </label>
              <label class="radio">
              <input type="radio" value="0" <?php if($status ==0){ ?> checked="checked" <?php } ?> id="optionsRadios2" name="status">
                <?php echo $this->lang->line('un_publish'); ?>
              </label>
              
            </div>
          </div>
          <div>
              <input type="hidden"  name="settings_image_size_id" id="settings_image_size_id" value="<?php echo(isset($queryup[0]->settings_image_size_id))? $queryup[0]->settings_image_size_id : set_value('settings_image_size_id'); ?>" />
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
<?php $this->load->view('layouts/footer_admin'); ?>	