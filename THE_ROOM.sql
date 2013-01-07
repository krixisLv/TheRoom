-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2013 at 12:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `the_room`
--

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE IF NOT EXISTS `active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`id`, `name`, `group`, `updated_at`) VALUES
(10, 'kiki', 1, '2013-01-07 11:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `uid`, `message`, `created_at`) VALUES
(3, 4, 'This is great chat app!', '2013-01-06 13:46:17'),
(4, 5, 'Thanks!', '2013-01-07 06:37:02'),
(5, 4, 'Ohohohoh', '2013-01-07 06:37:49'),
(6, 4, 'This is a test message', '2013-01-06 13:56:39'),
(36, 5, 'jo', '2013-01-06 20:24:01'),
(37, 5, 'Haa', '2013-01-06 20:28:12'),
(38, 5, 'done', '2013-01-06 21:20:07'),
(41, 5, 'still done', '2013-01-06 21:24:47'),
(44, 5, 'yello', '2013-01-07 00:09:09'),
(45, 5, 'It''s alive!!!!!', '2013-01-07 00:11:23'),
(46, 4, 'yes!', '2013-01-07 00:22:29'),
(47, 4, 'it really is', '2013-01-07 00:22:59'),
(48, 4, 'finally', '2013-01-07 00:23:42'),
(49, 5, 'I see :)', '2013-01-07 00:24:21'),
(50, 5, 'hoho', '2013-01-07 06:35:05'),
(51, 5, 'ho', '2013-01-07 06:37:02'),
(52, 5, 'i try again', '2013-01-07 06:37:49'),
(53, 5, 'and again', '2013-01-07 06:38:33'),
(54, 5, 'try', '2013-01-07 06:42:52'),
(55, 5, 'just came back', '2013-01-07 06:48:21'),
(56, 5, 'now?', '2013-01-07 06:50:43'),
(57, 5, 'now?', '2013-01-07 06:52:34'),
(58, 5, 'he', '2013-01-07 06:59:17'),
(59, 5, 'ho ho', '2013-01-07 08:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(4, 'krixislv', 'lQW/3z4kOgZnlG+mtHfyAAVZ1bnYRfyvTg4IV5j3Fvs=', 1, 'k.straumens@gmail.com', 1357557906, '6b72588efd8196968e4d61ade4ba650d8259799c', 'a:0:{}', 1357411674, 0),
(5, 'kiki', 'aJi8eMcVai3jEMcG4XCIjL9OOHIGcFM+TnU0DA0JtgQ=', 1, 'k.straumens@gmail.co', 1357557974, '7ba707f7bdcf370f60f344acd5aa05f5f0e96923', 'a:0:{}', 1357412399, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `uid`, `firstName`, `lastName`, `picture`) VALUES
(5, 5, 'yehoo', 'gogo', 'http://www.divinereapers.org/wp-content/uploads/2011/09/profile_icon_by_art311-d33mwsf.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
