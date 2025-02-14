-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 مايو 2024 الساعة 04:26
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwatch`
--

-- --------------------------------------------------------

--
-- بنية الجدول `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `vdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `mycards`
--

CREATE TABLE `mycards` (
  `id` int(4) NOT NULL,
  `prod_id` int(4) NOT NULL,
  `price` float NOT NULL,
  `UsrId` int(4) NOT NULL,
  `vdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty` int(3) NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `mycards`
--

INSERT INTO `mycards` (`id`, `prod_id`, `price`, `UsrId`, `vdate`, `qty`, `state`) VALUES
(46, 7, 1150, 1, '2024-05-05 20:44:20', 1, 0),
(48, 9, 1590, 1, '2024-05-05 20:50:16', 1, 0),
(50, 8, 750, 1, '2024-05-05 20:56:22', 1, 0),
(51, 4, 650, 1, '2024-05-05 20:56:32', 1, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `pathImg` varchar(100) NOT NULL,
  `IsNew` int(1) NOT NULL,
  `Isfeatured` int(1) NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `pathImg`, `IsNew`, `Isfeatured`, `state`) VALUES
(1, 'SPIRIT ROSE', '', 1500, 'img/product1.png', 0, 0, 1),
(2, 'KHAKI PILOT', '', 1350, 'img/product2.png', 0, 0, 1),
(3, 'JUBILEE BLACK', '', 870, 'img/product3.png', 0, 0, 1),
(4, 'FOSIL ME3', '', 650, 'img/product4.png', 0, 0, 1),
(5, 'DUCHEN', '', 950, 'img/product5.png', 0, 0, 1),
(6, 'Longines rose', '', 980, 'img/product6.png', 0, 1, 1),
(7, 'Jazzmaster', '', 1150, 'img/product7.png', 1, 1, 1),
(8, 'Dreyfuss gold', '', 750, 'img/product8.png', 0, 1, 1),
(9, 'Portuguese rose', '', 1590, 'img/product9.png', 0, 1, 1),
(10, 'INGERSOLL', '', 250, 'img/product10.png', 1, 0, 1),
(11, 'ROSE GOLD', '', 890, 'img/product11.png', 1, 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PassWord` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Email`, `PassWord`) VALUES
(1, 'M.R', 'user1@gmail.com', '1'),
(2, 'User2', 'user2@gmail.com', '1'),
(4, 'user3', 'user3@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycards`
--
ALTER TABLE `mycards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserName` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mycards`
--
ALTER TABLE `mycards`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
