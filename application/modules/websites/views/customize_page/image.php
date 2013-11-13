<div class="modal hide" id="menuModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $title; ?></h3>
    </div>
    <div class="modal-body">
        <form class="well" id="addMenu" method="post" name="addMenu" action="<?php echo site_url($this->uri->segment(1,0).'/customize_page/background_image/'.$access_slug.'/'.$this->uri->segment(4,0))?>" enctype="multipart/form-data">
            <div class="control-group">

              <label><?php echo $this->lang->line('background_image'); ?></label>
              <input type="file" name="image_name" placeholder="Type <?php echo $this->lang->line('background_image'); ?>" class="validate[required] span3" placeholder=""  style="margin: 0 auto; width: 480px;">
              <span class="help-block"><?php echo $this->lang->line('background_image_help'); ?></span>

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
            $('#add-image').click(function(){
                $('#menuModal').modal('toggle');
            })

        });

    </script>