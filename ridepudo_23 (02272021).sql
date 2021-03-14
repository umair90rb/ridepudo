-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2021 at 11:35 AM
-- Server version: 5.7.33
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
(17, '', '', '', '', NULL, NULL, '2020-12-04 06:10:20'),
(18, '381 Baltic street ', 'Brooklyn', 'New york', '12201', NULL, NULL, '2020-12-12 16:40:48'),
(19, '381 Baltic street ', 'Brooklyn', 'New york', '12201', NULL, NULL, '2020-12-12 16:48:07'),
(20, '', '', '', '', NULL, NULL, '2020-12-14 06:08:52'),
(21, '', '', '', '', NULL, NULL, '2021-01-05 07:53:09'),
(22, '', '', '', '', NULL, NULL, '2021-01-05 07:53:20'),
(23, '', '', '', '', NULL, NULL, '2021-01-05 07:57:41'),
(24, '', '', '', '', NULL, NULL, '2021-01-05 08:21:37'),
(25, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2021-01-08 14:10:17'),
(26, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2021-01-09 04:48:06'),
(27, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2021-01-09 04:48:26'),
(28, 'delhi', 'delhi', 'delhi', '110075', NULL, NULL, '2021-01-09 04:48:57'),
(29, '', '', '', '', NULL, NULL, '2021-01-09 05:16:10'),
(30, 'Delhi', 'delhi', 'delhi', '110076', NULL, NULL, '2021-01-09 05:17:28'),
(31, 'Delhi', 'delhi', 'delhi', '110076', NULL, NULL, '2021-01-09 05:20:30'),
(32, 'sasa', 'sas', 'sas', '12323', NULL, NULL, '2021-01-22 13:28:33'),
(33, 'sasa', 'sas', 'sas', '12323', NULL, NULL, '2021-01-22 13:29:15'),
(34, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 20:45:11'),
(35, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 20:47:08'),
(36, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 21:16:31'),
(37, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 21:17:07'),
(38, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 21:21:13'),
(39, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 21:23:12'),
(40, ' 21914 Merrick Blvd', 'Queens', 'NY ', '11413', NULL, NULL, '2021-01-26 21:27:51'),
(41, '', '', '', '', NULL, NULL, '2021-02-23 17:12:17');

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
(20, 14, 'shop', 'rp_assets/Images/shop_images/USR20120235BEF37A435', 'IMG20120220B61261611.jpg', '2020-12-02 13:50:20'),
(21, 23, 'shop', 'rp_assets/Images/shop_images/USR20121203B1C491447', 'IMG20121207DD9A12203.jpg', '2020-12-12 16:42:07'),
(22, 23, 'shop', 'rp_assets/Images/shop_images/USR20121203B1C491447', 'IMG2012121504299F588.jpg', '2020-12-12 16:47:15'),
(23, 38, 'shop', 'rp_assets/Images/shop_images/USR21010917605B23662', 'IMG21010950DD8932205.jpg', '2021-01-09 05:16:50'),
(24, 40, 'shop', 'rp_assets/Images/shop_images/USR21012237450B9C334', 'IMG21012245AC913A478.png', '2021-01-22 13:28:45'),
(25, 13, 'shop', 'rp_assets/Images/shop_images/USR2011303931C8F0036', 'IMG21012725FE33C1695.jpg', '2021-01-26 20:45:25'),
(26, 13, 'shop', 'rp_assets/Images/shop_images/USR2011303931C8F0036', 'IMG2101273109064D776.jpg', '2021-01-26 20:45:31'),
(27, 13, 'shop', 'rp_assets/Images/shop_images/USR2011303931C8F0036', 'IMG2101274070D485197.jpg', '2021-01-26 20:45:40'),
(28, 13, 'shop', 'rp_assets/Images/shop_images/USR2011303931C8F0036', 'IMG21012746174629599.jpg', '2021-01-26 20:45:46'),
(30, 13, 'shop', 'rp_assets/Images/shop_images/USR2011303931C8F0036', 'IMG21012759CA2AE2331.jpg', '2021-01-26 20:45:59'),
(31, 13, 'shop', 'rp_assets/Images/shop_images/USR2011303931C8F0036', 'IMG2101270729458F907.jpg', '2021-01-26 20:46:07'),
(32, 52, 'shop', 'rp_assets/Images/shop_images/USR210223442E05D3651', 'IMG210224131D9876958.jpeg', '2021-02-23 17:05:14');

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
(8, 19, '', '', '', 0.00, '2020-12-04 06:09:06'),
(9, 23, 'Loc maintenance ', 'Shampoo,scalp massage,loc retighten', '30/120', 0.00, '2020-12-12 16:44:52'),
(10, 23, 'Loc styling', '', '30/120', 0.00, '2020-12-12 16:45:36'),
(11, 38, 'test', 'bhhhb', '120', 100.00, '2021-01-09 05:21:18'),
(12, 40, 'fsdfs', 'sadasda', '123', 3232.00, '2021-01-22 13:29:06'),
(13, 13, 'Brush Back w/ fade', 'If your thick hair is tough to tame, the brush back will give you control and bring your hair to life. By creating short layers on top to bring down the bulk and clipper cutting the sides and back, a versatile style is created that’s easy to maintain. ', '20', 14.00, '2021-01-26 20:50:37'),
(14, 13, 'Mohawk fade', 'Long on top, tighter on the sides, the mohawk fade is an on-trend style that keeps going strong. ', '35', 30.00, '2021-01-26 20:51:31'),
(15, 13, 'Clipper cut w/ brush back', 'A go-to haircut that never goes out of style, the clipper cut is a classic. An easy-to-manage cut for the modern, busy guy, it requires very little styling to keep it looking sharp. ', '30', 25.00, '2021-01-26 20:53:45'),
(16, 52, 'Men’s haircut', '', '60', 40.00, '2021-02-23 17:06:37'),
(17, 52, 'Men’s haircut and shave', '', '75', 55.00, '2021-02-23 17:07:28'),
(18, 52, 'VIP EXPERIENCE ', '', '75', 85.00, '2021-02-23 17:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `term_and_cond` text,
  `address_id` int(11) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `user_id`, `shop_name`, `details`, `term_and_cond`, `address_id`, `date_time`) VALUES
(3, 'USR201104111FE044153', '', '', NULL, NULL, '2020-11-04 17:08:11'),
(4, 'USR20110455B0C5A7715', 'Karam Salon', '', NULL, NULL, '2020-11-04 17:33:55'),
(6, 'USR20111859603183857', '', '', NULL, 7, '2020-11-18 16:55:59'),
(7, 'USR20112845880136000', '', '', NULL, NULL, '2020-11-28 13:34:46'),
(8, 'USR20113017D5A3D2361', '', '', NULL, NULL, '2020-11-29 22:46:17'),
(9, 'USR20113032CFFE01912', '', '', NULL, NULL, '2020-11-29 22:46:32'),
(10, 'USR20113003979271559', '', '', NULL, 8, '2020-11-29 22:49:03'),
(11, 'USR20113022F926AF404', '', '', NULL, NULL, '2020-11-30 00:18:22'),
(12, 'USR2011302390C12F287', 'GuyMongSHop', '43uyreueruer rer rehsr hs he he h', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 28, '2020-11-30 00:19:23'),
(13, 'USR2011303931C8F0036', 'First Class Barbers', 'When it comes to physical maintenance, many men simply don’t know the extent of the services available to them. At The Men’s Room Barber Shop, we offer men’s haircuts, styling, straight razor shaves, beard and mustache trims, hair coloring, and so much more to keep guys looking their best.', 'For all enquires please get in touch with us through live chat 9am-5pm are committed to protecting, your privacy. The information you provide will only be used for the purpose of providing your shopping experience and processing and fulfilling your order.\r\n\r\nFor the purpose of processing and fulfilling an order, First Class Barbers need to know your name, e-mail address, invoice address, delivery address (if different from the invoice address), credit card number and security number, expiry date and address at which the credit card is registered if different from the invoice address.\r\nAll details are stored in a separate secure server to the web server. The on-line processing of payments are encrypted and take place through our secure server. Details of the Secure Server Certificate may be viewed via the Secure Site logo on the home page.\r\n', 40, '2020-11-30 09:07:39'),
(14, 'USR20120235BEF37A435', 'Villa rosa', '', NULL, 13, '2020-12-02 13:38:35'),
(15, 'USR201204226A8776197', '', 'Good work done', NULL, 16, '2020-12-04 04:08:22'),
(16, 'USR201204280438A2406', '', '', NULL, NULL, '2020-12-04 04:08:28'),
(17, 'USR2012041261004E180', '', '', NULL, NULL, '2020-12-04 04:43:12'),
(18, 'USR2012044843E6F9567', '', '', NULL, NULL, '2020-12-04 04:51:48'),
(19, 'USR20120439B389FB323', 'Test', 'testing', NULL, 17, '2020-12-04 06:08:39'),
(20, 'USR20120642296772445', '', '', NULL, NULL, '2020-12-05 22:44:42'),
(21, 'USR20121045236691100', '', '', NULL, NULL, '2020-12-10 13:42:45'),
(22, 'USR20121216E64D34997', '', '', NULL, NULL, '2020-12-12 03:29:17'),
(24, 'USR201213407A17BE874', '', '', NULL, NULL, '2020-12-12 23:08:40'),
(25, 'USR20121421A26528599', '', '', NULL, NULL, '2020-12-13 22:10:21'),
(26, 'USR20121403F0292A314', 'Keasean', '', NULL, 20, '2020-12-14 03:58:03'),
(27, 'USR2012140780CA5B683', '', '', NULL, NULL, '2020-12-14 03:58:07'),
(28, 'USR20121416CB3FD4940', '', '', NULL, NULL, '2020-12-14 04:02:17'),
(29, 'USR2012143216AF3C822', '', '', NULL, NULL, '2020-12-14 04:02:32'),
(30, 'USR20121437087C91675', '', '', NULL, NULL, '2020-12-14 04:03:37'),
(31, 'USR2012145307D896998', '', '', NULL, NULL, '2020-12-14 04:03:54'),
(32, 'USR20121441635B38402', '', '', NULL, NULL, '2020-12-14 04:07:41'),
(33, 'USR201215523C841F705', '', '', NULL, NULL, '2020-12-15 13:12:52'),
(34, 'USR20121559B49AC2893', '', '', NULL, NULL, '2020-12-15 13:12:59'),
(35, 'USR20121640FFDBA7486', '', '', NULL, NULL, '2020-12-15 17:46:40'),
(36, 'USR20121640C4981A469', '', '', NULL, NULL, '2020-12-16 10:27:40'),
(37, 'USR210105557F64FC191', '', 'bhbh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 24, '2021-01-05 07:20:55'),
(38, 'USR21010917605B23662', 'GuyMongSHop', 'fdfdf', 'sdfds', 31, '2021-01-09 05:15:17'),
(39, 'USR21010926A87031511', '', '', NULL, NULL, '2021-01-09 05:15:26'),
(40, 'USR21012237450B9C334', 'sam', 'asasa', 'cfsdfsfsd', 33, '2021-01-22 13:26:37'),
(41, 'USR2101244897CE50078', '', '', NULL, NULL, '2021-01-24 10:27:48'),
(42, 'USR210124539E0BDB782', '', '', NULL, NULL, '2021-01-24 10:27:53'),
(43, 'USR2101240868594C526', '', '', NULL, NULL, '2021-01-24 10:28:08'),
(44, 'USR2101241569DA4D095', '', '', NULL, NULL, '2021-01-24 12:13:15'),
(45, 'USR21012434A15042842', 'sam', '', NULL, NULL, '2021-01-24 12:13:34'),
(46, 'USR21012454D84995369', '', '', NULL, NULL, '2021-01-24 12:38:54'),
(47, 'USR21012458103704552', '', '', NULL, NULL, '2021-01-24 12:38:58'),
(48, 'USR2102204614261D325', '', '', NULL, NULL, '2021-02-20 01:46:46'),
(49, 'USR2102204896FA3B773', '', '', NULL, NULL, '2021-02-20 01:46:48'),
(50, 'USR21022049E0096C248', '', '', NULL, NULL, '2021-02-20 01:46:49'),
(51, 'USR21022049AB5E89680', '', '', NULL, NULL, '2021-02-20 01:46:49'),
(52, 'USR210223442E05D3651', '', '', '', 41, '2021-02-23 16:57:47'),
(53, 'USR21022351F07A27651', '', '', NULL, NULL, '2021-02-23 16:57:51'),
(54, 'USR210223150E84C9261', '', '', NULL, NULL, '2021-02-23 16:59:15');

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
(1, 'kawimid841@5y5u.com', '2020-11-28 12:08:57'),
(2, 'vhh@vhv.com', '2020-12-14 08:25:29'),
(3, 'pierap1222@outlook.com', '2021-02-05 20:12:42'),
(4, 'mccleary11@yahoo.com', '2021-02-12 04:53:33');

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
('USR201007511121C8222', 'Natasha', 'Singh', 'nats@test.com', '9876543210', '', '912ec803b2ce49e4a541068d495ab570', '', 3, 1, '2020-10-07', '2020-10-07 06:07:51', 1),
('USR2010095565D7CD635', 'Sara', 'Jones', 'sara@test.com', '9876543219', 'sarajones', '912ec803b2ce49e4a541068d495ab570', '', 4, 1, '2020-10-09', '2020-10-10 02:49:55', 1),
('USR2010095565D7CD677', 'Pudo', 'Admin', 'pido@admin.com', '9876543210', 'admin', '912ec803b2ce49e4a541068d495ab570', '', 1, 1, '2020-11-01', '2020-11-04 15:58:48', 1),
('USR201014065909DB041', 'test', 'business', 'test@business.com', '2234343444', '', '912ec803b2ce49e4a541068d495ab570', '', 4, 1, '2020-10-14', '2020-10-14 22:29:06', 1),
('USR2010141083F9D0624', 'Test', 'User', 'test@user.com', '6756565456', '', '912ec803b2ce49e4a541068d495ab570', '', 3, 1, '2020-10-14', '2020-10-14 22:27:10', 1),
('USR201104015C9853751', 'Kunal', '', 'kunal@test.com', '9876543210', 'kunal', '912ec803b2ce49e4a541068d495ab570', '', 2, 1, '2020-11-04', '2020-11-04 18:35:01', 1),
('USR201104111FE044153', 'Aman', '', 'akkittukk56@gmail.com', '7318206793', 'aman', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-11-04', '2020-11-04 17:08:11', 1),
('USR2011042200288F223', 'Elli', '', 'elli@test.com', '9876543210', 'elli', '912ec803b2ce49e4a541068d495ab570', '', 2, 1, '2020-11-04', '2020-11-04 17:33:22', 1),
('USR201104297698AB529', 'Ezra', 'Dail', 'ezra@test.com', '9876543210', 'ezradail', 'd41d8cd98f00b204e9800998ecf8427e', '', 5, 1, '2020-11-04', '2020-11-04 17:46:29', 1),
('USR20110431395519593', 'Raj', 'singh', 'raj@gmail.com', '7318206793', 'rajsingh', 'd41d8cd98f00b204e9800998ecf8427e', '', 5, 1, '2020-11-04', '2020-11-04 17:54:31', 1),
('USR201104392E2388882', 'Aman', 'singh', 'akkittukk@gmail.com', '7318206793', 'amansingh', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-11-04', '2020-11-04 17:07:39', 1),
('USR201104397462E4974', 'Spencer', '', 'spa@test.com', '9876543210', 'spencer', 'd41d8cd98f00b204e9800998ecf8427e', '', 5, 1, '2020-11-04', '2020-11-04 18:37:39', 1),
('USR20110449667596451', 'John', '', 'john@something.com', '9876543210', 'john', 'd41d8cd98f00b204e9800998ecf8427e', '', 2, 1, '2020-11-04', '2020-11-04 17:32:49', 1),
('USR20110455B0C5A7715', 'Karam', 'singh', 'karam@gmail.com', '9876543210', 'karamsingh', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-11-04', '2020-11-04 17:33:55', 1),
('USR20110748FBBA7E398', 'Sweta', 'Dixit', 'dixitnatasha7@gmail.com', '9876543210', 'sweta', '1f5364c58947e14f9afa445bdf1ba4d9', '', 5, 1, '2020-11-07', '2020-11-08 02:20:48', 1),
('USR201118362113D7159', 'Test', 'Man', 'Testman@gmail.com', '3476253736', 'testman', '05a671c66aefea124cc08b76ea6d30bb', '', 3, 1, '2020-11-18', '2020-11-18 15:12:36', 1),
('USR2011183828961B113', 'test', 'man', 'testman3@gmail.com', '3475334252', 'testman1', 'ca1de40c681bed5c2f3e09ef7b4078ad', '', 3, 1, '2020-11-18', '2020-11-18 16:45:38', 1),
('USR201118468FFAD8699', 'Test', 'Test', 'Testman2@gmail.com', '3472649576', 'testtest', '847a33644e74d2e01e53009ed79e8fe3', '', 4, 1, '2020-11-18', '2020-11-18 15:15:46', 1),
('USR20111859603183857', 'Test', 'Test', 'testman4@gmail.com', '3475624116', 'testtest1', 'ca1de40c681bed5c2f3e09ef7b4078ad', '', 4, 1, '2020-11-18', '2020-11-18 16:55:59', 1),
('USR201128289CBD8D373', 'test', 'test', 'kawimid841@5y5u.com', '4325325236', 'testtest12', '5e9d11a14ad1c8dd77e98ef9b53fd1ba', '', 3, 1, '2020-11-28', '2020-11-28 11:48:28', 1),
('USR20112842FFA364378', 'Victoria ', 'Campbell ', ' Vcampbell595@gmail.com', '3473056741', 'victoria campbell ', 'a77c46495c149e95bef81160d1ad3781', '', 3, 1, '2020-11-28', '2020-11-28 12:11:42', 1),
('USR20112845880136000', 'testssd', 'gsdg', 'valerie87@fxsuppose.com', '4363634436', 'testssdgsdg', '5f4dcc3b5aa765d61d8327deb882cf99', '', 4, 1, '2020-11-28', '2020-11-28 13:34:46', 1),
('USR201128510CA07B667', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier12', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 1),
('USR2011285127CD9B685', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier123', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 1),
('USR20112851696DB6622', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 1),
('USR20112851AB26CD824', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier1234', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 1),
('USR20112851CCEDD7646', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier1', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 1),
('USR20112851DBB93F860', 'janiyah', 'exavier', 'niyahexavier9@gmail.com', '8622207243', 'janiyahexavier12345', '3ba3ed7375f3b2b090d4c510efa7e1ce', '', 3, 1, '2020-11-28', '2020-11-28 13:53:51', 1),
('USR2011291268343F068', 'Xavier', 'Campbell', 'xcampbell13@gmail.com', '3472770176', 'xaviercampbell', '4354f41f809d5f0f4400a981632c760b', '', 3, 1, '2020-11-29', '2020-11-29 10:43:12', 1),
('USR2011292151EE6B452', 'Keys ', 'Mugen', 'KeysMguen@gmail.com', '3472384230', 'keys mugen', '5f4dcc3b5aa765d61d8327deb882cf99', '201213212C893C03449F848EB3A07DD73A508284052', 3, 1, '2020-11-29', '2020-11-29 13:47:21', 1),
('USR20112937372A09111', 'Talbor', 'Campbell', 'umicampbell@gmail.com', '3475960368', 'talborcampbell', '987c4553cf85d85694e8c0f446caa5fe', '', 3, 1, '2020-11-29', '2020-11-28 20:49:37', 1),
('USR20112948D4A623132', 'L', 'P', 'Missl820@gmail.com', '6465845057', 'lp', 'bae1d7cafbbe2c651935cf9ad9acd0e7', '', 3, 1, '2020-11-29', '2020-11-28 20:44:48', 1),
('USR20113001B1AA7F830', 'Guy MOng', 'Moody', 'pamisad432@5y5u.com', '9585715359', 'guy mongmoody', '6ee6049995899834fd2f8d7f12b28bdf', '', 3, 1, '2020-11-30', '2020-11-29 22:15:01', 1),
('USR20113003979271559', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', '9585715359', 'coriya1837@5y5u.comcoriya1837@5y5u.com12', '945b5c301350fa0f18ddeff739d78e41', '', 4, 1, '2020-11-30', '2020-11-29 22:49:03', 1),
('USR20113004DB9AA3331', 'Octavia', 'Campbell', 'Octavia.campbell25@gmail.com', '3478693339', 'octaviacampbell', 'f7ff7386bc043fe08e81a8f2ac9e51ba', '', 3, 1, '2020-11-30', '2020-11-30 10:47:04', 1),
('USR20113017D5A3D2361', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', '9585715359', 'coriya1837@5y5u.comcoriya1837@5y5u.com', '945b5c301350fa0f18ddeff739d78e41', '', 4, 1, '2020-11-30', '2020-11-29 22:46:17', 1),
('USR20113022F926AF404', 'ritesh', 'KUMAR', 'kokejo9572@ofdow.com', '9999999999', 'riteshkumar', '8905069629037ddd1651ce255ed5ca42', '', 4, 1, '2020-11-30', '2020-11-30 00:18:22', 1),
('USR2011302390C12F287', 'Guy MOng', 'Moody', 'vikoc13261@58as.com', '9585715359', 'guymongmoody1', 'a249934be78947e1df46dcb92ee8b7b6', '', 4, 1, '2020-11-30', '2020-11-30 00:19:23', 1),
('USR20113032CFFE01912', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', 'coriya1837@5y5u.com', '9585715359', 'coriya1837@5y5u.comcoriya1837@5y5u.com1', '945b5c301350fa0f18ddeff739d78e41', '', 4, 1, '2020-11-30', '2020-11-29 22:46:32', 1),
('USR2011303931C8F0036', 'Michael', 'Moore', 'IpadTest2@gmail.com', '4355683578', 'ipadtest2', '5f4dcc3b5aa765d61d8327deb882cf99', '', 4, 1, '2020-11-30', '2020-11-30 09:07:39', 1),
('USR201130427FD6C2087', 'Ipad', 'Test', 'TestIpad@gmail.com', '3463563456', 'ipadtest', '5f4dcc3b5aa765d61d8327deb882cf99', '', 3, 1, '2020-11-30', '2020-11-30 09:05:42', 1),
('USR20113043636E4C003', 'Israel', 'Arni', 'Israeltaveras0709@gmail.com', '3479328668', 'israelarni', '24acfe3a60a139ab847b2de59069c38f', '', 3, 1, '2020-11-30', '2020-11-30 14:33:43', 1),
('USR201130436D203B952', 'Israel', 'Arni', 'Israeltaveras0709@gmail.com', '3479328668', 'israelarni1', '24acfe3a60a139ab847b2de59069c38f', '', 3, 1, '2020-11-30', '2020-11-30 14:33:43', 1),
('USR20113047B90798086', 'Bradley', 'Cherry', 'Bcherry516@gmail.com', '9294445997', 'bradleycherry', 'a7309432c664ba9a54b53e41c6edfa0c', '', 3, 1, '2020-11-30', '2020-11-30 16:50:47', 1),
('USR20113053364765791', 'Sasha', 'Fisher', 'ms.sashabillings@gmail.com', '3478619510', 'sashafisher', '19a9c6942364b5bad4bd4d7f3ef9a1e2', '', 3, 1, '2020-11-30', '2020-11-30 08:04:53', 1),
('USR2011305555614E120', 'Sasha', 'Fisher', 'ms.sashabillings@gmail.com', '3478619510', 'sashafisher1', '19a9c6942364b5bad4bd4d7f3ef9a1e2', '', 3, 1, '2020-11-30', '2020-11-30 08:04:55', 1),
('USR20113058DBBD3F758', 'Ayodele ', 'Campbell ', 'campbellayodele2@gmail.com', '3475221986', 'ayodele campbell ', 'f649954ad4f5a4e734deaa7cc0a61572', '', 3, 1, '2020-11-30', '2020-11-29 20:14:58', 1),
('USR20120125A5D18F805', '', '', '', '', '1', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-01', '2020-11-30 21:10:25', 1),
('USR20120127C7E550784', '', '', '', '', '12', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-01', '2020-11-30 21:10:27', 1),
('USR201201284C74FC206', '', '', '', '', '123', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-01', '2020-11-30 21:10:28', 1),
('USR2012013603D69C027', 'Susan', 'Mary', 'susan.mary98@gmail.com', '0708408711', 'susanmary', 'd0a594ba68e6553483514c7d7656a549', '', 3, 1, '2020-12-01', '2020-11-30 21:13:36', 1),
('USR20120235BEF37A435', 'Idris', 'Scott', 'Ishbondzy@gmail.com', '7186785489', 'idrisscott', 'c6cae6281fc47aaef8faac48181bec58', '', 4, 1, '2020-12-02', '2020-12-02 13:38:35', 1),
('USR20120341D1769C167', 'Rafael', 'Moreno', 'ralphsc09@gmail.com', '3475456000', 'rafaelmoreno', '9062aacff3ebd47d9f724715472e72b0', '', 3, 1, '2020-12-03', '2020-12-03 12:27:41', 1),
('USR2012040032D21F727', 'Fatima', 'Morris', 'hezaf@mailinator.com', ' 1 (946) 18', 'fatimamorris', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:00', 1),
('USR20120400FCA2BA302', 'Lewis', 'Gross', 'jipaka@mailinator.com', ' 1 (367) 90', 'lewisgross', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', 3, 1, '2020-12-04', '2020-12-03 22:31:00', 1),
('USR2012041261004E180', 'rashedur', 'roni', 'neemkit@gmail.com', '016124160', 'rashedurroni', '34320d74a9acce1a895009ead425896c', '', 4, 1, '2020-12-04', '2020-12-04 04:43:12', 1),
('USR20120413429F05973', 'kiran', 'kundu', 'kiran@meliodus.org', '447700000', 'kirankundu', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2020-12-04', '2020-12-03 23:41:13', 1),
('USR20120415846F36751', 'kiran', 'kundu', 'kiran@meliodus.org', '447700000', 'kirankundu1', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2020-12-04', '2020-12-03 23:41:15', 1),
('USR20120419A17091918', 'Fatima', 'Morris', 'hezaf@mailinator.com', '1 1 (784) 4', 'fatimamorris1', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:19', 1),
('USR201204226A8776197', 'Waqas ', 'Farid ', 'Waqasfarid1122@gmail.com ', '3085299126', 'waqasfarid', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2020-12-04', '2020-12-04 04:08:22', 1),
('USR201204263987A6934', '', '', '', '', '1234', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-04', '2020-12-04 04:06:26', 1),
('USR201204273875AD078', 'Fatima', 'Morris', 'hezaf@mailinator.com', '', 'fatimamorris12', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:27', 1),
('USR201204280438A2406', 'Waqas', 'Farid', 'Waqasfarid1122@gmail.com ', '3085299126', 'waqasfarid1', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2020-12-04', '2020-12-04 04:08:28', 1),
('USR20120433BA330B910', 'Fatima', 'Morris', 'hezaf@mailinator.com', '', 'fatimamorris123', '202cb962ac59075b964b07152d234b70', '', 3, 1, '2020-12-04', '2020-12-03 22:30:33', 1),
('USR20120439B389FB323', 'Waqas', 'Ahmad', 'waqas123@gmail.com', '3652666666', 'waqasahmad', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2020-12-04', '2020-12-04 06:08:39', 1),
('USR2012044843E6F9567', '', '', '', '', '12345', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-12-04', '2020-12-04 04:51:48', 1),
('USR201205276923CF578', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:27', 1),
('USR2012053337AF06215', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell1', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:33', 1),
('USR2012053340FC5F646', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell12', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:33', 1),
('USR20120535A6FC23493', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell123', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:35', 1),
('USR2012053602938B149', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell1234', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:36', 1),
('USR20120536CA415F440', 'Buffy', 'Mitchell', 'fewalu@mailinator.com', ' 1 (585) 88', 'buffymitchell12345', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-05', '2020-12-05 07:59:36', 1),
('USR2012055871A4DC843', 'Daniel', 'Gallagher', 'dgallagher1806@gmail.com', '6312202562', 'danielgallagher1', '6b1979118de4d92fabfc6a5dd1a50efd', '', 3, 1, '2020-12-05', '2020-12-04 17:46:58', 1),
('USR20120558BEE1BC173', 'Daniel', 'Gallagher', 'dgallagher1806@gmail.com', '6312202562', 'danielgallagher', '6b1979118de4d92fabfc6a5dd1a50efd', '', 3, 1, '2020-12-05', '2020-12-04 17:46:58', 1),
('USR20120634E4B1F9622', '', '', '', '', '123456', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:34', 1),
('USR201206350202D4968', '', '', '', '', '12345678', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:35', 1),
('USR20120635F73C82666', '', '', '', '', '1234567', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:35', 1),
('USR2012063631BA64629', '', '', '', '', '12345678910', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:36', 1),
('USR20120636347B2D332', '', '', '', '', '123456789', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-06', '2020-12-05 20:13:36', 1),
('USR20120642296772445', 'Michaela', 'Hernandez', 'michaelahernandez485@gmail.com', '2014639243', 'michaelahernandez', '04638869709aa0b5aeec5920233a2ebc', '', 4, 1, '2020-12-06', '2020-12-05 22:44:42', 1),
('USR20120746063F33486', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:46', 1),
('USR20120747FD14C3649', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine1', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:47', 1),
('USR201207480991C9172', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine12', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:48', 1),
('USR20120748351082578', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine123', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:48', 1),
('USR201207487290BB883', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine1234', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:48', 1),
('USR2012074995E39E747', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine12345', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:49', 1),
('USR201207516F5A23141', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine123456', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:51', 1),
('USR20120751815610637', 'Shane', 'Narine', 'Shanenarine18@gmail.com', '3472219369', 'shanenarine1234567', '7402222e4710400ad9358831af5dd53f', '', 3, 1, '2020-12-07', '2020-12-06 20:27:51', 1),
('USR20120808817A6E536', 'Renair', 'Amin', 'renairamin@gmail.com', '2679741896', 'renairamin', '78b9d80b96d5b50648dff43ca4f29f29', '', 3, 1, '2020-12-08', '2020-12-08 12:10:08', 1),
('USR201208408E8D8A933', 'himanshu', 'gumber', 'himanshu_gumber@esferasoft.com', '8054517660', 'himanshugumber', '843f504c141b3276c5bba109737e9395', '', 3, 1, '2020-12-08', '2020-12-07 22:44:40', 1),
('USR201208550ECE67638', 'sun', 'sreedhar', 'sidhusree09@gmail.com', '9879852681', 'sunsreedhar', 'aa7791e8d89b870652cfc45dd8fedf6f', '', 3, 1, '2020-12-08', '2020-12-08 11:01:55', 1),
('USR20120902E56742722', 'Shauna', 'Fearon', 'shandear@icloud.com', '9295009238', 'shaunafearon1', '262c27f50101cbf48bede227e65fd547', '', 3, 1, '2020-12-09', '2020-12-09 15:26:02', 1),
('USR20120918E9A628691', 'Ashley ', 'Sena ', 'gomeza1203@yahoo.com', '9172916460', 'ashley sena ', 'bb5e7ecba22c4253b13462fa809973b7', '', 3, 1, '2020-12-09', '2020-12-08 17:37:18', 1),
('USR201209403B9086447', 'Matthew', 'Moore', 'mattmoore2203@yahoo.com', '9178215255', 'matthewmoore', '20804cf579cad8d50a263c08ddd3baf2', '', 3, 1, '2020-12-09', '2020-12-09 15:48:40', 1),
('USR201209439346F6375', 'Shauna', 'Fearon', 'shanicloud.com', '9295009238', 'shaunafearon', '262c27f50101cbf48bede227e65fd547', '', 3, 1, '2020-12-09', '2020-12-09 15:25:43', 1),
('USR20121019C997E6312', 'Uzair', 'Ahmed', 'rajauzair273@gmail.com', '3179520498', 'uzairahmed', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2020-12-10', '2020-12-10 13:21:19', 1),
('USR20121045236691100', 'Sara marie ', 'Ndrin ', 'sarabluethestylist@gmail.com', '6315422847', 'sara marie ndrin ', 'dbf7595cf0921de0e27e3f5a3d45643c', '', 4, 1, '2020-12-10', '2020-12-10 13:42:45', 1),
('USR20121202A37EC2784', 'ritesh', 'KUMAR', 'sexapim598@menece.com', '9999999999', 'riteshkumar1', '70784fdba02d6bd4903ddc92194a3ee5', '', 3, 1, '2020-12-12', '2020-12-12 00:12:02', 1),
('USR20121216E64D34997', 'ritesh', 'hhb', 'jokox67395@sdysofa.com', '9999999999', 'riteshhhb', 'ea3a4e0d97d51bf87f02e9555d3afd29', '', 4, 1, '2020-12-12', '2020-12-12 03:29:17', 1),
('USR2012122927845F814', 'ritesh', 'KUMAR', 'pavoja4149@sdysofa.com', '9999999999', 'riteshkumar12', 'e8bd66612a3600b5782c6e3db4c6b2cd', '', 3, 1, '2020-12-12', '2020-12-12 03:36:29', 1),
('USR201212544C6038968', 'Rashid', 'Rayhan', 'rashidupwork2@gmail.com', ' 880190437', 'rashidrayhan', '9e116a3ac10c5dccd403b8d0d716339f', '', 3, 1, '2020-12-12', '2020-12-12 14:55:54', 1),
('USR20121323BC7759222', 'Quay', 'Chambers', 'Quaychambers@yahoo.com', '6468816404', 'quaychambers', '1f8cd220203f7b2289016465a2dd2967', '', 3, 1, '2020-12-13', '2020-12-12 17:12:23', 1),
('USR201213290249FF089', 'Keasean', 'Souffrant', 'Keasean.souffrant@gmail.com', '3478223416', 'keaseansouffrant', '5e9d11a14ad1c8dd77e98ef9b53fd1ba', '', 3, 1, '2020-12-13', '2020-12-12 18:56:29', 1),
('USR201213345DAA96793', 'Keasean', 'Souffrant', 'Keasean.souffrant@gmail.com', '3478223416', 'keaseansouffrant1', '5f4dcc3b5aa765d61d8327deb882cf99', '', 3, 1, '2020-12-13', '2020-12-12 18:56:34', 1),
('USR201213407A17BE874', 'Victoria', 'J.', 'Victoriajhairsalon@gmail.com', '7187810076', 'victoriaj.', '5e9d11a14ad1c8dd77e98ef9b53fd1ba', '', 4, 1, '2020-12-13', '2020-12-12 23:08:40', 1),
('USR20121403F0292A314', 'ritesh', 'kl', 'xejex21323@febeks.com', '9999999999', 'riteshkl', '3449bbc8b19cdef17b827e5a0d4496b7', '', 4, 1, '2020-12-14', '2020-12-14 03:58:03', 1),
('USR2012140780CA5B683', 'ritesh', 'kl', 'xejex21323@febeks.com', '9999999999', 'riteshkl1', '3449bbc8b19cdef17b827e5a0d4496b7', '', 4, 1, '2020-12-14', '2020-12-14 03:58:07', 0),
('USR20121416CB3FD4940', 'vhv', 'vhh', 'cemic47807@econeom.com', '9999999999', 'vhvvhh', '9e07929f1c7b64d22a5240c0db18c464', '', 4, 1, '2020-12-14', '2020-12-14 04:02:16', 0),
('USR20121421A26528599', 'bhhh', 'bhbh', 'wewipiy511@yektara.com', '9585715359', 'bhhhbhbh', '9a3e1e3567ed99616696149f79242292', '', 4, 1, '2020-12-14', '2020-12-13 22:10:21', 0),
('USR2012143216AF3C822', 'vhv', 'vhh', 'cemic47807@econeom.com', '9999999999', 'vhvvhh1', '9e07929f1c7b64d22a5240c0db18c464', '', 4, 1, '2020-12-14', '2020-12-14 04:02:32', 0),
('USR20121437087C91675', 'Guy MOng', 'Moody', 'hadega7187@hafutv.com', '9585715359', 'guy mongmoody1', '1a8fc28c2a37965f6a975b4e697f1d7d', '', 4, 1, '2020-12-14', '2020-12-14 04:03:37', 0),
('USR20121441635B38402', 'ADARSH', 'SAH', 'tiralak366@cctyoo.com', '6891304130', 'adarshsah', 'd88739b98fc070495228f58715e144ce', '', 4, 1, '2020-12-14', '2020-12-14 04:07:41', 0),
('USR2012145307D896998', 'Guy MOng', 'Moody', 'hadega7187@hafutv.com', '9585715359', 'guy mongmoody12', '1a8fc28c2a37965f6a975b4e697f1d7d', '', 4, 1, '2020-12-14', '2020-12-14 04:03:54', 0),
('USR201215523C841F705', '', '', '', '', '1234567891011', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-12-15', '2020-12-15 13:12:52', 0),
('USR20121559B49AC2893', '', '', '', '', '123456789101112', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2020-12-15', '2020-12-15 13:12:59', 0),
('USR20121640C4981A469', 'Generra', 'Whitlow', 'generrawhitlow@gmail.com', '7187365624', 'generrawhitlow', '860eab6d5675c2580a037aa3524a7f66', '', 4, 1, '2020-12-16', '2020-12-16 10:27:40', 1),
('USR20121640FFDBA7486', 'Chanel', 'Alston', 'Braidmeuptay@gmail.com', '7189745200', 'chanelalston', 'e06a44f6384cfafc6562697fa4b5d43d', '', 4, 1, '2020-12-16', '2020-12-15 17:46:40', 0),
('USR20121647ECC466072', 'Soumalya', 'Nandy', 'soumalya@meliodus.org', '919883800', 'soumalyanandy', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2020-12-16', '2020-12-16 04:05:47', 0),
('USR20121935AC2A81357', 'Test', 'Test', 'Test@t.com', '1111111111', 'testtest123', 'a152e841783914146e4bcd4f39100686', '', 3, 1, '2020-12-19', '2020-12-19 12:33:35', 0),
('USR2012214816FC25456', 'Andre ', 'Fisher ', 'ACFisher11@gmail.com', '6467524755', 'andre fisher ', 'cedadcc8edb9f39e841c96d9448db567', '', 3, 1, '2020-12-21', '2020-12-21 14:56:48', 1),
('USR20122157398E2A370', 'Chris', 'Jones', 'popmicollar@yahoo.com', '7187607356', 'chrisjones', 'dc72b164f1b0805ec135eb2c91ea862d', '', 3, 1, '2020-12-21', '2020-12-21 10:54:57', 0),
('USR201221598F3FE2384', 'Chris', 'Jones', 'popmicollar@yahoo.com', '7187607356', 'chrisjones1', 'dc72b164f1b0805ec135eb2c91ea862d', '', 3, 1, '2020-12-21', '2020-12-21 10:54:59', 0),
('USR20122211E15F9D828', 'Ethan', 'Martinez', 'ethanmartinez777@gmail.com', '34788651263', 'ethanmartinez', '3ff5a4bfa2427e6cc0850c604ecaa123', '', 3, 1, '2020-12-22', '2020-12-22 01:52:11', 1),
('USR201223213EEC0F956', 'Talbor', 'Campbell', 'Ttrec131@aol.com', '3475960389', 'talborcampbell1', 'dc72b164f1b0805ec135eb2c91ea862d', '', 3, 1, '2020-12-23', '2020-12-22 21:30:21', 0),
('USR20122325CA110E776', 'Elias', 'Campbell', 'Tecampbell001@gmail.com ', '3475671092', 'eliascampbell', 'e2c080069aee57a7010a47d9d6df39a7', '', 3, 1, '2020-12-23', '2020-12-22 21:29:25', 0),
('USR201223292972B6765', 'Elias', 'Campbell', 'Tecampbell001@gmail.com ', '3475671092', 'eliascampbell1', 'e2c080069aee57a7010a47d9d6df39a7', '', 3, 1, '2020-12-23', '2020-12-22 21:29:29', 0),
('USR2012233676C701944', '', '', '', '', '12345678910111213', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2020-12-23', '2020-12-22 21:29:36', 0),
('USR2012233766EA96581', 'vhvhh', 'vhvh', 'siraso7068@nowdigit.com', '5555454545', 'vhvhhvhvh', '315f5b7ebe4d6bede4684c803445ee00', '', 3, 1, '2020-12-23', '2020-12-22 22:40:37', 0),
('USR20122701A32079613', 'Liz', 'Rodriguez', 'lizlizbobiz@hotmail.com', '7182161699', 'lizrodriguez', 'fc71fc820c4750d63bc88aa0e82d959f', '', 3, 1, '2020-12-27', '2020-12-27 16:08:01', 1),
('USR201227219F37A1102', 'Nube', 'Pastuizaca', 'ox.nube@yahoo.com', '6468041110', 'nubepastuizaca', 'cf11e298f0e5b1011d159680a106a92a', '', 3, 1, '2020-12-27', '2020-12-27 15:44:21', 1),
('USR20122723686356764', 'Nube', 'Pastuizaca', 'ox.nube@yahoo.com', '6468041110', 'nubepastuizaca1', 'cf11e298f0e5b1011d159680a106a92a', '', 3, 1, '2020-12-27', '2020-12-27 15:44:23', 0),
('USR20122729F666A8543', 'Samuel', 'Torres', 'Samueltorres6464@gmail.com', '', 'samueltorres', '05c0c2c5ef52d34228096bf91440b583', '', 3, 1, '2020-12-27', '2020-12-27 15:47:29', 0),
('USR20122812DA65E3685', 'Emily', 'Morales', 'Emilymorales301@gmail.com', '5163097377', 'emilymorales', 'a3f975aeca67db8933ed6bacda0dd35e', '', 3, 1, '2020-12-28', '2020-12-28 12:08:12', 0),
('USR201228282FC953317', 'Emily', 'Morales', 'Emilymorales301@gmail.com', '5163097377', 'emilymorales1', 'a3f975aeca67db8933ed6bacda0dd35e', '', 3, 1, '2020-12-28', '2020-12-28 12:08:28', 0),
('USR20122828F4852E813', 'Emily', 'Morales', 'Emilymorales301@gmail.com', '5163097377', 'emilymorales12', 'a3f975aeca67db8933ed6bacda0dd35e', '', 3, 1, '2020-12-28', '2020-12-28 12:08:28', 0),
('USR201228297C7B62755', 'Emily', 'Morales', 'Emilymorales301@gmail.com', '5163097377', 'emilymorales1234', 'a3f975aeca67db8933ed6bacda0dd35e', '', 3, 1, '2020-12-28', '2020-12-28 12:08:29', 1),
('USR20122829FB301B289', 'Emily', 'Morales', 'Emilymorales301@gmail.com', '5163097377', 'emilymorales123', 'a3f975aeca67db8933ed6bacda0dd35e', '', 3, 1, '2020-12-28', '2020-12-28 12:08:29', 0),
('USR201228327BF590316', 'Emily', 'Morales', 'Emilymorales301@gmail.com', '5163097377', 'emilymorales12345', 'a3f975aeca67db8933ed6bacda0dd35e', '', 3, 1, '2020-12-28', '2020-12-28 12:08:32', 0),
('USR2012315106BB6D409', 'Debbie', 'Sanchez', 'Sanchez.debbie95@gmail.com', '7185369889', 'debbiesanchez', 'c036bf1bc3670c3585106fc4a496b00c', '', 3, 1, '2020-12-31', '2020-12-31 11:53:51', 1),
('USR21010540466231030', 'ritesh', 'KUMAR', 'biwas77192@nonicamy.com', '9999999999', 'riteshkumar1234', '1c09b0e87c0e4283715fad48cd975185', '', 3, 1, '2021-01-05', '2021-01-05 08:04:40', 0),
('USR210105543D8895075', 'Ayanna', 'Gilbert', 'pelelix384@liaphoto.com', ' 1 (202) 18', 'ayannagilbert', '94dbc1f2534629624232f5fa120c03ea', '', 3, 1, '2021-01-05', '2021-01-05 07:14:54', 1),
('USR210105557F64FC191', 'ritesh', 'KUMAR', 'motocen366@nonicamy.com', '9999999999', 'riteshkumar123', '5df643f099f07557ec245eb19888f195', '', 4, 1, '2021-01-05', '2021-01-05 07:20:55', 0),
('USR21010917605B23662', 'ADARSH', 'SAH', 'wocehi1737@majorsww.com', '6891304130', 'adarshsah1', 'a2c03e02a8562d16f55c5b762acbad66', '', 4, 1, '2021-01-09', '2021-01-09 05:15:17', 1),
('USR21010926A87031511', 'ADARSH', 'SAH', 'wocehi1737@majorsww.com', '6891304130', 'adarshsah12', 'a2c03e02a8562d16f55c5b762acbad66', '', 4, 1, '2021-01-09', '2021-01-09 05:15:26', 0),
('USR21012237450B9C334', 'sample', 'test', 'rao.samm@gmail.com', '1237896789', 'sampletest', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2021-01-22', '2021-01-22 13:26:37', 0),
('USR2101240868594C526', 'Request', 'Hussain', 'rao.samm@reregmais.com', '2347896789', 'requesthussain12', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2021-01-24', '2021-01-24 10:28:08', 0),
('USR2101241569DA4D095', '', '', '', '', '1234567891011121314', '', '21012415958A5D363394B7C04C7CCD0C6501D87B101', 4, 1, '2021-01-24', '2021-01-24 12:13:15', 0),
('USR21012431DF4D05107', '', '', 'gadgetekbahamas', '', '1234567891011121314151617', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-01-24', '2021-01-24 12:40:31', 0),
('USR21012434A15042842', 'saaa', 'test', 'rao.sasa@gmail.com', '0123456789', 'saaatest', '', '21012434522B0DACDCCC4B233859EA5B757BBFF4844', 4, 1, '2021-01-24', '2021-01-24 12:13:34', 0),
('USR210124406D9C62365', 'Request', 'test', 'saddamrao@gmail.comsdsdv', '4567896789', 'requesttest', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-01-24', '2021-01-24 10:22:40', 0),
('USR2101244897CE50078', 'Request', 'Hussain', 'rao.samm@gmaisl.com', '2347896789', 'requesthussain', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2021-01-24', '2021-01-24 10:27:48', 0),
('USR210124539E0BDB782', 'Request', 'Hussain', 'rao.samm@gmaisl.com', '2347896789', 'requesthussain1', 'e10adc3949ba59abbe56e057f20f883e', '', 4, 1, '2021-01-24', '2021-01-24 10:27:53', 0),
('USR21012454D84995369', '', '', '', '', '123456789101112131415', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2021-01-24', '2021-01-24 12:38:54', 0),
('USR21012458103704552', '', '', '', '', '12345678910111213141516', 'd41d8cd98f00b204e9800998ecf8427e', '', 4, 1, '2021-01-24', '2021-01-24 12:38:58', 0),
('USR210125039A2EC6893', '', '', 'gadgetekbahamas@gmail.com', '32423442', '123456789101112131415161718', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-01-25', '2021-01-25 15:07:03', 0),
('USR210125321CE64E447', 'sample', 'test', 'saddamrao@gmail.cdom', '3227896789', 'sampletest123', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-01-25', '2021-01-25 14:28:32', 0),
('USR2101253313656A857', 'sample', 'test', 'saddamrao@gmail.cdom', '3227896789', 'sampletest12', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-01-25', '2021-01-25 14:27:33', 0),
('USR2101255949F377584', 'sample', 'test', 'saddamrao@gmail.cdom', '3227896789', 'sampletest1', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-01-25', '2021-01-25 14:25:59', 0),
('USR21013100745957062', 'Taylor ', 'Litteral', 'Clitteral1@gmail.com', '5135689997', 'taylor litteral', 'e503fd63baaa05d670bee0cbcf7bba25', '', 3, 1, '2021-01-31', '2021-01-31 15:50:00', 0),
('USR21013119034C6D112', 'Taylor ', 'Litteral', 'Clitteral1@gmail.com', '5135689997', 'taylor litteral1', 'e503fd63baaa05d670bee0cbcf7bba25', '', 3, 1, '2021-01-31', '2021-01-31 15:50:19', 0),
('USR210205361A6A3E733', 'Brandon', 'Charles', 'bcharles7777@gmail.com', '5515879542', 'brandoncharles', '78476c7a7e48e3322813de6a8c4a6933', '', 3, 1, '2021-02-05', '2021-02-05 16:13:36', 1),
('USR21020538D7DFDC821', 'Brandon', 'Charles', 'bcharles7777@gmail.com', '5515879542', 'brandoncharles1', '78476c7a7e48e3322813de6a8c4a6933', '', 3, 1, '2021-02-05', '2021-02-05 16:13:38', 0),
('USR21021231C614A9548', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:31', 0),
('USR21021240BCC455739', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax1', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:40', 0),
('USR21021241251AD8941', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax1234', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:41', 0),
('USR2102124167FBFE190', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax12', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:41', 0),
('USR2102124196218C576', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax123', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:41', 0),
('USR21021242560A2B325', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax12345', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:42', 0),
('USR210212435AD600638', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax1234567', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:43', 0),
('USR2102124370052B092', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax123456', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:43', 0),
('USR210212442D8074124', 'A', 'Max', 'amax@gmail.com', '9445587765', 'amax12345678', 'e10adc3949ba59abbe56e057f20f883e', '', 3, 1, '2021-02-12', '2021-02-11 17:45:44', 0),
('USR210212508EA116270', 'Cassandra ', 'Danier', 'Cassie9014@aol.com', '3474396265', 'cassandra danier', 'b70449f0541a715e16e89a107a4caf7c', '', 3, 1, '2021-02-12', '2021-02-12 14:14:50', 1),
('USR2102204614261D325', 'md', 'zahed', 'freelancerzahed@gmail.com', '0182021202', 'mdzahed', '53693ae6a22791e3f49cfa6ba14ae01a', '', 4, 1, '2021-02-20', '2021-02-20 01:46:46', 1),
('USR2102204896FA3B773', 'md', 'zahed', 'freelancerzahed@gmail.com', '0182021202', 'mdzahed1', '53693ae6a22791e3f49cfa6ba14ae01a', '', 4, 1, '2021-02-20', '2021-02-20 01:46:48', 0),
('USR21022049AB5E89680', 'md', 'zahed', 'freelancerzahed@gmail.com', '0182021202', 'mdzahed123', '53693ae6a22791e3f49cfa6ba14ae01a', '', 4, 1, '2021-02-20', '2021-02-20 01:46:49', 0),
('USR21022049E0096C248', 'md', 'zahed', 'freelancerzahed@gmail.com', '0182021202', 'mdzahed12', '53693ae6a22791e3f49cfa6ba14ae01a', '', 4, 1, '2021-02-20', '2021-02-20 01:46:49', 0),
('USR21022120239901128', 'Kevin', 'Hanover', 'K_hanz50@yahoo.com', '5164762919', 'kevinhanover', '32b86c891836894a20d789acce00e906', '', 3, 1, '2021-02-21', '2021-02-21 14:37:20', 0),
('USR210221220443E6078', 'Kevin', 'Hanover', 'K_hanz50@yahoo.com', '5164762919', 'kevinhanover1', '32b86c891836894a20d789acce00e906', '', 3, 1, '2021-02-21', '2021-02-21 14:37:22', 0),
('USR2102223815B1F0420', 'Rony', 'Mia', 'ronymia.tech@gmail.com', '', 'ronymia', '25d55ad283aa400af464c76d713c07ad', '', 3, 1, '2021-02-22', '2021-02-22 05:26:38', 1),
('USR21022251FC90B0118', '', '', '', '', '12345678910111213141516171819', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2021-02-22', '2021-02-22 05:25:51', 0),
('USR21022257864184644', '', '', '', '', '1234567891011121314151617181920', 'd41d8cd98f00b204e9800998ecf8427e', '', 3, 1, '2021-02-22', '2021-02-22 05:25:57', 0),
('USR210223150E84C9261', 'Eugene ', 'Harris', 'Mylesharris81@gmail.com', '3182675781', 'eugene harris', 'd90c0ce6d93f7dd39a56a9217e17d05a', '', 4, 1, '2021-02-23', '2021-02-23 16:59:15', 0),
('USR210223442E05D3651', 'eugene', 'harris', 'Mylesharris81@gmail.com', '(312675781', 'eugeneharris', 'd90c0ce6d93f7dd39a56a9217e17d05a', '', 4, 1, '2021-02-23', '2021-02-23 16:57:44', 1),
('USR21022351F07A27651', 'eugene', 'harris', 'Mylesharris81@gmail.com', '(312675781', 'eugeneharris1', 'd90c0ce6d93f7dd39a56a9217e17d05a', '', 4, 1, '2021-02-23', '2021-02-23 16:57:51', 0),
('USR21022422E47BD1882', 'Shanice', 'Watkis', 'S.watkis09@yahoo.com', '(929) 283-2', 'shanicewatkis', 'd8e7f1a9d4c57b032ea87100d7f8454f', '', 3, 1, '2021-02-24', '2021-02-24 00:12:22', 1),
('USR21022424817C84490', 'Shanice', 'Watkis', 'S.watkis09@yahoo.com', '(929) 283-2', 'shanicewatkis1', 'd8e7f1a9d4c57b032ea87100d7f8454f', '', 3, 1, '2021-02-24', '2021-02-24 00:12:24', 0),
('USR210225177F7CC0396', 'Ashle', 'Harris', 'Ashleharris91@gmail.com', '3478983010', 'ashleharris', 'e6dd8870517dbc64345aedc507d7cc5c', '', 3, 1, '2021-02-25', '2021-02-24 17:26:17', 0);

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
('USR2011303931C8F0036', 'IMG210127530395C3291.png'),
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
('USR20121203B1C491447', 'IMG2012122254C9A5426.jpg'),
('USR20121216E64D34997', ''),
('USR2012122927845F814', ''),
('USR201212544C6038968', ''),
('USR20121323BC7759222', ''),
('USR201213290249FF089', ''),
('USR201213345DAA96793', ''),
('USR201213407A17BE874', ''),
('USR20121403F0292A314', ''),
('USR2012140780CA5B683', ''),
('USR20121416CB3FD4940', ''),
('USR20121421A26528599', ''),
('USR2012143216AF3C822', ''),
('USR20121437087C91675', ''),
('USR20121441635B38402', ''),
('USR2012145307D896998', ''),
('USR201215523C841F705', ''),
('USR20121559B49AC2893', ''),
('USR20121640C4981A469', ''),
('USR20121640FFDBA7486', ''),
('USR20121647ECC466072', ''),
('USR20121935AC2A81357', ''),
('USR2012214816FC25456', ''),
('USR20122157398E2A370', ''),
('USR201221598F3FE2384', ''),
('USR20122211E15F9D828', ''),
('USR201223213EEC0F956', ''),
('USR20122325CA110E776', ''),
('USR201223292972B6765', ''),
('USR2012233676C701944', ''),
('USR2012233766EA96581', ''),
('USR20122701A32079613', ''),
('USR201227219F37A1102', ''),
('USR20122723686356764', ''),
('USR20122729F666A8543', ''),
('USR20122812DA65E3685', ''),
('USR201228282FC953317', ''),
('USR20122828F4852E813', ''),
('USR201228297C7B62755', ''),
('USR20122829FB301B289', ''),
('USR201228327BF590316', ''),
('USR2012315106BB6D409', ''),
('USR21010540466231030', ''),
('USR210105543D8895075', ''),
('USR210105557F64FC191', ''),
('USR21010917605B23662', ''),
('USR21010926A87031511', ''),
('USR21012237450B9C334', ''),
('USR2101240868594C526', ''),
('USR2101241569DA4D095', ''),
('USR21012431DF4D05107', ''),
('USR21012434A15042842', ''),
('USR210124406D9C62365', ''),
('USR2101244897CE50078', ''),
('USR210124539E0BDB782', ''),
('USR21012454D84995369', ''),
('USR21012458103704552', ''),
('USR210125039A2EC6893', ''),
('USR210125321CE64E447', ''),
('USR2101253313656A857', ''),
('USR2101255949F377584', ''),
('USR21013100745957062', ''),
('USR21013119034C6D112', ''),
('USR210205361A6A3E733', ''),
('USR21020538D7DFDC821', ''),
('USR21021231C614A9548', ''),
('USR21021240BCC455739', ''),
('USR21021241251AD8941', ''),
('USR2102124167FBFE190', ''),
('USR2102124196218C576', ''),
('USR21021242560A2B325', ''),
('USR210212435AD600638', ''),
('USR2102124370052B092', ''),
('USR210212442D8074124', ''),
('USR210212508EA116270', ''),
('USR2102204614261D325', ''),
('USR2102204896FA3B773', ''),
('USR21022049AB5E89680', ''),
('USR21022049E0096C248', ''),
('USR21022120239901128', ''),
('USR210221220443E6078', ''),
('USR2102223815B1F0420', ''),
('USR21022251FC90B0118', ''),
('USR21022257864184644', ''),
('USR210223150E84C9261', ''),
('USR210223442E05D3651', 'IMG210224001363C9050.png'),
('USR21022351F07A27651', ''),
('USR21022422E47BD1882', ''),
('USR21022424817C84490', ''),
('USR210225177F7CC0396', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `shop_reviews`
--
ALTER TABLE `shop_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
