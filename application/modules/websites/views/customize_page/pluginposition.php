<?php if($column_no ==2){ ?>

<option value="1" <?php if($plugin_id ==1){ ?> selected="selected" <?php } ?> >On the Left/Top</option>
<option value="2"  <?php if($plugin_id ==2){ ?> selected="selected" <?php } ?>  >On the Right/Bottom</option>

<?php  }else if($column_no ==3){ ?>

<option value="1" <?php if($plugin_id ==1){ ?> selected="selected" <?php } ?> >On the Left/Top</option>
<option value="2"  <?php if($plugin_id ==2){ ?> selected="selected" <?php } ?>  >On the Right/Bottom</option>
<option value="3"  <?php if($plugin_id ==3){ ?> selected="selected" <?php } ?>  >On the Center/Middle</option>

<?php  }else if($column_no ==1){ ?>

<option value="1" <?php if($plugin_id ==1){ ?> selected="selected" <?php } ?> >On the Left/Top</option>

<?php }else{ ?>
<option value="0" <?php if($plugin_id ==0){ ?> selected="selected" <?php } ?> >None</option>
<?php } ?>