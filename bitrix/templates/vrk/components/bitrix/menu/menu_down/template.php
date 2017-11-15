<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="layout-slider">
        <div class="block-blokskrytyiplatez">
            <div class="row-text">
                <div class="sprite"></div>
                <div class="text">У нас нет скрытых платежей. Одна цена на все.</div>
            </div>
        </div>
    </div>
    <div class="middle-menu" align="center">
        <?foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
            <?if($arItem["PARAMS"]["IMG"]):?>
                <div class="fon">
                    <div class="box">
                        <img width="360" height="300" src="<?=$arItem["PARAMS"]["IMG"]?>" />
                    </div>
                    <a href="<?=$arItem["LINK"]?>">
                        <div class="box1">
                            <span><?=$arItem["TEXT"]?></span>
                        </div>
                    </a>
                </div>
            <?else:?>
                <div class="fon">
                    <div class="box">
                        <img width="360" height="300" src="<?=SITE_TEMPLATE_PATH?>/images/mute.jpg"/>
                    </div>
                    <a href="<?=$arItem["LINK"]?>">
                        <div class="box1">
                            <span><?=$arItem["TEXT"]?></span>
                        </div>
                    </a>
                </div>
            <?endif?>
        <?endforeach?>
    </div>
<?endif?>