<?php
$Query7 ="

--
-- Структура таблицы `points_order`
--

CREATE TABLE `points_order` (
  `id` int(11) NOT NULL,
  `id_affilate` varchar(255) NOT NULL,
  `id_point` varchar(255) NOT NULL,
  `id_points_pickup` varchar(255) NOT NULL,
  `id_dot` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `operating_mode` text NOT NULL,
  `GEO_1` varchar(255) NOT NULL,
  `GEO_2` varchar(255) NOT NULL,
  `JsonNoneCheck` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `worktime` text NOT NULL,
  `timeDeliveryDefault` int(11) NOT NULL DEFAULT '1',
  `timeDeliveryNew` int(11) NOT NULL DEFAULT '1',
  `timePickupDefault` int(11) NOT NULL DEFAULT '1',
  `timePickupNew` int(11) NOT NULL DEFAULT '1',
  `pincodeOfflinePoints` varchar(255) NOT NULL,
  `offlinePointsStatus` int(11) NOT NULL DEFAULT '0',
  `showUser` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `points_system`
--

CREATE TABLE `points_system` (
  `id` int(11) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `summa_max` varchar(255) NOT NULL,
  `proc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `points_system`
--

INSERT INTO `points_system` (`id`, `summa`, `summa_max`, `proc`) VALUES
(1, '0', '1000', '1'),
(2, '1001', '3000', '2'),
(3, '3001', '6000', '3'),
(4, '6001', '29499', '5'),
(5, '29500', '36999', '5'),
(6, '37000', '44499', '5'),
(7, '44500', '99999999999', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `points_time_list`
--

CREATE TABLE `points_time_list` (
  `id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `time_id` int(11) NOT NULL,
  `id_affiliate` int(11) NOT NULL DEFAULT '1',
  `id_point` int(11) NOT NULL,
  `timeDeliveryDefault` int(11) NOT NULL,
  `timeDeliveryNew` int(11) NOT NULL,
  `timePickupDefault` int(11) NOT NULL,
  `timePickupNew` int(11) NOT NULL,
  `peak_hours` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `points_time_list`
--

INSERT INTO `points_time_list` (`id`, `active`, `time_id`, `id_affiliate`, `id_point`, `timeDeliveryDefault`, `timeDeliveryNew`, `timePickupDefault`, `timePickupNew`, `peak_hours`) VALUES
(1, 1, 0, 1, 1, 90, 60, 40, 30, 0),
(2, 0, 1, 1, 1, 90, 90, 40, 40, 0),
(3, 0, 2, 1, 1, 90, 90, 40, 40, 0),
(4, 0, 3, 1, 1, 90, 90, 40, 40, 0),
(5, 0, 4, 1, 1, 90, 90, 40, 40, 0),
(6, 0, 5, 1, 1, 90, 90, 40, 40, 0),
(7, 0, 6, 1, 1, 90, 90, 40, 40, 0),
(8, 0, 7, 1, 1, 90, 90, 40, 40, 0),
(9, 0, 8, 1, 1, 90, 90, 40, 40, 0),
(10, 0, 9, 1, 1, 90, 90, 40, 40, 0),
(11, 1, 10, 1, 1, 90, 60, 40, 30, 0),
(12, 1, 11, 1, 1, 90, 60, 40, 30, 0),
(13, 1, 12, 1, 1, 90, 60, 40, 30, 0),
(14, 1, 13, 1, 1, 90, 60, 40, 30, 0),
(15, 1, 14, 1, 1, 90, 60, 40, 30, 0),
(16, 1, 15, 1, 1, 90, 60, 40, 30, 0),
(17, 1, 16, 1, 1, 90, 60, 40, 30, 0),
(18, 1, 17, 1, 1, 90, 90, 40, 60, 0),
(19, 1, 18, 1, 1, 90, 90, 40, 60, 0),
(20, 1, 19, 1, 1, 90, 90, 40, 60, 0),
(21, 1, 20, 1, 1, 90, 60, 40, 30, 0),
(22, 1, 21, 1, 1, 90, 60, 40, 30, 0),
(23, 1, 22, 1, 1, 90, 60, 40, 30, 0),
(24, 1, 23, 1, 1, 90, 60, 40, 30, 0),
(25, 1, 0, 1, 2, 90, 90, 40, 40, 0),
(26, 0, 1, 1, 2, 90, 90, 40, 40, 0),
(27, 0, 2, 1, 2, 90, 90, 40, 40, 0),
(28, 0, 3, 1, 2, 90, 90, 40, 40, 0),
(29, 0, 4, 1, 2, 90, 90, 40, 40, 0),
(30, 0, 5, 1, 2, 90, 90, 40, 40, 0),
(31, 0, 6, 1, 2, 90, 90, 40, 40, 0),
(32, 0, 7, 1, 2, 90, 90, 40, 40, 0),
(33, 0, 8, 1, 2, 90, 90, 40, 40, 0),
(34, 0, 9, 1, 2, 90, 90, 40, 40, 0),
(35, 1, 10, 1, 2, 90, 60, 40, 40, 0),
(36, 1, 11, 1, 2, 90, 60, 40, 40, 0),
(37, 1, 12, 1, 2, 90, 60, 40, 40, 0),
(38, 1, 13, 1, 2, 90, 60, 40, 40, 0),
(39, 1, 14, 1, 2, 90, 60, 40, 40, 0),
(40, 1, 15, 1, 2, 90, 60, 40, 40, 0),
(41, 1, 16, 1, 2, 90, 60, 40, 40, 0),
(42, 1, 17, 1, 2, 90, 60, 40, 40, 0),
(43, 1, 18, 1, 2, 90, 90, 40, 40, 0),
(44, 1, 19, 1, 2, 90, 90, 40, 40, 0),
(45, 1, 20, 1, 2, 90, 90, 40, 40, 0),
(46, 1, 21, 1, 2, 90, 90, 40, 40, 0),
(47, 1, 22, 1, 2, 90, 60, 40, 40, 0),
(48, 1, 23, 1, 2, 90, 90, 40, 40, 0),
(49, 1, 0, 1, 3, 90, 90, 40, 40, 0),
(50, 0, 1, 1, 3, 90, 90, 40, 40, 0),
(51, 0, 2, 1, 3, 90, 90, 40, 40, 0),
(52, 0, 3, 1, 3, 90, 90, 40, 40, 0),
(53, 0, 4, 1, 3, 90, 90, 40, 40, 0),
(54, 0, 5, 1, 3, 90, 90, 40, 40, 0),
(55, 0, 6, 1, 3, 90, 90, 40, 40, 0),
(56, 0, 7, 1, 3, 90, 90, 40, 40, 0),
(57, 0, 8, 1, 3, 90, 90, 40, 40, 0),
(58, 0, 9, 1, 3, 90, 90, 40, 40, 0),
(59, 1, 10, 1, 3, 90, 150, 40, 60, 0),
(60, 1, 11, 1, 3, 90, 150, 40, 60, 0),
(61, 1, 12, 1, 3, 90, 150, 40, 60, 0),
(62, 1, 13, 1, 3, 90, 150, 40, 60, 0),
(63, 1, 14, 1, 3, 90, 150, 40, 60, 0),
(64, 1, 15, 1, 3, 90, 150, 40, 60, 0),
(65, 1, 16, 1, 3, 90, 150, 40, 60, 0),
(66, 1, 17, 1, 3, 90, 150, 40, 60, 0),
(67, 1, 18, 1, 3, 90, 150, 40, 60, 0),
(68, 1, 19, 1, 3, 90, 150, 40, 60, 0),
(69, 1, 20, 1, 3, 90, 150, 40, 60, 0),
(70, 1, 21, 1, 3, 90, 150, 40, 60, 0),
(71, 1, 22, 1, 3, 90, 150, 40, 60, 0),
(72, 1, 23, 1, 3, 90, 150, 40, 60, 0),
(73, 1, 0, 1, 4, 90, 90, 40, 40, 0),
(74, 0, 1, 1, 4, 90, 90, 40, 40, 0),
(75, 0, 2, 1, 4, 90, 90, 40, 40, 0),
(76, 0, 3, 1, 4, 90, 90, 40, 40, 0),
(77, 0, 4, 1, 4, 90, 90, 40, 40, 0),
(78, 0, 5, 1, 4, 90, 90, 40, 40, 0),
(79, 0, 6, 1, 4, 90, 90, 40, 40, 0),
(80, 0, 7, 1, 4, 90, 90, 40, 40, 0),
(81, 0, 8, 1, 4, 90, 90, 40, 40, 0),
(82, 0, 9, 1, 4, 90, 90, 40, 40, 0),
(83, 1, 10, 1, 4, 90, 150, 40, 60, 0),
(84, 1, 11, 1, 4, 90, 150, 40, 60, 0),
(85, 1, 12, 1, 4, 90, 150, 40, 60, 0),
(86, 1, 13, 1, 4, 90, 150, 40, 60, 0),
(87, 1, 14, 1, 4, 90, 150, 40, 60, 0),
(88, 1, 15, 1, 4, 90, 150, 40, 60, 0),
(89, 1, 16, 1, 4, 90, 150, 40, 60, 0),
(90, 1, 17, 1, 4, 90, 150, 40, 60, 0),
(91, 1, 18, 1, 4, 90, 150, 40, 60, 0),
(92, 1, 19, 1, 4, 90, 150, 40, 60, 0),
(93, 1, 20, 1, 4, 90, 150, 40, 60, 0),
(94, 1, 21, 1, 4, 90, 150, 40, 60, 0),
(95, 1, 22, 1, 4, 90, 150, 40, 60, 0),
(96, 1, 23, 1, 4, 90, 150, 40, 60, 0),
(97, 1, 0, 1, 5, 90, 90, 40, 40, 0),
(98, 0, 1, 1, 5, 90, 90, 40, 40, 0),
(99, 0, 2, 1, 5, 90, 90, 40, 40, 0),
(100, 0, 3, 1, 5, 90, 90, 40, 40, 0),
(101, 0, 4, 1, 5, 90, 90, 40, 40, 0),
(102, 0, 5, 1, 5, 90, 90, 40, 40, 0),
(103, 0, 6, 1, 5, 90, 90, 40, 40, 0),
(104, 0, 7, 1, 5, 90, 90, 40, 40, 0),
(105, 0, 8, 1, 5, 90, 90, 40, 40, 0),
(106, 0, 9, 1, 5, 90, 90, 40, 40, 0),
(107, 1, 10, 1, 5, 90, 150, 40, 60, 0),
(108, 1, 11, 1, 5, 90, 150, 40, 60, 0),
(109, 1, 12, 1, 5, 90, 150, 40, 60, 0),
(110, 1, 13, 1, 5, 90, 150, 40, 60, 0),
(111, 1, 14, 1, 5, 90, 90, 40, 60, 0),
(112, 1, 15, 1, 5, 90, 150, 40, 60, 0),
(113, 1, 16, 1, 5, 90, 150, 40, 60, 0),
(114, 1, 17, 1, 5, 90, 150, 40, 90, 0),
(115, 1, 18, 1, 5, 90, 150, 40, 90, 0),
(116, 1, 19, 1, 5, 90, 150, 40, 90, 0),
(117, 1, 20, 1, 5, 90, 150, 40, 90, 0),
(118, 1, 21, 1, 5, 90, 150, 40, 90, 0),
(119, 1, 22, 1, 5, 90, 150, 40, 90, 0),
(120, 1, 23, 1, 5, 90, 150, 40, 90, 0),
(121, 1, 0, 1, 6, 90, 90, 40, 40, 0),
(122, 0, 1, 1, 6, 90, 90, 40, 40, 0),
(123, 0, 2, 1, 6, 90, 90, 40, 40, 0),
(124, 0, 3, 1, 6, 90, 90, 40, 40, 0),
(125, 0, 4, 1, 6, 90, 90, 40, 40, 0),
(126, 0, 5, 1, 6, 90, 90, 40, 40, 0),
(127, 0, 6, 1, 6, 90, 90, 40, 40, 0),
(128, 0, 7, 1, 6, 90, 90, 40, 40, 0),
(129, 0, 8, 1, 6, 90, 90, 40, 40, 0),
(130, 0, 9, 1, 6, 90, 90, 40, 40, 0),
(131, 1, 10, 1, 6, 90, 150, 40, 60, 0),
(132, 1, 11, 1, 6, 90, 150, 40, 60, 0),
(133, 1, 12, 1, 6, 90, 150, 40, 60, 0),
(134, 1, 13, 1, 6, 90, 150, 40, 60, 0),
(135, 1, 14, 1, 6, 90, 150, 40, 40, 0),
(136, 1, 15, 1, 6, 90, 90, 40, 40, 0),
(137, 1, 16, 1, 6, 90, 90, 40, 40, 0),
(138, 1, 17, 1, 6, 90, 150, 40, 40, 0),
(139, 1, 18, 1, 6, 90, 150, 40, 60, 0),
(140, 1, 19, 1, 6, 90, 150, 40, 60, 0),
(141, 1, 20, 1, 6, 90, 150, 40, 60, 0),
(142, 1, 21, 1, 6, 90, 150, 40, 60, 0),
(143, 1, 22, 1, 6, 90, 150, 40, 60, 0),
(144, 1, 23, 1, 6, 90, 150, 40, 60, 0),
(145, 0, 1, 4, 7, 90, 90, 40, 40, 0),
(146, 0, 2, 4, 7, 90, 90, 40, 40, 0),
(147, 0, 3, 4, 7, 90, 90, 40, 40, 0),
(148, 0, 4, 4, 7, 90, 90, 40, 40, 0),
(149, 0, 5, 4, 7, 90, 90, 40, 40, 0),
(150, 0, 6, 4, 7, 90, 90, 40, 40, 0),
(151, 0, 7, 4, 7, 90, 90, 40, 40, 0),
(152, 0, 8, 4, 7, 90, 90, 40, 40, 0),
(153, 0, 9, 4, 7, 90, 90, 40, 40, 0),
(154, 1, 10, 4, 7, 90, 90, 40, 40, 0),
(155, 1, 11, 4, 7, 90, 90, 40, 40, 0),
(156, 1, 12, 4, 7, 90, 90, 40, 40, 0),
(157, 1, 13, 4, 7, 90, 90, 40, 40, 0),
(158, 1, 14, 4, 7, 90, 90, 40, 40, 0),
(159, 1, 15, 4, 7, 90, 90, 40, 40, 0),
(160, 1, 16, 4, 7, 90, 90, 40, 40, 0),
(161, 1, 17, 4, 7, 90, 90, 40, 40, 0),
(162, 1, 18, 4, 7, 90, 90, 40, 40, 0),
(163, 1, 19, 4, 7, 90, 90, 40, 40, 0),
(164, 1, 20, 4, 7, 90, 90, 40, 40, 0),
(165, 1, 21, 4, 7, 90, 90, 40, 40, 0),
(166, 0, 22, 4, 7, 90, 90, 40, 40, 0),
(167, 0, 23, 4, 7, 90, 90, 40, 40, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pripravi`
--

CREATE TABLE `pripravi` (
  `id` int(11) NOT NULL,
  `id_category` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `active_tovar` int(11) NOT NULL DEFAULT '0',
  `api_id` varchar(255) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `promokod`
--

CREATE TABLE `promokod` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `type_promo` int(11) NOT NULL DEFAULT '0' COMMENT '0 - одноразовый, 1 - ограниченное кол-во раз (поле count_checj), 2 - многоразовый, ',
  `count_check` int(11) NOT NULL DEFAULT '1',
  `count_tovar` int(11) NOT NULL DEFAULT '1',
  `time_create` int(11) NOT NULL,
  `time_start_active` int(11) NOT NULL DEFAULT '0' COMMENT '0 - с момента создания',
  `time_life` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `sale_type` int(11) NOT NULL DEFAULT '0' COMMENT '0 - проценты, 1 - рубли',
  `status` int(11) NOT NULL,
  `text` text NOT NULL,
  `type_tovar` text NOT NULL COMMENT 'all - любой тип',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `dop_setings` int(11) NOT NULL DEFAULT '0',
  `id_category_settings` int(11) NOT NULL DEFAULT '0',
  `count_tovar_active` int(11) NOT NULL DEFAULT '0',
  `id_tovar_default` int(11) NOT NULL DEFAULT '0',
  `type_tovar_default` text NOT NULL,
  `add_tovar_cart` int(11) NOT NULL DEFAULT '0',
  `summa_min_active` int(11) NOT NULL DEFAULT '0',
  `type_summa_check` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Не учитывать 1-Учитывать за вычетом скидки 2-Учитывать полностью',
  `addition_gifts` int(11) NOT NULL DEFAULT '0',
  `addition_birthday` int(11) NOT NULL DEFAULT '0',
  `addition_discount` int(11) NOT NULL DEFAULT '0',
  `adds_type` int(11) NOT NULL DEFAULT '0' COMMENT '0 - создан админом | 1 - создан менеджером',
  `time_to_do` int(11) NOT NULL DEFAULT '0',
  `time_on` varchar(255) NOT NULL,
  `time_off` varchar(255) NOT NULL,
  `typeDevice` int(11) NOT NULL DEFAULT '1' COMMENT '1 - все, 2 - сайт, 3 - приложения',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `promo_total` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `promokod_actions`
--

CREATE TABLE `promokod_actions` (
  `id` int(11) NOT NULL,
  `id_kode` int(11) NOT NULL,
  `kode` text NOT NULL,
  `text` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `date` text NOT NULL,
  `zakaz` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pushNoticeList`
--

CREATE TABLE `pushNoticeList` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL DEFAULT '0',
  `pushKey` text NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `data` text,
  `status` varchar(255) NOT NULL,
  `idStatus` text,
  `message` text,
  `detail` text,
  `date` int(11) NOT NULL,
  `readNotice` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pushTokenDeviceUser`
--

CREATE TABLE `pushTokenDeviceUser` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `typeDevice` text,
  `expoPushToken` text,
  `DeviceToken` text,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `referer_orders_list`
--

CREATE TABLE `referer_orders_list` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `referer_data` text NOT NULL,
  `date_order` text NOT NULL,
  `time_order` text NOT NULL,
  `no_stats_celi` int(11) NOT NULL DEFAULT '0',
  `Require_URL` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `repeatOrderStat`
--

CREATE TABLE `repeatOrderStat` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `statusText` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews_group`
--

CREATE TABLE `reviews_group` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `id_city` int(11) NOT NULL,
  `title` text NOT NULL,
  `emoji` text,
  `Htitle` text,
  `text` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews_group`
--

INSERT INTO `reviews_group` (`id`, `type`, `id_city`, `title`, `emoji`, `Htitle`, `text`, `active`, `deleted`) VALUES
(1, 0, 1, 'Опрос по доставке', 'final.png', 'Спасибо за ответы', 'Они помогают нам стать лучше', 1, 1),
(2, 1, 1, 'Опрос по самовывозу', 'final.png', 'Спасибо за ответы', 'Они помогают нам стать лучше', 1, 0),
(3, 0, 4, 'Опрос по доставке', 'final.png', 'Спасибо за ответы', 'Они помогают нам стать лучше', 1, 1),
(4, 1, 4, 'Опрос по самовывозу', 'final.png', 'Спасибо за ответы', 'Они помогают нам стать лучше', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews_list`
--

CREATE TABLE `reviews_list` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews_list`
--

INSERT INTO `reviews_list` (`id`, `id_order`, `status`, `active`, `deleted`, `comment`) VALUES
(1, 144, 0, 1, 0, NULL),
(2, 185, 1, 1, 0, 'Вкуснр');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews_question`
--

CREATE TABLE `reviews_question` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `question` text NOT NULL,
  `emoji` text,
  `type` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `id_city` int(11) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews_question`
--

INSERT INTO `reviews_question` (`id`, `id_group`, `question`, `emoji`, `type`, `active`, `deleted`, `id_city`, `orders`) VALUES
(1, 2, 'Был ли кассир в маске?', 'question1.png', 0, 1, 0, 0, 1),
(2, 1, 'Был ли курьер вежлив?', 'question5.png', 0, 1, 0, 0, 2),
(3, 1, 'Как вы оцениваете время доставки заказа?', 'question3.png', 1, 0, 0, 0, 3),
(4, 1, 'Заказ был собран верно?', 'question4.png', 0, 1, 0, 0, 4),
(5, 1, 'На сколько еда была вкусной?', 'question2.png', 1, 1, 0, 0, 5),
(6, 1, 'Оцените время исполнения заказа', 'question3.png', 1, 1, 0, 0, 3),
(7, 1, 'Был ли курьер в маске?', 'question1.png', 0, 1, 0, 0, 1),
(8, 2, 'Был ли кассир вежлив?', 'question5.png', 0, 1, 0, 0, 2),
(9, 2, 'Заказ был собран верно?', 'question4.png', 0, 1, 0, 0, 4),
(10, 2, 'Как вы оцениваете время получение заказа?', 'question3.png', 1, 0, 0, 0, 3),
(11, 2, 'На сколько еда была вкусной?', 'question2.png', 1, 1, 0, 0, 5),
(12, 2, 'Оцените время исполнения заказа', 'question3.png', 1, 1, 0, 0, 3),
(13, 3, 'Был ли курьер вежлив?', 'question5.png', 0, 1, 0, 0, 2),
(14, 3, 'Как вы оцениваете время доставки заказа?', 'question3.png', 1, 0, 0, 0, 3),
(15, 3, 'Заказ был собран верно?', 'question4.png', 0, 1, 0, 0, 4),
(16, 3, 'На сколько еда была вкусной?', 'question2.png', 1, 1, 0, 0, 5),
(17, 3, 'Оцените время исполнения заказа', 'question3.png', 1, 1, 0, 0, 3),
(18, 3, 'Был ли курьер в маске?', 'question1.png', 0, 1, 0, 0, 1),
(19, 4, 'Был ли кассир в маске?', 'question1.png', 0, 1, 0, 0, 1),
(20, 4, 'Был ли кассир вежлив?', 'question5.png', 0, 1, 0, 0, 2),
(21, 4, 'Заказ был собран верно?', 'question4.png', 0, 1, 0, 0, 4),
(22, 4, 'Как вы оцениваете время получение заказа?', 'question3.png', 1, 0, 0, 0, 3),
(23, 4, 'На сколько еда была вкусной?', 'question2.png', 1, 1, 0, 0, 5),
(24, 4, 'Оцените время исполнения заказа', 'question3.png', 1, 1, 0, 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews_result`
--

CREATE TABLE `reviews_result` (
  `id` int(11) NOT NULL,
  `id_review` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `rate` int(11) NOT NULL DEFAULT '0',
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `orders` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `session_data_voice_order`
--

CREATE TABLE `session_data_voice_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sessionUser` text NOT NULL,
  `jsonData` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings_accounts`
--

CREATE TABLE `settings_accounts` (
  `id` int(11) NOT NULL COMMENT 'Заполняется автоматически',
  `active_reg` int(11) NOT NULL COMMENT 'Возможность регистрации 0 - возможна, 1 - запрещена',
  `active_login` int(11) NOT NULL COMMENT 'Возможность авторизации 0 - разрешена, 1 - запрещена',
  `active_points` int(11) NOT NULL COMMENT 'Начисление баллов 0 - начислять, 1 - запретить начисление',
  `active_accounts` int(11) NOT NULL COMMENT 'Включение модуля личный кабинет: 0 - вкл, 1 - выкл'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_accounts`
--

INSERT INTO `settings_accounts` (`id`, `active_reg`, `active_login`, `active_points`, `active_accounts`) VALUES
(1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_birthday_modul`
--

CREATE TABLE `settings_birthday_modul` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `percent` int(11) NOT NULL,
  `day_before` int(11) NOT NULL,
  `day_after` int(11) NOT NULL,
  `min_price_check` tinyint(1) NOT NULL DEFAULT '0',
  `print_date` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_birthday_modul`
--

INSERT INTO `settings_birthday_modul` (`id`, `active`, `percent`, `day_before`, `day_after`, `min_price_check`, `print_date`) VALUES
(1, 1, 10, 3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_discounts_category`
--

CREATE TABLE `settings_discounts_category` (
  `id` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_discounts_category`
--

INSERT INTO `settings_discounts_category` (`id`, `id_discount`, `id_category`, `active`) VALUES
(1, 1, 39, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_discounts_modul`
--

CREATE TABLE `settings_discounts_modul` (
  `id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `date_start` int(11) NOT NULL,
  `date_stop` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Структура таблицы `settings_discounts_sale`
--

CREATE TABLE `settings_discounts_sale` (
  `id` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_discounts_sale`
--

INSERT INTO `settings_discounts_sale` (`id`, `id_discount`, `count`, `sale`, `active`) VALUES
(1, 1, 3, 5, 1),
(2, 1, 5, 10, 1),
(3, 1, 7, 15, 1),
(4, 1, 10, 20, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_korz`
--

CREATE TABLE `settings_korz` (
  `id` int(11) NOT NULL,
  `id_city` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `active_app_vk` int(11) NOT NULL DEFAULT '0',
  `active_app_mobile` int(11) NOT NULL DEFAULT '0',
  `active_app_mobile_v2` int(11) NOT NULL DEFAULT '0',
  `points_on` int(11) NOT NULL DEFAULT '0',
  `sale_on` int(11) NOT NULL DEFAULT '0',
  `count_sale_on` int(11) NOT NULL,
  `proc_sale` varchar(255) NOT NULL,
  `onlinePaymentActive` int(11) NOT NULL DEFAULT '0',
  `cashPaymentActive` int(11) NOT NULL DEFAULT '0',
  `terminalPaymentActive` int(11) NOT NULL DEFAULT '0',
  `timeStartActiveMobileBasket` text,
  `timeStopActiveMobileBasket` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_korz`
--

INSERT INTO `settings_korz` (`id`, `id_city`, `active`, `active_app_vk`, `active_app_mobile`,`active_app_mobile_v2`, `points_on`, `sale_on`, `count_sale_on`, `proc_sale`, `onlinePaymentActive`, `cashPaymentActive`, `terminalPaymentActive`, `timeStartActiveMobileBasket`, `timeStopActiveMobileBasket`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, 4, '10', 0, 1, 1, '10:00', '21:45'),
(2, 4, 1, 1, 1, 1, 0, 0, 4, '10', 0, 1, 1, NULL, NULL),
(3, 0, 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 0, '10:30', '22:30');

-- --------------------------------------------------------

--
-- Структура таблицы `settings_preorder`
--

CREATE TABLE `settings_preorder` (
  `id` int(11) NOT NULL,
  `year_on` int(11) NOT NULL,
  `month_on` int(11) NOT NULL,
  `count_day_preorder` int(11) NOT NULL,
  `start_time` varchar(11) NOT NULL,
  `stop_time` varchar(11) NOT NULL,
  `interval_time` int(11) NOT NULL,
  `interval_type` int(11) NOT NULL,
  `template_view` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_preorder`
--

INSERT INTO `settings_preorder` (`id`, `year_on`, `month_on`, `count_day_preorder`, `start_time`, `stop_time`, `interval_time`, `interval_type`, `template_view`) VALUES
(1, 0, 0, 6, '12:00', '23:59', 10, 0, 'list'),
(2, 1, 1, 5, '09:00', '23:59', 60, 0, 'celendar');

-- --------------------------------------------------------


--
-- Структура таблицы `settings_sms`
--

CREATE TABLE `settings_sms` (
  `id` int(11) NOT NULL,
  `login_sms` text NOT NULL,
  `password_sms` text NOT NULL,
  `url_json` text NOT NULL,
  `API_KEY` text NOT NULL,
  `SenderName` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Дамп данных таблицы `settings_sms`
--

INSERT INTO `settings_sms` (`id`, `login_sms`, `password_sms`, `url_json`, `API_KEY`, `SenderName`) VALUES
(1, 'login', 'password', 'https://smsc.ru/sys/send.php', '', ''),
(2, '', '', '', 'trtr', 'yyy');

-- --------------------------------------------------------

--
-- Структура таблицы `settings_theme_class`
--

CREATE TABLE `settings_theme_class` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Группы (классы и идентификаторы) для CSS оформления темы шаб';

--
-- Дамп данных таблицы `settings_theme_class`
--

INSERT INTO `settings_theme_class` (`id`, `name`, `title`, `active`) VALUES
(1, ':root', 'Основные цвета сайта', 1),
(2, ':root', 'Цвета кнопок', 1),
(3, ':root', 'Настройки шрифтов', 1),
(4, ':root', 'Настройки отступов', 1),
(5, ':root', 'Иконки', 1),
(6, ':root', 'Логотип Картинка', 1),
(7, ':root', 'Логотип Блок', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_theme_group`
--

CREATE TABLE `settings_theme_group` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_theme_group`
--

INSERT INTO `settings_theme_group` (`id`, `name`, `active`) VALUES
(1, 'Настройки цвета', 1),
(2, 'Настройки шрифта', 1),
(3, 'Настройки иконок', 1),
(4, 'Настройки Логотипа', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_theme_type_value`
--

CREATE TABLE `settings_theme_type_value` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Типы значений (текст, номер, проценты и тд)';

--
-- Дамп данных таблицы `settings_theme_type_value`
--

INSERT INTO `settings_theme_type_value` (`id`, `name`, `title`, `active`) VALUES
(1, '', 'Текст', 1),
(2, 'px', 'Пикселы', 1),
(3, '%', 'Проценты', 1),
(4, 'em', 'EM', 1),
(5, 'vh', 'VH', 1),
(6, 'vw', 'VW', 1),
(7, '', 'Цвет', 1),
(8, '', 'Иконка', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings_theme_value`
--

CREATE TABLE `settings_theme_value` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL DEFAULT '1',
  `id_class` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `positionX` text,
  `positionY` text,
  `positionXHover` text,
  `positionYHover` text,
  `title` text NOT NULL,
  `type_value` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings_theme_value`
--

INSERT INTO `settings_theme_value` (`id`, `id_group`, `id_class`, `name`, `value`, `positionX`, `positionY`, `positionXHover`, `positionYHover`, `title`, `type_value`, `active`) VALUES
(1, 1, 1, '--default-color', '#ff183f', NULL, NULL, NULL, NULL, 'Основной цвет пассив', 7, 1),
(2, 1, 1, '--default-color-active', '#ff5272', NULL, NULL, NULL, NULL, 'Основной цвет актив', 7, 1),
(3, 1, 2, '--default-color-button', '#2a19e6', NULL, NULL, NULL, NULL, 'Цвет кнопок пассив', 7, 1),
(4, 1, 2, '--default-color-button-active', '#e00de0', NULL, NULL, NULL, NULL, 'Цвет кнопок актив', 7, 1),
(5, 1, 1, '--default-color-bg-footer', '#101010', NULL, NULL, NULL, NULL, 'Цвет заливки футера', 7, 1),
(6, 1, 3, '--default-color-text-footer', '#ffffff', NULL, NULL, NULL, NULL, 'Цвет текста в футере', 7, 1),
(7, 1, 1, '--default-color-header-bg', '#ffffff', NULL, NULL, NULL, NULL, 'Цвет заливки шапки', 7, 1),
(8, 1, 3, '--default-color-header-text', '#606060', NULL, NULL, NULL, NULL, 'Цвет текста в шапке', 7, 1),
(9, 1, 3, '--default-color-body-text', '#606060', NULL, NULL, NULL, NULL, 'Цвет текста в теле сайта', 7, 1),
(10, 1, 1, '--default-color-body', '#ffffff', NULL, NULL, NULL, NULL, 'Цвет заливки тела сайта', 7, 1),
(11, 1, 1, '--default-color-button-text', '#ffffff', NULL, NULL, NULL, NULL, 'Цвет текста кнопок', 7, 1),
(12, 1, 1, '--alert-color', '#3d19cc', NULL, NULL, NULL, NULL, 'Основной цвет уведомлений', 7, 1),
(13, 1, 1, '--alert-color-active', '#5610ee', NULL, NULL, NULL, NULL, 'Основной цвет уведомлений актив', 7, 1),
(14, 1, 3, '--default-color-header-text-H1', '#101010', NULL, NULL, NULL, NULL, 'Цвет текста в шапке H1 заголовок', 7, 1),
(15, 1, 3, '--default-color-header-text-p', '#101010', NULL, NULL, NULL, NULL, 'Цвет текста в шапке параграф P', 7, 1),
(16, 1, 3, '--default-color-title-category', '#101010', NULL, NULL, NULL, NULL, 'Цвет названия категории', 7, 1),
(17, 1, 3, '--default-color-title-product', '#101010', NULL, NULL, NULL, NULL, 'Цвет названия товара', 7, 1),
(18, 1, 3, '--default-color-title-product-hover', '#101010', NULL, NULL, NULL, NULL, 'Цвет названия товара при наведении', 7, 1),
(19, 1, 3, '--default-color-description-product', '#909090', NULL, NULL, NULL, NULL, 'Цвет описания товара', 7, 1),
(20, 1, 3, '--default-color-description-product-hover', '#909090', NULL, NULL, NULL, NULL, 'Цвет описания товара при наведении', 7, 1),
(21, 1, 4, '--default-padding-left-button-in-cart', '19', NULL, NULL, NULL, NULL, 'Внутренний отступ с лева кнопка в корзину', 2, 1),
(22, 1, 4, '--default-padding-right-button-in-cart', '19', NULL, NULL, NULL, NULL, 'Внутренний отступ с права кнопка в корзину', 2, 1),
(23, 1, 4, '--default-padding-top-button-in-cart', '10', NULL, NULL, NULL, NULL, 'Внутренний отступ сверху кнопка в корзину', 2, 1),
(24, 1, 4, '--default-padding-bottom-button-in-cart', '10', NULL, NULL, NULL, NULL, 'Внутренний отступ снизу кнопка в корзину', 2, 1),
(25, 1, 4, '--default-margin-left-button-in-cart', '0', NULL, NULL, NULL, NULL, 'Внешний отступ с лева кнопка в корзину', 2, 1),
(26, 1, 4, '--default-margin-right-button-in-cart', '0', NULL, NULL, NULL, NULL, 'Внешний отступ с права кнопка в корзину', 2, 1),
(27, 1, 4, '--default-margin-top-button-in-cart', '0', NULL, NULL, NULL, NULL, 'Внешний отступ сверху кнопка в корзину', 2, 1),
(28, 1, 4, '--default-margin-bottom-button-in-cart', '0', NULL, NULL, NULL, NULL, 'Внешний отступ снизу кнопка в корзину', 2, 1),
(29, 1, 1, '--default-color-button-in-cart', '#ffffff', NULL, NULL, NULL, NULL, 'Цвет кнопки в корзину', 7, 1),
(30, 3, 5, '--default-icon-cart', '/images/system_icons/basket_sprite_1.png', '0', '0', '0', '102%', 'Иконка в корзину', 8, 1),
(31, 3, 5, '--default-icon-cart-hover', '/images/system_icons/basket_sprite_1.png', '0', '101%', NULL, NULL, 'Иконка в корзину актив', 8, 0),
(34, 3, 5, '--default-icon-vk', '/images/system_icons/vk.png', 'center', 'center', 'center', 'center', 'Иконка вконтакте футер', 8, 1),
(35, 3, 5, '--default-icon-vk-hover', '/images/system_icons/vk_active_3.png', 'center', 'center', NULL, NULL, 'Иконка вконтакте наведение футер', 8, 1),
(36, 3, 5, '--default-icon-fb', '/images/system_icons/starfish_youtube_passive.png', 'center', 'center', NULL, NULL, 'Иконка facebook футер', 8, 1),
(37, 3, 5, '--default-icon-fb-hover', '/images/system_icons/youtube_active.png', 'center', 'center', NULL, NULL, 'Иконка facebook наведение футер', 8, 1),
(38, 3, 5, '--default-icon-instagram', '/images/system_icons/starfish_telegram_passive.png', 'center', 'center', NULL, NULL, 'Иконка instagram футер', 8, 1),
(39, 3, 5, '--default-icon-instagram-hover', '/images/system_icons/telegram_active.png', 'center', 'center', NULL, NULL, 'Иконка instagram наведение футер', 8, 1),
(40, 3, 5, '--default-icon-scroll-up', '/images/system_icons/scroll_up.png', 'center', 'center', NULL, NULL, 'Кнопка вверх пассив', 8, 1),
(41, 3, 5, '--default-icon-scroll-up-hover', '/images/system_icons/scroll_up.png', 'center', 'center', NULL, NULL, 'Кнопка вверх актив', 8, 1),
(42, 3, 5, '--default-icon-slider-arrow-left', '/images/system_icons/arrow_leftt_main_slide.png', 'center', 'center', NULL, NULL, 'Слайдер в шапке - стрелка в лево', 8, 1),
(43, 3, 5, '--default-icon-slider-arrow-left-hover', '/images/system_icons/arrow_leftt_main_slide.png', 'center', 'center', NULL, NULL, 'Слайдер в шапке - стрелка влево актив', 8, 1),
(44, 3, 5, '--default-icon-slider-arrow-right', '/images/system_icons/arrow_right_main_slide.png', 'center', 'center', NULL, NULL, 'Слайдер в шапке - стрелка в право', 8, 1),
(45, 3, 5, '--default-icon-slider-arrow-right-hover', '/images/system_icons/arrow_leftt_main_slide.png', 'center', 'center', NULL, NULL, 'Слайдер в шапке - стрелка в право актив', 8, 1),
(46, 3, 5, '--default-icon-account-user', '/images/system_icons/user_kabinet_2.png', '', '', NULL, NULL, 'Иконки личный кабинет - пользователь', 8, 1),
(47, 3, 5, '--default-icon-account-bonus', '/images/system_icons/bonus_kabinet_2.png', '', '', NULL, NULL, 'Иконки личный кабинет - бонусы', 8, 1),
(48, 3, 5, '--default-icon-account-phone', '/images/system_icons/phone_kabinet_2.png', '', '', NULL, NULL, 'Иконки личный кабинет - телефон', 8, 1),
(49, 3, 5, '--default-icon-account-orderlist', '/images/system_icons/orders_kabinet_3.png', '', '', NULL, NULL, 'Иконки личный кабинет - заказы', 8, 1),
(50, 3, 5, '--default-icon-footer-checf', '/images/system_icons/main_texture_under.png', '', '', NULL, NULL, 'Иконки футер - плашка вакансии', 8, 0),
(51, 3, 5, '--default-icon-basket-points', '/images/system_icons/bonus_times.png', '', '', NULL, NULL, 'Иконки корзина - бонусы', 8, 1),
(52, 3, 5, '--default-icon-basket-recommend-str-left', '/images/system_icons/slide_left_recommend.png', 'center', 'center', NULL, NULL, 'Иконки корзина - стрелка влево рекомендации', 8, 1),
(53, 3, 5, '--default-icon-basket-recommend-str-right', '/images/system_icons/slide_right_recommend.png', '', '', NULL, NULL, 'Иконки корзина - стрелка вправо рекомендации', 8, 1),
(54, 3, 5, '--default-icon-basket-delivered-clock', '/images/system_icons/sprite_clock_3.png', '0', '0', '0', '103%', 'Иконки корзина - часики - предзаказ - текучка', 8, 1),
(55, 3, 5, '--default-icon-basket-delivered-calendar', '/images/system_icons/calendar_active.png', '', '', NULL, NULL, 'Иконки корзина - календарь - предзаказ - текучка', 8, 1),
(56, 3, 5, '--default-icon-basket-delivered-arrow-down', '/images/sprite_arrow_time_1.png', '0', '0', '0', '100%', 'Иконки корзина - стрелочка открытия- предзаказ - текучка', 8, 1),
(57, 3, 5, '--default-icon-basket-checkbox', '/images/sprite_chek_1.png', '0', '0', '0', '100%', 'Иконки корзина - чекбокс', 8, 1),
(58, 4, 7, '--default-logo-padding-left', '0', '', '', '', '', 'Внутренний отступ с лева логотип', 2, 1),
(59, 4, 7, '--default-logo-padding-right', '0', '', '', NULL, NULL, 'Внутренний отступ справа логотип', 2, 1),
(60, 4, 7, '--default-logo-padding-top', '0', '', '', NULL, NULL, 'Внутренний отступ верх логотип', 2, 1),
(61, 4, 7, '--default-logo-padding-bottom', '0', '', '', NULL, NULL, 'Внутренний отступ низ логотип', 2, 1),
(62, 4, 7, '--default-logo-margin-left', '0', '', '', '', '', 'Внешний отступ с лева логотип', 2, 1),
(63, 4, 7, '--default-logo-margin-right', '0', '', '', NULL, NULL, 'Внешний отступ справа логотип', 2, 1),
(64, 4, 7, '--default-logo-margin-top', '10', '', '', NULL, NULL, 'Внешний отступ верх логотип', 2, 1),
(65, 4, 7, '--default-logo-margin-bottom', '10', '', '', NULL, NULL, 'Внешний отступ низ логотип', 2, 1),
(66, 4, 7, '--default-logo-width', '120', '', '', NULL, NULL, 'Высота блока логотипа', 3, 1),
(67, 4, 7, '--default-logo-height', '220', '', '', NULL, NULL, 'Ширина блока логотипа', 2, 1),
(68, 4, 7, '--default-logo-maxwidth', '200', '', '', NULL, NULL, 'Максимальная высота блока логотипа', 2, 1),
(69, 4, 7, '--default-logo-maxheight', '100', '', '', NULL, NULL, 'Максимальная ширина блока логотипа', 2, 1),
(70, 4, 6, '--default-logo-width-img', '100', '', '', NULL, NULL, 'Высота картинки логотипа', 3, 1),
(71, 4, 6, '--default-logo-height-img', '100', '', '', NULL, NULL, 'Ширина картинки логотипа', 3, 1),
(72, 4, 6, '--default-logo-maxwidth-img', '200', '', '', NULL, NULL, 'Максимальная высота картинки логотипа', 2, 1),
(73, 4, 6, '--default-logo-maxheight-img', '100', '', '', NULL, NULL, 'Максимальная ширина картинки логотипа', 2, 1),
(74, 4, 6, '--default-logo-padding-left-img', '0', '', '', '', '', 'Внутренний отступ с лева логотип картинка', 2, 1),
(75, 4, 6, '--default-logo-padding-right-img', '0', '', '', NULL, NULL, 'Внутренний отступ справа логотип картинка', 2, 1),
(76, 4, 6, '--default-logo-padding-top-img', '0', '', '', NULL, NULL, 'Внутренний отступ верх логотип картинка', 2, 1),
(77, 4, 6, '--default-logo-padding-bottom-img', '0', '', '', NULL, NULL, 'Внутренний отступ низ логотип картинка', 2, 1),
(78, 4, 6, '--default-logo-margin-left-img', '0', '', '', '', '', 'Внешний отступ с лева логотип картинка', 2, 1),
(79, 4, 6, '--default-logo-margin-right-img', '0', '', '', NULL, NULL, 'Внешний отступ справа логотип картинка', 2, 1),
(80, 4, 6, '--default-logo-margin-top-img', '0', '', '', NULL, NULL, 'Внешний отступ верх логотип картинка', 2, 1),
(81, 4, 6, '--default-logo-margin-bottom-img', '0', '', '', NULL, NULL, 'Внешний отступ низ логотип картинка', 2, 1),
(82, 3, 5, '--default-icon-close-modal', '/images/close-red_2.png', 'center', 'center', NULL, NULL, 'Закрытие моб меню и модальных окон', 8, 1),
(83, 1, 1, '--default-mobile-category-menu-background', '#ededed', '', '', NULL, NULL, 'Цвет мобильного меню категорий', 7, 1),
(84, 1, 1, '--default-mobile-category-menu-color', '#101010', '', '', NULL, NULL, 'Цвет текста мобильного меню категорий', 7, 1),
(85, 1, 1, '--default-mobile-category-menu-background-active', '#ff183f', '', '', NULL, NULL, 'Цвет мобильного меню категорий актив', 7, 1),
(86, 1, 1, '--default-mobile-category-menu-color-active', '#ffffff', '', '', NULL, NULL, 'Цвет текста мобильного меню категорий - актив', 7, 1),
(87, 3, 5, '--default-icon-delete-product', '/images/system_icons/delete_tovar_sprite_1.png', '0', '0', '0', '100%', 'Иконка удаления товары из корзины', 8, 1),
(88, 3, 5, '--default-icon-minus-btn', '/images/system_icons/minus.png', 'center', 'center', NULL, NULL, 'Удаление товара (минус)', 8, 1),
(89, 3, 5, '--default-icon-pluse-btn', '/images/system_icons/plus.png', 'center', 'center', NULL, NULL, 'Добавление товара (плюс)', 8, 1),
(90, 3, 5, '--default-icon-basket-car', '/images/location_basket_2.png', 'center', 'left', NULL, NULL, 'Машинка доставки в корзине', 8, 1),
(91, 3, 5, '--default-icon-phone-header-mobile', '/images/system_icons/call_zakaz.png', 'center', 'center', NULL, NULL, 'Иконка телефона в шапке моб версии', 8, 1),
(92, 3, 5, '--default-icon-menu-header-mobile', '/images/system_icons/menu_mobile.png', 'center', 'center', NULL, NULL, 'Иконка меню моб версия', 8, 1),
(93, 3, 5, '--default-icon-leftmenu-mobile', '/images/system_icons/file_60.png', 'center', 'right', NULL, NULL, 'Стрелочка левого меню моб версия', 8, 1),
(94, 3, 5, '--default-icon-leftmenu-mobile-hover', '/images/system_icons/file_10.png', 'cenetr', 'right', NULL, NULL, 'Стрелочка левого меню моб версия - актив', 8, 1),
(95, 3, 5, '--default-icon-product-diameter', '/images/diameter_2.png', 'center', 'center', NULL, NULL, 'Иконка диаметр', 8, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sitemap`
--

CREATE TABLE `sitemap` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `id_pages` int(11) NOT NULL,
  `type` text NOT NULL,
  `active` int(11) NOT NULL,
  `children` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `slider_footer`
--

CREATE TABLE `slider_footer` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `slide_header`
--

CREATE TABLE `slide_header` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `img` text NOT NULL COMMENT 'Фоновая картинка',
  `text` text NOT NULL COMMENT 'Текст в слайде',
  `time_scroll` int(11) NOT NULL COMMENT 'Время прокрутки',
  `active` int(11) NOT NULL COMMENT 'Вклвыкл слайд, 0 -выкл, 1 - вкл',
  `orders` int(11) NOT NULL COMMENT 'Сортировка',
  `type_slider` int(11) NOT NULL DEFAULT '0',
  `show_mini_app` int(11) NOT NULL DEFAULT '0',
  `time_start` int(11) NOT NULL DEFAULT '0',
  `limit_time` int(11) NOT NULL DEFAULT '0',
  `time_stop` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sms_list`
--

CREATE TABLE `sms_list` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL,
  `phone` text NOT NULL,
  `results` text NOT NULL,
  `time` int(11) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


--
-- Структура таблицы `status_in_FP_order`
--

CREATE TABLE `status_in_FP_order` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_affiliate` int(11) NOT NULL,
  `id_dot` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `load_FP_status` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `messageJson` text NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `status_orders_list`
--

CREATE TABLE `status_orders_list` (
  `id` int(11) NOT NULL,
  `id_orderFP` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `date_p` varchar(255) NOT NULL,
  `time_p` varchar(255) NOT NULL,
  `date_unix` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `street_bind`
--

CREATE TABLE `street_bind` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_locality` int(11) NOT NULL,
  `title` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `template_messages`
--

CREATE TABLE `template_messages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `type_template` int(11) NOT NULL,
  `shortcodes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `template_messages`
--

INSERT INTO `template_messages` (`id`, `name`, `text`, `type_template`, `shortcodes`) VALUES
(1, 'Успешная регистрация', 'Ваш пароль: [{user_password}]', 1, 'Ваш пароль [{user_password}]'),
(2, 'Успешный заказ(клиенту)', 'Здравствуйте [{user_name}] Вы сделали заказ на сайте [{site_link}]\nЗаказ №[{number_zakaz}].\nА вот список того что вы заказали и итоговая стоимость.\n[{list_zakaz}]\n\nПисьмо сформировано автоматически. Отвечать на него не нужно.\nОтказаться от email уведомлений Вы можете в личном кабинете.', 0, 'Имя: [{user_name}] <br> Ссылка на сайт: [{site_link}] <br> Номер заказа: [{number_zakaz}] <br> Список заказаных товаров: [{list_zakaz}] <br>'),
(3, 'Успешный заказ(менеджеру)', 'Имя: [{user_name}]\nТелефон: [{user_phone}]\nEmail: [{user_email}]\nАдрес доставки: [{user_adres}]\nТип оплаты: [{type_oplata}]\nКомментарий: [{users_comments}]\n[{list_zakaz}]\n\nПисьмо сформировано автоматически. Отвечать на него не нужно.', 0, 'Имя: [{user_name}] <br> \nТелефон: [{user_phone}] <br> \nEmail: [{user_email}] <br> \nАдрес доставки: [{user_adres}] <br> \nТип оплаты: [{type_oplata}] <br> \nКомментарий: [{users_comments}] <br> \nКол-во персон: [{count_person}] <br> \nСписок заказанных товаров: [{list_zakaz}] <br>'),
(4, 'Восстановление пароля', 'Ваш старый пароль: [{user_password}]', 1, 'Пароль [{user_password}]'),
(5, 'Успешный заказ СМС', 'Здравствуйте. Ваш заказ успешно принят. [NAMECompany]', 1, 'Номер заказа: [{number_zakaz}]'),
(6, 'Успешная оплата(менеджер)', 'Номер заказа: [{number_zakaz}] Сумма заказа: [{summa}]', 0, 'Номер заказа: [{number_zakaz}] <br> Сумма итого [{summa}]'),
(7, 'Email для отправки (менеджер)', 'uk091@yandex.ru', 3, ''),
(8, 'Успешная оплата СМС', 'Ваш заказ №[{number_zakaz}] оплачен!', 1, 'Номер заказа: [{number_zakaz}]');

-- --------------------------------------------------------

--
-- Структура таблицы `test_chekurl`
--

CREATE TABLE `test_chekurl` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `invice` text NOT NULL,
  `all_param` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `threeFroTwo_Category`
--

CREATE TABLE `threeFroTwo_Category` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `type_sale` int(11) NOT NULL DEFAULT '0',
  `title_one` text NOT NULL,
  `title_two` text NOT NULL,
  `title_five` text NOT NULL,
  `title_all` text NOT NULL,
  `time_start` int(11) NOT NULL,
  `time_stop` int(11) NOT NULL,
  `date_start` int(11) NOT NULL,
  `date_stop` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `threeFroTwo_Category`
--

INSERT INTO `threeFroTwo_Category` (`id`, `id_category`, `type_sale`, `title_one`, `title_two`, `title_five`, `title_all`, `time_start`, `time_stop`, `date_start`, `date_stop`, `active`, `city_id`) VALUES
(1, 41, 0, 'пицца', 'пиццы', 'пицц', 'пицца', 0, 0, 1622494800, 1622581140, 0, 0),
(2, 41, 0, 'пицца', 'пиццы', 'пицц', 'пицца', 0, 0, 1622494800, 1622581140, 0, 1),
(3, 41, 0, 'пицца', 'пиццы', 'пицц', 'пицца', 0, 0, 1622494800, 1622581140, 0, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `threeFroTwo_ProductList`
--

CREATE TABLE `threeFroTwo_ProductList` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `type_product` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `type_category`
--

CREATE TABLE `type_category` (
  `id` int(11) NOT NULL,
  `type_categorys` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_category`
--

INSERT INTO `type_category` (`id`, `type_categorys`) VALUES
(1, 'small:Малая|sred:Средняя|big:Большая'),
(2, 'small:Малый|sred:Средний|big:Большой'),
(3, 'slivki:Сливочный|tomat:Томатный|chees:Сырный');

-- --------------------------------------------------------

--
-- Структура таблицы `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `units`
--

INSERT INTO `units` (`id`, `name`, `unit`) VALUES
(1, 'Граммы', 'гр'),
(2, 'Килограммы', 'кг'),
(3, 'Сантиметры', 'см'),
(4, 'Миллилитры', 'мл'),
(5, 'Литры', 'л'),
(6, 'Миллиметры', 'мм'),
(8, 'Количество', 'шт');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Порядковый номер',
  `id_UserVK` int(11) NOT NULL DEFAULT '0',
  `login` varchar(255) NOT NULL COMMENT 'Логин',
  `password` varchar(255) NOT NULL COMMENT 'Пароль',
  `name` text NOT NULL COMMENT 'Имя',
  `last_name` text NOT NULL COMMENT 'Фамилия',
  `email` text NOT NULL COMMENT 'Email клиента',
  `phone` text NOT NULL COMMENT 'Телефон клиента',
  `birthday` text NOT NULL COMMENT 'День рождения',
  `date_reg` int(11) NOT NULL COMMENT 'Дата регистранции',
  `points` int(11) NOT NULL COMMENT 'Накопленные балы',
  `sms_notifi` int(11) NOT NULL DEFAULT '0',
  `email_notifi` int(11) NOT NULL DEFAULT '0',
  `menedjer` int(11) NOT NULL,
  `user_group` int(11) NOT NULL DEFAULT '0',
  `startSumBonus` int(11) NOT NULL DEFAULT '0',
  `dateLastOrder` int(11) NOT NULL DEFAULT '0',
  `dateLastNoticeFromOrderInfo` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Данные о пользователе и его накопленных баллах';

-- --------------------------------------------------------

--
-- Структура таблицы `usersPoints`
--

CREATE TABLE `usersPoints` (
  `id` int(11) NOT NULL,
  `id_Point` int(11) NOT NULL,
  `PinCode` varchar(255) DEFAULT NULL,
  `json` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `usersPoints`
--

INSERT INTO `usersPoints` (`id`, `id_Point`, `PinCode`, `json`, `active`) VALUES
(1, 2, '0000', '[]', 1),
(2, 2, '0001', '[]', 1),
(3, 3, '0002', '[]', 1),
(4, 4, '0003', '[]', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_group`
--

INSERT INTO `user_group` (`id`, `title`, `description`, `active`, `deleted`) VALUES
(1, 'Администраторы', 'Сотрудники и лица, относящиеся к организации', 1, 0);

-- --------------------------------------------------------

";

return $Query7;
