<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="system-list">
    <div class="red-line">
        <span></span>
    </div>
    <h2><?=$arResult["NAME"]?></h2>
        <div class="system-block-wrapp">
            <?if($arParams["DISPLAY_TOP_PAGER"]):?>
                <?=$arResult["NAV_STRING"]?><br />
            <?endif;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
            <div class="system-item">
                <p id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    <?endif;?>
                </p>
                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <div class="system-wrapper"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
                        class="system-image"
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                        height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        /></a>
                    </div>
                <?endif?>
            </div>
            <?endforeach;?>
        </div>
    <span class="system-text">
        <?$APPLICATION->IncludeFile(
            SITE_DIR."include/system-text.php",
            array(),
            array(
                "MORE" => "html"
            )
        );?>
    </span>
</div>
