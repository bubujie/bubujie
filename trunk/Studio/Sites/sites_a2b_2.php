<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
	<title></title>
<link rel="stylesheet" href="./codemirror/css/codemirror.css" />
<style type="text/css">
body{font-size:12px;}
</style>
<script type="text/javascript" src="./codemirror/js/codemirror.js"></script>
<script type="text/javascript" src="./codemirror/zen_codemirror.min.js"></script>
</head>
<body>
<?php
/*
id           -> id
class        -> catid
name         -> title
displayorder -> ordering
1            -> state
*/



//$dbh = new PDO("pgsql:dbname=db1;host=localhost;user=postgres;password=pass");
//$dbh = new PDO("mysql:host=yourhost;dbname=yourdatabase","databaseuser","databasepassword");
//$dbh = new PDO('sqlite:css.sqlite');


	/* 要读的数据库和要写的数据库 */
	$dbh1 = new PDO("mysql:dbname=localhost;dbname=gzkoo", "root","xampp");
	$dbh2 = new PDO("mysql:dbname=localhost;dbname=joomla","root","xampp");



	//$first = $result->fetchColumn(0);
	//$second = $result->fetchColumn(1);
	//print_r($result);
	/* ######### ######### 查询 ######### ######### */
	$result = $dbh1->query('SET NAMES gb2312');
	$result = $dbh1->query('SELECT id,class,name,url,displayorder FROM `gzdh_site` ORDER BY id');
	//print_r($dbh1->errorInfo());
	$results = $result->fetchAll();
	
	$dbh2->exec('DROP TABLE `jos_weblinks`');
	$dbh2->exec("CREATE TABLE IF NOT EXISTS `jos_weblinks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(11) NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `access` int(11) NOT NULL DEFAULT '1',
  `params` text NOT NULL,
  `language` char(7) NOT NULL DEFAULT '',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if link is featured.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;");

print_r($dbh2->errorInfo());
	echo   "\n".'<pre>';
	foreach ($results as $key => $value) {
		$dbh2->query('SET NAMES gb2312');
		$query2 = 'INSERT INTO jos_weblinks SET catid='.$results[$key][1].', title="'.$results[$key][2].'", url="'.$results[$key][3].'", ordering='.$results[$key][4].', state=1 WHERE id='.$results[$key][0];
		echo "\n",$query2,';';
		$dbh2->exec($query2);
		//print_r($dbh2->errorInfo());
	}
	//echo   "\n",'</table>';
	echo   "\n".'</pre>';
	echo   "\n".'<hr />';
?>
</body>
</html>
