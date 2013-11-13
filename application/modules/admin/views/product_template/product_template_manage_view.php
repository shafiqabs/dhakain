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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/product_template/product_template_add')?>" method="post">
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
        <div class="step-light-left"><a href="<?php echo site_url('settings/product_template')?>"><?php echo $this->lang->line('product_multi_template'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no-off">2</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/product_template/product_single_template')?>"><?php echo $this->lang->line('product_single_template'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no">3</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/product_template/product_template_manage')?>"><?php echo $this->lang->line('product_template_manage'); ?></a></div>
        <div class="step-dark-right">&nbsp;</div>
        <div class="step-no-off">4</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/product_template/product_template_list')?>"><?php echo $this->lang->line('product_template_list'); ?></a></div>
        <div class="step-light-round">&nbsp;</div>
        <div class="clear"></div>
    </div>
<!--  end step-holder -->
</div>
<div class="clear"></div> 
<div class="content-inner-box">
         
          <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('product_template_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('product_template_name'); ?>" class="validate[required] input-xlarge span3" name="product_template_name" id="product_template_name" value="<?php echo(isset($queryup[0]->product_template_name))? $queryup[0]->product_template_name : set_value('product_template_name'); ?>" >
              <p class="help-block"><?php echo $this->lang->line('product_template_name_help'); ?></p>
            </div>
          </div>
          <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('product_template_type'); ?></label>
         <div class="controls">
                <?php $product_template_type=(isset($queryup[0]->product_template_type))? $queryup[0]->product_template_type : 1; ?>
              <label class="radio">
               <input type="radio" <?php if($product_template_type ==1){ ?> checked="checked" <?php } ?> value="1" id="optionsRadios1" name="product_template_type">
               <?php echo $this->lang->line('multiple_product'); ?>
              </label>
              <label class="radio">
              <input type="radio" value="0" <?php if($product_template_type ==2){ ?> checked="checked" <?php } ?> id="optionsRadios2" name="product_template_type">
                <?php echo $this->lang->line('single_product'); ?>
              </label>

            </div>
          </div>
        <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('product_template_layout'); ?></label>
            <div class="controls">
                <input type="text" placeholder="Type <?php echo $this->lang->line('product_template_layout'); ?>" class="validate[required] input-xlarge span3" name="product_template_layout" id="product_template_layout" value="<?php echo(isset($queryup[0]->product_template_layout))? $queryup[0]->product_template_layout : set_value('product_template_layout'); ?>" >
                <p class="help-block"><?php echo $this->lang->line('product_template_layout_help'); ?></p>
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
              <input type="hidden"  name="product_template_manage_id" id="product_template_manage_id" value="<?php echo(isset($queryup[0]->product_template_manage_id))? $queryup[0]->product_template_manage_id : set_value('product_template_manage_id'); ?>" />
              <input type="hidden" name="old_product_template_table_name" id="old_product_template_table_name" value="<?php echo(isset($queryup[0]->product_template_table_name))? $queryup[0]->product_template_table_name : set_value('old_product_template_table_name'); ?>"  />
			<input type="hidden"  name="old_product_template_layout" id="old_product_template_layout" value="<?php echo(isset($queryup[0]->product_template_layout))? $queryup[0]->product_template_layout : set_value('old_product_template_layout'); ?>" />

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