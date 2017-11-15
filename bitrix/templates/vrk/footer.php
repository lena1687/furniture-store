<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<footer class="footer">
    <div class="container">
        <div class="footer-left">
            <div class="wrapp__footer-one">
                <div class="left__menu-company">
                    <label class="company-title accordion_trigger" for="toggle-01">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/about-company.php"
                            )
                        );?>
                    </label>
                    <input type="checkbox" class="accordion_toggle" name="accordion-01" id="toggle-01"/>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu_1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu_1"
	),
	false
);?>
                </div>
                <div class="middle__menu-company">
                    <label class="company-title accordion_trigger" for="toggle-02"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer/production.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?></label>
                    <input type="checkbox" class="accordion_toggle-2" name="accordion-02" id="toggle-02"/>
                    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "bottom_menu_2",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "bottom_menu_2"
        ),
        false
    );?>
                </div>
            </div>
            <div class="wrapp__footer-two">
                <div class="right__menu-company">
                    <label class="company-title accordion_trigger" for="toggle-03">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/buyer.php"
                            )
                        );?>
                    </label>
                    <input type="checkbox" class="accordion_toggle-3" name="accordion-03" id="toggle-03"/>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu_3", Array(
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктоЫв одновременно
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "ROOT_MENU_TYPE" => "bottom_3",	// Тип меню для первого уровня
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                        false
                    );?>
                </div>
                <div class="last__menu-company">
                    <label class="company-title accordion_trigger" for="toggle-04">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/history.php"
                            )
                        );?>
                    </label>
                    <input type="checkbox" class="accordion_toggle-4" name="accordion-04" id="toggle-04"/>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu_4", Array(
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "ROOT_MENU_TYPE" => "bottom_4",	// Тип меню для первого уровня
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
        <div class="footer-right">
            <?$APPLICATION->IncludeComponent(
	"altasib:feedback.form", 
	"form_footer", 
	array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_HREF_LINK" => "Y",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CATEGORY_SELECT_NAME" => "Выберите категорию",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "Y",
		"COLOR_SCHEME" => "BRIGHT",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "2",
		"IBLOCK_ID" => "22",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array(
			0 => "DEFAULT",
		),
		"JQUERY_EN" => "jquery",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(
		),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "ALX_DATE",
		"PROPERTY_FIELDS" => array(
			0 => "FIO",
			1 => "EMAIL",
		),
		"PROPERTY_FIELDS_REQUIRED" => array(
			0 => "FIO",
			1 => "EMAIL",
		),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(
		),
		"PROPS_AUTOCOMPLETE_NAME" => array(
		),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
		),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "1@1.com",
		"SEND_IMMEDIATE" => "Y",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "N",
		"SHOW_MESSAGE_LINK" => "Y",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_INPUT_LABEL" => "",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "Y",
		"WIDTH_FORM" => "100%",
		"COMPONENT_TEMPLATE" => "form_footer",
		"CAPTCHA_TYPE" => "default",
		"NOT_CAPTCHA_AUTH" => "Y",
		"CHANGE_CAPTCHA" => "N",
		"COLOR_THEME" => "",
		"COLOR_OTHER" => "#009688"
	),
	false
);?>
        </div>
    </div>

    <div class="footer-bottom container">
        <div class="footer__bottom-desc">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "footer_bottom-info",
                    "EDIT_TEMPLATE" => ""
                )
            );?>
        </div>
        <div class="footer__bottom-copy">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "copy",
                    "EDIT_TEMPLATE" => ""
                )
            );?></div>
    </div>
    <div>
</footer>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.min.css">
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.autoplay.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/smoothscroll.js"></script>
</body>
</html>