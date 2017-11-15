<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?php

$galleryKey = implode("_", $arParams["GALLERY_COLLECTIONS"]);

?>
<div class="row">
      <?php foreach ($arResult["ITEMS"] as $item) { ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="peregorodki-gallery-item">
                  <a class="fancybox" data-fancybox="group" data-type="image" rel="rodzeta-gallery-<?= $galleryKey ?>"
                     href="<?= $item["PATH"] ?>"
                     title="<?= htmlspecialchars($item["DESCRIPTION"]) ?>">
                      <img src="<?= $item["THUMB_PATH"] ?>"/>
                  </a>
            </div>
        </div>
      <?php } ?>
</div>

