<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>
<body>

<?php
//$db = new PDO('sqlite:Design.db3');
$db = new PDO('mysql:host=localhost;dbname=j15last', 'root', 'abcdefg', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
$result = $db->query('SELECT * FROM jos_content');
$results = $result->fetchAll();
//print_r($results);
foreach ($results as $row) {
    echo "\n".'UPDATE dhjvl_content SET' . ' created=\'' . $row['created'] . '\', modified=\'' . $row['modified'] . '\', checked_out_time=\'' . $row['checked_out_time'] . '\', publish_up=\'' . $row['publish_up'] . '\' WHERE id=' . $row['id'] . ';';
}
?>

</body>
</html>
