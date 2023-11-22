-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2023 г., 14:48
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quadrocopter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `date_order` date DEFAULT NULL,
  `date_delivery` date DEFAULT NULL,
  `addres_delivery` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_quadrocopter` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_oplaty` date DEFAULT NULL,
  `date_poluchenie` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `date_order`, `date_delivery`, `addres_delivery`, `id_user`, `id_quadrocopter`, `amount`, `date_oplaty`, `date_poluchenie`) VALUES
(1, '2023-03-28', '2023-03-24', 'ул. Александровская, 109', 1, 1, 1, NULL, NULL),
(2, '2023-03-28', '2023-03-22', 'Платовский проспект, 116', 1, 1, 1, NULL, NULL),
(4, '2023-04-26', '2023-04-24', 'Платовский 116', 1, 1, 1, NULL, NULL),
(6, '2027-04-23', NULL, '', 3, 1, 3, '2027-04-23', '2027-04-23');

-- --------------------------------------------------------

--
-- Структура таблицы `quadrocopter`
--

CREATE TABLE `quadrocopter` (
  `id_quadrocopter` int(11) NOT NULL,
  `model` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `count` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisanie` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `quadrocopter`
--

INSERT INTO `quadrocopter` (`id_quadrocopter`, `model`, `color`, `price`, `count`, `name`, `opisanie`, `image`) VALUES
(1, 'DJI Mavic 3 Combo', 'серый', '3000.00', '1', 'Квадрокоптер DJI Mavic 3 Combo серый.', 'Квадрокоптер DJI Mavic 3 записывает видео с воздуха в высоком разрешении, и фиксирует до 1 миллиарда оттенков с использованием цветового профиля D-Log 10 бит.\r\nВы получите оттенки неба с естественными переходами, сохранив богатство деталей для большей гибкости при постобработке.', 'dron1.png'),
(2, 'Квадрокоптер DJI Air 2 S Combo', 'серый', '4500.00', '1', 'Квадрокоптер DJI Air 2 S Combo серый.', 'Квадрокоптер DJI Air 2 S Combo выполнен в сером корпусе и обладает широким набором функций. \r\nБлагодаря камере 20 Мп вы можете снимать качественные видеоролики, которые будут отличаться плавностью видеоряда при разрешении 4K и скорости 60 кадр/с.\r\nБлагодаря специальному алгоритму D-Cinelike изображение несет в себе больше сведений, при обработке которых вы получаете максимально детализированную картинку.\r\nУстройство использует аккумулятор Li-pol для работы, емкость которого соответствует 3500 мА·ч.\r\nПолный заряд аккумулятора позволяет ему находиться в полете 31 минуту. В комплект входит три таких аккумулятора.\r\nТехнология ActiveTrack дает возможность дрону следовать за объектами, при этом, огибая препятствия в автоматическом режиме. \r\nЭто позволяет ему не только лететь по точному маршруту, но и удерживать в центральной части кадра объект. \r\nСтабильность сигнала обусловлена автоматическим переключением частоты с 2.4 ГГц на 5.8 ГГц и обратно в зависимости от количества помех.\r\nСкорость, с которой дрон способен летать, составляет 68.4 км/ч. Сигнал с пультом ДУ сохраняется на расстоянии 8000 м.', 'dron3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `FIO` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addres` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `FIO`, `date_birth`, `tel`, `email`, `addres`, `login`, `password`, `role`) VALUES
(1, 'Рябышенков', '9998-12-31', '89894055335', 'ryabushenkov@yandex.ru', 'пр. Платовский, 116', 'k', 'k', 'Клиент'),
(2, 'Киселёв Павел Александрович', '2002-12-07', '89528710188', 'pavelkiselev248@gmail.com', 'Платовский проспект, 116', 'kiselev', '18dkt,a8', 'Менеджер'),
(3, 'Карпухин Даниил Олегович', '2003-10-06', '89895135240', 'danil921035@mail.ru', 'пр. Платовский, 116', 'karpukhin', '8dk,0TZL', 'Клиент');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_quadrocopter_2` (`id_quadrocopter`);

--
-- Индексы таблицы `quadrocopter`
--
ALTER TABLE `quadrocopter`
  ADD PRIMARY KEY (`id_quadrocopter`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `quadrocopter`
--
ALTER TABLE `quadrocopter`
  MODIFY `id_quadrocopter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_quadrocopter`) REFERENCES `quadrocopter` (`id_quadrocopter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
