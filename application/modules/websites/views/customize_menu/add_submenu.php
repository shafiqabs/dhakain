<div class="modal hide" id="productModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $this->lang->line('add_new_page'); ?></h3>
    </div>
    <div class="modal-body">
        <form class="well" id="addProduct" method="post" name="addProduct" action="<?php echo site_url($this->uri->segment(1,0).'/customize_menu/add_menu/'.$access_slug)?>">
            <div class="control-group">
                <label for="select01" class="control-label"><?php echo $this->lang->line('parent_menu'); ?></label>
                <div class="controls">
                    <select id="parent_id" name="parent_id" style="width:200px;">
                      <option value="0">---<?php echo $this->lang->line('select_menu'); ?>---</option>
                        <?php

                        foreach($menu->result() as $row_menu){
                         ?>
                          <option value="<?php echo $row_menu->menu_id; ?>"><?php echo $row_menu->menu_name; ?></option>
                            <?php } ?>
                    </select>
                </div>
              <label><?php echo $this->lang->line('menu_page_title'); ?></label>
              <input type="text" name="menu_title" placeholder="Type <?php echo $this->lang->line('menu_page_title'); ?>" class="validate[required] span3" placeholder=""  style="margin: 0 auto; width: 480px;">
              <label><?php echo $this->lang->line('menu_url'); ?></label>
              <input type="text" name="menu_url" placeholder="Type <?php echo $this->lang->line('menu_url'); ?>" class="validate[required] span3" placeholder=""  style="margin: 0 auto; width: 480px;">
              <span class="help-block"><?php echo $this->lang->line('menu_url_help'); ?></span>
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


            $('#add-submenu').click(function(){
                $('#productModal').modal('toggle');
            })

        });

    </script>