DROP TABLE `jos_virtuemart_worldzones`;
CREATE TABLE IF NOT EXISTS `jos_virtuemart_worldzones` (
  `virtuemart_worldzone_id` smallint(1) unsigned NOT NULL auto_increment,
  `virtuemart_vendor_id` smallint(1) default NULL,
  `zone_name` char(255) default NULL,
  `zone_cost` decimal(10,2) default NULL,
  `zone_limit` decimal(10,2) default NULL,
  `zone_description` text,
  `zone_tax_rate` int(1) unsigned NOT NULL default '0',
  `ordering` int(2) NOT NULL default '0',
  `shared` tinyint(1) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL default '0',
  `modified_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL default '0',
  `locked_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL default '0',
  PRIMARY KEY  (`virtuemart_worldzone_id`),
  KEY `i_virtuemart_vendor_id` (`virtuemart_vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The Zones managed by the Zone Shipment Module' ;

--
-- 导出表中的数据 `jos_virtuemart_worldzones`
--

INSERT INTO `jos_virtuemart_worldzones` (`virtuemart_worldzone_id`, `virtuemart_vendor_id`, `zone_name`, `zone_cost`, `zone_limit`, `zone_description`, `zone_tax_rate`, `ordering`, `shared`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES
(1, NULL, 'Default', 6.00, 35.00, 'This is the default Shipment Zone. This is the zone information that all countries will use until you assign each individual country to a Zone.', 2, 0, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, NULL, 'Zone 1', 1000.00, 10000.00, 'This is a zone example', 2, 0, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, NULL, 'Zone 2', 2.00, 22.00, 'This is the second zone. You can use this for notes about this zone', 2, 0, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, NULL, 'Zone 3', 11.00, 64.00, 'Another usefull thing might be details about this zone or special instructions.', 2, 0, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

--
-- 表的结构 `jos_virtuemart_countries`
--
DROP TABLE `jos_virtuemart_countries`;
CREATE TABLE IF NOT EXISTS `jos_virtuemart_countries` (
  `virtuemart_country_id` smallint(1) unsigned NOT NULL auto_increment,
  `virtuemart_worldzone_id` tinyint(11) NOT NULL default '1',
  `country_name` char(64) default NULL,
  `country_3_code` char(3) default NULL,
  `country_2_code` char(2) default NULL,
  `ordering` int(2) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '1',
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL default '0',
  `modified_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL default '0',
  `locked_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL default '0',
  PRIMARY KEY  (`virtuemart_country_id`),
  KEY `idx_country_3_code` (`country_3_code`),
  KEY `idx_country_2_code` (`country_2_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Country records' ;

--
-- 导出表中的数据 `jos_virtuemart_countries`
--

INSERT INTO `jos_virtuemart_countries` (`virtuemart_country_id`, `virtuemart_worldzone_id`, `country_name`, `country_3_code`, `country_2_code`, `ordering`, `published`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`) VALUES
(1, 1, 'China', 'CHN', 'CN', 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
