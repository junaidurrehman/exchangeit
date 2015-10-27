-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2015 at 06:58 PM
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
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
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
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `category_id`, `user_id`, `details`, `image`, `cat_option1`, `cat_option2`, `cat_option3`, `cat_option4`, `name_option1`, `name_option2`, `name_option3`, `name_option4`) VALUES
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1445347934, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', '', '$2y$08$pIqrnJ11ROEWPtFNdkmQlulGs26bj8cdtu66JA80zVUWambgg8166', NULL, 'hhq_797@hotmail.com', NULL, NULL, NULL, NULL, 1440011515, 1440011533, 1, 'hassan', 'qasim', 'jak', '0333232323'),
(3, '::1', '', '$2y$08$o3wfC1rJukl2S0MW8.C4gef/ePLF60D1.dVwvbORTcTy5SppPWfZC', NULL, 'zaini@outlook.com', NULL, NULL, NULL, NULL, 1440157229, 1445867628, 1, 'zainab', NULL, NULL, NULL),
(4, '::1', '', '$2y$08$eucFi5h024Suu2GE1aTLQuIRcRNCFHCj66/PE.f1bqXnWidRnMN.6', NULL, 'junaid@yahoo.com', NULL, NULL, NULL, NULL, 1440842589, 1441194299, 1, 'juni', NULL, NULL, NULL),
(5, '::1', '', '$2y$08$Fsx3vuImUIBruxTpVehX0uxD1gtA08e9EE502TYEUb1wn693clB0e', NULL, 'jalil@yahoo.com', NULL, NULL, NULL, NULL, 1441116729, 1441116755, 1, 'jalil', NULL, NULL, NULL),
(6, '::1', '', '$2y$08$MhhBaGaoZAOxV9KYddhaDu8H9c.uJ6jGnzVxG0wcEaZJ5TpjEJoYe', NULL, 'almas@gmail.com', NULL, NULL, NULL, NULL, 1441994122, NULL, 1, 'asa', NULL, NULL, NULL),
(7, '::1', '', '$2y$08$G7qIizXVC4k14CdS4fdy7uNf4YgAGcuadGXYcnyiWXZoHLQ25yWtK', NULL, 'asal@gmail.com', NULL, NULL, NULL, NULL, 1441994253, 1441994287, 1, 'aleem', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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
(8, 7, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `ads_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
