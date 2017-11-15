<?php
/***********************************************************************************************
 * rodzeta.gallery - Gallery module from media lib
 * Copyright 2016 Semenov Roman
 * MIT License
 ************************************************************************************************/

namespace Rodzeta\Gallery;

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

final class Utils {

	static function buildTree(&$elements, $parentId = 0) {
		$branch = array();
		foreach ($elements as &$element) {
			if ($element["PARENT_ID"] == $parentId) {
				$children = self::buildTree($elements, $element["ID"]);
				if ($children) {
					$element["CHILDREN"] = $children;
				}
				$branch[$element["ID"]] = $element;
				unset($element);
			}
		}
		return $branch;
	}

	static function printTree($elements, &$result, $level = 0) {
		foreach ($elements as $element) {
			$result[$element["ID"]] = str_repeat(" -", $level) . " " . $element["NAME"];
			self::printTree($element["CHILDREN"], $result, $level + 1);
		}
	}

	static function getOptions() {
		$arCol = \CMedialibCollection::GetList(array(
			"arFilter" => array("ACTIVE" => "Y"),
			"arOrder" => array("NAME" => "ASC")
		));
		$collection = array();
		foreach ($arCol as $item) {
			$collection[$item["ID"]] = $item;
		}
		$collection = self::buildTree($collection);
		$result = array(0 => Loc::getMessage("RODZETA_GALLERY_COLLECTION_ALL"));
		self::printTree($collection, $result);

		return $result;
	}

}
