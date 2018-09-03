-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 03, 2018 at 01:28 PM
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
-- Table structure for table `bdc_chat`
--

DROP TABLE IF EXISTS `bdc_chat`;
CREATE TABLE IF NOT EXISTS `bdc_chat` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bdc_drivers`
--

DROP TABLE IF EXISTS `bdc_drivers`;
CREATE TABLE IF NOT EXISTS `bdc_drivers` (
  `dri_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dri_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dri_mobile` int(191) NOT NULL,
  `dri_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_role` int(255) NOT NULL DEFAULT '3',
  `dri_profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_working_are` int(128) DEFAULT NULL,
  `dri_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dri_car_id` int(11) DEFAULT NULL,
  `dri_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_status` int(11) NOT NULL DEFAULT '0',
  `dri_passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dri_lisence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dri_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dri_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_drivers`
--

INSERT INTO `bdc_drivers` (`dri_id`, `dri_name`, `dri_fname`, `dri_email`, `dri_mobile`, `dri_password`, `dri_role`, `dri_profile_pic`, `dri_working_are`, `dri_document`, `dri_car_id`, `dri_address`, `dri_birthday`, `dri_gender`, `pub_status`, `dri_passport`, `dri_lisence`, `dri_nid`, `dri_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shariful Islam', 'Atiyer', 'driver@gmail.com', 98798798, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/public/Frontend/images/driver/MjSWdSgRMgmusduxxN9T0Kis9LN0BSdGC33cyF61.jpeg', 1, NULL, 1, 'sdfsdf', '2018-08-01', 'male', 1, '345435jk435', '1245678', '8798798788', 'Aug,10,2018', 'eyhSmFzSyH1tAzUisn9UrBAGY', NULL, NULL),
(2, 'Mirazul Islam', 'noorllahno', 'mizan@gmail.com', 1932897654, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/public/Frontend/images/driver/5FxpyUBWHInrLWt7OyFWskCEmjtVztCMrIay1oRe.jpeg', 2, NULL, 3, 'Set 3', '2018-08-01', 'male', 1, '123456', '1245678', '2345234234', 'Aug,28,2018', 'WVuPVKUSh86gMdUerfNKQ7L4B', NULL, NULL),
(3, 'Yashin', 'hasan', 'yashin@gmail.com', 1921039485, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/public/Frontend/images/driver/fdE4DbqGh0AXGzVULDP2AYSf0Ckl4Yd8a7uXdoee.jpeg', 3, NULL, 3, 'mokampur', '2018-08-08', 'male', 1, '123456', '1245678', '9879797', 'Aug,28,2018', 'xoYWTTuwvN3eyYhrCLCmS1SXG', NULL, NULL),
(4, 'topchoose', 'topchoose', 'nadiar@gmail.com', 4535435, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/UyIACYlqYj3xxteZHLdykTanYkLd27Qu1uCR0Ls1.png', 3, NULL, 5, '#4594', '2018-08-22', 'male', 1, '123456', '1245678', '456546', 'Aug,30,2018', 'bMd6Q30cm1wPWH6fQVWoc9OQC', NULL, NULL),
(5, 'noorllahno', 'noorllahno', 'tomalmymen@gmail.com', 346345, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/wFp7vfFGdCf6jMarrN448seHd8QmgfxGnKzknsWJ.png', 1, NULL, 6, 'Set 3', '2018-09-01', 'male', 1, 'dfgfdg', '345435fdg', '345435', 'Sep,01,2018', 'cnbMuezYGjdE4Tk6nBhS0TUsH', NULL, NULL),
(6, 'karim', 'zamal', 'karim@gmail.com', 1922897654, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/XFZNnUsHeCWEDAXRmW2uilKMDwTrxsJWnCZCd14J.jpeg', NULL, NULL, 7, 'mokampur', '2018-09-06', 'male', 0, 'dfg35435', '1245678', '89686876', 'Sep,01,2018', 'DcoWt2Ceu6jNQ2oY4ePZMK0uR', NULL, NULL),
(7, 'Nozrul', 'Molla', 'nozrul@gmail.com', 89788, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/CR01XuyOc3eaFUbnXO41P9f7f1yWWSh1QCM2k4GB.jpeg', 2, NULL, 9, 'mokampur', '2018-09-15', 'male', 0, 'dfg35435', '345435fdg', '987987', 'Sep,02,2018', 'SGSstAomVstERm07ikH00NUkl', NULL, NULL),
(8, 'Bokker', 'Bokker', 'tomalmymen34@gmail.com', 345345345, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/rVrQVIXCS8jL7JZ8dt0t7cuEp7KPQv7vFgeCraU0.png', 1, NULL, NULL, 'mokampur', '2018-08-31', 'male', 0, 'dfg35435', '345435fdg', '345345345', 'Sep,02,2018', 'QY7bs7ifgcGMcuAtgAD3cX57J', NULL, NULL),
(9, 'Zillal', 'Molla', 'zillal@gmail.com', 21, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/1cYM723rFuTDvt38YPUHsZPGGuMcERUXJPguz39A.jpeg', 7, NULL, NULL, 'mokampur', '2018-08-31', 'male', 0, '123456', '1245678', '567546546', 'Sep,02,2018', 'z3jwWLfnDAMdw9aLEZoHtw4ls', NULL, NULL),
(10, 'Sharmin', 'molla', 'sharmin@gmail.com', 233, 'e10adc3949ba59abbe56e057f20f883e', 3, 'http://localhost/BDCMS/Frontend/images/driver/tdXFZJrEEWesxfHOQsQS90SlaLbe5dYavFN3HgLa.jpeg', 1, 'http://localhost/BDCMS/Frontend/images/driver/9CrOv5N8S3mZNijhxTUjVBrBd4XwLwKkqGX8tuRb.jpeg', 8, 'sdfsdf', '2018-09-07', 'male', 0, '89798789', '34234', '23', '02-Sep-18', 'nAL5VFsAI56Le17n7fPvDn8rw', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_insurences`
--

DROP TABLE IF EXISTS `bdc_insurences`;
CREATE TABLE IF NOT EXISTS `bdc_insurences` (
  `ins_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ins_carid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_exp_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_insurences`
--

INSERT INTO `bdc_insurences` (`ins_id`, `ins_carid`, `ins_exp_date`, `ins_company`, `created_at`, `updated_at`) VALUES
(1, 'Khulna GHA 76-7678', '07-09-2018', NULL, NULL, NULL),
(2, 'Khulna GHA 78-6545', '02-08-2018', NULL, NULL, NULL),
(3, 'Dhaka GHA 12-4354', '05-09-2018', NULL, NULL, NULL),
(4, 'Satkhira HA 76-7678', '03-09-2018', NULL, NULL, NULL),
(5, 'Khulna GHA 76-7687', '23-09-2018', NULL, NULL, NULL),
(6, 'Khulna HA 76-7678', '12-10-2018', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_keywords`
--

DROP TABLE IF EXISTS `bdc_keywords`;
CREATE TABLE IF NOT EXISTS `bdc_keywords` (
  `key_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`key_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_keywords`
--

INSERT INTO `bdc_keywords` (`key_id`, `key_name`, `key_desc`, `created_at`, `updated_at`) VALUES
(1, 'GHA', NULL, NULL, NULL),
(2, 'HA', NULL, NULL, NULL),
(3, 'ZA', NULL, NULL, NULL),
(4, 'MA', NULL, NULL, NULL),
(5, 'CHA', NULL, NULL, NULL),
(6, 'CA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_metros`
--

DROP TABLE IF EXISTS `bdc_metros`;
CREATE TABLE IF NOT EXISTS `bdc_metros` (
  `metro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `metro_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metro_desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`metro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_metros`
--

INSERT INTO `bdc_metros` (`metro_id`, `metro_name`, `metro_desc`, `created_at`, `updated_at`) VALUES
(1, 'Khulna', NULL, NULL, NULL),
(2, 'Dhaka', NULL, NULL, NULL),
(3, 'Bagerhat', NULL, NULL, NULL),
(4, 'Jessore', NULL, NULL, NULL),
(5, 'Fakirhat', NULL, NULL, NULL),
(6, 'Satkhira', NULL, NULL, NULL),
(7, 'Sariwat Pur', NULL, NULL, NULL),
(8, 'Kustia', NULL, NULL, NULL),
(11, 'Gazipur', 'Gazipur Metro', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_notices`
--

DROP TABLE IF EXISTS `bdc_notices`;
CREATE TABLE IF NOT EXISTS `bdc_notices` (
  `not_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `not_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_role` int(11) NOT NULL,
  `not_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_cretor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_notices`
--

INSERT INTO `bdc_notices` (`not_id`, `not_name`, `not_desc`, `not_role`, `not_date`, `not_cretor`, `created_at`, `updated_at`) VALUES
(1, 'Many desktop publishing packages and web page editors now use', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 4, '3/6/90', 2, NULL, NULL),
(2, 'Many desktop publishing packages and web page editors now use', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 4, '1/2/94', 1, NULL, NULL),
(3, 'sdfsd', 'sdfsdf', 1, 'Sep-Sat-2018', 1, NULL, NULL),
(4, 'dsdfdsf', 'sdfsdfsd', 1, 'Sep-Sat-2018', 1, NULL, NULL),
(5, 'Many desktop publishing packages and web page editors now use', '<div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></font></div>', 1, 'Sep-Sat-2018', 1, NULL, NULL),
(6, 'Many desktop publishing packages', 'zilla_notice_submit&nbsp;zilla_notice_submit&nbsp;zilla_notice_submit', 4, '02-Sep-2018', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_owners`
--

DROP TABLE IF EXISTS `bdc_owners`;
CREATE TABLE IF NOT EXISTS `bdc_owners` (
  `won_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `won_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_role` int(11) NOT NULL DEFAULT '2',
  `won_profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `won_car_id` int(11) DEFAULT NULL,
  `won_driver_id` int(11) DEFAULT NULL,
  `won_city` int(128) DEFAULT NULL,
  `won_mobile` int(11) NOT NULL,
  `won_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `won_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_status` int(11) NOT NULL DEFAULT '0',
  `won_passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `won_lisence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `won_nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`won_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_owners`
--

INSERT INTO `bdc_owners` (`won_id`, `won_name`, `won_fname`, `won_email`, `won_password`, `won_role`, `won_profile_pic`, `won_car_id`, `won_driver_id`, `won_city`, `won_mobile`, `won_address`, `won_birthday`, `won_gender`, `pub_status`, `won_passport`, `won_lisence`, `won_nid`, `won_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Owner', 'owner father', 'owner@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/public/Frontend/images/driver/MjSWdSgRMgmusduxxN9T0Kis9LN0BSdGC33cyF61.jpeg', NULL, NULL, 1, 1912546789, 'Mokampur terokhada khulna', '02/07/1994', '1', 1, NULL, NULL, '1234567890', '1/2/1994', '', NULL, NULL),
(2, 'Bokker', 'Bokker', 'bokker@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/public/Frontend/images/owner/ouOBnqddpamLuxR2spNUj4NGxWLOJztyTJwStd45.jpeg', 1, 2, 2, 234234, 'mokampur', '2018-08-01', 'male', 0, '123456', '345435fdg', '234234', NULL, 'WZlGXYV0SAHQwbo5AIO3BbbIW', NULL, NULL),
(3, 'Rijawul', 'Ruhul', 'rijawul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/public/Frontend/images/owner/mky0sqDjZDUAxoXhH6WmKipuAsNb8TlROzY9RyCI.jpeg', 2, 3, 3, 1932453454, 'mokampur', '2018-08-02', 'male', 1, 'dfg35435', '345435fdg', '98798798', NULL, 'w7SST7T2k7MIoiZvrEzni8VwT', NULL, NULL),
(4, 'Bokker', 'Bokker', 'csenazmul96@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/public/Frontend/images/owner/kgC7PLV11C5IihGbsIVrWtinTPCCjbwCADArruzf.jpeg', NULL, 3, 1, 657657567, 'mokampur', '2018-08-02', 'male', 1, '123456', '1245678', '456546', NULL, 'dzHApMyEOnInxbnmArZVBS0ci', NULL, NULL),
(5, 'Bokker', 'Bokker', 'csenazmul96@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/public/Frontend/images/owner/Zeezsu7u55tcyuwNPe4QajF8xmvvT6hi8ZXV0o8E.jpeg', 3, 3, 2, 657657567, 'mokampur', '2018-08-02', 'male', 1, '123456', '1245678', '456546', NULL, 'A7qyHU2mtQkhlSvWklEOwVMrG', NULL, NULL),
(6, 'Nazmul Hossain', 'Salam Molla', 'nadia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/DcGHsZd5rSXX1UyVEHJJyXgWeR15YFHbVmv2sLG5.jpeg', NULL, 2, 3, 345345, 'lkdsfsdlf', '2018-08-10', 'male', 1, 'dfg35435', '345435fdg', '9879879879', NULL, 'm5L3ho2RaZq9tZDhkvifPcs8m', NULL, NULL),
(7, 'Nazmul Hossain', 'Salam Molla', 'nadia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/Y04yOCITaLMq1MUa7LMoJkO1j5BnlxfPiyVvih1J.png', 5, 2, 2, 345345, 'lkdsfsdlf', '2018-08-10', 'male', 0, 'dfg35435', '345435fdg', '9879879879', NULL, 'Zay7XaS7gouReHzPvnG8R2XDw', NULL, NULL),
(8, 'Bokker', 'Bokker', 'bakker@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/4B7uo0fn9IVzR53REtAPhVdswkearCFkFb6T7afj.png', 6, 4, 4, 345435, 'mokampur', '2018-09-01', 'male', 0, '123456', '345435fdg', '345345', NULL, 'HSlJfikrJ6J8AsIDZrbHMn3tx', NULL, NULL),
(9, 'noorllahno', 'noorllahno', 'csen55azmul96@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/0viDppMQuBKHIrXfezou2Gj4XbDespQV4snaBBD0.png', 4, 5, 5, 4356435, 'Set 3', '2018-09-11', 'male', 0, 'dfg35435', '345435fdg', '234324324', NULL, '9HB9gVScOGXfePtUYoQeoZF4i', NULL, NULL),
(10, 'noorllahno', 'noorllahno', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/PKOyjXCzmEVX0q7pihDFu8bShpmStu1nXlIMSkP3.png', 7, 6, 3, 234234234, 'Set 3', '2018-09-12', 'male', 0, '123456', '34234', '324234', NULL, 'SBe2FRs7NiZ1hSKWO9gaM6RFr', NULL, NULL),
(11, 'Billal', 'Abul', 'billal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/rMC0kgTP2w80rbtdhbgDU5NTyxWVKHe530b5cjVG.png', 8, 10, NULL, 7987, 'sdfsdf', '2018-09-07', 'male', 0, '123456', '34234', '98798798', NULL, 'ILPzeyaQZT6JDrTYpBm8f11aI', NULL, NULL),
(12, 'Ziya', 'Gazi', 'zilela@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/o4pvSmSSd2UpxTWQFoxq30W2XFZWm8uAoYaj2aZF.jpeg', NULL, 7, 2, 123234, NULL, '2018-09-06', 'male', 0, '12345632', '345435fdgsde', '234324', NULL, 'zI6lQlxZ3eSjMADOBNumnYm38', NULL, NULL),
(13, 'Ziya', 'Gazi', 'zilela@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'http://localhost/BDCMS/Frontend/images/owner/AdlGC10OGLfvx7WZzxYck5bKPzMn3jhSjgpcHixw.jpeg', 9, 7, 2, 123234, NULL, '2018-09-06', 'male', 0, '12345632', '345435fdgsde', '234324', NULL, 'LCIVAjhYSMLZZGke9eb4OrzcT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_sergeants`
--

DROP TABLE IF EXISTS `bdc_sergeants`;
CREATE TABLE IF NOT EXISTS `bdc_sergeants` (
  `ser_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ser_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_role` int(11) NOT NULL DEFAULT '6',
  `ser_mobile` int(11) NOT NULL,
  `ser_profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ser_identity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ser_working_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_status` int(11) NOT NULL DEFAULT '1',
  `ser_nid` int(11) NOT NULL,
  `ser_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_sergeants`
--

INSERT INTO `bdc_sergeants` (`ser_id`, `ser_name`, `ser_email`, `ser_password`, `ser_role`, `ser_mobile`, `ser_profile_pic`, `ser_identity`, `ser_working_area`, `ser_address`, `ser_birthday`, `ser_gender`, `pub_status`, `ser_nid`, `ser_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Police Sergeant', 'sergeant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6, 1931049586, 'sldkfj', 'Serveant', '3', 'ewrfdsf', '2/3/4', '1', 1, 234324, '4/5/6', '', NULL, NULL),
(2, 'mehadi', 'csenazmul96@gmail.com', '97c53d864f55f98458718c015c45e95e', 6, 23423, NULL, '345435', '3', 'efdsf', '5/9/78', '1', 1, 345345, 'Aug/Thu/2018', '3208d242b8777f401d49c66e364005b9', NULL, NULL),
(3, 'mehadi', 'csenazfgmul96@gmail.com5', 'ac9a69e5998f0de45ee29a2ca4f2642c', 6, 34234324, NULL, NULL, '1', 'dfg', '5/9/78', '1', 1, 345345, 'Sep/Sat/2018', '66f212b05b4d5d8d8a420bc161f4a9d5', NULL, NULL),
(4, 'Raton', 'csenazfgmuldfg96@gmail.com', '7645cee77cccfcab89b84a35f0dac0cb', 6, 345, NULL, NULL, '4', 'dsfsdf', '5/9/78', '1', 1, 345345, 'Sep/Sat/2018', '838fb5330290a0eadbcb153842fe8c65', NULL, NULL),
(5, 'Miraz', 'miraz@gmail.com', 'e10bc8e4370fc0c79bf20d1baccf164a', 6, 86876, NULL, '987987', '1', 'sdfsdf', '5/9/78', '1', 1, 98798798, 'Sep/Sat/2018', '6179b1b20af18dac8e2f5ddea9c57fd0', NULL, NULL),
(6, 'Mamun', 'sdkfjl@gmail.com', '4b534cf34b559fe035d29311c264686a', 6, 345435, NULL, '3454357878', '1', 'dsfdsf', '5/9/78', '1', 1, 345435435, 'Sep/Sat/2018', '1fc4b6add2938e1a56ce3ddd9007be72', NULL, NULL),
(7, 'mohashin', 'mohashin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6, 123213, NULL, '9879879', '3', 'sdfsdf', '05/09/78', '1', 1, 345435, 'Sep/Sun/2018', '5bea4bd48c9be718fa1d6ff4e2001ab1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_upazila_admin`
--

DROP TABLE IF EXISTS `bdc_upazila_admin`;
CREATE TABLE IF NOT EXISTS `bdc_upazila_admin` (
  `uzl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uzl_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzl_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uzl_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzl_rol` int(11) NOT NULL DEFAULT '5',
  `uzl_mobile` int(11) NOT NULL,
  `uzl_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzl_nid` int(11) NOT NULL,
  `uzl_working_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzl_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uzl_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzl_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzl_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_status` int(11) NOT NULL DEFAULT '1',
  `uzl_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uzl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_upazila_admin`
--

INSERT INTO `bdc_upazila_admin` (`uzl_id`, `uzl_name`, `uzl_email`, `uzl_password`, `uzl_rol`, `uzl_mobile`, `uzl_fname`, `uzl_nid`, `uzl_working_area`, `uzl_picture`, `uzl_address`, `uzl_birthday`, `uzl_gender`, `pub_status`, `uzl_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Upazila Admin', 'upazila@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5, 34423432, 'Admin', 98798798, '3', 'dslkfj', 'wervewrv wer', '2/5/67', '1', 1, '4/5/7', '', NULL, NULL),
(2, 'Shahajahan', 'csenazmul96@gmail.com', '48aa641462e5d1bfc7a01b1d3bf97b85', 5, 234234, 'noorllahno', 345345, '2', NULL, 'sdf', '5/9/78', '1', 1, 'Aug/Thu/2018', 'fddff9afba3dd3168638d803c8219f88', NULL, NULL),
(4, 'Khokon', 'csenafzmul96@gmail.com', '169ee23cb0b1028c815ac1f991224706', 5, 87989, 'molla', 89787678, '3', NULL, 'sdfsdf', '05/09/78', '1', 0, 'Sep/Sun/2018', 'f4d64c33dfc4f2ee7b2091798a5cf92d', NULL, NULL),
(3, 'Shahajahan', 'csenazfgmul96@gmail.com', 'e49a13299de9ff0a9e1f28e9e81a2401', 5, 34543, 'noorllahno', 345435, '1', NULL, '5sdfsdf', '5/9/78', '1', 0, 'Sep/Sat/2018', 'e9f57a7ea33c6e4774ac5cae5436a71b', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_users`
--

DROP TABLE IF EXISTS `bdc_users`;
CREATE TABLE IF NOT EXISTS `bdc_users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` int(11) NOT NULL,
  `user_picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_status` int(11) NOT NULL DEFAULT '0',
  `user_rol` int(11) NOT NULL,
  `user_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_users`
--

INSERT INTO `bdc_users` (`user_id`, `user_name`, `user_fname`, `user_nid`, `user_picture`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_birthday`, `user_gender`, `pub_status`, `user_rol`, `user_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Site Admin', 'admin', 9879, 'slkdfj', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6756, 'Khulna', '2/7/94', '1', 1, 1, '3/6/1994', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bdc_zilla_admins`
--

DROP TABLE IF EXISTS `bdc_zilla_admins`;
CREATE TABLE IF NOT EXISTS `bdc_zilla_admins` (
  `zil_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `zil_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zil_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zil_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zil_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zil_rol` int(11) NOT NULL DEFAULT '4',
  `zil_working_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zil_nid` int(11) DEFAULT NULL,
  `zil_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zil_mobile` int(11) NOT NULL,
  `zil_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zil_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zil_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_status` int(11) NOT NULL DEFAULT '1',
  `zil_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`zil_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdc_zilla_admins`
--

INSERT INTO `bdc_zilla_admins` (`zil_id`, `zil_name`, `zil_fname`, `zil_email`, `zil_password`, `zil_rol`, `zil_working_area`, `zil_nid`, `zil_picture`, `zil_mobile`, `zil_address`, `zil_birthday`, `zil_gender`, `pub_status`, `zil_joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zilla Admin', 'Admin', 'zilla@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 4, '1', 87987987, 'lsdjf', 324324, 'sdfsdfsd', '4/5/6', '1', 1, '3/4/5/', '', NULL, NULL),
(2, 'Shahajahan', 'Bokker', 'csenazfgmul96@gmail.com', '50ab87fc5d4918c32f635ed2d7d142dc', 4, '2', 34543, 'lsdjf', 45634, 'dfg', '5/9/78', '1', 1, 'Aug/Thu/2018', 'd14a7615412dc37330778d3182b3d00d', NULL, NULL),
(3, 'mehadi', 'Nazmul', 'csenazfgmul96@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 4, '3', 345345345, 'lsdjf', 234234, 'sdfsdf', '5/9/78', '1', 1, 'Aug/Thu/2018', '340e58b39ed9ae1f4fcb20c08caea669', NULL, NULL),
(4, 'mehadi', 'Nazmul', 'csenazfgmul96@gmail.com', 'fd67a92808392f0b64776dad73620d62', 4, '4', 345345345, 'lsdjf', 234234, 'sdfsdf', '5/9/78', '1', 1, 'Aug/Thu/2018', '5277f5b91e656bbd20db8fdc59c9930a', NULL, NULL),
(5, 'Raton', 'Bokker', 'csenazfgmul96@gmail.com', '0f169b704d08caa29b33ba6bb42012f8', 4, '1', 345345345, 'lsdjf', 324234, 'wer', '5/9/78', '1', 1, 'Aug/Thu/2018', 'fb0c078a9ad98c4a0210d91466f45b92', NULL, NULL),
(6, 'mehadi', 'Bokker', 'csenazdfmul96@gmail.com', '899bbf46b4c647985d02a5eab7ad906d', 4, '1', 345345, NULL, 43534, 'dsf', '5/9/78', '2', 0, 'Sep/Sat/2018', '1e7e43967172fecea05672b13ac18502', NULL, NULL),
(7, 'Rizawul', 'islam', 'zilla1@gmail.com', '6b0d1cc82963d4041c345fcb5d5d1790', 4, '3', 234324, NULL, 34234, 'sdfsdf', '05/09/78', '1', 0, 'Sep/Sun/2018', '7d40cb79070c8a68a92b82bcc57762c4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carnames`
--

DROP TABLE IF EXISTS `carnames`;
CREATE TABLE IF NOT EXISTS `carnames` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carnames`
--

INSERT INTO `carnames` (`id`, `car_name`) VALUES
(1, 'Bus'),
(2, 'Track');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `carname_id` int(11) NOT NULL,
  `car_wheel` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_chasis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_metro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_reg_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_reg_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_insurence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_road_permit_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_engine_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `car_document_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carname_id`, `car_wheel`, `car_chasis`, `car_metro`, `car_reg_num`, `car_reg_date`, `car_insurence`, `car_road_permit_no`, `car_engine_num`, `car_pic`, `driver_id`, `owner_id`, `car_document_pdf`, `car_color`, `car_status`, `created_at`, `updated_at`) VALUES
(1, 2, '3', 'fghf65456', '1', 'Khulna GHA 78-6545', '2018-08-07', 'sdfsd5435435', '34534dfgfdg', '4564543543', 'http://localhost/BDCMS/public/Frontend/images/cars/6pBHhEMOxVmNIRKL0QB1bi2kcd1xabr8bYEIMAAQ.png', 2, 2, 'http://localhost/BDCMS/Frontend/images/document/XksQp02MT9qkoSkK2x1L9qVSIWiDSSGqmvO38bIP.jpeg', 'Black', 1, NULL, NULL),
(2, 2, '4', 'fghf654561', '1', 'Khulna GHA 76-7678', '2018-08-02', 'sdfsd54354354', 'sdf', '45645435432', 'http://localhost/BDCMS/public/Frontend/images/cars/py7uMXfPncj8nnBlQXFhh6BCmbdHLnY95XCc3Qga.png', 3, 3, 'http://localhost/BDCMS/Frontend/images/document/eV5jJrNtBIKGDeMm4rkC7bHYr4M2xMrUscKdtjxr.jpeg', 'Black', 1, NULL, NULL),
(3, 1, '3', '345345435435', '3', 'Dhaka GHA 12-4354', '2018-08-03', '345ertert', 'kjhkj', 'sdfds645634', 'http://localhost/BDCMS/public/Frontend/images/cars/KzUysC6moxWMwmRv7yOvTNAesOFcNCjPsnzYzYvr.jpeg', 3, 5, 'http://localhost/BDCMS/Frontend/images/document/MhgTbajz0JAwl9tdYRfN7XKtxfFLWoo8AIoaVbFs.jpeg', 'Black', 1, NULL, NULL),
(6, 1, '4', '345345', '6', 'Satkhira HA 76-7678', '2018-09-01', '345ertert99', '34534dfgfdg', '4564543', 'http://localhost/BDCMS/Frontend/images/cars/9BHvgOA2WQmHqoBi240sxz116xkecOSaTYseBPne.png', 5, 9, 'http://localhost/BDCMS/Frontend/images/document/gxgzZUGc99P3KMta7r9jVZqe7z5tVcLK8bdzhr7D.pdf', 'Red', 1, NULL, NULL),
(4, 1, '3', 'fghf6545665', '2', 'Khulna GHA 76-7687', '2018-08-03', '345ertert3', '34534dfgfdg', '45645435', 'http://localhost/BDCMS/Frontend/images/cars/moaGnr5xUoW0nuQWLOcMANvKOSVhJaLJf2ul9VSb.jpeg', 2, 7, 'http://localhost/BDCMS/Frontend/images/document/O0UeMPaAmjYFZDrjJkoa8Rgq6Sag1MhZIANdCxDI.pdf', 'Black', 1, NULL, NULL),
(5, 1, '3', 'fghf654566', '1', 'Khulna HA 76-7678', '2018-09-05', '345ertert3e', '34534dfgfdg', '45645435434', 'http://localhost/BDCMS/Frontend/images/cars/brQSvDUCI58KE1D9CSFNs8KGdK9GjuWzcBrvrsoO.jpeg', 4, 8, 'http://localhost/BDCMS/Frontend/images/document/Gol4Ihjh89m2Z2w1mH8lZF5SaImz4aLhjUTfLzNJ.png', 'Black', 1, NULL, NULL),
(7, 2, '3', '3453454354355', '3', 'Khulna GHA 76-7679', '2018-09-01', 'sdfsd54354357', '34534dfgfdg', '45645435432sd', 'http://localhost/BDCMS/Frontend/images/cars/pX7YQqKvRtzZUM17LXOVaAbanrAf8GNj3TF5RjGo.jpeg', 6, 10, 'http://localhost/BDCMS/Frontend/images/document/0CtDl0dvYr2n2tXUweVCx9jPO9OGYL4QYKJN5MRk.png', 'Red', 0, NULL, NULL),
(8, 1, '3', 'fghf65456try', '1', 'Khulna GHA 12-4354', '2018-09-01', '46fdgfdg', 'fdgfdg435', '456454354312', 'http://localhost/BDCMS/Frontend/images/cars/cHiwehLeh3cPRgYoaaVTZXuSmA8E9wiKDGtUDogA.jpeg', 10, 11, 'http://localhost/BDCMS/Frontend/images/document/q7vMqnXgJw78C67Ms55VpIRQxdlHZeGnH2dB0n2E.jpeg', 'Yellow', 0, NULL, NULL),
(9, 2, 'up to 12', 'fghf6545612', '1', 'Khulna GHA 12-3456', '2018-09-05', '345ertert323', 'kjhkj', '45645435432122', 'http://localhost/BDCMS/Frontend/images/cars/onT0xoAlYfZG4vYNpKnia1SbbLqNSGnVD1SRG6eb.jpeg', 7, 13, 'http://localhost/BDCMS/Frontend/images/document/WC2IU2XtgLzBe8djn9oqi3EamqA2s3zW7BEpSjOg.jpeg', 'Black', 0, NULL, NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `withdraw_id` int(11) DEFAULT NULL,
  `withdraw_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `black_list` int(11) NOT NULL DEFAULT '0',
  `case_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_type_id`, `car_id`, `driver_id`, `owner_id`, `complainant_id`, `complainant_date`, `withdraw_id`, `withdraw_date`, `case_area`, `case_desc`, `black_list`, `case_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, 3, 1, '31-Aug-2018', NULL, NULL, '4', 'sdfsdfdsf', 1, 0, NULL, NULL),
(2, 1, 2, 3, 3, 2, '31-Aug-2018', NULL, NULL, '2', 'dfgsdf', 0, 1, NULL, NULL),
(3, 2, 3, 3, 5, 1, '31-Aug-2018', NULL, NULL, '2', 'dfg dfg dfg', 1, 1, NULL, NULL),
(4, 2, 5, 4, 8, 1, '01-Sep-2018', NULL, NULL, '1', 'sdfsdf sdf sdf', 1, 1, NULL, NULL),
(5, 2, 3, 3, 5, 7, '02-Sep-2018', NULL, NULL, '1', 'sdf sf sdf sdf', 1, 0, NULL, NULL),
(6, 2, 5, 4, 8, 1, '02-Sep-2018', NULL, NULL, '4', 'cvcxv', 1, 1, NULL, NULL),
(7, 1, 6, 5, 9, 1, '02-Sep-2018', NULL, NULL, '6', 'dfgfdgf', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

DROP TABLE IF EXISTS `case_types`;
CREATE TABLE IF NOT EXISTS `case_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `case_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_fine` double(8,2) NOT NULL,
  `case_desc` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_types`
--

INSERT INTO `case_types` (`id`, `case_name`, `case_fine`, `case_desc`) VALUES
(1, 'Helmet Missing', 100.00, 'Helmet MIssint'),
(2, 'License Missing ', 400.00, 'License Missing');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2018_08_10_081533_create_tbl_drivers', 3),
(21, '2018_08_10_111335_create_users_table', 5),
(100, '2014_10_12_000000_create_users_table', 6),
(101, '2014_10_12_100000_create_password_resets_table', 6),
(102, '2018_07_04_051319_create_cars_table', 6),
(103, '2018_07_04_051517_create_office_addresses_table', 6),
(104, '2018_07_04_051535_create_contacts_table', 6),
(105, '2018_07_04_051549_create_sliders_table', 6),
(106, '2018_07_04_051603_create_logos_table', 6),
(107, '2018_07_04_051616_create_notices_table', 6),
(108, '2018_07_04_051628_create_roles_table', 6),
(109, '2018_07_04_051647_create_carnames_table', 6),
(110, '2018_07_04_051711_create_case_types_table', 6),
(111, '2018_07_04_051726_create_cases_table', 6),
(112, '2018_07_05_131035_create_driver_exp_table', 6),
(113, '2018_07_05_131458_create_car_status_table', 6),
(114, '2018_07_15_080521_create_tbl_car_reg_table', 6),
(115, '2018_08_10_033007_tbl_owners', 6),
(116, '2018_08_10_083518_create_tbl_drivers', 6),
(117, '2018_08_10_105417_create_tbl_sergeants', 6),
(118, '2018_08_10_111053_create_tbl_zilla_admins', 6),
(119, '2018_08_10_115224_create_tbl_upazila_admin', 6),
(120, '2018_08_10_120106_create_tbl_users', 6),
(121, '2018_08_29_023930_create_bdc_chat', 7),
(122, '2018_08_30_055141_create_profile_models_table', 8),
(123, '2018_09_01_031836_create_car_metros', 8),
(124, '2018_09_01_032340_create_car_keywords', 9),
(125, '2018_09_01_032527_create_bdc_keywords', 10),
(126, '2018_09_01_032554_create_bdc_metros', 10),
(127, '2018_09_01_150939_create_bdc_notices', 11),
(128, '2018_09_02_052003_create_bdc_insurences', 12);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `profile_models`
--

DROP TABLE IF EXISTS `profile_models`;
CREATE TABLE IF NOT EXISTS `profile_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_desc`) VALUES
(1, 'Super Admin', 'Super Admin'),
(2, 'Owner', 'Car Owner'),
(3, 'Driver', 'Cars Driver'),
(6, 'Sergeant', 'Police Sergeant'),
(4, 'Zilla Admin', 'Zilla Admin'),
(5, 'Upazila Admin', 'Upazila Admin');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_car_reg`
--

INSERT INTO `tbl_car_reg` (`id`, `district`, `keyword`) VALUES
(1, 'Khulna', 'GHA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Frederick Schultz Sr.', 'jordi45@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'tvAuGWjqHS', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(3, 'Dr. Connor Rempel', 'kerluke.barbara@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'pKhmNvc6j6', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(4, 'Walter Tromp', 'angela.schmitt@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'DWdnTuTV3U', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(5, 'Emile Schmeler I', 'moore.ryder@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'jc9IUkkkq3', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(6, 'Hallie Heathcote', 'wilhelm.willms@example.net', 'e10adc3949ba59abbe56e057f20f883e', 'wj6CwXEHfE', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(7, 'Taurean Stark', 'ova.champlin@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'XMOvMML2qk', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(8, 'Omer Roberts', 'nschroeder@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'HSc7m5OpJn', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(9, 'Lawrence Lowe', 'kip36@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'UDqd0YN5Tw', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(10, 'Brody Lowe', 'ubernhard@example.net', 'e10adc3949ba59abbe56e057f20f883e', '8I7ArtTuvv', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(11, 'Dr. Greyson Baumbach III', 'klesch@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'vYEnewrTZ9', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(12, 'Amara Crooks', 'royce.little@example.net', 'e10adc3949ba59abbe56e057f20f883e', 'XlbqnhhbSu', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(13, 'Korbin Bartoletti', 'bernhard.kennedy@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'edIZKVH3Mj', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(14, 'Al Kreiger', 'qschamberger@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'LApe8dhRHw', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(15, 'Aaron Abernathy', 'loyce05@example.com', 'e10adc3949ba59abbe56e057f20f883e', 's2aEjylYWt', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(16, 'Ms. Sister Satterfield', 'grant30@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'wFokMFYtMl', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(17, 'Justus Brekke', 'zachariah57@example.net', 'e10adc3949ba59abbe56e057f20f883e', '3Fq9lnkLPa', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(18, 'Maximilian Kulas', 'katelynn13@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'bf3rjBipaX', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(19, 'Miss Juana Herzog IV', 'eschoen@example.net', 'e10adc3949ba59abbe56e057f20f883e', 'hbbakgfLFj', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(20, 'Brown Mills', 'marianne03@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'F8kq9oNOBp', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(21, 'Prof. Arnulfo Kling', 'daniel.eriberto@example.net', 'e10adc3949ba59abbe56e057f20f883e', 'HXagYWfZdm', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(22, 'Susana Stiedemann', 'gottlieb.carolanne@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'NILRPPfVan', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(23, 'Jena Donnelly IV', 'joelle12@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'z0l5kIWWWD', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(24, 'Francesco Jacobson', 'tabitha68@example.org', 'e10adc3949ba59abbe56e057f20f883e', 'A05rd5HBcq', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(25, 'Della Barton', 'veum.adah@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'KDSWNVlONV', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(26, 'Mr. Koby Romaguera PhD', 'lafayette65@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'qU9Fkxcxn2', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(27, 'Dr. Reese Streich', 'schuster.clementine@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'nwXSVv4h6A', '2018-08-28 21:53:45', '2018-08-28 21:53:45'),
(28, 'Prof. Libby Rosenbaum I', 'mitchel.emmerich@example.org', 'e10adc3949ba59abbe56e057f20f883e', '0u4lKVxxHj', '2018-08-28 21:53:46', '2018-08-28 21:53:46'),
(29, 'Oda Lehner', 'zdooley@example.net', 'e10adc3949ba59abbe56e057f20f883e', 'y7CG4ebFTz', '2018-08-28 21:53:46', '2018-08-28 21:53:46'),
(30, 'Marlen Franecki', 'bsteuber@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'RxOJQK4A6O', '2018-08-28 21:53:46', '2018-08-28 21:53:46'),
(31, 'Morton Hodkiewicz', 'mbahringer@example.com', 'e10adc3949ba59abbe56e057f20f883e', '2YKyKYuCXL', '2018-08-28 21:53:46', '2018-08-28 21:53:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
