-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2019 at 12:29 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_orchestra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Orchestra', 'admin@orchestra.com', '$2y$10$93OsuSi2tYNhWNUj5aahoeVGFCBMvgdtQmMsCsP1KRLol9ZKIgsrC', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name_ua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double(8,2) NOT NULL,
  `hemisphere` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name_en`, `country_name_ua`, `latitude`, `hemisphere`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 'Австралія', 25.27, 'S', NULL, NULL),
(2, 'Austria', 'Австрія', 47.52, 'N', NULL, NULL),
(3, 'Belarus', 'Білорусія', 53.71, 'N', NULL, NULL),
(4, 'Canada', 'Канада', 56.13, 'B', NULL, NULL),
(5, 'China', 'Китай', 49.74, 'N', NULL, NULL),
(6, 'Egypt', 'Єгипет', 26.82, 'N', NULL, NULL),
(7, 'Finland', 'Фінляндія', 61.92, 'N', NULL, NULL),
(8, 'France', 'Фрація', 46.23, 'N', NULL, NULL),
(9, 'Georgia', 'Грузія', 32.17, 'N', NULL, NULL),
(10, 'Germany', 'Німеччина', 51.17, 'N', NULL, NULL),
(11, 'Greece', 'Греція', 39.07, 'N', NULL, NULL),
(12, 'Greenland', 'Грінландія', 71.71, 'N', NULL, NULL),
(13, 'Hong Kong', 'Гонг Конг', 22.32, 'N', NULL, NULL),
(14, 'Hungary', 'Хорватія', 47.16, 'N', NULL, NULL),
(15, 'Iceland', 'Ісландія', 64.96, 'N', NULL, NULL),
(16, 'India', 'Індія', 20.59, 'N', NULL, NULL),
(17, 'Ireland', 'Ірландія', 53.14, 'N', NULL, NULL),
(18, 'Israel', 'Ізраїль', 31.05, 'N', NULL, NULL),
(19, 'Italy', 'Італія', 41.87, 'N', NULL, NULL),
(20, 'Latvia', 'Латвія', 56.88, 'N', NULL, NULL),
(21, 'Norway', 'Норвегія', 60.47, 'N', NULL, NULL),
(22, 'Poland', 'Польша', 51.92, 'N', NULL, NULL),
(23, 'Portugal', 'Португалія', 39.40, 'N', NULL, NULL),
(24, 'Romania', 'Румунія', 45.94, 'N', NULL, NULL),
(25, 'Russian Federation', 'Російська Федерація', 61.52, 'N', NULL, NULL),
(26, 'Singapore', 'Сінгапур', 1.35, 'N', NULL, NULL),
(27, 'Slovakia', 'Словакія', 48.67, 'N', NULL, NULL),
(28, 'Slovenia', 'Словенія', 46.15, 'N', NULL, NULL),
(29, 'South Africa', 'Південна Африка', 30.56, 'S', NULL, NULL),
(30, 'Spain', 'Іспанія', 40.46, 'N', NULL, NULL),
(31, 'Sweden', 'Швеція', 60.13, 'N', NULL, NULL),
(32, 'Switzerland', 'Швейцарія', 46.82, 'N', NULL, NULL),
(33, 'Turkey', 'Турція', 38.96, 'N', NULL, NULL),
(34, 'Ukraine', 'Україна', 48.38, 'N', NULL, NULL),
(35, 'United Arab Emirates', 'Об\'єднані Арабські Емірати', 23.42, 'N', NULL, NULL),
(36, 'United Kingdom', 'Британія', 55.38, 'N', NULL, NULL),
(37, 'United States', 'Сполучені Штати', 37.09, 'N', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_29_185727_create_admins_table', 1),
(4, '2019_05_03_221229_create_subscribers_table', 1),
(5, '2019_05_05_030718_create_subscribers_systems_table', 1),
(6, '2019_05_05_030732_create_systems_table', 1),
(7, '2019_05_09_190314_create_countries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` bigint(20) NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `subscribers_country_id_foreign` (`country_id`),
  KEY `subscribers_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `phone_number`, `subscriber_type`, `address`, `city`, `postal_code`, `country_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3141592653', 'Private', '2 Rymskoho-Korsakova St.', 'Sumy', '40000', 1, 1, NULL, NULL),
(2, '5897932384', 'Business', '134 Petropavlivska St.', 'Sumy', '40042', 36, 2, NULL, NULL),
(3, '6264338327', 'Private', '420 Canada St.', 'Kyiv', '50051', 4, 3, NULL, NULL),
(4, '9502884197', 'Бізнес', 'Вул. Богдана Хмерьницького 19, кв.20', 'Хмельницьк', '30031', 34, 4, NULL, NULL),
(5, '1693993751', 'Приватне', 'Вул. Івана Сірка 20, кв.19', 'Полтава', '60061', 34, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers_systems`
--

DROP TABLE IF EXISTS `subscribers_systems`;
CREATE TABLE IF NOT EXISTS `subscribers_systems` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subscriber_id` int(11) NOT NULL,
  `system_id` int(11) NOT NULL,
  `system_state` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscribers_systems_subscriber_id_foreign` (`subscriber_id`),
  KEY `subscribers_systems_system_id_foreign` (`system_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers_systems`
--

INSERT INTO `subscribers_systems` (`id`, `subscriber_id`, `system_id`, `system_state`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL),
(2, 1, 2, 0, NULL, NULL),
(3, 1, 7, 1, NULL, NULL),
(4, 1, 8, 0, NULL, NULL),
(5, 2, 2, 1, NULL, NULL),
(6, 2, 3, 1, NULL, NULL),
(7, 2, 4, 0, NULL, NULL),
(8, 2, 5, 1, NULL, NULL),
(9, 2, 7, 1, NULL, NULL),
(10, 2, 8, 1, NULL, NULL),
(11, 2, 9, 0, NULL, NULL),
(12, 3, 5, 1, NULL, NULL),
(13, 3, 6, 1, NULL, NULL),
(14, 3, 9, 1, NULL, NULL),
(15, 4, 2, 1, NULL, NULL),
(16, 3, 1, 1, NULL, NULL),
(17, 4, 5, 1, NULL, NULL),
(18, 4, 8, 1, NULL, NULL),
(19, 4, 9, 1, NULL, NULL),
(20, 5, 2, 1, NULL, NULL),
(21, 5, 3, 1, NULL, NULL),
(22, 5, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

DROP TABLE IF EXISTS `systems`;
CREATE TABLE IF NOT EXISTS `systems` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `system_type` int(11) NOT NULL,
  `system_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system_capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`id`, `system_type`, `system_code`, `system_capacity`, `created_at`, `updated_at`) VALUES
(1, 1, 'SP1', '100', NULL, NULL),
(2, 1, 'SP2', '150', NULL, NULL),
(3, 1, 'PS1', '300', NULL, NULL),
(4, 1, 'PS2', '500', NULL, NULL),
(5, 1, 'S1P', '900', NULL, NULL),
(6, 2, 'WT1', '50', NULL, NULL),
(7, 2, 'WT2', '70', NULL, NULL),
(8, 2, 'TW1', '200', NULL, NULL),
(9, 2, 'W1T', '450', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `subscriber`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Bennett', 'subscriber1@orchestra.com', NULL, '$2y$10$tsHtDCdODSUXo7mZ49NOD.LOyyeZ43vcHrdVzmds3yxQOPFP1WXvm', 1, NULL, NULL, NULL),
(2, 'Marco', 'Deluca', 'subscriber2@orchestra.com', NULL, '$2y$10$6XSXp5D6dr4ACwctHFX0i.7AOik5NvEyRIzfBNreXz5/8P.NA0W5.', 1, NULL, NULL, NULL),
(3, 'Rob', 'Haaf', 'subscriber3@orchestra.com', NULL, '$2y$10$yMdCsB/c1G6ovzoVG8k1je1KBH8wPWLldEqPWkKTn.tctt3PCIYgi', 1, NULL, NULL, NULL),
(4, 'Іван', 'Сірко', 'subscriber4@orchestra.com', NULL, '$2y$10$udo8JIjGSw9sRMe4nUEkn.s1qwY3LzsdekNBVsa8htzMCtgyG16eq', 1, NULL, NULL, NULL),
(5, 'Богдан', 'Хмельницький', 'subscriber5@orchestra.com', NULL, '$2y$10$nbN/wzfPlfDUIOzemacpkego7T8yruf.EVmGBpzgTQ0NgNexNV//.', 1, NULL, NULL, NULL),
(6, 'Joe', 'Kormendi', 'user1@orchestra.com', NULL, '$2y$10$etcrcuByj3OIwpJt7XDj2erc7bqfZRPrUsRfz8ldyUKqF2UduFK5q', NULL, NULL, NULL, NULL),
(7, 'Deep', 'Panchal', 'user2@orchestra.com', NULL, '$2y$10$Iiw6ZD6gBR24VXY.51RYoudBLHBdYbXs6ZHq/kc/j1dF634.cBdJa', NULL, NULL, NULL, NULL),
(8, 'Danielle', 'Butters', 'user3@orchestra.com', NULL, '$2y$10$/m66uCyXpqFay/Vo/M65WOBbzXs7qpl1bx0Oh1b2RIcXRY4PYu.XG', NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
