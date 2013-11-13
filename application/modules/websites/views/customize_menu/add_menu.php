<div class="modal hide" id="menuModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $title; ?></h3>
    </div>
    <div class="modal-body">
        <form class="well" id="addMenu" method="post" name="addMenu" action="<?php echo site_url($this->uri->segment(1,0).'/customize_menu/add_menu/'.$access_slug)?>">
            <div class="control-group">

              <label><?php echo $this->lang->line('cmenu_title'); ?></label>
              <input type="text" name="menu_title" placeholder="Type <?php echo $this->lang->line('menu_title'); ?>" class="validate[required] span3" placeholder=""  style="margin: 0 auto; width: 480px;">
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
            $('#add-menu').click(function(){
                $('#menuModal').modal('toggle');
            })

        });

    </script>