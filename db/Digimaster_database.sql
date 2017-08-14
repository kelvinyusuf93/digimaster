-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.36 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for digimaster
DROP DATABASE IF EXISTS `digimaster`;
CREATE DATABASE IF NOT EXISTS `digimaster` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `digimaster`;

-- Dumping structure for table digimaster.digimaster__footer_content
DROP TABLE IF EXISTS `digimaster__footer_content`;
CREATE TABLE IF NOT EXISTS `digimaster__footer_content` (
  `digimaster_footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `digimaster_footer_type` enum('social media','head office','development center') DEFAULT NULL,
  `digimaster_footer_img` varchar(50) DEFAULT NULL,
  `digimaster_footer_title` varchar(100) DEFAULT NULL,
  `digimaster_footer_url` text,
  `digimaster_footer_content` text,
  `digimaster_footer_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `digimaster_footer_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `digimaster_footer_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  KEY `digimaster_footer_id` (`digimaster_footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table digimaster.digimaster__footer_content: ~5 rows (approximately)
DELETE FROM `digimaster__footer_content`;
/*!40000 ALTER TABLE `digimaster__footer_content` DISABLE KEYS */;
INSERT INTO `digimaster__footer_content` (`digimaster_footer_id`, `digimaster_footer_type`, `digimaster_footer_img`, `digimaster_footer_title`, `digimaster_footer_url`, `digimaster_footer_content`, `digimaster_footer_update_on`, `digimaster_footer_created_on`, `digimaster_footer_status`) VALUES
	(1, 'social media', 'twitter.png', 'Twitter', 'twitter.com', NULL, '2017-08-14 19:05:53', '2017-08-14 18:57:27', 'Y'),
	(2, 'head office', 'map.png', 'Head Office', '#', 'EightyEight@Kasablanka Building, 18th floor, Casablanca Raya Street Tebet, Jakarta Selatan 12870 Indonesia', '2017-08-14 19:07:36', '2017-08-14 18:57:30', 'Y'),
	(3, 'development center', 'map.png', 'Development Center', '#', 'Cervino Village Unit H Mezzanine LevelJl. KH. Abdullah Syafei Kav. 27, Tebet, Jakarta Selatan 12810, Indonesia', '2017-08-14 19:33:26', '2017-08-14 18:57:57', 'Y'),
	(4, 'social media', 'instagram.png', 'Instagram', 'instagram.com', NULL, '2017-08-14 19:01:59', '2017-08-14 18:58:00', 'Y'),
	(5, 'social media', 'facebook.png', 'Facebook', 'facebook.com', NULL, '2017-08-14 19:02:03', '2017-08-14 18:58:03', 'Y');
/*!40000 ALTER TABLE `digimaster__footer_content` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
