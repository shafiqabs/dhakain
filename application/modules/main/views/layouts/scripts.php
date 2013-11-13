<script language="javascript" type="text/javascript">
	/*---------------This function use under search file deifne '&' & split ---------------------*/
function replace_charecters(str)
{
		var where_is_mytool=str;
		var mytool_array=where_is_mytool.split("&");
		var count=0;
		var string="";
		var replace_string="@!#$";
		for(count=0;count < mytool_array.length-1;count++){
		string=string+mytool_array[count]+replace_string;
		}
		string=string+mytool_array[count];
		return string;
}

/*----------------Login information sliding up & down ------------------------*/
$(document).ready(function() {

      $(".signin").click(function(e) {
			var id=$(this).attr('id');
			if(id == 99999999 ){
			return false;
			}
			e.preventDefault();
			$("fieldset#signin_menu").toggle();
			$(".signin").toggleClass("menu-open");
        });

		$("fieldset#signin_menu").mouseup(function() {
		   return false;
		});

		$(document).mouseup(function(e) {
			if($(e.target).parent("a.signin").length==0) {
				$(".signin").removeClass("menu-open");
				$("fieldset#signin_menu").hide();
			}
		});


		$("#login_get1").click(function(){
		$('#login_user1').css({'display':'block'});
		$('#forgot1').css({'display':'none'});
		$('#for_get1').slideToggle('slow');
		document.forgotForm1.forget_email.value="";
		$(this).toggle();
		})

		$("#for_get1").click(function(){
		$('#login_user1').css({'display':'none'});
		$('#forgot1').css({'display':'block'});
		$('#login_get1').slideToggle('slow');
		$(this).toggle();
		})

		$('#forgot_password_link').tipsy({gravity: 'w'});
		$('#return_login_link').tipsy({gravity: 'w'});

<?php $mid=(isset($mid))? $mid :'1'?>
$('.visited-<?php echo $mid; ?>').addClass("current");

        $('#cart-preview').live('click',function()
		{

		$('.preview-cartbox').slideToggle('slow');

		})
		$(".collapse-button").click(function()
	    {
		$('.collapse-1').slideToggle('slow');
		//$('.collapse-1').slideToggle('slow');
		$(this).toggleClass("close", 10000);

		});


		/*----------- Use for search Drop down--------------------*/
		$('.events-form').jqTransform({imgPath:'jqtransformplugin/img/'});

		/*----------- Use for search product & others --------------------*/

		$('#y_search_field').keyup(function()
		{
			var category_id =$('span#selected_category').text();
			categoryid=replace_charecters(category_id);
			//alert(categoryid);
			var str = jQuery.trim($('#y_search_field').val());
			$('#y_search_hints_result_left').empty();
			if(str != '')
			{
				$.ajax(
				{
					data: 'category='+categoryid+'&str='+str,
					type: 'POST',
					url: '<?php echo site_url("msearch")?>',
					dataType: 'json',
					success: function(json)
					{

						//alert(json);
						if(json.num_rows == 0)
						{
							$('.y_search_hints').fadeOut('fast');
						}
						else
						{
							$('#y_search_hints_result_right').empty();
							$('#y_search_hints_result_left').html(json.html);
							$('.y_search_hints').fadeIn('fast');

						}
					}
				});
			}
			else
			{
				$('.y_search_hints').fadeOut('fast');
			}
		});


		$('.y_search_result_list').live('mouseover',function()
		{
			var agent_uid = $(this).attr('id');
			$.ajax(
			{
				data: 'agent_uid='+agent_uid,
				type: 'POST',
				url: '<?php echo site_url("msearch/search_result")?>',
				dataType: 'json',
				success: function(json)
				{
					$('#y_search_hints_result_right').empty();
					$('#y_search_hints_result_right').html(json.html);
				}
			});
		});

		$('.y_search_result_list').live('mouseout',function()
		{
			var list_id = $(this).attr('id');
			$('#'+list_id).css('background','transparent');
		});

		$('.y_search_result_list').live('click',function()
		{
			var str = $(this).text();
			$('#y_search_field').val(str);
			$('.y_search_hints').fadeOut('fast');
		});

	/*--------------Home page product featur use tab -----------------*/

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});



	/*------------------Footer visited product listed ----------------------------*/

	$("#showPersistentBar").click(function(){
	     $("#persistentBarContent").slideToggle();
	});
});

 $(document).ready(function() {
	 $('.listoffer').click(function(){

	 var id=$(this).attr('id');
	  var offer_name=$(this).attr('rel');

	 	$.ajax({
			type: "POST",
			url:"<?php echo site_url('dashboard/dashboard_offer')?>",
			data:"id="+id+"&offer_name="+offer_name,
			cache: false,
			beforeSend: function(){
				$('#loading').html('<img src="<?php echo base_url()?>assets/images/loading.gif">');
			},
			success: function(val){
			$('#offerbox').html(val);
			}
		})

     });
});

</script>