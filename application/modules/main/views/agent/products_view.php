
<style>

    .centerBoxHeading {
        color: #004027;
        font-size: 13px;
        font-weight: bold;
        height: 31px;
        line-height: 16px;
        margin: 0 0 10px;
        padding: 5px 0 4px 9px;
        width: 634px;
    }
    #board-content {
        float: left;
        padding-left: 0px!important;
    }

    .productcarousel .bx-wrapper .bx-viewport {
        border: medium none;
        box-shadow: none;
        height: 335px !important;
        left: 0px!important;
    }
    #board-content ul li .holder {
        display: block;
        float: left;
        height: 150px;
        margin-bottom: 18px;
        margin-left: 3px !important;
        margin-right: 0;
        position: relative;
        width: 125px;
    }
</style>
<script language="javascript">
    $(document).ready(function(){

        $('.productslider').bxSlider({
            speed: 2000,
            pager:true,
            height:650,
            infiniteLoop:false,
            hideControlOnEnd:true

        });
        $('.corner').corner("round 5px");

    });
</script>
<div>

<div class="clear"></div>
<h2 class="centerBoxHeading"><span style="display:inline-block; width:285px;">List of Products</span><span id="loading"></span></h2>
<div id="board-content">
<div id="" class="productcarousel " style="width:643px" >
<ul class="productslider">

<li>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>

</li>
<li>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img alt="<?php echo $products->product_name; ?>" class="feature-lazy" src="<?php echo base_url().'/'.$products->image_small_path ?>">
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach($getAgentProducts as $products ): ?>
        <div class="holder">
            <div class="link11">
                <a href="javascript:void(0)">
                                            <span>
                                                <dl>
                                                    <dd onclick="window.location='<?php echo site_url($products->category_slug.'/'.$products->product_slug)?>'" ><?php echo $products->product_category_name; ?></dd>
                                                    <dd onclick="window.location='<?php echo site_url('cart/'.$products->product_slug); ?>" >Add to cart</dd>
                                                </dl>
                                            </span>
                    <img class="feature-lazy" alt="<?php echo $products->product_name; ?>"  src="<?php echo base_url().'/'.$products->image_small_path ?>"  >
                </a>
            </div>
            <div class="link22">
                <a title="<?php echo $products->product_name; ?>" href="<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>"></a>
            </div>
            <div class="link33" onclick="window.location='<?php echo site_url('/details/'.$products->category_slug.'/'.$products->product_slug); ?>'">
                <p class="link33-discount">৳<?php echo $products->discount_price; ?></p>
                <p class="link33-name"><?php echo wordLimiter($products->product_name,3); ?></p>
                <p class="link33-price">৳<?php echo $products->price; ?></p>
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
</div>

