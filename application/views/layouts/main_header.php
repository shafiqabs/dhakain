<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->lang->line('welcometitle').'.:|:.'.$title; ?></title>
<link href="<?php echo base_url()?>assets/main/images/favicon.png" rel="icon" />
<meta name="description" content="" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_body.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_box.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/dashboard.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/jquery.bxslider.css"  type="text/css" />
<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_ie8.css" media="all" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_ie7.css" />
<![endif]-->
<!--[if IE 9]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_ie9.css" />
<![endif]-->


<style>
.container_24{margin-left:auto;margin-right:auto;width:968px}
.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12,.grid_13,.grid_14,.grid_15,.grid_16,.grid_17,.grid_18,.grid_19,.grid_20,.grid_21,.grid_22,.grid_23,.grid_24{display:inline;float:left;margin-left:5px;margin-right:5px}
</style>
</head>
<body>
<div class="outer-wrapper">
<!-- ------------------Top menu use top bar ---------------------------- -->
<?php $this->load->view('layouts/topmenu'); ?>
<!-- ------------------Top menu use top bar ---------------------------- -->
<div class="body-wrapper">
<!-- end of header -->
<div class="wrapper">
<?php $this->load->view('layouts/search'); ?>
<div class="clear"></div>
<?php //$this->load->view('layouts/mainmenu'); ?>

	<!-- end of navigation -->
<?php //$this->load->view('layouts/login')?>
<?php //$this->load->view('layouts/topmenu')?>
<?php //$this->load->view('layouts/mainmenu')?>
