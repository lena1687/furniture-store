<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

IncludeTemplateLangFile(__FILE__);

$TEMPLATE["main.php"] = Array("name"=>GetMessage("main"), "sort"=>-10);
$TEMPLATE["section.php"] = Array("name"=>GetMessage("section"), "sort"=>-9);
$TEMPLATE["item.php"] = Array("name"=>GetMessage("item"), "sort"=>-8);
?>