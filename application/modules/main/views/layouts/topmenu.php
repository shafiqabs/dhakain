<div class="header">
<div class="wrapper" style="background:none; position:relative">
<div id="left" class="top-li"><ul>


<li><a href="javascript:void(0)" >
<img src="<?php echo base_url()?>assets/images/cart.gif"/><span id="cart-preview">25 items -BDT 25000</span>
</a>
</li>
<li><a href="<?php echo site_url('customer/newsletter/1')?>">
<img src="<?php echo base_url()?>assets/images/msg.gif" /><span>Msg 53</span>
</a>
</li>
<li><a href="<?php echo site_url('customer/newsletter/1')?>">
<img src="<?php echo base_url()?>assets/images/msg.gif" /><span>Buy</span>
</a></li>

<li><a href="<?php echo site_url('content/sell')?>"><img src="<?php echo base_url()?>assets/images/msg.gif" /><span>Sell</span>
</a>
</li>
<li class="last"><a href="<?php echo site_url('trade-fair')?>"><img src="<?php echo base_url()?>assets/images/trade-fair.png" /><span>Trade Fair</span>
</a></li>
</ul>
</div>
<div class="top-li" id="right">
<ul>
<?php /*?><li><a href="<?php echo site_url('customer/newsletter/1')?>">
<img src="<?php echo base_url()?>assets/images/tel_icon.gif" /><span>02-8014722</span>
</a></li>
<li>
<a href="<?php echo site_url('customer/newsletter/1')?>">
<img src="<?php echo base_url()?>assets/images/icon_live_chat.gif" /><span>Chat</span>
</a></li><?php */?>
<li class="last"><a id="help" href="javascript:void(0)">
<img src="<?php echo base_url()?>assets/images/help.gif" title="Help" /><span>Help</span>
</a></li>
<li class="last"><a href="<?php echo site_url('signup')?>">
<img src="<?php echo base_url()?>assets/images/help.gif" title="Help" /><span>signup</span>
</a></li>
</ul>
</div>
<div id="middle">
<div id="topnav" class="topnav">
  <a href="JavaScript:void(0)" onclick="window.location='<?php echo site_url('my_profile/my_profile_view')?>'" class="log"><span>Welcome Md Shafiqul Islam<?php if( $this->session->userdata('userid')){ ?><?php echo $this->session->userdata('username'); } ?></span></a>
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
     <div id="signin-inner">
      <div id="signin-inner-left">
     <h1> Welcome to eBDSHOP.com</h1>
Sliding login panel Demo with jQuery
You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!
Download To download this script go back to article
</div>
      <div id="signin-inner-middle">
      <div style="display:block;" id="login_user1" >
      <h1>Member Login</h1>
      <form method="post" action="<?php echo site_url('login/login_submit'); ?>" name="form1" id="form1" >
      <label for="username">User Name/Email:</label>
      <input type="text" name="email" id="login_email"  value="<?php if($this->session->flashdata('email')){ echo $this->session->flashdata('email'); } ?>" />

        <label for="password">Password:</label>
        <input id="password" name="password"  value="" title="password" tabindex="5" type="password" />

      <span class="remember">
        <input class="signin_submit" value="Sign in" tabindex="6" type="submit">

      <input id="remember" name="remember_me" value="1" tabindex="7" <?php if($this->session->userdata('check')=='1'){ ?> checked="checked" <?php } ?> type="checkbox">
      <label for="remember">Remember me</label>

      </span>
      </form>
      </div>
      <div style="display:none;" id="forgot1" >
      <form action="<?php echo site_url('login/forgot')?>" method="post" name="forgotForm1" id="forgotForm1" >
      <label for="username">Email Address:</label>
      <input type="text" name="email" id="forget_email"  value="<?php if($this->session->flashdata('email')){ echo $this->session->flashdata('email'); } ?>" />
      <p>A password will be e-mailed to you.</p>
      <p class="remember">
      <input class="signin_submit" value="Submit" tabindex="6" type="submit">
      </p>
      </form>
      </div>
      <!--
      <p class="forgot"> <a href="#" id="resend_password_link">Forgot your password?</a> </p>
      -->
      <span class="forgot-username" id="for_get1" > <A id="forgot_password_link"
title="If you remember your password, try logging in with your email"
href="javaScript:void(0)"  >Forgot your username?</A> </span>
   <span class="forgot-username"  id="login_get1" style="display:none;" > <A id="return_login_link"
title="If you login, then click here"
href="javaScript:void(0)" >Click here to login</A> </span>
</div>

<div id="signin-inner-right">
   <div style="display:block;" id="login_user1" >
      <h1>Not a member yet? Sign Up!</h1>
      <form method="post" action="<?php echo site_url('register/add_register'); ?>" name="form1" id="form1" >
      <label for="username">User Name:</label>
      <input type="text" name="user_name" id="user_name"  value="" />
      <label for="password">Email:</label>
      <input id="email" name="email"  value="" title="email" tabindex="5" type="text" />
     <p>A password will be e-mailed to you.</p>
     <span class="remember">
      <input class="signin_submit" value="Signup" tabindex="6" type="submit">
     </span>
       </form>
      </div>
   </div>
    </div>
   </fieldset>
</div>

<!-- ---------------  ---  This part use for help text --         ------------------>



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