<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/18/13
 * Time: 11:45 AM
 * To change this template use File | Settings | File Templates.
 */
?>
<script language="javascript">
    $(document).ready(function(){
        $("img.feature-lazy").lazy();
        $('.productslider').bxSlider({
            speed: 2000,
            pager:true,
            height:650,
            infiniteLoop:false,
            hideControlOnEnd:true
        });

    });
</script>
<h2 class="centerBoxHeading"><span style="display:inline-block; width:285px;"><?php echo $offer_title; ?></span><span id="loading"></span></h2>
<div id="board-content">
    <div id="" class="productcarousel " style="width: 700px" >
        <ul class="productslider">

            <li>
                <?php foreach($getProductOffers as $offers ): ?>
                    <div class="holder">
                        <div class="link11">
                            <a href="javascript:void(0)">
        <span>
            <dl>
                <dd onclick="window.location='<?php echo site_url($offers->subdomain_name.'/'.$offers->category_slug.'/details/'.$offers->product_slug)?>'" ><?php echo $offers->shop_name; ?></dd>
                <dd onclick="window.location='<?php echo site_url($offers->location_slug.'/'.$offers->category_slug)?>'" ><?php echo $offers->location_name; ?></dd>
                <dd onclick="window.location='<?php echo site_url($offers->category_slug.'/'.$offers->product_slug)?>'" ><?php echo $offers->product_category_name; ?></dd>
                <dd onclick="window.location='<?php echo site_url('cart/'.$offers->product_slug); ?>" >Add to cart</dd>
            </dl>
        </span>
                                <img class="feature-lazy" alt="<?php echo $offers->product_name; ?>"  data-src="<?php echo base_url().'/'.$offers->image_small_path ?>"  >
                            </a>
                        </div>
                        <div class="link22">
                            <a title="<?php echo $offers->product_name; ?>" href="<?php echo site_url('/details/'.$offers->category_slug.'/'.$offers->product_slug); ?>"></a>
                        </div>
                        <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$offers->category_slug.'/'.$offers->product_slug); ?>'">
                            <p class="link33-discount">৳<?php echo $offers->discount_price; ?></p>
                            <p class="link33-name"><?php echo wordLimiter($offers->product_name,3); ?></p>
                            <p class="link33-price">৳<?php echo $offers->price; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </li>
            <li>
                <?php foreach($getProductOffers as $offers ): ?>
                    <div class="holder">
                        <div class="link11"><a href="javascript:void(0)">
        <span>
            <dl>
                <dd onclick="window.location='<?php echo site_url($offers->subdomain_name.'/details/'.$offers->category_slug.'/'.$offers->product_slug)?>'" ><?php echo $offers->shop_name; ?></dd>
                <dd onclick="window.location='<?php echo site_url($offers->location_slug.'/'.$offers->category_slug)?>'" ><?php echo $offers->location_name; ?></dd>
                <dd onclick="window.location='<?php echo site_url($offers->category_slug.'/'.$offers->product_slug)?>'" ><?php echo $offers->product_category_name; ?></dd>
                <dd onclick="window.location='<?php echo site_url('cart/'.$offers->product_slug); ?>" >Add to cart</dd>
            </dl>
        </span>
                                <img alt="<?php echo $offers->product_name; ?>" class="feature-lazy" data-src="<?php echo base_url().'/'.$offers->image_small_path ?>"></a>
                        </div>
                        <div class="link22">
                            <a title="<?php echo $offers->product_name; ?>" href="<?php echo site_url('/details/'.$offers->category_slug.'/'.$offers->product_slug); ?>"></a>
                        </div>
                        <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$offers->category_slug.'/'.$offers->product_slug); ?>'">
                            <p class="link33-discount">৳<?php echo $offers->discount_price; ?></p>
                            <p class="link33-name"><?php echo wordLimiter($offers->product_name,3); ?></p>
                            <p class="link33-price">৳<?php echo $offers->price; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </li>

        </ul>
    </div>
    <div class="clear"></div>
    <div class="buttons">
        <a href="" class="button">More Products</a>
        <br class="clearBoth">
    </div>
    <!-- eof: featured products  -->
</div>
<div class="clear"></div>