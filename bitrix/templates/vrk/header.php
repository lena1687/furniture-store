<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	<?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<header role="banner">
    <div class="header-wrapper">
        <div class="logo2">
            <a href="/" title="Главная" rel="home">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/logo.php",
                    array(),
                    array(
                        "MORE" => "html"
                    )
                );?>
            </a>
        </div>
        <div class="warranty2">
            <ul class="warranty">
                <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => "/include/head_inc.php",
        "AREA_FILE_RECURSIVE" => "Y"
    ),
    false
    );?>
            </ul>
        </div>
        <div class="phone2">
            <div>
                <?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"2",
array(
    "AREA_FILE_SHOW" => "file",
    "AREA_FILE_SUFFIX" => "inc2",
    "EDIT_TEMPLATE" => "",
    "COMPONENT_TEMPLATE" => "2",
    "AREA_FILE_RECURSIVE" => "Y",
    "PATH" => "/include/head_phone.php"
),
false
);?>
            </div>
        </div>
    </div>
</header>

<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel1", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>

