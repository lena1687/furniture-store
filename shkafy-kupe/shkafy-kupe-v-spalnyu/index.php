<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Шкафы-купе в спальню");
?><?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "green-line",
    Array(
        "AREA_FILE_RECURSIVE" => "Y",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "incom",
        "COMPONENT_TEMPLATE" => "green-line",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/incom.php"
    )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>