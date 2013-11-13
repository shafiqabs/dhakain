
<script type="text/javascript">
$(document).ready(function(){
					
					
		$(".parent").change(function(){
		
			var ckval=$(this).attr('id');
			if($('#'+ckval).attr('checked') == true)
			{
				$('.check-'+ckval).attr('checked','checked');
				
			}else if($('#'+ckval).attr('checked') == false)
			{
				$('.check-'+ckval).removeAttr('checked');
			}
		
		})		
});
</script>
<?php 
			$query=$this->service_template_model->categorylist();
			foreach ( $query->result() as $rows ){
			$category_id=$this->service_template_model->get_template_category($product_template_manage_id,$rows->category_id);
			?>
             <?php $shop_type=(isset($queryup[0]->shop_type))? $queryup[0]->shop_type : set_value('shop_type'); ?>       
            <div class="parent_radio_text">
            <div class="parent_label">

            <input title="Check box" name="category_id[]" type="checkbox" class="parent" id="<?php  echo $rows->category_id; ?>" value="<?php  echo $rows->category_id; ?>" /><span><?php  echo $rows->category_name; ?></span>
            </div>
            <div class="clear"></div>
            <?php
				$query=$this->service_template_model->categorylist($rows->category_id);
				foreach ( $query->result() as $rows ){
				$category_id=$this->service_template_model->get_template_category($product_template_manage_id,$rows->category_id);
				//echo $category_id=$this->settings_model->get_template_category($this->uri->segment(3,0));
			?>

            <div class="radio_text category_text"><input title="Check box" name="category_id[]" type="checkbox" value="<?php  echo $rows->category_id; ?>" <?php if($rows->category_id ==$category_id ){?>  checked="checked" <?php } ?>  class="check-<?php echo $rows->parent_id; ?>" /><span><?php  echo $rows->category_name; ?></span>
            </div>
            <?php } ?>
            <div class="clear"></div>
            </div>
            <div class="clear"></div>
           
            <?php } ?>
