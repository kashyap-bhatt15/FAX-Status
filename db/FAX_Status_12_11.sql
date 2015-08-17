# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: us-cdbr-east-04.cleardb.com (MySQL 5.5.31-log)
# Database: heroku_ecedf6e20683b6e
# Generation Time: 2013-12-11 23:49:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bus_stops
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bus_stops`;

CREATE TABLE `bus_stops` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL DEFAULT '',
  `location` varchar(30) DEFAULT NULL,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `notes` varchar(160) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8;

LOCK TABLES `bus_stops` WRITE;
/*!40000 ALTER TABLE `bus_stops` DISABLE KEYS */;

INSERT INTO `bus_stops` (`id`, `code`, `location`, `latitude`, `longitude`, `notes`, `created_at`, `updated_at`, `name`)
VALUES
	(1,'404649',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:07:21','BLACKSTONE and EL PASO'),
	(11,'626105',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:05:42','HERNDON and CEDAR'),
	(21,'591981',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:05:46','CEDAR and SHAW'),
	(31,'422434',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:05:52','CEDAR and SHIELDS'),
	(41,'926435',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:02','CEDAR and VENTURA'),
	(51,'282549',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:07','CEDAR and JENSEN'),
	(61,'471334',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-12-02 22:04:48','HINTON CENTER'),
	(71,'235698',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-12-02 22:04:56','SHELTER B'),
	(81,'334471',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-12-02 22:05:04','HINTON CENTER'),
	(91,'549282',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:13','CEDAR and JENSEN'),
	(101,'435926',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:19','CEDAR and VENTURA'),
	(111,'434422',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:24','CEDAR and SHIELDS'),
	(121,'981591',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:31','CEDAR and SHAW'),
	(131,'105626',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:37','HERNDON and CEDAR'),
	(141,'180295',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:42','BRAWLEY and SHIELDS'),
	(151,'165716',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:47','SHAW and BRAWLEY'),
	(161,'194295',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:53','SHAW and WEST'),
	(171,'459549',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:06:58','SHAW and BLACKSTONE'),
	(181,'645369',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:25:55','SHAW and FIRST'),
	(191,'545102',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:26:24','SHAW and CEDAR'),
	(201,'362156',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:32:55','CEDAR and GETTYSBURG'),
	(211,'505448',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:32:38','SHAW and COLE'),
	(221,'156362',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:32:32','CEDAR and GETTYSBURG'),
	(231,'102545',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:32:26','SHAW and CEDAR'),
	(241,'369645',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:32:46','SHAW and FIRST'),
	(251,'549459',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:32:15','SHAW and BLACKSTONE'),
	(261,'295194',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:31:54','SHAW and WEST'),
	(271,'716165',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2013-11-30 21:31:42','SHAW and BRAWLEY');

/*!40000 ALTER TABLE `bus_stops` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table buses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `buses`;

CREATE TABLE `buses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(3) NOT NULL DEFAULT '',
  `direction` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

LOCK TABLES `buses` WRITE;
/*!40000 ALTER TABLE `buses` DISABLE KEYS */;

INSERT INTO `buses` (`id`, `number`, `direction`)
VALUES
	(1,'38','south'),
	(11,'38','north'),
	(21,'9','east'),
	(31,'9','west');

/*!40000 ALTER TABLE `buses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table incomings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `incomings`;

CREATE TABLE `incomings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(640) NOT NULL DEFAULT '' COMMENT 'message body',
  `from_number` varchar(15) NOT NULL DEFAULT '',
  `message_sid` varchar(40) NOT NULL DEFAULT '' COMMENT 'message id with twilio',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `MessageSid` (`message_sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table routes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `routes`;

CREATE TABLE `routes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bus_stop_id` int(11) NOT NULL,
  `bus_stop_code` int(11) DEFAULT NULL,
  `sequence` int(5) DEFAULT NULL COMMENT 'sequence will determine order in which all bustops come in a bus route.',
  `bus_id` int(11) NOT NULL,
  `note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8;

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;

INSERT INTO `routes` (`id`, `bus_stop_id`, `bus_stop_code`, `sequence`, `bus_id`, `note`)
VALUES
	(1,1,404649,1,1,'1 = 38 South'),
	(11,11,626105,2,1,NULL),
	(21,21,591981,3,1,NULL),
	(31,31,422431,4,1,NULL),
	(41,41,926435,5,1,NULL),
	(51,51,282549,6,1,NULL),
	(61,61,471334,7,1,NULL),
	(62,71,NULL,8,1,NULL),
	(71,71,235698,1,11,'11 = 38 North'),
	(81,81,334471,2,11,NULL),
	(91,91,549282,3,11,NULL),
	(101,101,435926,4,11,NULL),
	(111,111,434422,5,11,NULL),
	(121,121,981591,6,11,NULL),
	(131,131,105626,7,11,NULL),
	(132,1,NULL,8,11,NULL),
	(141,141,180295,1,21,'21 = 9 East'),
	(151,151,165716,2,21,NULL),
	(161,161,194295,3,21,NULL),
	(171,171,459549,4,21,NULL),
	(181,181,645369,5,21,NULL),
	(191,191,545102,6,21,NULL),
	(201,201,362156,7,21,NULL),
	(202,211,NULL,8,21,NULL),
	(211,211,505448,1,31,'31 = 9 West'),
	(221,221,156362,2,31,NULL),
	(231,231,102545,3,31,NULL),
	(241,241,369645,4,31,NULL),
	(251,251,549459,5,31,NULL),
	(261,261,295194,6,31,NULL),
	(271,271,716165,7,31,NULL),
	(272,141,NULL,8,31,NULL);

/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table schedules_weekday
# ------------------------------------------------------------

DROP TABLE IF EXISTS `schedules_weekday`;

CREATE TABLE `schedules_weekday` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `route_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5741 DEFAULT CHARSET=utf8;

LOCK TABLES `schedules_weekday` WRITE;
/*!40000 ALTER TABLE `schedules_weekday` DISABLE KEYS */;

INSERT INTO `schedules_weekday` (`id`, `time`, `route_id`)
VALUES
	(1,'2000-01-01 05:46:00',1),
	(11,'2000-01-01 06:06:00',1),
	(21,'2000-01-01 06:26:00',1),
	(31,'2000-01-01 06:46:00',1),
	(41,'2000-01-01 07:06:00',1),
	(51,'2000-01-01 07:26:00',1),
	(61,'2000-01-01 07:46:00',1),
	(71,'2000-01-01 08:06:00',1),
	(81,'2000-01-01 08:26:00',1),
	(91,'2000-01-01 08:46:00',1),
	(101,'2000-01-01 09:06:00',1),
	(111,'2000-01-01 09:26:00',1),
	(121,'2000-01-01 09:46:00',1),
	(131,'2000-01-01 10:06:00',1),
	(141,'2000-01-01 10:26:00',1),
	(151,'2000-01-01 10:46:00',1),
	(161,'2000-01-01 11:06:00',1),
	(171,'2000-01-01 11:26:00',1),
	(181,'2000-01-01 11:46:00',1),
	(191,'2000-01-01 12:06:00',1),
	(201,'2000-01-01 12:26:00',1),
	(211,'2000-01-01 12:46:00',1),
	(221,'2000-01-01 13:06:00',1),
	(231,'2000-01-01 13:26:00',1),
	(241,'2000-01-01 13:46:00',1),
	(251,'2000-01-01 14:06:00',1),
	(261,'2000-01-01 14:26:00',1),
	(271,'2000-01-01 14:46:00',1),
	(281,'2000-01-01 15:06:00',1),
	(291,'2000-01-01 15:26:00',1),
	(301,'2000-01-01 15:46:00',1),
	(311,'2000-01-01 16:06:00',1),
	(321,'2000-01-01 16:26:00',1),
	(331,'2000-01-01 16:46:00',1),
	(341,'2000-01-01 17:06:00',1),
	(351,'2000-01-01 17:26:00',1),
	(361,'2000-01-01 17:46:00',1),
	(371,'2000-01-01 18:06:00',1),
	(381,'2000-01-01 18:46:00',1),
	(391,'2000-01-01 19:36:00',1),
	(401,'2000-01-01 20:38:00',1),
	(411,'2000-01-01 05:57:00',11),
	(421,'2000-01-01 06:17:00',11),
	(431,'2000-01-01 06:37:00',11),
	(441,'2000-01-01 06:57:00',11),
	(451,'2000-01-01 07:17:00',11),
	(461,'2000-01-01 07:37:00',11),
	(471,'2000-01-01 07:57:00',11),
	(481,'2000-01-01 08:17:00',11),
	(491,'2000-01-01 08:37:00',11),
	(501,'2000-01-01 08:57:00',11),
	(511,'2000-01-01 09:17:00',11),
	(521,'2000-01-01 09:37:00',11),
	(531,'2000-01-01 09:57:00',11),
	(541,'2000-01-01 10:17:00',11),
	(551,'2000-01-01 10:37:00',11),
	(561,'2000-01-01 10:57:00',11),
	(571,'2000-01-01 11:17:00',11),
	(581,'2000-01-01 11:37:00',11),
	(591,'2000-01-01 11:57:00',11),
	(601,'2000-01-01 12:17:00',11),
	(611,'2000-01-01 12:37:00',11),
	(621,'2000-01-01 12:57:00',11),
	(631,'2000-01-01 13:17:00',11),
	(641,'2000-01-01 13:37:00',11),
	(651,'2000-01-01 13:57:00',11),
	(661,'2000-01-01 14:17:00',11),
	(671,'2000-01-01 14:37:00',11),
	(681,'2000-01-01 14:57:00',11),
	(691,'2000-01-01 15:17:00',11),
	(701,'2000-01-01 15:37:00',11),
	(711,'2000-01-01 15:57:00',11),
	(721,'2000-01-01 16:17:00',11),
	(731,'2000-01-01 16:37:00',11),
	(741,'2000-01-01 16:57:00',11),
	(751,'2000-01-01 17:17:00',11),
	(761,'2000-01-01 17:37:00',11),
	(771,'2000-01-01 17:57:00',11),
	(781,'2000-01-01 18:17:00',11),
	(791,'2000-01-01 18:57:00',11),
	(801,'2000-01-01 19:46:00',11),
	(811,'2000-01-01 20:47:00',11),
	(821,'2000-01-01 06:06:00',21),
	(831,'2000-01-01 06:26:00',21),
	(841,'2000-01-01 06:46:00',21),
	(851,'2000-01-01 07:06:00',21),
	(861,'2000-01-01 07:26:00',21),
	(871,'2000-01-01 07:46:00',21),
	(881,'2000-01-01 08:06:00',21),
	(891,'2000-01-01 08:26:00',21),
	(901,'2000-01-01 08:46:00',21),
	(911,'2000-01-01 09:06:00',21),
	(921,'2000-01-01 09:26:00',21),
	(931,'2000-01-01 09:46:00',21),
	(941,'2000-01-01 10:06:00',21),
	(951,'2000-01-01 10:26:00',21),
	(961,'2000-01-01 10:46:00',21),
	(971,'2000-01-01 11:06:00',21),
	(981,'2000-01-01 11:26:00',21),
	(991,'2000-01-01 11:46:00',21),
	(1001,'2000-01-01 12:06:00',21),
	(1011,'2000-01-01 12:26:00',21),
	(1021,'2000-01-01 12:46:00',21),
	(1031,'2000-01-01 13:06:00',21),
	(1041,'2000-01-01 13:26:00',21),
	(1051,'2000-01-01 13:46:00',21),
	(1061,'2000-01-01 14:06:00',21),
	(1071,'2000-01-01 14:26:00',21),
	(1081,'2000-01-01 14:46:00',21),
	(1091,'2000-01-01 15:06:00',21),
	(1101,'2000-01-01 15:26:00',21),
	(1111,'2000-01-01 15:46:00',21),
	(1121,'2000-01-01 16:06:00',21),
	(1131,'2000-01-01 16:26:00',21),
	(1141,'2000-01-01 16:46:00',21),
	(1151,'2000-01-01 17:06:00',21),
	(1161,'2000-01-01 17:26:00',21),
	(1171,'2000-01-01 17:46:00',21),
	(1181,'2000-01-01 18:06:00',21),
	(1191,'2000-01-01 18:26:00',21),
	(1201,'2000-01-01 19:06:00',21),
	(1211,'2000-01-01 19:54:00',21),
	(1221,'2000-01-01 20:53:00',21),
	(1231,'2000-01-01 06:15:00',31),
	(1241,'2000-01-01 06:35:00',31),
	(1251,'2000-01-01 06:55:00',31),
	(1261,'2000-01-01 07:15:00',31),
	(1271,'2000-01-01 07:35:00',31),
	(1281,'2000-01-01 07:55:00',31),
	(1291,'2000-01-01 08:15:00',31),
	(1301,'2000-01-01 08:35:00',31),
	(1311,'2000-01-01 08:55:00',31),
	(1321,'2000-01-01 09:15:00',31),
	(1331,'2000-01-01 09:35:00',31),
	(1341,'2000-01-01 09:55:00',31),
	(1351,'2000-01-01 10:15:00',31),
	(1361,'2000-01-01 10:35:00',31),
	(1371,'2000-01-01 10:55:00',31),
	(1381,'2000-01-01 11:15:00',31),
	(1391,'2000-01-01 11:35:00',31),
	(1401,'2000-01-01 11:55:00',31),
	(1411,'2000-01-01 12:15:00',31),
	(1421,'2000-01-01 12:35:00',31),
	(1431,'2000-01-01 12:55:00',31),
	(1441,'2000-01-01 13:15:00',31),
	(1451,'2000-01-01 13:35:00',31),
	(1461,'2000-01-01 13:55:00',31),
	(1471,'2000-01-01 14:15:00',31),
	(1481,'2000-01-01 14:35:00',31),
	(1491,'2000-01-01 14:55:00',31),
	(1501,'2000-01-01 15:15:00',31),
	(1511,'2000-01-01 15:35:00',31),
	(1521,'2000-01-01 15:55:00',31),
	(1531,'2000-01-01 16:15:00',31),
	(1541,'2000-01-01 16:35:00',31),
	(1551,'2000-01-01 16:55:00',31),
	(1561,'2000-01-01 17:15:00',31),
	(1571,'2000-01-01 17:35:00',31),
	(1581,'2000-01-01 17:55:00',31),
	(1591,'2000-01-01 18:15:00',31),
	(1601,'2000-01-01 18:35:00',31),
	(1611,'2000-01-01 19:15:00',31),
	(1621,'2000-01-01 20:01:00',31),
	(1631,'2000-01-01 21:00:00',31),
	(1641,'2000-01-01 06:30:00',41),
	(1651,'2000-01-01 06:50:00',41),
	(1661,'2000-01-01 07:10:00',41),
	(1671,'2000-01-01 07:30:00',41),
	(1681,'2000-01-01 07:50:00',41),
	(1691,'2000-01-01 08:10:00',41),
	(1701,'2000-01-01 08:30:00',41),
	(1711,'2000-01-01 08:50:00',41),
	(1721,'2000-01-01 09:10:00',41),
	(1731,'2000-01-01 09:30:00',41),
	(1741,'2000-01-01 09:50:00',41),
	(1751,'2000-01-01 10:10:00',41),
	(1761,'2000-01-01 10:30:00',41),
	(1771,'2000-01-01 10:50:00',41),
	(1781,'2000-01-01 11:10:00',41),
	(1791,'2000-01-01 11:30:00',41),
	(1801,'2000-01-01 11:50:00',41),
	(1811,'2000-01-01 12:10:00',41),
	(1821,'2000-01-01 12:30:00',41),
	(1831,'2000-01-01 12:50:00',41),
	(1841,'2000-01-01 13:10:00',41),
	(1851,'2000-01-01 13:30:00',41),
	(1861,'2000-01-01 13:50:00',41),
	(1871,'2000-01-01 14:10:00',41),
	(1881,'2000-01-01 14:30:00',41),
	(1891,'2000-01-01 14:50:00',41),
	(1901,'2000-01-01 15:10:00',41),
	(1911,'2000-01-01 15:30:00',41),
	(1921,'2000-01-01 15:50:00',41),
	(1931,'2000-01-01 16:10:00',41),
	(1941,'2000-01-01 16:30:00',41),
	(1951,'2000-01-01 16:50:00',41),
	(1961,'2000-01-01 17:10:00',41),
	(1971,'2000-01-01 17:30:00',41),
	(1981,'2000-01-01 17:50:00',41),
	(1991,'2000-01-01 18:10:00',41),
	(2001,'2000-01-01 18:30:00',41),
	(2011,'2000-01-01 18:50:00',41),
	(2021,'2000-01-01 19:30:00',41),
	(2031,'2000-01-01 20:13:00',41),
	(2041,'2000-01-01 21:10:00',41),
	(2051,'2000-01-01 06:38:00',51),
	(2061,'2000-01-01 06:58:00',51),
	(2071,'2000-01-01 07:18:00',51),
	(2081,'2000-01-01 07:38:00',51),
	(2091,'2000-01-01 07:58:00',51),
	(2101,'2000-01-01 08:18:00',51),
	(2111,'2000-01-01 08:38:00',51),
	(2121,'2000-01-01 08:58:00',51),
	(2131,'2000-01-01 09:18:00',51),
	(2141,'2000-01-01 09:38:00',51),
	(2151,'2000-01-01 09:58:00',51),
	(2161,'2000-01-01 10:18:00',51),
	(2171,'2000-01-01 10:38:00',51),
	(2181,'2000-01-01 10:58:00',51),
	(2191,'2000-01-01 11:18:00',51),
	(2201,'2000-01-01 11:38:00',51),
	(2211,'2000-01-01 11:58:00',51),
	(2221,'2000-01-01 12:18:00',51),
	(2231,'2000-01-01 12:38:00',51),
	(2241,'2000-01-01 12:58:00',51),
	(2251,'2000-01-01 13:18:00',51),
	(2261,'2000-01-01 13:38:00',51),
	(2271,'2000-01-01 13:58:00',51),
	(2281,'2000-01-01 14:18:00',51),
	(2291,'2000-01-01 14:38:00',51),
	(2301,'2000-01-01 14:58:00',51),
	(2311,'2000-01-01 15:18:00',51),
	(2321,'2000-01-01 15:38:00',51),
	(2331,'2000-01-01 15:58:00',51),
	(2341,'2000-01-01 16:18:00',51),
	(2351,'2000-01-01 16:38:00',51),
	(2361,'2000-01-01 16:58:00',51),
	(2371,'2000-01-01 17:18:00',51),
	(2381,'2000-01-01 17:38:00',51),
	(2391,'2000-01-01 17:58:00',51),
	(2401,'2000-01-01 18:18:00',51),
	(2411,'2000-01-01 18:38:00',51),
	(2421,'2000-01-01 18:58:00',51),
	(2431,'2000-01-01 19:38:00',51),
	(2441,'2000-01-01 20:19:00',51),
	(2451,'2000-01-01 21:15:00',51),
	(2461,'2000-01-01 06:53:00',61),
	(2471,'2000-01-01 07:13:00',61),
	(2481,'2000-01-01 07:33:00',61),
	(2491,'2000-01-01 07:53:00',61),
	(2501,'2000-01-01 08:13:00',61),
	(2511,'2000-01-01 08:33:00',61),
	(2521,'2000-01-01 08:53:00',61),
	(2531,'2000-01-01 09:13:00',61),
	(2541,'2000-01-01 09:33:00',61),
	(2551,'2000-01-01 09:53:00',61),
	(2561,'2000-01-01 10:13:00',61),
	(2571,'2000-01-01 10:33:00',61),
	(2581,'2000-01-01 10:53:00',61),
	(2591,'2000-01-01 11:13:00',61),
	(2601,'2000-01-01 11:33:00',61),
	(2611,'2000-01-01 11:53:00',61),
	(2621,'2000-01-01 12:13:00',61),
	(2631,'2000-01-01 12:33:00',61),
	(2641,'2000-01-01 12:53:00',61),
	(2651,'2000-01-01 13:13:00',61),
	(2661,'2000-01-01 13:33:00',61),
	(2671,'2000-01-01 13:53:00',61),
	(2681,'2000-01-01 14:13:00',61),
	(2691,'2000-01-01 14:33:00',61),
	(2701,'2000-01-01 14:53:00',61),
	(2711,'2000-01-01 15:13:00',61),
	(2721,'2000-01-01 15:33:00',61),
	(2731,'2000-01-01 15:53:00',61),
	(2741,'2000-01-01 16:13:00',61),
	(2751,'2000-01-01 16:33:00',61),
	(2761,'2000-01-01 16:53:00',61),
	(2771,'2000-01-01 17:13:00',61),
	(2781,'2000-01-01 17:33:00',61),
	(2791,'2000-01-01 17:53:00',61),
	(2801,'2000-01-01 18:13:00',61),
	(2811,'2000-01-01 18:33:00',61),
	(2821,'2000-01-01 18:53:00',61),
	(2831,'2000-01-01 19:13:00',61),
	(2841,'2000-01-01 19:53:00',61),
	(2851,'2000-01-01 20:30:00',61),
	(2861,'2000-01-01 21:27:00',61),
	(2871,'2000-01-01 05:45:00',71),
	(2881,'2000-01-01 06:15:00',71),
	(2891,'2000-01-01 06:35:00',71),
	(2901,'2000-01-01 06:55:00',71),
	(2911,'2000-01-01 07:15:00',71),
	(2921,'2000-01-01 07:35:00',71),
	(2931,'2000-01-01 07:55:00',71),
	(2941,'2000-01-01 08:15:00',71),
	(2951,'2000-01-01 08:35:00',71),
	(2961,'2000-01-01 08:55:00',71),
	(2971,'2000-01-01 09:15:00',71),
	(2981,'2000-01-01 09:35:00',71),
	(2991,'2000-01-01 09:55:00',71),
	(3001,'2000-01-01 10:15:00',71),
	(3011,'2000-01-01 10:35:00',71),
	(3021,'2000-01-01 10:55:00',71),
	(3031,'2000-01-01 11:15:00',71),
	(3041,'2000-01-01 11:35:00',71),
	(3051,'2000-01-01 11:55:00',71),
	(3061,'2000-01-01 12:15:00',71),
	(3071,'2000-01-01 12:35:00',71),
	(3081,'2000-01-01 12:55:00',71),
	(3091,'2000-01-01 13:15:00',71),
	(3101,'2000-01-01 13:35:00',71),
	(3111,'2000-01-01 13:55:00',71),
	(3121,'2000-01-01 14:15:00',71),
	(3131,'2000-01-01 14:35:00',71),
	(3141,'2000-01-01 14:55:00',71),
	(3151,'2000-01-01 15:15:00',71),
	(3161,'2000-01-01 15:35:00',71),
	(3171,'2000-01-01 15:55:00',71),
	(3181,'2000-01-01 16:15:00',71),
	(3191,'2000-01-01 16:35:00',71),
	(3201,'2000-01-01 16:55:00',71),
	(3211,'2000-01-01 17:15:00',71),
	(3221,'2000-01-01 17:35:00',71),
	(3231,'2000-01-01 17:55:00',71),
	(3241,'2000-01-01 18:15:00',71),
	(3251,'2000-01-01 19:15:00',71),
	(3261,'2000-01-01 20:15:00',71),
	(3271,'2000-01-01 20:45:00',71),
	(3281,'2000-01-01 05:56:00',81),
	(3291,'2000-01-01 06:26:00',81),
	(3301,'2000-01-01 06:46:00',81),
	(3311,'2000-01-01 07:06:00',81),
	(3321,'2000-01-01 07:26:00',81),
	(3331,'2000-01-01 07:46:00',81),
	(3341,'2000-01-01 08:06:00',81),
	(3351,'2000-01-01 08:26:00',81),
	(3361,'2000-01-01 08:46:00',81),
	(3371,'2000-01-01 09:06:00',81),
	(3381,'2000-01-01 09:26:00',81),
	(3391,'2000-01-01 09:46:00',81),
	(3401,'2000-01-01 10:06:00',81),
	(3411,'2000-01-01 10:26:00',81),
	(3421,'2000-01-01 10:46:00',81),
	(3431,'2000-01-01 11:06:00',81),
	(3441,'2000-01-01 11:26:00',81),
	(3451,'2000-01-01 11:46:00',81),
	(3461,'2000-01-01 12:06:00',81),
	(3471,'2000-01-01 12:26:00',81),
	(3481,'2000-01-01 12:46:00',81),
	(3491,'2000-01-01 13:06:00',81),
	(3501,'2000-01-01 13:26:00',81),
	(3511,'2000-01-01 13:46:00',81),
	(3521,'2000-01-01 14:06:00',81),
	(3531,'2000-01-01 14:26:00',81),
	(3541,'2000-01-01 14:46:00',81),
	(3551,'2000-01-01 15:06:00',81),
	(3561,'2000-01-01 15:26:00',81),
	(3571,'2000-01-01 15:46:00',81),
	(3581,'2000-01-01 16:06:00',81),
	(3591,'2000-01-01 16:26:00',81),
	(3601,'2000-01-01 16:46:00',81),
	(3611,'2000-01-01 17:06:00',81),
	(3621,'2000-01-01 17:26:00',81),
	(3631,'2000-01-01 17:46:00',81),
	(3641,'2000-01-01 18:06:00',81),
	(3651,'2000-01-01 18:26:00',81),
	(3661,'2000-01-01 19:26:00',81),
	(3671,'2000-01-01 20:26:00',81),
	(3681,'2000-01-01 20:54:00',81),
	(3691,'2000-01-01 06:10:00',91),
	(3701,'2000-01-01 06:40:00',91),
	(3711,'2000-01-01 07:00:00',91),
	(3721,'2000-01-01 07:20:00',91),
	(3731,'2000-01-01 07:40:00',91),
	(3741,'2000-01-01 08:00:00',91),
	(3751,'2000-01-01 08:20:00',91),
	(3761,'2000-01-01 08:40:00',91),
	(3771,'2000-01-01 09:00:00',91),
	(3781,'2000-01-01 09:20:00',91),
	(3791,'2000-01-01 09:40:00',91),
	(3801,'2000-01-01 10:00:00',91),
	(3811,'2000-01-01 10:20:00',91),
	(3821,'2000-01-01 10:40:00',91),
	(3831,'2000-01-01 11:00:00',91),
	(3841,'2000-01-01 11:20:00',91),
	(3851,'2000-01-01 11:40:00',91),
	(3861,'2000-01-01 12:00:00',91),
	(3871,'2000-01-01 12:20:00',91),
	(3881,'2000-01-01 12:40:00',91),
	(3891,'2000-01-01 13:00:00',91),
	(3901,'2000-01-01 13:20:00',91),
	(3911,'2000-01-01 13:40:00',91),
	(3921,'2000-01-01 14:00:00',91),
	(3931,'2000-01-01 14:20:00',91),
	(3941,'2000-01-01 14:40:00',91),
	(3951,'2000-01-01 15:00:00',91),
	(3961,'2000-01-01 15:20:00',91),
	(3971,'2000-01-01 15:40:00',91),
	(3981,'2000-01-01 16:00:00',91),
	(3991,'2000-01-01 16:20:00',91),
	(4001,'2000-01-01 16:40:00',91),
	(4011,'2000-01-01 17:00:00',91),
	(4021,'2000-01-01 17:20:00',91),
	(4031,'2000-01-01 17:40:00',91),
	(4041,'2000-01-01 18:00:00',91),
	(4051,'2000-01-01 18:20:00',91),
	(4061,'2000-01-01 18:40:00',91),
	(4071,'2000-01-01 19:40:00',91),
	(4081,'2000-01-01 20:49:00',91),
	(4091,'2000-01-01 21:04:00',91),
	(4101,'2000-01-01 06:20:00',101),
	(4111,'2000-01-01 06:50:00',101),
	(4121,'2000-01-01 07:10:00',101),
	(4131,'2000-01-01 07:30:00',101),
	(4141,'2000-01-01 07:50:00',101),
	(4151,'2000-01-01 08:10:00',101),
	(4161,'2000-01-01 08:30:00',101),
	(4171,'2000-01-01 08:50:00',101),
	(4181,'2000-01-01 09:10:00',101),
	(4191,'2000-01-01 09:30:00',101),
	(4201,'2000-01-01 09:50:00',101),
	(4211,'2000-01-01 10:10:00',101),
	(4221,'2000-01-01 10:30:00',101),
	(4231,'2000-01-01 10:50:00',101),
	(4241,'2000-01-01 11:10:00',101),
	(4251,'2000-01-01 11:30:00',101),
	(4261,'2000-01-01 11:50:00',101),
	(4271,'2000-01-01 12:10:00',101),
	(4281,'2000-01-01 12:30:00',101),
	(4291,'2000-01-01 12:50:00',101),
	(4301,'2000-01-01 13:10:00',101),
	(4311,'2000-01-01 13:30:00',101),
	(4321,'2000-01-01 13:50:00',101),
	(4331,'2000-01-01 14:10:00',101),
	(4341,'2000-01-01 14:30:00',101),
	(4351,'2000-01-01 14:50:00',101),
	(4361,'2000-01-01 15:10:00',101),
	(4371,'2000-01-01 15:30:00',101),
	(4381,'2000-01-01 15:50:00',101),
	(4391,'2000-01-01 16:10:00',101),
	(4401,'2000-01-01 16:30:00',101),
	(4411,'2000-01-01 16:50:00',101),
	(4421,'2000-01-01 17:10:00',101),
	(4431,'2000-01-01 17:30:00',101),
	(4441,'2000-01-01 17:50:00',101),
	(4451,'2000-01-01 18:10:00',101),
	(4461,'2000-01-01 18:30:00',101),
	(4471,'2000-01-01 18:50:00',101),
	(4481,'2000-01-01 19:50:00',101),
	(4491,'2000-01-01 20:50:00',101),
	(4501,'2000-01-01 21:12:00',101),
	(4511,'2000-01-01 06:35:00',111),
	(4521,'2000-01-01 07:05:00',111),
	(4531,'2000-01-01 07:25:00',111),
	(4541,'2000-01-01 07:45:00',111),
	(4551,'2000-01-01 08:05:00',111),
	(4561,'2000-01-01 08:25:00',111),
	(4571,'2000-01-01 08:45:00',111),
	(4581,'2000-01-01 09:05:00',111),
	(4591,'2000-01-01 09:25:00',111),
	(4601,'2000-01-01 09:45:00',111),
	(4611,'2000-01-01 10:05:00',111),
	(4621,'2000-01-01 10:25:00',111),
	(4631,'2000-01-01 10:45:00',111),
	(4641,'2000-01-01 11:05:00',111),
	(4651,'2000-01-01 11:25:00',111),
	(4661,'2000-01-01 11:45:00',111),
	(4671,'2000-01-01 12:05:00',111),
	(4681,'2000-01-01 12:25:00',111),
	(4691,'2000-01-01 12:45:00',111),
	(4701,'2000-01-01 13:05:00',111),
	(4711,'2000-01-01 13:25:00',111),
	(4721,'2000-01-01 13:45:00',111),
	(4731,'2000-01-01 14:05:00',111),
	(4741,'2000-01-01 14:25:00',111),
	(4751,'2000-01-01 14:45:00',111),
	(4761,'2000-01-01 15:05:00',111),
	(4771,'2000-01-01 15:25:00',111),
	(4781,'2000-01-01 15:45:00',111),
	(4791,'2000-01-01 16:05:00',111),
	(4801,'2000-01-01 16:25:00',111),
	(4811,'2000-01-01 16:45:00',111),
	(4821,'2000-01-01 17:05:00',111),
	(4831,'2000-01-01 17:25:00',111),
	(4841,'2000-01-01 17:45:00',111),
	(4851,'2000-01-01 18:05:00',111),
	(4861,'2000-01-01 18:25:00',111),
	(4871,'2000-01-01 18:45:00',111),
	(4881,'2000-01-01 19:05:00',111),
	(4891,'2000-01-01 20:05:00',111),
	(4901,'2000-01-01 21:05:00',111),
	(4911,'2000-01-01 21:24:00',111),
	(4921,'2000-01-01 06:45:00',121),
	(4931,'2000-01-01 07:15:00',121),
	(4941,'2000-01-01 07:35:00',121),
	(4951,'2000-01-01 07:55:00',121),
	(4961,'2000-01-01 08:15:00',121),
	(4971,'2000-01-01 08:35:00',121),
	(4981,'2000-01-01 08:55:00',121),
	(4991,'2000-01-01 09:15:00',121),
	(5001,'2000-01-01 09:35:00',121),
	(5011,'2000-01-01 09:55:00',121),
	(5021,'2000-01-01 10:15:00',121),
	(5031,'2000-01-01 10:35:00',121),
	(5041,'2000-01-01 10:55:00',121),
	(5051,'2000-01-01 11:15:00',121),
	(5061,'2000-01-01 11:35:00',121),
	(5071,'2000-01-01 11:55:00',121),
	(5081,'2000-01-01 12:15:00',121),
	(5091,'2000-01-01 12:35:00',121),
	(5101,'2000-01-01 12:55:00',121),
	(5111,'2000-01-01 13:15:00',121),
	(5121,'2000-01-01 13:35:00',121),
	(5131,'2000-01-01 13:55:00',121),
	(5141,'2000-01-01 14:15:00',121),
	(5151,'2000-01-01 14:35:00',121),
	(5161,'2000-01-01 14:55:00',121),
	(5171,'2000-01-01 15:15:00',121),
	(5181,'2000-01-01 15:35:00',121),
	(5191,'2000-01-01 15:55:00',121),
	(5201,'2000-01-01 16:15:00',121),
	(5211,'2000-01-01 16:35:00',121),
	(5221,'2000-01-01 16:55:00',121),
	(5231,'2000-01-01 17:15:00',121),
	(5241,'2000-01-01 17:35:00',121),
	(5251,'2000-01-01 17:55:00',121),
	(5261,'2000-01-01 18:15:00',121),
	(5271,'2000-01-01 18:35:00',121),
	(5281,'2000-01-01 18:55:00',121),
	(5291,'2000-01-01 19:15:00',121),
	(5301,'2000-01-01 20:15:00',121),
	(5311,'2000-01-01 21:15:00',121),
	(5321,'2000-01-01 21:32:00',121),
	(5331,'2000-01-01 06:55:00',131),
	(5341,'2000-01-01 07:23:00',131),
	(5351,'2000-01-01 07:43:00',131),
	(5361,'2000-01-01 08:03:00',131),
	(5371,'2000-01-01 08:23:00',131),
	(5381,'2000-01-01 08:43:00',131),
	(5391,'2000-01-01 09:03:00',131),
	(5401,'2000-01-01 09:23:00',131),
	(5411,'2000-01-01 09:43:00',131),
	(5421,'2000-01-01 10:03:00',131),
	(5431,'2000-01-01 10:23:00',131),
	(5441,'2000-01-01 10:43:00',131),
	(5451,'2000-01-01 11:03:00',131),
	(5461,'2000-01-01 11:23:00',131),
	(5471,'2000-01-01 11:43:00',131),
	(5481,'2000-01-01 12:03:00',131),
	(5491,'2000-01-01 12:23:00',131),
	(5501,'2000-01-01 12:43:00',131),
	(5511,'2000-01-01 13:03:00',131),
	(5521,'2000-01-01 13:23:00',131),
	(5531,'2000-01-01 13:43:00',131),
	(5541,'2000-01-01 14:03:00',131),
	(5551,'2000-01-01 14:23:00',131),
	(5561,'2000-01-01 14:43:00',131),
	(5571,'2000-01-01 15:03:00',131),
	(5581,'2000-01-01 15:23:00',131),
	(5591,'2000-01-01 15:43:00',131),
	(5601,'2000-01-01 16:03:00',131),
	(5611,'2000-01-01 16:23:00',131),
	(5621,'2000-01-01 16:43:00',131),
	(5631,'2000-01-01 17:03:00',131),
	(5641,'2000-01-01 17:23:00',131),
	(5651,'2000-01-01 17:43:00',131),
	(5661,'2000-01-01 18:03:00',131),
	(5671,'2000-01-01 18:23:00',131),
	(5681,'2000-01-01 18:43:00',131),
	(5691,'2000-01-01 19:03:00',131),
	(5701,'2000-01-01 19:23:00',131),
	(5711,'2000-01-01 20:23:00',131),
	(5721,'2000-01-01 21:22:00',131),
	(5731,'2000-01-01 21:38:00',131);

/*!40000 ALTER TABLE `schedules_weekday` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table schedules_weekend
# ------------------------------------------------------------

DROP TABLE IF EXISTS `schedules_weekend`;

CREATE TABLE `schedules_weekend` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `route_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;