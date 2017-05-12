-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: Farmacentro
-- ------------------------------------------------------
-- Server version	5.7.18-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `telefono` int(13) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
INSERT INTO `Cliente` VALUES (47,'Pablo','Oporto',333,12,'Pd');
/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cola`
--

DROP TABLE IF EXISTS `Cola`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cola` (
  `idCola` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCola` varchar(30) DEFAULT NULL,
  `hijoDe` int(10) DEFAULT NULL,
  `siguiente` int(10) DEFAULT NULL,
  `letra` char(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  PRIMARY KEY (`idCola`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cola`
--

LOCK TABLES `Cola` WRITE;
/*!40000 ALTER TABLE `Cola` DISABLE KEYS */;
INSERT INTO `Cola` VALUES (19,'Osde',NULL,10,'A',NULL),(20,'Red ',NULL,13,'B',NULL),(21,'Otros',NULL,11,'C',NULL);
/*!40000 ALTER TABLE `Cola` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Empleado`
--

DROP TABLE IF EXISTS `Empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Empleado` (
  `idEmpleado` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fechaDeAlta` datetime DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empleado`
--

LOCK TABLES `Empleado` WRITE;
/*!40000 ALTER TABLE `Empleado` DISABLE KEYS */;
INSERT INTO `Empleado` VALUES (20,'Pablo','Oporto','2017-04-18 23:17:47'),(21,'Sergio','Brandolin','2017-04-18 23:18:03'),(22,'Emmanuel','Frati','2017-04-21 14:08:56'),(23,'Gabriel','Porto','2017-05-01 16:22:39');
/*!40000 ALTER TABLE `Empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HistorialEstado`
--

DROP TABLE IF EXISTS `HistorialEstado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HistorialEstado` (
  `idHistorial` int(10) NOT NULL AUTO_INCREMENT,
  `idTurno` int(10) DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HistorialEstado`
--

LOCK TABLES `HistorialEstado` WRITE;
/*!40000 ALTER TABLE `HistorialEstado` DISABLE KEYS */;
INSERT INTO `HistorialEstado` VALUES (1,265,'2017-04-18 23:26:44',2,21),(2,265,'2017-04-18 23:26:46',3,21),(3,265,'2017-04-18 23:26:47',1,21),(4,264,'2017-04-18 23:26:49',2,21),(5,264,'2017-04-18 23:26:51',3,21),(6,264,'2017-04-18 23:26:52',1,21),(7,266,'2017-04-18 23:27:02',2,21),(8,267,'2017-04-19 10:47:51',2,20),(9,267,'2017-04-19 10:48:19',2,20),(10,267,'2017-04-19 10:50:15',2,20),(11,267,'2017-04-19 10:50:53',2,20),(12,267,'2017-04-19 10:51:22',2,20),(13,267,'2017-04-19 10:51:42',2,20),(14,267,'2017-04-19 10:51:50',2,20),(15,267,'2017-04-19 10:51:53',2,20),(16,267,'2017-04-19 10:51:57',2,20),(17,267,'2017-04-19 10:52:00',2,20),(18,267,'2017-04-19 10:52:03',2,20),(19,267,'2017-04-19 10:52:09',2,20),(20,267,'2017-04-19 10:52:14',2,20),(21,267,'2017-04-19 10:52:22',2,20),(22,267,'2017-04-19 10:52:26',2,20),(23,267,'2017-04-19 10:52:35',2,20),(24,267,'2017-04-19 10:52:45',2,20),(25,267,'2017-04-19 10:52:55',2,20),(26,267,'2017-04-19 10:52:58',2,20),(27,267,'2017-04-19 10:53:11',2,20),(28,267,'2017-04-19 10:53:14',2,20),(29,267,'2017-04-19 10:55:22',2,20),(30,267,'2017-04-19 10:55:51',2,20),(31,267,'2017-04-19 10:56:12',2,20),(32,267,'2017-04-19 10:56:25',2,20),(33,267,'2017-04-19 10:56:28',2,20),(34,267,'2017-04-19 10:56:32',2,20),(35,267,'2017-04-19 10:57:22',2,20),(36,267,'2017-04-19 10:58:38',2,20),(37,267,'2017-04-19 10:59:35',2,20),(38,267,'2017-04-19 10:59:40',2,20),(39,267,'2017-04-19 10:59:46',2,20),(40,267,'2017-04-19 10:59:53',2,20),(41,267,'2017-04-19 10:59:57',2,20),(42,267,'2017-04-19 11:00:01',2,20),(43,267,'2017-04-19 11:00:12',3,20),(44,267,'2017-04-19 11:00:18',1,20),(45,269,'2017-04-19 11:14:34',2,20),(46,269,'2017-04-19 11:14:43',3,20),(47,269,'2017-04-19 11:18:47',3,20),(48,269,'2017-04-19 11:19:34',3,20),(49,269,'2017-04-19 11:22:37',3,20),(50,269,'2017-04-19 11:24:43',3,20),(51,269,'2017-04-19 11:25:09',3,20),(52,269,'2017-04-19 11:25:13',3,20),(53,269,'2017-04-19 11:25:18',3,20),(54,269,'2017-04-19 11:25:22',3,20),(55,269,'2017-04-19 11:26:10',3,20),(56,269,'2017-04-19 11:26:20',3,20),(57,269,'2017-04-19 11:26:50',3,20),(58,269,'2017-04-19 11:27:15',3,20),(59,269,'2017-04-19 11:27:20',3,20),(60,269,'2017-04-19 11:27:25',3,20),(61,269,'2017-04-19 11:29:50',3,20),(62,269,'2017-04-19 11:30:18',3,20),(63,269,'2017-04-19 11:31:05',3,20),(64,269,'2017-04-19 11:31:26',3,20),(65,269,'2017-04-19 11:31:37',3,20),(66,269,'2017-04-19 11:31:49',3,20),(67,269,'2017-04-19 11:33:22',3,20),(68,269,'2017-04-19 11:35:08',3,20),(69,269,'2017-04-19 11:35:23',3,20),(70,269,'2017-04-19 11:35:27',3,20),(71,269,'2017-04-19 11:35:34',3,20),(72,269,'2017-04-19 11:35:43',3,20),(73,269,'2017-04-19 11:35:46',3,20),(74,269,'2017-04-19 11:35:52',3,20),(75,269,'2017-04-19 11:35:57',3,20),(76,269,'2017-04-19 11:36:14',3,20),(77,269,'2017-04-19 11:36:48',3,20),(78,269,'2017-04-19 11:36:50',3,20),(79,269,'2017-04-19 11:36:54',3,20),(80,269,'2017-04-19 11:36:55',3,20),(81,269,'2017-04-19 11:36:58',3,20),(82,269,'2017-04-19 11:37:06',3,20),(83,269,'2017-04-19 11:37:50',3,20),(84,269,'2017-04-19 11:38:26',3,20),(85,269,'2017-04-19 11:38:40',3,20),(86,269,'2017-04-19 11:39:09',3,20),(87,269,'2017-04-19 11:39:13',3,20),(88,269,'2017-04-19 11:39:17',3,20),(89,269,'2017-04-19 11:39:46',3,20),(90,269,'2017-04-19 11:39:51',3,20),(91,269,'2017-04-19 11:39:55',3,20),(92,269,'2017-04-19 11:40:04',3,20),(93,269,'2017-04-19 11:40:12',3,20),(94,269,'2017-04-19 11:40:17',3,20),(95,269,'2017-04-19 11:40:36',3,20),(96,269,'2017-04-19 11:40:38',3,20),(97,269,'2017-04-19 11:41:04',3,20),(98,269,'2017-04-19 11:41:10',3,20),(99,269,'2017-04-19 11:41:14',3,20),(100,269,'2017-04-19 11:43:23',3,20),(101,269,'2017-04-19 11:43:38',3,20),(102,269,'2017-04-19 11:43:40',3,20),(103,269,'2017-04-19 11:43:43',3,20),(104,269,'2017-04-19 11:43:47',3,20),(105,269,'2017-04-19 11:43:54',3,20),(106,269,'2017-04-19 11:44:24',3,20),(107,269,'2017-04-19 11:44:30',3,20),(108,269,'2017-04-19 11:44:35',3,20),(109,269,'2017-04-19 11:44:57',3,20),(110,269,'2017-04-19 11:44:59',3,20),(111,269,'2017-04-19 11:45:03',3,20),(112,269,'2017-04-19 11:45:08',3,20),(113,269,'2017-04-19 11:45:09',3,20),(114,269,'2017-04-19 11:45:12',3,20),(115,269,'2017-04-19 11:47:31',3,20),(116,269,'2017-04-19 11:48:14',3,20),(117,269,'2017-04-19 11:49:31',3,20),(118,269,'2017-04-19 11:49:37',3,20),(119,269,'2017-04-19 11:49:41',3,20),(120,269,'2017-04-19 11:49:45',3,20),(121,269,'2017-04-19 11:50:04',3,20),(122,269,'2017-04-19 11:50:07',3,20),(123,269,'2017-04-19 11:50:12',3,20),(124,269,'2017-04-19 11:50:41',3,20),(125,269,'2017-04-19 11:50:48',3,20),(126,269,'2017-04-19 11:50:52',3,20),(127,269,'2017-04-19 11:51:00',3,20),(128,269,'2017-04-19 11:51:04',3,20),(129,269,'2017-04-19 11:51:09',3,20),(130,269,'2017-04-19 11:51:14',3,20),(131,269,'2017-04-19 11:51:29',3,20),(132,269,'2017-04-19 11:51:37',3,20),(133,269,'2017-04-19 11:53:37',1,20),(134,268,'2017-04-19 11:53:41',2,20),(135,268,'2017-04-19 11:53:44',3,20),(136,268,'2017-04-19 11:53:50',1,20),(137,266,'2017-04-19 11:53:54',2,20),(138,266,'2017-04-19 11:55:49',2,20),(139,266,'2017-04-19 11:55:52',3,20),(140,266,'2017-04-19 11:55:53',3,20),(141,266,'2017-04-19 11:55:59',3,20),(142,266,'2017-04-19 11:56:09',3,20),(143,266,'2017-04-19 11:56:25',3,20),(144,266,'2017-04-19 11:56:31',3,20),(145,266,'2017-04-19 11:56:32',3,20),(146,266,'2017-04-19 11:56:33',3,20),(147,266,'2017-04-19 11:56:38',3,20),(148,266,'2017-04-19 11:56:41',3,20),(149,266,'2017-04-19 11:56:51',3,20),(150,266,'2017-04-19 11:56:54',3,20),(151,266,'2017-04-19 11:57:00',3,20),(152,266,'2017-04-19 11:57:05',3,20),(153,266,'2017-04-19 11:57:10',3,20),(154,266,'2017-04-19 11:57:14',3,20),(155,266,'2017-04-19 11:57:59',3,20),(156,266,'2017-04-19 11:58:04',3,20),(157,266,'2017-04-19 11:58:35',3,20),(158,266,'2017-04-19 11:58:41',3,20),(159,266,'2017-04-19 11:58:46',3,20),(160,266,'2017-04-19 11:58:51',3,20),(161,266,'2017-04-19 11:59:01',3,20),(162,266,'2017-04-19 11:59:32',3,20),(163,266,'2017-04-19 11:59:37',3,20),(164,266,'2017-04-19 11:59:46',1,20),(165,270,'2017-04-19 11:59:49',2,20),(166,270,'2017-04-19 12:01:42',2,20),(167,270,'2017-04-19 12:02:12',2,20),(168,270,'2017-04-19 12:02:19',2,20),(169,270,'2017-04-19 12:02:27',2,20),(170,270,'2017-04-19 12:02:33',2,20),(171,270,'2017-04-19 12:02:36',2,20),(172,270,'2017-04-19 12:02:40',2,20),(173,270,'2017-04-19 12:03:30',2,20),(174,270,'2017-04-19 12:03:49',2,20),(175,270,'2017-04-19 12:03:51',2,20),(176,270,'2017-04-19 12:04:34',2,20),(177,270,'2017-04-19 12:04:43',2,20),(178,270,'2017-04-19 12:04:50',2,20),(179,270,'2017-04-19 12:04:54',2,20),(180,270,'2017-04-19 12:04:57',2,20),(181,270,'2017-04-19 12:05:01',2,20),(182,270,'2017-04-19 12:05:05',2,20),(183,270,'2017-04-19 12:05:09',2,20),(184,270,'2017-04-19 12:05:21',2,20),(185,270,'2017-04-19 12:05:25',2,20),(186,270,'2017-04-19 12:05:30',2,20),(187,270,'2017-04-19 12:05:33',3,20),(188,270,'2017-04-19 12:05:35',1,20),(189,273,'2017-04-19 12:14:57',2,20),(190,273,'2017-04-19 12:15:43',2,20),(191,273,'2017-04-19 12:15:53',2,20),(192,273,'2017-04-19 12:27:40',3,20),(193,273,'2017-04-19 12:27:42',1,20),(194,275,'2017-04-19 12:27:44',2,20),(195,275,'2017-04-19 12:34:34',3,20),(196,275,'2017-04-19 12:34:36',1,20),(197,271,'2017-04-21 14:40:55',2,21),(198,271,'2017-04-21 14:41:01',3,21),(199,271,'2017-04-21 14:41:08',1,21),(200,272,'2017-04-21 14:41:21',2,21),(201,272,'2017-04-21 14:42:05',3,21),(202,272,'2017-04-21 14:42:12',1,21),(203,276,'2017-04-21 21:57:08',2,22),(204,276,'2017-04-21 21:57:10',3,22),(205,276,'2017-04-21 21:57:12',1,22),(206,274,'2017-04-21 21:57:14',2,22),(207,274,'2017-04-21 21:57:36',3,22),(208,274,'2017-04-21 21:57:41',1,22),(209,277,'2017-04-23 23:25:52',2,21),(210,277,'2017-04-24 01:06:27',3,21),(211,277,'2017-04-24 01:06:29',1,21),(212,279,'2017-04-24 01:06:32',2,21),(213,279,'2017-04-25 19:41:10',2,20),(214,279,'2017-04-25 19:41:51',3,20),(215,279,'2017-04-25 19:42:37',1,20),(216,281,'2017-04-25 19:45:35',2,21),(217,281,'2017-04-25 19:45:38',2,21),(218,281,'2017-04-25 19:45:40',2,21),(219,281,'2017-04-25 19:45:50',2,21),(220,281,'2017-04-25 19:45:54',3,21),(221,281,'2017-04-25 19:46:48',3,21),(222,281,'2017-04-25 19:47:18',3,21),(223,281,'2017-04-25 19:47:19',1,21),(224,282,'2017-04-25 19:48:11',2,21),(225,282,'2017-04-25 19:48:20',2,22),(226,282,'2017-04-25 19:48:38',3,22),(227,282,'2017-04-25 19:48:40',1,22),(228,283,'2017-04-25 19:49:48',2,22),(229,283,'2017-04-25 19:51:31',3,22),(230,283,'2017-04-25 19:51:33',1,22),(231,278,'2017-05-01 13:40:21',2,21),(232,278,'2017-05-01 13:40:37',3,21),(233,286,'2017-05-01 13:47:31',2,21),(234,286,'2017-05-01 13:48:33',2,21),(235,286,'2017-05-01 13:50:15',3,21),(236,286,'2017-05-01 13:50:46',3,21),(237,286,'2017-05-01 13:51:51',1,21),(238,278,'2017-05-01 13:53:56',2,21),(239,278,'2017-05-01 13:53:59',3,21),(240,278,'2017-05-01 13:54:34',3,21),(241,278,'2017-05-01 13:54:42',1,21),(242,284,'2017-05-01 13:55:03',2,21),(243,284,'2017-05-01 13:55:06',3,21),(244,284,'2017-05-01 13:55:11',1,21);
/*!40000 ALTER TABLE `HistorialEstado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Turno`
--

DROP TABLE IF EXISTS `Turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Turno` (
  `idTurno` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `posicion` int(10) DEFAULT NULL,
  `atendido` int(2) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Turno`
--

LOCK TABLES `Turno` WRITE;
/*!40000 ALTER TABLE `Turno` DISABLE KEYS */;
INSERT INTO `Turno` VALUES (264,19,4,1,'23:25:29'),(265,20,4,1,'23:25:30'),(266,21,4,1,'23:25:30'),(267,20,5,1,'23:25:31'),(268,19,5,1,'23:25:31'),(269,20,6,1,'23:25:32'),(270,21,5,1,'23:25:33'),(271,21,6,1,'12:13:39'),(272,19,6,1,'12:13:40'),(273,20,7,1,'12:13:41'),(274,21,7,1,'12:13:42'),(275,20,8,1,'12:13:42'),(276,19,7,1,'12:13:44'),(277,19,8,1,'21:55:47'),(278,20,9,1,'21:55:56'),(279,21,8,1,'21:56:24'),(280,20,10,0,'21:56:30'),(281,19,9,1,'19:45:26'),(282,20,11,1,'19:45:27'),(283,21,9,1,'19:45:27'),(284,21,10,1,'19:45:28'),(285,20,12,0,'19:45:28'),(286,19,10,1,'19:45:29'),(287,20,13,0,'19:45:30'),(288,21,11,0,'19:45:30');
/*!40000 ALTER TABLE `Turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cola_empleado`
--

DROP TABLE IF EXISTS `cola_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cola_empleado` (
  `idUnionCoEm` int(10) NOT NULL AUTO_INCREMENT,
  `idCola` int(10) DEFAULT NULL,
  `idEmpleado` int(10) DEFAULT NULL,
  PRIMARY KEY (`idUnionCoEm`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cola_empleado`
--

LOCK TABLES `cola_empleado` WRITE;
/*!40000 ALTER TABLE `cola_empleado` DISABLE KEYS */;
INSERT INTO `cola_empleado` VALUES (13,20,20),(14,19,21),(15,21,21),(16,19,22),(17,21,22),(18,19,21),(19,21,21),(20,20,21),(21,19,23);
/*!40000 ALTER TABLE `cola_empleado` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-01 21:07:03