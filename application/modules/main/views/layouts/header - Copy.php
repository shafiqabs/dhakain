<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo 'eBDSHOP.:|:.'.$title; ?></title>
<link href="<?php echo base_url()?>assets/images/favicon.png" rel="icon" />
<meta name="description" content="" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/front_black.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/site_feature/jcarousel/jcarousel.css"  type="text/css"  />
<link rel="stylesheet" href="<?php echo base_url()?>assets/site_feature/feature-slider/css/jquery.dualSlider.0.2.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/site_feature/login_panel/css/slide.css" type="text/css" media="screen" />
<!--[if IE 6]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style_ie.css" media="all" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style_ie7.css" />
<![endif]-->
<!--[if IE 9]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style_ie9.css" />
<![endif]-->
	 
    <!-- jQuery - the core -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.3.2.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jqTransform.js" ></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/boxOver.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/treeMenu.js"></script>
	<!-- Sliding effect -->
	<script src="<?php echo base_url()?>assets/site_feature/login_panel/js/slide.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/site_feature/feature-slider/scripts/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/site_feature/feature-slider/scripts/jquery.timers-1.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/site_feature/feature-slider/scripts/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/site_feature/jcarousel/jquery.jcarousel.js"  type="text/javascript" ></script>
<style>
.container_24{margin-left:auto;margin-right:auto;width:968px}
.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12,.grid_13,.grid_14,.grid_15,.grid_16,.grid_17,.grid_18,.grid_19,.grid_20,.grid_21,.grid_22,.grid_23,.grid_24{display:inline;float:left;margin-left:5px;margin-right:5px}
</style>
<script type="text/javascript" src="<?php echo  base_url()?>assets/js/jquery.tipsy.js"></script>

<script type="text/JavaScript">
 $(document).ready(function() {

     $(".signin").click(function(e) {  
				var id=$(this).attr('id');
				if(id == 99999999 ){
				return false;
				}        
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
		});	
		

		$("#login_get1").click(function(){
		$('#login_user1').css({'display':'block'});
		$('#forgot1').css({'display':'none'});
		$('#for_get1').slideToggle('slow');
		document.forgotForm1.forget_email.value="";
		$(this).toggle();
		})
		
		$("#for_get1").click(function(){
		$('#login_user1').css({'display':'none'});
		$('#forgot1').css({'display':'block'});
		$('#login_get1').slideToggle('slow');
		$(this).toggle();
		})		
		});
		
		

    	$(document).ready(function() {
		$('#forgot_password_link').tipsy({gravity: 'w'});   
		$('#return_login_link').tipsy({gravity: 'w'});   
		});

$(document).ready(function(){
<?php $mid=(isset($mid))? $mid :'1'?>
$('.visited-<?php echo $mid; ?>').addClass("current");
})
</script>  
</head>
<body>

<!-- Panel -->
<div id="toppanel" style=" display:none">
	<div id="panel">
		<div class="panel-content panel-clearfix">
			<div class="left left_side">
				<h1>Welcome to eBDSHOP</h1>
				<h2>Sliding login panel Demo with jQuery</h2>		
				<p class="grey">As the Bangladesh's leading ecommerce company, eBDSHOP Limited.'s global portfolio of businesses enables hundreds of millions of people to buy, sell and pay online. Take a closer look.</p>
                <a href="<?php echo site_url('about-us');?>" title="Download">Click here more information &raquo;</a></p>
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
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
<style>
.header #left ul li a {
	cursor:pointer!important;
}

.header #left ul li  a:hover, .header #middle ul li  a:hover, .header #right ul li a:hover {
    text-decoration: underline!important;
	cursor:pointer!important;
}
</style>
<div class="outer-wrapper">
<div class="body-wrapper">
<div class="header">
	<div class="wrapper" style="background:none">
    <div id="left"><ul><li><a href="<?php echo site_url('customer/newsletter/1')?>"><img src="<?php echo base_url() ?>assets/images/msg.gif" height="10" width="15"  />&nbsp;Msg 53</a></li><li><a><img src="<?php echo base_url() ?>assets/images/basket.gif" height="10"/>&nbsp;25 items -BDT 25000</a></li><li><img src="<?php echo base_url() ?>assets/images/msg.gif" height="10"  /><a>&nbsp;Buy</a></li><li><img src="<?php echo base_url() ?>assets/images/msg.gif" height="10"  /><a>&nbsp;Sell</a></li><li class="last"><img src="<?php echo base_url() ?>assets/images/msg.gif" height="10"  /><a>&nbsp;My Mart</a></li>
        </ul>
</div>
<div id="right">
<ul><li><a><img src="<?php echo base_url() ?>assets/images/letter.gif" />&nbsp;</a></li><li><a>&nbsp;<img src="<?php echo base_url() ?>assets/images/icon_live_chat.gif" /></a></li><li class="last"><a>&nbsp;<img src="<?php echo base_url() ?>assets/images/tel_icon.gif" />&nbsp;02-8014722</a></li></ul>
</div>
<div style="float:right;">
<div id="topnav" class="topnav">
  <a href="JavaScript:void(0)" onclick="window.location='<?php echo site_url('my_profile/my_profile_view')?>'" class="log"><span>Welcome <?php if( $this->session->userdata('userid')){ ?><?php echo $this->session->userdata('username'); } ?></span></a>
  <?php if( $this->session->userdata('userid')){ ?>
 <a href="JavaScript:void(0)" class="log" onclick="window.location='<?php echo site_url('admin/admin_view')?>'" >Control panel</a>
 <?php } ?>
 <?php if( $this->session->userdata('userid')){ ?>
 <a href="JavaScript:void(0)" class="signin" id="99999999" onclick="window.location='<?php echo site_url('login/logout')?>'" ><span>Logout</span> </a>
 <?php }else{?>
  <a href="JavaScript:void(0)" class="signin"><span>Sign in</span></a>
 <?php }?> 
  
  </div>
   	 <fieldset id="signin_menu">
      <div style="display:block;" id="login_user1" >
      <form method="post" action="<?php echo site_url('login/login_submit'); ?>" name="form1" id="form1" >
      <label for="username">User Email :</label>
      <input type="text" name="email" id="login_email"  value="<?php if($this->session->flashdata('email')){ echo $this->session->flashdata('email'); } ?>" />
   
        <label for="password">Password :</label>
        <input id="password" name="password"  value="" title="password" tabindex="5" type="password" />
  
      <span class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
      
      <input id="remember" name="remember_me" value="1" tabindex="7" <?php if($this->session->userdata('check')=='1'){ ?> checked="checked" <?php } ?> type="checkbox">
      <label for="remember">Remember me</label> 
      
      </span>
      </form>
      </div>
      <div style="display:none;" id="forgot1" >
      <form action="<?php echo site_url('login/forgot')?>" method="post" name="forgotForm1" id="forgotForm1" >
      <label for="username">User Email:</label>
      <input type="text" name="email" id="forget_email"  value="<?php if($this->session->flashdata('email')){ echo $this->session->flashdata('email'); } ?>" />
      </p>
      <p class="remember" style="margin-left:80px;">
      <input id="signin_submit" value="Submit" tabindex="6" type="submit">
      </p>
      </form>
      </div>
      <!--
      <p class="forgot"> <a href="#" id="resend_password_link">Forgot your password?</a> </p>
      -->
      <span class="forgot-username" id="for_get1" > <A id="forgot_password_link" 
title="If you remember your password, try logging in with your email" 
href="javaScript:void(0)"  >Forgot your username?</A> </span>
   <span class="forgot-username"  id="login_get1" style="display:none; margin-left:70px" > <A id="return_login_link" 
title="If you login, then click here" 
href="javaScript:void(0)" >Click here to login</A> </span>
   </fieldset>
</div>
  
        
        
		<!--<div class="top">
			<form method="post" action="" class="search">
				<input type="text" name="" value="Search" />
				<input type="submit" name="" value="Submit" class="submit" />
			</form>
		</div>--><!-- end of top -->
	</div><!-- end of wrapper -->
</div><!-- end of header -->

<div class="wrapper">
<div id="navi">
		<div class="top-wrapper">
       <div id="menu">
    
            <ul id="menu_tabs">
                <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=account/account"><span class="menu_l"></span><span class="menu_m">Shopping Mall</span><span class="menu_r"></span></a></li>
                  <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=checkout/shipping"><span class="menu_l"></span><span class="menu_m">BRAND SHOP</span><span class="menu_r"></span></a></li>
                    <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=checkout/shipping"><span class="menu_l"></span><span class="menu_m">Location</span><span class="menu_r"></span></a></li>
                <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=checkout/cart"><span class="menu_l"></span><span class="menu_m">Services Dictory</span><span class="menu_r"></span></a></li>
              
                <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=information/contact"><span class="menu_l"></span><span class="menu_m">Product Directory</span><span class="menu_r"></span></a></li>
            </ul>
             <div id="filler"></div>
        </div>
     </div>
		<div class="top-wrapper box4">
		<div class="search-panel">
        <div class="y_search_tab">

		<script type="text/javascript">
   $(document).ready(function(){
		
		$('.events-form').jqTransform({imgPath:'jqtransformplugin/img/'});

	});
  </script>
   <form class="events-form" method="post" action="" id="events-form1">
	
		<input type="hidden" id="y_search_category_value" name="y_search_category_value" value="1" />
		<div class="y_search_tab_border">
			<div class="y_search_tab_inner">
				<div class="rowElem" style="width:510px!important">
                <input type="text" id="y_search_field" name="y_search_field"     onfocus="if (value == 'Keyword, product code, shop name') {value =''}" onblur="if (value == '') {value = 'Keyword, product code, shop name'}" value="Keyword, product code, shop name" />
                </div>
             <div class="rowElem" style="margin-left:20px;">
                                          <select>
                                             <option>Category</option>
                                             <option>Category 1</option>
                                             <option>Category 2</option>
                                             <option>Category 3</option>
                                          </select>
                                       </div>
           								
				
                  <div  style="display: block;
    height: 31px;
    position: absolute;
    right: 5px;
    top: 3px;"><a onclick="document.getElementById('events-form').submit()" class="but" href=""><span><b>SEARCH</b></span></a></div>
			</div>
		</div>
        </form>
        </div>
        </div><!-- end of search-panel -->

		</div>
        <div class="top-wrapper box2" style="margin-top:-5px;">
				<div class="search">
					        
				</div>
				<div class="cart">
					<!-- ========== SHOPPING CART ========== -->
						<span class="c-img"></span>
												<a href="http://livedemo00.template-help.com/zencart_33226/index.php?main_page=shopping_cart"><span class="st1">Shopping cart:</span></a><span class="one"> Now in your cart <a href="http://livedemo00.template-help.com/zencart_33226/index.php?main_page=shopping_cart"><span class="st2">0 items</span></a></span> 
					<!-- =================================== -->
				</div>
        
		</div>
		
        
        
	</div>
    <div class="top-navigation">
		<ul>
			
			<li class=""><a href="<?php echo site_url('mainmenu/foods')?>">Foods</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title">Type of foods</div>
                    <div class="navigation-inner-center-title">Offer By Shops</div>
                    <div class="navigation-inner-right-center-title">Brand By Food Shops</div>
                    <div class="navigation-inner-right-title">&nbsp;</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('newproduct/foods/24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('selloffer/foods/'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
					<?php 
					$query=$this->settings_model->categorylist($product_id=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('categories/foods/'.$rows->catid_label_2)?>"><?php echo $rows->category_name; ?></a></dd>
                    <?php }} else{ ?>
                    <dd><a href="javascript:void(0)" class="coming-soon"><?php echo $this->lang->line('coming_soon');?></a></dd>
                    <?php } ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
					<?php
					$query=$this->settings_model->special_offer($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('specialoffer/foods/'.$rows->subdomain_name)?>"><?php echo $this->settings_model->break_word($rows->shop_name,4)  ?></a></dd>
                    <?php }} ?>
					</dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
					<?php
					$query=$this->settings_model->brand_shop($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('brandshop/foods/'.$rows->subdomain_name)?>"><?php echo $this->settings_model->break_word($rows->shop_name,4)  ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="#" class="coming-soon"><img src="http://localhost/admin-ebdshop/uploads/mall/5/advertisment/74148370040.jpg" alt="" /></a></dd>
                    <dd><a href="#" class="coming-soon"><img src="http://localhost/admin-ebdshop/uploads/mall/5/advertisment/96913.jpg" alt="" /></a></dd>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                   <!-- <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>-->
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Home & Furniture</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop by Type</div>
                    <div class="navigation-inner-left-center-title">Home Appliances</div>
                    <div class="navigation-inner-center-title">Furniture</div>
                    <div class="navigation-inner-right-center-title">Offer By Shop</div>
                    <div class="navigation-inner-right-title">Brand Beauty Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
					</div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>

                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <h4>Home Decorative</h4>
                   <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Furniture</h4>
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <h4>Home Decorative</h4>
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Furniture</h4>
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class="selected"><a href="">Mens</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title"> Shop by Product</div>
                    <div class="navigation-inner-center-title"> Accessories </div>
                    <div class="navigation-inner-right-center-title" > Sell Offer</div>
                    <div class="navigation-inner-right-title">Brand Shope</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="#">New In</a></dd>
                    <dd><a href="#">Eid Offer</a></dd>
                    <dd><a href="#">Summer Offer</a></dd>
                    <dd><a href="#">Business Wear</a></dd>
                    <dd><a href="#">Wedding Clothing</a></dd>
                    <dd><a href="#">Choosing Your Jeans</a></dd>
                    <dd><a href="#">Choosing Your T-shirt</a></dd>
                    <dd><a href="#">Choosing Your Punjabi</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Casual Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    <dd><a href="#">T-Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Jeans</a></dd>
                    <dd><a href="#"> Formal Pant</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    </dl>
                     </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Shoes</a></dd>
                    <dd><a href="#">Watches</a></dd>
                    <dd><a href="#">Optics & Sunglasses</a></dd>
                    <dd><a href="#">Bags</a></dd>
                    <dd><a href="#">Jewellery</a></dd>
                    <dd><a href="#">Belts</a></dd>
                    <dd><a href="#">Wallets & Keyrings</a></dd>
                    <dd><a href="#">Grooming</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Womens</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title"> Shop by Product</div>
                    <div class="navigation-inner-center-title"> Accessories </div>
                    <div class="navigation-inner-right-center-title" > Sell Offer</div>
                    <div class="navigation-inner-right-title">Brand Shope</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="#">New In</a></dd>
                    <dd><a href="#">Eid Offer</a></dd>
                    <dd><a href="#">Summer Offer</a></dd>
                    <dd><a href="#">Business Wear</a></dd>
                    <dd><a href="#">Wedding Clothing</a></dd>
                    <dd><a href="#">Choosing Your Jeans</a></dd>
                    <dd><a href="#">Choosing Your T-shirt</a></dd>
                    <dd><a href="#">Choosing Your Punjabi</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Casual Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    <dd><a href="#">T-Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Jeans</a></dd>
                    <dd><a href="#"> Formal Pant</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    </dl>
                     </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Shoes</a></dd>
                    <dd><a href="#">Watches</a></dd>
                    <dd><a href="#">Optics & Sunglasses</a></dd>
                    <dd><a href="#">Bags</a></dd>
                    <dd><a href="#">Jewellery</a></dd>
                    <dd><a href="#">Belts</a></dd>
                    <dd><a href="#">Wallets & Keyrings</a></dd>
                    <dd><a href="#">Grooming</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="#">Heiglights</a></dd>
                    <dd><a href="#">Cloathing</a></dd>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
			<li class=""><a href="">Baby & Child</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title"> Shop by Product</div>
                    <div class="navigation-inner-center-title"> Accessories </div>
                    <div class="navigation-inner-right-center-title" > Sell Offer</div>
                    <div class="navigation-inner-right-title">Brand Shope</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl> 
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			     <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    
                     </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Beauty</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title">Classification of Beauty</div>
                    <div class="navigation-inner-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-center-title">Offer By Shop</div>
                    <div class="navigation-inner-right-title">Brand Beauty Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<h4>Womens's Fragrances</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Womens's Skin Care</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <h4>Men Fragrances</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Men's Skin Care</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Hair Care</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>

                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>

            <li class=""><a href="">Electricals</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Type</div>
                    <div class="navigation-inner-left-center-title">Electricals</div>
                    <div class="navigation-inner-center-title">Lighting</div>
                    <div class="navigation-inner-right-center-title">Offer By Shop</div>
                    <div class="navigation-inner-right-title">Brand Beauty Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Consumer Electronics</a></dd>
                    <dd><a href="#">Mobile Phone & Accessories</a></dd>
                    <dd><a href="#">Computing & Accessories</a></dd>
                    <dd><a href="#">Sound & Vision </a></dd>
                    <dd><a href="#">Household Appliances</a></dd>
                    <dd><a href="#">Small Appliances</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Interior Lighting</a></dd>
                    <dd><a href="#">Exterior Lighting</a></dd>
                    <dd><a href="#">Emergency Lighting</a></dd>
                    <dd><a href="#">Lamps & Tubes</a></dd>
                    <dd><a href="#">Wiring Accessories</a></dd>
                    <dd><a href="#">Transformers & Drivers</a></dd>
                    <dd><a href="#">Protection Accessories</a></dd>
                    <dd><a href="#">Control Accessories</a></dd>
                    </dl>
                    </div>

                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <h4>Electricals</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Lighting</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <h4>Electricals</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Lighting</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Jewellery & Watch</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop by type</div>
                    <div class="navigation-inner-left-center-title">Jewellery</div>
                    <div class="navigation-inner-center-title">Watch</div>
                    <div class="navigation-inner-right-center-title">Optics & Sun Glass</div>
                    <div class="navigation-inner-right-title">Brand Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Jewellery</a></dd>
                    <dd><a href="#">Gold Jewellery</a></dd>
                    <dd><a href="#">Diamonds</a></dd>
                    <dd><a href="#">Silver Jewellery</a></dd>
                    <dd><a href="#">Baby Jewellery</a></dd>
                    <dd><a href="#">Men's Jewellery</a></dd>
                    <dd><a href="#">Stainless Jewellery</a></dd>
                    <dd><a href="#">Imitation Jewellery</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Mens Watches</a></dd>
                    <dd><a href="#">Women's Watches</a></dd>
                    <dd><a href="#">Baby Watches</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="#">Sunglass</a></dd>
                    <dd><a href="#">Opticals Glass</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <h4>Jewellery</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Watch</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Optics</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>

            <li class=""><a href="">Automobiles</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Type</div>
                    <div class="navigation-inner-left-center-title">Cars</div>
                    <div class="navigation-inner-center-title">Motorcycle</div>
                    <div class="navigation-inner-right-center-title">Accsessories</div>
                    <div class="navigation-inner-right-title">Brand Shop</div>
                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<h4>New Cars </h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Used Cars</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
<li class=""><a href="">Services</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Type</div>
                    <div class="navigation-inner-left-center-title">&nbsp;</div>
                    <div class="navigation-inner-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-title">Brand Shop</div>
                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Hospital & Diagonistic Center</a></dd>
                    <dd><a href="#">Docter Chember</a></dd>
                    <dd><a href="#">Dentel Chember</a></dd>
                    <dd><a href="#">Body Fitness</a></dd>
                    <dd><a href="#">Dry Cleanners</a></dd>
                    <dd><a href="#">Perler</a></dd>
                    <dd><a href="#">Women's Parler</a></dd>
                    <dd><a href="#">Men's Parler</a></dd>
                    <dd><a href="#">Indoor Games</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Real State</a></dd>
                    <dd><a href="#">Comunity Center</a></dd>
                    <dd><a href="#">Conference Center</a></dd>
                    <dd><a href="#">Package & Printing</a></dd>
                    <dd><a href="#">Advertising</a></dd>
                    <dd><a href="#">Shipment & Storage</a></dd>
                    <dd><a href="#">Express Delivery</a></dd>
                    <dd><a href="#">Security Gard</a></dd>
                    <dd><a href="#">Decorater</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Tiles & Ceramics</a></dd>
                    <dd><a href="#">Sanatary & Bathroom Fitnes</a></dd>
                    <dd><a href="#">Timber & Plywood </a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="#">Beauty Equipment</a></dd>
                    <dd><a href="#">Dental Apparatus</a></dd>
                    <dd><a href="#">Diagnosis Equipment</a></dd>
                    <dd><a href="#">Disposable Medical Supplies</a></dd>
                    <dd><a href="#">Health Care Appliance</a></dd>
                    <dd><a href="#">Surgical Equipment</a></dd>
                    <dd><a href="#">Fitness Equipment </a></dd>
                    </dl>          
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Brand Shop list</a></dd>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li  class="last-child"><a href="">Shop By Brand</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Brand</div>
                    <div class="navigation-inner-left-center-title">&nbsp;</div>
                    <div class="navigation-inner-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-title">&nbsp;</div>
                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->settings_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                              
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Brand Shop list</a></dd>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
			
		</ul>
	</div>
    <div class="clear"></div>
    <div class="breadcrumbs">
    <div class="breadcrumbs-left"><a href="<?php echo site_url();?>">Home</a><a href="<?php echo site_url('mainmenu/foods');?>">Foods</a><span>Special offer</span></div>
<div class="sidebar">
<h3>Get the latest products & offers on</h3>
<form id="cic-newsletter-signup" method="get" action="" class="connect">
<div class="line">
<input type="text" onfocus="if (value == 'Enter your email address') {value =''}" onblur="if (value == '') {value = 'Enter your email address'}" value="Enter your email address" name="email" id="email" />
<input type="submit" class="submit" value="Submit" name="" />
</div><!-- end of line -->
</form>
</div>
    </div>
	<!-- end of navigation -->
<?php //$this->load->view('layouts/login')?>
<?php //$this->load->view('layouts/topmenu')?>
<?php //$this->load->view('layouts/mainmenu')?>
