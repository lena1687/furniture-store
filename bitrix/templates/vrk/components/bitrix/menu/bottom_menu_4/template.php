<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="last__company-list accordion_target-4">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="last__company-item"><a href="<?=$arItem["LINK"]?>" class="selected last__company-link"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="last__company-item"><a href="<?=$arItem["LINK"]?>" class="last__company-link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>