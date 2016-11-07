-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 05:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `juice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `user_name` varchar(50) NOT NULL COMMENT 'User''s Name',
  `user_email` varchar(100) NOT NULL COMMENT 'Email',
  `user_pwd` varchar(100) NOT NULL COMMENT 'Password',
  `reg_ymd` datetime NOT NULL COMMENT 'Registered Date and Time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `title` varchar(200) NOT NULL COMMENT 'Video''s Name',
  `description` text NOT NULL COMMENT 'Description',
  `video_url` varchar(2084) NOT NULL COMMENT 'URL',
  `thumbnail` varchar(1000) NOT NULL COMMENT 'Thumbnail',
  `reg_ymd` datetime NOT NULL COMMENT 'Registered Date and Time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_url`, `thumbnail`, `reg_ymd`) VALUES
(2, 'Woman makes police officer cry with her heartfelt gift', 'Description', 'http://youtube.com/embed/k2vN2SV7gtc', 'http://garak.wimp.com/images/pthumbs/2016/11/8453424b950ef545e2aaeec657ff15fc_officer_edit_198_154.jpg', '2016-11-07 00:00:00'),
(3, 'Two scientists solve the "walking water mystery"', 'Description', 'http://youtube.com/embed/KJDEsAy9RyM', 'http://garak.wimp.com/images/pthumbs/2016/11/87049013bcaaaf0687f907a4063fd12c_water_edit_198_154.jpg', '2016-11-07 00:00:00'),
(4, 'Listen to what this family has to say about using your phone while driving', 'Description', 'http://youtube.com/embed/UkjRvsT8f5k', 'http://garak.wimp.com/images/pthumbs/2016/11/1c65b80cab439d9d087d83e3ffd7ce9c_phone_edit_198_154.jpg', '2016-11-07 00:00:00'),
(5, 'Test', 'Second Edisdafdasfasf', 'https://streamable.com/e/07zn?autoplay=1&amp;logo=0&amp;hd=1', 'http://garak.wimp.com/images/pthumbs/2016/11/137e88414ff462e2a450eca366ef90d9_golf_edit_198_154.jpg', '2016-11-07 15:40:44'),
(9, 'Wrigley Field when the Cubs won the World Series', 'Descriptionasdfasdfd', 'http://youtube.com/embed/K2Yb3qCa7TQ', 'http://garak.wimp.com/images/pthumbs/2016/11/1ad6dbe574020666fee77b1e218c2542_cubs_edit_198_154.jpg', '2016-11-07 15:41:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
