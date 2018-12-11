-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: afrexim_v1
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `affiliates`
--

DROP TABLE IF EXISTS `affiliates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `affiliates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `structure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliates`
--

LOCK TABLES `affiliates` WRITE;
/*!40000 ALTER TABLE `affiliates` DISABLE KEYS */;
/*!40000 ALTER TABLE `affiliates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditors`
--

DROP TABLE IF EXISTS `auditors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditors`
--

LOCK TABLES `auditors` WRITE;
/*!40000 ALTER TABLE `auditors` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `board_members`
--

DROP TABLE IF EXISTS `board_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board_members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board_members`
--

LOCK TABLES `board_members` WRITE;
/*!40000 ALTER TABLE `board_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `board_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certifications`
--

DROP TABLE IF EXISTS `certifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certifications`
--

LOCK TABLES `certifications` WRITE;
/*!40000 ALTER TABLE `certifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `certifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_incorporation` date DEFAULT NULL,
  `country_of_incorporation` int(11) DEFAULT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,1,5,160,'business','Hephzibah Limited','connect_1544480330.png','13, Abeni Bakare street, Mafoluku, Oshodi','Oshodi','08140058257','info@gmail.com','http://www.hephzibahtutors.com','1992-04-29',160,'RG354465436','2018-12-10 22:14:25','2018-12-10 22:18:50'),(2,2,2,5,'business','Tindel Corp','table_1544501222.png','2355, street avenue','Macapolo','9934994004003','info@tindelcorp.com','http://tindelcorp.com','2018-12-18',5,'3889892200','2018-12-11 04:05:50','2018-12-11 04:07:02');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumer_countries`
--

DROP TABLE IF EXISTS `consumer_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumer_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumer_countries`
--

LOCK TABLES `consumer_countries` WRITE;
/*!40000 ALTER TABLE `consumer_countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `consumer_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dial_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` enum('Africa','Antarctica','Asia','Europe','North America','Oceania','South America') COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_index` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','AF','+93','0','Asia',NULL,0,1),(2,'Albania','AL','+335','0','Europe',NULL,0,1),(3,'Algeria','DZ','+213','0','Africa',NULL,0,1),(4,'American Samoa','AS','+685','0','Oceania',NULL,0,1),(5,'Andorra','AD','+376','0','Europe',NULL,0,1),(6,'Angola','AO','+244','0','Africa',NULL,0,1),(7,'Anguilla','AI','+1 264','0','North America',NULL,0,1),(8,'Antarctica','AQ','+672','0','Antarctica',NULL,0,1),(9,'Antigua And Barbuda','AG','+1 268','0','North America',NULL,0,1),(10,'Argentina','AR','+54','0','South America',NULL,0,1),(11,'Armenia','AM','+374','0','Asia',NULL,0,1),(12,'Aruba','AW','+297','0','North America',NULL,0,1),(13,'Australia','AU','+61','0','Oceania',NULL,0.927,1),(14,'Austria','AT','+43','0','Europe',NULL,0,1),(15,'Azerbaijan','AZ','+994','0','Asia',NULL,0,1),(16,'Bahamas The','BS','+1 242','0','North America',NULL,0,1),(17,'Bahrain','BH','+973','0','Asia',NULL,0,1),(18,'Bangladesh','BD','+880','0','Asia',NULL,0,1),(19,'Barbados','BB','+1 246','0','North America',NULL,0,1),(20,'Belarus','BY','+375','0','Europe',NULL,0,1),(21,'Belgium','BE','+32','0','Europe',NULL,0,1),(22,'Belize','BZ','+501','0','North America',NULL,0,1),(23,'Benin','BJ','+229','0','Africa',NULL,0,1),(24,'Bermuda','BM','+1 441','0','North America',NULL,0,1),(25,'Bhutan','BT','+975','0','Asia',NULL,0,1),(26,'Bolivia','BO','+591','0','South America',NULL,0,1),(27,'Bosnia and Herzegovina','BA','+387','0','Europe',NULL,0,1),(28,'Botswana','BW','+267','0','Africa',NULL,0,1),(29,'Bouvet Island','BV','','0','Antarctica',NULL,0,1),(30,'Brazil','BR','+55','0','South America',NULL,0,1),(31,'British Indian Ocean Territory','IO','','0','Asia',NULL,0,1),(32,'Brunei','BN','+673','0','Asia',NULL,0,1),(33,'Bulgaria','BG','+359','0','Europe',NULL,0,1),(34,'Burkina Faso','BF','+226','0','Africa',NULL,0,1),(35,'Burundi','BI','+257','0','Africa',NULL,0,1),(36,'Cambodia','KH','+855','0','Asia',NULL,0,1),(37,'Cameroon','CM','+237','0','Africa',NULL,0,1),(38,'Canada','CA','+1','0','North America',NULL,0.85,1),(39,'Cape Verde','CV','+238','0','Africa',NULL,0,1),(40,'Cayman Islands','KY','+1 345','0','North America',NULL,0,1),(41,'Central African Republic','CF','+236','0','Africa',NULL,0,1),(42,'Chad','TD','+235','0','Africa',NULL,0,1),(43,'Chile','CL','+56','0','South America',NULL,0,1),(44,'China','CN','+86','0','Asia',NULL,0,1),(45,'Christmas Island','CX','+672','0','Asia',NULL,0,1),(46,'Cocos (Keeling) Islands','CC','+672','0','Asia',NULL,0,1),(47,'Colombia','CO','+57','0','South America',NULL,0,1),(48,'Comoros','KM','+269','0','Africa',NULL,0,1),(49,'Congo','CG','+242','0','Africa',NULL,0,1),(50,'Congo The Democratic Republic Of The','CD','+243','0','Africa',NULL,0,1),(51,'Cook Islands','CK','+682','0','Oceania',NULL,0,1),(52,'Costa Rica','CR','+506','0','North America',NULL,0,1),(53,'Cote D\'Ivoire (Ivory Coast)','CI','+225','0','Africa',NULL,0,1),(54,'Croatia (Hrvatska)','HR','+385','0','Europe',NULL,0,1),(55,'Cuba','CU','+53','0','North America',NULL,0,1),(56,'Cyprus','CY','+357','0','Asia',NULL,0,1),(57,'Czech Republic','CZ','+42','0','Europe',NULL,0.866,1),(58,'Denmark','DK','+45','0','Europe',NULL,0.873,1),(59,'Djibouti','DJ','+253','0','Africa',NULL,0,1),(60,'Dominica','DM','+1 767','0','North America',NULL,0,1),(61,'Dominican Republic','DO','+1 809','0','North America',NULL,0,1),(62,'East Timor','TP','','0','Asia',NULL,0,1),(63,'Ecuador','EC','+593','0','South America',NULL,0,1),(64,'Egypt','EG','+20','0','Africa',NULL,0,1),(65,'El Salvador','SV','+503','0','North America',NULL,0,1),(66,'Equatorial Guinea','GQ','+240','0','Africa',NULL,0,1),(67,'Eritrea','ER','+291','0','Africa',NULL,0,1),(68,'Estonia','EE','+372','0','Europe',NULL,0.859,1),(69,'Ethiopia','ET','+251','0','Africa',NULL,0,1),(70,'External Territories of Australia','XA','','0','Oceania',NULL,0,1),(71,'Falkland Islands','FK','+500','0','South America',NULL,0,1),(72,'Faroe Islands','FO','+298','0','Europe',NULL,0,1),(73,'Fiji Islands','FJ','+679','0','Oceania',NULL,0,1),(74,'Finland','FI','+358','0','Europe',NULL,0,1),(75,'France','FR','+33','0','Europe',NULL,0,1),(76,'French Guiana','GF','+594','0','South America',NULL,0,1),(77,'French Polynesia','PF','+689','0','Oceania',NULL,0,1),(78,'French Southern Territories','TF','','0','Antarctica',NULL,0,1),(79,'Gabon','GA','+241','0','Africa',NULL,0,1),(80,'Gambia The','GM','+220','0','Africa',NULL,0,1),(81,'Georgia','GE','+995','0','Asia',NULL,0,1),(82,'Germany','DE','+49','0','Europe',NULL,0.884,1),(83,'Ghana','GH','+233','0','Africa',NULL,0,1),(84,'Gibraltar','GI','+350','0','Europe',NULL,0,1),(85,'Greece','GR','+30','0','Europe',NULL,0,1),(86,'Greenland','GL','+299','0','North America',NULL,0,1),(87,'Grenada','GD','+1 473','0','North America',NULL,0,1),(88,'Guadeloupe','GP','+590','0','North America',NULL,0,1),(89,'Guam','GU','+671','0','Oceania',NULL,0,1),(90,'Guatemala','GT','+502','0','North America',NULL,0,1),(91,'Guernsey and Alderney','XU','','0','Europe',NULL,0,1),(92,'Guinea','GN','+224','0','Africa',NULL,0,1),(93,'Guinea-Bissau','GW','+245','0','Africa',NULL,0,1),(94,'Guyana','GY','+592','0','South America',NULL,0,1),(95,'Haiti','HT','+509','0','North America',NULL,0,1),(96,'Heard and McDonald Islands','HM','','0','Antarctica',NULL,0,1),(97,'Honduras','HN','+504','0','North America',NULL,0,1),(98,'Hong Kong S.A.R.','HK','+852','0','Asia',NULL,0,1),(99,'Hungary','HU','+36','0','Europe',NULL,0,1),(100,'Iceland','IS','+354','0','Europe',NULL,0,1),(101,'India','IN','+91','0','Asia',NULL,0,1),(102,'Indonesia','ID','+62','0','Asia',NULL,0,1),(103,'Iran','IR','+98','0','Asia',NULL,0,1),(104,'Iraq','IQ','+964','0','Asia',NULL,0,1),(105,'Ireland','IE','+353','0','Europe',NULL,0.887,1),(106,'Israel','IL','+972','0','Asia',NULL,0.854,1),(107,'Italy','IT','+39','0','Europe',NULL,0,1),(108,'Jamaica','JM','+1 876','0','North America',NULL,0,1),(109,'Japan','JP','+81','0','Asia',NULL,0,1),(110,'Jersey','XJ','','0','Europe',NULL,0,1),(111,'Jordan','JO','+962','0','Asia',NULL,0,1),(112,'Kazakhstan','KZ','+7','0','Asia',NULL,0,1),(113,'Kenya','KE','+254','0','Africa',NULL,0,1),(114,'Kiribati','KI','+686','0','Oceania',NULL,0,1),(115,'Korea North','KP','+850','0','Asia',NULL,0,1),(116,'Korea South','KR','+82','0','Asia',NULL,0,1),(117,'Kuwait','KW','+965','0','Asia',NULL,0,1),(118,'Kyrgyzstan','KG','+7','0','Asia',NULL,0,1),(119,'Laos','LA','+856','0','Asia',NULL,0,1),(120,'Latvia','LV','+371','0','Europe',NULL,0,1),(121,'Lebanon','LB','+961','0','Asia',NULL,0,1),(122,'Lesotho','LS','+266','0','Africa',NULL,0,1),(123,'Liberia','LR','+231','0','Africa',NULL,0,1),(124,'Libya','LY','+218','0','Africa',NULL,0,1),(125,'Liechtenstein','LI','+423','0','Europe',NULL,0,1),(126,'Lithuania','LT','+370','0','Europe',NULL,0.877,1),(127,'Luxembourg','LU','+352','0','Europe',NULL,0,1),(128,'Macau S.A.R.','MO','+853','0','Asia',NULL,0,1),(129,'Macedonia','MK','+389','0','Europe',NULL,0,1),(130,'Madagascar','MG','+261','0','Africa',NULL,0,1),(131,'Malawi','MW','+265','0','Africa',NULL,0,1),(132,'Malaysia','MY','+60','0','Asia',NULL,0,1),(133,'Maldives','MV','+960','0','Asia',NULL,0,1),(134,'Mali','ML','+223','0','Africa',NULL,0,1),(135,'Malta','MT','+356','0','Europe',NULL,0,1),(136,'Man (Isle of)','XM','','0','Europe',NULL,0,1),(137,'Marshall Islands','MH','+692','0','Oceania',NULL,0,1),(138,'Martinique','MQ','+596','0','North America',NULL,0,1),(139,'Mauritania','MR','+222','0','Africa',NULL,0,1),(140,'Mauritius','MU','+230','0','Africa',NULL,0,1),(141,'Mayotte','YT','+269','0','Africa',NULL,0,1),(142,'Mexico','MX','+52','0','North America',NULL,0,1),(143,'Micronesia','FM','+691','0','Oceania',NULL,0,1),(144,'Moldova','MD','+373','0','Europe',NULL,0,1),(145,'Monaco','MC','+377','0','Europe',NULL,0,1),(146,'Mongolia','MN','+976','0','Asia',NULL,0,1),(147,'Montserrat','MS','+1 664','0','North America',NULL,0,1),(148,'Morocco','MA','+212','0','Africa',NULL,0,1),(149,'Mozambique','MZ','+258','0','Africa',NULL,0,1),(150,'Myanmar','MM','+95','0','Asia',NULL,0,1),(151,'Namibia','NA','+264','0','Africa',NULL,0,1),(152,'Nauru','NR','+674','0','Oceania',NULL,0,1),(153,'Nepal','NP','+977','0','Asia',NULL,0,1),(154,'Netherlands Antilles','AN','+599','0','North America',NULL,0,1),(155,'Netherlands The','NL','+31','0','Europe',NULL,0.894,1),(156,'New Caledonia','NC','+687','0','Oceania',NULL,0,1),(157,'New Zealand','NZ','+64','0','Oceania',NULL,0.917,1),(158,'Nicaragua','NI','+505','0','North America',NULL,0,1),(159,'Niger','NE','+227','0','Africa',NULL,0,1),(160,'Nigeria','NG','+234','0','Africa',NULL,0,1),(161,'Niue','NU','','0','Oceania',NULL,0,1),(162,'Norfolk Island','NF','','0','Oceania',NULL,0,1),(163,'Northern Mariana Islands','MP','','0','Oceania',NULL,0,1),(164,'Norway','NO','+47','0','Europe',NULL,0.91,1),(165,'Oman','OM','+968','0','Asia',NULL,0,1),(166,'Pakistan','PK','+92','0','Asia',NULL,0,1),(167,'Palau','PW','','0','Oceania',NULL,0,1),(168,'Palestinian Territory Occupied','PS','','0','Asia',NULL,0,1),(169,'Panama','PA','+507','0','North America',NULL,0,1),(170,'Papua new Guinea','PG','+675','0','Oceania',NULL,0,1),(171,'Paraguay','PY','+595','0','South America',NULL,0,1),(172,'Peru','PE','+51','0','South America',NULL,0,1),(173,'Philippines','PH','+63','0','Asia',NULL,0,1),(174,'Pitcairn Island','PN','+649','0','Oceania',NULL,0,1),(175,'Poland','PL','+48','0','Europe',NULL,0,1),(176,'Portugal','PT','+351','0','Europe',NULL,0,1),(177,'Puerto Rico','PR','+1 787','0','North America',NULL,0,1),(178,'Qatar','QA','+974','0','Asia',NULL,0,1),(179,'Reunion','RE','','0','Africa',NULL,0,1),(180,'Romania','RO','+40','0','Europe',NULL,0,1),(181,'Russia','RU','+7','0','Europe',NULL,0,1),(182,'Rwanda','RW','+250','0','Africa',NULL,0,1),(183,'Saint Helena','SH','+290','0','Africa',NULL,0,1),(184,'Saint Kitts And Nevis','KN','+1 869','0','North America',NULL,0,1),(185,'Saint Lucia','LC','+1 758','0','North America',NULL,0,1),(186,'Saint Pierre and Miquelon','PM','','0','North America',NULL,0,1),(187,'Saint Vincent And The Grenadines','VC','+1 784','0','North America',NULL,0,1),(188,'Samoa','WS','+685','0','Oceania',NULL,0,1),(189,'San Marino','SM','+378','0','Europe',NULL,0,1),(190,'Sao Tome and Principe','ST','','0','Africa',NULL,0,1),(191,'Saudi Arabia','SA','+966','0','Asia',NULL,0,1),(192,'Senegal','SN','+221','0','Africa',NULL,0,1),(193,'Serbia','RS','+381','0','Europe',NULL,0,1),(194,'Seychelles','SC','+248','0','Africa',NULL,0,1),(195,'Sierra Leone','SL','+232','0','Africa',NULL,0,1),(196,'Singapore','SG','+65','0','Asia',NULL,0,1),(197,'Slovakia','SK','+421','0','Europe',NULL,0,1),(198,'Slovenia','SI','+386','0','Europe',NULL,0.863,1),(199,'Smaller Territories of the UK','XG','','0','Europe',NULL,0,1),(200,'Solomon Islands','SB','+677','0','Oceania',NULL,0,1),(201,'Somalia','SO','+252','0','Africa',NULL,0,1),(202,'South Africa','ZA','+27','0','Africa',NULL,0,1),(203,'South Georgia','GS','','0','Antarctica',NULL,0,1),(204,'South Sudan','SS','+249','0','Africa',NULL,0,1),(205,'Spain','ES','+349','0','Europe',NULL,0,1),(206,'Sri Lanka','LK','+94','0','Asia',NULL,0,1),(207,'Sudan','SD','+249','0','Africa',NULL,0,1),(208,'Suriname','SR','+597','0','South America',NULL,0,1),(209,'Svalbard And Jan Mayen Islands','SJ','','0','Europe',NULL,0,1),(210,'Swaziland','SZ','+268','0','Africa',NULL,0,1),(211,'Sweden','SE','+46','0','Europe',NULL,0,1),(212,'Switzerland','CH','+41','0','Europe',NULL,0,1),(213,'Syria','SY','+963','0','Asia',NULL,0,1),(214,'Taiwan','TW','+886','0','Asia',NULL,0,1),(215,'Tajikistan','TJ','+7','0','Asia',NULL,0,1),(216,'Tanzania','TZ','+255','0','Africa',NULL,0,1),(217,'Thailand','TH','+66','0','Asia',NULL,0,1),(218,'Togo','TG','+228','0','Africa',NULL,0,1),(219,'Tokelau','TK','','0','Oceania',NULL,0,1),(220,'Tonga','TO','+676','0','Oceania',NULL,0,1),(221,'Trinidad And Tobago','TT','+1 868','0','North America',NULL,0,1),(222,'Tunisia','TN','+216','0','Africa',NULL,0,1),(223,'Turkey','TR','+90','0','Europe',NULL,0,1),(224,'Turkmenistan','TM','+7','0','Asia',NULL,0,1),(225,'Turks And Caicos Islands','TC','+1 649','0','North America',NULL,0,1),(226,'Tuvalu','TV','+688','0','Oceania',NULL,0,1),(227,'Uganda','UG','+256','0','Africa',NULL,0,1),(228,'Ukraine','UA','+380','0','Europe',NULL,0,1),(229,'United Arab Emirates','AE','+971','0','Asia',NULL,0,1),(230,'United Kingdom','GB','+44','0','Europe',NULL,0.86,1),(231,'United States','US','+1','0','North America',NULL,0.89,1),(232,'United States Minor Outlying Islands','UM','','0','Oceania',NULL,0,1),(233,'Uruguay','UY','+598','0','South America',NULL,0,1),(234,'Uzbekistan','UZ','+998','0','Asia',NULL,0,1),(235,'Vanuatu','VU','+678','0','Oceania',NULL,0,1),(236,'Vatican City State (Holy See)','VA','+39','0','Europe',NULL,0,1),(237,'Venezuela','VE','+58','0','South America',NULL,0,1),(238,'Vietnam','VN','+84','0','Asia',NULL,0,1),(239,'Virgin Islands (British)','VG','+1 284','0','North America',NULL,0,1),(240,'Virgin Islands (US)','VI','+1 340','0','North America',NULL,0,1),(241,'Wallis And Futuna Islands','WF','','0','Oceania',NULL,0,1),(242,'Western Sahara','EH','','0','Africa',NULL,0,1),(243,'Yemen','YE','+967','0','Asia',NULL,0,1),(244,'Yugoslavia','YU','','0','Africa',NULL,0,1),(245,'Zambia','ZM','+260','0','Africa',NULL,0,1),(246,'Zimbabwe','ZW','+263','0','Africa',NULL,0,1);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industries`
--

LOCK TABLES `industries` WRITE;
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
INSERT INTO `industries` VALUES (1,'Agriculture','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(2,'Hospitality','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(3,'Mining','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(4,'Business Services','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(5,'Info Comm Tech','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(6,'Consumer Services','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(7,'Education','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(8,'Energy and Utilities','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(9,'Financial Services','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(10,'Government','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(11,'Health, Pharmaceuticals, and Biotech','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(12,'Manufacturing','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(13,'Media and Entertainment','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(14,'Non-profit','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(15,'Real Estate and Construction','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(16,'Retail','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(17,'Transportation and Storage','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(18,'Travel Recreation and Leisure','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(19,'Wholesale and Distribution','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(20,'Oil &Gas','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL),(21,'Others','The construction company comprises of building, road, tunnel, railway construction groups/companies...',1,'2016-11-23 04:07:10',NULL);
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legal_advisors`
--

DROP TABLE IF EXISTS `legal_advisors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legal_advisors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legal_advisors`
--

LOCK TABLES `legal_advisors` WRITE;
/*!40000 ALTER TABLE `legal_advisors` DISABLE KEYS */;
/*!40000 ALTER TABLE `legal_advisors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_11_29_224608_create_profiles_table',1),(4,'2018_11_30_115743_create_companies_table',1),(5,'2018_11_30_120021_create_countries_table',1),(6,'2018_11_30_120042_create_states_table',1),(7,'2018_11_30_192318_create_industries_table',1),(8,'2018_12_05_111905_create_products_table',1),(9,'2018_12_05_112148_create_signatories_table',1),(10,'2018_12_05_112309_create_legal_advisors_table',1),(11,'2018_12_05_112333_create_auditors_table',1),(12,'2018_12_05_112413_create_references_table',1),(13,'2018_12_05_112519_create_shareholders_table',1),(14,'2018_12_05_112636_create_suppliers_table',1),(15,'2018_12_05_112713_create_board_members_table',1),(16,'2018_12_05_112839_create_affiliates_table',1),(17,'2018_12_05_112922_create_subsidiaries_table',1),(18,'2018_12_05_113730_create_sanctions_table',1),(19,'2018_12_05_121832_create_certifications_table',1),(20,'2018_12_06_054237_create_consumer_countries_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'Timber','2018-12-10 22:19:00','2018-12-10 22:19:00'),(2,1,'Rubber','2018-12-10 22:19:02','2018-12-10 22:19:02'),(3,1,'Granite','2018-12-10 22:19:05','2018-12-10 22:19:05'),(4,2,'Bamboo','2018-12-11 04:07:26','2018-12-11 04:07:26'),(5,2,'Sand Paper','2018-12-11 04:07:40','2018-12-11 04:07:40');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,1,'Emmanuel Benson','2018-12-10 22:14:25','2018-12-10 22:14:25'),(2,2,'Mac Tindel','2018-12-11 04:05:50','2018-12-11 04:05:50');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `references`
--

DROP TABLE IF EXISTS `references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `references`
--

LOCK TABLES `references` WRITE;
/*!40000 ALTER TABLE `references` DISABLE KEYS */;
/*!40000 ALTER TABLE `references` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanctions`
--

DROP TABLE IF EXISTS `sanctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanctions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanctions`
--

LOCK TABLES `sanctions` WRITE;
/*!40000 ALTER TABLE `sanctions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shareholders`
--

DROP TABLE IF EXISTS `shareholders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shareholders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shareholders`
--

LOCK TABLES `shareholders` WRITE;
/*!40000 ALTER TABLE `shareholders` DISABLE KEYS */;
/*!40000 ALTER TABLE `shareholders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signatories`
--

DROP TABLE IF EXISTS `signatories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signatories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signatories`
--

LOCK TABLES `signatories` WRITE;
/*!40000 ALTER TABLE `signatories` DISABLE KEYS */;
/*!40000 ALTER TABLE `signatories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subsidiaries`
--

DROP TABLE IF EXISTS `subsidiaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subsidiaries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subsidiaries`
--

LOCK TABLES `subsidiaries` WRITE;
/*!40000 ALTER TABLE `subsidiaries` DISABLE KEYS */;
/*!40000 ALTER TABLE `subsidiaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physical_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `activation_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'emmanuel.c.benson@gmail.com',NULL,'db16441c4b330570a9ac83b0e0b006fcd74cc32b','$2y$10$aCnPjv3PFHzQ813UqUl2i.xsEgGemicYWWnqBQ6479nYXyOMO4ER.','LNJdF3NoWkrRNZwXHYb1sDA2FB9eo2T0zm3RJBzPrIhiOyBsotaCzSjscWGN','2018-12-10 22:14:25','2018-12-10 22:14:25'),(2,'tindel@tindelcorp.com',NULL,'db16441c4b330570a9ac83b0e0b006fcd74cc32b','$2y$10$JAdL1Wn2R6rhW/Fzu/OWVOJ.G07bsueU/zIi2oqFxrE33nxyTXYPi','Szka6k7SBL9woB2uyWAH8SCouxdjgq63FUsqScZhmqtuXYEpzQWjglX0GxT6','2018-12-11 04:05:50','2018-12-11 04:05:50');
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

-- Dump completed on 2018-12-11  5:46:46
