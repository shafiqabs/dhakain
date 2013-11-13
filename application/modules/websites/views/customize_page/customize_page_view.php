<?php
$this->load->view('admin/layouts/header') ;
?>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/websites/'.$access_slug);?>" ><?php echo $this->lang->line('website'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,0).'/customize_menu/'.$access_slug);?>" ><?php echo $this->lang->line('customize_menu'); ?></a></li>
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
      <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/customize_page/save/'.$access_slug .'/'.$this->uri->segment(4,0))?>" method="post">
        <input type="hidden" name="settings_web_id" id="settings_web_id" value="<?php echo(isset($queryup[0]->settings_web_id))? $queryup[0]->settings_web_id : set_value('settings_web_id'); ?>"  />
        <div class="right-area ">
          <div class="submit-bar persist-header" >
            <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
            <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn btn-primary" value="next" name="next" type="submit"><?php echo $this->lang->line('next'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
          </div>
          <div class="info_message">
              <h4 class="alert-heading" style="text-align: center"><?php echo $store_name; ?></h4>
          </div>
          <?php if(validation_errors()){ ?>
              <div class="alert-error">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
                <div class="valiade_msg"><?php echo validation_errors(); ?></div>
              </div>
          <?php } ?>
          <fieldset class="sheet">

            <div class="clear"></div>
            <legend><?php echo $title; ?></legend>
              <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
            <div class="clear"></div>
            <div class="content-inner-box">

              <div class="control-group">
                <label class="control-label" for="input01"><?php echo $this->lang->line('menu_page_title'); ?></label>
                <div class="controls">
                  <input type="text" value="<?php echo (isset($queryup[0]->menu_name))? $queryup[0]->menu_name : set_value('menu_name'); ?>" id="menu_name" name="menu_name" class="" placeholder="Type Custom Title (Optional)">
                </div>
              </div>
              <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('parent_menu'); ?></label>
                <div class="controls">
                  <select style="width:300px;" name="parent_id" id="parent_id">
                    <option value="0">---<?php echo $this->lang->line('select_one'); ?>---</option>
                      <?php
                      $parent_id =(isset($queryup[0]->parent_id ))? $queryup[0]->parent_id  : set_value('parent_id');
                      $menu_id =(isset($queryup[0]->menu_id ))? $queryup[0]->menu_id  : set_value('menu_id');

                      foreach ($custom_menu as $menu ){
                      ?>
                      <option value="<?php echo $menu->menu_id; ?>" <?php if($parent_id == $menu->menu_id ){?> selected="selected" <?php }?>  ><?php echo $menu->menu_name ?></option>
                      <?php } ?>
                  </select>

                </div>
              </div>
              <div class="control-group">
              <label for="input01" class="control-label"><?php echo $this->lang->line('is_home_page'); ?></label>
              <div class="controls">
                  <?php $is_home_page=(isset($queryup[0]->is_home_page))? $queryup[0]->is_home_page : set_value('is_home_page'); ?>
                <label class="checkbox inline">
                  <input type="radio" value="1" name="is_home_page" <?php if($is_home_page == 1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text">Yes</div>
                </label>
                <label class="checkbox inline">
                  <input type="radio" value="2" name="is_home_page" title="Check box" <?php if($is_home_page ==2 || $is_home_page ==""  ){?>  checked="checked" <?php } ?> > <div class="radio_text">No</div>
                </label>

              </div>
            </div>
              <div class="control-group">
                <label  class="control-label"><?php echo $this->lang->line('status'); ?></label>
                <div class="controls">
                    <?php $status=(isset($queryup[0]->status))? $queryup[0]->status : set_value('status'); ?>
                  <label class="checkbox inline">
                    <input type="radio" value="1" name="status" <?php if($status ==1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text">Yes</div>
                  </label>
                  <label class="checkbox inline">
                    <input type="radio" value="0" name="status" title="Check box" <?php if($status ==0 || $status ==""  ){?>  checked="checked" <?php } ?> > <div class="radio_text">No</div>
                  </label>
                  <br /><span style="color:#3f5475; font-size:11px;"><a target="_blank" href="<?php  if($this->website_model->domain_name($agent_uid = $this->uri->segment(4,0))){ echo  "http://".$this->website_model->domain_name($agent_uid = $this->uri->segment(4,0)); }else{ echo WEBSITE_PREVIEW.'/'.$agent_uid = $this->uri->segment(4,0); } ?>/<?php echo(isset($queryup[0]->menu_url))? $queryup[0]->menu_url :'menu_url'; ?>">Preview this page on the website</a></span>
                </div>
              </div>
            <div>
            </div>
       </div>
         </fieldset>
          <fieldset class="sheet">
            <div class="clear"></div>
            <legend>  <?php echo $this->lang->line('select_layout'); ?></legend>
            <div class="clear"></div>
            <div class="content-inner-box">
              <div class="input_line" style="width:650px;">
                <div id="adsdiv">
                  <ul id="adverts">
                      <?php
                      $layout_id=(isset($queryup[0]->layout_id))? $queryup[0]->layout_id : set_value('layout_id');

                      $layout=$this->db->get('settings_layout');
                      foreach ($layout->result() as $rows ){
                      ?>

                        <li>
                          <a href="javascript:void(0)">
                            <img src="<?php echo base_url().'/uploads/files/layouts/'.$rows->image_name; ?>" title="<?php echo $rows->layout_name; ?>" alt="<?php echo $rows->layout_name; ?>" />
                          </a>
                          <span><input style="width:15px; border:none;" name="layout_id" id="layout_id" class="layout_show" type="radio" value="<?php echo $rows->settings_layout_id; ?>" <?php if($rows->settings_layout_id  == $layout_id ){?>  checked="checked" <?php } ?>  /></span>
                        </li>
                        <?php } ?>

                    <input type="hidden" id="layoutID" name="layoutID" value="<?php echo  $layout_id ?>" />
                   </ul>
                </div>
              </div>
              <div class="clear"></div>
              <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('setting_plugin'); ?></label>
                <div class="controls">
                  <select style="width:300px;" name="plugin_id" id="plugin_id">
                    <option value="0">---<?php echo $this->lang->line('select_one'); ?>---</option>
                      <?php echo $plugin_id =(isset($queryup[0]->plugin_id ))? $queryup[0]->plugin_id  : set_value('plugin_id ');
                      $this->db->where('status',1);
                      $plugin=$this->db->get('settings_plugin');
                      foreach ($plugin->result() as $settings ){
                          ?>
                        <option value="<?php echo $settings->settings_plugin_id; ?>" <?php if($plugin_id == $settings->settings_plugin_id  ){?> selected="selected" <?php }?> ><?php echo $settings->plugin_name ?></option>
                          <?php } ?>
                  </select><span id="select-loading">&nbsp;</span>
                </div>
              </div>
              <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('plugin_position'); ?></label>
                <div class="controls">
                  <select name="plugin_position" id="plugin_position">
                      <?php
                      $column_no=(isset($queryup[0]->column_no))? $queryup[0]->column_no : 1;
                      $plugin_show=(isset($queryup[0]->plugin_show))? $queryup[0]->plugin_show : 0 ;
                      ?>
                      <?php  if($column_no && $plugin_show ==0 ){ ?>
                    <option value="0" <?php if($plugin_show ==0){ ?> selected="selected" <?php } ?> >None</option>

                      <?php  }else if($column_no==1 && $plugin_show ==1 ){ ?>
                    <option value="1" <?php if($plugin_show ==1){ ?> selected="selected" <?php } ?> >On the Left/Top</option>

                      <?php }else if($column_no ==2 && $plugin_show ){ ?>

                    <option value="1" <?php if($plugin_show ==1){ ?> selected="selected" <?php } ?> >On the Left/Top</option>
                    <option value="2"  <?php if($plugin_show ==2){ ?> selected="selected" <?php } ?>  >On the Right/Bottom</option>

                      <?php  }else if($column_no ==3 && $plugin_show ){ ?>

                    <option value="1" <?php if($plugin_show ==1){ ?> selected="selected" <?php } ?> >On the Left/Top</option>
                    <option value="2"  <?php if($plugin_show ==2){ ?> selected="selected" <?php } ?>  >On the Right/Bottom</option>
                    <option value="3"  <?php if($plugin_show ==3){ ?> selected="selected" <?php } ?>  >On the Center/Middle</option>
                      <?php } ?>

                  </select>



                </div>
              </div>
            </div>
          </fieldset>
          <fieldset class="sheet">

            <div class="clear"></div>
            <legend><?php echo $this->lang->line('appearance'); ?></legend>

            <div class="clear"></div>
            <div class="content-inner-box">


              <div class="control-group">
                <label class="control-label"><?php echo $this->lang->line('background_image'); ?></label>
                <div class="controls">
                      <a id="add-image" class="btn btn-info btn-primary" href="javascript:void(0)"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('upload_background'); ?></a><?php if($queryup[0]->image_path){  ?><span class="alink-area"><a class="lightbox" href="<?php echo site_url().$queryup[0]->image_path; ?>">Show Image</a>&nbsp;|&nbsp;<a href="<?php echo site_url($this->uri->segment(1,0).'/customize_page/delete_image/'.$access_slug.'/'.$this->uri->segment(4,0)); ?>">Delete Background Image</a></span><?php } ?>
                </div>
              </div>
              <div class="control-group">
                <label for="input01" class="control-label"><?php echo $this->lang->line('alternate_color'); ?></label>
                <div class="controls">
                    <?php $background_color=(isset($queryup[0]->background_color))? $queryup[0]->background_color : set_value('background_color'); ?>
                  <label class="checkbox inline">
                    <input type="radio" value="1" name="background_color" <?php if($background_color ==1 ){?>  checked="checked" <?php } ?> title="Check box">  <div class="radio_text"><?php echo $this->lang->line('yes'); ?></div>
                  </label>
                  <label class="checkbox inline">
                    <input type="radio"  value="0" name="background_color" title="Check box" <?php if($background_color ==0 || $background_color ==""  ){?>  checked="checked" <?php } ?> > <div class="radio_text"><?php echo $this->lang->line('no'); ?></div>
                  </label>
                  <label class="checkbox inline">
                    <input type="radio"  value="2" name="background_color" title="Check box" <?php if($background_color ==2){?>  checked="checked" <?php } ?> > <div class="radio_text"><?php echo $this->lang->line('default'); ?></div>
                  </label>
                </div>
              </div>

              <div>
              </div>
            </div>
          </fieldset>
          <fieldset class="sheet">
            <div class="clear"></div>
            <legend>  <?php echo $this->lang->line('page_seo'); ?></legend>
            <div class="clear"></div>
            <div class="content-inner-box">
              <div class="control-group">
                <label class="control-label">&nbsp;</label>
                <div class="controls">
                  <a style="font-weight: bold;" id="add-seo" class="btn btn-info btn-primary" href="javascript:void(0)"><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_seo'); ?></a>&nbsp;
                    <?php
                    $keywords_page_id=(isset($queryup[0]->keywords_page_id))? $queryup[0]->keywords_page_id : set_value('keywords_page_id');
                    if(!empty($keywords_page_id)){
                    ?>
                    <a style="line-height: 30px" href="<?php echo site_url($this->uri->segment(1,0).'/customize_page/seo_delete/'.$access_slug.'/'.$this->uri->segment(4,0).'/'.$keywords_page_id); ?>">Delete SEO</a>
                <?php } ?>
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
<?php $this->load->view('websites/customize_page/image')?>
<?php $this->load->view('websites/customize_page/seo')?>
<?php $this->load->view('admin/layouts/footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){

    $('.layout_show').click(function()
    {
      var layoutid=$(this).val();
      var plugin_id=$('#plugin_id').val();

      $('#layoutID').html('');
      $('#layoutID').val(layoutid);
      $.ajax({
        url: "<?php echo site_url('websites/customize_page/change_plugin_position/'.$access_slug.'/'.$this->uri->segment(4,0))?>",
        type: "POST",
        data: "layoutid="+layoutid+"&plugin_id="+plugin_id,
        success: function(val){
          //alert(val);
          $('#plugin_position').html(val);
          //console.log(value);
        }
        // error: function(){}
      }); // End Ajax
      //alert(layoutid);


    });

    $('#plugin_id').change(function()
    {

      var layoutid=$('#layoutID').val();
      var plugin_id=$('#plugin_id').val();

      //alert(layoutid);

      $.ajax({
          url: "<?php echo site_url('websites/customize_page/change_plugin_position/'.$access_slug.'/'.$this->uri->segment(4,0))?>",
          type: "POST",
          data: "layoutid="+layoutid+"&plugin_id="+plugin_id,
        success: function(val){
          //alert(val);
          $('#plugin_position').html(val);
          //console.log(value);
        }
        // error: function(){}
      }); // End Ajax
    });

    $('#column_type').change(function()
    {
      //var type=$('#column_type').val();
    });

  });
</script>