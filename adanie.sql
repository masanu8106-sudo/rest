-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 23 2025 г., 18:32
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `adanie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int NOT NULL,
  `id_user` int NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otvet` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `merop`
--

CREATE TABLE `merop` (
  `id_merop` int NOT NULL,
  `id_grup` int NOT NULL,
  `id_vid` int NOT NULL,
  `name_merop` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `time_merop` datetime NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `merop`
--

INSERT INTO `merop` (`id_merop`, `id_grup`, `id_vid`, `name_merop`, `price`, `date1`, `date2`, `time_merop`, `image`, `description`, `adres`) VALUES
(2, 2, 1, 'АЭС в Курчатове и Курская магнитная аномалия', '100', '2025-04-15', '2025-04-16', '2025-04-17 13:57:46', 'UploadImg/АЭС в Курчатове.png', 'Оба объекта находятся в Курской области.\r\nКурская атомная станция — одна из самых мощных АЭС в России. Она обеспечивает 96% всей электроэнергии Центрального региона России. На станции проводят экскурсии по записи — нужно заполнить заявку на сайте «Росэнергоатома» минимум за 5 дней до визита и взять с собой паспорт.\r\nНа станции можно посетить учебно-тренировочный центр, увидеть лаборатории и музейные экспозиции, сделать селфи на фоне АЭС со смотровой площадки.\r\n', 'Курская область, Курчатово'),
(3, 3, 2, 'Магнитогорский металлургический комбинат', '100', '2025-04-16', '2025-04-26', '2025-04-17 12:57:46', 'UploadImg/Магнитогорский металлургический комбинат.png', 'Объект относится к категории опасных, поэтому туристам предоставляют спецодежду, страховку и проводят инструктаж по технике безопасности. На территории ММК экскурсантов сопровождают гид и технический специалист.', 'Магнитогорск'),
(4, 2, 2, 'Выксунский завод', '100', '2025-04-18', '2025-04-20', '2025-04-17 14:57:46', 'UploadImg/Выскунский завод.png', 'Завод Объединённой металлургической компании проводит групповые экскурсии по нескольким направлениям:', ''),
(5, 4, 1, 'Смоленская АЭС', '120', '2025-04-19', '2025-04-21', '2025-04-17 12:57:46', 'UploadImg/Смоленская АЭС.png', 'АЭС даёт 80% электроэнергии в Смоленской области и 8% в Центральном регионе России. Для экскурсии по территории станции туристам выдают не только спецкостюм, но и индивидуальный накопительный дозиметр, который фиксирует дозу излучения. Подавать заявку нужно за 2–3 месяца.', 'Смоленск'),
(6, 5, 1, 'Карьер Янтарного комбината', '230', '2025-04-25', '2025-04-27', '2025-04-17 14:57:46', 'UploadImg/Карьер Янтарного комбината.png', 'Янтарный комбинат — достопримечательность Калининградской области и самый большой в мире карьер по добыче солнечного камня. В программу экскурсий входит посещение самого предприятия и музея при комбинате, прогулка по приморскому парку и селфи на смотровой площадке с видом на карьер.', ''),
(7, 2, 1, 'Тульский молочный комбинат', '340', '2025-04-17', '2025-04-20', '2025-04-17 10:57:46', 'UploadImg/Тульский молочный комбинат.png', 'Также в городе по предварительной записи можно посетить Тульский молочный комбинат, где проводят гастрономическую экскурсию «Сырный день». Туристы могут увидеть все этапы производства сыра, в том числе процесс посолки, когда в внушительные солильные бассейны опускают порядка 3,2 тонны сыра. Это одна варка, в целом же рассол вмещает 3,8 тонны сыра. Также посетителям показывают, как созревают огромные сырные головы. Премиальные твёрдые и полутвёрдые сыры размещают на деревянных полках из хвойных пород, выращенных на территории горного массива Юра во Франции. Экскурсия включает дегустацию всех пяти сортов сыра.', 'Тула');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int NOT NULL,
  `name_news` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `date` int NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `name_news`, `description`, `date`, `image`) VALUES
(2, 'В МАГНИТОГОРСКЕ СОСТОЯЛСЯ ВСЕРОССИЙСКИЙ ФОРУМ ПО ПРОМТУРИЗМУ', 'Мероприятие организовано к пятилетию запуска промышленного туризма в ПАО «ММК» при поддержке правительства Челябинской области, АНО «Центр проектного развития» и АНО «Агентство стратегических инициатив по продвижению новых проектов».\r\nВ форуме приняли участие более 100 представителей промышленных предприятий из 15 регионов России\r\n', 2025, 'UploadImg/Форум Магнитогорск.png'),
(3, 'СТАВРОПОЛЬСКИЙ КРАЙ СДЕЛАЕТ АКЦЕНТ В РАЗВИТИИ ПРОМТУРИЗМА НА', 'Ставропольский край обладает уникальными возможностями с точки зрения привлечения туристов, школьников, студентов и местных жителей на производственные площадки', 2025, 'UploadImg/Ставропольский край.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL,
  `id_user` int NOT NULL,
  `id_merop` int NOT NULL,
  `kol` int NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `id_merop`, `kol`, `status`) VALUES
(2, 1, 5, 2, 0),
(3, 1, 2, 2, 0),
(4, 1, 7, 3, 1),
(5, 1, 6, 4, 0),
(6, 1, 7, 1, 1),
(7, 1, 2, 3, 1),
(8, 1, 6, 3, 0),
(9, 1, 5, 3, 1),
(10, 1, 5, 10, 1),
(11, 1, 2, 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `fio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `fio`, `email`, `login`, `password`, `avatar`, `role`) VALUES
(1, 'test', 'test@gmail.com', 'test', 'test', 'UploadImg/leto-reka-les-solnce-peyzazh.webp', 'client'),
(3, 'admin', 'admin@gmail.com', 'manager', 'manager', 'UploadImg/leto-reka-les-solnce-peyzazh.webp', 'manager');

-- --------------------------------------------------------

--
-- Структура таблицы `vid_grupp`
--

CREATE TABLE `vid_grupp` (
  `id_grup` int NOT NULL,
  `name_grup` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vid_grupp`
--

INSERT INTO `vid_grupp` (`id_grup`, `name_grup`) VALUES
(2, 'Туристические группы'),
(3, 'Иностранные группы'),
(4, 'Школьные экскурсии'),
(5, 'Группы студентов'),
(6, 'Индивидуальные туристы');

-- --------------------------------------------------------

--
-- Структура таблицы `vid_merop`
--

CREATE TABLE `vid_merop` (
  `id_vid` int NOT NULL,
  `name_vid` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vid_merop`
--

INSERT INTO `vid_merop` (`id_vid`, `name_vid`) VALUES
(1, 'Туры'),
(2, 'Экскурсии'),
(4, 'Путешественнику');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `merop`
--
ALTER TABLE `merop`
  ADD PRIMARY KEY (`id_merop`),
  ADD KEY `id_grup` (`id_grup`),
  ADD KEY `id_vid` (`id_vid`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ merop` (`id_merop`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `vid_grupp`
--
ALTER TABLE `vid_grupp`
  ADD PRIMARY KEY (`id_grup`);

--
-- Индексы таблицы `vid_merop`
--
ALTER TABLE `vid_merop`
  ADD PRIMARY KEY (`id_vid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `merop`
--
ALTER TABLE `merop`
  MODIFY `id_merop` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `vid_grupp`
--
ALTER TABLE `vid_grupp`
  MODIFY `id_grup` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `vid_merop`
--
ALTER TABLE `vid_merop`
  MODIFY `id_vid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `merop`
--
ALTER TABLE `merop`
  ADD CONSTRAINT `merop_ibfk_1` FOREIGN KEY (`id_grup`) REFERENCES `vid_grupp` (`id_grup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `merop_ibfk_2` FOREIGN KEY (`id_vid`) REFERENCES `vid_merop` (`id_vid`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_merop`) REFERENCES `merop` (`id_merop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
