<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CModule::IncludeModule("fileman");
CMedialib::Init();

$arComponentParameters = array(
	"GROUPS" => array(
		"GALLERY_SETTINGS" => array(
			"SORT" => 120,
			"NAME" => GetMessage("RODZETA_GALLERY_SETTINGS"),
		),
	),
	"PARAMETERS" => array(
		"GALLERY_COLLECTIONS" => array(
			"PARENT" => "GALLERY_SETTINGS",
			"NAME" => GetMessage("RODZETA_GALLERY_COLLECTION"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => \Rodzeta\Gallery\Utils::getOptions(),
			"SIZE" => 10,
		),
	),
);