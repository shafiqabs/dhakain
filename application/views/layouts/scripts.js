
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
	
	$(document).ready(function()
	{
		$('.events-form').jqTransform({imgPath:'jqtransformplugin/img/'});
				
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
					url: '<?php echo site_url("msearch/searching")?>',
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
		
		
});


$(document).ready(function() {
	
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
	
});