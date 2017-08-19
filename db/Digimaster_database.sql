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

-- Dumping structure for table digimaster.digimaster__about_content
DROP TABLE IF EXISTS `digimaster__about_content`;
CREATE TABLE IF NOT EXISTS `digimaster__about_content` (
  `digimaster_about_id` int(11) NOT NULL AUTO_INCREMENT,
  `digimaster_about_type` enum('About Us','Vision','Mission','Core Value') NOT NULL,
  `digimaster_about_content` text NOT NULL,
  `digimaster_about_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `digimaster_about_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `digimaster_about_status` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`digimaster_about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table digimaster.digimaster__about_content: ~4 rows (approximately)
DELETE FROM `digimaster__about_content`;
/*!40000 ALTER TABLE `digimaster__about_content` DISABLE KEYS */;
INSERT INTO `digimaster__about_content` (`digimaster_about_id`, `digimaster_about_type`, `digimaster_about_content`, `digimaster_about_created_at`, `digimaster_about_updated_at`, `digimaster_about_status`) VALUES
	(1, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2017-08-18 23:25:58', '2017-08-19 00:28:39', 'Y'),
	(2, 'Vision', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2017-08-18 23:26:02', '2017-08-19 00:28:40', 'Y'),
	(3, 'Mission', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2017-08-18 23:26:05', '2017-08-19 00:28:41', 'Y'),
	(4, 'Core Value', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2017-08-18 23:26:08', '2017-08-19 00:28:42', 'Y');
/*!40000 ALTER TABLE `digimaster__about_content` ENABLE KEYS */;

-- Dumping structure for table digimaster.digimaster__banner
DROP TABLE IF EXISTS `digimaster__banner`;
CREATE TABLE IF NOT EXISTS `digimaster__banner` (
  `digimaster_banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `digimaster_banner_title` varchar(100) DEFAULT NULL,
  `digimaster_banner_img` varchar(100) DEFAULT NULL,
  `digimaster_banner_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `digimaster_banner_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `digimaster_banner_status` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`digimaster_banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table digimaster.digimaster__banner: ~3 rows (approximately)
DELETE FROM `digimaster__banner`;
/*!40000 ALTER TABLE `digimaster__banner` DISABLE KEYS */;
INSERT INTO `digimaster__banner` (`digimaster_banner_id`, `digimaster_banner_title`, `digimaster_banner_img`, `digimaster_banner_update_on`, `digimaster_banner_created_on`, `digimaster_banner_status`) VALUES
	(1, NULL, 'banner-1.jpg', '2017-08-15 20:26:51', '2017-08-15 20:26:21', 'Y'),
	(2, NULL, 'banner-2.jpg', '2017-08-15 20:26:58', '2017-08-15 20:26:58', 'Y'),
	(3, NULL, 'banner-3.jpg', '2017-08-15 20:27:05', '2017-08-15 20:27:05', 'Y');
/*!40000 ALTER TABLE `digimaster__banner` ENABLE KEYS */;

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

-- Dumping structure for table digimaster.digimaster__header_content
DROP TABLE IF EXISTS `digimaster__header_content`;
CREATE TABLE IF NOT EXISTS `digimaster__header_content` (
  `digimaster_header_id` int(11) NOT NULL AUTO_INCREMENT,
  `digimaster_header_type` enum('logo','favicon','menu','title') DEFAULT NULL,
  `digimaster_header_img` varchar(100) DEFAULT NULL,
  `digimaster_header_title` varchar(100) DEFAULT NULL,
  `digimaster_header_url` varchar(100) DEFAULT NULL,
  `digimaster_header_content` text,
  `digimaster_header_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `digimaster_header_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `digimaster_header_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`digimaster_header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table digimaster.digimaster__header_content: ~7 rows (approximately)
DELETE FROM `digimaster__header_content`;
/*!40000 ALTER TABLE `digimaster__header_content` DISABLE KEYS */;
INSERT INTO `digimaster__header_content` (`digimaster_header_id`, `digimaster_header_type`, `digimaster_header_img`, `digimaster_header_title`, `digimaster_header_url`, `digimaster_header_content`, `digimaster_header_update_on`, `digimaster_header_created_on`, `digimaster_header_status`) VALUES
	(1, 'logo', 'logo-digimaster.png', 'Logo', NULL, NULL, '2017-08-15 19:50:10', '2017-08-15 19:49:03', 'Y'),
	(2, 'menu', NULL, NULL, 'services', 'Services', '2017-08-15 19:51:23', '2017-08-15 19:49:11', 'Y'),
	(3, 'menu', NULL, NULL, NULL, 'Training', '2017-08-15 19:51:19', '2017-08-15 19:49:14', 'Y'),
	(4, 'menu', NULL, NULL, 'about', 'About', '2017-08-15 19:51:06', '2017-08-15 19:49:17', 'Y'),
	(5, 'menu', NULL, NULL, 'contact', 'Contact', '2017-08-15 19:51:09', '2017-08-15 19:49:29', 'Y'),
	(6, 'favicon', 'logo-digimaster.png', 'Favicon', NULL, NULL, '2017-08-15 19:51:53', '2017-08-15 19:51:41', 'Y'),
	(7, 'title', NULL, NULL, NULL, 'Digimaster', '2017-08-15 19:57:43', '2017-08-15 19:57:43', 'Y');
/*!40000 ALTER TABLE `digimaster__header_content` ENABLE KEYS */;

-- Dumping structure for table digimaster.digimaster__main_content
DROP TABLE IF EXISTS `digimaster__main_content`;
CREATE TABLE IF NOT EXISTS `digimaster__main_content` (
  `digimaster_main_id` int(11) NOT NULL AUTO_INCREMENT,
  `digimaster_subject_id` int(11) NOT NULL,
  `digimaster_main_slug` varchar(50) NOT NULL,
  `digimaster_main_name` varchar(50) NOT NULL,
  `digimaster_main_img` varchar(50) NOT NULL,
  `digimaster_main_description` text NOT NULL,
  `digimaster_main_price` decimal(12,2) NOT NULL,
  `digimaster_main_discount_type` enum('%','Nominal') DEFAULT NULL,
  `digimaster_main_discount_value` decimal(12,2) DEFAULT NULL,
  `digimaster_main_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `digimaster_main_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `digimaster_main_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`digimaster_main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table digimaster.digimaster__main_content: ~3 rows (approximately)
DELETE FROM `digimaster__main_content`;
/*!40000 ALTER TABLE `digimaster__main_content` DISABLE KEYS */;
INSERT INTO `digimaster__main_content` (`digimaster_main_id`, `digimaster_subject_id`, `digimaster_main_slug`, `digimaster_main_name`, `digimaster_main_img`, `digimaster_main_description`, `digimaster_main_price`, `digimaster_main_discount_type`, `digimaster_main_discount_value`, `digimaster_main_update_on`, `digimaster_main_created_on`, `digimaster_main_status`) VALUES
	(1, 1, 'public-speaking-with-joko', 'Public Speaking With Joko', 'banner-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 10000000.00, NULL, NULL, '2017-08-19 13:49:21', '2017-08-15 20:47:15', 'Y'),
	(2, 2, 'lets-create-friends', 'Let\'s Create Friends', 'banner-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, NULL, NULL, '2017-08-19 13:49:21', '2017-08-15 20:47:49', 'Y'),
	(3, 3, 'learn-advertising-banner', 'Learn Advertising Banner', 'banner-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, NULL, NULL, '2017-08-19 13:49:22', '2017-08-15 20:47:52', 'Y'),
	(4, 3, 'course-1', 'course-1', 'banner-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000.00, NULL, NULL, '2017-08-19 14:11:24', '2017-08-19 14:10:55', 'Y'),
	(5, 2, 'course-2', 'course-2', 'banner-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000.00, NULL, NULL, '2017-08-19 14:13:53', '2017-08-19 14:13:27', 'Y'),
	(6, 1, 'course-3', 'course-3', 'banner-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000.00, NULL, NULL, '2017-08-19 14:13:56', '2017-08-19 14:13:30', 'Y');
/*!40000 ALTER TABLE `digimaster__main_content` ENABLE KEYS */;

-- Dumping structure for table digimaster.digimaster__master_subject
DROP TABLE IF EXISTS `digimaster__master_subject`;
CREATE TABLE IF NOT EXISTS `digimaster__master_subject` (
  `digimaster_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `digimaster_subject_name` varchar(50) NOT NULL,
  `digimaster_subject_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`digimaster_subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table digimaster.digimaster__master_subject: ~3 rows (approximately)
DELETE FROM `digimaster__master_subject`;
/*!40000 ALTER TABLE `digimaster__master_subject` DISABLE KEYS */;
INSERT INTO `digimaster__master_subject` (`digimaster_subject_id`, `digimaster_subject_name`, `digimaster_subject_status`) VALUES
	(1, 'Public Speaking', 'Y'),
	(2, 'Public Relation', 'Y'),
	(3, 'Advertising', 'Y');
/*!40000 ALTER TABLE `digimaster__master_subject` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
