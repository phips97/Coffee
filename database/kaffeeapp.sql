-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `kaffee`
--

DROP TABLE IF EXISTS `kaffee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kaffee` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `preis_cent` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kaffee`
--

LOCK TABLES `kaffee` WRITE;
/*!40000 ALTER TABLE `kaffee` DISABLE KEYS */;
INSERT INTO `kaffee` VALUES (1,'Tasse Kaffee',30),(2,'Espresso',50);
/*!40000 ALTER TABLE `kaffee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lehrer`
--

DROP TABLE IF EXISTS `lehrer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lehrer` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL,
  `guthaben_cent` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lehrer`
--

LOCK TABLES `lehrer` WRITE;
/*!40000 ALTER TABLE `lehrer` DISABLE KEYS */;
INSERT INTO `lehrer` VALUES (1,'Karl','Steinam','steini1',500,'steinam@klara-oppenheimer-schule.de',0),(2,'Lena','Langhirt','LAL',200,'langhirt@klara-oppenheimer-schule.de',0),(3,'Administrator','','admin',0,'admin',1);
/*!40000 ALTER TABLE `lehrer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vorgangslog`
--

DROP TABLE IF EXISTS `vorgangslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vorgangslog` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `lehrer_id` int(6) DEFAULT NULL,
  `datum` datetime DEFAULT NULL,
  `vorgangstext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lehrer_id` (`lehrer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vorgangslog`
--

LOCK TABLES `vorgangslog` WRITE;
/*!40000 ALTER TABLE `vorgangslog` DISABLE KEYS */;
INSERT INTO `vorgangslog` VALUES (1,1,'2017-10-30 14:32:34','Abbuchung für einen Kaffee');
/*!40000 ALTER TABLE `vorgangslog` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-06 11:46:04
