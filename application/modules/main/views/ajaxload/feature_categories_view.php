<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shafiq
 * Date: 9/20/13
 * Time: 7:44 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<div class="four_banners_bt clearfix">
    <div class="b01"><a class="title" href="#">Fast Foods</a>
        <ul>
            <?php
            $result = $this->db->select('category_name,slug')->where(array('parent_id' =>24))->limit(4)->order_by('ordering','asc')->get('product_category');
            if($result ->num_rows() > 0){
                foreach($result ->result() as $productCategory ):
                    ?>
                    <li><a href="<?php echo site_url($productCategory->slug)?>"><?php echo $productCategory->category_name; ?></a></li>
                <?php endforeach; } ?>
        </ul>
    </div>
    <div class="b02"><a class="title" href="http://web-experiment.info/magento14/lightshop_pink/dresses.html">Computer & Electronics</a>
        <ul>
            <?php
            $result = $this->db->select('category_name,slug')->where(array('parent_id' =>39))->limit(4)->order_by('ordering','asc')->get('product_category');
            if($result ->num_rows() > 0){
                foreach($result ->result() as $productCategory ):
                    ?>
                    <li><a href="<?php echo site_url($productCategory->slug)?>"><?php echo $productCategory->category_name; ?></a></li>
                <?php endforeach; } ?>
        </ul>
    </div>
    <div class="b03"><a class="title" href="">Mobile</a>
        <ul>
            <?php
            $result = $this->db->select('category_name,slug')->where(array('parent_id' =>605))->limit(4)->order_by('ordering','asc')->get('product_category');
            if($result ->num_rows() > 0){
                foreach($result ->result() as $productCategory ):
                    ?>
                    <li><a href="<?php echo site_url($productCategory->slug)?>"><?php echo $productCategory->category_name; ?></a></li>
                <?php endforeach; } ?>
        </ul>
    </div>
    <div class="b04"><a class="title" href="">Motorcycle</a>
        <ul>
            <?php
            $result = $this->db->select('category_name,slug')->where(array('parent_id' =>613))->limit(4)->order_by('ordering','asc')->get('product_category');
            if($result ->num_rows() > 0){
                foreach($result ->result() as $productCategory ):
                    ?>
                    <li><a href="<?php echo site_url($productCategory->slug)?>"><?php echo $productCategory->category_name; ?></a></li>
                <?php endforeach; } ?>
        </ul>
    </div>
    <div class="b05" style="margin-right:0px;"><a class="title" href="">Cars</a>
        <ul>
            <?php
            $result = $this->db->select('category_name,slug')->where(array('parent_id' =>613))->limit(4)->order_by('ordering','asc')->get('product_category');
            if($result ->num_rows() > 0){
                foreach($result ->result() as $productCategory ):
                    ?>
                    <li><a href="<?php echo site_url($productCategory->slug)?>"><?php echo $productCategory->category_name; ?></a></li>
                <?php endforeach; } ?>
        </ul>
    </div>
</div>