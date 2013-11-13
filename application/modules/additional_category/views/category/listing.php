<?php $this->load->view('admin/layouts/header')?>
<ul class="" id="breadcrumbs" xmlns="http://www.w3.org/1999/html">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/store/'.$access_slug);?>" ><?php echo $store_name; ?></a></li>
    <li><?php echo $this->lang->line('additional_category'); ?></li>
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
<form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url('settings/product_category/product_category_delete/'.$this->uri->segment(4,0))?>" method="post">
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>

    </div>
    <div class="info_message">
        <h4 class="alert-heading" style="text-align: center"><?php echo $store_name; ?></h4>
    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
    <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
<div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
<thead>
<tr>
<th><?php echo $this->lang->line('product_category_name'); ?></th>
<th><?php echo $this->lang->line('parent_name'); ?></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
                          
<?php

foreach ($query -> result() as $rows ){
?>
		<tr class="gradeX">
            <td><?php echo $rows->category_name; ?></td>
			<td><?php echo $this->product_category_model->category_parent($rows->parent_id);  ?></td>
			<td class="center">
            <?php if($rows->status ==1){ ?><a class="publish_img" href="<?php echo site_url($this->uri->segment(1,0).'/additional_category/status/'.$access_slug.'/'.$rows->category_id )?>"></a><?php } else { ?><a class="unpublish_img"  href="<?php echo site_url($this->uri->segment(1,0).'/additional_category/status/'.$access_slug.'/'.$rows->category_id )?>"></a><?php } ?>
            <a class="edit_img" href="<?php echo site_url($this->uri->segment(1,0).'/additional_category/edit/'.$access_slug )?>/<?php echo $rows->category_id ?>"></a>
			<a rel="<?php echo site_url($this->uri->segment(1,0).'/additional_category/delete/'.$access_slug ); ?>/<?php echo $rows->category_id ?>" class="delete_img" href="javascript:void(0)"></a>
			<!--<a id="2" class="view_img popup-window" href="javascript:void(0);"></a>-->
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
<?php $this->load->view('admin/layouts/footer'); ?>
<script language="javascript">
$(document).ready(function(){
	
   	oTable = $('#grid-table').dataTable({
		"bJQueryUI": true,
		"bPaginate": false,
		"bLengthChange": false,
		"sPaginationType": "full_numbers",
		"aoColumnDefs": [
      	{ "bSortable": false, "aTargets": [ 2] },
		{ "sWidth": "25%", "aTargets": [ 1 ] },
		{ "sWidth": "15%", "aTargets": [ 2 ] }
    	],
		"aaSorting": [[1,'asc'], [0,'asc']]
		
		
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


    
	