
<style>
    #popup-content-container #container-left {
        background: none repeat scroll 0 0 #FFFFFF;
        box-shadow: 2px 0 6px 0 rgba(0, 0, 0, 0.1);
        float: left;
        height: 445px!important;
        padding-left: 0;
        position: relative;
        width: 643px;
        padding-top: 10px;
    }
    #agent-load-data {
        background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #DDDDDD;
        border-radius: 2px 2px 2px 2px;
        box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1);
        clear: both;
        display: block;
        height: 456px;
        line-height: 1.5em;
        margin-bottom: 15px;
        padding: 0;
    }
    .product-stats{
        border-top:none!important;
    }
    .shop-address{
        height: 115px!important;
        border-bottom: none!important;
    }
    .product-title {
        color: #00ADCB;
        font-size: 16px;
        line-height: 20px;
        margin: 0 0 20px;
    }
    .product-label {
        color: #6C6C6C;
        padding-right: 10px;
        text-align: right;
    }
    .product-text {
        color: #7F7F7F;
        display: inline-block;
        margin-right: 10px;
        text-align: left;
    }

    .discount-active{
        text-decoration: line-through;
    }
    .red{
        color:#EA2222 !important;
        text-align: left;
        font-weight: bold;
        padding-left: 5px;
    }
    .add_cart{
        float: right;
    }


    .product-nav{
        bottom: 0;
        clear: both;
        height: 28px!important;
        padding: 0!important;
        position: absolute;
        left: 0;
        width: 600px;
    }
    .product-nav {
        font-size: 24px;
        font-weight: bold;
        line-height: 18px;
        width: 385px!important;
    }
    .product-next,.product-prev {
        color: #00ADCB;
        float: right;
        font-size: 13px;
        font-weight: bold;
        line-height: 13px!important;
    }
    .product-next:hover,.product-prev:hover {
        color: #ED6D00;
    }
    .product-next{


    }
    .product-prev{
        margin-left: 10px;
        margin-right: 10px;
    }


</style>

<script language="JavaScript">
    $(document).ready(function(){

        $('.closex').click(function(e){
            $('#directoriesModal').modal('toggle');
            $(".layer").slideUp();

        });

        $('#product_category_id').selectBox().change(function () {
            var product_category_id =$(this).val();
            $.ajax({
                beforeSend:function(){
                    $('#agent-load-data').html('<div class="small-load"><img class="small-load-img"  src="<?php echo base_url()?>assets/images/bx_loader.gif" ><div>')
                },
                url:'/main/directories/product_category/?product_category_id='+product_category_id,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    if(val !='failed'){
                        $('#agent-load-data').html(val);
                    }
                }
            })
        })

        $('.product-change').click(function () {

            var action =$(this).attr('id');
            var product_id =$('#product_id').val();
            var product_category_id =$('#product_category_id').val();
            $.ajax({

                beforeSend:function(){
                    $('#agent-load-data').html('<div class="small-load"><img class="small-load-img"  src="<?php echo base_url()?>assets/images/bx_loader.gif" ><div>')
                },
                url:'/main/directories/product_preview',
                data:"action="+action+"&product_id="+product_id+"&product_category_id="+product_category_id,
                dataType:'html',
                type:"POST",
                success: function(val){
                    if(val !='failed'){
                        $('#agent-load-data').html(val);
                    }
                }
            })
        })

        $(".span_area a").click(function() {
            var mainImage = $(this).attr("href"); //Find Image Name
            $("#main_view img").attr({ src: mainImage });
            return false;
        });

    });
</script>
<?php $row = $result[1];?>
<div class="tabbable tabs-left" style="position:relative">
    <div class="tab-content " style="float: right; height: 400px; width: 910px; position: relative">
        <div role="banner" class="pane clearfix" id="hd">
            <div class="main-nav product-nav clearfix" id="main-nav">
              <span><a href="javascript:void(0)"   class="product-change product-next" id="next">Next&nbsp;<i class="icon-chevron-right"></i></a><a href="javascript:void(0)" id="prev"  class="product-change product-prev"><i class=" icon-chevron-left"></i>&nbsp;Previous</a></span>
            </div>
            <div style="float: right; margin-right:8px; margin-top: 8px;width: 260px">
                 <div class="agent-select" style="float: left;">

                    <select class="custom-class1 custom-class2" style="width:220px" id="product_category_id" name="product_category_id" tabindex="-1">
                        <?php
                        if(!empty($result[0])){
                            foreach($result[0] as $categories):
                            ?>
                                <option <?php if($categories->category_id == $row->product_category_id ){ echo "selected='selected'"; } ?> value="<?php echo $categories->category_id; ?>"><?php echo $categories->category_name; ?></option>
                            <?php endforeach; }  ?>

                    </select>
                </div>
                <button type="button" class="closex" id="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
        </div>
        <div class="load-data" id="agent-load-data" >
            <div id="popup-content-container">


                <form>
                    <input type="hidden" name="product_id" id="product_id" value="<?php echo $row->product_id; ?>">
                </form>
                <div id="container-left">
                    <?php if($row->show_type =='landscape'){ ?>
                    <div id="landscape">
                        <span class="new-large-icon"></span>
                        <img src="<?php if($row->image_medium_path){ echo '/'.$row->image_medium_path; }else{ echo base_url(); ?>/uploads/noimage.jpg <?php } ?>" />
                    </div>
                    <div id="landscape-product-details">
                        <div class="tip_product_details">
                            <table>
                                <tr><td colspan="2" class="product-title"><?php echo $row->product_name; ?></td></tr>
                                <tr><td class="product-label" >Item Code:</td><td class="product-text" ><?php echo $row->product_code; ?></td></tr>
                                <tr><td class="product-label" >Price:</td><td class="product-text" ><span class="add-on"><?php echo $this->lang->line('tk');?></span><span <?php if($row->discount_price > 0 ){ echo "class='discount-active'"; } ?> ><?php echo floatval($row->price); ?></span><?php if($row->discount_price >0){ echo "<span class='red'>".floatval($row->discount_price)."</span>"; } ?>&nbsp;<span class="product_discount_percentage">25%</span></td></tr>
                                <tr><td class="product-label" >Quantity:</td><td class="product-text" ><?php echo $row->quantity.'['.$row->quantity_type_name.']'; ?></td></tr>
                                <tr><td class="product-label" >Item Status:</td><td class="product-text" ><?php echo $row->product_status; ?></td></tr>
                                <tr><td class="product-label" >Product Valid Date:</td><td class="product-text" >From <?php echo productDateFormat($row->created); ?> To <?php echo productExpiredDateFormat($row->created,$row->expired); ?></td></tr>
                                <tr><td colspan="2"><?php echo $row->description; ?></td></tr>
                                <tr><td colspan="2"><a href=""   class="add_cart">Add to Basket<i class="icon-shopping-cart"></i></a><a href=""   class="add_cart more">More details<i class="icon-chevron-right"></i></a></td></tr>
                            </table>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div id="portrait">
                            <span class="new-large-icon"></span>
                            <img src="<?php if($row->image_medium_path){ echo '/'.$row->image_medium_path; }else{ echo base_url(); ?>/uploads/noimage.jpg <?php } ?>" />
                        </div>
                        <div class="clear"></div>
                        <div id="portrait-product-details">
                            <div class="tip_product_details">
                                <table style="width: 100%">
                                    <tr><td></td><td colspan="3" class="product-title"><?php echo $row->product_name; ?></td></tr>
                                    <tr>
                                        <td class="product-label" >Item Code:</td><td class="product-text" ><?php echo $row->product_code; ?></td>
                                        <td class="product-label" >Price:</td><td class="product-text" ><span class="add-on"><?php echo $this->lang->line('tk');?></span><span <?php if($row->discount_price > 0 ){ echo "class='discount-active'"; } ?> ><?php echo floatval($row->price); ?></span><?php if($row->discount_price >0 ){ echo "<span class='red'>".floatval($row->discount_price)."</span>"; } ?>&nbsp;<span class="product_discount_percentage">25%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-label" >Quantity:</td><td class="product-text" ><?php echo $row->quantity.'['.$row->quantity_type_name.']'; ?></td>
                                        <td class="product-label" >Item Status:</td><td class="product-text" ><?php echo $row->product_status; ?></td>
                                    </tr>
                                   <tr>
                                    <tr><td class="product-label" >Product Valid Date:</td><td colspan="3">From <?php echo productDateFormat($row->created); ?> To <?php echo productExpiredDateFormat($row->created,$row->expired); ?></td></tr>
                                   <tr><td colspan="4"><?php echo wordLimiter($row->description,30); ?></td></tr>
                                   <tr><td colspan="4"><a href=""   class="add_cart">Add to Basket<i class="icon-shopping-cart"></i></a><a href=""   class="add_cart more">More details<i class="icon-chevron-right"></i></a></td></tr>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div id="container-right">
                    <div class="sidebar-owner cfix" style="">
                        <div class="cfix" id="owner-icon-info">
                            <div class="user-img-50 left " id="owner-icon">
                                <a href="http://<?php echo $row->subdomain_name; ?>">
                                    <img src="<?php echo site_url()?>/uploads/noimage.jpg"></a>
                            </div>
                            <div class="left" id="owner-info">
                                <div class="cfix" id="owners"><a href="" class="text-ellipsis" id="owner"><?php echo $row->shop_name ?></a></div>
                                <div id="owner-location-container"><a href="" class="location-link "><?php echo $row->location_name; ?></a></div>
                            </div>
                        </div>
                        <div class="sidebar-block">
                            <div class="sidebar-content">
                               <ul class="object-stats product-stats" id="project-stats">
                                    <li class=""><i class="icon-eye-open"></i><span class="pre-text" >Views</span><span class="badge badge-info"><?php echo isset($row->views)?$row->views:0; ?></span></li>
                                    <li class=""><i class="icon-thumbs-up"></i><span class="pre-text" >Appreciations</span><span class="badge badge-info"><?php echo isset($row->appreciations)?$row->appreciations:0; ?></span></li>
                                    <li class=""><i class="icon-comment"></i><span class="pre-text" >Comments</span><span class="badge badge-info"><?php echo isset($row->comments)?$row->comments:0; ?></span></li>
                                </ul>

                            </div>
                            <div class="clear"></div>
                            <div class="clear owner-buttons-container shop-address">
                                <p><?php echo $row->address; if($row->city){ echo ','.$row->city; } if($row->postal_code){ echo ','.$row->postal_code; } ?></p>
                                <p><?php echo $row->contact_person; ?></p>
                                <p><?php echo $row->business_phone ?></p>
                                <?php if(empty($row->domain_name)){ ?>
                                    <p><a href="/<?php echo $row->subdomain_name; ?>"><?php echo site_url($row->subdomain_name); ?></a></p>
                                <?php }else{ ?>
                                    <p><a href="http://<?php echo $row->domain_name; ?>" target="_blank">http://<?php echo $row->domain_name; ?></a></p>
                                <?php } ?>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="clear"></div>

                </div>
            </div>
        </div>
    </div>
</div>
