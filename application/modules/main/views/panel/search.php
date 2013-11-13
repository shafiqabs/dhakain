
		
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/y_search_tab.css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/singlesl.css" type="text/css" media="screen" />

<ul class="varnav_top">
			<li class="topli">
			<!--[if lte IE 6]><a class="topa" href="#url"><table><tr><td><![endif]-->
			<ul class="varnav">
			<li><a class="home" href=""><b>Home</b><i></i></a></li>
			<li><a class="products" href=""><b>Products</b><i></i></a></li>
			<li><a class="services" href=""><b>Services</b><i></i></a></li>
			<li><a class="advertise" href=""><b>Advertise</b><i></i></a></li>
			<li><a class="privacy" href=""><b>Privacy</b><i></i></a></li>
			</ul>
			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
		</ul>
<a href="" class="logo"></a>	
		<div class="navigation">
			<ul>
				<li><a href="">Product Directory</a></li>
				<li class="selected"><a href="">Sell Offerr</a></li>
				<li><a href="">Vartiul Shop</a></li>
                <li>		
           	   <form> 
            	<select name="standard-dropdown">
		    		<option value="1">Item 1</option>
		    		<option value="2">Item 2</option>
		    		<option value="3">Item 3 </option>
		    		<option value="4">Item 4</option>
		 	        <option value="5" selected="selected">Item 15</option>
		    	</select>
	
                </form>
        </li>
			</ul>
		</div><!-- end of navigation -->
     <a href="#" id="post"><img src="<?php echo base_url()?>assets/images/post.gif" alt="Made in China" width="93" height="54" border="0" /></a>
	
<script>
	$(document).ready(function()
	{
		$('.y_search_category').click(function()
		{
			var category_id = $(this).attr('rel');
			$('#y_search_category_value').val(category_id);
		});
		
		$('.y_search_result_list').live('mouseover',function()
		{
			var list_id = $(this).attr('id');
			$('#'+list_id).css('background','#D8E5F0');
			var split_list_id = list_id.split('_');
			var cid = split_list_id[4];
			$.ajax(
			{
				data: 'cid='+cid+'&method=2',
				type: 'POST',
				url: '<?php echo site_url("msearch/searching")?>',
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
		
		$('#y_search_field').keyup(function()
		{
			category_id = 1;//$('#y_search_category_value').val();
			var str = jQuery.trim($('#y_search_field').val());
			$('#y_search_hints_result_left').empty();
			if(str != '')
			{
				$.ajax(
				{
					data: 'category='+category_id+'&str='+str+'&method=1',
					type: 'POST',
					url: '<?php echo site_url("msearch/searching")?>',
					dataType: 'json',
					success: function(json)
					{
					
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
	});
</script>

<div class="search-panel" style="border-top:1px solid #e1e1e1; overflow:visible">
	<div class="y_search_tab">
	<form class="" method="post" action="">
	
		<input type="hidden" id="y_search_category_value" name="y_search_category_value" value="1" />
		<div class="y_search_tab_border">
			<div class="y_search_tab_inner">
				<input type="text" id="y_search_field" name="y_search_field" value="" />
				<span class="y_button_wrapper">
					<button type="submit" id="y_search_button" name="y_search_button">Web Search</button>
				</span>
			</div>
		</div>
		<div class="y_search_hints">
			<div class="y_search_hints_inner">
				<div id="y_search_hints_result">
					<div id="y_search_hints_result_left"></div>
					<div id="y_search_hints_result_right"></div>
				</div>
			</div>
		</div>
	</form>
  </div>
</div><!-- end of search-panel -->
