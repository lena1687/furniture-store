<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule("fileman");
CMedialib::Init();

//$path = $this->GetPath();

$filter = array();
if (!empty($arParams["GALLERY_COLLECTIONS"]) && $arParams["GALLERY_COLLECTIONS"][0] != 0) {
  $filter["arCollections"] = $arParams["GALLERY_COLLECTIONS"];
}

$arResult["ITEMS"] = array();
foreach (CMedialibItem::GetList($filter) as $item) {
  $arResult["ITEMS"][] = $item;
}

// sort by name
usort($arResult["ITEMS"], function ($a, $b) {
  return strcmp($a["NAME"], $b["NAME"]);
});

//$this->SetResultCacheKeys(array(
//  "ID",
//));

$this->IncludeComponentTemplate();
