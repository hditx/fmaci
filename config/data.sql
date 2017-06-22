/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.55-0+deb8u1 : Database - Farmacentro
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

insert  into `Cola`(`idCola`,`nombreCola`,`hijoDe`,`siguiente`,`letra`,`fechaCreacion`) values (27,'Particular',NULL,8,'A','2017-06-20 12:43:10'),(28,'Obra Social',NULL,NULL,NULL,'2017-06-20 12:43:21'),(29,'Red',28,7,'B','2017-06-20 12:43:38'),(30,'Osde',28,7,'C','2017-06-20 12:44:03'),(31,'PAMI',NULL,8,'D','2017-06-20 12:44:21');

/*Table structure for table `HistorialEstado` */

DROP TABLE IF EXISTS `HistorialEstado`;

CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=668 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (643,533,'2017-06-20 18:13:25',2,26),(644,533,'2017-06-20 18:13:27',3,26),(645,533,'2017-06-20 18:13:28',1,26),(646,534,'2017-06-20 18:13:31',2,26),(647,534,'2017-06-20 18:13:32',3,26),(648,534,'2017-06-20 18:13:34',1,26),(649,536,'2017-06-20 18:13:35',2,26),(650,536,'2017-06-20 18:13:36',3,26),(651,536,'2017-06-20 18:13:37',1,26),(652,537,'2017-06-20 18:13:39',2,26),(653,537,'2017-06-20 18:13:40',3,26),(654,537,'2017-06-20 18:13:41',1,26),(655,539,'2017-06-20 18:13:43',2,26),(656,539,'2017-06-20 18:13:45',3,26),(657,539,'2017-06-20 18:13:45',1,26),(658,538,'2017-06-20 18:13:48',2,26),(659,538,'2017-06-20 18:13:48',3,26),(660,538,'2017-06-20 18:13:49',1,26),(661,535,'2017-06-20 18:13:56',2,26),(662,535,'2017-06-20 18:14:42',2,26),(663,535,'2017-06-20 18:14:45',3,26),(664,535,'2017-06-20 18:14:45',3,26),(665,535,'2017-06-20 18:14:46',1,26),(666,541,'2017-06-20 18:47:59',2,26),(667,541,'2017-06-20 18:48:08',2,26);

/*Table structure for table `SesionEmpleado` */

DROP TABLE IF EXISTS `SesionEmpleado`;

CREATE TABLE `SesionEmpleado` (
  `idSesion` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `idTurno` int(10) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `ultimaSesion` datetime DEFAULT NULL,
  PRIMARY KEY (`idSesion`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=latin1;

/*Data for the table `SesionEmpleado` */

insert  into `SesionEmpleado`(`idSesion`,`idUsuario`,`idTurno`,`estado`,`ultimaSesion`) values (157,26,NULL,NULL,'2017-06-20 18:04:31'),(158,26,NULL,NULL,'2017-06-20 18:04:36'),(159,26,NULL,NULL,'2017-06-20 18:06:37'),(160,26,NULL,NULL,'2017-06-20 18:09:40'),(161,26,NULL,NULL,'2017-06-20 18:10:13'),(162,26,NULL,NULL,'2017-06-20 18:10:43'),(163,26,NULL,NULL,'2017-06-20 18:13:07'),(164,26,NULL,NULL,'2017-06-20 18:13:21'),(165,26,533,2,'2017-06-20 18:13:25'),(166,26,533,3,'2017-06-20 18:13:27'),(167,26,533,1,'2017-06-20 18:13:28'),(168,26,NULL,NULL,'2017-06-20 18:13:28'),(169,26,534,2,'2017-06-20 18:13:31'),(170,26,534,3,'2017-06-20 18:13:32'),(171,26,534,1,'2017-06-20 18:13:34'),(172,26,NULL,NULL,'2017-06-20 18:13:34'),(173,26,536,2,'2017-06-20 18:13:35'),(174,26,536,3,'2017-06-20 18:13:36'),(175,26,536,1,'2017-06-20 18:13:37'),(176,26,NULL,NULL,'2017-06-20 18:13:37'),(177,26,537,2,'2017-06-20 18:13:39'),(178,26,537,3,'2017-06-20 18:13:40'),(179,26,537,1,'2017-06-20 18:13:41'),(180,26,NULL,NULL,'2017-06-20 18:13:41'),(181,26,539,2,'2017-06-20 18:13:43'),(182,26,539,3,'2017-06-20 18:13:44'),(183,26,539,1,'2017-06-20 18:13:45'),(184,26,NULL,NULL,'2017-06-20 18:13:46'),(185,26,538,2,'2017-06-20 18:13:47'),(186,26,538,3,'2017-06-20 18:13:48'),(187,26,538,1,'2017-06-20 18:13:49'),(188,26,NULL,NULL,'2017-06-20 18:13:49'),(189,26,NULL,NULL,'2017-06-20 18:13:54'),(190,26,535,2,'2017-06-20 18:13:56'),(191,26,535,2,'2017-06-20 18:14:41'),(192,26,535,3,'2017-06-20 18:14:45'),(193,26,535,3,'2017-06-20 18:14:45'),(194,26,535,1,'2017-06-20 18:14:46'),(195,26,NULL,NULL,'2017-06-20 18:14:46'),(196,26,NULL,NULL,'2017-06-20 18:19:40'),(197,27,NULL,NULL,'2017-06-20 18:20:56'),(198,27,NULL,NULL,'2017-06-20 18:21:00'),(199,27,NULL,NULL,'2017-06-20 18:27:01'),(200,27,NULL,NULL,'2017-06-20 18:27:09'),(201,27,NULL,NULL,'2017-06-20 18:27:35'),(202,26,NULL,NULL,'2017-06-20 18:47:42'),(203,26,NULL,NULL,'2017-06-20 18:47:57'),(204,26,541,2,'2017-06-20 18:47:59'),(205,26,541,2,'2017-06-20 18:48:08'),(206,26,NULL,NULL,'2017-06-20 18:48:08'),(207,26,NULL,NULL,'2017-06-22 10:03:01'),(208,26,NULL,NULL,'2017-06-22 10:42:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=550 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`,`enEspera`) values (533,27,3,1,'18:03:33',0),(534,31,4,1,'18:03:34',0),(535,29,3,1,'18:03:38',0),(536,30,3,1,'18:03:40',0),(537,27,4,1,'18:03:41',0),(538,31,5,1,'18:03:42',0),(539,30,4,1,'18:03:44',0),(540,29,4,0,'18:03:45',0),(541,27,5,2,'18:21:14',1),(542,27,6,0,'18:21:16',0),(543,29,5,0,'18:21:18',0),(544,30,5,0,'18:21:20',0),(545,31,6,0,'18:21:21',0),(546,31,7,0,'18:21:22',0),(547,30,6,0,'18:21:23',0),(548,29,6,0,'18:21:24',0),(549,27,7,0,'18:21:25',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `Usuario` */

insert  into `Usuario`(`usuarioId`,`nombre`,`apellido`,`fechaDeAlta`,`contrasenia`,`perfil`) values (21,'Sergio','Brandolin','2017-04-18 23:18:03','321',1),(23,'Turnos',NULL,'2017-06-07 11:23:00','123',3),(24,'Monitor',NULL,'2017-06-07 11:23:00','',4),(26,'Pablo','Oporto','2017-06-20 12:41:27','123',2),(27,'Emmanuel','Frati','2017-06-20 12:41:40','123',2),(28,'Gabriel','Oporto','2017-06-20 12:42:02','123',2);

/*Table structure for table `cola_empleado` */

DROP TABLE IF EXISTS `cola_empleado`;

CREATE TABLE `cola_empleado` (
  `idUnionCoEm` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idUnionCoEm`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `cola_empleado` */

insert  into `cola_empleado`(`idUnionCoEm`,`idCola`,`idEmpleado`) values (48,27,26),(49,29,28),(50,30,26),(52,31,26),(53,30,27),(54,31,27);

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
