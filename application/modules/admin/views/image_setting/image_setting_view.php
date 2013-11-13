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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/image_setting/image_setting_add')?>" method="post">
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
        <div class="step-no">1</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/image_setting')?>"><?php echo $this->lang->line('image_setting_common'); ?></a></div>
        <div class="step-dark-right">&nbsp;</div>
        <div class="step-no-off">5</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_list')?>"><?php echo $this->lang->line('image_setting_list'); ?></a></div>
        <div class="step-light-round">&nbsp;</div>
        <div class="clear"></div>
    </div>
<!--  end step-holder -->
</div>
<div class="clear"></div> 
<div class="content-inner-box">
       <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('image_setting_name'); ?></label>
            <div class="controls">
                <input type="text" placeholder="Type <?php echo $this->lang->line('image_setting_name'); ?>" class="validate[required] input-xlarge span3" name="settings_common_image_size_name" id="settings_common_image_size_name" value="<?php echo(isset($queryup[0]->settings_common_image_size_name))? $queryup[0]->settings_common_image_size_name : set_value('settings_common_image_size_name'); ?>" >
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
            <label for="input01" class="control-label"><?php echo $this->lang->line('crop_image_width'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('crop_image_width'); ?>" class="validate[required] input-xlarge span3" name="crop_image_width" id="crop_image_width" value="<?php echo(isset($queryup[0]->crop_image_width))? $queryup[0]->crop_image_width : set_value('crop_image_width'); ?>" >
            </div>
      </div>
         <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('crop_image_height'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('crop_image_height'); ?>" class="validate[required] input-xlarge span3" name="crop_image_height" id="crop_image_height" value="<?php echo(isset($queryup[0]->crop_image_height))? $queryup[0]->crop_image_height : set_value('crop_image_height'); ?>" >
            </div>
      </div>
    <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('crop_image_left'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('crop_image_left'); ?>" class="validate[required] input-xlarge span3" name="crop_image_left" id="crop_image_left" value="<?php echo(isset($queryup[0]->crop_image_left))? $queryup[0]->crop_image_left : set_value('crop_image_left'); ?>" >
            </div>
      </div>
         <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('crop_image_top'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('crop_image_top'); ?>" class="validate[required] input-xlarge span3" name="crop_image_top" id="crop_image_top" value="<?php echo(isset($queryup[0]->crop_image_top))? $queryup[0]->crop_image_top : set_value('crop_image_top'); ?>" >
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
              <input type="hidden"  name="settings_common_image_size_id" id="settings_common_image_size_id" value="<?php echo(isset($queryup[0]->settings_common_image_size_id))? $queryup[0]->settings_common_image_size_id : set_value('settings_common_image_size_id'); ?>" />
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