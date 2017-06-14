/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.7.18-0ubuntu0.16.04.1 : Database - Farmacentro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`Farmacentro` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `Farmacentro`;

/*Table structure for table `Cliente` */

DROP TABLE IF EXISTS `Cliente`;

CREATE TABLE `Cliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `telefono` int(13) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `Cliente` */

insert  into `Cliente`(`idCliente`,`nombre`,`apellido`,`dni`,`telefono`,`direccion`) values (47,'Pablo','Oporto',333,12,'Pd');

/*Table structure for table `Cola` */

DROP TABLE IF EXISTS `Cola`;

CREATE TABLE `Cola` (
  `idCola` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCola` varchar(30) DEFAULT NULL,
  `hijoDe` int(10) DEFAULT NULL,
  `siguiente` int(10) DEFAULT NULL,
  `letra` char(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  PRIMARY KEY (`idCola`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `Cola` */

insert  into `Cola`(`idCola`,`nombreCola`,`hijoDe`,`siguiente`,`letra`,`fechaCreacion`) values (19,'Osde',NULL,100,'A',NULL),(20,'Red ',NULL,80,'B',NULL),(21,'Otros',NULL,80,'C',NULL);

/*Table structure for table `HistorialEstado` */

DROP TABLE IF EXISTS `HistorialEstado`;

CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=568 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (1,265,'2017-04-18 23:26:44',2,21),(2,265,'2017-04-18 23:26:46',3,21),(3,265,'2017-04-18 23:26:47',1,21),(4,264,'2017-04-18 23:26:49',2,21),(5,264,'2017-04-18 23:26:51',3,21),(6,264,'2017-04-18 23:26:52',1,21),(7,266,'2017-04-18 23:27:02',2,21),(8,267,'2017-04-19 10:47:51',2,20),(9,267,'2017-04-19 10:48:19',2,20),(10,267,'2017-04-19 10:50:15',2,20),(11,267,'2017-04-19 10:50:53',2,20),(12,267,'2017-04-19 10:51:22',2,20),(13,267,'2017-04-19 10:51:42',2,20),(14,267,'2017-04-19 10:51:50',2,20),(15,267,'2017-04-19 10:51:53',2,20),(16,267,'2017-04-19 10:51:57',2,20),(17,267,'2017-04-19 10:52:00',2,20),(18,267,'2017-04-19 10:52:03',2,20),(19,267,'2017-04-19 10:52:09',2,20),(20,267,'2017-04-19 10:52:14',2,20),(21,267,'2017-04-19 10:52:22',2,20),(22,267,'2017-04-19 10:52:26',2,20),(23,267,'2017-04-19 10:52:35',2,20),(24,267,'2017-04-19 10:52:45',2,20),(25,267,'2017-04-19 10:52:55',2,20),(26,267,'2017-04-19 10:52:58',2,20),(27,267,'2017-04-19 10:53:11',2,20),(28,267,'2017-04-19 10:53:14',2,20),(29,267,'2017-04-19 10:55:22',2,20),(30,267,'2017-04-19 10:55:51',2,20),(31,267,'2017-04-19 10:56:12',2,20),(32,267,'2017-04-19 10:56:25',2,20),(33,267,'2017-04-19 10:56:28',2,20),(34,267,'2017-04-19 10:56:32',2,20),(35,267,'2017-04-19 10:57:22',2,20),(36,267,'2017-04-19 10:58:38',2,20),(37,267,'2017-04-19 10:59:35',2,20),(38,267,'2017-04-19 10:59:40',2,20),(39,267,'2017-04-19 10:59:46',2,20),(40,267,'2017-04-19 10:59:53',2,20),(41,267,'2017-04-19 10:59:57',2,20),(42,267,'2017-04-19 11:00:01',2,20),(43,267,'2017-04-19 11:00:12',3,20),(44,267,'2017-04-19 11:00:18',1,20),(45,269,'2017-04-19 11:14:34',2,20),(46,269,'2017-04-19 11:14:43',3,20),(47,269,'2017-04-19 11:18:47',3,20),(48,269,'2017-04-19 11:19:34',3,20),(49,269,'2017-04-19 11:22:37',3,20),(50,269,'2017-04-19 11:24:43',3,20),(51,269,'2017-04-19 11:25:09',3,20),(52,269,'2017-04-19 11:25:13',3,20),(53,269,'2017-04-19 11:25:18',3,20),(54,269,'2017-04-19 11:25:22',3,20),(55,269,'2017-04-19 11:26:10',3,20),(56,269,'2017-04-19 11:26:20',3,20),(57,269,'2017-04-19 11:26:50',3,20),(58,269,'2017-04-19 11:27:15',3,20),(59,269,'2017-04-19 11:27:20',3,20),(60,269,'2017-04-19 11:27:25',3,20),(61,269,'2017-04-19 11:29:50',3,20),(62,269,'2017-04-19 11:30:18',3,20),(63,269,'2017-04-19 11:31:05',3,20),(64,269,'2017-04-19 11:31:26',3,20),(65,269,'2017-04-19 11:31:37',3,20),(66,269,'2017-04-19 11:31:49',3,20),(67,269,'2017-04-19 11:33:22',3,20),(68,269,'2017-04-19 11:35:08',3,20),(69,269,'2017-04-19 11:35:23',3,20),(70,269,'2017-04-19 11:35:27',3,20),(71,269,'2017-04-19 11:35:34',3,20),(72,269,'2017-04-19 11:35:43',3,20),(73,269,'2017-04-19 11:35:46',3,20),(74,269,'2017-04-19 11:35:52',3,20),(75,269,'2017-04-19 11:35:57',3,20),(76,269,'2017-04-19 11:36:14',3,20),(77,269,'2017-04-19 11:36:48',3,20),(78,269,'2017-04-19 11:36:50',3,20),(79,269,'2017-04-19 11:36:54',3,20),(80,269,'2017-04-19 11:36:55',3,20),(81,269,'2017-04-19 11:36:58',3,20),(82,269,'2017-04-19 11:37:06',3,20),(83,269,'2017-04-19 11:37:50',3,20),(84,269,'2017-04-19 11:38:26',3,20),(85,269,'2017-04-19 11:38:40',3,20),(86,269,'2017-04-19 11:39:09',3,20),(87,269,'2017-04-19 11:39:13',3,20),(88,269,'2017-04-19 11:39:17',3,20),(89,269,'2017-04-19 11:39:46',3,20),(90,269,'2017-04-19 11:39:51',3,20),(91,269,'2017-04-19 11:39:55',3,20),(92,269,'2017-04-19 11:40:04',3,20),(93,269,'2017-04-19 11:40:12',3,20),(94,269,'2017-04-19 11:40:17',3,20),(95,269,'2017-04-19 11:40:36',3,20),(96,269,'2017-04-19 11:40:38',3,20),(97,269,'2017-04-19 11:41:04',3,20),(98,269,'2017-04-19 11:41:10',3,20),(99,269,'2017-04-19 11:41:14',3,20),(100,269,'2017-04-19 11:43:23',3,20),(101,269,'2017-04-19 11:43:38',3,20),(102,269,'2017-04-19 11:43:40',3,20),(103,269,'2017-04-19 11:43:43',3,20),(104,269,'2017-04-19 11:43:47',3,20),(105,269,'2017-04-19 11:43:54',3,20),(106,269,'2017-04-19 11:44:24',3,20),(107,269,'2017-04-19 11:44:30',3,20),(108,269,'2017-04-19 11:44:35',3,20),(109,269,'2017-04-19 11:44:57',3,20),(110,269,'2017-04-19 11:44:59',3,20),(111,269,'2017-04-19 11:45:03',3,20),(112,269,'2017-04-19 11:45:08',3,20),(113,269,'2017-04-19 11:45:09',3,20),(114,269,'2017-04-19 11:45:12',3,20),(115,269,'2017-04-19 11:47:31',3,20),(116,269,'2017-04-19 11:48:14',3,20),(117,269,'2017-04-19 11:49:31',3,20),(118,269,'2017-04-19 11:49:37',3,20),(119,269,'2017-04-19 11:49:41',3,20),(120,269,'2017-04-19 11:49:45',3,20),(121,269,'2017-04-19 11:50:04',3,20),(122,269,'2017-04-19 11:50:07',3,20),(123,269,'2017-04-19 11:50:12',3,20),(124,269,'2017-04-19 11:50:41',3,20),(125,269,'2017-04-19 11:50:48',3,20),(126,269,'2017-04-19 11:50:52',3,20),(127,269,'2017-04-19 11:51:00',3,20),(128,269,'2017-04-19 11:51:04',3,20),(129,269,'2017-04-19 11:51:09',3,20),(130,269,'2017-04-19 11:51:14',3,20),(131,269,'2017-04-19 11:51:29',3,20),(132,269,'2017-04-19 11:51:37',3,20),(133,269,'2017-04-19 11:53:37',1,20),(134,268,'2017-04-19 11:53:41',2,20),(135,268,'2017-04-19 11:53:44',3,20),(136,268,'2017-04-19 11:53:50',1,20),(137,266,'2017-04-19 11:53:54',2,20),(138,266,'2017-04-19 11:55:49',2,20),(139,266,'2017-04-19 11:55:52',3,20),(140,266,'2017-04-19 11:55:53',3,20),(141,266,'2017-04-19 11:55:59',3,20),(142,266,'2017-04-19 11:56:09',3,20),(143,266,'2017-04-19 11:56:25',3,20),(144,266,'2017-04-19 11:56:31',3,20),(145,266,'2017-04-19 11:56:32',3,20),(146,266,'2017-04-19 11:56:33',3,20),(147,266,'2017-04-19 11:56:38',3,20),(148,266,'2017-04-19 11:56:41',3,20),(149,266,'2017-04-19 11:56:51',3,20),(150,266,'2017-04-19 11:56:54',3,20),(151,266,'2017-04-19 11:57:00',3,20),(152,266,'2017-04-19 11:57:05',3,20),(153,266,'2017-04-19 11:57:10',3,20),(154,266,'2017-04-19 11:57:14',3,20),(155,266,'2017-04-19 11:57:59',3,20),(156,266,'2017-04-19 11:58:04',3,20),(157,266,'2017-04-19 11:58:35',3,20),(158,266,'2017-04-19 11:58:41',3,20),(159,266,'2017-04-19 11:58:46',3,20),(160,266,'2017-04-19 11:58:51',3,20),(161,266,'2017-04-19 11:59:01',3,20),(162,266,'2017-04-19 11:59:32',3,20),(163,266,'2017-04-19 11:59:37',3,20),(164,266,'2017-04-19 11:59:46',1,20),(165,270,'2017-04-19 11:59:49',2,20),(166,270,'2017-04-19 12:01:42',2,20),(167,270,'2017-04-19 12:02:12',2,20),(168,270,'2017-04-19 12:02:19',2,20),(169,270,'2017-04-19 12:02:27',2,20),(170,270,'2017-04-19 12:02:33',2,20),(171,270,'2017-04-19 12:02:36',2,20),(172,270,'2017-04-19 12:02:40',2,20),(173,270,'2017-04-19 12:03:30',2,20),(174,270,'2017-04-19 12:03:49',2,20),(175,270,'2017-04-19 12:03:51',2,20),(176,270,'2017-04-19 12:04:34',2,20),(177,270,'2017-04-19 12:04:43',2,20),(178,270,'2017-04-19 12:04:50',2,20),(179,270,'2017-04-19 12:04:54',2,20),(180,270,'2017-04-19 12:04:57',2,20),(181,270,'2017-04-19 12:05:01',2,20),(182,270,'2017-04-19 12:05:05',2,20),(183,270,'2017-04-19 12:05:09',2,20),(184,270,'2017-04-19 12:05:21',2,20),(185,270,'2017-04-19 12:05:25',2,20),(186,270,'2017-04-19 12:05:30',2,20),(187,270,'2017-04-19 12:05:33',3,20),(188,270,'2017-04-19 12:05:35',1,20),(189,273,'2017-04-19 12:14:57',2,20),(190,273,'2017-04-19 12:15:43',2,20),(191,273,'2017-04-19 12:15:53',2,20),(192,273,'2017-04-19 12:27:40',3,20),(193,273,'2017-04-19 12:27:42',1,20),(194,275,'2017-04-19 12:27:44',2,20),(195,275,'2017-04-19 12:34:34',3,20),(196,275,'2017-04-19 12:34:36',1,20),(197,271,'2017-04-21 14:40:55',2,21),(198,271,'2017-04-21 14:41:01',3,21),(199,271,'2017-04-21 14:41:08',1,21),(200,272,'2017-04-21 14:41:21',2,21),(201,272,'2017-04-21 14:42:05',3,21),(202,272,'2017-04-21 14:42:12',1,21),(203,276,'2017-04-21 21:57:08',2,22),(204,276,'2017-04-21 21:57:10',3,22),(205,276,'2017-04-21 21:57:12',1,22),(206,274,'2017-04-21 21:57:14',2,22),(207,274,'2017-04-21 21:57:36',3,22),(208,274,'2017-04-21 21:57:41',1,22),(209,277,'2017-04-23 23:25:52',2,21),(210,277,'2017-04-24 01:06:27',3,21),(211,277,'2017-04-24 01:06:29',1,21),(212,279,'2017-04-24 01:06:32',2,21),(213,279,'2017-04-25 19:41:10',2,20),(214,279,'2017-04-25 19:41:51',3,20),(215,279,'2017-04-25 19:42:37',1,20),(216,281,'2017-04-25 19:45:35',2,21),(217,281,'2017-04-25 19:45:38',2,21),(218,281,'2017-04-25 19:45:40',2,21),(219,281,'2017-04-25 19:45:50',2,21),(220,281,'2017-04-25 19:45:54',3,21),(221,281,'2017-04-25 19:46:48',3,21),(222,281,'2017-04-25 19:47:18',3,21),(223,281,'2017-04-25 19:47:19',1,21),(224,282,'2017-04-25 19:48:11',2,21),(225,282,'2017-04-25 19:48:20',2,22),(226,282,'2017-04-25 19:48:38',3,22),(227,282,'2017-04-25 19:48:40',1,22),(228,283,'2017-04-25 19:49:48',2,22),(229,283,'2017-04-25 19:51:31',3,22),(230,283,'2017-04-25 19:51:33',1,22),(231,278,'2017-05-01 13:40:21',2,21),(232,278,'2017-05-01 13:40:37',3,21),(233,286,'2017-05-01 13:47:31',2,21),(234,286,'2017-05-01 13:48:33',2,21),(235,286,'2017-05-01 13:50:15',3,21),(236,286,'2017-05-01 13:50:46',3,21),(237,286,'2017-05-01 13:51:51',1,21),(238,278,'2017-05-01 13:53:56',2,21),(239,278,'2017-05-01 13:53:59',3,21),(240,278,'2017-05-01 13:54:34',3,21),(241,278,'2017-05-01 13:54:42',1,21),(242,284,'2017-05-01 13:55:03',2,21),(243,284,'2017-05-01 13:55:06',3,21),(244,284,'2017-05-01 13:55:11',1,21),(245,280,'2017-05-10 13:53:42',2,21),(246,280,'2017-05-10 13:53:44',3,21),(247,280,'2017-05-10 13:53:45',1,21),(248,288,'2017-05-10 15:39:35',2,21),(249,288,'2017-05-10 15:39:40',3,21),(250,288,'2017-05-10 15:40:34',3,21),(251,288,'2017-05-10 15:40:40',3,21),(252,288,'2017-05-10 15:41:00',3,21),(253,288,'2017-05-10 15:41:04',3,21),(254,285,'2017-05-10 17:14:24',2,21),(255,285,'2017-05-10 17:15:05',2,21),(256,285,'2017-05-10 17:19:04',2,21),(257,285,'2017-05-10 17:21:08',2,21),(258,285,'2017-05-10 17:21:15',2,21),(259,285,'2017-05-10 17:21:24',2,21),(260,285,'2017-05-10 17:23:10',2,21),(261,285,'2017-05-10 17:23:18',2,21),(262,285,'2017-05-10 17:23:23',2,21),(263,285,'2017-05-10 17:23:28',2,21),(264,285,'2017-05-10 17:23:35',2,21),(265,285,'2017-05-10 17:23:41',2,21),(266,285,'2017-05-10 17:24:02',3,21),(267,285,'2017-05-10 17:24:11',1,21),(268,287,'2017-05-10 17:24:12',2,21),(269,289,'2017-05-12 14:04:04',2,21),(270,289,'2017-05-12 14:04:09',3,21),(271,289,'2017-05-12 14:04:12',1,21),(272,290,'2017-05-12 14:04:48',2,21),(273,290,'2017-05-12 14:05:33',2,21),(274,290,'2017-05-12 14:05:49',2,21),(275,290,'2017-05-12 14:05:54',2,21),(276,290,'2017-05-12 14:05:58',2,21),(277,290,'2017-05-12 14:06:03',2,21),(278,290,'2017-05-12 14:07:23',2,21),(279,290,'2017-05-12 14:07:30',2,21),(280,290,'2017-05-12 14:07:35',2,21),(281,290,'2017-05-12 14:07:41',2,21),(282,290,'2017-05-12 14:08:43',2,21),(283,290,'2017-05-12 14:09:20',2,21),(284,290,'2017-05-12 14:11:39',2,21),(285,290,'2017-05-12 14:11:47',2,21),(286,290,'2017-05-12 14:11:51',2,21),(287,290,'2017-05-12 14:12:07',2,21),(288,290,'2017-05-12 14:12:09',3,21),(289,290,'2017-05-12 14:13:31',3,21),(290,290,'2017-05-12 14:13:42',3,21),(291,290,'2017-05-12 14:15:07',3,21),(292,290,'2017-05-12 14:18:05',3,21),(293,290,'2017-05-12 14:18:15',3,21),(294,290,'2017-05-12 14:18:16',3,21),(295,290,'2017-05-12 14:18:23',3,21),(296,290,'2017-05-12 14:18:24',3,21),(297,290,'2017-05-12 14:18:24',3,21),(298,290,'2017-05-12 14:18:24',3,21),(299,290,'2017-05-12 14:18:25',3,21),(300,290,'2017-05-12 14:18:25',3,21),(301,290,'2017-05-12 14:19:03',3,21),(302,290,'2017-05-12 14:19:13',3,21),(303,290,'2017-05-12 14:19:24',3,21),(304,290,'2017-05-12 14:19:28',3,21),(305,290,'2017-05-12 14:20:14',3,21),(306,290,'2017-05-12 14:20:21',3,21),(307,290,'2017-05-12 14:20:22',3,21),(308,290,'2017-05-12 14:20:24',3,21),(309,290,'2017-05-12 14:20:27',3,21),(310,290,'2017-05-12 14:20:33',3,21),(311,290,'2017-05-12 14:20:36',3,21),(312,290,'2017-05-12 14:20:39',3,21),(313,290,'2017-05-12 14:20:42',3,21),(314,290,'2017-05-12 14:20:43',3,21),(315,290,'2017-05-12 14:20:47',1,21),(316,287,'2017-05-12 14:20:52',2,21),(317,287,'2017-05-12 14:20:54',3,21),(318,287,'2017-05-12 14:20:56',1,21),(319,288,'2017-05-12 14:26:02',2,21),(320,288,'2017-05-12 14:26:07',3,21),(321,296,'2017-05-12 15:05:52',2,21),(322,296,'2017-05-12 15:05:54',3,21),(323,296,'2017-05-12 15:05:55',1,21),(324,291,'2017-05-12 18:29:10',2,21),(325,291,'2017-05-12 18:49:04',3,21),(326,291,'2017-05-12 18:49:06',1,21),(327,288,'2017-05-12 18:49:11',2,21),(328,288,'2017-05-12 18:49:13',3,21),(329,288,'2017-05-12 18:49:17',1,21),(330,297,'2017-05-12 18:49:36',2,21),(331,297,'2017-05-12 19:04:57',3,21),(332,297,'2017-05-12 19:04:58',1,21),(333,298,'2017-05-12 19:05:00',2,21),(334,298,'2017-05-12 19:06:24',3,21),(335,298,'2017-05-12 19:06:50',1,21),(336,292,'2017-05-12 19:06:52',2,21),(337,293,'2017-05-14 21:37:54',2,20),(338,293,'2017-05-14 21:50:41',3,20),(339,293,'2017-05-14 21:50:46',1,20),(340,292,'2017-05-14 21:50:51',2,20),(341,292,'2017-05-14 21:50:56',3,20),(342,292,'2017-05-14 21:51:01',1,20),(343,294,'2017-05-14 21:51:08',2,20),(344,294,'2017-05-14 22:20:46',3,20),(345,294,'2017-05-14 22:21:20',1,20),(346,295,'2017-05-14 22:21:22',2,20),(347,295,'2017-05-14 23:35:18',3,20),(348,295,'2017-05-14 23:35:21',1,20),(349,301,'2017-05-14 23:35:52',2,20),(350,301,'2017-05-14 23:35:55',3,20),(351,301,'2017-05-14 23:35:59',1,20),(352,299,'2017-05-14 23:48:14',2,21),(353,300,'2017-05-14 23:48:35',2,20),(354,300,'2017-05-14 23:49:02',3,20),(355,300,'2017-05-14 23:49:49',1,20),(356,299,'2017-05-14 23:49:59',3,21),(357,299,'2017-05-14 23:55:43',1,21),(358,308,'2017-05-18 11:41:44',2,21),(359,308,'2017-05-18 11:42:39',3,21),(360,308,'2017-05-18 11:42:41',1,21),(361,309,'2017-05-18 11:42:45',2,21),(362,312,'2017-05-18 12:19:10',2,21),(363,311,'2017-05-18 17:14:47',2,21),(364,311,'2017-05-18 17:15:07',3,21),(365,311,'2017-05-18 17:16:48',3,21),(366,311,'2017-05-18 17:31:28',1,21),(367,313,'2017-05-18 17:42:38',2,21),(368,315,'2017-05-18 17:48:42',2,21),(369,318,'2017-05-18 17:48:50',2,21),(370,318,'2017-05-18 17:48:51',3,21),(371,314,'2017-05-18 17:50:08',2,20),(372,314,'2017-05-18 17:50:10',3,20),(373,314,'2017-05-18 17:50:41',3,20),(374,314,'2017-05-18 17:50:46',1,20),(375,316,'2017-05-18 17:50:51',2,20),(376,317,'2017-05-18 18:03:32',2,22),(377,317,'2017-05-18 18:03:35',3,22),(378,311,'2017-05-18 18:05:36',2,22),(379,311,'2017-05-18 18:05:39',3,22),(380,313,'2017-05-18 18:05:48',2,21),(381,313,'2017-05-18 18:05:50',3,21),(382,314,'2017-05-18 18:06:08',2,20),(383,314,'2017-05-18 18:06:11',4,20),(384,313,'2017-05-18 18:06:16',3,20),(385,313,'2017-05-18 18:06:19',1,20),(386,311,'2017-05-18 18:06:21',3,20),(387,311,'2017-05-18 18:06:23',1,20),(388,312,'2017-05-18 18:06:26',2,20),(389,312,'2017-05-18 18:06:28',3,20),(390,316,'2017-05-18 18:12:16',2,21),(391,316,'2017-05-18 18:12:18',2,21),(392,315,'2017-05-18 19:58:45',2,0),(393,315,'2017-05-18 19:59:19',3,0),(394,318,'2017-05-18 20:00:12',2,21),(395,312,'2017-05-18 20:03:15',3,0),(396,312,'2017-05-18 20:03:18',1,0),(397,314,'2017-05-18 20:04:08',4,0),(398,314,'2017-05-18 20:04:14',4,0),(399,317,'2017-05-18 20:04:48',2,0),(400,320,'2017-05-18 20:05:07',2,21),(401,320,'2017-05-18 20:05:55',3,21),(402,320,'2017-05-18 20:06:21',3,21),(403,320,'2017-05-18 20:06:39',3,21),(404,320,'2017-05-18 20:07:10',3,21),(405,316,'2017-05-18 20:07:23',2,21),(406,316,'2017-05-18 20:07:26',2,21),(407,316,'2017-05-18 20:07:55',2,21),(408,314,'2017-05-18 20:08:25',4,21),(409,322,'2017-05-18 20:08:37',2,21),(410,319,'2017-05-18 20:08:42',2,21),(411,322,'2017-05-18 20:11:51',2,21),(412,324,'2017-06-02 18:54:28',2,20),(413,335,'2017-06-02 18:56:04',2,20),(414,335,'2017-06-02 18:56:06',3,20),(415,335,'2017-06-02 18:56:08',1,20),(416,340,'2017-06-02 19:09:29',2,20),(417,340,'2017-06-02 19:09:30',2,20),(418,336,'2017-06-02 19:10:20',2,20),(419,336,'2017-06-02 19:10:21',2,20),(420,323,'2017-06-02 19:10:43',2,20),(421,323,'2017-06-02 19:10:44',3,20),(422,323,'2017-06-02 19:10:46',1,20),(423,337,'2017-06-02 19:10:47',2,20),(424,337,'2017-06-02 19:10:50',2,20),(425,338,'2017-06-02 19:14:45',2,20),(426,338,'2017-06-02 19:14:47',3,20),(427,338,'2017-06-02 19:14:49',3,20),(428,339,'2017-06-02 19:16:14',2,20),(429,339,'2017-06-02 19:16:16',3,20),(430,339,'2017-06-02 19:16:17',3,20),(431,341,'2017-06-04 00:17:53',2,20),(432,342,'2017-06-04 12:36:17',2,20),(433,342,'2017-06-04 12:36:18',3,20),(434,342,'2017-06-04 12:36:25',1,20),(435,343,'2017-06-04 12:36:29',2,20),(436,343,'2017-06-04 12:36:31',3,20),(437,343,'2017-06-04 12:38:22',3,20),(438,343,'2017-06-04 12:38:51',3,20),(439,343,'2017-06-04 12:38:53',3,20),(440,343,'2017-06-04 12:38:56',3,20),(441,343,'2017-06-04 12:38:57',3,20),(442,343,'2017-06-04 12:38:57',3,20),(443,343,'2017-06-04 12:38:57',3,20),(444,343,'2017-06-04 12:38:57',3,20),(445,343,'2017-06-04 12:39:38',3,20),(446,343,'2017-06-04 12:39:39',3,20),(447,343,'2017-06-04 12:39:39',3,20),(448,343,'2017-06-04 12:39:39',3,20),(449,343,'2017-06-04 12:39:45',1,20),(450,347,'2017-06-04 12:39:47',2,20),(451,347,'2017-06-04 12:39:48',3,20),(452,347,'2017-06-04 12:40:30',3,20),(453,347,'2017-06-04 12:40:47',3,20),(454,347,'2017-06-04 12:41:08',3,20),(455,347,'2017-06-04 12:41:11',3,20),(456,347,'2017-06-04 12:41:14',3,20),(457,347,'2017-06-04 12:41:19',3,20),(458,347,'2017-06-04 12:41:25',3,20),(459,347,'2017-06-04 12:41:28',3,20),(460,347,'2017-06-04 12:41:33',3,20),(461,347,'2017-06-04 12:41:36',3,20),(462,347,'2017-06-04 12:41:39',3,20),(463,347,'2017-06-04 12:41:48',1,20),(464,348,'2017-06-04 13:54:51',2,20),(465,348,'2017-06-04 13:58:52',2,20),(466,348,'2017-06-04 13:58:54',2,20),(467,348,'2017-06-04 13:58:54',2,20),(468,348,'2017-06-04 13:58:55',2,20),(469,348,'2017-06-04 13:58:55',2,20),(470,351,'2017-06-04 13:59:01',2,20),(471,352,'2017-06-04 13:59:07',2,20),(472,352,'2017-06-04 13:59:17',2,20),(473,352,'2017-06-04 13:59:21',3,20),(474,352,'2017-06-04 13:59:23',1,20),(475,314,'2017-06-04 14:03:00',4,20),(476,353,'2017-06-04 14:03:03',2,20),(477,353,'2017-06-04 14:03:14',3,20),(478,353,'2017-06-04 14:03:22',1,20),(479,314,'2017-06-04 14:03:27',4,20),(480,314,'2017-06-04 14:06:23',4,20),(481,316,'2017-06-04 14:06:38',2,20),(482,316,'2017-06-04 14:06:42',3,20),(483,316,'2017-06-04 14:06:44',1,20),(484,314,'2017-06-04 14:24:08',4,20),(485,314,'2017-06-04 14:24:54',4,20),(486,314,'2017-06-04 14:26:59',4,20),(487,314,'2017-06-04 14:27:31',4,20),(488,336,'2017-06-04 14:28:07',2,20),(489,336,'2017-06-04 14:28:09',3,20),(490,336,'2017-06-04 14:28:10',1,20),(491,337,'2017-06-04 14:28:16',2,20),(492,337,'2017-06-04 14:28:19',3,20),(493,337,'2017-06-04 14:28:20',1,20),(494,338,'2017-06-04 14:28:25',3,20),(495,338,'2017-06-04 14:28:26',1,20),(496,314,'2017-06-04 14:38:06',4,20),(497,314,'2017-06-04 14:38:23',4,20),(498,314,'2017-06-04 14:48:52',4,20),(499,314,'2017-06-04 14:48:52',3,20),(500,314,'2017-06-04 14:48:56',1,20),(501,339,'2017-06-04 15:20:57',3,21),(502,339,'2017-06-04 15:21:05',1,21),(503,354,'2017-06-04 17:02:32',2,20),(504,355,'2017-06-04 17:03:04',2,20),(505,356,'2017-06-04 17:03:13',2,20),(506,357,'2017-06-04 17:05:51',2,20),(507,358,'2017-06-04 20:59:29',2,20),(508,358,'2017-06-04 20:59:32',3,20),(509,358,'2017-06-04 20:59:34',1,20),(510,359,'2017-06-04 20:59:36',2,20),(511,359,'2017-06-04 20:59:57',3,20),(512,359,'2017-06-04 20:59:59',1,20),(513,360,'2017-06-04 21:00:02',2,20),(514,360,'2017-06-04 21:00:04',2,20),(515,389,'2017-06-04 21:00:22',2,20),(516,389,'2017-06-04 21:00:23',3,20),(517,389,'2017-06-04 21:00:24',3,20),(518,390,'2017-06-04 21:00:35',2,20),(519,390,'2017-06-04 21:00:36',2,20),(520,391,'2017-06-04 21:07:09',2,20),(521,391,'2017-06-04 21:07:11',3,20),(522,391,'2017-06-04 21:07:13',1,20),(523,392,'2017-06-04 21:07:34',2,20),(524,392,'2017-06-04 21:07:40',2,20),(525,393,'2017-06-04 21:07:44',2,20),(526,393,'2017-06-04 21:07:47',3,20),(527,393,'2017-06-04 21:07:48',3,20),(528,394,'2017-06-04 22:33:00',2,20),(529,394,'2017-06-04 22:33:02',2,20),(530,395,'2017-06-05 00:44:29',2,20),(531,395,'2017-06-05 00:44:31',3,20),(532,395,'2017-06-05 00:44:32',1,20),(533,396,'2017-06-05 00:44:34',2,20),(534,396,'2017-06-05 00:44:36',2,20),(535,396,'2017-06-05 00:45:21',2,20),(536,396,'2017-06-05 00:45:23',2,20),(537,396,'2017-06-05 00:45:28',2,20),(538,396,'2017-06-05 00:45:32',3,20),(539,396,'2017-06-05 00:45:34',3,20),(540,396,'2017-06-05 00:45:38',3,20),(541,396,'2017-06-05 00:45:40',1,20),(542,397,'2017-06-05 00:55:25',2,20),(543,397,'2017-06-05 00:55:34',3,20),(544,397,'2017-06-05 00:55:44',1,20),(545,398,'2017-06-05 11:01:44',2,20),(546,398,'2017-06-05 11:01:46',2,20),(547,398,'2017-06-05 11:01:50',2,20),(548,398,'2017-06-05 11:01:56',3,20),(549,398,'2017-06-05 11:02:01',3,20),(550,398,'2017-06-05 11:02:05',3,20),(551,398,'2017-06-05 11:02:08',1,20),(552,412,'2017-06-05 11:53:20',2,20),(553,399,'2017-06-05 11:54:50',2,20),(554,399,'2017-06-05 11:54:52',2,20),(555,399,'2017-06-05 11:55:01',2,20),(556,399,'2017-06-05 12:12:03',2,20),(557,399,'2017-06-05 12:12:23',4,20),(558,422,'2017-06-05 12:20:42',2,20),(559,422,'2017-06-05 12:20:56',2,20),(560,422,'2017-06-05 12:21:17',2,20),(561,422,'2017-06-05 12:21:47',4,20),(562,422,'2017-06-05 12:22:25',4,20),(563,422,'2017-06-05 12:22:25',3,20),(564,422,'2017-06-05 12:22:35',3,20),(565,422,'2017-06-05 12:34:36',3,20),(566,422,'2017-06-05 12:34:44',1,20),(567,422,'2017-06-07 10:50:36',1,20);

/*Table structure for table `SesionEmpleado` */

DROP TABLE IF EXISTS `SesionEmpleado`;

CREATE TABLE `SesionEmpleado` (
  `idSesion` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `idTurno` int(10) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `ultimaSesion` datetime DEFAULT NULL,
  PRIMARY KEY (`idSesion`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `SesionEmpleado` */

insert  into `SesionEmpleado`(`idSesion`,`idUsuario`,`idTurno`,`estado`,`ultimaSesion`) values (1,20,NULL,NULL,'2017-06-02 18:38:08'),(2,20,NULL,NULL,'2017-06-02 18:54:34'),(3,20,NULL,NULL,'2017-06-02 19:09:23'),(4,20,NULL,NULL,'2017-06-02 19:11:32'),(5,20,NULL,NULL,'2017-06-02 19:13:31'),(6,20,339,3,'2017-06-02 19:16:17'),(7,20,NULL,NULL,'2017-06-04 00:31:10'),(8,20,NULL,NULL,'2017-06-04 12:23:17'),(9,20,NULL,NULL,'2017-06-04 13:59:40'),(10,20,NULL,NULL,'2017-06-04 15:06:22'),(11,21,NULL,NULL,'2017-06-04 15:09:30'),(12,20,NULL,NULL,'2017-06-04 15:09:40'),(13,21,NULL,NULL,'2017-06-04 15:21:08'),(14,20,389,3,'2017-06-04 21:00:24'),(15,20,393,3,'2017-06-04 21:07:48'),(16,20,394,2,'2017-06-04 22:33:02'),(17,20,396,2,'2017-06-05 00:44:36'),(18,20,396,2,'2017-06-05 00:45:23'),(19,20,396,3,'2017-06-05 00:45:34'),(20,20,NULL,NULL,'2017-06-05 00:47:19'),(21,20,NULL,NULL,'2017-06-05 00:54:44'),(22,20,398,2,'2017-06-05 11:01:46'),(23,20,398,3,'2017-06-05 11:02:02'),(24,20,NULL,NULL,'2017-06-05 11:03:18'),(25,20,NULL,NULL,'2017-06-05 11:53:24'),(26,20,399,2,'2017-06-05 11:54:52'),(27,20,399,2,'2017-06-05 12:12:03'),(28,20,399,4,'2017-06-05 12:12:23'),(29,20,NULL,NULL,'2017-06-05 12:12:24'),(30,20,NULL,NULL,'2017-06-05 12:12:41'),(31,20,NULL,NULL,'2017-06-05 12:14:24'),(32,20,NULL,NULL,'2017-06-05 12:16:37'),(33,20,422,2,'2017-06-05 12:20:42'),(34,20,422,2,'2017-06-05 12:20:56'),(35,20,422,2,'2017-06-05 12:21:17'),(36,20,422,4,'2017-06-05 12:21:47'),(37,20,NULL,NULL,'2017-06-05 12:21:47'),(38,20,422,4,'2017-06-05 12:22:24'),(39,20,422,3,'2017-06-05 12:22:25'),(40,20,422,3,'2017-06-05 12:22:35'),(41,20,422,3,'2017-06-05 12:34:36'),(42,20,422,1,'2017-06-05 12:34:44'),(43,20,NULL,NULL,'2017-06-05 12:34:44'),(44,20,422,1,'2017-06-07 10:50:36'),(45,20,NULL,NULL,'2017-06-07 10:50:36'),(46,20,NULL,NULL,'2017-06-07 11:33:25'),(47,20,NULL,NULL,'2017-06-07 11:34:05');

/*Table structure for table `Turno` */

DROP TABLE IF EXISTS `Turno`;

CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  `atendido` int(2) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `enEspera` int(2) DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=516 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`,`enEspera`) values (311,19,17,1,'12:18:46',1),(312,20,20,1,'12:18:47',1),(313,21,22,1,'12:18:47',1),(314,21,23,1,'12:18:48',1),(315,20,21,1,'12:18:49',0),(316,19,18,1,'12:18:49',1),(317,19,19,1,'12:18:50',0),(318,20,22,1,'12:18:51',0),(319,19,20,1,'19:57:43',0),(320,20,23,1,'19:58:10',1),(321,19,21,0,'19:58:25',0),(322,20,24,1,'20:08:29',1),(323,20,25,1,'20:10:29',0),(324,20,26,1,'17:01:55',0),(325,19,22,0,'17:01:57',0),(326,19,23,0,'17:03:37',0),(327,21,24,0,'17:19:48',0),(328,21,25,0,'17:19:50',0),(329,21,26,0,'17:19:50',0),(330,21,27,0,'17:19:50',0),(331,21,29,0,'17:19:50',0),(332,21,29,0,'17:19:51',0),(333,21,30,0,'17:19:51',0),(334,21,30,0,'17:19:51',0),(335,20,27,1,'17:19:54',0),(336,20,28,1,'17:20:37',1),(337,20,29,1,'17:20:37',1),(338,20,30,1,'17:20:37',1),(339,20,31,1,'17:20:37',1),(340,20,32,1,'17:20:37',1),(341,20,34,1,'17:20:38',0),(342,20,34,1,'17:20:38',0),(343,20,35,1,'17:20:38',0),(344,19,24,0,'17:20:43',0),(345,21,31,0,'17:21:27',0),(346,21,32,0,'17:23:01',0),(347,20,36,1,'17:25:18',0),(348,20,37,1,'17:26:16',0),(349,19,25,0,'17:26:19',0),(350,19,26,0,'17:28:52',0),(351,20,38,1,'17:29:03',0),(352,20,39,1,'17:29:04',0),(353,20,40,1,'17:29:04',0),(354,20,41,1,'17:29:04',0),(355,20,43,1,'17:29:05',0),(356,20,43,1,'17:29:05',0),(357,20,44,1,'17:29:05',0),(358,20,45,1,'17:29:06',0),(359,20,46,1,'17:29:07',0),(360,20,47,1,'17:29:07',1),(361,19,27,0,'17:29:15',0),(362,19,28,0,'17:29:15',0),(363,19,30,0,'17:29:16',0),(364,19,30,0,'17:29:16',0),(365,19,33,0,'17:29:16',0),(366,19,33,0,'17:29:16',0),(367,19,33,0,'17:29:16',0),(368,19,35,0,'17:29:16',0),(369,19,35,0,'17:29:17',0),(370,19,36,0,'17:29:17',0),(371,19,37,0,'17:31:03',0),(372,19,38,0,'17:31:03',0),(373,19,40,0,'17:31:03',0),(374,19,41,0,'17:31:03',0),(375,19,42,0,'17:31:03',0),(376,19,42,0,'17:31:04',0),(377,19,44,0,'17:31:04',0),(378,19,44,0,'17:31:04',0),(379,19,45,0,'17:31:08',0),(380,19,46,0,'17:31:08',0),(381,19,48,0,'17:31:08',0),(382,19,49,0,'17:31:09',0),(383,19,49,0,'17:31:09',0),(384,19,50,0,'17:31:09',0),(385,19,51,0,'17:31:09',0),(386,19,52,0,'17:31:09',0),(387,19,53,0,'17:31:10',0),(388,19,54,0,'17:31:10',0),(389,20,48,3,'17:31:14',1),(390,20,49,2,'17:31:15',1),(391,20,51,1,'17:31:15',0),(392,20,51,2,'17:31:15',1),(393,20,53,3,'17:31:15',1),(394,20,53,2,'17:31:15',1),(395,20,55,1,'17:31:16',0),(396,20,55,1,'17:31:16',1),(397,20,57,1,'17:31:16',0),(398,20,57,1,'17:31:16',1),(399,20,58,4,'17:31:16',1),(400,19,55,0,'17:31:36',0),(401,19,56,0,'17:31:36',0),(402,19,58,0,'17:31:36',0),(403,19,59,0,'17:31:36',0),(404,19,59,0,'17:31:37',0),(405,19,61,0,'17:31:37',0),(406,19,61,0,'17:31:37',0),(407,19,62,0,'17:31:37',0),(408,19,63,0,'17:32:00',0),(409,19,64,0,'17:32:00',0),(410,19,65,0,'17:32:01',0),(411,19,66,0,'17:32:01',0),(412,20,59,2,'17:32:03',0),(413,19,67,0,'17:32:05',0),(414,19,68,0,'17:32:05',0),(415,19,69,0,'17:32:05',0),(416,19,70,0,'17:32:16',0),(417,19,71,0,'17:32:17',0),(418,19,73,0,'17:32:18',0),(419,19,74,0,'17:32:18',0),(420,19,74,0,'17:32:18',0),(421,19,75,0,'17:32:21',0),(422,20,60,1,'17:32:23',1),(423,21,33,0,'17:32:25',0),(424,21,34,0,'17:32:29',0),(425,19,76,0,'17:46:52',0),(426,20,61,0,'17:46:54',0),(427,21,35,0,'17:46:56',0),(428,19,77,0,'17:48:24',0),(429,20,62,0,'17:48:25',0),(430,20,63,0,'17:48:25',0),(431,20,64,0,'17:48:25',0),(432,20,66,0,'17:48:26',0),(433,20,67,0,'17:48:26',0),(434,20,67,0,'17:48:26',0),(435,20,68,0,'17:48:39',0),(436,21,36,0,'17:48:40',0),(437,19,79,0,'17:48:42',0),(438,19,79,0,'17:48:42',0),(439,19,80,0,'17:48:42',0),(440,19,82,0,'17:48:44',0),(441,19,82,0,'17:48:44',0),(442,19,84,0,'17:48:44',0),(443,19,84,0,'17:48:44',0),(444,19,86,0,'17:48:44',0),(445,19,86,0,'17:48:45',0),(446,20,69,0,'17:48:49',0),(447,19,87,0,'17:48:51',0),(448,21,37,0,'17:48:55',0),(449,20,70,0,'17:50:30',0),(450,21,38,0,'17:50:31',0),(451,21,39,0,'17:50:32',0),(452,21,41,0,'17:50:32',0),(453,21,41,0,'17:50:32',0),(454,19,89,0,'17:50:33',0),(455,19,89,0,'17:50:33',0),(456,19,90,0,'17:50:33',0),(457,19,91,0,'17:50:35',0),(458,19,92,0,'17:50:35',0),(459,19,93,0,'17:50:40',0),(460,20,71,0,'17:50:47',0),(461,20,72,0,'17:50:49',0),(462,20,73,0,'17:50:52',0),(463,19,94,0,'17:52:43',0),(464,20,74,0,'17:52:44',0),(465,21,42,0,'17:52:45',0),(466,21,43,0,'17:52:45',0),(467,21,44,0,'17:52:45',0),(468,21,45,0,'17:52:46',0),(469,21,46,0,'17:52:46',0),(470,21,47,0,'17:52:46',0),(471,21,48,0,'17:52:46',0),(472,21,49,0,'17:54:50',0),(473,19,95,0,'17:55:01',0),(474,19,96,0,'17:55:01',0),(475,19,97,0,'17:55:02',0),(476,20,75,0,'17:55:03',0),(477,20,77,0,'17:55:03',0),(478,20,77,0,'17:55:03',0),(479,21,50,0,'17:55:05',0),(480,21,51,0,'17:55:05',0),(481,21,52,0,'17:55:05',0),(482,21,53,0,'17:55:14',0),(483,21,54,0,'17:55:14',0),(484,21,56,0,'17:55:27',0),(485,21,56,0,'17:55:27',0),(486,21,57,0,'17:55:27',0),(487,21,58,0,'17:55:29',0),(488,21,59,0,'17:55:29',0),(489,21,60,0,'17:55:29',0),(490,21,62,0,'17:55:29',0),(491,21,62,0,'17:55:30',0),(492,21,63,0,'17:55:30',0),(493,21,64,0,'17:55:30',0),(494,21,65,0,'17:55:31',0),(495,21,67,0,'17:55:31',0),(496,21,67,0,'17:55:31',0),(497,21,69,0,'17:55:31',0),(498,21,69,0,'17:55:31',0),(499,21,71,0,'17:55:32',0),(500,21,72,0,'17:55:32',0),(501,21,72,0,'17:55:32',0),(502,21,74,0,'17:55:32',0),(503,21,75,0,'17:55:32',0),(504,21,75,0,'17:55:32',0),(505,21,77,0,'17:55:33',0),(506,21,77,0,'17:55:33',0),(507,21,78,0,'17:55:33',0),(508,21,80,0,'17:55:33',0),(509,21,80,0,'17:55:33',0),(510,20,78,0,'17:57:41',0),(511,20,79,0,'17:57:43',0),(512,20,80,0,'17:57:45',0),(513,19,98,0,'19:22:49',0),(514,19,99,0,'19:22:51',0),(515,19,100,0,'19:22:53',0);

/*Table structure for table `Usuario` */

DROP TABLE IF EXISTS `Usuario`;

CREATE TABLE `Usuario` (
  `usuarioId` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fechaDeAlta` datetime DEFAULT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  `perfil` int(11) DEFAULT '3',
  PRIMARY KEY (`usuarioId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `Usuario` */

insert  into `Usuario`(`usuarioId`,`nombre`,`apellido`,`fechaDeAlta`,`contrasenia`,`perfil`) values (20,'Pablo','Oporto','2017-04-18 23:17:47','123',2),(21,'Sergio','Brandolin','2017-04-18 23:18:03','321',1),(22,'Emmanuel','Frati','2017-04-21 14:08:56',NULL,2),(23,'Turnos',NULL,'2017-06-07 11:23:00','123',3),(24,'Monitor',NULL,'2017-06-07 11:23:00','',4);

/*Table structure for table `cola_empleado` */

DROP TABLE IF EXISTS `cola_empleado`;

CREATE TABLE `cola_empleado` (
  `idUnionCoEm` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idUnionCoEm`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `cola_empleado` */

insert  into `cola_empleado`(`idUnionCoEm`,`idCola`,`idEmpleado`) values (13,20,20),(16,19,22),(17,21,22),(25,20,21);

/*Table structure for table `perfil` */

DROP TABLE IF EXISTS `perfil`;

CREATE TABLE `perfil` (
  `perfilId` int(11) NOT NULL AUTO_INCREMENT,
  `perfilDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`perfilId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `perfil` */

insert  into `perfil`(`perfilId`,`perfilDescripcion`) values (1,'Administrador'),(2,'Empleado'),(3,'Cliente'),(4,'Monitor');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
