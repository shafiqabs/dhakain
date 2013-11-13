<?php $this->load->view('layouts/header')?>
<style>
#backgroundPopup{
display:none;
position:fixed;
_position:absolute; /* hack for internet explorer 6*/
height:100%;
width:100%;
top:0;
left:0;
background:#000000;
border:1px solid #cecece;
z-index:999;
}
#popupContact{
display:none;
position:fixed;
_position:absolute; /* hack for internet explorer 6*/
height:auto;
width:auto;
background:#FFFFFF;
border:2px solid #cecece;
z-index:1000;
padding:12px;
font-size:13px;
}
#popupContact h1{
text-align:left;
color:#6FA5FD;
font-size:22px;
font-weight:700;
border-bottom:1px dotted #D3D3D3;
padding-bottom:2px;
margin-bottom:20px;
}
#popupContactClose{
font-size:14px;
line-height:14px;
right:6px;
top:4px;
position:absolute;
color:#6fa5fd;
font-weight:700;
display:block;
}
#button{
text-align:center;
margin:100px;
}
</style>

<style>
.space2 {
    border: 1px solid #C8DDFC;
    overflow: hidden;
	width:650px;
}

#tradeList h2 {
    background: url("http://www.made-in-china.com/images/trade_shows/listh2_bg.gif") repeat-x scroll 0 0 transparent;
    border-bottom: 1px solid #C6DDFC;
    height: 30px;
    line-height: 30px;
	 padding-left: 15px;
}
.asterisk {
    color: #FF3300;
    font-weight: normal;
}

.expanded th, .req th {
    vertical-align: top;
}

.expanded th, .req th {
    vertical-align: top;
}

.fieldtitle {
    vertical-align: text-top;
}

.submitc {
    background-image: url("http://www.made-in-china.com/images/button-bg.gif");
    background-position: center top;
    background-repeat: repeat-x;
    border: 1px solid #644001;
    color: #644001;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 15px;
}

</style>
<div class="clear"></div> 
	<div id="popupContact" style="border:5px solid #F00">
		<a id="popupContactClose">x</a>
		<div id="sideleft"><div id="boxy"><div class="space"><form onsubmit="return checkSubmit();" id="searchList" method="post" enctype="multipart/form-data" action="http://tradeshow.made-in-china.com/tradeshow.do"><input type="hidden" value="noparam" name="5002mic911"> <input type="hidden" value="searchTradeShow" name="s0kn2"><table width="100%" cellspacing="0" cellpadding="4" border="0"><tbody><tr><td>
        <select id="tag100" name="Y61p0omY2n"><option value="">All Industries</option><option value="JmJaQQnoSxnE">Agriculture &amp; Food</option><option value="QtxGEEnJrmQQ">Apparel &amp; Accessories</option><option value="xUQTnxmAlJJE">Arts &amp; Crafts</option><option value="EOJRmmnUPxxQ">Auto Parts &amp; Accessories</option></select> <input type="hidden" value="" id="tag020"> <select name="omk12DX7rEt82" id="tradeshowSelect"><option selected="selected" value="">All Shows</option><option value="2">Our Shows</option></select> 
        
        <select id="tag01" style="width: 170px;" name="07p6omt"><option value="">All Locations</option><option value="Argentina">Argentina</option><option value="Brazil">Brazil</option></select> <input type="hidden" value="" id="tag00"> <input type="text" title="Start Time" alt="Start Time" onclick="pscalFull.start(document.getElementById('date3'));document.getElementById('clearingBtnDiv').style.display='inline';" readonly="readonly" value="Start Time" size="10" name="omk12DX7rD2km0XMko2Om75" id="date3" style="cursor: pointer; color: rgb(153, 153, 153);" class="selectYear"> <input type="text" title="End Time" alt="End Time" onclick="pscalFull.start(document.getElementById('date4'));document.getElementById('clearingBtnDiv').style.display='inline';" readonly="readonly" value="End Time" size="10" name="omk12DX7rD2km0XMko2E7" id="date4" style="cursor: pointer; color: rgb(153, 153, 153);" class="selectYear"></td></tr><tr><td><input type="text" class="long" style="color: rgb(153, 153, 153);" onblur="setDefaultValue('key','Keywords (Optional)');" onfocus="setDefaultValue('key','Keywords (Optional)');" value="Keywords (Optional)" id="key" name="32tr7m1"> <input type="image" class="radio" id="submitbut" src="/images/trade_shows/search.gif" title="" alt="undefined"></td></tr></tbody></table></form></div></div>




	<form onsubmit="return dosubmit();" method="post" enctype="multipart/form-data" action="http://tradeshow.made-in-china.com/tradeshow.do">
		<input type="hidden" value="noparam" name="5002mic911">
		<input type="hidden" value="bookingSubmit" name="s0kn2">
		
		<input type="hidden" value="qvEQDnGMmxHY" name="nX7rR1n">

			<div class="space2" id="tradeList">
				<h2>Alert</h2>
				<table width="100%" cellspacing="0" cellpadding="8" border="0" class="req1">
					<colgroup><col width="22%">
					<col width="auto">
					</colgroup><tbody><tr>
						<th bgcolor="#EBF2FA" align="right" class="fieldtitle"><span class="asterisk">*</span> You are requesting trade show(s) on</th>
						<td bgcolor="#EBF2FA" class="fieldinfo">
							<ul>
								
								
								
								<li>
									<input type="checkbox" checked="checked" value="qvEQDnGMmxHY" name="0X203DX7rR1">
									MIDEST 2011 <span class="time">[Nov 15-18, 2011]</span>
										<input type="hidden" value="2011-11-15" id="qvEQDnGMmxHY"></li>
								
							</ul><div class="info"></div></td>
					</tr>
				</tbody></table>
				<table width="100%" cellspacing="0" cellpadding="8" border="0" id="t1" class="expanded req">
					<colgroup><col width="22%">
					<col width="auto">
					</colgroup><tbody><tr>
						<th align="right" class="fieldtitle"><span class="asterisk">*</span> User Type</th>
						<td class="fieldinfo">
							<input type="radio" value="1" class="radio" name="m2WYnoY76Et82">
							Exhibitor
							<input type="radio" value="2" class="radio" name="m2WYnoY76Et82">
							Visitor <div class="info"></div></td>
					</tr>
					<tr>
						<th valign="top" align="right" class="fieldtitle"><span class="asterisk">*</span> Email</th>
						<td class="fieldinfo">
							<input type="text" maxlength="160" size="30" value="" name="n2612mxkY4">
							
							<br>
							<strong>Already a Member? <a href="javascript:goLogin()">Sign In</a> !</strong>
							<div class="info"></div></td>
					</tr>
					<tr>
						<th align="right" class="fieldtitle"><span class="asterisk">*</span> Notification</th>
						<td class="fieldinfo"> on
							<input type="text" onclick="pscal.start(document.getElementById('date1'))" readonly="readonly" value="" size="10" name="67oYVY0koY76" id="date1" class="c">
							<img onclick="pscal.start(document.getElementById('date1'))" alt="" src="/images/duration.gif"> send me a Notification<div class="info"></div></td>
					</tr>
					<tr>
						<th align="right" class="fieldtitle"><span class="asterisk">*</span> Name</th>
						<td class="fieldinfo">
							<select name="n2612mP2612m">
<option value="1">Mr.</option>
<option value="3">Mrs.</option>
<option value="2">Miss</option>
<option value="0">Ms.</option>
</select>

							<input type="text" value="" name="n2612myk52"><div class="info"></div>
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td><button name="but_bg" type="submit" class="submitc bw80">Submit</button></td>
					</tr>
				</tbody></table>
				<p>&nbsp;</p>
			</div>
 	  </form>
 	 </div>
    <!-- End Alert Message-->
    <style>
    #login3 .loginabc caption {
    padding: 10px 0 10px 20px;
}

.loginabc caption {
    font-size: 150%;
    font-weight: normal;
    padding: 20px 0 10px 15px;
    text-align: left;
}

caption {
    padding: 5px 0;
}

caption, th, td {
    text-align: left;
}

#login2 input, #login3 input {
    padding: 2px 0;
}

.short {
    width: 30%;
}

input {
    margin-right: 2px;
}

img, input, select, button {
    vertical-align: middle;
}

#login2 .loginabc ul li, #login3 .loginabc ul li, #reg ul.fr li {
    background: url("http://membercenter.made-in-china.com/images/point.gif") no-repeat scroll left 7px transparent;
    float: left;
    margin: 5px 15px 0 0;
    padding: 0 0 0 8px;
}
</style>
    <div id="login3"><form id="logon" method="post" action="/logon.do"><input type="hidden" value="doLogon" name="xcase"> <input type="hidden" value="true" name="prepareToken"><table border="0" class="loginabc"><colgroup><col width="22%"><col></colgroup><caption>Sign In</caption><tbody><tr><th>Member ID or Email</th><td><input type="text" maxlength="160" class="short" size="17" name="logonInfo.logUserName" id="logUserName"></td></tr><tr><th>Password</th><td><input type="password" class="short" size="17" name="logonInfo.logPassword"></td></tr><tr class="hide"><td></td><td><p class="capsLock">Having Caps Lock on may cause you to enter your password incorrectly.</p></td></tr><tr><td>&nbsp;</td><td><ul><li><a href="/logon.do?xcase=getBackPassword">Forgot Password?</a> </li><li><a href="http://www.made-in-china.com/faq/list1u9/Member-Login.html">Trouble with Sign In?</a> </li></ul><input type="image" src="/images/vo/login_go.gif" name="imageField" alt="Sign In" title=""></td></tr></tbody></table><input type="hidden" name="baseNextPage" value="http://tradeshow.made-in-china.com/tradeshow.do?xcase=report&amp;showId=qvEQDnGMmxHY"> <input type="hidden" name="applyGTSource" value=""></form>
    </div>
    
    
    <!--End signin -->
    
<style>
#main {
    margin-top: 0;
    padding-top: 0;
}

#main {
    background-repeat: repeat-y;
    margin: 5px auto 15px;
    overflow: hidden;
    padding-top: 10px;
    width: 960px;
}

#reg {
    line-height: 1.5;
    margin: 10px 0 0;
    width: 100%;
}

.clr, .clear, .clean {
    clear: both;
}

#reg .form .tabForm {
    margin: 0 auto;
    width: 858px;
}

.tabForm {
    border-collapse: inherit;
    border-top: medium none;
}

.tabForm {
    border: 1px solid #DCDCDD;
    table-layout: fixed;
    width: 758px;
}

#reg .form .tabForm td input {
    padding: 2px 0;
}

</style>
<div id="main"><div class="clean" id="reg"><h2><span class="fr">Fields marked with an asterisk <span class="must">*</span> are required.</span>Join Now</h2><form method="post" action="/account.do" class="ppt.account_prepareTokenSubmit_en" name="accountcommand" id="command"><input type="hidden" value="prepareTokenSubmit" name="xcase"> <input type="hidden" value="http://tradeshow.made-in-china.com/tradeshow.do?xcase=report&amp;showId=qvEQDnGMmxHY&amp;reportId=" name="baseNextPage"> <input type="hidden" value="http://membercenter.made-in-china.com/account.do?xcase=prepareToken&amp;baseNextPage=http%3A%2F%2Ftradeshow.made-in-china.com%2Ftradeshow.do%3Fxcase%3Dreport%26showId%3DqvEQDnGMmxHY" id="currentUrlValId" name="currentUrlVal"> <input type="hidden" value="http://tradeshow.made-in-china.com/fairs/fairs-detail-qvEQDnGMmxHY/MIDEST-2011.html" id="refererValId" name="refererVal"><div class="form"><style type="text/css">.subtitle{font-family:Arial,sans-serif;font-size:120%;color:#808080;background-color:#e0e0e0;width:100%}</style> <!--//--><table cellspacing="0" cellpadding="0" border="0" style="border-bottom:none" class="tabForm"><colgroup><col width="22%"><col></colgroup><caption>Select Your Location</caption><tbody><tr class="borderWhite"><th><span class="must">*</span>Country/Region</th><td><input type="hidden" value="" id="formComCountry"> <select style="width: 337px" name="comCountry" id="comCountry"><optgroup label="--Please select--"><option value="Australia">Australia</option><option value="Canada">Canada</option><option value="China">China</option><option value="India">India</option><option value="Pakistan">Pakistan</option><option value="United_Kingdom">United Kingdom</option><option value="United_States">United States</option></optgroup><optgroup label="--More Countries/Regions--"><option value="Afghanistan">Afghanistan</option><option value="Aland_Islands">Aland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American_Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua_and_Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia_and_Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet_Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option><option value="Virgin_Islands_(British)">British Virgin Islands</option><option value="Brunei">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina_Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape_Verde">Cape Verde</option><option value="Cayman_Islands">Cayman Islands</option><option value="Central_African_Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas_Island">Christmas Island</option><option value="Cocos_(Keeling)_Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Zaire">Congo (Democratic Republic of the Congo)</option><option value="Congo">Congo (Republic of the Congo)</option><option value="Cook_Islands">Cook Islands</option><option value="Costa_Rica">Costa Rica</option><option value="Cote_d'Ivoire_(Ivory_Coast)">Cote d'Ivoire</option><option value="Croatia_(Hrvatska)">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus">Cyprus</option><option value="Czech_Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican_Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El_Salvador">El Salvador</option><option value="Equatorial_Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Faroe_Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French_Guiana">French Guiana</option><option value="French_Polynesia">French Polynesia</option><option value="French_Southern_and_Antarctic_Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard_and_McDonald_Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hongkong_China">Hong Kong(China)</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Falkland_Islands_(Islas_Malvinas)">Islas Malvinas (Falkland Islands)</option><option value="Isle_of_Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyz Republic</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao_China">Macao(China)</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall_Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New_Caledonia">New Caledonia</option><option value="New_Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk_Island">Norfolk Island</option><option value="North_Korea">North Korea</option><option value="Northern_Mariana_Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman </option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua_New_Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn_Island">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto_Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint_Barthelemy">Saint Barthelemy</option><option value="St._Helena">Saint Helena, Ascension and Tristan da Cunha</option><option value="St._Kitts_and_Nevis">Saint Kitts and Nevis</option><option value="St._Lucia">Saint Lucia</option><option value="Saint_Martin">Saint Martin</option><option value="St._Pierre_and_Miquelon">Saint Pierre and Miquelon</option><option value="St._Vincent_and_the_Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San_Marino">San Marino</option><option value="Sao_Tome_and_Principe">Sao Tome and Principe</option><option value="Saudi_Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia,_Republic_of_the">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra_Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint_Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon_Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South_Africa">South Africa</option><option value="South_Georgia_and_the_South_Sandwich_Island">South Georgia and the South Sandwich Islands</option><option value="South_Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri_Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard_and_Jan_Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syrian Arab Republic</option><option value="Taiwan_China">Taiwan(China)</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Macedonia">The Former Yugoslav Republic of Macedonia</option><option value="East_Timor">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad_and_Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks_and_Caicos_Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United_Arab_Emirates">United Arab Emirates</option><option value="United_Kingdom">United Kingdom</option><option value="United_States">United States</option><option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option><option value="Virgin_Islands_(U.S.)">United States Virgin Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican_City_State_(Holy_See)">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wallis_and_Futuna">Wallis and Futuna</option><option value="Western_Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></optgroup></select> <!-- //show the national flag after textfield
		<img id="nationalFlag" src="/images/country/United_States.gif" 
			alt="United_States" width="22" height="13" />
--><div style="display:none;" id="comCountry_Tip" class="onPass"></div></td></tr></tbody></table><table cellspacing="0" cellpadding="0" border="0" style="border-bottom:none" class="tabForm"><colgroup><col width="22%"><col></colgroup><caption>Enter Your Account Information</caption><tbody><tr><th><span class="must">*</span>Current Email</th><td><div style="width: 270px; margin: 0pt 0pt 0pt 355px; position: absolute; display: none;" id="userEmail_Tip" class=""></div><span class="info"></span><input type="text" maxlength="160" value="" class="mid mail" name="userEmail" id="userEmail"></td></tr><tr><th><span class="must">*</span>Member ID</th><td><div style="width: 413px; margin: 0pt 0pt 0pt 212px; position: absolute; display: none;" id="memberId_Tip" class=""></div><span class="info"></span><input type="text" maxlength="20" value="" class="short" name="memberId" id="memberId"></td></tr><tr><th><span class="must">*</span>Password</th><td><div style="width: 413px; margin: 0pt 0pt 0pt 212px; display: none;" id="logPassword_Tip" class=""></div><span class="info"></span><input type="password" maxlength="20" value="" class="short" name="logPassword" id="passwd"></td></tr><tr><th><span class="must">*</span>Re-enter Password</th><td><div style="width: 413px; margin: 0pt 0pt 0pt 212px; display: none;" id="confirmPassword_Tip" class=""></div><span class="info"></span><input type="password" maxlength="20" value="" class="short" name="confirmPassword" id="confirm_passwd"></td></tr><tr class="borderWhite" id="tr_security_ques"><th>Security Question</th><td><div style="width: 270px;margin: 0 0 0 355px;display:none;" id="securityQuestion_Tip" class="onShow"></div><span class="info"></span><select style="width:337px" name="securityQuestion" id="securityQuestion"><option value="0">-----Please select or write your own question-----</option><option value="1">Where is your hometown?</option><option value="2">What is the date of your birthday?</option><option value="3">What is your favorite animal?</option><option value="4">What was the name of your first school?</option><option value="5">Write your own question</option></select></td></tr><tr style="display: none;" id="tr_ques"><th><span class="must">*</span>Your own Question</th><td><div style="width: 270px;margin: 0 0 0 355px;display:none;" id="customeQuestion_Tip" class=""></div><input type="text" maxlength="80" value="" class="mid" name="customeQuestion" id="customeQuestion"></td></tr><tr style="display: none;" class="borderWhite" id="tr_answer"><th><span class="must">*</span>Answer to Question</th><td><div style="width: 270px;margin: 0 0 0 355px;display:none;" id="answer_Tip" class=""></div><span class="info"></span><input type="text" maxlength="80" value="" class="mid" name="answer" id="answer"></td></tr></tbody></table><table cellspacing="0" cellpadding="0" border="0" class="tabForm"><colgroup><col width="22%"><col></colgroup><caption>Enter Your Business Information</caption><tbody><tr><th><span class="must">*</span>Full Name</th><td><div style="width: 270px; margin: 0pt 0pt 0pt 355px; display: none;" id="userName_Tip" class=""></div><span class="info"></span><select name="userGender"><option value="1">Mr.</option><option value="3">Mrs.</option><option value="2">Miss</option><option value="0">Ms.</option></select> <input type="text" maxlength="50" value="" style="width:43%" name="userName" id="userName"><div style="display:none;" id="userGender_Tip" class=""></div></td></tr><tr><th><span class="must">*</span>Company Name</th><td><div style="width: 270px; margin: 0pt 0pt 0pt 355px; display: none;" id="comName_Tip" class=""></div><input type="text" maxlength="160" value="" class="mid" name="comName" id="comName"></td></tr><tr style="display: none;" id="comNameCn_tr"><th><span class="must">*</span>Company Name in Chinese</th><td><div style="width: 270px; margin: 0pt 0pt 0pt 355px; display: none;" id="comNameCn_Tip" class=""></div><input type="text" maxlength="80" value="" class="mid" name="comNameCn" id="comNameCn" disabled=""></td></tr><tr><th><span class="must">*</span>Product Keyword(s)</th><td><div style="display: none;width: 270px;margin: 0 0 0 355px" id="keywords_Tip" class=""></div><input type="text" style="width:104px" class="key" id="keywords0" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords1" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords2" value="" maxlength="40" name="keywords"><div class="clean"><div onmouseout="javascript:this.style.backgroundColor='#FFF'" onmouseover="javascript:this.style.backgroundColor='#ffc'" onclick="javascript:showHide('moreKey');showHide('othKey')" class="moreKey expanded" id="moreKey"><strong><img alt="Add more keywords" src="/images/adding.gif"> <a href="javascript:void(0)">Add more</a> </strong></div><div style="width:350px" id="othKey" class="othKey collapsed"><strong><a onclick="javascript:showHide('moreKey');showHide('othKey');" href="javascript:void(0);"><img alt="Hide" src="../images/decrease.gif"> Hide</a> </strong><input type="text" style="width:104px" class="key" id="keywords3" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords4" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords5" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords6" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords7" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords8" value="" maxlength="40" name="keywords"> <input type="text" style="width:104px" class="key" id="keywords9" value="" maxlength="40" name="keywords"></div></div><div id="alertbox" style="" class="gray clean"><input type="checkbox" value="1" name="subscribeAlert" id="subscribeAlert1"><input type="hidden" value="on" name="_subscribeAlert"> Receive E-mail alerts on the latest products according to your interest</div></td></tr><tr id="comTelephone"><th><span class="must">*</span>Telephone</th><td><div style="width: 274px; margin: 0pt 0pt 0pt 351px; display: none;" id="comTelephone_Tip" class=""></div><input type="text" maxlength="10" size="3" value="" style="width:30px" name="telephone1" id="comTelephone1"> - <input type="text" maxlength="10" size="5" value="" style="width:72px" name="telephone2" id="comTelephone2" class="grayColor"> <span id="tel_dash">-</span><input type="text" maxlength="10" size="13" value="" style="width:195px" name="telephone3" id="comTelephone3" class="grayColor"></td></tr><tr><th><span class="must">*</span>Verification Code</th><td style="vertical-align: top"><div style="width: 450px; margin: 0pt 0pt 0pt 175px; display: none;" id="validateNumber_Tip" class=""></div><input type="text" style="ime-mode: disabled;" size="4" value="" maxlength="4" name="validateNumber" id="validateNumber" autocomplete="off"><div><iframe width="105" scrolling="no" height="42" frameborder="0" src="/script/validateImage.jsp" name="validateFrame" id="validateFrame"></iframe> <span style="margin-left: 5px"><a href="/script/validateImage.jsp" target="validateFrame" rel="nofollow">Reload</a></span></div></td></tr></tbody></table><script type="text/javascript" src="/script/jquery.js"></script> 
   </div><div class="c">By submitting your registration information, you agree to the <a target="_blank" href="http://www.made-in-china.com/help/terms/">Terms &amp; Conditions</a> and have read and understood the <a target="_blank" href="http://www.made-in-china.com/help/policy/">Privacy Policy</a>.<br><button id="s15" name="go" type="submit">
              Complete
            </button></div></form></div></div>
    
    <div id="tradeList" class="space2 ">
			<h2>Comments</h2>
			<form method="post" enctype="multipart/form-data" action="http://tradeshow.made-in-china.com/tradeshow.do">
				<input type="hidden" value="noparam" name="5002mic911">
				<input type="hidden" value="submitComment" name="s0kn2">
				<input type="hidden" value="IBmxiEagRQHd" name="nX7rR1">
				<div class="space">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" class="joinMain">
						<colgroup><col width="23%">
						<col width="auto">
						</colgroup><tbody><tr>
							<th class="fieldtitle"><span class="asterisk">*</span> Contents</th>
							<td class="fieldinfo">
								<textarea class="long" cols="50" rows="6" name="076o26o"></textarea><div class="info"></div></td>
						</tr>
						<tr>
							<th class="fieldtitle"><span class="asterisk">* </span> Registration Type</th>
							<td class="fieldinfo">
								<input type="radio" name="m2WYnoY76Et82" class="radio" value="1">
								Exhibitor
								<input type="radio" value="2" class="radio" name="m2WYnoY76Et82">
								Visitor
								<input type="radio" value="3" class="radio" name="m2WYnoY76Et82">
								Organizer<div class="info"></div></td>
						</tr>
						<tr>
							<th class="fieldtitle"><span class="asterisk">*</span> Email</th>
							<td class="fieldinfo">
								<input type="text" maxlength="160" class="mid" value="info24abs@gmail.com" name="n2612mxkY4">
							<div class="info"></div></td>
						</tr>
						<tr>
							<th class="fieldtitle"><span class="asterisk">*</span> Name</th>
							<td class="fieldinfo">
								<select name="n2612mP2612m">
<option value="1" selected="selected">Mr.</option>
<option value="3">Mrs.</option>
<option value="2">Miss</option>
<option value="0">Ms.</option>
</select>

								<input type="text" value="xxxx" name="n2612myk52">
							<div class="info"></div></td>
						</tr>
						<tr>
							<th class="fieldtitle"><span class="asterisk">*</span> Company 
								Name</th>
							<td class="fieldinfo">
								<input type="text" class="mid" value="authentic" name="n2612mL75yk52"><div class="info"></div></td>
						</tr>
						<tr>
							<th class="fieldtitle"><span class="asterisk">*</span> Business Range</th>
							<td class="fieldinfo">
								<input type="text" readonly="readonly" size="30" value="Agriculture &amp; Food" id="s07" name="0koyk52">
								<input type="button" onclick="openCatalogWindow('http://tradeshow.made-in-china.com/tradeshow.do?xcase=check&amp;tagName=s09&amp;lanCode=0&amp;selectedCatCode=',document.getElementById('s09').value)" value="Select Category">
								<input type="hidden" value="JmJaQQnoSxnE" name="nX7rKpnY62nnD0782" id="s09">
							<div class="info"></div></td>
						</tr>
						<tr>
							<th class="fieldtitle"><span class="asterisk">*</span> Country/Region</th>
							<td class="fieldinfo"><select disabled="disabled" name="07p6omt">
									<option selected="selected" value="Bangladesh">Bangladesh</option>
								</select>
								<input type="hidden" value="Bangladesh" name="n2612mL7p6omt">
							</td>
						</tr>
						<tr>
							<th>&nbsp;</th>
							<td><button id="submitbut1" name="imageField2" type="submit" class="submitc bw80">Submit</button></td>
						</tr>
					</tbody></table>
				</div>
			</form>
		</div>
	</div>
	<div id="backgroundPopup"></div>
                       
<div class="" style="margin-top:15px">
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>

<td id="column-center" valign="top" >
<div class="column-center-padding">
                    
<div id="indexDefault" class="centerColumn">

<script type="text/javascript">
//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopup(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupContact").fadeIn("slow");
		popupStatus = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup(){
	//disables popup only if it is enabled
	if(popupStatus==1){
		$("#backgroundPopup").fadeOut("slow");
		$("#popupContact").fadeOut("slow");
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact").height();
	var popupWidth = $("#popupContact").width();
	//centering
	$("#popupContact").css({
		"position": "fixed",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup").css({
		"height": windowHeight
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$(".basic").click(function(){
		//centering with css
		centerPopup();
		//load popup
		loadPopup();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose").click(function(){
		disablePopup();
	});
	//Click out event!
	$("#backgroundPopup").click(function(){
		disablePopup();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1){
			disablePopup();
		}
	});

});
/**
 * We use the initCallback callback
 * to assign functionality to the controls
 */


// Ride the carousel...


jQuery(document).ready(function(){
 	
	var content_uri="<?php echo $this->uri->segment(2,'welcome')?>";
	$('#'+content_uri).addClass('selected');
	$('#'+content_uri+'-1').show();
	$(".shadetabs ul li").click(function(){
	var content_uri=$(this).attr('id');
	$('.shadetabs ul li').removeClass('selected');
	$('.centerBoxWrapper').fadeOut('fast');
	$('#'+content_uri).addClass('selected');
	$('#'+content_uri+'-1').fadeIn(3000, function () {
            $(".inner-content").fadeIn(100);
     });
	 return false;

	})
	
	$(".collapse-button").click(function()
	{
	var id=$(this).attr('id');
	//alert(id);
	$('.con-collapse-'+id).toggleClass("collapse","slow");
	//$('.collapse-1').slideToggle('slow');
	$(this).toggleClass("collapse-close", 10000);
		
	});


});


$(document).ready(function(){
       
	    $ ('tr.entry:even').addClass ('even');
        $ ('tr.entry:odd').addClass ('odd');
});



</script>
<style>
.collapse{display:none!important}
#board-content {
    float: left;
    margin-bottom: 20px;
    padding-left: 7px;
}

.centerBoxWrapper{display:none}

</style>


<!-- bof: featured products  -->
<div class="shadetabs">
<ul>
<li class="" id="wlecome"><a href="javascript:void(0)">Welcome</a></li>
<li id="event"><a href="javascript:void(0)" style="">Corporate/Event News</a></li>
<li id="corporate"><a href="javascript:void(0)">Trade Fair</a></li>
<li id="sell"><a href="javascript:void(0)">How to Sell</a></li>             
<li id="buy"><a href="javascript:void(0)">How to Buy</a></li>
</ul>
</div>
<div id="wlecome-1" class="centerBoxWrapper">
<h2 class="centerBoxHeading"><?php echo $this->settings_model->settings_name(51); ?></h2>
<div id="board-content">
<?php $query=$this->page_model->guide_content(51);

foreach ($query->result() as $rows)
{
?>
<div class="board-content-inner">
<h3><?php echo $rows->guide_content_name; ?><span class="collapse-button" id="<?php echo $rows->guide_content_id; ?>">&nbsp;</span></h3>
<div class="inner-content con-collapse-<?php echo $rows->guide_content_id; ?>" >
<?php echo $rows->guidecontent; ?>
</div>
</div>
<?php } ?>
<div class="clear"></div>
<!-- eof: featured products  -->
</div> 

<div class="clear"></div>
<!--eof content_center-->
</div>
<div id="event-1" class="centerBoxWrapper">
<h2 class="centerBoxHeading"><?php echo $this->settings_model->settings_name(51); ?></h2>
<div id="board-content">
<?php $query=$this->page_model->guide_content(51);

foreach ($query->result() as $rows)
{
?>
<div class="board-content-inner">
<h3><?php echo $rows->guide_content_name; ?><span class="collapse-button" id="<?php echo $rows->guide_content_id; ?>">&nbsp;</span></h3>
<div class="inner-content con-collapse-<?php echo $rows->guide_content_id; ?>" >
<?php echo $rows->guidecontent; ?>
</div>
</div>
<?php } ?>
<div class="clear"></div>
<!-- eof: featured products  -->
</div> 

<div class="clear"></div>
<!--eof content_center-->
</div>
<div id="corporate-1" class="centerBoxWrapper">
<h2 class="centerBoxHeading">On Going Trade Fair</h2>
<div id="board-content">
<?php 
$query=$this->db->get('tradeshow');
foreach ($query -> result() as $rows ){
?>
<div class="board-content-inner">
<h3><?php echo $rows->tradeshow_title ?><span class="collapse-button" id="<?php echo $rows->tradeshow_id; ?>">&nbsp;</span></h3>
<div class="inner-content con-collapse-<?php echo $rows->tradeshow_id; ?>" >

<table width="100%" cellspacing="0" cellpadding="0" border="0" id="data">
	<colgroup><col width="20%">
	<col width="auto"></colgroup>
    <tbody>
    <tr>
		<th>Organizer: </th>
		<td><?php echo ($rows->organizer_name); ?></td>
	</tr>
	
	<tr class="r2">
		<th>Duration: </th>
		<td><?php echo date("M jS",$rows->start_date); ?>&nbsp;to&nbsp;<?php echo date("M jS , Y",$rows->end_date); ?> </td>
	
    </tr>
	<tr>
		<th>Opening Time: </th>
		<td><?php echo $rows->opening_time; ?> to <?php echo $rows->end_time; ?> </td>
	</tr>
	<tr class="r2">
		<th>Venue: </th>
		<td><?php echo ($rows->venue);  ?></td>
	</tr>	

	<tr>
		<th>Location: </th>
		<td><?php echo $this->settings_model->settings_name($rows->location_id);  ?></td>
	</tr>

		<tr class="r2">
			<th>Contact Person: </th>
			<td><?php echo ($rows->contact_name);  ?></td>
		</tr>

		<tr>
			<th>Email: </th>
			<td><a rel="nofollow" href="mailto:daiyh@ceac.com.cn?subject=Inquiry%20of%20your%20exhibition%20listed%20on%20www.made-in-china.com"> Send an email</a></td>
		</tr>

		<tr class="r2">
			<th>Telephone:</th>
			<td><?php echo ($rows->mobile_no).','.($rows->phone_no);  ?></td>
		</tr>

		<tr>
			<th>Fax: </th>
			<td><?php echo ($rows->phone_no);  ?></td>
		</tr>

	<tr class="r2">
		<th>Website:</th>
		<td><a rel="nofollow" target="_blank" href="/redirect.do?action=tradeshow&amp;sourceId=IBmxiEagRQHd">Visit the official website</a> </td>
	</tr>

</tbody></table>

<div class="linkBox operate">
		
<a href="javascript:void(0)" class="basic" id="<?php echo $rows->tradeshow_id; ?>" ><span>Set Alert</span></a>
<a href="javascript:void(0)" id="<?php echo $rows->tradeshow_id; ?>" ><span>Submit a Show Report</span></a>
<a href="javascript:void(0)" id="<?php echo $rows->tradeshow_id; ?>" ><span>Submit a Feedback</span></a>
<a href="javascript:void(0)" id="<?php echo $rows->tradeshow_id; ?>" ><span>Preview</span></a>
<a href="<?php echo site_url('trade-fair/')?><?php echo $rows->tradeshow_id; ?>"><span>More Details</span></a>
</div>
</div>
</div>
<?php } ?>
<div class="clear"></div>
<!-- eof: featured products  -->
</div> 

<div class="clear"></div>
<!--eof content_center-->
</div>

<div id="sell-1" class="centerBoxWrapper">
<h2 class="centerBoxHeading"><?php echo $this->settings_model->settings_name(51); ?></h2>
<div id="board-content">
<?php 
$query=$this->db->get('tradeshow');
foreach ($query -> result() as $rows ){
?>
<div class="board-content-inner">
<h3><?php echo $rows->tradeshow_title ?><span class="collapse-button" id="<?php echo $rows->tradeshow_id; ?>">&nbsp;</span></h3>
<div class="inner-content con-collapse-<?php echo $rows->tradeshow_id; ?>" >

<table width="100%" cellspacing="0" cellpadding="0" border="0" id="data">
	<colgroup><col width="20%">
	<col width="auto"></colgroup>
    <tbody>
    <tr>
		<th>Organizer: </th>
		<td><?php echo ($rows->organizer_name); ?></td>
	</tr>
	
	<tr class="r2">
		<th>Duration: </th>
		<td><?php echo date("M jS",$rows->start_date); ?>&nbsp;to&nbsp;<?php echo date("M jS , Y",$rows->end_date); ?> </td>
	
    </tr>
	<tr>
		<th>Opening Time: </th>
		<td><?php echo $rows->opening_time; ?> to <?php echo $rows->end_time; ?> </td>
	</tr>
	<tr class="r2">
		<th>Venue: </th>
		<td><?php echo ($rows->venue);  ?></td>
	</tr>	

	<tr>
		<th>Location: </th>
		<td><?php echo $this->settings_model->settings_name($rows->location_id);  ?></td>
	</tr>

		<tr class="r2">
			<th>Contact Person: </th>
			<td><?php echo ($rows->contact_name);  ?></td>
		</tr>

		<tr>
			<th>Email: </th>
			<td><a rel="nofollow" href="mailto:daiyh@ceac.com.cn?subject=Inquiry%20of%20your%20exhibition%20listed%20on%20www.made-in-china.com"> Send an email</a></td>
		</tr>

		<tr class="r2">
			<th>Telephone:</th>
			<td><?php echo ($rows->mobile_no).','.($rows->phone_no);  ?></td>
		</tr>

		<tr>
			<th>Fax: </th>
			<td><?php echo ($rows->phone_no);  ?></td>
		</tr>

	<tr class="r2">
		<th>Website:</th>
		<td><a rel="nofollow" target="_blank" href="/redirect.do?action=tradeshow&amp;sourceId=IBmxiEagRQHd">Visit the official website</a> </td>
	</tr>

</tbody></table>

<div class="linkBox operate">
		
<a href="javascript:void(0)" class="basic" id="<?php echo $rows->tradeshow_id; ?>" ><span>Set Alert</span></a>
<a href="javascript:void(0)" id="<?php echo $rows->tradeshow_id; ?>" ><span>Submit a Show Report</span></a>
<a href="javascript:void(0)" id="<?php echo $rows->tradeshow_id; ?>" ><span>Submit a Feedback</span></a>
<a href="javascript:void(0)" id="<?php echo $rows->tradeshow_id; ?>" ><span>Preview</span></a>
<a href="<?php echo site_url('trade-fair/')?><?php echo $rows->tradeshow_id; ?>"><span>More Details</span></a>
</div>
</div>
</div>
<?php } ?>
<div class="clear"></div>
<!-- eof: featured products  -->
</div> 

<div class="clear"></div>
<!--eof content_center-->
</div>

<div id="buy-1" class="centerBoxWrapper">
<h2 class="centerBoxHeading"><?php echo $this->settings_model->settings_name(51); ?></h2>
<div id="board-content">
<?php $query=$this->page_model->guide_content(51);

foreach ($query->result() as $rows)
{
?>
<div class="board-content-inner">
<h3><?php echo $rows->guide_content_name; ?><span class="collapse-button" id="<?php echo $rows->guide_content_id; ?>">&nbsp;</span></h3>
<div class="inner-content con-collapse-<?php echo $rows->guide_content_id; ?>" >
<?php echo $rows->guidecontent; ?>
</div>
</div>
<?php } ?>
<div class="clear"></div>
<!-- eof: featured products  -->
</div> 

<div class="clear"></div>
<!--eof content_center-->
</div>
</div>

</div>
</td>
<td id="column_right" style="width:250px">


<script type="text/javascript">

function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        wrap: 'circular',
		scroll: 1,
		animation:'slow',
		auto:true,
        initCallback: mycarousel_initCallback
    });
});

</script>
<?php $this->load->view('layouts/right')?>
</td>
</tr>
</table>
<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->

<?php $this->load->view('layouts/footer')?>