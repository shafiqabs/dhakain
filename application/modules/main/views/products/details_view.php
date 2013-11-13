<!-- start of header -->
<?php $this->load->view('main/layouts/header')?>
<!-- end of header -->

<script src="<?php echo base_url() ?>assets/plugins/image-zoom/js/jsCarousel-2.0.0.js" type="text/javascript"></script>
<link href="<?php echo base_url() ?>assets/plugins/image-zoom/css/jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>assets/plugins/image-zoom/js/zoomsl-3.0.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>/assets/styles/agile_carousel.css" type='text/css'>

<div class="main">
<!-- start of sidebar -->
<style type="text/css">

#horizontal-box{
    width:550px;
    height:465px;
    float:left;
    margin-left:10px;
    position: relative;
}
#horizontal-image-box{
    float:right;
    height: 300px;
    width:548px;
    overflow: hidden;
    text-align: center;
    margin-bottom: 5px;
    /*border:1px solid #3596a3;*/
}
#horizontal-image-box img{
    max-height: 300px!important;
    max-width: 450px!important;
    overflow: hidden;
}

#vertical-box{
    width:548px;
    height:465px;
    float:left;
    margin-left:10px;
    position: relative;
}
#vertical-image-box{
    float:right;
    height: 455px;
    width:390px;
    overflow: hidden;
    text-align: center;
    /*border:1px solid #3596a3;*/
}
#vertical-image-box img{
    max-height: 450px!important;
    max-width: 350px!important;
    overflow: hidden;
}




</style>

<?php
$image_type=1;
if($image_type ==1){
    $slide='horizontal';
    $direction='h';
}else{
    $slide='vertical';
    $direction='v';
}
//var_dump( $row);
//echo $row->image_large_path;
?>
<script type="text/javascript">
    $(document).ready(function() {

        $('.carouselv').jsCarousel({ onthumbnailclick: function(src) {
            $("#<?php echo $slide; ?>-image-box img").attr({ 'data-large': src });
            $("#<?php echo $slide; ?>-image-box img").attr({ src: src });
            $('.zoom').imagezoomsl({
                zoomrange: [3,3],
                cursorshadeborder: "5px solid black",
                magnifiereffectanimate: "slideIn"
            });
            return false;
        }, autoscroll: false, masked: true, itemstodisplay: 4, orientation: '<?php echo $direction; ?>' });
        $('.zoom').imagezoomsl({
            zoomrange: [3,3],
            cursorshadeborder: "5px solid black",
            magnifiereffectanimate: "slideIn"
        });
        $('#product_qunt').selectBox();
        $('.group-select').selectBox();

    });
    $.getJSON("<?php echo site_url()?>/main/ajaxload/carousel", function(data) {
        $(document).ready(function(){
            $("#multiple_slides_visible").agile_carousel({
                carousel_data: data,
                carousel_outer_height: 194,
                carousel_height: 180,
                slide_height: 180,
                carousel_outer_width: 550,
                slide_width: 183,
                number_slides_visible: 3,
                transition_time: 330,
                control_set_1: "previous_button,next_button",
                /*control_set_2: "group_numbered_buttons",
                 control_set_3: "numbered_buttons",
                 */
                persistent_content: "<p class='persistent_content'><?php echo $this->lang->line('sponsor_products');?></p>"
            });
        });
    });


</script>
<div id="detailInfoUpSec">

<div style="background:#fbfbfb; margin-top:15px">
    <div id="<?php echo $slide; ?>-box">
        <div id="<?php echo $slide; ?>-image-box" ><img class="zoom"  data-large="/<?php echo $row->image_large_path; ?>" src="/<?php echo $row->image_large_path; ?>" ></div>
        <?php if($slide =='horizontal' ){ ?><div class="clearfix" ></div><?php } ?>
        <div class="carouselv">
            <?php
            $galleries = explode(',',$row->gallery_large_path);
            foreach ($galleries as $gallery ){ ?>
                <div>
                    <img alt="" src="/<?php echo $gallery; ?>" />
                </div>
            <?php } ?>

        </div>
        <div class="clearfix" ></div>
        <div id="tabvanilla" class="widget">

            <ul class="tabnav ui-tabs-nav">
                <li class="item"><a href="#specification">Specification</a></li>
                <li class="item"><a href="#description">Description</a></li>
                <li class="item"><a href="#reviews">Reviews</a></li>
                <li class="item"><a href="#comments">Comments</a></li>
            </ul>

            <div id="specification" style="height: 317px; width: 527px" class="tabdiv scroll-pane">
                <table class="table table-condensed" >
                    <tbody>
                    <?php
                    $label_name = explode(",",$row->label_name);
                    $meta_value = explode(",",$row->meta_value);
                    $i=0;
                    foreach($label_name as $label ){
                        ?>
                        <tr class="fobTr"><td class="proName"><?php echo $label; ?></td><td>:</td><td class="proValue"><?php echo $meta_value[$i]; ?></td></tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
                <table class="table table-condensed" >
                    <tbody>
                    <?php
                    $label_name = explode(",",$row->label_name);
                    $meta_value = explode(",",$row->meta_value);
                    $i=0;
                    foreach($label_name as $label ){
                        ?>
                        <tr class="fobTr"><td class="proName"><?php echo $label; ?></td><td>:</td><td class="proValue"><?php echo $meta_value[$i]; ?></td></tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
                <table class="table table-condensed" >
                    <tbody>
                    <?php
                    $label_name = explode(",",$row->label_name);
                    $meta_value = explode(",",$row->meta_value);
                    $i=0;
                    foreach($label_name as $label ){
                        ?>
                        <tr class="fobTr"><td class="proName"><?php echo $label; ?></td><td>:</td><td class="proValue"><?php echo $meta_value[$i]; ?></td></tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
                <table class="table table-condensed" >
                    <tbody>
                    <?php
                    $label_name = explode(",",$row->label_name);
                    $meta_value = explode(",",$row->meta_value);
                    $i=0;
                    foreach($label_name as $label ){
                        ?>
                        <tr class="fobTr"><td class="proName"><?php echo $label; ?></td><td>:</td><td class="proValue"><?php echo $meta_value[$i]; ?></td></tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>

            <div id="description" class="tabdiv ">
                <div class="productTbInfo" ><?php echo $row->description; ?></div>
            </div>
            <div id="reviews" class="tabdiv">
                <table class="productTbInfo" >
                    <tbody>

                    <tr id="fobTr"><td colspan="2" class="proValue"><?php echo $row->description; ?></td></tr>

                    </tbody>
                </table>
            </div>
            <div id="comments" class="tabdiv">
                <div class="wrapBoxInner">
                    <div id="fastFeedbackTitle">Send your message to this supplier</div>
                    <div class="clearfix" id="fastFeedbackContent">
                        <form id="fbForm" method="post" action="">
                            <table class="AE:disable" id="productTbInfo"><tbody>
                                <tr id="fobTr"><th class="proName">From:</th><td class="proValue"><input type="text" name="email" id="email" class="sender" placeholder="Enter email address" value="" /></td></tr>
                                <tr id="fobTr"><th class="proName">To:</th><td class="proValue">
                                        <div class="clearfix" id="fbSupplierInfo"><div class="clearfix">
                                                <div style="float:left;"><div id="fbSupplierDetail"><?php echo $row->contact_person; ?> [ <a  rel="nofollow" href="/<?php echo $row->subdomain_name; ?>"><?php echo $row->shop_name; ?></a> ]</div></div></div></div>
                                    </td></tr>
                                <tr id="fobTr"><th class="proName" valign="top">Message:</th><td class="proValue">
                                        <textarea class="hint" maxlength="8000" name="content" id="fbTextArea" placeholder="Enter your inquiry details such as product name, color, size, MOQ, FOB, etc." ></textarea>Enter between 20 to 8,000 characters.</td></tr>
                                <tr><td colspan="2"><a rel="nofollow" value="Quick Send" id="fbSubmit" href="javascript:;" class="button-blue">Send</a></td></tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>



        </div>
        <div class="clearfix" ></div>
        <div  style="width: 550px" id="multiple_slides_visible"></div>
    </div>
    <div class="product-info-box">
        <div class="product-info-inner-box" >

            <div id="productBriefInfo"><h2 id="productTitle"><?php echo $row->product_name; ?></h2>
                <p>Created: <?php echo productDateFormat($row->created); ?>  [ Expired: <?php echo productExpiredDateFormat($row->created,$row->expired); ?> ]</p>
                <?php if(in_array(1,explode(',',$row->grouping_parent_id))){ ?>
                <p><?php echo $brand->parent_name; ?>:<a href="/directories/brand/<?php echo $brand->group_slug; ?>"><?php echo $brand->group_name; ?></a></p>
                <?php } ?>
                <div class="product-price" style="">BD: <span class="reg-price" ><?php echo $row->price; ?></span><span class="dis-price" ><?php echo calculate_parcentage($row->price,$row->discount_price); ?></span> Taka <span class="dis-percentage prodbuy-discount"><?php echo $row->discount_price; ?>%</span></div>
                <input type="hidden" name="price" value="<?php echo $row->product_code; ?>" >
                <input type="hidden" name="product_code" value="<?php echo calculate_parcentage($row->price,$row->discount_price); ?>">
                <div class="otherProducts">Other products by <strong>Category:</strong> <a rel="nofollow" href="/<?php echo $row->subdomain_name; ?>/<?php echo $category['category_slug']; ?>"><?php echo $category['category_name']; ?></a></div>
                <div class="showLine"></div>
                <table class="AE:disable" id="productTbInfo">
                    <tbody>
                    <tr id="fobTr"><th class="proName">Item code:</th><td class="proValue"><?php echo $row->product_code; ?></td></tr>
                    <tr id="fobTr"><th class="proName">Item Status:</th><td class="proValue"><?php echo $row->product_status; ?></td></tr>
                    <?php echo $groups; ?>
                    <tr><th class="proName">Quantity:</th><td style="overflow:visible;" class="proValue"><div id="mOrderValue">
                                <select id="product_qunt" style="width:20px">
                                <?php for($i=1; $row->quantity >= $i; $i++ ){?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                                </select><?php echo $row->quantity_type; ?></div></td></tr>
                    <tr><th class="proName">Payment:</th><td class="proValue">Paypal,Bkash,Actel</td></tr>
                    </tbody>
                </table>

                <div class="contactWay wrapBoxOut">
                    <div id="contactInfoUp" class="wrapBoxInner clearfix">
                        <div class="clearfix" id="contactInfoLeft"><button id="" style="width: 180px; margin-left: 50px; text-align: center" class="btn btn-large btn-warning" >ADD TO BASKET</button> </div></div>
                </div>
            </div>
                <div class="contactWay wrapBoxOut">

                    <div id="contactInfoUp" class="wrapBoxInner clearfix">

                        <ul class="product-status" >
                            <li class=""><i class="icon-eye-open"></i>&nbsp;v:<a href="javascript:void(0)" ><span>[ 1518 ]</span></a></li>
                            <li class=""><i class="icon-thumbs-up"></i>&nbsp;a:<a href="javascript:void(0)" ><span>[ 23087 ]</span></a></li>
                            <li class=""><i class="icon-comment"></i>&nbsp;c:<a href="javascript:void(0)" ><span>[ 123 ]</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contactWay wrapBoxOut">
                    <div id="contactInfoUp" class="wrapBoxInner clearfix">
                        share...
                        <!--<span class='st_email' displayText='Email'></span>
                        <span class='st_facebook' displayText='Facebook'></span>
                        <span class='st_googleplus' displayText='Google +'></span>
                        <span class='st_twitter' displayText='Tweet'></span>

                        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                        <script type="text/javascript">var switchTo5x=true;</script>
                        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                        <script type="text/javascript">stLight.options({publisher: "1280d43b-377a-40b1-b8eb-78fbc1ba2dcf", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    -->
                    </div>
                </div>

                <div class="contactWay wrapBoxOut">
                    <div id="contactInfoUp" class="wrapBoxInner clearfix">
                        <div class="clearfix" id="contactInfoLeft"><a id="contactPersonUp" rel="nofollow" href="#"><?php echo $row->contact_person; ?></a><div><abbr title="Phone"><?php echo formatPhoneNumber($row->business_phone); ?></div></div><div id="contactNowUp"><a target="_blank" rel="nofollow" title="Click	to send	an inquiry" class="buttonContactNow" href="#">Click to send an inquiry</a><div>Send a Message to this Supplier</div></div></div>
                </div>
                <div class="contactWay wrapBoxOut">
                    <div id="contactInfoUp" class="wrapBoxInner clearfix">
                        <div class="clearfix" id="contactInfoLeft"><a id="contactPersonUp" rel="nofollow" href="#">Add to My Favorites</a> </div><div id="contactNowUp"><a target="_blank" rel="nofollow" title="Click to shop directions" class="buttonContactNow" href="#" style="width:60px; float:left"><?php echo $row->location_name; ?></a><a target="_blank" rel="nofollow" title="Click to shop directions" class="buttonContactNow" href="javascript:void(0)" style="width:60px; float:left" >Directions</a></div></div>
                </div>
            </div>
        <div class="clearfix" ></div>

        <div class="wrapBoxInnerBlue">
            <div id="supplierDetailTitle"><?php echo $row->shop_name; ?></div>

            <div class="clearfix" id="comanyLocation"><div>[ <?php echo $row->location_name; ?> ]</div></div>
            <div id="businessTypeLable" style="margin-top:20px;">Business Type:<?php echo ucfirst($row->shop_group); ?></div>
            <a target="_blank" href="" rel="nofollow" id="contactDetails">Contact Details</a>
            <div class="clear"></div>
            <div id="guideToMiniSite"><div>Hotline:</div>
                <div class="clear"></div>
                <?php if($row->email){ ?>
                    <span id="relateProductLink2"><a id="<?php echo $row->email; ?>" href="javascript:void(0)">Contact by email</a></span>
                    <div class="clear"></div>
                <?php } ?>
                <?php if($row->cell_phone){ ?>
                    <span id="relateProductLink2"><?php echo $row->cell_phone; ?></span>
                    <div class="clear"></div>
                <?php } ?>
                <?php if($row->business_phone){ ?>
                    <span id="relateProductLink2"><?php echo $row->business_phone; ?></span>
                    <div class="clear"></div>
                <?php } ?>

            </div>
            <div class="clear"></div>
            <div id="guideToMiniSite"><div>Address:</div>
                <div class="clear"></div>
                <span id="relateProductLink2"><?php echo $row->address_details; ?></span>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

            <div id="guideToMiniSite">
                <div>Online Showroom: <a href="/<?php echo $row->subdomain_name; ?>/products" rel="nofollow"><?php echo $row->total_product; ?> Products</a></div>
                <div class="clear"></div>
                <a rel="nofollow" target="_blank"  href="/<?php echo $row->subdomain_name; ?>/<?php echo $category['category_slug']; ?>" id="relateProductLink" class="blockA">
                    <span id="relateProductLink2">Other</span>&nbsp;Similar Products from this Supplier </a>
                <div class="clear"></div>
                <?php if ($row->domain_name){ ?>
                    <a class="blockA" target="_blank" href="http://<?php echo $row->domain_name; ?>" rel="nofollow">View this Website</a>
                <?php }else{ ?>
                    <a class="blockA" href="/<?php echo $row->subdomain_name; ?>" rel="nofollow">View this Website</a>
                <?php } ?>
                <div class="clear"></div>
                <p><a href="" class="more">Choice nearest place  <i class="icon-chevron-right"></i></a> </p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

            <div style="display: none">
                <div class="clear"></div>
                <?php if($row->shopping_status){

                    $i=0;

                    $mallinfo = explode(',',$row->mall_info);
                    foreach(explode(',',$row->shopping_mall_name) as $mall){
                        ?>

                        <div class="clear"></div>
                        <div id="guideToMiniSite"><div>Shopping Mall:<?php echo $mall; ?></div>
                            <div class="clear"></div>
                            <span id="relateProductLink2"><?php echo  $str = str_replace('#@#', ',', $mallinfo[$i]); ?></span>
                            <div class="clear"></div>
                        </div>
                        <?php
                        $i++;  }
                }
                ?>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>

        </div>
</div>
<div class="clearfix" ></div>

</div>


<div class="clear"></div>

<!-- End top Product image & overview -->

<style>
/*-----------------------Tab menu----------------------------*/

.widget {
	width:540px;
	margin-top:15px;
	margin-left:0px; margin-right:0px;
	padding: 5px;
	margin-bottom: 10px;
	margin-left:0px;
    height: 350px;
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
		color: #222;
		font-weight: bold;
		padding: 8px 8px;
		outline: none;
		font-size:12px;
		line-height:28px;
		background: url("<?php echo base_url()?>assets/images/title_bg.png") repeat-x scroll 0 0 transparent;
    	border-left: 1px solid #DBE1E6;
		border-right: 1px solid #DBE1E6;
    	border-top: 1px solid #DBE1E6;

	}

	.tabnav li a:hover, .tabnav li a:active, .tabnav li.ui-tabs-selected a {
		background: #D26902;
		color: #fff;
		text-decoration: none!important;
	}

.tabnav li a.active {
    background: #D26902;
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
<script language="JavaScript">
    $(function() {
        $('ul.tabnav').each(function(){
            // For each set of tabs, we want to keep track of
            // which tab is active and it's associated content
            var $active, $content, $links = $(this).find('a');

            // If the location.hash matches one of the links, use that as the active tab.
            // If no match is found, use the first link as the initial active tab.
            $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
            $active.addClass('active');
            $content = $($active.attr('href'));

            // Hide the remaining content
            $links.not($active).each(function () {
                $($(this).attr('href')).hide();
            });

            // Bind the click event handler
            $(this).on('click', 'a', function(e){
                // Make the old tab inactive.
                $active.removeClass('active');
                $content.hide();

                // Update the variables with the new link and content
                $active = $(this);
                $content = $($(this).attr('href'));

                // Make the tab active.
                $active.addClass('active');
                $content.show();

                // Prevent the anchor's default click action
                e.preventDefault();
            });
        });
    });
</script>
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
<!--  Start Products details -->
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
    padding-left:0px;
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
    border: 1px solid #dbd9c9;
    border-style: solid;
    border-width: 1px;
    width: 220px;
    padding-left: 5px;
    line-height: 25px;
    height: 25px;
}
#fbForm #fbTextArea {
    border: 1px solid #dbd9c9;
    clear: both;
    display: block;
    height: 64px;
    margin-top: 0;
    padding: 7px 6px;
    width: 350px;
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
	margin-left:0px;
	margin-right:0px;
}

.related-products-title {
    background-color: #E8ECF0;
    font: bold 12px arial;
    padding: 5px 0 7px 13px;
}

.productCycleItem {
    padding: 10px 0 0 0px;
    width: 970px;
    padding-left: 10px;
    padding-bottom: 10px;
}
.prod_box{ width:186px;}
</style>
<!--- start Related product -->

<div class="wrapBoxOutBlue">
 <div><div class="related-products-title">Related Products</div>
<div class="relatedProductsA clearfix" id="relatedProductsBox">

</div>
</div>
</div>
<!--- end Related product -->

<div class="clear"></div>
</div><!-- end of main -->
<script src="<?php echo base_url()?>/assets/js/agile_carousel.alpha.js"></script>
<script language="javascript">
    $(document).ready(function(){
        /* This code use for show the dropdoen menu*/
        $('#relatedProductsBox').load('/main/products/getReletaedProducts/?product_group=shops&<?php echo $category['category_slug']; ?>');
    })
</script>
<?php $this->load->view('main/layouts/footer')?>