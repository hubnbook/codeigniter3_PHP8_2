-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.28 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for demo
CREATE DATABASE IF NOT EXISTS `demo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `demo`;

-- Dumping structure for table demo.room
CREATE TABLE IF NOT EXISTS `room` (
  `roomId` int unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `buildDate` date DEFAULT NULL,
  `lastRenovatedDate` date DEFAULT NULL,
  `roomAt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastCleanDate` date DEFAULT NULL,
  `lastCleanTime` time DEFAULT NULL,
  PRIMARY KEY (`roomId`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dumping data for table demo.room: ~2 rows (approximately)
INSERT IGNORE INTO `room` (`roomId`, `code`, `name`, `description`, `buildDate`, `lastRenovatedDate`, `roomAt`, `lastCleanDate`, `lastCleanTime`) VALUES
	(1, 'math01', 'Math', NULL, '2024-01-23', '2024-01-23', 'Headquarter', '2024-01-24', '10:10:00'),
	(2, 'english01', 'English', 'Primary class', '2024-01-23', '2024-01-23', 'Headquarter', '2024-01-23', '09:26:00');

-- Dumping structure for table demo.student
CREATE TABLE IF NOT EXISTS `student` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_number` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dumping data for table demo.student: 5 rows
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT IGNORE INTO `student` (`id`, `email`, `first_name`, `last_name`, `phone_number`, `fax_number`) VALUES
	(1, 'nattakarn.rea@ricoh.co.th', 'Nattakarn', 'Reab', NULL, '09876543'),
	(2, 'chalong.mee@ricoh.co.th', 'Chalong', 'Meesuk', NULL, NULL),
	(3, 'wutthisak.boo@ricoh.co.th', 'Wutthisak', 'Boonmee', NULL, NULL),
	(5, 'witthaya.fai@ricoh.co.th', 'Witthaya', 'Fairukdee', NULL, NULL),
	(7, 'Wanthong.son@ricoh.co.th', 'Wanthong', 'Songjai', NULL, '09876543');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
