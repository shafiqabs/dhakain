<?php $this->load->view('layouts/header_admin')?>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,'none').'/disclaimer/save/'.$access_slug)?>" method="post">
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
         <div class="control-group" >
             <label  class="control-label control-label-textarea"><?php echo $this->lang->line('disclaimer'); ?></label>
         </div>
         <div class="control-group" >
             <textarea name="disclaimer" id="disclaimer" class="input-textarea-large" rows="" cols=""><?php echo(isset($queryup[0]->disclaimer))? $queryup[0]->disclaimer : set_value('disclaimer'); ?></textarea>
         </div>
     </div>

 </fieldset>

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
