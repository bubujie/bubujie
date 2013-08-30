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
classid      -> id
             -> asset_id
parentid     -> parent_id
classname    -> title
path         -> alias
displayorder -> ordering
             -> extension(com_weblink)
             -> published(1)
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
	$result = $dbh1->query('SELECT classid,parentid,classname,path,displayorder FROM `gzdh_class` ORDER BY classid');
	//print_r($dbh1->errorInfo());
	$results = $result->fetchAll();
	
	$dbh2->exec('DROP TABLE `jos_categories`');
	$dbh2->exec("CREATE TABLE IF NOT EXISTS `jos_categories` (
  `id` int(11) NOT NULL auto_increment,
  `asset_id` int(10) unsigned NOT NULL default '0' COMMENT 'FK to the #__assets table.',
  `parent_id` int(10) unsigned NOT NULL default '0',
  `lft` int(11) NOT NULL default '0',
  `rgt` int(11) NOT NULL default '0',
  `level` int(10) unsigned NOT NULL default '0',
  `path` varchar(255) NOT NULL default '',
  `extension` varchar(50) NOT NULL default '',
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) character set utf8 collate utf8_bin NOT NULL default '',
  `note` varchar(255) NOT NULL default '',
  `description` mediumtext NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `access` int(10) unsigned NOT NULL default '0',
  `params` text NOT NULL,
  `metadesc` varchar(1024) NOT NULL COMMENT 'The meta description for the page.',
  `metakey` varchar(1024) NOT NULL COMMENT 'The meta keywords for the page.',
  `metadata` varchar(2048) NOT NULL COMMENT 'JSON encoded metadata properties.',
  `created_user_id` int(10) unsigned NOT NULL default '0',
  `created_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_user_id` int(10) unsigned NOT NULL default '0',
  `modified_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `hits` int(10) unsigned NOT NULL default '0',
  `language` char(7) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cat_idx` (`extension`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_path` (`path`),
  KEY `idx_left_right` (`lft`,`rgt`),
  KEY `idx_alias` (`alias`),
  KEY `idx_language` (`language`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;");

	echo   "\n".'<pre>';
	foreach ($results as $key => $value) {
		$dbh2->query('SET NAMES gb2312');
		$query2 = 'INSERT INTO `jos_categories` SET id='.$results[$key][0].', parent_id='.$results[$key][1].', title="'.$results[$key][2].'", alias="'.$results[$key][3].'", published=1, extension="com_weblink"';
		echo "\n",$query2,';';
		$dbh2->exec($query2);
		print_r($dbh2->errorInfo());
	}
	//echo   "\n",'</table>';
	echo   "\n".'</pre>';
	echo   "\n".'<hr />';
?>
</body>
</html>
