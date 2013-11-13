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
<form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url('settings/product_category/product_category_ordering
')?>" method="post">
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
<div class="controls_action_button">
<!--  start step-holder -->

    <div id="step-holder">
        <div class="step-no-off">1</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/product_category')?>"><?php echo $this->lang->line('product_category'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no-off">2</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/product_category/product_category_list/0')?>"><?php echo $this->lang->line('product_category_list'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no">3</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/product_category/product_category_ordering')?>"><?php echo $this->lang->line('product_category_ordering'); ?></a></div>
        <div class="step-dark-round">&nbsp;</div>
        <div class="clear"></div>
    </div>

<!--  end step-holder -->
</div>
<div class="demo_jui">
    <div style="color:#286C99; font-weight:bold; margin-top: 25px; padding-left:10px; background:#f4f5f8; padding-bottom:5px; padding-top:5px; margin-bottom:10px; border-bottom:1px solid #286C99;">
        <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('parents_name'); ?></label>
            <div class="controls">
                <?php
                $parent_id=(isset($queryup[0]->parent_id))? $queryup[0]->parent_id : '0' ;
                echo $this->product_category_model->category_list($parent_id);
                ?>

                <button type="submit" class="btn btn-primary"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('change_ordering'); ?></button>
                <p class="help-block"><?php echo $this->lang->line('change_ordering_help'); ?></p>
            </div>
        </div>


    </div>
    <div class="clear"></div>
    <div class="table_listing">
        <div class="clear"></div>
        <ul class="test-list">
            <?php
            $this->db->where('parent_id',$parent_id);
            $this->db->order_by('ordering','asc');
            $query=$this->db->get('product_category');
            foreach($query->result() as $child){
                ?>
                <li id="listItem_<?php echo $child->category_id; ?>"><img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" /><strong><?php echo $this->product_category_model->category_name($child->category_id); ?></strong></li>
                <?php } ?>
        </ul>

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
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
    // When the document is ready set up our sortable with it's inherant function(s)
    $(document).ready(function() {
        $(".test-list").sortable({
            opacity: '0.5',
            axis:'vertically',
            handle : '.handle',
            update : function () {
                var order = $(this).sortable('serialize');
                $.ajax({
                    type: "POST",
                    url:"<?php echo site_url('settings/product_category/product_category_sorting')?>",
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
<style>
    .test-list {
        list-style: none;
    }

    .test-list li {
        display: block;
        padding: 5px 10px; margin-bottom: 3px;
        background-color: #efefef;
    }

    .test-list li img.handle {
        margin-right: 20px;
        cursor: move;
    }


</style>

    
	