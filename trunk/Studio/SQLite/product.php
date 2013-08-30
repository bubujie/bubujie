<?php
$db = new PDO('sqlite:九红产品.bbj');
$dbso = $db->query('SELECT * FROM 商品之贺兰山,品牌 WHERE 品牌.品牌条码=商品之贺兰山.生产商代码');
$results = $dbso->fetchAll();


$EAN13= $first.$second;





// 引入Smarty
require('./Smarty/Smarty.class.php');
$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("EAN_A",$first,true);
$smarty->assign("ean13",$EAN13,true);
$smarty->assign("name",$EAN13,true);

$smarty->assign("results",$results,true);








$smarty->display('product.tpl');
?>
