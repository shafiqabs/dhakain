<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs">
  <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
  <li><a href="<?php echo site_url('seller');?>" ><?php echo $this->lang->line('seller'); ?></a></li>
  <li><?php echo $this->shop_model->shop_name($this->uri->segment(4,0)); ?>'info</li>
    <li id="breadcrumb-right"><button class="btn  btn-info" id="add_shop" data-toggle="modal" href="#myModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_new_shop'); ?></button></li>
</ul>

<div class="clear"></div>   
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('seller/seller_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('seller/seller_layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('seller/shop/update_contact/'.$this->uri->segment(4,0))?>" method="post">
<div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('seller/seller_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
    <div class="info_message">
    <h4 class="alert-heading" style="text-align: center"><?php echo $this->shop_model->shop_name($this->uri->segment(4,0)); ?></h4>
     </div>
    <?php if(validation_errors()){?>
    <div class="alert-error">
    <a class="close" data-dismiss="alert">×</a>
    <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
   	<div class="valiade_msg"><?php echo validation_errors(); ?></div>
	</div>
    <?php }?>
 <fieldset class="sheet">
         
<div class="clear"></div>
<legend><?php echo $title; ?></legend>
<?php $this->load->view('seller/seller_layouts/shop_breadcrumbs'); ?>
<div class="clear"></div>

           <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('address'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('address'); ?>" class="validate[required] span3" name="address" id="shop_no" value="<?php echo(isset($queryup[0]->address))? $queryup[0]->address : set_value('address'); ?>" >
            </div>
          </div>
           <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('website'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('domain_name'); ?>" class="validate[required] span3" name="domain_name" id="website" value="<?php echo(isset($queryup[0]->domain_name))? $queryup[0]->domain_name : set_value('domain_name'); ?>" >
            </div>
          </div>
                <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('cell_phone'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('cell_phone'); ?>" class="validate[required] span3" name="cell_phone" id="cell_phone" value="<?php echo(isset($queryup[0]->cell_phone))? $queryup[0]->cell_phone : set_value('cell_phone'); ?>" >
            </div>
          </div>
           <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('business_phone'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('business_phone'); ?>" class="validate[required] span3" name="business_phone" id="business_phone" value="<?php echo(isset($queryup[0]->business_phone))? $queryup[0]->business_phone : set_value('business_phone'); ?>" >
            </div>
          </div>
                <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('fax'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('fax'); ?>" class="validate[required] span3" name="fax" id="fax" value="<?php echo(isset($queryup[0]->fax))? $queryup[0]->fax : set_value('fax'); ?>" >
            </div>
          </div>
           <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('city'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('city'); ?>" class="validate[required] span3" name="city" id="city" value="<?php echo(isset($queryup[0]->city))? $queryup[0]->city : set_value('city'); ?>" >
            </div>
          </div>
                <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('postal_code'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('postal_code'); ?>" class="validate[required] span3" name="postal_code" id="postal_code" value="<?php echo(isset($queryup[0]->postal_code))? $queryup[0]->postal_code : set_value('postal_code'); ?>" >
            </div>
          </div>
           <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('district'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('district'); ?>" class="validate[required] span3" name="district" id="district" value="<?php echo(isset($queryup[0]->district))? $queryup[0]->district : set_value('district'); ?>" >
            </div>
          </div>
      <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('disclaimer'); ?></label>
            <div class="controls">
                <textarea rows="4" cols="" id="textarea" class="input-xlarge" name="disclaimer" id="disclaimer"><?php echo(isset($queryup[0]->district))? $queryup[0]->district : set_value('district'); ?></textarea>

            </div>
          </div>

</fieldset>

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
<script language="javascript" type="text/javascript">
$(document).ready(function(){

    $("#shopping_status").change(function(){

		if(jQuery('#shopping_status').is(':checked') ==true){

   			$('#shoppingmall').slideDown();

		}else if(jQuery('#shopping_status').is(':checked') ==false){

			$('#shoppingmall').hide('slow');
		}
	});
});
</script>