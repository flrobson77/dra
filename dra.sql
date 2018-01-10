-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: dra
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dra_contatos`
--

DROP TABLE IF EXISTS `dra_contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_contatos` (
  `id_contato` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `em_contato` varchar(55) NOT NULL,
  `ed_contato` varchar(255) NOT NULL,
  `te_contato` varchar(15) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_contatos`
--

LOCK TABLES `dra_contatos` WRITE;
/*!40000 ALTER TABLE `dra_contatos` DISABLE KEYS */;
INSERT INTO `dra_contatos` VALUES (1,'daniel@dra.br','Rua do Rosario, 100','11912340001'),(2,'ricardo@dra.br','Av. Brigadeiro Faria Lima, 1000','11912340002'),(3,'mariao@dra.br','Av. Silvestre Pires de Freitas, 500','11912340003'),(4,'manuela@dra.br','Av. Salgado Filho, 1200','11912340003');
/*!40000 ALTER TABLE `dra_contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dra_membros`
--

DROP TABLE IF EXISTS `dra_membros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_membros` (
  `id_membro` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nm_membro` varchar(30) NOT NULL,
  `sn_membro` varchar(50) NOT NULL,
  `st_membro` varchar(30) NOT NULL,
  `fc_membro` varchar(20) NOT NULL,
  `ar_membro` varchar(20) NOT NULL,
  PRIMARY KEY (`id_membro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_membros`
--

LOCK TABLES `dra_membros` WRITE;
/*!40000 ALTER TABLE `dra_membros` DISABLE KEYS */;
INSERT INTO `dra_membros` VALUES (1,'Daniel','Matos','adv','advogado','consumidor'),(2,'Ricardo','Caro','adv','advogado','consumidor'),(3,'Maria','Flor','sec','estagiaria','secretaria'),(4,'Manuela','Santos','sec','estagiaria','secretaria');
/*!40000 ALTER TABLE `dra_membros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dra_memcom`
--

DROP TABLE IF EXISTS `dra_memcom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_memcom` (
  `id_membros` tinyint(4) NOT NULL,
  `id_contatos` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_memcom`
--

LOCK TABLES `dra_memcom` WRITE;
/*!40000 ALTER TABLE `dra_memcom` DISABLE KEYS */;
/*!40000 ALTER TABLE `dra_memcom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dra_users`
--

DROP TABLE IF EXISTS `dra_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_users` (
  `id_users` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nm_users` varchar(20) NOT NULL,
  `pw_users` varchar(14) NOT NULL,
  `em_users` varchar(50) NOT NULL,
  `tp_users` varchar(3) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_users`
--

LOCK TABLES `dra_users` WRITE;
/*!40000 ALTER TABLE `dra_users` DISABLE KEYS */;
INSERT INTO `dra_users` VALUES (1,'admin','mudar123','admin@dra.br','SAD'),(2,'daniel','dra@123','daniel@dra.br','SAD'),(3,'ricardo','dra@123','ricardo@dra.br','ADM'),(4,'maria','dra@123','maria@dra.br','COM'),(5,'manuela','dra@123','manuela@dra.br','COM');
/*!40000 ALTER TABLE `dra_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-04 23:11:08
