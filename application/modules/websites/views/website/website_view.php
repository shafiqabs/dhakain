<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0));?>" ><?php echo $this->uri->segment(1,0); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/websites/'.$access_slug);?>" ><?php echo $this->lang->line('website'); ?></a></li>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/websites/save/'.$access_slug )?>" method="post">
  <input type="hidden" name="settings_web_id" id="settings_web_id" value="<?php echo(isset($queryup[0]->settings_web_id))? $queryup[0]->settings_web_id : set_value('settings_web_id'); ?>"  />
  <input type="hidden" name="access_slug" id="access_slug" value="<?php echo $access_slug; ?>"  />

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
 <div class="control-group">
   <label for="input01" class="control-label"><?php echo $this->lang->line('website_domain'); ?></label>
   <div class="controls">
   <input type="text" placeholder="Type <?php echo $this->lang->line('website_domain'); ?>" class="validate[required]" name="domain_name" id="domain_name" value="<?php echo(isset($queryup[0]->domain_name))? $queryup[0]->domain_name : set_value('domain_name'); ?>" >
   <p><span style="color:#3f5475; font-size:11px;">Please enter only domain name ignore(http//:,www.,_,Special charecters).</span>
     <br />
      <span style="color:#3f5475; font-size:11px;">View website:
      <?php if($this->website_model->domain_name($access_slug)){?> <a target="_blank"  href="http://<?php echo $this->website_model->domain_name($access_slug); ?>"><?php echo $this->website_model->domain_name($access_slug); ?></a>
      /<?php } ?>
      <a target="_blank" href="<?php echo  WEBSITE_PREVIEW.$access_slug; ?>" > Preview link </a>(links open in new window)</span></p>
    </div>
 </div>
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('website_custom_title'); ?></label>
    <div class="controls">
      <input type="text" placeholder="Type <?php echo $this->lang->line('website_custom_title'); ?>" class="" name="custom_title" id="custom_title" value="<?php echo(isset($queryup[0]->custom_title))? $queryup[0]->custom_title : set_value('custom_title'); ?>" >
    </div>
  </div>
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('use_breadcrumb'); ?></label>
    <div class="controls">
        <?php $breadcrumb=(isset($queryup[0]->breadcrumb))? $queryup[0]->breadcrumb : set_value('breadcrumb'); ?>
      <label class="checkbox inline">
        <input type="radio" value="1" name="breadcrumb" <?php if($breadcrumb ==1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text">Yes</div>
      </label>
      <label class="checkbox inline">
        <input type="radio" value="0" name="breadcrumb" title="Check box" <?php if($breadcrumb ==0 || $breadcrumb ==""  ){?>  checked="checked" <?php } ?> > <div class="radio_text">No</div>
      </label>

    </div>
  </div>
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('template_name'); ?></label>
    <div class="controls">
       <?php $template_name =(isset($queryup[0]->template_name ))? $queryup[0]->template_name  : set_value('template_name '); ?>
<?php $query=$this->website_model->web_template_list(); ?>
<?php if(in_array($template_name, unserialize(CUSTOM_TEMPLATE))){ // Check if match with custom template ID?>
  <select style="width:300px;" name="template_name" id="template_name"<?php echo (in_array($template_name, unserialize(CUSTOM_TEMPLATE))) ? ' disabled="disabled"' : ''?>>
      <?php
      foreach($query ->result() as $rows){
          if($rows->website_template_id == $template_name){ // Check if template id match with Agent template ID?>
            <option value="<?php echo $rows->website_template_id; ?>" <?php if($rows->website_template_id == $template_name ){ ?> selected="selected" <?php } ?> ><?php echo $rows->template_name; ?></option>
            <input type="hidden" name="template_name" id="template_name" value="<?php echo $rows->website_template_id; ?>" />
              <?php } // End if in array
      }// End foreach ?>
  </select>
        <?php }else{?>
      <select name="template_name" id="template_name" style="width:300px;">
          <?php
          foreach($query ->result() as $rows){
              if(!in_array($rows->website_template_id, unserialize(CUSTOM_TEMPLATE))){?>
                <option value="<?php echo $rows->website_template_id; ?>" <?php if($rows->website_template_id == $template_name ){ ?> selected="selected" <?php } ?> ><?php echo $rows->template_name; ?></option>
                  <?php } // End if in array
          }// End foreach ?>
      </select>
        <?php } // End if in array?>
</div>
  </div>
  <div class="control-group">
            <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('publish_status'); ?></label>
            <div class="controls">
            <?php $status=(isset($queryup[0]->web_status))? $queryup[0]->web_status : 1; ?>
              <label class="radio">
               <input type="radio" <?php if($status == 1){ ?> checked="checked" <?php } ?> value="1" id="optionsRadios1" name="web_status">
               <?php echo $this->lang->line('publish'); ?>
              </label>
              <label class="radio">
              <input type="radio" <?php if($status == 0){ ?> checked="checked" <?php } ?> value="0" id="optionsRadios2" name="web_status">
                <?php echo $this->lang->line('un_publish'); ?>
              </label>

            </div>
          </div>
</div>

</fieldset>
<fieldset class="sheet">
<div class="clear"></div>
<legend>  <?php echo $this->lang->line('settings_template'); ?></legend>
<div class="clear"></div>
<div class="content-inner-box">
 <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('default_listing_sort'); ?></label>
    <div class="controls">
      <select id="listing_order" name="listing_order">
          <?php
          $listing_order =(isset($queryup[0]->listing_order ))? $queryup[0]->listing_order  : set_value('listing_order ');
          $prov_status = $this->settings_model->settings_under_list(71);
          foreach ($prov_status->result() as $status ){
          ?>
            <option value="<?php echo $status->settings_id; ?>" <?php if($listing_order == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
              <?php } ?>
      </select>

    </div>
 </div>
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('change_sort_order'); ?></label>
    <div class="controls">
        <?php
        $user_change_listing=(isset($queryup[0]->user_change_listing))? $queryup[0]->user_change_listing : set_value('user_change_listing');
        ?>
      <label class="checkbox inline">
        <input type="radio" value="1" name="user_change_listing" <?php if($user_change_listing == 1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text">Yes</div>
      </label>
      <label class="checkbox inline">
        <input type="radio" value="0" <?php if($user_change_listing ==0 || $user_change_listing =="" ){?>  checked="checked" <?php } ?> name="user_change_listing" title="Check box"> <div class="radio_text">No</div>
      </label>

    </div>
  </div>
</div>
</fieldset>
  <fieldset class="sheet">
    <div class="clear"></div>
    <legend>  <?php echo $this->lang->line('customize_website'); ?></legend>
    <div class="clear"></div>
    <div class="content-inner-box">
      <div class="input_line" style=" width:525px;">

        <div style="float:right">
            <a class="btn btn-info btn-primary" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_template/'.$access_slug)?>"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('customize_template'); ?></a>
        </div>
        <div style="float:right; margin-right:20px;">
            <a class="btn btn-info btn-primary" href="<?php echo site_url($this->uri->segment(1,NULL).'/customize_menu/'.$access_slug)?>"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('customize_menu'); ?></a>
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
<?php $this->load->view('layouts/footer_admin'); ?>