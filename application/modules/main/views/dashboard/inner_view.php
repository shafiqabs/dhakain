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
<div class="board-head">
  <div class="head-inner">
      <div class="group">
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
<h2 class="centerBoxHeading"><span style="display:inline-block; width:285px;"><?php echo $offer_name; ?></span><span id="loading"></span></h2>
<div id="board-content">
<div id="" class="productcarousel jcarousel-skin-product" >
<div style="position:relative; right:0px; width:130px; height:30px; float:right; top:-51px;">
<div class="" style="float:left; width:35px; height:30px;"><a href="javascript:void(0)" class="mycarousel-prev"></a></div>
<div class="jcarousel-control" style="float:left; width:60px;">
      <a href="javascript:void(0)">1</a>
      <a href="javascript:void(0)">2</a>
      <a href="javascript:void(0)">3</a>
</div>
<div class="" style="float:left; width:30px;"><a href="javascript:void(0)" class="mycarousel-next"></a></div>
</div>
<ul>
<li>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span><dl><dd>Shop name</dd><dd>location</dd><dd>price</dd></dl></span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link33"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link33"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>

</li>
<li>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span><dl><dd>Shop name</dd><dd>location</dd><dd>price</dd></dl></span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link33"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic4.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link22"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
<div class="holder">
<div class="link11"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img alt="" src="http://localhost/martbd/assets/files/products/pic2.jpg"></a></div><div class="link33"><a title="link22" href="http://www.cssplay.co.uk/menus/url2"></a></div><div class="link33"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>

</li>
</ul>
</div>								
<div class="clear"></div>
<div class="buttons">
<a href="" class="button"><span><b>More Products</b></span></a>
<br class="clearBoth">
 
</div>
<!-- eof: featured products  -->
</div>                    
