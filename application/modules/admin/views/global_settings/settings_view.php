<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('global_settings'); ?></li> 
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/global_settings/settings_add')?>" method="post">    
<div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
    <div class="info_message">
    <a class="close" data-dismiss="alert">×</a>
    <h4 class="alert-heading"><?php echo $this->lang->line('instruction'); ?></h4>
   	<ul>
    <li>Demo with jQuery You can put anything you</li>
    </ul>
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
<div class="controls_action_button">
<!--  start step-holder -->
            <div id="step-holder">
    
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="javascript:void();"><?php echo $this->lang->line('settings'); ?></a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
            <div class="step-light-left"><a href="<?php echo site_url('settings/global_settings/settings_list/0')?>"><?php echo $this->lang->line('settings_list'); ?></a></div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>
<div class="clear"></div> 
<div class="content-inner-box">
         <div class="control-group">
            <label for="select01" class="control-label"><?php echo $this->lang->line('parents_name'); ?></label>
            <div class="controls">
            <?php 
			$parent_id=(isset($queryup[0]->parent_id))? $queryup[0]->parent_id : set_value('parent_id');
            echo $this->settings_model->settings_list($parent_id);
            ?>
            </div>
          </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('settings_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type settings name" class="validate[required] input-xlarge span3" name="settings_name" id="settings_name" value="<?php echo(isset($queryup[0]->settings_name))? $queryup[0]->settings_name : set_value('settings_name'); ?>" >            
              <p class="help-block"><?php echo $this->lang->line('settings_name_help'); ?></p>
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
            <input type="hidden" name="old_settings_id" id="old_settings_id" value="<?php echo(isset($queryup[0]->settings_id))? $queryup[0]->settings_id : set_value('old_settings_id'); ?>"  />
           <input type="hidden" name="settings_id" id="settings_id" value="<?php echo(isset($queryup[0]->settings_id))? $queryup[0]->settings_id : set_value('settings_id'); ?>"  />
           <input type="hidden" name="old_settings_name" id="old_settings_name" value="<?php echo(isset($queryup[0]->settings_name))? $queryup[0]->settings_name : set_value('old_settings_name'); ?>"  />
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