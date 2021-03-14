-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2020 at 04:30 PM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridepudo_23`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `street` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `street`, `city`, `state`, `zip`, `lat`, `lng`, `date_time`) VALUES
(1, '1 Street Valley', 'Stream', 'NY', '11501', NULL, NULL, '2020-10-12 04:40:09'),
(2, '1 Street Valley', 'Stream', 'NY', '11501', NULL, NULL, '2020-10-12 04:41:51'),
(3, 'asdf', 'Lucknow', 'state', '112232', NULL, NULL, '2020-10-14 22:32:01'),
(4, '13722 BEDELL ST', 'SPRINGFIELD GARDENS', 'NY', '11413-3053', NULL, NULL, '2020-11-18 15:16:11'),
(5, '13722 BEDELL ST', 'SPRINGFIELD GARDENS', 'NY', '11413-3053', NULL, NULL, '2020-11-18 17:04:04'),
(6, '13722 BEDELL ST', 'SPRINGFIELD GARDENS', 'NY', '11413-3053', NULL, NULL, '2020-11-18 17:04:17'),
(7, '', '', '', '', NULL, NULL, '2020-11-28 11:29:39'),
(8, '', '', '', '', NULL, NULL, '2020-11-29 22:56:58'),
(9, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2020-11-30 00:30:43'),
(10, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2020-11-30 00:33:10'),
(11, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2020-11-30 00:45:34'),
(12, '34-62 junction Blvd ', 'Corona ', 'New york', '11368', NULL, NULL, '2020-12-02 13:40:54'),
(13, '34-62 junction Blvd ', 'Corona ', 'New york', '11368', NULL, NULL, '2020-12-02 13:51:28'),
(14, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2020-12-03 22:47:20'),
(15, 'Existing', 'Sahiwal ', 'Punjab', '12344', NULL, NULL, '2020-12-04 04:09:21'),
(16, 'Existing', 'Sahiwal ', 'Punjab', '12344', NULL, NULL, '2020-12-04 04:10:47'),
(17, '', '', '', '', NULL, NULL, '2020-12-04 06:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `services` text NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `price` double(11,2) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `carbase`
--

CREATE TABLE `carbase` (
  `carbase_id` varchar(20) NOT NULL,
  `carbase_name` varchar(255) NOT NULL,
  `owner_id` varchar(20) NOT NULL,
  `address_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carbase`
--

INSERT INTO `carbase` (`carbase_id`, `carbase_name`, `owner_id`, `address_id`, `date_time`) VALUES
('CAR20110422A79FB8224', 'Elli Car Rental', 'USR2011042200288F223', 0, '2020-11-04 17:33:22'),
('CAR20110449A08A69453', 'John Car Rental', 'USR20110449667596451', 0, '2020-11-04 17:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `path` text NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `related_id`, `type`, `path`, `file_name`, `date_time`) VALUES
(1, 1, 'shop', 'rp_assets/Images/shop_images/USR2010095565D7CD635', 'IMG20101122505F71290.png', '2020-10-12 04:02:22'),
(2, 1, 'shop', 'rp_assets/Images/shop_images/USR2010095565D7CD635', 'IMG2010113822B3BA815.png', '2020-10-12 04:05:38'),
(3, 2, 'shop', 'rp_assets/Images/shop_images/USR201014065909DB041', 'IMG2010142546163E925.png', '2020-10-14 22:33:25'),
(5, 10, 'shop', 'rp_assets/Images/shop_images/USR20113003979271559', 'IMG20113002575902876.jpg', '2020-11-29 22:54:02'),
(6, 10, 'shop', 'rp_assets/Images/shop_images/USR20113003979271559', 'IMG201130134016B5509.jpg', '2020-11-29 22:54:13'),
(7, 12, 'shop', 'rp_assets/Images/shop_images/USR2011302390C12F287', 'IMG2011305364FE7C240.jpg', '2020-11-30 00:32:53'),
(8, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120246D1E55E579.jpg', '2020-12-02 13:41:46'),
(9, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120230355D70574.jpg', '2020-12-02 13:42:30'),
(10, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120259211F34005.jpg', '2020-12-02 13:42:59'),
(11, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG201202267D0D6F505.jpg', '2020-12-02 13:43:26'),
(12, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG201202554D887C216.jpg', '2020-12-02 13:43:55'),
(13, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG201202176415A1743.jpg', '2020-12-02 13:45:17'),
(15, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG201202263CA094166.jpg', '2020-12-02 13:46:26'),
(16, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120255B465BA855.jpg', '2020-12-02 13:46:55'),
(17, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG201202417278FA188.JPG', '2020-12-02 13:47:41'),
(18, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120211EA83A3436.jpeg', '2020-12-02 13:48:11'),
(19, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG201202414E7A3E187.jpg', '2020-12-02 13:49:41'),
(20, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120220B61261611.jpg', '2020-12-02 13:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `related_user_id` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL,
  `link` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notification_type`
--

CREATE TABLE `notification_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(4) NOT NULL,
  `text` varchar(255) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification_type`
--

INSERT INTO `notification_type` (`type_id`, `type`, `text`, `user_type`, `date_time`) VALUES
(1, '1', 'Would like to purchase your data', 3, '2020-10-01 23:52:29'),
(2, '2', 'Accepted your purchase data request', 2, '2020-10-01 23:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `related_carbase`
--

CREATE TABLE `related_carbase` (
  `user_id` varchar(20) NOT NULL,
  `carbase_id` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `related_carbase`
--

INSERT INTO `related_carbase` (`user_id`, `carbase_id`, `date_time`) VALUES
('USR201104015C9853751', 'CAR20110422A79FB8224', '2020-11-04 18:35:01'),
('USR2011042200288F223', 'CAR20110422A79FB8224', '2020-11-04 17:33:22'),
('USR201104297698AB529', 'CAR20110422A79FB8224', '2020-11-04 17:46:29'),
('USR20110431395519593', 'CAR20110449A08A69453', '2020-11-04 17:54:31'),
('USR201104397462E4974', 'CAR20110422A79FB8224', '2020-11-04 18:37:39'),
('USR20110449667596451', 'CAR20110449A08A69453', '2020-11-04 17:32:49'),
('USR201107120CA97B078', 'CAR20110422A79FB8224', '2020-11-08 01:56:12'),
('USR2011071510B3F6700', 'CAR20110422A79FB8224', '2020-11-08 02:13:15'),
('USR201107444368D5068', 'CAR20110422A79FB8224', '2020-11-08 02:06:44'),
('USR20110748FBBA7E398', 'CAR20110422A79FB8224', '2020-11-08 02:20:48'),
('USR20110749E009FF021', 'CAR20110422A79FB8224', '2020-11-08 02:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `price` double(6,2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `shop_id`, `service_name`, `details`, `time`, `price`, `date_time`) VALUES
(6, 12, 'test', 'hbhb', '30', 12.00, '2020-11-30 00:33:53'),
(7, 15, 'Hair style', 'Justified', '2', 50.00, '2020-12-04 04:15:06'),
(8, 19, '', '', '', 0.00, '2020-12-04 06:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `user_id`, `shop_name`, `details`, `address_id`, `date_time`) VALUES
(3, 'USR201104111FE044153', '', '', NULL, '2020-11-04 17:08:11'),
(4, 'USR20110455B0C5A7715', 'Karam Salon', '', NULL, '2020-11-04 17:33:55'),
(6, 'USR20111859603183857', '', '', 7, '2020-11-18 16:55:59'),
(7, 'USR20112845880136000', '', '', NULL, '2020-11-28 13:34:46'),
(8, 'USR20113017D5A3D2361', '', '', NULL, '2020-11-29 22:46:17'),
(9, 'USR20113032CFFE01912', '', '', NULL, '2020-11-29 22:46:32'),
(10, 'USR20113003979271559', '', '', 8, '2020-11-29 22:49:03'),
(11, 'USR20113022F926AF404', '', '', NULL, '2020-11-30 00:18:22'),
(12, 'USR2011302390C12F287', 'GuyMongSHop', '', 14, '2020-11-30 00:19:23'),
(13, 'USR2011303931C8F0036', '', '', NULL, '2020-11-30 09:07:39'),
(14, 'USR20120235BEF37A435', 'Villa rosa', '', 13, '2020-12-02 13:38:35'),
(15, 'USR201204226A8776197', 'Pudo', 'Good work done', 16, '2020-12-04 04:08:22'),
(16, 'USR201204280438A2406', '', '', NULL, '2020-12-04 04:08:28'),
(17, 'USR2012041261004E180', '', '', NULL, '2020-12-04 04:43:12'),
(18, 'USR2012044843E6F9567', '', '', NULL, '2020-12-04 04:51:48'),
(19, 'USR20120439B389FB323', 'Test', 'testing', 17, '2020-12-04 06:08:39'),
(20, 'USR20120642296772445', '', '', NULL, '2020-12-05 22:44:42'),
(21, 'USR20121045236691100', '', '', NULL, '2020-12-10 13:42:45'),
(22, 'USR20121216E64D34997', '', '', NULL, '2020-12-12 03:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `shop_reviews`
--

CREATE TABLE `shop_reviews` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `review_by` varchar(20) NOT NULL,
  `points` varchar(5) NOT NULL,
  `review` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `date_time`) VALUES
(0, 'kawimid841@5y5u.com', '2020-11-28 12:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `member_since` date NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-not, 1-yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`, `token`, `user_type`, `is_active`, `member_since`, `date_time`, `email_verified`) VALUES
('USR201007511121C8222', 'Natasha', 'Singh', 'nats@test.com', '9876543210', '', '912ec803b2ce49e4a541068d495ab570', '', 3, 1, '2020-10-07', '2020-10-07 06:07:51', 0),
('USR2010095565D7CD635', 'Sara', 'Jones', 'sara@test.com', '9876543219', 'sarajones', '912ec803b2ce49e4a541068d495ab570', '', 4, 1, '2020-10-09', '2020-10-10 02:49:55', 0),
('USR2010095565D7CD677', 'Pudo', 'Admin', 'pido@admin.com', '9876543210', 'admin', '912ec803b2ce49e4a541068d495ab570', '', 1, 1, '2020-11-01', '2020-11-04 15:58:48', 0),
('USR201014065909DB041', 'test', 'business', 'test@business.com', '2234343444', '', '912ec803b2ce49e4a541068d495ab570', '', 4, 1, '2020-10-14', '2020-10-14 22:29:06', 0),
('USR2010141083F9D0624', 'Test', 'User', 'test@user.com', '6756565456', '', '912ec803b2ce49e4a541068d495ab570', '', 3, 1, '2020-10-14', '2020-10-14 22:27:10', 0),
('USR201104015C9853751', 'Kunal', '', 'kunal@test.com', '9876543210', 'kunal', '912ec803b2ce49e4a541068d495ab570', '', 2, 1, '2020-11-04', '2020-11-04 18:35:01', 0),
('USR201104111FE044153', 'Aman', '', 'akkittukk56@gmail.com', '7318206793', 'aman', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-11-04', '2020-11-04 17:08:11', 0),
('USR2011042200288F223', 'Elli', '', 'elli@test.com', '9876543210', 'elli', '912ec803b2ce49e4a541068d495ab570', '', 2, 1, '2020-11-04', '2020-11-04 17:33:22', 0),
('USR201104297698AB529', 'Ezra', 'Dail', 'ezra@test.com', '9876543210', 'ezradail', 'd41d8cd98f00b204e9800998ecf8427e', '', 5, 1, '2020-11-04', '2020-11-04 17:46:29', 0),
('USR20110431395519593', 'Raj', 'singh', 'raj@gmail.com', '7318206793', 'rajsingh', 'd41d8cd98f00b204e9800998ecf8427e', '', 5, 1, '2020-11-04', '2020-11-04 17:54:31', 0),
('USR201104392E2388882', 'Aman', 'singh', 'akkittukk@gmail.com', '7318206793', 'amansingh', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-11-04', '2020-11-04 17:07:39', 0),
('USR201104397462E4974', 'Spencer', '', 'spa@test.com', '9876543210', 'spencer', 'd41d8cd98f00b204e9800998ecf8427e', '', 5, 1, '2020-11-04', '2020-11-04 18:37:39', 0),
('USR20110449667596451', 'John', '', 'john@something.com', '9876543210', 'john', 'd41d8cd98f00b204e9800998ecf8427e', '', 2, 1, '2020-11-04', '2020-11-04 17:32:49', 0),
('USR20110455B0C5A7715', 'Karam', 'singh', 'karam@gmail.com', '9876543210', 'karamsingh', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-11-04', '2020-11-04 17:33:55', 0),
('USR20110748FBBA7E398', 'Sweta', 'Dixit', 'dixitnatasha7@gmail.com', '9876543210', 'sweta', '1f5364c58947e14f9afa445bdf1ba4d9', '', 5, 1, '2020-11-07', '2020-11-08 02:20:48', 0),
('USR201118362113D7159', 'Test', 'Man', 'Testman@gmail.com', '3476253736', 'testman', '05a671c66aefea124cc08b76ea6d30bb', '', 3, 1, '2020-11-18', '2020-11-18 15:12:36', 0),
('USR2011183828961B113', 'test', 'man', 'testman3@gmail.com', '3475334252', 'testman1', 'ca1de40c681bed5c2f3e09ef7b4078ad', '', 3, 1, '2020-11-18', '2020-11-18 16:45:38', 0),
('USR201118468FFAD8699', 'Test', 'Test', 'Testman2@gmail.com', '3472649576', 'testtest', '847a33644e74d2e01e53009ed79e8fe3', '', 4, 1, '2020-11-18', '2020-11-18 15:15:46', 0),
('USR20111859603183857', 'Test', 'Test', 'testman4@gmail.com', '3475624116', 'testtest1', 'ca1de40c681bed5c2f3e09ef7b4078ad', '', 4, 1, '2020-11-18', '2020-11-18 16:55:59', 0),
('USR201128289CBD8D373', 'test', 'test', 'kawimid841@5y5u.com', '4325325236', 'testtest12', '5e9d11a14ad1c8dd77e98ef9b53fd1ba', '', 3, 1, '2020-11-28', '2020-11-28 11:48:28', 0),
('USR20112842FFA364378', 'Victoria ', 'Campbell ', ' Vcampbell595@gmail.com', '3473056741', 'victoria campbell ', 'a77c46495c149e95bef81160d1ad3781', '', 3, 1, '2020-11-28', '2020-11-28 12:11:42', 0),
('USR20112845880136000', 'testssd', 'gsdg', 'valerie87@fxsuppose.com', '4363634436', 'testssdgsdg', '5f4dcc3b5aa765d61d8327deb882cf99', '', 4, 1, '2020-11-28', '2020-11-28 13:34:46', 0),
('USR201128510CA07B667', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier12', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 0),
('USR2011285127CD9B685', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier123', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 0),
('USR20112851696DB6622', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 0),
('USR20112851AB26CD824', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier1234', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 0),
('USR20112851CCEDD7646', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier1', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 0),
('USR20112851DBB93F860', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier12345', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 0),
('USR2011291268343F068', 'Xavier', 'Campbell', 'xcampbell13@gmail.com', '3472770176', 'xaviercampbell', '4354f41f809d5f0f4400a981632c760b', '', 3, 1, '2020-11-29', '2020-11-29 10:43:12', 0),
('USR2011292151EE6B452', 'Keys ', 'Mugen', 'KeysMguen@gmail.com', '3472384230', 'keys mugen', '5f4dcc3b5aa765d61d8327deb882cf99', '', 3, 1, '2020-11-29', '2020-11-29 13:47:21', 0),
('USR20112937372A09111', 'Talbor', 'Campbell', 'umicampbell@gmail.com', '3475960368', 'talborcampbell', '987c4553cf85d85694e8c0f446caa5fe', '', 3, 1, '2020-11-29', '2020-11-28 20:49:37', 1),
('USR20112948D4A623132', 'L', 'P', 'Missl820@gmail.com', '6465845057', 'lp', 'bae1d7cafbbe2c651935cf9ad9acd0e7', '', 3, 1, '2020-11-29', '2020-11-28 20:44:48', 0),
('USR20113001B1AA7F830', 'Guy MOng', 'Moody', 'pamisad432@5y5u.com', '9585715359', 'guy mongmoody', '6ee6049995899834fd2f8d7f12b28bdf', '', 3, 1, '2020-11-30', '2020-11-29 22:15:01', 0),
('USR20113003979271559', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', '9585715359', 'coriya1837@5y5u.comcoriya1837@5y5u.com12', '945b5c301350fa0f18ddeff739d78e41', '', 4, 1, '2020-11-30', '2020-11-29 22:49:03', 0),
('USR20113004DB9AA3331', 'Octavia', 'Campbell', 'Octavia.campbell25@gmail.com', '3478693339', 'octaviacampbell', 'f7ff7386bc043fe08e81a8f2ac9e51ba', '', 3, 1, '2020-11-30', '2020-11-30 10:47:04', 0),
('USR20113017D5A3D2361', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', '9585715359', 'coriya1837@5y5u.comcoriya1837@5y5u.com', '945b5c301350fa0f18ddeff739d78e41', '', 4, 1, '2020-11-30', '2020-11-29 22:46:17', 0),
('USR20113022F926AF404', 'ritesh', 'KUMAR', 'kokejo9572@ofdow.com', '9999999999', 'riteshkumar', '8905069629037ddd1651ce255ed5ca42', '', 4, 1, '2020-11-30', '2020-11-30 00:18:22', 0),
('USR2011302390C12F287', 'Guy MOng', 'Moody', 'vikoc13261@58as.com', '9585715359', 'guymongmoody1', 'a249934be78947e1df46dcb92ee8b7b6', '', 4, 1, '2020-11-30', '2020-11-30 00:19:23', 0),
('USR20113032CFFE01912', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', '9585715359', 'coriya1837@5y5u.comcoriya1837@5y5u.com1', '945b5c301350fa0f18ddeff739d78e41', '', 4, 1, '2020-11-30', '2020-11-29 22:46:32', 0),
('USR2011303931C8F0036', 'Ipad', 'Test2', 'IpadTest2@gmail.com', '4355683578', 'ipadtest2', '5f4dcc3b5aa765d61d8327deb882cf99', '', 4, 1, '2020-11-30', '2020-11-30 09:07:39', 0),
('USR201130427FD6C2087', 'Ipad', 'Test', 'TestIpad@gmail.com', '3463563456', 'ipadtest', '5f4dcc3b5aa765d61d8327deb882cf99', '', 3, 1, '2020-11-30', '2020-11-30 09:05:42', 0),
('USR20113043636E4C003', 'Israel', 'Arni', 'Israeltaveras0709@gmail.com', '3479328668', 'israelarni', '24acfe3a60a139ab847b2de59069c38f', '', 3, 1, '2020-11-30', '2020-11-30 14:33:43', 0),
('USR201130436D203B952', 'Israel', 'Arni', 'Israeltaveras0709@gmail.com', '3479328668', 'israelarni1', '24acfe3a60a139ab847b2de59069c38f', '', 3, 1, '2020-11-30', '2020-11-30 14:33:43', 0),
('USR20113047B90798086', 'Bradley', 'Cherry', 'Bcherry516@gmail.com', '9294445997', 'bradleycherry', 'a7309432c664ba9a54b53e41c6edfa0c', '', 3, 1, '2020-11-30', '2020-11-30 16:50:47', 0),
('USR20113053364765791', 'Sasha', 'Fisher', 'ms.sashabillings@gmail.com', '3478619510', 'sashafisher', '19a9c6942364b5bad4bd4d7f3ef9a1e2', '', 3, 1, '2020-11-30', '2020-11-30 08:04:53', 0),
('USR2011305555614E120', 'Sasha', 'Fisher', 'ms.sashabillings@gmail.com', '3478619510', 'sashafisher1', '19a9c6942364b5bad4bd4d7f3ef9a1e2', '', 3, 1, '2020-11-30', '2020-11-30 08:04:55', 0),
('USR20113058DBBD3F758', 'Ayodele ', 'Campbell ', 'campbellayodele2@gmail.com', '3475221986', 'ayodele campbell ', 'f649954ad4f5a4e734deaa7cc0a61572', '', 3, 1, '2020-11-30', '2020-11-29 20:14:58', 0),
('USR20120125A5D18F805', '', '', '', '', '1', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-01', '2020-11-30 21:10:25', 0),
('USR20120127C7E550784', '', '', '', '', '12', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-01', '2020-11-30 21:10:27', 0),
('USR201201284C74FC206', '', '', '', '', '123', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-01', '2020-11-30 21:10:28', 0),
('USR2012013603D69C027', 'Susan', 'Mary', 'susan.mary98@gmail.com', '0708408711', 'susanmary', 'd0a594ba68e6553483514c7d7656a549', '', 3, 1, '2020-12-01', '2020-11-30 21:13:36', 0),
('USR20120235BEF37A435', 'Idris', 'Scott', 'Ishbondzy@gmail.com', '7186785489', 'idrisscott', 'c6cae6281fc47aaef8faac48181bec58', '', 4, 1, '2020-12-02', '2020-12-02 13:38:35', 0),
('USR20120341D1769C167', 'Rafael', 'Moreno', 'ralphsc09@gmail.com', '3475456000', 'rafaelmoreno', '9062aacff3ebd47d9f724715472e72b0', '', 3, 1, '2020-12-03', '2020-12-03 12:27:41', 0),
('USR2012040032D21F727', 'Fatima', 'Morris', 'hezaf@mailinator.com', ' 1 (946) 18', 'fatimamorris', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:00', 0),
('USR20120400FCA2BA302', 'Lewis', 'Gross', 'jipaka@mailinator.com', ' 1 (367) 90', 'lewisgross', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', 3, 1, '2020-12-04', '2020-12-03 22:31:00', 0),
('USR2012041261004E180', 'rashedur', 'roni', 'neemkit@gmail.com', '016124160', 'rashedurroni', '34320d74a9acce1a895009ead425896c', '', 4, 1, '2020-12-04', '2020-12-04 04:43:12', 0),
('USR20120413429F05973', 'kiran', 'kundu', 'kiran@meliodus.org', '447700000', 'kirankundu', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2020-12-04', '2020-12-03 23:41:13', 0),
('USR20120415846F36751', 'kiran', 'kundu', 'kiran@meliodus.org', '447700000', 'kirankundu1', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2020-12-04', '2020-12-03 23:41:15', 0),
('USR20120419A17091918', 'Fatima', 'Morris', 'hezaf@mailinator.com', '1 1 (784) 4', 'fatimamorris1', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:19', 0),
('USR201204226A8776197', 'Waqas ', 'Farid ', 'Waqasfarid1122@gmail.com ', '3085299126', 'waqasfarid', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2020-12-04', '2020-12-04 04:08:22', 0),
('USR201204263987A6934', '', '', '', '', '1234', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-04', '2020-12-04 04:06:26', 0),
('USR201204273875AD078', 'Fatima', 'Morris', 'hezaf@mailinator.com', '', 'fatimamorris12', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:27', 0),
('USR201204280438A2406', 'Waqas', 'Farid', 'Waqasfarid1122@gmail.com ', '3085299126', 'waqasfarid1', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2020-12-04', '2020-12-04 04:08:28', 0),
('USR20120433BA330B910', 'Fatima', 'Morris', 'hezaf@mailinator.com', '', 'fatimamorris123', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:33', 0),
('USR20120439B389FB323', 'Waqas', 'Ahmad', 'waqas123@gmail.com', '3652666666', 'waqasahmad', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2020-12-04', '2020-12-04 06:08:39', 0),
('USR2012044843E6F9567', '', '', '', '', '12345', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-12-04', '2020-12-04 04:51:48', 0),
('USR201205276923CF578', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:27', 0),
('USR2012053337AF06215', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell1', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:33', 0),
('USR2012053340FC5F646', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell12', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:33', 0),
('USR20120535A6FC23493', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell123', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:35', 0),
('USR2012053602938B149', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell1234', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:36', 0),
('USR20120536CA415F440', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell12345', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:36', 0),
('USR2012055871A4DC843', 'Daniel', 'Gallagher', 'dgallagher1806@gmail.com', '6312202562', 'danielgallagher1', '6b1979118de4d92fabfc6a5dd1a50efd', '', 3, 1, '2020-12-05', '2020-12-04 17:46:58', 0),
('USR20120558BEE1BC173', 'Daniel', 'Gallagher', 'dgallagher1806@gmail.com', '6312202562', 'danielgallagher', '6b1979118de4d92fabfc6a5dd1a50efd', '', 3, 1, '2020-12-05', '2020-12-04 17:46:58', 0),
('USR20120634E4B1F9622', '', '', '', '', '123456', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:34', 0),
('USR201206350202D4968', '', '', '', '', '12345678', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:35', 0),
('USR20120635F73C82666', '', '', '', '', '1234567', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:35', 0),
('USR2012063631BA64629', '', '', '', '', '12345678910', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:36', 0),
('USR20120636347B2D332', '', '', '', '', '123456789', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:36', 0),
('USR20120642296772445', 'Michaela', 'Hernandez', 'michaelahernandez485@gmail.com', '2014639243', 'michaelahernandez', '04638869709aa0b5aeec5920233a2ebc', '', 4, 1, '2020-12-06', '2020-12-05 22:44:42', 0),
('USR20120746063F33486', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:46', 0),
('USR20120747FD14C3649', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine1', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:47', 0),
('USR201207480991C9172', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine12', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:48', 0),
('USR20120748351082578', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine123', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:48', 0),
('USR201207487290BB883', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine1234', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:48', 0),
('USR2012074995E39E747', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine12345', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:49', 0),
('USR201207516F5A23141', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine123456', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:51', 0),
('USR20120751815610637', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine1234567', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:51', 0),
('USR20120808817A6E536', 'Renair', 'Amin', 'renairamin@gmail.com', '2679741896', 'renairamin', '78b9d80b96d5b50648dff43ca4f29f29', '', 3, 1, '2020-12-08', '2020-12-08 12:10:08', 0),
('USR201208408E8D8A933', 'himanshu', 'gumber', 'himanshu_gumber@esferasoft.com', '8054517660', 'himanshugumber', '843f504c141b3276c5bba109737e9395', '', 3, 1, '2020-12-08', '2020-12-07 22:44:40', 0),
('USR201208550ECE67638', 'sun', 'sreedhar', 'sidhusree09@gmail.com', '9879852681', 'sunsreedhar', 'aa7791e8d89b870652cfc45dd8fedf6f', '', 3, 1, '2020-12-08', '2020-12-08 11:01:55', 0),
('USR20120902E56742722', 'Shauna', 'Fearon', 'shandear@icloud.com', '9295009238', 'shaunafearon1', '262c27f50101cbf48bede227e65fd547', '', 3, 1, '2020-12-09', '2020-12-09 15:26:02', 0),
('USR20120918E9A628691', 'Ashley ', 'Sena ', 'gomeza1203@yahoo.com', '9172916460', 'ashley sena ', 'bb5e7ecba22c4253b13462fa809973b7', '', 3, 1, '2020-12-09', '2020-12-08 17:37:18', 0),
('USR201209403B9086447', 'Matthew', 'Moore', 'mattmoore2203@yahoo.com', '9178215255', 'matthewmoore', '20804cf579cad8d50a263c08ddd3baf2', '', 3, 1, '2020-12-09', '2020-12-09 15:48:40', 0),
('USR201209439346F6375', 'Shauna', 'Fearon', 'shanicloud.com', '9295009238', 'shaunafearon', '262c27f50101cbf48bede227e65fd547', '', 3, 1, '2020-12-09', '2020-12-09 15:25:43', 0),
('USR20121019C997E6312', 'Uzair', 'Ahmed', 'rajauzair273@gmail.com', '3179520498', 'uzairahmed', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-10', '2020-12-10 13:21:19', 0),
('USR20121045236691100', 'Sara marie ', 'Ndrin ', 'sarabluethestylist@gmail.com', '6315422847', 'sara marie ndrin ', 'dbf7595cf0921de0e27e3f5a3d45643c', '', 4, 1, '2020-12-10', '2020-12-10 13:42:45', 0),
('USR20121202A37EC2784', 'ritesh', 'KUMAR', 'sexapim598@menece.com', '9999999999', 'riteshkumar1', '70784fdba02d6bd4903ddc92194a3ee5', '', 3, 1, '2020-12-12', '2020-12-12 00:12:02', 0),
('USR20121216E64D34997', 'ritesh', 'hhb', 'jokox67395@sdysofa.com', '9999999999', 'riteshhhb', 'ea3a4e0d97d51bf87f02e9555d3afd29', '', 4, 1, '2020-12-12', '2020-12-12 03:29:17', 1),
('USR2012122927845F814', 'ritesh', 'KUMAR', 'pavoja4149@sdysofa.com', '9999999999', 'riteshkumar12', 'e8bd66612a3600b5782c6e3db4c6b2cd', '', 3, 1, '2020-12-12', '2020-12-12 03:36:29', 1),
('USR201212544C6038968', 'Rashid', 'Rayhan', 'rashidupwork2@gmail.com', ' 880190437', 'rashidrayhan', '9e116a3ac10c5dccd403b8d0d716339f', '', 3, 1, '2020-12-12', '2020-12-12 14:55:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `user_id` varchar(20) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`user_id`, `file_name`) VALUES
('USR201007511121C8222', 'IMG2011173809B845658.jpg'),
('USR2010095565D7CD635', 'IMG20111846BFEB43139.jpeg'),
('USR2010095565D7CD677', ''),
('USR201014065909DB041', ''),
('USR2010141083F9D0624', ''),
('USR201104015C9853751', ''),
('USR201104111FE044153', ''),
('USR2011042200288F223', ''),
('USR201104297698AB529', ''),
('USR20110431395519593', ''),
('USR201104392E2388882', ''),
('USR201104397462E4974', ''),
('USR20110449667596451', ''),
('USR20110455B0C5A7715', ''),
('USR201107120CA97B078', ''),
('USR2011071510B3F6700', ''),
('USR201107444368D5068', ''),
('USR20110748FBBA7E398', 'IMG20110745D0C453151.png'),
('USR20110749E009FF021', ''),
('USR201118362113D7159', ''),
('USR2011183828961B113', ''),
('USR201118468FFAD8699', ''),
('USR20111859603183857', ''),
('USR201128289CBD8D373', ''),
('USR20112842FFA364378', ''),
('USR20112845880136000', ''),
('USR201128510CA07B667', ''),
('USR2011285127CD9B685', ''),
('USR20112851696DB6622', ''),
('USR20112851AB26CD824', ''),
('USR20112851CCEDD7646', ''),
('USR20112851DBB93F860', ''),
('USR2011291268343F068', ''),
('USR2011292151EE6B452', ''),
('USR20112937372A09111', ''),
('USR20112948D4A623132', ''),
('USR20113001B1AA7F830', ''),
('USR20113003979271559', 'IMG20113052F3FED4867.jpg'),
('USR20113004DB9AA3331', ''),
('USR20113017D5A3D2361', ''),
('USR20113022F926AF404', ''),
('USR2011302390C12F287', 'IMG20113026E97902935.jpg'),
('USR20113032CFFE01912', ''),
('USR2011303931C8F0036', ''),
('USR201130427FD6C2087', ''),
('USR20113043636E4C003', ''),
('USR201130436D203B952', ''),
('USR20113047B90798086', ''),
('USR20113053364765791', ''),
('USR2011305555614E120', ''),
('USR20113058DBBD3F758', ''),
('USR20120125A5D18F805', ''),
('USR20120127C7E550784', ''),
('USR201201284C74FC206', ''),
('USR2012013603D69C027', ''),
('USR20120235BEF37A435', 'IMG201202187A868E106.jpg'),
('USR20120341D1769C167', ''),
('USR2012040032D21F727', ''),
('USR20120400FCA2BA302', ''),
('USR2012041261004E180', ''),
('USR20120413429F05973', ''),
('USR20120415846F36751', ''),
('USR20120419A17091918', ''),
('USR201204226A8776197', ''),
('USR201204263987A6934', ''),
('USR201204273875AD078', ''),
('USR201204280438A2406', ''),
('USR20120433BA330B910', ''),
('USR20120439B389FB323', ''),
('USR2012044843E6F9567', ''),
('USR201205276923CF578', ''),
('USR2012053337AF06215', ''),
('USR2012053340FC5F646', ''),
('USR20120535A6FC23493', ''),
('USR2012053602938B149', ''),
('USR20120536CA415F440', ''),
('USR2012055871A4DC843', ''),
('USR20120558BEE1BC173', ''),
('USR20120634E4B1F9622', ''),
('USR201206350202D4968', ''),
('USR20120635F73C82666', ''),
('USR2012063631BA64629', ''),
('USR20120636347B2D332', ''),
('USR20120642296772445', ''),
('USR20120746063F33486', ''),
('USR20120747FD14C3649', ''),
('USR201207480991C9172', ''),
('USR20120748351082578', ''),
('USR201207487290BB883', ''),
('USR2012074995E39E747', ''),
('USR201207516F5A23141', ''),
('USR20120751815610637', ''),
('USR20120808817A6E536', ''),
('USR201208408E8D8A933', ''),
('USR201208550ECE67638', ''),
('USR20120902E56742722', ''),
('USR20120918E9A628691', ''),
('USR201209403B9086447', ''),
('USR201209439346F6375', ''),
('USR20121019C997E6312', ''),
('USR20121045236691100', ''),
('USR20121202A37EC2784', ''),
('USR20121216E64D34997', ''),
('USR2012122927845F814', ''),
('USR201212544C6038968', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carbase`
--
ALTER TABLE `carbase`
  ADD PRIMARY KEY (`carbase_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_type`
--
ALTER TABLE `notification_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `related_carbase`
--
ALTER TABLE `related_carbase`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `shop_reviews`
--
ALTER TABLE `shop_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_type`
--
ALTER TABLE `notification_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop_reviews`
--
ALTER TABLE `shop_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
