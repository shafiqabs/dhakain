<?php $this->load->view('admin/layouts/header')?>

<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL));?>" ><?php echo $this->uri->segment(2,NULL); ?></a></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" onclick="window.location='<?php echo site_url('sites/tradefair/create')?>'" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_tradefair'); ?></button></li>
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

                        <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/tradefair/save')?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="random_id" id="random_id" value="<?php echo isset($queryup->random_id)? $queryup->random_id :set_value('random_id');?>">
                            <div class="right-area ">
                                <div class="submit-bar persist-header" >
                                    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
                                    <div class="submit-action"><ul><li><button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button></li><li><button type="reset" class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
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
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('location'); ?></label>
                                        <div class="controls">
                                            <select id="location_id" name="location_id" class="validate[required]">
                                                <option value=''>---<?php echo $this->lang->line('select_one'); ?>---</option>
                                                <?php
                                                $location_id =(isset($queryup->location_id))? $queryup->location_id : set_value('location_id');
                                                if(!empty($locationres)){
                                                    foreach($locationres as $rows):
                                                        ?>
                                                        <option value="<?php echo $rows->settings_id; ?>" <?php if($location_id == $rows->settings_id ){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name; ?></option>
                                                    <?php endforeach; } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('trade_type'); ?></label>
                                        <div class="controls">
                                            <select id="fair_type_id" name="fair_type_id" class="validate[required]">
                                                <option value=''>---<?php echo $this->lang->line('select_one'); ?>---</option>
                                                <?php
                                                $fair_type_id =(isset($queryup->fair_type_id))? $queryup->fair_type_id : set_value('fair_type_id');
                                                if(!empty($fairtyperes)){
                                                    foreach($fairtyperes as $fairs):
                                                        ?>
                                                        <option value="<?php echo $fairs->settings_id; ?>" <?php if($fair_type_id == $fairs->settings_id ){?> selected="selected" <?php } ?> ><?php echo $fairs->settings_name; ?></option>
                                                    <?php endforeach; } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('title'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('title'); ?>" class="validate[required] input-medium  span6" name="title" id="title" value="<?php echo(isset($queryup->title))? $queryup->title : set_value('title'); ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('organizer'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('organizer'); ?>" class="validate[required] input-medium  span6" name="organizer" id="organizer" value="<?php echo(isset($queryup->organizer))? $queryup->organizer : set_value('organizer'); ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('organizer_information'); ?></label>
                                        <div class="controls">

                                            <textarea name="organizer_information" id="organizer_information" rows="" cols="" class="textarea-no-midum"><?php echo isset($queryup->organizer_information) ? $queryup->organizer_information : set_value('organizer_information'); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('start_end_date'); ?></label>
                                        <div class="controls">
                                            <input type="text" class="validate[required]" name="start_date" id="start_date" value="<?php echo isset($queryup->start_date) ? getChangeDateFormat($queryup->start_date) : set_value('start_date'); ?>" />To<input type="text" class="validate[required]" name="end_date" id="end_date" value="<?php echo isset($queryup->end_date) ? getChangeDateFormat($queryup->end_date) : set_value('end_date'); ?>" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('start_end_time'); ?></label>
                                        <div class="controls">
                                            <input type="text" class="validate[required]" name="start_time" id="open_time" value="<?php echo isset($queryup->start_time) ? getChangeTimeFormat($queryup->start_time) : set_value('start_time'); ?>"  />To<input type="text" class="validate[required]"  name="end_time" id="end_time" value="<?php echo isset($queryup->end_time) ? getChangeTimeFormat($queryup->end_time) : set_value('end_time'); ?>" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label"><?php echo $this->lang->line('content'); ?></label>
                                        <div class="controls">
                                            <textarea name="content" id="content" rows="" cols="" class="input-textarea-large"><?php echo isset($queryup->content) ? $queryup->content : set_value('content'); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"><?php echo $this->lang->line('excerpt'); ?></label>
                                        <div class="controls">
                                            <textarea name="excerpt" id="excerpt" rows="" cols="" class="textarea-no-midum"><?php echo isset($queryup->excerpt) ? $queryup->excerpt : set_value('excerpt'); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('ticket'); ?></label>
                                        <div class="controls">
                                            <?php $ticket=(isset($queryup->ticket))? $queryup->ticket : set_value('ticket'); ?>

                                            <input type="checkbox" id="ticket" <?php if($ticket ==1){?> checked="checked" <?php } ?>  name="ticket" value="1" class="input-file">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('ticket_price'); ?></label>
                                        <div class="controls">
                                            <div class="input-prepend input-append">
                                                <span class="add-on">৳</span><input type="text"  value="<?php echo (isset($queryup->ticket_price))? $queryup->ticket_price : set_value('ticket_price'); ?>" name="ticket_price" class="validate[custom[number]] input-small " id="ticket_price" size="16"><span class="add-on">BDT</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('ticket_online'); ?></label>
                                        <div class="controls">
                                            <input type="text" name="ticket_online" id="ticket_online" class="span4" value="<?php echo (isset($queryup->ticket_online))? $queryup->ticket_online : set_value('ticket_online'); ?>" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('address'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('address'); ?>" class="input-medium  span6" name="address" id="address" value="<?php echo(isset($queryup->address))? $queryup->address : set_value('phone'); ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('phone'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('phone'); ?>" class="validate[required,custom[number]] input-medium  span3" name="phone" id="phone" value="<?php echo(isset($queryup->phone))? $queryup->phone : set_value('phone'); ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('email'); ?></label>
                                        <div class="controls">

                                            <div class="input-prepend input-append">
                                                <span class="add-on">@</span><input type="text" placeholder="Type <?php echo $this->lang->line('email'); ?>" class="validate[custom[email]] input-medium  span3" name="email" id="email" value="<?php echo(isset($queryup->email))? $queryup->email : set_value('email'); ?>" >
                                            </div>

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('web_url'); ?></label>
                                        <div class="controls">
                                            <input type="text" placeholder="Type <?php echo $this->lang->line('web_url'); ?>" class=" input-medium  span3" name="web_url" id="web_url" value="<?php echo(isset($queryup->web_url))? $queryup->web_url : set_value('web_url'); ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('is_slide_show'); ?></label>
                                        <div class="controls">
                                            <?php $is_slide_show=(isset($queryup->is_slide_show))? $queryup->is_slide_show : set_value('is_slide_show'); ?>
                                            <input type="checkbox" id="is_slide_show" <?php if($is_slide_show ==1){?> checked="checked" <?php } ?>  name="is_slide_show" value="1" class="input-file">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('is_partner'); ?></label>
                                        <div class="controls">
                                            <?php $is_partner=(isset($queryup->is_partner))? $queryup->is_partner : set_value('is_partner'); ?>
                                            <input type="checkbox" id="is_partner" <?php if($is_partner ==1){?> checked="checked" <?php } ?>  name="is_partner" value="1" class="input-file">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('is_sponsor'); ?></label>
                                        <div class="controls">
                                            <?php $is_sponsor=(isset($queryup->is_sponsor))? $queryup->is_sponsor : set_value('is_sponsor'); ?>
                                            <input type="checkbox" id="is_sponsor" <?php if($is_sponsor ==1){?> checked="checked" <?php } ?>  name="is_sponsor" value="1" class="input-file">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('image_name'); ?></label>
                                        <div class="controls">
                                            <?php $image_path = isset($queryup->image_path) ? $queryup->image_path : set_value('image_path'); ?>
                                            <input type="file" id="image_name" class="input-file" name="image_name">

                                        </div>
                                        <?php
                                        $image_path=isset($queryup->image_path)? $queryup->image_path :'';
                                        if($image_path){ ?>
                                            <div id="featureimage-box">
                                                <?php
                                                $image_path=isset($queryup->image_path)? $queryup->image_path :'';
                                                if(file_exists($image_path))
                                                    echo '<img id="featureimage" src="'.base_url().'/'.$image_path.'">';
                                                ?>
                                            </div>
                                        <?php } ?>
                                    </div>


                                    <div class="control-group">
                                        <label  class="control-label"><?php echo $this->lang->line('status'); ?></label>
                                        <div class="controls">
                                            <?php $status=(isset($queryup->status))? $queryup->status : set_value('status'); ?>
                                            <input type="checkbox" id="status" <?php if($status ==1){?> checked="checked" <?php } ?>  name="status" value="1" class="input-file">
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
<script language="javascript" type="text/javascript">

    $(document).ready(function(){

        $( "#start_date" ).datepicker({

            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function( selectedDate ) {
                $( "#start_date" ).datepicker( "option", "minDate", selectedDate );
            }
        });
        $( "#end_date" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function( selectedDate ) {
                $( "#end_date" ).datepicker( "option", "maxDate", selectedDate );
            }
        });
        $('#open_time').timepicker();
        $('#end_time').timepicker();



        /*$("input[type=file]").filestyle({
         image: "<?php echo base_url()?>/assets/images/upload_file.gif",
         imagewidth :78,
         imageheight : 29,
         width :145
         });*/
    });
</script>

