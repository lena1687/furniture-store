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
<div class="slider1 owl-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        <img id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="item-owl"
             border="0"
             src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
             width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
             height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
<?endforeach;?>
</div>
<script>$(document).ready(function(){
        $('.slider1').owlCarousel({
            items:1,
            center:true,
            mouseDrag:false,
            touchDrag:false,
            autoWidth:false,
            loop:true,
            margin:1000,
            autoplay:true,
            autoplayTimeout:4000,
            animateOut: 'fadeOut'
        });});
</script>