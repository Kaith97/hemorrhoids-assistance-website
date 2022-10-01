# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: haemorrhoids_assistance
# Generation Time: 2022-03-20 08:20:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table answer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `answer`;

CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `one` varchar(100) NOT NULL,
  `two` varchar(100) NOT NULL,
  `three` varchar(100) NOT NULL,
  `four` varchar(100) NOT NULL,
  `five` varchar(100) NOT NULL,
  `six` varchar(100) NOT NULL,
  `seven` varchar(100) NOT NULL,
  `eight` varchar(100) NOT NULL,
  `nine` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `eleven` varchar(100) NOT NULL,
  `twelve` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;

INSERT INTO `answer` (`id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `created_date`, `modified_date`)
VALUES
	(1,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(2,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(3,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(4,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(5,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(6,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(7,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(8,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(9,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(10,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(11,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(12,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(13,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(14,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(15,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(16,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(17,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(18,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(19,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(20,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(21,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(22,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(23,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(24,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(25,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(26,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(27,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(28,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(29,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(30,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(31,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(32,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(33,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(34,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(35,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(36,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(37,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(38,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(39,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(40,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(41,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(42,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(43,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(44,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(45,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(46,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(47,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(48,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(49,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(50,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(51,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(52,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(53,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(54,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(55,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(56,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(57,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(58,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(59,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(60,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(61,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(62,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(63,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(64,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(65,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(66,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(67,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(68,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(69,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(70,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(71,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(72,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(73,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(74,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(75,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(76,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(77,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(78,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(79,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(80,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(81,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(82,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(83,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(84,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(85,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(86,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(87,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(88,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(89,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(90,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(91,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(92,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(93,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(94,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(95,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(96,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(97,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(98,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(99,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(100,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(101,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(102,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(103,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(104,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(105,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(106,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(107,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(108,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(109,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(110,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(111,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(112,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(113,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(114,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(115,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(116,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(117,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(118,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(119,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(120,'','','','','','','','','','','','','2022-03-13','2022-03-13'),
	(121,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(122,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(123,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(124,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(125,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(126,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(127,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(128,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(129,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(130,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(131,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(132,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(133,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(134,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(135,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(136,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(137,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(138,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(139,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(140,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(141,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(142,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(143,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(144,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(145,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(146,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(147,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(148,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(149,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(150,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(151,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(152,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(153,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(154,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(155,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(156,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(157,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(158,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(159,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(160,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(161,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(162,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(163,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(164,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(165,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(166,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(167,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(168,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(169,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(170,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(171,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(172,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(173,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(174,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(175,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(176,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(177,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(178,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(179,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(180,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(181,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(182,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(183,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(184,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(185,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(186,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(187,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(188,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(189,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(190,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(191,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(192,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(193,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(194,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(195,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(196,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(197,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(198,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(199,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(200,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(201,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(202,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(203,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(204,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(205,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(206,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(207,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(208,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(209,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(210,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(211,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(212,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(213,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(214,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(215,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(216,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(217,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(218,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(219,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(220,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(221,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(222,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(223,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(224,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(225,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(226,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(227,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(228,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(229,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(230,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(231,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(232,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(233,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(234,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(235,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(236,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(237,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(238,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(239,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(240,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(241,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(242,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(243,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(244,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(245,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(246,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(247,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(248,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(249,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(250,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(251,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(252,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(253,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(254,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(255,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(256,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(257,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(258,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(259,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(260,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(261,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(262,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(263,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(264,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(265,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(266,'','','','','','','','','','','','','2022-03-19','2022-03-19'),
	(267,'','','','','','','','','','','','','2022-03-19','2022-03-19');

/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table feedback
# ------------------------------------------------------------

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `q7` varchar(100) NOT NULL,
  `q8` varchar(100) NOT NULL,
  `q9` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;

INSERT INTO `feedback` (`id`, `name`, `age`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`)
VALUES
	(10,'',0,'','','','','','','','','');

/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mail`;

CREATE TABLE `mail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `treatment_plan` varchar(11) DEFAULT NULL,
  `treatment_time` int(11) DEFAULT NULL,
  `complete` tinyint(11) DEFAULT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `mail` WRITE;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;

INSERT INTO `mail` (`id`, `user_id`, `treatment_plan`, `treatment_time`, `complete`, `created_date`, `updated_date`)
VALUES
	(1,2,'internal',7,1,'2022-03-19','2022-03-19');

/*!40000 ALTER TABLE `mail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `name`, `password`, `cpassword`, `email`, `phone`, `dob`, `gender`, `photo`, `address`, `created_date`, `modified_date`)
VALUES
	(1,'mg mg','123','123','mg@gmail.com','34667777','2022-03-05','male','empty.png','london','2022-03-02','2022-03-02'),
	(2,'aye','123','123','aye@gmail.com','3743940237','2022-03-11','female','empty.png','Taunggyi','2022-03-02','2022-03-02'),
	(3,'wut','123','123','wut@gmail.com','','','female','empty.png','','2022-03-19','2022-03-19');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;