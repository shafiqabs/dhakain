
<?php
$this->load->view('admin/layouts/header') ;
//include(RELATIVE_PATH."assets/spaw2/spaw.inc.php");
?>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/websites/'.$access_slug);?>" ><?php echo $this->lang->line('website'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/customize_menu/'.$access_slug);?>" ><?php echo $this->lang->line('customize_menu'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/customize_page/'.$access_slug.'/'.$menu_id );?>" ><?php echo $this->lang->line('menu_customization'); ?></a></li>
    <li><?php echo $title; ?></li>
</ul>

<div class="clear"></div>
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
    <?php $this->load->view('admin/layouts/top_menu')?>
  <div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
    <div class="content-box">
      <div class="left-area">
          <?php $this->load->view('admin/layouts/left_menu'); ?>
      </div>
      <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/customize_content/save/'.$access_slug.'/'.$menu_id )?>" method="post">
        <div class="right-area ">
          <div class="submit-bar persist-header" >
            <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
            <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
          </div>
            <div class="info_message">
                <h4 class="alert-heading" style="text-align: center"><?php echo $store_name; ?></h4>
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
              <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
            <div class="clear"></div>
            <div class="content-inner-box">

            <?php
            $plugin_show=(isset($queryup[0]->plugin_show))? $queryup[0]->plugin_show : '';
            $column_no=(isset($queryup[0]->column_no))? $queryup[0]->column_no : '';

	        if( $column_no && !$plugin_show ){

		    for( $i=1; $column_no >= $i; $i++ ){
                $page="page_content".$i;
               ?>
                <div class="control-group">
                    <?php echo $this->lang->line('page_content'); ?>-<?php echo $i ?>
                </div>
                <div class="control-group">
            <textarea name="<?php echo $page; ?>" class="large-textarea" rows="" cols=""><?php  echo $pagecontent = (isset($page_content[0]->$page))? $page_content[0]->$page : set_value($page);?></textarea>
                </div>
                <?php


           }
           }else if( $column_no && $plugin_show ){

                for( $i=1; $column_no > $i; $i++ ){
                $page="page_content".$i;
             ?>

           <div class="control-group">
             <?php echo $this->lang->line('page_content'); ?>-<?php echo $i ?>
           </div>
             <div class="control-group">
                <textarea name="<?php echo $page; ?>" class="large-textarea" rows="" cols=""><?php  echo $pagecontent = (isset($page_content[0]->$page))? $page_content[0]->$page : set_value($page);?></textarea>
             </div>
             <?php

         }}
             ?>
          </fieldset>
       </div>


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

<?php $this->load->view('admin/layouts/footer'); ?>
