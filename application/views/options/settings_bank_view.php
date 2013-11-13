<?php $this->load->view('layouts/header_admin')?>
<ul id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('product_category'); ?></li>
</ul>

<div class="clear"></div>
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view($this->uri->segment(1,NULL).'/'.$this->uri->segment(1,NULL).'_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('global_layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_payment_method_add/'.$this->uri->segment(4,0))?>" method="post">
   <div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('global_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
    </div>
    <div class="info_message">
    <a class="close" data-dismiss="alert">×</a>
    <h4 class="alert-heading"><?php echo $this->lang->line('instruction'); ?></h4>
   	<ul>
    <li>Demo with jQuery You can put anything you</li>
    </ul>
    </div>
    <?php if(validation_errors()){?>
    <div class="alert-error">
    <a class="close" data-dismiss="alert">×</a>
    <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
   	<div class="valiade_msg"><?php echo validation_errors(); ?></div>
	</div>
    <?php }?>
 <fieldset class="sheet">
 <div class="controls_action_button">
   <!--  start step-holder -->
   <div id="step-holder">
     <div class="step-no-off">1</div>
     <div class="step-light-left"><a href="<?php echo site_url('seller/admin_options/admin_options_view/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('admin_options'); ?></a></div>
     <div class="step-light-right">&nbsp;</div>
     <div class="step-no-off">2</div>
     <div class="step-light-left"><a href="<?php echo site_url('seller/admin_options/settings_general_option/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('settings_general_option'); ?></a></div>
     <div class="step-light-right">&nbsp;</div>
     <div class="step-no">3</div>
     <div class="step-dark-left"><a href="<?php echo site_url('seller/admin_options/settings_bank/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('settings_bank'); ?></a></div>
     <div class="step-dark-round">&nbsp;</div>
     <div class="clear"></div>
   </div>
   <!--  end step-holder -->
 </div>
 <div class="clear"></div>
<legend><?php echo $title; ?></legend>
<?php $agent_uid=$this->uri->segment(4,0); ?>
<div class="clear"></div>
<div class="content-inner-box">
<table width="100%" cellspacing="1" cellpadding="2">
  <tbody><tr>
    <td nowrap="nowrap"><strong style="display: inline-block; line-height: 27px; padding-right: 15px;">Use this payment method for orders with zero total cost.</strong></td>
    <td width="100%" align="center">
      <select style="width: 100%;" name="force_offline_paymentid">
        <option value="0"></option>
        <option value="2">Bank Payment Ordering</option>
      </select>
    </td>
    <td nowrap="nowrap">
</td>
    <td nowrap="nowrap">
     <table cellspacing="0" class="SimpleButton"><tbody><tr><td><a style="margin-left: 20px;" class="btn btn-info btn-primary" href="<?php echo site_url('seller/admin_options/settings_bank/'.$agent_uid)?>"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('set'); ?></a></td></tr></tbody></table>
    </td>
  </tr>
  </tbody>
</table>
<br/>
<table width="100%" cellspacing="1" cellpadding="5">

<tbody>

<tr>
  <td colspan="4">
    <div style="line-height: 30px; float: left;"><a class="checkin" href="javascript:">Check all</a> / <a class="checkin" href="javascript:">Uncheck all</a></div>
    <div style="line-height: 30px; float: right;"><a class="newrows" href="javascript:">Add New Method</a></div>
  </td>
</tr>
<tr class="TableHead">
  <th>&nbsp;</th>
  <th width="35%">Methods</th>
  <th width="30%" nowrap="nowrap">Special instructions</th>
  <th width="35%">Membership</th>
</tr>
<?php
if($queryup ->num_rows() > 0 ){
foreach($queryup->result() as $rows):
?>
<tr class="TableSubHeadPayment2 addrow">
  <input type='hidden' name="payment_method_id[]" value="<?php echo (isset($rows->payment_method_id))? $rows->payment_method_id : set_value('payment_method_id'); ?>">
  <td valign="top">
  <?php $active=(isset($rows->active))? $rows->active : set_value('active'); ?>
  <input type="checkbox" <?php if($active == 1 ){?>  checked="checked" <?php } ?> value=1 name="active[]" class="check">
  </td>
 <td valign="top">
   <input type="text" style="width: 95%;" value="<?php echo (isset($rows->payment_method))? $rows->payment_method : set_value('payment_method'); ?>" name="payment_method[]" size="50">
    <br>
    <table cellspacing="0" cellpadding="1">
      <tbody><tr>
        <td class="FormButton">Extra charge:</td>
        <td><input type="text" value="<?php echo (isset($rows->surcharge))? $rows->surcharge : set_value('surcharge'); ?>" name="surcharge[]" size="8"></td>
        <td>

          <select name="surcharge_type[]">
              <?php
              $surcharge_type =(isset($rows->surcharge_type ))? $rows->surcharge_type  : set_value('surcharge_type');
              $prov_status = $this->settings_model->settings_under_list(100);
              foreach ($prov_status->result() as $status ){
              ?>
                <option value="<?php echo $status->settings_id; ?>" <?php if($surcharge_type == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
              <?php } ?>
          </select>
        </td>
      </tr>
      </tbody></table>
    <table cellspacing="0" cellpadding="1">
      <tbody><tr>
        <td>Payment system:</td>
        <td class="FormButton"><label class="label-method"><a href="">Configure</a>&nbsp;|&nbsp;<a href="">Delete</a></label></td>
      </tr>
      </tbody></table>

  </td>

  <td valign="top" nowrap="nowrap">
    <textarea rows="3" cols="40" name="payment_details[]"><?php echo (isset($rows->payment_details))? $rows->payment_details : set_value('payment_details'); ?></textarea>
  </td>

  <td valign="top">
    <select style="width: 132px" name="membershipids[]">
      <option selected="selected" value="0">All</option>
        <?php
        $membershipids =(isset($rows->membershipids ))? $rows->membershipids  : set_value('membershipids');
        $prov_status = $this->settings_model->settings_under_list(96);
        foreach ($prov_status->result() as $status ){
        ?>
        <option value="<?php echo $status->settings_id; ?>" <?php if($membershipids == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
        <?php } ?>
    </select>
    <input type="text" value="<?php echo (isset($rows->orderby))? $rows->orderby : 0 ; ?>" name="orderby[]" maxlength="2" size="2" >
  </td>
</tr>
<?php endforeach; }else{ ?>
<tr class="TableSubHeadPayment2 addrow">
  <input type='hidden' name="payment_method_id[]" value="0">
  <td valign="top">
    <?php $active=(isset($rows->active))? $rows->active : set_value('active'); ?>
    <input type="checkbox" <?php if($active ==1 ){?> checked="checked" <?php } ?> value=1 name="active[]" class="check">
  </td>
  <td valign="top">
    <input type="text" style="width: 95%;" value="<?php echo (isset($rows->payment_method))? $rows->payment_method : set_value('payment_method'); ?>" name="payment_method[]" size="50">
    <br>
    <table cellspacing="0" cellpadding="1">
      <tbody><tr>
        <td class="FormButton">Extra charge:</td>
        <td><input type="text" value="<?php echo (isset($rows->surcharge))? $rows->surcharge : set_value('surcharge'); ?>" name="surcharge[]" size="8"></td>
        <td>

          <select name="surcharge_type[]">
              <?php
              $surcharge_type =(isset($rows->surcharge_type ))? $rows->surcharge_type  : set_value('surcharge_type');
              $prov_status = $this->settings_model->settings_under_list(100);
              foreach ($prov_status->result() as $status ){
                  ?>
                <option value="<?php echo $status->settings_id; ?>" <?php if($surcharge_type == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
                  <?php } ?>
          </select>
        </td>
      </tr>
      </tbody></table>
    <table cellspacing="0" cellpadding="1">
      <tbody><tr>
        <td>Payment system:</td>
        <td class="FormButton"><label class="label-method"><a href="">Configure</a>&nbsp;|&nbsp;<a href="">Delete</a></label></td>
      </tr>
      </tbody></table>

  </td>

  <td valign="top" nowrap="nowrap">
    <textarea rows="3" cols="40" name="payment_details[]"><?php echo (isset($rows->payment_details))? $rows->payment_details : set_value('payment_details'); ?></textarea>
  </td>

  <td valign="top">
    <select style="width: 132px" name="membershipids[]">
      <option selected="selected" value="0">All</option>
        <?php
        $membershipids =(isset($rows->membershipids ))? $rows->membershipids  : set_value('membershipids');
        $prov_status = $this->settings_model->settings_under_list(96);
        foreach ($prov_status->result() as $status ){
            ?>
          <option value="<?php echo $status->settings_id; ?>" <?php if($membershipids == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
            <?php } ?>
    </select>
    <input type="text" value="<?php echo (isset($rows->orderby))? $rows->orderby : 0 ; ?>" name="orderby[]" maxlength="2" size="2" >
  </td>
</tr>

<?php } ?>
</tbody>
</table>
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

    $(".newrows").click(function(){
      $(".addrow").closest('.addrow:last').clone(true).insertAfter(".addrow:last");
      $(".addrow:last input").val("");
      $(".addrow:last textarea").val("");
      $('.addrow:last input[name="active[]"]').removeAttr('checked');
    });

    $(".clone-list").delegate('.btn-danger','click', function(){
      $(this).closest('tr.TableSubHeadPayment2').remove();
      return false;
    });


    jQuery(".checkin").live("click",function(){
      // Setup the click event listener for Home:
      if(jQuery('.check').is(':checked') == true)
      {
        jQuery('.check').attr('checked','checked');
      }else if(jQuery('.check').is(':checked') == false)
      {
        jQuery('.check').removeAttr('checked');
      }

    })

  })

</script>
<style type="text/css">
  select {
    background-color: #FFFFFF;
    width: 85px;
  }
  input, textarea, .uneditable-input {
    margin-left: 0;
    width: 70px;
  }
  textarea{
    margin-left: 7px;
    width: 230px;
    margin-right: 7px;
  }
</style>