<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>
<body>

<?php
$db = new PDO('sqlite:Design.db3');
$result = $db->query('SELECT * FROM cafe24');
$results = $result->fetchAll();
print_r($results);
foreach ($results as $row) {
    echo 'Example content: ' . $row['编码'];
}
?>

</body>
</html>
