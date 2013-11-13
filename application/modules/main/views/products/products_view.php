<!-- start of header -->	
<?php $this->load->view('layouts/header')?>
<!-- end of header -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/boxOver.js"></script>
<div class="main">
		<!-- start of sidebar -->
  <?php $this->load->view('layouts/left')?>
        <!-- end of sidebar -->
<div class="content">
<style>
.refineByBox {
    border: 1px solid #F4DB99;
    padding: 1px;
}
.refineByHead {
    background: none repeat scroll 0 0 #FCF4CD;
    font: bold 14px/30px Arial;
    margin-bottom: 0;
}

refineByHead .refineTitle {
    float: left;
    font-size: 14px;
    margin-right: 6px;
}

.refineByHead .close-refine {
    background: url("refine_m.gif") no-repeat scroll 0 -50px transparent;
    cursor: pointer;
    float: left;
    font-size: 14px;
    height: 14px;
    margin: 7px;
    overflow: hidden;
    width: 15px;
}

clearfix {
    display: block;
}

.refineBySearch {
    border: 2px solid #FCF4CD;
    margin: 0;
    overflow: auto;
    padding: 10px;
}
#catWrapper {
    overflow: auto;
}

.refineByHint {
    font: 0.9em Arial;
    padding: 3px 0;
}

#featuredBox h3 {
    color: #5C5C5C;
    font: bold 11px Tahoma;
    margin: 0;
    padding: 1px 0 11px;
}

.refineByHead .refineByHint {
    float: left;
    padding: 0;
    width: 836px;
}


.refineByHead .refineByHint {
    float: left;
    padding-top: 5px;
    width: auto;
}



refineByHead .refineByHint span.historyItem {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #F4DB99;
    float: left;
    margin-right: 2px !important;
    padding: 1px 5px;
}

#featuredBox {
    float: left;
    padding: 6px 0 6px 9px;
    width: 264px;
}
#featuredBox .itemlogo {
    display: block;
    float: left;
    font-size: 0;
    margin: 0 8px 0 0;
}

#featuredBox .itemname {
    color: #5C5C5C;
    float: left;
    font-size: 16px;
    font-weight: bold;
    width: 197px;
}
#featuredBox .itemname {
    color: #5C5C5C;
    float: left;
    font-size: 16px;
    font-weight: bold;
    width: 197px;
}

.refineBySearch .featured {
    border: 0 none;
    padding-left: 4px;
    vertical-align: middle;
}

#refineBox {
    float: right;
    padding: 6px 0 6px 7px;
    width: 652px;
}

refineBox .cateList {
    padding: 25px 0 0;
}
#refineBox .propertyBox {
    float: left;
    width: auto;
}

.refineBySearch .cateList .title {
    color: #5C5C5C;
    float: left;
    font: bold 11px Tahoma;
    padding: 1px 0 1px 9px;
    width: 80px;
    word-wrap: normal;
}

#catWrapper .bottomCat {
    border-top: 2px solid #E3E3E3;
    clear: both;
}

.refineBySearch .cateList {
    overflow: auto;
    padding: 6px 0;
}

#refineBox .imgSelector {
    background: url("homeul00.gif") no-repeat scroll left 4px transparent;
    display: block;
    font-weight: normal;
    padding-left: 13px;
}

.imgSelector {
    color: #0000CC;
    cursor: pointer;
    font-weight: bold;
    margin: 0 10px 0 4px;
}

#catWrapper .bottomCat {
    border-top: 2px solid #E3E3E3;
    clear: both;
}
#catWrapper .bottomCat {
    border-top: 2px solid #E3E3E3;
    clear: both;
} 
.refineBySearch .cateList {
    overflow: auto;
    padding: 6px 0;
}

.refineBySearch .cateList .title {
    color: #5C5C5C;
    float: left;
    font: bold 11px Tahoma;
    padding: 1px 0 1px 9px;
    width: 80px;
    word-wrap: normal;
}

.refineBySearch .propertyBox {
    float: right;
    width: 660px;
}


.refineBySearch .transList a {
    border: 1px solid #F2F2F2;
    float: left;
    line-height: 14px;
    margin: 0 3px;
    min-height: 14px;
    padding: 1px 0 1px 5px;
    text-decoration: none;
    width: 182px;
}

.refineBySearch .cateList a {
    border: 1px solid #FFFFFF;
    line-height: 14px;
    margin: 1px 0;
    padding: 1px 0 1px 3px;
    width: 186px;
}
.refineBySearch .cateList {
    overflow: auto;
    padding: 6px 0;
}

.refineBySearch a.ctrlBtn {
    background: url("refine_m.gif") no-repeat scroll left 0 transparent;
    margin: 0;
    padding-left: 20px;
    padding-right: 0;
}

.refineBySearch a.ctrlBtn {
    background: url("http://i02.i.aliimg.com/images/eng/style/css_images/listing/refine_more_less.gif") no-repeat scroll right 0 transparent;
    cursor: pointer;
    float: right;
    font-size: 11px;
    height: 15px;
    margin-right: 8px;
    outline: medium none;
    padding-right: 16px;
    text-decoration: none;
    width: 36px;
}

.refineBySearch .cateList a {
    border: 1px solid #FFFFFF;
    line-height: 14px;
    margin: 1px 0;
    padding: 1px 0 1px 3px;
    width: 186px;
}

</style>
				<!-- end of intro -->
                <div style="border:1px solid #0099FF">
             <div class="refineByBox"><div class="refineByHead clearfix" id="refineByHead"><div id="iconCloseRefine" class="close-refine"></div><div id="hintPopBox" class="hint-pop">Click here to hide Refine Search options</div><strong class="refineTitle">Refine Search:</strong><div id="categoryHint" class="refineByHint clearfix"><span class="historyItem"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/--------------_1-CN,.html" class="relatedSpanM"><span class="pTitle">Supplier Location:</span> <span class="sIcon">China (Mainland)</span> </a></span></div></div><div id="refineBySearchBox" class="refineBySearch"><div id="catWrapper"><div id="featuredBox"><h3>Featured Category:</h3><a class="itemlogo qrPFeacat" href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100005792------------_1-CN,.html" dot='area=rf&amp;type=feacat&amp;value=100005792' rel="nofollow" title="Evening Dresses"><img src="China%202010%20Quinceanera%20Dress%2C%20China%202010%20Quinceanera%20Dress%20Manufacturers%2C%20China%202010%20Quinceanera%20Dress%20Suppliers%20and%20Companies%20on%20Alibaba.com_files/evening_.gif" /></a><div class="itemname">In <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100005792------------_1-CN,.html" class="qrPFeacat" dot='area=rf&amp;type=feacat&amp;value=100005792' rel="nofollow" title="Evening Dresses">Evening Dresses</a><span class="num"> (302)</span><img class="featured" src="China%202010%20Quinceanera%20Dress%2C%20China%202010%20Quinceanera%20Dress%20Manufacturers%2C%20China%202010%20Quinceanera%20Dress%20Suppliers%20and%20Companies%20on%20Alibaba.com_files/featured.png" title="Featured Category" /></div></div><div id="refineBox"><form id="dmsFatherContainer" name="bearingRefine" action="" method="get" onsubmit="return false;" style="width:100%;"><div class="cateList clearfix" id="dms_27_container"></div></form></div><div id="categoriesBox" class="blockA transList cateList bottomCat"><div class="title">Other Categories:</div><div class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100003538------------_1-CN,.html" class="qrPCate" dot="area=rf&amp;type=cate&amp;value=100003538" rel="nofollow" title="">Plus Size Dress &amp; Skirts <span class="num">(267)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100005823------------_1-CN,.html" class="qrPCate" dot="area=rf&amp;type=cate&amp;value=100005823" rel="nofollow" title="">Mother of the Bride Clothing <span class="num">(183)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100003269------------_1-CN,.html" class="qrPHotcat" dot="area=rf&amp;type=hotcat&amp;value=100003269" rel="nofollow" title="Featured Category">Wedding Dresses <span class="num">(157)</span><img class="featured" src="China%202010%20Quinceanera%20Dress%2C%20China%202010%20Quinceanera%20Dress%20Manufacturers%2C%20China%202010%20Quinceanera%20Dress%20Suppliers%20and%20Companies%20on%20Alibaba.com_files/featured.png" /></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100005791------------_1-CN,.html" class="qrPHotcat" dot="area=rf&amp;type=hotcat&amp;value=100005791" rel="nofollow" title="Featured Category" style="_margin-right:-3px;">Prom Dresses <span class="num">(61)</span><img class="featured" src="China%202010%20Quinceanera%20Dress%2C%20China%202010%20Quinceanera%20Dress%20Manufacturers%2C%20China%202010%20Quinceanera%20Dress%20Suppliers%20and%20Companies%20on%20Alibaba.com_files/featured.png" /></a><div class="hrline nobg "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100005790------------_1-CN,.html" class="qrPCate" dot="area=rf&amp;type=cate&amp;value=100005790" rel="nofollow" title="">Cocktail Dresses <span class="num">(5)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100003271------------_1-CN,.html" class="qrPCate" dot="area=rf&amp;type=cate&amp;value=100003271" rel="nofollow" title="">Flower Girls&#39; Dresses <span class="num">(1)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100003270------------_1-CN,.html" class="qrPCate" dot="area=rf&amp;type=cate&amp;value=100003270" rel="nofollow" title="">Bridesmaid Dresses <span class="num">(1)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100003370------------_1-CN,.html" class="qrPCate" dot="area=rf&amp;type=cate&amp;value=100003370" rel="nofollow" title="" style="_margin-right:-3px;">Other Costumes <span class="num">(86)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--100003377------------_1-CN,.html" class="hookCss itemCssFlag qrPCate" dot="area=rf&amp;type=cate&amp;value=100003377" rel="nofollow" title="">Performance Wear <span class="num">(1)</span></a> <a href="javascript:noLink()" onclick="viewmore(this, 'categoriesBox')" class="ctrlBtn" rel="nofollow"><span>More...</span></a></div></div></div><div id="propertiesBox" class="cateBox"><div class="hrline"></div><div class="blockA transList cateList "><div class="title">Feature:<div style="font:11px Tahoma;"></div></div><div id="propertyBox1" class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-100006076.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_100006076' rel="nofollow" title="">Dry Cleaning <span class="num">(394)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-6209.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_6209' rel="nofollow" title="">Breathable <span class="num">(299)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-5076.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_5076' rel="nofollow" title="">Anti-Wrinkle <span class="num">(299)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-6177.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_6177' rel="nofollow" title="" style="_margin-right:-3px;">Eco-Friendly <span class="num">(326)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-2353.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_2353' rel="nofollow" title="">Anti-Static <span class="num">(305)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-100005999.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_100005999' rel="nofollow" title="">Plus Size <span class="num">(267)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-100014033.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_100014033' rel="nofollow" title="">Maternity <span class="num">(197)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-100006084.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_100006084' rel="nofollow" title="" style="_margin-right:-3px;">Washable <span class="num">(245)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002013-100014038.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002013_100014038' rel="nofollow" title="">Mother of Bride <span class="num">(183)</span></a> <a href="javascript:noLink()" onclick='viewmore(this, "propertyBox1")' class="ctrlBtn" rel="nofollow"><span>More...</span> </a></div></div><div class="hrline "></div><div class="blockA transList cateList "><div class="title">Supply Type:<div style="font:11px Tahoma;"></div></div><div id="propertyBox2" class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100007008-100018731.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100007008_100018731' rel="nofollow" title="">OEM Service <span class="num">(556)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100007008-100018730.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100007008_100018730' rel="nofollow" title="">In-Stock Items <span class="num">(1)</span></a></div></div><div class="hrline "></div><div class="blockA transList cateList "><div class="title">Technics:<div style="font:11px Tahoma;"></div></div><div id="propertyBox3" class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-100006010.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_100006010' rel="nofollow" title="">Beaded <span class="num">(140)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-541.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_541' rel="nofollow" title="">Embroidered <span class="num">(199)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-5301.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_5301' rel="nofollow" title="">Appliqued <span class="num">(63)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-77.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_77' rel="nofollow" title="" style="_margin-right:-3px;">Printed <span class="num">(11)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-99.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_99' rel="nofollow" title="">Woven <span class="num">(1)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-100006011.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_100006011' rel="nofollow" title="">Garment Dyed <span class="num">(1)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-100006012.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_100006012' rel="nofollow" title="">Plain Dyed <span class="num">(5)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------263-100006013.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_263_100006013' rel="nofollow" title="" style="_margin-right:-3px;">Ruffle <span class="num">(35)</span></a> <a href="javascript:noLink()" onclick='viewmore(this, "propertyBox3")' class="ctrlBtn" rel="nofollow"><span>More...</span> </a></div></div><div class="hrline boxHook itemCssFlag"></div><div class="blockA transList cateList  boxHook itemCssFlag "><div class="title">Material:<div style="font:11px Tahoma;"></div></div><div id="propertyBox4" class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------10-5228.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_10_5228' rel="nofollow" title="">Polyester / Cotton <span class="num">(65)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------10-361836.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_10_361836' rel="nofollow" title="">100% Polyester <span class="num">(153)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------10-361837.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_10_361837' rel="nofollow" title="">100% Silk <span class="num">(69)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------10-9126.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_10_9126' rel="nofollow" title="" style="_margin-right:-3px;">Spandex / Polyester <span class="num">(5)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------10-361996.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_10_361996' rel="nofollow" title="">Spandex / Cotton <span class="num">(1)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------10-361835.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_10_361835' rel="nofollow" title="">100% Cotton <span class="num">(10)</span></a> <a href="javascript:noLink()" onclick='viewmore(this, "propertyBox4")' class="ctrlBtn" rel="nofollow"><span>More...</span> </a></div></div><div class="hrline boxHook itemCssFlag"></div><div class="blockA transList cateList  boxHook itemCssFlag "><div class="title">Fabric Type:<div style="font:11px Tahoma;"></div></div><div id="propertyBox5" class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-112.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_112' rel="nofollow" title="">Taffeta <span class="num">(174)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-50.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_50' rel="nofollow" title="">Chiffon <span class="num">(109)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-100005993.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_100005993' rel="nofollow" title="">Satin <span class="num">(87)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-100005994.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_100005994' rel="nofollow" title="" style="_margin-right:-3px;">Woolen <span class="num">(1)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-100005992.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_100005992' rel="nofollow" title="">Organza <span class="num">(74)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-100005989.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_100005989' rel="nofollow" title="">Crepe <span class="num">(1)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------100002012-524.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_100002012_524' rel="nofollow" title="">Velvet <span class="num">(1)</span></a> <a href="javascript:noLink()" onclick='viewmore(this, "propertyBox5")' class="ctrlBtn" rel="nofollow"><span>More...</span> </a></div></div><div class="hrline boxHook itemCssFlag"></div><div class="blockA transList cateList  boxHook itemCssFlag "><div class="title">Design:<div style="font:11px Tahoma;"></div></div><div id="propertyBox6" class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-100005984.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_100005984' rel="nofollow" title="">Halter <span class="num">(72)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-100005986.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_100005986' rel="nofollow" title="">Off-Shoulder <span class="num">(103)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-100005982.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_100005982' rel="nofollow" title="">Backless <span class="num">(62)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-8322.html" class="qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_8322' rel="nofollow" title="" style="_margin-right:-3px;">Spaghetti Strap <span class="num">(6)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-100005983.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_100005983' rel="nofollow" title="">Cap Sleeve <span class="num">(5)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-1873.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_1873' rel="nofollow" title="">Long Sleeve <span class="num">(4)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-100005987.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_100005987' rel="nofollow" title="">One-Shoulder <span class="num">(10)</span></a> <a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-1872.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_1872' rel="nofollow" title="" style="_margin-right:-3px;">Short Sleeve <span class="num">(5)</span></a><div class="hrline nobg hookCss itemCssFlag "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN--------------95-1874.html" class="hookCss itemCssFlag qrPCatp" dot='area=rf&amp;type=catp&amp;value=-1_95_1874' rel="nofollow" title="">Sleeveless <span class="num">(96)</span></a> <a href="javascript:noLink()" onclick='viewmore(this, "propertyBox6")' class="ctrlBtn" rel="nofollow"><span>More...</span> </a></div></div></div><div id="regionsBox" class="blockA transList cateList" style="border-top:1px solid #E3E3E3;"><div class="title">Province:</div><div class="propertyBox"><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Guangdong----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Guangdong'>Guangdong </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Jiangsu----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Jiangsu'>Jiangsu </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Zhejiang----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Zhejiang'>Zhejiang </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Shanghai----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Shanghai' style="_margin-right:-3px;">Shanghai </a><div class="hrline "></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Shandong----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Shandong'>Shandong </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Anhui----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Anhui'>Anhui </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Beijing----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Beijing'>Beijing </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Chongqing----------_1-CN,.html" class="qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Chongqing' style="_margin-right:-3px;">Chongqing </a><div class="hrline hookCss itemCssFlag"></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Fujian----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Fujian'>Fujian </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Gansu----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Gansu'>Gansu </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Guangxi----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Guangxi'>Guangxi </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Guizhou----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Guizhou' style="_margin-right:-3px;">Guizhou </a><div class="hrline hookCss itemCssFlag"></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Hainan----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Hainan'>Hainan </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Hebei----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Hebei'>Hebei </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Heilongjiang----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Heilongjiang'>Heilongjiang </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Henan----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Henan' style="_margin-right:-3px;">Henan </a><div class="hrline hookCss itemCssFlag"></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Hubei----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Hubei'>Hubei </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Hunan----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Hunan'>Hunan </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Inner%2BMongolia----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Inner Mongolia'>Inner Mongolia </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Jiangxi----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Jiangxi' style="_margin-right:-3px;">Jiangxi </a><div class="hrline hookCss itemCssFlag"></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Jilin----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Jilin'>Jilin </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Liaoning----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Liaoning'>Liaoning </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Ningxia----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Ningxia'>Ningxia </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Qinghai----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Qinghai' style="_margin-right:-3px;">Qinghai </a><div class="hrline hookCss itemCssFlag"></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Shaanxi----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Shaanxi'>Shaanxi </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Shanxi----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Shanxi'>Shanxi </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Sichuan----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Sichuan'>Sichuan </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Tianjin----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Tianjin' style="_margin-right:-3px;">Tianjin </a><div class="hrline hookCss itemCssFlag"></div><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Tibet----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Tibet'>Tibet </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Xinjiang----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Xinjiang'>Xinjiang </a><a href="http://www.alibaba.com/products/2010_Quinceanera_Dress/CN----Yunnan----------_1-CN,.html" class="hookCss itemCssFlag qrPCnt" rel="nofollow" dot='area=rf&amp;type=cnt&amp;value=Yunnan'>Yunnan </a><a href="javascript:noLink()" onclick="viewmore(this, 'regionsBox')" class="ctrlBtn" rel="nofollow"><span>More...</span> </a></div></div></div></div>
                </div>
		<div class="step">
        							<div class="blue-box-wrapper">
										<div class="blue-box">
<span class="alignleft">Items 1 to 12 of 15 total</span>
<span class="aligncenter" href=""><a>Pages</a></span>
<span class="alignright" href="">
<form>
<style>
.alignright form{ width:135px;}
.selectBox-dropdown {width:15px;}
.selectBox-dropdown .selectBox-label { padding-left:10px; padding-top:5px;}
</style>
Show per page&nbsp;<select>
<option value="8">8</option>
<option value="12">12</option>
<option value="16">16</option>
<option value="20">20</option>
</select>
</form>
</span>
											<!--<a href="" class="button-blue alignright"><span>Learn More</span></a>-->						
										</div><!-- end of blue-box -->
									</div>
				<div class="post">
										<div class="post-head">
											<table cellpadding="0" cellspacing="0">
												<tr>
													<td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
													<td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="100px"><a href="" class="more alignright">More Ads</a></td>
												</tr>
											</table>
										</div><!-- end of post-head -->
										<div class="post-body">
											<h1><a href="" class="close alignright">Close</a>TV, Home Phone and Internet</h1>
											<div class="post-content">
												<div class="triple">
			
            
            <div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
                 <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" title="" height="92" width="92" border="0" /></a></div>
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
												</div><!-- end of triple -->
																	
												<div class="clear"></div>
												
												
											</div><!-- end of post-content -->																			
										</div><!-- end of post-body -->
									</div><!-- end of post -->
                                    <div class="blue-box-wrapper">
										<div class="blue-box">
<span class="alignleft">Items 1 to 12 of 15 total</span>
<span class="aligncenter" href=""><a>Pages</a></span>
<span class="alignright" href="">
<form>
<style>
.alignright form{ width:135px;}
.selectBox-dropdown {width:15px;}
.selectBox-dropdown .selectBox-label { padding-left:10px; padding-top:5px;}
</style>
Show per page&nbsp;<select>
<option value="8">8</option>
<option value="12">12</option>
<option value="16">16</option>
<option value="20">20</option>
</select>
</form>
</span>
											<!--<a href="" class="button-blue alignright"><span>Learn More</span></a>-->						
										</div><!-- end of blue-box -->
									</div>
									<div class="post">
										<div class="post-head">
										<table cellpadding="0" cellspacing="0">
												<tr>
													<td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
													<td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="140px"><a href=""><img src="<?php echo base_url() ?>assets/images/ads.gif" alt="" height="60" width="120" /></a></td>
                                                    <td width="100px"><a href="" class="more alignright">More Ads</a></td>
												</tr>
											</table>
										</div><!-- end of post-head -->
										<div class="post-body">
											<h1><a href="" class="more alignright">More Details</a>Premium Related Products</h1>
											<div class="post-content">
												<div class="triple">
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
												</div><!-- end of triple -->
												<a href="" class="more">More Details </a>
											</div><!-- end of post-content -->											
										</div><!-- end of post-body -->
									</div><!-- end of post -->
									<!-- end of post -->
                                    
                                    
                                    
                                    <!-- end of post -->
                                    
                                    
                                    <!-- end of post -->
                                    
                                    
                                    
                                    
									
								</div>
            
        </div>
		
							<!-- end of tabs -->
							<!-- end of right -->
							<div class="right-bottom"></div><!-- end of right-bottom -->
							<div class="clear"></div>
								<!-- end of block-content -->
				
		
<div class="single-tile">
		</div><!-- end of content -->
		<div class="clear"></div>
	</div><!-- end of main -->
<?php $this->load->view('layouts/footer')?>	