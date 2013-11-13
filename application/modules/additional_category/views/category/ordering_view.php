<?php $this->load->view('admin/layouts/header')?>

<ul class="" id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/store/'.$access_slug);?>" ><?php echo $store_name; ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/additional_category/listing/'.$access_slug);?>" ><?php echo $this->lang->line('additional_category'); ?></a></li>
    <li><?php echo $this->lang->line('additional_category_sorting'); ?></li>
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
<form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url('settings/product_category/product_category_ordering
')?>" method="post">
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
<div class="demo_jui">

<div class="clear"></div>
<?php foreach($parent as $parent ){ ?>
<div class="template_title">
<div class="input_line" style="text-align:left">&nbsp;
<div class="input_title" style="padding-left:10px; text-align:left;"><?php echo $this->product_category_model->category_name($parent->category_id); ?></div>
</div>
</div>
<div class="table_listing">
        <div class="clear"></div>
        <ul class="sorting">
            <?php
            $query=$this->product_category_model->listCustomSubCategory($access_slug,$parent->category_id);
            foreach($query as $child ){
             ?>
            <li id="listItem_<?php echo $child->category_id; ?>"><img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" /><strong><?php echo $child->category_name; ?></strong></li>
            <?php } ?>
        </ul>

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
<?php $this->load->view('admin/layouts/footer'); ?>

<script type="text/javascript">
    // When the document is ready set up our sortable with it's inherant function(s)
    $(document).ready(function() {
        $(".sorting").sortable({
            opacity: '0.5',
            axis:'vertically',
            handle : '.handle',
            update : function () {
                var order = $(this).sortable('serialize');
                $.ajax({
                    type: "POST",
                    url:"<?php echo site_url('additional_category/category/sorting/'.$access_slug)?>",
                    data:order,
                    cache: false,
                    success: function(html){
                        $('#loader').html(html);
                    }
                });
            }
        });
    });
</script>


    
	