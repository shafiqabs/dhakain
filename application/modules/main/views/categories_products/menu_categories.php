<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/16/13
 * Time: 7:26 PM
 * To change this template use File | Menu Categories | File Templates.
 */

?>

<script type="text/JavaScript">
$(document).ready(function() {

            // Declare variables
            var width = 762;
            var slides = $('#list-images li');
            var numSlides = slides.length;

            // Wrap the slides & set the wrap width - this will be used to animate the slider left/right
            slides.wrapAll('<div id="slide-wrap"></div>').css({'float' : 'left','width' : width});
            $('#slide-wrap').css({width: width * numSlides});

            // Hover function - animate the slides based on index of links
            $('#list-links li a').hover(function(){
                $('#list-links li').removeClass('hover');
                var i = $(this).index('#list-links li a');
                $(this).parent().addClass('hover');
                $('#slide-wrap').stop().animate({'marginLeft' : width*(-i)});
            });
            //$(".navigation-inner-body").niceScroll().show();
});
</script>

<?php if(!empty($getProductCategories)){ ?>
<ul id="list-links">
    <?php
    $i=1;
    foreach($getProductCategories as $categories):

    ?>
        <li class='<?php echo ($i ==1 )? 'hover':''; ?>' ><a href="/categories/<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></a></li>
        <?php $i++; endforeach; ?>
    <li class="last" ><a  href="/categories">More Categories</a></li>
</ul>
<ul id="list-images">
    <?php foreach($getProductCategories as $categories): ?>
        <li>

            <div class="categories-menu">
                <div class="navigation-inner">
                    <?php

        $wheres['catid_label_1']=$categories->category_id;
        $wheres['product_group']=$categories->product_group;
        $group="catid_label_2";
        $getProductCategories = $this->productcategory_model->getMenuCategorylisting($wheres,$group);
        if(!empty($getProductCategories)){

            foreach( $getProductCategories as $subCategory):

                        ?>
                        <div class="navigation-inner-box" >
                            <div class="navigation-inner-top">
                                <div class="navigation-inner-left-title"><a href="/categories/<?php echo $categories->category_slug.'/'.$subCategory->category_slug; ?>"><?php echo $subCategory->category_name; ?></a></div>
                            </div>
                            <div class="navigation-inner-body ">
                                <div class="navigation-inner-left navigation-inner-padding">
                                    <dl>
                                    <?php

                                    $wheres['catid_label_2']=$subCategory->category_id;
                                    $wheres['product_group']=$subCategory->product_group;
                                    $group="catid_label_3";
                                    $getProductCategories = $this->productcategory_model->getMenuCategorylisting($wheres,$group);
                                    if(!empty($getProductCategories)){

                                        foreach( $getProductCategories as $subCategory3):
                                  ?>
                                        <dd><a href="/categories/<?php echo $categories->category_slug.'/'.$subCategory->category_slug.'/'.$subCategory3->category_slug; ?>"><?php echo $subCategory3->category_name; ?></a></dd>
                                        <?php  endforeach; } ?>

                                    </dl>
                                </div>

                            </div>
                        </div>
                        <?php  endforeach; } ?>
                         <div class="li-bottom">

                           <?php
                            $result = $this->db->select('offer_title,slug AS offer_slug')->where(array('status'=>1))->get('sell_offer')->result();
                            foreach($result as $rows){
                            ?>
                            <a href="/discount/<?php echo $categories->category_slug.'/'.$rows->offer_slug; ?>"><?php  echo $rows->offer_title ?></a>

                            <?php } ?>
                         </div>
                </div>
                <div style="float:right; width: 180px; height: 378px; background-color: #ccc">Feature Add Image</div>


            </div>
        </li>
    <?php endforeach; ?>

</ul>
<div class="clear"></div>
<?php } ?>