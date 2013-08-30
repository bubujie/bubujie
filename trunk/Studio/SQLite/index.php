<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title></title>
<link rel="shortcut icon" href="./favicon.ico" />
<link rel="stylesheet" href="./css/hybrid/7.css" type="text/css" />
<style type="text/css">
body{font-size:12px;background:#fff;}
#bhead{background:#A4825F url(./img/bg_header.gif) 0 100% repeat-x; height:43px; padding-top:7px;}
.wrapping{width:96%;}
table.tbl1{  border-collapse:collapse; border-spacing:0; width:880px; margin:0 auto;}
table.tbl1 th, table.tbl1 td{border:1px solid #D3DDE8; padding:0.5em;}
table.tbl1 th {background: #F5F9FD; color:#2769A7; font-weight:normal;}
table.tbl1 td {color:#555555;}

table.wholetbl{ border:0; border-collapse:separate; border-spacing:1px; background:#C1C1C1; margin:0 auto;}
table.wholetbl thead tr{ background:#000; }
table.wholetbl th{ border-top:1px solid #FFF; border-left:1px solid #FFF; background:#ECE9D8;}
table.wholetbl td{ white-space:nowrap; background:#fff; padding:4px;}
</style>
</head>
<body>
<div id="bhead">
  <div id="bh5th" class="wrapping nmn">
    <div class="filling">

    </div>
  </div>
</div>
<!-- ######### ######### ######### bbody ######### ######### ######### -->
<div id="bbody">
  <div id="bb5th" class="wrapping">
    <div class="filling">
<?php
$db = new PDO('sqlite:九红产品.bbj');
$dbso = $db->query('SELECT * FROM 商品之贺兰山,品牌 WHERE 品牌.品牌条码=商品之贺兰山.生产商代码');
$results = $dbso->fetchAll();
echo "".'<pre class="prettyprint linenums">';
print_r($results);
echo "".'</pre>';
?>
    </div>
  </div>
</div>
<!-- ######### ######### ######### /bbody ######### ######### ######### -->
<div id="bfoot">
  <div id="bf5th" class="wrapping">
    <div class="filling">

    </div>
  </div>
</div>
</body>
</html>
