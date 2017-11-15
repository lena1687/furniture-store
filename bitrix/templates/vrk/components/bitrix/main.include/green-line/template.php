<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>

	<div class="layout-slider">
		<div class="block-blokskrytyiplatez">
			<div class="row-text">
				<div class="sprite"></div>
				<div class="text"><?if($arResult["FILE"] <> '')include($arResult["FILE"]);?></div>
	    	</div>
		</div>
	</div> 
