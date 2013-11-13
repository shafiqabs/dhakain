<?php $this->load->view('layouts/header_admin')?>

<style>
.user_guide{border:1px solid #fafafc; margin-right:10px; width:305px; display:inline-block; float:left}
.inner-title{ font-size:13px; color:#FF4E02; font-weight:bold; padding-left:10px; padding-bottom:5px; border-bottom:1px dotted #FF4E02; margin-bottom:5px; }
.user_guide ul{ padding-bottom:20px;}
.user_guide ul li{ padding-bottom:8px; font-size:12px; padding-left:10px; padding-right:10px;}
.user_guide ul li big{ display:inline-block; font-weight:bold; color:#FF4E02; padding-right:5px;}
label, input, button, select, textarea {
    font-size: 13px;
    font-weight: normal;
    line-height: 18px;
}
</style>
<div class="clear"></div>   
<div id="content-box-container" style="margin:0px auto; float:none;">
<table style="height:100%;">
<tbody>
<tr><td colspan="2" height="20"></td></tr>
<tr><td colspan="2" valign="top" class="left" align="left" >

<fieldset class="sheet column-form fieldset">
<legend>Welcome to onClickBD.com</legend>
Sliding login panel Demo with jQuery You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination! Download To download this script go back to article.Sliding login panel Demo with jQuery You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination! Download To download this script go back to article.Sliding login panel Demo with jQuery You can put anything you want in this sliding panel: videos, audio, images, forms... 
</fieldset>
</td></tr>
<tr>
<td  valign="top">
<table style=" width:638px">
<tr>
<td class="user_guide">
<div>
<div class="centerBoxHeading">How To Use onclickbd </div>
<div class="inner-title">Step-1</div>
<ul>
<li><big>1.</big>Choose your desired deal in our website.</li>
<li><big>2.</big>Click on 'Buy Coupon' to purchase your desired deal. </li>
<li><big>3.</big>If you are a new user then sign up to get mind blowing deals right at your email address through our free email service. </li>
<li><big>4.</big>If you are an existing user, use your email address and password to sign in to your ajkerdeal account. </li>
</ul>
<div class="inner-title" >Step-2</div>
<ul>
<li><big>1.</big>Choose your desired deal in our website.</li>
<li><big>2.</big>Click on 'Buy Coupon' to purchase your desired deal. </li>
<li><big>3.</big>If you are a new user then sign up to get mind blowing deals right at your email address through our free email service. </li>
<li><big>4.</big>If you are an existing user, use your email address and password to sign in to your ajkerdeal account. </li>
</ul>

<div class="inner-title">Step-3</div>
<ul>
<li><big>1.</big>Choose your desired deal in our website.</li>
<li><big>2.</big>Click on 'Buy Coupon' to purchase your desired deal. </li>
<li><big>3.</big>If you are a new user then sign up to get mind blowing deals right at your email address through our free email service. </li>
<li><big>4.</big>If you are an existing user, use your email address and password to sign in to your ajkerdeal account. </li>
</ul>

</div>
</td>
<td  valign="top" class="user_guide">
<div>
<div class="centerBoxHeading">How To Use onclickbd </div>
<div class="inner-title">Step-1</div>
<ul>
<li><big>1.</big>Choose your desired deal in our website.</li>
<li><big>2.</big>Click on 'Buy Coupon' to purchase your desired deal. </li>
<li><big>3.</big>If you are a new user then sign up to get mind blowing deals right at your email address through our free email service. </li>
<li><big>4.</big>If you are an existing user, use your email address and password to sign in to your ajkerdeal account. </li>
</ul>
<div class="inner-title" >Step-2</div>
<ul>
<li><big>1.</big>Choose your desired deal in our website.</li>
<li><big>2.</big>Click on 'Buy Coupon' to purchase your desired deal. </li>
<li><big>3.</big>If you are a new user then sign up to get mind blowing deals right at your email address through our free email service. </li>
<li><big>4.</big>If you are an existing user, use your email address and password to sign in to your ajkerdeal account. </li>
</ul>

<div class="inner-title">Step-3</div>
<ul>
<li><big>1.</big>Choose your desired deal in our website.</li>
<li><big>2.</big>Click on 'Buy Coupon' to purchase your desired deal. </li>
<li><big>3.</big>If you are a new user then sign up to get mind blowing deals right at your email address through our free email service. </li>
<li><big>4.</big>If you are an existing user, use your email address and password to sign in to your ajkerdeal account. </li>
</ul>

</div>
</td>
</tr>
</table>
</td>

<td class="right" valign="top" align="left">

<fieldset class="sheet column-form fieldset" id="fs-personal" style="width:310px;">
<legend>Not a member yet? Sign Up!</legend>
<form class="well">
    <label>User name</label>
    <input type="text" value="" placeholder="Enter your user name" class="span3" id="signin_user_name" required='required' name="signin_user_name"> <span class="mandatory_star">*</span>

        <label>User name</label>
    <input type="text" value="" class="span3" placeholder="Enter your valid email address" id="user_email" name="email"> <span class="mandatory_star">*</span>
     <div class="captcha_text msgemail">example:a@a.com</div> 
     <br />

       <input type="button" class="btn btn-small btn-primary" value="Check availability!" id="check_email" name="check_email" /><span class="msg_email">&nbsp;</span>
       <br />
             <div class="clear"></div>
           <label>Verification code</label>
            <?php echo $cap['image']; ?>
    <input type="text" class="span3" value="" style="margin-top:10px;" placeholder="Enter verification code" id="verification_code" name="verification_code"><span class="mandatory_star">*</span>
       <div class="clear"></div>
    <div class="captcha_text">Letters are not case-sensitive.</div>  
    <div class="clear"></div>
    <div style="margin-top:10px">
    <input type="checkbox" name="check" id="check" value="1" style="float:left" /><div class="captcha_text"><a href="javascript:void(0)" style="display: inline-block;
    line-height: 11px; margin-bottom: 10px;margin-top: -2px; margin-left:10px">Please read the following terms and condition and select check to agree.</a></div>
    </div>
    <div class="clear"></div>
    <button class="btn" type="submit">Submit</button>
       <br />
           <div class="captcha_text">A password will be e-mailed to you.
           <br />
           <span class="mandatory_star">*</span> Indicates required field</div>
               <div class="clear"></div>
    </form>

<div class="clear"></div>
        </fieldset>
</td>
</tr>
</tbody>
</table>

<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->

<?php $this->load->view('layouts/footer_admin')?>
<script>

$(document).ready(function() {

		
	$('#check_email').click(function() {
	 var charVal = $("#user_email").val();
	 alert(charVal);
	 $.ajax({
	       url: "<?php echo site_url('admin/signup/check_email')?>",
			data: "charVal="+charVal,
			type:'post',
			beforeSend: function(){
				$('.msg_email').html('<img src="<?php echo base_url()?>assets/images/ajax-loader.gif">');
			},
			success: function(value){ 
				var val=value;
				var arr =val.split("?!@#");
				if( arr[0] == "avaliable" ){
				$('.msgemail').html(arr[1]).css({color:"#0081a5"});
				}else{
				$('.msgemail').html(arr[1]).css({color:"red"});
				}
				$('.msg_email').html('');
				
			
		}
	  
		}); // End Ajax
		
		
	});	
	
	$("#save").click(function(){
		
				
		if( $('#first_name').val() ==""){
		  	$('.jquery_valid_msg').html('<?php echo $this->lang->line('first_name_msg');?>').css({display:"block"});;
			 document.form.first_name.style.backgroundColor='#FFE6DD';
			$('#first_name').focus();
			return false;
		}
		if( $('#last_name').val() ==""){
		  	$('.jquery_valid_msg').html('<?php echo $this->lang->line('last_name_msg');?>').css({display:"block"});;
			 document.form.last_name.style.backgroundColor='#FFE6DD';
			$('#last_name').focus();
			return false;
		}
		
		
		var new_email_add=$('#user_email').val();
		var len=new_email_add.length
		if (len==0)
		{
			//alert(new_email_add);
			$('.jquery_valid_msg').html('<?php echo $this->lang->line('email_msg');?>').css({display:"block"});;
			 document.form.user_email.style.backgroundColor='#FFE6DD';
			$('#user_email').focus();
			return false;
		}
		var mystring= new String(new_email_add);
		var mymailid=/^\w+((-\w+)|(\.\w+))*\@\w+((\.|-)\w+)*\.\w+$/;
		var mailid=mystring.search(mymailid)
		if (mailid==-1)
		{
			$('.jquery_valid_msg').html('<?php echo $this->lang->line('in_email_msg');?>').css({display:"block"});;
			 document.form.user_email.style.backgroundColor='#FFE6DD';
			$('#user_email').focus();
			return false;
		}
		
		if( $('#password').val() ==""){
		  	$('.jquery_valid_msg').html('<?php echo $this->lang->line('password_msg');?>').css({display:"block"});;
			 document.form.password.style.backgroundColor='#FFE6DD';
			$('#password').focus();
			return false;
		}
		
		
		var a=$('#password').val().length;
		if( a < 5  ||  a > 10 ) {
			 $('.jquery_valid_msg').html('<?php echo $this->lang->line('password_msg_length');?>').css({display:"block"});;
			 document.form.password.style.backgroundColor='#FFE6DD';
			$('#password').focus();
			return false;
		}

		
		if( $('#password').val() != $('#con_password').val() ){
			  $('.jquery_valid_msg').html('<?php echo $this->lang->line('re_password_msg');?>').css({display:"block"});;
			  document.form.con_password.style.backgroundColor='#FFE6DD';
			  $('#con_password').focus();
			  return false;
		}

		if( $('#job_type').val()="" ){
		  	$('.jquery_valid_msg').html('Please select job type').css({display:"block"});;
			document.form.job_type.style.backgroundColor='#FFE6DD';
			return false;
		}
		if( $('#captcha').val() ==""){
		  	$('.jquery_valid_msg').html('<?php echo $this->lang->line('captcha_msg');?>').css({display:"block"});;
			document.form.captcha.style.backgroundColor='#FFE6DD';
			$('#captcha').focus();
			return false;
		}
		
	
	});

	
});	
    function removeSpaces(string) {
		return string.split(' ').join('');
   }

</script>
