<?php $controller3=$this->uri->segment(3,'none');

if($this->uri->segment(2,NULL) == 'advertisment'){
?>
<div class="controls_action_button">
<!--  start step-holder -->
            <div id="step-holder">
			<div class="<?php if($controller3 =='advertisment_view' || $controller3=='mall_update' ) echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
			<div class="<?php if($controller3 =='advertisment_view' || $controller3=='mall_update' ) echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/advertisment_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('advertisment'); ?></a></div>
			<div class="<?php if($controller3 =='advertisment_view' || $controller3=='mall_update' ) echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
            <div class="<?php if($controller3 =='advertisment_list') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
            <div class="<?php if($controller3 =='advertisment_list') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/advertisment_list/'.$this->uri->segment(4,NULL))?>" ><?php echo $this->lang->line('advertisment_list'); ?></a></div>
			<div class="<?php if($controller3 =='advertisment_list') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>
<?php
}
if($this->uri->segment(2,NULL) =='sponsor'){
?>
<div class="controls_action_button">
  <!--  start step-holder -->
  <div id="step-holder">
    <div class="<?php if($controller3 =='sponsor_view') echo 'step-no'; else echo 'step-no-off'; ?>">1</div>
    <div class="<?php if($controller3 =='sponsor_view') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/sponsor_view/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('sponsor'); ?></a></div>
    <div class="<?php if($controller3 =='sponsor_view') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
    <div class="<?php if($controller3 =='sponsor_list') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
    <div class="<?php if($controller3 =='sponsor_list') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/sponsor_list/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('sponsor_list'); ?></a></div>
    <div class="<?php if($controller3 =='sponsor_list') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
    <div class="<?php if($controller3 =='sponsor_settings') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
    <div class="<?php if($controller3 =='sponsor_settings') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/sponsor_settings/'.$this->uri->segment(4,NULL))?>" ><?php echo $this->lang->line('sponsor_setting'); ?></a></div>
    <div class="<?php if($controller3 =='sponsor_settings') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>
    <div class="clear"></div>
  </div>
  <!--  end step-holder -->
</div>
<?php }
if($this->uri->segment(2,NULL) =='options'){
?>
    <div class="controls_action_button">
<?php
if( $settings_shopping_cart == 1 && $this->session->userdata('useraccess') !="3" ){
?>
<div class="step-no">1</div>
<div class="step-dark-left"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/admin_options_view/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('options'); ?></a></div>
<div class="step-dark-round">&nbsp;</div>
<?php }else{ ?>
<div class="step-no">1</div>
<div class="step-dark-left"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/admin_options_view/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('options'); ?></a></div>
<div class="step-dark-right">&nbsp;</div>

  <div class="<?php if($controller3 =='sponsor_list') echo 'step-no'; else echo 'step-no-off'; ?>">2</div>
  <div class="<?php if($controller3 =='sponsor_list') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/sponsor_list/'.$this->uri->segment(4,NULL))?>"><?php echo $this->lang->line('sponsor_list'); ?></a></div>
  <div class="<?php if($controller3 =='sponsor_list') echo 'step-dark-right'; else echo 'step-light-right'; ?>">&nbsp;</div>
  <div class="<?php if($controller3 =='sponsor_settings') echo 'step-no'; else echo 'step-no-off'; ?>">3</div>
  <div class="<?php if($controller3 =='sponsor_settings') echo 'step-dark-left'; else echo 'step-light-left'; ?>"><a href="<?php echo site_url($this->uri->segment(1,'none').'/'.$this->uri->segment(2,'none').'/sponsor_settings/'.$this->uri->segment(4,NULL))?>" ><?php echo $this->lang->line('sponsor_setting'); ?></a></div>
  <div class="<?php if($controller3 =='sponsor_settings') echo 'step-dark-round'; else echo 'step-light-round'; ?>">&nbsp;</div>


  <div class="step-no-off">2</div>
<div class="step-light-left"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_general_option/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('settings_general_option'); ?></a></div>
<div class="step-light-right">&nbsp;</div>
<div class="step-no-off">3</div>
<div class="step-light-left"><a href="<?php echo site_url($this->uri->segment(1,NULL).'/options/settings_bank/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('settings_bank'); ?></a></div>
<div class="step-light-round">&nbsp;</div>
<?php } ?>
</div>
<?php } ?>