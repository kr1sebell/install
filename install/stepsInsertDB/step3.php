<?php
$Query3 = "
--
-- Структура таблицы `cookie_token`
--

CREATE TABLE `cookie_token` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `cork_settings`
--

CREATE TABLE `cork_settings` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img_logo` text NOT NULL,
  `text_h1` text NOT NULL,
  `text_h2` text NOT NULL,
  `text_p` text NOT NULL,
  `footer` text NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL,
  `min` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cork_settings`
--

INSERT INTO `cork_settings` (`id`, `title`, `img_logo`, `text_h1`, `text_h2`, `text_p`, `footer`, `day`, `month`, `year`, `hour`, `min`, `sec`, `active`) VALUES
(1, 'Технические работы', 'logo.png', 'Сайт откроется через:', '', '', '', '".date("d")."', '".date("m")."', '".date("Y")."', '07', '01', '01', 1);

-- --------------------------------------------------------


--
-- Структура таблицы `datePreorderListStop`
--

CREATE TABLE `datePreorderListStop` (
  `id` int(11) NOT NULL,
  `date_false` date NOT NULL,
  `start_time_false` time NOT NULL,
  `stop_time_false` time NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `datePreorderListStop`
--

INSERT INTO `datePreorderListStop` (`id`, `date_false`, `start_time_false`, `stop_time_false`, `active`) VALUES
(2, '2020-01-13', '04:00:00', '12:00:00', 1),
(3, '2020-01-13', '04:00:00', '18:00:00', 1),
(4, '2020-02-21', '00:00:00', '23:59:00', 1),
(5, '2020-02-22', '00:00:00', '23:59:00', 1),
(6, '2020-02-23', '00:00:00', '23:59:00', 1),
(7, '2020-03-06', '00:00:00', '23:59:00', 1),
(8, '2020-03-07', '00:00:00', '23:59:00', 1),
(9, '2020-03-08', '00:00:00', '23:59:00', 1),
(10, '2020-12-31', '00:00:00', '23:59:00', 1),
(11, '2021-02-14', '00:00:00', '23:59:00', 1),
(12, '2021-02-23', '00:00:00', '23:59:00', 1),
(13, '2021-03-08', '00:00:00', '23:59:00', 1),
(14, '2021-03-05', '00:00:00', '23:59:00', 1),
(15, '2021-04-01', '00:00:00', '23:59:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dilivery_zones`
--

CREATE TABLE `dilivery_zones` (
  `id` int(11) NOT NULL,
  `id_affilate` int(11) NOT NULL DEFAULT '1',
  `id_zones` int(11) NOT NULL DEFAULT '0',
  `id_points` int(11) NOT NULL DEFAULT '0',
  `coordinates` text NOT NULL,
  `fill` text NOT NULL,
  `price_delivered` varchar(255) NOT NULL,
  `min_price` varchar(255) NOT NULL,
  `min_order` varchar(255) NOT NULL,
  `api_id` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `product` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `type_map` int(11) NOT NULL DEFAULT '1',
  `time_delivered` int(11) NOT NULL DEFAULT '10',
  `time_pickup` int(11) NOT NULL DEFAULT '10',
  `priorityTime` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `DZ_District`
--

CREATE TABLE `DZ_District` (
  `id` int(11) NOT NULL,
  `DistrictName` text,
  `id_locality` int(11) DEFAULT NULL,
  `id_type_district` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `DZ_Locality`
--

CREATE TABLE `DZ_Locality` (
  `id` int(11) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_type_locality` int(11) DEFAULT NULL,
  `id_city_price` int(11) NOT NULL,
  `localityName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DZ_Locality`
--

INSERT INTO `DZ_Locality` (`id`, `id_region`, `id_type_locality`, `id_city_price`, `localityName`, `active`) VALUES
(1, 1, 1, 1, '".$CityTitle."', 1);


-- --------------------------------------------------------

--
-- Структура таблицы `DZ_PriceDeliveryLocality`
--

CREATE TABLE `DZ_PriceDeliveryLocality` (
  `id` int(11) NOT NULL,
  `id_locality` int(11) DEFAULT NULL,
  `minPriсeOrder` int(11) DEFAULT '0',
  `minPriceDelivery` int(11) DEFAULT '0',
  `PriceDelivery` int(11) DEFAULT '0',
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DZ_PriceDeliveryLocality`
--

INSERT INTO `DZ_PriceDeliveryLocality` (`id`, `id_locality`, `minPriсeOrder`, `minPriceDelivery`, `PriceDelivery`, `active`) VALUES
(1, 1, 300, 600, 100, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `DZ_Region`
--

CREATE TABLE `DZ_Region` (
  `id` int(11) NOT NULL,
  `Region` text,
  `RegionName` text,
  `RegionTitle` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Дамп данных таблицы `DZ_Region`
--

INSERT INTO `DZ_Region` (`id`, `Region`, `RegionName`, `RegionTitle`, `active`) VALUES
(1, '".$CityRegion."','".$CityTitleLat."', '".$CityTitle."', 1);

-- --------------------------------------------------------


--
-- Структура таблицы `DZ_Street`
--

CREATE TABLE `DZ_Street` (
  `id` int(11) NOT NULL,
  `id_type_street` int(11) DEFAULT NULL,
  `id_locality` int(11) DEFAULT NULL,
  `StreetName` text,
  `id_district` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `DZ_TypeDistrict`
--

CREATE TABLE `DZ_TypeDistrict` (
  `id` int(11) NOT NULL,
  `shortDistrictTypeName` text,
  `fullDistrictTypeName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DZ_TypeDistrict`
--

INSERT INTO `DZ_TypeDistrict` (`id`, `shortDistrictTypeName`, `fullDistrictTypeName`, `active`) VALUES
(1, 'мас.', 'Массив', 1),
(2, 'мик.', 'Микрорайон', 1),
(3, 'кв-л', 'Квартал', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `DZ_TypeLocality`
--

CREATE TABLE `DZ_TypeLocality` (
  `id` int(11) NOT NULL,
  `shortLocalityname` text,
  `fullLocalityName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DZ_TypeLocality`
--

INSERT INTO `DZ_TypeLocality` (`id`, `shortLocalityname`, `fullLocalityName`, `active`) VALUES
(1, 'г.', 'Город', 1),
(2, 'пгт.', 'Поселок городского типа', 1),
(4, 'пос.', 'Поселок', 1),
(5, 'с.', 'Село', 1),
(6, 'Кот. пос.', 'Коттеджный поселок', 1),
(7, 'тов.', 'Товарищество', 1),
(8, 'дер.', 'Деревня', 1),
(9, 'ст.', 'Садовое товарищество', 1),
(10, 'ПДСК', 'ПДСК', 1),
(11, 'снт.', 'Садоводческое некоммерческое товарищество', 1),
(12, 'тсн.', 'Товарищество собственников недвижимости', 1),
(13, 'рабочий посёлок', 'Рабочий посёлок', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `DZ_Type_street`
--

CREATE TABLE `DZ_Type_street` (
  `id` int(11) NOT NULL,
  `shortStreetTypeName` text,
  `fullStreetTypeName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DZ_Type_street`
--

INSERT INTO `DZ_Type_street` (`id`, `shortStreetTypeName`, `fullStreetTypeName`, `active`) VALUES
(1, 'аллея', 'Аллея', 1),
(2, 'б-р', 'Бульвар', 1),
(3, 'вал', 'Вал', 1),
(4, 'взвоз', 'Взвоз', 1),
(5, 'въезд', 'Въезд', 1),
(6, 'дор.', 'Дорога', 1),
(7, 'заезд', 'Заезд', 1),
(8, 'кольцо', 'Кольцо', 1),
(9, 'линия', 'Линия', 1),
(10, 'луч', 'Луч', 1),
(11, 'маг.', 'Магистраль', 1),
(12, 'наб.', 'Набережная', 1),
(13, 'пер.', 'Переулок', 1),
(14, 'пл.', 'Площадь', 1),
(15, 'проезд', 'Проезд', 1),
(16, 'пр-кт', 'Проспект', 1),
(17, 'проулок', 'Проулок', 1),
(18, 'разъезд', 'Разъезд', 1),
(19, 'спуск', 'Спуск', 1),
(20, 'съезд', 'Съезд', 1),
(21, 'тракт', 'Тракт', 1),
(22, 'туп.', 'Тупик', 1),
(23, 'ул.', 'Улица', 1),
(24, 'шос.', 'Шоссе', 1),
(25, 'сквер', 'Сквер', 1),
(26, 'Жилой Массив', 'Жилой Массив', 1),
(27, 'ЖК', 'Жилой Комплекс', 1),
(28, 'мост', 'Мост', 1),
(29, 'путепровод', 'Путепровод', 1),
(30, 'платформа', 'Платформа', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `error_JS`
--

CREATE TABLE `error_JS` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `unit` text NOT NULL,
  `groups` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `features`
--

INSERT INTO `features` (`id`, `title`, `unit`, `groups`) VALUES
(1, 'Энергетическая ценность', 'Ккал', 2),
(2, 'Углеводы', 'г', 2),
(3, 'Жиры', 'г', 2),
(4, 'Белки', 'г', 2),
(5, 'Все ±', 'гр', 4);

-- --------------------------------------------------------


--
-- Структура таблицы `gifts_winners_list`
--

CREATE TABLE `gifts_winners_list` (
  `id` int(11) NOT NULL,
  `id_user_vk` int(11) NOT NULL,
  `time_gets` int(12) NOT NULL,
  `gifts` text NOT NULL,
  `promo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gift_color`
--

CREATE TABLE `gift_color` (
  `id` int(11) NOT NULL,
  `color` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gift_color`
--

INSERT INTO `gift_color` (`id`, `color`, `active`, `img`) VALUES
(1, '#b3ce00', 0, 'none'),
(2, '#DC143C', 0, 'none'),
(3, '#fbca05', 0, 'none'),
(4, '#ff3e4c', 0, 'none'),
(5, '#f5b1f5', 0, ''),
(6, '#7bbaa8', 0, ''),
(7, '#f7f76f', 0, ''),
(8, '#f08800', 1, ''),
(9, '#ff4551', 1, ''),
(10, '#e20615', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `gift_content`
--

CREATE TABLE `gift_content` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `id_gift` int(11) NOT NULL DEFAULT '0',
  `id_tovar` int(11) NOT NULL DEFAULT '0',
  `title_tovar` text NOT NULL,
  `count` int(11) NOT NULL,
  `type_tovar` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `api_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cost_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gift_line`
--

CREATE TABLE `gift_line` (
  `id` int(11) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `color` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gift_line`
--

INSERT INTO `gift_line` (`id`, `summa`, `color`, `active`) VALUES
(1, '165', '#f08800', 1),
(2, '2200', '#ff4551', 1),
(3, '3300', '#e20615', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `gift_list`
--

CREATE TABLE `gift_list` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `title` text NOT NULL,
  `min_price` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `color` int(11) NOT NULL,
  `delete_gift` int(1) NOT NULL DEFAULT '0',
  `orders` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gift_list`
--

INSERT INTO `gift_list` (`id`, `city_id`, `title`, `min_price`, `sale_price`, `active`, `color`, `delete_gift`, `orders`) VALUES
(1, 1, 'от 1600 руб.', '1600', '0', 1, 8, 0, 1),
(2, 1, 'от 2000 руб.', '2000', '0', 1, 9, 0, 2),
(3, 1, 'от 3000 руб.', '3000', '0', 1, 1, 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `gift_setting`
--

CREATE TABLE `gift_setting` (
  `id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `width` int(11) NOT NULL DEFAULT '5',
  `height` int(11) NOT NULL DEFAULT '100',
  `width_type` int(11) NOT NULL DEFAULT '0',
  `height_type` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0',
  `min_summa` varchar(255) NOT NULL,
  `max_summa` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gift_setting`
--

INSERT INTO `gift_setting` (`id`, `active`, `width`, `height`, `width_type`, `height_type`, `position`, `min_summa`, `max_summa`) VALUES
(1, 1, 10, 300, 1, 1, 0, '0', '3400');

-- --------------------------------------------------------

--
-- Структура таблицы `groups_features`
--

CREATE TABLE `groups_features` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` varchar(255) NOT NULL,
  `features` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups_features`
--

INSERT INTO `groups_features` (`id`, `title`, `descr`, `features`) VALUES
(2, 'Пищевая ценность (порция):', 'каллории, жиры и тд.', ''),
(4, 'Вес ±', 'Кол-во ± грамм в характеристике', '');

-- --------------------------------------------------------


--
-- Структура таблицы `groups_ingredients`
--

CREATE TABLE `groups_ingredients` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` varchar(255) NOT NULL,
  `ingredients` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups_ingredients`
--

INSERT INTO `groups_ingredients` (`id`, `title`, `descr`, `ingredients`) VALUES
(1, 'Тесто', 'Список типов теста', '1|2|3'),
(2, 'Мясо и мясные продукты', '', ''),
(3, 'Молочные продукты', '', ''),
(4, 'Специи и травы', '', ''),
(5, 'Овощи', '', ''),
(6, 'Фрукты', '', ''),
(7, 'Грибы', '', ''),
(8, 'Заливки и соусы', '', ''),
(9, 'Общая категория', '', ''),
(11, 'Ягоды', '', ''),
(12, 'Масла', '', ''),
(13, 'Полуфабрикаты', '', ''),
(14, 'Бабовые', '', ''),
(15, 'Фастфуд', '', ''),
(16, 'Зелень', '', ''),
(17, 'Сладости', '', ''),
(18, 'Начинки', '', ''),
(19, 'Орехи', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `headmenu`
--

CREATE TABLE `headmenu` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `active` int(11) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `headmenu`
--

INSERT INTO `headmenu` (`id`, `name`, `url`, `active`, `orders`) VALUES
(1, 'Доставка', '/dostavka', 1, 1),
(2, 'Акции', '/sale', 1, 2),
(3, 'Контакты', '/kontakts', 1, 5),
(4, 'Бонусы', '/points', 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `info_login_admin`
--

CREATE TABLE `info_login_admin` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `info_login_users`
--

CREATE TABLE `info_login_users` (
  `id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `time` int(11) NOT NULL,
  `name` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `unit` text NOT NULL,
  `groups` int(11) NOT NULL DEFAULT '0',
  `active_filter` int(11) NOT NULL DEFAULT '0',
  `active_filter_n` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kombo_content`
--

CREATE TABLE `kombo_content` (
  `id` int(11) NOT NULL,
  `id_kombo` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `count` varchar(11) NOT NULL DEFAULT '1',
  `action` int(11) NOT NULL DEFAULT '0',
  `delete_kombo` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `komments_tovar`
--

CREATE TABLE `komments_tovar` (
  `id` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `name_user` text NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `leftmenu`
--

CREATE TABLE `leftmenu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `orders` int(11) NOT NULL,
  `dop_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `list_birthday_sale_active`
--

CREATE TABLE `list_birthday_sale_active` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `phone` text NOT NULL,
  `date_active` int(11) NOT NULL,
  `birthday_day` int(11) NOT NULL,
  `birthday_mount` int(11) NOT NULL,
  `birthday_year` int(11) NOT NULL,
  `time_active` int(11) NOT NULL,
  `day_active` int(11) NOT NULL,
  `mount_active` int(11) NOT NULL,
  `year_active` int(11) NOT NULL,
  `summa_order` varchar(255) NOT NULL,
  `summa_sale` varchar(255) NOT NULL,
  `percent_sale` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `list_category_preset`
--

CREATE TABLE `list_category_preset` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_category_preset`
--

INSERT INTO `list_category_preset` (`id`, `id_category`, `active`, `deleted`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `list_dop_product_preset`
--

CREATE TABLE `list_dop_product_preset` (
  `id` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `id_dop_tovar` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `count_height` varchar(255) NOT NULL,
  `count_height_type` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `pluse_count` int(11) NOT NULL DEFAULT '1',
  `pluse_height` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_dop_product_preset`
--

INSERT INTO `list_dop_product_preset` (`id`, `id_tovar`, `id_dop_tovar`, `count`, `count_height`, `count_height_type`, `active`, `deleted`, `pluse_count`, `pluse_height`) VALUES
(1, 1, 1, 0, '', '', 1, 0, 0, 1),
(2, 1, 3, 0, '', '', 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `list_dop_product_set`
--

CREATE TABLE `list_dop_product_set` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sum_min` int(11) NOT NULL,
  `sum_max` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_dop_product_set`
--

INSERT INTO `list_dop_product_set` (`id`, `title`, `sum_min`, `sum_max`, `api_id`, `active`) VALUES
(1, 'Набор 0', 1, 460, 2201, 0),
(2, 'Набор 1', 461, 845, 2202, 0),
(3, 'Набор 2', 846, 1100, 2203, 0),
(4, 'Набор 3', 1101, 1400, 2204, 0),
(5, 'Набор 4', 1401, 1750, 2205, 0),
(6, 'Набор 5', 1751, 2200, 2205, 0),
(7, 'Набор 6', 2201, 2700, 2205, 0),
(8, 'Набор 7', 2701, 3050, 2205, 0),
(9, 'Набор 8', 3051, 3450, 2205, 0),
(10, 'Набор 9', 3451, 3850, 2205, 0),
(11, 'Набор 10', 3851, 4300, 2205, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `list_dop_product_set_goods`
--

CREATE TABLE `list_dop_product_set_goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type_size` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_dop_product_set_goods`
--

INSERT INTO `list_dop_product_set_goods` (`id`, `title`, `type_size`, `active`) VALUES
(1, 'Васаби', 'гр', 1),
(2, 'Имбирь', 'гр', 1),
(3, 'Соевый соус', 'мл', 1),
(4, 'Соусник', 'шт', 1),
(5, 'Палочки', 'шт', 1),
(6, 'Салфетки', 'шт', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `list_dop_product_set_structure`
--

CREATE TABLE `list_dop_product_set_structure` (
  `id` int(11) NOT NULL,
  `id_set` int(11) NOT NULL,
  `id_dop_product` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `type_size` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_dop_product_set_structure`
--

INSERT INTO `list_dop_product_set_structure` (`id`, `id_set`, `id_dop_product`, `count`, `type_size`) VALUES
(1, 1, 1, 5, 'гр'),
(2, 1, 2, 15, 'гр'),
(3, 1, 3, 35, 'мл'),
(4, 1, 4, 0, 'шт'),
(5, 1, 5, 0, 'шт'),
(6, 1, 6, 0, 'шт'),
(7, 2, 1, 5, ''),
(8, 2, 2, 20, ''),
(9, 2, 3, 70, ''),
(10, 2, 4, 0, ''),
(11, 2, 5, 0, ''),
(12, 2, 6, 0, ''),
(13, 3, 1, 10, ''),
(14, 3, 2, 30, ''),
(15, 3, 3, 105, ''),
(16, 3, 4, 0, ''),
(17, 3, 5, 0, ''),
(18, 3, 6, 0, ''),
(19, 4, 1, 15, ''),
(20, 4, 2, 35, ''),
(21, 4, 3, 140, ''),
(22, 4, 4, 0, ''),
(23, 4, 5, 0, ''),
(24, 4, 6, 0, ''),
(25, 5, 1, 20, ''),
(26, 5, 2, 40, ''),
(27, 5, 3, 140, ''),
(28, 5, 4, 0, ''),
(29, 5, 5, 0, ''),
(30, 5, 6, 0, ''),
(31, 6, 3, 210, ''),
(32, 6, 4, 0, ''),
(33, 6, 2, 45, ''),
(34, 6, 1, 20, ''),
(35, 6, 5, 0, ''),
(36, 6, 6, 0, ''),
(37, 7, 1, 25, ''),
(38, 7, 2, 45, ''),
(39, 7, 3, 245, ''),
(40, 7, 4, 0, ''),
(41, 7, 5, 0, ''),
(42, 7, 6, 0, ''),
(43, 8, 1, 25, ''),
(44, 8, 2, 45, ''),
(45, 8, 3, 280, ''),
(46, 8, 4, 0, ''),
(47, 8, 5, 0, ''),
(48, 8, 6, 0, ''),
(49, 9, 1, 30, ''),
(50, 9, 2, 50, ''),
(51, 9, 3, 315, ''),
(52, 9, 4, 0, ''),
(53, 9, 5, 0, ''),
(54, 9, 6, 0, ''),
(55, 10, 1, 35, ''),
(56, 10, 2, 50, ''),
(57, 10, 3, 350, ''),
(58, 10, 4, 0, ''),
(59, 10, 5, 0, ''),
(60, 10, 6, 0, ''),
(61, 11, 1, 35, ''),
(62, 11, 2, 50, ''),
(63, 11, 3, 385, ''),
(64, 11, 4, 0, ''),
(65, 11, 5, 0, ''),
(66, 11, 6, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `list_home`
--

CREATE TABLE `list_home` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `number_lat` varchar(255) NOT NULL,
  `id_street` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `list_preset_summa`
--

CREATE TABLE `list_preset_summa` (
  `id` int(11) NOT NULL,
  `id_dop_tovar` int(11) NOT NULL,
  `id_summa_limit` int(11) NOT NULL DEFAULT '1',
  `count` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `active_count` int(11) NOT NULL DEFAULT '0',
  `active_height` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `list_street`
--

CREATE TABLE `list_street` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_lat` varchar(255) NOT NULL,
  `id_city_bind` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `list_summa_limit_preset`
--

CREATE TABLE `list_summa_limit_preset` (
  `id` int(11) NOT NULL,
  `summa_min` int(11) NOT NULL,
  `summa_max` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
";