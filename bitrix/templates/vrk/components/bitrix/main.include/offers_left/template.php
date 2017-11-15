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
$this->setFrameMode(true);

if($arResult["FILE"] <> '')
	include($arResult["FILE"]); ?>
<!-- 
 <?if (!empty($arResult)):?>
 <div class="why">
 <?foreach($arResult as $arItem):?>
 	<div class="why">
 		<?=$arItem["TEXT"]?>
 	</div>
 <?endforeach?>
 </div>
 <?endif?> -->