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
                <ul class="navigation__list">
                    <li><a href="#" class="scrollto" data-attr-scroll="section1">методика</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section2">программы</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section3">миссия</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section4">корпоративное обучение</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section5">онлайн</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section6">тренинг-центр</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section7">Акции</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section8">отзывы</a></li>
                    <li><a href="#" class="scrollto" data-attr-scroll="section9">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="b-content">
        <div class="section section__1" id="section1">
            <div class="section__1-top">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-7 section__1-top-left">
                            <div class="logo">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                                <span class="logo-info">Языковой центр</span>
                            </div>
                            <article class="preview__article">
                                <h1>Освойте новый уровень английского
                                    с гарантией за счет индивидуальной программы коучинга</h1>
                                <p>Более 600 новых слов в активном словарном запасе
                                    и естественное употребление грамматических форм всего за полгода</p>
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

                            <a href="#test" class="test-btn popup-with-zoom-anim">Пройти тест</a>
                            <div id="test" class="zoom-anim-dialog mfp-hide">
                                <div class="method-modal-inner">
                                    <h1>Проходим тест</h1>
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
                                <form action="#">
                                    <h4>Запишись <br>
                                        на бесплатный пробный урок!
                                    </h4>

                                    <input type="text" placeholder="имя">
                                    <input type="tel" placeholder="телефон">
                                    <input type="email" placeholder="e-mail">

                                    <input type="submit" value="Записаться">
                                </form>
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

                                <ul class="nb-list">
                                    <li>
                                        <div class="nb-list-num">5+</div>
                                        <p>лет в корпоративном секторе</p>
                                    </li>
                                    <li>
                                        <div class="nb-list-num">30+</div>
                                        <p>обученных преподавателей</p>
                                    </li>
                                    <li>
                                        <div class="nb-list-num">20+</div>
                                        <p>компаний-клиентов</p>
                                    </li>
                                    <li>
                                        <div class="nb-list-num">500+</div>
                                        <p>учащихся в центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-auto nb-couns-z2">
                            <div class="about-right weUs">
                                <h3>С нами вы:</h3>
                                <ul>
                                    <li>Заговорите на казахском/английском языке через полгода</li>
                                    <li>Всегда будете иметь четкую цель и мотивацию к продолжению обучения</li>
                                    <li>Убедитесь в реальных результатах уже после первой ступени.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <div class="about-left">
                                <div class="pr-title">
                                    <span>Методика</span> преподавания <br>центра
                                </div>

                                <section class="study-methods">
                                    <h4>ОБУЧАЯСЬ С «NBclass», ВЫ:</h4>

                                    <div class="result-studies">
                                        <div class="result-elem">
                                            <div class="result-elem-image">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/result01.png" alt="">
                                            </div>
                                            <div class="result-elem-info">
                                                <p>Увеличите словарный запас <br>
                                                    (400-600 единиц слов за уровень)
                                                </p>
                                                <a class="popup-with-zoom-anim" href="#m1">подробнее</a>

                                                <div id="m1" class="zoom-anim-dialog mfp-hide">
                                                    <div class="method-modal-inner">
                                                        <div class="left">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/result01.png" alt="">
                                                        </div>
                                                        <div class="right">
                                                            <h4>Увеличите словарный запас <br> (400-600 единиц слов за уровень)</h4>
                                                            <p>Мы активно используем каждое новую словарную единицу на уроках. Благодаря обязательному условию учить слова и контролю, повторению и использованию, формируется устойчивый словарный запас.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="result-elem">
                                            <div class="result-elem-image">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/result02.png" alt="">
                                            </div>
                                            <div class="result-elem-info">
                                                <p>Доведете грамотную речь <br> до автоматизма
                                                </p>
                                                <a class="popup-with-zoom-anim" href="#m2">подробнее</a>
                                                <div id="m2" class="zoom-anim-dialog mfp-hide">
                                                    <div class="method-modal-inner">
                                                        <div class="left">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/result02.png" alt="">
                                                        </div>
                                                        <div class="right">
                                                            <h4>Увеличите словарный запас <br> (400-600 единиц слов за уровень)</h4>
                                                            <p>Мы активно используем каждое новую словарную единицу на уроках. Благодаря обязательному условию учить слова и контролю, повторению и использованию, формируется устойчивый словарный запас.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="result-elem">
                                            <div class="result-elem-image">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/result03.png" alt="">
                                            </div>
                                            <div class="result-elem-info">
                                                <p>Сломаете барьеры в общении на <br> английском (80% занятий–устная <br> практика)
                                                </p>
                                                <a class="popup-with-zoom-anim" href="#m3">подробнее</a>
                                                <div id="m3" class="zoom-anim-dialog mfp-hide">
                                                    <div class="method-modal-inner">
                                                        <div class="left">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/result03.png" alt="">
                                                        </div>
                                                        <div class="right">
                                                            <h4>Увеличите словарный запас <br> (400-600 единиц слов за уровень)</h4>
                                                            <p>Мы активно используем каждое новую словарную единицу на уроках. Благодаря обязательному условию учить слова и контролю, повторению и использованию, формируется устойчивый словарный запас.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="result-elem">
                                            <div class="result-elem-image">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/result04.png" alt="">
                                            </div>
                                            <div class="result-elem-info">
                                                <p>Максимально погрузитесь <br>
                                                    в языковую среду (говорим только <br>
                                                    на английском)
                                                </p>
                                                <a class="popup-with-zoom-anim" href="#m4">подробнее</a>
                                                <div id="m4" class="zoom-anim-dialog mfp-hide">
                                                    <div class="method-modal-inner">
                                                        <div class="left">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/result04.png" alt="">
                                                        </div>
                                                        <div class="right">
                                                            <h4>Увеличите словарный запас <br> (400-600 единиц слов за уровень)</h4>
                                                            <p>Мы активно используем каждое новую словарную единицу на уроках. Благодаря обязательному условию учить слова и контролю, повторению и использованию, формируется устойчивый словарный запас.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="about-right qualityStude">
                                <h3>КАЧЕСТВО ОБУЧЕНИЯ</h3>
                                <ul>
                                    <li>Сильные преподаватели, жесткий отбор в 3 этапа, ежемесячные тренинги</li>
                                    <li>Устный срез знаний в середине и конце курса</li>
                                    <li>Фокус на ОБЩЕНИИ на английском языке, а не просто знании, что такое Present Perfect  ;)</li>
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
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "programms", Array(
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
                    "IBLOCK_ID" => "3",	// Код информационного блока
                    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "7",	// Количество новостей на странице
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
                            <form action="#">
                                <h4>Успей <br> записаться!</h4>

                                <input type="text" placeholder="имя">
                                <input type="tel" placeholder="телефон">
                                <input type="email" placeholder="e-mail">

                                <input type="submit" value="Записаться">
                            </form>
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
                                <h4>Стоимость 1 часа (60 минут)  занятий – 3500 тенге</h4>
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
                    <p>Имеем 5 лет стажа и хорошую репутацию на рынке корпоративного обучения английскому языку.</p>
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
                                    9 000 тенге*
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
                                    10 000 тенге*
                                </div>
                                <div class="cor-table-cell">
                                    2 раза в неделю <br> по 1,5 часа
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
                                    6 000 тенге*
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
                                    70 000 тенге*
                                </div>
                                <div class="cor-table-cell">
                                    2 раза в неделю <br> по 1,5 часа
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

                <table class="nb-table">
                    <tr>
                        <td>
                            Тема
                        </td>
                        <td class="cor-table-cell">
                            Содержание/количество <br> часов
                        </td>
                        <td class="cor-table-cell">
                            Стоимость
                        </td>
                        <td class="cor-table-cell">
                            Комментарии
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Teaching English to Adults <br>
                            <span>(до 6 человек)</span>

                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>Тренинг</td>
                                    <td>16 ч.</td>
                                </tr>
                                <tr>
                                    <td>практика: подготовка, проведение, анализ занятий</td>
                                    <td>4 ч.</td>
                                </tr>
                                <tr>
                                    <td>самостоятельное изучение</td>
                                    <td>6 ч.</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            от 45 000 тг. <br>
                            до 52 000 тг.

                        </td>
                        <td>
                            Для преподавателей с опытом работы
                            от 1 года и уровнем
                            от Upper-Intermediate.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Teaching IELTS <br>
                            <span>(до 8 человек)</span>

                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>Тренинг</td>
                                    <td>10 ч.</td>
                                </tr>
                                <tr>
                                    <td>Экзамен</td>
                                    <td>3.5 ч.</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            от 30 000 тг. <br>
                            до 37 000 тг.

                        </td>
                        <td>
                            Рекомендуется преподавателям уровня Advanced и выше, работающими с взрослыми группами уровней Intermediate и выше.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Teaching Young Learners <br>
                            <span>(до 6 человек)</span>


                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>Тренинг</td>
                                    <td>16 ч.</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            от 35 000 тг. <br>
                            до 42 000 тг.
                        </td>
                        <td>
                            Для преподавателей уровня Intermediate
                            и выше, работающи
                            с детьми и подростками.
                        </td>
                    </tr>
                </table>

                <div class="center-form">
                    <h4>При успешном окончании курса выдается сертификат.</h4>
                    <h5><span>Оставьте заявку</span> (Вам перезвонят и ответят на все интересующие вас вопросы)</h5>
                    <div class="free-lesson">
                        <form action="#">
                            <div class="centF-grid">
                                <input type="text" placeholder="имя">
                                <input type="tel" placeholder="телефон">
                                <input type="email" placeholder="e-mail">

                                <input type="submit" value="Записаться">
                            </div>
                        </form>
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
<div id="enroll" class="zoom-anim-dialog mfp-hide">
    <div class="modal-form">
        <form action="#">
            <h4>Записаться!</h4>

            <input type="text" placeholder="имя">
            <input type="tel" placeholder="телефон">
            <input type="email" placeholder="e-mail">

            <input type="submit" value="Записаться">
        </form>
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
                iconImageOffset: [-20, -47] });

        myMap.geoObjects.add(myPlacemark);

    }
</script>
</body>
</html>