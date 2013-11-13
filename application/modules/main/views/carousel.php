[
<?php
$count = count($result);
$i=1;
foreach( $result as $rows):
?>
{ "content": "<div class='slide_inner'><a class='photo_link' href='<?php echo site_url($rows->slug)?>'><img class='photo' src='<?php echo base_url().'/'.$rows->image_thumb_path; ?>' alt='Bike'></a><a class='caption' href='#'><?php echo wordLimiter($rows->product_name,3).'<br/><span class=\"price\" ><strong>Price</strong>:'.$rows->price.'</span><br/><span class=\"discount\" ><strong>Discount</strong>:'.$rows->discount_price; ?></span></a></div>" }<?php echo ($count != $i )? ',':''; ?>
<?php $i++; endforeach; ?>

]
