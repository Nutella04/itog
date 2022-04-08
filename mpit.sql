-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 08 2022 г., 07:45
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mpit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animal_chip`
--

CREATE TABLE `animal_chip` (
  `id` int(100) NOT NULL,
  `id_shelter` int(80) NOT NULL,
  `id_owner` int(80) NOT NULL,
  `id_finder` int(80) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `poroda` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `text` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sick` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `animal_chip`
--

INSERT INTO `animal_chip` (`id`, `id_shelter`, `id_owner`, `id_finder`, `img1`, `poroda`, `age`, `text`, `gender`, `sick`) VALUES
(1, 2, 11, 4, 'img/4.jpg', 'Мопс', '1 год', 'Милая пельмешка', 'Сука', 'Здорова'),
(3, 1, 0, 3, 'img/5.jpg', 'Померанский шпиц', '7 лет', 'Маленькое солнышко', 'Сука', 'Здорова'),
(4, 1, 0, 1, 'img/6.jpg', 'Ретривер', '5 лет', 'Он очень хороший, ласковый, любит гулять', 'Кобель', 'Грыжа, запор'),
(5, 1, 0, 1, 'img/7.jpg', 'Чихуахуа', '3 года', 'Немного вредный, но милый. Вы точно его полюбите', 'Кобель', 'Диарея'),
(6, 2, 0, 4, 'img/8.jpg', 'Дворняга', '3 месяца', 'Совсем щеночек. Немного злой, но милый', 'Сука', 'Гельминтоз'),
(13, 0, 0, 0, 'img/img-789.jpg', 'Акита Ину', '2 года', 'Самый крутышка из всех, люблю его всем сердцем', 'Кобель', 'Здоров'),
(14, 0, 0, 0, 'img/Dalmatin-0.jpg.webp', 'Далматинец', '5 лет', 'Моя пятнистая радость. Любит всякие вкусняшки, спокойная', 'Сука', 'Здорова'),
(15, 0, 13, 5, 'img/norsk-elgkhund-sort-chernyj-norvegiya.jpg', 'Лайка', '4 года', 'Черный пес, ласковый, добрый', 'Кобель', 'Хромая лапа'),
(16, 0, 0, 5, 'img/a4e08db7df30455d93c1830ded080352.jpg', 'Лайка', '3 года', 'Светлый пес со шрамом на левом глазу', 'Кобель', 'Здоров'),
(17, 0, 4, 0, 'img/husky-2671006_1920.jpg', 'Хаски', '1 год', 'Любит гулять, всегда активничает', 'Кобель', 'Здоров'),
(18, 0, 0, 13, 'img/dsadsdasdas.jpg', 'Дворняга', '4 года', 'Хороший мальчик', 'Кобель', 'Отсутствует');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `login` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL DEFAULT 'noname',
  `surname` varchar(80) NOT NULL DEFAULT 'noname',
  `otname` varchar(80) NOT NULL DEFAULT 'noname',
  `otlov` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `phone`, `password`, `name`, `surname`, `otname`, `otlov`) VALUES
(1, 'lena', '12345678', '12345', 'Лена', 'Ефимова', 'Александровна', 0),
(4, 'ayan', '4324234234', '12345', 'Аян', 'Ефремов', 'Александрович', 0),
(5, 'rostik', '4324234234', '12345', 'Ростислав', 'Аристархов', 'Олегович', 0),
(6, 'katya', '4324234234', '12345', 'Екатерина', 'Борисова', 'Дмитриевна', 0),
(7, 'grisha', '+7 (967) 913-58-45', '12345', 'noname', 'noname', 'noname', 0),
(8, 'rabotnik', '', '12345', 'noname', 'noname', 'noname', 1),
(9, 'rabotnik2', '', '12345', 'noname', 'noname', 'noname', 1),
(10, 'lida', '12345678', '12345', 'noname', 'noname', 'noname', 0),
(11, 'alina', '12345678', '12345', 'noname', 'noname', 'noname', 0),
(12, 'Аян', '89356985830', ' фыкпнлоцывац', 'noname', 'noname', 'noname', 0),
(13, 'Аян', '893560923492', 'ырваилыфапыпы', 'noname', 'noname', 'noname', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `zayavka_chip`
--

CREATE TABLE `zayavka_chip` (
  `id` int(100) NOT NULL,
  `id_owner` int(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `poroda` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `text` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `sick` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `zayavka_otlov`
--

CREATE TABLE `zayavka_otlov` (
  `id` int(80) NOT NULL,
  `kolvo` int(80) NOT NULL,
  `text` varchar(300) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `id_finder` int(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zayavka_otlov`
--

INSERT INTO `zayavka_otlov` (`id`, `kolvo`, `text`, `adres`, `img`, `id_finder`, `status`) VALUES
(10, 2, 'У одной собаки светлая шерстка, у другой темная, не агрессивные', 'Лермонтово 17', 'img/2_d_850.jpg', 4, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animal_chip`
--
ALTER TABLE `animal_chip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayavka_chip`
--
ALTER TABLE `zayavka_chip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayavka_otlov`
--
ALTER TABLE `zayavka_otlov`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animal_chip`
--
ALTER TABLE `animal_chip`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `zayavka_chip`
--
ALTER TABLE `zayavka_chip`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `zayavka_otlov`
--
ALTER TABLE `zayavka_otlov`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
