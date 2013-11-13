<?php if($this->session->flashdata('success_msg')){?>
<div class="success_msg"><?php echo $this->session->flashdata('success_msg')?></div>
<?php }?>
<?php if($this->session->flashdata('delete_msg')){?>
<div class="delete_msg"><?php echo $this->session->flashdata('delete_msg')?></div>
<?php }?>
<?php if($this->session->flashdata('error_msg')){?>
<div class="error_msg"><?php echo $this->session->flashdata('error_msg')?></div>
<?php }?>
<?php if($this->session->flashdata('warning_msg')){?>
<div class="warning_msg"><?php echo $this->session->flashdata('warning_msg')?></div>
<?php }?>

                