<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>
<body>

<?php
// $db = new PDO('sqlite:Design.db3');
$db = new PDO('mysql:host=localhost;dbname=prestashop', 'root', 'xampp', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
$db->exec("SET NAMES 'utf-8'");
?>



<?php
	// 查询供应商列表
	$result = $db->query('SELECT * FROM ps_supplier WHERE active=1');
	$results = $result->fetchAll();
	// 输出供应商列表
	echo   "\n".'<table border="1">';
	echo   "\n  ".'<tr>';
	echo   "\n    ".'<th>供应商ID</th>';
	echo   "\n    ".'<th>供应商名称</th>';
	echo   "\n    ".'<th>添加时间</th>';
	echo   "\n    ".'<th>更新时间</th>';
	echo   "\n  ".'</tr>';
	foreach ($results as $row) :
		$id_supplier = $row['id_supplier'];
		$name        = $row['name'];
		$date_add    = $row['date_add'];
		$date_upd    = $row['date_upd'];
		echo   "\n  ".'<tr>';
		printf("\n    ".'<td>%s</td>', $id_supplier);
		printf("\n    ".'<td>%s</td>', $name);
		printf("\n    ".'<td>%s</td>', $date_add);
		printf("\n    ".'<td>%s</td>', $date_upd);
		echo   "\n  ".'</tr>';
	endforeach;
	echo   "\n".'</table>';
?>


<?php
	// 输出地址信息
	$result = $db->query('SELECT * FROM ps_address WHERE id_address=5');
	$row          = $result->fetch();
	$lastname     = $row['lastname'];
	$firstname    = $row['firstname'];
	$id_country   = $row['id_country'];
	$id_state     = $row['id_state'];
	$city      = $row['city'];
	$address1     = $row['address1'];
	$address2     = $row['address2'];
	$phone_mobile = $row['phone_mobile'];
	$phone        = $row['phone'];
	// 输出地址列表
	echo   "".'<table>';
	echo   "".'<tr>';
	echo   "".'<td>';
	echo   "\n  ".'<ul>';
	printf("\n    ".'<li>订购日期%s</li>','');
	printf("\n    ".'<li>发货单号%s</li>','');
	printf("\n    ".'<li>收货人姓名：<u>%s</u></li>', $lastname.$firstname);
	printf("\n    ".'<li>国家：<u>%s</u> 省份：<u>%s</u></li>', ($id_country==1) ? '中国' : '', ($id_state==1) ? '宁夏' : '');
	printf("\n    ".'<li>城市：<u>%s</u> 区县：<u>%s</u></li>', $city, '&nbsp;&nbsp;&nbsp;&nbsp;');
	echo   "\n".'</ul>';
	echo   "".'</td>';
	echo   "".'<td>';
	echo   "\n  ".'<ul>';
	printf("\n    ".'<li>地址：<u>%s</u></li>', $address1 . $address2);
	printf("\n    ".'<li>手机：<u>%s</u></li>', $phone_mobile);
	printf("\n    ".'<li>电话：<u>%s</u></li>', $phone);
	printf("\n    ".'<li>国家：<u>%s</u> 省份：<u>%s</u></li>', ($id_country==1) ? '中国' : '', ($id_state==1) ? '宁夏' : '');
	printf("\n    ".'<li>%s</li>', '');
	echo   "\n".'</ul>';
	echo   "".'</td>';
	echo   "".'</tr>';
	echo   "".'</table>';
?>

<?php
	$result = $db->query('SELECT * FROM ps_order_detail WHERE id_order=1');
	$results = $result->fetchAll();
	// 输出商品列表
	echo   "\n".'<table border="1">';
	echo   "\n  ".'<tr>';
	echo   "\n    ".'<th>订单详情ID</th>';
	echo   "\n    ".'<th>所属订单ID</th>';
	echo   "\n    ".'<th>商品名称</th>';
	echo   "\n    ".'<th>商品数量</th>';
	echo   "\n    ".'<th>商品价格</th>';
	// 税单元格
	//echo   "\n    ".'<th>税率</th>';
	echo   "\n    ".'<th>金额</th>';
	echo   "\n  ".'</tr>';
	$totaltotal = 0;
	foreach ($results as $row) :
		$id_order         = $row['id_order'];
		$id_order_detail  = $row['id_order_detail'];
		$tax_rate         = $row['tax_rate'];
		$product_name     = $row['product_name'];
		$product_quantity = $row['product_quantity'];
		// 价格四舍五入
		$product_price    = round($row['product_price'], 0);
		// 单品含税总价四舍五入
		//$total = round($product_price*$product_quantity*(100+$tax_rate)/100 , 0);
		// 单品不含税总价四舍五入
		$total = round($product_price*$product_quantity , 0);
		
		echo   "\n  ".'<tr>';
		printf("\n    ".'<td>%s</td>', $id_order_detail);
		printf("\n    ".'<td>%s</td>', $id_order);
		printf("\n    ".'<td>%s</td>', $product_name);
		printf("\n    ".'<td>%s</td>', $product_quantity);
		printf("\n    ".'<td>%s</td>', $product_price);
		// 税单元格
		//printf("\n    ".'<td>%s%%</td>', $tax_rate);
		printf("\n    ".'<td>%s</td>', $total);
		echo   "\n  ".'</tr>';
		$totaltotal += $total;
	endforeach;
	echo   "\n  ".'<tr>';
	echo   "\n    ".'<th>合计：</th>';
	echo   "\n    ".'<th></th>';
	echo   "\n    ".'<th></th>';
	echo   "\n    ".'<th></th>';
	echo   "\n    ".'<th></th>';
	// 税单元格
	//echo   "\n    ".'<th></th>';
	printf("\n    ".'<th>%s</th>', $totaltotal);
	echo   "\n  ".'</tr>';
	echo   "\n".'</table>';
?>
</body>
</html>
