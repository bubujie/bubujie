<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="http://www.bubujie.net/templates/mda1/css/prettify.css" />
<script type="text/javascript" src="http://www.bubujie.net/templates/mda1/js/prettify.js"></script>
</head>
<body onload="prettyPrint();">

<?php
$db = new PDO('sqlite:Design.db3');
$result = $db->query('SELECT * FROM PrestaShop_SQL');
$results = $result->fetchAll();
echo   "".'<pre class="prettyprint linenums">';
foreach ($results as $row) {
    printf("\n".'%s' ,
    	$row['sql']
    );
}
echo   "".'</pre>';
?>

</body>
</html>
