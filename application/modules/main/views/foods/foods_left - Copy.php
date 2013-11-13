<div class="box" id="categories" style="width:202px;">
<div class="box-head">Food Categories</div>
<div class="box-body">
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
                              <li><span></span><a href="">Other links</a></li>
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
          <li><a href="">Cement Industry</a><span></span>
            <div>
              <ul>
                <li><span></span><a href="">Sampling Systems</a></li>
                <li><span></span><a href="" class="parent">Pneumatic sample transport</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Crushing</a></li>
                <li><span></span><a href="" class="parent">Pulverizing</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Fusion</a></li>
                <li><span></span><a href="">Pressing</a></li>
                <li><span></span><a href="">Particle size</a></li>
                <li><span></span><a href="" class="parent">Pressing</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">XRF/XFD automation </a></li>
                <li><span></span><a href="">Linear automated systems </a></li>
                <li><span></span><a href="">Mill control </a></li>
                <li><span></span><a href="">Dust Contol waste management</a></li>
              </ul>
            </div>
          </li>
          <li><span></span><a href="" class="parent">Non ferrous </a> 
            <div>
              <ul>
                <li><span></span><a href="">Meteral Samples</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Granualr and powders</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="" class="parent">Mining</a><span></span>
            <div>
              <ul>

                <li><span></span><a href="">Platinum Group metals and Gold</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Iron ore</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Base metals</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Heavy minerals</a>
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="">Uranium</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="">Other links</a></li>
                      <li><span></span><a href="">Other links</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
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
</div>