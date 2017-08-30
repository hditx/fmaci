/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.26-MariaDB-1 : Database - Farmacentro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`Farmacentro` /*!40100 DEFAULT CHARACTER SET utf8 */;

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

insert  into `Cola`(`idCola`,`nombreCola`,`hijoDe`,`siguiente`,`letra`,`fechaCreacion`) values (27,'Particular',NULL,6,'A','2017-06-20 12:43:10'),(29,'Red',NULL,4,'B','2017-06-20 12:43:38'),(30,'Osde',NULL,5,'C','2017-06-20 12:44:03'),(31,'PAMI',NULL,6,'D','2017-06-20 12:44:21');

/*Table structure for table `Empleado` */

DROP TABLE IF EXISTS `Empleado`;

CREATE TABLE `Empleado` (
  `idEmpleado` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fechaDeAlta` datetime DEFAULT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `Empleado` */

insert  into `Empleado`(`idEmpleado`,`nombre`,`apellido`,`fechaDeAlta`,`contrasenia`) values (20,'Pablo','Oporto','2017-04-18 23:17:47','123'),(21,'Sergio','Brandolin','2017-04-18 23:18:03','3043aa4a83b0934982956a90828140cb834869135b5f294938865de12e036de440a330e1e8529bec15ddd59f18d1161a97bfec110d2622680f2c714a737d7061'),(22,'Emmanuel','Frati','2017-04-21 14:08:56',NULL);

/*Table structure for table `HistorialEstado` */

DROP TABLE IF EXISTS `HistorialEstado`;

CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (220,159,'2017-08-20 16:28:49',2,26),(221,163,'2017-08-20 16:29:02',2,27),(222,159,'2017-08-20 16:29:17',2,26),(223,159,'2017-08-20 16:29:20',3,26),(224,159,'2017-08-20 16:29:23',1,26),(225,163,'2017-08-20 16:29:33',3,27),(226,163,'2017-08-20 16:29:34',1,27),(227,160,'2017-08-20 16:50:28',2,26),(228,160,'2017-08-20 16:50:31',3,26),(229,160,'2017-08-20 16:52:54',3,26),(230,160,'2017-08-20 16:54:00',3,26),(231,160,'2017-08-20 16:55:24',3,26),(232,160,'2017-08-20 16:55:42',3,26),(233,160,'2017-08-20 16:55:50',3,26),(234,160,'2017-08-20 16:56:01',3,26),(235,160,'2017-08-20 16:56:06',3,26),(236,160,'2017-08-20 16:57:56',3,26),(237,160,'2017-08-20 16:58:25',3,26),(238,160,'2017-08-20 16:58:40',3,26),(239,160,'2017-08-20 16:58:41',3,26),(240,160,'2017-08-20 17:00:26',3,26),(241,160,'2017-08-20 17:00:29',3,26),(242,160,'2017-08-20 17:00:44',3,26),(243,160,'2017-08-20 17:00:45',3,26),(244,160,'2017-08-20 17:01:23',3,26),(245,160,'2017-08-20 17:03:50',3,26),(246,160,'2017-08-20 17:03:50',3,26),(247,160,'2017-08-20 17:04:18',3,26),(248,160,'2017-08-20 17:04:58',3,26),(249,160,'2017-08-20 17:10:01',3,26),(250,160,'2017-08-20 17:10:20',3,26),(251,160,'2017-08-20 17:10:26',3,26),(252,160,'2017-08-20 17:11:41',3,26),(253,160,'2017-08-20 17:12:37',3,26),(254,160,'2017-08-20 17:13:24',3,26),(255,160,'2017-08-20 17:14:06',3,26),(256,160,'2017-08-20 17:14:14',3,26),(257,160,'2017-08-20 17:14:30',3,26),(258,160,'2017-08-20 17:14:34',3,26),(259,160,'2017-08-20 17:14:59',3,26),(260,160,'2017-08-20 17:15:00',3,26),(261,160,'2017-08-20 17:15:26',1,26),(262,161,'2017-08-20 17:15:29',2,26),(263,161,'2017-08-20 17:15:31',3,26),(264,161,'2017-08-20 17:15:36',1,26),(265,164,'2017-08-20 17:15:39',2,26),(266,164,'2017-08-20 17:15:41',3,26),(267,164,'2017-08-20 17:15:55',3,26),(268,164,'2017-08-20 17:16:08',3,26),(269,164,'2017-08-20 17:16:09',3,26),(270,164,'2017-08-20 17:16:15',3,26),(271,164,'2017-08-20 17:16:18',3,26),(272,164,'2017-08-20 17:16:34',1,26),(273,165,'2017-08-20 17:21:02',2,26),(274,165,'2017-08-20 17:21:10',3,26),(275,165,'2017-08-20 17:21:14',1,26),(276,166,'2017-08-20 17:35:26',2,26),(277,166,'2017-08-20 17:35:33',3,26),(278,166,'2017-08-20 17:35:35',1,26),(279,167,'2017-08-20 21:08:57',2,26),(280,167,'2017-08-25 12:09:18',2,26),(281,167,'2017-08-25 12:09:21',3,26),(282,167,'2017-08-25 12:09:22',1,26),(283,162,'2017-08-25 12:09:31',2,26),(284,162,'2017-08-25 12:23:23',3,26),(285,162,'2017-08-25 12:24:30',1,26),(286,162,'2017-08-25 12:24:58',1,26),(287,168,'2017-08-25 12:25:01',2,26),(288,168,'2017-08-25 12:25:06',3,26),(289,168,'2017-08-25 12:25:10',1,26),(290,169,'2017-08-25 12:33:08',2,26),(291,169,'2017-08-25 12:33:18',3,26),(292,169,'2017-08-25 12:33:19',1,26),(293,173,'2017-08-25 12:34:01',2,26),(294,173,'2017-08-25 12:34:59',2,26),(295,173,'2017-08-25 12:35:03',3,26),(296,173,'2017-08-25 12:35:06',1,26),(297,170,'2017-08-25 12:35:08',2,26),(298,170,'2017-08-25 12:35:10',3,26),(299,170,'2017-08-25 12:35:11',1,26),(300,174,'2017-08-25 12:35:40',2,26),(301,174,'2017-08-25 12:35:51',3,26),(302,174,'2017-08-25 12:35:55',1,26);

/*Table structure for table `SesionEmpleado` */

DROP TABLE IF EXISTS `SesionEmpleado`;

CREATE TABLE `SesionEmpleado` (
  `idSesion` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `idTurno` int(10) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `ultimaSesion` datetime DEFAULT NULL,
  PRIMARY KEY (`idSesion`)
) ENGINE=InnoDB AUTO_INCREMENT=1030 DEFAULT CHARSET=latin1;

/*Data for the table `SesionEmpleado` */

insert  into `SesionEmpleado`(`idSesion`,`idUsuario`,`idTurno`,`estado`,`ultimaSesion`) values (918,26,NULL,NULL,'2017-08-20 16:28:47'),(919,26,159,2,'2017-08-20 16:28:49'),(920,27,NULL,NULL,'2017-08-20 16:28:58'),(921,27,163,2,'2017-08-20 16:29:01'),(922,27,163,2,'2017-08-20 16:29:02'),(923,26,159,2,'2017-08-20 16:29:11'),(924,26,159,2,'2017-08-20 16:29:17'),(925,26,159,3,'2017-08-20 16:29:20'),(926,26,159,1,'2017-08-20 16:29:23'),(927,26,NULL,NULL,'2017-08-20 16:29:23'),(928,27,163,2,'2017-08-20 16:29:32'),(929,27,163,3,'2017-08-20 16:29:33'),(930,27,163,1,'2017-08-20 16:29:34'),(931,27,NULL,NULL,'2017-08-20 16:29:34'),(932,26,NULL,NULL,'2017-08-20 16:50:26'),(933,26,160,2,'2017-08-20 16:50:28'),(934,26,160,3,'2017-08-20 16:50:31'),(935,26,160,3,'2017-08-20 16:52:54'),(936,26,160,3,'2017-08-20 16:54:00'),(937,26,160,3,'2017-08-20 16:55:24'),(938,26,160,3,'2017-08-20 16:55:42'),(939,26,160,3,'2017-08-20 16:55:50'),(940,26,160,3,'2017-08-20 16:56:01'),(941,26,160,3,'2017-08-20 16:56:06'),(942,26,160,3,'2017-08-20 16:57:56'),(943,26,160,3,'2017-08-20 16:58:25'),(944,26,160,3,'2017-08-20 16:58:40'),(945,26,160,3,'2017-08-20 16:58:41'),(946,26,160,3,'2017-08-20 17:00:26'),(947,26,160,3,'2017-08-20 17:00:29'),(948,26,160,3,'2017-08-20 17:00:44'),(949,26,160,3,'2017-08-20 17:00:45'),(950,26,160,3,'2017-08-20 17:01:23'),(951,26,160,3,'2017-08-20 17:03:49'),(952,26,160,3,'2017-08-20 17:03:50'),(953,26,160,3,'2017-08-20 17:04:18'),(954,26,160,3,'2017-08-20 17:04:58'),(955,26,160,3,'2017-08-20 17:10:01'),(956,26,160,3,'2017-08-20 17:10:20'),(957,26,160,3,'2017-08-20 17:10:26'),(958,26,160,3,'2017-08-20 17:11:41'),(959,26,160,3,'2017-08-20 17:12:37'),(960,26,160,3,'2017-08-20 17:13:24'),(961,26,160,3,'2017-08-20 17:14:06'),(962,26,160,3,'2017-08-20 17:14:14'),(963,26,160,3,'2017-08-20 17:14:30'),(964,26,160,3,'2017-08-20 17:14:34'),(965,26,160,3,'2017-08-20 17:14:59'),(966,26,160,3,'2017-08-20 17:15:00'),(967,26,160,1,'2017-08-20 17:15:26'),(968,26,NULL,NULL,'2017-08-20 17:15:26'),(969,26,161,2,'2017-08-20 17:15:29'),(970,26,161,3,'2017-08-20 17:15:31'),(971,26,161,1,'2017-08-20 17:15:35'),(972,26,NULL,NULL,'2017-08-20 17:15:36'),(973,26,164,2,'2017-08-20 17:15:39'),(974,26,164,3,'2017-08-20 17:15:41'),(975,26,164,3,'2017-08-20 17:15:54'),(976,26,164,3,'2017-08-20 17:16:07'),(977,26,164,3,'2017-08-20 17:16:09'),(978,26,164,3,'2017-08-20 17:16:14'),(979,26,164,3,'2017-08-20 17:16:18'),(980,26,164,1,'2017-08-20 17:16:34'),(981,26,NULL,NULL,'2017-08-20 17:16:34'),(982,26,NULL,NULL,'2017-08-20 17:20:52'),(983,26,165,2,'2017-08-20 17:21:02'),(984,26,165,3,'2017-08-20 17:21:10'),(985,26,165,1,'2017-08-20 17:21:14'),(986,26,NULL,NULL,'2017-08-20 17:21:15'),(987,26,NULL,NULL,'2017-08-20 17:35:22'),(988,26,166,2,'2017-08-20 17:35:26'),(989,26,166,3,'2017-08-20 17:35:33'),(990,26,166,1,'2017-08-20 17:35:34'),(991,26,NULL,NULL,'2017-08-20 17:35:35'),(992,26,NULL,NULL,'2017-08-20 21:08:53'),(993,26,167,2,'2017-08-20 21:08:56'),(994,26,167,2,'2017-08-25 12:09:18'),(995,26,167,3,'2017-08-25 12:09:21'),(996,26,167,1,'2017-08-25 12:09:22'),(997,26,NULL,NULL,'2017-08-25 12:09:22'),(998,26,NULL,NULL,'2017-08-25 12:09:27'),(999,26,162,2,'2017-08-25 12:09:31'),(1000,26,162,3,'2017-08-25 12:23:22'),(1001,26,162,1,'2017-08-25 12:24:30'),(1002,26,NULL,NULL,'2017-08-25 12:24:30'),(1003,26,162,1,'2017-08-25 12:24:57'),(1004,26,NULL,NULL,'2017-08-25 12:24:58'),(1005,26,168,2,'2017-08-25 12:25:01'),(1006,26,168,3,'2017-08-25 12:25:06'),(1007,26,168,1,'2017-08-25 12:25:10'),(1008,26,NULL,NULL,'2017-08-25 12:25:10'),(1009,26,NULL,NULL,'2017-08-25 12:32:18'),(1010,26,169,2,'2017-08-25 12:33:08'),(1011,26,169,3,'2017-08-25 12:33:18'),(1012,26,169,1,'2017-08-25 12:33:19'),(1013,26,NULL,NULL,'2017-08-25 12:33:19'),(1014,26,173,2,'2017-08-25 12:34:01'),(1015,26,173,2,'2017-08-25 12:34:58'),(1016,26,173,3,'2017-08-25 12:35:03'),(1017,26,173,1,'2017-08-25 12:35:06'),(1018,26,NULL,NULL,'2017-08-25 12:35:06'),(1019,26,170,2,'2017-08-25 12:35:08'),(1020,26,170,3,'2017-08-25 12:35:09'),(1021,26,170,1,'2017-08-25 12:35:11'),(1022,26,NULL,NULL,'2017-08-25 12:35:11'),(1023,26,174,2,'2017-08-25 12:35:40'),(1024,26,174,3,'2017-08-25 12:35:50'),(1025,26,174,1,'2017-08-25 12:35:54'),(1026,26,NULL,NULL,'2017-08-25 12:35:55'),(1027,26,NULL,NULL,'2017-08-28 10:14:27'),(1028,26,NULL,NULL,'2017-08-28 10:15:54'),(1029,26,NULL,NULL,'2017-08-28 10:17:04');

/*Table structure for table `Turno` */

DROP TABLE IF EXISTS `Turno`;

CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  `atendido` int(2) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `enEspera` int(2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horaModificacion` time DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`,`enEspera`,`fecha`,`horaModificacion`) values (159,27,10,1,'16:28:31',0,'2017-08-20','16:29:23'),(160,27,11,1,'16:28:31',0,'2017-08-20','17:15:26'),(161,29,2,1,'16:28:33',0,'2017-08-20','17:15:36'),(162,30,2,1,'16:28:34',0,'2017-08-20','12:24:57'),(163,31,3,1,'16:28:36',0,'2017-08-20','16:29:34'),(164,29,3,1,'16:28:37',0,'2017-08-20','17:16:34'),(165,27,12,1,'16:28:38',0,'2017-08-20','17:21:14'),(166,27,13,1,'17:20:42',0,'2017-08-20','17:35:35'),(167,27,14,1,'17:20:43',0,'2017-08-20','12:09:22'),(168,27,2,1,'12:24:37',0,'2017-08-25','12:25:10'),(169,27,3,1,'12:24:37',0,'2017-08-25','12:33:19'),(170,27,4,1,'12:24:38',0,'2017-08-25','12:35:11'),(171,27,5,0,'12:24:39',0,'2017-08-25','12:24:39'),(172,29,2,0,'12:24:39',0,'2017-08-25','12:24:39'),(173,31,2,1,'12:24:41',0,'2017-08-25','12:35:06'),(174,31,3,1,'12:24:42',0,'2017-08-25','12:35:55'),(175,31,4,0,'12:24:43',0,'2017-08-25','12:24:43'),(176,29,3,0,'12:24:44',0,'2017-08-25','12:24:44'),(177,30,2,0,'12:24:45',0,'2017-08-25','12:24:45'),(178,30,3,0,'12:24:47',0,'2017-08-25','12:24:47'),(179,30,4,0,'12:24:49',0,'2017-08-25','12:24:49'),(180,31,5,0,'12:24:51',0,'2017-08-25','12:24:51');

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

insert  into `Usuario`(`usuarioId`,`nombre`,`apellido`,`fechaDeAlta`,`contrasenia`,`perfil`,`movimiento`) values (21,'Sergio','Brandolin','2017-04-18 23:18:03','321',1,NULL),(23,'Turnos',NULL,'2017-06-07 11:23:00','',3,NULL),(24,'Monitor',NULL,'2017-06-07 11:23:00','',4,NULL),(26,'Pablo','Oporto','2017-06-20 12:41:27','',2,0),(27,'Emmanuel','Frati','2017-06-20 12:41:40','123',2,0),(28,'Gabriel','Oporto','2017-06-20 12:42:02','123',2,NULL);

/*Table structure for table `Video` */

DROP TABLE IF EXISTS `Video`;

CREATE TABLE `Video` (
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Video` */

insert  into `Video`(`nombre`) values ('blackjack.mp4');

/*Table structure for table `cola_empleado` */

DROP TABLE IF EXISTS `cola_empleado`;

CREATE TABLE `cola_empleado` (
  `idUnionCoEm` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idUnionCoEm`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

/*Data for the table `cola_empleado` */

insert  into `cola_empleado`(`idUnionCoEm`,`idCola`,`idEmpleado`) values (56,31,27),(63,27,26),(64,27,28),(65,30,27),(66,29,27),(67,29,26);

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
