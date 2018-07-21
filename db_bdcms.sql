-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2018 at 05:26 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bdcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `carnames`
--

DROP TABLE IF EXISTS `carnames`;
CREATE TABLE IF NOT EXISTS `carnames` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carnames`
--

INSERT INTO `carnames` (`id`, `car_name`) VALUES
(1, 'BUS'),
(2, 'Track'),
(3, 'MiniBus'),
(4, 'Motorbike');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `carname_id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `car_status` int(11) NOT NULL DEFAULT '0',
  `car_reg_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_wheel` int(11) NOT NULL,
  `car_engine_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_chasis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_metro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_reg_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_insurence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_road_permit_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_document_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carname_id`, `driver_id`, `owner_id`, `car_status`, `car_reg_num`, `car_wheel`, `car_engine_num`, `car_chasis`, `car_color`, `car_metro`, `car_reg_date`, `car_insurence`, `car_road_permit_no`, `car_pic`, `car_document_pdf`, `created_at`, `updated_at`) VALUES
(1, 3, 32, 31, 1, 'Khulna MA 37-5139', 6, 'asdfasdf234234', 'fa34543afa', 'Yellow', 'Kushtia', '2018-06-13', 'sadffasd234asdf', 'All over Bangladesh', 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', 'http://localhost/BDCMS/public/Frontend/images/document/qnuhe8G43of0vPToCXtFnzA2Fwkv0puvFOxNXn52.bin', '2018-07-16 07:11:35', '2018-07-16 07:11:35'),
(2, 1, 25, 11, 1, 'Kushtia LA 12-3445', 4, '345435345', '345345435435', 'Black', 'Khulna', '2018-07-01', '345345345', 'kjhkj', 'http://localhost/bdcms/Frontend/images/cars/TncSpw2cztxn84YPWQsRndPNeuOlht2PqiWDKq48.jpeg', 'http://localhost/bdcms/public/Frontend/images/document/TL95t32OaDbMChgMIMMLp6Noieq6ROhDB53gnOsi.pdf', '2018-07-17 06:35:06', '2018-07-17 06:35:06'),
(3, 2, 24, 9, 1, 'Dhaka MA 12-3445', 6, '345435435', '345345435435', 'Black', 'Khulna', '2018-07-01', '345ertert', 'kjhkj', 'http://localhost/bdcms/Frontend/images/cars/QyCk9i9oKfLrHB5JlIL0JR8SgBlRBXSMBxdGDFHk.jpeg', 'http://localhost/bdcms/public/Frontend/images/document/PuvLQjprplhY9ClQ1fp1bEY7ycyKvlxPDkJsIwkG.pdf', '2018-07-17 15:18:29', '2018-07-17 15:18:29'),
(4, 4, 23, 7, 1, 'Khulna MA 12-3445', 8, '4564543543', '345345435435', 'Yellow', 'Khulna', '2018-07-01', '345ertert', 'kjhkj', 'http://localhost/bdcms/Frontend/images/cars/KsVlGwG0IFGpev4EdM9gSQZIWyq9ATgF1IAKZT83.jpeg', 'http://localhost/bdcms/public/Frontend/images/document/Bt13kkujRwPh2zaaOAsiI8X7eCME2aO1gt1pq0iC.pdf', '2018-07-17 15:59:20', '2018-07-17 15:59:20'),
(7, 4, 18, 26, 1, 'Bagerhat HA 67-9078', 4, '789045th6', '66dfg235', 'Black', 'Khulna', '23-4-18', 'fg967j90h67', NULL, 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', 'sdfsdf', '2018-07-20 16:42:14', '2018-07-20 16:42:14'),
(8, 3, 19, 27, 1, 'Jessore ZA 67-9078', 4, 'dsfe45th6', '645fg235', 'Black', 'Khulna', '23-4-18', 'fg967j90h67', 'All over Bangladesh', 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', 'sdfsdf', '2018-07-20 16:49:11', '2018-07-20 16:49:11'),
(9, 2, 20, 28, 1, 'Sylhet MA 67-9078', 4, '789045th6', '66dfg235', 'Black', 'Khulna', '23-4-18', 'fg967j90h67', 'All over Bangladesh', 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', 'sdfsdf', '2018-07-20 16:49:11', '2018-07-20 16:49:11'),
(10, 4, 21, 29, 1, 'Kaliganj HA 67-9078', 4, '789045th6', '66dfg235', 'White', 'Khulna', '23-4-18', 'fg967j90h67', 'Bangladesh', 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', 'sdfsdf', '2018-07-20 16:49:11', '2018-07-20 16:49:11'),
(11, 2, 22, 30, 1, 'Barguna MA 67-9078', 8, 'dsfe45th6', '645fg235', 'Green', 'Khulna', '23-4-18', 'fg967j90h67', 'All over Bangladesh', 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', 'sdfsdf', '2018-07-20 16:49:11', '2018-07-20 16:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `car_status`
--

DROP TABLE IF EXISTS `car_status`;
CREATE TABLE IF NOT EXISTS `car_status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `strat_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `case_type_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `complainant_id` int(11) NOT NULL,
  `complainant_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_desc` text COLLATE utf8mb4_unicode_ci,
  `black_list` int(11) DEFAULT NULL,
  `withdraw_id` int(11) DEFAULT NULL,
  `withdraw_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_type_id`, `car_id`, `driver_id`, `owner_id`, `complainant_id`, `complainant_date`, `case_desc`, `black_list`, `withdraw_id`, `withdraw_date`, `case_area`, `case_status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 6, 1, 5, '19 07 18', 'dfvdv', 1, NULL, NULL, 'Dhaka', 1, NULL, NULL),
(2, 2, 2, 3, 2, 5, '19-Jul-2018', 'dfvdv', 1, NULL, NULL, 'Dhaka', 1, NULL, NULL),
(3, 1, 2, 6, 3, 5, '19-Jul-2018', 'fhfg', 1, NULL, NULL, 'Dhaka', 1, NULL, NULL),
(4, 2, 2, 6, 5, 5, '19-Jul-2018', 'xvcxv', 1, NULL, NULL, 'Dhaka', 1, NULL, NULL),
(5, 1, 2, 4, 4, 5, '19-Jul-2018', 'sdfdsf', 1, NULL, NULL, 'Dhaka', 1, NULL, NULL),
(6, 1, 2, 6, 2, 5, '19-Jul-2018', 'dfgdfg dfg dfg dfg dfg df', 1, NULL, NULL, 'Kushtia', 1, NULL, NULL),
(7, 1, 2, 6, 7, 6, '20-Jul-2018', 'dfgsdf fsd f sdf', 1, NULL, NULL, 'Khulna', 1, NULL, NULL),
(8, 2, 2, 6, 7, 6, '20-Jul-2018', 'sdfsdf', 1, NULL, NULL, 'Kushtia', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

DROP TABLE IF EXISTS `case_types`;
CREATE TABLE IF NOT EXISTS `case_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `case_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_fine` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_types`
--

INSERT INTO `case_types` (`id`, `case_name`, `case_fine`) VALUES
(1, 'Insurance Expiring', 200.00),
(2, 'Helmet Missing', 100.00),
(3, 'Road Permit Missing', 200.00),
(4, 'Over Speed Drive', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_exp`
--

DROP TABLE IF EXISTS `driver_exp`;
CREATE TABLE IF NOT EXISTS `driver_exp` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `strat_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_04_051319_create_cars_table', 1),
(4, '2018_07_04_051517_create_office_addresses_table', 1),
(5, '2018_07_04_051535_create_contacts_table', 1),
(6, '2018_07_04_051549_create_sliders_table', 1),
(7, '2018_07_04_051603_create_logos_table', 1),
(8, '2018_07_04_051616_create_notices_table', 1),
(9, '2018_07_04_051628_create_roles_table', 1),
(10, '2018_07_04_051647_create_carnames_table', 1),
(11, '2018_07_04_051711_create_case_types_table', 1),
(12, '2018_07_04_051726_create_cases_table', 1),
(13, '2018_07_05_131035_create_driver_exp_table', 1),
(14, '2018_07_05_131458_create_car_status_table', 1),
(15, '2018_07_15_080521_create_tbl_car_reg_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `not_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_addresses`
--

DROP TABLE IF EXISTS `office_addresses`;
CREATE TABLE IF NOT EXISTS `office_addresses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `off_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_upazilla` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_desc`) VALUES
(1, 'SupperAdmin', 'SupperAdmin Inforamtions'),
(2, 'Owner', 'Owner Informations'),
(3, 'Driver', 'Driver Informations'),
(4, 'Zilla Admin', 'Zilla admin informations'),
(5, 'Upzilla Admin', 'Upzilla admin informations'),
(6, 'Surgent', 'Surgent Information');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_reg`
--

DROP TABLE IF EXISTS `tbl_car_reg`;
CREATE TABLE IF NOT EXISTS `tbl_car_reg` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_car_reg`
--

INSERT INTO `tbl_car_reg` (`id`, `district`, `keyword`) VALUES
(1, 'Khulna', 'MA'),
(2, 'Kushtia', 'LA'),
(3, 'Khulna', 'GHA'),
(4, 'Dhaka', 'MA'),
(5, 'Bagerhat', 'HA'),
(6, 'Jessore', 'ZA'),
(7, 'Bagura', 'HA'),
(8, 'Barguna', 'MA'),
(9, 'Kaliganj', 'HA'),
(10, 'Sylhet', 'MA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `driver_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pub_status` int(11) DEFAULT NULL,
  `user_passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_lisence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_posting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_identidy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_email_unique` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_fname`, `user_profile_pic`, `user_email`, `car_id`, `role_id`, `driver_id`, `user_password`, `user_mobile`, `user_address`, `user_birthday`, `user_gender`, `pub_status`, `user_passport`, `user_lisence`, `user_nid`, `user_posting`, `user_identidy`, `user_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Md.Shariful Islam Owner', 'Atiyer', 'http://localhost/BDCMS/public/Frontend/images/owner/H2yeUZ9iBEnLhpTKIeOq0bcn8GjgfuS5A2Si5Ec8.jpeg', 'shariful.info56@gmail.com', NULL, 2, '4', 'e10adc3949ba59abbe56e057f20f883e', '01955646464', '15/1 , Nirala , Khulna, Bangladesh', '1992-07-11', 'male', 1, '345345fe', '45643578', '135163813514', 'Khulna', NULL, NULL, 'V30gj8V1PQqOtg1oqQDaPRY2P', '2018-07-16 07:11:36', '2018-07-16 07:11:36'),
(6, 'MD.NAZMUL HOSSAIN Z-Admin', 'Ab.Salam Molla', 'http://localhost/bdcms/public/Frontend/images/owner/mqoDsB16RPXpEiCOw9Q9x5KHGI3iMUSUWO0OzCsK.jpeg', 'csenazmul96@gmail.com', NULL, 1, NULL, 'e10adc3949ba59abbe56e057f20f883e', '01931039338', 'sldfkjs', '2018-07-18', 'male', 1, NULL, 'sdfsdfds45345', '12234354354534', 'Khulna', NULL, NULL, 'OAWZytzExCLvvXm5nkNLvL3m5', '2018-07-17 06:35:06', '2018-07-17 06:35:06'),
(7, 'Md.Razzak Molla owner', 'Alauddin Molla', 'http://localhost/bdcms/public/Frontend/images/driver/M75r699RERd1mxc8S8usQBXJyiqZyO99jASYzTmw.jpeg', 'razzak@gmail.com', '4', 2, '6', 'e10adc3949ba59abbe56e057f20f883e', '01913333333', 'sldfkjs', '2018-07-01', 'male', 1, 'dfg35435', '345435fdg', '86897897987', 'Khulna', NULL, NULL, '5eqiwUijnVZlnQhMVTdLEbVwS', '2018-07-17 15:17:10', '2018-07-17 15:17:10'),
(9, 'Musa owner', 'Mohom', 'http://localhost/bdcms/public/Frontend/images/driver/PR3XU1hsjINcFULQYeZ2cMUF6jpGHtV3hM8oIxMH.jpeg', 'musa@gmail.com', '3', 2, '8', 'e10adc3949ba59abbe56e057f20f883e', '01912222222', 'sldfkjs', '2018-07-02', 'female', 1, 'dfg35435', '345435fdg', '345435435435', NULL, NULL, NULL, 'Cdc3tG28FQVEIEfpIM8oYqvkh', '2018-07-17 15:58:28', '2018-07-17 15:58:28'),
(11, 'Md.Salam Vhaidi Owner', 'Mama', 'http://localhost/bdcms/public/Frontend/images/owner/oZv34b7XUk76TYt4CX8SxjoIYtNbMo1aOtMhBAEh.jpeg', 'salam@gmail.com', '2', 2, '10', 'e10adc3949ba59abbe56e057f20f883e', '897987987', 'sldfkjs', '2018-07-01', 'female', 1, 'dfg35435', '345435fdg', '987987987', 'Khulna', NULL, NULL, 'XdnzsgzJlvYLPPHhXXCIxtes5', '2018-07-17 16:47:21', '2018-07-17 16:47:21'),
(16, 'Raton', 'Molla', NULL, 'raton@gmail.com', NULL, 2, NULL, 'e10adc3949ba59abbe56e057f20f883e', '345435', '<span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#3333ff\"><u style=\"\"><b style=\"\">sldkfjsdlkfksdf j</b></u><span style=\"font-weight: normal; white-space: pre;\">	</span></font></span>', NULL, '2', 1, NULL, NULL, NULL, 'Khulna', NULL, NULL, NULL, '2018-07-18 10:59:41', '2018-07-18 10:59:41'),
(18, 'Md.Rasel', 'Miraz Sheikh', NULL, 'rasel@gmail.com', '7', 2, NULL, 'e10adc3949ba59abbe56e057f20f883e', '987654321', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:27:17', '2018-07-20 16:27:17'),
(19, 'Md.Mohashin', 'Enamul Molla', NULL, 'mohashin@gmail.com', '8', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '0987654321', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:28:02', '2018-07-20 16:28:02'),
(20, 'Md.Habib Molla', 'Mohom Sheikh', NULL, 'habib@gmail.com', '9', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:30:42', '2018-07-20 16:30:42'),
(21, 'Mobin Molla', 'Toyebali', NULL, 'mobin@gmail.com', '10', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456789', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:30:42', '2018-07-20 16:30:42'),
(22, 'Md.Miraz ', 'Sulton Molla', NULL, 'miraz@gmail.com', '11', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '12345678', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:30:42', '2018-07-20 16:30:42'),
(23, 'Miss Sharmin', 'Mohom Kazi', NULL, 'sarmin@gmail.com', '23', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '1234567', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:32:57', '2018-07-20 16:32:57'),
(24, 'Jesmin Sultana', 'Enamul Hque', NULL, 'jasmin@gmail.com', '3', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:32:57', '2018-07-20 16:32:57'),
(25, 'Milan Shiekh ', 'Ruhul amin', NULL, 'milan@gmail.com', '2', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '12345', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:32:57', '2018-07-20 16:32:57'),
(26, 'Imran Molla', 'Siraz Molla', NULL, 'imran@gmail.com', '7', 2, NULL, 'e10adc3949ba59abbe56e057f20f883e', '12345', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:35:29', '2018-07-20 16:35:29'),
(27, 'Tamanna Sultana', 'shawkat', NULL, 'tamanna@gmail.com', '8', 2, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', 'sdfsdf', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:35:29', '2018-07-20 16:35:29'),
(31, 'Anis Shiekh ', 'Ruhul amin', NULL, 'anis@gmail.com', '1', 2, NULL, 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:35:29', '2018-07-20 16:35:29'),
(32, 'Rahomot', 'ali sheikh', NULL, 'rahomot@gmail.com', '1', 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '5667345', 'sdf dsaf sdf  trgf hfg hfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:57:29', '2018-07-20 16:57:29'),
(33, 'LItan sheikh', 'Akbor sheikh', NULL, 'litan@gmail.com', NULL, 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '87905643', 'sdf dsaf sdf  trgf hfg hfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:58:43', '2018-07-20 16:58:43'),
(34, 'Mizan Ali', 'Mirajul sheikh', NULL, 'mizan@gmail.com', NULL, 3, NULL, 'e10adc3949ba59abbe56e057f20f883e', '345644', 'sdf dsaf sdf  trgf hfg hfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-20 16:58:43', '2018-07-20 16:58:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
