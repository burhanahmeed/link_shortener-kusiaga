-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 10:43 AM
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
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `short_url` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `long_url` varchar(250) NOT NULL,
  `url_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url_views` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `short_url`, `long_url`, `url_timestamp`, `url_views`, `userId`) VALUES
(1125, 'TeS', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:04:20', 1, NULL),
(1126, 'Na7Vo', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:36', 0, NULL),
(1127, 'l89rx', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:37', 0, NULL),
(1128, 'mV8OJ', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:38', 0, NULL),
(1129, 'SZqmz', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:38', 0, NULL),
(1130, '8FdIH', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:39', 0, NULL),
(1131, 'dw0sN', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:39', 0, NULL),
(1132, 'n1Tph', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 10:08:39', 0, NULL),
(1133, 'xsMNF', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-27 14:22:54', 3, NULL),
(1134, 'uV6Bs', 'google.com', '2017-01-23 10:40:01', 0, NULL),
(1135, 'pS2dI', 'http://google.com', '2017-01-23 10:44:01', 0, NULL),
(1136, 'DoMIE', 'https://google.com', '2017-01-23 10:44:22', 0, NULL),
(1137, 's9BUK', 'http://ht://google.com', '2017-01-23 10:44:27', 0, NULL),
(1138, 'CB0IO', 'ftp://google.com', '2017-01-23 10:44:36', 0, NULL),
(1139, 'W0noV', 'http://www.co.co', '2017-01-23 10:46:38', 0, NULL),
(1140, 'hMUJ0', 'http://www.co.co', '2017-01-23 13:43:59', 0, NULL),
(1141, 'PSAIt', 'http://www.co.co', '2017-01-23 13:44:30', 0, NULL),
(1142, 'TiFGM', 'http://www.co.co', '2017-01-23 13:44:57', 0, NULL),
(1143, 'D8V0K', 'http://www.co.co', '2017-01-23 13:46:50', 0, NULL),
(1144, 'd9I3W', 'http://www.co.co', '2017-01-23 13:49:45', 0, NULL),
(1145, 'BaOGz', 'http://www.co.co', '2017-01-23 13:50:02', 0, NULL),
(1146, 'FKwpV', 'http://aaaaa', '2017-01-23 13:53:03', 0, NULL),
(1147, 'ADPZ8', 'http://aaaaa', '2017-01-23 13:56:34', 0, NULL),
(1148, '6wRst', 'http://aaaaa.', '2017-01-23 13:56:42', 0, NULL),
(1149, '7p1yg', 'http://aaa.co', '2017-01-23 14:03:51', 0, NULL),
(1150, 'wcrNP', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-23 14:03:59', 0, NULL),
(1151, 'OTH0p', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-23 14:04:05', 0, NULL),
(1152, 'hqRpP', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-23 14:04:15', 0, NULL),
(1153, 'mXgf6', 'http://127.0.0.1.com', '2017-01-23 14:05:22', 0, NULL),
(1154, 'hnDYK', 'http://127.0.0.1', '2017-01-23 14:05:48', 0, NULL),
(1155, 'DWGRU', 'http://127.0.0.1/dadada', '2017-01-23 14:05:52', 0, NULL),
(1156, 'PMfhs', 'http://google.com', '2017-01-23 14:06:07', 0, NULL),
(1157, 'OmjGZ', 'http://aaaaa.cc', '2017-01-23 15:02:53', 0, NULL),
(1158, 'dW5oh', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 02:00:47', 0, NULL),
(1159, 'wmFW7', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 02:01:02', 0, NULL),
(1160, 'xVRan', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 02:01:33', 0, NULL),
(1161, 'Xh3AR', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:02:26', 0, NULL),
(1162, 'ja4xM', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 02:05:28', 0, NULL),
(1163, '4JyB0', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 02:05:40', 0, NULL),
(1164, 'y60oi', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:04', 0, NULL),
(1165, '1ql7v', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:20', 0, NULL),
(1166, '3BWdc', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:22', 0, NULL),
(1167, 'kLOC9', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:24', 0, NULL),
(1168, 'uCyBM', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:25', 0, NULL),
(1169, 'qMKr4', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:26', 0, NULL),
(1170, 'AinW1', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:11:26', 0, NULL),
(1171, 'UbuYq', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 02:12:03', 0, NULL),
(1172, 'CTXUR', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 02:13:03', 0, NULL),
(1173, '06KkY', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:15:51', 0, NULL),
(1174, 'au3yP', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:15:58', 0, NULL),
(1175, 'wtXJn', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:15:58', 0, NULL),
(1176, 'Bacsp', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 02:16:00', 0, NULL),
(1177, 'uhT5E', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 02:23:09', 0, NULL),
(1178, 'burhan', 'https://www.google.co.id/search?q=ajax+input+validation&rlz=1C1RLNS_enID695ID695&oq=ajax+input+validation&aqs=chrome..69i57.7555j0j4&sourceid=chrome&ie=UTF-8#q=ajax+form+validation+codeigniter', '2017-01-24 02:23:59', 0, NULL),
(1179, 'wy26o', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 02:25:07', 0, NULL),
(1180, 'L4yEn', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 02:25:38', 0, NULL),
(1181, 'J0pnX', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 02:37:04', 0, NULL),
(1182, '6HB7n', 'https://127.0.0.0.0', '2017-01-24 02:54:23', 0, NULL),
(1183, 'awCy0', 'https://127.0.0.0.0', '2017-01-24 02:55:28', 0, NULL),
(1184, 'JW1hR', 'https://127.0.0.0.0', '2017-01-24 02:55:31', 0, NULL),
(1185, '0QJVo', 'https://127.0.0.0.0', '2017-01-24 02:58:33', 0, NULL),
(1186, 'vo8Hn', 'https://127.0.0.0.0', '2017-01-24 02:59:32', 0, NULL),
(1187, 'jmcnZ', 'https://127.0.0.0.0', '2017-01-24 02:59:50', 0, NULL),
(1188, '4wR0m', 'https://127.0.0.0.0', '2017-01-24 03:12:53', 0, NULL),
(1189, 't4GSa', 'https://127.0.0.0.0', '2017-01-24 03:18:09', 0, NULL),
(1190, 'Ksnoh', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:24:52', 0, NULL),
(1191, 'VWrmw', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:25:06', 0, NULL),
(1192, 'JTmP5', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 03:26:14', 0, NULL),
(1193, 'WsBkg', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 03:26:21', 0, NULL),
(1194, '1gvb0', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 03:29:07', 0, NULL),
(1195, 'OkKMD', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 03:33:52', 0, NULL),
(1196, '0uCH3', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 03:34:36', 0, NULL),
(1197, 'JcWht', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 03:35:44', 0, NULL),
(1198, 'Ihj9U', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:38:29', 0, NULL),
(1199, 'hgZHw', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:42:09', 0, NULL),
(1200, 'kb7tu', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:42:21', 0, NULL),
(1201, 'eScQ2', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:42:33', 0, NULL),
(1202, 'sBtCF', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:42:41', 0, NULL),
(1203, 'bKoIP', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:42:44', 0, NULL),
(1204, 'rVh4A', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 03:56:05', 0, NULL),
(1205, 'ixkT3', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 03:56:41', 0, NULL),
(1206, 'TUAcW', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:57:00', 0, NULL),
(1207, '4FwoL', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 03:58:03', 0, NULL),
(1208, 'WSDRE', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:12:18', 0, NULL),
(1209, '1Hub7', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:12:46', 0, NULL),
(1210, 'E7YvK', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 04:13:00', 0, NULL),
(1211, 'Cwlf4', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 04:15:09', 0, NULL),
(1212, 'ICrgw', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 04:15:48', 0, NULL),
(1213, 'Kx5iv', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 04:15:54', 0, NULL),
(1214, 'VZAu0', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 04:16:24', 0, NULL),
(1215, 'tNc1n', 'https://www.dunebook.com/create-a-url-shortener-website-with-codeigniter/2/', '2017-01-24 04:16:29', 0, NULL),
(1216, '8Ikyl', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:16:59', 0, NULL),
(1217, '7YzLh', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:17:11', 0, NULL),
(1218, 'fxuct', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 04:25:48', 0, NULL),
(1219, 'mBR1Y', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 04:26:07', 0, NULL),
(1220, '0w19A', 'https://www.youtube.com/watch?v=60ItHLz5WEA', '2017-01-24 04:26:15', 0, NULL),
(1221, 'WkMwH', 'http://www.w3schools.com/angular/angular_controllers.asp', '2017-01-24 04:26:23', 0, NULL),
(1222, 'ZRvr2', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:26:49', 0, NULL),
(1223, 'NjDzc', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:26:56', 0, NULL),
(1224, 'JtCHR', 'https://127.0.0.0.0', '2017-01-24 04:27:26', 0, NULL),
(1225, 'Wijpk', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:36:31', 0, NULL),
(1226, 'BE1sZ', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:40:22', 0, NULL),
(1227, 'WMS5m', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:40:24', 0, NULL),
(1228, 'aOZCw', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:40:35', 0, NULL),
(1229, '3WuGS', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:40:49', 0, NULL),
(1230, 'wzZE6', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:40:50', 0, NULL),
(1231, 'ZXn91', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 04:42:43', 0, NULL),
(1232, '0nKqN', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:02:51', 0, NULL),
(1233, '0lANW', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:07', 0, NULL),
(1234, 'W690H', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:27', 0, NULL),
(1235, 'f1j56', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:31', 0, NULL),
(1236, '1XMZ2', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:34', 0, NULL),
(1237, 'QPHsk', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:38', 0, NULL),
(1238, 'GPEyc', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:41', 0, NULL),
(1239, 'sH8eu', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:43', 0, NULL),
(1240, '7Pt1l', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:05:52', 0, NULL),
(1241, 'IUClJ', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:06:39', 0, NULL),
(1242, 'D7wre', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:06:45', 0, NULL),
(1243, 'Y63cr', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:07:50', 0, NULL),
(1244, 'ci41C', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:07:56', 0, NULL),
(1245, 't3iNE', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:08:16', 0, NULL),
(1246, '4g8nO', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:08:44', 0, NULL),
(1247, 'lqOQm', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:08:57', 0, NULL),
(1249, 'cwxAy', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:13:05', 0, NULL),
(1250, '9jH4U', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:13:17', 0, NULL),
(1251, 'RTJtD', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:13:27', 0, NULL),
(1252, 'AZ3iq', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:15:36', 0, NULL),
(1253, 'yh4pL', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:16:26', 0, NULL),
(1254, '2XkR6', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:16:47', 0, NULL),
(1255, 'UXT2B', 'https://www.youtube.com/watch?v=IcrbM1l_BoI', '2017-01-24 05:16:58', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `short_url` (`short_url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1305;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
