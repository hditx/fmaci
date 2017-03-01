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

insert  into `Cola`(`idCola`,`nombreCola`,`idEmpleado`,`hijoDe`,`siguiente`,`letra`) values (9,'Obra social',0,NULL,NULL,NULL),(11,'Osde',0,9,21,'A'),(13,'Otros',-1,9,63,'G'),(16,'Red',-1,NULL,26,'T'),(18,'ads',5,NULL,11,'V');

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
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

/*Data for the table `HistorialEstado` */

LOCK TABLES `HistorialEstado` WRITE;

insert  into `HistorialEstado`(`idHistorial`,`idTurno`,`fechaHora`,`estado`,`idEmpleado`) values (71,29,'2017-02-25 21:00:22',2,0),(72,29,'2017-02-25 21:00:24',3,0),(73,29,'2017-02-25 21:00:25',1,0),(74,26,'2017-02-25 21:04:13',2,0),(75,26,'2017-02-25 21:04:14',3,0),(76,26,'2017-02-25 21:04:16',1,0),(77,18,'2017-02-25 21:06:10',2,0),(78,18,'2017-02-25 21:06:18',2,0),(79,18,'2017-02-25 21:06:19',3,0),(80,18,'2017-02-25 21:06:20',1,0),(81,24,'2017-02-25 21:14:27',2,5),(82,24,'2017-02-25 21:14:29',3,0),(83,24,'2017-02-25 21:14:30',1,0),(84,30,'2017-02-25 21:15:10',2,0),(85,30,'2017-02-25 21:17:45',2,5),(86,30,'2017-02-25 21:17:47',3,5),(87,30,'2017-02-25 21:17:49',1,5),(88,29,'2017-02-25 21:17:50',2,0),(89,29,'2017-02-25 21:17:52',4,0),(90,23,'2017-02-25 21:19:08',2,0),(91,23,'2017-02-25 21:19:10',4,0),(92,23,'2017-02-25 21:21:02',2,5),(93,23,'2017-02-25 21:21:04',4,5),(94,23,'2017-02-25 21:21:07',2,0),(95,23,'2017-02-25 21:21:08',3,0),(96,23,'2017-02-25 21:21:10',1,0),(97,29,'2017-02-25 21:26:35',2,5),(98,29,'2017-02-25 21:26:36',4,5),(99,29,'2017-02-25 21:26:37',2,0),(100,29,'2017-02-25 21:26:38',3,0),(101,29,'2017-02-25 21:26:39',1,0),(102,28,'2017-02-25 21:27:05',2,5),(103,28,'2017-02-25 21:27:07',4,5),(104,28,'2017-02-25 21:27:13',2,5),(105,28,'2017-02-25 21:27:14',4,5),(106,28,'2017-02-25 21:27:15',2,5),(107,28,'2017-02-25 21:27:16',3,5),(108,28,'2017-02-25 21:27:18',1,5),(109,21,'2017-02-26 15:41:20',2,5),(110,21,'2017-02-26 15:41:23',4,5),(111,21,'2017-02-26 16:00:02',2,5),(112,21,'2017-02-26 16:00:04',3,5),(113,21,'2017-02-26 16:00:05',1,5),(114,22,'2017-02-26 16:00:06',2,5),(115,22,'2017-02-26 16:00:08',4,5),(116,27,'2017-02-26 16:21:30',2,5),(117,27,'2017-02-26 16:21:33',3,5),(118,27,'2017-02-26 16:21:35',1,5),(119,20,'2017-02-26 19:58:50',2,5),(120,20,'2017-02-26 19:58:51',3,5),(121,20,'2017-02-26 20:12:37',2,5),(122,20,'2017-02-26 20:12:38',4,5),(123,28,'2017-02-26 20:12:40',2,5),(124,28,'2017-02-26 20:12:42',4,5),(125,28,'2017-02-26 20:12:44',2,5),(126,28,'2017-02-26 20:12:46',4,5),(127,28,'2017-02-26 20:46:00',2,5),(128,33,'2017-02-27 14:26:38',2,5),(129,33,'2017-02-27 14:26:40',4,5),(130,32,'2017-03-01 17:09:56',2,5),(131,32,'2017-03-01 17:09:58',4,5),(132,31,'2017-03-01 17:30:10',2,5),(133,31,'2017-03-01 17:30:14',3,5),(134,31,'2017-03-01 17:30:16',1,5),(135,35,'2017-03-01 17:30:20',2,5),(136,35,'2017-03-01 17:30:23',4,5),(137,33,'2017-03-01 18:17:55',2,5),(138,33,'2017-03-01 18:17:57',4,5),(139,35,'2017-03-01 18:20:53',2,5),(140,35,'2017-03-01 18:20:55',3,5),(141,35,'2017-03-01 18:20:57',1,5),(142,35,'2017-03-01 18:37:08',2,5),(143,35,'2017-03-01 18:37:10',3,5),(144,35,'2017-03-01 18:37:11',1,5),(145,40,'2017-03-01 18:44:26',2,5),(146,40,'2017-03-01 18:44:28',3,5),(147,40,'2017-03-01 18:44:30',1,5);

UNLOCK TABLES;

/*Table structure for table `Turno` */

DROP TABLE IF EXISTS `Turno`;

CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  `atendido` int(1) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

LOCK TABLES `Turno` WRITE;

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`,`hora`) values (31,11,18,0,'23:25:46'),(32,16,22,0,'23:25:47'),(33,16,23,0,'23:25:49'),(34,13,62,0,'23:25:51'),(35,18,4,1,'23:25:54'),(36,16,24,0,'18:34:19'),(37,16,25,0,'18:34:23'),(38,11,19,0,'18:34:38'),(39,11,20,0,'18:34:41'),(40,18,5,1,'18:39:40'),(41,18,6,0,'18:39:41'),(42,18,7,0,'18:39:42'),(43,18,8,0,'18:39:43'),(44,18,9,0,'18:39:44'),(45,18,10,0,'18:39:45');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
