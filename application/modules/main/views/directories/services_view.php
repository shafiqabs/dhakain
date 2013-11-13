<?php $this->load->view('main/layouts/header')?>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.selectBox.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>/assets/styles/jquery.selectBox.css"/>

<script type="text/javascript" charset="utf-8">
    $(function(){
        $('#alphabetic').listmenu();
        $('#location_id').selectBox();
        $('.perpage').selectBox();
        $('.custom-class1').selectBox();

        $('#catid_label_1').selectBox().change(function () {
            var catid_value =$(this).val();
            $.ajax({
                url:'/main/directories/underProductCategory/?catid_field=1&catid_value='+catid_value,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('#category_label_2').html(val);
                    $('#category_label_3').empty();
                    $('#category_label_4').empty();
                    $('#catid_label_2').selectBox();
                }
            })
        })

        $('#catid_label_2').selectBox().change(function () {
            var catid_value =$(this).val();
            $.ajax({
                url:'/main/directories/underProductCategory/?catid_field=2&catid_value='+catid_value,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('#category_label_3').html(val);
                    $('#catid_label_3').selectBox();
                }
            })
        })

        $('#catid_label_3').selectBox().change(function () {
            var catid_value =$(this).val();
            $.ajax({
                url:'/main/directories/underProductCategory/?catid_field=3&catid_value='+catid_value,
                data:"",
                dataType:'html',
                type:"GET",
                success: function(val){
                    $('#category_label_3').html(val);
                    $('#catid_label_3').selectBox();
                }
            })
        })



        $('.perpage').change(function(){

            var perpage =$(this).val();
            window.location='/directories/<?php echo $this->uri->segment(2,0)?>/?perpage='+perpage
        })

        $("#example").click(function() {
            el = $(this);
            $.get("/main/directories/mall_details", function(response) {
                jQuery(el).popover({
                    content: response,
                    title: 'Dynamic response!',
                    html: true,
                    delay: {show: 500, hide: 100}
                }).popover('show');
            });
        });




    });
</script>
<div class="clear"></div>
<?php
$data = $this->session->userdata('search_data');
$catid_label_1=isset($data['catid_label_1'])?$data['catid_label_1']:'';
?>
<div id="mixboxes" >
<div style="padding-bottom: 24px; display: none" class="bs-example">
    <a id="example" class="btn btn-lg btn-danger" href="javascript:void(0)" >Click to toggle popover</a>
</div>
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td id="column_right" style="width:250px; position: relative">

    <div class="show-grid" style="float: left; margin-left: -8px; box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1)">
        <div class="span5" style=" width: 240px; height: 100%">
            <h2 class="centerBoxHeading" style="width: 228px; margin-bottom: 1px"><?php echo $this->lang->line('all_categories_for').' '.$group; ?></h2>

            <div id="flyList1">
                <?php if(!empty($getShopListing[0])){ ?>
                    <ul id="categories_menu">

                        <?php
                        $i=1;
                        foreach(($getShopListing[0]) as $categories){ ?>
                            <li>
                                <a <?php if($catid_label_1 == $categories->category_slug ){ ?> class="active" <?php } ?> href="/directories/<?php echo $this->uri->segment(2,NULL).'/search/?catid_label_1='.$categories->category_slug; ?>"><?php echo $categories->category_name; ?></a>
                            </li>
                            <?php $i++; } ?>

                    </ul>
                <?php } ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</td>
<td id="column-center" valign="top" >

<div class="row show-grid">
    <div class="span5" style="width: 718px; box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1); margin-bottom: 10px;position: relative; height: auto!important;">
        <h2 class="centerBoxHeading" style="width: 706px; margin-bottom: 1px"><?php echo $this->lang->line('all_categories_for').' '.$group; ?></h2>
        <form action="/directories/<?php echo $this->uri->segment(2,NULL)?>/search/" method="post" name="directories">
            <?php if(!empty($getShopListing[0])){ ?>
                <div class="search-box">
                    <select class="custom-class1 custom-class2" name="catid_label_1" id="catid_label_1" tabindex="1">
                        <option value="">-- Choice Category --</option>
                        <?php
                        $catid_label_1=isset($data['catid_label_1'])?$data['catid_label_1']:'';
                        foreach(($getShopListing[0]) as  $categories ){ ?>
                            <option <?php if($catid_label_1 == $categories->category_slug){ echo "selected='selected'"; } ?> value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                        <?php } ?>
                    </select>
                    <div id="category_label_2" style="margin-top: 5px; margin-bottom: 5px">
                        <?php $catid_label_2 = isset($data['catid_label_2']) ? $data['catid_label_2']:'';
                        if($catid_label_2 !=='' || $catid_label_1 !=''){
                            $result = $this->directories_model->getUnderProductCategory($catid_label_1,'catid_label_2');
                            if(!empty($result) && $result ->num_rows() > 0){
                                $getCategories = $result->result();
                                ?>

                                <select  class="custom-class1 custom-class2" name="catid_label_2" id="catid_label_2" tabindex="1">
                                    <?php
                                    foreach($getCategories as $categories){ ?>
                                        <option <?php if($catid_label_2 == $categories->category_slug){ echo "selected='selected'"; } ?>  value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                                    <?php } ?>
                                </select>
                            <?php } } ?>
                    </div>

                </div>
            <?php } ?>
            <div class="search-box">
                <?php if(!empty($getShopListing[0])){ ?>
                    <select class="custom-class1 custom-class2" name="location_id" id="location_id" tabindex="3">
                        <option value="">-- Choice Location --</option>
                        <?php
                        $location_slug=isset($data['location_id'])?$data['location_id']:'';
                        foreach($getShopListing[1] as  $location){ ?>
                            <option <?php if($location_slug == $location->location_slug){ echo "selected='selected'"; } ?> value="<?php echo $location->location_slug; ?>"><?php echo $location->location_name; ?></option>
                        <?php } ?>
                    </select>
                <?php  } ?>
                <div id="category_label_3" style="margin-top: 5px;">
                    <?php $catid_label_3 = isset($data['catid_label_3'])?$data['catid_label_3']:'';
                    if($catid_label_3 !=='' || $catid_label_2 !="" ){
                        $result = $this->directories_model->getUnderProductCategory($catid_label_2,'catid_label_3');
                        if(!empty($result) && $result ->num_rows() > 0){
                            $getCategories = $result->result();
                            ?>

                            <select  class="custom-class1 custom-class2" name="catid_label_3" id="catid_label_3" tabindex="1">

                                <?php
                                foreach($getCategories as $categories){ ?>
                                    <option <?php if($catid_label_3 == $categories->category_slug){ echo "selected='selected'"; } ?>  value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                                <?php } ?>
                            </select>
                        <?php } } ?>
                </div>
            </div>
            <div class="search-box">
                <?php $search_categories=isset($data['search_categories'])?$data['search_categories']:''; ?>
                <input   type="text" placeholder="<?php echo $this->lang->line('search_categories'); ?>" value="<?php echo $search_categories; ?>" class="form-control search-input" id="search_categories" name="search_categories" >
                <div id="category_label_4" style="margin-top: 5px;" >
                    <?php $catid_label_4 = isset($data['catid_label_4'])?$data['catid_label_4']:'';
                    if( $catid_label_4 !=='' || $catid_label_3 !="" ){
                        $result = $this->directories_model->getUnderProductCategory($catid_label_3,'catid_label_4');
                        if(!empty($result) && $result ->num_rows() > 0){
                            $getCategories = $result->result();
                            ?>

                            <select class="custom-class1 custom-class2" name="catid_label_4" id="catid_label_4" tabindex="1">

                                <?php
                                foreach($getCategories as $categories){ ?>
                                    <option <?php if($catid_label_4 == $categories->category_slug){ echo "selected='selected'"; } ?>  value="<?php echo $categories->category_slug; ?>"><?php echo $categories->category_name; ?></option>
                                <?php } ?>
                            </select>
                        <?php } } ?>
                </div>
            </div>
            <div style="float: right; right: 9px; top:1px; position: absolute ">
                <button type="submit" class="btn btn-info">Search</button>
            </div>
        </form>
        <div class="clear"></div>
    </div>
</div>

<style>




</style>

<table>
    <tr><td>
            <ul id="alphabetic" class="demo">

                <?php
                if(!empty($getShopListing[2])){
                    foreach($getShopListing[2] as $key => $shops):
                        ?>
                        <li><a href="/<?php echo $key; ?>"><?php echo $shops; ?></a></li>
                    <?php endforeach; }  ?>
            </ul>
        </td>
    </tr>
    <tr>
        <td>



            <div class="pages clearfix"><span class="total-page">Showing Results 1 - 36 of 2008</span>
                <div class="page_num">
                    <?php echo $getShopListing[4]; ?>

                    <div class="per-page">

                        <select class="custom-class1 custom-class2 perpage" name="perpage" id="" tabindex="2">
                            <option value="">Show</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="10">10</option>
                        </select>

                    </div>
                </div>

            </div>
        </td>
    </tr>
    <?php if(!empty($getShopListing[3])){
        $var = ($getShopListing[4] != '0')  ? ($getShopListing[4]+1) : 1;
        $i=$var;

        foreach($getShopListing[3] as $shops):
            $categories=explode(',',$shops->category_name);
            ?>
            <tr>
                <td>
                    <div class="board-head">
                        <div class="head-inner grid-box">
                            <div class="group grid-img">

                                <a href="" class="activatePopup" rel="movies"><img class="corner feature-lazy" src="<?php echo site_url()?>/uploads/noimage.jpg" alt="" /></a>
                            </div><!-- end of group-content -->
                            <div class="grid-content">

                                <h3 class="clearfix"><span class="propertyaddress"><a href="<?php echo '/'.$shops->subdomain_name; ?>"><?php echo $shops->shop_name; ?></a></span></h3>
                                <p class="address"><?php echo $shops->address; if($shops->city){ echo ','.$shops->city; } if($shops->postal_code){ echo ','.$shops->postal_code; } ?></p>
                                <div class="property_detail">
                                    <p> <span class="field"> Location</span> <span>: <a href="/<?php echo $shops->shop_name.'/location/'.$shops->location_slug; ?>"> <?php echo $shops->location_name; ?> </a></span> </p>

                                    <p><span class="field"> Web </span> <span>: <a href="/<?php echo $shops->subdomain_name; ?>"> <?php echo $shops->subdomain_name; ?></a></span> </p>
                                </div>
                                <div class="clear"></div>
                                <p class="propertylistinglinks">
                                    <span class="agent"> Direct Call :&nbsp;<span class="emailagent"><?php echo $shops->business_phone; ?></span> </span>
                                                            <span>
                                                                <a class="more-shop" href="<?php echo '/'.$shops->subdomain_name; ?>">View More Details »</a>
                                                            </span>
                                </p>

                            </div>
                            <div class="grid-resource" >
                                <div class="property_detail">

                                    <p> <span class="field"> Categories  </span> <span>:  <a href="javascript:void(0)" title="<?php echo $shops->category_name; ?>"> <?php echo $categories[0]; ?> </a></span></p>
                                    <?php if($shops->product_count > 0 ){ ?><p><span class="field"> Products  </span> <span>:  <a href="/<?php echo $shops->subdomain_name.'/products'; ?>">Products - (<?php echo $shops->product_count; ?>)</a></span></p><?php } ?>
                                    <p><span class="field"> Shopping Mall</span> <span>:  <?php echo $this->agent_model->getMallInformation($shops->agent_uid); ?> </span></p>
                                    <p><span class="field"> Contact</span> <span>:  <?php echo $shops->contact_person; ?> </span></p>

                                </div>


                            </div>

                        </div>

                    </div><!-- end of post-head -->
                </td>

            </tr>
            <?php $i++; endforeach; } ?>
    <tr>
        <td>

            <div class="pages clearfix"><span class="total-page">Showing Results <?php echo ($getShopListing[4]+1); ?> - <?php echo ($i-1); ?> of <?php echo $getShopListing[5]; ?></span><div class="page_num">&nbsp; <?php echo $getShopListing[4]; ?>
                    <div class="per-page">
                        <select class="custom-class1 custom-class2 perpage" name="perpage" id="" tabindex="2">
                            <option value="">Show</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

            </div>
        </td>
    </tr>
</table>




</td>

</tr>
</table>
</div><!-- end of main -->


<?php $this->load->view('main/layouts/footer')?>
