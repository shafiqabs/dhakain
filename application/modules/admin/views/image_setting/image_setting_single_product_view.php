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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/image_setting/image_setting_single_product_add'); ?>" method="post">
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
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_product')?>"><?php echo $this->lang->line('image_setting_category'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no">2</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/image_setting/image_setting_single_product')?>"><?php echo $this->lang->line('image_setting_single_product'); ?></a></div>
        <div class="step-dark-right">&nbsp;</div>
        <div class="step-no-off">3</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_product_manage')?>"><?php echo $this->lang->line('image_setting_product'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no-off">5</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting_product/image_setting_product_list')?>"><?php echo $this->lang->line('image_setting_product_list'); ?></a></div>
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
               <select id="settings_image_size_id" name="settings_image_size_id" style="width:350px;" >
                   <option value="0"><?php echo $this->lang->line('select_image_size'); ?></option>
                   <?php
                   $settings_image_size_id = $this->uri->segment(4,0);
                   $this->db->where(array('image_setting_type'=>1,'image_size_type'=>2));
                   $shop=$this->db->get('settings_image_size');
                        $query=$shop->result();
                        foreach ($query as $reg4 ){
                        ?>
                        <option value="<?php echo $reg4->settings_image_size_id ; ?>" <?php if($reg4->settings_image_size_id  == $settings_image_size_id  ){ ?> selected="selected" <?php }?>  ><?php echo ($reg4->settings_image_name ); ?></option>
                        <?php } ?>
                    </select>
            </div>
          </div>
          <div class="control-group">
            <label for="select02" class="control-label"><?php echo $this->lang->line('product_category'); ?></label>
            <div class="controls">
            <?php
			$parent_id=isset($queryup[0]->category_id)? $queryup[0]->category_id : set_value('');
            $arr=(unserialize($parent_id));
            echo $this->product_category_model->category_list($arr[0]);
            ?>
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
</div>
<form action="<?php site_url('settings/product_template/product_single_template_delete')?>" id="delete_list" name="delete_list">
<div class="demo_jui">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
<thead>
<tr>
<th>&nbsp;</th>
<th><?php echo $this->lang->line('image_setting_name'); ?></th>
<th><?php echo $this->lang->line('product_category'); ?></th>
<th><?php echo $this->lang->line('status'); ?></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
<?php
$query=$this->db->where(array('image_setting_type'=>1,'image_size_type'=>2))->get('settings_image_size');
foreach ($query -> result() as $rows ){
?>
<tr class="gradeX">
<td><input type="checkbox" name="list[]" value="<?php echo $rows->settings_image_size_id ?>" /></td>
<td><?php echo $rows->settings_image_name; ?></td>
<td><?php $arr=(unserialize($rows->category_id)); echo $this->product_category_model->category_name($arr[0]); ?></td>
<td><?php if($rows->status ==1){ ?><a class="publish_img" rel="<?php echo $rows->settings_image_size_id; ?>" id="<?php echo $rows->settings_image_size_id; ?>" href="javascript:void(0);"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="<?php echo $rows->settings_image_size_id; ?>" id="<?php echo $rows->settings_image_size_id; ?>" href="javascript:void(0);"></a><?php } ?></td>
<td>
<a class="edit_img" href="<?php echo site_url('settings/image_setting/image_setting_single_product_edit/'.$rows->settings_image_size_id)?>"></a>
<a id="<?php echo $rows->settings_image_size_id ?>" class="delete_img" href="javascript:void(0)"></a>
</td>
</tr>
<?php } ?>
</tbody>

</table>
</div>
</form>

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
<script language="javascript">
$(document).ready(function(){

	//$("#example").tablesorter({sortList:[[0,1]], widgets: ['zebra']});

   	oTable = $('#grid-table').dataTable({
		"bJQueryUI": true,
		"bPaginate": false,
		"bLengthChange": false,
		"sPaginationType": "full_numbers",
		"aoColumnDefs": [
      	{ "bSortable": false, "aTargets": [ 0,3,4 ] },
		{ "sWidth": "1%", "aTargets": [ 0 ] },
        { "sWidth": "2%", "aTargets": [ 3 ] },
        { "sWidth": "13%", "aTargets": [ 4 ] }
    	],
		"aaSorting": [[1,'asc'], [2,'asc']]


	});

	$(".btn-danger").click(function(){

	    var jconfirm='<?php echo $this->lang->line('confirm_msg'); ?>';
        var confirm_title='<?php echo $this->lang->line('confirm_dialog_msg'); ?>';
        jConfirm(jconfirm,confirm_title,function(r) {
            if(r){
                document.delete_list.submit();
            }
        });
	})

	$(".delete_img").click(function(){

		var id=$(this).attr('id');
	    var jconfirm='<?php echo $this->lang->line('confirm_msg'); ?>';
        var confirm_title='<?php echo $this->lang->line('confirm_dialog_msg'); ?>';
        jConfirm(jconfirm,confirm_title,function(r) {
            if(r){
              window.location.href='<?php echo site_url('settings/image_setting/image_setting_single_product_delete');?>/'+id;
            }
        });
	})


});
</script>
