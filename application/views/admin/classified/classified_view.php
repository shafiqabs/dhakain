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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,'none').'/classified/save/'.$access_slug)?>" method="post">
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
<style>
.parent_radio_text{width:763px; background:#f7f7f7; margin-bottom:5px; line-height:23px;}

</style>
<div id="loader">
    <?php
                    $query=$this->classified_model->categorylist($category_type=1,$category_id=0);
                    foreach ( $query->result() as $rows ){
                    $parentid=$this->classified_model->get_shop_parentid($agent_uid,$rows->category_id);
				    ?>

                    <div class="parent_radio_text">
                        <div class="parent_label">
                            <input title="Check box" name="parent_id[]" type="checkbox" class="parent" id="<?php  echo $rows->category_id; ?>" value="<?php  echo $rows->category_id; ?>" <?php if($rows->category_id == $parentid ){?>  checked="checked" <?php } ?> /><span><?php  echo $rows->category_name; ?></span></div>
                        <div class="clear"></div>

                <?php
				$query1=$this->classified_model->categorylist($category_type=1,$rows->category_id);
				foreach ( $query1->result() as $rows1 ){
				$categoryid=$this->classified_model->get_shop_categoryid($agent_uid,$rows1->category_id);
     			?>
                <div class="radio_text category_text"><input title="Check box" name="category_id[]" type="checkbox" value="<?php  echo $rows1->category_id; ?>" <?php if($rows1->category_id == $categoryid ){?>  checked="checked" <?php } ?>  class="check-<?php echo $rows->category_id; ?>" />
            <span><?php  echo $rows1->category_name; ?></span></div>
                  <?php } ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>

                    <?php } ?>
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
    $(document).ready(function(){

        $(".parent").live("click",function(){
                // Setup the click event listener for Home:

            var parentid=$(this).attr('id');
            //alert($('#'+parentid).is(':checked'));
            if($('#'+parentid).is(':checked') ==false){
                jQuery('.check-'+parentid+':checkbox:checked').removeAttr('checked');

            }else if($('#'+parentid).is(':checked') ==true){

                jQuery('.check-'+parentid+':checkbox:not(:checked)').attr('checked', 'checked');
                 // jQuery('.check-'+parentid).attr('checked','checked');
            }
	    });


    });

</script>