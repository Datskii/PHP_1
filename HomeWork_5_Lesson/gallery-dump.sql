SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id`          int(11)      NOT NULL,
  `path`        varchar(255) NOT NULL,
  `size`        int(11)      NOT NULL,
  `name`        varchar(64) DEFAULT NULL,
  `view`        int(11)     DEFAULT NULL,
  `click`       int(11)     DEFAULT NULL,
  `description` text
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `path`, `size`, `name`, `view`, `click`, `description`)
VALUES (1, './img/', 160986, 'img_1.jpg', 0, 0, NULL),
       (2, './img/', 338451, 'img_2.jpg', 0, 0, NULL),
       (3, './img/', 122944, 'img_3.jpg', 0, 0, NULL),
       (4, './img/', 204683, 'img_4.jpg', 0, 0, NULL),
       (5, './img/', 157030, 'img_5.jpg', 0, 0, NULL),
       (6, './img/', 167750, 'img_6.jpg', 0, 0, NULL),
       (7, './img/', 71951, 'img_7.jpg', 0, 0, NULL),
       (8, './img/', 98397, 'img_8.jpg', 0, 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;