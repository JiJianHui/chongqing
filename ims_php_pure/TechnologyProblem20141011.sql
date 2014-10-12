-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: TechnologyProblem
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1

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
-- Table structure for table `ICase`
--

DROP TABLE IF EXISTS `ICase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ICase` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ICase`
--

LOCK TABLES `ICase` WRITE;
/*!40000 ALTER TABLE `ICase` DISABLE KEYS */;
INSERT INTO `ICase` VALUES (1,'部门1_Modified','单位1','管理','15136432011','value=value=18945072','456789@qq.com','456789','案例甲','摘要甲','描述甲','过程甲','概念解决方案','采用解决方案','解决方案实施'),(2,'部门2','单位2','营销','15136432011','18945072658','456789@qq.com','456789','案例乙','摘要乙','描述乙','过程乙','概念解决方案','采用解决方案','解决方案实施'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Title','Abstract','Description','Course',NULL,NULL,NULL),(4,'department','sector','category','mobilePhone','faxNumber','eMail','qq','title','abstract','description','course',NULL,NULL,NULL),(5,'department','sector','category','mobilePhone','faxNumber','eMail','qq','title','abstract','description','course',NULL,NULL,NULL),(6,'department','sector','category','mobilePhone','faxNumber','eMail','qq','title','abstract','description','course',NULL,NULL,NULL),(7,'Latest Department','Latest Sector','Latest Category','Latest Mobilephone','Latest PhoneNumber','Latest Email','Latest qq','Latest Title','','','','','','');
/*!40000 ALTER TABLE `ICase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Problem`
--

DROP TABLE IF EXISTS `Problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Problem` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `eName` varchar(100) DEFAULT NULL,
  `eCategory` varchar(100) DEFAULT NULL,
  `eAddress` varchar(100) DEFAULT NULL,
  `ePostCode` varchar(20) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `mobilePhone` varchar(20) DEFAULT NULL,
  `telePhone` varchar(20) DEFAULT NULL,
  `faxNumber` varchar(20) DEFAULT NULL,
  `eMail` varchar(100) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `mainProducts` varchar(200) DEFAULT NULL,
  `pName` varchar(100) DEFAULT NULL,
  `pCategory` varchar(100) DEFAULT NULL,
  `cName` varchar(100) DEFAULT NULL,
  `cTelePhone` varchar(20) DEFAULT NULL,
  `pFaxNumber` varchar(20) DEFAULT NULL,
  `bgDescription` varchar(100) DEFAULT NULL,
  `pDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Problem`
--

LOCK TABLES `Problem` WRITE;
/*!40000 ALTER TABLE `Problem` DISABLE KEYS */;
INSERT INTO `Problem` VALUES (1,'黄英豪','男','1991年3月','1991年3月','1991年3月','123','123','456','456','456','123','3','1988','2000','2000','2000','1991-2000','1991-2000'),(2,'企业名','IT','西大直街','','','','','','','','','','□新材料技术     □高技术服务业         □新能源及节能技术\r','','','','技术难题描述(内容请尽可能详细，以方便专家了解难题具体情况)：\r','技术难题描述(内容请尽可能详细，以方便专家了解难题具体情况)：\r');
/*!40000 ALTER TABLE `Problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Student` (
  `sID` int(11) NOT NULL AUTO_INCREMENT,
  `pPath` varchar(100) DEFAULT NULL,
  `sName` varchar(100) DEFAULT NULL,
  `sSex` varchar(20) DEFAULT NULL,
  `startWorkTime` varchar(20) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `cMajor` varchar(100) DEFAULT NULL,
  `eTitle` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `telePhone` varchar(20) DEFAULT NULL,
  `mobilePhone` varchar(20) DEFAULT NULL,
  `eMail_qq` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `ePostCode` char(6) DEFAULT NULL,
  `degree1` varchar(100) DEFAULT NULL,
  `gTime1` varchar(100) DEFAULT NULL,
  `gSchool1` varchar(100) DEFAULT NULL,
  `lMajor1` varchar(100) DEFAULT NULL,
  `degree2` varchar(100) DEFAULT NULL,
  `gTime2` varchar(100) DEFAULT NULL,
  `gSchool2` varchar(100) DEFAULT NULL,
  `lMajor2` varchar(100) DEFAULT NULL,
  `lTime1` varchar(100) DEFAULT NULL,
  `lPlace1` varchar(100) DEFAULT NULL,
  `lContent1` varchar(100) DEFAULT NULL,
  `lTime2` varchar(100) DEFAULT NULL,
  `lPlace2` varchar(100) DEFAULT NULL,
  `lContent2` varchar(100) DEFAULT NULL,
  `tTime1` varchar(100) DEFAULT NULL,
  `tPlace1` varchar(100) DEFAULT NULL,
  `tContent1` varchar(100) DEFAULT NULL,
  `tTime2` varchar(100) DEFAULT NULL,
  `tPlace2` varchar(100) DEFAULT NULL,
  `tContent2` varchar(100) DEFAULT NULL,
  `rBooks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Student`
--

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;
INSERT INTO `Student` VALUES (1,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界'),(2,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','null平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界'),(3,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','null平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界'),(4,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','null平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界'),(5,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','null平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界'),(6,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','null平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界'),(7,NULL,'黄英豪','男','1991年3月','1991年3月','计算机科学与技术','123','456','789','123','456','12','3','789','硕','2000','CMU','英语','null','null','null','null','1991-2000','香港','系数编码','1992-2006','新疆','字符串处理','','','','','','','null平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界平凡的世界');
/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-11 13:22:10
