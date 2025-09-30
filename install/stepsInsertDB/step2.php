<?php
$Query2 ="
--
-- Дамп данных таблицы `city_bind`
--

INSERT INTO `city_bind` (`id`, `shows_site`, `title`, `title_lat`, `id_affilate`) VALUES
(1, 1, '".$CityTitle."', '".$CityTitleLat."', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `city_price`
--

CREATE TABLE `city_price` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `dostavka` varchar(255) NOT NULL,
  `min_price` varchar(255) NOT NULL,
  `min_zakaz` int(11) NOT NULL,
  `city_bind` int(11) NOT NULL,
  `api_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city_price`
--

INSERT INTO `city_price` (`id`, `title`, `dostavka`, `min_price`, `min_zakaz`, `city_bind`, `api_id`) VALUES
(1, '".$CityTitle."', '100', '1000', 0, 1, '');


-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_connectKodeError`
--

CREATE TABLE `Complaints_connectKodeError` (
  `id` int(11) NOT NULL,
  `id_categoryPromokode` int(11) NOT NULL DEFAULT '0',
  `id_error_option` int(11) DEFAULT NULL,
  `id_kode` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_DateActivatePromo`
--

CREATE TABLE `Complaints_DateActivatePromo` (
  `id` int(11) NOT NULL,
  `dateTimes` int(11) DEFAULT '0',
  `id_kodeUser` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `id_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_ErrorList`
--

CREATE TABLE `Complaints_ErrorList` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_ErrorOption`
--

CREATE TABLE `Complaints_ErrorOption` (
  `id` int(11) NOT NULL,
  `id_error` int(11) DEFAULT NULL,
  `text` text NOT NULL,
  `active` int(11) DEFAULT '0',
  `promoAssign` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_ListActivate`
--

CREATE TABLE `Complaints_ListActivate` (
  `id` int(11) NOT NULL,
  `id_error` int(11) DEFAULT NULL,
  `id_error_option` int(11) NOT NULL DEFAULT '0',
  `id_kode` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `dateTimes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_PromokodeCategory`
--

CREATE TABLE `Complaints_PromokodeCategory` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0',
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_PromokodeData`
--

CREATE TABLE `Complaints_PromokodeData` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT '0',
  `product` int(11) DEFAULT '0',
  `typeProduct` int(11) DEFAULT '0',
  `id_kode` int(11) DEFAULT '0',
  `count_product` int(11) DEFAULT '1',
  `sale` int(11) DEFAULT '0',
  `saleType` int(11) DEFAULT '0',
  `id_categoryOptions` int(11) DEFAULT '0',
  `countProductActive` int(11) DEFAULT '0',
  `id_ProductDefault` int(11) DEFAULT '0',
  `typeProductDefault` int(11) DEFAULT '0',
  `addProductCart` int(11) DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT 'Удалено'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_PromokodList`
--

CREATE TABLE `Complaints_PromokodList` (
  `id` int(11) NOT NULL,
  `kode` text,
  `title` text,
  `active` int(11) DEFAULT '0',
  `timeCreate` int(11) DEFAULT NULL,
  `timeLive` int(11) NOT NULL DEFAULT '0',
  `advancedOptions` int(11) DEFAULT '0',
  `addsType` int(11) DEFAULT '0',
  `time_to_do` int(11) DEFAULT NULL,
  `minSummaActive` int(11) DEFAULT '0',
  `typeSummaCheck` int(11) DEFAULT '0',
  `additionGifts` int(11) DEFAULT '0',
  `additionBirthday` int(11) DEFAULT '0',
  `timeOn` text,
  `timeOff` text,
  `categoryKode` int(11) DEFAULT NULL,
  `typeDelivery` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Complaints_UserKode`
--

CREATE TABLE `Complaints_UserKode` (
  `id` int(11) NOT NULL,
  `id_kode` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type_active` int(11) NOT NULL DEFAULT '0' COMMENT '0 - одноразовый, 1 - ограниченное кол-во раз, 2 - не ограниченное',
  `count_active` int(11) NOT NULL DEFAULT '1' COMMENT 'Кол-во активаций, для потя тип активаций',
  `active` int(11) DEFAULT '1',
  `timeCheck` int(11) DEFAULT '0',
  `timeStart` int(11) DEFAULT NULL,
  `timeStop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `title_site` text NOT NULL,
  `logo_site` text NOT NULL,
  `template` text NOT NULL,
  `access` int(11) NOT NULL,
  `admin_login` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `tovar_modal` int(11) NOT NULL COMMENT '0 - страница, 1 - модальное окно',
  `default_category_page` int(11) NOT NULL,
  `def_on_category` int(11) NOT NULL DEFAULT '0',
  `footer_contacts` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `header_contacts` text NOT NULL,
  `header_text` text NOT NULL,
  `description_site` text NOT NULL,
  `keyword_site` text NOT NULL,
  `reg_stop` int(11) NOT NULL,
  `sms_sender_id` int(11) NOT NULL DEFAULT '1',
  `soc_vk_link` text NOT NULL,
  `soc_vk_title` text NOT NULL,
  `soc_insta_link` text NOT NULL,
  `soc_insta_title` text NOT NULL,
  `soc_fb_link` text NOT NULL,
  `soc_fb_title` text NOT NULL,
  `soc_youtube_link` text NOT NULL,
  `soc_youtube_title` text NOT NULL,
  `time_timer` varchar(255) NOT NULL,
  `text_timer` text NOT NULL,
  `text_timer_mobile` text NOT NULL,
  `SaleShowCatalog` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `config`
--

INSERT INTO `config` (`id`, `city_id`, `title_site`, `logo_site`, `template`, `access`, `admin_login`, `admin_pass`, `tovar_modal`, `default_category_page`, `def_on_category`, `footer_contacts`, `footer_copyright`, `header_contacts`, `header_text`, `description_site`, `keyword_site`, `reg_stop`, `sms_sender_id`, `soc_vk_link`, `soc_vk_title`, `soc_insta_link`, `soc_insta_title`, `soc_fb_link`, `soc_fb_title`, `soc_youtube_link`, `soc_youtube_title`, `time_timer`, `text_timer`, `text_timer_mobile`, `SaleShowCatalog`) VALUES
(1, 0, '".$SuitTitle."', '', '', 0, '', '', 1, 0, 0, '', '', '0', '', '".$SuitDescription."', '', 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 1, '{[city_title_html]} ".$SuitTitle."', '/images/logo.png', 'default', 0, '', '', 1, 31, 1, 'Телефон: ".$SuitPhoneHeader." &lt;br&gt;Email: email@yandex.ru&lt;br&gt;Время работы: \nc 11:00 до 23:00&lt;br&gt;&lt;a href=&quot;/kontakts&quot; style=&quot;color:#ffffff;&quot;&gt;Адрес точки самовывоза&lt;/a&gt;', '&lt;span class=&quot;copy_color&quot;&gt;{[NAMECompany]},&lt;/span&gt; ".date("Y")."', '".$SuitPhoneHeader."', '&lt;h1&gt;[{CITI_LIST_H1}] - H1 заголовок&lt;/h1&gt;', '".$SuitDescription."', '', 0, 1, 'https://vk.com/', 'Вконтакте', 'https://t.me/', 'Телеграм', '#', 'YouTube', '#', '', '120', 'Ваш заказ успешно принят в работу&lt;/br&gt;&lt;br&gt;&lt;/br&gt;&lt;br&gt; Для внесения изменений или уточнения деталей позвоните по номеру&lt;br&gt;', 'Ваш заказ успешно принят в работу&lt;/br&gt;&lt;br&gt;&lt;/br&gt;&lt;br&gt; Для внесения изменений или уточнения деталей позвоните по номеру&lt;br&gt;', 1);

-- --------------------------------------------------------


--
-- Структура таблицы `config_frontpad`
--

CREATE TABLE `config_frontpad` (
  `id` int(11) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `apiUrl` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `config_frontpad`
--

INSERT INTO `config_frontpad` (`id`, `api_key`, `apiUrl`, `active`, `city_id`) VALUES
(1, 'keyFP', 'https://app.frontpad.ru/api/index.php?', 1, 1),
(2, 'keyFP', 'https://app.frontpad.ru/api/index.php?', 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `config_sberbank_api`
--

CREATE TABLE `config_sberbank_api` (
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

";

return $Query2;
