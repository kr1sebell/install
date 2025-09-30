<?php
$Query9 = "

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ADM_WORK_catalog_list_day_sale`
--
ALTER TABLE `ADM_WORK_catalog_list_day_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ADM_WORK_catalog_list_day_sale_fk_0_id_category_list_weekend` (`id_category_list_weekend`);

--
-- Индексы таблицы `ADM_WORK_catalog_sale`
--
ALTER TABLE `ADM_WORK_catalog_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ADM_WORK_catalog_sale_fk_0_id_ADM_WORK_category_sale` (`id_category_sale`);

--
-- Индексы таблицы `ADM_WORK_category_list_worktime_sale`
--
ALTER TABLE `ADM_WORK_category_list_worktime_sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ADM_WORK_category_sale`
--
ALTER TABLE `ADM_WORK_category_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ADM_WORK_category_sale_fk_0_id_weekend` (`id_weekend`);

--
-- Индексы таблицы `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `alert_login_admin`
--
ALTER TABLE `alert_login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auto_push_notice_settings`
--
ALTER TABLE `auto_push_notice_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `basket_user`
--
ALTER TABLE `basket_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `basket_user_vk`
--
ALTER TABLE `basket_user_vk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalogModifyComboTittleVariant`
--
ALTER TABLE `catalogModifyComboTittleVariant`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog_list_day_sale`
--
ALTER TABLE `catalog_list_day_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_list_day_sale_fk_0_id_category_list_weekend` (`id_category_list_weekend`);

--
-- Индексы таблицы `catalog_modificate`
--
ALTER TABLE `catalog_modificate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog_recomend`
--
ALTER TABLE `catalog_recomend`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog_sale`
--
ALTER TABLE `catalog_sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_list_worktime_sale`
--
ALTER TABLE `category_list_worktime_sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_sale`
--
ALTER TABLE `category_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_sale_fk_0_id_weekend` (`id_weekend`);

--
-- Индексы таблицы `city_bind`
--
ALTER TABLE `city_bind`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city_price`
--
ALTER TABLE `city_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Complaints_connectKodeError`
--
ALTER TABLE `Complaints_connectKodeError`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_connectKodeError_fk_0_id_kode` (`id_kode`),
  ADD KEY `Complaints_connectKodeError_fk_0_id_error_option` (`id_error_option`),
  ADD KEY `Complaints_connectKodeError_fk_0_id_categoryPromokode` (`id_categoryPromokode`);

--
-- Индексы таблицы `Complaints_DateActivatePromo`
--
ALTER TABLE `Complaints_DateActivatePromo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_DateActivatePromo_fk_0_id_kodeUser` (`id_kodeUser`);

--
-- Индексы таблицы `Complaints_ErrorList`
--
ALTER TABLE `Complaints_ErrorList`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Complaints_ErrorOption`
--
ALTER TABLE `Complaints_ErrorOption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_ErrorOption_fk_0_id_error` (`id_error`);

--
-- Индексы таблицы `Complaints_ListActivate`
--
ALTER TABLE `Complaints_ListActivate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_ListActivate_fk_0_id_error` (`id_error`),
  ADD KEY `Complaints_ListActivate_fk_0_id_error_option` (`id_error_option`);

--
-- Индексы таблицы `Complaints_PromokodeCategory`
--
ALTER TABLE `Complaints_PromokodeCategory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Complaints_PromokodeData`
--
ALTER TABLE `Complaints_PromokodeData`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_PromokodeData_fk_0_id_kode` (`id_kode`);

--
-- Индексы таблицы `Complaints_PromokodList`
--
ALTER TABLE `Complaints_PromokodList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_PromokodList_fk_0_category` (`categoryKode`);

--
-- Индексы таблицы `Complaints_UserKode`
--
ALTER TABLE `Complaints_UserKode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Complaints_UserKode_fk_0_id_kode` (`id_kode`);

--
-- Индексы таблицы `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_AlfaMerchant`
--
ALTER TABLE `config_AlfaMerchant`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_frontpad`
--
ALTER TABLE `config_frontpad`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_frontpad_order_statuses`
--
ALTER TABLE `config_frontpad_order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_PayKeeper`
--
ALTER TABLE `config_PayKeeper`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_pixelcrm`
--
ALTER TABLE `config_pixelcrm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_sberbank_api`
--
ALTER TABLE `config_sberbank_api`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_TinkoffMerchant`
--
ALTER TABLE `config_TinkoffMerchant`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cookie_token`
--
ALTER TABLE `cookie_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`),
  ADD KEY `token` (`token`);

--
-- Индексы таблицы `cork_settings`
--
ALTER TABLE `cork_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `datePreorderListStop`
--
ALTER TABLE `datePreorderListStop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dilivery_zones`
--
ALTER TABLE `dilivery_zones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `DZ_District`
--
ALTER TABLE `DZ_District`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_District_fk_0_id_locality` (`id_locality`),
  ADD KEY `DZ_District_fk_0_id_type_district` (`id_type_district`);

--
-- Индексы таблицы `DZ_Locality`
--
ALTER TABLE `DZ_Locality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_Locality_fk_0_id_region` (`id_region`),
  ADD KEY `DZ_Locality_fk_0_id_type_locality` (`id_type_locality`);

--
-- Индексы таблицы `DZ_PriceDeliveryLocality`
--
ALTER TABLE `DZ_PriceDeliveryLocality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_PriceDeliveryLocality_fk_0_id_locality` (`id_locality`);

--
-- Индексы таблицы `DZ_Region`
--
ALTER TABLE `DZ_Region`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `DZ_Street`
--
ALTER TABLE `DZ_Street`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DZ_Street_fk_0_id_type_street` (`id_type_street`),
  ADD KEY `DZ_Street_fk_0_id_locality` (`id_locality`),
  ADD KEY `DZ_Street_fk_0_id_district` (`id_district`);

--
-- Индексы таблицы `DZ_TypeDistrict`
--
ALTER TABLE `DZ_TypeDistrict`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `DZ_TypeLocality`
--
ALTER TABLE `DZ_TypeLocality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `DZ_Type_street`
--
ALTER TABLE `DZ_Type_street`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `error_JS`
--
ALTER TABLE `error_JS`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gifts_winners_list`
--
ALTER TABLE `gifts_winners_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gift_color`
--
ALTER TABLE `gift_color`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gift_content`
--
ALTER TABLE `gift_content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gift_line`
--
ALTER TABLE `gift_line`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gift_list`
--
ALTER TABLE `gift_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gift_setting`
--
ALTER TABLE `gift_setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups_features`
--
ALTER TABLE `groups_features`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups_ingredients`
--
ALTER TABLE `groups_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `headmenu`
--
ALTER TABLE `headmenu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hello_points_history`
--
ALTER TABLE `hello_points_history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info_login_admin`
--
ALTER TABLE `info_login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info_login_users`
--
ALTER TABLE `info_login_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kombo_content`
--
ALTER TABLE `kombo_content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `komments_tovar`
--
ALTER TABLE `komments_tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `leftmenu`
--
ALTER TABLE `leftmenu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_birthday_sale_active`
--
ALTER TABLE `list_birthday_sale_active`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_category_preset`
--
ALTER TABLE `list_category_preset`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_dop_product_preset`
--
ALTER TABLE `list_dop_product_preset`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_dop_product_set`
--
ALTER TABLE `list_dop_product_set`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_dop_product_set_goods`
--
ALTER TABLE `list_dop_product_set_goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_dop_product_set_structure`
--
ALTER TABLE `list_dop_product_set_structure`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_home`
--
ALTER TABLE `list_home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_preset_summa`
--
ALTER TABLE `list_preset_summa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_street`
--
ALTER TABLE `list_street`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_summa_limit_preset`
--
ALTER TABLE `list_summa_limit_preset`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_tech_dot`
--
ALTER TABLE `list_tech_dot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `locality_bind`
--
ALTER TABLE `locality_bind`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_actions`
--
ALTER TABLE `log_actions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_auth_call_phone_query`
--
ALTER TABLE `log_auth_call_phone_query`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_auto_push_notice`
--
ALTER TABLE `log_auto_push_notice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_postedit_zakaz`
--
ALTER TABLE `log_postedit_zakaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_set_points_worker`
--
ALTER TABLE `log_set_points_worker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `metrikaAction`
--
ALTER TABLE `metrikaAction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modal_block`
--
ALTER TABLE `modal_block`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modal_button`
--
ALTER TABLE `modal_button`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modal_template`
--
ALTER TABLE `modal_template`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modificationCompilation`
--
ALTER TABLE `modificationCompilation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modificationProductList`
--
ALTER TABLE `modificationProductList`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modificationProductListCompiliation`
--
ALTER TABLE `modificationProductListCompiliation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notifications_manager`
--
ALTER TABLE `notifications_manager`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notification_user_list`
--
ALTER TABLE `notification_user_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_list_full`
--
ALTER TABLE `orders_list_full`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_zakaz` (`id_zakaz`);

--
-- Индексы таблицы `order_list_dop`
--
ALTER TABLE `order_list_dop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_list_gift`
--
ALTER TABLE `order_list_gift`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_list_modify`
--
ALTER TABLE `order_list_modify`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_list_sale`
--
ALTER TABLE `order_list_sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_list_set_goods`
--
ALTER TABLE `order_list_set_goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `padej_title`
--
ALTER TABLE `padej_title`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `points_order`
--
ALTER TABLE `points_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `points_system`
--
ALTER TABLE `points_system`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `points_time_list`
--
ALTER TABLE `points_time_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_point` (`id_point`),
  ADD KEY `id_affiliate` (`id_affiliate`);

--
-- Индексы таблицы `pripravi`
--
ALTER TABLE `pripravi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promokod`
--
ALTER TABLE `promokod`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promokode_activate_attempt`
--
ALTER TABLE `promokode_activate_attempt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promokod_actions`
--
ALTER TABLE `promokod_actions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promokod_category`
--
ALTER TABLE `promokod_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promokod_tpl`
--
ALTER TABLE `promokod_tpl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pushNoticeList`
--
ALTER TABLE `pushNoticeList`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pushTokenDeviceUser`
--
ALTER TABLE `pushTokenDeviceUser`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `referer_orders_list`
--
ALTER TABLE `referer_orders_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `repeatOrderStat`
--
ALTER TABLE `repeatOrderStat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews_group`
--
ALTER TABLE `reviews_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews_list`
--
ALTER TABLE `reviews_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews_question`
--
ALTER TABLE `reviews_question`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews_result`
--
ALTER TABLE `reviews_result`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `send_order_sbis`
--
ALTER TABLE `send_order_sbis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `session_data_voice_order`
--
ALTER TABLE `session_data_voice_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_accounts`
--
ALTER TABLE `settings_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_active_category`
--
ALTER TABLE `settings_active_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_birthday_modul`
--
ALTER TABLE `settings_birthday_modul`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_discounts_category`
--
ALTER TABLE `settings_discounts_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_discounts_modul`
--
ALTER TABLE `settings_discounts_modul`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_discounts_sale`
--
ALTER TABLE `settings_discounts_sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_korz`
--
ALTER TABLE `settings_korz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_preorder`
--
ALTER TABLE `settings_preorder`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_Senler`
--
ALTER TABLE `settings_Senler`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_sms`
--
ALTER TABLE `settings_sms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_telegram`
--
ALTER TABLE `settings_telegram`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_theme_class`
--
ALTER TABLE `settings_theme_class`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_theme_group`
--
ALTER TABLE `settings_theme_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_theme_type_value`
--
ALTER TABLE `settings_theme_type_value`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_theme_value`
--
ALTER TABLE `settings_theme_value`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings_yoomoney`
--
ALTER TABLE `settings_yoomoney`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sitemap`
--
ALTER TABLE `sitemap`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_footer`
--
ALTER TABLE `slider_footer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slide_header`
--
ALTER TABLE `slide_header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sms_list`
--
ALTER TABLE `sms_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stats_code`
--
ALTER TABLE `stats_code`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_in_FP_order`
--
ALTER TABLE `status_in_FP_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_in_FP_order_all`
--
ALTER TABLE `status_in_FP_order_all`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_orders_list`
--
ALTER TABLE `status_orders_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `street_bind`
--
ALTER TABLE `street_bind`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `template_messages`
--
ALTER TABLE `template_messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test_chekurl`
--
ALTER TABLE `test_chekurl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `threeFroTwo_Category`
--
ALTER TABLE `threeFroTwo_Category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `threeFroTwo_ProductList`
--
ALTER TABLE `threeFroTwo_ProductList`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_category`
--
ALTER TABLE `type_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usersPoints`
--
ALTER TABLE `usersPoints`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `verification_call`
--
ALTER TABLE `verification_call`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `verification_sms`
--
ALTER TABLE `verification_sms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `VKApiSettings`
--
ALTER TABLE `VKApiSettings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `VKMarketSettings`
--
ALTER TABLE `VKMarketSettings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `worker_users`
--
ALTER TABLE `worker_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yandex_kassa`
--
ALTER TABLE `yandex_kassa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakazy`
--
ALTER TABLE `zakazy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NoDeletedNew` (`status`,`deleted`);

--
-- Индексы таблицы `zakazy_all`
--
ALTER TABLE `zakazy_all`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NoDeletedNew` (`status`,`deleted`);

--
-- Индексы таблицы `zakaz_type`
--
ALTER TABLE `zakaz_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `ADM_WORK_catalog_list_day_sale`
--
ALTER TABLE `ADM_WORK_catalog_list_day_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `ADM_WORK_catalog_sale`
--
ALTER TABLE `ADM_WORK_catalog_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `ADM_WORK_category_list_worktime_sale`
--
ALTER TABLE `ADM_WORK_category_list_worktime_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `ADM_WORK_category_sale`
--
ALTER TABLE `ADM_WORK_category_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `adres`
--
ALTER TABLE `adres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `alert_login_admin`
--
ALTER TABLE `alert_login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `auto_push_notice_settings`
--
ALTER TABLE `auto_push_notice_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `basket_user`
--
ALTER TABLE `basket_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `basket_user_vk`
--
ALTER TABLE `basket_user_vk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT для таблицы `catalogModifyComboTittleVariant`
--
ALTER TABLE `catalogModifyComboTittleVariant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT для таблицы `catalog_list_day_sale`
--
ALTER TABLE `catalog_list_day_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `catalog_modificate`
--
ALTER TABLE `catalog_modificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `catalog_recomend`
--
ALTER TABLE `catalog_recomend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `catalog_sale`
--
ALTER TABLE `catalog_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `category_list_worktime_sale`
--
ALTER TABLE `category_list_worktime_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_sale`
--
ALTER TABLE `category_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `city_bind`
--
ALTER TABLE `city_bind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `city_price`
--
ALTER TABLE `city_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `Complaints_connectKodeError`
--
ALTER TABLE `Complaints_connectKodeError`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_DateActivatePromo`
--
ALTER TABLE `Complaints_DateActivatePromo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_ErrorList`
--
ALTER TABLE `Complaints_ErrorList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_ErrorOption`
--
ALTER TABLE `Complaints_ErrorOption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_ListActivate`
--
ALTER TABLE `Complaints_ListActivate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_PromokodeCategory`
--
ALTER TABLE `Complaints_PromokodeCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_PromokodeData`
--
ALTER TABLE `Complaints_PromokodeData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_PromokodList`
--
ALTER TABLE `Complaints_PromokodList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Complaints_UserKode`
--
ALTER TABLE `Complaints_UserKode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `config_AlfaMerchant`
--
ALTER TABLE `config_AlfaMerchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config_frontpad`
--
ALTER TABLE `config_frontpad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config_frontpad_order_statuses`
--
ALTER TABLE `config_frontpad_order_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config_PayKeeper`
--
ALTER TABLE `config_PayKeeper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config_pixelcrm`
--
ALTER TABLE `config_pixelcrm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config_sberbank_api`
--
ALTER TABLE `config_sberbank_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `config_TinkoffMerchant`
--
ALTER TABLE `config_TinkoffMerchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cookie_token`
--
ALTER TABLE `cookie_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `cork_settings`
--
ALTER TABLE `cork_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `datePreorderListStop`
--
ALTER TABLE `datePreorderListStop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dilivery_zones`
--
ALTER TABLE `dilivery_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `DZ_District`
--
ALTER TABLE `DZ_District`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `DZ_Locality`
--
ALTER TABLE `DZ_Locality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `DZ_PriceDeliveryLocality`
--
ALTER TABLE `DZ_PriceDeliveryLocality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `DZ_Region`
--
ALTER TABLE `DZ_Region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `DZ_Street`
--
ALTER TABLE `DZ_Street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `DZ_TypeDistrict`
--
ALTER TABLE `DZ_TypeDistrict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `DZ_TypeLocality`
--
ALTER TABLE `DZ_TypeLocality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `DZ_Type_street`
--
ALTER TABLE `DZ_Type_street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `error_JS`
--
ALTER TABLE `error_JS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `gifts_winners_list`
--
ALTER TABLE `gifts_winners_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gift_color`
--
ALTER TABLE `gift_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `gift_content`
--
ALTER TABLE `gift_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `gift_line`
--
ALTER TABLE `gift_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gift_list`
--
ALTER TABLE `gift_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `gift_setting`
--
ALTER TABLE `gift_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `groups_features`
--
ALTER TABLE `groups_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `groups_ingredients`
--
ALTER TABLE `groups_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `headmenu`
--
ALTER TABLE `headmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `hello_points_history`
--
ALTER TABLE `hello_points_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `info_login_admin`
--
ALTER TABLE `info_login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `info_login_users`
--
ALTER TABLE `info_login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `kombo_content`
--
ALTER TABLE `kombo_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `komments_tovar`
--
ALTER TABLE `komments_tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `leftmenu`
--
ALTER TABLE `leftmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_birthday_sale_active`
--
ALTER TABLE `list_birthday_sale_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_category_preset`
--
ALTER TABLE `list_category_preset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_dop_product_preset`
--
ALTER TABLE `list_dop_product_preset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `list_dop_product_set`
--
ALTER TABLE `list_dop_product_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `list_dop_product_set_goods`
--
ALTER TABLE `list_dop_product_set_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `list_dop_product_set_structure`
--
ALTER TABLE `list_dop_product_set_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `list_home`
--
ALTER TABLE `list_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_preset_summa`
--
ALTER TABLE `list_preset_summa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_street`
--
ALTER TABLE `list_street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_summa_limit_preset`
--
ALTER TABLE `list_summa_limit_preset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list_tech_dot`
--
ALTER TABLE `list_tech_dot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `locality_bind`
--
ALTER TABLE `locality_bind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `log_actions`
--
ALTER TABLE `log_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `log_auth_call_phone_query`
--
ALTER TABLE `log_auth_call_phone_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `log_auto_push_notice`
--
ALTER TABLE `log_auto_push_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `log_postedit_zakaz`
--
ALTER TABLE `log_postedit_zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `log_set_points_worker`
--
ALTER TABLE `log_set_points_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `metrikaAction`
--
ALTER TABLE `metrikaAction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `modal_block`
--
ALTER TABLE `modal_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `modal_button`
--
ALTER TABLE `modal_button`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `modal_template`
--
ALTER TABLE `modal_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `modificationCompilation`
--
ALTER TABLE `modificationCompilation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `modificationProductList`
--
ALTER TABLE `modificationProductList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `modificationProductListCompiliation`
--
ALTER TABLE `modificationProductListCompiliation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `notifications_manager`
--
ALTER TABLE `notifications_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `notification_user_list`
--
ALTER TABLE `notification_user_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders_list_full`
--
ALTER TABLE `orders_list_full`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `order_list_dop`
--
ALTER TABLE `order_list_dop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_list_gift`
--
ALTER TABLE `order_list_gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `order_list_modify`
--
ALTER TABLE `order_list_modify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_list_sale`
--
ALTER TABLE `order_list_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_list_set_goods`
--
ALTER TABLE `order_list_set_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `padej_title`
--
ALTER TABLE `padej_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `points_order`
--
ALTER TABLE `points_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `points_system`
--
ALTER TABLE `points_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `points_time_list`
--
ALTER TABLE `points_time_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT для таблицы `pripravi`
--
ALTER TABLE `pripravi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `promokod`
--
ALTER TABLE `promokod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `promokode_activate_attempt`
--
ALTER TABLE `promokode_activate_attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `promokod_actions`
--
ALTER TABLE `promokod_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `promokod_category`
--
ALTER TABLE `promokod_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `promokod_tpl`
--
ALTER TABLE `promokod_tpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pushNoticeList`
--
ALTER TABLE `pushNoticeList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pushTokenDeviceUser`
--
ALTER TABLE `pushTokenDeviceUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `referer_orders_list`
--
ALTER TABLE `referer_orders_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `repeatOrderStat`
--
ALTER TABLE `repeatOrderStat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews_group`
--
ALTER TABLE `reviews_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `reviews_list`
--
ALTER TABLE `reviews_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews_question`
--
ALTER TABLE `reviews_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `reviews_result`
--
ALTER TABLE `reviews_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `send_order_sbis`
--
ALTER TABLE `send_order_sbis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `session_data_voice_order`
--
ALTER TABLE `session_data_voice_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `settings_accounts`
--
ALTER TABLE `settings_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Заполняется автоматически', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings_active_category`
--
ALTER TABLE `settings_active_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `settings_birthday_modul`
--
ALTER TABLE `settings_birthday_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings_discounts_category`
--
ALTER TABLE `settings_discounts_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings_discounts_modul`
--
ALTER TABLE `settings_discounts_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings_discounts_sale`
--
ALTER TABLE `settings_discounts_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `settings_korz`
--
ALTER TABLE `settings_korz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `settings_preorder`
--
ALTER TABLE `settings_preorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings_Senler`
--
ALTER TABLE `settings_Senler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `settings_sms`
--
ALTER TABLE `settings_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings_telegram`
--
ALTER TABLE `settings_telegram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `settings_theme_class`
--
ALTER TABLE `settings_theme_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `settings_theme_group`
--
ALTER TABLE `settings_theme_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `settings_theme_type_value`
--
ALTER TABLE `settings_theme_type_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `settings_theme_value`
--
ALTER TABLE `settings_theme_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `settings_yoomoney`
--
ALTER TABLE `settings_yoomoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `sitemap`
--
ALTER TABLE `sitemap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slider_footer`
--
ALTER TABLE `slider_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slide_header`
--
ALTER TABLE `slide_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sms_list`
--
ALTER TABLE `sms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `stats_code`
--
ALTER TABLE `stats_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `status_in_FP_order`
--
ALTER TABLE `status_in_FP_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `status_in_FP_order_all`
--
ALTER TABLE `status_in_FP_order_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `status_orders_list`
--
ALTER TABLE `status_orders_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `street_bind`
--
ALTER TABLE `street_bind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `template_messages`
--
ALTER TABLE `template_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `test_chekurl`
--
ALTER TABLE `test_chekurl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `threeFroTwo_Category`
--
ALTER TABLE `threeFroTwo_Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `threeFroTwo_ProductList`
--
ALTER TABLE `threeFroTwo_ProductList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `type_category`
--
ALTER TABLE `type_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Порядковый номер', AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `usersPoints`
--
ALTER TABLE `usersPoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `verification_call`
--
ALTER TABLE `verification_call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `verification_sms`
--
ALTER TABLE `verification_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `VKApiSettings`
--
ALTER TABLE `VKApiSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `VKMarketSettings`
--
ALTER TABLE `VKMarketSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `worker_users`
--
ALTER TABLE `worker_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `yandex_kassa`
--
ALTER TABLE `yandex_kassa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `zakazy`
--
ALTER TABLE `zakazy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT для таблицы `zakazy_all`
--
ALTER TABLE `zakazy_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `zakaz_type`
--
ALTER TABLE `zakaz_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Complaints_connectKodeError`
--
ALTER TABLE `Complaints_connectKodeError`
  ADD CONSTRAINT `Complaints_connectKodeError_fk_0_id_categoryPromokode` FOREIGN KEY (`id_categoryPromokode`) REFERENCES `Complaints_PromokodeCategory` (`id`),
  ADD CONSTRAINT `Complaints_connectKodeError_fk_0_id_error_option` FOREIGN KEY (`id_error_option`) REFERENCES `Complaints_ErrorOption` (`id`),
  ADD CONSTRAINT `Complaints_connectKodeError_fk_0_id_kode` FOREIGN KEY (`id_kode`) REFERENCES `Complaints_PromokodList` (`id`);

--
-- Ограничения внешнего ключа таблицы `Complaints_DateActivatePromo`
--
ALTER TABLE `Complaints_DateActivatePromo`
  ADD CONSTRAINT `Complaints_DateActivatePromo_fk_0_id_kodeUser` FOREIGN KEY (`id_kodeUser`) REFERENCES `Complaints_UserKode` (`id`);

--
-- Ограничения внешнего ключа таблицы `Complaints_ErrorOption`
--
ALTER TABLE `Complaints_ErrorOption`
  ADD CONSTRAINT `Complaints_ErrorOption_fk_0_id_error` FOREIGN KEY (`id_error`) REFERENCES `Complaints_ErrorList` (`id`);

--
-- Ограничения внешнего ключа таблицы `Complaints_ListActivate`
--
ALTER TABLE `Complaints_ListActivate`
  ADD CONSTRAINT `Complaints_ListActivate_fk_0_id_error` FOREIGN KEY (`id_error`) REFERENCES `Complaints_ErrorList` (`id`),
  ADD CONSTRAINT `Complaints_ListActivate_fk_0_id_error_option` FOREIGN KEY (`id_error_option`) REFERENCES `Complaints_ErrorOption` (`id`);

--
-- Ограничения внешнего ключа таблицы `Complaints_PromokodeData`
--
ALTER TABLE `Complaints_PromokodeData`
  ADD CONSTRAINT `Complaints_PromokodeData_fk_0_id_kode` FOREIGN KEY (`id_kode`) REFERENCES `Complaints_PromokodList` (`id`);

--
-- Ограничения внешнего ключа таблицы `Complaints_PromokodList`
--
ALTER TABLE `Complaints_PromokodList`
  ADD CONSTRAINT `Complaints_PromokodList_fk_0_category` FOREIGN KEY (`categoryKode`) REFERENCES `Complaints_PromokodeCategory` (`id`);

--
-- Ограничения внешнего ключа таблицы `Complaints_UserKode`
--
ALTER TABLE `Complaints_UserKode`
  ADD CONSTRAINT `Complaints_UserKode_fk_0_id_kode` FOREIGN KEY (`id_kode`) REFERENCES `Complaints_PromokodList` (`id`);
COMMIT;
";

return $Query9;
