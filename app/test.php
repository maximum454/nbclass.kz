<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="aboutUs-slider">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="aboutUs-slider-elem" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="author-aboutUs">
                <? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                <div class="author-aboutUs-photo">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                         width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                         height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                         alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                         title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
                </div>
                <? endif; ?>
                <div class="author-aboutUs-info">
                    <div class="name"><? echo $arItem["NAME"] ?></div>
                    <div class="year"><? echo $arItem["DISPLAY_PROPERTIES"]["AGE"]["VALUE"] ?></div>
                </div>
                <div class="author-aboutUs-say">
                    <? if (!empty($arItem["DISPLAY_PROPERTIES"]["YOUTUBE"]["VALUE"])): ?>
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$arItem["DISPLAY_PROPERTIES"]["YOUTUBE"]["VALUE"]?>" frameborder="0" allow=" encrypted-media" allowfullscreen></iframe>
                        </div>
                        <? else: ?>
                        <? echo $arItem["PREVIEW_TEXT"]; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>