<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>

    <ul class="navigation__list">

        <? foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>

            <? if ($arItem["SELECTED"]):?>
            <li><a href="#" class="scrollto 1" data-attr-scroll="<?=$arItem["PARAMS"]["menu"]?>"><?= $arItem["TEXT"] ?></a></li>
        <? else:?>
            <li><a href="#" class="scrollto 2" data-attr-scroll="<?=$arItem["PARAMS"]["menu"]?>"><?= $arItem["TEXT"] ?></a></li>
        <? endif ?>

        <? endforeach ?>
    </ul>

<? endif ?>