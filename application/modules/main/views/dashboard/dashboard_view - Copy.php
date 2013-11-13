<!-- start of header -->	
<?php $this->load->view('layouts/header')?>
<!-- end of header -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dashboard.css" type="text/css" media="screen" />    
<script src="<?php echo base_url(); ?>assets/js/dashboard/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/banner/wt-rotat.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/banner/js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/banner/js/jquery.wt-rotator.min.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/banner/js/preview.js"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});

});

$(document).ready(function() {
		$('#tabvanilla > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
	});
</script>

<div class="main">
		<!-- start of sidebar -->
  <?php $this->load->view('layouts/left')?>
        <!-- end of sidebar -->
<div class="content">
				<!-- end of intro -->
	
      <div class="block">
				
			<div class="block-content">

            <div class="bcontainer">
            <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="triworks.jpg"/></noscript>
            </div>
            <div class="c-panel">
                <div class="buttons">
                    <div class="prev-btn"></div>
                    <div class="play-btn"></div>    
                    <div class="next-btn"></div>               
                </div>
                <div class="thumbnails">
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/triworks_abstract17.jpg" title="3D abstract art"><img src=""/></a>
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>JQuery Banner Rotator</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut tincidunt mi a lectus gravida pulvinar. Aliquam viverra cursus felis, 
                                lobortis elementum tortor malesuada non. 
                                Suspendisse hendrerit tortor a mauris auctor eu sodales metus laoreet. </div>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/sf.jpg" title="san francisco"><img src="images/thumbs/sf.jpg"/></a>
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                                                  	
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/triworks_abstract26.jpg" title="3D abstract art"><img src="images/thumbs/triworks_abstract26.jpg"/></a>   
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF">
                            	<h1 style="color:#0CF">JQuery Banner Rotator</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut tincidunt mi a lectus gravida pulvinar. Aliquam viverra cursus felis, 
                                lobortis elementum tortor malesuada non. 
                                Suspendisse hendrerit tortor a mauris auctor eu sodales metus laoreet. </div>                                                          	                   
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/tokyo.jpg" title="rainbow bridge"><img src="images/thumbs/tokyo.jpg"/></a>                  
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                                          	                          
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/lion.jpg" title="lion"><img src="images/thumbs/lion.jpg"/></a>        
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut tincidunt mi a lectus gravida pulvinar. Aliquam viverra cursus felis, 
                                lobortis elementum tortor malesuada non. 
                                Suspendisse hendrerit tortor a mauris auctor eu sodales metus laoreet. </div>                                                                     
                        </li>     
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/highway.jpg" title="highway"><img src="images/thumbs/highway.jpg"/></a>                    
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:484px; top:36px; width:336px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                             	                           
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/hk.jpg" title="hong kong"><img src="images/thumbs/hk.jpg"/></a>                    
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                             	                           
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>assets/banner/aquarium.jpg" title="aquarium"><img src="images/thumbs/aquarium.jpg"/></a>                    
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:484px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                           	                           
                        </li>     
                    </ul>
                </div>     
            </div>
        </div>				  <!-- end of tabber -->
		</div>
       <div class="four_banners">
<div class="four_banners_bt clearfix">
<div class="b01"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Makeup</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Makeup</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Skincare</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare.html">Sale</a></li>
</ul>
</div>
<div class="b02"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/dresses.html">Accessories</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">Sets and Collections</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">New Arrivals</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/clothing-magento-template-pink/dresses-magento-template-pink.html">Sale</a></li>
</ul>
</div>
<div class="b03"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/fragrances.html">Fragrances</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">Sets and Collections</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">New Arrivals</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/makeup-and-skincare/fragrances.html">Sale</a></li>
</ul>
</div>
<div class="b04" style="margin-right:0px; width:183px;"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Jewelry</a> 
<ul>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Sets and Collections</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">New Arrivals</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Gift Sets</a></li>
<li><a href="http://web-experiment.info/magento14/lightshop_pink/jewelry.html">Sale</a></li>
</ul>
</div>
</div>
</div>
        </div>
		
							<!-- end of tabs -->
							<div class="right">
								<div style="display: none;" class="tabs-content-rounding"></div>
								
							</div><!-- end of right -->
							<div class="right-bottom"></div><!-- end of right-bottom -->
							<div class="clear"></div>
								<!-- end of block-content -->
				
		<div id="content_box">

<style type="text/css">#outerContainer{width:488px;margin:0 auto;}</style>



<div class="conL">
<div class="dashboard">
				<div class="board">
										<div class="board-head">
											<div class="head-inner">
                                            <table cellpadding="0" cellspacing="0">
												<tr>
													<td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
													<td width="100px"><a href="" class="more alignright">More Ads</a></td>
												</tr>
											</table>
                                            </div>
										</div><!-- end of post-head -->
										<div class="board-body">
											<h1><a href="" class="close alignright">Close</a>Mens</h1>
											<!--<ul class="tabSe tabpro"><li class="now">1</li><li>2</li><li>3</li></ul>-->
                                            <div class="board-content">
												
                                                <div class="triple">
                                          
													<ul class="con">
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div></li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic3.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic1.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic3.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic1.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
</ul>										</div>
												<div class="clear"></div>
												<div class="buttons">
													<a href="" class="button-gray"><span>More Products</span></a>
													<a href="" class="button-blue"><span>Close</span></a>
												</div>
																								
											</div><!-- end of post-content -->																			
										</div><!-- end of post-body -->
									</div><!-- end of post -->
                                    <div class="board">
										<div class="board-head">
											<div class="head-inner">
                                            <table cellpadding="0" cellspacing="0">
												<tr>
													<td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
													<td width="100px"><a href="" class="more alignright">More Ads</a></td>
												</tr>
											</table>
                                            </div>
										</div><!-- end of post-head -->
										<div class="board-body">
											<h1><a href="" class="close alignright">Close</a>Mens</h1>
											<div class="board-content">
												
                                                <div class="triple">
													<ul class="con">
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div></li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
</ul>
												</div>
												<div class="clear"></div>
												<div class="buttons">
													<a href="" class="button-gray"><span>More Products</span></a>
													<a href="" class="button-blue"><span>Close</span></a>
												</div>
																								
											</div><!-- end of post-content -->																			
										</div><!-- end of post-body -->
									</div>
									<!-- end of post -->
						</div>
<div id="se"><h2 class="postTop">Recommendations for you</h2><ul class="tabSe"><li class="now">1</li><li>2</li><li>3</li></ul>
<ul class="con">
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div></li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic3.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic1.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
</ul>

<ul class="con" style="display: none">
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img src="<?php echo base_url(); ?>assets/files/products/pic3.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div></li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic3.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic1.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
</ul>
<ul class="con" style="display: none">
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div></li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic2.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic3.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic1.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="holder">
<div class="link1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/files/products/pic4.jpg" alt="" /></a></div><div class="link2"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="link3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
</ul>
</div>
<div id="hcr1">
<div id="tabvanilla" class="widget">

            <ul class="tabnav ui-tabs-nav">
                <li class="item ui-tabs-selected"><a href="#popular">Popular</a></li>
                <li class="item"><a href="#recent">Recent</a></li>
                <li class="item"><a href="#featured">Featured</a></li>
            </ul>

            <div style="display: block;" id="popular" class="tabdiv ui-tabs-panel">
                <ul>
                    <li><a href="#">Welsh Zombie Sheep Invasion</a></li>
                    <li><a href="#">Sheep Rising From The Dead</a></li>
                    <li><a href="#">Blogosphere Daily Released!</a></li>
                    <li><a href="#">Aliens Infiltrate Army Base In UK Town</a></li>
                    <li><a href="#">U2 Rocks New York's Central Park</a></li>
                    <li><a href="#">TA Soldiers Wear Uniforms To Work</a></li>
                    <li><a href="#">13 People Rescued From Flat Fire</a></li>
                    <li><a href="#">US Troops Abandon Afghan Outpost</a></li>
                    <li><a href="#">Are We Alone? A Look Into Space</a></li>
                    <li><a href="#">Apple iPhone 3G Released</a></li>
                </ul>
            </div><!--/popular-->
            
            <div id="recent" class="tabdiv ui-tabs-panel ui-tabs-hide">
                <p>Lorem ipsum dolor sit amet.</p>
            </div><!--/recent-->
            
            <div id="featured" class="tabdiv ui-tabs-panel ui-tabs-hide">
                <ul>
                    <li><a href="#">Aliens Infiltrate Army Base In UK Town</a></li>
                    <li><a href="#">Are We Alone? A Look Into Space</a></li>
                    <li><a href="#">U2 Rocks New York's Central Park</a></li>
                    <li><a href="#">TA Soldiers Wear Uniforms To Work</a></li>
                    <li><a href="#">13 People Rescued From Flat Fire</a></li>
                    <li><a href="#">US Troops Abandon Afghan Outpost</a></li>
                    <li><a href="#">Sheep Rising From The Dead</a></li>
                    <li><a href="#">Blogosphere Daily Released!</a></li>
                    <li><a href="#">Apple iPhone 3G Released</a></li>
                    <li><a href="#">Welsh Zombie Sheep Invasion</a></li>
                </ul>
            </div><!--featured-->

        </div>
</div>

<div id="re">
<div id="reA" class="box">
<h2>Highest Customer Rated</h2>
<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/files/tradefair/made-in6.jpg" alt="Flate" title="Flate Plate Solar System"></a>
<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/files/tradefair/made-in7.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/files/tradefair/made-in8.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/files/tradefair/made-in9.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/files/tradefair/made-in10.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/files/tradefair/made-in11.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>

<div>
<a class="on" href="#" target="_blank" id="reLabel0"><span class="tp"></span><span class="bt"></span>Flate Plate Solar System</a>
<a href="#" target="_blank" id="reLabel1"><span class="tp"></span><span class="bt"></span>LED Downlight</a>
<a href="#" target="_blank" id="reLabel2"><span class="tp"></span><span class="bt"></span>LED Spot Bulb</a>
<a href="#" target="_blank" id="reLabel3"><span class="tp"></span><span class="bt"></span>Ingenious SPA</a>
<a href="#" target="_blank" id="reLabel4"><span class="tp"></span><span class="bt"></span>Frequency Inverter</a>
<a href="#" target="_blank" id="reLabel5"><span class="tp"></span><span class="bt"></span>Frequency Inverter</a>
</div>
</div>
<div class="box" style="float:left; width:240px; border:1px solid #e3e1d5; height:170px; margin-left:5px">
<h2 style="width:91%">Highest Customer Rated</h2>
<div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 138px;" class="newsticker-jcarousellite">
		<ul style="margin: 0pt; padding: 0pt; position: relative; list-style-type: none; z-index: 1; height: 414px; top: -184px;"><li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in8.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?space_travel">Space Travel</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li><li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">The Traveling Tree</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
            <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and the Lady</a>
					<span class="cat">Category: Illustrations</span>
				</div>
				<div class="clear"></div>
			</li>
			
            <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in7.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?family_of_colors">The Family of Colors</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
            <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in8.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?teddybear_mac">Teddy Bear and MacBook</a>
					<span class="cat">Category: Photos</span>
				</div>
				<div class="clear"></div>
			</li>
			<li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in9.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?rainbow_butterfly">Rainbow Butterfly</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li>
			<li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in8.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?space_travel">Space Travel</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li>
			<li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">The Traveling Tree</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
        <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and the Lady</a>
					<span class="cat">Category: Illustrations</span>
				</div>
				<div class="clear"></div>
			</li></ul>
    </div>
</div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/skin.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.js"></script>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

</script>
<div style="width:245px; height:192px; float:right; border:1px solid #B7C7DD; margin-bottom:10px; margin-right:3px;">
 <div style="text-align:center; font-weight:bolder; background:#f3f3f3; padding-bottom:5px; height:25px; line-height:25px;">Discount Feature</div>
  <ul id="mycarousel" class="jcarousel-skin-tango">
    <li>
<div class="disholder">
<div class="dislink1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aenean ligula nunc, porta quis commodo quis, accumsan in justo.</span><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" /></a></div><div class="dislink2"><a href="http://www.cssplay.co.uk/menus/url2" title="dislink2"></a></div><div class="dislink3"><p><a href="">The Cute Kitten - Looking Up...</a></p></div>
</div> 
</li>
<li>
<div class="disholder">
<div class="dislink1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/images/2.jpg" alt="" /></a></div><div class="dislink2"><a href="http://www.cssplay.co.uk/menus/url2" title="dislink2"></a></div><div class="dislink3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div></li>
<li>
<div class="disholder">
<div class="dislink1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/images/4.jpg" alt="" /></a></div><div class="dislink3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="dislink3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
<li>
<div class="disholder">
<div class="dislink1"><a href="http://www.cssplay.co.uk/menus/url1"><span>Aliquam nisl mauris, ultricies id sagittis id, eleifend eget lectus. Aliquam erat volutpat.</span><img src="<?php echo base_url(); ?>assets/images/5.jpg" alt="" /></a></div><div class="dislink3"><a href="http://www.cssplay.co.uk/menus/url2" title="link2"></a></div><div class="dislink3"><p><a href="">The Green Lizard - Escapes...</a></p></div>
</div>
</li>
</ul>
</div>
<div id="fourInOne"><div id="state"><div>Follow me&nbsp;&nbsp;<a href="http://membercenter.made-in-china.com/join/"><strong>Join Now!</strong></a></div></div><ul class="hot"><li class="lfAct"><span id="sign">How to Shop</span></li> <li class="rg"><span id="alert">This Week's</span></li></ul>

<div style="display: block">
<div id="signA" style="display: block;">

<ul><li><a href="http://www.made-in-china.com/prod/catlist/">Search Products &amp; Suppliers</a></li> <li class="o"><a href="http://www.made-in-china.com/prod/catlist/">Send Inquiry</a></li> <li><a href="http://membercenter.made-in-china.com/trade/post-for-buy.html">Post Buy Offer</a></li>
<li class="o lst"><a href="http://www.made-in-china.com/audited-suppliers/for-buyers/">Trade Safely</a></li></ul>

</div>
<div id="alertA">
<ul><li><a href="http://www.made-in-china.com/prod/catlist/">Search Products &amp; Suppliers</a></li> <li class="o"><a href="http://www.made-in-china.com/prod/catlist/">Send Inquiry</a></li> <li><a href="http://membercenter.made-in-china.com/trade/post-for-buy.html">Post Buy Offer</a></li>
<li class="o lst"><a href="http://www.made-in-china.com/audited-suppliers/for-buyers/">Trade Safely</a></li></ul>
</div>
</div>
<div style="display: none;">
<div id="buyerGA">
<ul><li><a href="http://www.made-in-china.com/prod/catlist/">Search Products &amp; Suppliers</a></li> <li class="o"><a href="http://www.made-in-china.com/prod/catlist/">Send Inquiry</a></li> <li><a href="http://membercenter.made-in-china.com/trade/post-for-buy.html">Post Buy Offer</a></li>
<li class="o lst"><a href="http://www.made-in-china.com/audited-suppliers/for-buyers/">Trade Safely</a></li></ul>
</div>

<div id="sellerGA">
<ul><li><a href="http://www.made-in-china.com/prod/catlist/">Search Products &amp; Suppliers</a></li> <li class="o"><a href="http://www.made-in-china.com/prod/catlist/">Send Inquiry</a></li> <li><a href="http://membercenter.made-in-china.com/trade/post-for-buy.html">Post Buy Offer</a></li>
<li class="o lst"><a href="http://www.made-in-china.com/audited-suppliers/for-buyers/">Trade Safely</a></li></ul>
</div>
</div>

<ul class="hot hotBt">
<li class="lf"><span id="buyerG">Buyer Guide</span></li> <li class="rg"><span id="sellerG">Seller Guide</span></li></ul></div>


<div id="services"><ul class="tabS"><li class="" id="tab1_10">Our Services</li> <li id="tab1_11" class="now">Buyer Service</li></ul><div class="con" id="tabCon1_10" style="display:none"><h3 id="ar"><a target="_blank" href="http://www.made-in-china.com/audited-suppliers/for-buyers/browse-audit-reports.html">More</a>Audit Reports</h3><ul><li>General Information and Photos</li> <li>Foreign Trade Capacity</li> <li>Product Research &amp; Development Capacity</li> <li>Quality Management System</li></ul><h3 id="as"><a target="_blank" href="http://www.made-in-china.com/audited-suppliers/">More</a>Audited Suppliers</h3><ul><li>Publish and manage more business information</li> <li>Work with a more powerful online office and Showroom</li></ul><h3 id="tm"><a target="_blank" href="http://trademessenger.made-in-china.com/">More</a>TradeMessenger</h3><ul class="tm"><li>Instant Talk</li> <li>Talk Review</li> <li>File Transfer</li> <li>Inquiry Alert</li></ul></div><div style="display: block;" class="con bs" id="tabCon1_11"><p>Made-in-China.com Buyer Service Team has dedicated itself to providing professional support and assistance to its members with the goal of helping global buyers do business with Chinese suppliers.</p><p>We can offer various types of trading related services, such as:</p><ul><li><a target="_blank" href="http://www.made-in-china.com/info/activities/Customer-Activities-1.html">Private Sourcing Events</a></li> <li><a target="_blank" href="http://www.made-in-china.com/tradeservice/service/product-sourcing.html">Product Sourcing &amp; Recommending</a></li> <li><a target="_blank" href="http://www.made-in-china.com/tradeservice/service/trade-support.html">Trade Support</a></li></ul><p class="r"><a target="_blank" href="http://www.made-in-china.com/tradeservice/main/">More</a></p><img src="Made-in-China.com%20China%20manufacturer%20directory%2C%20China%20products%2C%20China%20suppliers%2C%20China%20trade%2C%20China%20factory_files/bs000001.jpg" alt="We are standing by to offer assistance at any time!"></div></div>

<div id="tc"><ul class="tabCa"><li class="now" id="tab2_10">Trade Shows</li> <li id="tab2_11">Corporate Activities</li></ul>
<div id="tabCa01ct">
<div id="TradeShowContent_0" class="show">
<a href="#"><img src="<?php echo base_url(); ?>assets/files/tradefair/Shanghaj.jpg" alt="Shanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers" class="b" width="70" height="60"></a><h3><a href="#">Shanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers</a></h3><span class="tsDate">[2010-12-08 - 2010-12-11] </span></div>
<div id="TradeShowContent_1" class="hide"><a href="#"><img src="<?php echo base_url(); ?>assets/files/tradefair/SNEC-5ti.jpg" alt="SNEC 5th (2011) International Photovoltaic Power Generation Conference &amp; Exhibition" class="b" width="70" height="60"></a><h3><a href="#">SNEC 5th (2011) International Photovoltaic Power Generation Conference &amp; Exhibition</a></h3><span class="tsDate">[2011-02-22 - 2011-02-24] </span></div><div id="TradeShowContent_2" class="hide"><a href="#"><img src="<?php echo base_url(); ?>assets/files/tradefair/The-21su.jpg" alt="The 21st East China Fair (2011 Shanghai)" class="b" width="70" height="60"></a><h3><a href="#">The 21st East China Fair (2011 Shanghai)</a></h3><span class="tsDate">[2011-03-01 - 2011-03-05] </span></div><div id="TradeShowContent_3" class="hide"><a href="#"><img src="<?php echo base_url(); ?>assets/files/tradefair/APPLIAND.bmp" alt="APPLIANCE WORLD EXPO SHANGHAI 2011" class="b" width="70" height="60"></a><h3><a href="#">APPLIANCE WORLD EXPO SHANGHAI 2011</a></h3><span class="tsDate">[2011-03-15 - 2011-03-18] </span></div><div id="TradeShowContent_4" class="hide"><a href="http://tradeshow.made-in-china.com/fairs/fairs-detail-pSmQRxAUBniF/China-Consumer-Electronics-Fair-Shenzhen-2011-CCEF-.html"><img src="<?php echo base_url(); ?>assets/files/tradefair/China-Cp.jpg" alt="China Consumer Electronics Fair (Shenzhen) 2011(CCEF)" class="b" width="70" height="60"></a><h3><a href="#">China Consumer Electronics Fair (Shenzhen) 2011(CCEF)</a></h3><span class="tsDate">[2011-04-08 - 2011-04-10] </span></div><div class="s"><a class="now" href="#" onmouseover="TradeShowSwitch(0,5);"><img src="<?php echo base_url(); ?>assets/files/tradefair/Shanghaj.jpg" alt="Shanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers" width="24" height="21"> </a><a href="#" onmouseover="TradeShowSwitch(1,5);"><img src="<?php echo base_url(); ?>assets/files/tradefair/SNEC-5ti.jpg" alt="SNEC 5th (2011) International Photovoltaic Power Generation Conference &amp; Exhibition" width="24" height="21"> </a><a href="#" onmouseover="TradeShowSwitch(2,5);"><img src="<?php echo base_url(); ?>assets/files/tradefair/The-21su.jpg" alt="The 21st East China Fair (2011 Shanghai)" width="24" height="21"> </a><a href="#" onmouseover="TradeShowSwitch(3,5);"><img src="<?php echo base_url(); ?>assets/files/tradefair/APPLIAND.bmp" alt="APPLIANCE WORLD EXPO SHANGHAI 2011" width="24" height="21"> </a>
<a href="#" onmouseover="TradeShowSwitch(4,5);"><img src="<?php echo base_url(); ?>assets/files/tradefair/China-Cp.jpg" alt="China Consumer Electronics Fair (Shenzhen) 2011(CCEF)" width="24" height="21"> </a></div>

<a href="/fairs/" class="mr">More</a></div><ul style="display:none" id="tabCa02ct" class="ca"><li class="e magnified"><a href="" class="img"><img style="width: 48px; height: 41px;" src="<?php echo base_url(); ?>assets/files/tradefair/The-12ti.jpg" alt="" width="34"></a> <a href="#" class="text">The 12th International Computer Communication &amp; Consumer Products Expo</a><div style="display: block;" class="des  hide"><strong>Date:</strong> October 14 - 16, 2010<br><strong>Venue:</strong> Dongguan International Conference &amp; Exhibition Center</div></li><li class="ee minified"><a href="#" class="img"><img style="width: 34px; height: 29px;" src="<?php echo base_url(); ?>assets/files/tradefair/IFA-Berm.jpg" alt="" width="34"></a> <a href="#" class="text">IFA Berlin 2010</a><div style="display: none;" class="des  hide"><strong>Date:</strong> September 3 - 8, 2010<br><strong>Venue:</strong> Messe Berlin</div></li><li class="mr"><a href="http://www.made-in-china.com/info/activities-1.html">More</a></li></ul>
</div>



<div id="prom" class="box" style="width:718px; height:125px; border:1px solid #e3e1d5"><h2 style="width:100%">Sponser By</h2>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/scrollimage/js/crawler.js"></script><style type="text/css">.marquee{white-space:nowrap;overflow:hidden;visibility:hidden;}#marq_kill_marg_bord{border:none!important;margin:0!important;}</style>
<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler',
	style: {
		'padding': '1px',
		'margin-top':'5px',
		'width': '973px',
		'height': '90px'
		
	},
	inc:1, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	addDelay: 75,
	direction: 'right',
	savedirection: true
});



</script>
<style>
.mycraw{height:100px;}
.mycraw img{ margin-left:15px; margin-right:15px;margin-top:0px;border:1px solid #e2e1e1; height:75px; width:75px;}
</style>
<div style="overflow: hidden;" class="marquee0"><div style="visibility: visible; padding: 1px; margin-top: 5px; width: 973px; height: 90px; position: relative; overflow: hidden;"><div style="position: absolute; left: -1482px; white-space: nowrap; top: 7px;">&nbsp;<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a></div><div style="position: absolute; left: 183px; white-space: nowrap; top: 7px;">&nbsp;<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="<?php echo base_url(); ?>assets/images/payment.png"></a></div></div></div>

</div>
</div>
<div class="single-tile">
</div><!-- end of single-tile-wrapper -->
	</div><!-- end of block -->
		</div><!-- end of content -->
		<div class="clear"></div>
	</div><!-- end of main -->
<?php $this->load->view('layouts/footer')?>	