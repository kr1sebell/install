<?php

$Query1 = "
-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 11 2021 г., 18:04
-- Версия сервера: 5.6.43-84.3-log
-- Версия PHP: 5.6.40

SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = \"+00:00\";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `active_admin_sessions` (
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `last_activity` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Структура таблицы `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `orders` int(11) NOT NULL,
  `url` text NOT NULL,
  `access_admin` int(11) NOT NULL DEFAULT '5'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `title`, `orders`, `url`, `access_admin`) VALUES
(1, 'Товары', 1, 'all_tovars', 5),
(2, 'Добавить товар', 3, 'add', 5),
(3, 'Не активные', 2, 'noactive_tovars', 1),
(4, 'Заказы', 5, 'zakazy', 0),
(5, 'Страницы', 6, 'pages_editor', 1),
(6, 'Меню', 7, 'edit_menu', 1),
(7, 'Акции', 9, 'all_sale', 1),
(8, 'Модули', 10, 'moduls_settings', 0),
(9, 'Промокоды', 12, 'promokods', 1),
(10, 'Касса', 15, 'y_kassa', 0),
(11, 'Бонусная система', 13, 'points_system', 1),
(12, 'Выход', 16, '?logout_admin=1', 7),
(13, 'Доставка (все)', 14, 'dostavka_price', 0),
(14, 'Пользователи', 11, 'edit_users', 5),
(15, 'Доп. товары', 2, 'edit_dop_tovar', 1),
(16, 'Добавить страницу', 13, 'add_page', 0),
(17, 'Характеристики', 4, 'edit_groupeFeatures', 1),
(18, 'Ингредиенты', 4, 'edit_groupeIngredients', 0),
(19, 'Города', 14, 'city_bind', 1),
(20, 'Сотрудники', 14, 'users_admin_lists', 0),
(21, 'Заказы инфо', 15, '/modules/z_test', 4),
(22, 'Время ожидания', 15, 'city_points_setTimeOrder?id_affilate=1', 7),
(23, 'Слайдер', 14, 'modules/settings_sliders_headers', 1),
(24, 'Мероприятия', 9, 'all_events', 0),
(25, 'Зоны доставки', 9, 'modules/dilivery_zones?moduls_dilivery=edit_map_delivered_zone', 1),
(26, 'Редактор скидок', 9, 'modules/z_discount', 1),
(27, 'Скидка ДР', 9, 'modules/birthday', 1),
(28, 'Рекомендации', 15, 'modules/recommend', 1),
(29, 'Корзина', 9, 'modules/settings_korzina', 1),
(30, 'Push рассылки', 10, 'modules/pushNotificationAdmin', 1),
(31, 'Подарки', 10, 'modules/gift', 2),
(32, 'Наборы', 9, 'modules/dop_product_limit?moduls_set=all', 1),
(33, 'Баллы', 9, 'modules/manager_control?manager_moduls=points_edit', 5),
(34, 'Сбис', 9, 'modules/Sbis?moduls_Sbis=testPanel', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `ADM_WORK_catalog_list_day_sale`
--

CREATE TABLE `ADM_WORK_catalog_list_day_sale` (
  `id` int(11) NOT NULL,
  `id_category_list_weekend` int(11) DEFAULT NULL,
  `Number_day` int(11) DEFAULT '0',
  `hoursStart` text,
  `minuteStart` text,
  `hoursStop` text,
  `minuteStop` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ADM_WORK_catalog_list_day_sale`
--

INSERT INTO `ADM_WORK_catalog_list_day_sale` (`id`, `id_category_list_weekend`, `Number_day`, `hoursStart`, `minuteStart`, `hoursStop`, `minuteStop`, `active`) VALUES
(1, 1, 0, '23', '0', '23', '59', 0),
(2, 1, 1, '10', '0', '14', '59', 1),
(3, 1, 2, '23', '0', '23', '59', 0),
(4, 1, 3, '23', '0', '23', '59', 0),
(5, 1, 4, '23', '0', '23', '59', 0),
(6, 1, 5, '23', '0', '23', '59', 0),
(7, 1, 6, '23', '0', '23', '59', 0),
(43, 11, 0, '0', '0', '23', '0', 0),
(44, 11, 1, '0', '0', '23', '0', 0),
(45, 11, 2, '10', '0', '14', '59', 1),
(46, 11, 3, '0', '0', '23', '0', 0),
(47, 11, 4, '0', '0', '23', '0', 0),
(48, 11, 5, '0', '0', '23', '0', 0),
(49, 11, 6, '0', '0', '23', '0', 0),
(50, 12, 0, '00', '00', '23', '00', 0),
(51, 12, 1, '00', '00', '23', '00', 0),
(52, 12, 2, '00', '00', '23', '00', 0),
(53, 12, 3, '10', '0', '14', '00', 1),
(54, 12, 4, '00', '00', '23', '00', 0),
(55, 12, 5, '00', '00', '23', '00', 0),
(56, 12, 6, '00', '00', '23', '00', 0),
(57, 13, 0, '0', '0', '23', '0', 0),
(58, 13, 1, '0', '0', '23', '0', 0),
(59, 13, 2, '0', '0', '23', '0', 0),
(60, 13, 3, '0', '0', '23', '0', 0),
(61, 13, 4, '10', '0', '15', '59', 1),
(62, 13, 5, '0', '0', '23', '0', 0),
(63, 13, 6, '0', '0', '23', '0', 0),
(64, 14, 0, '00', '00', '23', '00', 0),
(65, 14, 1, '00', '00', '23', '00', 0),
(66, 14, 2, '00', '00', '23', '00', 0),
(67, 14, 3, '00', '00', '23', '00', 0),
(68, 14, 4, '00', '00', '23', '00', 0),
(69, 14, 5, '10', '0', '14', '00', 1),
(70, 14, 6, '00', '00', '23', '00', 0),
(71, 15, 0, '00', '00', '23', '00', 0),
(72, 15, 1, '00', '00', '23', '00', 0),
(73, 15, 2, '00', '00', '23', '00', 0),
(74, 15, 3, '00', '00', '23', '00', 0),
(75, 15, 4, '00', '00', '23', '00', 0),
(76, 15, 5, '00', '00', '23', '00', 0),
(77, 15, 6, '00', '00', '23', '00', 0),
(78, 16, 0, '00', '00', '23', '00', 0),
(79, 16, 1, '00', '00', '23', '00', 0),
(80, 16, 2, '00', '00', '23', '00', 0),
(81, 16, 3, '00', '00', '23', '00', 0),
(82, 16, 4, '00', '00', '23', '00', 0),
(83, 16, 5, '00', '00', '23', '00', 0),
(84, 16, 6, '00', '00', '23', '00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ADM_WORK_catalog_sale`
--

CREATE TABLE `ADM_WORK_catalog_sale` (
  `id` int(11) NOT NULL,
  `id_category_sale` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `type_product` text,
  `old_price` text,
  `new_price` text,
  `active` int(11) DEFAULT '0',
  `sum_other` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ADM_WORK_catalog_sale`
--

INSERT INTO `ADM_WORK_catalog_sale` (`id`, `id_category_sale`, `id_product`, `type_product`, `old_price`, `new_price`, `active`, `sum_other`) VALUES
(9, 7, 842, 'small', '200', '200', 1, 0),
(10, 8, 843, 'small', '200', '200', 1, 0),
(11, 9, 844, 'small', '200', '200', 1, 0),
(12, 10, 845, 'small', '200', '200', 1, 0),
(13, 8, 848, 'small', '200', '200', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ADM_WORK_category_list_worktime_sale`
--

CREATE TABLE `ADM_WORK_category_list_worktime_sale` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ADM_WORK_category_list_worktime_sale`
--

INSERT INTO `ADM_WORK_category_list_worktime_sale` (`id`, `title`, `active`) VALUES
(1, 'Понедельник', 1),
(11, 'Вторник', 1),
(12, 'Среда', 1),
(13, 'Четверг', 1),
(14, 'Пятница', 1),
(15, 'Суббота', 1),
(16, 'Воскресенье', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ADM_WORK_category_sale`
--

CREATE TABLE `ADM_WORK_category_sale` (
  `id` int(11) NOT NULL,
  `date_start` int(11) DEFAULT '0',
  `date_stop` int(11) DEFAULT '0',
  `active` int(11) DEFAULT '0',
  `everyday` int(11) DEFAULT '0',
  `id_weekend` int(11) DEFAULT NULL,
  `type_sale` int(11) DEFAULT '1',
  `time_start_hour` time DEFAULT NULL,
  `time_stop_hour` time DEFAULT NULL,
  `title_sale` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ADM_WORK_category_sale`
--

INSERT INTO `ADM_WORK_category_sale` (`id`, `date_start`, `date_stop`, `active`, `everyday`, `id_weekend`, `type_sale`, `time_start_hour`, `time_stop_hour`, `title_sale`) VALUES
(7, 1626348120, 1640951940, 0, 0, 1, 1, NULL, NULL, 'Обеды Понедельник'),
(8, 1626348120, 1640951940, 0, 0, 11, 1, NULL, NULL, 'Обеды Вторник'),
(9, 1626348120, 1640951940, 0, 0, 12, 1, NULL, NULL, 'Обеды Среда'),
(10, 1626348120, 1640951940, 0, 0, 13, 1, NULL, NULL, 'Обеды Четверг'),
(11, 1626386040, 1640901240, 0, 0, 14, 1, NULL, NULL, 'Обеды Пятница'),
(12, 1626386160, 1640901360, 0, 0, 15, 1, NULL, NULL, 'Обеды Суббота'),
(13, 1626386160, 1640901360, 0, 0, 16, 1, NULL, NULL, 'Обеды Воскресенье');

-- --------------------------------------------------------

--
-- Структура таблицы `adres`
--

CREATE TABLE `adres` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `city` text NOT NULL,
  `street` text NOT NULL,
  `privateHouse` int(11) NOT NULL DEFAULT '0',
  `home` text NOT NULL,
  `kvartira` text NOT NULL,
  `podezd` text NOT NULL,
  `etaj` text NOT NULL,
  `domofon` text NOT NULL,
  `comment` text NOT NULL,
  `city_bind` int(11) NOT NULL,
  `GEO_1` varchar(255) NOT NULL,
  `GEO_2` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `is_selected` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `alert_login_admin`
--

CREATE TABLE `alert_login_admin` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `basket_user`
--

CREATE TABLE `basket_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `basket` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auto_push_notice_settings`
--

CREATE TABLE `auto_push_notice_settings` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `minDay` int(11) NOT NULL,
  `maxDay` int(11) NOT NULL,
  `titleNotice` text NOT NULL,
  `textNotice` text NOT NULL,
  `addPoints` int(11) NOT NULL DEFAULT '0',
  `addPromokode` int(11) NOT NULL DEFAULT '0',
  `countPoints` int(11) NOT NULL DEFAULT '0',
  `idProductPromokode` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `basket_user_vk`
--

CREATE TABLE `basket_user_vk` (
  `id` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_user_vk` int(12) NOT NULL,
  `json` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `detyam` int(11) NOT NULL,
  `vzroslym` int(11) NOT NULL,
  `pojilim` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `all_img` text NOT NULL,
  `new_price` varchar(255) NOT NULL,
  `new` int(11) NOT NULL,
  `akciya` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `descr` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `priceFrom` varchar(255) NOT NULL,
  `priceFromCount` int(11) NOT NULL,
  `vess` varchar(255) NOT NULL,
  `one_height` text NOT NULL,
  `one_diameter` text NOT NULL,
  `url` text NOT NULL,
  `hit` int(11) NOT NULL,
  `sorts` int(11) NOT NULL DEFAULT '0',
  `nalich` int(11) NOT NULL DEFAULT '0',
  `type_tovar` text NOT NULL,
  `dop_price` text NOT NULL,
  `dop_ves` text NOT NULL,
  `type_vess` varchar(255) NOT NULL DEFAULT 'грамм',
  `testo_pizza` varchar(255) NOT NULL,
  `dop_height` text NOT NULL,
  `dop_diameter` text NOT NULL,
  `dop_art` text NOT NULL,
  `one_art` varchar(255) NOT NULL,
  `dop_button_text` text NOT NULL,
  `data_features` text NOT NULL,
  `data_ingredients` text NOT NULL,
  `city_bind` int(11) DEFAULT '0',
  `sale_active_product` int(11) NOT NULL DEFAULT '0',
  `filterProduct` text NOT NULL,
  `typeProductModify` int(11) NOT NULL DEFAULT '0' COMMENT 'Доступны модификаторы - 0 нет, 1 да',
  `typeModifyList` int(11) NOT NULL DEFAULT '0' COMMENT 'Тип модифкаторов: 0 - товары по списку, 1 - категория товаров',
  `buttonModifyOpenModal` text NOT NULL COMMENT 'Текст кнопки открытия окна модификаторов',
  `typeCountActiveModify` int(11) NOT NULL DEFAULT '0' COMMENT '	Тип кол-ва выбранных модификаторов: 0 - без ограничений, 1 с ограничениями	',
  `countActiveModifyLimit` int(11) NOT NULL DEFAULT '1' COMMENT 'Кол-во одновлеменно выбранных модификаторов',
  `typeModalModify` int(11) NOT NULL DEFAULT '0' COMMENT 'Тип модального окна для продукта: 0 - дефолт, 1 - комбо конструктор',
  `countComboProductModal` int(11) NOT NULL DEFAULT '1' COMMENT 'Кол-во доступных товаров для комбо конструктора',
  `additionInfoPrint` text NOT NULL COMMENT 'Дополнительная информация для печати в модальном окне',
  `additionInfoH` text NOT NULL,
  `categoryModificationActive` int(11) NOT NULL DEFAULT '0' COMMENT 'Категория для вывода в модификаторв, при типе вся категория',
  `typeSumDiscountAllCategoryModification` int(11) NOT NULL DEFAULT '0',
  `DiscountAllCategoryModification` varchar(255) DEFAULT NULL COMMENT 'Сумма в рублях или % для скидки на модификаторы',
  `modifyFromCategory` int(11) NOT NULL DEFAULT '0' COMMENT 'Модификаторы от категории',
  `must_modify` int(11) NOT NULL DEFAULT '0' COMMENT 'Должен присутствовать модификатор',
  `count_must_modify` int(11) NOT NULL DEFAULT '1' COMMENT 'Кол-во обязательных модификаторов',
  `priceFrom` int(11) NOT NULL DEFAULT '0',
  `priceFromCount` int(11) NOT NULL DEFAULT '0',
  `idVkProduct` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalogModifyComboTittleVariant`
--

CREATE TABLE `catalogModifyComboTittleVariant` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_variant` int(11) NOT NULL,
  `title` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `numbers` int(11) NOT NULL DEFAULT '0',
  `must_modify` int(11) NOT NULL DEFAULT '0',
  `count_must_modify` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_list_day_sale`
--

CREATE TABLE `catalog_list_day_sale` (
  `id` int(11) NOT NULL,
  `id_category_list_weekend` int(11) DEFAULT NULL,
  `Number_day` int(11) DEFAULT '0',
  `hoursStart` text,
  `minuteStart` text,
  `hoursStop` text,
  `minuteStop` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_modificate`
--

CREATE TABLE `catalog_modificate` (
  `id` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `title` text,
  `price` varchar(255) NOT NULL DEFAULT '0',
  `size` text,
  `size_type` text,
  `art` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_recomend`
--

CREATE TABLE `catalog_recomend` (
  `id` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `orders` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_sale`
--

CREATE TABLE `catalog_sale` (
  `id` int(11) NOT NULL,
  `id_category_sale` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `type_product` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `new_price` varchar(255) NOT NULL,
  `time_start` int(11) NOT NULL,
  `time_stop` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `sum_other` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `dop_url` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `orders` int(11) NOT NULL,
  `img` text NOT NULL,
  `type_tovar` text NOT NULL,
  `dop_price` text NOT NULL,
  `active` int(11) NOT NULL,
  `razmer_type` int(2) NOT NULL DEFAULT '0',
  `show_index` int(11) NOT NULL DEFAULT '0',
  `feature_type` text NOT NULL,
  `ingredient_type` text NOT NULL,
  `active_sale_category` int(11) NOT NULL DEFAULT '0',
  `value_sale_category` int(11) NOT NULL DEFAULT '0',
  `features_height` varchar(255) NOT NULL,
  `filter_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category_list_worktime_sale`
--

CREATE TABLE `category_list_worktime_sale` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category_sale`
--

CREATE TABLE `category_sale` (
  `id` int(11) NOT NULL,
  `date_start` int(11) DEFAULT '0',
  `date_stop` int(11) DEFAULT '0',
  `active` int(11) DEFAULT '0',
  `everyday` int(11) DEFAULT '0',
  `id_weekend` int(11) DEFAULT NULL,
  `type_sale` int(11) DEFAULT '1',
  `time_start_hour` time DEFAULT NULL,
  `time_stop_hour` time DEFAULT NULL,
  `title_sale` text,
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `city_bind`
--

CREATE TABLE `city_bind` (
  `id` int(11) NOT NULL,
  `shows_site` int(11) NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  `title_lat` text NOT NULL,
  `id_affilate` varchar(255) NOT NULL,
  `UTC_Hourse` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
";

return $Query1;
