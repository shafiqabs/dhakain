<?php $this->load->view('layouts/header_admin')?>

<ul class="" id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('global_settings'); ?></li> 
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
<form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url('settings/layouts/layouts_delete/'.$this->uri->segment(4,0))?>" method="post">    
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><a class="btn btn-danger" href="javascript:void(0)" ><i class="icon-trash icon-white"></i>All<?php echo $this->lang->line('delete'); ?></a></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
<div class="controls_action_button">
<!--  start step-holder -->
            <div id="step-holder">
    
			<div class="step-no-off">1</div>
			<div class="step-light-left"><a href="<?php echo site_url('settings/layouts')?>"><?php echo $this->lang->line('layouts'); ?></a></div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no">2</div>
            <div class="step-dark-left"><a href="<?php echo site_url('settings/layouts/layouts_list')?>"><?php echo $this->lang->line('layouts_list'); ?></a></div>
			<div class="step-dark-round">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>
<div class="demo_jui">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
<thead>
<tr>
<th><input type="checkbox" id="allchecked"   /></th>
<th><?php echo $this->lang->line('layouts_name'); ?></th>
<th><?php echo $this->lang->line('layouts_type'); ?></th>
<th><?php echo $this->lang->line('layouts_divide'); ?></th>
<th><?php echo $this->lang->line('status'); ?></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
                          
<?php 
$query=$this->db->get('settings_layout');
foreach ($query -> result() as $rows ){
?>


		<tr class="gradeX">
			<td><input type="checkbox" name="list[]" value="<?php echo $rows->settings_layout_id; ?>" /></td>
            <td><?php echo $rows->layout_name ?></td>
            <td><?php if( $rows->layout_type ==1){ echo $this->lang->line('horizontal'); }else{ echo $this->lang->line('vertical');} ?></td>
            <td><?php echo $rows->layout_divide;  ?></td>
             <td><?php if($rows->status ==1){ ?><a class="publish_img" rel="<?php echo $rows->settings_layout_id; ?>" id="<?php echo $rows->settings_layout_id; ?>" href="javascript:void(0);"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="<?php echo $rows->settings_layout_id; ?>" id="<?php echo $rows->settings_layout_id; ?>" href="javascript:void(0);"></a><?php } ?></td>

<td>
<a class="edit_img" href="<?php echo site_url('settings/layouts/layouts_edit')?>/<?php echo $rows->settings_layout_id ?>"></a>
<a id="<?php echo $rows->settings_layout_id ?>" class="delete_img" href="javascript:void(0)"></a></td>
</td>
		</tr>

<?php } ?>
    
   </tbody>
		            
</table>
                   
                    

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
	
	//$("#example").tablesorter({sortList:[[0,1]], widgets: ['zebra']});
	
   	oTable = $('#grid-table').dataTable({
		"bJQueryUI": true,
		"bPaginate": false,
		"bLengthChange": false,
		"sPaginationType": "full_numbers",
		"aoColumnDefs": [
      	{ "bSortable": false, "aTargets": [ 0,3,4,2,5] },
		{ "sWidth": "1%", "aTargets": [ 0 ] },
		{ "sWidth": "18%", "aTargets": [ 3 ] },
		{ "sWidth": "18%", "aTargets": [ 2 ] },
		{ "sWidth": "1%", "aTargets": [ 4 ] },
    	],
		"aaSorting": [[1,'asc']]
		
		
	});
	
	$(".btn-danger").click(function(){	
   
	    var jconfirm='Are sure went you submit ?';
        var confirm_title='Confirmation Dialog';
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
              window.location.href='<?php echo site_url('settings/layouts/layouts_delete');?>/'+id;
            }
        });
	})
       

});	
</script>


    
	