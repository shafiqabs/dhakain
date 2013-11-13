<?php

 function product_details(){

     $sql="SELECT
	listing_product.*,
    CONCAT_WS(',',shop_details.address,shop_details.city,location_tbl.settings_name) AS address_details,
    location_tbl.settings_name AS location_name,
    GROUP_CONCAT(DISTINCT listing_specific_value.meta_value SEPARATOR ',') AS meta_value,
    quant_tbl.settings_name AS quantity_type,
    product_status_tbl.settings_name AS product_status,
	listing_product_category.catid_label_1,
	listing_product_category.catid_label_2,
	listing_product_category.catid_label_3,
    listing_product_category.catid_label_4,
	product_category.category_name,
	product_category.slug AS category_slug,
	listing_product_image.image_medium_path,
	listing_product_image.image_large_path,
	listing_specific_value.extra_field,
GROUP_CONCAT(DISTINCT listing_specific_value.meta_value SEPARATOR ',') AS meta_value,
GROUP_CONCAT(DISTINCT listing_specific_value.label_name SEPARATOR ',') AS label_name,
GROUP_CONCAT(DISTINCT listing_product_gallery.image_large_path SEPARATOR ',') AS gallery_large_path,
parent_group_tbl.*,group_tbl.*, malllist_tbl.*
FROM listing_product
LEFT OUTER JOIN listing_product_category ON listing_product.product_id = listing_product_category.product_id AND listing_product.agent_uid = listing_product_category.agent_uid
LEFT OUTER JOIN product_category  ON listing_product_category.catid_label_2 = product_category.category_id
LEFT OUTER JOIN shop_details  ON listing_product.agent_uid = shop_details.agent_uid
LEFT OUTER JOIN settings as location_tbl ON shop_details.location_id = location_tbl.settings_id
LEFT OUTER JOIN settings as quant_tbl ON listing_product.quantity_type = quant_tbl.settings_id
LEFT OUTER JOIN settings as product_status_tbl ON listing_product.product_status = product_status_tbl.settings_id
LEFT OUTER JOIN listing_product_gallery ON listing_product.product_id = listing_product_gallery.product_id AND listing_product.agent_uid = listing_product_gallery.agent_uid
LEFT OUTER JOIN listing_product_image ON listing_product.product_id = listing_product_image.product_id AND listing_product.agent_uid = listing_product_image.agent_uid
LEFT OUTER JOIN listing_specific_value ON listing_product.product_id = listing_specific_value.product_id AND listing_product.agent_uid = listing_specific_value.agent_uid

LEFT JOIN (SELECT  shop_shopping_mall.agent_uid ,
  GROUP_CONCAT( CONCAT_WS('#@#',mall_tbl.shop_name,mall_tbl.agent_uid,mall_location_tbl.settings_name) SEPARATOR ',') AS mall_info , GROUP_CONCAT(DISTINCT shop_shopping_mall.shopping_mall_id SEPARATOR ',') AS shopping_mall_id ,GROUP_CONCAT(DISTINCT shop_shopping_mall.level SEPARATOR ',') AS level ,GROUP_CONCAT(DISTINCT shop_shopping_mall.shop_no SEPARATOR ',') AS shop_no  FROM shop_shopping_mall

LEFT  JOIN shop_details as mall_tbl ON mall_tbl.agent_uid = shop_shopping_mall.shopping_mall_id
LEFT  JOIN settings as mall_location_tbl ON mall_tbl.location_id = mall_location_tbl.settings_id WHERE shop_shopping_mall.status=1 GROUP BY shop_shopping_mall.agent_uid
) AS malllist_tbl ON ( malllist_tbl.agent_uid = listing_product.agent_uid)

LEFT JOIN (SELECT  listing_product_group.product_id , GROUP_CONCAT(DISTINCT listing_product_group.grouping_parent_id SEPARATOR ',') AS grouping_parent_id ,GROUP_CONCAT(DISTINCT grouping.name SEPARATOR ',') AS parent_group_name , grouping.admin FROM listing_product_group

LEFT  JOIN grouping ON listing_product_group.grouping_parent_id = grouping.grouping_id WHERE grouping.admin !=1 GROUP BY listing_product_group.product_id
	) AS parent_group_tbl ON ( parent_group_tbl.product_id = listing_product.product_id)
	LEFT JOIN (SELECT  listing_product_group.product_id , GROUP_CONCAT(DISTINCT listing_product_group.grouping_id SEPARATOR ',') AS grouping_id , GROUP_CONCAT(DISTINCT listing_product_group.grouping_parent_id SEPARATOR ',') AS grouping_parent_id , GROUP_CONCAT(DISTINCT groups.name SEPARATOR ',') AS group_name , groups.admin FROM listing_product_group
	LEFT  JOIN grouping AS groups ON listing_product_group.grouping_id = groups.grouping_id GROUP BY listing_product_group.product_id
    ) AS group_tbl ON ( group_tbl.product_id = listing_product.product_id)
WHERE listing_product.slug='straip-shirt'";
 }