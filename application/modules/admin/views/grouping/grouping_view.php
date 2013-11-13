<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs"> <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li><li><?php echo $this->lang->line('grouping'); ?></li> 
</ul>

<div class="clear"></div>   
<div id="content-box-container">
<table style="height:100%;">
<tbody>
<tr><td height="20"></td></tr>
<tr>
<td  valign="top" id="bnc">
<?php $this->load->view('admin/admin_layouts/top_menu')?>
<div id="wptouch-tabbed-area" class="round-6 box-shadow persist-area" ><!-- Start box -->
<div class="content-box">
<div class="left-area">
<?php $this->load->view('admin/admin_layouts/left_menu'); ?>
</div>
<form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url('settings/grouping/save')?>" method="post">
    <input type="hidden" name="random_id" value="<?php echo(isset($queryup[0]->random_id))? $queryup[0]->random_id : set_value('random_id'); ?>" />
    <div class="right-area ">
    <div class="submit-bar persist-header" >
    <div id="message-box"><?php $this->load->view('admin/admin_layouts/message'); ?></div>
    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
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
    
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="<?php echo site_url('settings/grouping')?>"><?php echo $this->lang->line('grouping'); ?></a></div>
			<div class="step-dark-right">&nbsp;</div>
            <div class="step-no-off">2</div>
            <div class="step-light-left"><a href="<?php echo site_url('settings/grouping/listing/0')?>"><?php echo $this->lang->line('grouping_list'); ?></a></div>
            <div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
            <div class="step-light-left"><a href="<?php echo site_url('settings/grouping/grouping_ordering')?>"><?php echo $this->lang->line('grouping_ordering'); ?></a></div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
            </div>
<!--  end step-holder -->
</div>
<div class="clear"></div>
<div class="content-inner-box">
         <div class="control-group">
            <label for="select01" class="control-label"><?php echo $this->lang->line('parents_name'); ?></label>
            <div class="controls">

                    <select name="category_id[]" id="category_id" multiple="multiple" style="width:370px">
                        <?php
                        $category_id=(isset($queryup[0]->category_id))? $queryup[0]->category_id : set_value('category_id');
                        $dbsubcatID =  explode(',',$category_id);
                        foreach($getCategory as $parent_id){
                        ?>
                        <optgroup label="<?php echo $parent_id->category_name; ?>">
                            <?php

                            $i=0;
                            $subcatID =  explode(',',$parent_id->subid);
                            $sub_category =  explode(',',$parent_id->sub_category);
                            if(!empty($subcatID)){
                            foreach($subcatID  as $subid){
                            ?>
                            <option <?php if(in_array($subid,$dbsubcatID)){ echo 'selected="selected"'; } ?>  value="<?php echo $subid ;?>"><?php echo $sub_category[$i]; ?></option>
                            <?php $i++;
                            } }
                            ?>
                        </optgroup>
                        <?php } ?>
                    </select>


            </div>
          </div>
            <div class="control-group">
            <label for="select01" class="control-label"><?php echo $this->lang->line('parents_name'); ?></label>
            <div class="controls">
            <select name="parent_id" id="parent_id">
                <option value="0"><?php echo $this->lang->line('select_one'); ?></option>
                <?php
                $parent_id=(isset($queryup[0]->parent_id))? $queryup[0]->parent_id : set_value('parent_id');
                foreach($parentList as $parent){ ?>
                <option <?php if( $parent_id == $parent->grouping_id ){ echo "selected='selected'"; } ?> value="<?php echo $parent->grouping_id; ?>"><?php echo $parent->name; ?></option>
                <?php } ?>
            </select>
            </div>
          </div>

          <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('grouping_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('grouping_name'); ?>" class="validate[required]" name="name" id="name" value="<?php echo(isset($queryup[0]->name))? $queryup[0]->name : set_value('name'); ?>" >
            </div>
          </div>

        <div class="control-group">
            <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('group_settings'); ?></label>
            <div class="controls">

                <label class="checkbox inline">
                    <?php $global=(isset($queryup[0]->global))? $queryup[0]->global : set_value('global'); ?>
                    <input title="Check box" name="global" type="checkbox" value="1" <?php if($global ==1 ){?>  checked="checked" <?php } ?>  /><?php echo $this->lang->line('global_group'); ?>
                </label>
                <label class="checkbox inline">
                    <?php $admin=(isset($queryup[0]->admin))? $queryup[0]->admin : set_value('admin'); ?>
                    <input title="Check box" name="admin" type="checkbox" value="1" <?php if($admin ==1 ){?>  checked="checked" <?php } ?>  /><?php echo $this->lang->line('admin_group'); ?>
                </label>

            </div>
        </div>
        <div class="control-group">
            <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('group_options'); ?></label>
            <div class="controls">
                <label class="radio inline">
                    <?php $group_option=(isset($queryup[0]->group_option))? $queryup[0]->group_option : set_value('group_option'); ?>
                    <input title="Check box" name="group_option" type="radio" value="1" <?php if($group_option == 1 ){?>  checked="checked" <?php } ?>  /><?php echo $this->lang->line('group_radio'); ?>
                </label>
                <label class="radio inline">
                     <input title="Check box" name="group_option" type="radio" value="2" <?php if($group_option == 2 ){?>  checked="checked" <?php } ?>  /><?php echo $this->lang->line('group_checkbox'); ?>
                </label>
            </div>
        </div>
        <div class="control-group">
            <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('is_publish'); ?></label>
            <div class="controls">
                <label class="checkbox inline">
                    <?php $status=(isset($queryup[0]->status))? $queryup[0]->status : 1; ?>
                    <input title="Check box" name="status" type="checkbox" value="1" <?php if($status ==1 ){?>  checked="checked" <?php } ?>  />
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
<?php $this->load->view('admin/layouts/footer'); ?>
<script type="text/javascript">

    $("#category_id").multiselect().multiselectfilter();
    $("#parent_id").multiselect({
        multiple: false,
        header: "Select an option",
        noneSelectedText: "Select an Option",
        selectedList: 1
    }).multiselectfilter();


</script>