<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MARTBD</title>
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" />
<meta name="description" content="" />
<!--[if IE 6]>
	<link rel="stylesheet" href=""assets/css/style_ie.css" media="all" />
<![endif]-->
<script src="assets/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/banner/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.event.drag-2.0.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
 <link rel="stylesheet" href="assets/css/home.css" type="text/css" media="screen" />
    <link href="assets/css/block.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/left_navigation.css" type="text/css" media="screen" />
 
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="assets/js/js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->

	<!-- Sliding effect -->
	<!-- start  login panel-->
    <link rel="stylesheet" href="assets/loginpanel/css/slide.css" type="text/css" media="screen" />
	<script src="assets/loginpanel/js/slide.js" type="text/javascript"></script>
	<!-- end  login panel-->
    <!-- start navigation -->
    <link href="assets/main_navigation/css/skins/light_blue.css" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='assets/main_navigation/js/jquery.hoverIntent.minified.js'></script>
	<script type='text/javascript' src='assets/main_navigation/js/jquery.dcmegamenu.1.2.js'></script>
        <!-- end navigation-->
     <!-- start tab vanila -->   
    <link href="assets/tab/css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="assets/tab/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script type="text/javascript" src="assets/tab/js/sprinkle.js"></script>
	<!-- end tab vanila -->   
	<script type="text/javascript">
    $(document).ready(function($){
    
        $('#mega-menu-8').dcMegaMenu({
            rowItems: '3',
            speed: 'fast',
            effect: 'slide'
        });
        
    });
	
	$(document).ready(function(){

		$('.maximize_user').click(function() {
				var url = $(this).attr('title');
				$(".minimize_user").toggle();
				$(".minimize_div").slideToggle('slow');
				$(this).toggle();
			
				
			});	
			
		$('.minimize_user').click(function() {
				var url = $(this).attr('title');
				$(".minimize_div").slideToggle("slow");
				$(".maximize_user").toggle();
				$(this).toggle();
				//alert(url);
			
			});	
			
		  $('div.demo-show3> div').hide();  
		  $('div.demo-show3> h5').click(function() {
		
		   $(this).next('div').slideToggle('fast')
		  .siblings('div:visible').slideUp('fast');
		
			 var id=$(this).attr('id');
			//alert(id);
		  $('#minus-'+id).slideToggle();
		  $('#plus-'+id).slideToggle();

  });
  

	
})


	
	$(document).ready(function() {
		$('#tabvanilla > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
	});
	$(document).ready(function() {
		$('#tabvmenuleft > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
	});
	
    </script>
<script src="assets/scrollimage/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<link rel="stylesheet" href="assets/scrollimage/css/style.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="assets/css/y_search_tab.css" media="screen" />
<link type="text/css" rel="stylesheet" href="assets/css/navigation.css" media="screen" />
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
</script>
</head>
<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to Web-Kreation</h1>
				<h2>Sliding login panel Demo with jQuery</h2>		
				<p class="grey">You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!</p>
				<h2>Download</h2>
				<p class="grey">To download this script go back to <a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Download">article &raquo;</a></p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="#" method="post">
					<h1>Not a member yet? Sign Up!</h1>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Welcome Md Shafiqul Islam Mintu</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
</div>
<!--panel -->
<div class="layer"></div>
<div class="wrapper">

        <!-- Start Top Header Navigation -->
        <div id="top_nav">
        <div id="left"><ul><li><img src="assets/images/msg.gif" height="10"  /><a>&nbsp;Msg 53</a></li><li><a><img src="assets/images/basket.gif" height="10"/>&nbsp;25 items -BDT 25000</a></li><li><img src="assets/images/msg.gif" height="10"  /><a>&nbsp;Buy</a></li><li><img src="assets/images/msg.gif" height="10"  /><a>&nbsp;Sell</a></li><li class="last"><img src="assets/images/msg.gif" height="10"  /><a>&nbsp;My Mart</a></li>
        </ul></div>
  
        <div id="right">
        <ul><li><a><img src="assets/images/letter.gif" />&nbsp;</a></li><li><a>&nbsp;<img src="assets/images/icon_live_chat.gif" /></a></li><li class="last"><a>&nbsp;<img src="assets/images/tel_icon.gif" />&nbsp;02-8014722</a></li></ul>

        </div>
        
        <!-- End Top Header Navigation -->
        <div class="clear"></div>
	<div class="header" style="margin-bottom:10px;">
		<a href="" class="logo"></a>	
		<div class="navigation">
			<ul>
				<li><a href="">BellAliant.net Home</a></li>
				<li class="selected"><a href="">For Your Home</a></li>
				<li><a href="">For Business</a></li>
			</ul>
		</div><!-- end of navigation -->
     <a href="#" id="post"><img src="assets/images/post.gif" alt="Made in China" width="93" height="54" border="0" /></a>
	
<script>
	$(document).ready(function()
	{
		$('.y_search_category').click(function()
		{
			var category_id = $(this).attr('rel');
			$('#y_search_category_value').val(category_id);
		});
		
		$('.y_search_result_list').live('mouseover',function()
		{
			var list_id = $(this).attr('id');
			$('#'+list_id).css('background','#D8E5F0');
			var split_list_id = list_id.split('_');
			var cid = split_list_id[4];
			$.ajax(
			{
				data: 'cid='+cid+'&method=2',
				type: 'POST',
				url: '<?php echo $y_search_ajax_url; ?>',
				dataType: 'json',
				success: function(json)
				{
					$('#y_search_hints_result_right').empty();
					$('#y_search_hints_result_right').html(json.html);
				}
			});
		});
		
		$('.y_search_result_list').live('mouseout',function()
		{
			var list_id = $(this).attr('id');
			$('#'+list_id).css('background','transparent');
		});
		
		$('.y_search_result_list').live('click',function()
		{
			var str = $(this).text();
			$('#y_search_field').val(str);
			$('.y_search_hints').fadeOut('fast');
		});
		
		$('#y_search_field').keyup(function()
		{
			category_id = $('#y_search_category_value').val();
			var str = jQuery.trim($('#y_search_field').val());
			$('#y_search_hints_result_left').empty();
			if(str != '')
			{
				$.ajax(
				{
					data: 'category='+category_id+'&str='+str+'&method=1',
					type: 'POST',
					url: '<?php echo $y_search_ajax_url; ?>',
					dataType: 'json',
					success: function(json)
					{
						if(json.num_rows == 0)
						{
							$('.y_search_hints').fadeOut('fast');
						}
						else
						{
							$('#y_search_hints_result_right').empty();
							$('#y_search_hints_result_left').html(json.html);
							$('.y_search_hints').fadeIn('fast');
						}
					}
				});
			}
			else
			{
				$('.y_search_hints').fadeOut('fast');
			}
		});
	});
</script>

		<div class="search-panel" style="border-top:1px solid #e1e1e1;">
			<div class="y_search_tab">
	<form class="" method="post" action="<?php echo $y_search_form_action; ?>">
	
		<input type="hidden" id="y_search_category_value" name="y_search_category_value" value="1" />
		<div class="y_search_tab_border">
			<div class="y_search_tab_inner">
				<input type="text" id="y_search_field" name="y_search_field" value="" />
				<span class="y_button_wrapper">
					<button type="submit" id="y_search_button" name="y_search_button">Web Search</button>
				</span>
			</div>
		</div>
		<div class="y_search_hints">
			<div class="y_search_hints_inner">
				<div id="y_search_hints_result">
					<div id="y_search_hints_result_left"></div>
					<div id="y_search_hints_result_right"></div>
				</div>
			</div>
		</div>
	</form>
</div>
			
		</div><!-- end of search-panel -->
        

<div class="demo-container">
<style type="text/css">/**/
</style>
<div id="menuHolder">

    <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Womens</span></a><div class="col3 drop">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    <ul class="exsubnav">
    <li><a href="#"><strong>Test-Collection4 Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4 Test-Collection4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
	<li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>

    </ul>
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
    <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Mens</span></a><div class="col2 drop men">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    <ul class="exsubnav">
    <li><a href="#"><strong>Test-Collection4 Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4 Test-Collection4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
	<li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>

    </ul>
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
       
    <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Baby & Child</span></a><div class="col1 drop baby">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    <ul class="exsubnav">
    <li><a href="#"><strong>Test-Collection4 Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4 Test-Collection4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
	<li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
    <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>

    </ul>
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
    
    
    <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Beauty</span></a><div class="col3 drop beauty">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
    
    <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Foods</span></a><div class="col2 drop foods">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
    
    <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Footwear</span></a><div class="col2 drop footwear">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
    
    
     <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Home Appliances </span></a><div class="col3 drop appliances">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>

 <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Furniture</span></a><div class="col3 drop furniture">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>

 <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Electricals</span></a><div class="col3 drop electricals">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>

 <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Gifts</span></a><div class="col2 drop gifts">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>

   <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Jewellery</span></a><div class="col2 drop jewellery">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>

     <ul class="menu">
   <li class="sub"><a class="aTop" href=""><span>Lighting</span></a><div class="col3 drop lighting">
    <ul class="subnav">
    <li><a href="#"><strong>Test-Collection1</strong></a>
    <ul>
    <li><a href="#">Mobile Phone & Accessories</a></li>
      <li><a href="#">Test-Collection1-1</a></li>
    </ul>
    </li>
        <li><a href="#"><strong>Test-Collection2</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-2</a></li>
      <li><a href="#">Test-Collection1-2</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection3</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-3</a></li>
      <li><a href="#">Mobile Phone & Accessories</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    <li><a href="#"><strong>Test-Collection4</strong></a>
    <ul>
    <li><a href="#">Test-Collection1-4</a></li>
      <li><a href="#">Test-Collection1-4</a></li>
    </ul>
    </li>
    </ul>
    
    <br class="clear" />
    <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="close"><a href=""></a></li></ul>
  
  </div>
</div>
	
        <div class="clear"></div>
        
        <div class="clear"></div>
	</div><!-- end of header -->	
	<div class="main">
		<div class="sidebar">
<div class="module" style="margin-top:0px;">
<div class="module-title">CATEGORIES</div>
<style type="text/css">/**/
</style>
<div id="flyList">
 
 <ul id="left_menu">
 <li class="level1-li sub"><a class="level1-a" href="">Collections<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col3"><div class="listCol"><h5>Dresses</h5><ul><li><a href="">Floral Print</a></li> <li><a href="">Sleeveless</a></li> <li><a href="">Pure Cotton</a></li> <li><a href="">Linen Blend</a></li> <li><a href="">Buttoned</a></li></ul><h5>Coats &amp; Jackets</h5><ul><li><a href="">Silk Blend</a></li> <li><a href="">Cotton Rich</a></li> <li><a href="">Sleeveless</a></li> <li><a href="">Pure Linen</a></li></ul></div><div class="listCol"><h5>Jeans</h5><ul><li><a href="">Flared denim</a></li> <li><a href="">Bootleg</a></li> <li><a href="">Cropped</a></li></ul><h5>Knitwear</h5><ul><li><a href="">Cardigans</a></li> <li><a href="">Bolero</a></li> <li><a href="">Plain long sleeve</a></li></ul><h5>Socks</h5><ul><li><a href="">Plain Cotton</a></li> <li><a href="">Trainer</a></li> <li><a href="">Sports</a></li></ul></div><div class="listCol"><h5>Shirts &amp; Blouses</h5><ul><li><a href="">Pure Cotton</a></li> <li><a href="">Pure Silk</a></li> <li><a href="">Floral</a></li></ul><h5>Skirts</h5><ul><li><a href="">Pleated</a></li> <li><a href="">Belted</a></li> <li><a href="">Panelled</a></li> <li><a href="">Pencil</a></li> <li><a href="">Flared</a></li></ul></div><div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="level1-li sub"><a class="level1-a" href="">Mail Order<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col2"><div class="listCol"><h5>Electronics</h5><ul><li><a href="">Televisions</a></li> <li><a href="">DVD Players</a></li> <li><a href="">Mobiles</a></li> <li><a href="">Games Consoles</a></li></ul><h5>Wine</h5><ul><li><a href="">Red</a></li> <li><a href="">White</a></li> <li><a href="">Rose</a></li> <li><a href="">Sparkling</a></li></ul></div><div class="listCol"><h5>Furniture</h5><ul><li><a href="">Garden furniture</a></li> <li><a href="">Sofas</a></li> <li><a href="">Dining chairs</a></li> <li><a href="">Beds</a></li></ul></div><div class="bottomLine"><p>Special offer on all <a href="">Microwaves</a> - 50% OFF!</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="level1-li sub"><a class="level1-a" href="">Special Offers<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col1"><div class="listCol"><h5>Meanswear</h5><ul><li><a href="">Half price shirts</a></li> <li><a href="">30% off Suits</a></li> <li><a href="">Half price shoes</a></li> <li><a href="">2 for 1 Shirts</a></li></ul><h5>Kidswear</h5><ul><li><a href="">Half price shirts</a></li> <li><a href="">2 for 1 T shirts</a></li> <li><a href="">1/3 off trainers</a></li></ul></div><div class="bottomLine"><p>More <a href="">offers</a> online.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="level1-li sub"><a class="level1-a" href="">Accessories<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col3 left1"><div class="listCol"><h5>Scarves</h5><ul><li><a href="">Silk</a></li> <li><a href="">Chiffon</a></li> <li><a href="">Crinkle</a></li> <li><a href="">Butterfly</a></li> <li><a href="">Tassel</a></li></ul><h5>Belts</h5><ul><li><a href="">Leather</a></li> <li><a href="">Elasticated</a></li> <li><a href="">Reversible</a></li></ul></div><div class="listCol"><h5>Necklaces</h5><ul><li><a href="">Pendant</a></li> <li><a href="">Pearl</a></li> <li><a href="">Drop</a></li></ul><h5>Earrings</h5><ul><li><a href="">Party</a></li> <li><a href="">Silver</a></li> <li><a href="">Gold</a></li> <li><a href="">Stud</a></li></ul><h5>Rings</h5><ul><li><a href="">Diamond</a></li> <li><a href="">Pearl</a></li> <li><a href="">Emerald</a></li></ul></div><div class="listCol"><h5>Handbags</h5><ul><li><a href="">Shopper</a></li> <li><a href="">Tote</a></li> <li><a href="">Shoulder</a></li> <li><a href="">Beach</a></li> <li><a href="">Leather</a></li> <li><a href="">Clutch</a></li> <li><a href="">Mock Crocodile</a></li></ul></div><div class="bottomLine"><p>Why not treat yourself to a <a href="">makeover</a> in our cosmetic department.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li></ul><div id="pad"></div></div>
</div>

<div class="clear"></div>

<script type="text/javascript" src="assets/tab/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/tab/js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="assets/tab/js/jquery.naviDropDown.1.0.js"></script>

<script type="text/javascript">
$(function(){
	
	$('#navigation_vert').naviDropDown({
		dropDownWidth: '300px',
		orientation: 'vertical'
	});
});
</script>
<div class="clear"></div>

<div class="clear"></div>
<div class="module">
<div class="module-title">Brand & Mall</div>
<div id="tabvmenuleft" >

            <ul class="tabmenu">
                <li class="item" ><a href="#1">Brand</a></li>
                <li class="item" ><a href="#2">Supplier</a></li>
                <li class="item" ><a href="#3">Mall</a></li>
            </ul>

         <div id="1">
               <ul id="leftCats">
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Mobile &#038; Accessories</a></span> 
                </li>
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Fast food & Chines</a></span> 
                </li>
				</ul>
          
            </div><!--/popular-->
            <div id="2">
               <ul id="leftCats">
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
                </li>
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Fast food & Chines</a></span> 
                </li>
				</ul>
          
            </div><!--/popular-->
            <div id="3">
               <ul id="leftCats">
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
                </li>
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Fast food & Chines</a></span> 
                </li>
				</ul>
          
            </div><!--/popular-->
        </div>
</div>
<div class="clear"></div>
<div class="module">
<div class="module-title">LOCATIONS</div>
<div class="clear"></div>
<div class="demo-show3"  >
<h5 class="location_link_title" id=1 >
Dhanmondi</h5>
<div class="sub_link">
<ul id="leftCats">
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
</li>

</ul>
</div>
<h5 class="location_link_title" id=1 >
Uttara</h5>
<div class="sub_link">
<ul id="leftCats">
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Hospital & Diogonestic</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Police station</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Fast food & Chines</a></span> 
</li>

</ul>
</div>

</div>
</div>
<div class="clear"></div>
<div class="module">

<script type="text/javascript">

$(document).ready(function() {	


  //Get all the LI from the #tabMenu UL
  $('#tabMenu > li').click(function(){
        
    //remove the selected class from all LI    
    $('#tabMenu > li').removeClass('selected');
    
    //Reassign the LI
    $(this).addClass('selected');
    
    //Hide all the DIV in .boxBody
    $('.boxBody div').slideUp('1500');
    
    //Look for the right DIV in boxBody according to the Navigation UL index, therefore, the arrangement is very important.
    $('.boxBody div:eq(' + $('#tabMenu > li').index(this) + ')').slideDown('1500');
    
  }).mouseover(function() {

    //Add and remove class, Personally I dont think this is the right way to do it, anyone please suggest    
    $(this).addClass('mouseover');
    $(this).removeClass('mouseout');   
    
  }).mouseout(function() {
    
    //Add and remove class
    $(this).addClass('mouseout');
    $(this).removeClass('mouseover');    
    
  });

  //Mouseover with animate Effect for Category menu list
  $('.boxBody #category li,#comments li,#posts li,#famous li').mouseover(function() {

    //Change background color and animate the padding
    $(this).css('backgroundColor','#efefef');
    $(this).children().animate({paddingLeft:"2px"}, {queue:false, duration:300});
  }).mouseout(function() {
    
    //Change background color and animate the padding
    $(this).css('backgroundColor','');
    $(this).children().animate({paddingLeft:"0"}, {queue:false, duration:300});
  });  
	
  //Mouseover effect for Posts, Comments, Famous Posts and Random Posts menu list.
  $('.boxBody li').click(function(){
    window.location = $(this).find("a").attr("href");
  }).mouseover(function() {
    $(this).css('backgroundColor','#efefef');
  }).mouseout(function() {
    $(this).css('backgroundColor','');
  });  	
	
});

</script> 
<div class="module-title">BRAND</div>
<div id="navigation_vert">
                <ul>
                    <li>
                    	<a href="" class="navlink">List Item</a>
                        <div class="dropdown" id="dropdown_four">            
                          <p><a href="#">This is a Link</a></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit sodales justo, id fringilla eros dapibus vitae. Morbi molestie enim diam, a vulputate neque. Morbi sit amet nunc id quam mollis aliquet. Donec sed massa justo, ut congue enim. Praesent lobortis viverra dolor commodo euismod. </p>
                        </div><!-- .dropdown_menu -->  
                    </li>
                    <li>
                    	<a href="" class="navlink">List Item</a>
                        <div class="dropdown" id="dropdown_five">            
                          <p><a href="#">This is a Link</a></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit sodales justo, id fringilla eros dapibus vitae. Morbi molestie enim diam, a vulputate neque. Morbi sit amet nunc id quam mollis aliquet. Donec sed massa justo, ut congue enim. Praesent lobortis viverra dolor commodo euismod. </p>
                        </div><!-- .dropdown_menu -->   
                    </li>
                    <li><a href="" class="navlink">List Item</a></li>
                    <li>
                    	<a href="" class="navlink">List Item</a>
                        <div class="dropdown" id="dropdown_six">            
                          <p><a href="#">This is a Link</a></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit sodales justo, id fringilla eros dapibus vitae. Morbi molestie enim diam, a vulputate neque. Morbi sit amet nunc id quam mollis aliquet. Donec sed massa justo, ut congue enim. Praesent lobortis viverra dolor commodo euismod. </p>
                        </div><!-- .dropdown_menu -->            
                	</li>
               </ul>

<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
		</div><!-- end of sidebar -->
		<div class="content">
				<!-- end of intro -->
	
      <div class="block">
				
			<div class="block-content">

            <link rel="stylesheet" type="text/css" href="assets/banner/wt-rotat.css"/>
            <script type="text/javascript" src="assets/banner/js/jquery.easing.1.3.min.js"></script>
            <script type="text/javascript" src="assets/banner/js/jquery.wt-rotator.min.js"></script>    
            <script type="text/javascript" src="assets/banner/js/preview.js"></script>
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
                            <a href="assets/banner/triworks_abstract17.jpg" title="3D abstract art"><img src=""/></a>
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>JQuery Banner Rotator</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut tincidunt mi a lectus gravida pulvinar. Aliquam viverra cursus felis, 
                                lobortis elementum tortor malesuada non. 
                                Suspendisse hendrerit tortor a mauris auctor eu sodales metus laoreet. </div>
                        </li>
                        <li>
                            <a href="assets/banner/sf.jpg" title="san francisco"><img src="images/thumbs/sf.jpg"/></a>
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                                                  	
                        </li>
                        <li>
                            <a href="assets/banner/triworks_abstract26.jpg" title="3D abstract art"><img src="images/thumbs/triworks_abstract26.jpg"/></a>   
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF">
                            	<h1 style="color:#0CF">JQuery Banner Rotator</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut tincidunt mi a lectus gravida pulvinar. Aliquam viverra cursus felis, 
                                lobortis elementum tortor malesuada non. 
                                Suspendisse hendrerit tortor a mauris auctor eu sodales metus laoreet. </div>                                                          	                   
                        </li>
                        <li>
                            <a href="assets/banner/tokyo.jpg" title="rainbow bridge"><img src="images/thumbs/tokyo.jpg"/></a>                  
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                                          	                          
                        </li>
                        <li>
                            <a href="assets/banner/lion.jpg" title="lion"><img src="images/thumbs/lion.jpg"/></a>        
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut tincidunt mi a lectus gravida pulvinar. Aliquam viverra cursus felis, 
                                lobortis elementum tortor malesuada non. 
                                Suspendisse hendrerit tortor a mauris auctor eu sodales metus laoreet. </div>                                                                     
                        </li>     
                        <li>
                            <a href="assets/banner/highway.jpg" title="highway"><img src="images/thumbs/highway.jpg"/></a>                    
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:484px; top:36px; width:336px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                             	                           
                        </li>
                        <li>
                            <a href="assets/banner/hk.jpg" title="hong kong"><img src="images/thumbs/hk.jpg"/></a>                    
                            <a href="http://codecanyon.net/user/webtako" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>JQuery Banner Rotator</h1>
                                Lorem ipsum ad vis puto molestie, ex est simul docendi, ei ius decore patrioque complectitur. 
                                Per te dolor necessitatibus. Duo quis modo in, reque sonet an pri. In lorem fugit impedit eum, pro docendi rationibus reformidans et. 
                                Cum ei ludus feugait luptatum.</div>                             	                           
                        </li>
                        <li>
                            <a href="assets/banner/aquarium.jpg" title="aquarium"><img src="images/thumbs/aquarium.jpg"/></a>                    
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
        </div>
		
							<!-- end of tabs -->
							<div class="right">
								<div style="display: none;" class="tabs-content-rounding"></div>
								
							</div><!-- end of right -->
							<div class="right-bottom"></div><!-- end of right-bottom -->
							<div class="clear"></div>
								<!-- end of block-content -->
				
		<div id="content_box">
<div class="conL">


<div id="se"><h2 class="postTop">Recommendations for you</h2><ul class="tabSe"><li class="now">1</li><li>2</li></ul>


<ul class="con">
<li>
<a href="#" target="_top" title="LED Bulb"><img src="assets/files/products/LCD-Monj.jpg" alt="LED Bulb" title="LED Bulb" width="85" height="75">LED Bulb</a> 
</li>
<li>
<a href="#" target="_top" title="Electric Bike"><img src="assets/files/products/LED-Bulb.jpg" alt="Electric Bike" title="Electric Bike" width="85" height="75">Electric Bike</a></li>
<li>
<a href="#" target="_top" title="LED Downlight"><img src="assets/files/products/LED-Down.jpg" alt="LED Downlight" title="LED Downlight" width="85" height="75">LED Downlight</a></li>
<li>
<a href="#" target="_top" title="LED Downlight"><img src="assets/files/products/LED-Spot.jpg" alt="LED Downlight" title="LED Downlight" width="85" height="75">LED Downlight</a></li>
<li>
<a href="#" target="_top" title="LED Bulb"><img src="assets/files/products/LCD-Monj.jpg" alt="LED Bulb" title="LED Bulb" width="85" height="75">LED Bulb</a> 
</li>
<li>
<a href="#" target="_top" title="Electric Bike"><img src="assets/files/products/LED-Bulb.jpg" alt="Electric Bike" title="Electric Bike" width="85" height="75">Electric Bike</a></li>
<li>
<a href="#" target="_top" title="LED Downlight"><img src="assets/files/products/LED-Down.jpg" alt="LED Downlight" title="LED Downlight" width="85" height="75">LED Downlight</a></li>
<li>
<a href="#" target="_top" title="LED Downlight"><img src="assets/files/products/LED-Spot.jpg" alt="LED Downlight" title="LED Downlight" width="85" height="75">LED Downlight</a></li>
</ul>

<ul class="con" style="display: none">
<li>
<a href="#" target="_top" title="LED Bulb"><img src="assets/files/products/made-in.jpg" alt="LED Bulb" title="LED Bulb" width="85" height="75">LED Bulb</a> 
</li>
<li>
<a href="#" target="_top" title="Electric Bike"><img src="assets/files/products/LED-Bulb.jpg" alt="Electric Bike" title="Electric Bike" width="85" height="75">Electric Bike</a></li>
<li>
<a href="#" target="_top" title="LED Downlight"><img src="assets/files/products/LED-Down.jpg" alt="LED Downlight" title="LED Downlight" width="85" height="75">LED Downlight</a></li>
<li>
<a href="#" target="_top" title="LED Downlight"><img src="assets/files/products/made-in1.jpg" alt="LED Downlight" title="LED Downlight" width="85" height="75">LED Downlight</a></li>
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
<a href="#" target="_blank"><img src="assets/files/tradefair/made-in6.jpg" alt="Flate" title="Flate Plate Solar System"></a>
<a href="#" target="_blank"><img src="assets/files/tradefair/made-in7.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="assets/files/tradefair/made-in8.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="assets/files/tradefair/made-in9.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="assets/files/tradefair/made-in10.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>
<a href="#" target="_blank"><img src="assets/files/tradefair/made-in11.jpg" alt="LED Downlight" title="LED Downlight" style="display: none;"></a>

<div>
<a class="on" href="#" target="_blank" id="reLabel0"><span class="tp"></span><span class="bt"></span>Flate Plate Solar System</a>
<a href="#" target="_blank" id="reLabel1"><span class="tp"></span><span class="bt"></span>LED Downlight</a>
<a href="#" target="_blank" id="reLabel2"><span class="tp"></span><span class="bt"></span>LED Spot Bulb</a>
<a href="#" target="_blank" id="reLabel3"><span class="tp"></span><span class="bt"></span>Ingenious SPA</a>
<a href="#" target="_blank" id="reLabel4"><span class="tp"></span><span class="bt"></span>Frequency Inverter</a>
<a href="#" target="_blank" id="reLabel5"><span class="tp"></span><span class="bt"></span>Frequency Inverter</a>
</div>
</div>
<div class="box" style="float:left; width:225px; border:1px solid #e3e1d5; height:170px; margin-left:5px">
<h2 style="width:91%">Highest Customer Rated</h2>
<div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 138px;" class="newsticker-jcarousellite">
		<ul style="margin: 0pt; padding: 0pt; position: relative; list-style-type: none; z-index: 1; height: 414px; top: -184px;"><li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in8.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?space_travel">Space Travel</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li><li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">The Traveling Tree</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
            <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and the Lady</a>
					<span class="cat">Category: Illustrations</span>
				</div>
				<div class="clear"></div>
			</li>
			
            <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in7.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?family_of_colors">The Family of Colors</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
            <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in8.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?teddybear_mac">Teddy Bear and MacBook</a>
					<span class="cat">Category: Photos</span>
				</div>
				<div class="clear"></div>
			</li>
			<li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in9.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?rainbow_butterfly">Rainbow Butterfly</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li>
			<li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in8.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?space_travel">Space Travel</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li>
			<li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in6.jpg">
				</div>
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">The Traveling Tree</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
        <li style="overflow: hidden; float: none; width: 220px; height: 40px;">
				<div class="thumbnail">
					<img src="assets/files/tradefair/made-in6.jpg">
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

<div id="fourInOne"><div id="state"><div>New User? <a href="http://membercenter.made-in-china.com/join/"><strong>Join Now!</strong></a></div></div><ul class="hot"><li class="lf"><span id="sign">Sign In</span></li> <li class="rgAct"><span id="alert">My Alerts</span></li></ul>

<div style="display: block;">
<div id="signA" style="display: none;">
<form action="#" name="logon" method="post"><input name="xcase" value="doLogon" type="hidden"> <input name="baseNextPage" value="http://www.made-in-china.com" type="hidden"> <label>Member ID or Email:</label> <input name="logonInfo.logUserName" value="" maxlength="160" type="text"><br><label>Password:</label> <input name="logonInfo.logPassword" type="password"><p class="capsLock hide">Having Caps Lock on may cause you to enter your password incorrectly.</p><div class="fr"><a href="#">Forgot Password</a><br><a href="#">Trouble with Sign In?</a></div><button type="submit"> Sign In</button></form>
</div>
<div style="display: block;" id="alertA">
<form action="#" method="post"><input value="keywordSubscribe" name="xcase" type="hidden"> Subscribe to products of interest<br><input style="color: rgb(194, 194, 194);" name="keyword" value="" maxlength="255" type="text"><br><input style="color: rgb(194, 194, 194);" name="email" value="" maxlength="160" type="text"><br><button type="submit">Subscribe</button></form>
</div>
</div>
<div style="display: none;">
<div id="buyerGA"><ul><li><a href="http://www.made-in-china.com/prod/catlist/">Search Products &amp; Suppliers</a></li> <li class="o"><a href="http://www.made-in-china.com/prod/catlist/">Send Inquiry</a></li> <li><a href="http://membercenter.made-in-china.com/trade/post-for-buy.html">Post Buy Offer</a></li>
<li class="o lst"><a href="http://www.made-in-china.com/audited-suppliers/for-buyers/">Trade Safely</a></li></ul>
</div>

<div id="sellerGA">
<img src="Made-in-China.com%20China%20manufacturer%20directory%2C%20China%20products%2C%20China%20suppliers%2C%20China%20trade%2C%20China%20factory_files/spacer01.gif" id="gCn" alt="Seller Guide" usemap="#sellGMC" style=" display:none;" width="226" border="0" height="110"> <img src="Made-in-China.com%20China%20manufacturer%20directory%2C%20China%20products%2C%20China%20suppliers%2C%20China%20trade%2C%20China%20factory_files/spacer01.gif" id="gEn" alt="Seller Guide" usemap="#sellGM" width="226" border="0" height="110"> <map name="sellGMC" id="sellGMC"><area shape="rect" coords="45,94,95,109" href="http://www.made-in-china.com/audited-suppliers/for-suppliers/index-cn.html" alt="Seller Guide"><area shape="rect" coords="117,94,166,108" href="http://www.made-in-china.com/sgscontact.do?xcase=supplier_indexcn" alt="Seller Guide"><area shape="rect" coords="180,93,216,110" href="" alt="English"></map><map name="sellGM" id="sellGM"><area shape="rect" coords="67,83,177,97" href="http://www.made-in-china.com/audited-suppliers/for-suppliers/" alt="Seller Guide"><area shape="rect" coords="12,97,70,108" href="http://www.made-in-china.com/sgscontact.do?xcase=supplier_index" alt="Seller Guide"><area shape="rect" coords="183,92,219,109" href="" alt="Chinese"></map></div>

</div>

<ul class="hot hotBt">
<li class="lf"><span id="buyerG">Buyer Guide</span></li> <li class="rg"><span id="sellerG">Seller Guide</span></li></ul></div><div id="services"><ul class="tabS"><li class="" id="tab1_10">Our Services</li> <li id="tab1_11" class="now">Buyer Service</li></ul><div class="con" id="tabCon1_10" style="display:none"><h3 id="ar"><a target="_blank" href="http://www.made-in-china.com/audited-suppliers/for-buyers/browse-audit-reports.html">More</a>Audit Reports</h3><ul><li>General Information and Photos</li> <li>Foreign Trade Capacity</li> <li>Product Research &amp; Development Capacity</li> <li>Quality Management System</li></ul><h3 id="as"><a target="_blank" href="http://www.made-in-china.com/audited-suppliers/">More</a>Audited Suppliers</h3><ul><li>Publish and manage more business information</li> <li>Work with a more powerful online office and Showroom</li></ul><h3 id="tm"><a target="_blank" href="http://trademessenger.made-in-china.com/">More</a>TradeMessenger</h3><ul class="tm"><li>Instant Talk</li> <li>Talk Review</li> <li>File Transfer</li> <li>Inquiry Alert</li></ul></div><div style="display: block;" class="con bs" id="tabCon1_11"><p>Made-in-China.com Buyer Service Team has dedicated itself to providing professional support and assistance to its members with the goal of helping global buyers do business with Chinese suppliers.</p><p>We can offer various types of trading related services, such as:</p><ul><li><a target="_blank" href="http://www.made-in-china.com/info/activities/Customer-Activities-1.html">Private Sourcing Events</a></li> <li><a target="_blank" href="http://www.made-in-china.com/tradeservice/service/product-sourcing.html">Product Sourcing &amp; Recommending</a></li> <li><a target="_blank" href="http://www.made-in-china.com/tradeservice/service/trade-support.html">Trade Support</a></li></ul><p class="r"><a target="_blank" href="http://www.made-in-china.com/tradeservice/main/">More</a></p><img src="Made-in-China.com%20China%20manufacturer%20directory%2C%20China%20products%2C%20China%20suppliers%2C%20China%20trade%2C%20China%20factory_files/bs000001.jpg" alt="We are standing by to offer assistance at any time!"></div></div><div id="tc"><ul class="tabCa"><li class="now" id="tab2_10">Trade Shows</li> <li id="tab2_11">Corporate Activities</li></ul>
<div id="tabCa01ct">
<div id="TradeShowContent_0" class="show">
<a href="#"><img src="assets/files/tradefair/Shanghaj.jpg" alt="Shanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers" class="b" width="70" height="60"></a><h3><a href="#">Shanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers</a></h3><span class="tsDate">[2010-12-08 - 2010-12-11] </span></div>
<div id="TradeShowContent_1" class="hide"><a href="#"><img src="assets/files/tradefair/SNEC-5ti.jpg" alt="SNEC 5th (2011) International Photovoltaic Power Generation Conference &amp; Exhibition" class="b" width="70" height="60"></a><h3><a href="#">SNEC 5th (2011) International Photovoltaic Power Generation Conference &amp; Exhibition</a></h3><span class="tsDate">[2011-02-22 - 2011-02-24] </span></div><div id="TradeShowContent_2" class="hide"><a href="#"><img src="assets/files/tradefair/The-21su.jpg" alt="The 21st East China Fair (2011 Shanghai)" class="b" width="70" height="60"></a><h3><a href="#">The 21st East China Fair (2011 Shanghai)</a></h3><span class="tsDate">[2011-03-01 - 2011-03-05] </span></div><div id="TradeShowContent_3" class="hide"><a href="#"><img src="assets/files/tradefair/APPLIAND.bmp" alt="APPLIANCE WORLD EXPO SHANGHAI 2011" class="b" width="70" height="60"></a><h3><a href="#">APPLIANCE WORLD EXPO SHANGHAI 2011</a></h3><span class="tsDate">[2011-03-15 - 2011-03-18] </span></div><div id="TradeShowContent_4" class="hide"><a href="http://tradeshow.made-in-china.com/fairs/fairs-detail-pSmQRxAUBniF/China-Consumer-Electronics-Fair-Shenzhen-2011-CCEF-.html"><img src="assets/files/tradefair/China-Cp.jpg" alt="China Consumer Electronics Fair (Shenzhen) 2011(CCEF)" class="b" width="70" height="60"></a><h3><a href="#">China Consumer Electronics Fair (Shenzhen) 2011(CCEF)</a></h3><span class="tsDate">[2011-04-08 - 2011-04-10] </span></div><div class="s"><a class="now" href="#" onmouseover="TradeShowSwitch(0,5);"><img src="assets/files/tradefair/Shanghaj.jpg" alt="Shanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers" width="24" height="21"> </a><a href="#" onmouseover="TradeShowSwitch(1,5);"><img src="assets/files/tradefair/SNEC-5ti.jpg" alt="SNEC 5th (2011) International Photovoltaic Power Generation Conference &amp; Exhibition" width="24" height="21"> </a><a href="#" onmouseover="TradeShowSwitch(2,5);"><img src="assets/files/tradefair/The-21su.jpg" alt="The 21st East China Fair (2011 Shanghai)" width="24" height="21"> </a><a href="#" onmouseover="TradeShowSwitch(3,5);"><img src="assets/files/tradefair/APPLIAND.bmp" alt="APPLIANCE WORLD EXPO SHANGHAI 2011" width="24" height="21"> </a>
<a href="#" onmouseover="TradeShowSwitch(4,5);"><img src="assets/files/tradefair/China-Cp.jpg" alt="China Consumer Electronics Fair (Shenzhen) 2011(CCEF)" width="24" height="21"> </a></div>

<a href="/fairs/" class="mr">More</a></div><ul style="display:none" id="tabCa02ct" class="ca"><li class="e magnified"><a href="" class="img"><img style="width: 48px; height: 41px;" src="assets/files/tradefair/The-12ti.jpg" alt="" width="34"></a> <a href="#" class="text">The 12th International Computer Communication &amp; Consumer Products Expo</a><div style="display: block;" class="des  hide"><strong>Date:</strong> October 14 - 16, 2010<br><strong>Venue:</strong> Dongguan International Conference &amp; Exhibition Center</div></li><li class="ee minified"><a href="#" class="img"><img style="width: 34px; height: 29px;" src="assets/files/tradefair/IFA-Berm.jpg" alt="" width="34"></a> <a href="#" class="text">IFA Berlin 2010</a><div style="display: none;" class="des  hide"><strong>Date:</strong> September 3 - 8, 2010<br><strong>Venue:</strong> Messe Berlin</div></li><li class="mr"><a href="http://www.made-in-china.com/info/activities-1.html">More</a></li></ul></div>



<div id="prom" class="box" style="width:718px; height:125px; border:1px solid #e3e1d5"><h2 style="width:100%">Sponser By</h2>
<script type="text/javascript" src="assets/scrollimage/js/crawler.js"></script><style type="text/css">.marquee{white-space:nowrap;overflow:hidden;visibility:hidden;}#marq_kill_marg_bord{border:none!important;margin:0!important;}</style>
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
<div style="overflow: hidden;" class="marquee0"><div style="visibility: visible; padding: 1px; margin-top: 5px; width: 973px; height: 90px; position: relative; overflow: hidden;"><div style="position: absolute; left: -1482px; white-space: nowrap; top: 7px;">&nbsp;<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a></div><div style="position: absolute; left: 183px; white-space: nowrap; top: 7px;">&nbsp;<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/how.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/login.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/review.png"></a>
<a href="" class="mycraw"><img style="display: inline; vertical-align: top;" src="assets/images/payment.png"></a></div></div></div>

</div>
</div>
	
				
				
				
				<div class="single-tile">
			
				</div><!-- end of single-tile-wrapper -->
				
				
				
				
				
				
				
				
			</div><!-- end of block -->
		</div><!-- end of content -->
		<div class="clear"></div>
	</div><!-- end of main -->
	<div class="footer">
		<div class="links-line">
			<a href="">Site Map</a>
			<a href="">About Bell Aliant</a>
			<a href="">Find a Phone Number</a>
			<a href="">Stores</a>
			<a href="">Mobile</a>
		</div><!-- end of links-line -->
		<div class="links-line">
			<a href="">Contact Us</a>
			<a href="">Privacy &amp; Security</a>
			<a href="">Legal &amp; Regulatory</a>
		</div><!-- end of links-line -->
	</div><!-- end of footer -->
</div><!-- end of wrapper -->
<div class="popup-wrapper" id="popup-movies">
	<div class="popup">
		<a href="" class="close"></a>
		<div class="title">
			<img src="images/img71.gif" alt="" />
			<span class="double-line">CTV (Atlantic)* <br />Channel 503</span>
		</div><!-- end of title -->
		CTV (Atlantic)* - *NOTE: This channel is included for all customers in N.S. and N.B. only. In N.L. this channel is available with the "Timeshifting" Theme Pack. CTV Atlantic broadcasts across Nova Scotia, New Brunswick and Prince Edward Island, and is well know for its local news including its signature programs "CTV News", "Live at 5" and "Breakfast Television". CTV Atlantic also carries a huge variety of Canada's favourite television programs. 
	</div><!-- end of popup -->
</div><!-- end of popup-wrapper -->
<script type="text/JavaScript" src="assets/menujs/hpmenu.js"></script>
</body>
</html>