CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `orders` int(11) NOT NULL,
  `url` text NOT NULL,
  `access_admin` int(11) NOT NULL DEFAULT '5'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `ADM_WORK_category_list_worktime_sale` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `alert_login_admin` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `basket_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `basket` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `basket_user_vk` (
  `id` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_user_vk` int(12) NOT NULL,
  `json` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `count_must_modify` int(11) NOT NULL DEFAULT '1' COMMENT 'Кол-во обязательных модификаторов'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `catalog_recomend` (
  `id` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `orders` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `category_list_worktime_sale` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `city_bind` (
  `id` int(11) NOT NULL,
  `shows_site` int(11) NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  `title_lat` text NOT NULL,
  `id_affilate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `city_price` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `dostavka` varchar(255) NOT NULL,
  `min_price` varchar(255) NOT NULL,
  `min_zakaz` int(11) NOT NULL,
  `city_bind` int(11) NOT NULL,
  `api_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `Complaints_connectKodeError` (
  `id` int(11) NOT NULL,
  `id_categoryPromokode` int(11) NOT NULL DEFAULT '0',
  `id_error_option` int(11) DEFAULT NULL,
  `id_kode` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Complaints_DateActivatePromo` (
  `id` int(11) NOT NULL,
  `dateTimes` int(11) DEFAULT '0',
  `id_kodeUser` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `id_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Complaints_ErrorList` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Complaints_ErrorOption` (
  `id` int(11) NOT NULL,
  `id_error` int(11) DEFAULT NULL,
  `text` text NOT NULL,
  `active` int(11) DEFAULT '0',
  `promoAssign` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Complaints_ListActivate` (
  `id` int(11) NOT NULL,
  `id_error` int(11) DEFAULT NULL,
  `id_error_option` int(11) NOT NULL DEFAULT '0',
  `id_kode` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `dateTimes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Complaints_PromokodeCategory` (
  `id` int(11) NOT NULL,
  `title` text,
  `active` int(11) DEFAULT '0',
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `SaleShowCatalog` int(11) NOT NULL DEFAULT '1',
  `keyGeocoder` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `config_frontpad` (
CREATE TABLE `config_frontpad_order_statuses` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `order_type` enum('delivery','pickup','preorder') NOT NULL,
  `external_status_id` int(11) NOT NULL,
  `external_status_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


  `id` int(11) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `apiUrl` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `cookie_token` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `datePreorderListStop` (
  `id` int(11) NOT NULL,
  `date_false` date NOT NULL,
  `start_time_false` time NOT NULL,
  `stop_time_false` time NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `DZ_District` (
  `id` int(11) NOT NULL,
  `DistrictName` text,
  `id_locality` int(11) DEFAULT NULL,
  `id_type_district` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_Locality` (
  `id` int(11) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_type_locality` int(11) DEFAULT NULL,
  `id_city_price` int(11) NOT NULL,
  `localityName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_PriceDeliveryLocality` (
  `id` int(11) NOT NULL,
  `id_locality` int(11) DEFAULT NULL,
  `minPriсeOrder` int(11) DEFAULT '0',
  `minPriceDelivery` int(11) DEFAULT '0',
  `PriceDelivery` int(11) DEFAULT '0',
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_Region` (
  `id` int(11) NOT NULL,
  `Region` text,
  `RegionName` text,
  `RegionTitle` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_Street` (
  `id` int(11) NOT NULL,
  `id_type_street` int(11) DEFAULT NULL,
  `id_locality` int(11) DEFAULT NULL,
  `StreetName` text,
  `id_district` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_TypeDistrict` (
  `id` int(11) NOT NULL,
  `shortDistrictTypeName` text,
  `fullDistrictTypeName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_TypeLocality` (
  `id` int(11) NOT NULL,
  `shortLocalityname` text,
  `fullLocalityName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DZ_Type_street` (
  `id` int(11) NOT NULL,
  `shortStreetTypeName` text,
  `fullStreetTypeName` text,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `error_JS` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `unit` text NOT NULL,
  `groups` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `gifts_winners_list` (
  `id` int(11) NOT NULL,
  `id_user_vk` int(11) NOT NULL,
  `time_gets` int(12) NOT NULL,
  `gifts` text NOT NULL,
  `promo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `gift_color` (
  `id` int(11) NOT NULL,
  `color` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `gift_line` (
  `id` int(11) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `color` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `groups_features` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` varchar(255) NOT NULL,
  `features` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `groups_ingredients` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `descr` varchar(255) NOT NULL,
  `ingredients` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `headmenu` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `active` int(11) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `info_login_admin` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `info_login_users` (
  `id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `time` int(11) NOT NULL,
  `name` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `unit` text NOT NULL,
  `groups` int(11) NOT NULL DEFAULT '0',
  `active_filter` int(11) NOT NULL DEFAULT '0',
  `active_filter_n` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `kombo_content` (
  `id` int(11) NOT NULL,
  `id_kombo` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `count` varchar(11) NOT NULL DEFAULT '1',
  `action` int(11) NOT NULL DEFAULT '0',
  `delete_kombo` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `komments_tovar` (
  `id` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `name_user` text NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `leftmenu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `orders` int(11) NOT NULL,
  `dop_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `list_category_preset` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `list_dop_product_set` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sum_min` int(11) NOT NULL,
  `sum_max` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `list_dop_product_set_goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type_size` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `list_dop_product_set_structure` (
  `id` int(11) NOT NULL,
  `id_set` int(11) NOT NULL,
  `id_dop_product` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `type_size` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `list_home` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `number_lat` varchar(255) NOT NULL,
  `id_street` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `list_street` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_lat` varchar(255) NOT NULL,
  `id_city_bind` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `list_summa_limit_preset` (
  `id` int(11) NOT NULL,
  `summa_min` int(11) NOT NULL,
  `summa_max` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `locality_bind` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_lat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `log_auth_call_phone_query` (
  `id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `timeQuery` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `metrikaAction` (
  `id` int(11) NOT NULL,
  `idPosition` int(11) NOT NULL,
  `marker` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `modal_button` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `modal_template` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `style` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `numberProductComboModify` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `order_list_sale` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `title` text NOT NULL,
  `sale` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `sale_summa` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `order_list_set_goods` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_set` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `api_Id` int(11) NOT NULL,
  `date_insert` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `otziv` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `ocenka` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `padej_title` (
  `id` int(11) NOT NULL,
  `I` text NOT NULL,
  `R` text NOT NULL,
  `D` text NOT NULL,
  `V` text NOT NULL,
  `T` text NOT NULL,
  `P` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `stats_code` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `code_yandex` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `points_system` (
  `id` int(11) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `summa_max` varchar(255) NOT NULL,
  `proc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `pushTokenDeviceUser` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `typeDevice` text,
  `expoPushToken` text,
  `DeviceToken` text,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `repeatOrderStat` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `statusText` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `reviews_list` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `session_data_voice_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sessionUser` text NOT NULL,
  `jsonData` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `settings_accounts` (
  `id` int(11) NOT NULL COMMENT 'Заполняется автоматически',
  `active_reg` int(11) NOT NULL COMMENT 'Возможность регистрации 0 - возможна, 1 - запрещена',
  `active_login` int(11) NOT NULL COMMENT 'Возможность авторизации 0 - разрешена, 1 - запрещена',
  `active_points` int(11) NOT NULL COMMENT 'Начисление баллов 0 - начислять, 1 - запретить начисление',
  `active_accounts` int(11) NOT NULL COMMENT 'Включение модуля личный кабинет: 0 - вкл, 1 - выкл'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings_birthday_modul` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `percent` int(11) NOT NULL,
  `day_before` int(11) NOT NULL,
  `day_after` int(11) NOT NULL,
  `min_price_check` tinyint(1) NOT NULL DEFAULT '0',
  `print_date` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings_discounts_category` (
  `id` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings_discounts_modul` (
  `id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `date_start` int(11) NOT NULL,
  `date_stop` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings_discounts_sale` (
  `id` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `settings_sms` (
  `id` int(11) NOT NULL,
  `login_sms` text NOT NULL,
  `password_sms` text NOT NULL,
  `url_json` text NOT NULL,
  `API_KEY` text NOT NULL,
  `SenderName` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings_theme_class` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Группы (классы и идентификаторы) для CSS оформления темы шаб';

CREATE TABLE `settings_theme_group` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings_theme_type_value` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Типы значений (текст, номер, проценты и тд)';

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

CREATE TABLE `sitemap` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `id_pages` int(11) NOT NULL,
  `type` text NOT NULL,
  `active` int(11) NOT NULL,
  `children` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `slider_footer` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `sms_list` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL,
  `phone` text NOT NULL,
  `results` text NOT NULL,
  `time` int(11) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `status_orders_list` (
  `id` int(11) NOT NULL,
  `id_orderFP` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `date_p` varchar(255) NOT NULL,
  `time_p` varchar(255) NOT NULL,
  `date_unix` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `street_bind` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_locality` int(11) NOT NULL,
  `title` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `template_messages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `type_template` int(11) NOT NULL,
  `shortcodes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `test_chekurl` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `invice` text NOT NULL,
  `all_param` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `type_category` (
  `id` int(11) NOT NULL,
  `type_categorys` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `usersPoints` (
  `id` int(11) NOT NULL,
  `id_Point` int(11) NOT NULL,
  `PinCode` varchar(255) DEFAULT NULL,
  `json` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `verification_call` (
  `id` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `time_add` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `verification_sms` (
  `id` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `time_add` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `VKApiSettings` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL DEFAULT '0',
  `token` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `zakaz_type` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `latinica` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Откуда приходят заказы';

CREATE TABLE `settings_telegram` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_chat` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ADM_WORK_catalog_list_day_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ADM_WORK_catalog_list_day_sale_fk_0_id_category_list_weekend` (`id_category_list_weekend`);

ALTER TABLE `ADM_WORK_catalog_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ADM_WORK_catalog_sale_fk_0_id_ADM_WORK_category_sale` (`id_category_sale`);

ALTER TABLE `ADM_WORK_category_list_worktime_sale`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ADM_WORK_category_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ADM_WORK_category_sale_fk_0_id_weekend` (`id_weekend`);

ALTER TABLE `adres`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `alert_login_admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `auto_push_notice_settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `basket_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `basket_user_vk`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `catalogModifyComboTittleVariant`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `catalog_list_day_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_list_day_sale_fk_0_id_category_list_weekend` (`id_category_list_weekend`);

ALTER TABLE `catalog_modificate`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `catalog_recomend`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `catalog_sale`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `category_list_worktime_sale`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `category_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_sale_fk_0_id_weekend` (`id_weekend`);

ALTER TABLE `city_bind`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `city_price`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Complaints_connectKodeError`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_connectKodeError_fk_0_id_kode` (`id_kode`),
  ADD KEY `Complaints_connectKodeError_fk_0_id_error_option` (`id_error_option`),
  ADD KEY `Complaints_connectKodeError_fk_0_id_categoryPromokode` (`id_categoryPromokode`);

ALTER TABLE `Complaints_DateActivatePromo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_DateActivatePromo_fk_0_id_kodeUser` (`id_kodeUser`);

ALTER TABLE `Complaints_ErrorList`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Complaints_ErrorOption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_ErrorOption_fk_0_id_error` (`id_error`);

ALTER TABLE `Complaints_ListActivate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_ListActivate_fk_0_id_error` (`id_error`),
  ADD KEY `Complaints_ListActivate_fk_0_id_error_option` (`id_error_option`);

ALTER TABLE `Complaints_PromokodeCategory`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Complaints_PromokodeData`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_PromokodeData_fk_0_id_kode` (`id_kode`);

ALTER TABLE `Complaints_PromokodList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_PromokodList_fk_0_category` (`categoryKode`);

ALTER TABLE `Complaints_UserKode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_UserKode_fk_0_id_kode` (`id_kode`);

ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `config_frontpad_order_statuses`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `config_frontpad`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `config_sberbank_api`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cookie_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`),
  ADD KEY `token` (`token`);

ALTER TABLE `cork_settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `datePreorderListStop`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dilivery_zones`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `DZ_District`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_District_fk_0_id_locality` (`id_locality`),
  ADD KEY `DZ_District_fk_0_id_type_district` (`id_type_district`);

ALTER TABLE `DZ_Locality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_Locality_fk_0_id_region` (`id_region`),
  ADD KEY `DZ_Locality_fk_0_id_type_locality` (`id_type_locality`);

ALTER TABLE `DZ_PriceDeliveryLocality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_PriceDeliveryLocality_fk_0_id_locality` (`id_locality`);

ALTER TABLE `DZ_Region`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `DZ_Street`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_Street_fk_0_id_type_street` (`id_type_street`),
  ADD KEY `DZ_Street_fk_0_id_locality` (`id_locality`),
  ADD KEY `DZ_Street_fk_0_id_district` (`id_district`);

ALTER TABLE `DZ_TypeDistrict`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `DZ_TypeLocality`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `DZ_Type_street`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `error_JS`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gifts_winners_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gift_color`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gift_content`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gift_line`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gift_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gift_setting`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `groups_features`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `groups_ingredients`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `headmenu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `info_login_admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `info_login_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `kombo_content`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `komments_tovar`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `leftmenu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_birthday_sale_active`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_category_preset`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_dop_product_preset`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_dop_product_set`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_dop_product_set_goods`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_dop_product_set_structure`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_home`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_preset_summa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_street`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_summa_limit_preset`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `list_tech_dot`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `locality_bind`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `log_actions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `log_auth_call_phone_query`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `log_auto_push_notice`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `log_postedit_zakaz`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `log_set_points_worker`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `metrikaAction`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modal_block`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modal_button`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modal_template`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modificationProductList`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modificationProductListCompiliation`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `notification_user_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `orders_list_full`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_zakaz` (`id_zakaz`);

ALTER TABLE `order_list_dop`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_list_gift`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_list_modify`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_list_sale`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_list_set_goods`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `otziv`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `padej_title`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `points_order`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `points_system`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `points_time_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_point` (`id_point`),
  ADD KEY `id_affiliate` (`id_affiliate`);

ALTER TABLE `pripravi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `promokod`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `promokod_actions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pushNoticeList`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pushTokenDeviceUser`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `referer_orders_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `repeatOrderStat`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reviews_group`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reviews_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reviews_question`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reviews_result`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `session_data_voice_order`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_accounts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_birthday_modul`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_discounts_category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_discounts_modul`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_discounts_sale`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_korz`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_preorder`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_sms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_theme_class`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_theme_group`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_theme_type_value`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings_theme_value`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sitemap`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `slider_footer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `slide_header`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sms_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `stats_code`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `status_in_FP_order`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `status_orders_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `street_bind`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `template_messages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `test_chekurl`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `threeFroTwo_Category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `threeFroTwo_ProductList`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `type_category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usersPoints`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `verification_call`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `verification_sms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `VKApiSettings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `VKMarketSettings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `worker_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `yandex_kassa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `zakazy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NoDeletedNew` (`status`,`deleted`);

ALTER TABLE `zakazy_all`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NoDeletedNew` (`status`,`deleted`);

ALTER TABLE `zakaz_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

ALTER TABLE `ADM_WORK_catalog_list_day_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

ALTER TABLE `ADM_WORK_catalog_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `ADM_WORK_category_list_worktime_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `ADM_WORK_category_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `adres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `alert_login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `auto_push_notice_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `basket_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `basket_user_vk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

ALTER TABLE `catalogModifyComboTittleVariant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

ALTER TABLE `catalog_list_day_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `catalog_modificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `catalog_recomend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `catalog_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `category_list_worktime_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `category_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `city_bind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `city_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

ALTER TABLE `Complaints_connectKodeError`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_DateActivatePromo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_ErrorList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_ErrorOption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_ListActivate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_PromokodeCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_PromokodeData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_PromokodList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Complaints_UserKode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `config_frontpad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `config_sberbank_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cookie_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `cork_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `datePreorderListStop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `dilivery_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `DZ_District`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `DZ_Locality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

ALTER TABLE `DZ_PriceDeliveryLocality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `DZ_Region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `DZ_Street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

ALTER TABLE `DZ_TypeDistrict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `DZ_TypeLocality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `DZ_Type_street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `error_JS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `gifts_winners_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `gift_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `gift_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `gift_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `gift_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `gift_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `groups_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `groups_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `headmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `info_login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

ALTER TABLE `info_login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `kombo_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `komments_tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `leftmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `list_birthday_sale_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `list_category_preset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `list_dop_product_preset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `list_dop_product_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `list_dop_product_set_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `list_dop_product_set_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

ALTER TABLE `list_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `list_preset_summa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `list_street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `list_summa_limit_preset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `list_tech_dot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `locality_bind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `log_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

ALTER TABLE `log_auth_call_phone_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `log_auto_push_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `log_postedit_zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `log_set_points_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `metrikaAction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `modal_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `modal_button`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `modal_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `modificationProductList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `modificationProductListCompiliation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `notification_user_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `orders_list_full`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `order_list_dop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order_list_gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order_list_modify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order_list_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order_list_set_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `otziv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `padej_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

ALTER TABLE `points_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `points_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `points_time_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

ALTER TABLE `pripravi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `promokod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `promokod_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pushNoticeList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pushTokenDeviceUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `referer_orders_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `repeatOrderStat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `reviews_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `reviews_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `reviews_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

ALTER TABLE `reviews_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `session_data_voice_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `settings_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Заполняется автоматически', AUTO_INCREMENT=2;

ALTER TABLE `settings_birthday_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `settings_discounts_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `settings_discounts_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `settings_discounts_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `settings_korz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `settings_preorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `settings_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `settings_theme_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `settings_theme_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `settings_theme_type_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `settings_theme_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

ALTER TABLE `sitemap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `slider_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `slide_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `sms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `stats_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `status_in_FP_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `status_orders_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `street_bind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `template_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `test_chekurl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `threeFroTwo_Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `threeFroTwo_ProductList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `type_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Порядковый номер', AUTO_INCREMENT=6;

ALTER TABLE `usersPoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `verification_call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `verification_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `VKApiSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `VKMarketSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `worker_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `yandex_kassa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `zakazy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `zakazy_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `zakaz_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `Complaints_connectKodeError`
  ADD CONSTRAINT `Complaints_connectKodeError_fk_0_id_categoryPromokode` FOREIGN KEY (`id_categoryPromokode`) REFERENCES `Complaints_PromokodeCategory` (`id`),
  ADD CONSTRAINT `Complaints_connectKodeError_fk_0_id_error_option` FOREIGN KEY (`id_error_option`) REFERENCES `Complaints_ErrorOption` (`id`),
  ADD CONSTRAINT `Complaints_connectKodeError_fk_0_id_kode` FOREIGN KEY (`id_kode`) REFERENCES `Complaints_PromokodList` (`id`);

ALTER TABLE `Complaints_DateActivatePromo`
  ADD CONSTRAINT `Complaints_DateActivatePromo_fk_0_id_kodeUser` FOREIGN KEY (`id_kodeUser`) REFERENCES `Complaints_UserKode` (`id`);

ALTER TABLE `Complaints_ErrorOption`
  ADD CONSTRAINT `Complaints_ErrorOption_fk_0_id_error` FOREIGN KEY (`id_error`) REFERENCES `Complaints_ErrorList` (`id`);

ALTER TABLE `Complaints_ListActivate`
  ADD CONSTRAINT `Complaints_ListActivate_fk_0_id_error` FOREIGN KEY (`id_error`) REFERENCES `Complaints_ErrorList` (`id`),
  ADD CONSTRAINT `Complaints_ListActivate_fk_0_id_error_option` FOREIGN KEY (`id_error_option`) REFERENCES `Complaints_ErrorOption` (`id`);

ALTER TABLE `Complaints_PromokodeData`
  ADD CONSTRAINT `Complaints_PromokodeData_fk_0_id_kode` FOREIGN KEY (`id_kode`) REFERENCES `Complaints_PromokodList` (`id`);

ALTER TABLE `Complaints_PromokodList`
  ADD CONSTRAINT `Complaints_PromokodList_fk_0_category` FOREIGN KEY (`categoryKode`) REFERENCES `Complaints_PromokodeCategory` (`id`);

ALTER TABLE `Complaints_UserKode`
  ADD CONSTRAINT `Complaints_UserKode_fk_0_id_kode` FOREIGN KEY (`id_kode`) REFERENCES `Complaints_PromokodList` (`id`);

ALTER TABLE `settings_telegram`
  ADD PRIMARY KEY (`id`);
