-- MySQL dump 10.13  Distrib 5.7.32, for Linux (x86_64)
--
-- Host: localhost    Database: ridepudo_23
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Current Database: `ridepudo_23`
--


--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`id`, `street`, `city`, `state`, `zip`, `lat`, `lng`, `date_time`) VALUES (1,'1 Street Valley','Stream','NY','11501',NULL,NULL,'2020-10-12 04:40:09'),(2,'1 Street Valley','Stream','NY','11501',NULL,NULL,'2020-10-12 04:41:51'),(3,'asdf','Lucknow','state','112232',NULL,NULL,'2020-10-14 22:32:01'),(4,'13722 BEDELL ST','SPRINGFIELD GARDENS','NY','11413-3053',NULL,NULL,'2020-11-18 15:16:11'),(5,'13722 BEDELL ST','SPRINGFIELD GARDENS','NY','11413-3053',NULL,NULL,'2020-11-18 17:04:04'),(6,'13722 BEDELL ST','SPRINGFIELD GARDENS','NY','11413-3053',NULL,NULL,'2020-11-18 17:04:17'),(7,'155 W FULTON AVE','ROOSEVELT','New York','11575',NULL,NULL,'2020-11-22 18:11:28'),(8,'155 W FULTON AVE','ROOSEVELT','New York','11575',NULL,NULL,'2020-11-22 18:11:34'),(9,'153-25 109 drive','Jamaica','NY','11433',NULL,NULL,'2020-11-22 18:12:01'),(10,'153-25 109 drive','Jamaica','NY','11433',NULL,NULL,'2020-11-22 18:12:04'),(11,'153-25 109 drive','Jamaica','NY','11433',NULL,NULL,'2020-11-22 18:12:08'),(12,'','','','',NULL,NULL,'2020-11-22 22:42:38'),(13,'Mehsana','Mehsana','Gujarat','360112',NULL,NULL,'2020-11-23 00:41:48'),(14,'','','','',NULL,NULL,'2020-11-24 04:00:45'),(15,'','','','',NULL,NULL,'2020-11-24 04:00:52'),(16,'','','','',NULL,NULL,'2020-11-24 04:02:04'),(17,'','','','',NULL,NULL,'2020-11-24 04:02:08'),(18,'','','','',NULL,NULL,'2020-11-24 04:17:27'),(19,'','','','',NULL,NULL,'2020-11-24 04:18:09'),(20,'','','','',NULL,NULL,'2020-11-24 04:18:18'),(21,'','','','',NULL,NULL,'2020-11-24 04:18:39');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `services` text NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `price` double(11,2) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carbase`
--

DROP TABLE IF EXISTS `carbase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carbase` (
  `carbase_id` varchar(20) NOT NULL,
  `carbase_name` varchar(255) NOT NULL,
  `owner_id` varchar(20) NOT NULL,
  `address_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`carbase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carbase`
--

LOCK TABLES `carbase` WRITE;
/*!40000 ALTER TABLE `carbase` DISABLE KEYS */;
INSERT INTO `carbase` (`carbase_id`, `carbase_name`, `owner_id`, `address_id`, `date_time`) VALUES ('CAR20110422A79FB8224','Elli Car Rental','USR2011042200288F223',0,'2020-11-04 17:33:22'),('CAR20110449A08A69453','John Car Rental','USR20110449667596451',0,'2020-11-04 17:32:49');
/*!40000 ALTER TABLE `carbase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `related_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `path` text NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `related_id`, `type`, `path`, `file_name`, `date_time`) VALUES (1,1,'shop','rp_assets/Images/shop_images/USR2010095565D7CD635','IMG20101122505F71290.png','2020-10-12 04:02:22'),(2,1,'shop','rp_assets/Images/shop_images/USR2010095565D7CD635','IMG2010113822B3BA815.png','2020-10-12 04:05:38'),(3,2,'shop','rp_assets/Images/shop_images/USR201014065909DB041','IMG2010142546163E925.png','2020-10-14 22:33:25'),(4,6,'shop','rp_assets/Images/shop_images/USR20111859603183857','IMG2011195761BA13575.jpeg','2020-11-18 17:03:57'),(6,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG201119323C552D475.jpg','2020-11-19 13:05:32'),(7,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG20112252831D98388.jpg','2020-11-22 15:31:52'),(8,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG201122592870FC788.jpeg','2020-11-22 15:31:59'),(9,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG2011221666C8A5525.jpeg','2020-11-22 16:03:16'),(10,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG20112223DDAF69925.jpeg','2020-11-22 16:03:23'),(11,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG20112230B4FEF0802.png','2020-11-22 16:03:30'),(12,5,'shop','rp_assets/Images/shop_images/USR201118468FFAD8699','IMG20112235CAC170048.jpeg','2020-11-22 16:10:35'),(14,10,'shop','rp_assets/Images/shop_images/USR20112203D6156A936','IMG20112451ED22B6410.jpg','2020-11-24 04:17:51');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_type`
--

DROP TABLE IF EXISTS `notification_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(4) NOT NULL,
  `text` varchar(255) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_type`
--

LOCK TABLES `notification_type` WRITE;
/*!40000 ALTER TABLE `notification_type` DISABLE KEYS */;
INSERT INTO `notification_type` (`type_id`, `type`, `text`, `user_type`, `date_time`) VALUES (1,'1','Would like to purchase your data',3,'2020-10-01 23:52:29'),(2,'2','Accepted your purchase data request',2,'2020-10-01 23:52:29');
/*!40000 ALTER TABLE `notification_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `related_user_id` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL,
  `link` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `related_carbase`
--

DROP TABLE IF EXISTS `related_carbase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `related_carbase` (
  `user_id` varchar(20) NOT NULL,
  `carbase_id` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `related_carbase`
--

LOCK TABLES `related_carbase` WRITE;
/*!40000 ALTER TABLE `related_carbase` DISABLE KEYS */;
INSERT INTO `related_carbase` (`user_id`, `carbase_id`, `date_time`) VALUES ('USR201104015C9853751','CAR20110422A79FB8224','2020-11-04 18:35:01'),('USR2011042200288F223','CAR20110422A79FB8224','2020-11-04 17:33:22'),('USR201104297698AB529','CAR20110422A79FB8224','2020-11-04 17:46:29'),('USR20110431395519593','CAR20110449A08A69453','2020-11-04 17:54:31'),('USR201104397462E4974','CAR20110422A79FB8224','2020-11-04 18:37:39'),('USR20110449667596451','CAR20110449A08A69453','2020-11-04 17:32:49'),('USR201107120CA97B078','CAR20110422A79FB8224','2020-11-08 01:56:12'),('USR2011071510B3F6700','CAR20110422A79FB8224','2020-11-08 02:13:15'),('USR201107444368D5068','CAR20110422A79FB8224','2020-11-08 02:06:44'),('USR20110748FBBA7E398','CAR20110422A79FB8224','2020-11-08 02:20:48'),('USR20110749E009FF021','CAR20110422A79FB8224','2020-11-08 02:18:49');
/*!40000 ALTER TABLE `related_carbase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `price` double(6,2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `shop_id`, `service_name`, `details`, `time`, `price`, `date_time`) VALUES (1,1,'Hair Cut','consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','20',100.00,'2020-10-12 05:11:25'),(2,1,'test 3','test','89',600.00,'2020-10-12 05:12:37'),(3,2,'The Hair Cut','The details of service goes here. ','20',120.00,'2020-10-14 22:34:24'),(4,5,'fade','dsgds gdgdshsfdshfdshdf','30',5437.00,'2020-11-18 15:16:28'),(5,6,'fade','dsgds gdgdshsfdshfdshdf','30',25.00,'2020-11-18 17:04:46'),(6,5,'Hairut','something new','30',34.80,'2020-11-18 18:08:29');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` (`shop_id`, `user_id`, `shop_name`, `details`, `address_id`, `date_time`) VALUES (1,'USR2010095565D7CD635','LandMark Stylist','Natasha consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',2,'2020-10-12 02:12:33'),(2,'USR201014065909DB041','shop name','description',3,'2020-10-14 22:29:06'),(3,'USR201104111FE044153','','',NULL,'2020-11-04 17:08:11'),(4,'USR20110455B0C5A7715','Karam Salon','',NULL,'2020-11-04 17:33:55'),(5,'USR201118468FFAD8699','HI HI HI','Fjejdjd',11,'2020-11-18 15:15:46'),(6,'USR20111859603183857','HI HI HI','wthwtpi p43jpojpjegopjrjo thlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pjthlnrthinaehn ]pojypoj ap4ojhgp]i4 jhp]j4pj',6,'2020-11-18 16:55:59'),(7,'USR20111914803C6B098','','',NULL,'2020-11-18 20:20:14'),(8,'USR201122109ABF5B527','','',NULL,'2020-11-21 21:58:10'),(9,'USR20112215A1DDE7692','','',NULL,'2020-11-21 21:58:15'),(10,'USR20112203D6156A936','','',21,'2020-11-22 10:30:03'),(11,'USR20112316C0BAC2523','Verovinca','sdg dfgdfg trert',13,'2020-11-22 22:42:16'),(12,'USR20112410DD8A0F356','','',NULL,'2020-11-24 01:16:10'),(13,'USR20112430052AAE404','','',NULL,'2020-11-24 04:31:30'),(14,'USR201124192A7852230','','',NULL,'2020-11-24 04:33:19'),(15,'USR20112402E5E75E078','','',NULL,'2020-11-24 04:34:02'),(16,'USR201124137FD46A405','','',NULL,'2020-11-24 04:43:13'),(17,'USR20112428F45990455','','',NULL,'2020-11-24 04:43:28'),(18,'USR20112425448E1C321','','',NULL,'2020-11-24 04:44:25'),(19,'USR201124129FBFB4914','','',NULL,'2020-11-24 04:45:12'),(20,'USR201124216B0B11777','','',NULL,'2020-11-24 04:45:21'),(21,'USR20112442EAF6F6612','','',NULL,'2020-11-24 04:45:42'),(22,'USR20112441BF183C775','','',NULL,'2020-11-24 04:46:41'),(23,'USR20112405B5A550598','','',NULL,'2020-11-24 08:40:05');
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_reviews`
--

DROP TABLE IF EXISTS `shop_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `review_by` varchar(20) NOT NULL,
  `points` varchar(5) NOT NULL,
  `review` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_reviews`
--

LOCK TABLES `shop_reviews` WRITE;
/*!40000 ALTER TABLE `shop_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriber`
--

LOCK TABLES `subscriber` WRITE;
/*!40000 ALTER TABLE `subscriber` DISABLE KEYS */;
INSERT INTO `subscriber` (`id`, `email`, `date_time`) VALUES (0,'keysmugen@gmail.com','2020-11-22 21:00:50');
/*!40000 ALTER TABLE `subscriber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_images`
--

DROP TABLE IF EXISTS `user_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_images` (
  `user_id` varchar(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_images`
--

LOCK TABLES `user_images` WRITE;
/*!40000 ALTER TABLE `user_images` DISABLE KEYS */;
INSERT INTO `user_images` (`user_id`, `file_name`) VALUES ('USR201007511121C8222','IMG2011173809B845658.jpg'),('USR2010095565D7CD635','IMG20111846BFEB43139.jpeg'),('USR2010095565D7CD677',''),('USR201014065909DB041',''),('USR2010141083F9D0624',''),('USR201104015C9853751',''),('USR201104111FE044153',''),('USR2011042200288F223',''),('USR201104297698AB529',''),('USR20110431395519593',''),('USR201104392E2388882',''),('USR201104397462E4974',''),('USR20110449667596451',''),('USR20110455B0C5A7715',''),('USR201107120CA97B078',''),('USR2011071510B3F6700',''),('USR201107444368D5068',''),('USR20110748FBBA7E398','IMG20110745D0C453151.png'),('USR20110749E009FF021',''),('USR201118362113D7159',''),('USR2011183828961B113',''),('USR201118468FFAD8699',''),('USR20111859603183857','IMG201124175FB09A655.jpg'),('USR20111914803C6B098',''),('USR2011192104D692346',''),('USR201119552FA311208',''),('USR20112203D6156A936','IMG2011241052C796541.jpg'),('USR201122109ABF5B527',''),('USR20112215A1DDE7692',''),('USR20112246D939F2349',''),('USR20112313E90B51761',''),('USR20112316C0BAC2523',''),('USR2011234804F44C462',''),('USR20112348CA317F705',''),('USR20112357C7DBB8746',''),('USR201124009ACDCC155',''),('USR20112402E5E75E078','IMG20112426833571191.png'),('USR20112405B5A550598',''),('USR2011240690A309269',''),('USR2011240692EBDC343',''),('USR201124108A432B306',''),('USR20112410DD8A0F356',''),('USR20112411E41D8A721',''),('USR201124129FBFB4914',''),('USR201124137FD46A405',''),('USR201124192A7852230',''),('USR20112421192E21535',''),('USR201124216B0B11777',''),('USR20112425448E1C321',''),('USR20112428F45990455',''),('USR20112430052AAE404','IMG20112423EE44A5509.png'),('USR2011243194E5C8261',''),('USR20112438FA38B5089',''),('USR20112438FD8A47319',''),('USR201124398D7690277',''),('USR20112440846A80539',''),('USR20112441BF183C775','IMG201124292820DC095.jpg'),('USR20112442EAF6F6612',''),('USR201124522E42DE782',''),('USR20112452B1CAB8644',''),('USR201124586953FC635',''),('USR2011245935B846146','');
/*!40000 ALTER TABLE `user_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `member_since` date NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`, `token`, `user_type`, `is_active`, `member_since`, `date_time`) VALUES ('USR201007511121C8222','Natasha','Singh','nats@test.com','9876543210','','asdf','',3,1,'2020-10-07','2020-10-07 06:07:51'),('USR2010095565D7CD635','Sara','Jones','sara@test.com','9876543219','sarajones','asdf','',4,1,'2020-10-09','2020-10-10 02:49:55'),('USR2010095565D7CD677','Pudo','Admin','pido@admin.com','9876543210','admin','asdf','',1,1,'2020-11-01','2020-11-04 15:58:48'),('USR201014065909DB041','test','business','test@business.com','2234343444','','asdf','',4,1,'2020-10-14','2020-10-14 22:29:06'),('USR2010141083F9D0624','Test','User','test@user.com','6756565456','','asdf','',3,1,'2020-10-14','2020-10-14 22:27:10'),('USR201104015C9853751','Kunal','','kunal@test.com','9876543210','kunal','asdf','',2,1,'2020-11-04','2020-11-04 18:35:01'),('USR201104111FE044153','Aman','','akkittukk56@gmail.com','7318206793','aman','','',4,1,'2020-11-04','2020-11-04 17:08:11'),('USR2011042200288F223','Elli','','elli@test.com','9876543210','elli','asdf','',2,1,'2020-11-04','2020-11-04 17:33:22'),('USR201104297698AB529','Ezra','Dail','ezra@test.com','9876543210','ezradail','','',5,1,'2020-11-04','2020-11-04 17:46:29'),('USR20110431395519593','Raj','singh','raj@gmail.com','7318206793','rajsingh','','',5,1,'2020-11-04','2020-11-04 17:54:31'),('USR201104392E2388882','Aman','singh','akkittukk@gmail.com','7318206793','amansingh','','',3,1,'2020-11-04','2020-11-04 17:07:39'),('USR201104397462E4974','Spencer','','spa@test.com','9876543210','spencer','','',5,1,'2020-11-04','2020-11-04 18:37:39'),('USR20110449667596451','John','','john@something.com','9876543210','john','','',2,1,'2020-11-04','2020-11-04 17:32:49'),('USR20110455B0C5A7715','Karam','singh','karam@gmail.com','9876543210','karamsingh','','',4,1,'2020-11-04','2020-11-04 17:33:55'),('USR20110748FBBA7E398','Sweta','Dixit','dixitnatasha7@gmail.com','9876543210','sweta','asdf1','',5,1,'2020-11-07','2020-11-08 02:20:48'),('USR201118362113D7159','Test','Man','Testman@gmail.com','3476253736','testman','testtest','',3,1,'2020-11-18','2020-11-18 15:12:36'),('USR2011183828961B113','test','man','testman3@gmail.com','3475334252','testman1','testmanman','',3,1,'2020-11-18','2020-11-18 16:45:38'),('USR201118468FFAD8699','Test','Test','Testman2@gmail.com','3472649576','testtest','testMan!','20112327DDDC4C98BE91C5C466BF9A69C5F9734A460',4,1,'2020-11-18','2020-11-18 15:15:46'),('USR20111859603183857','Test','Test','testman4@gmail.com','3475624116','testtest1','testmanman','',4,1,'2020-11-18','2020-11-18 16:55:59'),('USR20111914803C6B098','Talbor','Fush','tecampbell001@gmail.com','3475960368','talborfush','black131','',4,1,'2020-11-19','2020-11-18 20:20:14'),('USR2011192104D692346','Talbor','Campbell','umicampbell@gmail.com','3475960368','talborcampbell','Terminator*01','',3,1,'2020-11-19','2020-11-18 18:41:21'),('USR201119552FA311208','','','umicampbell@gmail.com','','1','Terminator*01','',3,1,'2020-11-19','2020-11-18 19:55:55'),('USR20112203D6156A936','Keasean','Souffrant','Keasean.souffrant@gmail.com','3478223416','keaseansouffrant12','NewPassword!','',4,1,'2020-11-22','2020-11-22 10:30:03'),('USR201122109ABF5B527','Keasean','Souffrant','Keasean.souffrant@gmail.com','3478223416','keaseansouffrant','password','',4,1,'2020-11-22','2020-11-21 21:58:10'),('USR20112215A1DDE7692','Keasean','Souffrant','Keasean.souffrant@gmail.com','3478223416','keaseansouffrant1','password','',4,1,'2020-11-22','2020-11-21 21:58:15'),('USR20112246D939F2349','fake','fake','Testman8@gmail.com','3473421435','fakefake','fakeman','',3,1,'2020-11-22','2020-11-22 10:30:46'),('USR20112313E90B51761','ritesh','kumar','ritesh.iitpl@gmail.com','','riteshkumar1','123123','20112323C1A4F785FF357F7B187C91CCA563DC81686',3,1,'2020-11-23','2020-11-23 04:24:13'),('USR20112316C0BAC2523','Hardik','Pandya','demo@test.com','9988888875','12','','',4,1,'2020-11-23','2020-11-22 22:42:16'),('USR2011234804F44C462','Suhaib','Zia','suhaibzia786@gmail.com','0315940890','suhaibzia','Suhaib@123','',3,1,'2020-11-23','2020-11-23 06:07:48'),('USR20112348CA317F705','Quay','Chambers ','Quaychambers@yahoo.com','6468816404','quaychambers ','TreCam9911*','',3,1,'2020-11-23','2020-11-23 12:54:48'),('USR20112357C7DBB8746','ritesh','kumar','cafoso4951@opetron.com','1221111111','riteshkumar','123123','20112320C9FC65562B08126C65193BB83844952A571',3,1,'2020-11-23','2020-11-23 00:49:57'),('USR201124009ACDCC155','adman','afasf','jlykworg@sharklasers.com','2474294223','admanafasf','testpassword','',3,1,'2020-11-24','2020-11-24 01:52:00'),('USR20112402E5E75E078','jij','ji','yasic27464@ibrilo.com','9999999999','jijji','yasic27464@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:34:02'),('USR20112405B5A550598','test','test','aniketh.taeden@extraale.com','4354575463','testtest12','newpassword','',4,1,'2020-11-24','2020-11-24 08:40:05'),('USR2011240690A309269','TesterMAn','MAn','TesterMan@yahoo.com','3472451563','testermanman','thepassword','',3,1,'2020-11-24','2020-11-24 01:15:06'),('USR2011240692EBDC343','','','','','123','','',3,1,'2020-11-24','2020-11-23 18:16:06'),('USR201124108A432B306','key','mugen','lorenso3@repeatxdu.com','3252625256','keymugen','testemail','',3,1,'2020-11-24','2020-11-24 01:49:10'),('USR20112410DD8A0F356','Adm','Lam','keysmugen@gmail.com','3478323415','admlam','thepassword','',4,1,'2020-11-24','2020-11-24 01:16:10'),('USR20112411E41D8A721','bhbj','vggh','lehaxa22j00@ffeast.com','9999999999','bhbjvggh','lehaxa22j00@ffeast.com','',3,1,'2020-11-24','2020-11-24 03:46:11'),('USR201124129FBFB4914','Guy ','Moody','levapep434@ibrilo.com','9585715359','guy moody','levapep434@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:45:12'),('USR201124137FD46A405','Test','Ritesh','pihet34796@ibrilo.com','9999999999','testritesh123','pihet34796@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:43:13'),('USR201124192A7852230','Test','Ritesh','jaxeca2124@ffeast.com','9999999999','testritesh12','jaxeca2124@ffeast.com','',4,1,'2020-11-24','2020-11-24 04:33:19'),('USR20112421192E21535','Guy MOng','Moody','diledeh366@ffeast.com','9585715359','guy mongmoody1','diledeh366@ffeast.com','',3,1,'2020-11-24','2020-11-24 03:57:21'),('USR201124216B0B11777','Guy ','Moody','levapep434@ibrilo.com','9995715359','guy moody1','levapep434@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:45:21'),('USR20112425448E1C321','Guy MOngss','Moodyjj','xakoji5349@ffeast.com','9585715359','guy mongssmoodyjj','xakoji5349@ffeast.com','',4,1,'2020-11-24','2020-11-24 04:44:25'),('USR20112428F45990455','Test','Ritesh','pihet34796@ibrilo.com','9999999999','testritesh1234','pihet34796@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:43:28'),('USR20112430052AAE404','ritesh','KUMAR','boxowe9912@ibrilo.com','9999999999','riteshkumar1234','boxowe9912@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:31:30'),('USR2011243194E5C8261','king','von','rixton.keontay@extraale.com','3245232234','kingvon','passpass','',3,1,'2020-11-24','2020-11-24 02:03:31'),('USR20112438FA38B5089','mati','ullah','mati_ullah31@yahoo.com','4154567890','matiullah','1234567','',3,1,'2020-11-24','2020-11-23 22:19:38'),('USR20112438FD8A47319','Guy MOng','Moody','diledeh366@ffeast.com','9585715359','guy mongmoody','diledeh366@ffeast.com','',3,1,'2020-11-24','2020-11-24 03:47:38'),('USR201124398D7690277','test','ritesh','lehaxa2200@ffeast.com','5555555555','testritesh','lehaxa2200@ffeast.com','',3,1,'2020-11-24','2020-11-24 01:54:39'),('USR20112440846A80539','ritesh','KUMAR','miditef395@ffeast.com','9999999999','riteshkumar123','miditef395@ffeast.com','',3,1,'2020-11-24','2020-11-24 03:59:40'),('USR20112441BF183C775','Guy ','Moody','xacegic237@ibrilo.com','9995715359','guy moody123','xacegic237@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:46:41'),('USR20112442EAF6F6612','Guy ','Moody','levapep434@ibrilo.com','9995715359','guy moody12','levapep434@ibrilo.com','',4,1,'2020-11-24','2020-11-24 04:45:42'),('USR201124522E42DE782','Linesha ','Rowe','linesha@gmail.com','6467738400','linesha rowe','Betty-1214','',3,1,'2020-11-24','2020-11-23 17:07:52'),('USR20112452B1CAB8644','Test','Ritesh','losifaf857@ffeast.com','9999999999','testritesh1','lehaxa2200@ffeast.com','',3,1,'2020-11-24','2020-11-24 03:43:52'),('USR201124586953FC635','ritesh','KUMAR','gabiyo5377@ffeast.com','9999999999','riteshkumar12','gabiyo5377@ffeast.com','',3,1,'2020-11-24','2020-11-24 03:57:58'),('USR2011245935B846146','e','campbell','tecampbell001@gmail.com','7184764301','ecampbell','Talbor*01','',3,1,'2020-11-24','2020-11-23 23:41:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ridepudo_23'
--

--
-- Dumping routines for database 'ridepudo_23'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-24 10:18:40
