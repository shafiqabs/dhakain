<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->lang->line('welcometitle').'.:|:.'.$title; ?></title>
<link href="<?php echo base_url()?>assets/images/favicon.png" rel="icon" />
<meta name="description" content="" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style.css"  type="text/css" />
<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style_ie8.css" media="all" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/styles/style_ie7.css" />
<![endif]-->
<!--[if IE 9]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style_ie9.css" />
<![endif]-->

<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap-responsive.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/override.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/override_bootstrap.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/styles/admin.css"  type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/media/css/demo_table_jui.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/media/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/media/css/demo_table.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/styles/pagination.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
<style>
.dataTables_filter {
    float: right;
    text-align: left;
    width: 230px;
}
</style>
</head>
<body>
<div class="outer-wrapper">
<div class="header">
<div class="wrapper" style="background:none; position:relative">
<div class="top-li" id="left" style="width:650px">
<ul>
<li><a href="<?php echo site_url('user/new_signup')?>">
<img src="<?php echo base_url(); ?>/assets/images/msg.gif"><span>signup 53</span>
</a>
</li>

<li><a href="<?php echo site_url('order/order_list')?>">
<img src="<?php echo base_url(); ?>/assets/images/cart.gif"><span id="cart-preview">BDT 25000</span>
</a>
</li>

<li><a href="<?php echo site_url('buy/buy_list')?>">
<img src="<?php echo base_url(); ?>/assets/images/msg.gif"><span>Buy 120</span>
</a></li>

<li><a href="<?php echo site_url('sales/sales_list')?>"><img src="<?php echo base_url(); ?>/assets/images/msg.gif"><span>Sales 200</span>
</a>
</li>
<li>
<a href="http://localhost/ebdshop/index.php/customer/newsletter/1">
<img src="<?php echo base_url(); ?>/assets/images/icon_live_chat.gif"><span>Chat 100</span>
</a></li>
<li>
<a href="http://localhost/ebdshop/index.php/customer/newsletter/1">
<img src="<?php echo base_url()?>/assets/images/contact.png"><span>Visitors 100</span>
</a></li>
</ul>
</div>
<div id="right" class="top-li" style="width:auto" >
<ul>

<li>
<a href="<?php echo site_url('my_profile/my_profile_view')?>" class="btn btn-primary"><i class="icon-user icon-white"></i>Welcome&nbsp;<?php echo $this->session->userdata('username'); ?></a></li>
<li><a href="<?php echo site_url('login/logout')?>">
<img src="<?php echo base_url()?>/assets/images/contact.png"><span>Logout</span>
</a></li>
<li class="last"><a href="javascript:void(0)">
<img src="<?php echo base_url() ?>assets/images/help.gif" title="Help" /><span>Help</span>
</a></li>
</ul>
</div>

<div class="preview-cartbox">


<div class="content-indent">
<div id="vmMainPage">
<h2 class="title">Cart</h2><div style="padding:20px 0px 0px 0px;">
<!-- Cart Begins here -->
<div class="basket">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<thead>
    <tr align="left" class="sectiontableheader">
		<td class="shop-title" colspan="5"><span class="left">Shop Name</span><span class="right collapse-button" id="">&nbsp;</span></td>
	</tr>
    </thead>
    <tbody class="collapse-1" style="display:none">
    <tr align="left" class="sectiontableheader">
		<td class="first"><span>Name</span></td>
		<td class="second"><span>SKU</span></td>
		<td class="three"><span>Price</span></td>
		<td class="four"><span>Quantity / Update</span></td>
		<td class="last"><span>Subtotal</span></td>
	</tr>
			<tr valign="top" class="sectiontableentry1 png">
			<td class="first"><span><a href="http://livedemo00.template-help.com/virtuemart_34752/index.php?page=shop.product_details&amp;flypage=flypage.tpl&amp;product_id=62&amp;category_id=12&amp;option=com_virtuemart&amp;Itemid=29"><strong>Dolor sit amet, consectetur</strong></a><br /></span></td>
			<td class="second"><span>PR62</span></td>
			<td class="three"><span>$172.60</span></td>
			<td class="four"><span><strong class="left1"><form action="http://livedemo00.template-help.com/virtuemart_34752/index.php" method="post" style="display: inline;">
		<input type="hidden" name="option" value="com_virtuemart" />
		<input type="text" title="Update Quantity In Cart" class="inputbox" size="4" maxlength="4" name="quantity" value="1" />
		<input type="hidden" name="page" value="shop.cart" />
    <input type="hidden" name="func" value="cartUpdate" />
    <input type="hidden" name="product_id" value="62" />
    <input type="hidden" name="prod_id" value="62" />
    <input type="hidden" name="Itemid" value="29" />
    <input type="hidden" name="description" value="" />
    <input type="image" name="update" title="Update Quantity In Cart" src="<?php echo base_url()?>assets/images/update_q.png" alt="Update" align="middle" />
  </form></strong><strong class="left2"><form action="http://livedemo00.template-help.com/virtuemart_34752/index.php" method="post" name="delete" style="display: inline;">
    <input type="hidden" name="option" value="com_virtuemart" />
    <input type="hidden" name="page" value="shop.cart" />
    <input type="hidden" name="Itemid" value="29" />
    <input type="hidden" name="func" value="cartDelete" />
    <input type="hidden" name="product_id" value="62" />
    <input type="hidden" name="description" value="" />
  	<input type="image" name="delete" title="Delete Product From Cart" src="<?php echo base_url()?>assets/images/remove_f.png" alt="Delete Product From Cart" align="middle" />
  </form></strong></span></td>
			<td class="last"><span>$172.60</span></td>
		</tr>
		<tr valign="top" class="sectiontableentry1 png">
			<td class="first"><span><a href="http://livedemo00.template-help.com/virtuemart_34752/index.php?page=shop.product_details&amp;flypage=flypage.tpl&amp;product_id=62&amp;category_id=12&amp;option=com_virtuemart&amp;Itemid=29"><strong>Dolor sit amet, consectetur</strong></a><br /></span></td>
			<td class="second"><span>PR62</span></td>
			<td class="three"><span>$172.60</span></td>
			<td class="four"><span><strong class="left1"><form action="http://livedemo00.template-help.com/virtuemart_34752/index.php" method="post" style="display: inline;">
		<input type="hidden" name="option" value="com_virtuemart" />
		<input type="text" title="Update Quantity In Cart" class="inputbox" size="4" maxlength="4" name="quantity" value="1" />
		<input type="hidden" name="page" value="shop.cart" />
    <input type="hidden" name="func" value="cartUpdate" />
    <input type="hidden" name="product_id" value="62" />
    <input type="hidden" name="prod_id" value="62" />
    <input type="hidden" name="Itemid" value="29" />
    <input type="hidden" name="description" value="" />
    <input type="image" name="update" title="Update Quantity In Cart" src="<?php echo base_url()?>assets/images/update_q.png" alt="Update" align="middle" />
  </form></strong><strong class="left2"><form action="http://livedemo00.template-help.com/virtuemart_34752/index.php" method="post" name="delete" style="display: inline;">
    <input type="hidden" name="option" value="com_virtuemart" />
    <input type="hidden" name="page" value="shop.cart" />
    <input type="hidden" name="Itemid" value="29" />
    <input type="hidden" name="func" value="cartDelete" />
    <input type="hidden" name="product_id" value="62" />
    <input type="hidden" name="description" value="" />
  	<input type="image" name="delete" title="Delete Product From Cart" src="<?php echo base_url()?>assets/images/remove_f.png" alt="Delete Product From Cart" align="middle" />
  </form></strong></span></td>
			<td class="last"><span>$172.60</span></td>
		</tr>	
		<!--Begin of SubTotal, Tax, Shipping, Coupon Discount and Total listing -->
		<tr class="sectiontableentry1 aft">
			<td colspan="4" align="right"><span class="left-text">Subtotal:</span></td> 
			<td colspan="3" align="left" class="last"><span class="rightt-text" >$320.20</span></td>
		</tr>
		<tr class="sectiontableentry1 aft">
		<td colspan="4" align="right" valign="top"><span class="left-text" >Tax Total:</span></td> 
		<td colspan="3" align="left" class="last"><span class="rightt-text"  >$31.22</span></td>
		</tr>
		<tr class="sectiontableentry1 aft1">
		<td colspan="4" align="right"><span class="left-text"  >Total:</span></td>
		<td colspan="3" align="left"><strong class="rightt-text" >$351.42</strong></td>
	</tr>
    </tbody>
</table>
</div>

<!-- End Cart --><br />
</div><div style="padding:14px 0px 0px 0px; overflow:hidden; width:235px;">
    <div style="text-align:left; position:relative;">
    <span class='arrow'></span><a href="http://livedemo00.template-help.com/virtuemart_34752/index.php?page=checkout.index&amp;ssl_redirect=1&amp;option=com_virtuemart&amp;Itemid=29" title="Checkout" class="checkout_link png">Checkout</a>	</div>
	
	</div>

<div id="statusBox" style="text-align:center;display:none;visibility:hidden;"></div></div>

</div>
</div><!-- end of shopping cart preview -->
</div><!-- end of wrapper -->
</div>

<!-- end of header -->
<div class="body-wrapper">
<div class="wrapper">
	<div id="navi">
		<div class="top-wrapper">
       <div id="menu" >
    
            <ul id="menu_tabs" style="width:981px" >
                 <li><a href="<?php echo site_url('settings/settings_view')?>"><span class="menu_l"></span><span class="menu_m">Settings</span><span class="menu_r"></span></a></li>
                <li><a href="<?php echo site_url('profiles/profile_view')?>"><span class="menu_l"></span><span class="menu_m">Profile</span><span class="menu_r"></span></a></li>
                <li><a href="<?php echo site_url('transaction/transaction_view')?>"><span class="menu_l"></span><span class="menu_m">Transactions</span><span class="menu_r"></span></a></li>
                <li><a href="<?php echo site_url('buying/buying_view')?>"><span class="menu_l"></span><span class="menu_m">Buying</span><span class="menu_r"></span></a></li>
                <li><a href="<?php echo site_url('selling/selling_view')?>"><span class="menu_l"></span><span class="menu_m">Selling</span><span class="menu_r"></span></a></li>
                <li><a href="<?php echo site_url('admin/dashboard')?>"><span class="menu_l"></span><span class="menu_m">My onClick</span><span class="menu_r"></span></a></li>
            </ul>
             <div id="filler"></div>
        </div>
     </div>
	</div>
<div class="clear"></div>
 <ul class="breadnav">
<?php
$controller=$this->uri->segment(1,'none');
?>
<li><a class="<?php if($controller =='settings'){ echo 'active'; } ?>" href="<?php echo site_url('settings/global_settings');?>"><?php echo $this->lang->line('settings'); ?></a></li>
<li><a class="<?php if($controller =='seller'){ echo 'active'; } ?>" href="<?php echo site_url('seller');?>"><?php echo $this->lang->line('sellers'); ?></a></li>
<li><a class="<?php if($controller =='services'){ echo 'active'; } ?>" href="<?php echo site_url('services');?>"><?php echo $this->lang->line('services'); ?></a></li>
<li><a class="<?php if($controller =='buyers'){ echo 'active'; } ?>" href="<?php echo site_url('buyers');?>"><?php echo $this->lang->line('buyers'); ?></a></li>
<li><a class="<?php if($controller =='wholesaler'){ echo 'active'; } ?>" href="<?php echo site_url('wholesaler');?>"><?php echo $this->lang->line('wholesaler'); ?></a></li>
<li><a class="<?php if($controller =='shoppingmall'){ echo 'active'; } ?>" href="<?php echo site_url('shoppingmall');?>" ><?php echo $this->lang->line('shopping_mall'); ?></a></li>
<li><a class="<?php if($controller =='advertisment'){ echo 'active'; } ?>" href="<?php echo site_url('advertisment');?>"><?php echo $this->lang->line('advertisment'); ?></a></li>
<li><a class="<?php if($controller =='event_exibition'){ echo 'active'; } ?>" href="<?php echo site_url('event_exibition');?>"><?php echo $this->lang->line('event_exibition'); ?></a></li>
<li><a class="<?php if($controller =='transaction'){ echo 'active'; } ?>" href="<?php echo site_url('transaction');?>"><?php echo $this->lang->line('transaction'); ?></a></li>
<li><a class="<?php if($controller =='accounting'){ echo 'active'; } ?>" href="<?php echo site_url('accounting');?>"><?php echo $this->lang->line('accounting'); ?></a></li>
<li><a class="<?php if($controller =='management'){ echo 'active'; } ?>" href="<?php echo site_url('management');?>"><?php echo $this->lang->line('management'); ?></a></li>
<li><a class="<?php if($controller =='chat'){ echo 'active'; } ?>" href="<?php echo site_url('chat');?>" id="last-bread" ><?php echo $this->lang->line('chat'); ?></a></li>
</ul>
<div class="clear"></div>
<!-- end of navigation -->
<?php //$this->load->view('layouts/login')?>
<?php //$this->load->view('layouts/topmenu')?>
<?php //$this->load->view('layouts/mainmenu')?>
