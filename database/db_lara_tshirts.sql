-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.21 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for lara_tshirts
DROP DATABASE IF EXISTS `lara_tshirts`;
CREATE DATABASE IF NOT EXISTS `lara_tshirts` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `lara_tshirts`;

-- Dumping structure for table lara_tshirts.tshirts
DROP TABLE IF EXISTS `tshirts`;
CREATE TABLE IF NOT EXISTS `tshirts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkg_colour` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_purchased` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lara_tshirts.tshirts: 3 rows
/*!40000 ALTER TABLE `tshirts` DISABLE KEYS */;
INSERT INTO `tshirts` (`id`, `name`, `bkg_colour`, `country_purchased`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Test Super Grove Trees', 'black', 'SG', '20211207213829.jpg', '2021-12-07 21:20:31', '2021-12-08 23:15:41', NULL),
	(2, 'Super Trees Test', 'blue', 'Singapore', '20211207212215.jpg', '2021-12-07 21:22:15', '2021-12-08 23:15:28', NULL),
	(3, 'test delete', 'sdgdf', 'sdfsdf', 'tshirt_20211207213908.jpg', '2021-12-07 21:39:08', '2021-12-07 21:39:15', '2021-12-07 21:39:15'),
	(4, 'Gardens By the Bay - Glow in the Dark', 'Black', 'Singapore', 'tshirt_20211208231411.jpg', '2021-12-08 23:14:11', '2021-12-08 23:14:11', NULL),
	(5, 'Gardens By the Bay', 'Purple', 'Singapore', 'tshirt_20211208231509.jpg', '2021-12-08 23:15:09', '2021-12-08 23:15:09', NULL),
	(6, 'Doctor Who - Tenth Doctor\'s Suit', 'Brown', 'UK', 'tshirt_20211208231635.jpg', '2021-12-08 23:16:35', '2021-12-08 23:16:35', NULL);
/*!40000 ALTER TABLE `tshirts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
