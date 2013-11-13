
<style>
#site {
    position: absolute;
    right: 0;
    top: 10px;
}
#site #domain li{ float:left; padding-right:10px; line-height:20px; }
#site #domain li a{ color:#06F}
#site #domain li a:hover{ text-decoration:underline; color:#00F}

.btn-group {left: -1px}
.clear {clear: both;}


</style>
<div id="navi">
		<div class="top-wrapper">

        <div class="clear"></div>
       <div id="menu">

            <ul id="menu_tabs">
             <li><a href=""><span class="menu_l"></span><span class="menu_m">Location</span><span class="menu_r"></span></a></li>
             <li><a href=""><span class="menu_l"></span><span class="menu_m">Shopping Mall</span><span class="menu_r"></span></a></li>
             <li><a href="#"><span class="menu_l"></span><span class="menu_m">Wholeseller</span><span class="menu_r"></span></a></li>
             <li><a href="#"><span class="menu_l"></span><span class="menu_m">BRAND SHOP</span><span class="menu_r"></span></a></li>
             <li><a href="#"><span class="menu_l"></span><span class="menu_m">Services Dictory</span><span class="menu_r"></span></a></li>
            <li><a href="#"><span class="menu_l"></span><span class="menu_m">Product Directory</span><span class="menu_r"></span></a></li>
            </ul>
             <div id="filler"></div>

        </div>

     </div>
		<div class="top-wrapper box4">
            <div style="width: 200px; text-align: left; position: absolute;left: 1px; top: 5px">
                <div class="btn-group">
                    <button class="btn btn-info dropdown-toggle" style="width: 170px; text-align: left">All Categories</button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>

                    <div class="clear"></div>
                    <div class="dropdown-menu" id="menu-slider">Data is Loading...Please wait. </div>
                </div>
            </div>
		<div class="search-panel" style="position: absolute; right: -1px; width: 784px">
        <div class="y_search_tab">
        <form class="events-form" method="post" action="" id="events-form1">

		<input type="hidden" id="y_search_category_value" name="y_search_category_value" value="1" />
		<div class="y_search_tab_border">
			<div class="y_search_tab_inner">
				<div class="rowElem">
                <input type="text" id="y_search_field" name="y_search_field"     onfocus="if (value == 'Product category , Product, Product code, Product price  etc...') {value =''}" onblur="if (value == '') {value = 'Product category , Product, Product code, Product price  etc...'}" value="Product category , Product, Product code, Product price  etc..." />
                </div>
             <div class="rowElem">
                 <select class="populate placeholder select2-offscreen" style="width:220px" id="category_id" name="category_id" tabindex="-1">
                     <?php echo $searchProductCategories; ?>
                 </select>
               </div>
     <div id="search-button"><input type="submit" class="button" value="go" />
     <a href="javascript:void(0)" id="advance-search">Advance Search</a>
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
		</div>
        </form>
        </div>
        </div><!-- end of search-panel -->
	</div>
</div>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/select/select.css"/>
<script type="text/javascript" src="<?php echo base_url()?>/assets/select/select.js"></script>
<script>
$(document).ready(function(){

    $("#advance-search").click(function () {

       // $(".global-box").hide();
        $("#toggleAdvenceSearch").slideToggle("slow");
    });
    $(".icon-settings").click(function () {
        //$(".global-box").hide();
        $("#toggleSettings").slideToggle("slow");
    });

    $("#category_id").select2({

        placeholder: "---Choice Your Category---",
        allowClear: true


    });
    $('.scroll-pane').jScrollPane(
        {
            showArrows: true,
            arrowScrollOnHover: true
        }
    );
})
</script>

<style type="text/css">
.global-box{
    height: auto;
    width: 957px;
    border: 1px #E1E5E8 solid;
    padding: 10px;
    margin-bottom: 10px;
    display: none;
}
#category_id{
    width: 220px;
}
</style>
<div class="clear"></div>
<div class="global-box" style="display: none;">
    <div class="scroll-pane" style="height: 200px" >
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices
            eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci
            mi, in pharetra ligula. Nulla facilisi. Nulla facilisi. Mauris convallis venenatis massa, quis
            consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies
            bibendum. Vivamus diam leo, faucibus et vehicula eu, molestie sit amet dui. Proin nec orci et elit
            semper ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
            mus. Sed quis urna mi, ac dignissim mauris. Quisque mollis ornare mauris, sed laoreet diam malesuada
            quis. Proin vel elementum ante. Donec hendrerit arcu ac odio tincidunt posuere. Vestibulum nec risus
            eu lacus semper viverra.
        </p>
        <p>
            Vestibulum dictum consectetur magna eu egestas. Praesent molestie dapibus erat, sit amet sodales
            lectus congue ut. Nam adipiscing, tortor ac blandit egestas, lorem ligula posuere ipsum, nec
            faucibus nisl enim eu purus. Quisque bibendum diam quis nunc eleifend at molestie libero tincidunt.
            Quisque tincidunt sapien a sapien pellentesque consequat. Mauris adipiscing venenatis augue ut
            tempor. Donec auctor mattis quam quis aliquam. Nullam ultrices erat in dolor pharetra bibendum.
            Suspendisse eget odio ut libero imperdiet rhoncus. Curabitur aliquet, ipsum sit amet aliquet varius,
            est urna ullamcorper magna, sed eleifend libero nunc non erat. Vivamus semper turpis ac turpis
            volutpat non cursus velit aliquam. Fusce id tortor id sapien porta egestas. Nulla venenatis luctus
            libero et suscipit. Sed sed purus risus. Donec auctor, leo nec eleifend vehicula, lacus felis
            sollicitudin est, vitae lacinia lectus urna nec libero. Aliquam pellentesque, arcu condimentum
            pharetra vestibulum, lectus felis malesuada felis, vel fringilla dolor dui tempus nisi. In hac
            habitasse platea dictumst. Ut imperdiet mauris vitae eros varius eget accumsan lectus adipiscing.
        </p>
        <p>
            Quisque et massa leo, sit amet adipiscing nisi. Mauris vel condimentum dolor. Duis quis ullamcorper
            eros. Proin metus dui, facilisis id bibendum sed, aliquet non ipsum. Aenean pulvinar risus eu nisi
            dictum eleifend. Maecenas mattis dolor eget lectus pretium eget molestie libero auctor. Praesent sit
            amet tellus sed nibh convallis semper. Curabitur nisl odio, feugiat non dapibus sed, tincidunt ut
            est. Nullam erat velit, suscipit aliquet commodo sit amet, mollis in mauris. Curabitur pharetra
            dictum interdum. In posuere pretium ultricies. Curabitur volutpat eros vehicula quam ultrices
            varius. Proin volutpat enim a massa tempor ornare. Sed ullamcorper fermentum nisl, ac hendrerit sem
            feugiat ac. Donec porttitor ullamcorper quam. Morbi pretium adipiscing quam, quis bibendum diam
            congue eget. Sed at lectus at est malesuada iaculis. Sed fermentum quam dui. Donec eget ipsum dolor,
            id mollis nisi. Donec fermentum vehicula porta.
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
            sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
            commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros
            ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.
            Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna
            eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis
            luctus, metus
        </p>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
            amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
        </p>
    </div>
</div>
<div class="global-box" id="toggleAdvenceSearch">
    <h1>Advanch Search</h1>
    Shanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers
</div>
<div class="global-box" id="toggleSettings">
    <h1>Settings</h1>
    Shanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service SuppliersShanghai International Trade Fair for Automotive Parts, Equipment and Service Suppliers
</div>

