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

<h2 class="review-h2">Клиенты о нас</h2>
<div class="review-wrapper">
    <div class="ppl"></div>
    <div class="review owl-carousel">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="review-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="avatar-wrapper">
                <img
                class="avatar-img"
                border="0"
                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                />
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <div class="avatar-txt">
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    </div>
                <?endif;?>
            </div>
            <?foreach($arItem["FIELDS"] as $code=>$value):?>
                <div class="review-txt">
                <?=$value;?>
                </div>
            <?endforeach;?>
        </div>
    <?endforeach;?>
    </div>
</div>
<script>$(document).ready(function(){
        $('.review').owlCarousel({
            items:1,
            nav:true,
            navText:["<button class='nav-prev nav-arrow'><</button>", "<button class='nav-next nav-arrow'>></button>"],
            center:true,
            mouseDrag:false,
            touchDrag:true,
            autoWidth:false,
            autoplay:true,
            autoplayHoverPause:true,
            loop:true,
            margin:0,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });});
</script>