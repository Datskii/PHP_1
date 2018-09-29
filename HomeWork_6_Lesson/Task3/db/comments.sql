
--
-- Структура таблицы `feedback`
--

CREATE TABLE comments.`return`
(
  id int PRIMARY KEY NOT NULL,
  user_name varchar(60) DEFAULT NULL ,
  text varchar(60) DEFAULT NULL,
  image_id int DEFAULT NULL
);


--
-- Дамп данных таблицы `feedback`
--

INSERT INTO comments.`return`(`id`, `user_name`, `text`, `image_id`)
VALUES (1, 'Антон', 'Мое настроение', 1),
       (2, 'Инга', 'О как вцепился', 2),
       (3, 'Диана', 'Грустный кот', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE comments.`images` (
  `id`    int primary key NOT NULL AUTO_INCREMENT,
  `name`  varchar(60)  DEFAULT NULL,
  `path`  varchar(60) DEFAULT NULL,
  `views` int      DEFAULT NULL
);

--
-- Дамп данных таблицы `images`
--

INSERT INTO comments.`images` (`name`, `path`, `views`)
VALUES ('img_5.jpg', 'img_5.jpg', NULL),
       ('img_8.jpg', 'img_8.jpg', NULL);




-- AUTO_INCREMENT для таблицы `comments`

ALTER TABLE comments.`return`
  MODIFY `id` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
--


