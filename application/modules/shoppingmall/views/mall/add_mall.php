<div class="modal hide" id="shoppingmallModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $this->lang->line('add_mall'); ?></h3>
    </div>
    <div class="modal-body">
        <form class="well shop-form" id="formMall" action="<?php echo site_url('shoppingmall/mall/insert')?>" method="post">
            <input type="hidden" name="shop_group" value="shopping-mall">
            <div class="error_msg" id="popupmsg"></div>
            <div class="control-group">
                <label class="control-label"><?php echo $this->lang->line('location'); ?></label>
                <div class="controls">
                    <select size="1"  name="location_id" id="location_id" class="select validate[required] shop_name">
                        <option value="0" selected="selected">---<?php echo $this->lang->line('select_one'); ?>---</option>
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
                <label class="control-label"><?php echo $this->lang->line('mall_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Type <?php echo $this->lang->line('mall_name'); ?>" class="validate[required] input-xlarge span3 shop_change" name="shop_name" id="shopname" value="" ><span class="small_loading"></span>
                    <p class="help-block"><?php echo $this->lang->line('mall_name_help'); ?></p>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <input type="submit" name="submit" id="popupSub" class="btn btn-primary" value="Save changes" />
            </div>
        </form>
    </div>

</div>
<script type="text/javascript">

    jQuery(document).ready(function(){

        jQuery("#formMall").validationEngine('attach', {promptPosition : "topLeft"});

        $('#add_mall').click(function(){
            $('#shoppingmallModal').modal('toggle');
        });

        $('#shopname').change(function(){
            var shop_name = $("#formMall input[name=shop_name]").val();
            var location_id = $("#formMall select[name=location_id]").val();
            $.ajax({
                type: "POST",
                url:"<?php echo site_url('store/ajax_check_store_name')?>",
                data:'shop_name='+shop_name+"&location_id="+location_id+"&shop_group=shopping-mll",
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
    });
</script>

