<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="primary-menu">
    <div class="menu-button">
        <button type="button" class="menu-button-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <ul class="parent">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="parent-li"><a href="<?=$arItem["LINK"]?>" class="parent-a unhover"><?=$arItem["TEXT"]?></a>
				<ul class="child hidden">
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul class="child">
		<?endif?>
	<?else:?>
        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?else:?>
            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endif?>

	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
    </ul>
</div>
<?endif?>

<script>
    $(document).ready(function() {
        $('.menu-button-toggle').click(function () {
            $('.parent').toggleClass('visible')
        });
        $('.parent-li').on('click', '.unhover', function (event) {
            event.preventDefault();
        });
        $('.parent-a').hover(
            function () {
                var thisLink = this;
                $(thisLink).next('ul').removeClass('hidden');

                function uh() {
                    $(thisLink).removeClass('unhover');
                }

                setTimeout(uh, 200);
            },
            function () {
                $(this).next('ul').addClass('hidden');
                $(this).addClass('unhover');
            });
    });
</script>
