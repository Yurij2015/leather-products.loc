-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 07, 2020 at 01:35 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Художественная литература', 1, 1),
(2, 'Детская литература', 2, 1),
(3, 'Биографии. Мемуары', 3, 1),
(4, 'Книги по искусству', 4, 1),
(5, 'Комикс. Манга', 5, 1),
(6, 'Путешествия. Хобби', 6, 1),
(7, 'Учебники', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactForm`
--

CREATE TABLE `contactForm` (
  `userName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userEmail` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactForm`
--

INSERT INTO `contactForm` (`userName`, `userEmail`, `question`, `id`) VALUES
(NULL, NULL, NULL, 1),
('Ivanov Ivan', 'kjkkjk@kjkj.ru', 'Как мне заказать доставку книги?', 8),
('София', 'sofia@mail.ru', 'Возможна ли доставка в МСК?', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `description`, `is_new`, `is_recommended`, `status`, `image`) VALUES
(3, 'Пояс Ориона. Устинова Т. В. ', 1, 3, 454, 1, ' Эксмо', '<p><strong>Аннотация к книге \"Пояс Ориона\" Устинова Т. В.:</strong></p>\r\n<p><br />Тонечка &mdash; любящая и любимая жена, дочь и мать. Счастливица, одним словом! А еще она известный сценарист и может быть рядом со своим мужем-режиссером всегда и везде &mdash; и на работе, и на отдыхе. И живут они душа в душу, и понимают друг друга с полуслова&hellip; Или Тонечке только кажется, что это так? Однажды они отправляются в прекрасный старинный город. Её муж Александр должен встретиться с давним другом, которого Тонечка не знает. Кто такой этот Кондрат Ермолаев? Муж говорит &mdash; повар, а похоже, что бандит. Во всяком случае, как раз в присутствии столичных гостей его задерживают по подозрению в убийстве жены. Александр явно что-то скрывает, встревоженная Тонечка пытается разобраться в происходящем сама &mdash; и оказывается в самом центре детективной истории, сюжет которой ей, сценаристу, совсем непонятен. Ясно одно: в опасности и Тонечка, и ее дети, и идеальный брак с прекрасным мужчиной, который, возможно, не тот, за кого себя выдавал&hellip;</p>', 1, 1, 1, ''),
(4, 'Большое небо. Аткинсон К. ', 1, 4, 449, 1, ' Азбука; Азбука-Аттикус ', '<p><strong>Аннотация к книге \"Большое небо\" Аткинсон К. </strong></p>\r\n<p>В высшую лигу современной литературы Кейт Аткинсон попала с первой же попытки: ее дебютный роман &laquo;Музей моих тайн&raquo; получил престижную Уитбредовскую премию, обойдя &laquo;Прощальный вздох мавра&raquo; Салмана Рушди, а цикл романов о частном детективе Джексоне Броуди, успевший полюбиться и российскому читателю (&laquo;Преступления прошлого&raquo;, &laquo;Поворот к лучшему&raquo;, &laquo;Ждать ли добрых вестей?&raquo;, &laquo;Чуть свет, с собакою вдвоем&raquo;), Стивен Кинг окрестил &laquo;главным детективным проектом десятилетия&raquo;.</p>\r\n<p>Суммарный тираж цикла превысил три миллиона экземпляров, а на основе первых его книг телеканал Би-би-си выпустил сериал &laquo;Преступления прошлого&raquo; с Джексоном Айзексом в главной роли. &laquo;Волшебный &mdash; и волшебно затягивающий &mdash; мир пересекающихся тропок, коварных замыслов и удивительных совпадений. Невероятно увлекательно и трогательно&raquo; (Sunday Mirror). Впервые на русском!</p>', 1, 0, 1, ''),
(5, 'Нормальные люди. Руни С. ', 1, 5, 500, 1, 'Синдбад', '<p><strong>Аннотация к книге \"Нормальные люди\" Руни С.</strong></p>\r\n<p>Коннелл Уолдрон и Марианна Шеридан учатся в одной школе и даже в одном классе, но почти не общаются &mdash; трудно представить себе двух более разных людей. В школе Коннелл душа любой компании, один из самых популярных парней, звезда футбольной команды, а Марианна &mdash; замкнутая одиночка, поддерживающая отношения по большей части с книгами. В реальной жизни иначе: она из очень состоятельной семьи, а он из бедной, его мать уборщица в особняке Шериданов... Но однажды они все же поговорят &mdash; на кухне у Марианны, когда Коннелл заедет за мамой. И этот недолгий, неловкий, но наэлектризованный разговор изменит их жизнь.</p>\r\n<p>&laquo;Нормальные люди&raquo; &mdash; история о том, как один человек может изменить жизнь другого. И о том, как нам трудно говорить о своих чувствах. О желании ощутить власть над другим человеком и одновременно всецело принадлежать ему. Это история о любви.</p>', 1, 0, 1, ''),
(6, ' Дни нашей жизни. Франко М. ', 4, 6, 299, 1, ' Popcorn Books ', '<p><strong>Аннотация к книге \"Дни нашей жизни\" Франко М.</strong></p>\r\n<p><br />В детстве маленького Мики было всё, как у обычных детей: любимые герои, каши по утрам, дни рождения, скучные линейки в школе и сочинения на заданные темы. В юности взрослеющего Мики было всё, как у обычных подростков: первая драка, первое разочарование, первая любовь и первая нелюбовь. Но у Мики была одна тайна: его семья, которую никому нельзя показывать.</p>', 1, 0, 1, ''),
(7, ' Балкон на Кутузовском. Рождественская Е. Р. ', 1, 7, 487, 1, ' Эксмо ', '<p><strong>Аннотация к книге \"Балкон на Кутузовском\" Рождественская Е. Р.</strong></p>\r\n<p><br />Адрес &mdash; это маленькая жизнь. Ограниченная не только географией и временем, но и любимыми вещами, видом из окна во двор, милыми домашними запахами и звуками, присущими только этому месту, но главное, родными, этот дом наполняющими. Перед вами новый роман про мой следующий адрес &mdash; Кутузовский, 17 и про памятное для многих время &mdash; шестидесятые годы. Он про детство, про бабушек, Полю и Лиду, про родителей, которые всегда в отъезде и про нелюбимую школу. Когда родителей нет, я сплю в папкином кабинете, мне там всё нравится &mdash; и портрет Хемингуэя на стене, и модная мебель, и полосатые паласы и полки с книгами.</p>\r\n<p>Когда они, наконец, приезжают, у них всегда гости, которых я не люблю &mdash; они пьют портвейн, съедают всё, что наготовили бабушки, постоянно курят, спорят и читают стихи. Скучно.... Это попытка погружения в шестидесятые, в ту милую реальность, когда все было проще, человечнее, добрее и понятнее.</p>', 1, 0, 1, ''),
(8, ' Пояс Ориона. Устинова Т. В. ', 1, 8, 454, 1, ' Эксмо ', '<p><strong>Аннотация к книге \"Пояс Ориона\" Устинова Т. В.</strong></p>\r\n<p><br />Тонечка &mdash; любящая и любимая жена, дочь и мать. Счастливица, одним словом! А еще она известный сценарист и может быть рядом со своим мужем-режиссером всегда и везде &mdash; и на работе, и на отдыхе. И живут они душа в душу, и понимают друг друга с полуслова&hellip; Или Тонечке только кажется, что это так? Однажды они отправляются в прекрасный старинный город. Её муж Александр должен встретиться с давним другом, которого Тонечка не знает. Кто такой этот Кондрат Ермолаев? Муж говорит &mdash; повар, а похоже, что бандит. Во всяком случае, как раз в присутствии столичных гостей его задерживают по подозрению в убийстве жены. Александр явно что-то скрывает, встревоженная Тонечка пытается разобраться в происходящем сама &mdash; и оказывается в самом центре детективной истории, сюжет которой ей, сценаристу, совсем непонятен. Ясно одно: в опасности и Тонечка, и ее дети, и идеальный брак с прекрасным мужчиной, который, возможно, не тот, за кого себя выдавал&hellip;</p>', 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(16) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(10, 'Юрий Иванов', '+7890804712', '', 1, '2020-07-10 10:08:53', '{\"12\":1,\"8\":1,\"4\":1}', 1),
(11, 'Ольга Петрова', '+78908004785', '', NULL, '2020-07-10 10:11:11', '{\"12\":1,\"8\":1,\"4\":1}', 1),
(12, 'Макаторов Олег Петрович', '+78908004451', 'Что с доставкой?', NULL, '2020-07-10 10:15:54', '{\"12\":1,\"8\":1,\"4\":1}', 2),
(14, 'Иванов Иван Иванович', '+78908004558', '', 1, '2020-07-10 20:40:09', '{\"12\":1,\"8\":1,\"4\":1}', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'YurijMo', 'uurij@mail.ru', '3004917779', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactForm`
--
ALTER TABLE `contactForm`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactForm`
--
ALTER TABLE `contactForm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
