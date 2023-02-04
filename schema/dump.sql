-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: gallery
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.10.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slug` varchar(190) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'steam-deck','Steam Deck Stuff','2023-02-03 17:15:41','2023-02-03 18:36:47'),(2,'steam-dex-2','steam deck advanced','2023-02-03 18:41:58','2023-02-04 18:17:06'),(3,'chewie','Chewie','2023-02-04 17:18:49','2023-02-04 18:12:56');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_image`
--

DROP TABLE IF EXISTS `gallery_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery_image` (
  `image_id` int NOT NULL,
  `gallery_id` int NOT NULL,
  PRIMARY KEY (`gallery_id`,`image_id`),
  KEY `image_key` (`image_id`),
  CONSTRAINT `gallery_image_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`),
  CONSTRAINT `gallery_image_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_image`
--

LOCK TABLES `gallery_image` WRITE;
/*!40000 ALTER TABLE `gallery_image` DISABLE KEYS */;
INSERT INTO `gallery_image` VALUES (1,1),(1,2),(2,1),(2,2),(3,2),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(12,3);
/*!40000 ALTER TABLE `gallery_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `altText` text,
  `description` text,
  `slug` varchar(191) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'steamdeck setup.jpeg','image/jpeg','','','steamdeck setup.jpeg','2023-02-03 17:43:04','2023-02-04 17:52:22'),(2,'typical-cake-request.png','image/png',NULL,NULL,'typical-cake-request.png','2023-02-03 18:22:50','2023-02-03 18:22:50'),(3,'outdoor setup.jpg','image/jpeg',NULL,NULL,'outdoor setup.jpg','2023-02-03 18:23:06','2023-02-03 18:23:06'),(5,'Screenshot 2023-02-04 at 11-17-06 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png','','','Screenshot 2023-02-04 at 11-17-06 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 17:22:48','2023-02-04 17:31:36'),(6,'Screenshot 2023-02-04 at 11-17-18 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png',NULL,NULL,'Screenshot 2023-02-04 at 11-17-18 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 18:00:06','2023-02-04 18:00:06'),(7,'Screenshot 2023-02-04 at 11-17-29 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png',NULL,NULL,'Screenshot 2023-02-04 at 11-17-29 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 18:00:21','2023-02-04 18:00:21'),(8,'Screenshot 2023-02-04 at 11-17-45 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png',NULL,NULL,'Screenshot 2023-02-04 at 11-17-45 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 18:00:40','2023-02-04 18:00:40'),(9,'Screenshot 2023-02-04 at 11-17-56 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png',NULL,NULL,'Screenshot 2023-02-04 at 11-17-56 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 18:00:59','2023-02-04 18:00:59'),(10,'Screenshot 2023-02-04 at 11-18-05 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png',NULL,NULL,'Screenshot 2023-02-04 at 11-18-05 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 18:01:16','2023-02-04 18:01:16'),(12,'Screenshot 2023-02-04 at 11-18-05 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','image/png',NULL,NULL,'Screenshot 2023-02-04 at 11-18-05 Celeste Whitlow (@celestewhitlow) • Instagram photos and videos.png','2023-02-04 18:12:37','2023-02-04 18:12:37');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-04 15:01:14
