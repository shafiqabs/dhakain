<?php $this->load->view('admin/layouts/header')?>

<ul class="" id="breadcrumbs" >
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/websites/'.$access_slug);?>" ><?php echo $this->lang->line('website'); ?></a></li>
    <li><?php echo $this->lang->line('customize_menu'); ?></li>
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
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
    <div class="submit-action">
      <ul><li><button href="#myModal" data-toggle="modal" id="add-menu" class="btn  btn-info"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_menu'); ?></button></li><li><button href="#myModal" data-toggle="modal" id="add-submenu" class="btn  btn-info"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_submenu'); ?></button></li></ul></div>
    </div>
    <div class="info_message">
        <h4 class="alert-heading" style="text-align: center"><?php echo $store_name; ?></h4>
    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
    <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
<div class="demo_jui">

<div class="clear"></div>

<div class="table_listing">
        <div class="clear"></div>
        <ul class="menu-sorting list-sorting">
            <?php

            $agent_uid=$storeInfo[0]->agent_uid;
            $menu = $this->customize_menu_model->get_menu($agent_uid);
            foreach($menu->result() as $row_menu){
            $menu_id = $row_menu->menu_id;
            ?>
            <li id="listItem_<?php echo $menu_id; ?>">
              <a class="menu-block"  href="javascript:"><img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" /><strong id="rename-<?php echo $row_menu->menu_id; ?>" ><?php echo $row_menu->menu_name; ?></strong>
                <span class="right-img">
                  <span><img title="delete" class="delete_menu" id="<?php echo $menu_id; ?>" src="<?php echo base_url(); ?>assets/images/delete.png" height="15" width="15" /><span>
                  <span><img onclick="window.location='<?php echo site_url('seller/customize_page/customize_page_view/'.$agent_uid.'/'.$menu_id)?>'" title="edit" src="<?php echo base_url(); ?>assets/images/edit.gif" height="15" width="15" /><span>
                    <span><img id="<?php echo $row_menu->menu_id; ?>" class="rename" title="rename" src="<?php echo base_url(); ?>assets/images/rename.png" height="15" width="15" /><span>
                </span>
              </a>
            <ul  class="sub-menu-sorting list-sorting" >
              <?php
                $submenu = $this->customize_menu_model->get_submenu($agent_uid,$menu_id);
                foreach($submenu->result() as $row_submenu){
                $submenu_id = $row_submenu->menu_id;
              ?>
              <li id="listItem_<?php echo $submenu_id; ?>" >
                <a class="sub-menu-block"  href="javascript:"><img style="margin:5px;" title="move" src="<?php echo base_url(); ?>assets/images/menu_settings/move_icon.png" height="15" width="15" class="handle" /><strong id="rename-<?php echo $row_submenu->menu_id; ?>"><?php echo $row_submenu->menu_name; ?></strong>
                <span class="right-img">
                  <span><img title="delete" class="delete_menu" id="<?php echo $submenu_id; ?>" src="<?php echo base_url(); ?>assets/images/delete.png" height="15" width="15" /><span>
                  <span><img onclick="window.location='<?php echo site_url($this->uri->segment(1,0).'/customize_page/'.$access_slug.'/'.$submenu_id)?>'" title="edit"  src="<?php echo base_url(); ?>assets/images/edit.gif" height="15" width="15" /><span>
                    <span><img id="<?php echo $row_submenu->menu_id; ?>" class="rename" title="rename" src="<?php echo base_url(); ?>assets/images/rename.png" height="15" width="15" /><span>
                </span>
                </a>
                </li>
              <?php } ?>
            </ul>
            </li>

            <?php } ?>
        </ul>

</div>
<?php //} ?>

</div>
</fieldset>

</div>
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
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
<?php $this->load->view('websites/customize_menu/add_menu')?>
<?php $this->load->view('websites/customize_menu/add_submenu')?>
<script type="text/javascript">
    // When the document is ready set up our sortable with it's inherant function(s)
    $(document).ready(function() {
        $(".list-sorting").sortable({
          accept :'sub-menu-sorting',
          opacity: '0.5',
            axis:'vertically',
            handle : '.handle',
            update : function () {
                var order = $(this).sortable('serialize');
                $.ajax({
                    type: "POST",
                    url:"<?php echo site_url('websites/customize_menu/customize_menu_sorting/'.$access_slug)?>",
                    data:order,
                    cache: false,
                    success: function(html){
                        $('#loader').html(html);
                    }
                });
            }
        });

        $('.rename').click(function()
        {
            var menu_id = $(this).attr('id');
            var page_name = prompt("Put your text here",name);
            if(!page_name){
              return false;
            }
            $.ajax({
                data: 'menu_id='+menu_id+'&page_name='+page_name,
                type: 'POST',
                url: '<?php echo site_url('websites/customize_menu/rename_menu/'.$access_slug); ?>',
                success: function(val)
                {
                  $('#rename-'+menu_id).html(val);
                  $('#message-box').html('<div class="success_msg">Page title changed successfully.</div>');
                }
            });

        });


      $(".delete_menu").click(function(){

        var id=$(this).attr('id');
        var jconfirm='<?php echo $this->lang->line('confirm_msg'); ?>';
        var confirm_title='<?php echo $this->lang->line('confirm_dialog_msg'); ?>';
        jConfirm(jconfirm,confirm_title,function(r) {
          if(r){
            window.location.href='<?php echo site_url($this->uri->segment(1,0).'/customize_menu/delete/'.$access_slug); ?>/'+id;
          }
        });
      })

});
</script>
