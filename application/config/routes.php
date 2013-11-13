<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

/*-----------------Detecting main site-----------------------*/
$route['default_controller'] = "main/dashboard";
///$route['dashboard/(:any)'] = "dashboard";

/*-----------------Directory main site-----------------------*/

$route['directories/(:any)/search/(:num)'] = "main/directories/search/$1/$2";
$route['directories/(:any)/search'] = "main/directories/search/$1";
$route['directories/(:any)/(:num)'] = "main/directories/directory/$1/$2";
$route['directories/(:any)'] = "main/directories/directory/$1";
$route['products/(:any)'] = "main/products/details/$1";



/*-----------------Detecting site-----------------------*/

$route['locations/(:any)/(:any)'] = "main/categories_products/locations/$1";
$route['locations/(:any)'] = "main/categories_products/locations/$1/$2";
$route['categories/(:any)/(:any)/(:any)'] = "main/categories_products/categories/$1/$2/$3";
$route['categories/(:any)/(:any)'] = "main/categories_products/categories/$1/$2";
$route['categories/(:any)'] = "main/categories_products/categories/$1";
$route['discounts/(:any)/(:num)'] = "main/categories_products/getDiscountOffers/$1";
$route['offers/(:any)/(:num)'] = "main/categories_products/selloffer_view/$1";

$route['newproduct/(:any)/(:num)'] = "main/mainmenu/newproduct_view/$1";
$route['specialoffer/(:any)/(:num)'] = "main/mainmenu/specialoffer_view/$1/$2";
$route['brandshop/(:any)/(:num)'] = "main/mainmenu/brandshop_view/$1/$2";
$route['mainmenu/(:any)'] = "main/mainmenu/mainmenu_view/$1";
$route['msearch'] = "main/msearch/searching";
$route['msearch/search_result'] = "main/msearch/search_result";

/*-----------------Detecting admin site-----------------------*/

$route['settings/global_settings/settings_add'] = "admin/global_settings/settings_add";
$route['settings/global_settings/settings_list/(:num)'] = "admin/global_settings/settings_list/$1";
$route['settings/global_settings/settings_list'] = "admin/global_settings/settings_list";
$route['settings/global_settings/settings_delete/(:num)'] = "admin/global_settings/settings_delete/$1";
$route['settings/global_settings/settings_edit/(:num)'] = "admin/global_settings/settings_edit/$1";
$route['settings/global_settings/settings_delete/(:num)/(:num)'] = "admin/global_settings/settings_delete/$1/$2";
$route['settings/global_settings'] = "admin/global_settings";

$route['settings/plugins/plugins_add'] = "admin/plugins/plugins_add";
$route['settings/plugins/plugins_list'] = "admin/plugins/plugins_list";
$route['settings/plugins/plugins_delete/(:num)'] = "admin/plugins/plugins_delete/$1";
$route['settings/plugins/plugins_edit/(:num)'] = "admin/plugins/plugins_edit/$1";
$route['settings/plugins'] = "admin/plugins";

$route['settings/themes/themes_add'] = "admin/themes/themes_add";
$route['settings/themes/themes_list'] = "admin/themes/themes_list";
$route['settings/themes/themes_delete/(:num)'] = "admin/themes/themes_delete/$1";
$route['settings/themes/themes_edit/(:num)'] = "admin/themes/themes_edit/$1";
$route['settings/themes'] = "admin/themes";


$route['settings/layouts/layouts_add'] = "admin/layouts/layouts_add";
$route['settings/layouts/layouts_list'] = "admin/layouts/layouts_list";
$route['settings/layouts/layouts_delete/(:num)'] = "admin/layouts/layouts_delete/$1";
$route['settings/layouts/layouts_edit/(:num)'] = "admin/layouts/layouts_edit/$1";
$route['settings/layouts'] = "admin/layouts";

$route['settings/product_category/product_category_add'] = "admin/product_category/product_category_add";
$route['settings/product_category/product_category_list/(:num)'] = "admin/product_category/product_category_list/$1";
$route['settings/product_category/product_category_list'] = "admin/product_category/product_category_list";
$route['settings/product_category/product_category_delete/(:num)'] = "admin/product_category/product_category_delete/$1";
$route['settings/product_category/product_category_edit/(:num)'] = "admin/product_category/product_category_edit/$1";
$route['settings/product_category/product_category_delete/(:num)/(:num)'] = "admin/product_category/product_category_delete/$1/$2";
$route['settings/product_category/product_category_ordering'] = "admin/product_category/product_category_ordering";
$route['settings/product_category/product_category_sorting'] = "admin/product_category/product_category_sorting";
$route['settings/product_category'] = "admin/product_category";

$route['settings/grouping/save'] = "admin/grouping/save";
$route['settings/grouping/listing/(:num)'] = "admin/grouping/listing/$1";
$route['settings/grouping/listing'] = "admin/grouping/listing";
$route['settings/grouping/edit/(:any)'] = "admin/grouping/edit/$1";
$route['settings/grouping/delete/(:num)/(:any)'] = "admin/grouping/delete/$1/$2";
$route['settings/grouping'] = "admin/grouping/create";

$route['settings/service_category/service_category_add'] = "admin/service_category/service_category_add";
$route['settings/service_category/service_category_list/(:num)'] = "admin/service_category/service_category_list/$1";
$route['settings/service_category/service_category_list'] = "admin/service_category/service_category_list";
$route['settings/service_category/service_category_delete/(:num)'] = "admin/service_category/service_category_delete/$1";
$route['settings/service_category/service_category_edit/(:num)'] = "admin/service_category/service_category_edit/$1";
$route['settings/service_category/service_category_delete/(:num)/(:num)'] = "admin/service_category/service_category_delete/$1/$2";
$route['settings/service_category/service_category_ordering'] = "admin/service_category/service_category_ordering";
$route['settings/service_category/service_category_sorting'] = "admin/service_category/service_category_sorting";
$route['settings/service_category'] = "admin/service_category";


$route['settings/product_template/product_template_add'] = "admin/product_template/product_template_add";
$route['settings/product_template/product_template_list/(:num)'] = "admin/product_template/product_template_list/$1";
$route['settings/product_template/product_template_list'] = "admin/product_template/product_template_list";
$route['settings/product_template/product_template_delete/(:num)'] = "admin/product_template/product_template_delete/$1";
$route['settings/product_template/product_template_edit/(:num)'] = "admin/product_template/product_template_edit/$1";
$route['settings/product_template/product_template_delete/(:num)/(:num)'] = "admin/product_template/product_template_delete/$1/$2";

$route['settings/product_template/product_template_manage'] = "admin/product_template/product_template_manage";
$route['settings/product_template/product_select_template'] = "admin/product_template/product_select_template";
$route['settings/product_template/product_template_category_add'] = "admin/product_template/product_template_category_add";
$route['settings/product_template/product_template_category/(:num)'] = "admin/product_template/product_template_category/$1";
$route['settings/product_template/product_template_list'] = "admin/product_template/product_template_list";
$route['settings/product_template/product_template_view/(:num)'] = "admin/product_template/product_template_view/$1";
$route['settings/product_template/product_template_table_value/(:num)'] = "admin/product_template/product_template_table_value/$1";
$route['settings/product_template/product_single_template'] = "admin/product_template/product_single_template";
$route['settings/product_template/product_single_template_add'] = "admin/product_template/product_single_template_add";
$route['settings/product_template/product_single_template_edit/(:num)'] = "admin/product_template/product_single_template_edit/$1";
$route['settings/product_template/product_template_delete/(:num)'] = "admin/product_template/product_template_delete/$1";
$route['settings/product_template/product_single_template_delete/(:num)'] = "admin/product_template/product_single_template_delete/$1";
$route['settings/product_template'] = "admin/product_template";

$route['settings/service_template/service_template_add'] = "admin/service_template/service_template_add";
$route['settings/service_template/service_template_list/(:num)'] = "admin/service_template/service_template_list/$1";
$route['settings/service_template/service_template_list'] = "admin/service_template/service_template_list";
$route['settings/service_template/service_template_delete/(:num)'] = "admin/service_template/service_template_delete/$1";
$route['settings/service_template/service_template_edit/(:num)'] = "admin/service_template/service_template_edit/$1";
$route['settings/service_template/service_template_delete/(:num)/(:num)'] = "admin/service_template/service_template_delete/$1/$2";

$route['settings/service_template/service_template_manage'] = "admin/service_template/service_template_manage";
$route['settings/service_template/service_select_template'] = "admin/service_template/service_select_template";
$route['settings/service_template/service_template_category_add'] = "admin/service_template/service_template_category_add";
$route['settings/service_template/service_template_category/(:num)'] = "admin/service_template/service_template_category/$1";
$route['settings/service_template/service_template_list'] = "admin/service_template/service_template_list";
$route['settings/service_template/service_template_view/(:num)'] = "admin/service_template/service_template_view/$1";
$route['settings/service_template/service_template_table_value/(:num)'] = "admin/service_template/service_template_table_value/$1";
$route['settings/service_template/service_single_template'] = "admin/service_template/service_single_template";
$route['settings/service_template/service_single_template_add'] = "admin/service_template/service_single_template_add";
$route['settings/service_template/service_single_template_edit/(:num)'] = "admin/service_template/service_single_template_edit/$1";
$route['settings/service_template/service_template_delete/(:num)'] = "admin/service_template/service_template_delete/$1";
$route['settings/service_template/service_single_template_delete/(:num)'] = "admin/service_template/service_single_template_delete/$1";
$route['settings/service_template'] = "admin/service_template";

$route['settings/image_setting/image_setting_add'] = "admin/image_setting/image_setting_add";
$route['settings/image_setting/image_setting_edit/(:num)'] = "admin/image_setting/image_setting_edit/$1";
$route['settings/image_setting/image_setting_list'] = "admin/image_setting/image_setting_list";
$route['settings/image_setting/image_common_delete/(:num)'] = "admin/image_setting/image_common_delete/$1";

$route['settings/image_setting/image_setting_filter_product'] = "admin/image_setting_product/image_setting_filter_product";
$route['settings/image_setting/image_setting_single_product'] = "admin/image_setting_product/image_setting_single_product";
$route['settings/image_setting/image_setting_single_product_add'] = "admin/image_setting_product/image_setting_single_product_add";
$route['settings/image_setting/image_setting_single_product_edit/(:num)'] = "admin/image_setting_product/image_setting_single_product_edit/$1";
$route['settings/image_setting/image_setting_single_product_delete/(:num)'] = "admin/image_setting_product/image_setting_single_product_delete/$1";
$route['settings/image_setting/image_setting_product'] = "admin/image_setting_product/image_setting_product";
$route['settings/image_setting/image_product_category/(:num)'] = "admin/image_setting_product/image_product_category/$1";
$route['settings/image_setting/image_setting_product_add'] = "admin/image_setting_product/image_setting_product_add";
$route['settings/image_setting/image_setting_product_manage'] = "admin/image_setting_product/image_setting_product_manage";
$route['settings/image_setting/image_setting_product_insert'] = "admin/image_setting_product/image_setting_product_insert";
$route['settings/image_setting/image_setting_product_edit/(:num)'] = "admin/image_setting_product/image_setting_product_edit/$1";
$route['settings/image_setting/image_setting_product_delete/(:num)'] = "admin/image_setting_product/image_setting_product_delete/$1";
$route['settings/image_setting/image_setting_product_list'] = "admin/image_setting_product/image_setting_product_list";
$route['settings/image_setting/image_setting_product_delete/(:num)'] = "admin/image_setting_product/image_setting_product_delete/$1";

$route['settings/image_setting/image_setting_filter_service'] = "admin/image_setting_service/image_setting_filter_service";
$route['settings/image_setting/image_setting_single_service'] = "admin/image_setting_service/image_setting_single_service";
$route['settings/image_setting/image_setting_single_service_add'] = "admin/image_setting_service/image_setting_single_service_add";
$route['settings/image_setting/image_setting_single_service_edit/(:num)'] = "admin/image_setting_service/image_setting_single_service_edit/$1";
$route['settings/image_setting/image_setting_single_service_delete/(:num)'] = "admin/image_setting_service/image_setting_single_service_delete/$1";

$route['settings/image_setting/image_setting_service'] = "admin/image_setting_service/image_setting_service";
$route['settings/image_setting/image_service_category/(:num)'] = "admin/image_setting_service/image_service_category/$1";
$route['settings/image_setting/image_setting_service_add'] = "admin/image_setting_service/image_setting_service_add";
$route['settings/image_setting/image_setting_service_manage'] = "admin/image_setting_service/image_setting_service_manage";
$route['settings/image_setting/image_setting_service_insert'] = "admin/image_setting_service/image_setting_service_insert";
$route['settings/image_setting/image_setting_service_edit/(:num)'] = "admin/image_setting_service/image_setting_service_edit/$1";
$route['settings/image_setting/image_setting_service_delete/(:num)'] = "admin/image_setting_service/image_setting_service_delete/$1";
$route['settings/image_setting/image_setting_service_list'] = "admin/image_setting_service/image_setting_service_list";
$route['settings/image_setting/image_setting_service_delete/(:num)'] = "admin/image_setting_service/image_setting_service_delete/$1";
$route['settings/image_setting'] = "admin/image_setting";


$route['selloffer/(:any)/(:num)'] = "main/mainmenu/selloffer_view/$1";
$route['categories/(:any)/(:num)'] = "main/mainmenu/categories_view/$1";
$route['specialoffer/(:any)/(:num)'] = "main/mainmenu/specialoffer_view/$1/$2";
$route['brandshop/(:any)/(:num)'] = "main/mainmenu/brandshop_view/$1/$2";
$route['mainmenu/(:any)'] = "main/mainmenu/mainmenu_view/$1";
$route['msearch'] = "main/msearch/searching";
$route['msearch/search_result'] = "main/msearch/search_result";



/*---------------------*Start Seller Module*----------------------*/

$route['shops'] = "shops/shop";
$route['shops/store/save/(:any)'] = "shops/shop/save/$1";
$route['shops/store/insert'] = "shops/shop/insert";
$route['shops/store/(:any)'] = "shops/shop/edit/$1";

$route['shops/classified/save/(:any)'] = "global/classified/save/$1";
$route['shops/classified/(:any)'] = "global/classified/classified_view/$1";
$route['shops/about/save/(:any)'] = "global/about/save/$1";
$route['shops/about/(:any)'] = "global/about/about_view/$1";
$route['shops/disclaimer/save/(:any)'] = "global/disclaimer/save/$1";
$route['shops/disclaimer/(:any)'] = "global/disclaimer/disclaimer_view/$1";
$route['shops/banner/status_banner/(:any)/(:num)'] = "global/banner/status_banner/$1/$2";
$route['shops/banner/delete_banner/(:any)/(:num)'] = "global/banner/delete_banner/$1/$2";
$route['shops/banner/delete_logo/(:any)'] = "global/banner/delete_logo/$1";
$route['shops/banner/status_logo/(:any)'] = "global/banner/status_logo/$1";
$route['shops/banner/save/(:any)'] = "global/banner/save/$1";
$route['shops/banner/(:any)'] = "global/banner/banner_view/$1";



/*----------------- Manage Product ----------------------*/

$route['shops/listing/(:any)'] = "listing/lists/$1";
$route['shops/listing/paging/(:any)'] = "listing/paging/$1";
$route['shops/listing/status/(:any)/(:any)'] = "listing/status/$1/$2";
$route['shops/product/insert/(:any)'] = "listing/product/insert/$1";
$route['shops/product/(:any)/(:any)'] = "listing/product/edit/$1/$2";
$route['shops/type/(:any)/(:any)'] = "listing/type/edit/$1/$2";
$route['shops/specification/(:any)/(:any)'] = "listing/specification/edit/$1/$2";
$route['shops/product_image/delete/(:any)/(:any)/(:num)'] = "listing/product_image/delete/$1/$2/$3";
$route['shops/product_image/save/(:any)/(:any)'] = "listing/product_image/save/$1/$2";
$route['shops/product_image/(:any)/(:any)'] = "listing/product_image/edit/$1/$2";
$route['shops/product_gallery/save/(:any)/(:any)'] = "listing/product_gallery/save/$1/$2";
$route['shops/product_gallery/single_delete/(:any)/(:any)/(:any)'] = "listing/product_gallery/single_delete/$1/$2/$3";
$route['shops/product_gallery/delete/(:any)/(:any)'] = "listing/product_gallery/delete/$1/$2";
$route['shops/product_gallery/(:any)/(:any)'] = "listing/product_gallery/edit/$1/$2";
$route['shops/image/(:any)/(:any)'] = "listing/image/edit/$1/$2";
$route['shops/listing/product/(:any)'] = "listing/create/$1";

/*-----------------------*-  Manage Branch Service -*----------------------*/

$route['shops/branch/save/(:any)'] = "global/branch/save/$1";
$route['shops/branch/edit/(:any)/(:any)'] = "global/branch/edit/$1/$2";
$route['shops/branch/status/(:any)/(:any)'] = "global/branch/status/$1/$2";
$route['shops/branch/delete/(:any)/(:any)'] = "global/branch/delete/$1/$2";
$route['shops/branch/delete/(:any)'] = "global/branch/delete/$1";
$route['shops/branch/(:any)'] = "global/branch/branch_view/$1";

/*-------------Additional Category-------------------*/


$route['shops/additional_category/category/(:any)'] = "additional_category/category/category_view/$1";
$route['shops/additional_category/ordering/(:any)'] = "additional_category/category/ordering/$1";
$route['shops/additional_category/save/(:any)'] = "additional_category/category/save/$1";
$route['shops/additional_category/edit/(:any)/(:num)'] = "additional_category/category/edit/$1/$2";
$route['shops/additional_category/status/(:any)/(:num)'] = "additional_category/category/status/$1/$2";
$route['shops/additional_category/delete/(:any)/(:num)'] = "additional_category/category/delete/$1/$2";
$route['shops/additional_category/listing/(:any)'] = "additional_category/category/listing/$1";

/*----------Website Information---------------------*/

$route['shops/websites/customize_template/(:any)'] = "websites/website/save/$1";
$route['shops/customize_menu/add_menu/(:any)'] = "websites/customize_menu/add_menu/$1";
$route['shops/customize_menu/delete/(:any)'] = "websites/customize_menu/delete/$1";
$route['shops/customize_page/save/(:any)/(:num)'] = "websites/customize_page/save/$1/$2";
$route['shops/customize_page/seo/(:any)/(:num)'] = "websites/customize_page/seo/$1/$2";
$route['shops/customize_page/seo_delete/(:any)/(:num)'] = "websites/customize_page/seo_delete/$1/$2";
$route['shops/customize_page/background_image/(:any)/(:num)'] = "websites/customize_page/background_image/$1/$2";
$route['shops/customize_page/delete_image/(:any)/(:num)'] = "websites/customize_page/delete_image/$1/$2";
$route['shops/customize_page/(:any)/(:num)'] = "websites/customize_page/page/$1/$2";
$route['shops/customize_content/save/(:any)/(:num)'] = "websites/customize_content/save/$1/$2";
$route['shops/customize_content/(:any)/(:num)'] = "websites/customize_content/content/$1/$2";

$route['shops/customize_menu/(:any)'] = "websites/customize_menu/menu/$1";
$route['shops/websites/save/(:any)'] = "websites/website/save/$1";
$route['shops/websites/(:any)'] = "websites/website/website_view/$1";
$route['shops/options/(:any)'] = "global/options/options_view/$1";

/*---------------------*End Seller Module*----------------------*/

/*---------------------*Start Services Module*----------------------*/

$route['services'] = "services/service";
$route['services/store/save/(:any)'] = "services/service/save/$1";
$route['services/store/insert'] = "services/service/insert";
$route['services/store/(:any)'] = "services/service/edit/$1";
$route['services/classified/save/(:any)'] = "global/classified/save/$1";
$route['services/classified/(:any)'] = "global/classified/classified_view/$1";
$route['services/about/save/(:any)'] = "global/about/save/$1";
$route['services/about/(:any)'] = "global/about/about_view/$1";
$route['services/disclaimer/save/(:any)'] = "global/disclaimer/save/$1";
$route['services/disclaimer/(:any)'] = "global/disclaimer/disclaimer_view/$1";
$route['services/banner/status_banner/(:any)/(:num)'] = "global/banner/status_banner/$1/$2";
$route['services/banner/delete_banner/(:any)/(:num)'] = "global/banner/delete_banner/$1/$2";
$route['services/banner/delete_logo/(:any)'] = "global/banner/delete_logo/$1";
$route['services/banner/status_logo/(:any)'] = "global/banner/status_logo/$1";
$route['services/banner/save/(:any)'] = "global/banner/save/$1";
$route['services/banner/(:any)'] = "global/banner/banner_view/$1";

/*-----------------------*-  Manage Branch Service -*----------------------*/

$route['services/branch/save/(:any)'] = "global/branch/save/$1";
$route['services/branch/edit/(:any)/(:any)'] = "global/branch/edit/$1/$2";
$route['services/branch/status/(:any)/(:any)'] = "global/branch/status/$1/$2";
$route['services/branch/delete/(:any)/(:any)'] = "global/branch/delete/$1/$2";
$route['services/branch/delete/(:any)'] = "global/branch/delete/$1";
$route['services/branch/(:any)'] = "global/branch/branch_view/$1";

/*----------------- Manage Product ----------------------*/

$route['services/listing/(:any)'] = "listing/lists/$1";
$route['services/listing/paging/(:any)'] = "listing/paging/$1";
$route['services/listing/status/(:any)/(:any)'] = "listing/status/$1/$2";
$route['services/product/insert/(:any)'] = "listing/product/insert/$1";
$route['services/product/(:any)/(:any)'] = "listing/product/edit/$1/$2";
$route['services/type/(:any)/(:any)'] = "listing/type/edit/$1/$2";
$route['services/specification/(:any)/(:any)'] = "listing/specification/edit/$1/$2";
$route['services/product_image/delete/(:any)/(:any)/(:num)'] = "listing/product_image/delete/$1/$2/$3";
$route['services/product_image/save/(:any)/(:any)'] = "listing/product_image/save/$1/$2";
$route['services/product_image/(:any)/(:any)'] = "listing/product_image/edit/$1/$2";
$route['services/product_gallery/save/(:any)/(:any)'] = "listing/product_gallery/save/$1/$2";
$route['services/product_gallery/single_delete/(:any)/(:any)/(:any)'] = "listing/product_gallery/single_delete/$1/$2/$3";
$route['services/product_gallery/delete/(:any)/(:any)'] = "listing/product_gallery/delete/$1/$2";
$route['services/product_gallery/(:any)/(:any)'] = "listing/product_gallery/edit/$1/$2";
$route['services/image/(:any)/(:any)'] = "listing/image/edit/$1/$2";
$route['services/listing/product/(:any)'] = "listing/create/$1";

/*-------------Additional Category-------------------*/


$route['services/additional_category/category/(:any)'] = "additional_category/category/category_view/$1";
$route['services/additional_category/ordering/(:any)'] = "additional_category/category/ordering/$1";
$route['services/additional_category/save/(:any)'] = "additional_category/category/save/$1";
$route['services/additional_category/edit/(:any)/(:num)'] = "additional_category/category/edit/$1/$2";
$route['services/additional_category/status/(:any)/(:num)'] = "additional_category/category/status/$1/$2";
$route['services/additional_category/delete/(:any)/(:num)'] = "additional_category/category/delete/$1/$2";
$route['services/additional_category/listing/(:any)'] = "additional_category/category/listing/$1";

/*----------Website Information---------------------*/

$route['services/websites/customize_template/(:any)'] = "websites/website/save/$1";
$route['services/customize_menu/add_menu/(:any)'] = "websites/customize_menu/add_menu/$1";
$route['services/customize_menu/delete/(:any)'] = "websites/customize_menu/delete/$1";
$route['services/customize_page/save/(:any)/(:num)'] = "websites/customize_page/save/$1/$2";
$route['services/customize_page/seo/(:any)/(:num)'] = "websites/customize_page/seo/$1/$2";
$route['services/customize_page/seo_delete/(:any)/(:num)'] = "websites/customize_page/seo_delete/$1/$2";
$route['services/customize_page/background_image/(:any)/(:num)'] = "websites/customize_page/background_image/$1/$2";
$route['services/customize_page/delete_image/(:any)/(:num)'] = "websites/customize_page/delete_image/$1/$2";
$route['services/customize_page/(:any)/(:num)'] = "websites/customize_page/page/$1/$2";
$route['services/customize_content/save/(:any)/(:num)'] = "websites/customize_content/save/$1/$2";
$route['services/customize_content/(:any)/(:num)'] = "websites/customize_content/content/$1/$2";

$route['services/customize_menu/(:any)'] = "websites/customize_menu/menu/$1";
$route['services/websites/save/(:any)'] = "websites/website/save/$1";
$route['services/websites/(:any)'] = "websites/website/website_view/$1";
$route['services/options/(:any)'] = "global/options/options_view/$1";

/*---------------------*End Services Module*----------------------*/



/* -------------------Start shoppingmall------------------------ */


$route['shoppingmall/about/save/(:any)'] = "global/about/save/$1";
$route['shoppingmall/about/(:any)'] = "global/about/about_view/$1";

$route['shoppingmall/disclaimer/save/(:any)'] = "global/disclaimer/save/$1";
$route['shoppingmall/disclaimer/(:any)'] = "global/disclaimer/disclaimer_view/$1";

$route['shoppingmall/banner/delete/(:any)/(:any)'] = "global/banner/delete/$1/$2";
$route['shoppingmall/banner/status/(:any)/(:any)'] = "global/banner/status/$1/$2";
$route['shoppingmall/banner/save/(:any)'] = "global/banner/save/$1";
$route['shoppingmall/banner/(:any)'] = "global/banner/banner_view/$1";

$route['shoppingmall/advertisment/delete/(:any)/(:any)'] = "global/advertisment/delete/$1/$2";
$route['shoppingmall/advertisment/status/(:any)/(:any)'] = "global/advertisment/status/$1/$2";
$route['shoppingmall/advertisment/delete/(:any)'] = "global/advertisment/delete/$1/$2";
$route['shoppingmall/advertisment/listing/(:any)'] = "global/advertisment/listing/$1";
$route['shoppingmall/advertisment/save/(:any)'] = "global/advertisment/save/$1";
$route['shoppingmall/advertisment/(:any)'] = "global/advertisment/advertisment_view/$1";


$route['shoppingmall/advertisment/edit/(:any)/(:any)'] = "global/advertisment/edit/$1/$2";
$route['shoppingmall/advertisment/delete/(:any)/(:any)'] = "global/advertisment/delete/$1/$2";
$route['shoppingmall/advertisment/status/(:any)/(:any)'] = "global/advertisment/status/$1/$2";
$route['shoppingmall/advertisment/delete/(:any)'] = "global/advertisment/delete/$1/$2";
$route['shoppingmall/advertisment/listing/(:any)'] = "global/advertisment/listing/$1";
$route['shoppingmall/advertisment/save/(:any)'] = "global/advertisment/save/$1";
$route['shoppingmall/advertisment/(:any)'] = "global/advertisment/advertisment_view/$1";


$route['shoppingmall/sponsor/edit/(:any)/(:any)'] = "global/sponsor/edit/$1/$2";
$route['shoppingmall/sponsor/delete/(:any)/(:any)'] = "global/sponsor/delete/$1/$2";
$route['shoppingmall/sponsor/status/(:any)/(:any)'] = "global/sponsor/status/$1/$2";
$route['shoppingmall/sponsor/delete/(:any)'] = "global/sponsor/delete/$1/$2";
$route['shoppingmall/sponsor/listing/(:any)'] = "global/sponsor/listing/$1";
$route['shoppingmall/sponsor/save/(:any)'] = "global/sponsor/save/$1";
$route['shoppingmall/sponsor/settings/(:any)'] = "global/sponsor/settings/$1";
$route['shoppingmall/sponsor/(:any)'] = "global/sponsor/sponsor_view/$1";





$route['shoppingmall/websites/customize_template/(:any)'] = "websites/website/save/$1";
$route['shoppingmall/customize_menu/add_menu/(:any)'] = "websites/customize_menu/add_menu/$1";
$route['shoppingmall/customize_menu/delete/(:any)'] = "websites/customize_menu/delete/$1";
$route['shoppingmall/customize_page/save/(:any)/(:num)'] = "websites/customize_page/save/$1/$2";
$route['shoppingmall/customize_page/seo/(:any)/(:num)'] = "websites/customize_page/seo/$1/$2";
$route['shoppingmall/customize_page/seo_delete/(:any)/(:num)'] = "websites/customize_page/seo_delete/$1/$2";
$route['shoppingmall/customize_page/background_image/(:any)/(:num)'] = "websites/customize_page/background_image/$1/$2";
$route['shoppingmall/customize_page/delete_image/(:any)/(:num)'] = "websites/customize_page/delete_image/$1/$2";
$route['shoppingmall/customize_page/(:any)/(:num)'] = "websites/customize_page/page/$1/$2";
$route['shoppingmall/customize_content/save/(:any)/(:num)'] = "websites/customize_content/save/$1/$2";
$route['shoppingmall/customize_content/(:any)/(:num)'] = "websites/customize_content/content/$1/$2";

$route['shoppingmall/customize_menu/(:any)'] = "websites/customize_menu/menu/$1";
$route['shoppingmall/websites/save/(:any)'] = "websites/website/save/$1";
$route['shoppingmall/websites/(:any)'] = "websites/website/website_view/$1";

$route['shoppingmall/options/(:any)'] = "global/options/options_view/$1";

$route['shoppingmall'] = "shoppingmall/mall";

/* -------------------End shoppingmall------------------------ */

/*############----             Start Sites Content              ---###########*/

$route['sites/feature'] = "sites/feature/listing";
$route['sites/sitecontent'] = "sites/sitecontent/listing";
$route['sites/tradefair'] = "sites/tradefair/listing";
$route['sites/help'] = "sites/help/listing";
$route['sites/tradefair/sponsor/save/(:num)'] = "sites/sponsor/save/$1";
$route['sites/tradefair/sponsor/(:num)'] = "sites/sponsor/listing/$1";
$route['sites/tradefair/partner/save(:num)'] = "sites/partner/save/$1";
$route['sites/tradefair/partner/(:num)'] = "sites/partner/listing/$1";
$route['sites/tradefair/slider/save/(:num)'] = "sites/slider/save/$1";
$route['sites/tradefair/slider/(:num)'] = "sites/slider/listing/$1";

//$route['sites/feature/save'] = "sites/feature/listing";

/*############----             End Sites Content              ---###########*/



$route['404_override'] = '';
/* End of file routes.php */
/* Location: ./application/config/routes.php */