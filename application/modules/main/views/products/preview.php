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