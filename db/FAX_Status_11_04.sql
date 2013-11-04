# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: us-cdbr-east-04.cleardb.com (MySQL 5.5.31-log)
# Database: heroku_ecedf6e20683b6e
# Generation Time: 2013-11-04 07:02:54 +0000
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
	(71,'235698',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00',NULL,'SHELTER B');

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
  `created_at` datetime DEFAULT NULL,
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
	(291,'404649','+14846325324','SM51b2ebbdf169eb68ae123d3d54918a4f',NULL,'text');

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
	(71,71,235698,8,1);

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
