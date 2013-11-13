<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/20/13
 * Time: 11:01 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<script language="JavaScript">
    $(document).ready(function(){
        $('.image_box').hover(function(){
            $(this).children('.description').stop().fadeTo(200, 0.8);
        },function(){
            $(this).children('.description').stop().fadeTo(200, 0);
        });
    });
</script>
<div class="centerBoxHeading" ><span style="font-size: 18px;
    margin-bottom: 1px;
    text-align: left;
    width: 100%;display: block "  >Our Sponsored</span></div>
<ul>
    <?php foreach($getSponsoredStore as $shop): ?>
        <li class="image_box"><img src="<?php echo base_url()?>uploads/sponser/1-tmmanufacturers.jpg" />
            <a href="<?php echo ($shop->domain_name !='') ? 'http://'.$shop->domain_name :'/'.$shop->subdomain_name;  ?>" <?php if($shop->domain_name){ echo "target='_blank'"; } ?>  title="Click for More" class="description">
                <strong><?php echo wordLimiter($shop->shop_name,4); ?></strong><span><?php echo $shop->location_name; ?></span>
                <div class="clear"></div>
                <?php if($shop->domain_name){ ?><p onclick="window.location='<?php echo "http://:".$shop->domain_name; ?>'" class="sponsored-domain">http://<?php echo wordLimiter($shop->domain_name,4); ?></p><?php } ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<div class="clear"></div>