 <script type="text/javascript">
 	$(document).ready(function(){

		
		  $('div.demo-show3> div').hide();  
		  $('div.demo-show3> h5').click(function() {
		
		   $(this).next('div').slideToggle('fast')
		  .siblings('div:visible').slideUp('fast');
		
			 var id=$(this).attr('id');
			//alert(id);
		  $('#minus-'+id).slideToggle();
		  $('#plus-'+id).slideToggle();

         });
  
   })
	$(document).ready(function() {
		$('#tabvmenuleft > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
	});
	
	
	
</script>
<style>
..module{margin-bottom:10px; min-height:195px;}
</style>

 <!--STA: .modbox .mod-latestnews-->
<div class="modbox  mod-latestnews">
<h3 class="mod-title box-slide">All Product Directory</h3>
<div class="module" style="">
<style type="text/css">/**/
</style>
<div id="flyList">
<style>

</style> 
 <ul id="left_menu">
 <?php 
 $this->db->where(array('parent_id'=>0));
 $query=$this->db->get('product_category');
 foreach($query->result() as $rows){
 ?>
 <li class="level1-li sub">
 <a class="level1-a" href=""><?php echo $rows->category_name; ?><!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col3">
 <?php
 $this->db->where('parent_id',$rows->category_id);
 $query_child=$this->db->get('product_category');
 foreach($query_child->result() as $child){
	 
 $this->db->where('parent_id',$child->category_id);
 $query_list=$this->db->get('product_category');	 
 if($query_list->num_rows() > 5){
 ?>
 <div class="menu-sub-list">
 <h4><a href="#"> <?php echo $child->category_name; ?> </a></h4>
 <ul class="menu-list-ul">
 <?php
 $this->db->where('parent_id',$child->category_id);
 $this->db->limit('5');
 $query_list=$this->db->get('product_category');
 foreach($query_list->result() as $list){
 ?>
 <li>
 <a href="#"><?php echo $list->category_name; ?></a>
 </li>
 <?php } ?>
 </ul>
 </div>
 <?php } } ?>
 
 <div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
 <?php } ?>
 
 </ul>
 
 <div id="pad"></div></div>
</div>
	                    </div>
                        <!--END: .modbox .mod-latestnews-->     
                        <!--STA: .modbox .mod-newipoannouncement-->
              	<!----><div class="clear"></div> 
                
                <div class="modbox  mod-latestnews">
                        	<h3 class="mod-title box-slide">Service Directory</h3>
                            <div class="module" style="margin-top:0px;">
<style type="text/css">/**/
</style>
<div id="flyList">
 
 <ul id="left_menu">
 <li class="level1-li sub"><a class="level1-a" href="">Collections<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col3"><div class="listCol"><h5>Dresses</h5><ul><li><a href="">Floral Print</a></li> <li><a href="">Sleeveless</a></li> <li><a href="">Pure Cotton</a></li> <li><a href="">Linen Blend</a></li> <li><a href="">Buttoned</a></li></ul><h5>Coats &amp; Jackets</h5><ul><li><a href="">Silk Blend</a></li> <li><a href="">Cotton Rich</a></li> <li><a href="">Sleeveless</a></li> <li><a href="">Pure Linen</a></li></ul></div><div class="listCol"><h5>Jeans</h5><ul><li><a href="">Flared denim</a></li> <li><a href="">Bootleg</a></li> <li><a href="">Cropped</a></li></ul><h5>Knitwear</h5><ul><li><a href="">Cardigans</a></li> <li><a href="">Bolero</a></li> <li><a href="">Plain long sleeve</a></li></ul><h5>Socks</h5><ul><li><a href="">Plain Cotton</a></li> <li><a href="">Trainer</a></li> <li><a href="">Sports</a></li></ul></div><div class="listCol"><h5>Shirts &amp; Blouses</h5><ul><li><a href="">Pure Cotton</a></li> <li><a href="">Pure Silk</a></li> <li><a href="">Floral</a></li></ul><h5>Skirts</h5><ul><li><a href="">Pleated</a></li> <li><a href="">Belted</a></li> <li><a href="">Panelled</a></li> <li><a href="">Pencil</a></li> <li><a href="">Flared</a></li></ul></div><div class="bottomLine"><p>Visit our <a href="">online store</a> for more bargains and special offers . . .</p><p><a href="">Free delivery</a> on orders over &#163;100.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="level1-li sub"><a class="level1-a" href="">Mail Order<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col2"><div class="listCol"><h5>Electronics</h5><ul><li><a href="">Televisions</a></li> <li><a href="">DVD Players</a></li> <li><a href="">Mobiles</a></li> <li><a href="">Games Consoles</a></li></ul><h5>Wine</h5><ul><li><a href="">Red</a></li> <li><a href="">White</a></li> <li><a href="">Rose</a></li> <li><a href="">Sparkling</a></li></ul></div><div class="listCol"><h5>Furniture</h5><ul><li><a href="">Garden furniture</a></li> <li><a href="">Sofas</a></li> <li><a href="">Dining chairs</a></li> <li><a href="">Beds</a></li></ul></div><div class="bottomLine"><p>Special offer on all <a href="">Microwaves</a> - 50% OFF!</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="level1-li sub"><a class="level1-a" href="">Special Offers<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col1"><div class="listCol"><h5>Meanswear</h5><ul><li><a href="">Half price shirts</a></li> <li><a href="">30% off Suits</a></li> <li><a href="">Half price shoes</a></li> <li><a href="">2 for 1 Shirts</a></li></ul><h5>Kidswear</h5><ul><li><a href="">Half price shirts</a></li> <li><a href="">2 for 1 T shirts</a></li> <li><a href="">1/3 off trainers</a></li></ul></div><div class="bottomLine"><p>More <a href="">offers</a> online.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li><li class="level1-li sub"><a class="level1-a" href="">Accessories<!--[if gte IE 7]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--><div class="listHolder col3 left1"><div class="listCol"><h5>Scarves</h5><ul><li><a href="">Silk</a></li> <li><a href="">Chiffon</a></li> <li><a href="">Crinkle</a></li> <li><a href="">Butterfly</a></li> <li><a href="">Tassel</a></li></ul><h5>Belts</h5><ul><li><a href="">Leather</a></li> <li><a href="">Elasticated</a></li> <li><a href="">Reversible</a></li></ul></div><div class="listCol"><h5>Necklaces</h5><ul><li><a href="">Pendant</a></li> <li><a href="">Pearl</a></li> <li><a href="">Drop</a></li></ul><h5>Earrings</h5><ul><li><a href="">Party</a></li> <li><a href="">Silver</a></li> <li><a href="">Gold</a></li> <li><a href="">Stud</a></li></ul><h5>Rings</h5><ul><li><a href="">Diamond</a></li> <li><a href="">Pearl</a></li> <li><a href="">Emerald</a></li></ul></div><div class="listCol"><h5>Handbags</h5><ul><li><a href="">Shopper</a></li> <li><a href="">Tote</a></li> <li><a href="">Shoulder</a></li> <li><a href="">Beach</a></li> <li><a href="">Leather</a></li> <li><a href="">Clutch</a></li> <li><a href="">Mock Crocodile</a></li></ul></div><div class="bottomLine"><p>Why not treat yourself to a <a href="">makeover</a> in our cosmetic department.</p></div></div><!--[if lte IE 6]></td></tr></table></a><![endif]--></li></ul><div id="pad"></div></div>
</div>
	                    </div>
                                      	<!----><div class="clear"></div>                   	
<div class="modbox  mod-latestnews">
<h3 class="mod-title box-slide">Brand & Mall</h3>
<div class="module">

<div id="tabvmenuleft" >

            <ul class="tabmenu module-title">
                <li class="item" ><a href="#1">Brand</a></li>
                <li class="item" ><a href="#2">Supplier</a></li>
                <li class="item" ><a href="#3">Mall</a></li>
            </ul>

         <div id="1">
               <ul id="leftCats">
                <li>
                <ul class="leftSubCat">
                <li><a href="javascript:void(0)">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="javascript:void(0)">Mobile &#038; Accessories</a></span> 
                </li>
                <li>
                <ul class="leftSubCat">
                <li><a href="javascript:void(0)">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="javascript:void(0)">Fast food & Chines</a></span> 
                </li>
				</ul>
          
            </div><!--/popular-->
            <div id="2">
               <ul id="leftCats">
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
                </li>
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Fast food & Chines</a></span> 
                </li>
				</ul>
          
            </div><!--/popular-->
            <div id="3">
 				<ul id="leftCats">
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
                </li>
                <li>
                <ul class="leftSubCat">
                <li><a href="#">Mobile Phones &#038; Accessories</a></li>
                <li><a>Hospital & Diogonestic</a></li>
                <li><a>Police station</a></li>
                <li><a>Fast food & Chines</a></li>
                </ul>
                <span class="leftCat"><a href="#">Fast food & Chines</a></span> 
                </li>
				</ul>
          
            </div><!--/popular-->
        </div>
</div>
	                    </div>
                                    	<!----><div class="clear"></div> 
                        
                        <!--END: .modbox .mod-latestnews-->     
                        <!--STA: .modbox .mod-newipoannouncement-->
                    	<div class="modbox  mod-newipoannouncement">
                            <h3 class="mod-title box-slide">LOCATIONS</h3>
                            <div class="module">
<div class="clear"></div>
<div class="demo-show3"  >
<h5 class="location_link_title" id=1 >
Dhanmondi</h5>
<div class="sub_link">
<ul id="leftCats">
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Mobile Phones &#038; Accessories</a></span> 
</li>

</ul>
</div>
<h5 class="location_link_title" id=1 >
Uttara</h5>
<div class="sub_link">
<ul id="leftCats">
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Hospital & Diogonestic</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Police station</a></span> 
</li>
<li>
<ul class="leftSubCat">
<li><a href="#">Mobile Phones &#038; Accessories</a></li>
<li><a>Hospital & Diogonestic</a></li>
<li><a>Police station</a></li>
<li><a>Fast food & Chines</a></li>
</ul>
<span class="leftCat"><a href="#">Fast food & Chines</a></span> 
</li>

</ul>
</div>

</div>
</div>
<div class="clear"></div> 
</div>
<!----><div class="clear"></div> 
                        <div class="modbox  mod-latestnews">
                        	<h3 class="mod-title box-slide">Service Directory</h3>
                        
</div>
<div class="clear"></div>  
    
