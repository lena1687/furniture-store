<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="layout-primary-uu">
    <div class="site-width">
        <div class="views-element-container">
            <ul>
            <?
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
            ?>
                <?if($arItem["SELECTED"]):?>
                    <li>
                        <div class="views-field views-field-name">
                            <span class="field-content">
                                <a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
                            </span>
                        </div>
                    </li>
                <?else:?>
                    <li>
                        <div class="views-field views-field-name">
                            <span class="field-content">
                                <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                            </span>
                        </div>
                    </li>
                <?endif?>
            <?endforeach?>
            </ul>
        </div>
    </div>
</div>
<?endif?>
