<?php $this->load->view('main/layouts/header')?>
<script type="text/javascript" charset="utf-8">
    var hash = location.hash.split('#')[1];
    var match = location.hash.match(/^#?(.*)$/)[1];

    //IE Proof - URL Hash Grab - returns complete hash value
    $(function(){


        $('.flyList').click(function(){
            $('#flyList1').slideToggle();
        })

        $('#alphabetic').listmenu();
        $('#location_id').selectBox();
        $('.perpage').selectBox();
        $('#catid_label_4').selectBox();


        $('#catid_label_1').selectBox().change(function () {
            var catid_value =$(this).val();
            $.ajax({
                url:'/main/directories/underProductCategory/?catid_field=1&catid_value='+catid_value,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('#category_label_2').html(val);
                    $('#category_label_3').empty();
                    $('#category_label_4').empty();
                    $('#catid_label_2').selectBox();
                }
            })
        })

        $('#catid_label_2').selectBox().change(function () {
            var catid_value =$(this).val();
            $.ajax({
                url:'/main/directories/underProductCategory/?catid_field=2&catid_value='+catid_value,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('#category_label_3').html(val);
                    $('#catid_label_3').selectBox();
                }
            })
        })

        $('#catid_label_3').selectBox().change(function () {
            var catid_value =$(this).val();
            $.ajax({
                url:'/main/directories/underProductCategory/?catid_field=3&catid_value='+catid_value,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('#category_label_3').html(val);
                    $('#catid_label_3').selectBox();
                }
            })
        })


        $('.perpage').change(function(){
            var perpage =$(this).val();
            window.location='/directories/<?php echo $this->uri->segment(2,0)?>/?perpage='+perpage
        })


        $('.quickLook').click(function(){

            var product_slug =$(this).attr('role');

            $('#directoriesModal').modal({
                backdrop:false
            });
            $(window).scrollTop(0);
            $(".layer").remove();
            $("body").append('<div class="layer" />');
            $(".layer").height($(document).height()).slideDown();
            $.ajax({
                url:'/main/directories/product_details/?product_slug='+product_slug,
                data:"",
                dataType:'html',
                type:"GET",
                beforeSend:function(){
                    $('#agent-body').html('<img class="large-load-img" src="<?php echo base_url()?>assets/images/loading-large.gif" >')
                },
                success: function(val){
                    $('#agent-body').html(val);
                }
            })

        })

        $(".triple .product_img").preloader();

        $('.quickLook1').hover (function() {
            var id=$(this).attr('id');
            $('#quick-'+id).addClass('div-hover');
        }, function() {
            $('.quickLook').removeClass('div-hover');
        });

        $('.quickLook').hover (function() {
            var id=$(this).attr('title');
            $('#quick-'+id).removeClass('div-hover');
            $('#quick-'+id).addClass('hover');
        }, function() {
            $('.quickLook').removeClass('hover');
        });

    });
    $(function($) {
        $("ul.featureList").show();
        $(".group-handle").click(function() {

            var $this = $(this).parent(),
                header = $this.find('i'),
                target = $this.next(".featureList"),
                showing = target.is(':visible');

            if(showing){ // hide
                target.slideUp('slow');
                header.removeClass('icon-minus').addClass('icon-plus');
            }
            else {
                target.slideDown('slow');
                header.removeClass('icon-plus').addClass('icon-minus');
            }
        });
    });
</script>
<div class="clear"></div>
<style>


    #flyList{
        text-align: left;
        float: left;
        width: 210px;
    }

    #flyList1{
        display: none;
    }
    .layer{
        background-color: #000000;
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 1040;
        opacity: 0.8;
    }
    #agent-load-data{

    }
    #agent-load-data .large-load-img{

    }
    .agent-body{
        max-height: 515px!important;
    }

    .agent-nev{
        left: 0px!important;
        margin-left: 20px;
    }
    #agent-load-data{
        background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #DDDDDD;
        border-radius: 2px 2px 2px 2px;
        box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1);
        display: block;
        line-height: 1.5em;
        margin-bottom: 15px;
        padding:0px;
    }

    .productcarousel .bx-wrapper .bx-pager {
        bottom: -17px;
        position: absolute;
        width: 70px;
    }

    .treeMenu ul li {
        border: 1px solid #FFFFFF;
        border-radius: 3px 3px 3px 3px;
        float: left;
        margin: 2px 0 2px 5px;
        overflow: hidden;
        width: 228px;
    }

    .treeMenu ul li a {
        color: #004027;
        display: inline-block;
        float: left;
        font-size: 13px;
        padding: 5px;
        text-decoration: none;
        width: 188px;
    }

    .product_img img{
        width: 140px;
        height: 170px;
    }
    .add-on{
        color: #4F4F4F;
        display: inline-block;
        font-size: 13px;
        font-weight: bold;
        padding-right: 3px;
    }



</style>
<?php
$data = $this->session->userdata('search_data');
$catid_label_1=isset($data['catid_label_1'])?$data['catid_label_1']:'';
?>
<div id="directoriesModal" class="modal hide fade location-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body location-body agent-body" id="agent-body">

    </div>
</div>

<div id="mixboxes" >

<div style="padding-bottom: 24px; display: none" class="bs-example">
    <a id="example" class="btn btn-lg btn-danger" href="javascript:void(0)" >Click to toggle popover</a>
</div>
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td id="column_right" style="width:250px; position: relative">

    <div class="show-grid" style="float: left; margin-left: -8px; box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1)">
        <div class="span5" style=" width: 240px; height: 100%">
            <button id="flyList"  class="flyList btn btn-info"><?php echo $this->lang->line('all_categories_for').' '.$group; ?></button>
            <button class="flyList btn btn-info"><span class="caret"></span></button>
            <div class="treeMenu" id="flyList1"><?php echo $getProductListing[7]; ?></div>
         <div class="clear"></div>
            <div class="shadowbox">
                <a  href="#"><img class="side-bar-advertisment" src="/uploads/en.png" ></a>
                <?php if(!empty($getProductListing[8])){ ?>
                    <button style="width: 240px"  class="flyList btn btn-inverse"><?php echo $this->lang->line('refine_results').' '.$group; ?></button>
                <?php } ?>
                <div class="shadowcenter overhid">
                        <div class="clear"></div>
                    <?php if(!empty($getProductListing[8])){echo $getProductListing[8]; } ?>
                    <?php if(!empty($getProductListing[9])){echo $getProductListing[9]; } ?>
                 <div style="display: none" class="filters-outer">
                            <div class="filters-head essFeatureHeader"><i class="icon-minus" style="margin-right: 5px"></i>Appointment Scheduling <div  class="reset-filter">Clear</div></div>
                            <ul class="featureList filters-cont scroll-pane">
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>    <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>    <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>
                                <li><label class="checkbox">
                                    <input type="checkbox" value="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                </li>

                            </ul>
                        </div>
                </div>
            </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</td>

<td id="column-center" valign="top" >

<div class="row show-grid">
    <div class="span5" style="width: 718px; box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1); margin-bottom: 10px;position: relative; height: auto!important;">
        <h2 class="centerBoxHeading" style="width: 706px; margin-bottom: 1px"><?php echo $this->lang->line('all_categories_for').' '.$group; ?></h2>
        <form action="/directories/<?php echo $this->uri->segment(2,NULL)?>/search/" method="post" name="directories">
            <?php if(!empty($getProductListing[0])){ ?>
                <div class="search-box">
                    <select class="custom-class1 custom-class2" name="catid_label_1" id="catid_label_1" tabindex="1">
                        <option value="">--<?php echo $this->lang->line('choice_category');?>--</option>
                        <?php
                        $catid_label_1=isset($data['catid_label_1'])?$data['catid_label_1']:'';
                        foreach(($getProductListing[0]) as  $categories ){ ?>
                            <option <?php if($catid_label_1 == $categories->category_slug){ echo "selected='selected'"; } ?> value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                        <?php } ?>
                    </select>
                    <div id="category_label_2" style="margin-top: 5px; margin-bottom: 5px">
                        <?php $catid_label_2 = isset($data['catid_label_2']) ? $data['catid_label_2']:'';
                        if($catid_label_2 !=='' || $catid_label_1 !=''){
                            $result = $this->directories_model->getUnderProductCategory($catid_label_1,'catid_label_2');
                            if(!empty($result) && $result ->num_rows() > 0){
                                $getCategories = $result->result();
                                ?>

                                <select  class="custom-class1 custom-class2" name="catid_label_2" id="catid_label_2" tabindex="1">
                                    <option value="">--<?php echo $this->lang->line('choice_category');?>--</option>
                                    <?php
                                    foreach($getCategories as $categories){ ?>
                                        <option <?php if($catid_label_2 == $categories->category_slug){ echo "selected='selected'"; } ?>  value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                                    <?php } ?>
                                </select>
                            <?php } } ?>
                    </div>

                </div>
            <?php } ?>
            <div class="search-box">
                <?php if(!empty($getProductListing[0])){ ?>
                    <select class="custom-class1 custom-class2" name="location_id" id="location_id" tabindex="3">
                        <option value="">--<?php echo $this->lang->line('choice_location');?>--</option>
                        <?php
                        $location_slug=isset($data['location_id'])?$data['location_id']:'';
                        foreach($getProductListing[1] as  $location){ ?>
                            <option <?php if($location_slug == $location->location_slug){ echo "selected='selected'"; } ?> value="<?php echo $location->location_slug; ?>"><?php echo $location->location_name; ?></option>
                        <?php } ?>
                    </select>
                <?php  } ?>
                <div id="category_label_3" style="margin-top: 5px;">
                    <?php $catid_label_3 = isset($data['catid_label_3'])?$data['catid_label_3']:'';
                    if($catid_label_3 !=='' || $catid_label_2 !="" ){
                        $result = $this->directories_model->getUnderProductCategory($catid_label_2,'catid_label_3');
                        if(!empty($result) && $result ->num_rows() > 0){
                            $getCategories = $result->result();
                            ?>

                            <select  class="custom-class1 custom-class2" name="catid_label_3" id="catid_label_3" tabindex="1">
                                <option value="">--<?php echo $this->lang->line('choice_category');?>--</option>
                                <?php
                                foreach($getCategories as $categories){ ?>
                                    <option <?php if($catid_label_3 == $categories->category_slug){ echo "selected='selected'"; } ?>  value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                                <?php } ?>
                            </select>
                        <?php } } ?>
                </div>
            </div>
            <div class="search-box">
                <?php $search_item=isset($data['search_item'])?$data['search_item']:''; ?>
                <input   type="text" placeholder="<?php echo $this->lang->line('search_products'); ?>" value="<?php echo $search_item; ?>" class="form-control search-input" id="search_item" name="search_item" >
                <div id="category_label_4" style="margin-top: 5px;" >
                    <?php $catid_label_4 = isset($data['catid_label_4'])?$data['catid_label_4']:'';
                    if( $catid_label_4 !=='' || $catid_label_3 !="" ){
                        $result = $this->directories_model->getUnderProductCategory($catid_label_3,'catid_label_4');
                        if(!empty($result) && $result ->num_rows() > 0){
                            $getCategories = $result->result();
                            ?>

                            <select class="custom-class1 custom-class2" name="catid_label_4" id="catid_label_4" tabindex="1">
                                <option value="">--<?php echo $this->lang->line('choice_category');?>--</option>
                                <?php
                                foreach($getCategories as $categories){ ?>
                                    <option <?php if($catid_label_4 == $categories->category_slug){ echo "selected='selected'"; } ?>  value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                                <?php } ?>
                            </select>
                        <?php } } ?>
                </div>
            </div>
            <div style="float: right; right: 9px; top:1px; position: absolute ">
                <button type="submit" class="btn btn-info"><?php echo $this->lang->line('search');?></button>
            </div>
        </form>
        <div class="clear"></div>
    </div>
</div>

<table>
    <tr><td>
            <ul id="alphabetic" class="demo">

                <?php
                if(!empty($getProductListing[2])){
                    foreach($getProductListing[2] as $shops):
                        ?>
                        <li><a href="/<?php echo $shops->subdomain_name; ?>"><?php echo $shops->shop_name; ?></a></li>
                    <?php endforeach; }  ?>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pages clearfix"><span class="total-page">Showing Product lists </span>
                <div class="page_num">
                    <?php
                    echo $getProductListing[4]; ?>

                    <div class="per-page">

                        <select class="custom-class1 custom-class2 perpage" name="perpage" id="" tabindex="2">
                            <?php $per_page = $this->session->userdata('per_page'); ?>
                            <option value=""><?php echo $this->lang->line('show');?></option>
                            <option <?php if($per_page ==20 ){ echo "selected='selected'"; } ?> value="20">20</option>
                            <option <?php if($per_page ==32 ){ echo "selected='selected'"; } ?> value="32">32</option>
                            <option <?php if($per_page ==40 ){ echo "selected='selected'"; } ?> value="40">40</option>
                        </select>

                    </div>
                </div>

            </div>
        </td>
    </tr>


    <?php if(!empty($getProductListing[3])){
        $var = ($getProductListing[4] != '0')  ? ($getProductListing[4]+1) : 1;
        ?>
    <tr>
                <td>
                    <div class="board-head">
                        <div class="head-inner grid-box">
                           <div class="triple" style="margin-left: 2px">
                               <?php
                               $i=$var;
                               foreach($getProductListing[3] as $products): ?>
                                    <div class="prod_box">
                                        <div class="top_prod_box"></div>
                                        <div class="center_prod_box">

                                            <div class="product_title"><a href="/products/<?php echo $products->slug; ?>"><?php echo wordLimiter($products->product_name,3); ?></a></div>
                                            <div style="position: relative" class="product_img"><span class="new-icon"></span><a href="javascript:void(0)" class="quickLook1"  id="<?php echo $products->slug; ?>" ><img class="corner" src="<?php if($products->image_thumb_path){ echo base_url().'/'.$products->image_thumb_path; }else{ echo base_url(); ?>/uploads/noimage.jpg <?php } ?>" alt="" title="" height="92" width="122" border="0" /></a></div>
                                            <div class="prod_price"><span class="add-on"><?php echo $this->lang->line('tk');?></span><span <?php if( $products->discount_price > 0){ ?> class="reduce" <?php } ?> ><?php echo floatval($products->price); ?></span>&nbsp;<?php if( $products->discount_price > 0){ ?><span class="price"><?php echo floatval($products->discount_price); ?></span><?php } ?><span class="product_discount_percentage">25%</span></div>
                                            <div class="prod_price"><?php echo $products->product_status; ?></div>
                                            <div  role="<?php echo $products->slug; ?>" title="<?php echo $products->slug; ?>" class="quickLook" id="quick-<?php echo $products->slug; ?>" ></div>
                                        </div>
                                        <div class="bottom_prod_box"></div>
                                        <div class="prod_details_tab">
                                            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
                                            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
                                            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>
                                            <a href="/products/<?php echo $products->slug; ?>" class="prod_details">details</a>
                                        </div>
                                    </div>
                               <?php $i++; endforeach; ?>
                                </div><!-- end of triple -->
                        </div>

                    </div><!-- end of post-head -->
                </td>
    </tr>
    <?php  }else{ ?>
    <tr><td class="record-no-found"><?php echo $this->lang->line('no_records');?></td></tr>
    <?php } ?>
    <tr>
        <td>

            <div class="pages clearfix"><?php  if( $getProductListing[5] > 0){ ?><span class="total-page"><?php echo $this->lang->line('showing_result');?><?php echo ($getProductListing[4]+1); ?> - <?php echo ($i-1); ?> of <?php echo $getProductListing[5]; ?></span><?php } ?><div class="page_num"><?php echo $getProductListing[4]; ?>
                    <div class="per-page">
                        <select class="custom-class1 custom-class2 perpage" name="perpage" id="" tabindex="2">
                            <?php echo $per_page = $this->session->userdata('per_page'); ?>
                            <option value=""><?php echo $this->lang->line('show');?></option>
                            <option <?php if($per_page ==20 ){ echo "selected='selected'"; } ?> value="20">20</option>
                            <option <?php if($per_page ==32 ){ echo "selected='selected'"; } ?> value="32">32</option>
                            <option <?php if($per_page ==40 ){ echo "selected='selected'"; } ?> value="40">40</option>

                        </select>
                    </div>
                </div>

            </div>
        </td>
    </tr>
</table>




</td>

</tr>
</table>
</div><!-- end of main -->


<?php $this->load->view('main/layouts/footer')?>
