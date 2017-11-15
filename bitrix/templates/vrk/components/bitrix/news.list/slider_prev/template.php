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
<div class="slider-preview-wrapper">
<div class="owl-carousel slider-preview container">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="owl-item">
        <a data-fancybox="group" data-type="image" data-caption="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
            href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
            <img
                class="img"
                border="0"
                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
            />
            <span class="icon-litebox"></span>
        </a>
    </div>
<?endforeach;?>
</div>
</div>
<script>
    $(document).ready(function(){
        $('.owl-item a').fancybox();
        $('.slider-preview').owlCarousel({
            items: 1,
            nav: true,
            navText: ["",""],
            mouseDrag:true,
            touchDrag:true,
            autoWidth:true,
            autoplayHoverPause:false,
            loop: true,
            margin: 5,
            center: true
        });
    });
</script>