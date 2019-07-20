-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: cosy_db
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `act_plan`
--

DROP TABLE IF EXISTS `act_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `act_plan` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` text,
  `data1` text,
  `data2` int(11) DEFAULT NULL,
  `data3` int(11) DEFAULT NULL,
  `data4` int(11) DEFAULT NULL,
  `data5` int(11) DEFAULT NULL,
  `data6` text,
  `data7` text,
  `data8` text,
  `data9` text,
  `data10` text,
  `data11` text,
  `data12` int(11) DEFAULT NULL,
  `data13` int(11) DEFAULT NULL,
  `data14` text,
  `data15` text,
  `data16` text,
  `data17` text,
  `data18` text,
  `data19` text,
  `data20` text,
  `data21` text,
  `data22` text,
  `data23` text,
  `data24` text,
  `data25` text,
  `data26` text,
  `data27` text,
  `data28` int(11) DEFAULT NULL,
  `data29` text,
  `data30` int(11) DEFAULT NULL,
  `data31` text,
  `data32` int(11) DEFAULT NULL,
  `data33` text,
  `data34` int(11) DEFAULT NULL,
  `data35` text,
  `data36` int(11) DEFAULT NULL,
  `data37` text,
  PRIMARY KEY (`act_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `act_plan`
--

LOCK TABLES `act_plan` WRITE;
/*!40000 ALTER TABLE `act_plan` DISABLE KEYS */;
INSERT INTO `act_plan` VALUES (3,'PAT0001','03/01/2019',1,2,3,4,'on','on','on','on','02/25/2019','02/25/2019',5,6,'on','on','on','on','on','on','on','on','on','on','on','on','on','on',9,'on',8,'on',7,'on',6,'on',5,'2019-03-04 23:37:21');
/*!40000 ALTER TABLE `act_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `assessment` (
  `ass_num` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `ass_desc` text,
  `ass_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`ass_num`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment`
--

LOCK TABLES `assessment` WRITE;
/*!40000 ALTER TABLE `assessment` DISABLE KEYS */;
INSERT INTO `assessment` VALUES (13,'PAT0005','hello','2018-06-25 13:53:51'),(14,'PAT0007','Primary Infertility \n\nDiminished Ovarian Reserve secondary to age factor','2018-07-13 22:01:23'),(15,'PAT0009','Primary Infertility','2018-07-13 23:33:44'),(16,'PAT0017','Missed miscarriage','2019-03-01 23:44:02'),(17,'PAT0019','DOR due to age factor','2019-03-02 00:36:59'),(18,'PAT0018','Male factor resolved; female age factor','2019-03-02 00:59:17');
/*!40000 ALTER TABLE `assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `charge`
--

DROP TABLE IF EXISTS `charge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `charge` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `ch_ip` varchar(45) DEFAULT NULL,
  `ch_doc` varchar(45) DEFAULT NULL,
  `ch_irre` varchar(45) DEFAULT NULL,
  `ch_dys` varchar(45) DEFAULT NULL,
  `ch_dis` varchar(45) DEFAULT NULL,
  `ch_dia` varchar(45) DEFAULT NULL,
  `ch_ast` varchar(45) DEFAULT NULL,
  `ch_smo` varchar(45) DEFAULT NULL,
  `ch_dri` varchar(45) DEFAULT NULL,
  `ch_cont` varchar(45) DEFAULT NULL,
  `ch_hpv` varchar(45) DEFAULT NULL,
  `ch_pap` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charge`
--

LOCK TABLES `charge` WRITE;
/*!40000 ALTER TABLE `charge` DISABLE KEYS */;
INSERT INTO `charge` VALUES (25,'PAT0012',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(24,'PAT0011',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(16,'PAT0003',NULL,'',NULL,NULL,NULL,NULL,NULL,'Yes','No',NULL,NULL,''),(17,'PAT0004',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(18,'PAT0005',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(19,'PAT0006',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(20,'PAT0007',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(21,'PAT0008',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(22,'PAT0009',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(23,'PAT0010',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(26,'PAT0013',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(27,'PAT0014',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(28,'PAT0015',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(29,'PAT0016',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(30,'PAT0017',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(31,'PAT0018',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(32,'PAT0019',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(33,'PAT0020',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(34,'PAT0021',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(35,'PAT0022',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(36,'PAT0023',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(37,'PAT0024',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(38,'PAT0025',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(39,'PAT0026',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(40,'PAT0027',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(41,'PAT0028',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(42,'PAT0029',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(43,'PAT0030',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(44,'PAT0031',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(45,'PAT0032',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(46,'PAT0033',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(47,'PAT0034',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(48,'PAT0035',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(49,'PAT0036',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(50,'PAT0037',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(51,'PAT0038',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(52,'PAT0039',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(53,'PAT0040',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(54,'PAT0041',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(55,'PAT0042',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(56,'PAT0043',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(57,'PAT0044',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(58,'PAT0045',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(59,'PAT0046',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(60,'PAT0047',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(61,'PAT0048',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(62,'PAT0049',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(63,'PAT0050',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(64,'PAT0051',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(65,'PAT0052',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(66,'PAT0053',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(67,'PAT0054',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(68,'PAT0055',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(69,'PAT0056',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(70,'PAT0057',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(71,'PAT0058',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(72,'PAT0059',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(73,'PAT0060',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(74,'PAT0061',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(75,'PAT0062',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(76,'PAT0063',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(77,'PAT0064',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(78,'PAT0065',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(79,'PAT0066',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(80,'PAT0067',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(81,'PAT0068',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(82,'PAT0069',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(83,'PAT0070',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(84,'PAT0071',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(85,'PAT0072',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(86,'PAT0073',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(87,'PAT0074',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(88,'PAT0075',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(89,'PAT0076',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(90,'PAT0077',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(91,'PAT0078',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(92,'PAT0079',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(93,'PAT0080',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(94,'PAT0081',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(95,'PAT0082',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(96,'PAT0083',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(97,'PAT0084',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(98,'PAT0085',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(99,'PAT0086',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(100,'PAT0087',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(101,'PAT0088',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(102,'PAT0089',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(103,'PAT0090',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(104,'PAT0091',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(105,'PAT0092',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(106,'PAT0093',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(107,'PAT0094',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(108,'PAT0095',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(109,'PAT0096',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(110,'PAT0097',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(111,'PAT0098',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(112,'PAT0099',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(113,'PAT0100',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(114,'PAT0101',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(115,'PAT0102',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(116,'PAT0103',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(117,'PAT0104',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(118,'PAT0105',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(119,'PAT0106',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(120,'PAT0107',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(121,'PAT0108',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(122,'PAT0109',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `charge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `complaint` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `com_g` varchar(45) DEFAULT NULL,
  `com_a` varchar(45) DEFAULT NULL,
  `com_p` varchar(45) DEFAULT NULL,
  `com_l` varchar(45) DEFAULT NULL,
  `com_lmp` varchar(45) DEFAULT NULL,
  `com_Lh` varchar(45) DEFAULT NULL,
  `com_Ln` varchar(45) DEFAULT NULL,
  `com_Ll` varchar(45) DEFAULT NULL,
  `com_pmp` varchar(45) DEFAULT NULL,
  `com_Ph` varchar(45) DEFAULT NULL,
  `com_Pn` varchar(45) DEFAULT NULL,
  `com_Pl` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint`
--

LOCK TABLES `complaint` WRITE;
/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
INSERT INTO `complaint` VALUES (35,'PAT0012',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(34,'PAT0011',NULL,NULL,NULL,NULL,'03/19/2019',NULL,NULL,NULL,'03/16/2019',NULL,NULL,NULL),(26,'PAT0003',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(27,'PAT0004',NULL,NULL,NULL,NULL,'01/27/2019',NULL,'on',NULL,'12/31/2018','on',NULL,NULL),(28,'PAT0005',NULL,NULL,NULL,NULL,'12/17/2018',NULL,NULL,NULL,'11/19/2018',NULL,NULL,NULL),(29,'PAT0006',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(30,'PAT0007',NULL,NULL,NULL,NULL,'02/17/2019',NULL,NULL,NULL,'01/19/2019',NULL,NULL,NULL),(31,'PAT0008',NULL,NULL,NULL,NULL,'01/30/2019',NULL,NULL,NULL,'01/01/2019',NULL,NULL,NULL),(32,'PAT0009',NULL,NULL,NULL,NULL,'02/26/19','on',NULL,NULL,'12/29/18','on',NULL,NULL),(33,'PAT0010',NULL,NULL,NULL,NULL,'02/18/19','on',NULL,NULL,'01/18/19','on',NULL,NULL),(36,'PAT0013',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(37,'PAT0014',NULL,NULL,NULL,NULL,'03/01/19','on',NULL,NULL,'1/13/19','on',NULL,NULL),(38,'PAT0015',NULL,NULL,NULL,NULL,'01/17/19','on',NULL,NULL,'12/04/18','on',NULL,NULL),(39,'PAT0016',NULL,NULL,NULL,NULL,'07/13/18','on',NULL,NULL,'06/16/18','on',NULL,NULL),(40,'PAT0017',NULL,NULL,NULL,NULL,'12/12/18','on',NULL,NULL,'11/12/18','on',NULL,NULL),(41,'PAT0018',NULL,NULL,NULL,NULL,'01/23/19','on',NULL,NULL,'02/18/19','on',NULL,NULL),(42,'PAT0019',NULL,NULL,NULL,NULL,'12/04/18','on',NULL,NULL,'03/01/19',NULL,NULL,NULL),(43,'PAT0020',NULL,NULL,NULL,NULL,'02/08/19','on',NULL,NULL,'12/24/18','on',NULL,NULL),(44,'PAT0021',NULL,NULL,NULL,NULL,'02/23/19','on',NULL,NULL,'01/31/19','on',NULL,NULL),(45,'PAT0022',NULL,NULL,NULL,NULL,'10/22/18','on',NULL,NULL,'10/19/17','on',NULL,NULL),(46,'PAT0023',NULL,NULL,NULL,NULL,'11/13/18','on',NULL,NULL,'9/17/18','on',NULL,NULL),(47,'PAT0024',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(48,'PAT0025',NULL,NULL,NULL,NULL,'02/26/19','on',NULL,NULL,'01/08/19','on',NULL,NULL),(49,'PAT0026',NULL,NULL,NULL,NULL,'03/04/2019','on',NULL,NULL,'11/14/18',NULL,NULL,NULL),(50,'PAT0027',NULL,NULL,NULL,NULL,'08/16/18','on',NULL,NULL,'06/01/18','on',NULL,NULL),(51,'PAT0028',NULL,NULL,NULL,NULL,'11/30/18','on',NULL,NULL,'10/1/18','on',NULL,NULL),(52,'PAT0029',NULL,NULL,NULL,NULL,'01/31/19','on',NULL,NULL,'12/31/18','on',NULL,NULL),(53,'PAT0030',NULL,NULL,NULL,NULL,'01/20/19','on',NULL,NULL,'12/17/18','on',NULL,NULL),(54,'PAT0031',NULL,NULL,NULL,NULL,'03/02/19','on',NULL,NULL,'01/28/19','on',NULL,NULL),(55,'PAT0032',NULL,NULL,NULL,NULL,'11/01/18','on',NULL,NULL,'10/01/18',NULL,NULL,NULL),(56,'PAT0033',NULL,NULL,NULL,NULL,'02/13/19','on',NULL,NULL,'01/11/19','on',NULL,NULL),(57,'PAT0034',NULL,NULL,NULL,NULL,'02/21/19','on',NULL,NULL,'01/20/19','on',NULL,NULL),(58,'PAT0035',NULL,NULL,NULL,NULL,'2/15/19','on',NULL,NULL,'1/13/19','on',NULL,NULL),(59,'PAT0036',NULL,NULL,NULL,NULL,'02/19/19','on',NULL,NULL,'01/17/19','on',NULL,NULL),(60,'PAT0037',NULL,NULL,NULL,NULL,'02/19/19','on',NULL,NULL,'01/27/19','on',NULL,NULL),(61,'PAT0038',NULL,NULL,NULL,NULL,'03/04/19','on',NULL,NULL,'01/27/19','on',NULL,NULL),(62,'PAT0039',NULL,NULL,NULL,NULL,'01/16/19','on',NULL,NULL,'02/24/19','on',NULL,NULL),(63,'PAT0040',NULL,NULL,NULL,NULL,'1/6/19','on',NULL,NULL,'9/10/18','on',NULL,NULL),(64,'PAT0041',NULL,NULL,NULL,NULL,'01/14/19','on',NULL,NULL,'12/16/18','on',NULL,NULL),(65,'PAT0042',NULL,NULL,NULL,NULL,'02/23/19','on',NULL,NULL,'01/22/19','on',NULL,NULL),(66,'PAT0043',NULL,NULL,NULL,NULL,'07/29/18','on',NULL,NULL,'06/01/18','on',NULL,NULL),(67,'PAT0044',NULL,NULL,NULL,NULL,'11/24/18','on',NULL,NULL,'10/23/18','on',NULL,NULL),(68,'PAT0045',NULL,NULL,NULL,NULL,'12/20/18','on',NULL,NULL,'11/22/18','on',NULL,NULL),(69,'PAT0046',NULL,NULL,NULL,NULL,'12/02/18','on',NULL,NULL,'12/28/18','on',NULL,NULL),(70,'PAT0047',NULL,NULL,NULL,NULL,'02/28/19','on',NULL,NULL,'01/31/19','on',NULL,NULL),(71,'PAT0048',NULL,NULL,NULL,NULL,'2/16/19','on',NULL,NULL,'1/15/19','on',NULL,NULL),(72,'PAT0049',NULL,NULL,NULL,NULL,'1/31/18','on',NULL,NULL,'',NULL,NULL,NULL),(73,'PAT0050',NULL,NULL,NULL,NULL,'01/19/19','on',NULL,NULL,'12/18/19','on',NULL,NULL),(74,'PAT0051',NULL,NULL,NULL,NULL,'02/14/19','on',NULL,NULL,'01/15/19','on',NULL,NULL),(75,'PAT0052',NULL,NULL,NULL,NULL,'01/26/19','on',NULL,NULL,'12/30/18','on',NULL,NULL),(76,'PAT0053',NULL,NULL,NULL,NULL,'02/21/2019',NULL,'on',NULL,'01/20/2019',NULL,'on',NULL),(77,'PAT0054',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(78,'PAT0055',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(79,'PAT0056',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(80,'PAT0057',NULL,NULL,NULL,NULL,'02/21/2019',NULL,'on',NULL,'01/27/2019',NULL,'on',NULL),(81,'PAT0058',NULL,NULL,NULL,NULL,'02/20/2019',NULL,'on',NULL,'01/22/2019',NULL,'on',NULL),(82,'PAT0059',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(83,'PAT0060',NULL,NULL,NULL,NULL,'02/09/19','on',NULL,NULL,'01/10/19','on',NULL,NULL),(84,'PAT0061',NULL,NULL,NULL,NULL,'01/13/19','on',NULL,NULL,'12/01/19','on',NULL,NULL),(85,'PAT0062',NULL,NULL,NULL,NULL,'01/29/19','on',NULL,NULL,'12/30/18','on',NULL,NULL),(86,'PAT0063',NULL,NULL,NULL,NULL,'07/14/18',NULL,NULL,NULL,'06/11/18',NULL,NULL,NULL),(87,'PAT0064',NULL,NULL,NULL,NULL,'09/28/18',NULL,NULL,NULL,'07/04/18',NULL,NULL,NULL),(88,'PAT0065',NULL,NULL,NULL,NULL,'02/20/19',NULL,NULL,NULL,'01/14/19',NULL,NULL,NULL),(89,'PAT0066',NULL,NULL,NULL,NULL,'01/26/19',NULL,NULL,NULL,'12/01/18',NULL,NULL,NULL),(90,'PAT0067',NULL,NULL,NULL,NULL,'02/21/19',NULL,NULL,NULL,'12/14/18',NULL,NULL,NULL),(91,'PAT0068',NULL,NULL,NULL,NULL,'02/28/19',NULL,NULL,NULL,'01/28/19',NULL,NULL,NULL),(92,'PAT0069',NULL,NULL,NULL,NULL,'07/03/18',NULL,NULL,NULL,'06/01/18',NULL,NULL,NULL),(93,'PAT0070',NULL,NULL,NULL,NULL,'02/24/19',NULL,NULL,NULL,'01/27/19',NULL,NULL,NULL),(94,'PAT0071',NULL,NULL,NULL,NULL,'03/02/19',NULL,NULL,NULL,'02/14/19',NULL,NULL,NULL),(95,'PAT0072',NULL,NULL,NULL,NULL,'03/06/19',NULL,NULL,NULL,'02/06/19',NULL,NULL,NULL),(96,'PAT0073',NULL,NULL,NULL,NULL,'02/26/19',NULL,NULL,NULL,'01/27/19',NULL,NULL,NULL),(97,'PAT0074',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'09/06/18',NULL,NULL,NULL),(98,'PAT0075',NULL,NULL,NULL,NULL,'02/23/19',NULL,NULL,NULL,'01/24/19',NULL,NULL,NULL),(99,'PAT0076',NULL,NULL,NULL,NULL,'11/29/18',NULL,NULL,NULL,'01/01/18',NULL,NULL,NULL),(100,'PAT0077',NULL,NULL,NULL,NULL,'03/06/19',NULL,NULL,NULL,'02/09/19',NULL,NULL,NULL),(101,'PAT0078',NULL,NULL,NULL,NULL,'02/22/19',NULL,NULL,NULL,'01/22/19',NULL,NULL,NULL),(102,'PAT0079',NULL,NULL,NULL,NULL,'07/06/18',NULL,NULL,NULL,'',NULL,NULL,NULL),(103,'PAT0080',NULL,NULL,NULL,NULL,'02/07/19',NULL,NULL,NULL,'11/05/19',NULL,NULL,NULL),(104,'PAT0081',NULL,NULL,NULL,NULL,'10/05/18',NULL,NULL,NULL,'07/10/18',NULL,NULL,NULL),(105,'PAT0082',NULL,NULL,NULL,NULL,'11/19/18',NULL,NULL,NULL,'10/18/18',NULL,NULL,NULL),(106,'PAT0083',NULL,NULL,NULL,NULL,'2/14/19',NULL,NULL,NULL,'1/11/19',NULL,NULL,NULL),(107,'PAT0084',NULL,NULL,NULL,NULL,'02/23/19',NULL,NULL,NULL,'01/07/19',NULL,NULL,NULL),(108,'PAT0085',NULL,NULL,NULL,NULL,'02/25/19',NULL,NULL,NULL,'10/23/18',NULL,NULL,NULL),(109,'PAT0086',NULL,NULL,NULL,NULL,'01/16/19',NULL,NULL,NULL,'11/12/19',NULL,NULL,NULL),(110,'PAT0087',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(111,'PAT0088',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(112,'PAT0089',NULL,NULL,NULL,NULL,'02/23/19',NULL,NULL,NULL,'01/26/19',NULL,NULL,NULL),(113,'PAT0090',NULL,NULL,NULL,NULL,'02/23/19',NULL,NULL,NULL,'01/13/19',NULL,NULL,NULL),(114,'PAT0091',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(115,'PAT0092',NULL,NULL,NULL,NULL,'02/22/2019',NULL,NULL,NULL,'',NULL,NULL,NULL),(116,'PAT0093',NULL,NULL,NULL,NULL,'02/05/2019',NULL,'on',NULL,'',NULL,NULL,NULL),(117,'PAT0094',NULL,NULL,NULL,NULL,'12/22/2018',NULL,'on',NULL,'11/03/2018',NULL,'on',NULL),(118,'PAT0095',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(119,'PAT0096',NULL,NULL,NULL,NULL,'03/07/2019',NULL,'on',NULL,'02/02/2019',NULL,NULL,NULL),(120,'PAT0097',NULL,NULL,NULL,NULL,'02/18/2019',NULL,'on',NULL,'01/13/2019',NULL,NULL,NULL),(121,'PAT0098',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(122,'PAT0099',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(123,'PAT0100',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(124,'PAT0101',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(125,'PAT0102',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(126,'PAT0103',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(127,'PAT0104',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(128,'PAT0105',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(129,'PAT0106',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(130,'PAT0107',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(131,'PAT0108',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL),(132,'PAT0109',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL);
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `embryology`
--

DROP TABLE IF EXISTS `embryology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `embryology` (
  `emb_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) DEFAULT NULL,
  `emb_esdate` varchar(45) DEFAULT NULL,
  `emb_cycle` varchar(45) DEFAULT NULL,
  `emb_opudate` varchar(45) DEFAULT NULL,
  `emb_tnec` varchar(45) DEFAULT NULL,
  `emb_rt` varchar(45) DEFAULT NULL,
  `emb_lt` varchar(45) DEFAULT NULL,
  `emb_tnef1` varchar(45) DEFAULT NULL,
  `emb_tnef2` varchar(45) DEFAULT NULL,
  `emb_tnez1` varchar(45) DEFAULT NULL,
  `emb_tnez2` varchar(45) DEFAULT NULL,
  `emb_pi` varchar(45) DEFAULT NULL,
  `emb_mi` varchar(45) DEFAULT NULL,
  `emb_tnme` varchar(45) DEFAULT NULL,
  `emb_tnae1` varchar(45) DEFAULT NULL,
  `emb_tnae2` varchar(45) DEFAULT NULL,
  `emb_tnpe` varchar(45) DEFAULT NULL,
  `emb_tneafi1` varchar(45) DEFAULT NULL,
  `emb_tneafi2` varchar(45) DEFAULT NULL,
  `emb_tneafi3` varchar(45) DEFAULT NULL,
  `emb_tnefer1` varchar(45) DEFAULT NULL,
  `emb_tnefer2` varchar(45) DEFAULT NULL,
  `emb_tnefer3` varchar(45) DEFAULT NULL,
  `emb_tnecle` varchar(45) DEFAULT NULL,
  `emb_tnetran` varchar(45) DEFAULT NULL,
  `emb_getran` varchar(45) DEFAULT NULL,
  `emb_tned` varchar(45) DEFAULT NULL,
  `emb_tnefro` varchar(45) DEFAULT NULL,
  `emb_density` varchar(45) DEFAULT NULL,
  `emb_motility` varchar(45) DEFAULT NULL,
  `emb_morphology` varchar(45) DEFAULT NULL,
  `emb_embryologist` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `embryology`
--

LOCK TABLES `embryology` WRITE;
/*!40000 ALTER TABLE `embryology` DISABLE KEYS */;
INSERT INTO `embryology` VALUES (7,'PAT0110','05/01/2019','1','05/02/2019','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30');
/*!40000 ALTER TABLE `embryology` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fol_plan`
--

DROP TABLE IF EXISTS `fol_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `fol_plan` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `st_lab1` varchar(45) DEFAULT NULL,
  `st_lab2` varchar(45) DEFAULT NULL,
  `st_lab3` varchar(45) DEFAULT NULL,
  `st_lab4` varchar(45) DEFAULT NULL,
  `st_lab5` varchar(45) DEFAULT NULL,
  `st_lab6` varchar(45) DEFAULT NULL,
  `st_lab7` varchar(45) DEFAULT NULL,
  `st_lab8` varchar(45) DEFAULT NULL,
  `st_lab9` varchar(45) DEFAULT NULL,
  `st_lab10` varchar(45) DEFAULT NULL,
  `st_lab11` varchar(45) DEFAULT NULL,
  `st_res1` varchar(45) DEFAULT NULL,
  `st_res2` varchar(45) DEFAULT NULL,
  `st_res3` varchar(45) DEFAULT NULL,
  `st_res4` varchar(45) DEFAULT NULL,
  `st_res5` varchar(45) DEFAULT NULL,
  `st_res6` varchar(45) DEFAULT NULL,
  `st_res7` varchar(45) DEFAULT NULL,
  `st_res8` varchar(45) DEFAULT NULL,
  `st_res9` varchar(45) DEFAULT NULL,
  `st_res10` varchar(45) DEFAULT NULL,
  `st_res11` varchar(45) DEFAULT NULL,
  `st_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fol_plan`
--

LOCK TABLES `fol_plan` WRITE;
/*!40000 ALTER TABLE `fol_plan` DISABLE KEYS */;
INSERT INTO `fol_plan` VALUES (2,'PAT0004','on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','2019-03-01 22:18:54'),(3,'PAT0010',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','Pt  3/15/2019','AMH - 0.35 ng/mL','2019-03-01 23:03:52'),(4,'PAT0003',NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','March 23, 2019','','','','','','','','','2019-03-01 23:23:31'),(5,'PAT0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','March 11','2019-03-01 23:31:22'),(9,'PAT0015',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','','','','PT 3/21 or D1-5','2019-03-02 00:17:03'),(10,'PAT0012','on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','','','','Pt  3/18/2019 or D1-3; Check RF, AFC','2019-03-02 00:24:36'),(8,'PAT0013',NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','March 8 @ 4pm','','','','','','','','Ffup on March 13','Ffup @ March 13','2019-03-02 00:01:29'),(11,'PAT0014',NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,'','','','','After 6 mos','','','','','AMH - 0.01 ng/mL (3/2/2019)','AMH - 0.01 ng/mL (3/2/2019)','2019-03-02 00:29:48');
/*!40000 ALTER TABLE `fol_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gyne`
--

DROP TABLE IF EXISTS `gyne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `gyne` (
  `gy_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `gy_date` varchar(45) DEFAULT NULL,
  `gy_doctor` varchar(45) DEFAULT NULL,
  `gy_diag` varchar(45) DEFAULT NULL,
  `gy_tre` varchar(45) DEFAULT NULL,
  `gy_mar` varchar(45) DEFAULT NULL,
  `gy_coh` varchar(45) DEFAULT NULL,
  `gy_try` varchar(45) DEFAULT NULL,
  `gy_coi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`gy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gyne`
--

LOCK TABLES `gyne` WRITE;
/*!40000 ALTER TABLE `gyne` DISABLE KEYS */;
INSERT INTO `gyne` VALUES (19,'PAT0012','','','','','','','',''),(18,'PAT0011','','','','','','','',''),(10,'PAT0003','','','','','','','',''),(11,'PAT0004','','','','','','','',''),(12,'PAT0005','','','','','','','',''),(13,'PAT0006','','','','','','','',''),(14,'PAT0007','','','','','','','',''),(15,'PAT0008','','','','','','','',''),(16,'PAT0009','','','','','','','',''),(17,'PAT0010','','','','','','','',''),(20,'PAT0013','','','','','','','',''),(21,'PAT0014','','','','','','','',''),(22,'PAT0015','','','','','','','',''),(23,'PAT0016','','','','','','','',''),(24,'PAT0017','','','','','','','',''),(25,'PAT0018','','','','','','','',''),(26,'PAT0019','','','','','','','',''),(27,'PAT0020','','','','','','','',''),(28,'PAT0021','','','','','','','',''),(29,'PAT0022','','','','','','','',''),(30,'PAT0023','','','','','','','',''),(31,'PAT0024','','','','','','','',''),(32,'PAT0025','','','','','','','',''),(33,'PAT0026','','','','','','','',''),(34,'PAT0027','','','','','','','',''),(35,'PAT0028','','','','','','','',''),(36,'PAT0029','','','','','','','',''),(37,'PAT0030','','','','','','','',''),(38,'PAT0031','','','','','','','',''),(39,'PAT0032','','','','','','','',''),(40,'PAT0033','','','','','','','',''),(41,'PAT0034','','','','','','','',''),(42,'PAT0035','','','','','','','',''),(43,'PAT0036','','','','','','','',''),(44,'PAT0037','','','','','','','',''),(45,'PAT0038','','','','','','','',''),(46,'PAT0039','','','','','','','',''),(47,'PAT0040','','','','','','','',''),(48,'PAT0041','','','','','','','',''),(49,'PAT0042','','','','','','','',''),(50,'PAT0043','','','','','','','',''),(51,'PAT0044','','','','','','','',''),(52,'PAT0045','','','','','','','',''),(53,'PAT0046','','','','','','','',''),(54,'PAT0047','','','','','','','',''),(55,'PAT0048','','','','','','','',''),(56,'PAT0049','','','','','','','',''),(57,'PAT0050','','','','','','','',''),(58,'PAT0051','','','','','','','',''),(59,'PAT0052','','','','','','','',''),(60,'PAT0053','','','','','','','',''),(61,'PAT0054','','','','','','','',''),(62,'PAT0055','','','','','','','',''),(63,'PAT0056','','','','','','','',''),(64,'PAT0057','','','','','','','',''),(65,'PAT0058','','','','','','','',''),(66,'PAT0059','','','','','','','',''),(67,'PAT0060','','','','','','','',''),(68,'PAT0061','','','','','','','',''),(69,'PAT0062','','','','','','','',''),(70,'PAT0063','','','','','','','',''),(71,'PAT0064','','','','','','','',''),(72,'PAT0065','','','','','','','',''),(73,'PAT0066','','','','','','','',''),(74,'PAT0067','','','','','','','',''),(75,'PAT0068','','','','','','','',''),(76,'PAT0069','','','','','','','',''),(77,'PAT0070','','','','','','','',''),(78,'PAT0071','','','','','','','',''),(79,'PAT0072','','','','','','','',''),(80,'PAT0073','','','','','','','',''),(81,'PAT0074','','','','','','','',''),(82,'PAT0075','','','','','','','',''),(83,'PAT0076','','','','','','','',''),(84,'PAT0077','','','','','','','',''),(85,'PAT0078','','','','','','','',''),(86,'PAT0079','','','','','','','',''),(87,'PAT0080','','','','','','','',''),(88,'PAT0081','','','','','','','',''),(89,'PAT0082','','','','','','','',''),(90,'PAT0083','','','','','','','',''),(91,'PAT0084','','','','','','','',''),(92,'PAT0085','','','','','','','',''),(93,'PAT0086','','','','','','','',''),(94,'PAT0087','','','','','','','',''),(95,'PAT0088','','','','','','','',''),(96,'PAT0089','','','','','','','',''),(97,'PAT0090','','','','','','','',''),(98,'PAT0091','','','','','','','',''),(99,'PAT0092','','','','','','','',''),(100,'PAT0093','','','','','','','',''),(101,'PAT0094','','','','','','','',''),(102,'PAT0095','','','','','','','',''),(103,'PAT0096','','','','','','','',''),(104,'PAT0097','','','','','','','',''),(105,'PAT0098','','','','','','','',''),(106,'PAT0099','','','','','','','',''),(107,'PAT0100','','','','','','','',''),(108,'PAT0101','','','','','','','',''),(109,'PAT0102','','','','','','','',''),(110,'PAT0103','','','','','','','',''),(111,'PAT0104','','','','','','','',''),(112,'PAT0105','','','','','','','',''),(113,'PAT0106','','','','','','','',''),(114,'PAT0107','','','','','','','',''),(115,'PAT0108','','','','','','','',''),(116,'PAT0109','','','','','','','','');
/*!40000 ALTER TABLE `gyne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `history` (
  `his_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `his_b1` varchar(45) DEFAULT NULL,
  `his_b2` varchar(45) DEFAULT NULL,
  `his_b3` varchar(45) DEFAULT NULL,
  `his_b4` varchar(45) DEFAULT NULL,
  `his_b5` varchar(45) DEFAULT NULL,
  `his_b6` varchar(45) DEFAULT NULL,
  `his_b7` varchar(45) DEFAULT NULL,
  `his_b8` varchar(45) DEFAULT NULL,
  `his_b9` varchar(45) DEFAULT NULL,
  `his_c1` varchar(45) DEFAULT NULL,
  `his_c2` varchar(45) DEFAULT NULL,
  `his_c3` varchar(45) DEFAULT NULL,
  `his_c4` varchar(45) DEFAULT NULL,
  `his_c5` varchar(45) DEFAULT NULL,
  `his_c6` varchar(45) DEFAULT NULL,
  `his_c7` varchar(45) DEFAULT NULL,
  `his_c8` varchar(45) DEFAULT NULL,
  `his_c9` varchar(45) DEFAULT NULL,
  `his_d1` varchar(45) DEFAULT NULL,
  `his_e1` varchar(45) DEFAULT NULL,
  `his_e2` varchar(45) DEFAULT NULL,
  `his_e1_2` varchar(45) DEFAULT NULL,
  `his_f1` varchar(45) DEFAULT NULL,
  `his_f2` varchar(45) DEFAULT NULL,
  `his_f3` varchar(45) DEFAULT NULL,
  `his_f4` varchar(45) DEFAULT NULL,
  `his_f5` varchar(45) DEFAULT NULL,
  `his_f6` varchar(45) DEFAULT NULL,
  `his_f7` varchar(45) DEFAULT NULL,
  `his_f8` varchar(45) DEFAULT NULL,
  `his_f9` varchar(45) DEFAULT NULL,
  `his_f10` varchar(45) DEFAULT NULL,
  `his_f11` varchar(45) DEFAULT NULL,
  `his_f12` varchar(45) DEFAULT NULL,
  `his_f13` varchar(45) DEFAULT NULL,
  `his_f14` varchar(45) DEFAULT NULL,
  `his_f15` varchar(45) DEFAULT NULL,
  `his_f16` varchar(45) DEFAULT NULL,
  `his_f17` varchar(45) DEFAULT NULL,
  `his_f18` varchar(45) DEFAULT NULL,
  `his_f19` varchar(45) DEFAULT NULL,
  `his_f20` varchar(45) DEFAULT NULL,
  `his_f21` varchar(45) DEFAULT NULL,
  `his_f22` varchar(45) DEFAULT NULL,
  `his_f23` varchar(45) DEFAULT NULL,
  `his_f24` varchar(45) DEFAULT NULL,
  `his_g1` varchar(45) DEFAULT NULL,
  `his_g2` varchar(45) DEFAULT NULL,
  `his_g3` varchar(45) DEFAULT NULL,
  `his_g4` varchar(45) DEFAULT NULL,
  `his_g5` varchar(45) DEFAULT NULL,
  `his_g6` varchar(45) DEFAULT NULL,
  `his_g7` varchar(45) DEFAULT NULL,
  `his_h1` varchar(45) DEFAULT NULL,
  `his_h2` varchar(45) DEFAULT NULL,
  `his_h3` varchar(45) DEFAULT NULL,
  `his_h4` varchar(45) DEFAULT NULL,
  `his_h5` varchar(45) DEFAULT NULL,
  `his_h6` varchar(45) DEFAULT NULL,
  `his_h7` varchar(45) DEFAULT NULL,
  `his_h8` varchar(45) DEFAULT NULL,
  `his_h9` varchar(45) DEFAULT NULL,
  `his_h10` varchar(45) DEFAULT NULL,
  `his_i1` varchar(45) DEFAULT NULL,
  `his_i2` varchar(45) DEFAULT NULL,
  `his_i3` varchar(45) DEFAULT NULL,
  `his_i4` varchar(45) DEFAULT NULL,
  `his_i5` varchar(45) DEFAULT NULL,
  `his_i6` varchar(45) DEFAULT NULL,
  `his_i7` varchar(45) DEFAULT NULL,
  `his_i8` varchar(45) DEFAULT NULL,
  `his_i9` varchar(45) DEFAULT NULL,
  `his_i10` varchar(45) DEFAULT NULL,
  `his_j1` varchar(45) DEFAULT NULL,
  `his_j2` varchar(45) DEFAULT NULL,
  `his_j3` varchar(45) DEFAULT NULL,
  `his_j4` varchar(45) DEFAULT NULL,
  `his_j5` varchar(45) DEFAULT NULL,
  `his_j6` varchar(45) DEFAULT NULL,
  `his_j7` varchar(45) DEFAULT NULL,
  `his_k1` varchar(45) DEFAULT NULL,
  `his_k2` varchar(45) DEFAULT NULL,
  `his_k3` varchar(45) DEFAULT NULL,
  `his_k1_2` varchar(45) DEFAULT NULL,
  `his_k2_2` varchar(45) DEFAULT NULL,
  `his_k3_2` varchar(45) DEFAULT NULL,
  `his_k1_3` varchar(45) DEFAULT NULL,
  `his_k2_3` varchar(45) DEFAULT NULL,
  `his_k3_3` varchar(45) DEFAULT NULL,
  `his_l1` varchar(45) DEFAULT NULL,
  `his_l2` varchar(45) DEFAULT NULL,
  `his_l3` varchar(45) DEFAULT NULL,
  `his_l4` varchar(45) DEFAULT NULL,
  `his_l5` varchar(45) DEFAULT NULL,
  `his_l6` varchar(45) DEFAULT NULL,
  `his_l7` varchar(45) DEFAULT NULL,
  `his_l8` varchar(45) DEFAULT NULL,
  `his_l9` varchar(45) DEFAULT NULL,
  `his_l10` varchar(45) DEFAULT NULL,
  `his_l11` varchar(45) DEFAULT NULL,
  `his_m1` varchar(45) DEFAULT NULL,
  `his_m2` varchar(45) DEFAULT NULL,
  `his_m3` varchar(45) DEFAULT NULL,
  `his_m4` varchar(45) DEFAULT NULL,
  `his_n1` varchar(45) DEFAULT NULL,
  `his_n2` varchar(45) DEFAULT NULL,
  `his_n3` varchar(45) DEFAULT NULL,
  `his_n4` varchar(45) DEFAULT NULL,
  `his_n5` varchar(45) DEFAULT NULL,
  `his_n6` varchar(45) DEFAULT NULL,
  `his_n7` varchar(45) DEFAULT NULL,
  `his_n8` varchar(45) DEFAULT NULL,
  `his_n9` varchar(45) DEFAULT NULL,
  `his_o1` varchar(45) DEFAULT NULL,
  `his_o2` varchar(45) DEFAULT NULL,
  `his_o3` varchar(45) DEFAULT NULL,
  `his_o4` varchar(45) DEFAULT NULL,
  `his_o5` varchar(45) DEFAULT NULL,
  `his_o6` varchar(45) DEFAULT NULL,
  `his_o7` varchar(45) DEFAULT NULL,
  `his_o8` varchar(45) DEFAULT NULL,
  `his_o9` varchar(45) DEFAULT NULL,
  `his_o10` varchar(45) DEFAULT NULL,
  `his_o11` varchar(45) DEFAULT NULL,
  `his_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`his_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (38,'PAT0007','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','on','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-07-13 22:08:21');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lt_plan`
--

DROP TABLE IF EXISTS `lt_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lt_plan` (
  `ltp_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(7) DEFAULT NULL,
  `ltp_p1` varchar(3) DEFAULT NULL,
  `ltp_p2` varchar(3) DEFAULT NULL,
  `ltp_p3` varchar(3) DEFAULT NULL,
  `ltp_p4` varchar(3) DEFAULT NULL,
  `ltp_p5` varchar(3) DEFAULT NULL,
  `ltp_p6` varchar(3) DEFAULT NULL,
  `ltp_p7` varchar(3) DEFAULT NULL,
  `ltp_p8` varchar(3) DEFAULT NULL,
  `ltp_p9` varchar(3) DEFAULT NULL,
  `ltp_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`ltp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lt_plan`
--

LOCK TABLES `lt_plan` WRITE;
/*!40000 ALTER TABLE `lt_plan` DISABLE KEYS */;
INSERT INTO `lt_plan` VALUES (105,'PAT0012',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:27:36'),(104,'PAT0011',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:20:15'),(96,'PAT0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 18:51:53'),(97,'PAT0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 19:13:09'),(98,'PAT0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 20:01:47'),(99,'PAT0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 20:37:48'),(100,'PAT0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 20:47:09'),(101,'PAT0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 20:58:47'),(102,'PAT0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:08:49'),(103,'PAT0010',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:14:04'),(106,'PAT0013',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:31:33'),(107,'PAT0014',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:38:23'),(108,'PAT0015','on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:47:47'),(109,'PAT0016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:52:34'),(110,'PAT0017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 21:58:22'),(111,'PAT0018','on',NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 22:02:15'),(112,'PAT0019',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 22:05:19'),(113,'PAT0020','on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 22:11:23'),(114,'PAT0021',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 22:15:52'),(115,'PAT0022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 22:24:23'),(116,'PAT0023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 22:25:52'),(117,'PAT0024',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-01 23:57:35'),(118,'PAT0025',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 18:26:31'),(119,'PAT0026',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 18:38:41'),(120,'PAT0027',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 18:42:26'),(121,'PAT0028',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 18:44:45'),(122,'PAT0029',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 18:54:54'),(123,'PAT0030',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 18:58:59'),(124,'PAT0031',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:03:24'),(125,'PAT0032',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:08:05'),(126,'PAT0033',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:14:29'),(127,'PAT0034',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:18:07'),(128,'PAT0035',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:19:25'),(129,'PAT0036',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:30:42'),(130,'PAT0037',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:36:31'),(131,'PAT0038',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:40:17'),(132,'PAT0039',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:45:10'),(133,'PAT0040',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:47:02'),(134,'PAT0041',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 19:56:51'),(135,'PAT0042',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:02:36'),(136,'PAT0043',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:07:09'),(137,'PAT0044',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:14:25'),(138,'PAT0045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:19:01'),(139,'PAT0046',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:22:26'),(140,'PAT0047',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:29:32'),(141,'PAT0048',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 20:32:56'),(142,'PAT0049',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 21:52:21'),(143,'PAT0050',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 21:59:32'),(144,'PAT0051',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 22:02:48'),(145,'PAT0052',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-03 22:38:53'),(146,'PAT0053',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-04 18:14:50'),(147,'PAT0054',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-04 18:17:55'),(148,'PAT0055',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-04 18:21:14'),(149,'PAT0056',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-04 18:23:42'),(150,'PAT0057',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-04 18:29:16'),(151,'PAT0058',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-04 18:32:57'),(152,'PAT0059',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 18:37:05'),(153,'PAT0060',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 18:43:16'),(154,'PAT0061',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 18:51:22'),(155,'PAT0062',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 18:56:30'),(156,'PAT0063',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:04:21'),(157,'PAT0064',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:12:11'),(158,'PAT0065',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:20:21'),(159,'PAT0066',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:22:53'),(160,'PAT0067',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:27:17'),(161,'PAT0068',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:32:52'),(162,'PAT0069',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 19:36:00'),(163,'PAT0070',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 20:01:25'),(164,'PAT0071',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-05 20:06:10'),(165,'PAT0072',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:09:34'),(166,'PAT0073',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:20:48'),(167,'PAT0074',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:24:51'),(168,'PAT0075',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:33:31'),(169,'PAT0076',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:40:20'),(170,'PAT0077',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:43:55'),(171,'PAT0078',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:50:07'),(172,'PAT0079',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:55:08'),(173,'PAT0080',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 18:58:38'),(174,'PAT0081',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 19:05:23'),(175,'PAT0082',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 19:09:57'),(176,'PAT0083',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-06 19:23:15'),(177,'PAT0084',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 18:30:18'),(178,'PAT0085',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 18:34:51'),(179,'PAT0086',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 18:38:14'),(180,'PAT0087',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 18:49:42'),(181,'PAT0088',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 18:55:11'),(182,'PAT0089',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 18:59:59'),(183,'PAT0090',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 19:03:37'),(184,'PAT0091',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-07 19:11:10'),(185,'PAT0092',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 18:43:25'),(186,'PAT0093',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 18:47:17'),(187,'PAT0094',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 18:49:25'),(188,'PAT0095',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 18:51:31'),(189,'PAT0096',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 18:56:18'),(190,'PAT0097',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 19:07:09'),(191,'PAT0098',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 20:22:59'),(192,'PAT0099',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 20:33:35'),(193,'PAT0100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 20:50:05'),(194,'PAT0101',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 20:54:57'),(195,'PAT0102',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 21:20:54'),(196,'PAT0103',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 22:41:31'),(197,'PAT0104',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 22:51:49'),(198,'PAT0105',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 22:57:07'),(199,'PAT0106',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 23:26:03'),(200,'PAT0107',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 23:30:41'),(201,'PAT0108',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-28 23:47:40'),(202,'PAT0109',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-29 00:36:33');
/*!40000 ALTER TABLE `lt_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `partners` (
  `pat_num` varchar(10) NOT NULL,
  `par_lname` varchar(45) DEFAULT NULL,
  `par_fname` varchar(45) DEFAULT NULL,
  `par_mname` varchar(45) DEFAULT NULL,
  `par_bdate` varchar(45) DEFAULT NULL,
  `par_occu` varchar(45) DEFAULT NULL,
  `par_other` varchar(45) DEFAULT NULL,
  `par_owomen` varchar(45) DEFAULT NULL,
  `par_eche` varchar(45) DEFAULT NULL,
  `par_eradia` varchar(45) DEFAULT NULL,
  `par_eheat` varchar(45) DEFAULT NULL,
  `par_dia` varchar(45) DEFAULT NULL,
  `par_ast` varchar(45) DEFAULT NULL,
  `par_smo` varchar(45) DEFAULT NULL,
  `par_dri` varchar(45) DEFAULT NULL,
  `par_mum` varchar(45) DEFAULT NULL,
  `par_var` varchar(45) DEFAULT NULL,
  `par_erec` varchar(45) DEFAULT NULL,
  `par_vas` varchar(45) DEFAULT NULL,
  `par_horm` varchar(45) DEFAULT NULL,
  `par_supp` varchar(45) DEFAULT NULL,
  `par_anti` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES ('PAT0012','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0013','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0011','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0003','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0004','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0005','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0006','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0007','Apostol','Sean','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0008','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0009','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0010','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0014','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0015','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0016','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0017','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0018','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0019','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0020','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0021','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0022','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0023','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0024','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0025','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0026','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0027','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0028','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0029','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0030','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0031','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0032','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0033','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0034','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0035','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0036','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0037','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0038','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0039','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0040','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0041','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0042','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0043','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0044','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0045','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0046','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0047','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0048','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0049','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0050','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0051','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0052','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0053','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0054','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0055','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0056','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0057','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0058','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0059','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0060','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0061','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0062','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0063','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0064','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0065','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0066','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0067','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0068','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0069','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0070','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0071','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0072','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0073','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0074','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0075','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0076','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0077','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0078','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0079','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0080','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0081','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0082','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0083','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0084','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0085','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0086','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0087','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0088','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0089','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0090','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0091','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0092','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0093','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0094','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0095','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0096','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0097','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0098','CastaÃ±eda','Bernardo','NA','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0099','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0100','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0101','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0102','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0103','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0104','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0105','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0106','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0107','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0108','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('PAT0109','','','','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `patient` (
  `pat_num` varchar(7) NOT NULL,
  `pat_lname` varchar(100) DEFAULT NULL,
  `pat_fname` varchar(100) DEFAULT NULL,
  `pat_mname` varchar(100) DEFAULT NULL,
  `pat_bday` varchar(10) DEFAULT NULL,
  `pat_cstat` varchar(25) DEFAULT NULL,
  `pat_contact` varchar(20) DEFAULT NULL,
  `pat_email` varchar(100) DEFAULT NULL,
  `pat_fb` varchar(45) DEFAULT NULL,
  `pat_homadd` varchar(255) DEFAULT NULL,
  `pat_occu` varchar(100) DEFAULT NULL,
  `pat_offwor` varchar(100) DEFAULT NULL,
  `pat_asse` varchar(255) DEFAULT NULL,
  `pat_refered` varchar(100) DEFAULT NULL,
  `pat_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES ('PAT0012','De guzman','Ma.Celeste','G','02/02/83','Married','(63) 933-469-8465','NA3@yahoo.com','NA','Candaba,Pampanga','NA','NA','Fm(d18)','NA','2019-03-01 21:27:36'),('PAT0011','Siongco','Marjorie','P','05/12/95','Married','(63) 921-570-4633','NA1@7yahoo.com','M3','Angeles City','Meat vendor','NA','Fm (d12)','Arleme','2019-03-01 21:20:15'),('PAT0003','Canilao','Elenette','S','03/17/1984','Married','(63) 915-897-6254','ettenele_agnus@yahoo.com','','San Isidro Matua, Masantol','Teacher','Bebe Anao, Masantol','','Eric Jay Quizon','2019-03-01 18:51:53'),('PAT0004','tayag','kathleen annamarie','c.','03/26/1986','Married','(63) 995-314-2911','n/a@gmail.com','','DoÃ±a Adela subd. sta cruz porac pampnga','nA','','','Patients','2019-03-01 19:13:09'),('PAT0005','Beronilla','Joanna','T','05/26/1984','Married','(63) 090-886-0817','na@gmail.com.com','N.a','Duale limay bataan','N.a','N.a','','','2019-03-01 20:01:47'),('PAT0006','Bona ','myra','c','06/25/1979','Married','(63) 998-853-9096','gmail@yahoo','NS','Baliwag ,Bulacan','NA','NA','follow up w/ mens','NA','2019-03-01 20:37:48'),('PAT0007','Apostol','Myla andrea','Devera','05/27/1990','Married','(63) 916-573-8237','na@gmail.com','N.a','Pura tarlac','N.a','N.a','','Michelle ocampo','2019-03-01 20:47:09'),('PAT0008','Gutierrez','Imelda','S.','01/08/1979','Married','(63) 917-566-7388','na7@gmail.com','N.a','Nueva ecija','N.a','N.a','','N.a','2019-03-01 20:58:47'),('PAT0009','Balloga ','Ria','C','08/26/1989','Married','(63) 936-633-7223','gmail@yahoo.com','','Isabela','Private employee','','Follow up (d5)','Grace aporadoq','2019-03-01 21:08:49'),('PAT0010','Santiago','Lanie','F','09/15/78','Married','(63) 915-207-6794','NA1@yahoo.com','NA1','San Jose City N.E','Teacher','NA','Fm(d14)','NA','2019-03-01 21:14:04'),('PAT0013','Layug','Jo marie','S','07/11/89','Married','(63) 917-326-1054','NA1@tyahoo.com','NA','Makati City','Cp','','','','2019-03-01 21:31:33'),('PAT0014','Miguel ','Leilani','M','10/28/76','Married','(63) 975-081-4961','NAl@gmail.com','NAl','Angeles city','Sales lady','NA','Follow up','Marlyn gamboa','2019-03-01 21:38:23'),('PAT0015','Andres','Jhoana marie','S','04/17/94','Married','(63) 915-510-6878','naa@gmail.com','NA','Madapdap resettlement mabalacat pampanga','Teacher','N/a','FM (D13)','NA','2019-03-01 21:47:47'),('PAT0016','Dela rama','Jocelyn','','08/26/86','Married','(63) 915-131-3850','naj@gmail.com','NA','Calumpit bulacan','Employee','Calumpit bulacan','FM','Dr. Dychioco','2019-03-01 21:52:34'),('PAT0017','Da jose','Melinda','A','06/28/81','Married','(63) 949-885-4360','nam@gmail.com','NA','Mabalacat pampanga','Employee','N/a','Follow up\r\nAOG- 8 3/7','NA','2019-03-01 21:58:22'),('PAT0018','Razon','Fatima','B','06/17/81','Married','(63) 922-800-3573','naf@gmail.com','Na','San Jose City N.E','Bank Employee','N/a','FM (D13)','NA','2019-03-01 22:02:15'),('PAT0019','Carochie','Lorie','M','07/31/76','Married','(63) 927-870-1045','nalo@gmail.com','NA','Basa Air Base Pampanga','Teacher','Na','Follow up','NA','2019-03-01 22:05:19'),('PAT0020','OaÃ±a','Princess','','09/27/84','Married','(63) 949-780-3156','nap@gmail.com','NA','Mabalacat Pampanga','QA','N/a','FM (D23)','NA','2019-03-01 22:11:23'),('PAT0021','Buenaventura','Jacquiline','','07/18/83','Married','(63) 929-887-4894','naja@gmail.com','NA','Bocaue Bulacan','Engineer','Na','IUI (D13)','NA','2019-03-01 22:15:52'),('PAT0022','Halili','Ethel','Nucum','09/02/1986','Married','(63) 933-480-9426','nae@gmail.com','NA','San Agustin San Fernando Pampanga','NA','Na','Follow up\r\nAOG-13 5/7','NA','2019-03-01 22:24:23'),('PAT0023','Del rosario','Nikki','D','12/17/89','Married','(63) 917-333-729_','nan@gmail.com','NA','Mexico Pampanga','Gov\'t Employee','Na','','','2019-03-01 22:25:51'),('PAT0024','Cancio','Sheena coreen','C','01/25/1986','Married','(63) 092-781-6610','na2@gmail.com','','','','','','','2019-03-01 23:57:35'),('PAT0025','Espiritu','Maria jenny','','02/13/76','Single','(63) 949-399-4540','namj@gmail.com','N/a','Olongapo city','President','N/a','FM (D9)','Aiza Deeper','2019-03-03 18:26:31'),('PAT0026','ramirez','joan','','05/17/85','Married','(63) 955-782-9015','najoan@gmail.com','n/a','Mabalacat Pampanga','Barista','n/a','follow-up\r\nAOG- 6 3/7','N/a','2019-03-03 18:38:41'),('PAT0027','santos','jennifer','q','07/12/91','Married','(63) 966-940-1565','najen@gmail.com','n/a','Mexico Pampanga','n/a','n/a','FM (18)','N/a','2019-03-03 18:42:26'),('PAT0028','mercado','michelle','m','12/22/85','Married','(63) 918-244-9957','michellemercado555@gmail.com','n/a','Havana Residence Pampanga','n/a','n/a','Follow up\r\nAOG- 13 3/7','N/a','2019-03-03 18:44:45'),('PAT0029','calulot','ailene','','09/27/88','Married','(63) 915-363-125_','ailene092712@yahoo.com','n/a','Calibutbut Telebastagan Pampanga','Salon owner','N/a','Follow up\r\n(+) pregtest (march 2-4)\r\nAOG-4 4/7','N/a','2019-03-03 18:54:54'),('PAT0030','Reyes','rholette','m','04/18/88','Married','(63) 125-223-156_','rholettereyes@gmail.com','n/a','Orion Bataan','government employee','Bataan','Follow up \r\nAOG- 5 weeks','Catherine Estacio','2019-03-03 18:58:59'),('PAT0031','Mercado ','joy Lynne','','06/17/87','Married','(63) 908-899-2859','najoy@gmail.com','n/a','Palauig Zambales','Self employed','Zambales','follow up','n/a','2019-03-03 19:03:24'),('PAT0032','cabalo','ma. Zucena','c','03/19/88','Married','(63) 998-852-1370','naz@gmail.com','n/a','Conception Tarlac','Self employed','Tarlac','Follow up\r\n(-) pregtest March 4','n/a','2019-03-03 19:08:05'),('PAT0033','manalang','luzany','p','12/13/82','Married','(63) 933-274-7675','zany@gmail.com','n/a','Tarlac City','business','tarlac City','FM (D20)','','2019-03-03 19:14:29'),('PAT0034','Bacani','jennifer','v','04/02/82','Married','(63) 927-929-3652','rbaymd@gmail.com','n/a','Apayao','physician','Apayao','FM (D12)','n/a','2019-03-03 19:18:07'),('PAT0035','cantos','lalaine','s','03/10/80','Married','(63) 917-820-9837','nala@gmail.com','n/a','Telebastagan CSFP','Flight Attendant','n/a','FM (D18)','N/a','2019-03-03 19:19:25'),('PAT0036','tan','karen','','05/16/76','Married','(63) 922-841-0516','karen@gmail.com','n/a','Angeles City','n/a','n/a','FM (D14)','N/a','2019-03-03 19:30:42'),('PAT0037','pineda','thea','','07/16/83','Married','(63) 917-827-3308','thea2@gmail.com','n/a','Sto . Tomas pampanga','n/a','n/a','FM(D14)','N/a','2019-03-03 19:36:31'),('PAT0038','nepomuceno','anna liza','go','09/25/78','Married','(63) 920-982-6550','anna@gmail.com','n/a','Angeles City','Flight Attendant','n/a','follow up','N/a','2019-03-03 19:40:17'),('PAT0039','lopez','regina','','01/24/89','Married','(63) 906-786-4828','regina@gmail.com','n/a','Pandan Angeles City','graphics QA','Angeles City','FM(D9)','N/a','2019-03-03 19:45:10'),('PAT0040','manalo','charlene','rubia','06/08/94','Married','(63) 929-702-5205','charlene@gmail.com','n/a','Sasmuan Pampanga','n/a','n/a\r\n','follow up\r\nAOG 8 1/7','N/a','2019-03-03 19:47:02'),('PAT0041','galang','aizza  amor','','05/24/84','Married','(63) 927-720-7080','sangot52484@gmail.com','n/a','Angeles City','gov\'t','A.C','folow up','N/a','2019-03-03 19:56:51'),('PAT0042','abad','amalia','m','11/16/77','Married','(63) 949-464-0102','amalia@gmail.com','n/a','Tarlac City','Employee','Tarlac City','FM(D14)','N/a','2019-03-03 20:02:36'),('PAT0043','austria','lennie','','01/07/77','Married','(63) 928-442-4606','lennie@gmail.com','n/a','Olongapo City','Manager','Olongapo City','','','2019-03-03 20:07:09'),('PAT0044','alipio','maureen','c','11/26/91','Married','(63) 927-263-2409','maureen@gmail.com','n/a','San Isidro CSFP','n/a','n/a','Follow up\r\nAOG 14 1/7','N/a','2019-03-03 20:14:25'),('PAT0045','dimalanta','analyn','','09/22/78','Married','(63) 932-909-8161','analyn@gmail.com','n/a','Angeles City','n/a','n/a','Follow up\r\nAOG- 7 1/7','N/a','2019-03-03 20:19:01'),('PAT0046','pera','cristle','','02/18/87','Married','(63) 948-271-3644','cristle@gmail.com','n/a','Floridablanca Pampanga','n\\a','n/a','Follow up\r\nAOG 9 1/7','N/a','2019-03-03 20:22:26'),('PAT0047','tiglao','athena','s','12/10/1982','Married','(63) 916-326-9914','athena@gmail.com','n/a','Mexico pamp.','n/a','n/a','Follow up','n/a','2019-03-03 20:29:32'),('PAT0048','feliciano','lhalaine','','02/04/93','Married','(63) 905-586-9341','lhalainefeliciano@gmail.com','n/a','Magalang Pampanga','n/a','n/a','for papsmear','N/a','2019-03-03 20:32:56'),('PAT0049','guiuo','mary ann luisa','m','12/23/78','Married','(63) 925-823-0788','mary@gmail.com','n/a','Sto. Tomas Pampanga','n/a','n/a','Follow up','Dr. Jeanette Samonte','2019-03-03 21:52:21'),('PAT0050','Tolentino','julie ann kristine','s','07/03/89','Married','(63) 917-771-6181','julieannekristinesalta@yahoo.com','n/a','Bacolor Pampanga','employee','Pampanga','FM (D10)','N/a','2019-03-03 21:59:32'),('PAT0051','Mendoza','elizabeth','','10/13/79','Married','(63) 929-440-7282','elizabeth@gmail.com','n/a','Del Rosario CSFP','n/a','n/a','Follow up','n/a','2019-03-03 22:02:48'),('PAT0052','ramos','cindy','','08/23/88','Married','(63) 917-860-7600','cindy@gmail.com','n/a','Paniqui Tarlac','Chemical Engineer','Tarlac','Follow up\r\n(+) pregtest ( feb 26)','Lerida villegas','2019-03-03 22:38:53'),('PAT0053','montambeault','elsa','de vera','11/28/1982','Married','(63) 917-643-4331','elsa@gmail.com','','plaridel bulacan','n.a','n.a','gyne check -up','','2019-03-04 18:14:50'),('PAT0054','lumibao','ellaine','g.','02/25/1987','Married','(63) 929-601-2098','ellaine@gmail.com','','ramos,tarlac','','','follicle monitoring','','2019-03-04 18:17:55'),('PAT0055','felices','resly','b','04/13/1991','Married','(63) 925-483-4724','felices@gmail.com','','dau, mabalacat','','','fm','','2019-03-04 18:21:14'),('PAT0056','vergara','catherine','r','07/18/1981','Married','(63) 927-600-4997','cath@gmail.com','','','','','follicle monitoring','','2019-03-04 18:23:42'),('PAT0057','dela cruz','olive rose','p.','11/25/1978','Married','(63) 092-931-5096','olive@gmail.com','','cabanatuan','cashier','','infertility 1\r\n','','2019-03-04 18:29:16'),('PAT0058','pineda ','beatrice','c','09/14/1992','Single','(63) 929-382-5552','bea@gmail.com','','csf','f.a','','gyne check-up','','2019-03-04 18:32:57'),('PAT0059','beausoleil','josefina','manlong','06/10/61','Married','(63) 915-932-8619','jobeau610@yahoo.com','n/a','Angeles City','n/a','n/a','Follow up','n/a','2019-03-05 18:37:05'),('PAT0060','tiamzon','ada gay','dizon','03/29/77','Married','(63) 925-322-4602','ada@gmail.com','n/a','Angeles City','n/a','n/a','Follow up','n/a','2019-03-05 18:43:16'),('PAT0061','de leon','kristel kate','jingco','02/12/96','Single','(63) 933-811-4619','deleonkristelkate@gmail.com','n/a','Timog Park Sub. Angeles City','Human Resources','Angeles City','Infertility1','n/a','2019-03-05 18:51:22'),('PAT0062','abalus ','jenelyn','','07/27/86','Married','(63) 956-061-1146','abalusjenelyn27@yahoo.com','n/a','Pulung Maragul Angeles','nurse','Angeles City','Follow up\r\n(+) Pregtest March 4','internet','2019-03-05 18:56:30'),('PAT0063','Erese','lady dee','r','10/20/82','Married','(63) 922-910-1061','ydal_dee@yahoo.com','n/a','Concepcion Tarlac','n/a','n/a','Follow up\r\nAOG- 33 1/7','Jenny sto. Domingo','2019-03-05 19:04:21'),('PAT0064','Barrantes','ruth','adriano','12/24/82','Married','(63) 922-437-1931','RUTHMANON@yahoo.com','n/a','Calumpit Bulacan','Dentist','Bulacan','Follow up\r\nAOG- 22 2/7','Rey samson','2019-03-05 19:12:11'),('PAT0065','navidad','jennifer','f','08/24/87','Married','(63) 930-439-5397','jennifer@gmail.com','n/a','Porac Pamp.','student','n/a','FM (D15)','Dra.faith bondoc','2019-03-05 19:20:21'),('PAT0066','gonzales','riezel','p','09/02/78','Married','(63) 908-866-1897','riezel@gmail.com','n/a','Angeles City','n/a','n/a','follow up','n/a','2019-03-05 19:22:53'),('PAT0067','Sembrano','Jerica','t','08/30/1992','Married','(63) 916-905-0551','jerica@gmail.com','n/a','Telesbagan CSFP','N/a','n/a','FM(D14)','Julie ann Tolentino','2019-03-05 19:27:17'),('PAT0068','abejero','kristine','b','10/19/84','Married','(63) 929-211-2820','kristine@gmail.com','n/a','Angeles','sale Supervisor','angeles','Gyne-check up','N/a','2019-03-05 19:32:52'),('PAT0069','lazaro','christina','m','04/13/81','Married','(63) 917-392-7331','ch@gmail.com','n/a','Angeles City','n/a','n/a','follow up\r\nAOG- 35 weeks','n/a','2019-03-05 19:36:00'),('PAT0070','Cortez','genevive','r','08/04/89','Married','(63) 917-510-8471','gen_rillera@yahoo.com','n/a','Dau Mabalacat pamp.','Teacher','Mabalacat','Infertility1','n/a','2019-03-05 20:01:25'),('PAT0071','canlas ','irene','s','04/03/82','Married','(63) 905-111-4511','icanlas0403@gmail.com','n/a','San Matias, Sto. Tomas, Pamp.','n/a','n/a','infertility2','n/a','2019-03-05 20:06:10'),('PAT0072','calderon','honeyzel','f','03/15/81','Single','(63) 932-891-5599','honey@gmail.com','n/a','Guiguinto Bulacan','Teacher','Bulacan','Follow up','n/a','2019-03-06 18:09:34'),('PAT0073','Agulto','maria katrina','','10/22/86','Married','(63) 917-534-9221','maria@gmail.com','n/a','Munoz N.E','Business woman','Nueva Ecija','SHSG (D10)','n/a','2019-03-06 18:20:48'),('PAT0074','yap','mary joy','ayroso','08/10/87','Married','(63) 915-222-8034','mary1@gmail.com','n/a','Cabanatuan City','nurse','Cabanatuan','SHSG','n/a','2019-03-06 18:24:51'),('PAT0075','quiwa','ma. Flourence','f','02/18/80','Married','(63) 917-315-9970','flourenceflores@gmail.com','n/a','Pilar Village CSFP','Physician ( urologist)','Pampanga','IUI (D13)','Dra. Ivie martinez','2019-03-06 18:33:31'),('PAT0076','mananquil','prima','g','08/28/1988','Married','(63) 917-743-5851','gonzales_prima28@gmail.com','n/a','San Nicolas CSFP','n/a','n/a','Follow up \r\nAOG 13 1/7','','2019-03-06 18:40:20'),('PAT0077','lozano','myrna','g','10/22/81','Married','(63) 918-420-8714','myrna@gmail.com','n/a','Sto. Rosario Mexico Pamp.','n/a','n/a','Follow up','n/a','2019-03-06 18:43:55'),('PAT0078','fernando','joanna marie','b','07/06/88','Married','(63) 907-320-4628','joan@gmail.com','n/a','Lubao Pamp.','n/a','n/a','FM (D14)','n/a','2019-03-06 18:50:07'),('PAT0079','Delos reyes','catherine','c','04/03/85','Married','(63) 939-108-2447','cath1@gmail.com','n/a','Tarlac','n/a','n/a','Follow up \r\nAOG 34 wks','','2019-03-06 18:55:08'),('PAT0080','antonio','robelyn','s','06/23/82','Married','(63) 915-296-4509','Roby@gmail.com','n/a','Maimpis CSFP','Teacher','Maimpis CSFP','Follow up','','2019-03-06 18:58:38'),('PAT0081','Tiglao','Sheryl','','10/28/83','Married','(63) 908-821-3956','sherylbognot@yahoo.com','n/a','Saguin CSFP','Businesswoman','Pampanga','Follow up\r\nAOG 18 5/7','n/a','2019-03-06 19:05:23'),('PAT0082','dilay ','maribeth','m','02/10/80','Married','(63) 917-163-9303','dilay@gmail.com','n/a','Guagua Pampanga','Sales Coordinator','Pampanga','Follow up\r\nAOG 14 3/7','Michelle suratos','2019-03-06 19:09:57'),('PAT0083','reyes','lavinia mae','','05/03/90','Married','(63) 905-187-8371','mslaviniaful@yahoo.com','n/a','Pandan Angeles City','Professional Make up Artist','Pampanga','Follow up','Dr. Lorna Bueno','2019-03-06 19:23:15'),('PAT0084','Renabor','nor-ailyn','d','10/10/86','Married','(63) 950-845-5509','nor@gmail.com','n/a','Guimba Nueva Ecija','n/a','n/a','FM (D14)','Dr. Amoroso','2019-03-07 18:30:18'),('PAT0085','lugtu','judy jane','b','07/01/1985','Married','(63) 949-488-6338','judy@gmail.com','n/a','Florida Blanca Pampanga ','n/a','n/a','FM (D12)','','2019-03-07 18:34:51'),('PAT0086','datu ','christine','b','03/06/93','Married','(63) 919-216-8686','tin@gmail.com','n/a','Capas Tarlac','n/a','n/a','FM','','2019-03-07 18:38:14'),('PAT0087','Cordova','Trisha Jenn','g','01/31/1992','Single','(63) 966-452-9811','trisha@gmail.com','n/a','San Isidro Dau Pampanga','Businesswoman','Pampanga','','','2019-03-07 18:49:42'),('PAT0088','miclat','teresita','','12/05/81','Married','(63) 917-566-1548','tere@gmail.com','n/a','Apalit Pampanga','n/a','n/a','follow up \r\nAOG 35wks','','2019-03-07 18:55:11'),('PAT0089','Palafox','ria','m','08/01/82','Married','(63) 919-863-5056','ria@gmail.com','n/a','Lubao Pampanga','n/a','n/a','FM (D14)','','2019-03-07 18:59:59'),('PAT0090','victoriano','jessa mae','','09/30/95','Single','(63) 956-694-5614','jessa@gmail.com','n/a','Angeles City','n/a','n/a','FM(D14)','','2019-03-07 19:03:37'),('PAT0091','bansil','gerlie','b','03/18/82','Married','(63) 917-986-5366','gerlie@gmail.com','n/a','Lubao Pampanga','n/a','n/a','follow up\r\nAOG','','2019-03-07 19:11:10'),('PAT0092','ferrer','honey rose','','01/26/1986','Married','(63) 998-848-1639','honeyrose@gmail.com','','pateros manila','','','','','2019-03-08 18:43:25'),('PAT0093','mariano ','jennelyn','','03/09/1984','Married','(63) 927-501-3295','jennelyn@gmail.com','','san jose sta ana','nurse','jbl','','','2019-03-08 18:47:17'),('PAT0094','viuda','erica ziela','','06/08/1992','Single','(63) 955-377-1994','erica@gmail.com','','tarlac','','','','','2019-03-08 18:49:25'),('PAT0095','antonio ','honey lyn','','05/04/1987','Married','(63) 916-430-5882','honeylyn@gmail.com','','tarlac','','','','','2019-03-08 18:51:31'),('PAT0096','dimailig','maricar','cotaco','08/02/1985','Married','(63) 939-907-7185','ecar@gmail.com','','','physician','','','','2019-03-08 18:56:18'),('PAT0097','elarmo','melissa','c','08/11/1986','Married','(63) 928-898-5478','melissa@gmail.com','','','','','','','2019-03-08 19:07:09'),('PAT0098','David','Jennylyn','Cayetano','11/07/1988','Married','(63) 927-405-8227','jcd@yahoo.com','NA','Blk 16 Lot 10 Lark St. Leoncia Ville Brgy. Sto. Domingo Angeles City','Self employed','NA','NA','Internet','2019-03-28 20:22:59'),('PAT0099','De Jesus','Joy','','07/01/1984','Married','(63) 930-981-2900','jdj@yahoo.com','NA','Malino CSFP','NA','NA','NA','NA','2019-03-28 20:33:35'),('PAT0100','Garcia','Laursen','B.','10/11/1985','Married','(63) 995-184-6593','garcialaursen@yahoo.com','NA','San Nicolas 2nd Lubao','NA','NA','NA','NA','2019-03-28 20:50:05'),('PAT0101','Solinas','Ruby','NA','03/02/1980','Married','(63) 928-349-6162','rubysolinas@yahoo.com','NA','Berosa San Fernando','Sales lady','SM Pampanga Cyberzone','NA','NA','2019-03-28 20:54:57'),('PAT0102','Tayag','Catherine','NA','09/11/1983','Married','(63) 943-807-3889','tayagcatherine@yahoo.com','NA','B3 L5 Tiara St. Ph3 Mansfield Residences','CSR','Tata Consultancy Services','NA','NA','2019-03-28 21:20:54'),('PAT0103','Morales','Mary Ann','T.','04/06/1986','Married','(63) 921-893-6464','moralesmaryann@yahoo.com','NA','San Isidro, Sta. Rita Pampanga','NA','NA','NA','NA','2019-03-28 22:41:31'),('PAT0104','Maniago','Carmela','S.','04/28/1993','Married','(63) 945-345-1036','maniagocarmela@yahoo.com','NA','Malino San Fernando Pampanga','NA','NA','NA','NA','2019-03-28 22:51:49'),('PAT0105','Lagman','Kreann','','11/05/1991','Married','(63) 917-499-7922','lagmankreann@yahoo.com','NA','Dau Homesite Mabt. Pamp.','I.T.','NA','NA','NA','2019-03-28 22:57:07'),('PAT0106','Estacio','Catherine','A.','09/09/1987','Married','(63) 939-931-1358','estaciocatherine@yahoo.com','NA','Calungusan, Orion, Bataan','Clerk III','Philhealth -LHIO Bataan','NA','NA','2019-03-28 23:26:02'),('PAT0107','Sangcap','Joselle','','01/27/1988','Married','(63) 948-530-7544','sangcapjoselle@yahoo.com','NA','B51 L7 Cristin Rd. Essel Subd. CSFP','Housewife','NA','NA','NA','2019-03-28 23:30:41'),('PAT0108','De Guzman','Anthoneth','Alota','07/30/1986','Married','(63) 915-514-0730','deguzmananthoneth@yahoo.com','NA','42 Y Western Hardware Teresa Homes Brgy. Tibag Tarlac City','Businesswoman','NA','NA','NA','2019-03-28 23:47:40'),('PAT0109','Valenzuelas','Jennifer','','07/06/1984','Married','(63) 947-992-5942','valenzuelajennifer@yahoo.com','NA','Camella Homes Baliuag Baliuag Bulacan','Sales officer','NA','NA','NA','2019-03-29 00:36:33');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_records`
--

DROP TABLE IF EXISTS `patient_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `patient_records` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(7) DEFAULT NULL,
  `pr_wei` varchar(10) DEFAULT NULL,
  `pr_hei` varchar(10) DEFAULT NULL,
  `pr_bmi` varchar(5) DEFAULT NULL,
  `pr_bpsys` int(3) DEFAULT NULL,
  `pr_bpdia` int(3) DEFAULT NULL,
  `pr_cc` varchar(45) DEFAULT NULL,
  `pr_lm` varchar(10) DEFAULT NULL,
  `pr_pm` varchar(10) DEFAULT NULL,
  `pr_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_records`
--

LOCK TABLES `patient_records` WRITE;
/*!40000 ALTER TABLE `patient_records` DISABLE KEYS */;
INSERT INTO `patient_records` VALUES (50,'PAT0008','54','152','23.37',100,80,'prenatal check up','5/16/1978','04/16/1978','2018-07-13 23:21:00'),(51,'PAT0009','78','163','29.36',110,80,'Primary Infertility','07/04/2018','06/04/2018','2018-07-13 23:32:52'),(49,'PAT0007','76','158','30.44',120,80,'Gyne check-up / infertility','07/06/2018','06/07/2018','2018-07-13 21:29:10');
/*!40000 ALTER TABLE `patient_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `plan` (
  `plan_num` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `plan_desc` text,
  `plan_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`plan_num`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

LOCK TABLES `plan` WRITE;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
INSERT INTO `plan` VALUES (11,'PAT0001',NULL,'2019-03-01 21:37:08');
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referral`
--

DROP TABLE IF EXISTS `referral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `referral` (
  `ref_num` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `ref_desc` text,
  `ref_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`ref_num`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referral`
--

LOCK TABLES `referral` WRITE;
/*!40000 ALTER TABLE `referral` DISABLE KEYS */;
INSERT INTO `referral` VALUES (2,'PAT0001','is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2018-07-02 17:45:16'),(3,'PAT0005','test','2018-07-02 17:46:17');
/*!40000 ALTER TABLE `referral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siemen`
--

DROP TABLE IF EXISTS `siemen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `siemen` (
  `pat_num` varchar(10) NOT NULL,
  `sie_color` varchar(45) DEFAULT NULL,
  `sie_volume` varchar(6) DEFAULT NULL,
  `sie_ph` varchar(6) DEFAULT NULL,
  `sie_viscosity` varchar(5) DEFAULT NULL,
  `sie_liquetime` varchar(10) DEFAULT NULL,
  `sie_motility` varchar(10) DEFAULT NULL,
  `sie_grading` varchar(5) DEFAULT NULL,
  `sie_morphology` varchar(10) DEFAULT NULL,
  `sie_spercnt` varchar(5) DEFAULT NULL,
  `sie_puscell` varchar(20) DEFAULT NULL,
  `sie_redcell` varchar(10) DEFAULT NULL,
  `sie_bacteria` varchar(45) DEFAULT NULL,
  `sie_daysabs` varchar(5) DEFAULT NULL,
  `sie_wss` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siemen`
--

LOCK TABLES `siemen` WRITE;
/*!40000 ALTER TABLE `siemen` DISABLE KEYS */;
INSERT INTO `siemen` VALUES ('PAT0008','','','','','','','','','','','','','',''),('PAT0007','creamy white','','','','','','','','','','','','',''),('PAT0009','creamy white','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `siemen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_par_med`
--

DROP TABLE IF EXISTS `st_par_med`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_par_med` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `st_id` varchar(45) DEFAULT NULL,
  `med1` varchar(45) DEFAULT NULL,
  `med2` varchar(45) DEFAULT NULL,
  `med3` varchar(45) DEFAULT NULL,
  `med4` varchar(45) DEFAULT NULL,
  `med5` varchar(45) DEFAULT NULL,
  `med6` varchar(45) DEFAULT NULL,
  `med7` varchar(45) DEFAULT NULL,
  `med8` varchar(45) DEFAULT NULL,
  `med9` varchar(45) DEFAULT NULL,
  `med10` varchar(45) DEFAULT NULL,
  `med11` varchar(45) DEFAULT NULL,
  `med12` varchar(45) DEFAULT NULL,
  `med13` varchar(45) DEFAULT NULL,
  `med14` varchar(45) DEFAULT NULL,
  `med15` varchar(45) DEFAULT NULL,
  `med16` varchar(45) DEFAULT NULL,
  `med17` varchar(45) DEFAULT NULL,
  `med18` varchar(45) DEFAULT NULL,
  `med19` varchar(45) DEFAULT NULL,
  `med20` varchar(45) DEFAULT NULL,
  `med21` varchar(45) DEFAULT NULL,
  `med22` varchar(45) DEFAULT NULL,
  `med23` varchar(45) DEFAULT NULL,
  `med24` varchar(45) DEFAULT NULL,
  `med25` varchar(45) DEFAULT NULL,
  `med26` varchar(45) DEFAULT NULL,
  `med27` varchar(45) DEFAULT NULL,
  `med28` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_par_med`
--

LOCK TABLES `st_par_med` WRITE;
/*!40000 ALTER TABLE `st_par_med` DISABLE KEYS */;
INSERT INTO `st_par_med` VALUES (3,'PAT0001','5','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `st_par_med` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_pat_med`
--

DROP TABLE IF EXISTS `st_pat_med`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_pat_med` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) NOT NULL,
  `st_id` varchar(45) DEFAULT NULL,
  `med1` varchar(45) DEFAULT NULL,
  `med2` varchar(45) DEFAULT NULL,
  `med3` varchar(45) DEFAULT NULL,
  `med4` varchar(45) DEFAULT NULL,
  `med5` varchar(45) DEFAULT NULL,
  `med6` varchar(45) DEFAULT NULL,
  `med7` varchar(45) DEFAULT NULL,
  `med8` varchar(45) DEFAULT NULL,
  `med9` varchar(45) DEFAULT NULL,
  `med10` varchar(45) DEFAULT NULL,
  `med11` varchar(45) DEFAULT NULL,
  `med12` varchar(45) DEFAULT NULL,
  `med13` varchar(45) DEFAULT NULL,
  `med14` varchar(45) DEFAULT NULL,
  `med15` varchar(45) DEFAULT NULL,
  `med16` varchar(45) DEFAULT NULL,
  `med17` varchar(45) DEFAULT NULL,
  `med18` varchar(45) DEFAULT NULL,
  `med19` varchar(45) DEFAULT NULL,
  `med20` varchar(45) DEFAULT NULL,
  `med21` varchar(45) DEFAULT NULL,
  `med22` varchar(45) DEFAULT NULL,
  `med23` varchar(45) DEFAULT NULL,
  `med24` varchar(45) DEFAULT NULL,
  `med25` varchar(45) DEFAULT NULL,
  `med26` varchar(45) DEFAULT NULL,
  `med27` varchar(45) DEFAULT NULL,
  `med28` varchar(45) DEFAULT NULL,
  `med29` varchar(45) DEFAULT NULL,
  `med30` varchar(45) DEFAULT NULL,
  `med31` varchar(45) DEFAULT NULL,
  `med32` varchar(45) DEFAULT NULL,
  `med33` varchar(45) DEFAULT NULL,
  `med34` varchar(45) DEFAULT NULL,
  `med35` varchar(45) DEFAULT NULL,
  `med36` varchar(45) DEFAULT NULL,
  `med37` varchar(45) DEFAULT NULL,
  `med38` varchar(45) DEFAULT NULL,
  `med39` varchar(45) DEFAULT NULL,
  `med40` varchar(45) DEFAULT NULL,
  `med41` varchar(45) DEFAULT NULL,
  `med42` varchar(45) DEFAULT NULL,
  `med43` varchar(45) DEFAULT NULL,
  `med44` varchar(45) DEFAULT NULL,
  `med45` varchar(45) DEFAULT NULL,
  `med46` varchar(45) DEFAULT NULL,
  `med47` varchar(45) DEFAULT NULL,
  `med48` varchar(45) DEFAULT NULL,
  `med49` varchar(45) DEFAULT NULL,
  `med50` varchar(45) DEFAULT NULL,
  `med51` varchar(45) DEFAULT NULL,
  `med52` varchar(45) DEFAULT NULL,
  `med53` varchar(45) DEFAULT NULL,
  `med54` varchar(45) DEFAULT NULL,
  `med55` varchar(45) DEFAULT NULL,
  `med56` varchar(45) DEFAULT NULL,
  `med57` varchar(45) DEFAULT NULL,
  `med58` varchar(45) DEFAULT NULL,
  `med59` varchar(45) DEFAULT NULL,
  `med60` varchar(45) DEFAULT NULL,
  `med61` varchar(45) DEFAULT NULL,
  `med62` varchar(45) DEFAULT NULL,
  `med63` varchar(45) DEFAULT NULL,
  `med64` varchar(45) DEFAULT NULL,
  `med65` varchar(45) DEFAULT NULL,
  `med66` varchar(45) DEFAULT NULL,
  `med67` varchar(45) DEFAULT NULL,
  `med68` varchar(45) DEFAULT NULL,
  `med69` varchar(45) DEFAULT NULL,
  `med70` varchar(45) DEFAULT NULL,
  `med71` varchar(45) DEFAULT NULL,
  `med72` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_pat_med`
--

LOCK TABLES `st_pat_med` WRITE;
/*!40000 ALTER TABLE `st_pat_med` DISABLE KEYS */;
INSERT INTO `st_pat_med` VALUES (9,'PAT0003','12','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(10,'PAT0004','13','3/2/2019','3/6/2019','100','10','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','500mg','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(11,'PAT0005','14','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','3/2/2019','3/19/2019','100 mg 1x a day   ','','','','','','','','','','','','','','3/2/2019','3/19/2019','2mg 4x a day','','3/3/2019','3/19/2019','10 mg 3x a day','','','','','','','','',''),(12,'PAT0006','15','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(13,'PAT0010','16','','','','','D3','D7','2.5','15','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(14,'PAT0009','17','3/2/2019','3/6/2019','50','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(15,'PAT0017','18','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(16,'PAT0012','19','','','','','','','','','','','','','','','','','3/2/2019','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','3/4/2019','3/17/2019','','','','','','','','','',''),(17,'PAT0014','20','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(18,'PAT0019','21','','','','','D1','D6','7.5','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(19,'PAT0016','22','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(20,'PAT0016','23','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','3/2/2019','3/9/2019','2mg 4x a day','If estradiol less than 50','','','','','','','','','','','',''),(21,'PAT0018','24','','','','','','','','','','','','','','','','','3/2/2019','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(22,'PAT0020','25','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `st_pat_med` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_plan_par`
--

DROP TABLE IF EXISTS `st_plan_par`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_plan_par` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `st_lab1` varchar(45) DEFAULT NULL,
  `st_lab2` varchar(45) DEFAULT NULL,
  `st_lab3` varchar(45) DEFAULT NULL,
  `st_lab4` varchar(45) DEFAULT NULL,
  `st_lab5` varchar(45) DEFAULT NULL,
  `st_lab6` varchar(45) DEFAULT NULL,
  `st_lab7` varchar(45) DEFAULT NULL,
  `st_lab8` varchar(45) DEFAULT NULL,
  `st_lab9` varchar(45) DEFAULT NULL,
  `st_lab10` varchar(45) DEFAULT NULL,
  `st_res1` varchar(45) DEFAULT NULL,
  `st_res2` varchar(45) DEFAULT NULL,
  `st_res3` varchar(45) DEFAULT NULL,
  `st_res4` varchar(45) DEFAULT NULL,
  `st_res5` varchar(45) DEFAULT NULL,
  `st_res6` varchar(45) DEFAULT NULL,
  `st_res7` varchar(45) DEFAULT NULL,
  `st_res8` varchar(45) DEFAULT NULL,
  `st_res9` varchar(45) DEFAULT NULL,
  `st_res10` varchar(45) DEFAULT NULL,
  `st_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_plan_par`
--

LOCK TABLES `st_plan_par` WRITE;
/*!40000 ALTER TABLE `st_plan_par` DISABLE KEYS */;
INSERT INTO `st_plan_par` VALUES (5,'PAT0001','on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','2019-03-01 20:03:38');
/*!40000 ALTER TABLE `st_plan_par` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_plan_pat`
--

DROP TABLE IF EXISTS `st_plan_pat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_plan_pat` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) NOT NULL,
  `st_lab1` varchar(45) DEFAULT NULL,
  `st_lab2` varchar(45) DEFAULT NULL,
  `st_lab3` varchar(45) DEFAULT NULL,
  `st_lab4` varchar(45) DEFAULT NULL,
  `st_lab5` varchar(45) DEFAULT NULL,
  `st_lab6` varchar(45) DEFAULT NULL,
  `st_lab7` varchar(45) DEFAULT NULL,
  `st_lab8` varchar(45) DEFAULT NULL,
  `st_lab9` varchar(45) DEFAULT NULL,
  `st_lab10` varchar(45) DEFAULT NULL,
  `st_lab11` varchar(45) DEFAULT NULL,
  `st_lab12` varchar(45) DEFAULT NULL,
  `st_lab13` varchar(45) DEFAULT NULL,
  `st_lab14` varchar(45) DEFAULT NULL,
  `st_lab15` varchar(45) DEFAULT NULL,
  `st_lab16` varchar(45) DEFAULT NULL,
  `st_lab17` varchar(45) DEFAULT NULL,
  `st_lab18` varchar(45) DEFAULT NULL,
  `st_lab19` varchar(45) DEFAULT NULL,
  `st_lab20` varchar(45) DEFAULT NULL,
  `st_lab21` varchar(45) DEFAULT NULL,
  `st_res1` varchar(45) DEFAULT NULL,
  `st_res2` varchar(45) DEFAULT NULL,
  `st_res3` varchar(45) DEFAULT NULL,
  `st_res4` varchar(45) DEFAULT NULL,
  `st_res5` varchar(45) DEFAULT NULL,
  `st_res6` varchar(45) DEFAULT NULL,
  `st_res7` varchar(45) DEFAULT NULL,
  `st_res8` varchar(45) DEFAULT NULL,
  `st_res9` varchar(45) DEFAULT NULL,
  `st_res10` varchar(45) DEFAULT NULL,
  `st_res11` varchar(45) DEFAULT NULL,
  `st_res12` varchar(45) DEFAULT NULL,
  `st_res13` varchar(45) DEFAULT NULL,
  `st_res14` varchar(45) DEFAULT NULL,
  `st_res15` varchar(45) DEFAULT NULL,
  `st_res16` varchar(45) DEFAULT NULL,
  `st_res17` varchar(45) DEFAULT NULL,
  `st_res18` varchar(45) DEFAULT NULL,
  `st_res19` varchar(45) DEFAULT NULL,
  `st_res20` varchar(45) DEFAULT NULL,
  `st_res21` varchar(45) DEFAULT NULL,
  `st_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_plan_pat`
--

LOCK TABLES `st_plan_pat` WRITE;
/*!40000 ALTER TABLE `st_plan_pat` DISABLE KEYS */;
INSERT INTO `st_plan_pat` VALUES (12,'PAT0003','on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sample','','','','','','','','','','','','','','','','','','','','','2019-03-01 19:00:59'),(13,'PAT0004',NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','3/2/2019 (5.15 ng/ml)','','','','','','','','','','','','','','','','','2019-03-01 22:16:50'),(14,'PAT0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','','','','','','','','','','','','','','Fet - 3/6/2019 - 8am','2019-03-01 22:38:01'),(15,'PAT0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','','','','','','','','','','','','','','Pt - 03/12/2019 or D1-D5','2019-03-01 22:58:30'),(16,'PAT0010',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','2019-03-01 23:08:31'),(17,'PAT0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','2019-03-01 23:30:50'),(18,'PAT0017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','March 9, 2019','2019-03-01 23:45:27'),(19,'PAT0012',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','2019-03-02 00:19:44'),(20,'PAT0014',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','3/2/2019 (0.01 ng/ml)','','','','','','','','','','','','','','','','','2019-03-02 00:31:05'),(21,'PAT0019',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','','','','','','','','','','','','','','Pt - 03/28/2019 or D1-D3','2019-03-02 00:38:50'),(22,'PAT0016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','3/2/2019','','','','','','','','','','','','','March 9 if estradiol  less than 50 or March 1','2019-03-02 00:51:20'),(23,'PAT0016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','3/2/2019','','','','','','','','','','','','','','2019-03-02 00:52:57'),(24,'PAT0018',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on','','','','','','','','','','','','','','','','','','','','','Pt - 03/18/2019 or D1-D3','2019-03-02 01:01:14'),(25,'PAT0020',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','Pt - 03/16/2019 or D1-D3','2019-03-02 01:07:36');
/*!40000 ALTER TABLE `st_plan_pat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transabdominal`
--

DROP TABLE IF EXISTS `transabdominal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `transabdominal` (
  `tar_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) NOT NULL,
  `tar_indate` varchar(10) NOT NULL,
  `tar_num` varchar(50) NOT NULL,
  `tar_pres` varchar(255) NOT NULL,
  `tar_bip_dia` varchar(50) NOT NULL,
  `tar_occ_dia` varchar(50) NOT NULL,
  `tar_cep_ind` varchar(50) NOT NULL,
  `tar_fem_len` varchar(50) NOT NULL,
  `tar_abd_cir` varchar(50) NOT NULL,
  `tar_est_fet_wei` varchar(50) NOT NULL,
  `tar_pla` varchar(255) NOT NULL,
  `tar_tone` varchar(255) NOT NULL,
  `tar_move` varchar(255) NOT NULL,
  `tar_brea` varchar(255) NOT NULL,
  `tar_amn_flu_ind` varchar(255) NOT NULL,
  `tar_impre` text NOT NULL,
  PRIMARY KEY (`tar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transabdominal`
--

LOCK TABLES `transabdominal` WRITE;
/*!40000 ALTER TABLE `transabdominal` DISABLE KEYS */;
INSERT INTO `transabdominal` VALUES (10,'PAT0003','03/02/2019','1','Breech','6.6 26 6/7','8.4','4.2','','20.1','1 lbs 10 oz','Anterior, GRADE 1','','','152 bpm','13.6','');
/*!40000 ALTER TABLE `transabdominal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ultrasound`
--

DROP TABLE IF EXISTS `ultrasound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ultrasound` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) DEFAULT NULL,
  `usr_indate` varchar(10) DEFAULT NULL,
  `usr_pus` varchar(45) DEFAULT NULL,
  `usr_uterus` varchar(45) DEFAULT NULL,
  `usr_size_1` varchar(5) DEFAULT NULL,
  `usr_size_2` varchar(5) DEFAULT NULL,
  `usr_size_3` varchar(4) DEFAULT NULL,
  `usr_contour` varchar(45) DEFAULT NULL,
  `usr_echopattern` varchar(45) DEFAULT NULL,
  `usr_echorem` varchar(255) DEFAULT NULL,
  `usr_endometrium` varchar(5) DEFAULT NULL,
  `usr_endometrium_sel` varchar(45) DEFAULT NULL,
  `usr_endometrium_rem` varchar(255) DEFAULT NULL,
  `usr_cer1` varchar(5) DEFAULT NULL,
  `usr_cer2` varchar(5) DEFAULT NULL,
  `usr_cer_urm` varchar(5) DEFAULT NULL,
  `usr_ro1` varchar(5) DEFAULT NULL,
  `usr_ro2` varchar(5) DEFAULT NULL,
  `usr_ro3` varchar(5) DEFAULT NULL,
  `usr_ro_rem` varchar(255) DEFAULT NULL,
  `usr_lo1` varchar(5) DEFAULT NULL,
  `usr_lo2` varchar(5) DEFAULT NULL,
  `usr_lo3` varchar(5) DEFAULT NULL,
  `usr_lo_rem` varchar(255) DEFAULT NULL,
  `usr_cdsf` varchar(45) DEFAULT NULL,
  `usr_opm` varchar(45) DEFAULT NULL,
  `usr_impre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=179 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ultrasound`
--

LOCK TABLES `ultrasound` WRITE;
/*!40000 ALTER TABLE `ultrasound` DISABLE KEYS */;
INSERT INTO `ultrasound` VALUES (92,'PAT0003','12/01/2018','Transvaginal','Antevered','8.7','7.7','6.1',NULL,NULL,'CRL-5.85 12 2/7 WEEKS\r\nEDC-JUNE 13 2019\r\nFHR-169 BPM','',NULL,'','','',NULL,'3.1','2.0','','','2.7','1.8','','',NULL,NULL,''),(93,'PAT0004','03/02/2019','Transvaginal','Antevered','7.2','3.8','4.9','Smooth','Homogenous','','',NULL,'','','',NULL,'2.9','1.5','','','3.1','1.7','','',NULL,NULL,''),(94,'PAT0005','03/02/2019',NULL,NULL,'','','',NULL,NULL,'','1.0',NULL,'','','',NULL,'','','',' no df','','','','No df',NULL,NULL,''),(95,'PAT0006','03/02/2019','Transvaginal','Retroverted','','','',NULL,NULL,'','.9',NULL,'','','',NULL,'','','','0','','','','Df rupturd',NULL,NULL,''),(96,'PAT0010','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','1.2',NULL,'','','',NULL,'','','','0','','','','Ruptured',NULL,NULL,''),(97,'PAT0009','03/02/2019',NULL,NULL,'','','',NULL,NULL,'','.2',NULL,'','','',NULL,'','','','No residual\r\n','','','','',NULL,NULL,''),(98,'PAT0017','03/02/2019','Transvaginal','Antevered','8.5','5.5','6.3','Smooth',NULL,'','',NULL,'CRL -  .44 cm 6 week 1 day\r\nEDC- 10/25/2019','','',NULL,'2.1','.9','','','3.0','1.6','','',NULL,NULL,''),(99,'PAT0013','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.3',NULL,'','','',NULL,'','','','No residual\r\n','','','','No residual',NULL,NULL,''),(100,'PAT0024','03/02/2019','Transvaginal','Retroverted','7.4','4.3','6.3',NULL,NULL,'','',NULL,'GS- 1./ 5 WEEKS','','',NULL,'3.3','1.3','','','4.1','2.1','','',NULL,NULL,'Early intrauterine pregnancy; 5wks AOG by GS'),(101,'PAT0015','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.3',NULL,'','','',NULL,'','','','','1.2','1.3','','',NULL,NULL,''),(102,'PAT0012','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.9',NULL,'','','',NULL,'','','','','1.9','1.9','','',NULL,NULL,''),(103,'PAT0014','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.6',NULL,'','','',NULL,'','','','RO hydrosalphinx- 4.8 x 1.2','','','','Lo hydrosalphinx - 3.6 x 2.4',NULL,NULL,'Bilateral hydrosalphynx; DOR'),(104,'PAT0019','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.2',NULL,'','','',NULL,'','','','AFC- # 1','','','','AFC- # not visualized',NULL,NULL,''),(105,'PAT0016','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.3',NULL,'','','',NULL,'','','','','','','','',NULL,NULL,''),(106,'PAT0018','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','1.1',NULL,'','','',NULL,'2.0','2.0','','','2.2','1.9','','',NULL,NULL,''),(107,'PAT0020','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','1.0',NULL,'','','',NULL,'','','','','','','','Ruptured',NULL,NULL,''),(108,'PAT0021','03/02/2019','Transvaginal',NULL,'','','',NULL,NULL,'','',NULL,'','','',NULL,'1.8','1.5','','','1.1','1.1','','',NULL,NULL,''),(109,'PAT0008','03/02/2019',NULL,NULL,'','','',NULL,NULL,'','.2',NULL,'','','',NULL,'','','','Residual .9 x.9\r\n                  \r\n','','','','Residual .8 x .8\r\n                    .7 x .8',NULL,NULL,''),(110,'PAT0011','03/02/2019',NULL,NULL,'','','',NULL,NULL,'','.8',NULL,'','','',NULL,'','','','Df - 2.1 x 1.7','','','','',NULL,NULL,''),(111,'PAT0025','03/05/2019',NULL,NULL,'','','',NULL,NULL,'','.8',NULL,'','','',NULL,'','','','Df-1.8 x 1.7\r\n      1.9 x 1.6','','','','Df- 1.8 x 1.4\r\n       ',NULL,NULL,''),(112,'PAT0029','03/04/2019',NULL,'Antevered','8.5','4.8','6.5','Smooth',NULL,'','1.8',NULL,'','','',NULL,'3.4','1.8','','','3.5','2.0','','',NULL,NULL,''),(113,'PAT0028','03/04/2019','Transvaginal','Antevered','12.5','8.7','9.3','Smooth',NULL,'','',NULL,'CRL 6.4  CM 12 WEEKS 5 DAYS \r\nEDD SEPT 11 2019','','',NULL,'2.6','1.4','','','2.2','.9','','',NULL,NULL,''),(114,'PAT0030','03/04/2019','Transvaginal','Retroverted','8.1','5.0','5.5',NULL,NULL,'','',NULL,'GS 2.1 cm 5 weeks 6 days\r\nYolk sac .3','','',NULL,'2.8','1.9','','','4.1','3.6','','',NULL,NULL,''),(115,'PAT0033','03/04/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.9',NULL,'','','',NULL,'','','','','','','','Ruptured',NULL,NULL,''),(116,'PAT0034','03/04/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.8',NULL,'No df','','',NULL,'','','','','','','','',NULL,NULL,''),(117,'PAT0037','03/04/2019','Transvaginal',NULL,'','','',NULL,NULL,'','.9',NULL,'','','',NULL,'2.0','1.9','','','','','','',NULL,NULL,''),(118,'PAT0036','03/04/2019',NULL,NULL,'','','',NULL,NULL,'','.8',NULL,'No df','','',NULL,'','','','','','','','',NULL,NULL,''),(119,'PAT0041','03/04/2019','Transvaginal','Antevered','7.7','5.4','6.1',NULL,NULL,'','',NULL,'CRL-  .88 6 WEEKS 6 DAYS','','',NULL,'2.6','1.4','','','2.2','1.3','','',NULL,NULL,''),(120,'PAT0026','03/04/2019','Transvaginal','Retroverted','7.6','5.0','5.5',NULL,NULL,'','',NULL,'','','',NULL,'2.8','1.6','','','','','','Hydro -4.2  x 1.7',NULL,NULL,''),(121,'PAT0032','03/04/2019','Transvaginal',NULL,'7.0','3.5','4.4',NULL,NULL,'','.2',NULL,'','','',NULL,'2.4','2.7','','','2.2','2.3','','',NULL,NULL,''),(122,'PAT0053','03/05/2019','Transvaginal','Antevered','7.8','4.4','5.1',NULL,NULL,'','.7',NULL,'','','',NULL,'2.9','1.2','','','2.8','1.9','','',NULL,NULL,''),(123,'PAT0054','03/05/2019','Transvaginal','Retroverted','8.0','4.8','5.4',NULL,NULL,'','1.1',NULL,'','','',NULL,'2.4','1.8','','','2,8','2.3','','',NULL,NULL,''),(124,'PAT0041','02/11/2019','Transvaginal','Antevered','5.5','5.8','4.4','Smooth','Homogenous','','1.6','hyperechoic','','','',NULL,'2.8','1.6','','','3.2','1.8','','','None','Absent',''),(125,'PAT0041','02/25/2019','Transvaginal','Antevered','7.6','4.2','5.0',NULL,NULL,'Yolk Sac 2, GS 2.8 7 1/7 wks','',NULL,'','','',NULL,'3.1','1.5','','','2.8','1.3','','',NULL,NULL,''),(126,'PAT0041','03/17/2019','Transvaginal','Antevered','8.7','5.3','6.4','Smooth','Homogenous','CRL 1.2 7 3/7 ','',NULL,'','','',NULL,'2.8','1.6','','','2.2','1.2','','','None','Absent',''),(127,'PAT0041','03/14/2019','Transvaginal','Antevered','9.3','6.4','7.0','Smooth','Homogenous','CRL 1.9 8 3/7 ','',NULL,'','','',NULL,'2.6','1.7','','','2.7','1.6','','','None','Absent',''),(128,'PAT0041','03/22/2019',NULL,NULL,'10.1','6.9','8.5','Smooth','Homogenous','CRL 2.8 9 4/7 ','',NULL,'','','',NULL,'2.5','1.5','','','2.4','1.2','','','None','Absent',''),(129,'PAT0041','09/20/2018','Transvaginal',NULL,'7.2','3.9','4.5',NULL,NULL,'','1.0',NULL,'','','',NULL,'2.7','1.3','','','2.3','1.3','','',NULL,NULL,''),(130,'PAT0041','05/11/2017','Transvaginal','Antevered','7.2','3.9','4.8',NULL,NULL,'','0.5',NULL,'','','',NULL,'3.6','2.5','','','3.1','1.3','','',NULL,NULL,''),(131,'PAT0041','03/29/2019','Transvaginal','Antevered','12.1','8.6','8.8','Smooth','Homogenous','CRL 3.7 10 6/7 ','',NULL,'','','',NULL,'3.5','2.0','','','2.9','1.2','','','None','Absent',''),(132,'PAT0008','09/22/2018','Transvaginal',NULL,'7.4','4.8','5.0',NULL,NULL,'DF RO 1.5x1.7','0.8',NULL,'','','',NULL,'2.6','1.6','','','2.0','1.2','','',NULL,NULL,''),(133,'PAT0103','06/07/2017','Transvaginal','Antevered','5.1','1.9','3.4',NULL,NULL,'','0.1',NULL,'','','',NULL,'2.6','1.2','','','2.4','1.0','','',NULL,NULL,''),(134,'PAT0103','01/07/2019','Transvaginal','Antevered','3.8','3.1','2.2','Smooth','Homogenous','','0.4','linear','','','',NULL,'2.5','1.4','','','2.9','1.2','','','None','Absent',''),(135,'PAT0103','03/15/2019',NULL,NULL,'7.2','4.1','4.1',NULL,NULL,'','1.3',NULL,'','','',NULL,'3.2','2.3','','','3.1','2.7','','',NULL,NULL,''),(136,'PAT0103','03/22/2019','Transvaginal','Antevered','7.8','3.8','5.4','Smooth','Homogenous','Yolk sac .2; GS 1.5 4 6/7 wks','',NULL,'','','',NULL,'2.9','2.0','','','3.4','2.5','','','None','Absent',''),(137,'PAT0103','03/29/2019','Transvaginal','Antevered','7.6','4.5','5.1','Smooth','Homogenous','CRL .37 6wks ','',NULL,'','','',NULL,'2.4','1.8','','','3.5','2.9','','','None','Absent',''),(138,'PAT0104','03/29/2019','Transvaginal',NULL,'7.5','3.5','4.9',NULL,NULL,'DF RO 1.4x1.5','0.8',NULL,'','','',NULL,'3.5','2.2','','','3.2','2.2','','',NULL,NULL,''),(139,'PAT0105','02/19/2019',NULL,NULL,'7.4','3.8','4.8',NULL,NULL,'','3',NULL,'','','',NULL,'1.9','1.2','','','1.9','1.0','','',NULL,NULL,''),(140,'PAT0037','01/28/2019','Transvaginal','Antevered','3.7','4.5','3.1','Smooth','Homogenous','Afc II RO .5 W 7','0.7',NULL,'','','',NULL,'2.6','1.4','','','3.4','1.4','','','None','Absent',''),(141,'PAT0037','11/30/2016','Transvaginal','Antevered','6.5','3.3','4.7',NULL,NULL,'','1.0',NULL,'','','',NULL,'3.4','2.0','','','2.6','1.2','','',NULL,NULL,''),(142,'PAT0037','09/05/2014','Transvaginal','Antevered','5.2','2.8','3.7',NULL,NULL,'','0.5','trilaminar','','','',NULL,'3.1','1.3','','','1.8','1.0','','',NULL,NULL,''),(143,'PAT0037','02/25/2013','Transvaginal','Antevered','5.4','2.7','3.5',NULL,NULL,'','0.5','trilaminar','','','',NULL,'3.4','1.6','','','2.9','0.8','','','None','Absent',''),(144,'PAT0080','03/29/2019','Transvaginal','Retroverted','7.9','5.1','5.8','Smooth','Homogenous','CRL 1.0 7 1/7 ','',NULL,'','','',NULL,'3.4','1.6','','','2.4','0.8','','','None','Absent',''),(145,'PAT0080','03/21/2019','Transvaginal','Antevered','7.4','4.3','5.8','Smooth','Homogenous','GS 2.2 6 1/7 CRL .3 6wks','',NULL,'','','',NULL,'3.4','1.9','','','2.6','1.2','','','None','Absent',''),(146,'PAT0080','03/14/2019','Transvaginal','Retroverted','6.6','4.5','5.0','Smooth','Homogenous','GS 1.4 4 5/7 wks ','',NULL,'','','',NULL,'2.3','1.5','','','2.6','1.4','','','None','Absent',''),(147,'PAT0080','03/07/2019','Transvaginal',NULL,'7.0','3.8','5.8',NULL,NULL,'','1.4',NULL,'','','',NULL,'2.8','1.2','','','2.6','0.9','','',NULL,NULL,''),(148,'PAT0080','01/19/2019','Transvaginal','Retroverted','3.9','5.5','3.5','Smooth','Homogenous','','0.9','hyperechoic','','','',NULL,'3.3','1.9','','','3.1','1.9','','','None','Absent',''),(149,'PAT0080','03/24/2019','Transvaginal',NULL,'6.8','4.0','5.1',NULL,NULL,'','1.2',NULL,'','','',NULL,'3.4','1.7','','','2.8','1.0','','',NULL,NULL,''),(150,'PAT0080','02/27/2017','Transvaginal',NULL,'5.8','3.0','5.0',NULL,NULL,'','0.5',NULL,'','','',NULL,'3.2','1.8','','','3.0','1.0','','',NULL,NULL,''),(151,'PAT0080','09/14/2016','Transvaginal','Antevered','6.3','3.8','4.9',NULL,NULL,'','0.3','linear','','','',NULL,'3.5','1.8','','','3.8','1.7','','',NULL,NULL,''),(152,'PAT0080','12/11/2015','Transvaginal','Retroverted','6.1','3.8','4.9',NULL,NULL,'','1.0',NULL,'','','',NULL,'3.8','2.7','','','3.4','1.7','','',NULL,NULL,''),(153,'PAT0106','02/09/2019','Transvaginal','Antevered','4.8','5.6','3.3','Smooth','Homogenous','','0.8','trilaminar','','','',NULL,'2.5','2.1','','','3.1','1.6','','','None','Absent',''),(154,'PAT0107','03/01/2019',NULL,NULL,'4.6','4.0','4.9',NULL,NULL,'','0.6','trilaminar','','','',NULL,'2.7','1.3','','','2.4','1.8','','DF LO 1.8x1.7',NULL,NULL,''),(155,'PAT0050','10/26/2016','Transvaginal','Antevered','7.8','3.4','4.4',NULL,NULL,'','0.4',NULL,'','','',NULL,'3.3','1.7','','','5.2','4.2','','',NULL,NULL,''),(156,'PAT0050','05/02/2018','Transvaginal','Antevered','6.4','2.8','3.9',NULL,NULL,'','0.3','linear','','','',NULL,'3.9','1.8','','','3.1','2.7','','Cyst 2.0x1.7',NULL,NULL,''),(157,'PAT0050','05/31/2018','Transvaginal','Antevered','8.2','4.5','6.0',NULL,NULL,'','',NULL,'','','',NULL,'3.5','2.6','','','3.8','2.6','','',NULL,NULL,''),(158,'PAT0050','06/04/2018','Transvaginal','Antevered','7.2','4.2','4.6',NULL,NULL,'','1.2',NULL,'','','',NULL,'3.2','1.8','','','2.8','2.4','','',NULL,NULL,''),(159,'PAT0050','06/14/2018',NULL,NULL,'6.5','2.9','4.0',NULL,NULL,'','0.4',NULL,'','','',NULL,'4.1','2.4','','','2.8','2.6','','',NULL,NULL,''),(160,'PAT0050','12/07/2018','Transvaginal','Antevered','5.4','5.0','3.2',NULL,NULL,'','1.1','hyperechoic','','','',NULL,'2.9','2.9','','','2.5','2.8','','','Minimal','Absent','N UTERUS WITH SECRETORY PHASE LIKE EM, POLYCYSTIC OVARIES, BILATERAL'),(161,'PAT0050','02/25/2019',NULL,NULL,'7.2','3.8','4.1',NULL,NULL,'','1.3',NULL,'','','',NULL,'3.3','2.4','','','3.0','2.6','','',NULL,NULL,''),(162,'PAT0108','03/27/2019','Transvaginal',NULL,'5.7','3.8','4.1',NULL,NULL,'Mass anterior','0.2',NULL,'','','',NULL,'2.6','1.8','','','2.8','1.3','','',NULL,NULL,''),(163,'PAT0108','04/17/2018','Transvaginal','Antevered','7.1','3.0','4.0',NULL,NULL,'','.30',NULL,'','','',NULL,'3.5','2.2','','','3.0','1.8','','',NULL,NULL,''),(164,'PAT0108','02/24/2017','Transvaginal','Antevered','5.8','3.1','3.3',NULL,NULL,'','0.6',NULL,'','','',NULL,'2.4','','','','','','','DF LO 1.3; 1.6',NULL,NULL,''),(165,'PAT0098','03/29/2019','Transvaginal','Antevered','8.0','4.7','5.4','Smooth','Homogenous','','',NULL,'','','',NULL,'3.0','1.6','','','3.5','1.9','','','None','Absent',''),(166,'PAT0098','03/12/2019',NULL,'Antevered','7.9','3.6','4.1','Smooth','Homogenous','','1.0','hyperechoic','','','',NULL,'2.9','1.6','','','3.3','2.3','','','None','Absent',''),(167,'PAT0099','03/29/2019','Transvaginal','Antevered','7.7','4.1','4.9',NULL,NULL,'','0.5',NULL,'','','',NULL,'2.5','2.1','','','2.5','1.8','','',NULL,NULL,''),(168,'PAT0018','01/05/2019','Transvaginal','Antevered','5.7','4.9','4.1','Smooth','Homogenous','','1.2','trilaminar','','','',NULL,'2.6','1.9','','','2.4','2.5','','','None','Absent',''),(169,'PAT0100','04/30/2018','Transvaginal',NULL,'6.2','2.8','3.6',NULL,NULL,'','0.5',NULL,'','','',NULL,'3.4','2.4','','','2.7','2.2','','',NULL,NULL,''),(170,'PAT0100','03/06/2019','Transvaginal','Antevered','7.2','3.9','4.2','Smooth','Homogenous','GS .8','',NULL,'','','',NULL,'4.6','2.6','','','3.1','1.9','','','None','Absent',''),(171,'PAT0100','03/13/2019',NULL,'Retroverted','7.5','4.3','4.8',NULL,NULL,'GS 1.7 5 2/7WKS','',NULL,'','','',NULL,'4.8','3.1','','','3.0','1.3','','',NULL,NULL,''),(172,'PAT0100','03/21/2019','Transvaginal','Retroverted','8.5','4.9','5.0','Smooth',NULL,'CRL .5 6 2/7 ','',NULL,'','','',NULL,'4.9','2.7','','','2.4','1.6','','','None','Absent',''),(173,'PAT0100','03/29/2019','Transvaginal',NULL,'8.1','5.4','5.3','Smooth','Homogenous','CRL 1.4 7 5/7','',NULL,'','','',NULL,'4.6','2.5','','','3.3','1.7','','','None','Absent',''),(174,'PAT0093','01/10/2019',NULL,'Retroverted','4.2','3.2','4.2','Smooth','Homogenous','','0.42','linear','','','',NULL,'3.2','1.3','','','2.9','1.2','','','None','Absent',''),(175,'PAT0093','03/09/2019','Transvaginal','Retroverted','6.8','4.2','4.9',NULL,NULL,'GS .6','',NULL,'','','',NULL,'3.1','2.3','','','2.4','1.5','','',NULL,NULL,'');
/*!40000 ALTER TABLE `ultrasound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(45) DEFAULT NULL,
  `user_mname` varchar(45) DEFAULT NULL,
  `user_lname` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_pword` varchar(45) DEFAULT NULL,
  `user_contact` varchar(20) DEFAULT NULL,
  `user_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Carlos','P','Flores Jr.','admin@gmail.com','38f078a81a2b033d197497af5b77f95b50bfcfb8','09298370289','2018-03-28 00:19:15'),(3,'Abegail','P','Laxamana','ghale.madayag@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','09298370288','2018-03-28 00:26:45'),(8,'Pitabasan','D','Reyes','pdreyes@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','092983702830','2018-04-19 23:49:01'),(9,'Jhoanna','A','De Vera','jadevera@yahoo.com','7c4a8d09ca3762af61e59520943dc26494f8941b','09298370254','2018-04-19 23:50:21'),(10,'Eileen','C','Sy','cosyfertilityclinic@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','+639175213895','2018-07-16 05:16:36');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `visit` (
  `vis_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `vis_date` varchar(45) DEFAULT NULL,
  `vis_patBp` varchar(45) DEFAULT NULL,
  `vis_patHt` varchar(45) DEFAULT NULL,
  `vis_patWt` varchar(45) DEFAULT NULL,
  `vis_patBmi` varchar(45) DEFAULT NULL,
  `vis_parBp` varchar(45) DEFAULT NULL,
  `vis_parHt` varchar(45) DEFAULT NULL,
  `vis_parWt` varchar(45) DEFAULT NULL,
  `vis_parBmi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`vis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visit`
--

LOCK TABLES `visit` WRITE;
/*!40000 ALTER TABLE `visit` DISABLE KEYS */;
INSERT INTO `visit` VALUES (21,'PAT0012','','120/80','5\'3','62kgs','','','','',''),(20,'PAT0011','','110/80','5\'2','66kgs','27','','','',''),(12,'PAT0003','','','','','','','','',''),(13,'PAT0004','','120/80','5 1','76 kgs','31','','','',''),(14,'PAT0005','06/21/2014','120/80','5\'2','52.1','21','N.a','N.a','N.a','N.a'),(15,'PAT0006','','110/90','5','49kgs','','','','',''),(16,'PAT0007','08/18/2019','100/80','5\'4','55','22','N.a','N.a','N.a','N.a'),(17,'PAT0008','10/22/2018','100/70','5\'3','56','22','','','',''),(18,'PAT0009','03/03/19','120/80','5','','25','','','',''),(19,'PAT0010','','110/70','4\'11','57kgs','27','','','',''),(22,'PAT0013','','','','','','','','',''),(23,'PAT0014','03/02/19','130/80','5\'2','63kgs','28','','','',''),(24,'PAT0015','03/02/19','120/80','5\'1','58kgs','21','','','',''),(25,'PAT0016','03/02/19','100/70','5\'1','44kgs','21','','','',''),(26,'PAT0017','03/02/19','100/70','5\'2','113lbs','19','','','',''),(27,'PAT0018','03/02/19','100/70','5\'4','66kgs','25','','','',''),(28,'PAT0019','03/02/19','120/80','4\'11','56kgs','24','','','',''),(29,'PAT0020','03/02/19','120/80','5\'3','68kgs','26','','','',''),(30,'PAT0021','03/02/19','120/80','5\'2','49kgs','20','','','',''),(31,'PAT0022','','100/70','5\'2','101 lbs','20','','','',''),(32,'PAT0023','03/02/19','110/80','5\'3','160lbs','28','','','',''),(33,'PAT0024','','','','','','','','',''),(34,'PAT0025','03/04/19','110/80','5\'3','87kgs','34','','','',''),(35,'PAT0026','03/04/2019','100/80','5\'2','57kgs','25','','','',''),(36,'PAT0027','03/04/2019','100/70','5\'2','53kgs','21','','','',''),(37,'PAT0028','03/04/2019','100/70','5\'5','178lbs','24','','','',''),(38,'PAT0029','03/04/2019','100/70','5\'4','123lbs','20','','','',''),(39,'PAT0030','03/04/2019','110/70','5\'7','156lbs','25','','','',''),(40,'PAT0031','03/04/2019','100/70','5\'5','67kgs','24','','','',''),(41,'PAT0032','03/04/2019','110/80','5\'4','64','23','','','',''),(42,'PAT0033','03/04/2019','110/80','5\'2','59kgs','25','','','',''),(43,'PAT0034','03/04/2019','120/80','5\'6','60kgs','21','','','',''),(44,'PAT0035','03/04/2019','110/80','5\'4','59kgs','20','','','',''),(45,'PAT0036','03/04/2019','110/70','5\'1','51kgs','23','','','',''),(46,'PAT0037','03/04/2019','100/70','5\'3','56kgs','20','','','',''),(47,'PAT0038','03/04/2019','100/70','5\'6','59kgs','23','','','',''),(48,'PAT0039','03/04/2019','100/70','4\'11','48kgs','21','','','',''),(49,'PAT0040','03/04/2019','100/70','5\'1','121lbs','25','','','',''),(50,'PAT0041','03/04/2019','120/80','5\'4','150lbs','24','','','',''),(51,'PAT0042','03/04/2019','100/70','5\'1','50kgs','21','','','',''),(52,'PAT0043','03/04/2019','120/80','5\'4','96KGS','38','','','',''),(53,'PAT0044','03/04/2019','100/70','5\'2','136lbs','27','','','',''),(54,'PAT0045','03/04/2019','160/100','5\'','168lbs','','','','',''),(55,'PAT0046','03/04/2019','110/80','5\'','104 lbs','23','','','',''),(56,'PAT0047','03/04/2019','110/80','5\'2','51kgs','23','','','',''),(57,'PAT0048','03/04/2019','110/80','5\'3','65kgs','26','','','',''),(58,'PAT0049','03/04/2019','100/70','5\'5','54kgs','21','','','',''),(59,'PAT0050','03/04/2019','100/70','5\'','88lbs','17','','','',''),(60,'PAT0051','03/04/2019','100/70','5\'4','74kgs','29','','','',''),(61,'PAT0052','03/04/2019','110/80','5\'5','141lbs','22','','','',''),(62,'PAT0053','','110/80','5\'2','53 kgs','21.4','','','',''),(63,'PAT0054','03/05/2019','110/70','4\'11','71kgs','28','','','',''),(64,'PAT0055','03/05/2019','100/70','5\'4','47 kgs','17.8','','','',''),(65,'PAT0056','03/05/2019','110/70','5\'2','','','','','',''),(66,'PAT0057','03/05/2019','120/80','5\'1','57 kgs','23.7','','','',''),(67,'PAT0058','03/05/2019','100/70','5\'8','62 kgs','21.4','','','',''),(68,'PAT0059','03/06/2019','100/70','5\'','56kgs','25','','','',''),(69,'PAT0060','03/06/2019','120/80','5\'2','56kgs','25','','','',''),(70,'PAT0061','03/06/2019','100/70','5\'2','57 kgs','25','','','',''),(71,'PAT0062','03/06/2019','110/80','5\'3','128lbs','22','','','',''),(72,'PAT0063','03/06/2019','110/80','5\'2','141lbs','21','','','',''),(73,'PAT0064','03/06/2019','100/70','5\'4','103lbs','18','','','',''),(74,'PAT0065','03/06/2019','110/80','5\'','69kgs','31','','','',''),(75,'PAT0066','03/06/2019','140/100','','90kgs','','','','',''),(76,'PAT0067','03/06/2019','100/70','5\'','65kgs','28','','','',''),(77,'PAT0068','03/06/2019','110/80','5\'2','71kgs','32','','','',''),(78,'PAT0069','03/06/2019','110/80','','167lbs','','','','',''),(79,'PAT0070','03/06/2019','110/80','4\'11','76kgs','34','','','',''),(80,'PAT0071','03/06/2019','','5\'','45kgs','20','','','',''),(81,'PAT0072','03/07/19','120/80','5\'5','68kgs','23','','','',''),(82,'PAT0073','03/07/19','110/80','5\'5','57 kgs','22','','','',''),(83,'PAT0074','','110/70','5\'3','54kgs','21','','','',''),(84,'PAT0075','03/07/2019','120/80','5\'1','49kgs','20','','','',''),(85,'PAT0076','03/07/2019','120/80','5\'','117lbs','22','','','',''),(86,'PAT0077','03/07/2019','120/80','5\'5','57kgs','20','','','',''),(87,'PAT0078','03/07/2019','110/70','5\'6','69kgs','25','','','',''),(88,'PAT0079','03/07/2019','110/80','','163lbs','','','','',''),(89,'PAT0080','03/07/2019','110/80','5\'6','65kgs','26','','','',''),(90,'PAT0081','03/07/2019','110/80','5\'','142lbs','24','','','',''),(91,'PAT0082','03/07/2019','110/70','','136lbs','','','','',''),(92,'PAT0083','3/7/19','110/80','5\'','68kgs','','','','',''),(93,'PAT0084','03/08/19','110/80','5','64kgs','29','','','',''),(94,'PAT0085','03/08/1919','120/80','5\'1','49kgs','20','','','',''),(95,'PAT0086','03/08/19','100/70','5\'3','57kgs','22','','','',''),(96,'PAT0087','03/08/2019','100/70','5\'1','54kgs','28','','','',''),(97,'PAT0088','','110/80','','156lbs','','','','',''),(98,'PAT0089','03/08/2019','120/80','5\'2','51kgs','20','','','',''),(99,'PAT0090','03/08/2019','120/80','5\'3','63kgs','26','','','',''),(100,'PAT0091','03/08/2019','100/70','','125lbs','','','','',''),(101,'PAT0092','03/09/2019','110/80','5','75','33','','','',''),(102,'PAT0093','03/09/2019','120/80','5\'2','57 Kgs','','','','',''),(103,'PAT0094','03/09/2019','100/70','5\'2','59','','','','',''),(104,'PAT0095','03/09/2019','110/70','5','','','','','',''),(105,'PAT0096','03/09/2019','110/80','5\'5','73','26.8','','','',''),(106,'PAT0097','03/09/2019','100/70','5\'1','59','25','','','',''),(107,'PAT0098','03/12/2019','110/80','5\'8','92 kgs.','NA','NA','NA','NA','NA'),(108,'PAT0099','02/25/2013','120/80','5\'0','71 kgs.','17','NA','NA','NA','NA'),(109,'PAT0100','04/30/2018','110/80','5\'6','75 kgs.','30','NA','NA','NA','NA'),(110,'PAT0101','07/15/2017','110/80','5\'2','58kgs','22','NA','NA','NA','NA'),(111,'PAT0102','03/23/2019','100/70','5\'2','49 kgs','19','NA','NA','NA','NA'),(112,'PAT0103','06/07/2017','NA','5\'3','54 kgs','21','NA','NA','NA','NA'),(113,'PAT0104','03/29/19','100/70','5\'4','54 kgs','20.4','NA','NA','NA','NA'),(114,'PAT0105','02/19/2019','120/80','4\'11','59 kgs','26.3','NA','NA','NA','NA'),(115,'PAT0106','02/09/2019','100/70','5\'7','54 kgs','21','NA','NA','NA','NA'),(116,'PAT0107','03/01/2019','110/70','5\'1','53 kgs','24','NA','NA','NA','NA'),(117,'PAT0108','02/24/2017','100/80','5\'3','53 kgs','NA','NA','NA','NA','NA'),(118,'PAT0109','03/29/2019','100/80','5\'4','52 kgs','27','NA','NA','NA','NA');
/*!40000 ALTER TABLE `visit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-20 19:38:34
