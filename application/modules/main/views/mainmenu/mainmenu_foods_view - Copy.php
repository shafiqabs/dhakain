<?php $this->load->view('layouts/header')?>
<div class="clear"></div>                        
<div class="">
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td id="column-left" style="width:202px;">
<!--// bof: categories //-->
<div class="box" id="categories" style="width:202px;">
<div class="box-head">Food Categories</div>
<div class="box-body">
<div class="treeMenu">
        <ul>
       <?php 
	   $query=$this->settings_model->categorylist($product_id=24);
	   if($query ->num_rows()> 0){
	   foreach ($query ->result() as $rows){
	   ?>
      <li><a href="<?php echo site_url('categories/'.$rows->catid_label_2)?>" class="parent" ><?php echo $rows->category_name; ?></a><span></span>
            <div>
              <ul>
                <?php
				 $sql=$this->settings_model->locationlist($rows->catid_label_2);
				 foreach ($sql->result() as $loca ){
				?>
                <li><span></span><a href="<?php echo site_url('location/'.$rows->catid_label_2.'/'.$loca->location_id)?>" class="parent"><?php echo $loca->settings_name; ?></a>
                  <div>
                    <ul>
                   
                     <?php
				 		$sql1=$this->settings_model->shoplist($rows->catid_label_2,$loca->location_id);
				 		foreach ($sql1->result() as $shop ){
					 ?>
			
                      <li><span></span><a href="<?php echo site_url($shop->subdomain_name)?>"><?php echo $shop->shop_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </li>
                <?php } ?>
               </ul>
            </div>
          </li>
          <?php }} ?>
   </ul>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
<div class="box-head box-head-biolet">Brand Food Shop</div>
<div class="box-body box-body-biolet">
<div class="treeMenu">
        <ul>
          <li><a href="" class="parent">Steel Industray</a><span></span>
            <div>
              <ul>
                <li><span></span><a href="" class="parent">Pneumatic sample transport</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a>
                      	<div>
                            <ul>
                              <li><span></span><a href="">Other links</a></li>
                              <li><span></span><a href="">Other links</a></li>
                            </ul>
                          </div>
                      </li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Iron and Steel sample</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Slag samples</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Radio Activity Measurement</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Raw Materials testing</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Fully automated robotic laboratories</a></li>
              </ul>
            </div>
          </li>
          <li><a href="">Cement Industry</a><span></span>
            <div>
              <ul>
                <li><span></span><a href="">Sampling Systems</a></li>
                <li><span></span><a href="" class="parent">Pneumatic sample transport</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Crushing</a></li>
                <li><span></span><a href="" class="parent">Pulverizing</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Fusion</a></li>
                <li><span></span><a href="">Pressing</a></li>
                <li><span></span><a href="">Particle size</a></li>
                <li><span></span><a href="" class="parent">Pressing</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">XRF/XFD automation </a></li>
                <li><span></span><a href="">Linear automated systems </a></li>
                <li><span></span><a href="">Mill control </a></li>
                <li><span></span><a href="">Dust Contol waste management</a></li>
              </ul>
            </div>
          </li>
          <li><span></span><a href="" class="parent">Non ferrous </a> 
            <div>
              <ul>
                <li><span></span><a href="">Meteral Samples</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Granualr and powders</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="" class="parent">Mining</a><span></span>
            <div>
              <ul>
                <li><span></span><a href="">Platinum Group metals and Gold</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Iron ore</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Base metals</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Heavy minerals</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Uranium</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
<div class="box-head">Food Sppliers</div>
<div class="box-body">
<div class="treeMenu">
        <ul>
       <?php 
	   $query=$this->settings_model->categorylist($product_id=24);
	   if($query ->num_rows()> 0){
	   foreach ($query ->result() as $rows){
	   ?>
      <li><a href="<?php echo site_url('categories/'.$rows->catid_label_2)?>" class="parent" ><?php echo $rows->category_name; ?></a><span></span>
            <div>
              <ul>
                <?php
				 $sql=$this->settings_model->locationlist($rows->catid_label_2);
				 foreach ($sql->result() as $loca ){
				?>
                <li><span></span><a href="<?php echo site_url('location/'.$rows->catid_label_2.'/'.$loca->location_id)?>" class="parent"><?php echo $loca->settings_name; ?></a>
                  <div>
                    <ul>
                   
                     <?php
				 		$sql1=$this->settings_model->shoplist($rows->catid_label_2,$loca->location_id);
				 		foreach ($sql1->result() as $shop ){
					 ?>
			
                      <li><span></span><a href="<?php echo site_url($shop->subdomain_name)?>"><?php echo $shop->shop_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </li>
                <?php } ?>
               </ul>
            </div>
          </li>
          <?php }} ?>
   </ul>
</div>
<div style="clear:both"></div>
</div>
</div>
</td>
<td id="column-center" valign="top" >
<div style="margin-top:0px; width:781px; margin-left:0px; margin-right:0px;" class="grid_24">
                	
<!--STA: #merithilite-container .mod-merit-->
	
<div class="four_banners" style="padding-left:2px; width:776px;">
<div class="four_banners_bt clearfix" >
<div class="b01"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Shoes</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Makeup</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Skincare</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Sale</a></li>
</ul>
</div>
<div class="b02"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/dresses.html">Furniture</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">Sets and Collections</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">New Arrivals</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">Sale</a></li>
</ul>
</div>
<div class="b03"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/fragrances.html">Mobile</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">Sets and Collections</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">New Arrivals</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">Sale</a></li>
</ul>
</div>
<div class="b04"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Jewelry</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Sets and Collections</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">New Arrivals</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Sale</a></li>
</ul>
</div>
</div>
</div>
<!--END: #merithilite-container .mod-merit-->
<div class="clear"></div>  
</div>
<div class="clear"></div>  

<div class="column-center-padding" style="padding-left:9px; width:763px;">
                    
<div id="indexDefault" class="centerColumn">
<link rel="stylesheet" type="text/css" href="styles/dashboard.css" />
<link rel="stylesheet" type="text/css" href="assets/site_feature/jcarousel/jcarousel.css" />
<script type="text/javascript" src="assets/site_feature/jcarousel/jquery.jcarousel.js"></script>

<script type="text/javascript">
/**
 * We use the initCallback callback
 * to assign functionality to the controls
 */
function mycarousel_initCallback1(carousel) {
    jQuery('.jcarousel-control a').bind('click', function() {
    	//alert("Test page");
		carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });

    jQuery('.mycarousel-next').bind('click', function() {
		//alert("Test next");
		carousel.next();
        return false;
    });

    jQuery('.mycarousel-prev').bind('click', function() {
        //alert("Test prev");
		carousel.prev();
        return false;
    });
};

// Ride the carousel...
jQuery(document).ready(function() {
    jQuery(".jcarousel-skin-product").jcarousel({
        scroll: 1,
        initCallback: mycarousel_initCallback1,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null
    });
});


	

</script>
<!-- bof: featured products  -->
<div id="featuredProducts" class="centerBoxWrapper">

<script>
   $(document).ready(function() {
		$('#tabvmenu > ul').tabs({
			fx:{ height: 'toggle', opacity: 'toggle'}

		
		 });
});
   </script> 
     
      
      <div class="left-top-corner1">
           <div class="right-top-corner1" style="width:742px;">
             <div class="border-top1">
              <ul class="tabs">
               <li class="active"><a href=""><span>New in</span></a></li>
               <li class=""><a href=""><span>Best Sellers</span></a></li>
               <li class=""><a href=""><span>Brnad Sellers</span></a></li>
               <li class=""><a href=""><span>Top Offers</span></a></li>
               <li><a href=""><span>Brand New</span></a></li>
               <li><a href=""><span>Specials</span></a></li>
              </ul>
            </div>
           </div>
      </div>
      <div class="clear"></div>
      <div id="plist1">
<div class="board-head">
  <div class="head-inner">
      <div class="group" style="">
		<div class="group-content">
							<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img17.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img18.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img19.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img20.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img21.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img22.gif" alt="" /></a>
                                                <a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img20.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img21.gif" alt="" /></a>
											                                      
											</div><!-- end of group-content -->
										</div>
                                            </div>
										</div><!-- end of post-head -->
      
<div class="clear"></div>
<style>
.div-hover{display:block!important}
.hover{display:block!important}
</style>
<script language="javascript">
$(document).ready(function() {
	
	
	$('.quickLook1').hover (function() {
	var id=$(this).attr('id');
	$('#quick-'+id).addClass('div-hover');
	}, function() {
	$('.quickLook').removeClass('div-hover');
	});
	
	$('.quickLook').hover (function() {
	var id=$(this).attr('title');
	$('#quick-'+id).removeClass('div-hover');
	$('#quick-'+id).addClass('hover');
	}, function() {
	$('.quickLook').removeClass('hover');
	});
	

});
</script>
<h2 class="centerBoxHeading" style="width:749px;">Featured Products </h2>
<div id="board-content">
<ul>
<li>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="javascript:void(0)" class="quickLook1"  id="1" ><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
            <div title="1" class="quickLook" id="quick-1" ></div>
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div> 
                    <div title="Preview Product" class="quickLook" id="quick-1"></div>                       
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                    <div title="Preview Product" class="quickLook" id="quick-1"></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                    <div title="Preview Product" class="quickLook" id="quick-1"></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="http://localhost/martbd/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>            
     </div>                     
</div>
</li>
</ul>
						
<div class="clear"></div>

<!-- eof: featured products  -->
</div>                    
</div> 
  
   
  
  
       

<div class="clear"></div>
<!--eof content_center-->
    
</div>

</div>

</div>
</td>

</tr>
</table>
<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->
<?php $this->load->view('layouts/footer')?>