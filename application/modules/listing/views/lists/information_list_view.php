<?php $this->load->view('admin/layouts/header')?>
<ul id="breadcrumbs">
    <li><div id="home"><?php echo $this->lang->line('home'); ?></div><a href="<?php echo site_url();?>" id="first-bread"><?php echo $this->lang->line('home'); ?></a></li>
    <li><a href="<?php echo site_url($this->uri->segment(1,NULL).'/'.$this->uri->segment(2,NULL));?>" ><?php echo $store_name; ?>'info</a></li>
    <li><?php echo $title; ?></li>
    <li id="breadcrumb-right"><button class="btn  btn-info" id="add_product" data-toggle="modal" href="#myModal" ><i class="icon-edit icon-white"></i><?php echo $this->lang->line('add_new_product'); ?></button></li>
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
                            <div class="submit-bar persist-header" >
                                <div id="message-box"><p class="jquery_msg"></p></div>

                            </div>
                            <?php if(validation_errors()){?>
                            <div class="alert-error">
                                <a class="close" data-dismiss="alert">×</a>
                                <h4 class="alert-heading"><?php echo $this->lang->line('validation_error'); ?></h4>
                                <div class="valiade_msg"><?php echo validation_errors(); ?></div>
                            </div>
                            <?php }?>
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="grid-table">
                                <thead>
                                <tr>
                                    <th><?php echo $this->lang->line('title'); ?></th>
                                    <th><?php echo $this->lang->line('created'); ?></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody class="sorting" >
                                <?php foreach ($query as $rows ){ ?>
                                <tr class="gradeX " id="listItem_<?php echo $rows->product_id; ?>">

                                    <td><?php echo $rows->product_name; ?></td>
                                    <td><?php echo $this->global_model->customDateFormat($rows->created,'d-m-Y'); ?></td>

                                    <td class="center">
                                        <a class="listing-status" href="javascript:void(0)" id="<?php echo $rows->product_id ?>" rel="<?php echo site_url('listing/status/'.$access_slug.'/'.$rows->slug); ?>"><span class="<?php if($rows->status == 1){ echo 'publish-icon'; }else{ echo 'unpublish-icon';} ?>" id="listing-<?php echo $rows->product_id ?>"></span></a>
                                        <img src="<?php echo base_url();?>assets/images/arrow.png" alt="move" width="16" height="16" class="handle" />
                                        <a href="<?php echo site_url($this->uri->segment(1,0).'/product/'.$access_slug.'/'.$rows->slug); ?>" class="edit_img" ></a>
                                        <a rel="<?php echo site_url($this->uri->segment(1,0).'/listing/delete/'.$access_slug.'/'.$rows->slug); ?>" class="delete_img" href="javascript:void(0)"></a>
                                    </td>
                                </tr>

                                    <?php } ?>
                                </tbody>

                            </table>
                            <div class="clear"></div>
                            <br/>
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
<?php $this->load->view('listing/product/add_product')?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
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
                    url:"<?php echo site_url('listing/sorting/'.$access_slug)?>",
                    data:order,
                    cache: false,
                    success: function(html){
                        $('#loader').html(html);
                    }
                });
            }
        });

    $(".sorting").delegate(".listing-status", "click", function() {

        var url=$(this).prop('rel');
        var ID=$(this).prop('id');
        $.ajax({
            dataType:'json',
            url:url,
            data:'',
            type: "POST",
            cache: false,
            success: function(val){
                $('#listing-'+ID).removeClass(val.removeClass);
                $('#listing-'+ID).addClass(val.addClass);

            }
        })
    })

});
</script>
<script language="javascript">
    $(document).ready(function(){

        oTable = $('#grid-table').dataTable({
            "bJQueryUI": true,
            "bPaginate": false,
            "bLengthChange": false,
            "sPaginationType": "full_numbers",
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 2 ] },
                { "sWidth": "10%", "aTargets": [ 1 ] },
                { "sWidth": "15%", "aTargets": [ 2 ] }

            ],
            "aaSorting": [[1,'asc']]


        });


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

<style type="text/css">
    #grid-table{ border-left: 1px solid #D3D3D3;}
    #grid-table_filter label{ display: block;line-height: 27px;}
    #grid-table_filter label input{float: right!important;}

</style>

