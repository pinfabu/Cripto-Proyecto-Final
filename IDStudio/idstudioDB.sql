-- MySQL dump 10.13  Distrib 5.7.15, for Win32 (AMD64)
--
-- Host: localhost    Database: idstudio
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.21-MariaDB

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
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `cita_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cita_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `servicio_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` int(5) DEFAULT NULL,
  PRIMARY KEY (`servicio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` VALUES (1,'Manicure',200),(2,'Geish en manos',150),(3,'Gelish en pies',200),(4,'Acrilicas',400),(5,'Esculturales',600),(6,'Diseño',50),(7,'Set(efecto)',150),(8,'Vitamina en uñas',80),(9,'Retiro gelish',50),(10,'Retiro acrilico',100),(11,'Efectos(par)',50),(12,'Diseño french',200),(13,'Diseño en uña (par)',50),(14,'Peinado y maquillaje',1200),(15,'Maquillaje casual',800),(16,'Peinado casual',300),(17,'Peinado straight/wave',200),(18,'Lavado',200),(19,'Corte dama/niña',300),(20,'Corte caballero/niño',200),(21,'Balayage XL',3400),(22,'Balayage L',3000),(23,'Balayage M',2400),(24,'Balayage S',2000),(25,'Balayage XS',1400),(26,'Nanoplastia XL',3500),(27,'Nanoplastia L',3000),(28,'Nanoplastia M',2500),(29,'Nanoplastia S',2000),(30,'Nanoplastia XS',1500),(31,'Ampolleta',200),(32,'Tratamiento Olaplex',500),(33,'Tratamiento hidratacion intensiva',500),(34,'Tinte XL',3000),(35,'Tinte L',2600),(36,'Tinte M',2000),(37,'Tinte S',1600),(38,'Tinte XS',1100),(39,'Matiz XL',3000),(40,'Matiz L',2600),(41,'Matiz M',2000),(42,'Matiz S',1600),(43,'Matiz XS',1100),(44,'Global XL',1400),(45,'Global L',1200),(46,'Global M',1000),(47,'Global S',800),(48,'Global XS',600);
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_cita`
--

DROP TABLE IF EXISTS `servicio_cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio_cita` (
  `servicio_cita_id` int(11) NOT NULL AUTO_INCREMENT,
  `servicio_id` int(11) DEFAULT NULL,
  `cita_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`servicio_cita_id`),
  KEY `servicio_id` (`servicio_id`),
  KEY `cita_id` (`cita_id`),
  CONSTRAINT `servicio_cita_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`servicio_id`),
  CONSTRAINT `servicio_cita_ibfk_2` FOREIGN KEY (`cita_id`) REFERENCES `cita` (`cita_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_cita`
--

LOCK TABLES `servicio_cita` WRITE;
/*!40000 ALTER TABLE `servicio_cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio_cita` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-11 15:09:51
