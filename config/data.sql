/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.7.18-1 : Database - Farmacentro
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `Cola` */

insert  into `Cola`(`idCola`,`nombreCola`,`hijoDe`,`siguiente`,`letra`,`fechaCreacion`) values (27,'Particular',NULL,16,'A','2017-06-20 12:43:10'),(28,'Obra Social',NULL,NULL,NULL,'2017-06-20 12:43:21'),(29,'Red',28,15,'B','2017-06-20 12:43:38'),(30,'Osde',28,15,'C','2017-06-20 12:44:03'),(31,'PAMI',NULL,15,'D','2017-06-20 12:44:21');

/*Table structure for table `HistorialEstado` */

DROP TABLE IF EXISTS `HistorialEstado`;

CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=949 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (643,533,'2017-06-20 18:13:25',2,26),(644,533,'2017-06-20 18:13:27',3,26),(645,533,'2017-06-20 18:13:28',1,26),(646,534,'2017-06-20 18:13:31',2,26),(647,534,'2017-06-20 18:13:32',3,26),(648,534,'2017-06-20 18:13:34',1,26),(649,536,'2017-06-20 18:13:35',2,26),(650,536,'2017-06-20 18:13:36',3,26),(651,536,'2017-06-20 18:13:37',1,26),(652,537,'2017-06-20 18:13:39',2,26),(653,537,'2017-06-20 18:13:40',3,26),(654,537,'2017-06-20 18:13:41',1,26),(655,539,'2017-06-20 18:13:43',2,26),(656,539,'2017-06-20 18:13:45',3,26),(657,539,'2017-06-20 18:13:45',1,26),(658,538,'2017-06-20 18:13:48',2,26),(659,538,'2017-06-20 18:13:48',3,26),(660,538,'2017-06-20 18:13:49',1,26),(661,535,'2017-06-20 18:13:56',2,26),(662,535,'2017-06-20 18:14:42',2,26),(663,535,'2017-06-20 18:14:45',3,26),(664,535,'2017-06-20 18:14:45',3,26),(665,535,'2017-06-20 18:14:46',1,26),(666,541,'2017-06-20 18:47:59',2,26),(667,541,'2017-06-20 18:48:08',2,26),(668,544,'2017-06-22 14:08:03',2,26),(669,544,'2017-06-22 14:08:06',3,26),(670,544,'2017-06-22 14:08:07',1,26),(671,542,'2017-06-22 15:17:23',2,26),(672,542,'2017-06-22 15:17:26',3,26),(673,542,'2017-06-22 15:17:27',1,26),(674,550,'2017-06-22 16:11:36',2,26),(675,550,'2017-06-22 16:11:42',3,26),(676,550,'2017-06-22 16:11:44',1,26),(677,545,'2017-06-22 16:11:53',2,26),(678,545,'2017-06-22 16:11:56',3,26),(679,545,'2017-06-22 16:11:58',1,26),(680,551,'2017-06-22 16:13:49',2,26),(681,551,'2017-06-22 16:13:55',3,26),(682,551,'2017-06-22 16:13:56',1,26),(683,552,'2017-06-22 16:14:02',2,26),(684,552,'2017-06-22 16:14:03',3,26),(685,552,'2017-06-22 16:14:07',1,26),(686,547,'2017-06-22 16:14:33',2,26),(687,547,'2017-06-22 16:14:35',4,26),(688,549,'2017-06-22 16:14:41',2,26),(689,549,'2017-06-22 16:14:42',4,26),(690,546,'2017-06-22 19:17:12',2,26),(691,546,'2017-06-22 20:39:18',2,26),(692,546,'2017-06-24 11:55:30',2,26),(693,546,'2017-06-24 11:55:32',3,26),(694,546,'2017-06-24 11:55:33',1,26),(695,546,'2017-06-27 20:52:20',1,26),(696,554,'2017-06-27 20:53:07',2,26),(697,554,'2017-06-27 20:53:13',3,26),(698,554,'2017-06-27 20:53:17',1,26),(699,557,'2017-07-04 14:49:59',2,26),(700,557,'2017-07-04 14:50:27',2,26),(701,557,'2017-07-04 14:56:36',2,26),(702,557,'2017-07-04 15:17:50',2,26),(703,557,'2017-07-04 15:49:00',2,26),(704,557,'2017-07-04 16:21:45',2,26),(705,557,'2017-07-05 01:09:43',2,26),(706,557,'2017-07-05 01:10:04',2,26),(707,557,'2017-07-05 01:10:12',2,26),(708,557,'2017-07-05 01:13:39',2,26),(709,557,'2017-07-05 01:13:45',3,26),(710,557,'2017-07-05 01:13:48',1,26),(711,556,'2017-07-05 01:13:50',2,26),(712,556,'2017-07-05 01:14:10',2,26),(713,556,'2017-07-05 01:16:10',3,26),(714,556,'2017-07-05 01:16:12',1,26),(715,553,'2017-07-05 01:16:19',2,26),(716,553,'2017-07-05 01:16:22',3,26),(717,553,'2017-07-05 01:16:24',1,26),(718,540,'2017-07-05 01:36:45',3,26),(719,540,'2017-07-05 01:36:48',1,26),(720,543,'2017-07-05 01:36:53',2,26),(721,543,'2017-07-05 01:37:01',3,26),(722,543,'2017-07-05 01:37:03',1,26),(723,548,'2017-07-05 01:39:02',2,26),(724,548,'2017-07-05 01:39:14',3,26),(725,548,'2017-07-05 01:39:38',3,26),(726,548,'2017-07-05 01:39:53',1,26),(727,558,'2017-07-05 01:41:32',2,26),(728,558,'2017-07-05 01:41:51',3,26),(729,558,'2017-07-05 01:41:52',1,26),(730,560,'2017-07-05 01:41:54',2,26),(731,560,'2017-07-05 01:41:57',3,26),(732,560,'2017-07-05 01:42:00',1,26),(733,561,'2017-07-05 01:42:02',2,26),(734,561,'2017-07-05 01:42:05',3,26),(735,561,'2017-07-05 01:42:06',1,26),(736,564,'2017-07-05 01:43:12',3,26),(737,564,'2017-07-05 01:43:14',1,26),(738,568,'2017-07-05 01:43:36',3,26),(739,568,'2017-07-05 01:43:37',1,26),(740,571,'2017-07-05 13:22:55',2,26),(741,571,'2017-07-05 13:23:03',2,26),(742,571,'2017-07-05 13:23:07',3,26),(743,571,'2017-07-05 13:23:08',1,26),(744,577,'2017-07-05 13:23:11',2,26),(745,577,'2017-07-05 13:23:19',2,26),(746,577,'2017-07-05 13:25:29',2,26),(747,577,'2017-07-05 13:25:32',3,26),(748,577,'2017-07-05 13:25:34',1,26),(749,559,'2017-07-05 13:26:35',2,26),(750,559,'2017-07-05 13:26:40',2,26),(751,559,'2017-07-05 13:27:17',3,26),(752,559,'2017-07-05 13:27:23',1,26),(753,562,'2017-07-05 13:32:20',2,26),(754,562,'2017-07-05 13:32:26',2,26),(755,562,'2017-07-05 13:32:31',3,26),(756,562,'2017-07-05 13:32:33',3,26),(757,562,'2017-07-05 13:32:43',3,26),(758,562,'2017-07-05 13:37:54',1,26),(759,563,'2017-07-05 13:37:59',2,26),(760,563,'2017-07-05 13:38:02',2,26),(761,563,'2017-07-05 13:38:09',2,26),(762,563,'2017-07-05 13:40:15',3,26),(763,563,'2017-07-05 13:40:26',3,26),(764,563,'2017-07-05 13:40:28',1,26),(765,565,'2017-07-05 13:42:15',2,26),(766,565,'2017-07-05 13:44:18',3,26),(767,565,'2017-07-05 13:44:19',1,26),(768,566,'2017-07-05 13:44:24',2,26),(769,566,'2017-07-05 13:46:38',2,26),(770,566,'2017-07-05 13:46:45',2,26),(771,566,'2017-07-05 13:47:04',2,26),(772,566,'2017-07-05 13:47:10',3,26),(773,566,'2017-07-05 13:47:12',1,26),(774,567,'2017-07-05 13:47:23',2,26),(775,567,'2017-07-05 13:58:47',2,26),(776,567,'2017-07-05 14:00:36',3,26),(777,567,'2017-07-05 14:00:37',1,26),(778,567,'2017-07-05 14:00:37',1,26),(779,569,'2017-07-05 14:00:43',2,26),(780,569,'2017-07-05 14:00:46',2,26),(781,569,'2017-07-06 11:05:21',3,26),(782,569,'2017-07-06 11:05:26',1,26),(783,555,'2017-07-06 11:06:36',2,26),(784,572,'2017-07-06 11:06:41',2,27),(785,555,'2017-07-06 11:27:35',2,26),(786,555,'2017-07-06 11:27:37',2,26),(787,555,'2017-07-06 11:27:38',3,26),(788,555,'2017-07-06 11:27:51',1,26),(789,570,'2017-07-06 11:28:15',2,26),(790,570,'2017-07-06 16:16:13',2,26),(791,570,'2017-07-06 16:16:15',3,26),(792,570,'2017-07-06 16:16:16',1,26),(793,547,'2017-07-06 16:17:07',4,26),(794,547,'2017-07-06 16:17:07',3,26),(795,547,'2017-07-06 16:17:09',1,26),(796,549,'2017-07-06 16:19:09',4,26),(797,549,'2017-07-06 16:19:09',3,26),(798,549,'2017-07-06 16:20:14',1,26),(799,573,'2017-07-06 16:20:19',2,26),(800,573,'2017-07-06 16:21:06',2,26),(801,573,'2017-07-06 16:21:13',2,26),(802,573,'2017-07-06 16:21:16',2,26),(803,573,'2017-07-06 16:21:26',2,26),(804,573,'2017-07-06 16:21:30',2,26),(805,573,'2017-07-06 16:21:35',2,26),(806,573,'2017-07-06 16:24:15',2,26),(807,573,'2017-07-06 16:24:19',2,26),(808,573,'2017-07-06 16:24:25',2,26),(809,573,'2017-07-06 16:24:31',2,26),(810,573,'2017-07-06 16:24:35',2,26),(811,573,'2017-07-06 16:25:18',2,26),(812,573,'2017-07-06 16:25:23',2,26),(813,573,'2017-07-06 16:25:29',2,26),(814,573,'2017-07-06 16:25:33',2,26),(815,573,'2017-07-06 16:25:36',2,26),(816,573,'2017-07-06 16:25:44',2,26),(817,573,'2017-07-06 16:25:47',2,26),(818,573,'2017-07-06 16:27:38',2,26),(819,573,'2017-07-06 16:27:45',2,26),(820,573,'2017-07-06 16:27:49',2,26),(821,573,'2017-07-06 16:28:06',2,26),(822,573,'2017-07-06 16:28:13',2,26),(823,573,'2017-07-06 16:28:56',2,26),(824,573,'2017-07-06 16:29:04',2,26),(825,573,'2017-07-06 16:29:07',2,26),(826,573,'2017-07-06 16:30:11',2,26),(827,573,'2017-07-06 16:30:16',2,26),(828,573,'2017-07-06 16:30:20',2,26),(829,573,'2017-07-06 16:30:23',2,26),(830,573,'2017-07-06 16:30:35',2,26),(831,573,'2017-07-06 16:30:39',2,26),(832,573,'2017-07-06 16:33:22',2,26),(833,573,'2017-07-06 16:33:27',2,26),(834,573,'2017-07-06 16:33:33',2,26),(835,573,'2017-07-06 16:33:42',2,26),(836,573,'2017-07-06 16:33:43',2,26),(837,573,'2017-07-06 16:34:23',2,26),(838,573,'2017-07-06 16:34:38',2,26),(839,573,'2017-07-06 16:34:51',2,26),(840,573,'2017-07-06 16:34:53',2,26),(841,573,'2017-07-06 16:35:53',2,26),(842,573,'2017-07-06 16:35:59',2,26),(843,573,'2017-07-06 16:36:03',2,26),(844,573,'2017-07-06 16:36:07',2,26),(845,573,'2017-07-06 16:36:13',2,26),(846,573,'2017-07-06 16:36:18',2,26),(847,573,'2017-07-06 16:36:21',2,26),(848,573,'2017-07-06 16:36:31',2,26),(849,573,'2017-07-06 16:36:35',2,26),(850,573,'2017-07-06 16:36:39',2,26),(851,573,'2017-07-06 16:36:42',2,26),(852,573,'2017-07-06 16:36:45',2,26),(853,573,'2017-07-06 16:36:48',2,26),(854,573,'2017-07-06 16:37:20',2,26),(855,573,'2017-07-06 16:37:28',2,26),(856,573,'2017-07-06 16:37:43',2,26),(857,573,'2017-07-06 16:37:49',2,26),(858,573,'2017-07-06 16:38:03',2,26),(859,573,'2017-07-06 16:38:07',2,26),(860,573,'2017-07-06 16:38:12',2,26),(861,573,'2017-07-06 16:39:13',2,26),(862,573,'2017-07-06 16:39:19',3,26),(863,573,'2017-07-06 16:39:21',3,26),(864,573,'2017-07-06 16:39:29',1,26),(865,541,'2017-07-06 16:52:50',2,26),(866,541,'2017-07-06 16:52:52',3,26),(867,541,'2017-07-06 16:53:43',3,26),(868,541,'2017-07-06 16:53:48',3,26),(869,541,'2017-07-06 16:53:59',3,26),(870,541,'2017-07-06 16:54:07',3,26),(871,541,'2017-07-06 16:54:14',3,26),(872,541,'2017-07-06 16:54:19',3,26),(873,541,'2017-07-06 16:54:25',3,26),(874,541,'2017-07-06 16:54:28',3,26),(875,541,'2017-07-06 16:54:33',3,26),(876,541,'2017-07-06 16:54:44',3,26),(877,541,'2017-07-06 16:54:58',3,26),(878,541,'2017-07-06 16:56:04',3,26),(879,541,'2017-07-06 16:56:13',3,26),(880,541,'2017-07-06 16:56:23',3,26),(881,541,'2017-07-06 16:56:32',3,26),(882,541,'2017-07-06 16:56:41',3,26),(883,541,'2017-07-06 16:57:02',3,26),(884,541,'2017-07-06 16:57:06',3,26),(885,541,'2017-07-06 16:57:11',3,26),(886,541,'2017-07-06 16:57:15',3,26),(887,541,'2017-07-06 16:57:19',3,26),(888,541,'2017-07-06 16:57:34',3,26),(889,541,'2017-07-06 16:57:40',3,26),(890,541,'2017-07-06 16:57:53',3,26),(891,541,'2017-07-06 16:58:08',3,26),(892,541,'2017-07-06 16:58:09',3,26),(893,541,'2017-07-06 16:58:11',3,26),(894,541,'2017-07-06 16:58:15',3,26),(895,541,'2017-07-06 16:58:16',3,26),(896,541,'2017-07-06 16:58:16',3,26),(897,541,'2017-07-06 16:58:17',3,26),(898,541,'2017-07-06 16:58:17',3,26),(899,541,'2017-07-06 16:59:07',3,26),(900,541,'2017-07-06 16:59:11',3,26),(901,541,'2017-07-06 16:59:17',3,26),(902,541,'2017-07-06 16:59:26',3,26),(903,541,'2017-07-06 16:59:39',3,26),(904,541,'2017-07-06 16:59:43',3,26),(905,541,'2017-07-06 16:59:49',3,26),(906,541,'2017-07-06 16:59:50',3,26),(907,541,'2017-07-06 16:59:50',3,26),(908,541,'2017-07-06 16:59:50',3,26),(909,541,'2017-07-06 16:59:50',3,26),(910,541,'2017-07-06 16:59:57',3,26),(911,541,'2017-07-06 17:00:05',3,26),(912,541,'2017-07-06 17:00:37',3,26),(913,541,'2017-07-06 17:00:40',3,26),(914,541,'2017-07-06 17:00:49',3,26),(915,541,'2017-07-06 17:00:54',3,26),(916,541,'2017-07-06 17:00:59',3,26),(917,541,'2017-07-06 17:01:07',1,26),(918,574,'2017-07-09 12:47:40',2,26),(919,574,'2017-07-09 12:47:42',3,26),(920,574,'2017-07-09 12:47:47',1,26),(921,576,'2017-07-09 12:48:16',2,26),(922,576,'2017-07-09 12:48:18',3,26),(923,576,'2017-07-09 12:48:20',1,26),(924,575,'2017-07-15 20:38:26',2,26),(925,575,'2017-07-15 20:38:28',2,26),(926,575,'2017-07-15 20:38:33',2,26),(927,575,'2017-07-15 20:38:37',2,26),(928,575,'2017-07-15 20:38:41',3,26),(929,575,'2017-07-15 20:38:43',1,26),(930,575,'2017-07-15 20:50:14',1,26),(931,578,'2017-07-15 20:50:18',2,26),(932,578,'2017-07-15 20:50:22',2,26),(933,578,'2017-07-15 20:50:24',3,26),(934,578,'2017-07-15 20:50:25',1,26),(935,579,'2017-07-15 20:56:23',2,26),(936,579,'2017-07-15 20:56:31',3,26),(937,579,'2017-07-15 20:56:32',1,26),(938,533,'2017-07-18 18:46:54',2,26),(939,533,'2017-07-18 18:46:56',2,26),(940,533,'2017-07-18 18:47:11',2,26),(941,533,'2017-07-18 18:47:20',2,26),(942,533,'2017-07-18 18:47:23',3,26),(943,533,'2017-07-18 18:47:26',1,26),(944,535,'2017-07-18 19:01:40',2,26),(945,535,'2017-07-18 19:01:45',3,26),(946,535,'2017-07-18 19:01:46',1,26),(947,535,'2017-07-18 19:01:49',3,26),(948,535,'2017-07-18 19:01:51',1,26);

/*Table structure for table `SesionEmpleado` */

DROP TABLE IF EXISTS `SesionEmpleado`;

CREATE TABLE `SesionEmpleado` (
  `idSesion` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `idTurno` int(10) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `ultimaSesion` datetime DEFAULT NULL,
  PRIMARY KEY (`idSesion`)
) ENGINE=InnoDB AUTO_INCREMENT=659 DEFAULT CHARSET=latin1;

/*Data for the table `SesionEmpleado` */

insert  into `SesionEmpleado`(`idSesion`,`idUsuario`,`idTurno`,`estado`,`ultimaSesion`) values (157,26,NULL,NULL,'2017-06-20 18:04:31'),(158,26,NULL,NULL,'2017-06-20 18:04:36'),(159,26,NULL,NULL,'2017-06-20 18:06:37'),(160,26,NULL,NULL,'2017-06-20 18:09:40'),(161,26,NULL,NULL,'2017-06-20 18:10:13'),(162,26,NULL,NULL,'2017-06-20 18:10:43'),(163,26,NULL,NULL,'2017-06-20 18:13:07'),(164,26,NULL,NULL,'2017-06-20 18:13:21'),(165,26,533,2,'2017-06-20 18:13:25'),(166,26,533,3,'2017-06-20 18:13:27'),(167,26,533,1,'2017-06-20 18:13:28'),(168,26,NULL,NULL,'2017-06-20 18:13:28'),(169,26,534,2,'2017-06-20 18:13:31'),(170,26,534,3,'2017-06-20 18:13:32'),(171,26,534,1,'2017-06-20 18:13:34'),(172,26,NULL,NULL,'2017-06-20 18:13:34'),(173,26,536,2,'2017-06-20 18:13:35'),(174,26,536,3,'2017-06-20 18:13:36'),(175,26,536,1,'2017-06-20 18:13:37'),(176,26,NULL,NULL,'2017-06-20 18:13:37'),(177,26,537,2,'2017-06-20 18:13:39'),(178,26,537,3,'2017-06-20 18:13:40'),(179,26,537,1,'2017-06-20 18:13:41'),(180,26,NULL,NULL,'2017-06-20 18:13:41'),(181,26,539,2,'2017-06-20 18:13:43'),(182,26,539,3,'2017-06-20 18:13:44'),(183,26,539,1,'2017-06-20 18:13:45'),(184,26,NULL,NULL,'2017-06-20 18:13:46'),(185,26,538,2,'2017-06-20 18:13:47'),(186,26,538,3,'2017-06-20 18:13:48'),(187,26,538,1,'2017-06-20 18:13:49'),(188,26,NULL,NULL,'2017-06-20 18:13:49'),(189,26,NULL,NULL,'2017-06-20 18:13:54'),(190,26,535,2,'2017-06-20 18:13:56'),(191,26,535,2,'2017-06-20 18:14:41'),(192,26,535,3,'2017-06-20 18:14:45'),(193,26,535,3,'2017-06-20 18:14:45'),(194,26,535,1,'2017-06-20 18:14:46'),(195,26,NULL,NULL,'2017-06-20 18:14:46'),(196,26,NULL,NULL,'2017-06-20 18:19:40'),(197,27,NULL,NULL,'2017-06-20 18:20:56'),(198,27,NULL,NULL,'2017-06-20 18:21:00'),(199,27,NULL,NULL,'2017-06-20 18:27:01'),(200,27,NULL,NULL,'2017-06-20 18:27:09'),(201,27,NULL,NULL,'2017-06-20 18:27:35'),(202,26,NULL,NULL,'2017-06-20 18:47:42'),(203,26,NULL,NULL,'2017-06-20 18:47:57'),(204,26,541,2,'2017-06-20 18:47:59'),(205,26,541,2,'2017-06-20 18:48:08'),(206,26,NULL,NULL,'2017-06-20 18:48:08'),(207,26,NULL,NULL,'2017-06-22 10:03:01'),(208,26,NULL,NULL,'2017-06-22 10:42:06'),(209,26,NULL,NULL,'2017-06-22 14:07:41'),(210,26,544,2,'2017-06-22 14:08:03'),(211,26,544,3,'2017-06-22 14:08:06'),(212,26,544,1,'2017-06-22 14:08:07'),(213,26,NULL,NULL,'2017-06-22 14:08:08'),(214,26,NULL,NULL,'2017-06-22 14:12:52'),(215,26,NULL,NULL,'2017-06-22 15:15:24'),(216,26,NULL,NULL,'2017-06-22 15:16:38'),(217,26,542,2,'2017-06-22 15:17:22'),(218,26,542,3,'2017-06-22 15:17:26'),(219,26,542,1,'2017-06-22 15:17:27'),(220,26,NULL,NULL,'2017-06-22 15:17:27'),(221,26,NULL,NULL,'2017-06-22 15:17:39'),(222,26,NULL,NULL,'2017-06-22 15:17:54'),(223,26,NULL,NULL,'2017-06-22 15:18:04'),(224,26,NULL,NULL,'2017-06-22 15:18:58'),(225,26,NULL,NULL,'2017-06-22 15:23:33'),(226,26,NULL,NULL,'2017-06-22 15:23:43'),(227,26,NULL,NULL,'2017-06-22 15:23:46'),(228,26,NULL,NULL,'2017-06-22 15:28:03'),(229,26,NULL,NULL,'2017-06-22 15:28:04'),(230,26,NULL,NULL,'2017-06-22 15:28:13'),(231,26,NULL,NULL,'2017-06-22 15:28:15'),(232,26,NULL,NULL,'2017-06-22 15:29:19'),(233,26,NULL,NULL,'2017-06-22 15:29:44'),(234,26,NULL,NULL,'2017-06-22 15:30:46'),(235,26,NULL,NULL,'2017-06-22 15:31:29'),(236,26,NULL,NULL,'2017-06-22 15:31:43'),(237,26,NULL,NULL,'2017-06-22 16:11:26'),(238,26,550,2,'2017-06-22 16:11:36'),(239,26,550,3,'2017-06-22 16:11:42'),(240,26,550,1,'2017-06-22 16:11:44'),(241,26,NULL,NULL,'2017-06-22 16:11:44'),(242,26,545,2,'2017-06-22 16:11:53'),(243,26,545,3,'2017-06-22 16:11:56'),(244,26,545,1,'2017-06-22 16:11:57'),(245,26,NULL,NULL,'2017-06-22 16:11:58'),(246,26,NULL,NULL,'2017-06-22 16:13:17'),(247,26,551,2,'2017-06-22 16:13:48'),(248,26,551,3,'2017-06-22 16:13:55'),(249,26,551,1,'2017-06-22 16:13:56'),(250,26,NULL,NULL,'2017-06-22 16:13:56'),(251,26,552,2,'2017-06-22 16:14:01'),(252,26,552,3,'2017-06-22 16:14:02'),(253,26,552,1,'2017-06-22 16:14:07'),(254,26,NULL,NULL,'2017-06-22 16:14:07'),(255,26,547,2,'2017-06-22 16:14:33'),(256,26,547,4,'2017-06-22 16:14:35'),(257,26,NULL,NULL,'2017-06-22 16:14:35'),(258,26,549,2,'2017-06-22 16:14:40'),(259,26,549,4,'2017-06-22 16:14:42'),(260,26,NULL,NULL,'2017-06-22 16:14:42'),(261,26,NULL,NULL,'2017-06-22 19:17:10'),(262,26,546,2,'2017-06-22 19:17:12'),(263,23,NULL,NULL,'2017-06-22 20:25:44'),(264,26,546,2,'2017-06-22 20:39:18'),(265,26,546,2,'2017-06-24 11:55:29'),(266,26,546,3,'2017-06-24 11:55:32'),(267,26,546,1,'2017-06-24 11:55:33'),(268,26,NULL,NULL,'2017-06-24 11:55:33'),(269,26,546,1,'2017-06-27 20:52:19'),(270,26,NULL,NULL,'2017-06-27 20:52:20'),(271,26,NULL,NULL,'2017-06-27 20:53:04'),(272,26,554,2,'2017-06-27 20:53:06'),(273,26,554,3,'2017-06-27 20:53:13'),(274,26,554,1,'2017-06-27 20:53:16'),(275,26,NULL,NULL,'2017-06-27 20:53:17'),(276,26,NULL,NULL,'2017-06-29 10:56:50'),(277,26,NULL,NULL,'2017-06-29 10:57:32'),(278,26,NULL,NULL,'2017-07-04 14:49:41'),(279,26,557,2,'2017-07-04 14:49:59'),(280,26,557,2,'2017-07-04 14:50:27'),(281,26,557,2,'2017-07-04 14:56:35'),(282,26,557,2,'2017-07-04 15:17:50'),(283,26,557,2,'2017-07-04 15:49:00'),(284,26,557,2,'2017-07-04 16:21:45'),(285,26,557,2,'2017-07-05 01:09:42'),(286,26,557,2,'2017-07-05 01:10:04'),(287,26,557,2,'2017-07-05 01:10:12'),(288,26,557,2,'2017-07-05 01:13:39'),(289,26,557,3,'2017-07-05 01:13:45'),(290,26,557,1,'2017-07-05 01:13:47'),(291,26,NULL,NULL,'2017-07-05 01:13:48'),(292,26,556,2,'2017-07-05 01:13:50'),(293,26,556,2,'2017-07-05 01:14:10'),(294,26,556,2,'2017-07-05 01:15:28'),(295,26,556,3,'2017-07-05 01:16:10'),(296,26,556,1,'2017-07-05 01:16:12'),(297,26,NULL,NULL,'2017-07-05 01:16:13'),(298,26,553,2,'2017-07-05 01:16:18'),(299,26,553,3,'2017-07-05 01:16:22'),(300,26,553,1,'2017-07-05 01:16:23'),(301,26,NULL,NULL,'2017-07-05 01:16:24'),(302,26,NULL,NULL,'2017-07-05 01:34:19'),(303,26,NULL,NULL,'2017-07-05 01:35:32'),(304,26,540,2,'2017-07-05 01:35:34'),(305,26,540,3,'2017-07-05 01:36:44'),(306,26,540,1,'2017-07-05 01:36:47'),(307,26,NULL,NULL,'2017-07-05 01:36:48'),(308,26,543,2,'2017-07-05 01:36:53'),(309,26,543,3,'2017-07-05 01:37:01'),(310,26,543,1,'2017-07-05 01:37:03'),(311,26,NULL,NULL,'2017-07-05 01:37:03'),(312,26,548,2,'2017-07-05 01:39:02'),(313,26,548,2,'2017-07-05 01:39:10'),(314,26,548,3,'2017-07-05 01:39:14'),(315,26,548,3,'2017-07-05 01:39:37'),(316,26,548,1,'2017-07-05 01:39:53'),(317,26,NULL,NULL,'2017-07-05 01:39:53'),(318,26,NULL,NULL,'2017-07-05 01:40:34'),(319,26,NULL,NULL,'2017-07-05 01:41:18'),(320,26,558,2,'2017-07-05 01:41:32'),(321,26,558,2,'2017-07-05 01:41:47'),(322,26,558,3,'2017-07-05 01:41:51'),(323,26,558,1,'2017-07-05 01:41:52'),(324,26,NULL,NULL,'2017-07-05 01:41:52'),(325,26,560,2,'2017-07-05 01:41:54'),(326,26,560,3,'2017-07-05 01:41:57'),(327,26,560,1,'2017-07-05 01:42:00'),(328,26,NULL,NULL,'2017-07-05 01:42:00'),(329,26,561,2,'2017-07-05 01:42:02'),(330,26,561,3,'2017-07-05 01:42:05'),(331,26,561,1,'2017-07-05 01:42:06'),(332,26,NULL,NULL,'2017-07-05 01:42:06'),(333,26,NULL,NULL,'2017-07-05 01:42:37'),(334,26,564,2,'2017-07-05 01:42:40'),(335,26,564,3,'2017-07-05 01:43:12'),(336,26,564,1,'2017-07-05 01:43:14'),(337,26,NULL,NULL,'2017-07-05 01:43:14'),(338,26,NULL,NULL,'2017-07-05 01:43:22'),(339,26,568,2,'2017-07-05 01:43:25'),(340,26,568,3,'2017-07-05 01:43:36'),(341,26,568,1,'2017-07-05 01:43:37'),(342,26,NULL,NULL,'2017-07-05 01:43:37'),(343,26,NULL,NULL,'2017-07-05 01:44:09'),(344,26,NULL,NULL,'2017-07-05 01:54:46'),(345,27,NULL,NULL,'2017-07-05 12:33:16'),(346,26,NULL,NULL,'2017-07-05 12:33:35'),(347,26,NULL,NULL,'2017-07-05 12:39:16'),(348,26,NULL,NULL,'2017-07-05 12:42:08'),(349,26,NULL,NULL,'2017-07-05 12:43:46'),(350,26,NULL,NULL,'2017-07-05 12:44:19'),(351,26,NULL,NULL,'2017-07-05 12:53:03'),(352,26,571,2,'2017-07-05 13:22:55'),(353,26,571,2,'2017-07-05 13:23:03'),(354,26,571,3,'2017-07-05 13:23:06'),(355,26,571,1,'2017-07-05 13:23:08'),(356,26,NULL,NULL,'2017-07-05 13:23:08'),(357,26,577,2,'2017-07-05 13:23:11'),(358,26,577,2,'2017-07-05 13:23:19'),(359,26,577,2,'2017-07-05 13:25:29'),(360,26,577,3,'2017-07-05 13:25:32'),(361,26,577,1,'2017-07-05 13:25:33'),(362,26,NULL,NULL,'2017-07-05 13:25:34'),(363,26,NULL,NULL,'2017-07-05 13:26:30'),(364,26,559,2,'2017-07-05 13:26:35'),(365,26,559,2,'2017-07-05 13:26:40'),(366,26,559,3,'2017-07-05 13:27:17'),(367,26,559,1,'2017-07-05 13:27:23'),(368,26,NULL,NULL,'2017-07-05 13:27:23'),(369,26,562,2,'2017-07-05 13:32:20'),(370,26,562,2,'2017-07-05 13:32:26'),(371,26,562,3,'2017-07-05 13:32:31'),(372,26,562,3,'2017-07-05 13:32:33'),(373,26,562,3,'2017-07-05 13:32:43'),(374,26,562,1,'2017-07-05 13:37:54'),(375,26,NULL,NULL,'2017-07-05 13:37:54'),(376,26,563,2,'2017-07-05 13:37:58'),(377,26,563,2,'2017-07-05 13:38:02'),(378,26,563,2,'2017-07-05 13:38:09'),(379,26,563,2,'2017-07-05 13:40:12'),(380,26,563,3,'2017-07-05 13:40:15'),(381,26,563,3,'2017-07-05 13:40:25'),(382,26,563,1,'2017-07-05 13:40:28'),(383,26,NULL,NULL,'2017-07-05 13:40:28'),(384,26,565,2,'2017-07-05 13:42:15'),(385,26,565,2,'2017-07-05 13:42:22'),(386,26,565,2,'2017-07-05 13:42:27'),(387,26,565,2,'2017-07-05 13:42:29'),(388,26,565,2,'2017-07-05 13:42:29'),(389,26,565,3,'2017-07-05 13:44:17'),(390,26,565,1,'2017-07-05 13:44:19'),(391,26,NULL,NULL,'2017-07-05 13:44:19'),(392,26,566,2,'2017-07-05 13:44:24'),(393,26,566,2,'2017-07-05 13:44:26'),(394,26,566,2,'2017-07-05 13:44:27'),(395,26,566,2,'2017-07-05 13:46:37'),(396,26,566,2,'2017-07-05 13:46:38'),(397,26,566,2,'2017-07-05 13:46:45'),(398,26,566,2,'2017-07-05 13:47:04'),(399,26,566,2,'2017-07-05 13:47:06'),(400,26,566,2,'2017-07-05 13:47:07'),(401,26,566,2,'2017-07-05 13:47:09'),(402,26,566,3,'2017-07-05 13:47:10'),(403,26,566,1,'2017-07-05 13:47:11'),(404,26,NULL,NULL,'2017-07-05 13:47:12'),(405,26,567,2,'2017-07-05 13:47:23'),(406,26,567,2,'2017-07-05 13:47:24'),(407,26,567,2,'2017-07-05 13:47:26'),(408,26,567,2,'2017-07-05 13:47:26'),(409,26,567,2,'2017-07-05 13:58:44'),(410,26,567,2,'2017-07-05 13:58:47'),(411,26,567,2,'2017-07-05 13:58:55'),(412,26,567,3,'2017-07-05 14:00:36'),(413,26,567,1,'2017-07-05 14:00:37'),(414,26,567,1,'2017-07-05 14:00:37'),(415,26,NULL,NULL,'2017-07-05 14:00:38'),(416,26,569,2,'2017-07-05 14:00:42'),(417,26,569,2,'2017-07-05 14:00:46'),(418,26,569,2,'2017-07-06 11:05:14'),(419,26,569,3,'2017-07-06 11:05:21'),(420,26,569,1,'2017-07-06 11:05:25'),(421,26,NULL,NULL,'2017-07-06 11:05:26'),(422,26,NULL,NULL,'2017-07-06 11:05:38'),(423,27,NULL,NULL,'2017-07-06 11:06:30'),(424,26,555,2,'2017-07-06 11:06:36'),(425,27,572,2,'2017-07-06 11:06:41'),(426,26,555,2,'2017-07-06 11:27:35'),(427,26,555,2,'2017-07-06 11:27:37'),(428,26,555,3,'2017-07-06 11:27:38'),(429,26,555,1,'2017-07-06 11:27:51'),(430,26,NULL,NULL,'2017-07-06 11:27:51'),(431,26,570,2,'2017-07-06 11:28:15'),(432,26,570,2,'2017-07-06 16:16:08'),(433,26,570,2,'2017-07-06 16:16:13'),(434,26,570,3,'2017-07-06 16:16:15'),(435,26,570,1,'2017-07-06 16:16:16'),(436,26,NULL,NULL,'2017-07-06 16:16:17'),(437,26,547,4,'2017-07-06 16:17:06'),(438,26,547,3,'2017-07-06 16:17:07'),(439,26,547,1,'2017-07-06 16:17:09'),(440,26,NULL,NULL,'2017-07-06 16:17:09'),(441,26,549,4,'2017-07-06 16:19:09'),(442,26,549,3,'2017-07-06 16:19:09'),(443,26,549,1,'2017-07-06 16:20:14'),(444,26,NULL,NULL,'2017-07-06 16:20:14'),(445,26,573,2,'2017-07-06 16:20:19'),(446,26,573,2,'2017-07-06 16:21:06'),(447,26,573,2,'2017-07-06 16:21:12'),(448,26,573,2,'2017-07-06 16:21:16'),(449,26,573,2,'2017-07-06 16:21:26'),(450,26,573,2,'2017-07-06 16:21:30'),(451,26,573,2,'2017-07-06 16:21:35'),(452,26,573,2,'2017-07-06 16:24:15'),(453,26,573,2,'2017-07-06 16:24:19'),(454,26,573,2,'2017-07-06 16:24:25'),(455,26,573,2,'2017-07-06 16:24:31'),(456,26,573,2,'2017-07-06 16:24:35'),(457,26,573,2,'2017-07-06 16:25:18'),(458,26,573,2,'2017-07-06 16:25:23'),(459,26,573,2,'2017-07-06 16:25:29'),(460,26,573,2,'2017-07-06 16:25:33'),(461,26,573,2,'2017-07-06 16:25:36'),(462,26,573,2,'2017-07-06 16:25:44'),(463,26,573,2,'2017-07-06 16:25:47'),(464,26,573,2,'2017-07-06 16:27:38'),(465,26,573,2,'2017-07-06 16:27:45'),(466,26,573,2,'2017-07-06 16:27:49'),(467,26,573,2,'2017-07-06 16:28:06'),(468,26,573,2,'2017-07-06 16:28:13'),(469,26,573,2,'2017-07-06 16:28:56'),(470,26,573,2,'2017-07-06 16:29:03'),(471,26,573,2,'2017-07-06 16:29:07'),(472,26,573,2,'2017-07-06 16:30:11'),(473,26,573,2,'2017-07-06 16:30:16'),(474,26,573,2,'2017-07-06 16:30:20'),(475,26,573,2,'2017-07-06 16:30:23'),(476,26,573,2,'2017-07-06 16:30:35'),(477,26,573,2,'2017-07-06 16:30:39'),(478,26,573,2,'2017-07-06 16:33:22'),(479,26,573,2,'2017-07-06 16:33:27'),(480,26,573,2,'2017-07-06 16:33:33'),(481,26,573,2,'2017-07-06 16:33:42'),(482,26,573,2,'2017-07-06 16:33:43'),(483,26,573,2,'2017-07-06 16:34:23'),(484,26,573,2,'2017-07-06 16:34:38'),(485,26,573,2,'2017-07-06 16:34:51'),(486,26,573,2,'2017-07-06 16:34:53'),(487,26,573,2,'2017-07-06 16:35:53'),(488,26,573,2,'2017-07-06 16:35:59'),(489,26,573,2,'2017-07-06 16:36:03'),(490,26,573,2,'2017-07-06 16:36:07'),(491,26,573,2,'2017-07-06 16:36:13'),(492,26,573,2,'2017-07-06 16:36:18'),(493,26,573,2,'2017-07-06 16:36:21'),(494,26,573,2,'2017-07-06 16:36:31'),(495,26,573,2,'2017-07-06 16:36:35'),(496,26,573,2,'2017-07-06 16:36:39'),(497,26,573,2,'2017-07-06 16:36:42'),(498,26,573,2,'2017-07-06 16:36:45'),(499,26,573,2,'2017-07-06 16:36:48'),(500,26,573,2,'2017-07-06 16:37:20'),(501,26,573,2,'2017-07-06 16:37:28'),(502,26,573,2,'2017-07-06 16:37:43'),(503,26,573,2,'2017-07-06 16:37:49'),(504,26,573,2,'2017-07-06 16:38:03'),(505,26,573,2,'2017-07-06 16:38:07'),(506,26,573,2,'2017-07-06 16:38:12'),(507,26,573,2,'2017-07-06 16:39:13'),(508,26,573,3,'2017-07-06 16:39:19'),(509,26,573,3,'2017-07-06 16:39:21'),(510,26,573,1,'2017-07-06 16:39:28'),(511,26,NULL,NULL,'2017-07-06 16:39:29'),(512,26,541,2,'2017-07-06 16:52:50'),(513,26,541,3,'2017-07-06 16:52:52'),(514,26,541,3,'2017-07-06 16:53:43'),(515,26,541,3,'2017-07-06 16:53:48'),(516,26,541,3,'2017-07-06 16:53:59'),(517,26,541,3,'2017-07-06 16:54:07'),(518,26,541,3,'2017-07-06 16:54:14'),(519,26,541,3,'2017-07-06 16:54:19'),(520,26,541,3,'2017-07-06 16:54:25'),(521,26,541,3,'2017-07-06 16:54:28'),(522,26,541,3,'2017-07-06 16:54:33'),(523,26,541,3,'2017-07-06 16:54:44'),(524,26,541,3,'2017-07-06 16:54:58'),(525,26,541,3,'2017-07-06 16:56:04'),(526,26,541,3,'2017-07-06 16:56:13'),(527,26,541,3,'2017-07-06 16:56:23'),(528,26,541,3,'2017-07-06 16:56:32'),(529,26,541,3,'2017-07-06 16:56:41'),(530,26,541,3,'2017-07-06 16:57:02'),(531,26,541,3,'2017-07-06 16:57:06'),(532,26,541,3,'2017-07-06 16:57:11'),(533,26,541,3,'2017-07-06 16:57:15'),(534,26,541,3,'2017-07-06 16:57:19'),(535,26,541,3,'2017-07-06 16:57:34'),(536,26,541,3,'2017-07-06 16:57:40'),(537,26,541,3,'2017-07-06 16:57:53'),(538,26,541,3,'2017-07-06 16:58:08'),(539,26,541,3,'2017-07-06 16:58:09'),(540,26,541,3,'2017-07-06 16:58:11'),(541,26,541,3,'2017-07-06 16:58:15'),(542,26,541,3,'2017-07-06 16:58:16'),(543,26,541,3,'2017-07-06 16:58:16'),(544,26,541,3,'2017-07-06 16:58:17'),(545,26,541,3,'2017-07-06 16:58:17'),(546,26,541,3,'2017-07-06 16:59:07'),(547,26,541,3,'2017-07-06 16:59:11'),(548,26,541,3,'2017-07-06 16:59:17'),(549,26,541,3,'2017-07-06 16:59:26'),(550,26,541,3,'2017-07-06 16:59:38'),(551,26,541,3,'2017-07-06 16:59:43'),(552,26,541,3,'2017-07-06 16:59:48'),(553,26,541,3,'2017-07-06 16:59:50'),(554,26,541,3,'2017-07-06 16:59:50'),(555,26,541,3,'2017-07-06 16:59:50'),(556,26,541,3,'2017-07-06 16:59:50'),(557,26,541,3,'2017-07-06 16:59:57'),(558,26,541,3,'2017-07-06 17:00:05'),(559,26,541,3,'2017-07-06 17:00:37'),(560,26,541,3,'2017-07-06 17:00:40'),(561,26,541,3,'2017-07-06 17:00:49'),(562,26,541,3,'2017-07-06 17:00:54'),(563,26,541,3,'2017-07-06 17:00:59'),(564,26,541,1,'2017-07-06 17:01:07'),(565,26,NULL,NULL,'2017-07-06 17:01:08'),(566,26,NULL,NULL,'2017-07-09 12:47:33'),(567,26,574,2,'2017-07-09 12:47:40'),(568,26,574,3,'2017-07-09 12:47:42'),(569,26,574,1,'2017-07-09 12:47:46'),(570,26,NULL,NULL,'2017-07-09 12:47:47'),(571,26,NULL,NULL,'2017-07-09 12:48:05'),(572,26,576,2,'2017-07-09 12:48:16'),(573,26,576,3,'2017-07-09 12:48:18'),(574,26,576,1,'2017-07-09 12:48:20'),(575,26,NULL,NULL,'2017-07-09 12:48:20'),(576,26,NULL,NULL,'2017-07-15 20:35:11'),(577,26,575,2,'2017-07-15 20:38:25'),(578,26,575,2,'2017-07-15 20:38:27'),(579,26,575,2,'2017-07-15 20:38:33'),(580,26,575,2,'2017-07-15 20:38:37'),(581,26,575,3,'2017-07-15 20:38:41'),(582,26,575,1,'2017-07-15 20:38:43'),(583,26,NULL,NULL,'2017-07-15 20:38:43'),(584,26,575,1,'2017-07-15 20:50:14'),(585,26,NULL,NULL,'2017-07-15 20:50:15'),(586,26,578,2,'2017-07-15 20:50:18'),(587,26,NULL,NULL,'2017-07-15 20:50:21'),(588,26,578,2,'2017-07-15 20:50:22'),(589,26,578,3,'2017-07-15 20:50:24'),(590,26,578,1,'2017-07-15 20:50:25'),(591,26,NULL,NULL,'2017-07-15 20:50:25'),(592,26,579,2,'2017-07-15 20:56:22'),(593,26,579,3,'2017-07-15 20:56:31'),(594,26,579,1,'2017-07-15 20:56:32'),(595,26,NULL,NULL,'2017-07-15 20:56:33'),(596,26,NULL,NULL,'2017-07-18 18:46:50'),(597,26,533,2,'2017-07-18 18:46:54'),(598,26,533,2,'2017-07-18 18:46:56'),(599,26,NULL,NULL,'2017-07-18 18:46:56'),(600,26,533,2,'2017-07-18 18:47:11'),(601,26,533,2,'2017-07-18 18:47:18'),(602,26,533,2,'2017-07-18 18:47:20'),(603,26,533,3,'2017-07-18 18:47:23'),(604,26,533,1,'2017-07-18 18:47:26'),(605,26,NULL,NULL,'2017-07-18 18:47:26'),(606,26,NULL,NULL,'2017-07-18 19:01:36'),(607,26,535,2,'2017-07-18 19:01:40'),(608,26,535,3,'2017-07-18 19:01:45'),(609,26,535,1,'2017-07-18 19:01:46'),(610,26,NULL,NULL,'2017-07-18 19:01:46'),(611,26,535,3,'2017-07-18 19:01:49'),(612,26,535,1,'2017-07-18 19:01:51'),(613,26,NULL,NULL,'2017-07-18 19:01:51'),(614,26,NULL,NULL,'2017-07-20 18:32:55'),(615,26,NULL,NULL,'2017-07-20 18:38:50'),(616,26,NULL,NULL,'2017-07-20 18:39:01'),(617,26,NULL,NULL,'2017-07-20 18:39:06'),(618,26,NULL,NULL,'2017-07-20 18:39:11'),(619,26,NULL,NULL,'2017-07-20 18:39:18'),(620,26,NULL,NULL,'2017-07-20 18:39:27'),(621,26,NULL,NULL,'2017-07-20 18:39:35'),(622,26,NULL,NULL,'2017-07-20 18:39:45'),(623,26,NULL,NULL,'2017-07-20 18:39:50'),(624,26,NULL,NULL,'2017-07-20 18:39:53'),(625,26,NULL,NULL,'2017-07-20 18:39:58'),(626,26,NULL,NULL,'2017-07-20 18:40:01'),(627,26,NULL,NULL,'2017-07-20 18:40:06'),(628,26,NULL,NULL,'2017-07-20 18:40:35'),(629,26,NULL,NULL,'2017-07-20 18:40:39'),(630,26,NULL,NULL,'2017-07-20 18:41:50'),(631,26,NULL,NULL,'2017-07-20 19:37:04'),(632,26,NULL,NULL,'2017-07-20 19:37:28'),(633,26,NULL,NULL,'2017-07-20 19:37:34'),(634,26,NULL,NULL,'2017-07-20 19:38:40'),(635,26,NULL,NULL,'2017-07-20 19:39:03'),(636,26,NULL,NULL,'2017-07-20 19:39:11'),(637,26,NULL,NULL,'2017-07-20 19:39:15'),(638,26,NULL,NULL,'2017-07-20 19:39:22'),(639,26,NULL,NULL,'2017-07-20 19:39:28'),(640,26,NULL,NULL,'2017-07-20 19:39:37'),(641,26,NULL,NULL,'2017-07-20 19:39:56'),(642,26,NULL,NULL,'2017-07-20 19:40:08'),(643,26,NULL,NULL,'2017-07-20 19:40:18'),(644,26,NULL,NULL,'2017-07-20 19:40:24'),(645,26,NULL,NULL,'2017-07-20 19:40:32'),(646,26,NULL,NULL,'2017-07-20 19:40:50'),(647,26,NULL,NULL,'2017-07-20 19:46:42'),(648,26,NULL,NULL,'2017-07-20 19:47:11'),(649,26,NULL,NULL,'2017-07-20 19:48:35'),(650,26,NULL,NULL,'2017-07-20 19:48:39'),(651,26,NULL,NULL,'2017-07-20 19:48:51'),(652,26,NULL,NULL,'2017-07-20 19:54:18'),(653,26,NULL,NULL,'2017-07-20 19:54:34'),(654,26,NULL,NULL,'2017-07-20 19:54:40'),(655,26,NULL,NULL,'2017-07-20 19:57:36'),(656,26,NULL,NULL,'2017-07-20 19:57:59'),(657,26,NULL,NULL,'2017-07-20 19:58:06'),(658,26,NULL,NULL,'2017-07-20 19:58:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=581 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`,`enEspera`) values (533,27,3,1,'18:03:33',1),(534,31,4,0,'18:03:34',0),(535,29,3,1,'18:03:38',0),(536,30,3,0,'18:03:40',0),(537,27,4,0,'18:03:41',0),(538,31,5,0,'18:03:42',0),(539,30,4,0,'18:03:44',0),(540,29,4,1,'18:03:45',0),(541,27,5,1,'18:21:14',1),(542,27,6,1,'18:21:16',0),(543,29,5,1,'18:21:18',0),(544,30,5,1,'18:21:20',0),(545,31,6,1,'18:21:21',0),(546,31,7,1,'18:21:22',0),(547,30,6,1,'18:21:23',1),(548,29,6,1,'18:21:24',0),(549,27,7,1,'18:21:25',1),(550,27,8,1,'16:07:31',0),(551,27,9,1,'16:08:44',0),(552,30,7,1,'16:10:12',0),(553,29,7,1,'16:10:20',0),(554,31,8,1,'16:10:40',0),(555,27,10,1,'10:57:22',0),(556,29,8,1,'10:57:24',0),(557,30,8,1,'10:57:25',0),(558,31,9,1,'10:57:26',0),(559,27,11,1,'01:40:19',0),(560,29,9,1,'01:40:21',0),(561,29,10,1,'01:40:21',0),(562,30,9,1,'01:40:23',0),(563,31,10,1,'01:40:26',0),(564,29,11,1,'01:40:47',0),(565,30,10,1,'01:41:05',0),(566,27,12,1,'01:41:07',0),(567,31,11,1,'01:41:12',0),(568,29,12,1,'01:41:24',0),(569,27,13,1,'01:41:30',0),(570,27,14,1,'12:38:00',0),(571,29,13,1,'12:38:02',0),(572,30,11,2,'12:38:03',0),(573,31,12,1,'12:38:05',0),(574,30,12,1,'12:39:00',0),(575,31,13,1,'12:39:02',0),(576,30,13,1,'12:39:06',0),(577,29,14,1,'12:39:09',0),(578,27,15,1,'20:49:58',0),(579,30,14,1,'20:50:02',0),(580,31,14,0,'20:50:06',0);

/*Table structure for table `Usuario` */

DROP TABLE IF EXISTS `Usuario`;

CREATE TABLE `Usuario` (
  `usuarioId` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fechaDeAlta` datetime DEFAULT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  `perfil` int(11) DEFAULT '3',
  `movimiento` int(2) DEFAULT NULL,
  PRIMARY KEY (`usuarioId`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `Usuario` */

insert  into `Usuario`(`usuarioId`,`nombre`,`apellido`,`fechaDeAlta`,`contrasenia`,`perfil`,`movimiento`) values (21,'Sergio','Brandolin','2017-04-18 23:18:03','321',1,NULL),(23,'Turnos',NULL,'2017-06-07 11:23:00','123',3,NULL),(24,'Monitor',NULL,'2017-06-07 11:23:00','',4,NULL),(26,'Pablo','Oporto','2017-06-20 12:41:27','123',2,2),(27,'Emmanuel','Frati','2017-06-20 12:41:40','123',2,NULL),(28,'Gabriel','Oporto','2017-06-20 12:42:02','123',2,NULL);

/*Table structure for table `cola_empleado` */

DROP TABLE IF EXISTS `cola_empleado`;

CREATE TABLE `cola_empleado` (
  `idUnionCoEm` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idUnionCoEm`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

/*Data for the table `cola_empleado` */

insert  into `cola_empleado`(`idUnionCoEm`,`idCola`,`idEmpleado`) values (53,30,27),(56,31,27),(61,29,27),(62,29,26),(63,27,26),(64,27,28);

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
