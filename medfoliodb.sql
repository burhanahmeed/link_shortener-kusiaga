-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 02:22 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `url_id` int(11) NOT NULL,
  `last_click` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clicks` int(15) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`url_id`, `last_click`, `clicks`) VALUES
(1, '2017-05-27 02:28:51', 1234567890),
(4, '2017-05-27 02:28:51', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `short_url` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `long_url` varchar(250) NOT NULL,
  `url_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `short_url`, `long_url`, `url_timestamp`, `userId`) VALUES
(1389, 'xHd', 'https://www.formget.com/codeigniter-google-oauth-php/', '2017-04-21 10:03:41', NULL),
(1390, 'H9erg', 'https://www.formget.com/codeigniter-google-oauth-php/', '2017-04-21 10:04:42', NULL),
(1391, 'GOX', 'https://www.formget.com/codeigniter-google-oauth-php/', '2017-04-21 10:06:59', NULL),
(1392, 'jJ', 'https://console.developers.google.com/apis/credentials/oauthclient/964118721025-ensdmlj9f4g01ugcf5p6o2rqe2lms80l.apps.googleusercontent.com?project=kusiaga-165202', '2017-04-21 10:28:12', NULL),
(1393, 'c6', 'https://www.formget.com/codeigniter-google-oauth-php/', '2017-04-21 10:29:03', NULL),
(1394, 'mDxp', 'https://www.formget.com/codeigniter-google-oauth-php/', '2017-04-21 10:30:49', NULL),
(1395, 'JBE', 'https://console.developers.google.com/apis/credentials/oauthclient/964118721025-ensdmlj9f4g01ugcf5p6o2rqe2lms80l.apps.googleusercontent.com?project=kusiaga-165202', '2017-04-21 10:31:55', NULL),
(1396, 'uxo1', 'https://console.developers.google.com/apis/credentials/oauthclient/964118721025-ensdmlj9f4g01ugcf5p6o2rqe2lms80l.apps.googleusercontent.com?project=kusiaga-165202', '2017-04-21 10:33:31', NULL),
(1397, 'OG4Z', 'https://console.developers.google.com/apis/credentials/oauthclient/964118721025-ensdmlj9f4g01ugcf5p6o2rqe2lms80l.apps.googleusercontent.com?project=kusiaga-165202', '2017-04-21 10:33:41', NULL),
(1398, 'g21X', 'https://console.developers.google.com/apis/credentials/oauthclient/964118721025-ensdmlj9f4g01ugcf5p6o2rqe2lms80l.apps.googleusercontent.com?project=kusiaga-165202', '2017-04-21 10:34:03', NULL),
(1399, 'KQbj', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-04-23 15:06:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`uid`, `name`, `email`, `password`, `role`, `created`) VALUES
(2, 'Burhan Med', 'burhanahmeed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'superadmin', '2017-01-25 05:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `short_url` (`short_url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1400;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
