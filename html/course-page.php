<?
    define("PAGE_TITLE", "Страница курса");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<link rel="stylesheet" href="../assets/css/components/breadcrumbs.css?v=0.0.0.7">
<section class="course-page-hero" style="background-image: url(../assets/img/course-page/course-page-hero.png)">

    <div class="site-container2 breadcrumbs__container mod-padding-breadcrumbs mod-course-page mod-color-light-blue">
        <div class="breadcrumbs flex-wrap">
            <a href=""class="breadcrumbs__item breadcrumbs__link">Главная
                <svg class="icon icon-breadcrumbs-arrow">
                    <use xlink:href="../assets/img/sprite.svg#breadcrumbs-arrow"></use>
                </svg>     
            </a>
            <a href=""class="breadcrumbs__item breadcrumbs__link">Инструкторам
                <svg class="icon icon-breadcrumbs-arrow">
                    <use xlink:href="../assets/img/sprite.svg#breadcrumbs-arrow"></use>
                </svg>     
            </a>
            <span class="breadcrumbs__item">
                Инструктор по горнолыжному спорту
            </span>
        </div>
    </div>

    <div class="site-container2 js-hero-title">
        <span class="course-page-hero__duration">
            Продолжительность: 14 дней
        </span>

        <h1 class="second-title course-page-hero__title">
            Инструктор начального уровня обучения курс категории «С» 
        </h1>

        <p class="course-page-hero__text">
            Программа данного курса полностью соответствует международным стандартам ISIA и методическим рекомендациям 
        </p>
        <div class="course-page-hero__btn-group">
            <a href="#course-reg" class="button _white-bg course-page-hero__reg-course">
                Записаться на курс
            </a>
        </div>

        <ul class="course-page-hero__list grid">
            <li class="course-page-hero__list-item">
                <svg width="32" height="32" class="icon course-page-hero__list-icon">
                    <use xlink:href="../assets/img/sprite.svg#book"></use>
                </svg>
                <span class="course-page-hero__list-text">
                    Пошаговая подготовка до&nbsp;восхождения
                </span>
            </li>
            <li class="course-page-hero__list-item">
                <svg width="32" height="32" class="icon course-page-hero__list-icon">
                    <use xlink:href="../assets/img/sprite.svg#plan"></use>
                </svg>
                <span class="course-page-hero__list-text">
                    Подберем снаряжение и план физ. подготовки
                </span>
            </li>
            <li class="course-page-hero__list-item">
                <svg width="42" height="32" class="icon course-page-hero__list-icon">
                    <use xlink:href="../assets/img/sprite.svg#hand-shake"></use>
                </svg>
                <span class="course-page-hero__list-text">
                    Поможем с билетами, страховкой и другим
                </span>
            </li>
        </ul>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/course-page-hero.css?v=0.0.0.1">

<section class="course-for-whom" data-anim-fade>
    <div class="site-container2">
        <span class="section-name course-for-whom__section-name">
            Для кого этот курс
        </span>
        <h2 class="second-title course-for-whom__title">
            Кому подходит данный курс
        </h2>
        <ul class="course-for-whom__list grid">
            <li class="course-for-whom__list-item">
                <svg width="46" height="46" class="icon course-for-whom__list-icon">
                    <use xlink:href="../assets/img/sprite.svg#ski-man1"></use>
                </svg>
                <h3 class="course-for-whom__list-heading">
                    Опытные <br> любители 
                </h3>
                <span class="course-for-whom__list-text">
                    Уверенно катаются на&nbsp;лыжах, продолевают повороты разного радиуса
                </span>
            </li>
            <li class="course-for-whom__list-item">
                <svg width="46" height="46" class="icon course-for-whom__list-icon">
                    <use xlink:href="../assets/img/sprite.svg#ski-man2"></use>
                </svg>
                <h3 class="course-for-whom__list-heading">
                    Тем, кто хочет улучшить мастерство
                </h3>
                <span class="course-for-whom__list-text">
                    Любители, которые оттачивают навыки до&nbsp;высокого уровня
                </span>
            </li>
            <li class="course-for-whom__list-item">
                <svg width="46" height="46" class="icon course-for-whom__list-icon">
                    <use xlink:href="../assets/img/sprite.svg#ski-man3"></use>
                </svg>
                <h3 class="course-for-whom__list-heading">
                    Будущиеи нструкторы
                </h3>
                <span class="course-for-whom__list-text">
                    Лыжники, которые в&nbsp;будущем хотят заниматься обучением и&nbsp;лекторством
                </span>
            </li>
        </ul>
    </div>
    <div class="course-for-whom__detailed-info detailed-course-info tabs">
        <div class="site-container2">
            <div class="detailed-course-info__conent main-grid-content">
                <div class="main-grid-content__block">
                    <!-- мобилка -->
                    <div class="select detailed-course-info__select">
                        <div class="select__head detailed-course-info__select-head">
                            <div class="select__val detailed-course-info__select-val">Программа курса</div>
                            <svg class="icon icon-down select__head_arrow">
                                <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                            </svg>
                        </div>
                        <div class="select__drop">
                            <div class="select__drop_scroll">
                                <div class="select__item" data-default="" data-value=""  data-show="programm">
                                    Программа курса
                                </div>
                                <div class="select__item" data-default="" data-value="" data-show="timetable">
                                    Расписание
                                </div>
                                <div class="select__item" data-default="" data-value="" data-show="method">
                                    Методика
                                </div>
                                <div class="select__item" data-default="" data-value="" data-show="equipment">
                                    Снаряжение
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- мобилка енд -->
                    <ul class="detailed-course-info__nav">
                        <li class="detailed-course-info__nav-item">
                            <button class="button-reset detailed-course-info__button active" data-show="programm">
                                Программа курса
                            </button>
                        </li>
                        <li class="detailed-course-info__nav-item">
                            <button class="button-reset detailed-course-info__button" data-show="timetable">
                                расписание
                            </button>
                        </li>
                        <li class="detailed-course-info__nav-item">
                            <button class="button-reset detailed-course-info__button" data-show="method">
                                Методика
                            </button>
                        </li>
                        <li class="detailed-course-info__nav-item">
                            <button class="button-reset detailed-course-info__button" data-show="equipment">
                                Снаряжение
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="main-grid-content__block">
                    <ul class="detailed-course-info__accordion course-accordion" data-item="programm">
                        <? for($j=0;$j<4;$j++) {?>
                            <li class="course-accordion__item js-accordion" data-accordion="parent">
                                <div class="course-accordion__head js-accordion-head">
                                    <div class="course-accordion__heading-container">
                                        <span class="course-accordion__heading">
                                            Теоретический модуль
                                        </span>
                                        <span class="course-accordion__heading-small">
                                            11 лекций и семинаров • 22 часов обучения 
                                        </span>
                                    </div>
                                    <button class="button-reset course-accordion__button"></button>
                                </div>
                                <ul class="course-accordion__body js-accordion-body" data-accordion="parent">
                                    <? for($q=0;$q<3;$q++) {?>
                                        <li class="course-accordion__body-accordion js-accordion" data-accordion="child">
                                            <div class="course-accordion__body-accordion-head js-accordion-head">
                                                <span class="course-accordion__body-accordion-heading">
                                                    Лекционный материал для самостоятельного обучения
                                                </span>
                                                <button class="button-reset course-accordion__button"></button>
                                            </div>
                                            <div class="course-accordion__body-accordion-info js-accordion-body" data-accordion="child">
                                                <p>
                                                    Силовое поле масштабирует торсионный резонатор. Фронт, как того требуют законы термодинамики, расщепляет гравитационный экситон. Расслоение отклоняет короткоживущий гидродинамический удар. При наступлении резонанса объект неверифицируемо концентрирует ультрафиолетовый атом, как и&nbsp;предсказывает общая теория поля. Молекула, как можно показать с&nbsp;помощью не&nbsp;совсем тривиальных вычислений, переворачивает квантово-механический вихрь.
                                                    <br>
                                                    <br>
                                                    Гравитирующая сфера, по&nbsp;данным астрономических наблюдений, сжимает фотон. Идеальная тепловая машина эксперментально верифицируема. В&nbsp;соответствии с&nbsp;принципом неопределенности, частица восстанавливает векторный экситон.
                                                </p>

                                            </div>
                                        </li>
                                    <? } ?>
                                </ul>
                            </li>
                        <? } ?>
                    </ul>
                    <ul class="detailed-course-info__accordion course-accordion" data-item="timetable" style="display: none;">
                        <? for($a=0;$a<4;$a++) {?>
                            <li class="course-accordion__item js-accordion" data-accordion="parent">
                                <div class="course-accordion__head js-accordion-head">
                                    <div class="course-accordion__heading-container">
                                        <span class="course-accordion__heading">
                                            Теоретический модуль
                                        </span>
                                        <span class="course-accordion__heading-small">
                                            11 лекций и семинаров • 22 часов обучения 
                                        </span>
                                    </div>
                                    <button class="button-reset course-accordion__button"></button>
                                </div>
                                <ul class="course-accordion__body js-accordion-body" data-accordion="parent">
                                    <? for($b=0;$b<3;$b++) {?>
                                        <li class="course-accordion__body-accordion js-accordion" data-accordion="child">
                                            <div class="course-accordion__body-accordion-head js-accordion-head">
                                                <span class="course-accordion__body-accordion-heading">
                                                    Лекционный материал для самостоятельного обучения
                                                </span>
                                                <button class="button-reset course-accordion__button"></button>
                                            </div>
                                            <div class="course-accordion__body-accordion-info js-accordion-body" data-accordion="child">
                                                <p>
                                                    Силовое поле масштабирует торсионный резонатор. Фронт, как того требуют законы термодинамики, расщепляет гравитационный экситон. Расслоение отклоняет короткоживущий гидродинамический удар. При наступлении резонанса объект неверифицируемо концентрирует ультрафиолетовый атом, как и&nbsp;предсказывает общая теория поля. Молекула, как можно показать с&nbsp;помощью не&nbsp;совсем тривиальных вычислений, переворачивает квантово-механический вихрь.
                                                    <br>
                                                    <br>
                                                    Гравитирующая сфера, по&nbsp;данным астрономических наблюдений, сжимает фотон. Идеальная тепловая машина эксперментально верифицируема. В&nbsp;соответствии с&nbsp;принципом неопределенности, частица восстанавливает векторный экситон.
                                                </p>

                                            </div>
                                        </li>
                                    <? } ?>
                                </ul>
                            </li>
                        <? } ?>
                    </ul>
                    <ul class="detailed-course-info__accordion course-accordion" data-item="method" style="display: none;">
                        <? for($c=0;$c<4;$c++) {?>
                            <li class="course-accordion__item js-accordion" data-accordion="parent">
                                <div class="course-accordion__head js-accordion-head">
                                    <div class="course-accordion__heading-container">
                                        <span class="course-accordion__heading">
                                            Теоретический модуль
                                        </span>
                                        <span class="course-accordion__heading-small">
                                            11 лекций и семинаров • 22 часов обучения 
                                        </span>
                                    </div>
                                    <button class="button-reset course-accordion__button"></button>
                                </div>
                                <ul class="course-accordion__body js-accordion-body" data-accordion="parent">
                                    <? for($e=0;$e<3;$e++) {?>
                                        <li class="course-accordion__body-accordion js-accordion" data-accordion="child">
                                            <div class="course-accordion__body-accordion-head js-accordion-head">
                                                <span class="course-accordion__body-accordion-heading">
                                                    Лекционный материал для самостоятельного обучения
                                                </span>
                                                <button class="button-reset course-accordion__button"></button>
                                            </div>
                                            <div class="course-accordion__body-accordion-info js-accordion-body" data-accordion="child">
                                                <p>
                                                    Силовое поле масштабирует торсионный резонатор. Фронт, как того требуют законы термодинамики, расщепляет гравитационный экситон. Расслоение отклоняет короткоживущий гидродинамический удар. При наступлении резонанса объект неверифицируемо концентрирует ультрафиолетовый атом, как и&nbsp;предсказывает общая теория поля. Молекула, как можно показать с&nbsp;помощью не&nbsp;совсем тривиальных вычислений, переворачивает квантово-механический вихрь.
                                                    <br>
                                                    <br>
                                                    Гравитирующая сфера, по&nbsp;данным астрономических наблюдений, сжимает фотон. Идеальная тепловая машина эксперментально верифицируема. В&nbsp;соответствии с&nbsp;принципом неопределенности, частица восстанавливает векторный экситон.
                                                </p>

                                            </div>
                                        </li>
                                    <? } ?>
                                </ul>
                            </li>
                        <? } ?>
                    </ul>
                    <ul class="detailed-course-info__accordion course-accordion" data-item="equipment" style="display: none;">
                        <? for($f=0;$f<4;$f++) {?>
                            <li class="course-accordion__item js-accordion" data-accordion="parent">
                                <div class="course-accordion__head js-accordion-head">
                                    <div class="course-accordion__heading-container">
                                        <span class="course-accordion__heading">
                                            Теоретический модуль
                                        </span>
                                        <span class="course-accordion__heading-small">
                                            11 лекций и семинаров • 22 часов обучения 
                                        </span>
                                    </div>
                                    <button class="button-reset course-accordion__button"></button>
                                </div>
                                <ul class="course-accordion__body js-accordion-body" data-accordion="parent">
                                    <? for($g=0;$g<3;$g++) {?>
                                        <li class="course-accordion__body-accordion js-accordion" data-accordion="child">
                                            <div class="course-accordion__body-accordion-head js-accordion-head">
                                                <span class="course-accordion__body-accordion-heading">
                                                    Лекционный материал для самостоятельного обучения
                                                </span>
                                                <button class="button-reset course-accordion__button"></button>
                                            </div>
                                            <div class="course-accordion__body-accordion-info js-accordion-body" data-accordion="child">
                                                <p>
                                                    Силовое поле масштабирует торсионный резонатор. Фронт, как того требуют законы термодинамики, расщепляет гравитационный экситон. Расслоение отклоняет короткоживущий гидродинамический удар. При наступлении резонанса объект неверифицируемо концентрирует ультрафиолетовый атом, как и&nbsp;предсказывает общая теория поля. Молекула, как можно показать с&nbsp;помощью не&nbsp;совсем тривиальных вычислений, переворачивает квантово-механический вихрь.
                                                    <br>
                                                    <br>
                                                    Гравитирующая сфера, по&nbsp;данным астрономических наблюдений, сжимает фотон. Идеальная тепловая машина эксперментально верифицируема. В&nbsp;соответствии с&nbsp;принципом неопределенности, частица восстанавливает векторный экситон.
                                                </p>

                                            </div>
                                        </li>
                                    <? } ?>
                                </ul>
                            </li>
                        <? } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/course-page-for-whom.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/detailed-course-info.css?v=0.0.0.1">
<script defer src="../assets/js/components/detailed-course-accordion.js?v=0.0.0.1"></script>

<!-- баннер-вопрос -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/question-banner.php'?>
<!-- баннер-вопрос end-->

<!-- галлерея -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/gallery.php'?>
<!-- галлерея end -->

<section class="accreditation acquired-skills" data-anim-fade>
    <div class="site-container2 accreditation__container">
        <span class="section-name acquired-skills__section-name">Навыки после обучения</span>
        <h2 class="second-title acquired-skills__title _text-up">
            узнайте, Чему вы можете научититься у нас
        </h2>
        <div class="main-grid-content">
            <div class="main-grid-content__block accreditation__col"></div>

            <?
                $acr_arr = [["Уверенность в катании", "book"], ["Актуальные знания и умения", "hat"], ["Опыт профессионалов", "plan"], ["Возможность преподавания", "licience"]];
                $num = 0;
            ?>

            <div class="main-grid-content__block accreditation__col">
                <div class="flex-wrap feautures-list accreditation__list">
                    <? foreach ($acr_arr as [$name, $icon] ) { ?>
                        <? $num++; ?>
                        <div class="feautures-list__item accreditation__item">
                            <div class="feautures-list__hading-wrap">
                                <h3 class="feautures-list__heading feautures-list__heading_margin-bottom">
                                    <? echo $name; ?>
                                </h3>
                                <p class="feautures-list__text">
                                    Небольшой абзац раскрываем суть этапа в рамках подхода, раскрываем суть этапа в рамках подхода
                                </p>
                            </div>
                            <svg width="40" height="40" class="icon feautures-list__icon">
                                <use xlink:href="../assets/img/sprite.svg#<? echo $icon; ?>"></use>
                            </svg>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/accreditation.css?v=0.0.0.8">
<link rel="stylesheet" href="../assets/css/components/feautures-list.css?v=0.0.0.4">
<link rel="stylesheet" href="../assets/css/components/acquired-skills.css?v=0.0.0.1">

<section class="partners course-page-partners" data-anim-fade>
    <div class="site-container2">
        <div class="main-grid-content">
            <div class="main-grid-content__block">
                <span class="section-name partners__section-name">Партнеры</span>
            </div>
            <div class="main-grid-content__block">
                <h2 class="partners__title second-title _text-up partners__course-page-title">Наши выпускники работают в лучших ГЛЦ</h2>
                <a class="partners__link partners__course-page-link page-link" href=""><span>Смотреть вакансии</span>
                <svg width="14" height="13" viewBox="0 0 14 13" class="page-link__icon" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                        </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="site-container">
        <? 
            $prtnrs_num = 0;
            $prtnrs_num = 0; 
        ?>
        <div class="partners__slider _first">
            <? for ($i = 0; $i<12; $i++) {?>
                <? $prtnrs_num++;?>
                <div class="partners__slider-item">
                    <img src="../assets/img/partners-slider-img/img<? echo $prtnrs_num; ?>.png" alt="Партнер" class="partners__slider-img">
                </div>
            <? } ?>
        </div>
        <div class="partners__slider _second" dir="rtl">
            <? for($i = 0; $i<12; $i++) {?>
                <? $prtnrs_num2++;?>
                <div class="partners__slider-item">
                    <img src="../assets/img/partners-slider-img/img<? echo $prtnrs_num2; ?>.png" alt="Партнер" class="partners__slider-img">
                </div>
            <? } ?>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/partners.css?v=0.0.0.5">
<link rel="stylesheet" href="../assets/css/components/partners-slider.css?v=0.0.0.7">
<script defer src="../assets/js/components/partners-img-slider.js?v=0.0.1.4"></script>

<section class="lectors" data-anim-fade>
    <div class="site-container2 lectors__container main-grid-content">
        <div class="main-grid-content__block">
            <span class="section-name lectors__section-name">
                Наши Лекторы
            </span>
        </div>
        <div class="main-grid-content__block">
            <h2 class="second-title lectors__title _text-up">
                Учитесь у лучших в своем деле 
            </h2>
            <a class="lectors__page-link page-link" href=""><span>Все лекторы</span>
            <svg width="14" height="13" viewBox="0 0 14 13" class="page-link__icon" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                        </svg>
            </a>
            <div class="lectors__slider">
                    <? for($w=0;$w<5;$w++) {?>
                    <div class="lectors__item">
                        <img src="../assets/img/lectors/lector.jpg" alt="Александр Артёмов" class="lectors__img">
                        <span class="lectors__name">
                            Александр Артёмов
                        </span>
                        <span class="lectors__prof">
                            Горнолыжный спорт
                        </span>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/lectors.css?v=0.0.0.1">
<script defer src="../assets/js/components/lectors.js?v=0.0.0.1"></script>

<!-- факты -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/facts-component.php'?>
<!-- факты end -->

<section class="course-choose" id="course-reg">
    <div class="site-container2 course-choose__container" data-anim-fade>
        <div class="course-choose__title_wrapper">
            <h2 class="course-choose__title second-title _text-up">
                Выберите место <br> или сроки проведения курса
            </h2>
            <svg class="icon icon-arrow-big course-choose__arrow">
                <use xlink:href="../assets/img/sprite.svg#arrow-big"></use>
            </svg>
        </div>
        <form action="/local/include/choose-place-data.json" class="course-choose__form validate" name="choose-place">
            <label class="input-container course-choose__input-container">
                <svg class="icon icon-search course-choose__form-icon-search">
                    <use xlink:href="/local/assets/img/sprite.svg#search-menu"></use>
                </svg>
                <input type="text" name="q" class="input course-choose__form-input js-input-choose-place" data-mask="letters" autocomplete="off" placeholder="Введите место проведения">
                <span class="course-choose__input-clear js-input-choose-place-clear"></span>
            </label>

            <ul class="courses-modal-list__body course-choose__form-dropdown" data-simplebar></ul>
        </form>
        
        <div class="course-choose__closest-courses closest-courses">
            <div class="closest-courses__heading-container">
                <span class="closest-courses__heading">
                    Ближайщие курсы 
                </span>
                <div class="closest-courses__navigation">
                </div>
            </div>

            <div class="closest-courses__courses-wrapper">
                <form action="test.php" class="closest-courses__choose-modal courses-modal-list validate" name="choose-period">
                    <div class="courses-modal-list__head">
                        <button class="button-reset courses-modal-list__close-button js-choose-dates-close" type="button"></button>
                        <div class="courses-modal-list__heading-wrap">
                            <span class="courses-modal-list__heading">
                                Выбрать период
                            </span>
                            <span class="courses-modal-list__subheading">
                                Обратите внимание, курс может проходить в разных местах, но под одной датой
                            </span>
                        </div>
                        <label class="courses-modal-list__date">
                            <input type="text" class="courses-modal-list__input chooseDate" data-mask="date" placeholder="Начало" name="startDate">
                        </label>
                        <label class="courses-modal-list__date">
                            <input type="text" class="courses-modal-list__input chooseDate" data-mask="date" placeholder="конец" name="endDate">
                        </label>
                        <button class="button button-reset _white-bg courses-modal-list__form-button">
                            Показать
                        </button>
                    </div>
                    <ul class="courses-modal-list__body" data-simplebar>
                        <? for ($s=0; $s < 10; $s++) {?>
                            <li class="courses-modal-list__item">
                                <label class="courses-modal-list__label">
                                    <input type="checkbox" class="visually-hidden courses-modal-list__input" name="course<? echo $s; ?>">
                                    <span class="courses-modal-list__check"></span>
                                    <span class="courses-modal-list__dates">
                                        20 июня — 1 июля 
                                    </span>
                                    <span class="courses-modal-list__where">
                                        Красногорск, ВГК «СНЕЖ.КОМ»
                                    </span>
                                    <span class="courses-modal-list__place-count">
                                        Осталось 1 место
                                    </span>
                                    <span class="courses-modal-list__dope">
                                        Доп. расходы
                                    </span>
                                </label>
                            </li>
                        <? } ?>
                    </ul>
                </form>
                <!-- мобилка -->
                <div class="closest-courses__choose-date-button-mobile" data-popup="courses-modal-list">
                    <button class="button-reset closest-courses__choose-date-button _mobile">
                        <svg width="40" height="40" class="icon icon-calendar closest-courses__choose-date-icon">
                            <use xlink:href="../assets/img/sprite.svg#icon-calendar"></use>
                        </svg>
                    </button>
                    <span class="closest-courses__choose-date-button-mobile-text">
                        Выберете сроки
                    </span>
                </div>
                 <!-- мобилка -->
                <button class="button-reset closest-courses__choose-date-button js-choose-dates-open">
                    <svg width="40" height="40" class="icon icon-calendar closest-courses__choose-date-icon">
                        <use xlink:href="../assets/img/sprite.svg#icon-calendar"></use>
                    </svg>
                    <span>
                        ВЫБЕРИТЕ СРОКИ
                    </span>
                </button>
                <div class="closest-courses__courses-container courses-slider">
                    <? for ($z=0; $z < 6; $z++) { ?>
                        <? 
                            $is_active = $z == 0 ? "_is-active" : "";
                        ?>
                        <div class="courses-slider__item <? echo $is_active; ?>">
                            <span class="courses-slider__item-heading">
                                3 сентября - 10 октября
                            </span>
                            <span class="courses-slider__item-palce">
                                Миасс, ГЛЦ Солнечная долина
                            </span>
                            <span class="courses-slider__item-info">
                                Осталось 7 мест
                            </span>
                        </div>
                    <? } ?>
                </div>
            </div>
            
            <div class="course-choose__detailed-course detailed-course grid" style="background-image: url(../assets/img/detailed-course.jpg)">
                <div class="detailed-course__info">
                    <div class="detailed-course__info-mobile-img" style="background-image: url(../assets/img/detailed-course-mob.jpg)"></div>
                    <h3 class="detailed-course__heading">
                        Миасс, ГЛЦ «Солнечная долина»
                    </h3>
                    <div class="">
                        <span class="detailed-course__caption detailed-course__caption_mr">
                            3 сентября - 10 октября
                        </span>
                        <span class="detailed-course__caption">
                            Осталось 15 мест
                        </span>
                    </div>
                    <span class="detailed-course__heading detailed-course__price" data-old-price="40 600 ₽">
                        32 600 ₽
                    </span>
                    <div class="">
                        <span class="detailed-course__caption detailed-course__caption_mr">
                            Доп. расходы
                        </span>
                        <span class="detailed-course__caption">
                            Вернем вам налог 13%
                        </span>
                    </div>
                    <div class="detailed-course__detailed-info">
                        <span class="detailed-course__legend">
                            Описание ГЛЦ
                        </span>
                        <div class="detailed-course__text-wrap">
                            <p>
                                Курорт расположен Уральского горного массива на пересечении Европы и Азии, обладает развитой современной инфраструктурой, стремящейся к лучшим мировым образцам индустрии туризма. Трудно представить, что всего каких-то 19 лет назад вместо курорта площадью 70 гектар была просто гора и лес.
                            </p>
                        </div>
                        <span class="detailed-course__legend">
                            Информация о ГЛЦ
                        </span>
                        <ul class="detailed-course__list">
                            <li class="detailed-course__item">
                                <span class="detailed-course__item-text">
                                    Перепад высот
                                </span>
                                <span class="detailed-course__item-text">
                                    1300 метров
                                </span>
                            </li>
                            <li class="detailed-course__item">
                                <span class="detailed-course__item-text">
                                    Ски-пасс
                                </span>
                                <span class="detailed-course__item-text">
                                    15 подъемов
                                </span>
                            </li>
                            <li class="detailed-course__item">
                                <span class="detailed-course__item-text">
                                    Количество подъемников
                                </span>
                                <span class="detailed-course__item-text">
                                    5 шт.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="test.php" class="detailed-course__form detailed-course-form validate" name="course-reg">
                    <span class="detailed-course-form__caption">
                        Заполните форму для оформления курса
                    </span>
                    <label class="input-container detailed-course-form__input-container">
                        <input type="text" class="input detailed-course-form__input required" data-mask="fio" name="second-name">
                        <span class="input-heading">
                            Фамилия
                        </span>
                    </label>
                    <label class="input-container detailed-course-form__input-container">
                        <input type="text" class="input detailed-course-form__input required" data-mask="fio" name="name">
                        <span class="input-heading">
                            Имя
                        </span>
                    </label>
                    <label class="input-container detailed-course-form__input-container">
                        <input type="text" class="input detailed-course-form__input" data-mask="fio" name="third-name">
                        <span class="input-heading">
                            Отчество
                        </span>
                    </label>
                    <label class="input-container detailed-course-form__input-container">
                        <input type="text" class="input detailed-course-form__input required" data-mask="email" name="email">
                        <span class="input-heading">
                            E-mail
                        </span>
                    </label>
                    <label class="input-container detailed-course-form__input-container">
                        <input type="text" class="input detailed-course-form__input required" data-mask="phone" name="phone">
                        <span class="input-heading">
                            Телефон
                        </span>
                    </label>
                    <label class="input-container detailed-course-form__input-container">
                        <input type="text" class="input detailed-course-form__input" name="promocode">
                        <span class="input-heading">
                            Промокод
                        </span>
                    </label>
                    <label class="checkbox__label detailed-course-form__checkbox">
                        <input type="checkbox" checked class="checkbox visually-hidden required" name="agree-policy">
                        <span class="checkbox__name _square _white-color detailed-course-form__checkbox-name">
                            Я даю свое согласие на обработку персональных данных
                        </span>
                    </label>
                    <button class="button-reset button _white-bg">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/course-choose.css?v=0.0.0.1">
<script defer src="../assets/js/components/page-course-choose.js?v=0.0.1.4"></script>

<section class="recommend course-page-recommend" data-anim-fade>
    <div class="site-container2">
        <div class="recommend__title_wrap"><span class="section-name recommend__section-name"> Мы рекомендуем</span>
            <h2 class="second-title recommend__title _text-up">Если не подошел курс</h2>
        </div>
        <div class="main-grid-content recommend__box">
            <div class="main-grid-content__block recommend__col">
                <div class="recommend-slider__nav slider-arrow-navigation"></div>
            </div>
            <div class="main-grid-content__block recommend__col">
                <!-- десктоп -->
                <div class="recommend__container recommend-slider">
                    <div class="recommend-slider__item">
                        <div class="recommend__grid flex-wrap">
                            <? for($k=0;$k<4; $k++){?>
                                <a class="card" href="">
                                    <h3 class="card__title">Подготовительный курс для категории «С»</h3>
                                    <p class="card__text">
                                        Если не уверены, что навыков катания достаточно для прохождения курса 
                                    </p>
                                    <svg class="icon icon-arrows-reccomend">
                                        <use xlink:href="../assets/img/sprite.svg#arrows-reccomend"></use>
                                    </svg>
                                    <span class="card__link-text">
                                        перейти
                                    </span>
                                </a>
                            <?}?>
                        </div>
                    </div>
                    <div class="recommend-slider__item">
                        <div class="recommend__grid flex-wrap">
                            <? for($o=0;$o<4; $o++){?>
                                <a class="card" href="">
                                    <h3 class="card__title">Подготовительный курс для категории «С»</h3>
                                    <p class="card__text">
                                        Если не уверены, что навыков катания достаточно для прохождения курса 
                                    </p>
                                    <svg class="icon icon-arrows-reccomend">
                                        <use xlink:href="../assets/img/sprite.svg#arrows-reccomend"></use>
                                    </svg>
                                    <span class="card__link-text">
                                        перейти
                                    </span>
                                </a>
                            <?}?>
                        </div>
                    </div>
                </div>
                <!-- десктоп end -->
                <!-- мобилка -->
                <div class="recommend__grid recommend-slider-mobile flex-wrap">
                    <a class="card" href="">
                        <h3 class="card__title">Соревнования</h3>
                        <svg class="icon icon-arrows-reccomend">
                            <use xlink:href="../assets/img/sprite.svg#arrows-reccomend"></use>
                        </svg>
                        <span class="card__link-text">
                            перейти
                        </span>
                    </a>
                    <a class="card" href="">
                        <h3 class="card__title">Английский язык </h3>
                        <svg class="icon icon-arrows-reccomend">
                            <use xlink:href="../assets/img/sprite.svg#arrows-reccomend"></use>
                        </svg>
                        <span class="card__link-text">
                            перейти
                        </span>
                    </a>
                    <a class="card" href="">
                        <h3 class="card__title">Проверка удостоверения</h3>
                        <svg class="icon icon-arrows-reccomend">
                            <use xlink:href="../assets/img/sprite.svg#arrows-reccomend"></use>
                        </svg>
                        <span class="card__link-text">
                            перейти
                        </span>
                    </a>
                    <a class="card" href="">
                        <h3 class="card__title">Пересдача</h3>
                        <svg class="icon icon-arrows-reccomend">
                            <use xlink:href="../assets/img/sprite.svg#arrows-reccomend"></use>
                        </svg>
                        <span class="card__link-text">
                            перейти
                        </span>
                    </a>
                </div>
                    <!-- мобилка end -->
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/recommend.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/recommend-slider.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/card.css">
<script defer src="../assets/js/components/recommend-slider.js?v=0.0.0.2"></script>

<!-- частые вопросы -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/faq.php'?>
<!-- частые вопросы end -->

<script defer src="../assets/js/components/course-page.js?v=0.0.0.1"></script>
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer.php'?>