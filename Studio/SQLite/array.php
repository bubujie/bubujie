<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="./css/reset.css" type="text/css" />
<link rel="stylesheet" href="./css/prettify.css" type="text/css" />
<script type="text/javascript" src="./js/prettify.js"></script>
</head>
<body onload="prettyPrint()">
<?php
$product_trans = array(
	"01" => array(
		"from"=>"ID",
		"to"=>"id_product",
		"common"=>"商品ID"
	),
	"02" => array(
		"from"=>"是否在售",
		"to"=>"active",
		"common"=>"是否启用"
	),
	"03" => array(
		"from"=>"商品名称",
		"to"=>"name（lang）",
		"common"=>"商品名称"
	),
	"04" => array(
		"from"=>"？",
		"to"=>"FK to the #__Category table groups",
		"common"=>"所属分类"
	),
	"05" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"含税价"
	),
	"06" => array(
		"from"=>"？",
		"to"=>"id_tax_rules_group",
		"common"=>"计税规则ID"
	),
	"07" => array(
		"from"=>"供价",
		"to"=>"wholesale_price",
		"common"=>"批发价"
	),
	"08" => array(
		"from"=>"是否在售",
		"to"=>"on_sale",
		"common"=>"是否在售"
	),
	"09" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"折扣数量"
	),
	"10" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"折扣百分比"
	),
	"11" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"优惠起始日"
	),
	"12" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"优惠结束日"
	),
	"13" => array(
		"from"=>"？",
		"to"=>"reference",
		"common"=>"参考"
	),
	"14" => array(
		"from"=>"？",
		"to"=>"supplier_reference",
		"common"=>"供应商参考"
	),
	"15" => array(
		"from"=>"？",
		"to"=>"id_supplier",
		"common"=>"供应商"
	),
	"16" => array(
		"from"=>"？",
		"to"=>"id_manufacturer",
		"common"=>"生产商"
	),
	"17" => array(
		"from"=>"？",
		"to"=>"ean13",
		"common"=>"EAN13位条码"
	),
	"18" => array(
		"from"=>"？",
		"to"=>"upc",
		"common"=>"UPC条码"
	),
	"19" => array(
		"from"=>"？",
		"to"=>"ecotax",
		"common"=>"生态税"
	),
	"20" => array(
		"from"=>"重量",
		"to"=>"weight",
		"common"=>"重量"
	),
	"21" => array(
		"from"=>"？",
		"to"=>"quantity",
		"common"=>"数量"
	),
	"22" => array(
		"from"=>"商品简述",
		"to"=>"description_short（lang）",
		"common"=>"简述"
	),
	"23" => array(
		"from"=>"商品介绍",
		"to"=>"description（lang）",
		"common"=>"介绍"
	),
	"24" => array(
		"from"=>"？",
		"to"=>"FK to the #__Tag table groups",
		"common"=>"标签"
	),
	"25" => array(
		"from"=>"Meta标题",
		"to"=>"meta_title（lang）",
	"common"=>"Meta标题"),
	"26" => array(
		"from"=>"Meta关键词",
		"to"=>"meta_keywords（lang）",
		"common"=>"Meta关键词"
	),
	"27" => array(
		"from"=>"Meta描述",
		"to"=>"meta_description（lang）",
		"common"=>"Meta描述"
	),
	"28" => array(
		"from"=>"？", 		
		"to"=>"link_rewrite（lang）",
		"common"=>"URL重写"
	),
	"29" => array(
		"from"=>"？",
		"to"=>"available_now（lang）", 		
		"common"=>"有库存时显示的字样"
	),
	"30" => array(
		"from"=>"？",
		"to"=>"available_later（lang）",
		"common"=>"缺货但可订购时显示的字样"
	),
	"31" => array(
		"from"=>"是否在售",
		"to"=>"available_for_order",
		"common"=>"可否订购"
	),
	"32" => array(
		"from"=>"？",
		"to"=>"data_add",
		"common"=>"商品创建日期"
	),
	"33" => array(
		"from"=>"？",
		"to"=>"show_price",
		"common"=>"是否显示价格"
	),
	"34" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"图片URLs"
	),
	"35" => array(
		"from"=>"？",
		"to"=>"？",
		"common"=>"删除已存在的图片0/1"
	),
	"36" => array(
		"from"=>"？",
		"to"=>"FK to the #__Feature table groups",
		"common"=>"功能"
	),
	"37" => array(
		"from"=>"？",
		"to"=>"online_only",
		"common"=>"是否仅在线销售"
	),
	"38" => array(
		"from"=>"条件",
		"to"=>"condition",
		"common"=>"条件：全新（new）/二手（used）/翻新（refurbished）"
	),
);
echo '<pre class="prettyprint linenums">';
print_r($product_trans);
echo '</pre>';
?>
</body>
</html>
