<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотопечать");
?>

    <h1 class="materials-title"><?$APPLICATION->ShowTitle()?></h1>
    <div class="materials-article">
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/materials/5_materials_article.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    </div>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "materials_table_big_foto", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "11",	// Код информационного блока
		"IBLOCK_TYPE" => "1",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "100",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "7",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ID",	// Поле для первой сортировки новостей
		"SORT_BY2" => "",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => "materials_table_3"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
    "altasib:feedback.form",
    "red_form",
    array(
        "ACTIVE_ELEMENT" => "Y",
        "ADD_HREF_LINK" => "Y",
        "ALX_LINK_POPUP" => "N",
        "BBC_MAIL" => "",
        "CAPTCHA_TYPE" => "default",
        "CATEGORY_SELECT_NAME" => "Выберите категорию",
        "CHANGE_CAPTCHA" => "N",
        "CHECKBOX_TYPE" => "CHECKBOX",
        "CHECK_ERROR" => "Y",
        "COLOR_OTHER" => "#009688",
        "COLOR_SCHEME" => "BRIGHT",
        "COLOR_THEME" => "",
        "COMPONENT_TEMPLATE" => "red_form",
        "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
        "FB_TEXT_NAME" => "",
        "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
        "FORM_ID" => "1",
        "IBLOCK_ID" => "10",
        "IBLOCK_TYPE" => "altasib_feedback",
        "INPUT_APPEARENCE" => array(
            0 => "DEFAULT",
        ),
        "JQUERY_EN" => "jquery",
        "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
        "LOCAL_REDIRECT_ENABLE" => "N",
        "MASKED_INPUT_PHONE" => array(
            0 => "PHONE",
        ),
        "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
        "NAME_ELEMENT" => "ALX_DATE",
        "NOT_CAPTCHA_AUTH" => "Y",
        "PROPERTY_FIELDS" => array(
            0 => "PHONE",
            1 => "FIO",
        ),
        "PROPERTY_FIELDS_REQUIRED" => array(
            0 => "PHONE",
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
        "USE_CAPTCHA" => "N",
        "WIDTH_FORM" => ""
    ),
    false
);?>
    <div class="feedback-two">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <?$APPLICATION->IncludeComponent(
                        "api:feedbackex",
                        "uikit",
                        Array(
                            "API_FEX_FORM_ID" => "FORM4",
                            "BCC" => "",
                            "COLOR" => "default",
                            "COMPONENT_TEMPLATE" => "uikit",
                            "CONFIG_PATH" => "",
                            "DATETIME" => "",
                            "DIR_URL" => "",
                            "DISABLE_CHECK_SESSID" => "N",
                            "DISABLE_SEND_MAIL" => "N",
                            "DISPLAY_FIELDS" => array(0=>"TITLE",1=>"EMAIL",2=>"PHONE",),
                            "EMAIL_ERROR_MESS" => "Указанный E-mail некорректен",
                            "EMAIL_TO" => "test@mail.ru",
                            "FIELD_ERROR_MESS" => "#FIELD_NAME# обязательное",
                            "FIELD_NAME_POSITION" => "stacked",
                            "FIELD_SIZE" => "default",
                            "FORM_AUTOCOMPLETE" => "Y",
                            "FORM_CLASS" => "",
                            "FORM_FIELD_WIDTH" => "",
                            "FORM_LABEL_TEXT_ALIGN" => "left",
                            "FORM_LABEL_WIDTH" => "150px",
                            "FORM_SUBMIT_CLASS" => "uk-button uk-width-1-1",
                            "FORM_SUBMIT_STYLE" => "color: #FFFFFF;     background: #00AEEF; display: inline-block; outline: 0;     cursor: pointer;     opacity: .9;     padding: 0 18px;     height: 47px;     line-height: 47px;     border: 0;",
                            "FORM_SUBMIT_VALUE" => "Отправить заявку",
                            "FORM_TEXTAREA_ROWS" => "5",
                            "FORM_TITLE" => "Отправьте форму и мы свяжемся с Вами в течении 1 часа  ",
                            "FORM_TITLE_LEVEL" => "3",
                            "FORM_WIDTH" => "",
                            "HIDE_ASTERISK" => "N",
                            "HIDE_FIELD_NAME" => "N",
                            "MAIL_SEND_USER" => "N",
                            "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                            "MAIL_SUBJECT_USER" => "#SITE_NAME#: Копия сообщения из формы обратной связи",
                            "MESS_EULA" => "Нажимая кнопку «Отправить», я принимаю условия Пользовательского соглашения и даю своё согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных Политикой конфиденциальности.",
                            "MESS_EULA_CONFIRM" => "Для продолжения вы должны принять условия Пользовательского соглашения",
                            "MODAL_BTN_CLASS" => "api_button",
                            "MODAL_BTN_ID" => "",
                            "MODAL_BTN_SPAN_CLASS" => "api_icon",
                            "MODAL_BTN_TEXT" => "Отправить заявку",
                            "MODAL_FOOTER_TEXT" => "",
                            "MODAL_HEADER_TEXT" => "Заполните форму",
                            "MODAL_ID" => "#API_FEX_MODAL_FORM4",
                            "OK_TEXT" => "Сообщение успешно отправлено",
                            "OK_TEXT_AFTER" => "Спасибо! Мы рассмотрим сообщение и обязательно свяжемся с Вами.<br>Пожалуйста, дождитесь ответа.",
                            "PAGE_TITLE" => "",
                            "PAGE_URL" => "",
                            "REPLACE_FIELD_FROM" => "Y",
                            "REQUIRED_FIELDS" => array(0=>"TITLE",1=>"PHONE",),
                            "SCROLL_SPEED" => "1000",
                            "THEME" => "gradient",
                            "TITLE_DISPLAY" => "Y",
                            "USE_AUTOSIZE" => "Y",
                            "USE_EULA" => "Y",
                            "USE_FLATPICKR" => "Y",
                            "USE_JQUERY" => "Y",
                            "USE_MODAL" => "Y",
                            "USE_PLACEHOLDER" => "N",
                            "USE_PRIVACY" => "N",
                            "USE_SCROLL" => "Y",
                            "WRITE_MESS_DIV_STYLE" => "padding:10px;border-bottom:1px dashed #dadada;",
                            "WRITE_MESS_DIV_STYLE_NAME" => "font-weight:bold;",
                            "WRITE_MESS_DIV_STYLE_VALUE" => "",
                            "WRITE_MESS_FILDES_TABLE" => "N",
                            "WRITE_MESS_TABLE_STYLE" => "border-collapse: collapse; border-spacing: 0;",
                            "WRITE_MESS_TABLE_STYLE_NAME" => "max-width: 200px; color: #848484; vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;",
                            "WRITE_MESS_TABLE_STYLE_VALUE" => "vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;"
                        )
                    );?>
                </div>
                <div class="col-2 padding-0">
                    <div class="call-me">
                        <p>
                            или позвоните
                        </p>
                    </div>
                </div>
                <div class="col-5">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/feed-tel.php",
                        array(),
                        array(
                            "MORE" => "text"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback-green-small">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1">
                    <?$APPLICATION->IncludeComponent(
                        "api:feedbackex",
                        "small-greenform",
                        array(
                            "COMPONENT_TEMPLATE" => "small-greenform",
                            "DISABLE_SEND_MAIL" => "N",
                            "DISABLE_CHECK_SESSID" => "N",
                            "REPLACE_FIELD_FROM" => "Y",
                            "API_FEX_FORM_ID" => "FORM8",
                            "OK_TEXT" => "Сообщение успешно отправлено",
                            "OK_TEXT_AFTER" => "Спасибо! Мы рассмотрим сообщение и обязательно свяжемся с Вами.<br>Пожалуйста, дождитесь ответа.",
                            "EMAIL_TO" => "",
                            "BCC" => "",
                            "CONFIG_PATH" => "",
                            "DISPLAY_FIELDS" => array(
                                0 => "TITLE",
                                1 => "PHONE",
                            ),
                            "REQUIRED_FIELDS" => array(
                                0 => "TITLE",
                                1 => "PHONE",
                            ),
                            "FORM_WIDTH" => "",
                            "FORM_CLASS" => "",
                            "TITLE_DISPLAY" => "N",
                            "FORM_TITLE" => "Обратная связь",
                            "FORM_TITLE_LEVEL" => "3",
                            "FIELD_ERROR_MESS" => "#FIELD_NAME# обязательное",
                            "EMAIL_ERROR_MESS" => "Указанный E-mail некорректен",
                            "FORM_SUBMIT_CLASS" => "greenfb-button",
                            "FORM_SUBMIT_VALUE" => "Отправить заявку",
                            "FORM_SUBMIT_STYLE" => "",
                            "HIDE_FIELD_NAME" => "Y",
                            "HIDE_ASTERISK" => "N",
                            "FORM_AUTOCOMPLETE" => "Y",
                            "FIELD_SIZE" => "default",
                            "FIELD_NAME_POSITION" => "stacked",
                            "FORM_LABEL_TEXT_ALIGN" => "left",
                            "FORM_LABEL_WIDTH" => "150px",
                            "FORM_FIELD_WIDTH" => "",
                            "FORM_TEXTAREA_ROWS" => "5",
                            "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                            "MAIL_SUBJECT_USER" => "#SITE_NAME#: Копия сообщения из формы обратной связи",
                            "MAIL_SEND_USER" => "N",
                            "WRITE_MESS_DIV_STYLE" => "padding:10px;border-bottom:1px dashed #dadada;",
                            "WRITE_MESS_DIV_STYLE_NAME" => "font-weight:bold;",
                            "WRITE_MESS_DIV_STYLE_VALUE" => "",
                            "WRITE_MESS_FILDES_TABLE" => "N",
                            "WRITE_MESS_TABLE_STYLE" => "border-collapse: collapse; border-spacing: 0;",
                            "WRITE_MESS_TABLE_STYLE_NAME" => "max-width: 200px; color: #848484; vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;",
                            "WRITE_MESS_TABLE_STYLE_VALUE" => "vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;",
                            "USE_JQUERY" => "N",
                            "USE_PLACEHOLDER" => "Y",
                            "USE_AUTOSIZE" => "Y",
                            "USE_FLATPICKR" => "Y",
                            "USE_SCROLL" => "Y",
                            "SCROLL_SPEED" => "1000",
                            "PAGE_TITLE" => "",
                            "PAGE_URL" => "",
                            "DIR_URL" => "",
                            "DATETIME" => "",
                            "USE_MODAL" => "N",
                            "USE_EULA" => "N",
                            "USE_PRIVACY" => "N",
                            "THEME" => "gradient",
                            "COLOR" => "default"
                        ),
                        false
                    );?>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="call-me">
                        <p>
                            или позвоните
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="small-tel">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/feed-tel.php",
                            array(),
                            array(
                                "MORE" => "text"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 padding-0">
                <div class="work">
                    <div class="red-line">
                        <span></span>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 offset-xl-0 col-sm-12 offset-sm-0 col-8 offset-2">
                            <h2>
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/work-title.php",
                                    array(),
                                    array(
                                        "MORE" => "html"
                                    )
                                );?> </h2>
                        </div>
                    </div>
                    <div class="two-line">
                    </div>
                    <div class="visits">
                        <div class="container">
                            <div class="icons">
                                <div class="row">
                                    <div class="col-xl-3 offset-xl-0 col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-8 offset-sm-2 offset-2 col-8">
                                        <div class="one-icon-block">
                                            <span class="fly"></span>
                                            <div class="icon-block one-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-1.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                            <div class="icon-block two-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-2.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 offset-xl-0 col-lg-8 offset-lg-0 col-md-10 offset-md-1 col-sm-12 offset-sm-0 offset-0 col-12">
                                        <div class="two-icon-block">
                                            <span class="step-one"></span> <span class="step-two"></span> <span class="visit-title1">1-й наш визит</span>
                                            <div class="icon-block three-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-3.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                            <div class="icon-block four-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-4.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                            <span class="visit-title2">2-й наш визит</span>
                                            <div class="icon-block five-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-5.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                            <span class="icon-time"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 offset-xl-0 col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 offset-2 col-8">
                                        <div class="three-icon-block">
                                            <div class="icon-block six-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-6.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                            <div class="icon-block seven-icon">
                                                <?$APPLICATION->IncludeFile(
                                                    SITE_DIR."include/work-7.php",
                                                    array(),
                                                    array(
                                                        "MORE" => "html"
                                                    )
                                                );?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>