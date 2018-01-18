-- MySQL dump 10.16  Distrib 10.2.9-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: fgw
-- ------------------------------------------------------
-- Server version	10.2.9-MariaDB

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
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `oname` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `b` varchar(50) DEFAULT NULL,
  `c` varchar(50) DEFAULT NULL,
  `d` varchar(50) DEFAULT NULL,
  `e` varchar(50) DEFAULT NULL,
  `f` varchar(50) DEFAULT NULL,
  `g` varchar(50) DEFAULT NULL,
  `h` varchar(50) DEFAULT NULL,
  `i` varchar(50) DEFAULT NULL,
  `j` varchar(50) DEFAULT NULL,
  `k` varchar(50) DEFAULT NULL,
  `l` varchar(50) DEFAULT NULL,
  `m` varchar(50) DEFAULT NULL,
  `n` varchar(50) DEFAULT NULL,
  `o` varchar(50) DEFAULT NULL,
  `p` varchar(50) DEFAULT NULL,
  `q` varchar(50) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `s` varchar(50) DEFAULT NULL,
  `t` varchar(50) DEFAULT NULL,
  `u` varchar(50) DEFAULT NULL,
  `v` varchar(50) DEFAULT NULL,
  `w` varchar(50) DEFAULT NULL,
  `x` varchar(50) DEFAULT NULL,
  `y` varchar(50) DEFAULT NULL,
  `z` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization`
--

LOCK TABLES `organization` WRITE;
/*!40000 ALTER TABLE `organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `fill_state` varchar(50) NOT NULL,
  `phase` varchar(50) NOT NULL COMMENT 'phase of construction',
  `fillby` varchar(50) NOT NULL COMMENT 'filled in by who',
  `phone` varchar(50) NOT NULL,
  `progress` varchar(50) NOT NULL,
  `problem` varchar(50) NOT NULL,
  `g` varchar(50) DEFAULT NULL,
  `h` varchar(50) DEFAULT NULL,
  `i` varchar(50) DEFAULT NULL,
  `j` varchar(50) DEFAULT NULL,
  `k` varchar(50) DEFAULT NULL,
  `l` varchar(50) DEFAULT NULL,
  `m` varchar(50) DEFAULT NULL,
  `n` varchar(50) DEFAULT NULL,
  `o` varchar(50) DEFAULT NULL,
  `p` varchar(50) DEFAULT NULL,
  `q` varchar(50) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `s` varchar(50) DEFAULT NULL,
  `t` varchar(50) DEFAULT NULL,
  `u` varchar(50) DEFAULT NULL,
  `v` varchar(50) DEFAULT NULL,
  `w` varchar(50) DEFAULT NULL,
  `x` varchar(50) DEFAULT NULL,
  `y` varchar(50) DEFAULT NULL,
  `z` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progress`
--

LOCK TABLES `progress` WRITE;
/*!40000 ALTER TABLE `progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `property` varchar(50) NOT NULL,
  `intro` varchar(500) NOT NULL,
  `investment` varchar(50) NOT NULL,
  `invest_plan` varchar(50) NOT NULL COMMENT 'this year',
  `start` varchar(50) NOT NULL,
  `finish` varchar(50) NOT NULL,
  `invest_type` varchar(50) NOT NULL,
  `o_incharge` varchar(50) NOT NULL COMMENT 'organization in charge',
  `p_incharge` varchar(50) NOT NULL COMMENT 'people in charge',
  `uid` int(11) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL,
  `inplementor` varchar(50) DEFAULT NULL,
  `l` varchar(50) DEFAULT NULL,
  `m` varchar(50) DEFAULT NULL,
  `n` varchar(50) DEFAULT NULL,
  `o` varchar(50) DEFAULT NULL,
  `p` varchar(50) DEFAULT NULL,
  `q` varchar(50) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `s` varchar(50) DEFAULT NULL,
  `t` varchar(50) DEFAULT NULL,
  `u` varchar(50) DEFAULT NULL,
  `v` varchar(50) DEFAULT NULL,
  `w` varchar(50) DEFAULT NULL,
  `x` varchar(50) DEFAULT NULL,
  `y` varchar(50) DEFAULT NULL,
  `z` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL,
  `rname` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `s_key` varchar(20) NOT NULL,
  `value` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `oid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `b` varchar(50) DEFAULT NULL,
  `c` varchar(50) DEFAULT NULL,
  `d` varchar(50) DEFAULT NULL,
  `e` varchar(50) DEFAULT NULL,
  `f` varchar(50) DEFAULT NULL,
  `g` varchar(50) DEFAULT NULL,
  `h` varchar(50) DEFAULT NULL,
  `i` varchar(50) DEFAULT NULL,
  `j` varchar(50) DEFAULT NULL,
  `k` varchar(50) DEFAULT NULL,
  `l` varchar(50) DEFAULT NULL,
  `m` varchar(50) DEFAULT NULL,
  `n` varchar(50) DEFAULT NULL,
  `o` varchar(50) DEFAULT NULL,
  `p` varchar(50) DEFAULT NULL,
  `q` varchar(50) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `s` varchar(50) DEFAULT NULL,
  `t` varchar(50) DEFAULT NULL,
  `u` varchar(50) DEFAULT NULL,
  `v` varchar(50) DEFAULT NULL,
  `w` varchar(50) DEFAULT NULL,
  `x` varchar(50) DEFAULT NULL,
  `y` varchar(50) DEFAULT NULL,
  `z` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2018-01-18 11:52:56
