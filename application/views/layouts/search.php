<style>
#site {
    position: absolute;
    right: 0;
    top: 10px;
}
#site #domain li{ float:left; padding-right:10px; line-height:20px; }
#site #domain li a{ color:#06F}
#site #domain li a:hover{ text-decoration:underline; color:#00F} 
</style>
<div id="navi">
		<div class="top-wrapper">
        <div id="site">
        <ul id="domain">
        <li><a href="<?php echo site_url('dashboard/main'); ?>">main</a></li><li><a href="<?php echo site_url('dashboard/admin'); ?>">admin</a></li><li><a href="<?php echo site_url('dashboard/sales'); ?>">sales</a></li><li><a href="<?php echo site_url('dashboard/buy'); ?>">buy</a></li><li><a href="<?php echo site_url('dashboard/service'); ?>">service</a></li><li><a href="<?php echo site_url('dashboard/wholesaler'); ?>">wholesaler</a></li><li><a href="<?php echo site_url('dashboard/preview'); ?>">preview</a></li><li><a href="<?php echo site_url('dashboard/transaction'); ?>">transaction</a></li><li><a href="<?php echo site_url('dashboard/account'); ?>">account</a></li><li><a href="<?php echo site_url('dashboard/management'); ?>">management</a></li><li><a href="<?php echo site_url('dashboard/chat'); ?>">chat</a></li>
        </ul>
        </div>
        <div class="clear"></div>
       <div id="menu">
    
            <ul id="menu_tabs">
             <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=checkout/shipping"><span class="menu_l"></span><span class="menu_m">Location</span><span class="menu_r"></span></a></li>
                <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=account/account"><span class="menu_l"></span><span class="menu_m">Shopping Mall</span><span class="menu_r"></span></a></li>
                        <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=account/account"><span class="menu_l"></span><span class="menu_m">Wholeseller</span><span class="menu_r"></span></a></li>
                  <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=checkout/shipping"><span class="menu_l"></span><span class="menu_m">BRAND SHOP</span><span class="menu_r"></span></a></li>

                <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=checkout/cart"><span class="menu_l"></span><span class="menu_m">Services Dictory</span><span class="menu_r"></span></a></li>
              
                <li><a href="http://demo.getoscommercetemplates.com/opencart/OC04A00443/index.php?route=information/contact"><span class="menu_l"></span><span class="menu_m">Product Directory</span><span class="menu_r"></span></a></li>
            </ul>
             <div id="filler"></div>
             
        </div>
        
     </div>
		<div class="top-wrapper box4">
		<div class="search-panel">
        <div class="y_search_tab">
   <form class="events-form" method="post" action="" id="events-form1">
	
		<input type="hidden" id="y_search_category_value" name="y_search_category_value" value="1" />
		<div class="y_search_tab_border">
			<div class="y_search_tab_inner">
				<div class="rowElem" style="width:510px!important">
                <input type="text" id="y_search_field" name="y_search_field"     onfocus="if (value == 'Product category , Product, Product code, Product price  etc...') {value =''}" onblur="if (value == '') {value = 'Product category , Product, Product code, Product price  etc...'}" value="Product category , Product, Product code, Product price  etc..." />
                </div>
             <div class="rowElem">
               <select name="category_id" id="category_id">
                <?php 
				$query=$this->settings_model->categorylisting();
				foreach ($query ->result() as $rows){
				?>
                <option value="<?php echo $rows->category_id; ?>"><?php echo $rows->category_name; ?></option>
                <?php } ?>
               </select>
               </div>
     <div id="search-button"><input type="submit" class="button" value="go" />
     <a href="<?php echo site_url('advance-search');?>" id="advance-search">Advance Search</a>
     </div>
     
			</div>
            <div class="y_search_hints">
			<div class="y_search_hints_inner">
				<div id="y_search_hints_result">
					<div id="y_search_hints_result_left"></div>
					<div id="y_search_hints_result_right"></div>
				</div>
			</div>
		</div>
		</div>
        </form>
        </div>
        </div><!-- end of search-panel -->
	</div>
   </div>