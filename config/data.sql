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

insert  into `Cola`(`idCola`,`nombreCola`,`hijoDe`,`siguiente`,`letra`,`fechaCreacion`) values (27,'Particular',NULL,39,'A','2017-06-20 12:43:10'),(29,'Red',NULL,28,'B','2017-06-20 12:43:38'),(30,'Osde',NULL,21,'C','2017-06-20 12:44:03'),(31,'PAMI',NULL,31,'D','2017-06-20 12:44:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=481 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (469,301,'2017-10-06 10:59:06',1,26),(470,301,'2017-10-06 10:59:08',1,26),(471,301,'2017-10-06 10:59:10',1,26),(472,301,'2017-10-06 10:59:16',2,26),(473,301,'2017-10-06 11:01:45',3,26),(474,302,'2017-10-06 11:01:47',1,26),(475,302,'2017-10-06 11:01:49',1,26),(476,303,'2017-10-06 11:03:54',1,27),(477,303,'2017-10-06 11:03:56',2,27),(478,303,'2017-10-06 11:03:57',3,27),(479,302,'2017-10-06 11:06:48',2,26),(480,302,'2017-10-06 11:06:49',3,26);

/*Table structure for table `SesionEmpleado` */

DROP TABLE IF EXISTS `SesionEmpleado`;

CREATE TABLE `SesionEmpleado` (
  `idSesion` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `idTurno` int(10) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `ultimaSesion` datetime DEFAULT NULL,
  PRIMARY KEY (`idSesion`)
) ENGINE=InnoDB AUTO_INCREMENT=1375 DEFAULT CHARSET=latin1;

/*Data for the table `SesionEmpleado` */

insert  into `SesionEmpleado`(`idSesion`,`idUsuario`,`idTurno`,`estado`,`ultimaSesion`) values (1358,26,NULL,NULL,'2017-10-06 10:59:02'),(1359,26,301,1,'2017-10-06 10:59:06'),(1360,26,301,1,'2017-10-06 10:59:08'),(1361,26,301,1,'2017-10-06 10:59:10'),(1362,26,301,2,'2017-10-06 10:59:15'),(1363,26,301,3,'2017-10-06 11:01:45'),(1364,26,NULL,NULL,'2017-10-06 11:01:45'),(1365,26,302,1,'2017-10-06 11:01:47'),(1366,26,302,1,'2017-10-06 11:01:49'),(1367,27,NULL,NULL,'2017-10-06 11:03:51'),(1368,27,303,1,'2017-10-06 11:03:54'),(1369,27,303,2,'2017-10-06 11:03:56'),(1370,27,303,3,'2017-10-06 11:03:57'),(1371,27,NULL,NULL,'2017-10-06 11:03:57'),(1372,26,302,2,'2017-10-06 11:06:48'),(1373,26,302,3,'2017-10-06 11:06:49'),(1374,26,NULL,NULL,'2017-10-06 11:06:49');

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
) ENGINE=InnoDB AUTO_INCREMENT=309 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`,`enEspera`,`fecha`,`horaModificacion`) values (301,27,37,3,'10:52:43',0,'2017-10-06','11:01:45'),(302,29,26,3,'10:52:45',0,'2017-10-06','11:06:49'),(303,31,29,3,'10:52:47',0,'2017-10-06','11:03:57'),(304,30,19,0,'10:52:48',0,'2017-10-06','10:52:48'),(305,27,38,0,'10:54:51',0,'2017-10-06','10:54:51'),(306,29,27,0,'10:54:53',0,'2017-10-06','10:54:53'),(307,30,20,0,'10:54:55',0,'2017-10-06','10:54:55'),(308,31,30,0,'10:54:57',0,'2017-10-06','10:54:57');

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

insert  into `Usuario`(`usuarioId`,`nombre`,`apellido`,`fechaDeAlta`,`dni`,`perfil`,`movimiento`) values (21,'Sergio','Brandolin','2017-04-18 23:18:03','321',1,NULL),(23,'Turnos',NULL,'2017-06-07 11:23:00','23',3,NULL),(24,'Monitor',NULL,'2017-06-07 11:23:00','24',4,NULL),(26,'Pablo','Oporto','2017-06-20 12:41:27','12345678',2,0),(27,'Emmanuel','Frati','2017-06-20 12:41:40','23456789',2,0),(28,'Gabriel','Oporto','2017-06-20 12:42:02','34567812',2,NULL);

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
