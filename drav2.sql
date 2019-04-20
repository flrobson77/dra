-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
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
-- Table structure for table `dra_cliente`
--

DROP TABLE IF EXISTS `dra_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_cliente` (
  `nm_cliente` varchar(20) NOT NULL,
  `sn_cliente` varchar(40) NOT NULL,
  `em_cliente` varchar(50) DEFAULT NULL,
  `te_cliente` varchar(15) DEFAULT NULL,
  `rg_cliente` varchar(12) DEFAULT NULL,
  `cp_cliente` varchar(11) NOT NULL,
  PRIMARY KEY (`cp_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_cliente`
--

LOCK TABLES `dra_cliente` WRITE;
/*!40000 ALTER TABLE `dra_cliente` DISABLE KEYS */;
INSERT INTO `dra_cliente` VALUES ('Manoel','Barbosa','barbosaMC@yahoo.com.br','11972211001','101197834','06853321529'),('Caio','Porto','caioporto@gmail.com','11981714929','244547221','31897130813'),('Catarina','Nogueira','ctarayssa@gmail.com.br','11994767002','423332594','33426989859'),('Andre','Duarte','duarte_andre@gmail.com','11968322019','303670903','42238261826'),('Caroline','Farias','carolinenf@uol.com.br','11981454026','311953955','49874541814'),('Adriana','Ferreira','adrianasf@gmail.com','11930022018','187225916','69439584882');
/*!40000 ALTER TABLE `dra_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dra_contatos`
--

DROP TABLE IF EXISTS `dra_contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_contatos` (
  `id_contato` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` tinyint(3) unsigned DEFAULT NULL,
  `em_contato` varchar(55) NOT NULL,
  `ed_contato` varchar(255) NOT NULL,
  `te_contato` varchar(15) NOT NULL,
  PRIMARY KEY (`id_contato`),
  KEY `membro_fk` (`id_membro`),
  CONSTRAINT `membro_fk` FOREIGN KEY (`id_membro`) REFERENCES `dra_membros` (`id_membro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_contatos`
--

LOCK TABLES `dra_contatos` WRITE;
/*!40000 ALTER TABLE `dra_contatos` DISABLE KEYS */;
INSERT INTO `dra_contatos` VALUES (1,1,'daniel@dra.br','Rua do Rosario, 100','11912340001'),(2,2,'ricardo@dra.br','Av. Brigadeiro Faria Lima, 1000','11912340002'),(3,3,'mariao@dra.br','Av. Silvestre Pires de Freitas, 500','11912340003'),(4,4,'manuela@dra.br','Av. Salgado Filho, 1200','11912340003');
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
-- Table structure for table `dra_processos`
--

DROP TABLE IF EXISTS `dra_processos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_processos` (
  `id_processo` varchar(11) NOT NULL,
  `cp_cliente` varchar(11) NOT NULL,
  `tl_processo` varchar(30) DEFAULT NULL,
  `de_processo` text,
  `id_membro` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_processo`),
  KEY `advoga_fk` (`id_membro`),
  KEY `client_fk` (`cp_cliente`),
  CONSTRAINT `advoga_fk` FOREIGN KEY (`id_membro`) REFERENCES `dra_membros` (`id_membro`),
  CONSTRAINT `client_fk` FOREIGN KEY (`cp_cliente`) REFERENCES `dra_cliente` (`cp_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_processos`
--

LOCK TABLES `dra_processos` WRITE;
/*!40000 ALTER TABLE `dra_processos` DISABLE KEYS */;
/*!40000 ALTER TABLE `dra_processos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dra_stspro`
--

DROP TABLE IF EXISTS `dra_stspro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_stspro` (
  `id_sts` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `id_processo` varchar(11) NOT NULL,
  `st_sts` varchar(12) NOT NULL,
  `dt_sts` date DEFAULT NULL,
  `hr_sts` time DEFAULT NULL,
  `id_membro` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_sts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_stspro`
--

LOCK TABLES `dra_stspro` WRITE;
/*!40000 ALTER TABLE `dra_stspro` DISABLE KEYS */;
/*!40000 ALTER TABLE `dra_stspro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dra_users`
--

DROP TABLE IF EXISTS `dra_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dra_users` (
  `id_users` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` tinyint(3) unsigned DEFAULT NULL,
  `nm_users` varchar(20) NOT NULL,
  `pw_users` varchar(14) NOT NULL,
  `tp_users` varchar(3) NOT NULL,
  PRIMARY KEY (`id_users`),
  KEY `login_fk` (`id_membro`),
  CONSTRAINT `login_fk` FOREIGN KEY (`id_membro`) REFERENCES `dra_membros` (`id_membro`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dra_users`
--

LOCK TABLES `dra_users` WRITE;
/*!40000 ALTER TABLE `dra_users` DISABLE KEYS */;
INSERT INTO `dra_users` VALUES (1,NULL,'admin','mudar123','SAD'),(2,1,'daniel','dra@123','SAD'),(3,2,'ricardo','dra@123','ADM'),(4,3,'maria','dra@123','COM'),(5,4,'manuela','dra@123','COM');
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

-- Dump completed on 2019-04-20  1:49:12
