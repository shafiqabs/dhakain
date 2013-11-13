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
                            <fieldset class="sheet">
                                <div class="clear"></div>
                                <legend><?php echo $title; ?></legend>
                                <div class="clear"></div>
                                <div class="content-inner-box">
                                    <table id="flexPaging" style="display:block"></table>
                                </div>
                            </fieldset>
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
<script type="text/javascript">
    function sortAlpha(com)
    {
        var dtx =[{name: "letter_pressed",value: com}];
        $("#flexPaging").flexOptions({params: dtx});
        $("#flexPaging").flexReload();
    }
    $(document).ready(function(){

        $("#flexPaging").flexigrid
                (
                        {
                            url: '<?php echo $url; ?>',
                            dataType: 'json',
                            colModel : [<?php echo $colModel; ?>],
                            buttons : [
                                {name: 'ALL', onpress: sortAlpha},
                                {name: 'A', onpress: sortAlpha},
                                {name: 'B', onpress: sortAlpha},
                                {name: 'C', onpress: sortAlpha},
                                {name: 'D', onpress: sortAlpha},
                                {name: 'E', onpress: sortAlpha},
                                {name: 'F', onpress: sortAlpha},
                                {name: 'G', onpress: sortAlpha},
                                {name: 'H', onpress: sortAlpha},
                                {name: 'I', onpress: sortAlpha},
                                {name: 'J', onpress: sortAlpha},
                                {name: 'K', onpress: sortAlpha},
                                {name: 'L', onpress: sortAlpha},
                                {name: 'M', onpress: sortAlpha},
                                {name: 'N', onpress: sortAlpha},
                                {name: 'O', onpress: sortAlpha},
                                {name: 'P', onpress: sortAlpha},
                                {name: 'Q', onpress: sortAlpha},
                                {name: 'R', onpress: sortAlpha},
                                {name: 'S', onpress: sortAlpha},
                                {name: 'T', onpress: sortAlpha},
                                {name: 'U', onpress: sortAlpha},
                                {name: 'V', onpress: sortAlpha},
                                {name: 'W', onpress: sortAlpha},
                                {name: 'X', onpress: sortAlpha},
                                {name: 'Y', onpress: sortAlpha},
                                {name: 'Z', onpress: sortAlpha}

                            ],
                            searchitems : [<?php echo $searchitems; ?>],
                            sortname: "<?php echo $sortname; ?>",
                            sortorder: "<?php echo $sortorder; ?>",
                            usepager: <?php echo $usepager; ?>,
                            title: '<?php echo $title; ?>',
                            useRp: true,
                            rp: <?php echo $rp; ?>,
                            showTableToggleBtn: false,
                            resizable: false,
                            showToggleBtn: false,
                            width: 750,
                            onSubmit: sortAlpha('e'),
                            height: 'auto'
                        }
                );

        $("#flexPaging").delegate(".listing-status", "click", function() {
            
            var url=$(this).prop('rel');
            var agentID=$(this).prop('id');
            $.ajax({
                dataType:'json',
                url:url,
                data:'',
                type: "POST",
                cache: false,
                success: function(val){
                    $('#listing-'+agentID).removeClass(val.removeClass);
                    $('#listing-'+agentID).addClass(val.addClass);

                }
            })
        })

        $("#flexPaging").delegate(".delete", "click", function() {
            
            var url=$(this).prop('rel');
            var agentID=$(this).prop('id');
            $.ajax({
                dataType:'json',
                url:url,
                data:'',
                type: "POST",
                cache: false,
                success: function(val){
                    if(val.success == 'success'){
                        $('#row'+agentID).hide();
                        $('.jquery_msg').addClass('jquery_success').html("<?php echo $this->lang->line('delete_msg') ?>");
                    }else{
                        $('.jquery_msg').addClass('jquery_wrong').html("<?php echo $this->lang->line('duplicate_msg') ?>");

                    }

                }
            })
        })


    });


</script>

