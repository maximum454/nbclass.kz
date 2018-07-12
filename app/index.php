<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<?
CModule::IncludeModule("iblock");
$db_props = CIBlockElement::GetProperty(35, 106, "sort", "asc", array());
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

$lat = $PROPS["LAT"];
$lng = $PROPS["LNG"];
$curPage = $APPLICATION->GetCurPage(false);
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
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
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
                <h2 class="section-title" data-title="Программы">Программы</h2>
                <div class="row m3">
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Английский язык <br> для детей</h4>
                                <p>5-6 лет “First Friends” <br>
                                    от 11600 в месяц <br>
                                    7-9 лет “Family and Friends” <br>
                                    от 12900 в месяц <br>
                                </p>
                                <p>Группы 2-8 человек</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Английский язык <br> для подростков</h4>
                                <p>10-12 лет “Project” от 13900 <br>
                                    в месяц <br>
                                    13-16 лет “Solutions” от 17900<br>
                                    в месяц</p>
                                <p>Группы 2-8 человек</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Английский язык <br> для взрослых</h4>
                                <p>Уровни Beginner-Advanced <br> от 20300 в месяц</p>
                                <p>Группы 2-8 человек <br> 16 часов/академический месяц</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Business English <br> (деловой английский)</h4>
                                <p>Уровни Elementary-Advanced <br> от 21200 в месяц</p>
                                <p>Группы 2-8 человек <br> 16 часов/академический месяц</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Exam Preparation (IELTS, TOEFL, GMAT, SAT)</h4>
                                <p>Уровни Intermediate-Advanced <br> от 26100 в месяц</p>
                                <p>Группы 2-8 человек <br> 16 часов/академический месяц</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Казахский язык</h4>
                                <p>Детские группы (7-15 лет) <br> от 11600 в месяц</p>
                                <p>Взрослые группы (от 16 лет) <br> от 16100 в месяц</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <a href="#" class="pr-elem">
                            <div class="pr-elem-inner">
                                <h4>Индивидуальные занятия</h4>
                                <p>Английский язык 4500/5000 <br>
                                    - 60 минут <br>
                                    Казахский язык 3500/4000 <br>
                                    - 60 минут <br>
                                    Exam Preparation 5000/5500 <br>
                                    - 60 минут</p>
                            </div>
                            <div class="pr-elem-next"></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 p3">
                        <div class="pr-discounts">
                            <h3>Скидки NBclass!</h3>
                            <ul class="pr-discounts-inner">
                                <li>Семейная — <b>10% каждому</b></li>
                                <li>Студенческая — <b>15%</b></li>
                                <li>Предоплата за 2 <br> и более месяцев — <b>10%</b></li>
                                <li>Приведи друга –— <b>10%</b></li>
                                <li>Лучший студент месяца — <b>20%</b></li>
                            </ul>
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
                                <h3>Акции!</h3>
                            </div>
                            <h4>Летний английский*</h4>

                            <ul class="summerEnglish">
                                <li>Июнь <span>20 900</span> вместо 24 900 тг.</li>
                                <li>Июль <span>21 900</span> вместо 24 900 тг.</li>
                                <li>Август <span>22 500</span> вместо 24 900 тг.</li>
                            </ul>
                            <small class="warning">
                                * Только для взрослых <br> в групповых занятиях
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
                                <div class="enroll-image-inner bg__cover" style="background-image: url(img/enroll.jpg);">
                                </div>
                            </div>

                            <a href="#" class="enr-btn">Записаться</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__5 corp-section" id="section5">
            <div class="corp-section-bg bg__cover" style="background-image: url(img/banner-021.jpg)"></div>
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
                            Казахский язык
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

                    <small class="corp-detail-box-small">*стоимость может варьироваться в зависимости от количества проведенных занятий <br>
                        Трансфер входит в стоимость оплаты</small>

                    <div class="corp-detail-box-bonus">
                        <div class="corp-detail-box-title">
                            БОНУСЫ
                        </div>

                        <ul class="bonus-list">
                            <li>Быстрое определение <br> уровня (7 минут)</li>
                            <li>Пробный урок</li>
                            <li>Разговорные клубы <br> с носителями (1 раз в месяц)</li>
                            <li>Коуч-сессии <br> по целям</li>
                            <li>Бесплатный перевод 30 <br> страниц документов</li>
                        </ul>

                        <div class="question-st">
                            <div class="question-b">
                                <div class="row">
                                    <div class="col-md">
                                        <p>По вопросам корпоративного обучения звонить:</p>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="phone-numbers-list">
                                            <li><a href="tel:+87756792409">8 775 679 24 09</a></li>
                                            <li><a href="tel:+87072087183">8 707 208 71 83</a></li>
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
                <div class="container"><div class="section__6-title">Наши ценности</div></div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-xl">
                        <article class="valus-b">
                            <h1>Наша миссия – помогать расширять горизонты <br> и возможности!</h1>
                            <h3>Наши ценности</h3>
                            <ul>
                                <li><strong>Качество</strong> предоставляемых услуг, как не банально это может прозвучать, для нас на первом месте. К ряду с этим мы уделяем первостепенное внимание <strong>профессионализму</strong> наших преподавателей. Поэтому мы ведем тщательный, трех-ступенчатый отбор при приеме на работу, а также повышение квалификации специалистов каждые шесть месяцев.</li>
                                <li>Немаловажное значение для нас имеет <strong>душевный комфорт</strong> в школе, на занятиях, в коллективе. Как рабочий, так и учебный процесс идут гораздо эффективнее, если нравится общение, нравятся люди, с которыми находишься, если бежишь на занятия или на работу с удовольствием и в предвкушении положительных эмоций.</li>
                                <li>Мы также стараемся активно поддерживать <strong>экологичный</strong> образ жизни (Eco-friendly). Мы активно распространяем информацию среди наших коллег и учащихся о том, как можно бережно относиться к ресурсам, а именно к воде, бумаге, электричеству. Выезжая на пикник мы всегда тщательно убираем за собой. В офисе используются только стеклянные и бумажные стаканчики. Копии делаются по минимуму, а использованная бумага собирается и вывозится в пункт сбора макулатуры. Уже стала традицией весенняя посадка деревьев с привлечением работников и учащихся NBclass.</li>
                                <li>В нашем центре существует также <strong>программа для детей и подростков из малоимущих семей</strong>. Для тех, кто очень хочет и может учиться, но имеют финансовые затруднения, мы с удовольствием предоставляем бесплатное обучение английскому и казахскому языкам.</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-xl-auto">
                        <div class="vert-slider popup-gallery">
                            <div class="vert-slider-slick">
                                <a href="img/slider01.jpg" class="vert-slider-slick-elem">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider01.jpg" alt="">

                                </a>
                                <a href="img/slider01.jpg" class="vert-slider-slick-elem">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider01.jpg" alt="">
                                </a>
                                <a href="img/slider01.jpg" class="vert-slider-slick-elem">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider01.jpg" alt="">
                                </a>
                                <a href="img/slider01.jpg" class="vert-slider-slick-elem">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider01.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__7" id="section7">
            <div class="section__7bg" style="background-image: url(img/bg7.jpg);"></div>
            <div class="container section__7-inner">
                <div class="section__7-head">
                    <h1>ТРЕНИНГ-ЦЕНТР <br> для преподавателей</h1>
                    <p>При школе NBclass работает тренинг-центр для преподавателей.</p>
                </div>

                <div class="prepod-info">
                    <h4>ЦЕЛЬ</h4>
                    <p>Поддержание и развитие профессиональных навыков преподавателей английского языка.</p>
                    <h4>ДЛЯ КОГО</h4>
                    <p>Преподаватели нашего центра ежемесячно повышают профессиональный уровень. <br>
                        Для преподавателей других учебных учреждений проходят отдельные тренинги. Они рассчитаны на все уровни обучения учащихся от 6 лет. Специфика варьируется от General English до Business English и Exam  Preparation. Также рассматриваются заявки преподавателей с иной спецификой преподавания.</p>
                    <h4>ТРЕНЕРЫ</h4>
                    <p>Тренинги и семинары проводятся местными и приглашенными специалистами. Требования <br>
                        к тренерам – это практический опыт работы не менее 5 лет, уровень английского языка <br>
                        не ниже Advanced и профессиональная международная сертификация (CELTA, TESOL, TEFL, IHCYLT, и <br> т.д.)</p>
                    <h4>ПРЕИМУЩЕСТВА</h4>
                    <p>Тренинги направлены на развитие практических навыков преподавателей. Наряду
                        с семинарами преподаватели проводят реальные уроки с реальными учащимися. Ведется постоянный мониторинг со стороны тренеров. Гибкий график тренинга позволяет совмещать интенсивное обучение с работой в группах до 8 человек.</p>
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
                <h2 class="section-title">ЧТО ГОВОРЯТ О НАС</h2>
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
                <h2 class="section-title">Мероприятия</h2>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "",
                    Array(
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
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "6",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "2",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Мероприятия",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
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
                            <h3>Где мы находимся</h3>
                            <p>г. Алматы, ул Маркова 11 <br> уг. Бухар Жырау</p>
                        </div>

                        <ul class="footer-tel">
                            <li><a href="tel:+87071061719">8 (707) 106 17 19</a></li>
                            <li><a href="tel:+87272926332">8 (727) 292 63 32</a></li>
                        </ul>

                        <ul class="inst-s">
                            <li><a href="#">@nbclass_kz</a></li>
                            <li><a href="#">@nbclass_almaty</a></li>
                        </ul>

                        <ul class="fb-s">
                            <li><a href="#">@NBclass English</a></li>
                            <li><a href="#">@NB Class</a></li>
                        </ul>

                        <a href="#" class="enr-btn">Оставить завявку</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="map">
                        <div class="map-pr bg__cover" style="background-image: url(img/lc.jpg)">
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
<?$APPLICATION->AddHeadScript("/bitrix/templates/".SITE_TEMPLATE_ID."/js/scripts.min.js");?>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    var myMap;
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [<?=$PROPS['LNG']?>,<?=$PROPS['LAT']?>],
                zoom: 16
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'Собственный значок метки',
                balloonContent: '<?=$PROPS['ADDRESS'][TEXT];?>'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                //iconImageHref: '<?=CFile::GetPath($PROPS['MAP_LOGO'])?>',
                // Размеры метки.
                //iconImageSize: [35, 35],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                //iconImageOffset: [-10, -15]
            });
        myMap.geoObjects.add(myPlacemark);
    });
</script>
<script>
    ymaps.ready(init);

    function init(){

        var myMap;

        myMap = new ymaps.Map("map", {
            center: [43.233124, 76.926008],
            zoom: 16,
            controls: []
        });

        myMap.behaviors.disable('scrollZoom');

        myMap.controls.add("zoomControl", {
            position: {top: 15, left: 15}
        });

        var myPlacemark = new ymaps.Placemark([43.233124, 76.926008] , {},
            { iconLayout: 'default#image',
                iconImageHref: 'img/mark.png',
                iconImageSize: [69, 112],
                iconImageOffset: [-20, -47] });

        myMap.geoObjects.add(myPlacemark);

    }
</script>
</body>
</html>