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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `Cliente` */

LOCK TABLES `Cliente` WRITE;

insert  into `Cliente`(`idCliente`,`nombreApellido`,`dni`,`direccion`,`telefono`,`obraSocial`) values (1,'',111,'',0,''),(2,'',3333,'',0,''),(3,'',5555,'',0,'');

UNLOCK TABLES;

/*Table structure for table `Cola` */

DROP TABLE IF EXISTS `Cola`;

CREATE TABLE `Cola` (
  `idCola` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCola` varchar(30) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  `jerarquia` int(10) DEFAULT NULL,
  PRIMARY KEY (`idCola`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `Cola` */

LOCK TABLES `Cola` WRITE;

insert  into `Cola`(`idCola`,`nombreCola`,`idEmpleado`,`jerarquia`) values (7,'perfumeria',1,0),(8,'farmacia',2,0),(9,'Obra social',0,1),(10,'hnn',2,0);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
