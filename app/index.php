<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<?
CModule::IncludeModule("iblock");
$db_props = CIBlockElement::GetProperty(1, 12, "sort", "asc", array());
$PROPS = array();
while($ar_props = $db_props->Fetch()) {
    $PROPS[$ar_props['CODE']] = $ar_props['VALUE'];
}
//print_r($PROPS);
$logo = CFile::GetPath($PROPS["LOGO"]);
$phone = $PROPS["PHONE"];
$email = $PROPS["EMAIL"];
$adres = $PROPS["ADRES"]["TEXT"];
$insta = $PROPS["INSTA"];
$time = $PROPS["TIME_WORK"];
$email = $PROPS["EMAIL"];
?>
<!doctype html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead()?>
    <meta charset="utf-8">
    <title>Курсы английского языка в Алматы - NBclass</title>
    <meta name="description" content="">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/".SITE_TEMPLATE_ID."/css/main.min.css");?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div class="b-wrap">
    <header class="b-header">
        <div class="container">
            <nav class="navigation">
                <button class="hamburger hamburger--spring" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
                </button>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "mb-menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                );?>
            </nav>
        </div>
    </header>
    <main class="b-content">
        <div class="section section__1" >
            <div class="section__1-top">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-7 section__1-top-left">
                            <div class="logo">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                                <span class="logo-info">Языковой центр</span>
                            </div>
                            <article class="preview__article">
                                <h1>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__1-h1.php"
                                        )
                                    );?>
                                </h1>
                                <p><?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__1-p.php"
                                        )
                                    );?>
                                </p>
                            </article>

                            <div class="programms-table">
                                <div class="programms-table-r">
                                    <div class="programms-table-cell">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/lang-f.png" alt="">
                                        <p class="programms-table-title">
                                            для детей
                                        </p>
                                    </div>
                                    <div class="programms-table-cell">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/ielts.png" alt="">
                                        <p class="programms-table-title" style="font-size: 12px">
                                            IELTS, TOEFL, GMAT, SAT
                                        </p>
                                    </div>
                                </div>
                                <div class="programms-table-r">
                                    <div class="programms-table-cell">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/lang-f.png" alt="">
                                        <p class="programms-table-title">
                                            для взрослых
                                        </p>
                                    </div>
                                    <div class="programms-table-cell">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/kz.png" alt="">
                                        <p class="programms-table-title">
                                            казахский язык
                                        </p>
                                    </div>
                                </div>
                                <div class="programms-table-r">
                                    <div class="programms-table-cell">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/lang-f.png" alt="">
                                        <p class="programms-table-title">
                                            business
                                        </p>
                                    </div>
                                    <div class="programms-table-cell">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/study.png" alt="">
                                        <p class="programms-table-title" style="font-size: 14.5px">
                                            корпоративное обучение
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <a href="#test" class="test-btn popup-with-zoom-anim">Узнать свой уровень</a>
                            <div id="test" class="zoom-anim-dialog mfp-hide">
                                <div class="method-modal-inner">
                                    <h1>Проходим тест</h1>
                                    <iframe src="https://docs.google.com/forms/d/1ZbpR67e7MM85vF61G3ZLIJqNgO7R1wyIr432jfYMobA/viewform?usp=send_form" width="100%" height="480" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="radial-bg-f">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/firstSectionBg.png" alt="">
                            </div>
                            <div class="main-bg">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/main-bg.png" alt="">
                            </div>
                            <div class="radial-bg-f-w">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/firstSectionBgWhite.png" alt="">
                            </div>

                            <div class="free-lesson">
                                <?$APPLICATION->IncludeComponent(
                                    "mirum:add.form-1",
                                    "add.form-1",
                                    array(
                                        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                                        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                                        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                                        "CUSTOM_TITLE_DETAIL_TEXT" => "",
                                        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                                        "CUSTOM_TITLE_NAME" => "Имя",
                                        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                                        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                                        "CUSTOM_TITLE_TAGS" => "",
                                        "DEFAULT_INPUT_SIZE" => "30",
                                        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                                        "ELEMENT_ASSOC" => "CREATED_BY",
                                        "GROUPS" => array(
                                            0 => "2",
                                        ),
                                        "IBLOCK_ID" => "9",
                                        "IBLOCK_TYPE" => "content",
                                        "LEVEL_LAST" => "Y",
                                        "LIST_URL" => "",
                                        "MAX_FILE_SIZE" => "0",
                                        "MAX_LEVELS" => "100000",
                                        "MAX_USER_ENTRIES" => "100000",
                                        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                                        "PROPERTY_CODES" => array(
                                            0 => "18",
                                            1 => "19",
                                            2 => "NAME",
                                        ),
                                        "PROPERTY_CODES_REQUIRED" => array(
                                            0 => "18",
                                            1 => "NAME",
                                        ),
                                        "RESIZE_IMAGES" => "N",
                                        "SEF_MODE" => "N",
                                        "STATUS" => "ANY",
                                        "STATUS_NEW" => "N",
                                        "USER_MESSAGE_ADD" => "",
                                        "USER_MESSAGE_EDIT" => "",
                                        "USE_CAPTCHA" => "N",
                                        "COMPONENT_TEMPLATE" => "add.form-1"
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__1-bottom">
                <div class="container">
                    <div class="row nb-couns">
                        <div class="col-lg nb-couns-z">
                            <div class="about-left">
                                <div class="pr-title">
                                    <span>NBclass</span> <br> в цифрах
                                </div>
                                <?$APPLICATION->IncludeComponent("bitrix:news.list", "nb-list", Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                    "AJAX_MODE" => "N",	// Включить режим AJAX
                                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                    "DISPLAY_DATE" => "N",	// Выводить дату элемента
                                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                                    "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                    "FIELD_CODE" => array(	// Поля
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",	// Фильтр
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                    "IBLOCK_ID" => "8",	// Код информационного блока
                                    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                    "NEWS_COUNT" => "4",	// Количество новостей на странице
                                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                    "PAGER_TITLE" => "Цифры",	// Название категорий
                                    "PARENT_SECTION" => "",	// ID раздела
                                    "PARENT_SECTION_CODE" => "",	// Код раздела
                                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                    "PROPERTY_CODE" => array(	// Свойства
                                        0 => "",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                    "SHOW_404" => "N",	// Показ специальной страницы
                                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                                ),
                                    false
                                );?>
                            </div>
                        </div>
                        <div class="col-lg-auto nb-couns-z2">
                            <div class="about-right weUs">
                                <h3>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/about-right-h3.php"
                                        )
                                    );?>
                                </h3>
                                <ul>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/about-right-ul.php"
                                        )
                                    );?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <div class="about-left" id="section1">
                                <div class="pr-title">
                                    <span>Методика</span> преподавания <br>центра
                                </div>

                                <section class="study-methods">
                                    <h4>ОБУЧАЯСЬ С «NBclass», ВЫ получаете:</h4>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "result-studies",
                                        array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                            "ADD_SECTIONS_CHAIN" => "N",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "36000000",
                                            "CACHE_TYPE" => "A",
                                            "CHECK_DATES" => "Y",
                                            "DETAIL_URL" => "",
                                            "DISPLAY_BOTTOM_PAGER" => "Y",
                                            "DISPLAY_DATE" => "Y",
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => "Y",
                                            "DISPLAY_PREVIEW_TEXT" => "Y",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "FIELD_CODE" => array(
                                                0 => "",
                                                1 => "",
                                            ),
                                            "FILTER_NAME" => "",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                            "IBLOCK_ID" => "2",
                                            "IBLOCK_TYPE" => "content",
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                            "INCLUDE_SUBSECTIONS" => "Y",
                                            "MESSAGE_404" => "",
                                            "NEWS_COUNT" => "4",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Обучаясь с ",
                                            "PARENT_SECTION" => "",
                                            "PARENT_SECTION_CODE" => "",
                                            "PREVIEW_TRUNCATE_LEN" => "",
                                            "PROPERTY_CODE" => array(
                                                0 => "HEADER_MODAL",
                                                1 => "",
                                            ),
                                            "SET_BROWSER_TITLE" => "N",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "N",
                                            "SET_META_KEYWORDS" => "N",
                                            "SET_STATUS_404" => "N",
                                            "SET_TITLE" => "N",
                                            "SHOW_404" => "N",
                                            "SORT_BY1" => "ACTIVE_FROM",
                                            "SORT_BY2" => "SORT",
                                            "SORT_ORDER1" => "DESC",
                                            "SORT_ORDER2" => "ASC",
                                            "STRICT_SECTION_CHECK" => "N",
                                            "COMPONENT_TEMPLATE" => "result-studies"
                                        ),
                                        false
                                    );?>

                                </section>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="about-right qualityStude">
                                <h3>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/qualityStude-h3.php"
                                        )
                                    );?>
                                </h3>
                                <ul>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/qualityStude-ul.php"
                                        )
                                    );?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section__2" id="section2">
            <div class="container">
                <h2 class="section-title" data-title="<?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section-2-title.php"
                    )
                );?>">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section-2-title.php"
                        )
                    );?>
                </h2>
                <div class="row m3">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "programms",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "3",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "7",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "programms"
                        ),
                        false
                    );?>
                    <div class="col-lg-3 col-md-6 p3">
                        <div class="pr-discounts">
                            <h3>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/pr-discounts-h3.php"
                                    )
                                );?>
                            </h3>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list", "pr-discounts-inner", Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",	// Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                "CACHE_TYPE" => "A",	// Тип кеширования
                                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                                "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                "FIELD_CODE" => array(	// Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",	// Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "4",	// Код информационного блока
                                "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "5",	// Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",	// Название категорий
                                "PARENT_SECTION" => "",	// ID раздела
                                "PARENT_SECTION_CODE" => "",	// Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(	// Свойства
                                    0 => "",
                                    1 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                "SHOW_404" => "N",	// Показ специальной страницы
                                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                            ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__3 events-out" id="section3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md">
                        <div class="events">
                            <div class="events-title">
                                <h3>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/events-title-h3.php"
                                        )
                                    );?>
                                </h3>
                            </div>
                            <h4><?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/events-title-h4.php"
                                    )
                                );?>
                            </h4>

                            <ul class="summerEnglish">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/summerEnglish.php"
                                    )
                                );?>

                            </ul>
                            <small class="warning">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/summerEnglish-warning.php"
                                    )
                                );?>

                            </small>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="free-lesson">
                            <?$APPLICATION->IncludeComponent(
                                "mirum:add.form-2",
                                "add.form-2",
                                array(
                                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                                    "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                                    "CUSTOM_TITLE_NAME" => "",
                                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                                    "CUSTOM_TITLE_TAGS" => "",
                                    "DEFAULT_INPUT_SIZE" => "30",
                                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                                    "ELEMENT_ASSOC" => "CREATED_BY",
                                    "GROUPS" => array(
                                        0 => "2",
                                    ),
                                    "IBLOCK_ID" => "9",
                                    "IBLOCK_TYPE" => "content",
                                    "LEVEL_LAST" => "Y",
                                    "LIST_URL" => "",
                                    "MAX_FILE_SIZE" => "0",
                                    "MAX_LEVELS" => "100000",
                                    "MAX_USER_ENTRIES" => "100000",
                                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                                    "PROPERTY_CODES" => array(
                                        0 => "18",
                                        1 => "19",
                                        2 => "NAME",
                                    ),
                                    "PROPERTY_CODES_REQUIRED" => array(
                                        0 => "18",
                                        1 => "NAME",
                                    ),
                                    "RESIZE_IMAGES" => "N",
                                    "SEF_MODE" => "N",
                                    "STATUS" => "ANY",
                                    "STATUS_NEW" => "N",
                                    "USER_MESSAGE_ADD" => "",
                                    "USER_MESSAGE_EDIT" => "",
                                    "USE_CAPTCHA" => "N",
                                    "COMPONENT_TEMPLATE" => "add.form-2"
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__4" id="section4">
            <div class="container section__4-inner">
                <h2 class="section-title" data-title="Онлайн обучение">Английский онлайн</h2>


                <div class="row justify-content-center">
                    <div class="col-md">
                        <div class="enOnline enOnline-1">
                            <div class="enOnline-inner">
                                <h4>Обучение онлайн подойдет вам, если:</h4>
                                <ul>
                                    <li>нет времени или желания ездить на занятия</li>
                                    <li>вы часто в разъездах и периодически прерываете обучение</li>
                                    <li>вы лучше усваиваете материал на индивидуальных занятиях</li>
                                    <li>нужна устная практика языка</li>
                                    <li>вы предпочитаете комфортную обстановку</li>
                                </ul>
                            </div>
                        </div>
                        <div class="enOnline enOnline-2">
                            <div class="enOnline-inner">
                                <h4>Стоимость 1 часа (60 минут)  занятий – 3 500 тенге</h4>
                                <p>Выбирайте обучение по методике NBclass <br> и занимайтесь в любой точке мира!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="enroll">
                            <div class="enroll-image bg__cover">
                                <div class="enroll-image-inner bg__cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/enroll.jpg);">
                                </div>
                            </div>

                            <a href="#enroll" class="enr-btn popup-with-zoom-anim">Записаться</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__5 corp-section" id="section5">
            <div class="corp-section-bg bg__cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banner-021.jpg)"></div>
            <div class="container corp-section-inner">
                <h2 class="section-title">Корпоративное обучение</h2>

                <div class="corp-top">
                    <p>Проводим занятия на территории заказчика с выездом преподавателей.</p>
                    <p>За&nbsp;пять лет работы добились хорошей репутации среди учебных центров английского языка.</p>
                    <p>За годы работы мы разработали небольшие коуч-сессии по целям в изучении языка
                        и их достижению.</p>
                </div>

                <section class="corp-detail">
                    <h2 class="corp-detail-title">Стоимость корпоративного обучения</h2>

                    <div class="corp-detail-box">
                        <div class="corp-detail-box-title">
                            Английский язык
                        </div>

                        <div class="cor-table">
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    Количество человек
                                </div>
                                <div class="cor-table-cell">
                                    Стоимость <br> 1 час/60 мин
                                </div>
                                <div class="cor-table-cell">
                                    Частота/длительность <br> занятий
                                </div>
                            </div>
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    От 2 до 8 человек <br> в группе
                                </div>
                                <div class="cor-table-cell">
                                    9 000 тенге
                                </div>
                                <div class="cor-table-cell">
                                    3 раза в неделю <br> по 1,5 часа
                                </div>
                            </div>
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    От 2 до 8 человек <br> в группе
                                </div>
                                <div class="cor-table-cell">
                                    10 000 тенге
                                </div>
                                <div class="cor-table-cell">
                                    2 раза в неделю <br> по 1,5 часа
                                </div>
                            </div>
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    1 человек
                                </div>
                                <div class="cor-table-cell">
                                    6 000 в час
                                </div>
                                <div class="cor-table-cell">
                                    на выбор
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="corp-detail-box">
                        <div class="corp-detail-box-title">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/corp-detail-box-title-kaz.php"
                                )
                            );?>
                        </div>

                        <div class="cor-table">
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    Количество человек
                                </div>
                                <div class="cor-table-cell">
                                    Стоимость <br> 1 час/60 мин
                                </div>
                                <div class="cor-table-cell">
                                    Частота/длительность <br> занятий
                                </div>
                            </div>
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    От 2 до 8 человек <br> в группе
                                </div>
                                <div class="cor-table-cell">
                                    6 000 тенге
                                </div>
                                <div class="cor-table-cell">
                                    3 раза в неделю <br> по 1,5 часа
                                </div>
                            </div>
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    От 2 до 8 человек <br> в группе
                                </div>
                                <div class="cor-table-cell">
                                    7 000 тенге
                                </div>
                                <div class="cor-table-cell">
                                    2 раза в неделю <br> по 1,5 часа
                                </div>
                            </div>
                            <div class="cor-table-row">
                                <div class="cor-table-cell">
                                    1 человек
                                </div>
                                <div class="cor-table-cell">
                                    5 000 в час
                                </div>
                                <div class="cor-table-cell">
                                    на выбор
                                </div>
                            </div>
                        </div>
                    </div>

                    <small class="corp-detail-box-small">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/corp-detail-box-title.php"
                            )
                        );?>
                    </small>

                    <div class="corp-detail-box-bonus">
                        <div class="corp-detail-box-title">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/corp-detail-box-title.php"
                                )
                            );?>
                        </div>

                        <ul class="bonus-list">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/bonus-list.php"
                                )
                            );?>

                        </ul>

                        <div class="question-st">
                            <div class="question-b">
                                <div class="row">
                                    <div class="col-md">
                                        <p>
                                            <?$APPLICATION->IncludeComponent(
                                                "bitrix:main.include",
                                                "",
                                                Array(
                                                    "AREA_FILE_SHOW" => "file",
                                                    "AREA_FILE_SUFFIX" => "inc",
                                                    "EDIT_TEMPLATE" => "",
                                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/question-st__head.php"
                                                )
                                            );?>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="phone-numbers-list">
                                            <?$APPLICATION->IncludeComponent(
                                                "bitrix:main.include",
                                                "",
                                                Array(
                                                    "AREA_FILE_SHOW" => "file",
                                                    "AREA_FILE_SUFFIX" => "inc",
                                                    "EDIT_TEMPLATE" => "",
                                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/phone-numbers-list.php"
                                                )
                                            );?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="section recomendation-section">
            <div class="recomendation-section-bg"></div>
            <div class="container">
                <h2>Рекомедательные письма</h2>

                <?$APPLICATION->IncludeComponent("bitrix:news.list", "recomend-slide", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",	// Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                    "DISPLAY_DATE" => "N",	// Выводить дату элемента
                    "DISPLAY_NAME" => "N",	// Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                    "FIELD_CODE" => array(	// Поля
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",	// Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "10",	// Код информационного блока
                    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                    "PAGER_TITLE" => "Письма",	// Название категорий
                    "PARENT_SECTION" => "",	// ID раздела
                    "PARENT_SECTION_CODE" => "",	// Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(	// Свойства
                        0 => "",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                    "SHOW_404" => "N",	// Показ специальной страницы
                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                ),
                    false
                );?>
            </div>
        </div>
        <div class="section section__6" id="section6">
            <div class="section__6bg">
                <div class="container"><div class="section__6-title">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__6-title.php"
                            )
                        );?>
                    </div></div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-xl">
                        <article class="valus-b">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/valus-b.php"
                                )
                            );?>

                        </article>
                    </div>
                    <div class="col-xl-auto">
                        <?$APPLICATION->IncludeComponent("bitrix:news.list", "gallery", Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                            "DISPLAY_NAME" => "N",	// Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                            "FIELD_CODE" => array(	// Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",	// Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "7",	// Код информационного блока
                            "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "20",	// Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                            "PAGER_TITLE" => "Галерея",	// Название категорий
                            "PARENT_SECTION" => "",	// ID раздела
                            "PARENT_SECTION_CODE" => "",	// Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(	// Свойства
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",	// Устанавливать статус 404
                            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                            "SHOW_404" => "N",	// Показ специальной страницы
                            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__7" id="section7">
            <div class="section__7bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg7.jpg);"></div>
            <div class="container section__7-inner">
                <div class="section__7-head">
                    <h1>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__7-head.php"
                            )
                        );?>
                    </h1>
                    <p>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__7-subhead.php"
                            )
                        );?>
                    </p>
                </div>

                <div class="prepod-info">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/prepod-info.php"
                        )
                    );?>
                </div>
                <div class="nb-table-out">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/nb-table.php"
                        )
                    );?>
                </div>

                <div class="center-form">
                    <h4>При успешном окончании курса выдается сертификат.</h4>
                    <h5><span>Оставьте заявку</span> (Вам перезвонят и ответят на все интересующие вас вопросы)</h5>
                    <div class="free-lesson">
                        <?$APPLICATION->IncludeComponent(
                            "mirum:add.form-5",
                            "add.form-5",
                            array(
                                "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                                "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                                "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                                "CUSTOM_TITLE_DETAIL_TEXT" => "",
                                "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                                "CUSTOM_TITLE_NAME" => "",
                                "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                                "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                                "CUSTOM_TITLE_TAGS" => "",
                                "DEFAULT_INPUT_SIZE" => "30",
                                "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                                "ELEMENT_ASSOC" => "CREATED_BY",
                                "GROUPS" => array(
                                    0 => "2",
                                ),
                                "IBLOCK_ID" => "9",
                                "IBLOCK_TYPE" => "content",
                                "LEVEL_LAST" => "Y",
                                "LIST_URL" => "",
                                "MAX_FILE_SIZE" => "0",
                                "MAX_LEVELS" => "100000",
                                "MAX_USER_ENTRIES" => "100000",
                                "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                                "PROPERTY_CODES" => array(
                                    0 => "18",
                                    1 => "19",
                                    2 => "NAME",
                                ),
                                "PROPERTY_CODES_REQUIRED" => array(
                                    0 => "18",
                                    1 => "NAME",
                                ),
                                "RESIZE_IMAGES" => "N",
                                "SEF_MODE" => "N",
                                "STATUS" => "ANY",
                                "STATUS_NEW" => "N",
                                "USER_MESSAGE_ADD" => "",
                                "USER_MESSAGE_EDIT" => "",
                                "USE_CAPTCHA" => "N",
                                "COMPONENT_TEMPLATE" => "add.form-5"
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__8" id="section8">
            <div class="container">
                <h2 class="section-title">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__8-head.php"
                        )
                    );?>
                </h2>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "aboutUs-slider",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "10",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Что говорят",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "AGE",
                            1 => "YOUTUBE",
                            2 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "aboutUs-slider"
                    ),
                    false
                );?>
            </div>
        </div>
        <div class="section section__9">
            <div class="container">
                <h2 class="section-title">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/section__9-head.php"
                        )
                    );?>
                </h2>

                <?$APPLICATION->IncludeComponent("bitrix:news.list", "bottom-event", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",	// Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                    "DISPLAY_DATE" => "N",	// Выводить дату элемента
                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                    "FIELD_CODE" => array(	// Поля
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",	// Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "6",	// Код информационного блока
                    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "2",	// Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                    "PAGER_TITLE" => "Мероприятия",	// Название категорий
                    "PARENT_SECTION" => "",	// ID раздела
                    "PARENT_SECTION_CODE" => "",	// Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(	// Свойства
                        0 => "",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                    "SHOW_404" => "N",	// Показ специальной страницы
                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                ),
                    false
                );?>
            </div>
        </div>
    </main>
    <footer class="b-footer" id="section9">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="company-info">
                        <div class="company-info-head">
                            <h3>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/company-info-h3.php"
                                    )
                                );?>
                            </h3>
                            <p>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/company-info-txt.php"
                                    )
                                );?></p>
                        </div>

                        <ul class="footer-tel">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/footer-tel.php"
                                )
                            );?>
                        </ul>

                        <ul class="inst-s">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/inst-s.php"
                                )
                            );?>

                        </ul>

                        <ul class="fb-s">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/bitrix/templates/".SITE_TEMPLATE_ID."/include/fb-s.php"
                                )
                            );?>

                        </ul>

                        <a href="#enroll" class="enr-btn popup-with-zoom-anim">Оставить завявку</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="map">
                        <div class="map-pr bg__cover" style="background-image: url(<?=CFile::GetPath($PROPS['OFFICE_PHOTO'])?>)">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>
#WORK_AREA#
<div class="mb-menu">
    <div class="container">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "mb-menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>
    </div>
</div>
<div id="enroll" class="zoom-anim-dialog mfp-hide">
    <div class="modal-form">
        <?$APPLICATION->IncludeComponent(
            "mirum:add.form-4",
            "add.form-4",
            Array(
                "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                "CUSTOM_TITLE_DETAIL_TEXT" => "",
                "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                "CUSTOM_TITLE_NAME" => "",
                "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                "CUSTOM_TITLE_TAGS" => "",
                "DEFAULT_INPUT_SIZE" => "30",
                "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                "ELEMENT_ASSOC" => "CREATED_BY",
                "GROUPS" => array(
                    0 => "2",
                ),
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "content",
                "LEVEL_LAST" => "Y",
                "LIST_URL" => "",
                "MAX_FILE_SIZE" => "0",
                "MAX_LEVELS" => "100000",
                "MAX_USER_ENTRIES" => "100000",
                "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                "PROPERTY_CODES" => array("18", "19", "NAME"),
                "PROPERTY_CODES_REQUIRED" => array("18", "NAME"),
                "RESIZE_IMAGES" => "N",
                "SEF_MODE" => "N",
                "STATUS" => "ANY",
                "STATUS_NEW" => "N",
                "USER_MESSAGE_ADD" => "",
                "USER_MESSAGE_EDIT" => "",
                "USE_CAPTCHA" => "N"
            )
        );?>
    </div>
</div>
<?$APPLICATION->AddHeadScript("/bitrix/templates/".SITE_TEMPLATE_ID."/js/scripts.min.js");?>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    ymaps.ready(init);

    function init(){

        var myMap;

        myMap = new ymaps.Map("map", {
            center: [<?=$PROPS['LNG']?>, <?=$PROPS['LAT']?>],
            zoom: 16,
            controls: []
        });

        myMap.behaviors.disable('scrollZoom');

        myMap.controls.add("zoomControl", {
            position: {top: 15, left: 15}
        });

        var myPlacemark = new ymaps.Placemark([<?=$PROPS['LNG']?>, <?=$PROPS['LAT']?>] , {},
            { iconLayout: 'default#image',
                iconImageHref: '<?=CFile::GetPath($PROPS['MAP_LOGO'])?>',
                iconImageSize: [69, 112],
                iconImageOffset: [-35, -110] });

        myMap.geoObjects.add(myPlacemark);

    }
</script>
</body>
</html>