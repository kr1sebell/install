<?php
$Query9 = "
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

return $Query9;
