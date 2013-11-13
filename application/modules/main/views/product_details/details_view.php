<!-- start of header -->	
<?php $this->load->view('layouts/header')?>
<!-- end of header -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/boxOver.js"></script>
<style>
#detailInfoUpSec {
    margin: 5px 0 40px;
    width: 955px;
	border:1px solid #DCDCDC;
	background:#fbfbfb;
	padding-bottom:15px;
}
.clearfix {
    display: block;
}

#productthumb{
    position: relative;
	margin-left:2px;
}

#productthumb .thumbnail {
    display: block;
}



#productthumb .thumbnail span {
    float: left;
    padding: 0;
    width: 55px;
    position: relative;
	height:66px;
	margin-left:10px;
}

#productthumb .thumbnail span.thmb-selected{
 	background: url("<?php echo base_url() ?>assets/images/thmb_selected.png")transparent;
	background-position: center top;
	background-repeat:no-repeat;
}

#productthumb .thumbnail span img{margin-top:5px; border:2px solid #3697a4; height:50px; width:50px}
.wrapBoxInnerBlue {
    border: 2px solid #3596a3;
	height:262px;
}

#companyName, #comanyLocation, #businessTypeLable, #businessType {
    margin-top: 2px;
    padding-left: 13px;
}

#supplierDetailTitle {
    background-color: #3596a3;
    font: bold 12px/12px arial;
    padding: 5px 0 7px 13px;
	color:#fff!important;
}

#comanyLocation {
    color: #353535;
}

#companyName, #comanyLocation, #businessTypeLable, #businessType {
    margin-top: 5px;
    padding-left: 13px;
}

#businessTypeLable {
    color: #6C6C6C;
}



#contactDetails {
    background: url("<?php echo base_url() ?>assets/images/contact.png")transparent;
	background-repeat:no-repeat;
	background-position: 12px 5px;
    background-repeat: no-repeat;
    padding: 2px 0 0 37px;
	height:20px!important;
   display:block;
   margin-top:5px;
	
}

#companyName {
    font: bold 14px arial;
    margin-top: 8px !important;
}

#gsSupplier {
    background: url("<?php echo base_url() ?>assets/images/supplier.png")transparent;
	background-repeat:no-repeat;
	background-position: 12px 5px;
    background-repeat: no-repeat;
    padding: 2px 0 0 37px;
	height:20px!important;
   	display:block;
   	margin-top:0px;
}

#avSupplier {
    background: url("<?php echo base_url() ?>assets/images/relation.png")transparent;
	background-repeat:no-repeat;
	background-position: 12px 5px;
    background-repeat: no-repeat;
    padding: 2px 0 0 37px;
	height:20px!important;
   	display:block;
   	margin-top:5px;
}

#guideToMiniSite {
    border-top: 1px solid #E6E9C4;
    margin: 8px 7px;
    padding: 8px 4px;
}

#productTitle {
    font: bold 19px arial;
    padding-bottom: 6px;
}

.otherProducts {
    color: #666666;
    font-family: Tahoma;
    font-size: 11px;
    padding-bottom: 10px;
}
.showLine {
    border-bottom: 1px solid #F3D899;
}




#productTbInfo {
    font-size: 12px;
    margin-top: 10px;
}

#productTbInfo .proName {
    color: #6C6C6C;
    font-weight: normal;
    padding-right: 6px;
    text-align: right;
}

.contactWay {
    margin: 10px 0 0;
}

.wrapBoxOut {
    border: 1px solid #F1D38B;
    padding: 1px;
}

#contactInfoUp {
    overflow: hidden;
    padding: 4px 0 4px 20px;
}

.clearfix {
    display: block;
}
#contactInfoLeft {
    float: left;
    width: 150px;
}

#contactNowUp {
    border-left: 1px solid #F1D38B;
    display: block;
    float: left;
    padding: 0 0 5px;
    width: 184px;
}
.buttonContactNow {
    display: block;
    margin-left: 28px;
}

#contactNowUp div {
    color: #6C6C6C;
    font: 10px arial;
    margin-left: 23px;
    padding: 5px 0 0;
}
</style>
<div class="main">
		<!-- start of sidebar -->
     
<script src="<?php echo base_url(); ?>assets/js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.jqzoom.css" type="text/css">
<style type="text/css">
a img,:link img,:visited img { border: none; }
.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}
ul#thumblist{display:block; position:relative; margin-left:-4px;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{
    display:block;
	float: left;
    padding: 0;
    width: 55px;
    position: relative;
	height:66px;
	margin-left:10px;
}
ul#thumblist li a img{display:block;border:1px solid #F1D38B; height:50px; width:50px; margin-top:5px;}
ul#thumblist li a.zoomThumbActive{
	background: url("<?php echo base_url() ?>assets/images/thmb_selected.png")transparent;
	background-position: center top;
	background-repeat:no-repeat;

}
ul#thumblist li a.zoomThumbActive img{ border:#3596a3 1px solid}

.jqzoom{

	text-decoration:none;
	float:left;
}





</style>
<script type="text/javascript">

$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'standard',
			zoomWidth: 400,
            //zoomWindow  default width
            zoomHeight: 400,
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
	
});


</script>                   
<div id="detailInfoUpSec">

<div style="background:#fbfbfb; margin-top:15px">
<div style="width:275px; height:335px; float:left; margin-left:15px;">
<div class="clearfix" id="content" style="height:335px;width:275px;" >
    <div class="clearfix">
        <a href="<?php echo base_url(); ?>assets/images/triumph_big1.jpg" class="jqzoom" rel='gal1'  title="Xarina Wedding Dress Limited" >
            <img src="<?php echo base_url(); ?>assets/images/triumph_small1.jpg"  title="triumph"  style="border: 1px solid #3596a3; height:265px; width:265px">
        </a>
    </div>
	<br/>
 <div class="clearfix" >
	
    
    
    <ul id="thumblist" class="clearfix" >
		<li><a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url(); ?>assets/images/triumph_small1.jpg',largeimage: '<?php echo base_url(); ?>assets/images/triumph_big1.jpg'}"><img src='<?php echo base_url(); ?>assets/images/thumbs/triumph_thumb1.jpg'></a></li>
		<li><a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url(); ?>assets/images/triumph_small2.jpg',largeimage: '<?php echo base_url(); ?>assets/images/triumph_big2.jpg'}"><img src='<?php echo base_url(); ?>assets/images/thumbs/triumph_thumb2.jpg'></a></li>
		<li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url(); ?>assets/images/triumph_small3.jpg',largeimage: '<?php echo base_url(); ?>assets/images/triumph_big3.jpg'}"><img src='<?php echo base_url(); ?>assets/images/thumbs/triumph_thumb3.jpg'></a></li>
        <li><a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url(); ?>assets/images/triumph_small2.jpg',largeimage: '<?php echo base_url(); ?>assets/images/triumph_big2.jpg'}"><img src='<?php echo base_url(); ?>assets/images/thumbs/triumph_thumb2.jpg'></a></li>
	</ul>
	</div>
</div>
</div>

<div style="width:360px; height:335px; float:left; margin-left:5px;">

<div id="productBriefInfo"><h2 id="productTitle">2010 Quinceanera Dress BE9002</h2><div class="otherProducts">Other products by <strong>Feature:</strong> <a rel="nofollow" href="#">Dry Cleaning</a></div><div class="showLine"></div>
<table class="AE:disable" id="productTbInfo"><tbody>
<tr id="fobTr"><th class="proName">Model No:</th><td class="proValue">WD24940</td></tr>
<tr id="fobTr"><th class="proName">Price:</th><td class="proValue">BD 65120 Taka</td></tr>
<tr id="fobTr"><th class="proName">Condition:</th><td class="proValue">Brand New</td></tr>
<tr><th class="proName">Quantity:</th><td style="overflow:visible;" class="proValue"><div id="mOrderValue"><select><option value="1">1</option><option value="1">2</option><option value="1">3</option><option value="1">4</option><option value="1">5</option></select><input type="button" id="addcart" value="Add to Cart" /></div></td></tr>
<tr><th class="proName">Payment:</th><td class="proValue">T/T,Western Union,MoneyGram</td></tr>
</tbody></table>

<div class="contactWay wrapBoxOut">
<div id="contactInfoUp" class="wrapBoxInner clearfix">
<div class="clearfix" id="contactInfoLeft"><a id="contactPersonUp" rel="nofollow" href="#">Mr. Sufian Zaqtan</a> <a rel="nofollow" href="#" id="talkId11"></a><a rel="nofollow" href="http://trademanager.alibaba.com/" id="noAlitalkId11"></a></div><div id="contactNowUp"><a target="_blank" rel="nofollow" title="Click	to send	an inquiry" class="buttonContactNow" href="#"><img border="0" align="absmiddle" alt="Click to send an inquiry" src="2010%20Quinceanera%20Dress%20BE9002%20products%2C%20buy%202010%20Quinceanera%20Dress%20BE9002%20products%20from%20alibaba.com.mht_files/detail_c.gif" id="position2"></a><div>Send a Message to this Supplier</div></div></div>
</div>
<div class="contactWay wrapBoxOut">
<div id="contactInfoUp" class="wrapBoxInner clearfix">
<div class="clearfix" id="contactInfoLeft"><a id="contactPersonUp" rel="nofollow" href="#">Add to My Favorites</a> </div><div id="contactNowUp"><a target="_blank" rel="nofollow" title="Click to shop directions" class="buttonContactNow" href="#" style="width:60px; float:left">Location</a><a target="_blank" rel="nofollow" title="Click to shop directions" class="buttonContactNow" href="#" style="width:60px; float:left" >Directions</a></div></div>
</div>
</div>
        
</div>


<div style="width:275px; height:335px; float:left; margin-left:10px; margin-right:10px;">
<div class="wrapBoxInnerBlue">
<div id="supplierDetailTitle">Supplier Details</div>
<a href="http://xarina.en.alibaba.com/" class="blockA" id="companyName">Xarina Wedding Dress Limited</a>
<div class="clearfix" id="comanyLocation"><div>[ Guangdong, China (Mainland) ]</div>
<span title="2010-5-17" onmouseover="this.title=calTime(8)" id="locationIcon"></span></div>
<div id="businessTypeLable" style="margin-top:20px;">Business Type:</div>
<div id="businessType">Manufacturer</div>
<a target="_blank" href="http://xarina.en.alibaba.com/memberhome/sample/373950818/200609475/contactinfo.html" rel="nofollow" id="contactDetails">Contact Details</a>
<div class="clear"></div>
<a rel="nofollow" href="javascript:void();" id="gsSupplier">Gold Supplier [1<sup>st</sup> Year]</a> 
<div class="clear"></div>
<a rel="nofollow" href="http://xarina.en.alibaba.com/trustpass_profile.html" id="avSupplier">A&amp;V Checked</a>
<div class="clear"></div>
<div id="guideToMiniSite"><div>Online Showroom: <a href="http://xarina.en.alibaba.com/group/0.html" rel="nofollow">54 Products</a></div>
<div class="clear"></div>
<a rel="nofollow" target="_blank" onmousedown="javascript:this.href=getMatchingProductsUrl();" href="http://www.alibaba.com/#" id="relateProductLink" class="blockA">
<span id="relateProductLink2">Other</span>&nbsp;Similar Products from this Supplier </a>
<div class="clear"></div>
<a class="blockA" href="http://xarina.en.alibaba.com/" rel="nofollow">View this Supplier's Website</a>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<!-- End top Product image & overview -->
   
<style>
/*-----------------------Tab menu----------------------------*/

.widget {
	width:925px;
	margin-top:15px;
	margin-left:0px; margin-right:0px;
	padding: 5px;
	margin-bottom: 10px;
	margin-left:10px;
	}

	.widget a {
	color: #222;
	text-decoration: none;
	}
	
	.widget a:hover {
	color: #efefef;
	text-decoration: underline;
	}

	
	.tabnav ul li {
	display: inline;
	list-style: none;
	padding-right: 5px;
	width:100px;
	}
	
	.tabnav .item {
		display: inline;
		list-style: none;
		padding-right: 5px;

	}
	
		.tabnav .item a {
		text-decoration: none;
		text-transform: uppercase;
		color: #222;
		font-weight: bold;
		padding: 8px 30px;
		outline: none;
		font-size:12px;
		line-height:28px;
		background: url("<?php echo base_url()?>assets/images/title_bg.png") repeat-x scroll 0 0 transparent;
    	border-left: 1px solid #DBE1E6;
		border-right: 1px solid #DBE1E6;
    	border-top: 1px solid #DBE1E6;
		
		}
		
		.tabnav li a:hover, .tabnav li a:active, .tabnav li.ui-tabs-selected a {
		background: #3596a3;
		color: #fff;
		text-decoration: none;
		}
		
	.tabdiv {
	margin-top: 2px;
	background: #fff;
	border: 1px solid #DBE1E6;
	padding: 5px;
	}
	
		.tabdiv li {
		list-style-image: url("star.png");
		margin-left: 20px;
		}

		.ui-tabs-hide {
		display: none;
		}

		#featuredvid {
		text-align: center;
		}
		
			.fvid {
			margin-bottom: 5px;
			}
		
			.vidselector li {
			text-align: left;
			list-style: none;
			padding: 5px;
			background: #ffffff;
			border: 1px solid #dedbd1;
			text-transform: uppercase;
			margin-bottom: 5px;
			}


</style>
<script type="text/javascript">

	$(document).ready(function() {
		$('#tabvanilla > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
	});
</script>
<!--  Start Products details -->
<div id="tabvanilla" class="widget">

            <ul class="tabnav ui-tabs-nav">
                <li class="item ui-tabs-selected"><a href="#popular">Popular</a></li>
                <li class="item"><a href="#recent">Recent</a></li>
                <li class="item"><a href="#featured">Featured</a></li>
            </ul>

            <div style="display: block;" id="popular" class="tabdiv ui-tabs-panel">
            
            <style>
            #detailTabContent {
    			padding: 0 0 14px;
			}

			
			#con_PDtab .dbcontent {
				border-top: 0 none;
				margin-top: 0;
				padding-right: 10px;
				padding-top: 0;
				position: static;
			}
			
			#detailProperty {
				overflow: hidden;
				padding-bottom: 0;
				padding-top: 0;
			}
			
			.dbcontent {
				border-top: 1px solid #DBE2E8;
				clear: both;
				margin-top: 20px;
				padding: 10px 0 10px 10px;
				width: 895px;
			}
			#detailTabContent .bBorder {
			}
			
			#detailProperty .detailSecTitle {
				margin-top: 35px;
			}
			
			.detailSecTitle {
				border-top: 1px solid #DBE2E8;
				font: bold 14px arial;
				margin: 35px 0 -10px;
			}
			
			.relativeTitle {
				background-color: #FFFFFF;
				display: inline-block;
				font-size: 16px;
				padding-right: 10px;
				position: relative;
				top: -13px;
		   }
		   
		   #detailTabContent .dbtable {
				margin: 0 0 10px -3px;
			}
			
			#detailTabContent .dbtable td {
				padding-right: 6px;
			}
			
			#con_PDtab .dbcontent {
				border-top: 0 none;
				margin-top: 0;
				padding-right: 10px;
				padding-top: 0;
				position: static;
			}
			

			#richTextDescription {
				overflow: hidden;
				word-wrap: break-word;
			}
			
			#richTextDescription {
				overflow: hidden;
				padding: 0 0 12px 0;
				width: 895px;
			}
			
			#richTextDescription p {
				margin: 0;
				padding: 0;
				width: 100%;
			}
			
			.dbcontent p {
				line-height: 18px;
			}
			#richTextDescription table {
				border-collapse:collapse;
			}
			#richTextDescription table tr td {
			padding-left:5px;
			padding-right:5px;
		    }
			
            </style>
            	<div id="detailTabContent"><div class="hook AE:disable" id="con_PDtab"><div class="dbcontent" id="detailProperty"><div class="detailSecTitle bBorder"><div class="relativeTitle">Quick Details</div></div><table class="dbtable"><tbody><tr><td width="340"><span class="attriName">Dress Type:</span> Prom Dresses</td><td width="340"><span class="attriName">Age Group:</span> Adults</td><td width="340"><span class="attriName">Supply Type:</span> OEM Service</td></tr><tr><td width="340"><span class="attriName">Material:</span> Satin </td><td width="340"><span class="attriName">Fabric Type:</span> Satin</td><td width="340"><span class="attriName">Design:</span> Sleeveless</td></tr><tr><td width="340"><span class="attriName">Technics:</span> Beaded</td><td width="340"><span class="attriName">Feature:</span> Anti-Static, Anti-Wrinkle, Breathable,...</td><td width="340"><span class="attriName">Place of Origin:</span> Guangdong China (Mainland)</td></tr><tr><td width="340"><span class="attriName">Brand Name:</span> Xarina</td><td width="340"><span class="attriName">Model Number:</span> BE9002</td><td width="340"><span class="attriName">Other Colour:</span> Custom Colour</td></tr><tr><td width="340"><span class="attriName">Other Size:</span> Custom Size</td></tr></tbody></table></div><div class="dbcontent"><div class="detailSecTitle bBorder"><div class="relativeTitle">Packaging &amp; Delivery</div></div><table class="dbtable"><tbody><tr><td width="108"><span class="attriName">Packaging Detail:</span></td><td>PP bags &amp; Cartons</td></tr><tr><td><span class="attriName">Delivery Detail</span></td><td>20-35 work days</td></tr></tbody></table><div class="detailSecTitle bBorder"><div class="relativeTitle">Specifications</div></div><p>Quinceanera Dress: <br>1. Fashion style <br>2. High quality and resonable price <br>3. Welcome OEM order</p><div id="richTextDescription"><p align="left"><strong><span style="text-decoration: underline;">2010 Quinceanera Dress: </span></strong></p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><table cellspacing="0" cellpadding="0" border="1"><tbody><tr><td><p align="left">Condition</p></td><td><p align="left">Brand new</p></td></tr><tr><td><p align="left">Colour</p></td><td><p align="left">Custom</p></td></tr><tr><td><p align="left">Material</p></td><td><p align="left">Satin, Silk, Chiffon, Taffeta, Tulle, Organza, Crepe, Imitation silk and so on</p></td></tr><tr><td><p align="left">Size</p></td><td><p align="left">Standard size or Custom Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td></tr><tr><td><p align="left">Embellishment</p></td><td><p align="left">Exquisite silver/ Gold thread embroideries, Miyuki beads, Swarovski crystals, Diamant, Nippon sequins, Beads &amp; Pearls</p></td></tr><tr><td><p align="left">Lead time</p></td><td><p align="left">20-35 works days</p></td></tr><tr><td><p align="left">Packing</p></td><td><p align="left">PP bags &amp; cartons</p></td></tr><tr><td><p align="left">Shipment</p></td><td><p align="left">EMS, TNT, DHL</p></td></tr><tr><td><p align="left">Payment</p></td><td><p align="left">Accept:&nbsp; Alipay, Western Union, MoneyGram</p></td></tr></tbody></table>
                
<p align="left">&nbsp;</p><p align="left"><strong><span style="text-decoration: underline;">Colour: </span></strong></p>
<p align="left">&nbsp;Satin Color Chart</p><p align="left">&nbsp;</p>

<p align="left"><strong><span style="text-decoration: underline;">Size: </span></strong></p><p align="left"><strong>make your dress as follow standard size or </strong><strong>customer size</strong></p><p align="left"><strong>&nbsp;</strong></p>
<table cellspacing="0" cellpadding="0" border="1" style="width: 497px;">
<tbody>
<tr><td><p align="left">&nbsp;</p></td><td><p align="left">&nbsp;</p></td><td><p align="left">&nbsp;</p></td><td colspan="7"><p align="left">Standard Size(in inches)</p></td><td><p align="left">&nbsp;</p></td><td><p align="left">&nbsp;</p></td><td><p align="left">&nbsp;</p></td><td><p align="left">&nbsp;</p></td><td><p align="left">&nbsp;</p></td></tr><tr><td><p align="left">US Size</p></td><td><p align="left">2</p></td><td><p align="left">4</p></td><td><p align="left">6</p></td><td><p align="left">8</p></td><td><p align="left">10</p></td><td><p align="left">12</p></td><td><p align="left">14</p></td><td><p align="left">16</p></td><td><p align="left">18</p></td><td><p align="left">20</p></td><td><p align="left">22</p></td><td><p align="left">24</p></td><td><p align="left">26</p></td><td><p align="left">28</p></td></tr><tr><td><p align="left">UK Size</p></td><td><p align="left">4</p></td><td><p align="left">6</p></td><td><p align="left">8</p></td><td><p align="left">10</p></td><td><p align="left">12</p></td><td><p align="left">14</p></td><td><p align="left">16</p></td><td><p align="left">18</p></td><td><p align="left">20</p></td><td><p align="left">22</p></td><td><p align="left">24</p></td><td><p align="left">26</p></td><td><p align="left">28</p></td><td><p align="left">30</p></td></tr><tr><td><p align="left">EUR Size</p></td><td><p align="left">32</p></td><td><p align="left">34</p></td><td><p align="left">36</p></td><td><p align="left">38</p></td><td><p align="left">40</p></td><td><p align="left">42</p></td><td><p align="left">44</p></td><td><p align="left">46</p></td><td><p align="left">48</p></td><td><p align="left">50</p></td><td><p align="left">52</p></td><td><p align="left">54</p></td><td><p align="left">56</p></td><td><p align="left">58</p></td></tr><tr><td><p align="left">Bust</p></td><td><p align="left">33</p></td><td><p align="left">34</p></td><td><p align="left">35</p></td><td><p align="left">36</p></td><td><p align="left">37</p></td><td><p align="left">39</p></td><td><p align="left">40</p></td><td><p align="left">42</p></td><td><p align="left">43</p></td><td><p align="left">45</p></td><td><p align="left">47</p></td><td><p align="left">49</p></td><td><p align="left">52</p></td><td><p align="left">56</p></td></tr><tr><td><p align="left">Waist</p></td><td><p align="left">26</p></td><td><p align="left">27</p></td><td><p align="left">28</p></td><td><p align="left">29</p></td><td><p align="left">30</p></td><td><p align="left">32</p></td><td><p align="left">33</p></td><td><p align="left">35</p></td><td><p align="left">36</p></td><td><p align="left">38</p></td><td><p align="left">40</p></td><td><p align="left">42</p></td><td><p align="left">45</p></td><td><p align="left">49</p></td></tr><tr><td><p align="left">Hip</p></td><td><p align="left">36</p></td><td><p align="left">37</p></td><td><p align="left">38</p></td><td><p align="left">39</p></td><td><p align="left">40</p></td><td><p align="left">42</p></td><td><p align="left">43</p></td><td><p align="left">45</p></td><td><p align="left">46</p></td><td><p align="left">48</p></td><td><p align="left">50</p></td><td><p align="left">52</p></td><td><p align="left">55</p></td><td><p align="left">59</p></td></tr><tr><td><p align="left">Shoulder To Floor</p></td><td><p align="left">59</p></td><td><p align="left">59</p></td><td><p align="left">60</p></td><td><p align="left">60</p></td><td><p align="left">60</p></td><td><p align="left">60</p></td><td><p align="left">61</p></td><td><p align="left">61</p></td><td><p align="left">61</p></td><td><p align="left">61</p></td><td><p align="left">62</p></td><td><p align="left">62</p></td><td><p align="left">62</p></td><td><p align="left">62</p></td></tr>
</tbody>
</table>

<p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left"><strong><span style="text-decoration: underline;">How to measure: </span></strong></p>
<p align="left"><strong>How to measure a correct size is very important, now please find out the following measuring guide. </strong></p>
<p align="left"><strong>We strongly recommend that you have your measurements taken by a professional before buying any gown online. </strong><strong>&nbsp;</strong></p>
<p align="left"><strong>Please follow the measurement instructions, and measure yourself carefully.&nbsp;</strong><strong></strong></p>
<p align="left">&nbsp;</p><p align="left"><span style="text-decoration: underline;">Note: </span>&nbsp;<br>A. The wedding dress does not include any accessories such as gloves, wedding veil and the crinoline petticoat ( show on the pictures). Bidding is for one dress only!!!<br><br>B. Since computer screens have chromatic aberration, especially between CRT screen and LCD screen, we can not guarantee that the color of our products will be exactly the same with the photographs you saw.<br><br>C. Dress Can Be Made in Custom Size, Color, (No Additional Cost)</p><p align="left"><br>D. Please give me your exactitude size and color when placing an order, and I am very happy to process returns when necessary ,in order to make the gown very fit with you !<br><br>E. Before ordering, please read this listing carefully and ask all your questions.&nbsp;To send an email&nbsp; .We will answer your questions within 24-48 hours. If you do not receive a reply please resend your email.</p><p align="left">&nbsp;</p></div></div></div>
                
                </div>
            </div><!--/popular-->
            
            <div id="recent" class="tabdiv ui-tabs-panel ui-tabs-hide">
              <div class="hook hidden" id="con_CPtab"><div class="dbtitle">Xarina Fashion is the style of cosmopolitan culture. Daring in design and classic in craftsmanship, our products embody the essence of sophistication. <br>We are currently based in Guangdong, China, and will soon be opening offices in the USA.Our designers hail from various corners of the world, bringing with them years of experience in creating the finest evening and wedding dresses. Although we take pride in our handcrafted products, our factories also make use of the most cutting-edge ...<br><a href="http://xarina.en.alibaba.com/aboutus.html" rel="nofollow" class="viewMore">View more </a><span class="burden">&gt;&gt;</span><br></div><div class="dbcontent firsetDBcontent"><h3>Basic Information</h3><table class="dbctable"><tbody><tr><td class="name">Business Type:</td><td>Manufacturer &nbsp;</td></tr><tr><td class="name">Product/Service (We Sell):</td><td>Wedding dress,Prom dress,Quinceanera Dress,Evening Dress,Special Occasion Dress &nbsp;</td></tr><tr><td class="name">Number of Employees:</td><td>51 - 100 People &nbsp;</td></tr></tbody></table></div><div class="dbcontent"><h3>Trade &amp; Market</h3><table class="dbctable"><tbody><tr><td class="name">Main Markets:</td><td>North America<br>South America<br>Eastern Europe<br>Mid East<br>Central America<br></td></tr><tr><td class="name">Total Annual Sales Volume:</td><td>US$2.5 Million - US$5 Million &nbsp;</td></tr><tr><td class="name">Export Percentage:</td><td>91% - 100% &nbsp;</td></tr></tbody></table></div><div class="dbcontent"><h3>Factory Information</h3><table class="dbctable"><tbody><tr><td class="name">Contract Manufacturing:</td><td>OEM Service Offered &nbsp; Design Service Offered &nbsp; Buyer Label Offered &nbsp;</td></tr></tbody></table></div><div class="dbcontent"><h3>Factory Audit Report</h3><table class="dbctable report-table"><tbody><tr><td class="request-report" colspan="2">Would you like to request a Factory Audit Report, so that you can know more about this company's capabilities before making a deal with them? <a id="request-FAR-report" href="javascript:;" rel="nofollow">Request now</a></td></tr><tr><td class="FAR-caption" colspan="2"><span>Factory Audit Reports are detailed on-line reports about the supplier's capabilities. It helps you get all the information you need to trade confidently with suppliers.</span></td></tr></tbody></table><div style="display:none;" class="float-div-wrap" id="get-report-zone"><div class="float-div-inner" id="get-report-inner"><a id="FAR_closeBtn" rel="nofollow" class="close" href="javascript:;"></a><h3 id="FAR-title" class="float-div-title">Request a Factory Audit Report</h3><div id="FAR-content"><div id="FAR-signBox" class="float-div-content clearfix"><span class="float-div-caption">You can either send the default request below or compose your own request to the supplier. </span><input type="hidden" value="Md Shafiqul" id="FAR-loginName"> <input type="hidden" value="false" id="FAR-isSign"> <input type="hidden" value="info24abs@gmail.com" id="FAR-originPassport"><table cellspacing="0" cellpadding="0" border="0" width="100%" class="sign-in-table" id="get-report-table"><tbody><tr><th id="FAR-passport-label"><span class="required font12 ">From:</span></th><td><div class="inquiry-error-wrapper-narrow no-error"><input type="text" class="login-input" value="info24abs@gmail.com" name="xloginPassport" id="FAR-passport"><span class="tips-msg"> Enter email or Member ID</span><br><div style="display:none" id="FAR-passport-advice-error" class="board errorB errorMsg">Email or Member ID is required.</div></div></td></tr><tr style="display:none;" id="FAR-password-tr"><th><span class="required font12">Password:</span></th><td><div class="inquiry-error-wrapper-narrow no-error"><input type="password" class="login-input" maxlength="100" name="xloginPassword" id="FAR-password"> <span class="tips-msg">Enter Alibaba.com Password</span><br><div id="FAR-password-advice-error" class="board errorB errorMsg">Password is required.</div></div><a id="forgotPwId" href="javascript:forgotPassw('http://us.my.alibaba.com');" rel="nofollow"><font class="font12">Forgot your password?</font></a></td></tr><tr style="display:none;" id="FAR-checkcode-tr"><th><span class="required font12">Enter the code shown:</span></th><td><div class="inquiry-error-wrapper-narrow no-error"><input type="text" style="width:45px;" maxlength="10" name="xloginCheckToken" id="FAR-checkcode"> <input type="hidden" value="657ea8b078624e39ae9f86a0b6d29a40" name="_csi_"> <a class="check-code" href="javascript:refreshCode_glp('FAR-checkCode-img');" rel="nofollow"><img height="35" align="absmiddle" width="135" id="FAR-checkCode-img" img-src="http://checktoken1.alibaba.com/service/checkcode?sessionID=657ea8b078624e39ae9f86a0b6d29a40&amp;random=0" src="http://style.alibaba.com/js/blank.html"> <font>Refresh</font></a><div id="FAR-checkcode-advice-error" class="board errorB errorMsg">code is required</div></div></td></tr><tr style="display:none;" id="FAR-loginError-tr"><th><span></span></th><td><div class="inquiry-error-wrapper-narrow no-error"><div id="FAR-login-server-error" class="board errorB errorMsg xlogin-server-error"></div></div></td></tr></tbody></table><form action="http://message.alibaba.com/msgsend/contact.htm?action=ajax_send_inquiry_action" method="post" id="FAR-Form" target="_blank"><input type="hidden" name="id" value="200915770"> <input type="hidden" name="domain" value="2"> <input type="hidden" autocomplete="off" id="FAR-subject" name="subject" value="May I see your Audit Report?"> <input type="hidden" id="FAR-autoSubmit" name="autoSubmit" value="true"> <input type="hidden" id="FAR-loginOrjoin" name="loginOrjoin" value="1"> <textarea class="text-strong" autocomplete="off" value="" name="content" cols="" rows="" id="FAR-textarea">Hi, I am interested in your products and would like to see your Audit Report.</textarea><div style="display:none;" id="FAR-textarea-error"><div class="errMessage"></div></div><div id="FAR-textarea-tips"><div class="tipsMessage">We will send you a link to the Factory Audit Reports once they become available.</div></div><div><a style="text-decoration:none;" class="float-div-button" href="javascript:;" id="FAR-submit" rel="nofollow">Send</a></div></form></div></div></div></div></div></div>
            </div><!--/recent-->
            
            <div id="featured" class="tabdiv ui-tabs-panel ui-tabs-hide">
               <p>Lorem ipsum dolor sit amet.</p>
            </div><!--featured-->



        </div>

<!--  End Products details -->
<style>
#fastFeedbackWrap {
    background-color: #FFFFFF;
    margin-top: 20px;
	margin-left:15px;
	margin-right:15px;
}

.wrapBoxOut {
    border: 1px solid #F1D38B;
    padding: 1px;
}

.wrapBoxInner {
    border: 2px solid #FCF4CD;
}
#fastFeedbackTitle {
    background-color: #FCF4CD;
    color: #20273D;
    font: bold 12px/12px Arial;
    padding: 8px 0 11px 9px;
}
#fastFeedbackContent {
    padding: 9px 50px 15px;
}
#fbForm {
    overflow: hidden;
    padding-left: 72px;
}
#fbSupplierDetail {
    float: left;
    overflow: hidden;
    padding: 0 6px;
}

#fbSupplierName {
    display: block;
    float: left;
    font: bold 12px/12px Arial;
    margin: 2px 6px 11px 0;
}

#fbViewSite {
    clear: both;
    float: left;
}
#fbViewSite, #fbAdd {
    display: block;
    font: 12px/14px Arial;
    text-decoration: none;
}

#fbSupplierInfo .supplierImg {
    border: 1px solid #7BB3E7;
    display: block;
    float: left;
    height: 50px;
    overflow: hidden;
    padding: 1px;
    width: 50px;
}

.sender {
    border: 1px solid #2b89b5;
    border-style: solid;
    border-width: 1px;
    width: 220px;
}
#fbForm #fbTextArea {
    border: 1px solid #2b89b5;
    clear: both;
    display: block;
    height: 64px;
    margin-top: 0;
    padding: 7px 6px;
    width: 600px;
}

.tlt {
    color: #333333;
    display: block;
    float: left;
    font: bold 11px tahoma;
    margin-left: -80px;
    position: absolute;
    text-align: right;
    width: 75px;
}

#fbSubmit {
    margin: 10px 0 0 290px;
}



.button-blue {
    background-image: url("<?php echo base_url() ?>assets/images/button-blue.gif");
    background-repeat: no-repeat;
    color: #FFFFFF!important;
    display: inline;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    height: 24px;
    line-height: 24px;
    margin-top: 16px;
    padding: 1px 2px 2px;
    text-align: center;
    width: 84px;
}
.button-blue:hover{ text-decoration:none}
</style>
<!-- Start Email Message -->
<div class="wrapBoxOut" id="fastFeedbackWrap">
<div class="wrapBoxInner">
<div id="fastFeedbackTitle">Send your message to this supplier</div>
<div class="clearfix" id="fastFeedbackContent">
<form id="fbForm" method="post" action="">
<table class="AE:disable" id="productTbInfo"><tbody>
<tr id="fobTr"><th class="proName">From:</th><td class="proValue"><input type="text" name="email" id="email" class="sender" value="Enter email or Member ID" /></td></tr>
<tr id="fobTr"><th class="proName">To:</th><td class="proValue">
<div class="clearfix" id="fbSupplierInfo"><div class="clearfix"><div class="supplierImg"><img height="50" border="0" width="50" src="<?php echo base_url()?>assets/images/default.jpg" > </div><div style="float:left;"><div id="fbSupplierDetail"><a id="fbSupplierName" rel="nofollow" href="">Mr. Sufian Zaqtan</a> <a rel="nofollow" href="javascript:void(0)" id="talkId14"></a><a class="clearfix" id="fbViewSite" rel="nofollow" href="http://xarina.en.alibaba.com/">Xarina Wedding Dress Limited</a></div></div></div></div>
</td></tr>
<tr id="fobTr"><th class="proName" valign="top">Message:</th><td class="proValue">
<textarea class="hint" maxlength="8000" name="content" id="fbTextArea">Enter your inquiry details such as product name, color, size, MOQ, FOB, etc.</textarea>Enter between 20 to 8,000 characters.</td></tr>
<tr><td colspan="2"><a rel="nofollow" value="Quick Send" id="fbSubmit" href="javascript:;" class="button-blue">Send</a></td></tr>
</tbody>
</table>
</form>
</div>
</div>
</div>

<!-- End Email Message -->
<style>
.help-center {
    border: 1px solid #DEE6F4;
    margin-bottom: 20px;
	margin-left:15px;
	margin-right:15px;
	margin-top:20px;
}
.help-center .title {
    clear: both;
    font: bold 16px/16px arial;
    height: 16px;
    padding: 10px 0 13px 16px;
}


.help-center .how-to {
    float: left;
    height: 47px;
    margin-left: 14px;
    margin-right: 15px;
    width: 290px;
}

.help-center .first {
    margin: 0 0px 0 14px;
    width: 265px;
}

.help-center a.text {
    font: bold 13px arial;
}

.help-center img {
    border: 0 none;
    float: left;
    margin: 2px 12px 0 1px;
}

.help-center .more-help {
    float: right;
    font: 11px arial;
    margin: 14px 20px 9px 0;
}

</style>
<!-- Start search & Message info -->
<div class="help-center"><div class="title">Sourcing Products &amp; Suppliers on Alibaba.com</div><div class="how-to first"><a href="http://www.alibaba.com/help/search-for-products.html?tracelog=24293_help_searchproducts" rel="nofollow" target="_blank"><img src="<?php echo base_url() ?>assets/images/icon_check_result.gif"></a> <a class="text" href="http://www.alibaba.com/help/search-for-products.html?tracelog=24293_help_searchproducts" title="Search Products" rel="nofollow" target="_blank">Search Products</a><div class="text">Enter the product you are looking for in the <span class="strong">Search Bar</span> and click <span class="strong">Search</span></div></div><div class="how-to"><a href="http://www.alibaba.com/help/contact-suppliers.html?tracelog=24293_help_contactsupplier" rel="nofollow" target="_blank"><img src="<?php echo base_url() ?>assets/images/icon_contact_supplier.gif"></a> <a class="text" href="http://www.alibaba.com/help/contact-suppliers.html?tracelog=24293_help_contactsupplier" title="Contact Suppliers" rel="nofollow" target="_blank">Contact Suppliers</a><div class="text">Click <span class="strong">Contact Now</span> to send an inquiry or <span class="strong">I�m online, Chat now</span> to chat online</div></div><div class="how-to"><a href="http://www.alibaba.com/help/check-messages.html?tracelog=24293_help_checkmessages" rel="nofollow" target="_blank"><img src="<?php echo base_url() ?>assets/images/icon_check_messages.gif"></a> <a class="text" href="http://www.alibaba.com/help/check-messages.html?tracelog=24293_help_checkmessages" title="Check Messages" rel="nofollow" target="_blank">Check Messages</a><div class="text">Check quotes &amp; messages from suppliers in your email inbox or Message Center</div></div><a href="http://www.alibaba.com/help?tracelog=24293_helpcenter" class="more-help" rel="nofollow" target="_blank">Click here to learn more</a><div style="clear: both;"></div></div>
<!-- End search & Message info -->

<style>
.wrapBoxOutBlue {
    border: 1px solid #C8D4E4;
    padding: 1px;
	margin-left:15px;
	margin-right:15px;
}

.related-products-title {
    background-color: #E8ECF0;
    font: bold 12px arial;
    padding: 5px 0 7px 13px;
}

.productCycleItem {
    padding: 5px 0 0 0px;
    width: 920px;
}
.prod_box{ width:167px;}
</style>

<!--- start Related product -->
<div class="wrapBoxOutBlue"><div><div class="related-products-title">Related Products</div>
<div class="relatedProductsA clearfix" id="relatedProductsBox">
<div class="productCycleItem">
<div class="relBox">
<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="122" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="122" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="122" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="122" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="122" border="0" /></a></div>
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
<div style="clear: both;"></div></div></div>
</div></div>
</div>
<!--- end Related product -->


</div>
		<div class="clear"></div>
	</div><!-- end of main -->
<?php $this->load->view('layouts/footer')?>	