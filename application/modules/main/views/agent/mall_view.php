<h2 class="centerBoxHeading agentBoxHeading">List of malls</h2>
<div id="agent-board-content">
    <?php
    if(!empty($getAgentMall)){
        foreach($getAgentMall as $row):
    ?>
        <div class="location-box">
           <h5><?php echo $row->shop_name;?></h5>
           <div class="clear"></div>
           <span class="details">
           <p><a href="/<?php echo $row->mall_subdomain.'/location/'.$row->location_slug; ?>" class="location-link "><?php echo $row->location_name; ?></a> </p>
           <div class="clear"></div>
           <p><?php echo $row->address; if($row->city){ echo ','.$row->city; } if($row->postal_code){ echo ','.$row->postal_code; } ?></p>
           <div class="clear"></div>
           <?php if($row->business_phone !=""){ ?><p><?php echo $row->business_phone ?></p><?php } ?>
           <div class="clear"></div>
           <a class="more" href="/<?php echo $row->mall_subdomain; ?>">More details<i class="icon-chevron-right"></i></a>
           </span>

        </div>
    <?php endforeach; } ?>
    <div class="clear"></div>
    <?php if(count($getAgentMall) > 1 ){ ?><a class="more" href="">More shopping mall<i class="icon-chevron-right"></i></a><?php } ?>
</div>
<div class="clear"></div>

