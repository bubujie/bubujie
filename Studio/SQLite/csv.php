<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>步步街 商品信息 CSV 生成器</title>
<link rel="stylesheet" href="./css/reset.css" type="text/css" />
<link rel="stylesheet" href="./css/prettify.css" type="text/css" />
<script type="text/javascript" src="./js/prettify.js"></script>
</head>
<body onload="prettyPrint()">
<!-- ######### ######### ######### bbody ######### ######### ######### -->
    <div style="float:right;"><img src="./img/logo.gif" title="LOGO" alt="LOGO" /></div>
    <h1>步步街 商品信息 CSV 生成器</h1>
    <hr />
    <h3>输出的CSV</h3>
<?php
try{
	// SQLite3的PDO连接
	$dsn = 'sqlite:九红产品.bbj';
	$dbh = new pdo($dsn);
	$query ='SELECT * FROM "商品之贺兰山"';
	$sep = ';';
	echo '<pre class="prettyprint linenums">';
	foreach($dbh->query($query) AS $result){
		$csvBody = "\n";
		$csvBody .= $result['ID']+9;            // 01 【ID】
		$csvBody .= $sep.$result['是否在售'];   // 02 【是否启用】
		$csvBody .= $sep.$result['商品名称'];   // 03 【商品名称】
		$csvBody .= $sep.'1,2';                   // 04 【商品分类】
		$csvBody .= $sep.$result['售价'];       // 05 【售价】
		$csvBody .= $sep.'0';                   // 06 【计税规则ID】
		$csvBody .= $sep.$result['供价'];       // 07 【批发价】
		$csvBody .= $sep.$result['是否在售'];   // 08 【是否在售】
		$csvBody .= $sep;                       // 09 【折扣数量】
		$csvBody .= $sep;                       // 10 【折扣百分比】
		$csvBody .= $sep;                       // 11 【优惠开始日】
		$csvBody .= $sep;                       // 12 【优惠结束日】
		$csvBody .= $sep.'CSV录入';             // 13 【参考】
		$csvBody .= $sep.'九红';                // 14 【供应商参考】
		$csvBody .= $sep;                       // 15 【供应商】
		$csvBody .= $sep;                       // 16 【生产商】
		$csvBody .= $sep.$result['生产商代码'].$result['商品代码']; // 17 【条码】
		$csvBody .= $sep;                       // 18 【UPC】
		$csvBody .= $sep;                       // 19 【生态税】
		$csvBody .= $sep.$result['重量'];       // 20 【重量】
		$csvBody .= $sep.'10';                  // 21 【数量】
		$csvBody .= $sep.$result['商品简述'];   // 22 【简述】
		$csvBody .= $sep.$result['商品介绍'];   // 23 【介绍】
		$csvBody .= $sep;                       // 24 【标签】
		$csvBody .= $sep.'Meta标题';            // 25 【Meta标题】
		$csvBody .= $sep.'Meta关键词';          // 26 【Meta关键词】
		$csvBody .= $sep.'Meta描述';            // 27 【Meta描述】
		$csvBody .= $sep.'hlm';                 // 28 【URL重写】
		$csvBody .= $sep.'立刻购买';            // 29 【有库存时显示的字样】
		$csvBody .= $sep.'暂无库存';            // 30 【缺货但可订购时显示的字样】
		$csvBody .= $sep.'1';                   // 31 【可否订购】
		$csvBody .= $sep.$result['TIME'];       // 32 【商品创建日期】
		$csvBody .= $sep.'1';                   // 33 【是否显示价格】
		$csvBody .= $sep.'../upload/69253926/'.$result['商品代码'].'-12.jpg'.','.'../upload/69253926/'.$result['商品代码'].'-06.jpg';  // 34 【图片URLs】
		$csvBody .= $sep.'0';                   // 35 【是否删除已存在的图片】
		$csvBody .= $sep;                       // 36 【功能】
		$csvBody .= $sep.'0';                   // 37 【是否仅在线销售】
		$csvBody .= $sep.'new';                 // 38 【条件】
		echo $csvBody;
	}
	echo '</pre>';
?>
<hr />
<h3>转换规则</h3>
<pre class="prettyprint linenums">
		$csvBody .= $result['ID']+9;            // 01 【ID】
		$csvBody .= $sep.$result['是否在售'];   // 02 【是否启用】
		$csvBody .= $sep.$result['商品名称'];   // 03 【商品名称】
		$csvBody .= $sep.'1';                   // 04 【商品分类】
		$csvBody .= $sep.$result['售价'];       // 05 【售价】
		$csvBody .= $sep.'0';                   // 06 【计税规则ID】
		$csvBody .= $sep.$result['供价'];       // 07 【批发价】
		$csvBody .= $sep.$result['是否在售'];   // 08 【是否在售】
		$csvBody .= $sep;                       // 09 【折扣数量】
		$csvBody .= $sep;                       // 10 【折扣百分比】
		$csvBody .= $sep;                       // 11 【优惠开始日】
		$csvBody .= $sep;                       // 12 【优惠结束日】
		$csvBody .= $sep.'CSV录入';             // 13 【参考】
		$csvBody .= $sep.'九红';                // 14 【供应商参考】
		$csvBody .= $sep;                       // 15 【供应商】
		$csvBody .= $sep;                       // 16 【生产商】
		$csvBody .= $sep.$result['生产商代码'].$result['商品代码']; // 17 【条码】
		$csvBody .= $sep;                       // 18 【UPC】
		$csvBody .= $sep;                       // 19 【生态税】
		$csvBody .= $sep.$result['重量'];       // 20 【重量】
		$csvBody .= $sep.'10';                  // 21 【数量】
		$csvBody .= $sep.$result['商品简述'];   // 22 【简述】
		$csvBody .= $sep.$result['商品介绍'];   // 23 【介绍】
		$csvBody .= $sep;                       // 24 【标签】
		$csvBody .= $sep.'Meta标题';            // 25 【Meta标题】
		$csvBody .= $sep.'Meta关键词';          // 26 【Meta关键词】
		$csvBody .= $sep.'Meta描述';            // 27 【Meta描述】
		$csvBody .= $sep.'hlm';                 // 28 【URL重写】
		$csvBody .= $sep.'立刻购买';            // 29 【有库存时显示的字样】
		$csvBody .= $sep.'暂无库存';            // 30 【缺货但可订购时显示的字样】
		$csvBody .= $sep.'1';                   // 31 【可否订购】
		$csvBody .= $sep.$result['TIME'];       // 32 【商品创建日期】
		$csvBody .= $sep.'1';                   // 33 【是否显示价格】
		$csvBody .= $sep.'../upload/69253926/'.$result['商品代码'].'-12.jpg'.','.'../upload/69253926/'.$result['商品代码'].'-06.jpg';  // 34 【图片URLs】
		$csvBody .= $sep.'0';                   // 35 【是否删除已存在的图片】
		$csvBody .= $sep;                       // 36 【功能】
		$csvBody .= $sep.'0';                   // 37 【是否仅在线销售】
		$csvBody .= $sep.'new';                 // 38 【条件】
</pre>

<?php
	$dsn = null;
}catch (pdoexception $e){
	echo 'Connection failed:'.$e->getmessage();
	$dsn = null;
}
?>
<!-- ######### ######### ######### /body ######### ######### ######### -->
</body>
</html>
