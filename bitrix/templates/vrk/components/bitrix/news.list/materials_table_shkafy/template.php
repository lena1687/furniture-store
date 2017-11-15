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
<table class="materials-table-door">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <? if($arItem["IBLOCK_SECTION_ID"] == 14 ): ?>
                <td>
                    <img	class="material-table-img"
                            border="0"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                    />
                </td>
                <td>
                    <h3><?=$arItem["NAME"]?></h3>
                    <p><?=$arItem["PREVIEW_TEXT"];?></p>
                </td>
        <? endif; ?>
</tr>
    <?endforeach;?>
    <tr>
        <td>
        </td>
        <td class="link-kupe">
            <a href="/dveri-kupe">
                <h3>Двери купе</h3>
            </a>
        </td>
    </tr>
</table>