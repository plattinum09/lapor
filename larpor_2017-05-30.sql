# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.18)
# Database: larpor
# Generation Time: 2017-05-29 17:13:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2017_05_18_043535_create_profiles_table',2),
	('2017_05_19_065925_create_products_table',3),
	('2017_05_21_201227_create_vdos_table',4),
	('2017_05_21_202803_create_slides_table',5);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `image`, `detail`, `type`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'ะำกหะ','bell.png','ะำหะห',4,'2017-05-19 09:51:29','2017-05-19 09:51:40','2017-05-19 09:51:40'),
	(4,'test','demo.png','test',1,'2017-05-19 11:47:40','2017-05-19 11:49:01','2017-05-19 11:49:01'),
	(5,'test','744394422-873945388.png','test',1,'2017-05-19 11:49:14','2017-05-22 19:28:05','2017-05-22 19:28:05'),
	(6,'รับเหมาทำพื้นอีพ็อกซี่','612803648-1877637282.jpg','บริการรับเหมาทำพื้นอีพ็อกซี่ บริการตรวจเช็คหน้างานฟรี เคลือบพื้นตีเส้นฟรี ตรวจเช็คความเรียบร้อยของงานอย่างละเอียดก่อนส่งมอบ ราคายุติธรรม บริการเป็นกันเอง',1,'2017-05-22 19:30:48','2017-05-22 19:30:48',NULL),
	(7,'บริการซ่อมคอนกรีต','64891707-1497774162.jpg','เรารับซ่อมคอนกรีตที่มีปัญหาในเรื่องของรอยร้าว ทั้งพื้น ผนัง ที่จะเกิดปัญหาอื่นๆ ตามมา ทั้งในและนอกตัวอาคารด้วยวิธี epoxy/pu injection',1,'2017-05-22 19:39:08','2017-05-22 19:40:39','2017-05-22 19:40:39'),
	(8,'รับเคลือบพื้น','283807622-1642316250.jpg','รับเคลือบพื้นด้วยเทคโนโลยีพิเศษที่ช่วยให้พื้นสามารถทนทาน ไม่ชำรุดง่าย เพื่อให้เจ้าของกิจการจะได้ไม่ต้องเสียค่าบำรุงรักษาพื้นอยู่บ่อยๆ',1,'2017-05-22 19:41:17','2017-05-22 19:41:17',NULL),
	(9,'บริการให้คำปรึกษางานเคลือบพื้น','974921792-958235547.jpg','เรายินดีให้คำปรึกษาในการเคลือบพื้นโรงงาน เพื่อความอุ่นใจและมั่นใจของลูกค้าสามารถมาพูดคุยและขอนำแนะนำจากเราได้ตลอดเวลา',1,'2017-05-22 19:41:51','2017-05-22 19:41:51',NULL),
	(10,'เคลือบพื้นครบวงจร','2063903797-310020495.jpg','ม่ว่าจะเป็น พื้น epoxy, พื้น PU, งานกันซึม, Epoxy Self-Levelling, Epoxy Coating, Polyurethane สำหรับอาคารและโรงงานอุตสาหกรรมทั่วไป',1,'2017-05-22 19:42:58','2017-05-22 19:42:58',NULL),
	(11,'งานเคลือบพื้นป้องกันไฟฟ้าสถิตย์','414738491-1045302720.jpg','เหมาะสำหรับ โรงงานผลิตชิ้นส่วนอีเล็คทรอนิคย์หรือห้องควบคุมอุปกรณ์ไฟ้ฟ้าต่างๆ หรือบริเวณที่ต้องการความสะอาดมากๆ',1,'2017-05-22 19:44:07','2017-05-22 19:44:07',NULL),
	(12,'ผู้รับเหมาเคลือบพื้น','482552573-838825864.jpg','บริษัท ลาร์เปอร์ จำกัด มีความยินดีที่จะนำเสนองานเกี่ยวกับงานพื้น แนวทางแก้ปัญหาภายในโรงงาน ไม่ว่าจะเป็นพื้นภายในโรงงาน โครงสร้างอาคารแตกร้าว',1,'2017-05-22 19:45:36','2017-05-22 19:45:36',NULL),
	(13,'งานเคลือบพื้นด้วยระบบการปาด','1517888503-1034609595.jpg','ซึ่งมีคุณสมบัติดังต่อไปนี้ ไร้รอยต่อ ไม่ก่อให้เกิดฝุ่น พื้นเป็นมันเงา ทนต่อการรับน้ำหนักที่โหลด 1,500 กิโลกรัมต่อ 1 ตารางเซนติเมตร ฯลฯ',2,'2017-05-22 20:12:39','2017-05-22 20:12:39',NULL),
	(14,'งานพื้นอีพ็อกซี่','2141053415-1245851242.jpg','งานเคลือบพื้นอีพ็อกซี่จะเหมาะสำหรับ โรงงานอุตสาหกรรมต่างๆ โรงงานที่มีขนาดใหญ่เพื่อทนการกระแทก ทนรอยขีดข่วน รักษาทำความสะอาดได้ง่าย',2,'2017-05-23 02:07:04','2017-05-23 02:07:04',NULL),
	(15,'งานเคลือบพื้นโพลียูรีเทน','185201854-1151012246.jpg','เคลือบพื้นโพลียูรีเทนเหมาะสำหรับ โรงงานอุตสาหกรรม ประเภทอาหารเครื่องดื่ม ยา เวชภัณฑ์ และห้องแช่แข็ง ป้องกันสารเคมี',2,'2017-05-23 02:07:34','2017-05-23 02:07:34',NULL),
	(16,'ระบบอะคริลิคกันซึม','1813288072-1762958297.jpg','งานกันซึมโดยใช้ Acrylic waterproof ลเป็นวัสดุป้องกันการซึมของดาดฟ้าได้ดีเยี่ยม มีอายุการใช้งานนานกว่า 10 ปี เหมาะสำหรับตึก อาคาร',2,'2017-05-23 02:08:50','2017-05-23 02:08:50',NULL),
	(17,'ระบบโพลียูรีเทนกันซึม','1202838583-1386381608.jpg','เป็นวัสดุป้องกันการรั่วซึมของหลังคาและดาดฟ้า มีความยืดหยุ่นสูงและทนทานต่อทุกสภาพอากาศ ช่วยยับยั้งความเสียหายที่อาจเกิดขึ้นกับโครงสร้าง',2,'2017-05-23 02:09:39','2017-05-23 02:09:39',NULL),
	(18,'งานเคลือบพื้นป้องกันความชื้น','870560393-544889462.jpg','เป็นการเคลือบพื้นผิวเพื่อป้องกันความชื้นจากพื้นผิวปูน หรือไอน้ำจากชั้นใต้ดิน ใช้ในการรองพื้นครั้งแรก เพื่อป้องกันความชื้นอันเป็นสาเหตุที่ทำให้สีหลุดล่',2,'2017-05-23 02:10:31','2017-05-23 02:10:31',NULL),
	(19,'งานพื้นคอนกรีตเสริมแรงเคลือบอีพ็อกซี่','261181309-1009687280.jpg','พื้นคอนกรีตเสริมแรงร่วมกับการเคลือบอิพ๊อกซี่ ด้วยระบบสร้างความหนา เหมาะกับพื้นที่ที่ต้องรับน้ำหนักรับแรงทางกลรับแรงกระแทก ทนต่อการขีดข่วนได้ดี',2,'2017-05-23 02:11:21','2017-05-23 02:11:21',NULL),
	(20,'รับทำถนนแดง','369734000-588856604.jpg','รับเหมาทำพื้นถนนแดง ราคาเป็นกันเอง ติดตั้งด้วยเครื่องมือที่ทันสมัยและผู้มีความรู้ความชำนาญ',1,'2017-05-23 02:16:16','2017-05-23 02:16:16',NULL),
	(21,'ไซน์งาน กระทุ่มแบน สมุทรสาคร ','967817755-879330172.jpg','งาน Epoxy Self Leveling 2 mm. พร้อมงานทำบัวลบมุม เสร็จจบงานพร้อมส่งเรียบร้อยค่ะ',3,'2017-05-23 02:24:15','2017-05-23 02:24:15',NULL),
	(22,'ผลงาน PU Concrete','2009622550-1243657089.jpg','รวมภาพผลงาน PU Concrete สวยๆกันหน่อยค่ะ',3,'2017-05-23 02:32:04','2017-05-23 02:32:04',NULL);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`id`, `name`, `image`, `detail`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'test','vasabi.png','testestsetset','2017-05-18 19:31:13','2017-05-18 19:31:13',NULL),
	(2,'งานพื้นอีพ็อกซี่','1389848403_648930.jpg','งานเคลือบพื้นอีพ็อกซี่จะเหมาะสำหรับ โรงงานอุตสาหกรรมต่างๆ โรงงานที่มีขนาดใหญ่เพื่อทนการกระแทก ทนรอยขีดข่วน รักษาทำความสะอาดได้ง่าย','2017-05-23 02:06:29','2017-05-23 02:06:29',NULL);

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table slides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `slides`;

CREATE TABLE `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `slides` WRITE;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;

INSERT INTO `slides` (`id`, `title`, `image`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'1','845770398-1473531138.png','2017-05-21 20:35:48','2017-05-22 18:04:53',NULL),
	(2,'2','1560640416-100214989.png','2017-05-22 18:15:16','2017-05-22 18:15:16',NULL),
	(3,'3','592626865-823019725.png','2017-05-22 18:25:36','2017-05-22 18:25:36',NULL);

/*!40000 ALTER TABLE `slides` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Jirawat wannanwag','jirawat.w@tecmovecorp.com','$2y$10$SzG4qzQfDKPI06Xja1nj6.re22TcQd8o/XzNQkS3kFUXpA/ABDg6e','RINoUAW9ldGm3TwD3NZ33hT83IfQMRFKeC3cIv78xVpyWWFCvFh4QvMNsrYL','2017-05-17 16:35:49','2017-05-23 02:48:07');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table vdos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vdos`;

CREATE TABLE `vdos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `vdos` WRITE;
/*!40000 ALTER TABLE `vdos` DISABLE KEYS */;

INSERT INTO `vdos` (`id`, `title`, `url`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'work','CF7ZdLEl9A4','2017-05-21 20:15:07','2017-05-29 16:50:49',NULL),
	(2,'work2','HYbJ3Idddyw','2017-05-29 16:27:19','2017-05-29 16:50:55',NULL);

/*!40000 ALTER TABLE `vdos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
