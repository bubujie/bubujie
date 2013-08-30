--
-- 表的结构 `jos_virtuemart_currencies`
--
DROP TABLE `jos_virtuemart_currencies`;
CREATE TABLE IF NOT EXISTS `jos_virtuemart_currencies` (
  `virtuemart_currency_id` smallint(1) unsigned NOT NULL auto_increment,
  `virtuemart_vendor_id` smallint(1) unsigned NOT NULL default '1',
  `currency_name` char(64) default NULL,
  `currency_code_2` char(2) default NULL,
  `currency_code_3` char(3) default NULL,
  `currency_numeric_code` int(4) default NULL,
  `currency_exchange_rate` decimal(10,5) default NULL,
  `currency_symbol` char(4) default NULL,
  `currency_decimal_place` char(4) default NULL,
  `currency_decimal_symbol` char(4) default NULL,
  `currency_thousands` char(4) default NULL,
  `currency_positive_style` char(64) default NULL,
  `currency_negative_style` char(64) default NULL,
  `ordering` int(2) NOT NULL default '0',
  `shared` tinyint(1) NOT NULL default '1',
  `published` tinyint(1) NOT NULL default '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL default '0',
  `modified_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL default '0',
  `locked_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL default '0',
  PRIMARY KEY  (`virtuemart_currency_id`),
  KEY `virtuemart_vendor_id` (`virtuemart_vendor_id`),
  KEY `idx_currency_code_3` (`currency_code_3`),
  KEY `idx_currency_numeric_code` (`currency_numeric_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Used to store currencies' ;

--
-- 导出表中的数据 `jos_virtuemart_currencies`
--

INSERT INTO `jos_virtuemart_currencies` (`virtuemart_currency_id`, `virtuemart_vendor_id`, `currency_name`, `currency_code_2`, `currency_code_3`, `currency_numeric_code`, `currency_exchange_rate`, `currency_symbol`, `currency_decimal_place`, `currency_decimal_symbol`, `currency_thousands`, `currency_positive_style`, `currency_negative_style`, `ordering`, `shared`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES
(1, 1, 'Chinese renminbi yuan', '', 'CNY', 156, 0.00000, '元', '2', ',', '', '{number} {symbol}', '{sign}{number} {symbol}', 0, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);



UPDATE `jos_virtuemart_product_prices` SET product_currency=1 WHERE product_currency!=1;
UPDATE `jos_virtuemart_calcs`          SET calc_currency=1    WHERE calc_currency!=1;