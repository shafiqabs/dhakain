<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/20/13
 * Time: 7:15 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<script>
$(document).ready(function(){
        $('.bxslider').bxSlider({
            speed: 2000,
            pager:false,
            infiniteLoop:false,
            hideControlOnEnd:true
        });

});
</script>
<ul class="bxslider">
    <?php
    foreach($helps as $helpRows):
    ?>
        <li>
            <span class="help-content">
            <h3><?php echo $helpRows->title; ?></h3>
            <p class="helpscroll" ><?php echo $helpRows->content; ?></p>
            </span>
        </li>
    <?php endforeach; ?>
</ul>