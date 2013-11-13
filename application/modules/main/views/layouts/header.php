
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->lang->line('welcometitle').'.:|:.'.$title; ?></title>
<link href="<?php echo base_url()?>assets/main/images/favicon.png" rel="icon" />
<meta name="description" content="" />
<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap-responsive.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_body.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_box.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/dashboard.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/style.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/custom.css"  type="text/css" />
<link href="<?php echo base_url()?>assets/styles/vertical_menu_basic.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/jquery.bxslider.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/jquery.jscrollpane.css"  type="text/css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/select/select.css"/>
<link href="<?php echo base_url()?>assets/styles/bootstrap-select.css" type="text/css" rel="stylesheet" />
<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_ie8.css" media="all" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_ie7.css" />
<![endif]-->
<!--[if IE 9]>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/main/styles/style_ie9.css" />
<![endif]-->
<script src="<?php echo base_url()?>/assets/js/jquery-1.9.1.min.js"></script>

<script src="<?php echo base_url()?>/assets/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.bxslider.js"></script>
<script type='text/javascript' src='<?php echo base_url();?>/assets/js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>/assets/js/jquery.dcverticalmegamenu.1.1.js'></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.jscrollpane.min.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.lazy.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.lazyload.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/select/select.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.listmenu-1.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.selectBox.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>/assets/styles/jquery.selectBox.css"/>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.preloader.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/styles/preloader.css" type="text/css" />

    <style>
.container_24{margin-left:auto;margin-right:auto;width:968px}
.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12,.grid_13,.grid_14,.grid_15,.grid_16,.grid_17,.grid_18,.grid_19,.grid_20,.grid_21,.grid_22,.grid_23,.grid_24{display:inline;float:left;margin-left:5px;margin-right:5px}
</style>
</head>
<body>


<style type="text/css">

    #site {
        position: absolute;
        right: 0;
        top: 10px;
    }
    #site #domain li{ float:left; padding-right:10px; line-height:20px; }
    #site #domain li a{ color:#06F}
    #site #domain li a:hover{ text-decoration:underline; color:#00F}

    .btn-group {left: -1px}
    .clear {clear: both;}
    .global-box{
        height: auto;
        width: 957px;
        border: 1px #E1E5E8 solid;
        padding: 10px;
        margin-bottom: 10px;
        display: none;
    }
    #category_id{
        width: 220px;
    }

</style>

<script>
$(document).ready(function(){

    /* This code use for show the dropdown menu*/
    $('.dropdown-toggle').dropdown();
    /* This code use for show the dropdown menu under mega menu*/
    $('#search-box').load('<?php echo site_url() ?>/main/ajaxload/menuProductCategories/shops');
    $('.help-body').load('<?php echo site_url() ?>/main/ajaxload/helps');

    $("img.lazy").lazy({ delay: 10000 });
    $("img.feature-lazy").lazy();
    $('#help').click(function(){
        $('#helpModal').modal('toggle');
    })

    $(".boxscroll").niceScroll();
    $(".list-service").niceScroll();
    $('.close').click(function(){
        $(".helpscroll").niceScroll().hide();
    })

    $("#advance-search").click(function () {
        $("#toggleAdvenceSearch").slideToggle("slow");
    });

    $(".icon-settings").click(function () {
        //$(".global-box").hide();
        $("#toggleSettings").slideToggle("slow");
    });

    $(".dropdown-toggle").click(function () {
       var  val =$(this).attr('id');
       // $('#'+val + 'b').removeClass('dropdown-icon-down');
    });

    $('.scroll-pane').jScrollPane(
        {
            showArrows: true,
            arrowScrollOnHover: true
        }
    );

})


</script>
<div id="helpModal" class="modal hide fade help-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header help-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-top"><?php echo $this->lang->line('help_information');?></h3>
    </div>
    <div class="modal-body help-body">

    </div>

</div>
<div class="outer-wrapper">
<!-- ------------------Top menu use top bar ---------------------------- -->
<?php $this->load->view('main/layouts/topmenu'); ?>
<!-- ------------------Top menu use top bar ---------------------------- -->
<div class="body-wrapper">
<!-- end of header -->
<div class="wrapper">

<div id="navi">
    <div class="top-wrapper">

        <div class="clear"></div>
        <div id="menu">

            <ul id="menu_tabs">
                <?php $main = $this->uri->segment(2,NULL); ?>
                <li><a <?php if($main == 'locations' ){ echo "class='active'"; } ?> href="/directories/locations"><span class="menu_l"></span><span class="menu_m">Location</span><span class="menu_r"></span></a></li>
                <li><a <?php if($main == 'shoppingmalls' ){ echo "class='active'"; } ?> href="/directories/shoppingmalls"><span class="menu_l"></span><span class="menu_m">Mall</span><span class="menu_r"></span></a></li>
                <li><a <?php if($main == 'wholesellers' ){ echo "class='active'"; } ?> href="/directories/wholesellers"><span class="menu_l"></span><span class="menu_m">Wholeseller</span><span class="menu_r"></span></a></li>
                <li><a <?php if($main == 'brandshops' ){ echo "class='active'"; } ?> href="/directories/brandshops"><span class="menu_l"></span><span class="menu_m">BRAND</span><span class="menu_r"></span></a></li>
                <li><a <?php if($main == 'services' ){ echo "class='active'"; } ?> href="/directories/services"><span class="menu_l"></span><span class="menu_m">Services</span><span class="menu_r"></span></a></li>
                <li><a <?php if($main == 'shops' ){ echo "class='active'"; } ?> href="/directories/shops"><span class="menu_l"></span><span class="menu_m">Shops</span><span class="menu_r"></span></a></li>
                <li><a <?php if($main == 'products' ){ echo "class='active'"; } ?> href="/directories/products"><span class="menu_l"></span><span class="menu_m">Products</span><span class="menu_r"></span></a></li>
            </ul>
            <div id="filler"></div>

        </div>

    </div>
    <div class="top-wrapper box4" id="search-box"></div>
</div>

<div class="clear"></div>
<div class="global-box" style="display: none;">
    <div class="scroll-pane" style="height: 200px" >
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices
            eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci
            mi, in pharetra ligula. Nulla facilisi. Nulla facilisi. Mauris convallis venenatis massa, quis
            consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies
            bibendum. Vivamus diam leo, faucibus et vehicula eu, molestie sit amet dui. Proin nec orci et elit
            semper ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
            mus. Sed quis urna mi, ac dignissim mauris. Quisque mollis ornare mauris, sed laoreet diam malesuada
            quis. Proin vel elementum ante. Donec hendrerit arcu ac odio tincidunt posuere. Vestibulum nec risus
            eu lacus semper viverra.
        </p>
        <p>
            Vestibulum dictum consectetur magna eu egestas. Praesent molestie dapibus erat, sit amet sodales
            lectus congue ut. Nam adipiscing, tortor ac blandit egestas, lorem ligula posuere ipsum, nec
            faucibus nisl enim eu purus. Quisque bibendum diam quis nunc eleifend at molestie libero tincidunt.
            Quisque tincidunt sapien a sapien pellentesque consequat. Mauris adipiscing venenatis augue ut
            tempor. Donec auctor mattis quam quis aliquam. Nullam ultrices erat in dolor pharetra bibendum.
            Suspendisse eget odio ut libero imperdiet rhoncus. Curabitur aliquet, ipsum sit amet aliquet varius,
            est urna ullamcorper magna, sed eleifend libero nunc non erat. Vivamus semper turpis ac turpis
            volutpat non cursus velit aliquam. Fusce id tortor id sapien porta egestas. Nulla venenatis luctus
            libero et suscipit. Sed sed purus risus. Donec auctor, leo nec eleifend vehicula, lacus felis
            sollicitudin est, vitae lacinia lectus urna nec libero. Aliquam pellentesque, arcu condimentum
            pharetra vestibulum, lectus felis malesuada felis, vel fringilla dolor dui tempus nisi. In hac
            habitasse platea dictumst. Ut imperdiet mauris vitae eros varius eget accumsan lectus adipiscing.
        </p>
        <p>
            Quisque et massa leo, sit amet adipiscing nisi. Mauris vel condimentum dolor. Duis quis ullamcorper
            eros. Proin metus dui, facilisis id bibendum sed, aliquet non ipsum. Aenean pulvinar risus eu nisi
            dictum eleifend. Maecenas mattis dolor eget lectus pretium eget molestie libero auctor. Praesent sit
            amet tellus sed nibh convallis semper. Curabitur nisl odio, feugiat non dapibus sed, tincidunt ut
            est. Nullam erat velit, suscipit aliquet commodo sit amet, mollis in mauris. Curabitur pharetra
            dictum interdum. In posuere pretium ultricies. Curabitur volutpat eros vehicula quam ultrices
            varius. Proin volutpat enim a massa tempor ornare. Sed ullamcorper fermentum nisl, ac hendrerit sem
            feugiat ac. Donec porttitor ullamcorper quam. Morbi pretium adipiscing quam, quis bibendum diam
            congue eget. Sed at lectus at est malesuada iaculis. Sed fermentum quam dui. Donec eget ipsum dolor,
            id mollis nisi. Donec fermentum vehicula porta.
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
            sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
            commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros
            ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.
            Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna
            eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis
            luctus, metus
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
            amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
        </p>
    </div>
</div>
<div class="global-box" id="toggleAdvenceSearch">
    <h1>Advanch Search</h1>
    Shanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers
</div>
<div class="global-box" id="toggleSettings">
    <h1>Settings</h1>
    Shanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers
</div>
<div class="global-box" id="toggleSettings" style="display: block">
    <a href="#"><img src="/uploads/en.png"></a>
</div>

<?php //$this->load->view('main/layouts/search'); ?>
<div class="clear"></div>
<?php //$this->load->view('main/layouts/mainmenu'); ?>
	<!-- end of navigation -->
<?php //$this->load->view('layouts/login')?>
<?php //$this->load->view('layouts/topmenu')?>
<div class="clear"></div>

    <div class="breadcrumbs">
        <div class="breadcrumbs-left">
            <div class="breli"><a class="home" href="/" rel="nofollow">Home<i class="icon-chevron-right"></i></a></div>
            <?php
            echo ($this->session->userdata('breadcrumb'));
            ?>
        </div>
        <div class="breadcrumbs-center"></div>
        <div class="breadcrumbs-right">
            <a href="javascript:void(0)"><i class="icon-large icon-settings"></i></a>
            <a href="javascript:void(0)"><i class="icon-large icon-th-large"></i></a>
            <a href="javascript:void(0)"><i class="icon-large icon-th"></i></i></a>
            <a href="javascript:void(0)"><i class="icon-large icon-th-list"></i></i></a>
        </div>
    </div>
