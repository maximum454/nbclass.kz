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
<div class="row bottom-event-row b-30">

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-6 bottom-event-o b30" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <article class="bottom-event">
                <div class="bottom-eventio">
                    <h2><?echo $arItem["NAME"]?></h2>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </div>

                <div class="bottom-event-s">
                    <?echo $arItem["DETAIL_TEXT"];?>
                </div>

                <div class="bottom-event-form">
                    <input type="text" placeholder="Имя">
                    <input type="tel" placeholder="Телефон">
                    <input type="submit" value="Регистрация">
                </div>
            </article>
        </div>
    <?endforeach;?>
</div>
