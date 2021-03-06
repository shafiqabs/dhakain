<?php $this->load->view('admin/layouts/header')?>
    <ul id="breadcrumbs">
        <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
        <li><a href="<?php echo site_url($this->uri->segment(1,0));?>" ><?php echo $this->uri->segment(1,0); ?></a></li>
        <li><?php echo $store_name; ?>'info</li>
        <li id="breadcrumb-right"><button class="btn  btn-info" id="addStore" data-toggle="modalx" href="#shoppingserviceModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_service'); ?></button></li>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,NULL).'/options/save/'.$access_slug)?>" method="post">
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
   <label class="control-label"><?php echo $this->lang->line('user_name'); ?></label>
   <div class="controls">
     <input type="text" name="user_name" id="user_name" value="<?php echo(isset($queryup[0]->user_name))? $queryup[0]->user_name : set_value('user_name'); ?>"  />
   </div>
 </div>
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('new_password'); ?></label>
    <div class="controls">
      <input type="text" placeholder="Type <?php echo $this->lang->line('password'); ?>" class="" name="password" id="password" value="" >
    </div>
  </div>
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('con_password'); ?></label>
    <div class="controls">
      <input type="text" placeholder="Type <?php echo $this->lang->line('con_password'); ?>" class="" name="con_password" id="con_password" value="" >
    </div>
  </div>
</div>

</fieldset>
<?php
$website=(isset($queryup[0]->publish_main_website))? $queryup[0]->publish_main_website : set_value('publish_main_website');
if( $this->session->userdata('useraccess') !="3" ){
?>
<fieldset class="sheet">
<div class="clear"></div>
<legend>  <?php echo $this->lang->line('website'); ?></legend>
<div class="clear"></div>
<div class="content-inner-box">
  <div class="control-group">
    <label for="input01" class="control-label"><?php echo $this->lang->line('publish_website'); ?></label>
    <div class="controls">
        <?php $publish_main_website=(isset($queryup[0]->publish_main_website))? $queryup[0]->publish_main_website : set_value('publish_main_website'); ?>
      <label class="checkbox inline">
        <input type="radio" value="1" name="publish_main_website" <?php if($publish_main_website ==1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text">Yes</div>
      </label>
      <label class="checkbox inline">
        <input type="radio"  value="0" name="publish_main_website" title="Check box" <?php if($publish_main_website ==0 || $publish_main_website ==""  ){?>  checked="checked" <?php } ?> > <div class="radio_text">No</div>
      </label>

    </div>
  </div>

</div>
</fieldset>
<?php } ?>

        <fieldset class="sheet">
          <div class="clear"></div>
          <legend>  <?php echo $this->lang->line('using_shopping_cart'); ?></legend>
          <div class="clear"></div>
          <div class="content-inner-box">
           <div class="control-group">
              <label for="input01" class="control-label"><?php echo $this->lang->line('using_shopping_cart'); ?></label>
              <div class="controls">
                  <?php $using_shopping_cart=(isset($queryup[0]->using_shopping_cart))? $queryup[0]->using_shopping_cart : set_value(0); ?>
                <label class="checkbox inline">
                  <input type="radio" value="1" name="using_shopping_cart" <?php if($using_shopping_cart ==1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                </label>
                <label class="checkbox inline">
                  <input type="radio"  value="0" name="using_shopping_cart" title="Check box" <?php if($using_shopping_cart ==0 || $using_shopping_cart ==""  ){?>  checked="checked" <?php } ?> > <div class="radio_text"><?php echo $this->lang->line('no'); ?></div>
                </label>
              </div>
            </div>
          </div>
        </fieldset>
      <?php

      if( $settings_shopping_cart ==1 && $this->session->userdata('useraccess') !="3" ){
      ?>
<fieldset class="sheet">
    <div class="clear"></div>
    <legend>  <?php echo $this->lang->line('choose_transaction'); ?></legend>
    <div class="clear"></div>
    <div class="content-inner-box">
      <div class="control-group">
        <label for="input01" class="control-label"><?php echo $this->lang->line('choose_transaction'); ?></label>
        <div class="controls">
            <?php $choose_transaction=(isset($queryup[0]->choose_transaction))? $queryup[0]->choose_transaction : set_value(2); ?>
          <label class="checkbox inline">
            <input type="radio" value="1" name="choose_transaction" <?php if($choose_transaction ==1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text"><?php echo $this->lang->line('direct_cart'); ?></div>
          </label>
          <label class="checkbox inline">
            <input type="radio"  value="2" name="choose_transaction" title="Check box" <?php if($choose_transaction ==2 || $choose_transaction ==0  ){?>  checked="checked" <?php } ?> > <div class="radio_text"><?php echo $this->lang->line('via_cart'); ?></div>
          </label>
         </div>
      </div>
       </div>
  </fieldset>

    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('settings_shopping_cart'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">
        <div class="input_line" style=" width:525px;">

          <div style="float:right">
            <a class="btn btn-info btn-primary" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_general_option/'.$agent_uid)?>"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('settings_general_option'); ?></a>
          </div>
          <div style="float:right; margin-right:20px;">
            <a class="btn btn-info btn-primary" href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_bank/'.$agent_uid)?>"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('settings_bank'); ?></a>
          </div>
        </div>
      </div>
    </fieldset>
<?php } ?>
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