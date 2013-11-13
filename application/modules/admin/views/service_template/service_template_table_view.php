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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/product_template/product_template_table_value/'.$this->uri->segment(4,0))?>" method="post">
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
        <div class="step-no-off">3</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/product_template/product_template_manage')?>"><?php echo $this->lang->line('product_template_manage'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no">4</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/product_template/product_template_list')?>"><?php echo $this->lang->line('product_template_list'); ?></a></div>
        <div class="step-dark-round">&nbsp;</div>
        <div class="clear"></div>
    </div>
<!--  end step-holder -->
</div>
<div class="clear"></div>
     <div style="float: right; margin-bottom: 20px;">
     <div style="float: left; width:645px; line-height: 25px; font-weight: bold;">Template name: <?php echo $managequery[0]->product_template_name; ?></div><a href="javascript:void(0)" class="btn btn-small btn-primary newrows" ><?php echo $this->lang->line('add_additional_field'); ?></a>
     </div>
     <div class="clear"></div>
<div class="content-inner-box">
        <style type="text/css">
            textarea.span3{ width: 425px; height: 50px;}
        </style>

        <?php if($tempvalue->num_rows()> 0){
        $i=0;
		foreach ($tempvalue->result() as $addup ){
        ?>

            <div class="control-group <?php if($i==0){ echo "addrow"; } ?>">
                <div class="input-prepend">
                    <span class="add-on">Label name</span><input type="text" size="16" name="meta_label[]" id="prependedInput" class="validate[required] span2" value="<?php echo(isset($addup->meta_label))? $addup->meta_label : set_value('meta_label'); ?>">
                </div>
                <div class="controls" style="margin-left: 0px; float: right;">
    
                    <textarea  class="validate[required] input-xlarge span3 small_textarea" name="meta_description[]" id="meta_description" ><?php echo(isset($addup->meta_description))? $addup->meta_description : set_value('meta_description'); ?></textarea><a style="margin-left:20px; " href="javascript:void(0)" class="btn btn-danger removerows"><i class="icon-trash icon-white"></i></a>
                    <p class="help-block"><?php echo $this->lang->line('made_in_help'); ?></p>
                </div>
            </div>
        <?php }}else{ ?>
        <div class="control-group addrow">
            <div class="input-prepend">
                <span class="add-on">Label name</span><input type="text" size="16" name="meta_label[]" id="prependedInput" class="validate[required] span2" value="">
            </div>
            <div class="controls" style="margin-left: 0px; float: right;">

                <textarea  class="validate[required] input-xlarge span3 small_textarea" name="meta_description[]" id="meta_description" ></textarea><a style="margin-left:20px; " href="javascript:void(0)" class="btn btn-danger removerows"><i class="icon-trash icon-white"></i></a>
                <p class="help-block"><?php echo $this->lang->line('made_in_help'); ?></p>
            </div>
        </div>
        <?php } ?>
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

        $(".newrows").click(function(){
            $(".addrow").clone(true).insertAfter(".addrow");
            $(".addrow:last input").val("");
            $(".addrow:last").removeClass("addrow");

        });

        $(".removerows").live('click', function(){
            $(this).parent().parent().remove();
            return false;
        });



    })

</script>