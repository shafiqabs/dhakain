<div class="modal hide" id="productModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $this->lang->line('add_new_product'); ?></h3>
    </div>
    <div class="modal-body">
        <form class="well" id="addProduct" method="post" name="addProduct" action="<?php echo site_url($this->uri->segment(1,0).'/product/insert/'.$access_slug)?>">
            <div class="control-group">
                <label for="select01" class="control-label"><?php echo $this->lang->line('select_type'); ?></label>
                <div class="controls">
                    <select class="populate placeholder select2-offscreen" style="width:300px" id="e2" name="category_id" tabindex="-1">
                        <?php echo $this->product_model->listSelectCategory($storeInfo[0]->agent_uid); ?>
                    </select>

                </div>
                <label><?php echo $this->lang->line('product_name'); ?></label>
                <input type="text" name="product_name" id="new_product_name" placeholder="Type <?php echo $this->lang->line('product_name'); ?>" class="validate[required] span3" placeholder=""  style="margin: 0 auto; width: 480px;">
                <span class="help-block"><?php echo $this->lang->line('product_name_help'); ?></span>

            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn" data-dismiss="modal"><?php echo $this->lang->line('close'); ?></a>
                <button class="btn btn-primary" type="submit"><?php echo $this->lang->line('add_update'); ?></button>
            </div>
        </form>
    </div>

</div>
    <script type="text/javascript">

        $(document).ready(function(){

            $('#add_product').click(function(){

                $('#productModal').modal('toggle');
            })

            $("#e2").select2({

                placeholder: "Select product type",
                allowClear: true


            });

            function log(event, data, formatted) {
                $("<li>").html( !data ? "No match!" : "Selected: " + formatted).appendTo("#result");
            }

            function formatItem(row) {
                return row[0] + " (<strong>id: " + row[0] + "</strong>)";
            }
            function formatResult(row) {
                return row[0].replace(/(<.+?>)/gi, '');
            }

            $("#new_product_name").autocomplete("<?php echo site_url('listing/product/get_search_product')?>", {
                matchContains: true,
                minChars: 0
            });

            $("#new_product_name").result(function(event, data, formatted) {

                var output = !data ? "No match!" :"<div class=\"list\">"+data[0]+"</div>";
                $('select').attr('disabled',false);
            });


            $("#clear").click(function() {
                $(":input").unautocomplete();
            });


        });

    </script>