<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<div class="slider-desc-wrapper">
<div class="feedback-two slider-desc-form">
<?$APPLICATION->IncludeComponent(
    "api:feedbackex",
    "uikit",
    Array(
        "API_FEX_FORM_ID" => "FORM3",
        "BCC" => "",
        "COLOR" => "default",
        "COMPONENT_TEMPLATE" => "uikit",
        "CONFIG_PATH" => "",
        "DATETIME" => "",
        "DIR_URL" => "",
        "DISABLE_CHECK_SESSID" => "N",
        "DISABLE_SEND_MAIL" => "N",
        "DISPLAY_FIELDS" => array(0=>"TITLE",1=>"EMAIL",2=>"PHONE",),
        "EMAIL_ERROR_MESS" => "Указанный E-mail некорректен",
        "EMAIL_TO" => "test@mail.ru",
        "FIELD_ERROR_MESS" => "#FIELD_NAME# обязательное",
        "FIELD_NAME_POSITION" => "stacked",
        "FIELD_SIZE" => "default",
        "FORM_AUTOCOMPLETE" => "Y",
        "FORM_CLASS" => "",
        "FORM_FIELD_WIDTH" => "",
        "FORM_LABEL_TEXT_ALIGN" => "left",
        "FORM_LABEL_WIDTH" => "150px",
        "FORM_SUBMIT_CLASS" => "uk-button uk-width-1-1",
        "FORM_SUBMIT_STYLE" => "color: #FFFFFF;     background: #00AEEF; display: inline-block; outline: 0;     cursor: pointer;     opacity: .9;     padding: 0 18px;     height: 47px;     line-height: 47px;     border: 0;",
        "FORM_SUBMIT_VALUE" => "Отправить заявку",
        "FORM_TEXTAREA_ROWS" => "5",
        "FORM_TITLE" => "Отправьте форму и мы свяжемся с Вами в течении 1 часа  ",
        "FORM_TITLE_LEVEL" => "3",
        "FORM_WIDTH" => "",
        "HIDE_ASTERISK" => "N",
        "HIDE_FIELD_NAME" => "N",
        "MAIL_SEND_USER" => "N",
        "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
        "MAIL_SUBJECT_USER" => "#SITE_NAME#: Копия сообщения из формы обратной связи",
        "MESS_EULA" => "Нажимая кнопку «Отправить», я принимаю условия Пользовательского соглашения и даю своё согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных Политикой конфиденциальности.",
        "MESS_EULA_CONFIRM" => "Для продолжения вы должны принять условия Пользовательского соглашения",
        "MODAL_BTN_CLASS" => "api_button",
        "MODAL_BTN_ID" => "",
        "MODAL_BTN_SPAN_CLASS" => "api_icon",
        "MODAL_BTN_TEXT" => "Отправить заявку",
        "MODAL_FOOTER_TEXT" => "",
        "MODAL_HEADER_TEXT" => "Заполните форму",
        "MODAL_ID" => "#API_FEX_MODAL_FORM3",
        "OK_TEXT" => "Сообщение успешно отправлено",
        "OK_TEXT_AFTER" => "Спасибо! Мы рассмотрим сообщение и обязательно свяжемся с Вами.<br>Пожалуйста, дождитесь ответа.",
        "PAGE_TITLE" => "",
        "PAGE_URL" => "",
        "REPLACE_FIELD_FROM" => "Y",
        "REQUIRED_FIELDS" => array(0=>"TITLE",1=>"PHONE",),
        "SCROLL_SPEED" => "1000",
        "THEME" => "gradient",
        "TITLE_DISPLAY" => "Y",
        "USE_AUTOSIZE" => "Y",
        "USE_EULA" => "Y",
        "USE_FLATPICKR" => "Y",
        "USE_JQUERY" => "Y",
        "USE_MODAL" => "Y",
        "USE_PLACEHOLDER" => "N",
        "USE_PRIVACY" => "N",
        "USE_SCROLL" => "Y",
        "WRITE_MESS_DIV_STYLE" => "padding:10px;border-bottom:1px dashed #dadada;",
        "WRITE_MESS_DIV_STYLE_NAME" => "font-weight:bold;",
        "WRITE_MESS_DIV_STYLE_VALUE" => "",
        "WRITE_MESS_FILDES_TABLE" => "N",
        "WRITE_MESS_TABLE_STYLE" => "border-collapse: collapse; border-spacing: 0;",
        "WRITE_MESS_TABLE_STYLE_NAME" => "max-width: 200px; color: #848484; vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;",
        "WRITE_MESS_TABLE_STYLE_VALUE" => "vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;"
    ),
    false,
    Array(
        'ACTIVE_COMPONENT' => 'Y'
    )
);?>
</div>
<div class="slider-desc owl-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="slider-desc-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <img
            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
            />
        <h2><?=$arItem["NAME"]?></h2>
        <h5><?=$arItem["PREVIEW_TEXT"];?></h5>
        <h6><?=($arItem["DETAIL_TEXT"])?></h6>
    </div>
<?endforeach;?>
</div>
</div>

<script>$(document).ready(function(){
        $('.slider-desc').owlCarousel({
            items:1,
            nav:true,
            navText:["<button class='nav-prev nav-arrow'><</button>", "<button class='nav-next nav-arrow'>></button>"],
            center:true,
            mouseDrag:false,
            touchDrag:true,
            autoWidth:false,
            autoplay:true,
            autoplayHoverPause:true,
            loop:true,
            margin:1000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });});
</script>