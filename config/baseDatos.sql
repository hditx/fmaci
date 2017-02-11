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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `Cola` */

LOCK TABLES `Cola` WRITE;

insert  into `Cola`(`idCola`,`nombreCola`,`idEmpleado`,`hijoDe`,`siguiente`,`letra`) values (9,'Obra social',0,NULL,NULL,NULL),(11,'Osde',3,9,11,'A'),(13,'Otros',1,NULL,54,'G'),(16,'Red',3,9,18,'T'),(17,'nuevo1',1,NULL,20,'R');

UNLOCK TABLES;

/*Table structure for table `Turno` */

DROP TABLE IF EXISTS `Turno`;

CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  `atendido` int(1) DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

LOCK TABLES `Turno` WRITE;

insert  into `Turno`(`idTurno`,`idCola`,`posicion`,`atendido`) values (1,16,10,0),(2,16,11,0),(3,13,53,0),(4,16,17,0),(5,11,10,0);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
