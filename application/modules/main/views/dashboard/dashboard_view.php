<?php $this->load->view('main/layouts/header')?>
<link rel="stylesheet" href="<?php echo base_url()?>/assets/styles/agile_carousel.css" type='text/css'>

<script language="javascript">
    $(document).ready(function(){

        $('.location, .navigation-link').click(function(){

            var location_id = $(this).attr('id');
            var shop_group = $(this).attr('rel');
            $('.nav-location-tabs li a.location').attr('rel', shop_group);
            $('.main-nav ul li a.navigation-link').attr('id', location_id);
            $('.remove-class').removeClass('active')
            $('#location-'+location_id).addClass('active')
            $('.main-nav ul li a.navigation-link').removeClass('active');
            $('.'+shop_group).addClass('active');
            $.ajax({
                type: "POST",
                url:"<?php echo site_url('main/ajaxload/locationProductCategories')?>",
                data:'location_id='+location_id+"&shop_group="+shop_group,
                cache: false,
                beforeSend:function(){
                    $('.breadcrumbs-center').html('<img class="small-load-img" src="<?php echo base_url()?>assets/images/loading-medium.gif" >')
                },
                success: function(val){
                    $('.load-data').html(val);
                    $('.breadcrumbs-center').html('');
                }
            })
            $('#locationModal').modal();
            $("#locationscroll").niceScroll();

        })

        $('.listoffer').click(function(){
            var offer = $(this).attr('id');
            $('.tabs li').removeClass('active');
            $('#'+offer).parents('li').addClass('active');
            $('#offerbox').html('');
            $('#offerbox').load('/main/ajaxload/getProductOffers/?offer='+offer+'&product_group=shops');
        });
    })
    $.getJSON("<?php echo site_url()?>/main/ajaxload/carousel", function(data) {
        $(document).ready(function(){
            $("#multiple_slides_visible").agile_carousel({
                carousel_data: data,
                carousel_outer_height: 194,
                carousel_height: 200,
                slide_height: 200,
                carousel_outer_width: 480,
                slide_width: 160,
                number_slides_visible: 3,
                transition_time: 330,
                control_set_1: "previous_button,next_button",
                /*control_set_2: "group_numbered_buttons",
                 control_set_3: "numbered_buttons",
                 */
                persistent_content: "<p class='persistent_content'><?php echo $this->lang->line('sponsor_products');?></p>"
            });
        });
    });

</script>

<div id="locationModal" class="modal hide fade location-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header location-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-top">Location Base Product Information</h3>
    </div>
    <div class="modal-body location-body">

        <div class="tabbable tabs-left" style="position: relative">
            <ul class="nav nav-tabs nav-location-tabs">
                <?php
                $i=0;
                foreach($locations as $location ):
                    ?>
                    <li id="location-<?php echo $location->settings_id; ?>"  class="remove-class" ><a data-toggle="tab" rel="" class="location"  id="<?php echo $location->settings_id; ?>"  href="javascript:void(0)"><?php echo $location->settings_name; ?></a> </li>
                    <?php $i++; endforeach; ?>

            </ul>
            <div class="tab-content " style="float: right; height: 400px; width: 700px; position: relative">
                <div role="banner" class="pane clearfix" id="hd">
                    <div class="main-nav clearfix" id="main-nav">
                        <ul>
                            <?php
                            $controller = $this->uri->segment(1,NULL);
                            $controller_menu = ($controller !="" ) ? $controller :'shops';
                            ?>
                            <li><a href="javascript:void(0)" class="navigation-link shops <?php if($controller_menu =='shops'){ echo 'active';}?>" rel="shops"><?php echo $this->lang->line('products');?></a></li>
                            <li><a href="javascript:void(0)" class="navigation-link services <?php if($controller_menu =='services'){ echo 'active';}?>" rel="services"><?php echo $this->lang->line('services');?></a></li>
                            <li><a href="javascript:void(0)" class="navigation-link brand-shop <?php if($controller_menu =='brand-shop'){ echo 'active';}?>" rel="brand-shop" ><?php echo $this->lang->line('brand_shop');?></a></li>
                            <li><a href="javascript:void(0)" class="navigation-link wholesalers  <?php if($controller_menu =='wholesalers'){ echo 'active';}?>" rel="wholesalers" ><?php echo $this->lang->line('wholesalers');?></a></li>
                            <li><a href="javascript:void(0)" class="navigation-link shopping-mall <?php if($controller_menu =='shopping-mall'){ echo 'active';}?>" rel="shopping-mall"><?php echo $this->lang->line('mall');?></a></li>
                            <li><a href="javascript:void(0)" class="navigation-link super-store <?php if($controller_menu =='super-store'){ echo 'active';}?>" rel="super-store"><?php echo $this->lang->line('super_store');?></a></li>
                            <li class="last"><a href="javascript:void(0)" class="navigation-link others <?php if($controller_menu =='others'){ echo 'active';}?>" rel="others"><?php echo $this->lang->line('others');?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="pane load-data" ></div>
            </div>
        </div>
    </div>

</div>

<div class="clear"></div>
<div id="mixboxes" >
<div class="slideshow" id="multiple_slides_visible"></div>
<div class="row show-grid">
    <div class="span5 common">
        <h2 class="centerBoxHeading" style="width: 474px; margin-bottom: 1px"><?php echo $this->lang->line('our_available_location');?></h2>
        <div class="boxscroll">
            <ul>
                <?php
                foreach($locations as $location ):
                ?>
                <li><i class="icon-large icon-chevron-right"></i><a class="location" rel="shops" id="<?php echo $location->settings_id; ?>"  href="javascript:void(0)"><?php echo $location->settings_name; ?></a> </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>
<div style="margin-top:0px; width:980px; margin-left:0px; margin-right:0px; position:relative" class="grid_24">
<!--STA: #merithilite-container .mod-merit-->
<script language="javascript">
  $(document).ready(function(){
     /* This code use for show the dropdoen menu*/
     $('#load-feature-categories').load('/main/ajaxload/getFeatureCategories/?product_group=shops');
  })
</script>
<div class="four_banners" id="load-feature-categories">

</div>
<!--END: #merithilite-container .mod-merit-->

<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="">
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>

<td id="column-center" valign="top" >
<div class="column-center-padding">

<div id="indexDefault" class="centerColumn">
<!-- bof: featured products  -->
<div id="featuredProducts" class="centerBoxWrapper">
      <div class="left-top-corner1">
           <div class="right-top-corner1">
             <div class="border-top1">
              <ul class="tabs">
               <li class="active"><a href="javascript:void(0)" id="new-in" rel="New in" class="listoffer"><span>New in</span></a></li>
               <li><a href="javascript:void(0)"  id="best-sellers" rel="Best Sellers" class="listoffer"><span>Best Sellers</span></a></li>
               <li><a href="javascript:void(0)"  id="brand-sellers" rel="Brnad Sellers" class="listoffer"><span>Brnad Sellers</span></a></li>
               <li><a href="javascript:void(0)"  id="top-offers" rel="Top Offers" class="listoffer" ><span>Top Offers</span></a></li>
               <li><a href="javascript:void(0)"  id="brand-new" rel="Brand New" class="listoffer" ><span>Brand New</span></a></li>
               <li><a href="javascript:void(0)"  id="all-offer" rel="Specials" class="listoffer"><span>All Offer</span></a></li>
              </ul>
            </div>
           </div>
      </div>
<div class="clear"></div>
<script language="javascript">
$(document).ready(function(){
  /* This code use for show the dropdoen menu*/
  $('#offerbox').load('/main/ajaxload/getProductOffers/?offer=new-in&product_group=shops');
})
</script>
<div id="offerbox">Loading please wait...</div>
</div>

<div class="clear"></div>
<!--eof content_center-->

</div>

<script language="javascript">
  $(document).ready(function(){
      /* This code use for show the dropdoen menu*/
      $('#content-bodder').load('/main/ajaxload/getShopSponsor/?shop_group=shops');
  })
</script>
<div id="content-bodder" style="text-align:center">
Loading please wait...
</div>
</div>

</div>
</td>
<td id="column_right" style="width:250px">
<?php $this->load->view('main/layouts/right')?>
</td>
</tr>
</table>
<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->
<script src="<?php echo base_url()?>/assets/js/agile_carousel.alpha.js"></script>
<?php $this->load->view('main/layouts/footer')?>
