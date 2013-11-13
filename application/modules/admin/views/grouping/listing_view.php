<?php $this->load->view('layouts/header_admin')?>

<ul class="" id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('grouping'); ?></li> 
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
<form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url('settings/grouping/grouping_delete/'.$this->uri->segment(4,0))?>" method="post">
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>

    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
<div class="controls_action_button">
<!--  start step-holder -->
    <div id="step-holder">

        <div class="step-no-off">1</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/grouping')?>"><?php echo $this->lang->line('grouping'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no">2</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/grouping/listing/0')?>"><?php echo $this->lang->line('grouping_list'); ?></a></div>
        <div class="step-dark-right">&nbsp;</div>
        <div class="step-no-off">3</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/grouping/grouping_ordering')?>"><?php echo $this->lang->line('grouping_ordering'); ?></a></div>
        <div class="step-light-round">&nbsp;</div>
        <div class="clear"></div>
    </div>
<!--  end step-holder -->
</div>
<div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
<thead>
<tr>
<th><?php echo $this->lang->line('grouping_name'); ?></th>
<th><?php echo $this->lang->line('parent_name'); ?></th>
<th><?php echo $this->lang->line('status'); ?></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
                          
<?php 
foreach ($paging[0]  as $rows ){
?>
		<tr class="gradeX">

            <td><?php echo $rows->name; ?></td>
			<td><?php echo $rows->parent_name;  ?></td>
            <td><?php if($rows->status ==1){ ?><a class="publish_img" rel="<?php echo $rows->random_id; ?>" id="<?php echo $rows->random_id; ?>" href="javascript:void(0);"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="<?php echo $rows->random_id; ?>" id="<?php echo $rows->random_id; ?>" href="javascript:void(0);"></a><?php }else if($rows->status ==2){ ?><a class="delete_img" rel="<?php echo $rows->random_id; ?>" id="<?php echo $rows->random_id; ?>" href="javascript:void(0);"></a><?php } ?></td>
			<td class="center">
            <a class="edit_img" href="<?php echo site_url('settings/grouping/edit')?>/<?php echo $rows->random_id ?>"></a>
			<a rel="<?php echo site_url('settings/grouping/delete/'.$this->uri->segment(4,0)); ?>/<?php echo $rows->random_id ?>" class="delete_img" href="javascript:void(0)"></a>

</td>
		</tr>

<?php } ?>
              </tbody>
		            
        			</table>
    <?php  if(!empty($paging[1])){ echo $paging[1]; } ?>
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

<script language="javascript">
$(document).ready(function(){
	
   	oTable = $('#grid-table').dataTable({
		"bJQueryUI": true,
		"bPaginate": false,
		"bLengthChange": false,
		"sPaginationType": "full_numbers",
		"aoColumnDefs": [
      	{ "bSortable": false, "aTargets": [2,3] },
		{ "sWidth": "2%", "aTargets": [2] }
    	],
		"aaSorting": [[0,'asc']]
	});

	$(".delete_img").click(function(){	
  	
        var rel=$(this).attr('rel');
	    var jconfirm='Are sure went you submit ?';
        var confirm_title='Confirmation Dialog';
        jConfirm(jconfirm,confirm_title,function(r) {
            if(r){
              window.location.href=rel;
            }
        });
	})
       

});	
</script>

    
	