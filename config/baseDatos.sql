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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `Cliente` */

LOCK TABLES `Cliente` WRITE;

insert  into `Cliente`(`idCliente`,`nombreApellido`,`dni`,`direccion`,`telefono`,`obraSocial`) values (1,NULL,3,NULL,NULL,NULL),(2,'',1,'',0,''),(3,'',0,'',0,''),(4,'',0,'',0,''),(5,'',313,'',0,''),(6,'',0,'',0,''),(7,'',1234,'',0,''),(8,'',0,'',0,''),(9,'',22,'',0,''),(10,'',0,'',0,''),(11,'',879,'',0,''),(12,'',0,'',0,''),(13,'',23,'',0,''),(14,'',0,'',0,''),(15,'',0,'',0,''),(16,'',0,'',0,''),(17,'',1277777,'',0,''),(18,'',0,'',0,''),(19,'',0,'',0,''),(20,'',0,'',0,'');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `Cola` */

LOCK TABLES `Cola` WRITE;

insert  into `Cola`(`idCola`,`nombreCola`,`idEmpleado`,`hijoDe`,`siguiente`,`letra`) values (9,'Obra social',0,NULL,NULL,NULL),(11,'Osde',3,9,7,'A'),(12,'Pami',2,9,7,'B'),(13,'Otros',1,NULL,54,'C');

UNLOCK TABLES;

/*Table structure for table `Turno` */

DROP TABLE IF EXISTS `Turno`;

CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idCliente` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `Turno` */

LOCK TABLES `Turno` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
