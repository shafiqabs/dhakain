<?php $this->load->view('layouts/header')?>
<div class="clear"></div>                        
<div class="">
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td id="column-left" style="width:202px;">
<!--// bof: categories //-->
<?php $this->load->view('foods/foods_left')?>
</td>
<td id="column-center" valign="top" >
<div style="margin-top:0px; width:781px; margin-left:0px; margin-right:0px;" class="grid_24">
                	
<!--STA: #merithilite-container .mod-merit-->
	
<div class="four_banners" style="padding-left:2px; width:776px;">
<div class="four_banners_bt clearfix" >
<div class="b01"><a class="title" href="<?php echo site_url('categories/foods/25')?>">Fast Food</a> 
<ul>
<?php
$sql1=$this->settings_model->featureproductlist(25);
foreach ($sql1->result() as $products ){
?>
<li><a href="javascript:void" title="<?php echo $products->product_name; ?>-Preview" rel="<?php echo $products->product_id; ?>" class="popup_product"><?php echo $products->product_name; ?></a></li>
<?php } ?>
</ul>
</div>
<div class="b02"><a class="title" href="<?php echo site_url('categories/foods/25')?>">Chinuse</a> 
<ul>
<?php
$sql1=$this->settings_model->featureproductlist(25);
foreach ($sql1->result() as $products ){
?>
<li><a href="javascript:void" title="<?php echo $products->product_name; ?>-Preview" rel="<?php echo $products->product_id; ?>" class="popup_product"><?php echo $products->product_name; ?></a></li>
<?php } ?>
</ul>
</div>
<div class="b03"><a class="title" href="<?php echo site_url('categories/foods/25')?>">Cake & Pastry</a> 
<ul>
<?php
$sql1=$this->settings_model->featureproductlist(25);
foreach ($sql1->result() as $products ){
?>
<li><a href="javascript:void" title="<?php echo $products->product_name; ?>-Preview" rel="<?php echo $products->product_id; ?>" class="popup_product">
<?php echo $products->product_name; ?></a></li>
<?php } ?>
</ul>
</div>
<div class="b04"><a class="title" href="<?php echo site_url('categories/foods/25')?>">Pizza & Pasta </a> 
<ul>
<?php
$sql1=$this->settings_model->featureproductlist(25);
foreach ($sql1->result() as $products ){
?>
<li><a href="javascript:void" title="<?php echo $products->product_name; ?>-Preview" rel="<?php echo $products->product_id; ?>" class="popup_product"><?php echo $products->product_name; ?></a></li>
<?php } ?>
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

     
      
      <div class="left-top-corner1">
           <div class="right-top-corner1" style="width:742px;">
             <div class="border-top1">
              <ul class="tabs">
               <li class="active"><a href=""><span>New in</span></a></li>
               <li class=""><a href=""><span>Best Sellers</span></a></li>
               <li class=""><a href=""><span>Top Offers</span></a></li>
               <li><a href=""><span>Brand New</span></a></li>
               <li class=""><a href=""><span>Brnad Sellers</span></a></li>
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
$(function(){
	
	$("#gallery .product_img").preloader();
	
});
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.preloader.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/preloader.css" type="text/css" />
<style>
.product_title{ height:32px;}
</style>
<h2 class="centerBoxHeading" style="width:749px;">Featured Products <span style="display:inline-block; float:right"><a href="">Grid</a><a href="">List</a></span></h2>
<div id="board-content">
<ul id="gallery">
<li>
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="javascript:void(0)" class="quickLook1"  id="1" ><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_title"><a href="details.html">Cantonese Steamed Cod with Ginger and Soy</a></div>
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
        <!--/*	<div class="top_prod_box"></div>*/-->
           <div class="round-corners" id="login-box" style="width:auto; height:auto; margin-top:10px; margin-left:0px; float:left ">
                <div class="t1"></div><div class="t2"></div><div class="b1"></div><div class="b2"></div>
            <div class="center_prod_box" style="background: none repeat scroll 0 0 #FFFFFF;
    padding-bottom: 10px;
    padding-top: 5px;">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL Motorola 156 MX-VL</a></div>
                 <div class="product_img" style="padding:5px; height:100px; width:163px; text-align:center; overflow:hidden"><a href="javascript:void(0)" class="quickLook1"  id="4" ><img height="100" border="0" width="100" title="" alt="" src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" style="visibility: visible; opacity: 1;"></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                 <div title="4" class="quickLook" id="quick-4" ></div>                        
            </div>
<!--            <div class="bottom_prod_box"></div> --> 
                  </div>             
            <div class="prod_details_tab">
            <a title="header=[Add to cart] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/cart.gif"></a>
            <a title="header=[Specials] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/favs.gif"></a>
            <a title="header=[Gifts] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/favorites.gif"></a>           
            <a class="prod_details" href="details.html">details</a>            
     </div>                     
</div>
               <div class="prod_box">
        <!--/*	<div class="top_prod_box"></div>*/-->
           <div class="round-corners" id="login-box" style="width:auto; height:auto; margin-top:10px; margin-left:0px; float:left ">
                <div class="t1"></div><div class="t2"></div><div class="b1"></div><div class="b2"></div>
            <div class="center_prod_box" style="background: none repeat scroll 0 0 #FFFFFF;
    padding-bottom: 10px;
    padding-top: 5px;">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL Motorola 156 MX-VL  Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="javascript:void(0)" class="quickLook1"  id="3"><img height="92" border="0" width="92" title="" alt="" src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" style="visibility: visible; opacity: 1;"></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>    
                 
                   <div title="3" class="quickLook" id="quick-3" ></div>
                                     
            </div>
                      
<!--            <div class="bottom_prod_box"></div> --> 
                  </div>             
            <div class="prod_details_tab">
            <a title="header=[Add to cart] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/cart.gif"></a>
            <a title="header=[Specials] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/favs.gif"></a>
            <a title="header=[Gifts] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/favorites.gif"></a>           
            <a class="prod_details" href="details.html">details</a>            
     </div>                     
</div>
             <div class="prod_box">
        <!--/*	<div class="top_prod_box"></div>*/-->
           <div class="round-corners" id="login-box" style="width:auto; height:auto; margin-top:10px; margin-left:0px; float:left ">
                <div class="t1"></div><div class="t2"></div><div class="b1"></div><div class="b2"></div>
            <div class="center_prod_box" style="background: none repeat scroll 0 0 #FFFFFF;
    padding-bottom: 10px;
    padding-top: 5px;">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html" class=""><img height="92" border="0" width="92" title="" alt="" src="<?php echo base_url(); ?>/assets/files/products/pic2.jpg" style="visibility: visible; opacity: 1;"></a></div>
                 <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
            </div>
<!--            <div class="bottom_prod_box"></div> --> 
                  </div>             
            <div class="prod_details_tab">
            <a title="header=[Add to cart] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/cart.gif"></a>
            <a title="header=[Specials] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/favs.gif"></a>
            <a title="header=[Gifts] body=[&nbsp;] fade=[on]" href="#"><img border="0" class="left_bt" title="" alt="" src="http://localhost/ebdshop/assets/images/favorites.gif"></a>           
            <a class="prod_details" href="details.html">details</a>            
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