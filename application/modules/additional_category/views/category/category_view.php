<?php $this->load->view('admin/layouts/header')?>
<ul class="" id="breadcrumbs" >
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/store/'.$access_slug);?>" ><?php echo $store_name; ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/additional_category/listing/'.$access_slug);?>" ><?php echo $this->lang->line('additional_category'); ?></a></li>
    <li><?php echo $this->lang->line('add_product_category'); ?></li>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/additional_category/save/'.$access_slug)?>" method="post">
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
            <label for="select01" class="control-label"><?php echo $this->lang->line('parents_name'); ?></label>
            <div class="controls">
              <select id="parent_id" name="parent_id" style="width:200px;">
                  <?php
                  $parent_id=(isset($queryup[0]->parent_id))? $queryup[0]->parent_id : set_value('parent_id');

                  foreach ($query as $reg4 ){
                  $selected = $reg4->category_id == $parent_id ? 'selected="selected"':'';
                  ?>
                    <option value="<?php echo $reg4->category_id; ?>" <?php echo $selected; ?> ><?php echo $this->settings_model->category_name($reg4->category_id); ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>

       <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('product_category_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('product_category_name'); ?>" class="validate[required]" name="category_name" id="category_name" value="<?php echo(isset($queryup[0]->category_name))? $queryup[0]->category_name : set_value('category_name'); ?>" >
              <p class="help-block"><?php echo $this->lang->line('product_category_name_help'); ?></p>
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

           <input type="hidden" name="category_id" id="category_id" value="<?php echo(isset($queryup[0]->category_id))? $queryup[0]->category_id : set_value('category_id'); ?>"  />

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