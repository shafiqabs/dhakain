<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('layouts'); ?></li> 
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/layouts/layouts_add')?>" method="post" enctype="multipart/form-data">    
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
			<div class="step-dark-left"><a href="javascript:void();"><?php echo $this->lang->line('layouts'); ?></a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
            <div class="step-light-left"><a href="<?php echo site_url('settings/layouts/layouts_list')?>"><?php echo $this->lang->line('layouts_list'); ?></a></div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>
<div class="clear"></div> 
<div class="content-inner-box">
         
          <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('layouts_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type layouts name" class="validate[required] input-xlarge span3" name="layout_name" id="layout_name" value="<?php echo(isset($queryup[0]->layout_name))? $queryup[0]->layout_name : set_value('layout_name'); ?>" >            
              <p class="help-block"><?php echo $this->lang->line('layouts_name_help'); ?></p>
            </div>
          </div>
          <div class="control-group">
            <label for="select01" class="control-label"><?php echo $this->lang->line('layouts_type'); ?></label>
            <div class="controls">
                <?php $layout_type=(isset($queryup[0]->layout_type))? $queryup[0]->layout_type : set_value('layout_type'); ?>
            	<select name="layout_type" id="layout_type">
           		<option value="1" <?php if($layout_type =='1'){ ?> selected="selected" <?php } ?> ><?php  echo $this->lang->line('horizontal'); ?></option>
            	<option value="2" <?php if($layout_type =='2'){ ?> selected="selected" <?php } ?>><?php  echo $this->lang->line('vertical'); ?></option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label for="multiSelect" class="control-label"><?php echo $this->lang->line('number_of_layout'); ?></label>
            <div class="controls">
                <select name="column_no" id="column_no">
             <?php $column_no=(isset($queryup[0]->column_no))? $queryup[0]->column_no : set_value('column_no'); ?>
            <option value="1" <?php if($column_no ==1){ ?> selected="selected" <?php } ?> >1</option>
            <option value="2"  <?php if($column_no ==2){ ?> selected="selected" <?php } ?>  >2</option>
            <option value="3"  <?php if($column_no ==3){ ?> selected="selected" <?php } ?>  >3</option>
            </select>
            </div>
          </div>

          <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('layouts_divide'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type layouts name" class="validate[required] input-xlarge span3" name="layout_divide" id="layout_divide" value="<?php echo(isset($queryup[0]->layout_divide))? $queryup[0]->layout_divide : set_value('layout_divide'); ?>" >            
              <p class="help-block"><?php echo $this->lang->line('layouts_divide_help'); ?></p>
            </div>
          </div>
          
          <div class="control-group">
            <label for="fileInput" class="control-label"><?php echo $this->lang->line('layouts_image'); ?></label>
            <div class="controls">
                <?php $image_name=(isset($queryup[0]->image_name))? $queryup[0]->image_name : set_value('image_name'); ?>
                <input type="file" id="file" name="image_name" class="<?php if(!$image_name){?>validate[required]<?php } ?> input-file" >
            </div>
	        <?php
			if($image_name){
			?>
             <span style="margin-left:170px; color:#3f5475; font-size:11px;"> <img src="<?php echo DOMAIN_IMAGE_PATH.$queryup[0]->layout_image ?>" height="50p" width="50" /></span>  
        <?php }else{ ?>
        <span style="margin-left:170px; color:#3f5475; font-size:11px;"> <img src="<?php echo base_url()?>assets/images/noimage.jpg" height="50p" width="50" /></span>
    	<?php } ?>
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
			<input type="hidden"  name="settings_layout_id" id="settings_layout_id" value="<?php echo(isset($queryup[0]->settings_layout_id))? $queryup[0]->settings_layout_id : set_value('settings_layout_id'); ?>" />
           <input type="hidden" name="old_layout_name" id="old_layout_name" value="<?php echo(isset($queryup[0]->layout_name))? $queryup[0]->layout_name : set_value('old_layout_name'); ?>"  />
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
<script language="javascript" type="text/javascript">

$(function() {
		$("input[type=file]").filestyle({ 
			image: "<?php echo base_url()?>/assets/images/upload_file.gif",
			imagewidth :78,
			imageheight : 29,
			width :145
		});
		$("select").searchable();

});
</script>
