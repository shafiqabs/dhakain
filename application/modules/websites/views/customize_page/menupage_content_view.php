<?php
$this->load->view('layouts/header_admin') ;
include(RELATIVE_PATH."assets/spaw2/spaw.inc.php");
$agent_uid=$this->uri->segment(4,0);
?>
<ul id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('product_category'); ?></li>
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
      <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('seller/customize_page/contentadd/'.$this->uri->segment(4,0).'/'.$this->uri->segment(5,0))?>" method="post">
        <div class="right-area ">
          <div class="submit-bar persist-header" >
            <div id="message-box"><?php $this->load->view('seller/seller_layouts/message'); ?></div>
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
            <legend><?php echo $title; ?></legend>
            <div class="controls_action_button">
              <!--  start step-holder -->
              <div id="step-holder">

                <div class="step-no-off">1</div>
                <div class="step-light-left"><a href="<?php echo site_url('seller/website/website_view/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('website'); ?></a></div>
                <div class="step-light-right">&nbsp;</div>
                <div class="step-no-off">2</div>
                <div class="step-light-left"><a href="<?php echo site_url('seller/customize_menu/customize_menu_view/'.$this->uri->segment(4,0))?>"><?php echo $this->lang->line('customize_menu'); ?></a></div>
                <div class="step-light-right">&nbsp;</div>
                <div class="step-no-off">3</div>
                <div class="step-light-left"><a href="<?php echo site_url('seller/customize_page/customize_page_view/'.$this->uri->segment(4,0).'/'.$this->uri->segment(5,0))?>"><?php echo $this->lang->line('menu_customization'); ?></a></div>
                <div class="step-light-right">&nbsp;</div>
                <div class="step-no">4</div>
                <div class="step-dark-left"><a href="<?php echo site_url('seller/customize_page/add_content/'.$this->uri->segment(4,0).'/'.$this->uri->segment(5,0))?>"><?php echo $this->lang->line('page_content'); ?></a></div>
                <div class="step-dark-round">&nbsp;</div>
                <div class="clear"></div>
              </div>
              <!--  end step-holder -->
            </div>
            <div class="clear"></div>
            <div class="content-inner-box">
            <?php
            $plugin_show=(isset($queryup[0]->plugin_show))? $queryup[0]->plugin_show : '';
            $column_no=(isset($queryup[0]->column_no))? $queryup[0]->column_no : '';

	        if( $column_no && !$plugin_show ){

		    for( $i=1; $column_no >= $i; $i++ ){
               //$page_content=$queryup[0]->page_content;
               ?>
                <?php
                $spaw = new SpawEditor("page_content1",'');
                $spaw->show();
                //exit;

           }
           }else if( $column_no && $plugin_show ){
         for( $i=1; $column_no > $i; $i++ ){
             ?>
           <div class="control-group">
             <?php echo $this->lang->line('page_content'); ?>-<?php echo $i ?>
           </div>
           <div class="control-group">

               <?php

                 $page="page_content".$i;
                 $pagecontent = (isset($page_content[0]->$page))? $page_content[0]->$page : set_value($page);
                 $spaw = new SpawEditor( $page , $pagecontent);
                 $spaw->show();
               ?>

           </div>
             <?php

         }}
             ?>
            <div>
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
<style type="text/css">
  .spaw2toolbar select {
    background-color: #EEEEEE;
    color: #404040;
    font-size: 9pt;
    margin: 0 2px 0 0;
    vertical-align: middle;
    width: 196px;
  }
</style>
<?php $this->load->view('layouts/footer_admin'); ?>
