<link rel="stylesheet" href="<?php echo base_url()?>/assets/styles/agile_carousel.css" type='text/css'>
<style>
    #popup-content-container #container-left {
        background: none repeat scroll 0 0 #FFFFFF;
        box-shadow: 2px 0 6px 0 rgba(0, 0, 0, 0.1);
        float: left;
        height: 445px;
        padding-left: 0;
        position: relative;
        width: 643px;
    }
    #agent-load-data {
        background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #DDDDDD;
        border-radius: 2px 2px 2px 2px;
        box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1);
        clear: both;
        display: block;
        height: 456px;
        line-height: 1.5em;
        margin-bottom: 15px;
        padding: 0;
    }

</style>

<script language="JavaScript">
    $(document).ready(function(){

        $('.closex').click(function(e){
            $('#directoriesModal').modal('toggle');
            $(".layer").slideUp();

        });

        $('#agent_name').selectBox().change(function () {
            var agent =$(this).val();
            $.ajax({
                url:'/main/directories/agent_details/?agent='+agent+'&shop_group=<?php echo $this->uri->segment(2,NULL) ?>',
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('.navigation-link').removeClass('active');
                    $('#home').addClass('active');
                    $('#agent-body').html(val);

                }
            })
        })

        $('.navigation-link').click(function () {

            var nav =$(this).attr('id');
            $.ajax({
                url:'/main/directories/agent_details/?action='+nav,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('.navigation-link').removeClass('active');
                    $('#'+nav).addClass('active');
                    $('#container-left').html(val);


                }
            })
        })

        $.getJSON("<?php echo site_url()?>/main/ajaxload/carousel", function(data) {
            $(document).ready(function(){
                $("#multiple_slides_visible").agile_carousel({
                    carousel_data: data,
                    carousel_outer_height: 212,
                    carousel_height: 200,
                    slide_height: 200,
                    carousel_outer_width: 640,
                    slide_width: 160,
                    number_slides_visible: 4,
                    transition_time: 330,
                    control_set_1: "previous_button,next_button",
                    /*control_set_2: "group_numbered_buttons",
                     control_set_3: "numbered_buttons",
                     */
                    persistent_content: "<p class='persistent_content'><?php echo $this->lang->line('sponsor_products');?></p>"
                });
            });
        });
    });
</script>
<?php $row = $agents[0]; ?>
<div class="tabbable tabs-left" style="position: relative">

    <div class="tab-content " style="float: right; height: 400px; width: 910px; position: relative">
        <div role="banner" class="pane clearfix" id="hd">
            <div class="main-nav agent-nev clearfix" id="main-nav">
                <ul>
                    <li><a href="javascript:void(0)" data-content="" id="home" class="navigation-link active" rel="home"><?php echo $this->lang->line('home');?></a></li>
                    <li><a href="javascript:void(0)" id="products" class="navigation-link" rel="products"><?php echo $this->lang->line('products');?></a></li>
                    <li><a href="javascript:void(0)" id="mall" class="navigation-link" rel="mall" ><?php echo $this->lang->line('mall');?></a></li>
                    <li><a href="javascript:void(0)" id="locations" class="navigation-link" rel="locations" ><?php echo $this->lang->line('location');?></a></li>
                    <li class="last"><a href="javascript:void(0)" id="contact" class="navigation-link" rel="contact"><?php echo $this->lang->line('contactus');?></a></li>
                </ul>

            </div>
            <div style="float: right; margin-right:8px; margin-top: 8px;width: 260px ">
                <div class="agent-select" style="float: left;">
                    <select class="custom-class1 custom-class2" style="width:220px" id="agent_name" name="agent_name" tabindex="-1">
                        <?php
                        if(!empty($agents[1])){
                            foreach($agents[1] as $shops):
                                ?>
                                <option <?php if($row->subdomain_name == $shops->subdomain_name ){ echo "selected='selected'"; } ?> value="<?php echo $shops->subdomain_name; ?>"><?php echo $shops->shop_name; ?></option>
                            <?php endforeach; }  ?>

                    </select>
                </div>
                <button type="button" class="closex" id="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
        </div>
        <div class="load-data" id="agent-load-data" >
            <div id="popup-content-container" >
                <div id="container-left">
                    <div style="padding: 10px;display:inline-block; height: 223px">
                        <?php echo wordLimiter($row->about,100); ?>
                    </div>
                    <div class="clear"></div>
                    <div class="row-fluid">
                        <div class="slideshow" id="multiple_slides_visible"></div>
                        <div class="clear"></div>

                    </div>
                    <div class="clear"></div>
                </div>
                <div id="container-right">
                    <div class="sidebar-owner cfix">
                        <div class="cfix" id="owner-icon-info">
                            <div class="user-img-50 left " id="owner-icon">
                                <a href="http://<?php echo $row->subdomain_name; ?>">
                                    <img src="<?php echo site_url()?>/uploads/noimage.jpg">
                                </a>
                            </div>
                            <div class="left" id="owner-info">
                                <div class="cfix" id="owners"><a href="" class="text-ellipsis" id="owner"><?php echo $row->shop_name ?></a></div>
                                <div id="owner-location-container"><a href="" class="location-link "><?php echo $row->location_name; ?></a></div></div>
                        </div>
                        <div class="clear owner-buttons-container">
                            <p><?php echo $row->address; if($row->city){ echo ','.$row->city; } if($row->postal_code){ echo ','.$row->postal_code; } ?></p>
                            <p><?php echo $row->contact_person; ?></p>
                            <p><?php echo $row->business_phone ?></p>
                            <?php if(empty($row->domain_name)){ ?>
                                <p><a href="/<?php echo $row->subdomain_name; ?>"><?php echo site_url($row->subdomain_name); ?></a></p>
                            <?php }else{ ?>
                                <p><a href="http://<?php echo $row->domain_name; ?>" target="_blank">http://<?php echo $row->domain_name; ?></a></p>
                            <?php } ?>
                            <div class="shop-button">
                                <div class="fb-like-box" data-href="http://www.facebook.com/aanchol" data-width="200" data-height="16" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true"></div>
                            </div>

                        </div>
                        <div id="flyList1" style="display: block">
                            <ul id="categories_menu" class="agent-categories-menu" >
                                <li class="agent-menu-li" ><a   href="/<?php echo $row->subdomain_name; ?>/products/discounts">Show Discount Offer</a></li>

                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="sidebar-block">
                            <div class="sidebar-content">

                                <div class="project-published tiny-text">Published: <?php echo customDateFormat($row->add_date); ?></div>
                                <ul class="object-stats" id="project-stats">
                                    <li class=""><i class="icon-tasks"></i><span class="pre-text" >Total Products</span><span class="badge badge-info"><?php echo isset($row->product_count)?$row->product_count:0; ?></span></li>
                                    <li class=""><i class="icon-eye-open"></i><span class="pre-text" >Views</span><span class="badge badge-info"><?php echo isset($row->views)?$row->views:0; ?></span></li>
                                    <li class=""><i class="icon-thumbs-up"></i><span class="pre-text" >Appreciations</span><span class="badge badge-info"><?php echo isset($row->appreciations)?$row->appreciations:0; ?></span></li>
                                    <li class=""><i class="icon-comment"></i><span class="pre-text" >Comments</span><span class="badge badge-info"><?php echo isset($row->comments)?$row->comments:0; ?></span></li>
                                </ul>

                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="<?php echo base_url()?>/assets/js/agile_carousel.alpha.js"></script>