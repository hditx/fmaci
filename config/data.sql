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

insert  into `Cola`(`idCola`,`nombreCola`,`hijoDe`,`siguiente`,`letra`,`fechaCreacion`) values (27,'Particular',NULL,30,'A','2017-06-20 12:43:10'),(29,'Red',NULL,21,'B','2017-06-20 12:43:38'),(30,'Osde',NULL,16,'C','2017-06-20 12:44:03'),(31,'PAMI',NULL,22,'D','2017-06-20 12:44:21');

/*Table structure for table `Empleado` */

DROP TABLE IF EXISTS `Empleado`;

CREATE TABLE `Empleado` (
  `idEmpleado` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fechaDeAlta` datetime DEFAULT NULL,
  `dni` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `Empleado` */

insert  into `Empleado`(`idEmpleado`,`nombre`,`apellido`,`fechaDeAlta`,`dni`) values (20,'Pablo','Oporto','2017-04-18 23:17:47','123'),(21,'Sergio','Brandolin','2017-04-18 23:18:03','3043aa4a83b0934982956a90828140cb834869135b5f294938865de12e036de440a330e1e8529bec15ddd59f18d1161a97bfec110d2622680f2c714a737d7061'),(22,'Emmanuel','Frati','2017-04-21 14:08:56',NULL);

/*Table structure for table `HistorialEstado` */

DROP TABLE IF EXISTS `HistorialEstado`;

CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=453 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (438,265,'2017-09-19 17:32:40',2,26),(439,266,'2017-09-19 17:33:07',2,27),(440,265,'2017-09-19 17:33:15',2,26),(441,266,'2017-09-19 17:33:23',2,27),(442,266,'2017-09-19 17:33:29',3,27),(443,266,'2017-09-19 17:33:34',1,27),(444,265,'2017-09-19 17:33:59',3,26),(445,265,'2017-09-19 17:34:06',1,26),(446,265,'2017-09-24 22:50:33',1,26),(447,272,'2017-09-26 11:59:13',2,26),(448,272,'2017-09-26 11:59:30',3,26),(449,272,'2017-09-26 11:59:38',1,26),(450,275,'2017-09-26 12:00:43',2,26),(451,275,'2017-09-26 12:00:45',3,26),(452,275,'2017-09-26 12:01:08',1,26);

/*Table structure for table `SesionEmpleado` */

DROP TABLE IF EXISTS `SesionEmpleado`;

CREATE TABLE `SesionEmpleado` (
  `idSesion` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `idTurno` int(10) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `ultimaSesion` datetime DEFAULT NULL,
  PRIMARY KEY (`idSesion`)
) ENGINE=InnoDB AUTO_INCREMENT=1333 DEFAULT CHARSET=latin1;

/*Data for the table `SesionEmpleado` */

insert  into `SesionEmpleado`(`idSesion`,`idUsuario`,`idTurno`,`estado`,`ultimaSesion`) values (1291,26,NULL,NULL,'2017-09-19 17:32:36'),(1292,26,265,2,'2017-09-19 17:32:40'),(1293,27,NULL,NULL,'2017-09-19 17:33:04'),(1294,27,266,2,'2017-09-19 17:33:07'),(1295,26,265,2,'2017-09-19 17:33:15'),(1296,27,266,2,'2017-09-19 17:33:23'),(1297,27,266,3,'2017-09-19 17:33:29'),(1298,27,266,1,'2017-09-19 17:33:33'),(1299,27,NULL,NULL,'2017-09-19 17:33:34'),(1300,26,265,3,'2017-09-19 17:33:59'),(1301,26,265,1,'2017-09-19 17:34:06'),(1302,26,NULL,NULL,'2017-09-19 17:34:06'),(1303,26,265,1,'2017-09-24 22:50:33'),(1304,26,NULL,NULL,'2017-09-24 22:50:33'),(1305,26,NULL,NULL,'2017-09-24 22:50:40'),(1306,26,NULL,NULL,'2017-09-25 13:21:47'),(1307,26,NULL,NULL,'2017-09-26 11:58:33'),(1308,26,272,2,'2017-09-26 11:59:13'),(1309,26,272,3,'2017-09-26 11:59:30'),(1310,26,272,1,'2017-09-26 11:59:38'),(1311,26,NULL,NULL,'2017-09-26 11:59:38'),(1312,26,275,2,'2017-09-26 12:00:43'),(1313,26,275,3,'2017-09-26 12:00:45'),(1314,26,275,1,'2017-09-26 12:01:07'),(1315,26,NULL,NULL,'2017-09-26 12:01:08'),(1316,26,NULL,NULL,'2017-09-26 12:10:42'),(1317,26,NULL,NULL,'2017-09-26 12:12:15'),(1318,27,NULL,NULL,'2017-09-27 12:43:21'),(1319,27,NULL,NULL,'2017-09-27 12:43:40'),(1320,28,NULL,NULL,'2017-09-27 12:43:46'),(1321,28,NULL,NULL,'2017-09-27 12:44:11'),(1322,28,NULL,NULL,'2017-09-27 12:44:12'),(1323,28,NULL,NULL,'2017-09-27 12:44:12'),(1324,28,NULL,NULL,'2017-09-27 12:44:12'),(1325,28,NULL,NULL,'2017-09-27 12:44:43'),(1326,28,NULL,NULL,'2017-09-27 12:44:48'),(1327,27,NULL,NULL,'2017-09-27 12:45:13'),(1328,27,NULL,NULL,'2017-09-27 12:45:16'),(1329,26,NULL,NULL,'2017-09-27 12:45:23'),(1330,28,NULL,NULL,'2017-09-27 12:46:19'),(1331,26,NULL,NULL,'2017-09-27 12:46:27'),(1332,26,NULL,NULL,'2017-09-27 12:46:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`,`enEspera`,`fecha`,`horaModificacion`) values (265,27,26,1,'17:32:12',0,'2017-09-19','22:50:33'),(266,29,18,1,'17:32:13',0,'2017-09-19','17:33:34'),(267,31,18,0,'17:32:14',0,'2017-09-19','17:32:14'),(268,29,19,0,'17:32:15',0,'2017-09-19','17:32:15'),(269,30,13,0,'17:32:17',0,'2017-09-19','17:32:17'),(270,31,19,0,'17:32:18',0,'2017-09-19','17:32:18'),(271,30,14,0,'17:32:19',0,'2017-09-19','17:32:19'),(272,27,27,1,'11:58:21',0,'2017-09-26','11:59:38'),(273,31,20,0,'11:58:22',0,'2017-09-26','11:58:22'),(274,30,15,0,'11:58:24',0,'2017-09-26','11:58:24'),(275,27,28,1,'11:58:26',0,'2017-09-26','12:01:08'),(276,27,29,0,'19:03:24',0,'2017-09-28','19:03:24'),(277,29,20,0,'19:03:25',0,'2017-09-28','19:03:25'),(278,31,21,0,'19:03:26',0,'2017-09-28','19:03:26');

/*Table structure for table `Usuario` */

DROP TABLE IF EXISTS `Usuario`;

CREATE TABLE `Usuario` (
  `usuarioId` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fechaDeAlta` datetime DEFAULT NULL,
  `dni` varchar(200) DEFAULT NULL,
  `perfil` int(11) DEFAULT '3',
  `movimiento` int(2) DEFAULT NULL,
  PRIMARY KEY (`usuarioId`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `Usuario` */

insert  into `Usuario`(`usuarioId`,`nombre`,`apellido`,`fechaDeAlta`,`dni`,`perfil`,`movimiento`) values (21,'Sergio','Brandolin','2017-04-18 23:18:03','321',1,NULL),(23,'Turnos',NULL,'2017-06-07 11:23:00','',3,NULL),(24,'Monitor',NULL,'2017-06-07 11:23:00','',4,NULL),(26,'Pablo','Oporto','2017-06-20 12:41:27','12312',2,0),(27,'Emmanuel','Frati','2017-06-20 12:41:40','123',2,0),(28,'Gabriel','Oporto','2017-06-20 12:42:02','123',2,NULL);

/*Table structure for table `Video` */

DROP TABLE IF EXISTS `Video`;

CREATE TABLE `Video` (
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Video` */

insert  into `Video`(`nombre`) values ('pruebaImg.jpg');

/*Table structure for table `cola_empleado` */

DROP TABLE IF EXISTS `cola_empleado`;

CREATE TABLE `cola_empleado` (
  `idUnionCoEm` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idUnionCoEm`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

/*Data for the table `cola_empleado` */

insert  into `cola_empleado`(`idUnionCoEm`,`idCola`,`idEmpleado`) values (68,30,27),(69,31,27),(71,27,28),(72,29,27),(84,27,26),(85,29,26);

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
