<link rel="stylesheet" href="<?php echo base_url()?>/assets/styles/agile_carousel.css" type='text/css'>
<script language="JavaScript">
$(document).ready(function(){

    $.getJSON("<?php echo site_url()?>/main/ajaxload/carousel", function(data) {
        $(document).ready(function(){
            $("#multiple_slides_visible").agile_carousel({
                carousel_data: data,
                carousel_outer_height: 212,
                carousel_height: 200,
                slide_height: 200,
                carousel_outer_width: 640,
                slide_width: 160,
                number_slides_visible: 4,
                transition_time: 330,
                control_set_1: "previous_button,next_button",
                /*control_set_2: "group_numbered_buttons",
                 control_set_3: "numbered_buttons",
                 */
                persistent_content: "<p class='persistent_content'><?php echo $this->lang->line('sponsor_products');?></p>"
            });
        });
    });
});
</script>

    <div style="padding: 10px;display:inline-block; height: 210px">
        <?php echo wordLimiter($row->about,20); ?>
    </div>
    <div class="clear"></div>
    <div class="row-fluid">
        <div class="slideshow" id="multiple_slides_visible"></div>
        <div class="clear"></div>

    </div>
    <div class="clear"></div>

<script src="<?php echo base_url()?>/assets/js/agile_carousel.alpha.js"></script>