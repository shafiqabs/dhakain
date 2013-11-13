<div id="locationscroll">
    <?php if(!empty($getProductCategories)){ ?>
        <ul>
            <?php

            foreach( $getProductCategories as $category):
                ?>
                <li><i class="icon-large icon-chevron-right"></i><a class="location" id="<?php echo $category->category_id; ?>"  href="/<?php echo $category->location_slug.'/'.$category->category_slug ?>"><?php echo $category->category_name; ?>
                        <?php

                        $wheres['catid_label_1']=$category->category_id;
                        $wheres['location_id']=$category->location_id;
                        $wheres['product_group']=$category->product_group;
                        $group="catid_label_2";
                        $getProductCategories = $this->productcategory_model->getProductCategories($wheres,$group);
                        if(!empty($getProductCategories)){

                            ?>

                            <ul>
                                <?php
                                foreach( $getProductCategories as $subCategory):
                                    ?>
                                    <li><a href="/<?php echo $subCategory->location_slug.'/'.$category->category_slug.'/'.$subCategory->category_slug ?>"><?php echo $subCategory->category_name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php } ?>

                    </a>

                </li>

            <?php
            endforeach;
            ?>
        </ul>
    <?php

    }else{

        echo '<p style="text-align:center">'.$this->lang->line('no_record_found').'</p>';
    }
    ?>
</div>