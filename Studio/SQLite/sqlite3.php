<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
<?php
$dbh = new PDO('sqlite:九红产品.bbj');
$result = $dbh->query('SELECT * FROM 商品之贺兰山');
//$first = $result->fetchColumn(0);
//$second = $result->fetchColumn(1);
//print_r($result);
$results = $result->fetchAll();
print_r($result);
?>
</body>
</html>
