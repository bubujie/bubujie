<?php
$db = new PDO('sqlite:九红产品.bbj');
$dbso = $db->query('SELECT * FROM 商品之贺兰山');
$results = $dbso->fetchAll();


$EAN13= $first.$second;





// 引入Smarty
require('./Smarty/Smarty.class.php');
$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$smarty->assign("results",$results,true);








$smarty->display('product_list.tpl');
?>
