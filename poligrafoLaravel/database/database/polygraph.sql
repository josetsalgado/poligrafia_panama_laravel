-- MySQL dump 10.13  Distrib 5.6.33, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: polygraph
-- ------------------------------------------------------
-- Server version	5.6.33-0ubuntu0.14.04.1

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
-- Current Database: `polygraph`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `polygraph` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `polygraph`;

--
-- Table structure for table `itcl_rols`
--

DROP TABLE IF EXISTS `itcl_rols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcl_rols` (
  `id_rol` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_rol` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description_rol` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcl_rols`
--

LOCK TABLES `itcl_rols` WRITE;
/*!40000 ALTER TABLE `itcl_rols` DISABLE KEYS */;
INSERT INTO `itcl_rols` VALUES (1,'Administrador','Usuario administrador del sistema'),(2,'Poligrafista','Usuario con permisos de poligrafista');
/*!40000 ALTER TABLE `itcl_rols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_appoiments`
--

DROP TABLE IF EXISTS `itcp_appoiments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_appoiments` (
  `id_appoiment` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(25) unsigned DEFAULT NULL,
  `service_id` int(25) unsigned DEFAULT NULL,
  `company_id` int(25) unsigned DEFAULT NULL,
  `client_id` int(25) unsigned DEFAULT NULL,
  `patient_id` int(25) unsigned DEFAULT NULL,
  `city_appoiment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_appoiment` date DEFAULT NULL,
  `time_appoiment` time DEFAULT NULL,
  `comentary_appoiment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `time_arrival` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_appoiment`),
  KEY `patient_id` (`patient_id`),
  KEY `service_id` (`service_id`),
  KEY `client_id` (`client_id`),
  KEY `company` (`company_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_appoiments`
--

LOCK TABLES `itcp_appoiments` WRITE;
/*!40000 ALTER TABLE `itcp_appoiments` DISABLE KEYS */;
INSERT INTO `itcp_appoiments` VALUES (49,1,5,1,2,182,'PANAMA','2017-11-02','07:00:00','asd','Asistió',''),(50,NULL,5,1,2,183,'PANAMA','2017-11-09','07:00:00','','Pendiente',''),(51,NULL,5,2,3,184,'PANAMA','0000-00-00','07:00:00','','Pendiente',''),(52,1,5,1,2,185,'PANAMA','2017-11-03','07:00:00','','Pendiente','');
/*!40000 ALTER TABLE `itcp_appoiments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_budgets`
--

DROP TABLE IF EXISTS `itcp_budgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_budgets` (
  `id_budget` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(45) unsigned NOT NULL,
  `client_id` int(45) unsigned DEFAULT NULL,
  `date_init_budget` date DEFAULT NULL,
  `budgets_register_id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `total_budget` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `observations` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_budget`),
  KEY `company_id` (`company_id`),
  KEY `client_id` (`client_id`),
  KEY `number_budget` (`budgets_register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_budgets`
--

LOCK TABLES `itcp_budgets` WRITE;
/*!40000 ALTER TABLE `itcp_budgets` DISABLE KEYS */;
INSERT INTO `itcp_budgets` VALUES (1,1,3,'2017-08-08','SbIN9NVJ','240',''),(2,2,4,'2017-10-08','iuEEukQ7','210',''),(3,1,2,'2017-10-09','447oYruu','45',''),(4,1,3,'2017-10-20','ZbMyUSSK','360',''),(5,2,5,'2017-10-20','g3Nm41lQ','60',''),(6,1,1,'2017-10-24','lg1Q8G3a','500','primer comentario'),(7,1,1,'2017-10-25','0bjZN4O9','360','123'),(8,1,1,'2017-10-25','O9fnzwnU','1870','sdas'),(9,1,1,'2017-10-25','NmTvWKem','540','12'),(10,1,1,'2017-10-25','JSkJ5zmm','540','12'),(11,1,1,'2017-10-25','kJQ4Tj9w','760','123'),(12,1,1,'2017-10-25','AVsel1f1','580','123'),(13,1,1,'2017-10-25','FARBiml7','1870','12'),(14,1,1,'2017-10-25','1QkHoU9Z','360','12'),(15,1,1,'2017-10-25','mbxLryJn','390','13'),(18,1,1,'2017-10-25','uXlRt3hR','580','123'),(19,1,2,'2017-11-01','ZhBp7B3w','3122',''),(20,1,2,'2017-11-01','O9nMWHAw','1359','');
/*!40000 ALTER TABLE `itcp_budgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_budgets_register`
--

DROP TABLE IF EXISTS `itcp_budgets_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_budgets_register` (
  `id_register_budgets` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `quantity_budget` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `total_budget` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `service_id` int(25) unsigned NOT NULL,
  KEY `id_register_budgets` (`id_register_budgets`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_budgets_register`
--

LOCK TABLES `itcp_budgets_register` WRITE;
/*!40000 ALTER TABLE `itcp_budgets_register` DISABLE KEYS */;
INSERT INTO `itcp_budgets_register` VALUES ('SbIN9NVJ','10','100',5),('SbIN9NVJ','15','300',6),('iuEEukQ7','2','20',5),('iuEEukQ7','10','200',6),('447oYruu','1','10',5),('447oYruu','2','40',6),('ZbMyUSSK','12','120',5),('ZbMyUSSK','12','240',6),('g3Nm41lQ','2','20',5),('g3Nm41lQ','2','40',6),('lg1Q8G3a','10','100',5),('lg1Q8G3a','20','400',6),('0bjZN4O9','12','120',5),('0bjZN4O9','12','240',6),('O9fnzwnU','123','1230',5),('O9fnzwnU','32','640',6),('NmTvWKem','12','120',5),('NmTvWKem','21','420',6),('JSkJ5zmm','12','120',5),('JSkJ5zmm','21','420',6),('kJQ4Tj9w','12','120',5),('kJQ4Tj9w','32','640',6),('AVsel1f1','12','120',5),('AVsel1f1','23','460',6),('FARBiml7','123','1230',5),('FARBiml7','32','640',6),('1QkHoU9Z','12','120',5),('1QkHoU9Z','12','240',6),('mbxLryJn','13','130',5),('mbxLryJn','13','260',6),('uXlRt3hR','12','120',5),('uXlRt3hR','23','460',6),('ZhBp7B3w','123','1230',5),('ZhBp7B3w','32','640',6),('ZhBp7B3w','12','516',7),('ZhBp7B3w','32','736',8),('O9nMWHAw','12','120',5),('O9nMWHAw','12','240',6),('O9nMWHAw','12','516',7),('O9nMWHAw','21','483',8);
/*!40000 ALTER TABLE `itcp_budgets_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_citys`
--

DROP TABLE IF EXISTS `itcp_citys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_citys` (
  `id_city` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_city` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_citys`
--

LOCK TABLES `itcp_citys` WRITE;
/*!40000 ALTER TABLE `itcp_citys` DISABLE KEYS */;
INSERT INTO `itcp_citys` VALUES (1,'ciudad de Panama'),(2,'Santiago'),(3,'Colon');
/*!40000 ALTER TABLE `itcp_citys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_clients`
--

DROP TABLE IF EXISTS `itcp_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_clients` (
  `id_client` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `company_id` int(25) unsigned NOT NULL,
  `city` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `position` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_clients`
--

LOCK TABLES `itcp_clients` WRITE;
/*!40000 ALTER TABLE `itcp_clients` DISABLE KEYS */;
INSERT INTO `itcp_clients` VALUES (1,'Jose','123213','jose@cocacola.com',0,'caracascas','Gerente RRHH'),(2,'jose','231','das@asd.com',1,'caracas','Gerente rrhh'),(3,'cliente prueba 1','21','sad@gmail.com',2,'caracas','d'),(4,'rafa','123','qd@dasda.com',1,'123','sada'),(5,'prueba success','4564','asdasd@asdas.com',1,'caracas','dasd'),(6,'asdas','','',1,'',''),(7,'as','','',1,'',''),(8,'asd','12','das@asda.com',1,'sfdsd','asd');
/*!40000 ALTER TABLE `itcp_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_companys`
--

DROP TABLE IF EXISTS `itcp_companys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_companys` (
  `id_company` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ruc_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email_compamy` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `address_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cost_test_pre_employment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cost_specific_test` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cost_routine_test` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `reevaluation_test_cost` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `retention_type` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_companys`
--

LOCK TABLES `itcp_companys` WRITE;
/*!40000 ALTER TABLE `itcp_companys` DISABLE KEYS */;
INSERT INTO `itcp_companys` VALUES (1,'coca coola','234d','324','cocacola@cocacola.com','co','','','','3','3.4'),(2,'pepsi','213f','23324','pepsi@pepsi.com','sadsa a','','','','',''),(3,'Zomm','213asd','123321','zoom@zoom.com','zona zoom','','','','',''),(7,'company 1','11a11 a','5555','aabb@aabb.com','caracas','221','','','',''),(11,'company 2','company 2 22','555666','company@2.company','caracas company 2','34','45','56','23',''),(13,'nueva empresa','qwe','123','sda@sad.com','123','21','21','32','12','3.4'),(14,'asdas','1231','12','asdasd@gasda.com','asdasd','','','','','ninguno'),(20,'sfd','1424','343423','sdfs@assafs.com','asdas','','','','','ninguno');
/*!40000 ALTER TABLE `itcp_companys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_homeworks`
--

DROP TABLE IF EXISTS `itcp_homeworks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_homeworks` (
  `id_homework` int(25) NOT NULL AUTO_INCREMENT,
  `name_homework` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `status_homework` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_homework` date DEFAULT NULL,
  `userCreate_homework` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_homework`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_homeworks`
--

LOCK TABLES `itcp_homeworks` WRITE;
/*!40000 ALTER TABLE `itcp_homeworks` DISABLE KEYS */;
INSERT INTO `itcp_homeworks` VALUES (27,'wwww','0','2017-11-17','Administrador'),(30,'sssss','0','2017-11-17','Administrador'),(31,'ffffff','0','2017-11-17','Administrador'),(32,'sssssss','0','2017-11-17','Administrador');
/*!40000 ALTER TABLE `itcp_homeworks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_patients`
--

DROP TABLE IF EXISTS `itcp_patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_patients` (
  `id_patient` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `last_name_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ci_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `job_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_patients`
--

LOCK TABLES `itcp_patients` WRITE;
/*!40000 ALTER TABLE `itcp_patients` DISABLE KEYS */;
INSERT INTO `itcp_patients` VALUES (134,'','','','',''),(135,'','','','',''),(136,'','','','',''),(137,'ds','ds','','ds',''),(138,'321','12','','',''),(139,'ew','','','',''),(140,'21','','','',''),(141,'','','','',''),(142,'','','','',''),(143,'','','','',''),(144,'','','','',''),(145,'','','','',''),(146,'','','','',''),(147,'','','','',''),(148,'','','','',''),(149,'','','','',''),(150,'12','','','',''),(151,'12','','','',''),(152,'','','','',''),(153,'ds','','','',''),(154,'ds','','','',''),(155,'','','','',''),(156,'','','','',''),(157,'da','','','',''),(158,'da','','','',''),(159,'da','','','',''),(160,'da','','','',''),(161,'da','','','',''),(162,'sa','','','',''),(163,'dsa','','','',''),(164,'','','','',''),(165,'2','','','',''),(166,'21','','','',''),(167,'sds','','','',''),(168,'','','','',''),(169,'ds','','','',''),(170,'123','','','',''),(171,'d','','','',''),(172,'s','','','',''),(173,'','','','',''),(174,'','','','',''),(175,'','','','',''),(176,'dsa','','','',''),(177,'dsa','','','',''),(178,'dsa','','','',''),(179,'dsa','','','',''),(180,'s','','','',''),(181,'123','','','',''),(182,'123','a','2','a','1'),(183,'asaaa','','','',''),(184,'s','','','',''),(185,'rafa','aaaa','1222','','');
/*!40000 ALTER TABLE `itcp_patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_payments`
--

DROP TABLE IF EXISTS `itcp_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_payments` (
  `id_payment` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `tax_invoice_number` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `method_of_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `check_number` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_ach` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `full_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `amount_payable` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `observations_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `company_id` int(35) NOT NULL,
  `status_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_first_appoiment` date DEFAULT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_payments`
--

LOCK TABLES `itcp_payments` WRITE;
/*!40000 ALTER TABLE `itcp_payments` DISABLE KEYS */;
INSERT INTO `itcp_payments` VALUES (24,'','','','','10','','',1,'Pendiente por Facturar',NULL),(25,'','','','','0','','',2,'Pendiente por Facturar',NULL);
/*!40000 ALTER TABLE `itcp_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_service`
--

DROP TABLE IF EXISTS `itcp_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_service` (
  `id_service` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_service` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `price_service` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description_service` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_service`
--

LOCK TABLES `itcp_service` WRITE;
/*!40000 ALTER TABLE `itcp_service` DISABLE KEYS */;
INSERT INTO `itcp_service` VALUES (5,'Pre-empleo','10','prueba preempleo'),(6,'Especifica','20','Prueba especifica para usuarios'),(7,'Rutina','43','prueba de rutina'),(8,'Reevaluación','23','Prueba de reevaluación');
/*!40000 ALTER TABLE `itcp_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itcp_status`
--

DROP TABLE IF EXISTS `itcp_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itcp_status` (
  `id_status` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name_status` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description_status` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itcp_status`
--

LOCK TABLES `itcp_status` WRITE;
/*!40000 ALTER TABLE `itcp_status` DISABLE KEYS */;
INSERT INTO `itcp_status` VALUES (1,'Activo','Usuario activo del sistema'),(2,'Inactivo','usuario inactivo del sistema');
/*!40000 ALTER TABLE `itcp_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `payload` text COLLATE utf8_spanish_ci NOT NULL,
  `last_activity` int(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_id` int(25) unsigned NOT NULL,
  `tel` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Poligrafista27','Poligrafista2','$2y$10$uBGkN8J5FHsJylQzjbD4pOAAlFMc0GVevMHG4Yyd8yBYKF5qdcWgm','QC68gSZbafm4iQLiW0pryOjzxxAenpn41RqmcYYeG3dq7TnTRk6rreCGyxbq',2,'23','a'),(2,'Administrador','poligrafo','$2y$10$uE116vTvsBikvRs/xWOo6.k5aP1eaGLiHfJypZjSn2gHcjdue/thi','NZbSeCcq5tfsC3ywcnPDO0jbcohJDDIVsw0of3Urb7Z6Y0ltI7Sj0Lc6p09l',1,'123','admin@admin.com'),(3,'poligrafista1','poligrafista1 apellido','$2y$10$pe2SXFONUaa2VXy7nR32CuQ43UdHm1agcUW6xI3AvwA1eH./.pdN.','rv8bU2hPEvVu0AH67HGJtgEMxq9EclDMadw1LPm8oHFDVXwWhFYEWqa5GBDi',2,'123','poli1@poli1.com'),(4,'Jose','Salgado','123','Nx9nj6fUF7r5aqkGMfaYh8WMZM90tVTFawzUg6rGdeSJDPfjU8JrMkzRu6CM',1,'123','salgado@salgado.com'),(5,'emilyn ','Garcia','$2y$10$IsuuvMh3PXuPjJaLHy.s0eUcgimdwKrcLtTyiBI8e9ffYarVqu/ru','bYaDCy4bQg3tiWFfA8uoopAJo2CdDF5Po2RH2j6DXcQogTjyIjwySq56Es0F',2,'123','egarcia@ilernus.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-17  9:04:01
