<div class="modal hide" id="productModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $this->lang->line('add_keywords'); ?></h3>
    </div>
    <?php
    $rows=$this->customize_page_model->keywords_page( $access_slug,$this->uri->segment(4,0));
    ?>
    <div class="modal-body">
        <form class="well" id="addProduct" method="post" name="addProduct" action="<?php echo site_url($this->uri->segment(1,0).'/customize_page/seo/'.$access_slug .'/'.$this->uri->segment(4,0))?>">
          <input type="hidden" name="keywords_page_id" value="<?php echo (isset($rows[0]->keywords_page_id))? $rows[0]->keywords_page_id : set_value('keywords_page_id'); ?>">
          <div class="control-group">
              <label><?php echo $this->lang->line('title_tag'); ?></label>
              <input type="text" name="title_tag" placeholder="Type <?php echo $this->lang->line('title_tag'); ?>" value="<?php echo (isset($rows[0]->title_tag))? $rows[0]->title_tag : set_value('title_tag'); ?>" class="validate[required] span3" placeholder=""  style="margin: 0 auto; width: 480px;">
              <label><?php echo $this->lang->line('keywords_tag'); ?></label>
              <textarea style="height: 50px; width: 480px;" name="meta_keywords" id="meta_keywords"><?php echo (isset($rows[0]->meta_keywords))? $rows[0]->meta_keywords : set_value('meta_keywords'); ?></textarea>
              <span class="help-block"><?php echo $this->lang->line('keywords_tag_help'); ?></span>
              <label><?php echo $this->lang->line('description_tag'); ?></label>
              <textarea style="height: 50px; width: 480px;" name="meta_description" id="meta_description"><?php echo (isset($rows[0]->meta_description))? $rows[0]->meta_description : set_value('meta_description'); ?></textarea>

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


            $('#add-seo').click(function(){
                $('#productModal').modal('toggle');
            })

        });

    </script>