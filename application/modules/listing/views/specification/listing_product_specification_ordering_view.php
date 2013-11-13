<?php $this->load->view('layouts/header_admin')?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
<ul id="breadcrumbs">
  <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
  <li><a href="<?php echo site_url('seller');?>" ><?php echo $this->lang->line('seller'); ?></a></li>
  <li><?php echo $this->shop_model->shop_name($this->uri->segment(4,0)); ?>'info</li>
    <li id="breadcrumb-right"><button class="btn  btn-info" id="add_product" data-toggle="modal" href="#myModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_new_product'); ?></button></li>
</ul>

<div class="clear"></div>   
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('seller/seller_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('seller/seller_layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('seller/listing_product/add_listing_specification/'.$this->uri->segment(4,0).'/'.$this->uri->segment(5,0))?>" method="post">
<div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('seller/seller_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
    <div class="info_message">
    <h4 class="alert-heading" style="text-align: center"><?php echo $this->shop_model->shop_name($this->uri->segment(4,0)); ?></h4>
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
<?php $this->load->view('seller/seller_layouts/product_breadcrumbs'); ?>
<div class="clear"></div>
<div class="content-inner-box">

  <style>
       .sort-list {
          list-style: none;
          margin-top: 20px;

      }

      .sort-list li {
          display: block;
          padding: 5px 10px; margin-bottom: 3px;
          background-color: #efefef;
      }

      .sort-list img.handle {
          cursor: move;
          float: left;
          margin-right: 20px;
      }

  </style>
<br>
        <ul class="sort-list">
            <li><strong style="width: 200px; margin-left: 37px; display: inline-block;" >Label Name</strong><span>Meta Value</span></li>
            <?php
                $i=1;
                foreach( $specific_value->result() as $list ):
                ?>
                <li id="listItem_<?php echo $list->additional_id; ?>"><img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" /><strong style="width: 200px; display: inline-block;" ><?php echo $list->label_name; ?></strong><?php echo $list->meta_value; ?></li>
                <?php $i++; endforeach; ?>
				</ul>


    <div class="clear"></div>

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
<?php $this->load->view('seller/listing_product/add_product')?>
<?php $this->load->view('layouts/footer_admin'); ?>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
    // When the document is ready set up our sortable with it's inherant function(s)
    $(document).ready(function() {
        $(".sort-list").sortable({
            opacity: '0.5',
            axis:'vertically',
            handle : '.handle',
            update : function () {
                var order = $(this).sortable('serialize');
                $.ajax({
                    type: "POST",
                    url:"<?php echo site_url('seller/listing_product/product_specification_ordering')?>",
                    data:order,
                    cache: false,
                    success: function(html){}
                });
            }
        });
    });
</script>