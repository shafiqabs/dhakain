<div class="modal hide" id="storeModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $this->lang->line('add_new_shop'); ?></h3>
    </div>
    <div class="modal-body">
        <form class="well shop-form" id="storeID" action="<?php echo site_url($this->uri->segment(1,0).'/store/insert')?>" method="post">

            <div class="error_msg" id="popupmsg"></div>
            <div class="control-group">
                <label  class="control-label"><?php echo $this->lang->line('location'); ?></label>
                <div class="controls">
                    <select style="width: 470px" size="1"  name="location_id" id="location_id" class="select validate[required] ">
                        <?php
                        $query=$this->settings_model->settings_under_list($id=2);
                        foreach ( $query->result() as $rows ){
                            ?>
                            <option value="<?php echo $rows->settings_id ?>" ><?php echo $rows->settings_name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label  class="control-label"><?php echo $this->lang->line('shop_type'); ?></label>
                <div class="controls">

                    <select name="shop_type[]" class="validate[required] populate select2-offscreen" style="width:470px" multiple="" id="e8_2" tabindex="-1">
                        <?php
                        $query=$this->classified_model->categorylist("shops",$category_id=0);
                        foreach ( $query->result() as $rows ){

                            ?>
                            <optgroup label="<?php  echo $rows->category_name; ?>">
                                <?php
                                $query1=$this->classified_model->categorylist("shops",$rows->category_id);
                                foreach ( $query1->result() as $rows1 ){
                                    ?>
                                    <option value="<?php  echo $rows1->category_id; ?>"><?php  echo $rows1->category_name; ?></option>
                                <?php } ?>
                            </optgroup>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label  class="control-label"><?php echo $this->lang->line('shop_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Type <?php echo $this->lang->line('shop_name'); ?>" class="validate[required] input-xlarge span5" name="shop_name" id="shopname" value="" >

                </div>
            </div>
            <input type="hidden" name="shop_group" id="shop_group" value="shops">
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <input type="button" name="submit" id="e8_2_get2" class="btn btn-primary" value="Save changes" />
            </div>
        </form>
    </div>

</div>
<script type="text/javascript">
    // DOM Ready
    jQuery(document).ready(function(){

        jQuery("#storeID").validationEngine('attach', {promptPosition : "topLeft"});
        $('#addStore').click(function(){

            $('#storeModal').modal('toggle');

        });


        $("#shop_type, #location_id").select2({

            placeholder: "Select Location",
            allowClear: true
        });

        $('#shopname').change(function(){
            var shop_name = $("#storeID input[name=shop_name]").val();
            var location_id = $("#storeID select[name=location_id]").val();
            $.ajax({
                type: "POST",
                url:"<?php echo site_url('store/ajax_check_store_name')?>",
                data:'shop_name='+shop_name+"&location_id="+location_id+"&shop_group=shops",
                cache: false,
                beforeSend:function(){
                    $('.small_loading').html('<img class="small-load-img" src="<?php echo base_url()?>assets/images/loading-small.gif" >')
                },
                success: function(val){
                    if(val !="success"){
                        $('.error_msg').html(val).show();
                        $('#shop_name').val('');
                    }else{
                        $('.error_msg').hide();

                    }
                    $('.small_loading').html('');
                }
            })
        })


        $("#e8_2").select2({placeholder: "Select shop type"});

        $("#e8_2_get2").click(function (){

            var data =$('#storeID').serialize();

            $.ajax({
                type: "POST",
                url:"<?php echo site_url('shops/shop/insert')?>",
                data:data,
                cache: false,
                beforeSend:function()
                {
                    $('.small_loading').html('<img class="small-load-img" src="<?php echo base_url()?>assets/images/loading-small.gif" >')
                },
                success: function(val)
                {
                    if(val !=""){
                        $('.error_msg').addClass('success_msg');
                        $('#popupmsg').removeClass('error_msg');
                        $('#popupmsg').html("<?php echo $this->lang->line('insert_msg') ?>").show();
                        setTimeout(function() {
                            document.location.href="/shops/store/"+val;
                        }, 2000);


                    }
                    $('.small_loading').html('');
                }
            })

        });


    });

</script>
