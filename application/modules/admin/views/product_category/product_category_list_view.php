<?php $this->load->view('layouts/header_admin')?>

<ul class="" id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('product_category'); ?></li> 
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
<form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url('settings/product_category/product_category_delete/'.$this->uri->segment(4,0))?>" method="post">
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><a class="btn btn-danger" href="javascript:void(0)" ><i class="icon-trash icon-white"></i><?php echo $this->lang->line('all_delete'); ?></a></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
<div class="controls_action_button">
<!--  start step-holder -->
            <div id="step-holder">
            <div class="step-no-off">1</div>
			<div class="step-light-left"><a href="<?php echo site_url('settings/product_category')?>"><?php echo $this->lang->line('product_category'); ?></a></div>
			<div class="step-light-right">&nbsp;</div>
            <div class="step-no">2</div>
            <div class="step-dark-left"><a href="<?php echo site_url('settings/product_category/product_category_list/0')?>"><?php echo $this->lang->line('product_category_list'); ?></a></div>
            <div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">3</div>
            <div class="step-light-left"><a href="<?php echo site_url('settings/product_category/product_category_ordering')?>"><?php echo $this->lang->line('product_category_ordering'); ?></a></div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>
<div>
<?php 
$arr=$this->paging_model->product_category_paging($per_page = 20,$num_link =3);	
$query=($arr[0]);
$paging=($arr[1]);
?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
<thead>
<tr>
<th><input type="checkbox" id="allchecked"   /></th>
<th><?php echo $this->lang->line('product_category_name'); ?></th>
<th><?php echo $this->lang->line('parent_name'); ?></th>
<th><?php echo $this->lang->line('status'); ?></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
                          
<?php 
foreach ($query -> result() as $rows ){
?>
		<tr class="gradeX">
			<td><input type="checkbox" name="list[]" value="<?php echo $rows->category_id; ?>" /></td>
            <td><?php echo $rows->category_name; ?></td>
			<td><?php echo $this->product_category_model->category_parent($rows->parent_id);  ?></td>
            <td><?php if($rows->status ==1){ ?><a class="publish_img" rel="<?php echo $rows->category_id; ?>" id="<?php echo $rows->category_id; ?>" href="javascript:void(0);"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="<?php echo $rows->category_id; ?>" id="<?php echo $rows->category_id; ?>" href="javascript:void(0);"></a><?php }else if($rows->status ==2){ ?><a class="delete_img" rel="<?php echo $rows->category_id; ?>" id="<?php echo $rows->category_id; ?>" href="javascript:void(0);"></a><?php } ?></td>
			<td class="center">
            <a class="edit_img" href="<?php echo site_url('settings/product_category/product_category_edit')?>/<?php echo $rows->category_id ?>"></a>
			<a rel="<?php echo site_url('settings/product_category/product_category_delete/'.$this->uri->segment(4,0)); ?>/<?php echo $rows->category_id ?>" class="delete_img" href="javascript:void(0)"></a>
			<!--<a id="2" class="view_img popup-window" href="javascript:void(0);"></a>-->
</td>
		</tr>

<?php } ?>
              </tbody>
		            
        			</table>
                    <?php //if (isset($paging)){echo $paging; } ?>
                    

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
      	{ "bSortable": false, "aTargets": [ 0,3,4 ] },
		{ "sWidth": "1%", "aTargets": [ 0 ] },
		{ "sWidth": "2%", "aTargets": [ 3 ] },
		{ "sWidth": "10%", "aTargets": [ 4 ] },
    	],
		"aaSorting": [[1,'asc'], [2,'asc']]
		
		
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


    
	