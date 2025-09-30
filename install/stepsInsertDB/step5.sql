
--
-- Дамп данных таблицы `modal_block`
--

INSERT INTO `modal_block` (`id`, `page_show`, `img`, `H_color`, `text_color`, `background_color`, `title`, `content`, `button`, `linkbutton`, `fontSizeButton`, `size_text`, `fonts`, `weight`, `active`, `deleted`, `template`, `maxWidthBlock`, `size_textTitle`, `fontsTitle`, `weighttextTitle`, `marginH`, `textAlignTitle`, `marginText`, `PaddingText`, `textAlign`, `borderradius`, `buttonModalPosition`, `closePosition`, `delayShow`, `countShow`, `TimePauseShow`, `ShowWeekend`, `Mo_start`, `Tu_start`, `We_start`, `Th_start`, `Fr_start`, `Sa_start`, `Su_start`, `Mo_stop`, `Tu_stop`, `We_stop`, `Th_stop`, `Fr_stop`, `Sa_stop`, `Su_stop`, `marginBloclBottom`, `AdminShow`, `timeStartSession`, `onclickButton`, `typeDevice`) VALUES
(8, 'index', '/images/alarrm_texture.png', '', '', '#ffffff', 'Уведомление!', '<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: segoeui_regular;\">В связи с большой загруженностью, </span><br /><span style=\"font-size: 14pt;\"><span style=\"font-family: segoeui_regular;\">заказы через сайт временно не принимаются.</span><br /><br /><span style=\"font-family: segoeui_regular;\">Вы можете оставить свой заказ по телефону:</span> <span style=\"font-family: segoeui_bold;\">+7 (4722) 77-74-98<br /><br /></span></span></p>\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: segoeui_bold;\">Приносим свои извинения!</span></p>', '0', '', 18, '16', '', '', 0, 0, 1, '400', 23, '', 0, '5', '', '', '21', '', '10px', 'center', 'left', 2, 1, '4', 0, '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', 10, 0, 3, '$(\'body\').find(\'#<ym-measure class=\"ym-zoom\" style=\"bottom: 100%; position: fixed; width: 100vw;\"></ym-measure>\').click();', 1),
(9, 'index', '/images/23_4.png', '', '', '#ffffff', ' ', '<div><img src=\"http://sushi-time31.ru./uploads/23_4.png\" width=\"600\" height=\"400\" /></div>', ' ', ' ', 18, '16', '', '', 0, 0, 4, '600', 16, '', 0, '0', '', '', '0', '', '25px', 'center', 'left', 2, 1, '2', 1, '23:59', '00:00', '00:00', '00:00', '00:00', '00:00', '00:59', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', 0, 0, 3, ' ', 1),
(10, 'index', '/images/sushi_time_8_march_3.png', '', '', '#ffffff', ' ', '<div><img src=\"http://sushi-time31.ru./uploads/sushi_time_8_march_3.png\" width=\"600\" height=\"400\" /></div>', ' ', ' ', 18, '16', '', '', 0, 0, 4, '600', 16, '', 0, '0', '', '', '0', '', '40px', 'center', 'left', 2, 1, '2', 1, '23:59', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', 0, 0, 1, ' ', 1),
(11, 'index', '/images/header/9_may.jpg', '', '', '#ffffff', ' ', '<div><img src=\"http://sushi-time31.ru./uploads/9_may.jpg\" width=\"600\" height=\"400\" /></div>', ' ', ' ', 18, '16', '', '', 0, 0, 4, '600', 16, '', 0, '0', '', '', '0', '', '40px', 'center', 'left', 2, 1, '2', 1, '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', '23:59', 0, 0, 1, ' ', 1),
(12, 'index', '/images/new_year.jpg', '', '', '#ffffff', ' ', '<p><img src=\"../../uploads/new_year.jpg\" alt=\"\" width=\"600\" height=\"400\" /></p>', ' ', '', 18, '16', '', '', 0, 0, 4, '600', 16, '', 0, '0', '', '', '0', '', '0', 'left', 'left', 2, 1, '0', 0, '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '23:59', '06:00', '00:00', '00:00', '00:00', '00:00', 10, 0, 2, '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `modal_button`
--

CREATE TABLE `modal_button` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modal_button`
--

INSERT INTO `modal_button` (`id`, `name`, `active`) VALUES
(1, 'Заказать', 1),
(2, 'Купить', 1),
(3, 'Оформить', 1),
(4, 'Узнать', 1),
(5, 'Подробнее', 1),
(6, 'Перейти', 1),
(7, 'Закрыть', 1),
(8, 'Позвонить', 1),
(9, 'Написать', 1),
(10, 'Пригласить', 1),
(11, 'Закрыть', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `modal_template`
--

CREATE TABLE `modal_template` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `style` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modal_template`
--

INSERT INTO `modal_template` (`id`, `title`, `code`, `style`, `active`) VALUES
(1, 'Картинка | Текст | Кнопка', '<div><div class=\"imageBlocModal\"><img src=\"{[imgModal]}\" style=\"max-width:100%;margin:auto;\" /></div><div class=\"backText\"><div class=\"titleModalBlock\">{[titleModal]}</div><div class=\"textBlockModal\">{[textContent]}</div><div class=\"butonBlockModal\">{[nameButton]}</div></div></div>', '#blockContent{padding:0;overflow:hidden;}.imageBlocModal{	width:100%;    padding: 0;    overflow: hidden;}.imageBlocModal img{max-width:100%;}.titleModalBlock{	font-family: Bold;    font-size: 19px;    text-align: center;    padding: 10px 0px;}.textBlockModal{	padding: 20px 10px;    font-size: 16px;    text-align: center;}.butonBlockModal{	padding: 10px 0px;    text-align: center;	background: #f2f2f2;}.butonBlockModal button{	font-size: 18px;    font-family: BOLD;    background: #f7c25a;    border: 0px;    border-radius: 15px;    padding: 5px 30px;    margin: 3px 0px;}', 1),
(2, 'Картинка фоном', '<div><div class=\"imageBlocModal\" style=\"background:url({[imgModal]}) no-repeat;\"></div><div class=\"titleModalBlock\">{[titleModal]}</div><div class=\"textBlockModal\">{[textContent]}</div><div class=\"butonBlockModal\">{[nameButton]}</div></div>', '#blockContent{position:relative;color:#fff;border-radius:15px;overflow:hidden;}.imageBlocModal{width:100%;height:100%;position:absolute;top:0;left:0;z-index:-1;}.imageBlocModal:after{content:\"\";width:100%;height:100%;position:absolute;top:0;left:0;background:rgba(0,0,0,0.6);}.titleModalBlock{	font-family: Bold;    font-size: 19px;    text-align: center;    padding: 10px 0px;}.textBlockModal{	padding: 20px 10px;    font-size: 16px;    text-align: center;}.butonBlockModal{	padding: 10px 0px;    text-align: center;}.butonBlockModal button{	font-size: 18px;    font-family: BOLD;    background: #f7c25a;    border: 0px;    border-radius: 15px;    padding: 5px 30px;    margin: 3px 0px;}', 1),
(3, 'Картинка слева', '<div style=\"position:relative;\"><div class=\"imageBlocModal\"><img src=\"{[imgModal]}\" style=\"max-width:100%;margin:auto;\" /></div><div class=\"rightBlockModal\"><div class=\"titleModalBlock\">{[titleModal]}</div><div class=\"textBlockModal\">{[textContent]}</div><div class=\"butonBlockModal\">{[nameButton]}</div></div></div>', '#blockContent{padding:0;overflow:hidden;max-width:650px;}\n.imageBlocModal{width:45%;padding: 0;overflow: hidden;float:left;max-height: 45%;}\n.imageBlocModal img{max-width:none !important;min-width:100%;height:100%;}\n.rightBlockModal{float:right;width:55%;height: 45%;position: relative;}\n.titleModalBlock{font-family: Bold;font-size: 19px;text-align: center;padding: 10px 0px;}\n.textBlockModal{padding: 20px 10px;font-size: 16px;text-align: center;}\n.butonBlockModal{padding: 10px 5%;text-align: center;background: #f2f2f2;position: absolute;\n    bottom: 0;\n    width: 90%;}\n.butonBlockModal button{font-size: 18px;font-family: BOLD;background: #f7c25a;border: 0px;border-radius: 15px;padding: 5px 30px;margin: 3px 0px;}\n', 1),
(4, 'Картинка фоном 2', '<div><div class=\"imageBlocModal\" style=\"background:url({[imgModal]}) no-repeat;\"></div><div class=\"titleModalBlock\">{[titleModal]}</div><div class=\"textBlockModal\">{[textContent]}</div><div class=\"butonBlockModal\">{[nameButton]}</div></div>', '#blockContent{position:relative;color:#fff;border-radius:15px;overflow:hidden;border-radius:25px !important; padding:0 !important;}.imageBlocModal{width:100%;height:99%;position:absolute;top:0;left:0;z-index:-1;}.imageBlocModal:after{content:\"\";width:100%;height:100%;position:absolute;top:0;left:0;background:rgba(0,0,0,0.6);}.titleModalBlock{	font-family: Bold;    font-size: 19px;    text-align: center;    padding: 10px 0px;}.textBlockModal{	padding: 20px 10px;    font-size: 16px;    text-align: center;}.butonBlockModal{	padding: 10px 0px;    text-align: center;}.butonBlockModal button{	font-size: 18px;    font-family: BOLD;    background: #f7c25a;    border: 0px;    border-radius: 15px;    padding: 5px 30px;    margin: 3px 0px;}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `modificationCompilation`
--

CREATE TABLE `modificationCompilation` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `id_city` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `typeModifyList` int(11) NOT NULL DEFAULT '0',
  `buttonModifyOpenModal` text NOT NULL,
  `typeCountActiveModify` int(11) NOT NULL DEFAULT '0',
  `countActiveModifyLimit` int(11) NOT NULL DEFAULT '1',
  `typeModalModify` int(11) NOT NULL DEFAULT '0',
  `countComboProductModal` int(11) NOT NULL DEFAULT '1',
  `additionInfoPrint` text NOT NULL,
  `additionInfoH` text NOT NULL,
  `categoryModificationActive` int(11) NOT NULL DEFAULT '0',
  `typeSumDiscountAllCategoryModification` int(11) NOT NULL DEFAULT '0',
  `DiscountAllCategoryModification` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `modificationProductList`
--

CREATE TABLE `modificationProductList` (
  `id` int(11) NOT NULL,
  `id_parent_product` int(11) NOT NULL DEFAULT '0',
  `idProduct` int(11) NOT NULL DEFAULT '0',
  `typeProduct` int(11) NOT NULL DEFAULT '0' COMMENT 'Тип товара к которому относится модификатор',
  `art` varchar(255) NOT NULL COMMENT 'артикул для интеграции с CRM',
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sumDiscount` varchar(255) NOT NULL,
  `activeDiscount` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `sorts` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `numberProductComboModify` int(11) NOT NULL DEFAULT '0',
  `id_sbis` int(11) DEFAULT NULL,
  `hierarchicalId` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `modificationProductListCompiliation`
--

CREATE TABLE `modificationProductListCompiliation` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL DEFAULT '0',
  `typeProduct` int(11) NOT NULL DEFAULT '0' COMMENT 'Тип товара к которому относится модификатор',
  `art` varchar(255) NOT NULL COMMENT 'Артикул для интеграции с CRM',
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sumDiscount` varchar(255) NOT NULL,
  `activeDiscount` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `sorts` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `numberProductComboModify` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `time_start` int(11) NOT NULL,
  `time_stop` int(11) NOT NULL,
  `user_group` int(11) NOT NULL DEFAULT '0'
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
--
-- Структура таблицы `notification_user_list`
--

CREATE TABLE `notification_user_list` (
  `id` int(11) NOT NULL,
  `id_notification` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `notice` int(11) NOT NULL DEFAULT '0',
  `notice_view` int(11) NOT NULL DEFAULT '0',
  `delivered` int(11) NOT NULL DEFAULT '0',
  `response` text NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `date_unix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders_list_full`
--

CREATE TABLE `orders_list_full` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `id_product_order` int(11) DEFAULT '0',
  `title_tovar` text NOT NULL,
  `price_tovar` varchar(255) NOT NULL,
  `price_sales` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `summa` text NOT NULL,
  `summa_sales` varchar(255) NOT NULL,
  `date_insert` varchar(255) NOT NULL,
  `delete_tovar` int(11) NOT NULL DEFAULT '0',
  `type_tovar` varchar(255) NOT NULL,
  `testo` varchar(255) NOT NULL,
  `api_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_list_dop`
--

CREATE TABLE `order_list_dop` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `count_free` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `date_insert` int(11) NOT NULL,
  `delete_tovar` int(11) NOT NULL,
  `api_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_list_gift`
--

CREATE TABLE `order_list_gift` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `title` text NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `summa` varchar(255) NOT NULL,
  `price_product` varchar(255) NOT NULL,
  `date_insert` int(11) NOT NULL,
  `delete_gift` int(11) NOT NULL,
  `type_tovar` text NOT NULL,
  `api_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_list_modify`
--

CREATE TABLE `order_list_modify` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_product_order` int(11) NOT NULL DEFAULT '0',
  `title_product` text NOT NULL,
  `img_product` text NOT NULL,
  `price_product` varchar(255) NOT NULL,
  `price_sales` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `sum` text NOT NULL,
  `sum_sales` varchar(255) NOT NULL,
  `date_insert` varchar(255) NOT NULL,
  `delete_product` int(11) NOT NULL DEFAULT '0',
  `type_product` varchar(255) NOT NULL,
  `testo` varchar(255) NOT NULL,
  `api_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_list_sale`
--

CREATE TABLE `order_list_sale` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `title` text NOT NULL,
  `sale` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `sale_summa` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_list_set_goods`
--

CREATE TABLE `order_list_set_goods` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_set` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `api_Id` int(11) NOT NULL,
  `date_insert` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `ocenka` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `padej_title`
--

CREATE TABLE `padej_title` (
  `id` int(11) NOT NULL,
  `I` text NOT NULL,
  `R` text NOT NULL,
  `D` text NOT NULL,
  `V` text NOT NULL,
  `T` text NOT NULL,
  `P` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `padej_title`
--

INSERT INTO `padej_title` (`id`, `I`, `R`, `D`, `V`, `T`, `P`) VALUES
(1, 'Пицца', 'Пиццы', 'пицце', 'Пиццу', 'Пиццей', 'Пицце'),
(2, 'Роллы', 'Роллов', 'Роллам', 'Роллы', 'Роллами', 'Роллах'),
(3, 'Сет', 'Сета', 'Сету', 'Сет', 'Сетом', 'Сете'),
(4, 'Сеты', 'Сетов', 'Сетам', 'Сеты', 'Сетами', 'Сетах'),
(5, 'Суши', 'Суши', 'Сушам', 'Суши', 'Сушами', 'Сушах'),
(6, 'Лапша', 'Лапши', 'Лапше', 'Лапшу', 'Лапшой', 'Лапше'),
(7, 'Супы', 'Супов', 'Супам', 'Супы', 'Супами', 'Супах'),
(8, 'Добавки', 'Добавок', 'Добавкам', 'Добавки', 'Добавками', 'Добавках'),
(9, 'Салат', 'Салата', 'Салату', 'Салат', 'Салатом', 'Салате'),
(10, 'Салаты', 'Салатов', 'Салатам', 'Салаты', 'Салатами', 'Салатах'),
(11, 'Суп', 'Супа', 'Супу', 'Суп', 'Супом', 'Супе'),
(12, 'Добавка', 'Добавки', 'Добавке', 'Добавку', 'Добавкой', 'Добавке'),
(13, 'Мексика', 'Мексики', 'Мексике', 'Мексику', 'Мексикой', 'Мексике'),
(14, 'Русская кухня', 'Русской кухни', 'Русской кухне', 'Русскую кухню', 'Русской кухней', 'Русской кухне'),
(15, 'Мясные', 'Мясных', 'Мясной', 'Мясную', 'Мясной', 'Мясной'),
(16, 'Классические роллы', 'Классических роллов', 'Классическим роллам', 'Классические роллы', 'Классическими роллами', 'Классических роллах'),
(17, 'Классические запеченные роллы', 'Классических запеченных роллов', 'Классическим запеченным роллам', 'Классические запеченные роллы', 'Классическими запеченными роллами', 'Классических запеченных роллах'),
(18, 'Сложные роллы', 'Сложных роллов', 'Сложным роллам', 'Сложные роллы', 'Сложными роллами', 'Сложных роллах'),
(19, 'Печеные роллы', 'Печеных роллов', 'Печеным роллам', 'Печеные роллы', 'Печеными роллами', 'Печеных роллах'),
(20, 'К роллам и суши', 'К роллам и суши', 'К роллам и суши', 'К роллам и суши', 'К роллам и суши', 'К роллам и суши'),
(21, 'Пироги', 'Пирогов', 'Пирогам', 'Пироги', 'Пирогами', 'Пирогах'),
(22, 'Чизкейки', 'Чизкейков', 'Чизкейкам', 'Чизкейки', 'Чизкейками', 'Чизкейках'),
(23, 'Закуски', 'Закусок', 'Закускам', 'Закуски', 'Закусками', 'Закусках'),
(24, 'Напитки', 'Напитков', 'Напиткам', 'Напитки', 'Напитками', 'Напитках'),
(25, 'Сладкие пироги', 'Сладких пирогов', 'Сладким пирогам', 'Сладкие пироги', 'Сладкими пирогами', 'Сладких пирогах');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descriptions` text NOT NULL,
  `keywords` text NOT NULL,
  `url` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `dop_info` text NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
