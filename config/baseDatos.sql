/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.54-0+deb8u1 : Database - Farmacentro
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
  `nombreApellido` varchar(60) DEFAULT NULL,
  `dni` int(8) NOT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `telefono` int(13) DEFAULT NULL,
  `obraSocial` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `Cliente` */

LOCK TABLES `Cliente` WRITE;

insert  into `Cliente`(`idCliente`,`nombreApellido`,`dni`,`direccion`,`telefono`,`obraSocial`) values (1,NULL,3,NULL,NULL,NULL),(2,'',1,'',0,''),(3,'',0,'',0,''),(4,'',0,'',0,''),(5,'',313,'',0,''),(6,'',0,'',0,''),(7,'',1234,'',0,''),(8,'',0,'',0,''),(9,'',22,'',0,''),(10,'',0,'',0,''),(11,'',879,'',0,''),(12,'',0,'',0,''),(13,'',23,'',0,''),(14,'',0,'',0,''),(15,'',0,'',0,''),(16,'',0,'',0,''),(17,'',1277777,'',0,''),(18,'',0,'',0,''),(19,'',0,'',0,''),(20,'',0,'',0,''),(21,'',12,'',0,''),(22,'',0,'',0,''),(23,'',123,'',0,''),(24,'',0,'',0,''),(25,'',0,'',0,''),(26,'',323,'',0,''),(27,'',0,'',0,''),(28,'',0,'',0,''),(29,'',0,'',0,''),(30,'',0,'',0,''),(31,'',5,'',0,''),(32,'',7,'',0,''),(33,'',0,'',0,''),(34,'',7,'',0,''),(35,'',7,'',0,''),(36,'',8,'',0,''),(37,'',8,'',0,''),(38,'',8,'',0,''),(39,'',7,'',0,''),(40,'',7,'',0,''),(41,'',7,'',0,''),(42,'',7,'',0,'');

UNLOCK TABLES;

/*Table structure for table `Cola` */

DROP TABLE IF EXISTS `Cola`;

CREATE TABLE `Cola` (
  `idCola` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCola` varchar(30) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  `hijoDe` int(10) DEFAULT NULL,
  `siguiente` int(10) DEFAULT NULL,
  `letra` char(1) DEFAULT NULL,
  PRIMARY KEY (`idCola`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `Cola` */

LOCK TABLES `Cola` WRITE;

insert  into `Cola`(`idCola`,`nombreCola`,`idEmpleado`,`hijoDe`,`siguiente`,`letra`) values (9,'Obra social',0,NULL,NULL,NULL),(11,'Osde',0,9,18,'A'),(13,'Otros',-1,NULL,62,'G'),(16,'Red',-1,NULL,22,'T'),(18,'ads',5,9,4,'V');

UNLOCK TABLES;

/*Table structure for table `Empleado` */

DROP TABLE IF EXISTS `Empleado`;

CREATE TABLE `Empleado` (
  `idEmpleado` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `Empleado` */

LOCK TABLES `Empleado` WRITE;

insert  into `Empleado`(`idEmpleado`,`nombre`,`apellido`) values (5,'Pablo','Oporto');

UNLOCK TABLES;

/*Table structure for table `HistorialEstado` */

DROP TABLE IF EXISTS `HistorialEstado`;

CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

LOCK TABLES `HistorialEstado` WRITE;

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`) values (1,NULL,'0000-00-00 00:00:00',NULL),(2,NULL,'0000-00-00 00:00:00',NULL),(3,NULL,'0000-00-00 00:00:00',NULL),(4,NULL,'0000-00-00 00:00:00',NULL),(5,27,'0000-00-00 00:00:00',2),(6,27,'0000-00-00 00:00:00',3),(7,27,'0000-00-00 00:00:00',1),(8,23,'0000-00-00 00:00:00',2),(9,23,'0000-00-00 00:00:00',4),(10,23,'0000-00-00 00:00:00',2),(11,23,'0000-00-00 00:00:00',4),(12,21,'0000-00-00 00:00:00',2),(13,23,'0000-00-00 00:00:00',2),(14,23,'0000-00-00 00:00:00',3),(15,23,'0000-00-00 00:00:00',1),(16,22,'0000-00-00 00:00:00',2),(17,26,'0000-00-00 00:00:00',2),(18,26,'0000-00-00 00:00:00',2),(19,24,'0000-00-00 00:00:00',2),(20,24,'0000-00-00 00:00:00',2),(21,24,'0000-00-00 00:00:00',2),(22,24,'0000-00-00 00:00:00',2),(23,24,'0000-00-00 00:00:00',2),(24,24,'0000-00-00 00:00:00',2),(25,24,'0000-00-00 00:00:00',2),(26,24,'0000-00-00 00:00:00',2),(27,24,'0000-00-00 00:00:00',2),(28,24,'0000-00-00 00:00:00',2),(29,24,'0000-00-00 00:00:00',2),(30,24,'0000-00-00 00:00:00',2),(31,24,'0000-00-00 00:00:00',2),(32,24,'0000-00-00 00:00:00',2),(33,24,'0000-00-00 00:00:00',2),(34,24,'0000-00-00 00:00:00',2),(35,24,'0000-00-00 00:00:00',2),(36,24,'0000-00-00 00:00:00',2),(37,24,'0000-00-00 00:00:00',2),(38,24,'0000-00-00 00:00:00',2),(39,24,'0000-00-00 00:00:00',2),(40,24,'0000-00-00 00:00:00',2),(41,24,'0000-00-00 00:00:00',2),(42,24,'0000-00-00 00:00:00',2),(43,24,'0000-00-00 00:00:00',2),(44,24,'0000-00-00 00:00:00',2),(45,24,'0000-00-00 00:00:00',2),(46,24,'0000-00-00 00:00:00',2),(47,24,'0000-00-00 00:00:00',3),(48,24,'0000-00-00 00:00:00',1),(49,23,'0000-00-00 00:00:00',2),(50,23,'0000-00-00 00:00:00',4),(51,23,'0000-00-00 00:00:00',2),(52,23,'0000-00-00 00:00:00',3),(53,23,'0000-00-00 00:00:00',1),(54,22,'0000-00-00 00:00:00',2),(55,28,'2017-02-15 17:11:52',2),(56,28,'2017-02-15 17:11:54',3),(57,28,'2017-02-15 17:11:56',1),(58,27,'2017-02-15 17:17:17',2),(59,27,'2017-02-15 17:17:19',3),(60,27,'2017-02-15 17:17:20',1),(61,NULL,'2017-02-15 17:19:28',NULL),(62,22,'2017-02-15 19:36:00',2),(63,22,'2017-02-15 19:36:06',4),(64,20,'2017-02-15 19:36:36',2),(65,20,'2017-02-15 19:40:48',3),(66,20,'2017-02-15 19:41:03',1),(67,18,'2017-02-15 19:49:53',2),(68,18,'2017-02-15 19:51:31',3),(69,25,'2017-02-21 19:43:58',2),(70,25,'2017-02-21 19:44:37',3);

UNLOCK TABLES;

/*Table structure for table `Turno` */

DROP TABLE IF EXISTS `Turno`;

CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  `atendido` int(1) DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

LOCK TABLES `Turno` WRITE;

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`) values (18,13,58,0),(19,16,20,0),(20,11,14,1),(21,18,1,0),(22,11,15,4),(23,11,16,1),(24,11,17,1),(25,13,59,0),(26,16,21,0),(27,18,2,1),(28,18,3,1),(29,13,60,0),(30,13,61,0);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
