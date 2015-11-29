-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2015 at 06:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeinginter`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_old`
--

CREATE TABLE IF NOT EXISTS `ads_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_option1` int(11) NOT NULL,
  `cat_option2` int(11) NOT NULL,
  `cat_option3` int(11) NOT NULL,
  `cat_option4` int(11) NOT NULL,
  `name_option1` varchar(255) NOT NULL,
  `name_option2` varchar(255) NOT NULL,
  `name_option3` varchar(255) NOT NULL,
  `name_option4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_key` (`category_id`),
  KEY `foreignkey_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `ads_old`
--

INSERT INTO `ads_old` (`id`, `name`, `category_id`, `user_id`, `details`, `image`, `cat_option1`, `cat_option2`, `cat_option3`, `cat_option4`, `name_option1`, `name_option2`, `name_option3`, `name_option4`) VALUES
(1, 'Iphonerrrrrrr', 4, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(5, 'nokia', 1, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(7, 'samsung s3', 1, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(8, 'dell 5520', 5, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(9, 'hp', 5, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(10, 'sony vaio', 5, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(11, 'hp', 5, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(12, 'sofa', 6, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(13, 'dog', 7, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(14, 'cat', 7, 1, '', '', 0, 0, 0, 0, '', '', '', ''),
(26, 'maths', 8, 4, 'asd\r\n                      ', '', 0, 0, 0, 0, '', '', '', ''),
(27, 'king', 11, 4, 'asd                      ', '', 10, 1, 3, 4, 'shirt', 'iphone4', 'corolla', 'iron'),
(28, 'fan', 4, 3, 'its a royal fan and it is in good condition                      ', '', 1, 5, 3, 6, 'huawei', 'dell', 'car', 'bed'),
(29, 'qmobilee', 1, 3, 'hello                      ', '', 1, 1, 1, 1, 'samsung', 'iphone', 'nokia', 'huawei'),
(30, 'qmobilee', 1, 3, 'hello                      ', '', 1, 1, 1, 1, 'samsung', 'iphone', 'nokia', 'huawei'),
(31, 'dell 110', 5, 3, 'its new laptop                       ', '', 3, 1, 4, 6, 'suzui', 'nokia', 'tv', 'sofa'),
(32, 'dell 110', 5, 3, 'its new laptop                       ', '', 3, 1, 4, 6, 'suzui', 'nokia', 'tv', 'sofa'),
(33, 'dell 110', 5, 3, 'its new laptop                       ', '', 3, 1, 4, 6, 'suzui', 'nokia', 'tv', 'sofa');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Mobiles'),
(3, 'Vehicles'),
(4, 'Electronics'),
(5, 'laptops'),
(6, 'furnitures'),
(7, 'pets'),
(8, 'books'),
(9, 'realestate'),
(10, 'clothes'),
(11, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `category_id`, `company_name`) VALUES
(1, 1, 'NOKIA'),
(2, 1, 'SAMSUNG'),
(3, 1, 'SONY'),
(4, 1, 'Q mobile'),
(5, 1, 'APPLE'),
(6, 1, 'HTC'),
(7, 1, 'HUAWEI'),
(8, 1, 'LG'),
(9, 1, 'MOTOROLLA');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `have`
--

CREATE TABLE IF NOT EXISTS `have` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `condition` int(11) NOT NULL,
  `description` text NOT NULL,
  `value` float NOT NULL,
  `user_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `have`
--

INSERT INTO `have` (`id`, `user_id`, `category_id`, `company_id`, `model`, `condition`, `description`, `value`, `user_name`) VALUES
(1, 3, 10, 3, 'zXZX', 9, 'zXZX', 10000, ''),
(8, 2, 4, 2, 'q123', 9, '', 5000, ''),
(9, 4, 8, 2, 'q123', 9, '', 1230000, ''),
(10, 6, 4, 1, 'q123', 9, '', 12000, ''),
(11, 8, 5, 2, '550', 9, 'hi', 2000, ''),
(12, 9, 4, 1, '550', 9, 'hi', 2000, 'junaid'),
(13, 5, 4, 1, '550', 9, 'hi', 2000, 'jalil'),
(14, 7, 4, 1, '550', 9, 'hi', 2000, 'aleem'),
(15, 7, 4, 1, '550', 9, 'hi', 2000, ''),
(16, 10, 4, 1, '550', 9, 'hi', 2000, ''),
(17, 12, 4, 1, '550', 9, 'hi', 2000, ''),
(18, 8, 4, 1, '550', 9, 'hi', 2000, ''),
(19, 9, 9, 9, 'new', 7, 'junaid ', 5000, 'junaid'),
(20, 9, 5, 9, 'hello', 6, 'jwsdunaid ', 50003, 'junaid'),
(21, 9, 5, 9, 'hello', 6, 'jwsdunaid ', 50003, 'junaid'),
(22, 9, 4, 9, 'hello', 6, 'jwsdunaid ', 50003, 'junaid'),
(23, 9, 4, 9, 'hello', 6, 'jwsdunaid ', 50003, 'junaid'),
(24, 8, 7, 3, 'l', 7, 'wqw', 12121, 'jalil'),
(25, 8, 1, 1, '3310', 10, 'wqw', 5000, 'jalil'),
(26, 3, 1, 2, 's2', 10, '', 10000, 'zainab'),
(27, 3, 1, 2, 's2', 10, '', 10000, 'zainab'),
(28, 3, 1, 2, 's2', 10, '', 10000, 'zainab'),
(29, 8, 4, 2, 'jk', 10, 'gg', 1220, 'jalil'),
(30, 8, 1, 5, 'iphone6', 10, 'hi hello!', 40000, 'jalil'),
(31, 8, 1, 5, 'iphone6', 10, 'hi hello!', 40000, 'jalil'),
(32, 8, 1, 2, 'ss', 8, 'll', 1111, 'jalil'),
(33, 8, 1, 2, 'ss', 8, 'll', 1111, 'jalil'),
(34, 8, 1, 2, 'ss', 8, 'll', 1111, 'jalil'),
(35, 8, 1, 2, 'ss', 8, 'll', 1111, 'jalil'),
(36, 8, 1, 2, 'ss', 8, 'll', 1111, 'jalil'),
(37, 8, 1, 2, 'ss', 8, 'll', 1111, 'jalil'),
(38, 8, 1, 2, '3330', 9, 'its my mbile', 5000, 'jalil'),
(39, 8, 1, 2, '3330', 9, 'its my mbile', 5000, 'jalil'),
(40, 8, 4, 5, 'ss', 7, 'qq', 10000, 'jalil'),
(41, 8, 4, 5, 'ss', 7, 'qq', 10000, 'jalil'),
(42, 8, 4, 1, 's2', 10, '', 1000, 'jalil'),
(43, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(44, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(45, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(46, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(47, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(48, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(49, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(50, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(51, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(52, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(53, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(54, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(55, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(56, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(57, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(58, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(59, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(60, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(61, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(62, 3, 3, 1, 's1', 9, '', 1090, 'zainab'),
(63, 3, 4, 1, 's1', 8, 'hi', 10000, 'zainab');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'testing', 'hello', 'iam testing codeigniter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1445347934, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', '', '$2y$08$pIqrnJ11ROEWPtFNdkmQlulGs26bj8cdtu66JA80zVUWambgg8166', NULL, 'hhq_797@hotmail.com', NULL, NULL, NULL, NULL, 1440011515, 1440011533, 1, 'hassan', 'qasim', 'jak', '0333232323'),
(3, '::1', '', '$2y$08$o3wfC1rJukl2S0MW8.C4gef/ePLF60D1.dVwvbORTcTy5SppPWfZC', NULL, 'zaini@outlook.com', NULL, NULL, NULL, NULL, 1440157229, 1448816675, 1, 'zainab', NULL, NULL, NULL),
(4, '::1', '', '$2y$08$eucFi5h024Suu2GE1aTLQuIRcRNCFHCj66/PE.f1bqXnWidRnMN.6', NULL, 'junaid@yahoo.com', NULL, NULL, NULL, NULL, 1440842589, 1441194299, 1, 'juni', NULL, NULL, NULL),
(5, '::1', '', '$2y$08$Fsx3vuImUIBruxTpVehX0uxD1gtA08e9EE502TYEUb1wn693clB0e', NULL, 'jalil@yahoo.com', NULL, NULL, NULL, NULL, 1441116729, 1441116755, 1, 'jalil', NULL, NULL, NULL),
(6, '::1', '', '$2y$08$MhhBaGaoZAOxV9KYddhaDu8H9c.uJ6jGnzVxG0wcEaZJ5TpjEJoYe', NULL, 'almas@gmail.com', NULL, NULL, NULL, NULL, 1441994122, NULL, 1, 'asa', NULL, NULL, NULL),
(7, '::1', '', '$2y$08$G7qIizXVC4k14CdS4fdy7uNf4YgAGcuadGXYcnyiWXZoHLQ25yWtK', NULL, 'asal@gmail.com', NULL, NULL, NULL, NULL, 1441994253, 1441994287, 1, 'aleem', NULL, NULL, NULL),
(8, '::1', '', '$2y$08$5if52vImjGJ22ULSVGlG2ukaZ7UocGhLYJDTcldBvdhzm/UsVZgCq', NULL, 'jalil1@yahoo.com', NULL, NULL, NULL, NULL, 1446628584, 1447521363, 1, 'jalil', NULL, NULL, NULL),
(9, '::1', '', '$2y$08$1DUBJLg0YEZYk0BGxD2.ZuQOQjSDtfqxKz4vLTqpZmKFvX4LvRqW6', NULL, 'junaid11@hotmail.com', NULL, NULL, NULL, NULL, 1446630674, 1446630688, 1, 'junaid', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(10, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `want`
--

CREATE TABLE IF NOT EXISTS `want` (
  `want_id` int(11) NOT NULL AUTO_INCREMENT,
  `have_id` int(11) NOT NULL,
  `want_category_id` int(11) NOT NULL,
  `want_company_id` int(11) NOT NULL,
  `want_model` varchar(100) NOT NULL,
  `want_condition` int(11) NOT NULL,
  `want_compensate_value` float NOT NULL,
  `want_will_give` varchar(10) NOT NULL,
  PRIMARY KEY (`want_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `want`
--

INSERT INTO `want` (`want_id`, `have_id`, `want_category_id`, `want_company_id`, `want_model`, `want_condition`, `want_compensate_value`, `want_will_give`) VALUES
(5, 1, 4, 1, 'asd', 9, 0, 'yes'),
(6, 1, 8, 1, '567', 5, 567, 'no'),
(7, 8, 3, 7, 'prado', 10, 0, 'yes'),
(8, 8, 10, 1, 'asdas', 9, 0, 'no'),
(9, 9, 7, 7, 'prado', 10, 0, 'yes'),
(10, 9, 10, 1, 'asdas', 9, 1233, 'yes'),
(11, 10, 10, 7, 'prado', 10, 0, 'yes'),
(12, 10, 8, 1, 'asdas', 9, 1233, 'no'),
(13, 11, 1, 3, 'w2w', 7, 1000, 'yes'),
(14, 11, 4, 4, 'wqw', 7, 1000, 'yes'),
(15, 12, 4, 6, 'w2w', 7, 1000, 'no'),
(16, 12, 6, 1, 'wqw', 7, 1000, 'yes'),
(17, 14, 4, 6, 'w2w', 7, 1000, 'no'),
(18, 14, 6, 1, 'wqw', 7, 1000, 'yes'),
(19, 15, 4, 6, 'w2w', 7, 1000, 'no'),
(20, 15, 6, 1, 'wqw', 7, 1000, 'no'),
(21, 16, 4, 6, 'w2w', 7, 1000, 'no'),
(22, 16, 6, 1, 'wqw', 7, 1000, 'yes'),
(23, 17, 4, 6, 'w2w', 7, 1000, 'yes'),
(24, 17, 6, 1, 'wqw', 7, 1000, 'no'),
(25, 18, 4, 6, 'w2w', 7, 1000, 'yes'),
(26, 18, 6, 1, 'wqw', 7, 1000, 'no'),
(27, 19, 1, 4, 'qqq', 10, 11, 'no'),
(28, 19, 7, 2, 'qwwww', 10, 121, 'yes'),
(29, 20, 4, 6, 'qwwww', 7, 1111, 'no'),
(30, 20, 8, 3, 'ki', 9, 0, 'yes'),
(31, 21, 4, 6, 'qwwww', 7, 1111, 'yes'),
(32, 21, 8, 3, 'ki', 9, 0, 'yes'),
(33, 22, 4, 6, 'qwwww', 7, 1111, 'no'),
(34, 22, 8, 3, 'ki', 9, 0, 'yes'),
(35, 23, 4, 6, 'qwwww', 7, 1111, 'yes'),
(36, 23, 8, 3, 'ki', 9, 0, 'no'),
(37, 24, 5, 1, 'qw', 10, 1, 'no'),
(38, 24, 3, 1, 'qw', 8, 1, 'no'),
(39, 25, 1, 2, 's2', 10, 5000, 'no'),
(40, 25, 3, 3, 'qw', 8, 1, 'yes'),
(41, 26, 1, 1, '3310', 10, 5000, 'yes'),
(42, 26, 4, 1, 'qw', 8, 0, 'no'),
(43, 27, 1, 1, '3310', 10, 5000, 'yes'),
(44, 27, 4, 1, 'qw', 8, 0, 'no'),
(45, 28, 1, 1, '3310', 10, 5000, 'yes'),
(46, 28, 4, 1, 'qw', 8, 0, 'no'),
(47, 29, 1, 2, 's2', 9, 500, 'yes'),
(48, 29, 1, 1, '3310', 8, 1000, 'no'),
(49, 30, 3, 1, 'koi bhi', 8, 1000, 'no'),
(50, 30, 4, 2, 's5', 7, 5000, 'no'),
(51, 31, 3, 1, 'koi bhi', 8, 1000, 'no'),
(52, 31, 4, 2, 's5', 7, 5000, 'no'),
(53, 32, 1, 1, 'q1', 9, 1000, 'yes'),
(54, 32, 4, 3, 'w2', 10, 100, 'no'),
(55, 33, 1, 1, 'q1', 9, 1000, 'yes'),
(56, 33, 4, 3, 'w2', 10, 100, 'no'),
(57, 34, 1, 1, 'q1', 9, 1000, 'yes'),
(58, 34, 4, 3, 'w2', 10, 100, 'no'),
(59, 35, 1, 1, 'q1', 9, 1000, 'yes'),
(60, 35, 4, 3, 'w2', 10, 100, 'no'),
(61, 36, 1, 1, 'q1', 9, 1000, 'yes'),
(62, 36, 4, 3, 'w2', 10, 100, 'no'),
(63, 37, 1, 1, 'q1', 9, 1000, 'yes'),
(64, 37, 4, 3, 'w2', 10, 100, 'no'),
(65, 38, 1, 2, 's3', 9, 10000, 'no'),
(66, 38, 1, 2, 's4', 9, 20000, 'no'),
(67, 39, 1, 2, 's3', 9, 10000, 'no'),
(68, 39, 1, 2, 's4', 9, 20000, 'no'),
(69, 40, 3, 3, 'sw', 8, 1000, 'yes'),
(70, 40, 1, 2, 'sw', 8, 1000, 'yes'),
(71, 41, 3, 3, 'sw', 8, 1000, 'yes'),
(72, 41, 1, 2, 'sw', 8, 1000, 'yes'),
(73, 42, 1, 3, 'q1', 9, 500, 'no'),
(74, 42, 1, 2, 's2', 9, 0, 'yes'),
(75, 43, 1, 1, 'aa', 8, 100, 'yes'),
(76, 43, 3, 3, 'q0', 10, 0, 'yes'),
(77, 44, 1, 1, 'aa', 8, 100, 'yes'),
(78, 44, 3, 3, 'q0', 10, 0, 'yes'),
(79, 45, 1, 1, 'aa', 8, 100, 'yes'),
(80, 45, 3, 3, 'q0', 10, 0, 'yes'),
(81, 46, 1, 1, 'aa', 8, 100, 'yes'),
(82, 46, 3, 3, 'q0', 10, 0, 'yes'),
(83, 47, 1, 1, 'aa', 8, 100, 'yes'),
(84, 47, 3, 3, 'q0', 10, 0, 'no'),
(85, 48, 1, 1, 'aa', 8, 100, 'no'),
(86, 48, 3, 3, 'q0', 10, 0, 'yes'),
(87, 49, 1, 1, 'aa', 8, 100, 'no'),
(88, 49, 3, 3, 'q0', 10, 0, 'yes'),
(89, 50, 1, 1, 'aa', 8, 100, 'yes'),
(90, 50, 3, 3, 'q0', 10, 0, 'yes'),
(91, 51, 1, 1, 'aa', 8, 100, 'yes'),
(92, 51, 3, 3, 'q0', 10, 0, 'yes'),
(93, 52, 1, 1, 'aa', 8, 100, 'yes'),
(94, 52, 3, 3, 'q0', 10, 0, 'yes'),
(95, 53, 1, 1, 'aa', 8, 100, 'yes'),
(96, 53, 3, 3, 'q0', 10, 0, 'yes'),
(97, 54, 1, 1, 'aa', 8, 100, 'yes'),
(98, 54, 3, 3, 'q0', 10, 0, 'yes'),
(99, 55, 1, 1, 'aa', 8, 100, 'yes'),
(100, 55, 3, 3, 'q0', 10, 0, 'yes'),
(101, 56, 1, 1, 'aa', 8, 100, 'yes'),
(102, 56, 3, 3, 'q0', 10, 0, 'yes'),
(103, 57, 1, 1, 'aa', 8, 100, 'yes'),
(104, 57, 3, 3, 'q0', 10, 0, 'yes'),
(105, 58, 1, 1, 'aa', 8, 100, 'yes'),
(106, 58, 3, 3, 'q0', 10, 0, 'yes'),
(107, 59, 1, 1, 'aa', 8, 100, 'yes'),
(108, 59, 3, 3, 'q0', 10, 0, 'yes'),
(109, 60, 1, 1, 'aa', 8, 100, 'yes'),
(110, 60, 3, 3, 'q0', 10, 0, 'yes'),
(111, 61, 1, 1, 'aa', 8, 100, 'yes'),
(112, 61, 3, 3, 'q0', 10, 0, 'yes'),
(113, 62, 1, 1, 'aa', 8, 100, 'yes'),
(114, 62, 3, 3, 'q0', 10, 0, 'yes'),
(115, 63, 1, 2, 'q1', 8, 1000, 'yes'),
(116, 63, 3, 4, 'qq', 10, 500, 'no');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads_old`
--
ALTER TABLE `ads_old`
  ADD CONSTRAINT `ads_old_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `ads_old_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
