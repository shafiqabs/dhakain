<?php $this->load->view('layouts/header_admin')?>

<ul class="" id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('product_category'); ?></li> 
</ul>

<div class="clear"></div>   
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('admin/admin_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('admin/admin_layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/image_setting/image_setting_service_add')?>" method="post">
<div class="right-area ">
<div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn" type="reset"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
<fieldset class="sheet">
<legend ><?php echo $title; ?></legend>
<div class="controls_action_button">
<!--  start step-holder -->

    <div id="step-holder">
        <div class="step-no">1</div>
        <div class="step-dark-left"><a href="<?php echo site_url('settings/image_setting/image_setting_service')?>"><?php echo $this->lang->line('image_setting_service_category'); ?></a></div>
        <div class="step-dark-right">&nbsp;</div>
        <div class="step-no-off">2</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_single_service')?>"><?php echo $this->lang->line('image_setting_single_service'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no-off">3</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_service_manage')?>"><?php echo $this->lang->line('image_setting_service'); ?></a></div>
        <div class="step-light-right">&nbsp;</div>
        <div class="step-no-off">5</div>
        <div class="step-light-left"><a href="<?php echo site_url('settings/image_setting/image_setting_service_list')?>"><?php echo $this->lang->line('image_setting_service_list'); ?></a></div>
        <div class="step-light-round">&nbsp;</div>
        <div class="clear"></div>
    </div>

<!--  end step-holder -->
</div>

            <div class="list_title">

                <div class="input_line">
                    <div class="input_title"><?php echo $this->lang->line('image_size_category'); ?></div>
                    <select id="settings_image_size_id" name="settings_image_size_id" style="width:350px;" >
                    <option value="0"><?php echo $this->lang->line('select_image_size'); ?></option>
                    <?php
                        $settings_image_size_id= $this->uri->segment(4,0);
                        $this->db->where(array('image_setting_type'=>2,'image_size_type'=>1));
                        $shop=$this->db->get('settings_image_size');
                        $query=$shop->result();
                        foreach ($query as $reg4 ){
                    ?>
                    <option value="<?php echo $reg4->settings_image_size_id; ?>" <?php if($reg4->settings_image_size_id == $settings_image_size_id ){ ?> selected="selected" <?php }?>  ><?php echo ($reg4->settings_image_name); ?></option>
                     <?php } ?>
                 </select>
                </div>
            </div>
            <div id="loader">
                <?php
                $query=$this->image_setting_service_model->categorylist();
                foreach ( $query->result() as $rows ){
                    $category_id=$this->image_setting_service_model->get_image_size_category($settings_image_size_id,$rows->category_id);
                    ?>
                    <?php $shop_type=(isset($queryup[0]->shop_type))? $queryup[0]->shop_type : set_value('shop_type'); ?>
                    <div class="parent_radio_text">
                        <div class="parent_label">
                           <input title="Check box" name="category_id[]" type="checkbox" class="parent" id="<?php  echo $rows->category_id; ?>" value="<?php  echo $rows->category_id; ?>" <?php if($rows->category_id ==$category_id ){?>  checked="checked" <?php } ?> /><span><?php  echo $rows->category_name; ?></span></div>
                        <div class="clear"></div>
                        <?php
                        $query=$this->image_setting_service_model->categorylist($rows->category_id);
                        foreach ( $query->result() as $rows ){
                            $category_id=$this->image_setting_service_model->get_image_size_category($settings_image_size_id,$rows->category_id);
                            //echo $category_id=$this->settings_model->get_template_category($this->uri->segment(3,0));
                            ?>

                            <div class="radio_text category_text"><input title="Check box" name="category_id[]" type="checkbox" value="<?php  echo $rows->category_id; ?>" <?php if($rows->category_id ==$category_id ){?>  checked="checked" <?php } ?>  class="check-<?php echo $rows->parent_id; ?>" /><span><?php  echo $rows->category_name; ?></span>
                            </div>
                            <?php } ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>

                    <?php } ?>
            </div>
        </fieldset>
    </form>
</div>
</form>
</div>
<div class="clear"></div>
</div>

</td>
</tr>
</tbody>
</table>

<!-- end of sidebar -->
<!-- end of content -->
</div><!-- end of main -->
<?php $this->load->view('layouts/footer_admin'); ?>
<script type="text/javascript">
    $(document).ready(function(){

         $('#settings_image_size_id').change(function(){

		var templateid=$("#settings_image_size_id").val();
		if(templateid ==0){
		return false;
		}
		  $.ajax({
				type: "POST",
				url:"<?php echo site_url('settings/image_setting/image_setting_filter_service')?>",
				data:'id='+templateid,
				cache: false,
				success: function(html){
				$('#loader').html(html);
				}
		   });
		})



        jQuery(".parent").live("change",function(){
                // Setup the click event listener for Home:

            var parentid=$(this).attr('id');
            if(jQuery('#'+parentid).is(':checked') ==true)
            {
                jQuery('.check-'+parentid).attr('checked','checked');

            }else if(jQuery('#'+parentid).is(':checked') == false)
            {
                jQuery('.check-'+parentid).removeAttr('checked');
            }

        })
    });


</script>


    
	