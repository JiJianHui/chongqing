-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: technologyproblem
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `icase`
--

DROP TABLE IF EXISTS `icase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icase` (
  `cID` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(100) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `mobilePhone` varchar(20) DEFAULT NULL,
  `faxNumber` varchar(20) DEFAULT NULL,
  `eMail` varchar(100) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `abstract` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `cSolution` varchar(100) DEFAULT NULL,
  `sEmployed` varchar(100) DEFAULT NULL,
  `sImplementation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icase`
--

LOCK TABLES `icase` WRITE;
/*!40000 ALTER TABLE `icase` DISABLE KEYS */;
/*!40000 ALTER TABLE `icase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `eName` varchar(100) DEFAULT NULL,
  `eCategory` varchar(100) DEFAULT NULL,
  `eAddress` varchar(100) DEFAULT NULL,
  `ePostCode` char(6) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `mobilePhone` varchar(20) DEFAULT NULL,
  `telePhone` varchar(20) DEFAULT NULL,
  `faxNumber` varchar(20) DEFAULT NULL,
  `eMail` varchar(100) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `mainProducts` varchar(200) DEFAULT NULL,
  `pName` varchar(100) DEFAULT NULL,
  `pCategory` varchar(100) DEFAULT NULL,
  `contactName` varchar(100) NOT NULL,
  `pFaxNumber` varchar(20) DEFAULT NULL,
  `bgDescription` varchar(100) DEFAULT NULL,
  `pDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problem`
--

LOCK TABLES `problem` WRITE;
/*!40000 ALTER TABLE `problem` DISABLE KEYS */;
INSERT INTO `problem` VALUES (1,'阳光','企业','','','','','','','','',NULL,'','','','','',''),(3,'xx','xx','','','','','','','','',NULL,'','','','','',''),(4,'名称最新','行业最新','地址最新','邮编222','联系人222','手机222','座机222','传真222','Email222','qq222',NULL,'哪么22','category222','负责人','传真2','北京2','描述22');
/*!40000 ALTER TABLE `problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `sID` int(11) NOT NULL AUTO_INCREMENT,
  `pPath` varchar(100) NOT NULL,
  `sName` varchar(100) DEFAULT NULL,
  `sSex` char(2) DEFAULT NULL,
  `startWorkTime` char(8) DEFAULT NULL,
  `birthday` char(6) DEFAULT NULL,
  `cMajor` varchar(100) DEFAULT NULL,
  `eTitle` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `telePhone` varchar(20) DEFAULT NULL,
  `mobilePhone` varchar(20) DEFAULT NULL,
  `eMail` varchar(100) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `education` varchar(20) DEFAULT NULL,
  `gSchool` varchar(20) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'','xx','xx','','','','','','','','','','','','','',''),(2,'','王武_Modified','男','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-09 16:59:46
