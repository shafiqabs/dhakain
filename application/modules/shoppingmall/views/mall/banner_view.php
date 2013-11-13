<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
  <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
  <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
  <li><?php echo $store_name; ?>'info</li>
  <li id="breadcrumb-right"><button class="btn  btn-info" id="add_mall" data-toggle="modalx" href="#shoppingmallModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_mall'); ?></button></li>
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

  <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/upload_banner/'.$this->uri->segment(4,0))?>" method="post" enctype="multipart/form-data">
    <div class="right-area ">
      <div class="submit-bar persist-header" >
        <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
        <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
      </div>
      <div class="info_message">
        <h4 class="alert-heading" style="text-align: center"><?php echo $store_name; ?></h4>
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
          <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
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
            <?php
            // print_r($arr);
            if($arr[1]->num_rows() > 0 ){ ?>
              <div class="banner_box">
                  <?php
                  $queryup=$arr[1]->result();
                  $image_path=isset($queryup[0]->image_path)? $queryup[0]->image_path :'';
                  if(file_exists($image_path))
                      echo '<img src="'.base_url().'/'.$image_path.'" height="100" width="760">';
                  else
                      echo '<span>'.$this->lang->line('custom_banner').'</span>';

                  ?>
              </div>
                <?php } ?>

      </fieldset>
      <fieldset class="sheet">
        <legend ><?php echo $title; ?></legend>
        <div>

          <table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
            <thead>
            <tr>
              <th><input type="checkbox" id="allchecked"   /></th>
              <th><?php echo $this->lang->line('banner_name'); ?></th>
              <th><?php echo $this->lang->line('status'); ?></th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($arr[0] as $rows ){
                ?>
            <tr class="gradeX">
              <td><input type="checkbox" name="list[]" value="<?php echo $rows->banner_id; ?>" /></td>
              <td><?php echo $rows->banner_name; ?></td>
              <td><?php if($rows->status ==1){ ?><a class="publish_img" href="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/status_banner/'.$this->uri->segment(4,0)); ?>/<?php echo $rows->banner_id; ?>"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="" id="" href="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/status_banner/'.$this->uri->segment(4,0)); ?>/<?php echo $rows->banner_id; ?>"></a><?php } ?></td>
              <td class="center">
                <a rel="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/delete_banner/'.$this->uri->segment(4,0)); ?>/<?php echo $rows->banner_id; ?>" class="delete_img" href="javascript:void(0)"></a>
              </td>
            </tr>

                <?php } ?>
            </tbody>

          </table>


        </div>
      </fieldset>
      <fieldset class="sheet">

        <div class="clear"></div>
        <legend><?php echo $this->lang->line('site_logo'); ?></legend>
        <div class="clear"></div>
        <div class="control-group">
          <label for="fileLogo" class="control-label"><?php echo $this->lang->line('attach_logo'); ?></label>
          <div class="controls">
            <input type="file" id="logo_name" name="logo_name" class="input-file" > <a href="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/status_logo/'.$this->uri->segment(4,0))?>" style="margin-right: 250px; float: right;" class="changeLogoStatus btn btn-info"><i class="icon-edit icon-white"></i></a><a href="javascript:void(0)" rel="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/delete_logo/'.$this->uri->segment(4,0))?>" style="margin-right: 10px; float: right;" class="btn btn-danger"><i class="icon-trash icon-white"></i></a>
          </div>
        </div>

        <div class="control-group">
          <label  class="control-label"><?php echo $this->lang->line('logo_width'); ?></label>
          <div class="controls">
            <input type="input" id="logo_width" class="span1" name="logo_width" value="" >px
          </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('logo_height'); ?></label>
            <div class="controls">
              <input type="input" id="logo_height" class="span1" name="logo_height" value="" >px
            </div>
            <div class="control-group">
              <label  class="control-label"><?php echo $this->lang->line('status'); ?></label>
              <div class="controls">
                <input type="checkbox" id="logo_status"  name="logo_status" value="1" class="">
              </div>
            </div>
            <div id="logo_box">
                <?php
                if($arr[2]->num_rows() > 0){
                    $logo=$arr[2]->result();
                    $height=isset($logo[0]->logo_height)  ? $logo[0]->logo_height:100;
                    if($height ==0 || $height > 180)
                        $height=100;
                    $width=isset($logo[0]->logo_width ) ? $logo[0]->logo_width:100;
                    if($width ==0 || $width > 180)
                        $width=100;
                    if(file_exists($logo[0]->logo_path))
                        echo '<img src="'.base_url().'/'.$logo[0]->logo_path.'" height="'.$height.'" width="'.$width.'">';
                    else
                        echo '<span>'.$this->lang->line('custom_banner').'</span>';
                }
                ?>
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
      var rel=$(this).attr('rel');
      var jconfirm='Are sure went you submit ?';
      var confirm_title='Confirmation Dialog';
      jConfirm(jconfirm,confirm_title,function(r) {
        if(r){
            window.location.href=rel;
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