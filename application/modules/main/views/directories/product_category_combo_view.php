<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/27/13
 * Time: 7:56 AM
 * To change this template use File | Settings | File Templates.
 */
?>
<script type="text/javascript">
    $('#catid_label_<?php echo $catid_field ?>').selectBox().change(function () {
        var catid_value =$(this).val();
        var catid_field =$("#catid_field").val();
        if(catid_field ==4){
            return false;
        }
        $.ajax({
            url:'/main/directories/underProductCategory/?catid_field=<?php echo $catid_field ?>&catid_value='+catid_value,
            data:"",
            dataType:'html',
            type:"GET",
            success: function(val){
                //$('#category_label_<?php echo $catid_field; ?>').html(val);
                //$('#catid_label_<?php echo $catid_field; ?>').selectBox();
                $('#category_label_<?php echo $category_field; ?>').show();
                $('#category_label_<?php echo $category_field; ?>').html(val);
                $('#catid_label_<?php echo $catid_field; ?>').selectBox();

            }
        })
    });
</script>
<select class="custom-class1 custom-class2" name="catid_label_<?php echo $catid_field ?>" id="catid_label_<?php echo $catid_field ?>" tabindex="1">
    <option value="">--<?php echo $this->lang->line('choice_category');?>--</option>
    <?php
    foreach($getCategories as $categories){ ?>

        <option value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
    <?php } ?>
</select>
<input type="hidden" name="catid_field" id="catid_field" value="<?php echo $catid_field; ?>">