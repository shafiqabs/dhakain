<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL).'/store/'.$access_slug);?>" ><?php echo $store_name; ?></a></li>
    <li><?php echo $this->lang->line('branch'); ?></li>

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

                            <div class="right-area ">
                                <form class="form-horizontal" name="form" id="formID4" action="<?php echo site_url($this->uri->segment(1,0).'/branch/save/'.$access_slug)?>" method="post" enctype="multipart/form-data">
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

                                    <input type="hidden" name="random_id" id="random_id" value="<?php echo isset($queryup->random_id)? $queryup->random_id :set_value('random_id');?>">

                                    <fieldset class="sheet">

                                    <div class="clear"></div>
                                    <legend><?php echo $title; ?></legend>

                                    <div class="clear"></div>
                                    <div class="content-inner-box">
                                       <div class="control-group" >
                                            <label  class="control-label" style="width: 100px;"><?php echo $this->lang->line('address'); ?></label>
                                            <div class="controls" style="margin-left: 122px;">
                                                <input type="text" placeholder="Type <?php echo $this->lang->line('address'); ?>" class="validate[required] input-large  span6" name="address" id="address" value="<?php echo(isset($queryup->address))? $queryup->address:set_value('address'); ?>" ><span class="small_loading"></span>
                                            </div>
                                        </div>
                                        <div class="form-box">

                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('contact_person'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type settings name" class="validate[required] input-medium  span3" name="contact_person" id="contact_person" value="<?php echo(isset($queryup->contact_person))? $queryup->contact_person : set_value('contact_person'); ?>" >
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('email'); ?></label>
                                                <div class="controls">
                                                    <div class="input-prepend">
                                                        <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="Type <?php echo $this->lang->line('email'); ?>" class="validate[custom[email]] span2" name="email" id="email" value="<?php echo(isset($queryup->email))? $queryup->email : set_value('email'); ?>" >
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('cell_phone'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('cell_phone'); ?>" class="span3" name="cell_phone" id="cell_phone" value="<?php echo(isset($queryup->cell_phone))? $queryup->cell_phone : set_value('cell_phone'); ?>" >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('business_phone'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('business_phone'); ?>" class="validate[required] span3" name="business_phone" id="business_phone" value="<?php echo(isset($queryup->business_phone))? $queryup->business_phone : set_value('business_phone'); ?>" >
                                                </div>
                                            </div>


                                            <div class="control-group">
                                                <label for="optionsCheckbox" class="control-label"><?php echo $this->lang->line('publish_status'); ?></label>
                                                <div class="controls">
                                                    <?php $status=(isset($queryup->status))? $queryup->status : 1; ?>
                                                    <label class="radio">
                                                        <input type="radio" <?php if($status ==1){ ?> checked="checked" <?php } ?> value="1" id="optionsRadios1" name="status">
                                                        <?php echo $this->lang->line('publish'); ?>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" value="0" <?php if($status ==0){ ?> checked="checked" <?php } ?> id="optionsRadios2" name="status">
                                                        <?php echo $this->lang->line('un_publish'); ?>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-box">

                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('location'); ?></label>
                                                <div class="controls">

                                                    <select size="1" name="location_id" id="location_id" class="validate[required] select">
                                                        <option value="">&lt;Please Select&gt;</option>
                                                        <?php
                                                        $location_id=(isset($queryup->location_id))? $queryup->location_id : set_value('location_id');
                                                        $query=$this->settings_model->settings_under_list($id=2);
                                                        foreach ( $query->result() as $rows ){
                                                            ?>
                                                            <option value="<?php echo $rows->settings_id ?>" <?php if( $rows->settings_id ==$location_id){?> selected="selected" <?php } ?> ><?php echo $rows->settings_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('city'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('city'); ?>" class="span2" name="city" id="city" value="<?php echo(isset($queryup->city))? $queryup->city : set_value('city'); ?>" >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('postal_code'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('postal_code'); ?>" class="span2" name="postal_code" id="postal_code" value="<?php echo(isset($queryup->postal_code))? $queryup->postal_code : set_value('postal_code'); ?>" >
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('fax'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('fax'); ?>" class="span2" name="fax" id="fax" value="<?php echo(isset($queryup->fax))? $queryup->fax : set_value('fax'); ?>" >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('district'); ?></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Type <?php echo $this->lang->line('district'); ?>" class="span2" name="district" id="district" value="<?php echo(isset($queryup->district))? $queryup->district : set_value('district'); ?>" >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label  class="control-label"><?php echo $this->lang->line('google_maps'); ?>?</label>
                                                <div class="controls">
                                                    <?php $google_maps=(isset($queryup->google_maps))? $queryup->google_maps : set_value('google_maps'); ?>
                                                    <input type="checkbox" id="status" <?php if($google_maps ==1){?> checked="checked" <?php } ?>  name="google_maps" value="1" class="input-file">
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </fieldset>
                                </form>
                                <?php if(!empty($resultList)){?>
                                <form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url($this->uri->segment(1,0).'/branch/delete/'.$access_slug)?>" method="post" enctype="multipart/form-data">

                                    <fieldset class="sheet">
                                    <legend ><?php echo $branch_list; ?></legend>
                                        <div class="input_line input_line_mod">
                                            <div id="category_crumb" class="category_crumb"><input type="button"  class="btn btn-small btn-primary btn-danger" style="float: right; margin-right: 20px;" value="<?php echo $this->lang->line('all_delete'); ?>" ></div>
                                        </div>
                                    <div>

                                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
                                            <thead>
                                            <tr>
                                                <th><input type="checkbox" id="allchecked"   /></th>

                                                <th><?php echo $this->lang->line('location'); ?></th>
                                                <th><?php echo $this->lang->line('contact_person'); ?></th>

                                                <th>&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sorting" >
                                            <?php foreach ($resultList as $rows ){ ?>
                                                <tr class="gradeX " id="listItem_<?php echo $rows->random_id; ?>">
                                                    <td><input type="checkbox" name="list[]" value="<?php echo $rows->random_id; ?>" /></td>

                                                    <td><?php echo $rows->settings_name; ?></td>
                                                    <td><?php echo $rows->contact_person; ?></td>
                                                    <td class="center">
                                                        <img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" />
                                                        <?php if($rows->status ==1){ ?><a class="publish_img" href="<?php echo site_url($this->uri->segment(1,0).'/branch/status/'.$access_slug.'/'.$rows->random_id); ?>"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="" id="" href="<?php echo site_url($this->uri->segment(1,0).'/branch/status/'.$access_slug.'/'.$rows->random_id); ?>"></a><?php } ?>
                                                        <a href="<?php echo site_url($this->uri->segment(1,0).'/branch/edit/'.$access_slug.'/'.$rows->random_id); ?>" class="edit_img" ></a>
                                                        <a rel="<?php echo site_url($this->uri->segment(1,0).'/branch/delete/'.$access_slug.'/'.$rows->random_id); ?>" class="delete_img" href="javascript:void(0)"></a>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                          </tbody>
                                        </table>

                                    </div>
                                </fieldset>
                                    <?php } ?>
                                </form>

                            </div>



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

<script language="javascript">
    $(document).ready(function(){

        oTable = $('#grid-table').dataTable({
            "bJQueryUI": true,
            "bPaginate": false,
            "bLengthChange": false,
            "sPaginationType": "full_numbers",
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0,3] },
                { "sWidth": "1%", "aTargets": [ 0 ] },
                { "sWidth": "30%", "aTargets": [ 2 ] },
                { "sWidth": "15%", "aTargets": [3] }


            ],
            "aaSorting": [[1,'asc']]


        });

        $(".btn-danger").click(function(){

            var jconfirm='Are sure went you submit ?';
            var confirm_title='Confirmation Dialog';
            jConfirm(jconfirm,confirm_title,function(r) {
                if(r){
                    document.delete_list.submit();
                }
            });
        })

        $(".delete_img").click(function(){

            var rel=$(this).attr('rel');
            var jconfirm='Are sure went you submit ?';
            var confirm_title='Confirmation Dialog';
            jConfirm(jconfirm,confirm_title,function(r) {
                if(r){
                    window.location.href=rel;
                }
            });
        })


    });
</script>
<script type="text/javascript">
    // When the document is ready set up our sortable with it's inherant function(s)
    $(document).ready(function() {
        $(".sorting").sortable({
            opacity: '0.5',
            axis:'vertically',
            handle : '.handle',
            update : function () {
                var order = $(this).sortable('serialize');
                $.ajax({
                    type: "POST",
                    url:"<?php echo site_url('global/branch/ordering/'.$access_slug)?>",
                    data:order,
                    cache: false,
                    success: function(html){
                        $('#loader').html(html);
                    }
                });
            }
        });
    });
</script>
