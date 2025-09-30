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
(1, 1, 'efe7f60d48789', 1),
(2, 4, '6658c54dcf08', 1);

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
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `VKMarketSettings`
--

INSERT INTO `VKMarketSettings` (`id`, `city_id`, `id_user`, `id_owner`, `id_group`, `secretKey`, `code`, `accessToken`, `time_life_token`, `active`, `deleted`) VALUES
(1, 1, 0, 0, 0, '0', '0', NULL, 0, 1, 0);

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
(18, 'AdminEl', 'ElPassword', 'Админ', 'Салехард', 1, 0, 1);

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

--
-- Дамп данных таблицы `yandex_kassa`
--

INSERT INTO `yandex_kassa` (`id`, `shopId`, `scid`, `checkUrl`, `avisoUrl`, `successUrl`, `shopFailUrl`, `shopPassword`, `status`, `url_data`) VALUES
(1, 0, 0, 'curentURL_status.php', 'status_payments.php', 'index.php?payments_ok=ok_pay', '/', 'Pass', 'real', 'https://money.yandex.ru/eshop.xml'),
(2, 88133, 551211, 'curentURL_status.php', 'status_payments.php', 'index.php?payments_ok=ok_pay', '/', '', 'real', 'https://money.yandex.ru/eshop.xml'),
(3, 129665, 94823, 'curentURL_status.php', 'status_payments.php', 'index.php?payments_ok=ok_pay', '/', '', 'test', 'https://demomoney.yandex.ru/eshop.xml');

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
  `idPayConfig` int(11) DEFAULT NULL,
  `payStatusSBR` int(11) NOT NULL DEFAULT '0',
  `timerOrder` int(11) DEFAULT NULL,
  `send_link_review` int(11) NOT NULL DEFAULT '0',
  `sendMessageTG` int(11) NOT NULL DEFAULT '0'
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


CREATE TABLE `settings_telegram` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_chat` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Структура таблицы `active_admin_sessions`
--

CREATE TABLE `active_admin_sessions` (
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `last_activity` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config_AlfaMerchant`
--

CREATE TABLE `config_AlfaMerchant` (
  `id` int(11) NOT NULL,
  `id_points` int(11) NOT NULL,
  `url_api` text COMMENT 'url - для запросов, тестовый и боевой',
  `login` text NOT NULL,
  `password` text NOT NULL,
  `active` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 - самовывоз, 1 - доставка',
  `id_city` int(11) NOT NULL,
  `token` text,
  `type_data` int(11) NOT NULL COMMENT '0 - тестовые, 1 боевые'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config_PayKeeper`
--

CREATE TABLE `config_PayKeeper` (
  `id` int(11) NOT NULL,
  `id_points` int(11) NOT NULL,
  `url_api` text,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `active` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `token` text,
  `type_data` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config_TinkoffMerchant`
--

CREATE TABLE `config_TinkoffMerchant` (
  `id` int(11) NOT NULL,
  `id_points` int(11) NOT NULL,
  `url_api` text COMMENT 'url - для запросов, тестовый и боевой',
  `login` text NOT NULL,
  `password` text NOT NULL,
  `active` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 - самовывоз, 1 - доставка',
  `id_city` int(11) NOT NULL,
  `token` text,
  `type_data` int(11) NOT NULL COMMENT '0 - тестовые, 1 боевые'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config_pixelcrm`
--

CREATE TABLE `config_pixelcrm` (
  `id` int(11) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `apiUrl` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `city_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config_frontpad_order_statuses`
--

CREATE TABLE `config_frontpad_order_statuses` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `order_type` enum('delivery','pickup','preorder') NOT NULL,
  `external_status_id` int(11) NOT NULL,
  `external_status_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `hello_points_history`
--

CREATE TABLE `hello_points_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `count_points` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `notifications_manager`
--

CREATE TABLE `notifications_manager` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `received` tinyint(1) DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `send_order_sbis`
--

CREATE TABLE `send_order_sbis` (
  `id` int(11) NOT NULL,
  `numberOrder` varchar(255) NOT NULL,
  `saleKey` text NOT NULL,
  `statusSend` varchar(255) NOT NULL,
  `idOrderSystem` int(11) NOT NULL,
  `error` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings_tapLink`
--

CREATE TABLE `settings_tapLink` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `backgroundImage` text NOT NULL,
  `logo` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings_tapLink_button`
--

CREATE TABLE `settings_tapLink_button` (
  `id` int(11) NOT NULL,
  `id_tapLink` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings_Senler`
--

CREATE TABLE `settings_Senler` (
  `id` int(11) NOT NULL,
  `idApp` int(11) NOT NULL DEFAULT '0',
  `groupId` int(11) NOT NULL,
  `accessToken` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `setOrderGroupId` int(11) NOT NULL DEFAULT '0',
  `openAppVKGroupId` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings_active_category`
--

CREATE TABLE `settings_active_category` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `show_index` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings_yoomoney`
--

CREATE TABLE `settings_yoomoney` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_points` int(11) NOT NULL,
  `return_url` text NOT NULL COMMENT 'куда отправить пользователя после оплаты',
  `login` text NOT NULL,
  `password` text NOT NULL,
  `active` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 - самовывоз, 1 доставка',
  `type_data` int(11) NOT NULL COMMENT '0 - тестовые, 1 - боевые',
  `token` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `promokode_activate_attempt`
--

CREATE TABLE `promokode_activate_attempt` (
  `id` int(11) NOT NULL,
  `kode` text NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type_device` int(11) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL,
  `city_id` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `promokod_category`
--

CREATE TABLE `promokod_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `promokod_tpl`
--

CREATE TABLE `promokod_tpl` (
  `id` int(11) NOT NULL,
  `name_tpl` text NOT NULL,
  `kode` varchar(255) NOT NULL,
  `type_promo` int(11) NOT NULL DEFAULT '0',
  `count_check` int(11) NOT NULL DEFAULT '1',
  `count_tovar` int(11) NOT NULL DEFAULT '1',
  `time_create` int(11) NOT NULL,
  `time_start_active` int(11) NOT NULL DEFAULT '0',
  `time_life` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `sale_type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  `text` text NOT NULL,
  `type_tovar` text NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `dop_setings` int(11) NOT NULL DEFAULT '0',
  `id_category_settings` int(11) NOT NULL DEFAULT '0',
  `count_tovar_active` int(11) NOT NULL DEFAULT '0',
  `id_tovar_default` int(11) NOT NULL DEFAULT '0',
  `type_tovar_default` text NOT NULL,
  `add_tovar_cart` int(11) NOT NULL DEFAULT '0',
  `summa_min_active` int(11) NOT NULL DEFAULT '0',
  `type_summa_check` int(11) NOT NULL DEFAULT '0',
  `addition_gifts` int(11) NOT NULL DEFAULT '0',
  `addition_birthday` int(11) NOT NULL DEFAULT '0',
  `addition_discount` int(11) NOT NULL DEFAULT '0',
  `adds_type` int(11) NOT NULL DEFAULT '0',
  `time_to_do` int(11) NOT NULL DEFAULT '0',
  `time_on` varchar(255) NOT NULL,
  `time_off` varchar(255) NOT NULL,
  `typeDevice` int(11) NOT NULL DEFAULT '1',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `promo_total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `status_in_FP_order_all`
--

CREATE TABLE `status_in_FP_order_all` (
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

";

return $Query8;
