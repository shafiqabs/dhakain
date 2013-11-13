
    <div style="width: 200px; text-align: left; position: absolute;left: 1px; top: 5px">
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" style="width: 170px; text-align: left">All Categories</button>
            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>

            <div class="clear"></div>
            <div class="dropdown-menu" id="menu-slider">
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

                        <li style="display: none">
                            <div class="categories-menu">
                                <div class="navigation-inner">
                                        <?php
                                        $styleflag=0;
                                        $i=0;
                                        $array1[$i]='0';

                                        $segment = $this->uri->segment(2,NULL);
                                        $group =($segment !=NULL )? $segment :'shops';
                                        $getGroupByAgent = $this->agent_model->getGroupByAgent($group);

                                        if(!empty($getGroupByAgent)){
                                        foreach($getGroupByAgent as $shops):

                                    $row_first_char = substr($shops->shop_name, 0, 1);
                                    $shop_name=$shops->shop_name;
                                    $first_charecter=substr($shop_name,0,1);
                                    $j=0;
                                    $flag=0;
                                    for($j=0;$j<sizeof($array1);$j++){
                                        if($array1[$j]==strtolower($first_charecter)){
                                            $flag=1;
                                            break;
                                        }

                                    }

                                    if($flag==0){
                                        $i++;
                                        $array1[$i]=strtolower($first_charecter);
                                        echo "<a class='letter_box'>".strtoupper($first_charecter)."</a>";
                                        ?>


                                   <?php }?>
                                            <a class="alphabetic" href="/<?php echo $shops->subdomain_name; ?>"><?php echo $shops->shop_name; ?></a>

                                        <?php endforeach; }  ?>

                                </div>
                            </div>


                        </li>
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
            </div>
        </div>
    </div>
    <div class="search-panel" style="position: absolute; right: -1px; width: 784px">
        <div class="y_search_tab">
            <form class="events-form" method="post" action="" id="events-form1">

                <input type="hidden" id="y_search_category_value" name="y_search_category_value" value="1" />
                <div class="y_search_tab_border">
                    <div class="y_search_tab_inner">
                        <div class="rowElem">
                            <input type="text" id="y_search_field" name="y_search_field"     onfocus="if (value == 'Product category , Product, Product code, Product price  etc...') {value =''}" onblur="if (value == '') {value = 'Product category , Product, Product code, Product price  etc...'}" value="Product category , Product, Product code, Product price  etc..." />
                        </div>
                        <div class="rowElem">
                            <select class="populate placeholder select2-offscreen" style="width:220px" id="category_id" name="category_id" tabindex="-1">
                                <?php echo $searchProductCategories; ?>
                            </select>
                        </div>
                        <div id="search-button"><input type="submit" class="button" value="go" />
                            <a href="javascript:void(0)" id="advance-search">Advance Search</a>
                        </div>

                    </div>
                    <div class="y_search_hints">
                        <div class="y_search_hints_inner">
                            <div id="y_search_hints_result">
                                <div id="y_search_hints_result_left"></div>
                                <div id="y_search_hints_result_right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- end of search-panel -->
<script type="text/JavaScript">
$(document).ready(function() {


            $("#category_id").select2({

                placeholder: "---Choice Your Category---",
                allowClear: true
            });
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

});
</script>

