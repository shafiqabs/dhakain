<div class="box" id="categories" style="width:202px;">
<div class="box-head box-head-biolet">Heiglights</div>
<div class="box-body">
<div class="treeMenu">
<ul>
   <li><a class="parent" href="<?php echo site_url('newproduct/foods/24')?>">New In</a><span></span>
            <div>
              <ul>
               <?php 
			   $query=$this->settings_model->categorylist($category_id=24);
			   if($query ->num_rows()> 0){
			   foreach ($query ->result() as $rows){
			   ?>
                <li><span></span><a href="<?php echo site_url('categories/foods/'.$rows->catid_label_2)?>" class="parent" ><?php echo $rows->category_name; ?></a>
                 <div>
                    <ul>
                     <?php
				 		$sql1=$this->settings_model->sub_categorylist($rows->catid_label_2);
				 		foreach ($sql1->result() as $rows1 ){
					 ?>
                      <li><span></span><a href="<?php echo site_url('subcategory/foods/'.$rows1->catid_label_3)?>"><?php echo $rows1->category_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                
                </li>
                <?php }} ?>
              </ul>
            </div>
   </li>
<?php
$query=$this->settings_model->selloffer_list($catid_label_1=24);
if($query ->num_rows()> 0){
foreach ($query ->result() as $rows){
?>
  <li><a href="<?php echo site_url('selloffer/foods/'.$rows->sell_offer_id)?>"><?php echo $rows->offer_title; ?></a><span></span>
        <div>
              <ul>
                <?php
				 $query=$this->settings_model->selloffer_category_list($category_id=24,$rows->sell_offer_id);
				 foreach ($query->result() as $rows1 ){
				?>
                <li><span></span><a href="<?php echo site_url('categories/foods/'.$rows1->catid_label_2)?>" class="parent"><?php echo $rows1->category_name; ?></a>
                  <?php 
					 $sql1=$this->settings_model->selloffer_subcategory_list($rows1->catid_label_2,$rows->sell_offer_id);
					 if($sql1 -> num_rows() >0){
					 ?>
                  <div>
                    <ul>
                     <?php
				 		$sql1=$this->settings_model->selloffer_subcategory_list($rows1->catid_label_2,$rows->sell_offer_id);
				 		foreach ($sql1->result() as $rows2 ){
					 ?>
                     <li><span></span><a href="<?php echo site_url('subcategory/foods/'.$rows2->catid_label_3)?>"><?php echo $rows2->category_name; ?></a> 			<?php 
					 $sql2=$this->settings_model->selloffer_subsubcategory_list($rows2->catid_label_3,$rows->sell_offer_id);
					 if($sql2 -> num_rows() >0){
					 ?>	
                     <div>
                        <ul>
                        <?php
				 		$sql2=$this->settings_model->selloffer_subsubcategory_list($rows2->catid_label_3,$rows->sell_offer_id);
				 		foreach ($sql2->result() as $rows3 ){
					 	?>
                 				<li><span></span><a href="<?php echo site_url('subsubcategory/foods/'.$rows3->catid_label_4)?>"><?php echo $rows3->category_name; ?></a></li>
								<?php } ?>
                    		</ul>
                            </div>
                            <?php } ?>
          
                       </li>
                      <?php } ?>
                    </ul>
                  </div>
                  <?php } ?>
                </li>
                <?php } ?>
               </ul>
        </div>
  </li>
<?php }} ?>
</ul>
</div>
<div style="clear:both"></div>
</div>
<div class="box-head">Categories of Foods</div>
<div class="box-body">
<div class="treeMenu">
       <ul>
       <?php 
	   $query=$this->settings_model->categorylist($product_id=24);
	   if($query ->num_rows()> 0){
	   foreach ($query ->result() as $rows){
	   ?>
      <li><a href="<?php echo site_url('categories/foods/'.$rows->catid_label_2)?>" class="parent" ><?php echo $rows->category_name; ?></a><span></span>
               <?php 
                $sql=$this->settings_model->sub_categorylist($rows->catid_label_2);
			   if($sql ->num_rows()> 0){
               ?>
              <div>
              <ul>
                <?php
				 $sql=$this->settings_model->sub_categorylist($rows->catid_label_2);
				 foreach ($sql->result() as $subcategories ){
				?>
                <li><span></span><a href="<?php echo site_url('categories/'.$subcategories->catid_label_3)?>" class="parent"><?php echo $subcategories->category_name; ?></a>
                 <?php 
                 $sql=$this->settings_model->sub_under_subcategorylist($subcategories->catid_label_3);
			     if($sql ->num_rows()> 0){
                 ?>
                  <div>
                    <ul>
                   
                     <?php
				 		 $sql=$this->settings_model->sub_under_subcategorylist($subcategories->catid_label_3);
				 		foreach ($sql->result() as $sub_subcategories ){
					 ?>
			
                      <li><span></span><a href="<?php echo site_url('categories/'.$sub_subcategories->catid_label_4)?>"><?php echo $sub_subcategories->category_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                  <?php } ?>
                </li>
                <?php } ?>
               </ul>
            </div>
            <?php } ?>
          </li>
          <?php }} ?>
   </ul>
</div>
<div style="clear:both"></div>
</div>
<div class="box-head">Location of Foods</div>
<div class="box-body">
<div class="treeMenu">
       <ul>
       <?php 
	   $query=$this->settings_model->locationlist($catid_label_1=24);
	   if($query ->num_rows()> 0){
	    foreach ($query->result() as $loca ){
	   ?>
      <li><a href="<?php echo site_url('location/foods/'.$loca->location_id)?>" class="parent" ><?php echo $loca->settings_name; ?></a><span></span>
             
              <div>
              <ul>
                <?php
				 $sql=$this->settings_model->location_under_categorylist($catid_label_1=24,$loca->location_id);
				 foreach ($sql->result() as $rows ){
				?>
                <li><span></span><a href="<?php echo site_url('location/'.$rows->category_id.'/'.$loca->location_id)?>" class="parent"><?php echo $rows->category_name; ?></a>
                  <div>
                    <ul>
                   
                     <?php
				 		$sql1=$this->settings_model->shoplist($rows->category_id,$loca->location_id);
				 		foreach ($sql1->result() as $shop ){
					 ?>
			
                      <li><span></span><a href="<?php echo site_url($shop->subdomain_name)?>"><?php echo $shop->shop_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </li>
                <?php } ?>
               </ul>
            </div>
          </li>
          <?php }} ?>
   </ul>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
<div class="box-head box-head-biolet">Brand Food Shop</div>
<div class="box-body box-body-biolet">
<div class="treeMenu">
        <ul>
       <?php 
	   $query=$this->settings_model->categorylist($product_id=24);
	   if($query ->num_rows()> 0){
	   foreach ($query ->result() as $rows){
	   ?>
      <li><a href="<?php echo site_url('categories/foods/'.$rows->catid_label_2)?>" class="parent" ><?php echo $rows->category_name; ?></a><span></span>
            <div>
              <ul>
                <?php
				 $sql=$this->settings_model->locationlist($rows->catid_label_2);
				 foreach ($sql->result() as $loca ){
				?>
                <li><span></span><a href="<?php echo site_url('location/'.$rows->catid_label_2.'/'.$loca->location_id)?>" class="parent"><?php echo $loca->settings_name; ?></a>
                  <div>
                    <ul>
                   
                     <?php
				 		$sql1=$this->settings_model->shoplist($rows->catid_label_2,$loca->location_id);
				 		foreach ($sql1->result() as $shop ){
					 ?>
			
                      <li><span></span><a href="<?php echo site_url($shop->subdomain_name)?>"><?php echo $shop->shop_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </li>
                <?php } ?>
               </ul>
            </div>
          </li>
          <?php }} ?>
   </ul>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
<div class="box-head">Food Sppliers</div>
<div class="box-body">
<div class="treeMenu">
        <ul>
       <?php 
	   $query=$this->settings_model->categorylist($product_id=24);
	   if($query ->num_rows()> 0){
	   foreach ($query ->result() as $rows){
	   ?>
      <li><a href="<?php echo site_url('categories/'.$rows->catid_label_2)?>" class="parent" ><?php echo $rows->category_name; ?></a><span></span>
            <div>
              <ul>
                <?php
				 $sql=$this->settings_model->locationlist($rows->catid_label_2);
				 foreach ($sql->result() as $loca ){
				?>
                <li><span></span><a href="<?php echo site_url('location/'.$rows->catid_label_2.'/'.$loca->location_id)?>" class="parent"><?php echo $loca->settings_name; ?></a>
                  <div>
                    <ul>
                   
                     <?php
				 		$sql1=$this->settings_model->shoplist($rows->catid_label_2,$loca->location_id);
				 		foreach ($sql1->result() as $shop ){
					 ?>
			
                      <li><span></span><a href="<?php echo site_url($shop->subdomain_name)?>"><?php echo $shop->shop_name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </li>
                <?php } ?>
               </ul>
            </div>
          </li>
          <?php }} ?>
   </ul>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
<div class="box-head box-head-biolet">Brand Food Shop</div>
<div class="box-body box-body-biolet">
<div class="treeMenu">
        <ul>
          <li><a href="" class="parent">Steel Industray</a><span></span>
            <div>
              <ul>
                <li><span></span><a href="" class="parent">Pneumatic sample transport</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a>
                      	<div>
                            <ul>
                              <li><span></span><a href="">Other links</a>
                                  	<div>
                                    <ul>
                                    <li><span></span><a href="">Other links -sub-1</a></li>
                                    <li><span></span><a href="">Other links -sub-2</a></li>
                                    <li><span></span><a href="">Other links -sub-3</a></li>
                                    </ul>
                            		</div>
                              </li>
                              
                              <li><span></span><a href="">Other links</a></li>
                            </ul>
                          </div>
                      </li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Iron and Steel sample</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Slag samples</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Radio Activity Measurement</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="" class="parent">Raw Materials testing</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Fully automated robotic laboratories</a></li>
              </ul>
            </div>
          </li>
                 
          
        </ul>
</div>
<div style="clear:both"></div>
</div>

</div>