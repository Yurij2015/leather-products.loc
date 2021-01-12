-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2021 at 06:20 AM
-- Server version: 8.0.19
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leather_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int DEFAULT '0',
  `status` int DEFAULT '1',
  `parent_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`, `parent_id`) VALUES
(1, 'Кошельки', 1, 1, NULL),
(2, 'Обложки для документов', 6, 1, NULL),
(3, 'Ремни мужские', 3, 1, NULL),
(4, 'Чехлы для телефонов', 6, 1, NULL),
(5, 'Кошельки женские', 6, 1, 1),
(6, 'Кошельки мужские', 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `userName` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userEmail` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`userName`, `userEmail`, `question`, `id`) VALUES
(NULL, NULL, NULL, 1),
('Ivanov Ivan', 'kjkkjk@kjkj.ru', 'Как мне заказать доставку книги?', 8),
('София', 'sofia@mail.ru', 'Возможна ли доставка в МСК?', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `code` int NOT NULL,
  `price` float NOT NULL,
  `availability` int NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_new` int NOT NULL DEFAULT '0',
  `is_recommended` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `description`, `is_new`, `is_recommended`, `status`, `image`) VALUES
(3, 'Женский кошелек двойного сложения Пупугай', 5, 3, 4000, 1, ' ', '<p>Материалы:&nbsp; натуральная кожа<br />Размер:&nbsp; Портмоне (кошелек, бумажник) в сложенном виде: высота- 10,5 см., ширина - 10 см.<br />Цена: 4000 руб.</p>', 1, 1, 1, ''),
(4, 'Женский кошелёк двойного сложения Розовый', 5, 4, 4000, 1, '', '<p>Материалы:&nbsp; натуральная кожа<br />Размер:&nbsp; Кошелек в сложенном виде: длина 20 см, ширина 10,5 см.<br />Цена: 4000 руб.</p>', 1, 0, 1, ''),
(5, 'Женский кошелёк двойного сложения Цветок', 5, 5, 3500, 1, '', '<p>Материалы:&nbsp; натуральная кожа<br />Размер:&nbsp; Кошелек в сложенном виде: длина 20 см, ширина 10,5 см.<br />Цена: 3500 руб.</p>', 1, 0, 1, ''),
(6, 'Женский кошелёк двойного сложения (Лиса)', 5, 6, 4500, 1, '', '<p>Материалы:&nbsp; натуральная кожа<br />Размер:&nbsp; Портмоне (кошелек, бумажник) в сложенном виде: высота- 10,5 см., ширина - 10,3 см.<br />Цена : 4500 руб.</p>', 1, 0, 1, ''),
(7, 'Кошелек (портмоне, бумажник) двойного сложения Harley Davidson', 6, 7, 7500, 1, '', '<p>Материалы:&nbsp; натуральная кожа<br />Размер:&nbsp; Портмоне (кошелек, бумажник) в сложенном виде: ширина- 9 см., длина - 11 см.<br />Цена: 7500 руб.</p>', 1, 0, 1, ''),
(8, 'Кошелек (портмоне, бумажник) двойного сложения', 6, 8, 8000, 1, ' ', '<p>Материалы:&nbsp; натуральная кожа<br />Размер:&nbsp; Портмоне (кошелек, бумажник) в сложенном виде: высота- 13 см., ширина - 10 см.</p>\r\n<p><img src=\"../../../template/images/products/line1.jpg\" alt=\"\" width=\"300\" height=\"225\" /><img src=\"../../../template/images/products/line2.jpg\" alt=\"\" width=\"300\" height=\"225\" /><br />Цена: 8000</p>', 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(10, 'Юрий Иванов', '+7890804712', '', 1, '2021-01-01 07:08:53', '{\"12\":1,\"8\":1,\"4\":1}', 1),
(11, 'Ольга Петрова', '+78908004785', '', NULL, '2021-01-05 07:11:11', '{\"12\":1,\"8\":1,\"4\":1}', 1),
(12, 'Макаторов Олег Петрович', '+78908004451', 'Что с доставкой?', NULL, '2021-01-07 07:15:54', '{\"12\":1,\"8\":1,\"4\":1}', 2),
(14, 'Иванов Иван Иванович', '+78908004558', '', 1, '2021-01-04 17:40:09', '{\"12\":1,\"8\":1,\"4\":1}', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'YurijMo', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_uindex` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
