<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs">
  <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
  <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
  <li><?php echo $this->mall_model->mall_name($this->uri->segment(4,NULL)); ?>'info</li>
  <li id="breadcrumb-right"><button class="btn  btn-info" id="add_mall" data-toggle="modalx" href="#shoppingmallModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_mall'); ?></button></li>
</ul>

<div class="clear"></div>
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('shoppingmall/shoppingmall_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('global_layouts/left_menu'); ?>
</div>

  <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/upload_banner/'.$this->uri->segment(4,0))?>" method="post" enctype="multipart/form-data">
    <div class="right-area ">
      <div class="submit-bar persist-header" >
        <div id="message-box"><?php $this->load->view('shoppingmall/shoppingmall_layouts/message'); ?></div>
        <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
      </div>
      <div class="info_message">
        <h4 class="alert-heading" style="text-align: center"><?php echo $this->mall_model->mall_name($this->uri->segment(4,0)); ?></h4>
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
          <?php $this->load->view('global_layouts/breadcrumbs'); ?>
        <div class="clear"></div>

        <div class="control-group">
          <label for="fileInput" class="control-label"><?php echo $this->lang->line('add_banner'); ?></label>
          <div class="controls">
            <input type="file" id="image_name" class="input-file" name="image_name">
          </div>
        </div>

        <div class="control-group">
          <label  class="control-label"><?php echo $this->lang->line('banner_name'); ?></label>
          <div class="controls">
            <input type="input" id="banner_name" class="" name="banner_name" value="" >
          </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('status'); ?></label>
            <div class="controls">
              <input type="checkbox" id="status"  name="status" value="1" class="input-file">
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
<script language="javascript" type="text/javascript">
  $(document).ready(function(){

    $("input[type=file]").filestyle({
      image: "<?php echo base_url()?>/assets/images/upload_file.gif",
      imagewidth :78,
      imageheight : 29,
      width :145
    });
  });
</script>
<script language="javascript">
  $(document).ready(function(){

    oTable = $('#grid-table').dataTable({
      "bJQueryUI": true,
      "bPaginate": false,
      "bLengthChange": false,
      "sPaginationType": "full_numbers",
      "aoColumnDefs": [
        { "bSortable": false, "aTargets": [ 0,2,3] },
        { "sWidth": "1%", "aTargets": [ 0 ] },
        { "sWidth": "2%", "aTargets": [ 3 ] }

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