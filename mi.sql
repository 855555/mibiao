-- MySQL dump 10.13  Distrib 5.7.40, for Linux (x86_64)
--
-- Host: localhost    Database: mi
-- ------------------------------------------------------
-- Server version	5.7.40-log

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
-- Table structure for table `mi`
--

DROP TABLE IF EXISTS `mi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mi` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `yuming` varchar(100) NOT NULL,
  `beizhu` varchar(100) NOT NULL,
  `jiage` varchar(100) NOT NULL,
  `pingtai` varchar(50) NOT NULL,
  `zhuangtai` enum('未售','已售') NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mi`
--

LOCK TABLES `mi` WRITE;
/*!40000 ALTER TABLE `mi` DISABLE KEYS */;
INSERT INTO `mi` VALUES (1,'qq.com','腾讯QQ','1','腾讯云','未售','https://qq.com'),(2,'jd.com','京东商城','1','京东云','未售','https://jd.com'),(3,'x.com','马斯克','0.01','推特','已售','http://x.com'),(4,'taobao.com','淘宝网','1','阿里云','未售','https://taobao.com');
/*!40000 ALTER TABLE `mi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `title`
--

DROP TABLE IF EXISTS `title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(50) NOT NULL,
  `miaoshu` varchar(100) NOT NULL,
  `guanjianci` varchar(100) NOT NULL,
  `foot` text NOT NULL,
  `touxiang` varchar(100) NOT NULL,
  `qianming` varchar(100) NOT NULL,
  `zanzhu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `title`
--

LOCK TABLES `title` WRITE;
/*!40000 ALTER TABLE `title` DISABLE KEYS */;
INSERT INTO `title` VALUES (1,'NMSL米表展示系统','NMSL米表展示系统,开源域名展示系统','NMSL米表展示系统,开源域名展示系统','  <footer class=\"bg-body-extra-light\" id=\"page-footer\">\r\n        <div class=\"content content-full\">\r\n            <div class=\"row g-0 fs-sm border-top pt-3\">\r\n                <div class=\"col-sm-6 order-sm-2 py-1 text-center text-sm-end\">\r\n                    © <span data-toggle=\"year-copy\" class=\"js-year-copy-enabled\">2023</span>\r\n                    <a class=\"fw-semibold\" href=\"#\" target=\"_blank\">xxxx</a>\r\n                </div>\r\n                <div class=\"col-sm-6 order-sm-1 py-1 text-center text-sm-start\">\r\n                    <a href=\"\" target=\"_blank\" class=\"text-muted fw-semibold\">XXX号XXXX号</a>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        \r\n        \r\n   \r\n        \r\n    </footer>','/img/logo.jpg','NMSL米表展示系统','#');
/*!40000 ALTER TABLE `title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','$2y$10$b8/ZUtID3UdenJoIXvladeW3hxcrzTazopqW9BTn0.o.be6TUrppW');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mi'
--

--
-- Dumping routines for database 'mi'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-31 18:12:11
