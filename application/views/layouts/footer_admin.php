<div class="footer">
		<!-- end of middle -->
		<div class="bottom">
			<!--[if IE 6]>	<br /><![endif]-->
		<span class="alignleft" id="copyright">
            <p>
		Registered office: Mona Complex, 21 Armanian Street( 5th Floor ), Babu Bazar , Dhaka-1100. Registered in Bangladesh. Company registration number: 233462.&nbsp;VAT no: GB232457280<br>Copyright &copy; onClick Partnership 2001-2012
	</p></span>
		</div><!-- end of bottom -->
	</div><!-- end of footer -->
    	<!-- end of footer -->
</div><!-- end of wrapper -->
</div><!-- end of outer-wrapper -->
<div id="persistentBar">
 
<div style="display: block;" id="persistentBarWrapper">
    <div align="right" style="width:100%">
        <div id="showPersistentBar">
            <div id="persistenText">recently viewed items</div>
            <div id="persistenIcon"><img width="10" height="10" alt="" src="<?php echo base_url()?>assets/images/persistentBarBtnClose.gif" name="persistentBarBtn" id="persistentBarBtn"></div>
        </div>
    </div>
    <div id="bottom-border"></div>
    <div id="persistentBarStage">
        <div id="persistentBarContent">
       </div>
    </div>
</div>
</div>
<div class="modal hide" id="shopModal">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3><?php echo $this->lang->line('add_new_shop'); ?></h3>
    </div>
    <div class="modal-body">
    <form class="well shop-form" id="formID" action="<?php echo site_url('seller/shop')?>" method="post">
    <div class="error_msg" id="popupmsg"></div>
    <div class="control-group">
    <label for="select01" class="control-label"><?php echo $this->lang->line('location'); ?></label>
     <div class="controls">
        <select size="1"  name="location_id" id="location_id" class="select validate[required]">
        <option value="">&lt;Please Select&gt;</option>
        <?php
        $query=$this->settings_model->settings_under_list($id=2);
        foreach ( $query->result() as $rows ){
        ?>
        <option value="<?php echo $rows->settings_id ?>" ><?php echo $rows->settings_name ?></option>
        <?php } ?>
        </select>
     </div>
    </div>
    <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('shop_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('shop_name'); ?>" class="validate[required] input-xlarge span3" name="shop_name" id="shop_name" value="" >
              <p class="help-block"><?php echo $this->lang->line('shop_name_help'); ?></p>
            </div>
    </div>
    <div class="control-group">
            <label for="input01" class="control-label"><?php echo $this->lang->line('user_name'); ?></label>
            <div class="controls">
              <input type="text" placeholder="Type <?php echo $this->lang->line('user_name'); ?>" class="validate[required] input-xlarge span3" name="user_name" id="user_name" value="" ><span class="small_loading"></span>
              <p class="help-block"><?php echo $this->lang->line('user_name_help'); ?></p>
            </div>
    </div>
    <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
        <input type="submit" name="submit" id="popupSubmit" class="btn btn-primary" value="Save changes" />
    </div>
    </form>
    </div>

    </div>
<div class="modal hide" id="shoppingmallModal">
 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3><?php echo $this->lang->line('add_mall'); ?></h3>
  </div>
  <div class="modal-body">
    <form class="well shop-form" id="formMall" action="<?php echo site_url('shoppingmall/mall/mall_add')?>" method="post">
      <div class="error_msg" id="popupmsg"></div>

      <div class="control-group">
        <label class="control-label"><?php echo $this->lang->line('mall_name'); ?></label>
        <div class="controls">
          <input type="text" placeholder="Type <?php echo $this->lang->line('mall_name'); ?>" class="validate[required] input-xlarge span3" name="shopping_mall_name" id="shopping_mall_name" value="" ><span class="small_loading"></span>
          <p class="help-block"><?php echo $this->lang->line('mall_name_help'); ?></p>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"><?php echo $this->lang->line('location'); ?></label>
        <div class="controls">
          <select size="1"  name="location_id" id="location_id" class="select validate[required]">
            <option value="">&lt;Please Select&gt;</option>
              <?php
              $query=$this->settings_model->settings_under_list($id=2);
              foreach ( $query->result() as $rows ){
                  ?>
                <option value="<?php echo $rows->settings_id ?>" ><?php echo $rows->settings_name ?></option>
                  <?php } ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <input type="submit" name="submit" id="popupSub" class="btn btn-primary" value="Save changes" />
      </div>
    </form>
  </div>

</div>
<div class="modal hide" id="storeModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3><?php echo $this->lang->line('add_new_shop'); ?></h3>
    </div>
    <div class="modal-body">
        <form class="well shop-form" id="storeID" action="<?php echo site_url($this->uri->segment(1,0).'/'.$this->uri->segment(2,0).'/save')?>" method="post">
            <div class="error_msg" id="popupmsg"></div>

            <div class="control-group">
                <label  class="control-label"><?php echo $this->lang->line('shop_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Type <?php echo $this->lang->line('shop_name'); ?>" class="validate[required] input-xlarge span3" name="shop_name" id="shopname" value="" >
                    <!--                    <p class="help-block">--><?php //echo $this->lang->line('shop_name_help'); ?><!--</p>-->
                </div>
            </div>
            <div class="control-group">
                <label  class="control-label"><?php echo $this->lang->line('location'); ?></label>
                <div class="controls">
                    <select size="1"  name="location_id" id="location_id" class="select validate[required]">
                        <option value="">&lt;Please Select&gt;</option>
                        <?php
                        $query=$this->settings_model->settings_under_list($id=2);
                        foreach ( $query->result() as $rows ){
                            ?>
                            <option value="<?php echo $rows->settings_id ?>" ><?php echo $rows->settings_name ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <input type="submit" name="submit" id="popupSubmit" class="btn btn-primary" value="Save changes" />
            </div>
        </form>
    </div>

</div>
</body>
    <!-- jQuery - the core -->

<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/validationEngine.jquery.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/jquery.alerts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/autocomplete/jquery.autocomplete.css"  />
<script type="text/javascript" src="<?php echo  base_url()?>assets/js/autocomplete/jquery.autocomplete.js"></script>
<script  type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.alerts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.searchabledropdown-1.0.7.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jqTransform.js" ></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url()?>assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo  base_url()?>assets/table-sorter/jquery.tablesorter.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/styles/flexigrid.css" />
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/flexigrid.js"></script>
<script type="text/javascript">

jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();
    jQuery("#formMall").validationEngine();
});

 function UpdateTableHeaders() {
       $(".persist-area").each(function() {
       
           var el             = $(this),
               offset         = el.offset(),
               scrollTop      = $(window).scrollTop(),
               floatingHeader = $(".floatingHeader", this)
           
           if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
               floatingHeader.css({
                "visibility": "visible"
               });
           } else {
               floatingHeader.css({
                "visibility": "hidden"
               });      
           };
       });
    }
    
    // DOM Ready      
    $(function() {
    
       var clonedHeaderRow;
    
       $(".persist-area").each(function() {
           clonedHeaderRow = $(".persist-header", this);
           clonedHeaderRow
             .before(clonedHeaderRow.clone())
             .css("width", clonedHeaderRow.width())
             .addClass("floatingHeader");
             
       });
       
       $(window)
        .scroll(UpdateTableHeaders)
        .trigger("scroll");
       
 });
$('#element').tooltip('toggle')
jQuery(document).ready(function(){
	
	jQuery("#formID4").validationEngine('attach', {promptPosition : "topLeft"});
    jQuery("#addProduct").validationEngine('attach', {promptPosition : "topLeft"});

    $('#add_shop').click(function(){
        $('#shopModal').modal('toggle');
    });
    $('#add_mall').click(function(){
        $('#shoppingmallModal').modal('toggle');
    });

$('#shop_name').change(function(){
    var shopname=$('#shop_name').val();
    $.ajax({
		type: "POST",
		url:"<?php echo site_url('seller/shop/check_shopname')?>/"+shopname,
		data:'',
		cache: false,
        beforeSend:function(){
        $('.small_loading').html('<img class="small-load-img" src="<?php echo base_url()?>assets/images/loading-small.gif" >')
        },
	    success: function(val){
            if(val !="success"){
                $('.error_msg').html(val).show();
                $('#shop_name').val('');
            }else{
              $('.error_msg').hide();
            }
            $('.small_loading').html('');
		}
    })
})
$('#shopping_mall_name').change(function(){
    var shopping_mall_name=$('#shopping_mall_name').val();

  $.ajax({
      type: "POST",
      url:"<?php echo site_url('shoppingmall/mall/check_mall')?>",
      data:'shopping_mall_name='+shopping_mall_name,
      cache: false,
      beforeSend:function(){
        $('.small_loading').html('<img class="small-load-img" src="<?php echo base_url()?>assets/images/loading-small.gif" >')
      },
      success: function(val){
        if(val !="success"){
          $('.error_msg').html(val).show();
          $('#shopping_mall_name').val('');
        }else{
          $('.error_msg').hide();
        }
        $('.small_loading').html('');
      }
    })
})

$('#user_name').change(function(){
    var user_name=$('#user_name').val();
    $.ajax({
		type: "POST",
		url:"<?php echo site_url('seller/shop/check_username')?>/"+user_name,
		data:'',
		cache: false,
		success: function(val){
	       if(val !="success"){
                $('.error_msg').html(val).show();
                $('#user_name').val('');
            }
		}
    })
})
  $(".lightbox").fancybox({
    'overlayShow'	: true,
    'transitionIn'	: 'elastic',
    'transitionOut'	: 'elastic',
    'autoScale'       :  false
  });
});

</script>
<script type="text/javascript">
    // DOM Ready
    jQuery(document).ready(function(){

        jQuery("#storeID").validationEngine('attach', {promptPosition : "topLeft"});
        $('#addStore').click(function(){
            $('#storeModal').modal('toggle');
        });
        $('#shopname').change(function(){
            var shop_name=$('#shopname').val();
            $.ajax({
                type: "POST",
                url:"<?php echo site_url($this->uri->segment(1,0).'/service/ajax_check_store_name')?>",
                data:'shop_name='+shop_name,
                cache: false,
                beforeSend:function(){
                    $('.small_loading').html('<img class="small-load-img" src="<?php echo base_url()?>assets/images/loading-small.gif" >')
                },
                success: function(val){
                    if(val !="success"){
                        $('.error_msg').html(val).show();
                        $('#shopname').val('');
                    }else{
                        $('.error_msg').hide();
                    }
                    $('.small_loading').html('');
                }
            })
        })


    });

</script>
<style>
.formError input{ border: red solid 1px;}
.small-load-img {
    border: 0 none;
    height: auto;
    left: -23px;
    margin-top: 6px;
    position: relative;
    vertical-align: middle;
}

#popupmsg{ display: none;}
.form-box{float: left; width:375px; position: relative; left: -40px;}
.pagination .current {
    background:#FCD410;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    display: inline-block;
    font-weight: bold;
    padding: 0px 6px;
    position: relative;
}


.pagination a {
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #DDDDDD;
    border-style: solid;
    border-width: 1px 1px 1px 0;
    float: left;
    line-height: 20px;
    padding: 0 6px;
    text-decoration: none;
}



.dataTables_info {width:46%}
.item input, .item select{width:50%}
table.display thead th {text-align: left;}
/* Custome paging css */
	table.display tr.odd.gradeX {
    background-color: #ececec;
	font-size:12px;
	}
	
	table.display tr.even.gradeX {
    background-color: #FFFFFF;
	font-size:12px;
	}


	tr.odd.gradeX td.sorting_1 {
    background-color: #c0ccda;
	color:#000!important;
	font-size:12px;
	}
	
	tr.even.gradeX td.sorting_1 {
    background-color: #eff2f9;
	color:#000!important;
	font-size:12px;
    }
	
	.pagerbar-header{ float:right}
	
	.dataTables_wrapper {
		clear: both;
		font-size: 11px;
		min-height: 302px;
		position: relative;
   }
   
   .dataTables_filter {
		float: right;
		text-align: left;
		width: 30%;
		height:45px;
	}

    .line-small{ float:left; width:350px}
	.line-big{ float:left; width:720px;}
	
	.pagination {
		bottom: -15px;
		font-size: 11px;
		position: absolute;
		right: 25px;
		text-align: right;
	}
	.floatingHeader {
      position: fixed;
      top: 31px;
      visibility: hidden;
    }
	.dataTables_filter {
		float: right;
		height: 28px;
		text-align: left;
		width: 270px;
	}
	#example_filter label{ float:left; line-height:27px;color:#004027;}
	#example_filter label input{ float:right}
	table.display thead th div.DataTables_sort_wrapper {
		color: #004027;
		font-size: 12px;
		padding-right: 20px;
		position: relative;
	}
	
	.fg-toolbar{ position:relative}
    .banner_box img{ width: 748px; height: 100px;}

    .form-horizontal .help-block {
        margin-bottom: 0;
        margin-top: 9px;
        line-height: 5px;
        color: #3A87AD;
        padding-left: 5px;
        font-size: 12px;
    }
.controls > .radio:first-child, .controls > .checkbox:first-child {
    padding-top: 2px;
}
.form-horizontal .control-group {
    margin-bottom: 9px;
}
/*.radio_text {
    float: right;
    width: 30px;
    margin-top: 4px;
    padding-left: 10px;
    font-size: 12px;
}*/
.form-box-alternative {
    float: left;
    left: 0;
    position: relative;
    width: 375px;
}
.form-horizontal .form-box-alternative .control-label {
    float: left;
    padding-top: 5px;
    text-align: right;
    width: 200px;
    margin-right: 10px;
}
.textbox{
     width: 500px;
    height: 120px;
}
table .span1 {
    float: none;
    margin-left: 0;
    width: 74px;
}
  .alink-area{
    display: inline-block;
    margin-top: 6px;
    margin-left: 10px;
  }
</style>

<script language="javascript">
$(document).ready(function(){
	
	oTable = $('#example').dataTable({
		"bJQueryUI": true,
		"bPaginate": false,
		"bLengthChange": false,
		"sPaginationType": "full_numbers"
				
	});

});	

$(document).ready(function(){
					
	$("#allchecked").click(function(){	

		if(jQuery('#allchecked').is(':checked') ==false){
			
   			jQuery(':checkbox:checked').removeAttr('checked');
			
		}else if(jQuery('#allchecked').is(':checked') ==true){
			
			jQuery(':checkbox:not(:checked)').attr('checked', 'checked');
		}	
	});


});
</script>

<!-- Sliding effect -->
</html>