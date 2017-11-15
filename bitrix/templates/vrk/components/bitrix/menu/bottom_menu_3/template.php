<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="right__company-list accordion_target-3">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="right__company-item"><a href="<?=$arItem["LINK"]?>" class="selected right__company-link"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="right__company-item"><a href="<?=$arItem["LINK"]?>" class="right__company-link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>