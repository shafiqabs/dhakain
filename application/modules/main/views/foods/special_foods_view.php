<?php $this->load->view('layouts/header')?>
<div class="clear"></div>                        
<div class="">
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td id="column-left" style="width:202px;">
<?php $this->load->view('foods/foods_left')?>
</td>
<td id="column-center" valign="top" >

<div class="clear"></div>  

<div class="column-center-padding" style="padding-left:9px; width:763px;">
                    
<div id="indexDefault" class="centerColumn">
<!-- bof: featured products  -->
<div id="featuredProducts" class="centerBoxWrapper">

      <div class="clear"></div>
      <div id="plist1">
<style>
#indexDefault .centerBoxWrapper .board-head{width:760px;}
.board-head .head-inner {
    margin-left: 23px;
    margin-top: 8px;
    overflow: hidden;
    width: 718px;
}
</style>
<div class="board-head">
  <div class="head-inner">
      <div class="group" style="">
		<div class="group-content">
	<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img17.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img18.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img19.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img20.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img21.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img22.gif" alt="" /></a>
                                                <a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img20.gif" alt="" /></a>
												<a href="" class="activatePopup" rel="movies"><img src="http://localhost/admin-ebdshop/uploads/shop/1/logo/img21.gif" alt="" /></a>
											                                      
											</div><!-- end of group-content -->
										</div>
                                            </div>
										</div><!-- end of post-head -->
      
<div class="clear"></div>

<style>





</style>

<script language="javascript">
$(document).ready(function() {
	
	
	$('.quickLook1').hover (function() {
	var id=$(this).attr('id');
	$('#select-preview-'+id).addClass('select-div-hover');
	$('#quick-'+id).addClass('div-hover');
	}, function() {
	$('.quickPreview').removeClass('div-hover');
	$('.aquick').removeClass('select-div-hover');
	});
	
	$('.quickPreview').hover (function(){
	var id=$(this).attr('lang');
	$('#select-preview-'+id).addClass('select-div-hover');
	$('#quick-'+id).removeClass('div-hover');
	$('#quick-'+id).addClass('hover');
	}, function() {
	$('.quickPreview').removeClass('hover');
	$('.aquick').removeClass('select-div-hover');
	});
	

});
</script>
<h2 class="centerBoxHeading" style="width:749px;"><?php echo $this->settings_model->product_category_name($category_id) ?></h2>
<div id="board-content">

             
             <div class="refineByBox">
             <div class="refineBySearch" id="refineBySearchBox">
             
             <div class="cateBox" id="propertiesBox">
             
              <?php
			  $sql=$this->settings_model->locationlist($category_id);
			  foreach ($sql->result() as $loca ){
			  ?>
                            
             <div class="blockA transList cateList ">
             <div class="title"><?php echo $loca->settings_name; ?></div>
             <div class="propertyBox" id="propertyBox2">
              <?php
				$sql1=$this->settings_model->shop_details_list($category_id,$loca->location_id);
			 	foreach ($sql1->result() as $shop ){
			  ?>
			           
             <div class="aquick" id="select-preview-<?php echo $shop->agent_uid; ?>" >
             <a rel="nofollow" dot="" class="qrPCatp quickLook1"  id="<?php echo $shop->agent_uid; ?>"  href="<?php echo site_url($shop->subdomain_name)?>"><?php echo $shop->shop_name; ?><span class="num">(556)</span> </a> 
             <div  class="quickPreview" id="quick-<?php echo $shop->agent_uid; ?>" lang="<?php echo $shop->agent_uid; ?>" >
             <dl>
             <dd id="prev-tile"><?php echo $shop->shop_name; ?></dd>
             <dd><span>Location:<?php echo $shop->settings_name; ?></span> <a href="javascript:void(0)" rel="<?php $shop->subdomain_name; ?>" id="map">Map</a><a href="javascript:void(0)" id="direction">Direction</a></dd>
             <dd style="height:auto;">
			 <?php 
			 $sql2=$this->settings_model->shop_under_listproduct($category_id,$shop->agent_uid);
			 $i=0;
			 foreach($sql2->result() as $product_cat)
			 {
			 if($i ==3){
			 echo "<div class='clear'></div>";
			 $i=0;
			 }
			?>
		     <a class="typelist" href="<?php echo site_url($shop->subdomain_name.'/categories/'.$product_cat->catid_label_3)?>"><?php echo $product_cat->category_name.'('.($product_cat->counval).')'; ?></a>
			 <?php
             $i++; }
			 ?>
             <?php 
			 $sql3=$this->settings_model->shop_under_listproduct_custom($category_id,$shop->agent_uid);
			 foreach($sql3->result() as $product_cat)
			 {
		    ?>
		     <a class="typelist" href="<?php echo site_url($shop->subdomain_name.'/categories/'.$product_cat->catid_label_3)?>"><?php echo $product_cat->category_name.'('.($product_cat->counval).')'; ?></a>
			 <?php
             }
			 ?>
             </dd>
			 <?php 
			 $sql3=$this->settings_model->list_of_branch($shop->agent_uid);
			 $sql3_count=$sql3->num_rows();
			 if($shop->brand_status ==1 && $sql3->num_rows() > 0 ){ ?>
			 <dd>Our Branch(<?php echo $sql3_count; ?>)
              <?php 
			 $sql3=$this->settings_model->list_of_branch($shop->agent_uid);
			 $i=0;
			 foreach($sql3->result() as $branch)
			 {
			 if($i ==3){
			 echo "<div class='clear'></div>";
			 $i=0;
			 }
			?>
		     <a class="typelist" title="<?php echo $branch->address; ?>" href="<?php echo site_url($shop->subdomain_name.'/branches')?>"><?php echo $this->settings_model->settings_name($branch->location_id) ?></a>
			 <?php
             $i++; }
			 ?>
             </dd>
			 <?php } ?>
             <?php if($shop->address){ ?>
             <dd><img src="<?php echo base_url()?>assets/images/home.png" class="image-position" /><?php echo $shop->address; ?></dd><?php } ?>
             <?php if($shop->business_phone){?><dd><img src="<?php echo base_url()?>assets/images/tel_icon.gif" class="image-position"  /><?php echo $shop->business_phone; ?></dd>
			 <?php } ?>
             <?php if($shop->domain_name){ ?>
             <dd><img src="<?php echo base_url()?>assets/images/location.jpg" class="image-position" /><a class="urllink" href="http://<?php echo $shop->domain_name; ?>"><?php echo "http://".$shop->domain_name; ?></a></dd>
             <?php }else{ ?>
             <dd><img src="<?php echo base_url()?>assets/images/location.jpg" class="image-position" /><a class="urllink" href="http://ebdshop.com/<?php echo $shop->subdomain_name; ?>"><?php echo "http://ebdshop.com/".$shop->subdomain_name; ?></a></dd>
			 <?php } ?>
             <?php if($shop->shopping_mall_name){ ?> <dd><?php echo "Shopping Mall:".$shop->shopping_mall_name; ?></dd> <?php } ?>
             <dd><?php if($shop->shop_no){ echo "Shop no:".$shop->shop_no; }  if($shop->lavel){ echo ",".$this->settings_model->settings_name($shop->lavel); } ?></dd>
             <dd><a href="javascript:void(0)" id="virtual_tour">Virtual Tour</a><a href="<?php echo site_url($shop->subdomain_name)?>">More Information</a></dd>
             </dl>
             </div>
             </div>
             <?php } ?>
             </div>
             <div class="clear"></div>
             </div>
             <div class="hrline "></div>
             
             <?php } ?>

</div>        
</div>
</div>

						
<div class="clear"></div>

<!-- eof: featured products  -->
</div>                    
</div> 
  
   
  
  
       

<div class="clear"></div>
<!--eof content_center-->
    
</div>

</div>

</div>
</td>

</tr>
</table>
<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->
<?php $this->load->view('layouts/footer')?>