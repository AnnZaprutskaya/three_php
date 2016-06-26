-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 26 2016 г., 12:05
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `text` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `text`) VALUES
(1, 'чашки'),
(2, 'тарелки, блюда, салатники'),
(3, 'кастрюли'),
(4, 'столовые приборы'),
(5, 'сковороды'),
(6, 'чайники'),
(7, 'детская посуда'),
(8, 'для хранения'),
(9, 'для путешествий'),
(10, 'формы для выпечки'),
(11, 'кухонные ножи'),
(12, 'сервизы'),
(13, 'кувшины');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `material` int(11) DEFAULT NULL,
  `info` varchar(75) DEFAULT NULL,
  `img_path` varchar(50) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `sale` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `material`, `info`, `img_path`, `category`, `amount`, `price`, `sale`) VALUES
(1, 'Термос дорожный', 3, 'высота - 30 см', 'img/termos.jpg', 9, NULL, 180000, 0),
(2, 'Кружка Disney Cinderella', 2, 'высота - 10 см', 'img/cinderella.jpg', 1, NULL, 55000, 20),
(3, 'Кружка Disney Mickey Mouse', 2, 'высота - 10 см', 'img/mickey.jpg', 1, 55, 55000, 0),
(4, 'Чайник "Рябина" ', 1, '15 см - 15 см', 'img/teapot.jpg', 6, 27, 102500, 0),
(5, 'Набор детский "Hello kitty"', 2, NULL, 'img/kitty.jpg', 7, 17, 163000, 30),
(6, 'Форма для выпечки', NULL, 'диаметр - 30см', 'img/bake_form.jpg', 10, 76, 96900, 0),
(7, 'Сковорода Magic Fire', 5, 'диаметр - 30см', 'img/pan_1.jpg', 5, 20, 310500, 0),
(8, 'Сковорода The Force of Fire', 5, 'диаметр - 26см', 'img/pan_2.jpg', 5, 7, 319900, 10),
(9, 'Чашка "Ангел/демон"', 1, '15 см - 9 см', 'img/wing_cup.jpg', 1, 48, 72000, 0),
(10, 'Тарелка с пандой', 1, 'диаметр - 20см', 'img/panda_plate.jpg', 2, 3, 23000, 0),
(11, 'Набор детский "Умка"', 1, NULL, 'img/white_bear.jpg', 7, 53, 124600, 10),
(13, 'Набор посуды "Синий луг"', 4, 'на 4 персоны', 'img/blue_set.jpg', 12, 9, 712000, 0),
(14, 'Набор тарелок ', 1, 'Тарелки десертные(6шт.), обеденные(6шт.), глубокие(6шт.), салатник', 'img/white_plates.jpg', 2, 32, 230000, 10),
(15, 'Чайный сервиз "Королевский"', 4, 'на 6 персон', 'img/royal_set.jpg', 12, 7, 130000, NULL),
(16, 'Тарелка Disney Winnie-the-Pooh', 2, 'диаметр 24см', 'img/vinny_plate.jpg', 2, 54, 21900, NULL),
(17, 'Набор посуды "Ромашки"', 2, 'чайный сервиз, тарелки и глубокие тарелки на 8 персон,блюдо,салатник', 'img/romashka.jpg', 12, 39, 970000, 10),
(18, 'Набор ножей Red', NULL, 'в комплекте 5 ножей, ножницы и прибор для затачивания', 'img/knives_2.jpg', 11, 41, 504900, NULL),
(19, 'Набор ножей Bohmann Black', NULL, 'в комплекте 5 ножей и ножницы', 'img/knives_1.jpg', 11, 16, 440000, NULL),
(20, 'Чайник заварочный "Eternity"', 2, 'френч-пресс', 'img/teapot_2.jpg', 6, 33, 86500, NULL),
(21, 'Набор детский "Счёт"', 6, 'В наборе 3 тарелки разных размеров, безопасные вилка и ложка', 'img/count_set.jpg', 7, 31, 75000, 12),
(22, 'Вилка 5-зубцовая "Astra"', 8, 'Длина - 26см', 'img/astra_fork.jpg', 4, 55, 32000, NULL),
(23, 'Вилка сервировочная "Ellisse"', 8, NULL, 'img/serv_fork.jpg', 4, 6, 120000, 15),
(24, 'Ложка для коктейля "Byron"', 8, 'Длина 22см ', 'img/coctail_spoon.jpg', 4, 16, 30000, NULL),
(25, 'Ложка для ризотто "Astra"', NULL, 'Длина  26см, перфорированная', 'img/rice_spoon.jpg', 4, 12, 98000, 5),
(26, 'Кастрюля "Shine"', 7, 'Диаметр 30см, высота 18 см', 'img/pot_1.jpg', 3, 7, 302000, 10),
(27, 'Ёмкость для хранения продуктов', 2, 'Объём - 2,6 л', 'img/container.jpg', 8, 78, 157200, 5),
(28, 'Банка "Club"', 2, '0,28 л', 'img/club.jpg', 8, 32, 66400, 5),
(29, 'Банка "FREE STYLE" фуксия', 2, '0,5 л', 'img/free_style.jpg', 8, 45, 108800, 5),
(30, 'Банка "FRUIT FANTASY" синяя', 2, 'Объём 0,5 л', 'img/fruit.jpg', 8, 76, 35200, NULL),
(31, 'Банка "Mania Bois"', 2, 'Объём 0,75л', 'img/wood.jpg', 8, 12, 110600, 10),
(32, 'Набор посуды Disney Frozen', 2, 'В комплекте: тарелка глубокая, тарелка плоская, кружка.', 'img/frozen.jpg', 7, 112, 165000, NULL),
(33, 'Сервиз Iwona Classic Line', 4, 'Чашки и блюдца на 6 персон, чайник, сахарница, кувшинчик для сливок.', 'img/iwona2.jpg', 12, 11, 879900, NULL),
(34, 'Набор форм для выпечки Beauty', 5, 'В комплекте 5 форм для больших и малых кексов или бисквитов.', 'img/forms.jpg', 10, 35, 230900, NULL),
(35, 'Набор детский East friends', 1, '3 разных тарелки, кружка, ложка и поднос-подставка. ', 'img/china_set.jpg', 7, 35, 100400, NULL),
(36, 'Кружка Disney Winnie-the-Pooh', 2, 'высота - 10 см', 'img/vinny_cup.jpg', 1, 37, 59900, NULL),
(37, 'Блюдо д/торта "Iwona" гусь', 4, 'диаметр - 24см', 'img/goose.jpg', 2, 32, 231800, NULL),
(38, 'Блюдо "Bolero" Indi золото', 4, 'диаметр - 24см', 'img/bolero.jpg', 2, 22, 217200, NULL),
(39, 'Блюдо "Bolero" розовый букет', 4, 'диаметр - 29см', 'img/bolero_roses.jpg', 2, 41, 279600, NULL),
(40, 'Кувшин "Arc"', 2, 'объём 1,3 литра', 'img/arc.jpg', 13, 9, 87600, 3),
(41, 'Кувшин "ARCHEDIA ROSSO"', 2, 'объём - 1,1 литра', 'img/rosso.jpg', 13, 23, 91200, 5),
(42, 'Сервиз Royal Albert', 4, 'Сервиз на 6 персон из элитного костяного фарфора в викторианском стиле.', 'img/english.jpg', 12, 14, 5990000, NULL),
(43, 'Набор детский "Пикник" розовый', 6, 'Тарелки, кружки, ложки - на 4 детей.Cахарница, чайник, кувшинчик для сливок', 'img/girl_set.jpg', 7, 33, 300700, 10),
(44, 'Кружка "Жираф"', 1, 'ручная работа', 'img/giraffe.jpg', 1, 4, 320000, NULL),
(45, 'Набор детский "Жирафик"', 1, '3 предмета', 'img/little_g.jpg', 7, 42, 119000, 15),
(46, 'Сервиз кофейный "Autumn lines"', 1, 'на 4 персоны', 'img/coffee.jpg', 12, 79, 670900, 20),
(47, 'Форма силиконовая для кексов', NULL, 'в наборе 2 шт.', 'img/silicon_form.jpg', 10, 58, 42900, NULL),
(48, 'Сковорода "Kitchen dream" ', NULL, 'с крышкой', 'img/red_pan.jpg', 5, 99, 545000, 10),
(49, 'Набор из 3 кастрюль "Violeta"', 5, NULL, 'img/violeta_pots.jpg', 3, 26, 1200000, 5),
(50, 'Чайник электрический Vitek', NULL, NULL, 'img/vitek.jpg', 6, 66, 215000, 10),
(51, 'Чайник электр. Vitek Red Silk', NULL, NULL, 'img/vitek_red.jpg', 6, 34, 403500, 15),
(54, 'Сервиз чайный "Розовый сад"', 4, 'Блюдца и чашки на 6 персон.', 'img/tea_rose.jpg', 12, 34, 560900, 0),
(101, 'Сервиз White Heaven ', 1, 'На 4 персоны.', 'img/white_heaven.jpg', 12, 89, 178000, 5),
(138, 'Набор ножей для сыра (EVA).', 8, 'Нож д.тверд. сыра, нож д. мягкого плавленого сыра, универсальн. нож д.сыра', 'img/knives.jpg', 11, 0, 495000, 0),
(147, 'Чайник "Рукоделие"', 1, 'объём - 0,7 л', 'img/db_130723-.jpg', 6, 44, 134000, 0),
(151, 'Набор детский "Princess"', 1, '', 'img/little_princess.jpg', 7, 32, 112900, 0),
(156, 'Сливочник ', 1, '', 'img/1.gif', 13, 32, 257900, 0),
(176, '', 0, '', 'img/', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `text` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `text`) VALUES
(1, 'керамика'),
(2, 'стекло'),
(3, 'аллюминий'),
(4, 'фарфор'),
(5, 'тефлон'),
(6, 'пластик'),
(7, 'чугун'),
(8, 'сталь'),
(9, 'хрусталь');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `goods` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `address` varchar(35) DEFAULT NULL,
  `time_pref` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `goods`, `amount`, `address`, `time_pref`) VALUES
(1, 5, 1, '5,6,7,18,', '3,2,1,4,', NULL, NULL),
(3, 5, 1, '5,6,7,18,27,', '3,2,1,4,2,', NULL, NULL),
(4, 5, 1, '5,6,7,18,27,2,1,', '3,2,1,4,2,5,1,', NULL, NULL),
(5, 5, 1, '5,6,7,18,27,2,1,18,', '3,2,1,4,2,5,1,3,', NULL, NULL),
(6, 5, 1, '1,2,5,7,18,27,', '1,1,2,3,4,5,', NULL, NULL),
(7, 5, 1, '1,2,5,7,18,27,', '1,1,2,3,4,5,', NULL, NULL),
(8, 5, 1, '2,5,7,18,27,', '1,2,3,4,5,', NULL, NULL),
(22, 5, 1, '2,2,2,26,', '7,1,1,5,', NULL, NULL),
(23, 5, 1, '1,4,22,', '3,4,11,', NULL, NULL),
(24, 5, 1, '1,4,22,47,33,', '3,4,11,2,2,', NULL, NULL),
(25, 5, 1, '22,33,47,', '1,4,11,', NULL, NULL),
(26, 5, 1, '22,33,47,13,', '1,4,11,1,', NULL, NULL),
(28, 5, 1, '5,1,', '1,1,', NULL, NULL),
(29, 5, 1, '5,1,', '1,1,', NULL, NULL),
(30, 5, 1, '43,27,27,', '2,1,1,', NULL, NULL),
(68, 5, 1, '4,47,28,', '2,2,8,', 'asdfghj', '00.00-16.30'),
(69, 5, 1, '4,47,28,', '2,2,8,', 'asdfghj', '00.00-16.30'),
(70, 1, 1, '4,47,28,', '2,2,8,', 'ул. якуба колоса 54', '12.00-16.00'),
(71, 1, 1, '4,47,28,', '2,2,8,', 'ул. якуба колоса 54', '12.00-16.00'),
(72, 1, 1, '4,47,28,', '2,2,8,', 'пр. любимова 12б', '11.00-15.00'),
(73, 1, 1, '4,47,28,', '2,2,8,', 'пр. любимова 12б', '11.00-15.00'),
(74, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(75, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(76, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(77, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(78, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(79, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(80, 1, 1, '4,47,28,', '2,2,8,', 'фывапр', '12.00-16.00'),
(81, 1, 1, '4,47,28,18,', '2,2,8,1,', 'ул. якуба колоса 54', '9.00 - 17.00'),
(82, 1, 1, '4,47,28,18,', '2,2,8,1,', 'ул. якуба колоса 54', '9.00 - 17.00'),
(83, 1, 1, '4,47,28,18,', '2,2,8,1,', 'fff76asdfghj', '11.00-15.00');

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `address`) VALUES
(1, 'г.Минск, ул.Академика Фёдорова 111б'),
(2, 'г.Минск, ул.Веры Хоружей 56'),
(3, 'г.Минск, пр.Любимова 68/1'),
(4, 'г.Минск, ул.Якуба Колоса 50/4'),
(5, 'г.Гомель, ул.Катунина 47'),
(6, 'г.Брест, ул.Красноармейская 52'),
(7, 'г.Барановичи, ул. 50 лет ВЛКСМ , д.113а');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `is_admin`) VALUES
(1, 'ann', '1234', 'zaprutskaya2016@yandex.ru', 1),
(5, 'mishka', 'mishka', 'zaprutskaya2016@yandex.ru', 0),
(6, 'sawsa', 'mail', 'aaaaa@mail.ru', 0),
(7, 'anda_akemi', '1212', 'zaprutskaya2016@yandex.ru', 0),
(8, 'verdeth', 'kamikadze666', 'bezdushnyi.botan@gmail.com', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
