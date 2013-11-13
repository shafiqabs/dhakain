<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL));?>" ><?php echo $this->uri->segment(1,NULL); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL));?>" ><?php echo $this->uri->segment(2,NULL); ?></a></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" onclick="window.location='<?php echo site_url('sites/sitecontent/create')?>'" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_sitecontent'); ?></button></li>
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

                        <form class="form-horizontal" name="delete_list" id="delete_list" action="<?php echo site_url($this->uri->segment(1,0).'/sitecontent/delete/')?>" method="post" enctype="multipart/form-data">
                            <div class="right-area ">
                                <div class="submit-bar persist-header" >
                                    <div id="message-box"><?php $this->load->view('admin/layouts/message'); ?></div>
                                    <div class="submit-action"><ul>

                                            <li><a href="javascript:void(0)" class="btn btn-danger"><i class="icon-trash icon-white"></i><?php echo $this->lang->line('all_delete'); ?></a></li>
                                            <li><button class="btn"><?php echo $this->lang->line('cancel'); ?></button></li></ul></div>
                                </div>

                                <?php if(validation_errors()){?>
                                    <div class="alert-error">
                                        <a class="close" data-dismiss="alert">×</a>
                                        <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
                                        <div class="valiade_msg"><?php echo validation_errors(); ?></div>
                                    </div>
                                <?php }?>

                                <fieldset class="sheet">
                                    <legend ><?php echo $title; ?></legend>
                                    <?php $this->load->view('admin/layouts/breadcrumbs'); ?>
                                    <div>

                                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
                                            <thead>
                                            <tr>
                                                <th><input type="checkbox" id="allchecked" /></th>
                                                <th><?php echo $this->lang->line('menu_name'); ?></th>
                                                <th><?php echo $this->lang->line('menu_level'); ?></th>
                                                <th><?php echo $this->lang->line('parent_menu'); ?></th>

                                                <th>&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sorting" >
                                            <?php
                                            foreach ($query as $rows ){
                                                ?>
                                                <tr class="gradeX " id="listItem_<?php echo $rows->random_id; ?>">
                                                    <td><input type="checkbox" name="list[]" value="<?php echo $rows->random_id; ?>" /></td>
                                                    <td><?php echo $rows->menu_name; ?></td>
                                                    <td><?php echo $rows->menu_level; ?></td>
                                                    <td><?php echo $rows->parent_menu; ?></td>

                                                    <td class="center">
                                                        <img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" />
                                                        <?php if($rows->status ==1){ ?><a class="publish_img" href="<?php echo site_url($this->uri->segment(1,0).'/sitecontent/status/'.$rows->random_id); ?>"></a><?php } else if($rows->status ==0){ ?><a class="unpublish_img" rel="" id="" href="<?php echo site_url($this->uri->segment(1,0).'/sitecontent/status/'.$rows->random_id); ?>"></a><?php } ?>
                                                        <a href="<?php echo site_url($this->uri->segment(1,0).'/sitecontent/edit/'.$rows->random_id); ?>" class="edit_img" ></a>
                                                        <a rel="<?php echo site_url($this->uri->segment(1,0).'/sitecontent/delete/'.$rows->random_id); ?>" class="delete_img" href="javascript:void(0)"></a>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                            </tbody>

                                        </table>


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
<script language="javascript">
    $(document).ready(function(){

        oTable = $('#grid-table').dataTable({
            "bJQueryUI": true,
            "bPaginate": false,
            "bLengthChange": false,
            "sPaginationType": "full_numbers",
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0,4] },
                { "sWidth": "1%", "aTargets": [ 0 ] },
                { "sWidth": "17%", "aTargets": [ 3] },
                { "sWidth": "37%", "aTargets": [ 2 ] },
                { "sWidth": "20%", "aTargets": [ 1 ] }

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
                    url:"<?php echo site_url('sites/sitecontent/ordering')?>",
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

