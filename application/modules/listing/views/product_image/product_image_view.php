<?php $this->load->view('admin/layouts/header')?>

<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0)); ?>" ><?php echo $this->uri->segment(1,0); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/listing/'.$access_slug )?>" > <?php echo $store_name; ?>'info</a></li>
    <li><?php echo $productInfo[0]->product_name; ?></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" id="add_product" data-toggle="modal" href="#myModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_new_product'); ?></button></li>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/product_image/save/'.$access_slug.'/'.$productInfo[0]->slug )?>" method="post" enctype="multipart/form-data">
<div class="right-area ">
<div class="submit-bar persist-header" >
<div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>

<div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
</div>
<div class="info_message">
    <h4 class="alert-heading" style="text-align: center"><?php echo $productInfo[0]->product_name; ?></h4>
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

    <div class="content-inner-box">
        <div class="input_line input_line_mod">
            <div id="category_crumb" class="category_crumb"><strong><?php echo $this->lang->line('selected_categories'); ?>:</strong><?php if(!empty($selected_category)){ ?>&nbsp;<?php echo $this->settings_model->category_name($selected_category[0]->catid_label_1); ?> <?php if($this->settings_model->category_name($selected_category[0]->catid_label_2)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_2).'</span>'; } if($this->settings_model->category_custom_name($selected_category[0]->catid_label_3)){ echo "&raquo;<span>".$this->settings_model->category_custom_name($selected_category[0]->catid_label_3) .'</span>'; } if($this->settings_model->category_name($selected_category[0]->catid_label_4)){ echo "&raquo;<span>".$this->settings_model->category_name($selected_category[0]->catid_label_4)."</span>"; }} ?></div>
        </div>

        <div class="clear"></div>

        <div id="image-container">

            <div id="image">
                <?php

                $this->db->where('product_id',$productInfo[0]->product_id);
                $this->db->order_by('product_image_id','ASC');
                $this->db->limit(1);
                $query=$this->db->get('listing_product_image');
                if($query->num_rows() >0){
                    foreach ($query->result() as $images ){
                        ?>

                        <div class="imagebox" id="main_view" style="text-align:center">
                            <img src="<?php echo base_url()?><?php echo $images->image_large_path; ?>" />
                        </div>
                        <div class="clear"></div>
                    <?php } }else{ ?>
                    <div id="agent-no-image" style="height:308px; width:350px;">
                        <div><?php echo $this->lang->line('no_photo'); ?>.</div>
                    </div>
                <?php } ?>
            </div>
            <div id="thumbbox">
                <div style="width:383px; height:150px;">

                    <div class="input_line"><div class="input_title"><?php echo $this->lang->line('save_type'); ?></div>
                        <select class="" id="show_type" name="show_type">
                            <option value="landscape"><?php echo $this->lang->line('landscape'); ?></option>
                            <option value="portrait"><?php echo $this->lang->line('portrait'); ?></option>

                        </select>
                    </div>
                    <div class="input_line" style="position: relative;">
                        <div class="input_title"><?php echo $this->lang->line('attach_image'); ?></div>
                        <input type="file" name="fileToUpload" id="fileToUpload" value="" />
                    </div>

                    <div class="input_line input_line_double" >
                        <div class="input_title" style="width:115px; float: left;"><?php echo $this->lang->line('image_resize'); ?></div>
                        <div class="radio_text"><input title="Check box" name="image_resize" type="radio" value="1"  checked="checked" /></div>
                        <div class="radio_text" style="width:120px;"><?php echo $this->lang->line('image_crop'); ?></div>
                        <div class="radio_text"><input title="Check box" name="image_resize" type="radio" value="2"   /></div>

                    </div>
                    <div class="input_line input_line_double" >
                        <div class="input_title" style="width:115px; text-align:left"><?php echo $this->lang->line('water_mark'); ?>?</div>
                        <div class="radio_text"><input title="Check box" name="water_mark" type="checkbox" value="1"  /></div>
                    </div>

                </div>

                <div class="clear"></div>
                <div id="img-box">
                    <?php

                    $this->db->where('product_id',$productInfo[0]->product_id);
                    $query=$this->db->get('listing_product_image');
                    if($query->num_rows() >0){
                        foreach ($query->result() as $images ){?>
                            <span class="span_area" >
<?php if($images->image_thumb_path){?>
                                    <a href="<?php echo base_url()?><?php echo $images->image_large_path; ?>"><img src="<?php echo base_url()?><?php echo $images->image_thumb_path; ?>" class="image_thumb" /></a>
                                <?php }else{ ?>
                                    <img src="<?php echo base_url()?>assets/images/noimage.jpg" class="image_thumb" />
                                <?php }?>
                                <span id="<?php echo site_url($this->uri->segment(1,NULL).'/product_image/delete/'.$access_slug.'/'.$productInfo[0]->slug.'/'.$images->product_image_id)?>"  class="delete_img img-delete_img"></span>
</span>
                        <?php } }else{?>
                        <div style="line-height:120px;"><?php echo $this->lang->line('no_photo'); ?>.</div>
                    <?php } ?>
                </div>
                <div class="clear"></div>

            </div>
        </div>

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
<?php $this->load->view('listing/product/add_product')?>
<?php $this->load->view('admin/layouts/footer'); ?>

<style type="text/css">
.file{ height: 18px!important; float: left;}
</style>
<script src="<?php echo base_url()?>/assets/js/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
        $("input[type=file]").filestyle({
        image: "<?php echo base_url()?>/assets/images/upload_file.gif",
        imagewidth :76,
        imageheight :28,
        float :left,
        width : 190
        });

//Swap Image on Click
        $(".span_area a").click(function() {
            var mainImage = $(this).attr("href"); //Find Image Name
            $("#main_view img").attr({ src: mainImage });
            return false;
        });

        $(".delete_img").click(function(){

            var rel=$(this).attr('id');
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
<style>
  .form-horizontal .controls-extra {
      display: block;
      margin-left: 225px;
      margin-top: 5px;
  }
#image-container {
    float: left;
    margin:0px;
    text-align: center;
}
#thumbbox{height:auto; width:383px; margin-left:15px;float:left; margin-bottom:20px;}
.span_area {
    display: block;
    float: left;
    font-size: 11px;
    height: 100px;
    line-height: 100px;
    margin: 5px;
    width: 87px;
}
.span_area .image_thumb{height:80px; width:80px; border:1px solid #00adcb}
#main_view {
    padding: 0px 0;
    margin-left: 0px;
}

#image
{
    float:left;
    width:350px;
    height:auto;
    overflow:hidden
}

#image {
    background-color: #DDDDDD;
    border: 1px solid #777777;
    display: block;
    margin: 0 auto;
}
#main_view img{
    /*
    height:290px;
    width:340px;
    margin-top:5px;
    */
}

fieldset .input_line { width:380px;}
.image_position{color:#3f5475; font-size:11px;display:block}
.image_position img{ border:1px solid #666666; margin-top:15px;}
fieldset .input_line .input_title {float:left; width:80px; text-align:left}
fieldset .input_line select{width:270px;}
#img-box{
    height:140px;
    width:388px;
    margin-top:20px;
    padding-top:5px;
}
.img-delete_img{
    margin-left: 35px;
    text-align: center;
    width: 16px;
    display: block;

}
#image-position{ left: 302px!important;}

</style>