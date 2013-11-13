<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
  <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
  <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
  <li><?php echo $store_name; ?>'info</li>
  <li id="breadcrumb-right"><button class="btn  btn-info" id="add_mall" data-toggle="modalx" href="#shoppingmallModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_mall'); ?></button></li>
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
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('shoppingmall/mall/about_update/'.$this->uri->segment(4,NULL))?>" method="post">
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
    <input type="hidden" name="agent_uid" id="agent_uid" value="<?php echo(isset($queryup[0]->agent_uid))? $queryup[0]->agent_uid : set_value('agent_uid'); ?>" />
          <div class="form-box">
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('open_time'); ?></label>
            <div class="controls">
                <?php $open_time=(isset($queryup[0]->open_time))? $queryup[0]->open_time : set_value('open_time'); ?>
                <select name="open_time" id="open_time">
                    <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                  <?php

                  foreach ( $open->result() as $rows ){
                  ?>
                    <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $open_time ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                <?php } ?>
              </select>
             </div>
          </div>
            <div class="control-group">
              <label  class="control-label"><?php echo $this->lang->line('close_time'); ?></label>
              <div class="controls">
              <?php $close_time=(isset($queryup[0]->close_time))? $queryup[0]->close_time : set_value('open_time'); ?>
                <select name="close_time" id="close_time">
                    <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
                    <?php
                    foreach ( $close->result() as $rows ){
                        ?>
                      <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $close_time ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                        <?php } ?>
                </select>

              </div>
            </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('weekly_close'); ?></label>
            <div class="controls">
            <?php $weekly_close=(isset($queryup[0]->weekly_close))? $queryup[0]->weekly_close : set_value('weekly_close'); ?>
            <select name="weekly_close" id="weekly_close">
                <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
			<?php
				foreach ( $weekly->result() as $rows ){
			?>
			<option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id  == $weekly_close ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
			<?php } ?>
			</select>
            </div>
          </div>

            <div class="control-group">
              <label class="control-label" ><?php echo $this->lang->line('car_parking'); ?></label>
              <div class="controls">
                  <?php $car_parking=(isset($queryup[0]->car_parking))? $queryup[0]->car_parking : 1; ?>
                <label class="checkbox inline">
                  <input type="radio" title="Check box" name="car_parking" value="1" <?php if($car_parking ==1){?>checked="checked"<?php } ?> >  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                </label>
                <label class="checkbox inline">
                  <input type="radio" title="Check box" name="car_parking" value="0" <?php if($car_parking ==0){?>checked="checked"<?php } ?> > <div class="radio_text"><?php echo $this->lang->line('no'); ?></div>
                </label>

              </div>
            </div>


    </div>
        <div class="form-box">
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('escalator'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('escalator'); ?>" class="span2" name="escalator" id="escalator" value="<?php echo(isset($queryup[0]->escalator))? $queryup[0]->escalator : set_value('escalator'); ?>" >
            </div>
          </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('lift'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('lift'); ?>" class="span2" name="lift" id="lift" value="<?php echo(isset($queryup[0]->lift))? $queryup[0]->lift : set_value('lift'); ?>" >
            </div>
          </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('air_condition'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('air_condition'); ?>" class="span2" name="air_condition" id="air_condition" value="<?php echo(isset($queryup[0]->air_condition))? $queryup[0]->air_condition : set_value('air_condition'); ?>" >
            </div>
          </div>
          <div class="control-group">
            <label  class="control-label"><?php echo $this->lang->line('parking_capacity'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('parking_capacity'); ?>" class="span2" name="parking_capacity" id="parking_capacity" value="<?php echo(isset($queryup[0]->parking_capacity))? $queryup[0]->parking_capacity : set_value('parking_capacity'); ?>" >
            </div>
          </div>

    </div>
</div>

</fieldset>
    <fieldset class="sheet">

      <div class="clear"></div>
      <legend><?php echo $title; ?></legend>
      <div class="clear"></div>
      <div class="content-inner-box">

      <div class="control-group" >
          <label  class="control-label control-label-textarea"><?php echo $this->lang->line('security'); ?></label>
      </div>
      <div class="control-group" >
          <textarea name="security" id="security" class="input-textarea-large" rows="" cols=""><?php echo(isset($queryup[0]->security))? $queryup[0]->security : set_value('security'); ?></textarea>
      </div>
        <div class="control-group" >
          <label  class="control-label control-label-textarea"><?php echo $this->lang->line('about_us'); ?></label>
        </div>
        <div class="control-group" >
          <textarea name="about_us" id="about_us" class="input-textarea-large" rows="" cols=""><?php echo(isset($queryup[0]->about_us))? $queryup[0]->about_us : set_value('about_us'); ?></textarea>
        </div>
        <div class="control-group" >
          <label  class="control-label control-label-textarea"><?php echo $this->lang->line('other_facalities'); ?></label>
        </div>
        <div class="control-group" >
          <textarea name="other_facalities" id="other_facalities" class="input-textarea-large" rows="" cols=""><?php echo(isset($queryup[0]->other_facalities))? $queryup[0]->other_facalities : set_value('other_facalities'); ?></textarea>
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
<?php $this->load->view('admin/layouts/footer'); ?>
