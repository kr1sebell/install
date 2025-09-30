<?php
$Query8 ="
--
-- Структура таблицы `verification_call`
--

CREATE TABLE `verification_call` (
  `id` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `time_add` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `verification_sms`
--

CREATE TABLE `verification_sms` (
  `id` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `time_add` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `VKApiSettings`
--

CREATE TABLE `VKApiSettings` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL DEFAULT '0',
  `token` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `VKApiSettings`
--

INSERT INTO `VKApiSettings` (`id`, `id_city`, `token`, `active`) VALUES
(1, 1, 'efe7f89', 1),
(2, 4, '66dcf08', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `VKMarketSettings`
--

CREATE TABLE `VKMarketSettings` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 - все города, n-id города',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `id_owner` int(11) NOT NULL DEFAULT '0',
  `id_group` int(11) NOT NULL DEFAULT '0',
  `secretKey` text NOT NULL,
  `code` text NOT NULL,
  `accessToken` text,
  `time_life_token` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `idApp` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `VKMarketSettings`
--

INSERT INTO `VKMarketSettings` (`id`, `city_id`, `id_user`, `id_owner`, `id_group`, `secretKey`, `code`, `accessToken`, `time_life_token`, `active`, `deleted`, `idApp`) VALUES
(1, 1, 0, 0, 0, '0', '0', NULL, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `worker_users`
--

CREATE TABLE `worker_users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `access` int(11) NOT NULL,
  `paymentReturn` int(11) NOT NULL DEFAULT '0',
  `city` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker_users`
--

INSERT INTO `worker_users` (`id`, `login`, `password`, `name`, `lastname`, `access`, `paymentReturn`, `city`) VALUES
(1, 'MainAdmin', 'MainPassword', 'Главный', 'Администратор', 1, 0, 1),
(2, 'BeeWeb', 'pirog4321', 'Доступ', 'BeeWeb', 0, 0, 0),
(3, 'SuperManager', 'SuperPassword', 'Менеджер', 'Работа с клиентами', 0, 0, 1),
(4, 'PointsAll', 'PassPointsAll', 'Торговая точка', 'Все', 5, 0, 1),
(5, 'PointsOperator', 'PassPointsOperator', 'Торговая точка', 'Операторы', 7, 0, 1),
(18, 'AdminEl', 'ElPassword', 'Админ', 'Город', 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `yandex_kassa`
--

CREATE TABLE `yandex_kassa` (
  `id` int(11) NOT NULL,
  `shopId` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `checkUrl` text NOT NULL,
  `avisoUrl` text NOT NULL,
  `successUrl` text NOT NULL,
  `shopFailUrl` text NOT NULL,
  `shopPassword` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `url_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `zakazy`
--

CREATE TABLE `zakazy` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL,
  `id_tovar` text NOT NULL,
  `price_tovar` text NOT NULL,
  `kol_tovar` text NOT NULL,
  `type_tovar` text NOT NULL,
  `summa` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `status` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `komment` text NOT NULL,
  `dostavka` text NOT NULL,
  `id_address` int(11) NOT NULL DEFAULT '0',
  `payments_system` text NOT NULL,
  `realSumm` varchar(255) NOT NULL,
  `deleted` int(11) DEFAULT '0',
  `times_in` int(11) NOT NULL DEFAULT '0',
  `person` int(11) NOT NULL,
  `dop_tovar` text NOT NULL,
  `dop_tovar_count` text NOT NULL,
  `dop_tovar_price` varchar(255) NOT NULL,
  `bonus_in` int(11) NOT NULL,
  `bonus_out` int(11) NOT NULL,
  `promokod` varchar(255) NOT NULL,
  `summa_dostavka` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `testo` text NOT NULL,
  `view_menejer` int(11) NOT NULL DEFAULT '0',
  `sales` varchar(255) NOT NULL DEFAULT '0',
  `sdacha` varchar(255) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `predzakaz` varchar(255) NOT NULL,
  `predzakaz_active` int(11) NOT NULL,
  `samovivoz_sale` int(11) NOT NULL DEFAULT '0',
  `textCancel` text NOT NULL,
  `status_check_menedjer` int(11) NOT NULL DEFAULT '0',
  `in_zakaz_type` int(11) NOT NULL DEFAULT '1',
  `order_id` varchar(255) NOT NULL,
  `error_FP` text NOT NULL,
  `status_order_FP` text NOT NULL,
  `orderId` text,
  `urlPayment` text NOT NULL,
  `idPayConfig` int(11) DEFAULT NULL,
  `payStatusSBR` int(11) NOT NULL DEFAULT '0',
  `timerOrder` int(11) DEFAULT NULL,
  `send_link_review` int(11) NOT NULL DEFAULT '0',
  `sendMessageTG` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `zakazy_all`
--

CREATE TABLE `zakazy_all` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL,
  `id_tovar` text NOT NULL,
  `price_tovar` text NOT NULL,
  `kol_tovar` text NOT NULL,
  `type_tovar` text NOT NULL,
  `summa` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `status` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `komment` text NOT NULL,
  `dostavka` text NOT NULL,
  `id_address` int(11) NOT NULL DEFAULT '0',
  `payments_system` text NOT NULL,
  `realSumm` varchar(255) NOT NULL,
  `deleted` int(11) DEFAULT '0',
  `times_in` int(11) NOT NULL DEFAULT '0',
  `person` int(11) NOT NULL,
  `dop_tovar` text NOT NULL,
  `dop_tovar_count` text NOT NULL,
  `dop_tovar_price` varchar(255) NOT NULL,
  `bonus_in` int(11) NOT NULL,
  `bonus_out` int(11) NOT NULL,
  `promokod` varchar(255) NOT NULL,
  `summa_dostavka` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `testo` text NOT NULL,
  `view_menejer` int(11) NOT NULL DEFAULT '0',
  `sales` varchar(255) NOT NULL DEFAULT '0',
  `sdacha` varchar(255) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `predzakaz` varchar(255) NOT NULL,
  `predzakaz_active` int(11) NOT NULL,
  `samovivoz_sale` int(11) NOT NULL DEFAULT '0',
  `textCancel` text NOT NULL,
  `status_check_menedjer` int(11) NOT NULL DEFAULT '0',
  `in_zakaz_type` int(11) NOT NULL DEFAULT '1',
  `order_id` varchar(255) NOT NULL,
  `error_FP` text NOT NULL,
  `status_order_FP` text NOT NULL,
  `orderId` text,
  `idPayConfig` int(11) DEFAULT NULL,
  `payStatusSBR` int(11) NOT NULL DEFAULT '0',
  `timerOrder` int(11) DEFAULT NULL,
  `send_link_review` int(11) NOT NULL DEFAULT '0',
  `sendMessageTG` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz_type`
--

CREATE TABLE `zakaz_type` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `latinica` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Откуда приходят заказы';

--
-- Дамп данных таблицы `zakaz_type`
--

INSERT INTO `zakaz_type` (`id`, `title`, `latinica`, `active`) VALUES
(1, 'На сайте', 'site', 0),
(2, 'Из Вконтакте', 'Vkontakte', 0),
(3, 'В заведении', 'Zavedenie', 0),
(4, 'По телефону', 'Phone', 0),
(5, 'В приложении', 'APP', 0),
(6, 'VK Mini apps', 'VK Mini apps', 0),
(9, 'iOS MobileApp', 'iOS MobileApp', 1),
(10, 'Android MobileApp', 'Android MobileApp', 1);

";

return $Query8;
