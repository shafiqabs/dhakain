<h2 class="centerBoxHeading agentBoxHeading">Locations</h2>
<div id="agent-board-content">
    <?php
    if(!empty($getAgentLocations)){
        foreach($getAgentLocations as $row):
    ?>
    <div class="location-box">
            <h5><?php echo $row->location_name;?></h5>
            <div class="clear"></div>
        <span class="details">

           <p><?php echo $row->address; if($row->city){ echo ','.$row->city; } if($row->postal_code){ echo ','.$row->postal_code; } ?></p>
           <div class="clear"></div>
           <p><?php echo $row->contact_person; ?></p>
           <div class="clear"></div>
           <p><?php echo $row->business_phone ?></p>
           <div class="clear"></div>
           <?php if(!$row->email){ ?><p><a href="#" <?php echo $row->email; ?></a></p><?php } ?>

        </span>
    </div>
    <?php endforeach; } ?>
    <div class="clear"></div>
    <?php if(count($getAgentLocations) > 6 ){ ?><a class="more" href="">More locations<i class="icon-chevron-right"></i></a><?php } ?>
</div>
<div class="clear"></div>

