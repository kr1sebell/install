<?php
$Query4 ="

--
-- Структура таблицы `list_tech_dot`
--

CREATE TABLE `list_tech_dot` (
  `id` int(11) NOT NULL,
  `id_dot` int(11) NOT NULL,
  `days` int(11) NOT NULL COMMENT 'ПН-ВС : 0 - 6',
  `active` int(11) NOT NULL DEFAULT '1',
  `HOUR1` int(11) NOT NULL DEFAULT '0',
  `HOUR2` int(11) NOT NULL DEFAULT '0',
  `HOUR3` int(11) NOT NULL DEFAULT '0',
  `HOUR4` int(11) NOT NULL DEFAULT '0',
  `HOUR5` int(11) NOT NULL DEFAULT '0',
  `HOUR6` int(11) NOT NULL DEFAULT '0',
  `HOUR7` int(11) NOT NULL DEFAULT '0',
  `HOUR8` int(11) NOT NULL DEFAULT '0',
  `HOUR9` int(11) NOT NULL DEFAULT '0',
  `HOUR10` int(11) NOT NULL DEFAULT '0',
  `HOUR11` int(11) NOT NULL DEFAULT '0',
  `HOUR12` int(11) NOT NULL DEFAULT '0',
  `HOUR13` int(11) NOT NULL DEFAULT '0',
  `HOUR14` int(11) NOT NULL DEFAULT '0',
  `HOUR15` int(11) NOT NULL DEFAULT '0',
  `HOUR16` int(11) NOT NULL DEFAULT '0',
  `HOUR17` int(11) NOT NULL DEFAULT '0',
  `HOUR18` int(11) NOT NULL DEFAULT '0',
  `HOUR19` int(11) NOT NULL DEFAULT '0',
  `HOUR20` int(11) NOT NULL DEFAULT '0',
  `HOUR21` int(11) NOT NULL DEFAULT '0',
  `HOUR22` int(11) NOT NULL DEFAULT '0',
  `HOUR23` int(11) NOT NULL DEFAULT '0',
  `HOUR24` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `locality_bind`
--

CREATE TABLE `locality_bind` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_lat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `log_actions`
--

CREATE TABLE `log_actions` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `admin` text NOT NULL,
  `time` int(11) NOT NULL,
  `date` text NOT NULL,
  `action` text NOT NULL,
  `ip` text NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `log_auth_call_phone_query`
--

CREATE TABLE `log_auth_call_phone_query` (
  `id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `timeQuery` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `log_auto_push_notice`
--

CREATE TABLE `log_auto_push_notice` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `id_push_message` int(11) NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  `text` text NOT NULL,
  `body` text NOT NULL,
  `typeMessage` int(11) NOT NULL DEFAULT '6',
  `time_send` int(11) NOT NULL DEFAULT '0',
  `sendStatus` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `send_sms` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `log_postedit_zakaz`
--

CREATE TABLE `log_postedit_zakaz` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `admin` text NOT NULL,
  `time` text NOT NULL,
  `date` text NOT NULL,
  `action` text NOT NULL,
  `json` text NOT NULL,
  `ip` text NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `log_set_points_worker`
--

CREATE TABLE `log_set_points_worker` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `was` int(11) NOT NULL,
  `become` int(11) NOT NULL,
  `sets` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `worker` text NOT NULL,
  `date` int(11) NOT NULL,
  `id_user_worker` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `metrikaAction`
--

CREATE TABLE `metrikaAction` (
  `id` int(11) NOT NULL,
  `idPosition` int(11) NOT NULL,
  `marker` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `metrikaAction`
--

INSERT INTO `metrikaAction` (`id`, `idPosition`, `marker`, `active`) VALUES
(1, 3, 'ModalProductOpen', 1),
(2, 1, 'AddBasket', 1),
(3, 4, 'PaymentOK', 1),
(4, 2, 'SerchOpen', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `modal_block`
--

CREATE TABLE `modal_block` (
  `id` int(11) NOT NULL,
  `page_show` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `H_color` text NOT NULL,
  `text_color` text NOT NULL,
  `background_color` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `button` text NOT NULL,
  `linkbutton` text NOT NULL,
  `fontSizeButton` int(11) NOT NULL DEFAULT '18',
  `size_text` varchar(255) NOT NULL DEFAULT '16',
  `fonts` text NOT NULL,
  `weight` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `template` int(11) NOT NULL DEFAULT '1',
  `maxWidthBlock` varchar(255) NOT NULL,
  `size_textTitle` int(11) NOT NULL,
  `fontsTitle` text NOT NULL,
  `weighttextTitle` int(11) NOT NULL,
  `marginH` text NOT NULL,
  `textAlignTitle` text NOT NULL,
  `marginText` text NOT NULL,
  `PaddingText` varchar(255) NOT NULL,
  `textAlign` text NOT NULL,
  `borderradius` varchar(255) NOT NULL,
  `buttonModalPosition` varchar(255) NOT NULL,
  `closePosition` varchar(255) NOT NULL,
  `delayShow` int(11) NOT NULL DEFAULT '0',
  `countShow` int(11) NOT NULL COMMENT 'Кол-во показов на сессию',
  `TimePauseShow` varchar(255) NOT NULL COMMENT 'Промежуток времени между показами',
  `ShowWeekend` int(11) NOT NULL DEFAULT '1' COMMENT '0 - только в будние, 1 - всегда, 2- только выходные',
  `Mo_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `Tu_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `We_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `Th_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `Fr_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `Sa_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `Su_start` varchar(255) NOT NULL COMMENT 'all - всегда, none - никогда, time|time - время показов',
  `Mo_stop` varchar(255) NOT NULL,
  `Tu_stop` varchar(255) NOT NULL,
  `We_stop` varchar(255) NOT NULL,
  `Th_stop` varchar(255) NOT NULL,
  `Fr_stop` varchar(255) NOT NULL,
  `Sa_stop` varchar(255) NOT NULL,
  `Su_stop` varchar(255) NOT NULL,
  `marginBloclBottom` int(11) NOT NULL DEFAULT '0',
  `AdminShow` int(11) NOT NULL DEFAULT '0',
  `timeStartSession` int(11) NOT NULL DEFAULT '0',
  `onclickButton` text NOT NULL,
  `typeDevice` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
";

return $Query4;
