# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: us-cdbr-east-04.cleardb.com (MySQL 5.5.31-log)
# Database: heroku_ecedf6e20683b6e
# Generation Time: 2013-11-13 21:41:07 +0000
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
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bus_stops` WRITE;
/*!40000 ALTER TABLE `bus_stops` DISABLE KEYS */;

INSERT INTO `bus_stops` (`id`, `code`, `location`, `latitude`, `longitude`, `notes`, `created_at`, `updated_at`, `name`)
VALUES
	(1,'404649',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'BLACKSTONE EL PASO'),
	(11,'626105',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'HERNDON CEDAR'),
	(21,'591981',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR SHAW'),
	(31,'422434',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR SHIELDS'),
	(41,'926435',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR VENTURA'),
	(51,'282549',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR JENSEN'),
	(61,'471334',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'HINTON CENTER'),
	(71,'235698',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'SHELTER B'),
	(81,'334471',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'HINTON CENTER'),
	(91,'549282',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR JENSEN'),
	(101,'435926',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR VENTURA'),
	(111,'434422',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR SHIELDS'),
	(121,'981591',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'CEDAR SHAW'),
	(131,'105626',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'HERNDON CEDAR');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `buses` WRITE;
/*!40000 ALTER TABLE `buses` DISABLE KEYS */;

INSERT INTO `buses` (`id`, `number`, `direction`)
VALUES
	(1,'38','south'),
	(11,'38','north');

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

LOCK TABLES `incomings` WRITE;
/*!40000 ALTER TABLE `incomings` DISABLE KEYS */;

INSERT INTO `incomings` (`id`, `message`, `from_number`, `message_sid`, `created_at`, `type`)
VALUES
	(41,'Jet','+14846325324','SMfaa5817459c07d766e40c69a49c6d16d',NULL,'text'),
	(51,'Time','+14846325324','SM5fa89d162db71bf1d0a8865fdf3a05ea',NULL,'text'),
	(71,'Tarang','+14846325324','SM36a9d8411c933c09d202036081557a69',NULL,'text'),
	(81,'Shnce 38','+14846325324','SM6001ad80b1af775d7fa7c77b89011584',NULL,'text'),
	(91,'Test','+14846325324','SM4b86708fe5b14f3437e0234a4c33dcac',NULL,'text'),
	(101,'Hi','+16784916702','SMe4bee1d977b5b05c1a7cb2123076d348',NULL,'text'),
	(111,'404649','+14846325324','SM0e32ce157552e4725a65cc4a37d03777',NULL,'text'),
	(171,'Hh','+14846325324','SM6bcd9dc9d3227d683e2608b8793a3191',NULL,'text'),
	(211,'Check','+14846325324','SMb559f663a1d73402a4409a99ba03fb67',NULL,'text'),
	(221,'404649','+14846325324','SM8c1af0da61f06ab6934f1bb3c4b00806',NULL,'text'),
	(231,'Td','+14846325324','SM06cbaf0605bbb5913888f7048ddb8e4c',NULL,'text'),
	(241,'404649','+14846325324','SMbff9ee52c89190c0c0250a90f45355e4',NULL,'text'),
	(261,'Jtaj','+14846325324','SMb8248697426f2dbf63487560eaffe042',NULL,'text'),
	(271,'Taj','+14846325324','SM02a7404673d3cfa320d770c8cabca6fa',NULL,'text'),
	(281,'Jaja','+14846325324','SM27574bfaef77d37bad1c250936f2d32a',NULL,'text'),
	(291,'404649','+14846325324','SM51b2ebbdf169eb68ae123d3d54918a4f',NULL,'text'),
	(321,'Kak','+14846325324','SMcfabc0a44d2db0dbd530c9dd9f450ccd',NULL,'text'),
	(331,'404649','+14846325324','SM87a57ecae05fd91d129fda45845ca9e5',NULL,'text'),
	(341,'591981','+14846325324','SMaab4721c9e2b0359e1ecf53c65eedb2b',NULL,'text'),
	(351,'404649','+14846325324','SM6785a64f9cfcb3762147864e12b18d2a',NULL,'text'),
	(361,'Aj','+14846325324','SM8eef9747ebc5eb3e91a84906e23cf1cd',NULL,'text'),
	(371,'','+14846325324','CAb88916b95c3feeb55ed79396fc706467',NULL,'voice'),
	(381,'','+14846325324','CAd3b41ecc73a8af8c31dcb1375257b6d2',NULL,'voice'),
	(391,'','+14846325324','CAf755e17ad0ffea6bafcc4af65e385e2e',NULL,'voice'),
	(401,'','+14846325324','CA1ebc7961e3f18a600d11d00e1a0bfa7e',NULL,'voice'),
	(411,'','+14846325324','CAb1b296ddf7e3c7478781cdb272d387f4',NULL,'voice'),
	(421,'','+14846325324','CAe449056eea6c534897d5476ea973732b',NULL,'voice'),
	(431,'591981','+14846325324','SM9a3201be60e7c3d70c49196ec40c2206',NULL,'text'),
	(441,'','+17206487777','CA4a07a72c6523dfa2b0a58ebc07d11762',NULL,'voice'),
	(451,'','+19173097067','CA7bb7f8046eee9a1cbcd13df3530b44e8',NULL,'voice'),
	(461,'','+17206487777','CAb11f666705a532aba8255939bb63d07f',NULL,'voice'),
	(471,'404649','+19173097067','SM740fb9ca6346499f5f2fd20236980643',NULL,'text'),
	(481,'Hjhhj','+19173097067','SMda01ad0df5cc319535ed18fc73c79c0a',NULL,'text'),
	(491,'404649','+14846325324','SM2730eda199d34a470037094b3e5a8a70',NULL,'text'),
	(501,'','+14846325324','CA96a5343cde10d8df490534216f6f6fb9',NULL,'voice'),
	(511,'','+14846325324','CA40fb85e56c8865fd62449c007dbed940',NULL,'voice'),
	(521,'','+14846325324','CA0f3055d81afac5d6e88799d4a3f8794c',NULL,'voice'),
	(531,'','+14846325324','CA4285bd601e2b67defe39eb400c6d7d99',NULL,'voice'),
	(541,'','+14846325324','CA1f68884e37dad26957d56eef13092f1c',NULL,'voice'),
	(551,'','+14846325324','CA43bbc637981302519c6a08bb881fc5c5',NULL,'voice'),
	(561,'','+14846325324','CAa352bfe769a23e08a5b7007e95de0e12',NULL,'voice'),
	(571,'','+14846325324','CA89327f8528b58a9404be082edafaabba',NULL,'voice'),
	(581,'Ajaj','+14846325324','SM86a495dc38ad48676633d30582234fa4',NULL,'text'),
	(591,'','+14846325324','CA8dbae90e3253dff81205b05c24fc8d03',NULL,'voice'),
	(601,'','+18572059570','CA5cf4fb25654b7e78b0af878c5c090627',NULL,'voice'),
	(611,'','+14846325324','CAe2d44851988484656b171ea2849e6312',NULL,'voice'),
	(621,'591981','+14846325324','SMdaf2907491c2a58bc659d08349ed25ab',NULL,'text'),
	(631,'','+14846325324','CAa72a87c9e6831f290789df6f15cb662c','2013-11-13 21:39:47','voice');

/*!40000 ALTER TABLE `incomings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table routes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `routes`;

CREATE TABLE `routes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bus_stop_id` int(11) NOT NULL,
  `bus_stop_code` int(11) DEFAULT NULL,
  `sequence` int(5) DEFAULT NULL COMMENT 'sequence will determine order in which all bustops come in a bus route.',
  `bus_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;

INSERT INTO `routes` (`id`, `bus_stop_id`, `bus_stop_code`, `sequence`, `bus_id`)
VALUES
	(1,1,404649,1,1),
	(11,11,626105,2,1),
	(21,21,591981,3,1),
	(31,31,422431,4,1),
	(41,41,926435,5,1),
	(51,51,282549,6,1),
	(61,61,471334,7,1),
	(71,71,235698,1,11),
	(81,81,334471,2,11),
	(91,91,549282,3,11),
	(101,101,435926,4,11),
	(111,111,434422,5,11),
	(121,121,981591,6,11),
	(131,131,105626,7,11);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
