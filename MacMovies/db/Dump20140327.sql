CREATE DATABASE  IF NOT EXISTS `macmovie` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `macmovie`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: macmovie
-- ------------------------------------------------------
-- Server version	5.6.15

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
-- Table structure for table `tb_account`
--

DROP TABLE IF EXISTS `tb_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_account` (
  `asn` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(16) DEFAULT NULL,
  `lastname` varchar(16) DEFAULT NULL,
  `accountname` varchar(8) DEFAULT NULL,
  `privilege` int(11) DEFAULT NULL,
  `favogen` varchar(45) DEFAULT NULL,
  `pswd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`asn`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_account`
--

LOCK TABLES `tb_account` WRITE;
/*!40000 ALTER TABLE `tb_account` DISABLE KEYS */;
INSERT INTO `tb_account` VALUES (1,'Erik','Wang','ek',1,NULL,'ek'),(2,'Kiki','Kang','kk',2,NULL,'kk');
/*!40000 ALTER TABLE `tb_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_genre`
--

DROP TABLE IF EXISTS `tb_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_genre` (
  `gsn` int(11) NOT NULL AUTO_INCREMENT,
  `genreid` varchar(45) DEFAULT NULL,
  `genrename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`gsn`),
  KEY `genreid` (`genreid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_genre`
--

LOCK TABLES `tb_genre` WRITE;
/*!40000 ALTER TABLE `tb_genre` DISABLE KEYS */;
INSERT INTO `tb_genre` VALUES (1,'action','action'),(2,'animation','animation'),(3,'comedy','comedy'),(4,'documentary','documentary'),(5,'family','family'),(6,'horror','horror'),(7,'musical','musical'),(8,'romance','romance'),(9,'adventure','adventure'),(10,'biography','biography'),(11,'drama','drama'),(12,'history','history'),(13,'mystery','mystery'),(14,'sci-fi','science fiction');
/*!40000 ALTER TABLE `tb_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_movies`
--

DROP TABLE IF EXISTS `tb_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_movies` (
  `msn` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `introduction` varchar(1024) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  PRIMARY KEY (`msn`)
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_movies`
--

LOCK TABLES `tb_movies` WRITE;
/*!40000 ALTER TABLE `tb_movies` DISABLE KEYS */;
INSERT INTO `tb_movies` VALUES (1,'The Terminal','A good story',2008),(2,'South Park','Very funny and crazy',1998),(235,'Raiders of the Lost Ark','When Dr. Indiana Jones - the tweed-suited professor who just happens to be a celebrated archaeologist - is hired by the government to locate the legendary Ark of the Covenant, he finds himself up against the entire Nazi regime.',1981),(236,'Inception','Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life as payment for a task considered to be impossible: \"inception\", the implantation of another person\'s idea into a target\'s subconscious.',2010),(237,'Indiana Jones and the Kingdom of the Crystal ','During the Cold War, Soviet agents watch Professor Henry Jones when a young man brings him a coded message from an aged, demented colleague, Henry Oxley. Led by the brilliant Irina Spalko, the Soviets tail Jones and the young man, Mutt, to Peru. With Oxley\'s code, they find a legendary skull made of a single piece of quartz. If Jones can deliver the skull to its rightful place, all may be well; but if Irina takes it to its origin, she\'ll gain powers that could endanger the West. Aging professor and young buck join forces with a woman from Jones\'s past to face the dangers of the jungle, Russia, and the supernatural.',2008),(238,'The Truman Show','Truman Burbank is the star of \"The Truman Show\", a 24-hour-a-day \"reality\" TV show that broadcasts every aspect of his life, live and in color, without his knowledge. His entire life has been an unending soap opera for consumption by the rest of the world. And everyone he knows--including his wife and his best friend -- is really an actor, paid to be part of his life.',1998),(239,'Yes Man','Carl Allen has stumbled across a way to shake free of post-divorce blues and a dead-end job: embrace life and say yes to everything.',2008),(240,'The Dark Knight','Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.',2008),(241,'Sherlock Holmes: A Game of Shadows','There is a new criminal mastermind at large--Professor Moriarty--and not only is he Holmes intellectual equal, but his capacity for evil and lack of conscience may give him an advantage over the detective.',2011),(242,'Iron Man','After escaping from kidnappers using makeshift power armor, an ultrarich inventor and weapons maker turns his creation into a force for good by using it to fight crime. But his skills are stretched to the limit when he must face the evil Iron Monger.',2008),(243,'TheTerminal','Viktor Navorski is a man without a country, his plane took off just as a coup d\'etat exploded in his homeland, leaving it in shambles, and now he\'s stranded at Kennedy Airport, where he\'s holding a passport that nobody recognizes. While quarantined in the transit lounge until authorities can figure out what to do with him, Viktor simply goes on living -- and courts romance with a beautiful flight attendant.',2004),(244,'Forrest Gump','A man with a low IQ has accomplished great things in his life and been present during significant historic events - in each case, far exceeding what anyone imagined he could do. Yet, despite all the things he has attained, his one true love eludes him. \'Forrest Gump\' is the story of a man who rose above his challenges, and who proved that determination, courage, and love are more important than ability.',1994),(265,'DiabloIII','Not really exsit, for test',2014),(297,'He is a joke, really?','hmm...',2011),(298,'He isn\'t a joke, really?','hmm...',2011),(299,'Magic and forbidden book','Sweet story',2010),(300,'The lost MF370','What a secret',2014),(301,'Never die','No comment',2001),(302,'Witness','A young Amish boy is sole witness to a murder; policeman John Book goes into hiding in Amish country to protect him until the trial.',1985),(303,'Indiana Jones and the Temple of Doom','After arriving in India, Indiana Jones is asked by a desperate village to find a mystical stone. He agrees, and stumbles upon a secret cult plotting a terrible plan in the catacombs of an ancient palace.',1984);
/*!40000 ALTER TABLE `tb_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_movies_has_tb_genre`
--

DROP TABLE IF EXISTS `tb_movies_has_tb_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_movies_has_tb_genre` (
  `tb_movies_msn` int(11) NOT NULL,
  `tb_genre_gsn` int(11) NOT NULL,
  PRIMARY KEY (`tb_movies_msn`,`tb_genre_gsn`),
  KEY `fk_tb_movies_has_tb_genre_tb_genre1_idx` (`tb_genre_gsn`),
  KEY `fk_tb_movies_has_tb_genre_tb_movies1_idx` (`tb_movies_msn`),
  CONSTRAINT `fk_tb_movies_has_tb_genre_tb_genre1` FOREIGN KEY (`tb_genre_gsn`) REFERENCES `tb_genre` (`gsn`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_movies_has_tb_genre_tb_movies1` FOREIGN KEY (`tb_movies_msn`) REFERENCES `tb_movies` (`msn`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_movies_has_tb_genre`
--

LOCK TABLES `tb_movies_has_tb_genre` WRITE;
/*!40000 ALTER TABLE `tb_movies_has_tb_genre` DISABLE KEYS */;
INSERT INTO `tb_movies_has_tb_genre` VALUES (235,1),(302,1),(303,1),(235,2),(236,3),(236,4),(242,4),(237,5),(237,6),(238,7),(238,8),(239,9),(303,9),(240,10),(244,10),(241,11),(241,12),(242,13),(243,14);
/*!40000 ALTER TABLE `tb_movies_has_tb_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_people`
--

DROP TABLE IF EXISTS `tb_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_people` (
  `psn` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `awards` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`psn`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_people`
--

LOCK TABLES `tb_people` WRITE;
/*!40000 ALTER TABLE `tb_people` DISABLE KEYS */;
INSERT INTO `tb_people` VALUES (1,'John','Smith','1950-01-01 00:00:00',NULL),(2,'Amy','Bella','1990-05-05 00:00:00',NULL),(4,'Leonardo','DiCaprio','1974-11-11 00:00:00',NULL),(5,'Ellen','Page','1987-02-21 00:00:00',NULL),(6,'Tom','Hanks','1956-07-09 00:00:00',NULL),(7,'Jim','Carrey','1962-01-17 00:00:00',NULL),(8,'Morgan','Freeman','1937-06-01 00:00:00',NULL),(9,'Robert','DowneyJR','1965-04-04 00:00:00',NULL),(10,'Tom','Cruise','1962-07-03 00:00:00',NULL),(11,'Harrison','Ford','1942-07-13 00:00:00',NULL),(12,'Heath','Ledger','1979-04-04 00:00:00',NULL),(13,'John','Smith','1980-06-02 00:00:00',NULL),(14,'John','Smith','1980-06-02 00:00:00',NULL),(15,'Mai','Nanase','1992-05-03 00:00:00',NULL),(16,'Stepen','Chow','1965-05-12 00:00:00',NULL),(17,'Erik','Wang','1980-06-12 00:00:00',NULL);
/*!40000 ALTER TABLE `tb_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_review`
--

DROP TABLE IF EXISTS `tb_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_review` (
  `rsn` int(11) NOT NULL AUTO_INCREMENT,
  `mdesc` varchar(1024) DEFAULT NULL,
  `descby` varchar(45) DEFAULT NULL,
  `desctime` datetime DEFAULT NULL,
  `tb_movies_msn` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`rsn`,`tb_movies_msn`),
  KEY `fk_tb_review_tb_movies1_idx` (`tb_movies_msn`),
  CONSTRAINT `fk_tb_review_tb_movies1` FOREIGN KEY (`tb_movies_msn`) REFERENCES `tb_movies` (`msn`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_review`
--

LOCK TABLES `tb_review` WRITE;
/*!40000 ALTER TABLE `tb_review` DISABLE KEYS */;
INSERT INTO `tb_review` VALUES (1,'28\r\n28 Mossgrove Street','erik.yuwang@gmail.com',NULL,299,'erik.yuwang@gmail.com',5),(2,'Wuhan Optic Valley Software Park Bldg A3, R&D','yu.wang5@hp.com',NULL,239,'yu.wang5@hp.com',3),(3,'Wuhan Optic Valley Software Park Bldg A3, R&D','yu.wang5@hp.com',NULL,299,'yu.wang5@hp.com',5),(4,'','',NULL,299,'',5),(5,'','',NULL,299,'',5),(6,'','',NULL,299,'',4),(7,'','',NULL,299,'',1),(8,'','',NULL,299,'',1),(9,'','',NULL,299,'',1),(10,'some','',NULL,300,'',1),(11,'Wuhan Optic Valley Software Park Bldg A3, R&D','erik yuwang',NULL,301,'yu.wang5@hp.com',5),(12,'I was told by a friend, it shows some local culture.','Erik Wang',NULL,302,'erik.yuwang@gmail.com',4),(13,'Can\'t miss this masterpiece!','Erik Wang',NULL,303,'yu.wang5@hp.com',5);
/*!40000 ALTER TABLE `tb_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_roles`
--

DROP TABLE IF EXISTS `tb_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_roles` (
  `rosn` int(11) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(45) DEFAULT NULL,
  `tb_movies_msn` int(11) NOT NULL,
  PRIMARY KEY (`rosn`,`tb_movies_msn`),
  KEY `fk_tb_roles_tb_movies1_idx` (`tb_movies_msn`),
  CONSTRAINT `fk_tb_roles_tb_movies1` FOREIGN KEY (`tb_movies_msn`) REFERENCES `tb_movies` (`msn`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_roles`
--

LOCK TABLES `tb_roles` WRITE;
/*!40000 ALTER TABLE `tb_roles` DISABLE KEYS */;
INSERT INTO `tb_roles` VALUES (1,'Actor',236),(2,'Actor',2),(3,'Director',1),(4,'Director',2),(39,'Producer',298),(40,'Composer',298),(41,'Producer',298),(42,'Producer',298),(43,'Story writer',299),(44,'Story writer',299),(45,'Story writer',299),(46,'Story writer',299),(47,'Story writer',299),(48,'Actor',300),(49,'Actor',300),(50,'Actor',301),(51,'Actor',239),(52,'Actor',302),(53,'Actor',303);
/*!40000 ALTER TABLE `tb_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_roles_has_tb_people`
--

DROP TABLE IF EXISTS `tb_roles_has_tb_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_roles_has_tb_people` (
  `rhpsn` int(11) NOT NULL AUTO_INCREMENT,
  `tb_roles_rosn` int(11) NOT NULL,
  `tb_people_psn` int(11) NOT NULL,
  PRIMARY KEY (`rhpsn`,`tb_roles_rosn`,`tb_people_psn`),
  KEY `fk_tb_roles_has_tb_people_tb_people1_idx` (`tb_people_psn`),
  KEY `fk_tb_roles_has_tb_people_tb_roles1_idx` (`tb_roles_rosn`),
  CONSTRAINT `fk_tb_roles_has_tb_people_tb_people1` FOREIGN KEY (`tb_people_psn`) REFERENCES `tb_people` (`psn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_roles_has_tb_people_tb_roles1` FOREIGN KEY (`tb_roles_rosn`) REFERENCES `tb_roles` (`rosn`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_roles_has_tb_people`
--

LOCK TABLES `tb_roles_has_tb_people` WRITE;
/*!40000 ALTER TABLE `tb_roles_has_tb_people` DISABLE KEYS */;
INSERT INTO `tb_roles_has_tb_people` VALUES (37,39,1),(39,41,1),(46,48,2),(48,50,7),(49,51,7),(38,40,8),(40,42,8),(47,49,10),(50,52,11),(51,53,11),(41,43,15),(42,44,15),(43,45,15),(44,46,15),(45,47,15);
/*!40000 ALTER TABLE `tb_roles_has_tb_people` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-27 20:10:22
