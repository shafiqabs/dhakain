<div class="top-navigation">
		<ul>
			
			<li class=""><a href="<?php echo site_url('mainmenu/foods')?>">Foods</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title">Type of foods</div>
                    <div class="navigation-inner-center-title">Offer By Shops</div>
                    <div class="navigation-inner-right-center-title">Brand By Food Shops</div>
                    <div class="navigation-inner-right-title">&nbsp;</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('newproduct/foods/24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('selloffer/foods/'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
					<?php 
					$query=$this->main_model->categorylist($product_id=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('categories/foods/'.$rows->catid_label_2)?>"><?php echo $rows->category_name; ?></a></dd>
                    <?php }} else{ ?>
                    <dd><a href="javascript:void(0)" class="coming-soon"><?php echo $this->lang->line('coming_soon');?></a></dd>
                    <?php } ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
					<?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('specialoffer/foods/'.$rows->subdomain_name)?>"><?php echo $this->main_model->break_word($rows->shop_name,4)  ?></a></dd>
                    <?php }} ?>
					</dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
					<?php
					$query=$this->main_model->brand_shop($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('brandshop/foods/'.$rows->subdomain_name)?>"><?php echo $this->main_model->break_word($rows->shop_name,4)  ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="#" class="coming-soon"><img src="http://localhost/admin-ebdshop/uploads/mall/5/advertisment/74148370040.jpg" alt="" /></a></dd>
                    <dd><a href="#" class="coming-soon"><img src="http://localhost/admin-ebdshop/uploads/mall/5/advertisment/96913.jpg" alt="" /></a></dd>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                   <!-- <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>-->
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Home & Furniture</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop by Type</div>
                    <div class="navigation-inner-left-center-title">Home Appliances</div>
                    <div class="navigation-inner-center-title">Furniture</div>
                    <div class="navigation-inner-right-center-title">Offer By Shop</div>
                    <div class="navigation-inner-right-title">Brand Beauty Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
					</div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>

                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <h4>Home Decorative</h4>
                   <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Furniture</h4>
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <h4>Home Decorative</h4>
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Furniture</h4>
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class="selected"><a href="">Mens</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title"> Shop by Product</div>
                    <div class="navigation-inner-center-title"> Accessories </div>
                    <div class="navigation-inner-right-center-title" > Sell Offer</div>
                    <div class="navigation-inner-right-title">Brand Shope</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="#">New In</a></dd>
                    <dd><a href="#">Eid Offer</a></dd>
                    <dd><a href="#">Summer Offer</a></dd>
                    <dd><a href="#">Business Wear</a></dd>
                    <dd><a href="#">Wedding Clothing</a></dd>
                    <dd><a href="#">Choosing Your Jeans</a></dd>
                    <dd><a href="#">Choosing Your T-shirt</a></dd>
                    <dd><a href="#">Choosing Your Punjabi</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Casual Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    <dd><a href="#">T-Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Jeans</a></dd>
                    <dd><a href="#"> Formal Pant</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    </dl>
                     </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Shoes</a></dd>
                    <dd><a href="#">Watches</a></dd>
                    <dd><a href="#">Optics & Sunglasses</a></dd>
                    <dd><a href="#">Bags</a></dd>
                    <dd><a href="#">Jewellery</a></dd>
                    <dd><a href="#">Belts</a></dd>
                    <dd><a href="#">Wallets & Keyrings</a></dd>
                    <dd><a href="#">Grooming</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Womens</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title"> Shop by Product</div>
                    <div class="navigation-inner-center-title"> Accessories </div>
                    <div class="navigation-inner-right-center-title" > Sell Offer</div>
                    <div class="navigation-inner-right-title">Brand Shope</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="#">New In</a></dd>
                    <dd><a href="#">Eid Offer</a></dd>
                    <dd><a href="#">Summer Offer</a></dd>
                    <dd><a href="#">Business Wear</a></dd>
                    <dd><a href="#">Wedding Clothing</a></dd>
                    <dd><a href="#">Choosing Your Jeans</a></dd>
                    <dd><a href="#">Choosing Your T-shirt</a></dd>
                    <dd><a href="#">Choosing Your Punjabi</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Casual Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    <dd><a href="#">T-Shirts</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Jeans</a></dd>
                    <dd><a href="#"> Formal Pant</a></dd>
                    <dd><a href="#">Shorts & Swimwear</a></dd>
                    <dd><a href="#">Sportswear</a></dd>
                    <dd><a href="#">Suits</a></dd>
                    </dl>
                     </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Shoes</a></dd>
                    <dd><a href="#">Watches</a></dd>
                    <dd><a href="#">Optics & Sunglasses</a></dd>
                    <dd><a href="#">Bags</a></dd>
                    <dd><a href="#">Jewellery</a></dd>
                    <dd><a href="#">Belts</a></dd>
                    <dd><a href="#">Wallets & Keyrings</a></dd>
                    <dd><a href="#">Grooming</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="#">Heiglights</a></dd>
                    <dd><a href="#">Cloathing</a></dd>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
			<li class=""><a href="">Baby & Child</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title"> Shop by Product</div>
                    <div class="navigation-inner-center-title"> Accessories </div>
                    <div class="navigation-inner-right-center-title" > Sell Offer</div>
                    <div class="navigation-inner-right-title">Brand Shope</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl> 
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			     <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    
                     </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Beauty</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Heiglights</div>
                    <div class="navigation-inner-left-center-title">Classification of Beauty</div>
                    <div class="navigation-inner-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-center-title">Offer By Shop</div>
                    <div class="navigation-inner-right-title">Brand Beauty Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<h4>Womens's Fragrances</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Womens's Skin Care</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <h4>Men Fragrances</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Men's Skin Care</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Hair Care</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>

                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>

            <li class=""><a href="">Electricals</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Type</div>
                    <div class="navigation-inner-left-center-title">Electricals</div>
                    <div class="navigation-inner-center-title">Lighting</div>
                    <div class="navigation-inner-right-center-title">Offer By Shop</div>
                    <div class="navigation-inner-right-title">Brand Beauty Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Consumer Electronics</a></dd>
                    <dd><a href="#">Mobile Phone & Accessories</a></dd>
                    <dd><a href="#">Computing & Accessories</a></dd>
                    <dd><a href="#">Sound & Vision </a></dd>
                    <dd><a href="#">Household Appliances</a></dd>
                    <dd><a href="#">Small Appliances</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Interior Lighting</a></dd>
                    <dd><a href="#">Exterior Lighting</a></dd>
                    <dd><a href="#">Emergency Lighting</a></dd>
                    <dd><a href="#">Lamps & Tubes</a></dd>
                    <dd><a href="#">Wiring Accessories</a></dd>
                    <dd><a href="#">Transformers & Drivers</a></dd>
                    <dd><a href="#">Protection Accessories</a></dd>
                    <dd><a href="#">Control Accessories</a></dd>
                    </dl>
                    </div>

                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <h4>Electricals</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Lighting</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <h4>Electricals</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Lighting</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li class=""><a href="">Jewellery & Watch</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop by type</div>
                    <div class="navigation-inner-left-center-title">Jewellery</div>
                    <div class="navigation-inner-center-title">Watch</div>
                    <div class="navigation-inner-right-center-title">Optics & Sun Glass</div>
                    <div class="navigation-inner-right-title">Brand Shop</div>

                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Jewellery</a></dd>
                    <dd><a href="#">Gold Jewellery</a></dd>
                    <dd><a href="#">Diamonds</a></dd>
                    <dd><a href="#">Silver Jewellery</a></dd>
                    <dd><a href="#">Baby Jewellery</a></dd>
                    <dd><a href="#">Men's Jewellery</a></dd>
                    <dd><a href="#">Stainless Jewellery</a></dd>
                    <dd><a href="#">Imitation Jewellery</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Mens Watches</a></dd>
                    <dd><a href="#">Women's Watches</a></dd>
                    <dd><a href="#">Baby Watches</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="#">Sunglass</a></dd>
                    <dd><a href="#">Opticals Glass</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <h4>Jewellery</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Watch</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Optics</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>

            <li class=""><a href="">Automobiles</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Type</div>
                    <div class="navigation-inner-left-center-title">Cars</div>
                    <div class="navigation-inner-center-title">Motorcycle</div>
                    <div class="navigation-inner-right-center-title">Accsessories</div>
                    <div class="navigation-inner-right-title">Brand Shop</div>
                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<h4>New Cars </h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    <h4>Used Cars</h4>
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
<li class="" style="display: none"><a href="">Services</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Type</div>
                    <div class="navigation-inner-left-center-title">&nbsp;</div>
                    <div class="navigation-inner-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-title">Brand Shop</div>
                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Hospital & Diagonistic Center</a></dd>
                    <dd><a href="#">Docter Chember</a></dd>
                    <dd><a href="#">Dentel Chember</a></dd>
                    <dd><a href="#">Body Fitness</a></dd>
                    <dd><a href="#">Dry Cleanners</a></dd>
                    <dd><a href="#">Perler</a></dd>
                    <dd><a href="#">Women's Parler</a></dd>
                    <dd><a href="#">Men's Parler</a></dd>
                    <dd><a href="#">Indoor Games</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="#">Real State</a></dd>
                    <dd><a href="#">Comunity Center</a></dd>
                    <dd><a href="#">Conference Center</a></dd>
                    <dd><a href="#">Package & Printing</a></dd>
                    <dd><a href="#">Advertising</a></dd>
                    <dd><a href="#">Shipment & Storage</a></dd>
                    <dd><a href="#">Express Delivery</a></dd>
                    <dd><a href="#">Security Gard</a></dd>
                    <dd><a href="#">Decorater</a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Tiles & Ceramics</a></dd>
                    <dd><a href="#">Sanatary & Bathroom Fitnes</a></dd>
                    <dd><a href="#">Timber & Plywood </a></dd>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                    <dl>
                    <dd><a href="#">Beauty Equipment</a></dd>
                    <dd><a href="#">Dental Apparatus</a></dd>
                    <dd><a href="#">Diagnosis Equipment</a></dd>
                    <dd><a href="#">Disposable Medical Supplies</a></dd>
                    <dd><a href="#">Health Care Appliance</a></dd>
                    <dd><a href="#">Surgical Equipment</a></dd>
                    <dd><a href="#">Fitness Equipment </a></dd>
                    </dl>          
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Brand Shop list</a></dd>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
            <li  class="last-child"><a href="">Shop By Brand</a>
				<ul>
					<li>
					<div class="navigation-inner">
                    <div class="navigation-inner-top">
                    <div class="navigation-inner-left-title">Shop By Brand</div>
                    <div class="navigation-inner-left-center-title">&nbsp;</div>
                    <div class="navigation-inner-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-center-title">&nbsp;</div>
                    <div class="navigation-inner-right-title">&nbsp;</div>
                    </div>
                    <div class="navigation-inner-body">
                    <div class="navigation-inner-left navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-left-center navigation-inner-padding">
        			<dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-center navigation-inner-padding">
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                    </div>
                    <div class="navigation-inner-right-center navigation-inner-padding" >
                         <dl>
                    <dd><a href="<?php echo site_url('new-product-24')?>">New In</a></dd>
                    <?php
					$query=$this->main_model->selloffer_list($cetid_label_1=24);
					if($query ->num_rows()> 0){
					foreach ($query ->result() as $rows){
					?>
                    <dd><a href="<?php echo site_url('sell-offer-'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a></dd>
                    <?php }} ?>
                    </dl>
                              
                    </div>
                    <div class="navigation-inner-right navigation-inner-padding">
                    <dl>
                    <dd><a href="#">Brand Shop list</a></dd>
                    </dl>
                    </div>
                    </div>
                    <div class="li-bottom">
                    <dl>
                    <dd><a href="#">Accessories</a></dd>
                    <dd><a href="#">Special Offer</a></dd>
                    </dl>
                    </div>
                    </div>
                    </li>
				</ul>
			</li>
			
		</ul>
</div>