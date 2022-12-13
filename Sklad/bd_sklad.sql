-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 12 2022 г., 12:16
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_sklad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ekipirovka`
--

CREATE TABLE `ekipirovka` (
  `id` int(11) NOT NULL,
  `naimenovanie` varchar(30) NOT NULL,
  `nazvanie` varchar(45) NOT NULL,
  `strana` varchar(30) NOT NULL,
  `marka` varchar(15) NOT NULL,
  `ves` varchar(11) NOT NULL,
  `rasmer` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ekipirovka`
--

INSERT INTO `ekipirovka` (`id`, `naimenovanie`, `nazvanie`, `strana`, `marka`, `ves`, `rasmer`, `cena`, `img`) VALUES
(13, 'Бронежилет', 'Архангел', 'Италия', 'МАРКА', '30 кг', 54, 49000, 'Архангел ШТУРМ.png'),
(35, 'Бронежилет', 'Бронежилет 6Б45 ', 'Россия', 'БЖ', '35 кг', 55, 45000, 'Бронежилет 6Б45.png'),
(36, 'Бронежилет', 'Атом (Стрелец)', 'Турция', 'ROC', '30 кг', 60, 42000, 'Атом (Стрелец).png');

-- --------------------------------------------------------

--
-- Структура таблицы `korzina`
--

CREATE TABLE `korzina` (
  `id` int(11) NOT NULL,
  `idtovar` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `korzina`
--

INSERT INTO `korzina` (`id`, `idtovar`, `iduser`) VALUES
(132, 15, 8),
(136, 16, 8),
(137, 39, 8),
(154, 4, 7),
(155, 14, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `ognestrel`
--

CREATE TABLE `ognestrel` (
  `id` int(11) NOT NULL,
  `naimenovanie` varchar(30) NOT NULL,
  `nazvanie` varchar(45) NOT NULL,
  `strana` varchar(30) NOT NULL,
  `marka` varchar(15) NOT NULL,
  `dlina` varchar(11) NOT NULL,
  `kalibr` varchar(11) NOT NULL,
  `dlina_stvola` varchar(11) NOT NULL,
  `ves` varchar(11) NOT NULL,
  `magasin` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ognestrel`
--

INSERT INTO `ognestrel` (`id`, `naimenovanie`, `nazvanie`, `strana`, `marka`, `dlina`, `kalibr`, `dlina_stvola`, `ves`, `magasin`, `img`, `cena`) VALUES
(4, 'Калаш', 'АКМ-СХ', 'Россия', 'МОЛОТ', '883 мм', '7,62х39', '415 мм', '3,8 кг', 30, 'AKM-SH.png', 34999),
(11, 'Пистолет', 'Joker KURS', 'Россия', 'Курс-С', '223 мм', '5,6х16', '110 мм', '0,78  кг', 12, 'Joker KURS.png', 18999),
(12, 'Дробовик', 'Beydora BDR 90AL Black', 'Турция', 'Beydora', '1200 мм', '12х76', '760 мм', '3,10 кг', 2, 'Beydora BDR 90AL Black.png', 24999),
(14, 'Патрон', 'Пуля 5,45х39 FMJ ', 'Россия', 'БПЗ', '5,45 мм', '5,45х39', '0', '3,85 г', 150, 'Пуля 5,45х39 FMJ .png', 2999),
(15, 'Винтовка', 'ИЖ-164.КОМ1', 'Россия', 'Калашников', '945 мм', '7,62х39', '336 мм', '3,35 кг', 9, 'Снайперская винтовка Драгунова (ОС-СВД исп.01) ИЖ-164.КОМ1.png', 29499),
(16, 'Пистолет', 'ТК1911СХ', 'Россия', 'ТехКрим', '218 мм', 'к.10х31', '190 мм', '1,15 кг', 8, 'ТК1911СХ.png', 16499),
(17, 'Пистолет', 'ТАУРУС-СО 4,5 Фумо', 'Россия', 'Курс-С', '238 мм', 'к.10ТК', '190 мм', '0,795 кг', 6, 'ТАУРУС-СО 4,5 Фумо.png', 22999),
(18, 'Пистолет', 'СО-ТТ', 'Сербия', 'ТОЗ', '195 мм', 'к.9ИМ (9х19', '116 мм', '0,85 кг', 9, 'СО-ТТ.png', 17999),
(20, 'Пистолет', 'Р-411-02', 'Россия', 'Baikal', '161 мм', 'к.10ТК', '93 мм', '0,73кг', 8, 'Р-411-02.png', 16999),
(21, 'Пистолет', 'К17-СО Песочный', 'Россия', 'Курс-С', '196 мм', 'к.10ТК', '196 мм', '0,75кг', 8, 'К17-СО Песочный.png', 24999),
(22, 'Винтовка', 'СКС-СХ', 'Россия', 'МОЛОТ-АРМЗ', '1020 мм', 'к.7,62х39 ', '520 мм', '3,75 кг', 10, 'СКС-СХ.png', 36000),
(24, 'Винтовка', 'Винторез-СХ', 'Россия', 'МОЛОТ', '883 мм', 'к.7,62х39', '415 мм', '3,8 кг', 10, 'Винторез-СХ.png', 39000),
(25, 'Патрон', 'Пуля к.7,62х39 FMJ m=8,0 г.', 'Россия', 'Биметалл', '7,62 см', '7,62х39', '0', '8,0 г.', 150, 'Пуля к.7,62х39 FMJ m=8,0 г..png', 3499),
(27, 'Патрон', 'Патрон светозвуковой ', 'Россия', 'ТехКрим', '10 мм', 'к.10х31 ', '0', '0,8г', 20, 'Патрон светозвуковой к.10х31 ТТ-СХ ТехКрим.png', 1000),
(30, 'Патрон', 'Патрон светозвуковой ', 'Россия', 'ТехКрим', '1,3 м', '57 ТК', '0', '0,75 г', 20, 'Патрон светозвуковой к. 57ТК ТехКрим.png', 1450),
(33, 'Дробовик', 'МР-27М', 'Россия', 'Baikal', '1200 мм', '12х76', '725 мм', '3,60 кг', 2, 'МР-27М.png', 34000),
(34, 'Дробовик', 'MP-155 Profi', 'Россия', 'Baikal', '1200 мм', '12х76', '750 мм', '3,15 кг', 4, 'MP-155 Profi.png', 29499),
(37, 'Калаш', 'СХ-АК12', 'Россия', 'Калашников/АК', '945 мм', '5,45х39 ', '415 мм', '3,4 кг', 10, 'СХ-АК12.png', 37000),
(38, 'Калаш', 'СХ-АК105', 'Россия', 'Калашников/АК', '945 мм', '5,45х39', '314 мм', '3,4 кг', 10, 'СХ-АК105.png', 36000),
(39, 'Калаш', 'ОС АК103', 'Россия', 'Калашников/АК', '945 мм', '7,62х39', '336 мм', '3,35 кг', 10, 'ОС АК103.png', 41000);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `name2` varchar(25) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `name2`, `password`) VALUES
(7, 'artur@gmail.com', 'Артур', 'Квасюк', '123'),
(8, 'pasha@gmail.com', 'Павел', 'Люль', 'qwe'),
(12, 'german17@mail.ru', 'Герман', 'Шпиц', 'qwerty'),
(13, 'sasha@gmail.com', 'Александр', 'Дор', '1й2ц3у');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ekipirovka`
--
ALTER TABLE `ekipirovka`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `korzina`
--
ALTER TABLE `korzina`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ognestrel`
--
ALTER TABLE `ognestrel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ekipirovka`
--
ALTER TABLE `ekipirovka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `korzina`
--
ALTER TABLE `korzina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT для таблицы `ognestrel`
--
ALTER TABLE `ognestrel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
