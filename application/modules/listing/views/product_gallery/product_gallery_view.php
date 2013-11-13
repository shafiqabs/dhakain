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
        <form action="<?php echo site_url($this->uri->segment(1,0).'/product_gallery/save/'.$access_slug.'/'.$productInfo[0]->slug )?>" method="post">
        <div id="pluploadUploader">
            <p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
        </div>
        <div class="input_line input_line_mod">
            <div id="" class="category_crumb" style="text-align: left"><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('all_upload'); ?></button><a href="javascript:void(0)"   rel="<?php echo site_url($this->uri->segment(1,0).'/product_gallery/delete/'.$access_slug.'/'.$productInfo[0]->slug )?>" class="btn btn-primary " id="delete_img" style="text-align: right; float: right;" ><?php echo $this->lang->line('delete_gallery'); ?></a></div>
        </div>
        </form>
        <?php
        if( $productGalleryImage ->num_rows >0){?>
        <div>
            <ul>
                <?php foreach($productGalleryImage ->result() as $image ): ?>
                <li  title="Click for delete" id="<?php echo site_url($this->uri->segment(1,NULL).'/product_gallery/single_delete/'.$access_slug.'/'.$productInfo[0]->slug.'/'.$image->product_gallery_id)?>" class="image-box">
                    <img class="image_thumb" src="<?php echo base_url().$image->image_large_path; ?>" alt="">

                </li>
                    <?php endforeach; ?>
            </ul>
        </div>
        <?php } ?>

    </div>

</fieldset>

</div

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
<!-- plupload -->
<style type="text/css">@import url(<?php echo base_url() ?>assets/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>
<!-- Third party script for BrowserPlus runtime (Google Gears included in Gears runtime now) -->
<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<!-- Load plupload and all it's runtimes and finally the jQuery queue widget -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>

<script type="text/javascript">
    // Convert divs to queue widgets when the DOM is ready
    $(function() {
        $("#pluploadUploader").pluploadQueue({
            // General settings
            runtimes : 'gears,browserplus,html5',
            url : '<?php echo site_url() ?>listing/product_gallery/upload/<?php echo $access_slug; ?>/<?php echo $productInfo[0]->slug; ?>',
            max_file_size : '10mb',
            chunk_size : '1mb',
            unique_names : true,

            // Resize images on clientside if we can
            resize : {width : 320, height : 240, quality : 90},

            // Specify what files to browse for
            filters : [
                {title : "Image files", extensions : "jpg,gif,png"},
                {title : "Zip files", extensions : "zip"}
            ],

            // Flash settings
            flash_swf_url : '<?php echo base_url() ?>assets/plupload/js/plupload.flash.swf',

            // Silverlight settings
            silverlight_xap_url : '<?php echo base_url() ?>assets/plupload/js/plupload.silverlight.xap'
        });

        // Client side form validation
       /* $('#pluploadForm').submit(function(e) {
            var uploader = $('#pluploadUploader').pluploadQueue();

            // Files in queue upload them first
            if (uploader.files.length > 0) {
                // When all files are uploaded submit form
                uploader.bind('StateChanged', function() {
                    if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
                        $('#pluploadForm').submit();
                    }
                });

                uploader.start();
            } else {
                alert('You must queue at least one file.');
            }

            return false;
        });*/

       $("#delete_img").click(function(){

            var rel=$(this).attr('rel');
            var jconfirm='Are sure went you submit ?';
            var confirm_title='Confirmation Dialog';
            jConfirm(jconfirm,confirm_title,function(r) {
                if(r){
                    window.location.href=rel;
                }
            });
        })

       $(".image-box").click(function(){

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
<style type="text/css">
.file{ height: 18px!important; float: left;}
</style>
<style>

img.image_thumb{
    height:140px;
    width:138px;

}

.image-box{
    border: 1px solid #000000;
    display: block;
    float: left;
    height: 140px;
    margin: 5px;
    overflow: hidden;
    width: 138px;
    position: relative;
}

.image-box:hover{
    cursor:pointer;
    opacity: 0.3px;
    background: #ccc;

}


</style>