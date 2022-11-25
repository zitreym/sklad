-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 16 2022 г., 16:57
-- Версия сервера: 5.7.38
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sklad`
--
CREATE DATABASE IF NOT EXISTS `sklad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sklad`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Компьютеры'),
(2, 'Телефоны'),
(3, 'Мышки'),
(4, 'Клавиатуры'),
(5, 'Мониторы'),
(6, 'Ноутбуки'),
(7, 'Камеры'),
(8, 'Стационарные телефоны');

-- --------------------------------------------------------

--
-- Структура таблицы `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `place`
--

INSERT INTO `place` (`id`, `name`) VALUES
(1, 'Склад'),
(2, 'Баранов Данила'),
(3, 'Коржанкова Ольга'),
(4, 'Иванов Александр'),
(5, 'Крылов Алексей'),
(6, 'Чумаков Артём'),
(7, 'Никифоров Евгений'),
(8, 'Чернышова Виктория');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'Клавиатура Logitech K120'),
(2, 'Телефон HONOR 30 Pro+'),
(3, 'Ноутбук HONOR MagicBook WAQ9HNR '),
(4, 'Монитор samsung S22E310HY'),
(5, 'Ноутбук HP 15s-eq2057ur'),
(6, 'Монитор samsung S22E300HY'),
(7, 'Телефон Redmi M1810F6LG'),
(8, 'Телефон Redmi M2006C3MNG'),
(9, 'Телефон HONOR 9A'),
(10, 'Ноутбук Sony SVF152C29V'),
(11, 'Ноутбук Acer Aspire 3'),
(12, 'Ноутбук HP 15-db1232ur'),
(13, 'Ноутбук Asus X550L'),
(14, 'Ноутбук Lenovo 310-151SK'),
(15, 'Ноутбук Asus X53U'),
(16, 'Монитор samsung LS22D300HY'),
(17, 'Ноутбук HP ProBook 450 G7');

-- --------------------------------------------------------

--
-- Структура таблицы `sklad_it`
--

CREATE TABLE IF NOT EXISTS `sklad_it` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text NOT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `place` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sklad_it`
--

INSERT INTO `sklad_it` (`id`, `name`, `code`, `category`, `status`, `place`, `price`, `comment`, `date`) VALUES
(12, 'Клавиатура Logitech K120', '4755758045', 'Клавиатуры', '1', 'Баранов Данила', '300', 'Не работает клавиша F5', '24.05.2022'),
(13, 'Мышь проводная Logitech M100', '5939105318', 'Мышки', '1', 'Баранов Данила', '100', 'Исправна', '24.05.2022'),
(19, 'Телефон HONOR 30 Pro+', '1361999603', 'Телефоны', '1', 'Склад', '50000', 'imei: 868940040572339', '26.05.2022'),
(20, 'Ноутбук HONOR MagicBook WAQ9HNR ', '1144905929', 'Ноутбуки', '1', 'Склад', '50000', 'Ноутбук Константинова', '27.05.2022'),
(24, 'Ноутбук HONOR MagicBook WAQ9HNR ', '5570713098', 'Ноутбуки', '1', 'Склад', '50000', 'Ноутбук Замфир', '31.05.2022'),
(25, 'Монитор samsung S22E310HY', '9941652208', 'Мониторы', '1', 'Баранов Данила', '5000', 's/n: ZZFBH4LG901157F ', '31.05.2022'),
(26, 'Монитор samsung S22E310HY', '2650460956', 'Мониторы', '1', 'Баранов Данила', '5000', 's/n: ZZFBH4LG900884T', '31.05.2022'),
(27, 'Ноутбук HP 15s-eq2057ur', '1702589223', 'Ноутбуки', '1', 'Коржанкова Ольга', '50000', 's/n: 5CD1478TTT', '31.05.2022'),
(28, 'Монитор samsung S22E300HY', '4295083834', 'Мониторы', '1', 'Коржанкова Ольга', '5000', 'Второй монитор КоржанковойО', '31.05.2022'),
(29, 'Телефон Redmi M1810F6LG', '1962918692', 'Телефоны', '1', 'Чернышова Виктория', '10000', 'Черный чехол', '31.05.2022'),
(30, 'Телефон Redmi M2006C3MNG', '8744729801', 'Телефоны', '1', 'Никифоров Евгений', '10000', '-', '31.05.2022'),
(31, 'Телефон Redmi M1810F6LG', '2642574839', 'Телефоны', '2', 'Склад', '10000', 'Не работает открытие сим-карты', '31.05.2022'),
(32, 'Телефон HONOR 9A', '6034972523', 'Телефоны', '1', 'Склад', '15000', 's/n 867083047608847', '31.05.2022'),
(33, 'Телефон Redmi M2006C3MNG', '5208574777', 'Телефоны', '1', 'Склад', '10000', '-', '31.05.2022'),
(34, 'Телефон Redmi M2006C3MNG', '7743519413', 'Телефоны', '1', 'Склад', '10000', 's/n 2926461sd71453', '31.05.2022'),
(35, 'Ноутбук Sony SVF152C29V', '1732288934', 'Ноутбуки', '1', 'Склад', '20000', 'Бывш. ЖидковА', '31.05.2022'),
(36, 'Ноутбук Acer Aspire 3', '2415167166', 'Ноутбуки', '1', 'Склад', '250000', 's/n NXHS5ER01E036091F53400', '31.05.2022'),
(37, 'Ноутбук HP 15-db1232ur', '2371785018', 'Ноутбуки', '1', 'Склад', '25000', 's/n: CND0311272', '31.05.2022'),
(38, 'Ноутбук Asus X550L', '5756635363', 'Ноутбуки', '1', 'Склад', '25000', 's/n E6N0CV105314240', '31.05.2022'),
(39, 'Ноутбук Lenovo 310-151SK', '4844870577', 'Ноутбуки', '1', 'Склад', '25000', '-', '31.05.2022'),
(40, 'Ноутбук Sony SVF152C29V', '3846924480', 'Ноутбуки', '1', 'Склад', '20000', '-', '31.05.2022'),
(41, 'Ноутбук Asus X53U', '1347117025', 'Ноутбуки', '2', 'Склад', '5000', 'тормоз+лопнут', '31.05.2022'),
(42, 'Ноутбук HP 15-db1232ur', '8321781059', 'Ноутбуки', '1', 'Склад', '35000', 's/n GND031125D', '01.06.2022'),
(43, 'Монитор samsung S22E310HY', '4154114894', 'Мониторы', '1', 'Склад', '5000', 's/n ZZFBH4LG9000885B', '01.06.2022'),
(44, 'Ноутбук HONOR MagicBook WAQ9HNR ', '7823623753', 'Ноутбуки', '1', 'Иванов Александр', '50000', '-', '01.06.2022'),
(45, 'Монитор samsung LS22D300HY', '7280763155', 'Мониторы', '1', 'Иванов Александр', '5000', '-', '01.06.2022'),
(46, 'Монитор samsung LS22D300HY', '9780877573', 'Мониторы', '1', 'Крылов Алексей', '5000', 's/n 0AJDHLLJ300014K', '01.06.2022'),
(47, 'Ноутбук HP ProBook 450 G7', '7284791446', 'Ноутбуки', '1', 'Крылов Алексей', '50000', 's/n 5CD034H72X', '01.06.2022');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sklad_it`
--
ALTER TABLE `sklad_it`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `sklad_it`
--
ALTER TABLE `sklad_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
