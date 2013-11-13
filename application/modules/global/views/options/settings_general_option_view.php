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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('seller/admin_options/settings_general_insert/'.$this->uri->segment(4,0))?>" method="post">
  <input type="hidden" name="settings_web_id" id="settings_web_id" value="<?php echo(isset($queryup[0]->settings_web_id))? $queryup[0]->settings_web_id : set_value('settings_web_id'); ?>"  />


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
<div class="clear"></div>
<legend>  <?php echo $this->lang->line('common_options'); ?></legend>
  <div class="controls_action_button">
    <!--  start step-holder -->
    <div id="step-holder">
      <div class="step-no-off">1</div>
      <div class="step-light-left"><a href="<?php echo site_url('seller/admin_options/admin_options_view/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('admin_options'); ?></a></div>
      <div class="step-light-right">&nbsp;</div>
      <div class="step-no">2</div>
      <div class="step-dark-left"><a href="<?php echo site_url('seller/admin_options/settings_general_option/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('settings_general_option'); ?></a></div>
      <div class="step-dark-right">&nbsp;</div>
      <div class="step-no-off">3</div>
      <div class="step-light-left"><a href="<?php echo site_url('seller/admin_options/settings_bank/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('settings_bank'); ?></a></div>
      <div class="step-light-round">&nbsp;</div>
      <div class="clear"></div>
    </div>
    <!--  end step-holder -->
  </div>
<div class="clear"></div>
<div class="content-inner-box">
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('shop_closed'); ?></label>
    <div class="controls">
        <?php $shop_closed=(isset($queryup[0]->shop_closed))? $queryup[0]->shop_closed : set_value('shop_closed'); ?>
      <label class="checkbox inline">
        <input type="checkbox" value="1" name="shop_closed" <?php if($shop_closed ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('membership_signup'); ?></label>
    <div class="controls">
        <?php $membership_signup=(isset($queryup[0]->membership_signup))? $queryup[0]->membership_signup : set_value('membership_signup'); ?>
      <label class="checkbox inline">
        <input type="checkbox" value="1" name="membership_signup" <?php if($membership_signup ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('allow_change_login'); ?></label>
    <div class="controls">
        <?php $allow_change_login=(isset($queryup[0]->allow_change_login))? $queryup[0]->allow_change_login : set_value('allow_change_login'); ?>
      <label class="checkbox inline">
        <input type="checkbox" value="1" name="allow_change_login" <?php if($allow_change_login ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('use_counties'); ?></label>
    <div class="controls">
        <?php $use_counties=(isset($queryup[0]->use_counties))? $queryup[0]->use_counties : set_value('use_counties'); ?>
      <label class="checkbox inline">
        <input type="checkbox" value="1" name="use_counties" <?php if($use_counties ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('redirect_to_cart'); ?></label>
    <div class="controls">
        <?php $redirect_to_cart=(isset($queryup[0]->redirect_to_cart))? $queryup[0]->redirect_to_cart : set_value('redirect_to_cart'); ?>
      <label class="checkbox inline">
        <input type="checkbox" value="1" name="redirect_to_cart" <?php if($redirect_to_cart ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('checkout_module'); ?></label>
    <div class="controls">

      <label class="inline">
          <select class="span3" name="checkout_module">
              <?php
              $checkout_module =(isset($queryup[0]->checkout_module ))? $queryup[0]->checkout_module  : set_value('checkout_module');
              $prov_status = $this->settings_model->settings_under_list(84);
              foreach ($prov_status->result() as $status ){
              ?>
              <option value="<?php echo $status->settings_id; ?>" <?php if($checkout_module == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
              <?php } ?>
          </select>
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('allow_change_login'); ?></label>
    <div class="controls">
        <?php $allow_change_login=(isset($queryup[0]->allow_change_login))? $queryup[0]->allow_change_login : set_value('allow_change_login'); ?>
      <label class="inline">
        <input type="checkbox" value="1" name="allow_change_login" <?php if($allow_change_login ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
      </label>

    </div>

  </div>
  <div class="control-group border-bottom">
    <label  class="control-label-big"><?php echo $this->lang->line('default_country'); ?></label>
    <div class="controls">
      <label class="inline">
       <input class="span2" type="text" value="<?php echo $default_country=(isset($queryup[0]->default_country))? $queryup[0]->default_country : 'Bangladesh'; ?>" name="default_country"  />
      </label>
    </div>
  </div>
  <div class="control-group ">
    <label  class="control-label-big"><?php echo $this->lang->line('default_city'); ?></label>
    <div class="controls">

      <label class="inline">
        <select class="span3" name="default_city">
            <?php
            $default_city =(isset($queryup[0]->default_city ))? $queryup[0]->default_city  : set_value('default_city');
            $prov_status = $this->settings_model->settings_under_list(87);
            foreach ($prov_status->result() as $status ){
                ?>
              <option value="<?php echo $status->settings_id; ?>" <?php if($default_city == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
                <?php } ?>
        </select>
      </label>

    </div>

  </div>




</div>
</fieldset>
    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('general_parameters'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('currency_symbol'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->currency_symbol))? $queryup[0]->currency_symbol : set_value('currency_symbol'); ?>" name="currency_symbol"  />
            </label>

          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('currency_format'); ?></label>
          <div class="controls">

            <label class="inline">
              <select class="span3" name="currency_format">
                  <?php
                  $currency_format =(isset($queryup[0]->currency_format ))? $queryup[0]->currency_format  : set_value('currency_format');
                  $prov_status = $this->settings_model->settings_under_list(91);
                  foreach ($prov_status->result() as $status ){
                      ?>
                    <option value="<?php echo $status->settings_id; ?>" <?php if($currency_format == $status->settings_id  ){?> selected="selected" <?php }?> ><?php echo $status->settings_name ?></option>
                      <?php } ?>
              </select>
            </label>

          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('alter_currency_rate'); ?></label>
          <div class="controls">

            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->alter_currency_rate))? $queryup[0]->alter_currency_rate : set_value('alter_currency_rate'); ?>" name="alter_currency_rate"  />
            </label>

          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('weight_symbol'); ?></label>
          <div class="controls">
           <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->weight_symbol))? $queryup[0]->weight_symbol : set_value('weight_symbol'); ?>" name="weight_symbol"  />
            </label>

          </div>

        </div>
        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('dimensions_symbol'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->dimensions_symbol))? $queryup[0]->dimensions_symbol : set_value('dimensions_symbol'); ?>" name="dimensions_symbol"  />
            </label>

          </div>

        </div>
      </div>
    </fieldset>
    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('purchase_limitations'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">

        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('minimal_order_amount'); ?></label>
          <div class="controls">

            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->minimal_order_amount))? $queryup[0]->minimal_order_amount : set_value('minimal_order_amount'); ?>" name="minimal_order_amount"  />
            </label>

          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('maximum_order_amount'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->maximum_order_amount))? $queryup[0]->maximum_order_amount : set_value('maximum_order_amount'); ?>" name="maximum_order_amount"  />
            </label>

          </div>

        </div>
        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('maximum_order_items'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->maximum_order_items))? $queryup[0]->maximum_order_items : set_value('maximum_order_items'); ?>" name="maximum_order_items"  />
            </label>

          </div>

        </div>




      </div>
    </fieldset>
    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('provider_commission_option'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">


        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('provider_commission'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->provider_commission))? $queryup[0]->provider_commission : set_value('provider_commission'); ?>" name="provider_commission"  />
            </label>

          </div>

        </div>
        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('providers_commission_min'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->providers_commission_min))? $queryup[0]->providers_commission_min : set_value('providers_commission_min'); ?>" name="providers_commission_min"  />
            </label>

          </div>

        </div>





      </div>
    </fieldset>
    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('inventory_options'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">


        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('show_outofstock_products'); ?></label>
          <div class="controls">
              <?php $show_outofstock_products=(isset($queryup[0]->show_outofstock_products))? $queryup[0]->show_outofstock_products : set_value('show_outofstock_products'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="show_outofstock_products" <?php if($show_outofstock_products ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

        </div>



      </div>
    </fieldset>
    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('payment_options'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">
        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('preauth_expired_period_warning'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->preauth_expired_period_warning))? $queryup[0]->preauth_expired_period_warning : set_value('preauth_expired_period_warning'); ?>" name="preauth_expired_period_warning"  />
            </label>

          </div>

        </div>
      </div>
    </fieldset>
    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('gift_wrapping'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('enable_gift_wrapping'); ?></label>
          <div class="controls">
              <?php $enable_gift_wrapping=(isset($queryup[0]->enable_gift_wrapping))? $queryup[0]->enable_gift_wrapping : set_value('enable_gift_wrapping'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="enable_gift_wrapping" <?php if($enable_gift_wrapping ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('enable_greeting_message'); ?></label>
          <div class="controls">
              <?php $enable_greeting_message=(isset($queryup[0]->enable_greeting_message))? $queryup[0]->enable_greeting_message : set_value('enable_greeting_message'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="enable_greeting_message" <?php if($enable_greeting_message ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

        </div>
        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('gift_wrapping_cost'); ?></label>
          <div class="controls">
            <label class="inline">
              <input class="span2" type="text" value="<?php echo (isset($queryup[0]->gift_wrapping_cost))? $queryup[0]->gift_wrapping_cost : set_value('gift_wrapping_cost'); ?>" name="gift_wrapping_cost"  />
            </label>

          </div>

        </div>
      </div>
    </fieldset>

    <fieldset class="sheet">
      <div class="clear"></div>
      <legend>  <?php echo $this->lang->line('provider_registration'); ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('provider_register'); ?></label>
          <div class="controls">
              <?php $provider_register=(isset($queryup[0]->provider_register))? $queryup[0]->provider_register : set_value('provider_register'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="provider_register" <?php if($enable_gift_wrapping ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('provider_register_moderated'); ?></label>
          <div class="controls">
              <?php $provider_register_moderated=(isset($queryup[0]->provider_register_moderated))? $queryup[0]->provider_register_moderated : set_value('provider_register_moderated'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="provider_register_moderated" <?php if($provider_register_moderated ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

        </div>
        <div class="control-group border-bottom">
          <label  class="control-label-big"><?php echo $this->lang->line('provider_display_backoffice_link'); ?></label>
          <div class="controls">
              <?php $provider_display_backoffice_link=(isset($queryup[0]->provider_display_backoffice_link))? $queryup[0]->provider_display_backoffice_link : set_value('provider_display_backoffice_link'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="provider_display_backoffice_link" <?php if($provider_display_backoffice_link ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

        </div>
        <div class="control-group">
          <label  class="control-label-big"><?php echo $this->lang->line('provider_chat'); ?></label>
          <div class="controls">
              <?php $provider_chat=(isset($queryup[0]->provider_chat))? $queryup[0]->provider_chat : set_value('provider_chat'); ?>
            <label class="inline">
              <input type="checkbox" value="1" name="provider_chat" <?php if($provider_chat ==1 ){?>  checked="checked" <?php } ?> title="Check box" />
            </label>
          </div>

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