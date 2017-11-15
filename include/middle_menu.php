<div class="layout-slider">
    <div class="block-blokskrytyiplatez">
        <div class="row-text">
            <img class="sprite"  />
            <span>У нас нет скрытых платежей. Одна цена на все.</span>
        </div>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "menu_down",
    array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "bottom",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "N",
        "COMPONENT_TEMPLATE" => "menu_down"
    ),
    false
);?>