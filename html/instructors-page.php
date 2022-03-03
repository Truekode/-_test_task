<?
    define("PAGE_TITLE", "Инструкторам");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php';

    $tags_arr = ["Горнолыжный спорт", "Сноуборд", "Лыжный фристайл", "Сноуборд фристайл", "Телемарк", "Прыжки на батуте", "Роллер-спорт", "Горнолыжный спорт", "Лонгбординг", "Скейтбординг","Теннис", "Вейкбординг", "UPS"];
?>

<link rel="stylesheet" href="../assets/css/components/breadcrumbs.css?v=0.0.0.7">
<link rel="stylesheet" href="../assets/css/components/instructors-hero.css?v=0.0.0.1">
<section class="instructors-hero">
    <div class="site-container2 breadcrumbs__container mod-padding-breadcrumbs mod-color-light-blue">
        <div class="breadcrumbs flex-wrap">
            <a href=""class="breadcrumbs__item breadcrumbs__link">Главная
                <svg class="icon icon-breadcrumbs-arrow">
                    <use xlink:href="../assets/img/sprite.svg#breadcrumbs-arrow"></use>
                </svg>     
            </a>
            <span class="breadcrumbs__item">
                Инструкторам
            </span>
        </div>
    </div>
    <div class="site-container2 instructors-hero__container">
        <img src="../assets/img/insructors/instructors-bg.svg" alt="Национальная лига инструкторов для профессионалов" class="instructors-hero__iamge">
        <h1 class="instructors-hero__title second-title _text-up js-hero-title">
            Национальная лига инструкторов для профессионалов
        </h1>
        <div class="main-grid-content instructors-hero__content js-hero-el">
            <div class="main-grid-content__block">

            </div>
            <div class="main-grid-content__block">
                <p>
                    Удостоверенеие НЛИ и ISIA — пропуск на работу в службы инструкторов российскихи международных горнолыжных курортов
                </p>
            </div>
        </div>

        <div class="main-grid-content instructors-hero__tags js-hero-el1"> 
            <div class="main-grid-content__block">
                <span class="instructors-hero__tags-title">
                    обучаем по направлениям
                </span>
            </div>
            <div class="main-grid-content__block instructors-hero__tags-container">
                <? foreach ($tags_arr as $value) { ?>
                    <a href="" class="instructors-hero__tags-tag">
                        <? echo $value; ?>
                    </a>
                <? } ?>
            </div>
        </div>

    </div>
</section>

<link rel="stylesheet" href="../assets/css/components/instructors-about.css?v=0.0.0.1">
<section class="instructors-about">
    <div class="site-container2 instructors-about__container main-grid-content">
        <div class="main-grid-content__block">
            <span class="section-name">
                преимущества
            </span>
        </div>
        <div class="main-grid-content__block">
            <h2 class="instructors-about__title second-title _text-up">
                Работа инструктором это
            </h2>
        </div>
    </div>
    <div class="site-container2 instructors-about__container main-grid-content">
        <div class="main-grid-content__block">
        </div>
        <div class="main-grid-content__block">
            <ul class="instructors-about__list">
                <li class="instructors-about__item">
                    <span class="instructors-about__legend">
                        Уверенность в&nbsp;катании
                    </span>
                    <p>
                        Уверенно катаются на лыжах, продолевают повороты разного радиуса
                    </p>
                </li>
                <li class="instructors-about__item">
                    <span class="instructors-about__legend">
                        Профессиональные тренеры
                    </span>
                    <p>
                        Любители, которые оттачивают навыки до&nbsp;высокого уровня
                    </p>
                </li>
                <li class="instructors-about__item">
                    <span class="instructors-about__legend">
                        Карьерный рост
                    </span>
                    <p>
                        Лыжники, которые в будущем хотят заниматься обучением и лекторством
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>

<link rel="stylesheet" href="../assets/css/components/instructors-roadmap.css?v=0.0.0.1">
<section class="instructors-roadmap">
    <div class="site-container2 instructors-roadmap__container tabs" data-anim-fade>
        <div class="instructors-roadmap__heading flex-wrap">
            <div class="instructors-roadmap__title-wrap">
                <span class="section-name instructors-roadmap__section-name">
                    Карта развития
                </span>
                <h2 class="second-title instructors-roadmap__title _text-up">
                    Путь развития инструктора
                </h2>
            </div>

            <p>
                Краткий абзац текта, рассказывающий что такое карта развития в НЛИ, как это работает
            </p>
        </div>
        <?
            $roadmap_arr = ["Инструктор категории «С»", "Курс «В» Basic", "Инструктор категории «B»", "Инструктор категории «A»", "Курс аглийского языка", "ISIA"];
        ?>

        <!-- десктоп -->
        <div class="instructors-roadmap__descktop-content">
            <ul class="instructors-roadmap__list js-instructors-roadmap-slider">
                <? foreach ($roadmap_arr as $key => $value) { ?>
                    <li class="instructors-roadmap__item <? echo $key == 0 ? "active" : "" ?> " data-show="<? echo $key; ?>">
                        <svg width="17" height="18" class="icon icon-flag instructors-roadmap__item-icon">
                            <use xlink:href="../assets/img/sprite.svg#flag"></use>
                        </svg>
                        <span class="instructors-roadmap__item-text">
                            <? echo $value; ?>  
                        </span>
                    </li>
                <? } ?>
            </ul>
            <? foreach ($roadmap_arr as $key => $value) { ?>
                <div class="content" <? echo $key !== 0 ? "style='display: none'" : "" ?> data-item="<? echo $key; ?>">
                    <div class="main-grid-content instructors-roadmap-caption">
                        <div class="main-grid-content__block">
                            <svg width="17" height="18" class="icon icon-flag instructors-roadmap__icon">
                                <use xlink:href="../assets/img/sprite.svg#flag"></use>
                            </svg>
                        </div>
                        <div class="main-grid-content__block">
                            <div class="instructors-roadmap__caption">
                                <span class="instructors-roadmap__caption-title">
                                    <? echo $value; ?>
                                </span>
                                <p>
                                    Курс категории «А» по горнолыжному спорту. Инструктор экспертного уровня обучения  
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="main-grid-content instructors-roadmap-caption">
                        <div class="main-grid-content__block">
                            <span class="instructors-roadmap-caption__legend">
                                Виды спорта в этой категории
                            </span>
                        </div>
                        <div class="main-grid-content__block">
                            <ul class="instructors-roadmap-caption__list">
                                <li class="instructors-roadmap-caption__item">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#ski2"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#wakeboard"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#wakeboard-boot"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                    </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                    </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            
                    <div class="instructors-roadmap__links">
                        <div class="instructors-roadmap__links-item">
                            <span class="instructors-roadmap__links-legend">
                                Курсы, необходимые для получения категории
                            </span>
                            <a href="/" class="instructors-roadmap__links-link">
                                <span>
                                    Альпинкурс
                                </span>
                                <img src="/local/assets/img/link-svg.svg" class="instructors-roadmap__links-icon" alt="">
                            </a>
                            <a href="/" class="instructors-roadmap__links-link">
                                <span>
                                    Категория С по смежному виду спорта
                                </span>
                                <img src="/local/assets/img/link-svg.svg" class="instructors-roadmap__links-icon" alt="">
                            </a>
                        </div>
                        <div class="instructors-roadmap__links-item">
                            <span class="instructors-roadmap__links-legend">
                                Для успешного прохождения курса рекомендуем
                            </span>
                            <a href="/" class="instructors-roadmap__links-link">
                                <span>
                                    Рейс-курс
                                </span>
                                <img src="/local/assets/img/link-svg.svg" class="instructors-roadmap__links-icon" alt="">
                            </a>
                            <a href="/" class="instructors-roadmap__links-link">
                                <span>
                                    Фрирайд
                                </span>
                                <img src="/local/assets/img/link-svg.svg" class="instructors-roadmap__links-icon" alt="">
                            </a>
                        </div>
                        <div class="instructors-roadmap__links-item">
                            <span class="instructors-roadmap__links-legend">
                                Что я получу после обучения?
                            </span>
                            <a class="instructors-roadmap__links-link">
                                <span>
                                    Работа в ГЛЦ наших партнером
                                </span>
                            </a>
                            <a class="instructors-roadmap__links-link">
                                <span>
                                    Наслаждайся превосходным катанием
                                </span>
                            </a>
                            <a class="instructors-roadmap__links-link">
                                <span>
                                    Будешь прокаченным в этой категории
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
        <!-- десктоп енд -->

        <!-- мобилка -->
        <ul class="instructors-roadmap__mobile-list">
            <? foreach ($roadmap_arr as $key => $value) { ?>
                <li class="instructors-roadmap__mobile-item js-drop-menu-parent">
                    <div class="instructors-roadmap__mobile-head js-drop-menu-btn">
                        <svg width="17" height="18" class="icon icon-flag instructors-roadmap__mobile-icon">
                            <use xlink:href="../assets/img/sprite.svg#flag"></use>
                        </svg>
                        <span class="instructors-roadmap__mobile-item-legend">
                            <? echo $value; ?>
                        </span>
                    </div>
                    <div class="drop-menu-container js-drop-menu-container" style="max-height: 0;">
                        <div class="content js-drop-menu">
                            <div class="main-grid-content instructors-roadmap-caption">
                                <div class="main-grid-content__block">
                                    <svg width="17" height="18" class="icon icon-flag instructors-roadmap__icon">
                                        <use xlink:href="../assets/img/sprite.svg#flag"></use>
                                    </svg>
                                </div>
                                <div class="main-grid-content__block">
                                    <div class="instructors-roadmap__caption">
                                        <span class="instructors-roadmap__caption-title">
                                            <? echo $value; ?>  
                                        </span>
                                        <p>
                                            Курс категории «А» по горнолыжному спорту. Инструктор экспертного уровня обучения  
                                        </p>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="main-grid-content instructors-roadmap-caption">
                                <div class="main-grid-content__block">
                                    <span class="instructors-roadmap-caption__legend">
                                        Виды спорта в этой категории
                                    </span>
                                </div>
                                <div class="main-grid-content__block">
                                    <ul class="instructors-roadmap-caption__list">
                                    <li class="instructors-roadmap-caption__item">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#ski2"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#wakeboard"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#wakeboard-boot"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                    </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                                    </svg>
                                    <span>
                                        Горнолыжный спорт
                                    </span>
                                    </a>
                                </li>
                                <li class="instructors-roadmap-caption__item _opacity">
                                <a class="instructors-roadmap-caption__iteml-link" href="/">
                                    <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                        <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                    </svg>
                                    <span>
                                        Сноуборд
                                    </span>
                                </a>
                                </li>
                                    </ul>
                                </div>
                            </div>
                    
                            <div class="instructors-roadmap__links">
                                <div class="instructors-roadmap__links-item">
                                    <span class="instructors-roadmap__links-legend">
                                        Курсы, необходимые для получения категории
                                    </span>
                                    <a href="/" class="instructors-roadmap__links-link">
                                        <span>
                                            Альпинкурс
                                        </span>
                                        <svg class="instructors-roadmap__links-icon" width="12" height="13" viewBox="0 0 12 13" fill="none" id="link" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2659_19603)">
                                            <path d="M8.26901 5.38335C7.96137 5.07571 7.36376 4.65194 6.49903 4.6674L5.28591 5.88053C5.14671 6.01972 5.14669 6.23849 5.28591 6.37771C5.42513 6.51693 5.64389 6.5169 5.78309 6.37771C6.19575 5.96504 6.86196 5.96504 7.27465 6.37771C7.68731 6.79037 7.68731 7.45658 7.27465 7.86927L4.20073 10.9407C3.78809 11.3533 3.12185 11.3533 2.70917 10.9407C2.2965 10.528 2.29653 9.86174 2.70917 9.4491L3.56067 8.60012C3.4662 8.52557 3.38166 8.45097 3.29714 8.36645C3.0386 8.10791 2.8298 7.80958 2.68064 7.49141L1.71478 8.45474C0.755229 9.41429 0.755229 10.9755 1.71478 11.935C2.67434 12.8946 4.23551 12.8946 5.19506 11.935L8.26899 8.86363C8.85092 8.28175 9.53709 6.65144 8.26901 5.38335Z" fill="url(#paint0_linear_2659_19603)"/>
                                            <path d="M8.7677 4.88577C9.03123 5.1493 9.23509 5.44262 9.3842 5.76081L10.2894 4.85424C11.249 3.89469 11.249 2.33352 10.2894 1.37396C9.32987 0.414408 7.7687 0.414408 6.80914 1.37396L3.79585 4.38859C2.86435 5.32009 2.81117 6.88421 3.79585 7.86887C4.29062 8.36363 4.98125 8.60492 5.56583 8.58481L6.77896 7.37169C6.91817 7.23247 6.91817 7.01373 6.77896 6.87451C6.63974 6.73529 6.42099 6.73529 6.28178 6.87451C5.86914 7.28715 5.2029 7.28717 4.79021 6.87451C4.37753 6.46185 4.37757 5.79559 4.79021 5.38295L7.8035 2.36832C8.21617 1.95566 8.88238 1.95566 9.29507 2.36832C9.70773 2.78099 9.70773 3.4472 9.29507 3.85988L8.50421 4.65207C8.59367 4.72168 8.68318 4.80125 8.7677 4.88577Z" fill="url(#paint1_linear_2659_19603)"/>
                                            </g>
                                            <defs>
                                            <linearGradient id="paint0_linear_2659_19603" x1="0.995117" y1="8.23175" x2="8.98519" y2="8.23175" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2659_19603" x1="3.07715" y1="4.19405" x2="11.0091" y2="4.19405" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <clipPath id="clip0_2659_19603">
                                            <rect width="12" height="12" fill="white" transform="translate(0 0.654297)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="/" class="instructors-roadmap__links-link">
                                        <span>
                                            Категория С по смежному виду спорта
                                        </span>
                                        <svg class="instructors-roadmap__links-icon" width="12" height="13" viewBox="0 0 12 13" fill="none" id="link" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2659_19603)">
                                            <path d="M8.26901 5.38335C7.96137 5.07571 7.36376 4.65194 6.49903 4.6674L5.28591 5.88053C5.14671 6.01972 5.14669 6.23849 5.28591 6.37771C5.42513 6.51693 5.64389 6.5169 5.78309 6.37771C6.19575 5.96504 6.86196 5.96504 7.27465 6.37771C7.68731 6.79037 7.68731 7.45658 7.27465 7.86927L4.20073 10.9407C3.78809 11.3533 3.12185 11.3533 2.70917 10.9407C2.2965 10.528 2.29653 9.86174 2.70917 9.4491L3.56067 8.60012C3.4662 8.52557 3.38166 8.45097 3.29714 8.36645C3.0386 8.10791 2.8298 7.80958 2.68064 7.49141L1.71478 8.45474C0.755229 9.41429 0.755229 10.9755 1.71478 11.935C2.67434 12.8946 4.23551 12.8946 5.19506 11.935L8.26899 8.86363C8.85092 8.28175 9.53709 6.65144 8.26901 5.38335Z" fill="url(#paint0_linear_2659_19603)"/>
                                            <path d="M8.7677 4.88577C9.03123 5.1493 9.23509 5.44262 9.3842 5.76081L10.2894 4.85424C11.249 3.89469 11.249 2.33352 10.2894 1.37396C9.32987 0.414408 7.7687 0.414408 6.80914 1.37396L3.79585 4.38859C2.86435 5.32009 2.81117 6.88421 3.79585 7.86887C4.29062 8.36363 4.98125 8.60492 5.56583 8.58481L6.77896 7.37169C6.91817 7.23247 6.91817 7.01373 6.77896 6.87451C6.63974 6.73529 6.42099 6.73529 6.28178 6.87451C5.86914 7.28715 5.2029 7.28717 4.79021 6.87451C4.37753 6.46185 4.37757 5.79559 4.79021 5.38295L7.8035 2.36832C8.21617 1.95566 8.88238 1.95566 9.29507 2.36832C9.70773 2.78099 9.70773 3.4472 9.29507 3.85988L8.50421 4.65207C8.59367 4.72168 8.68318 4.80125 8.7677 4.88577Z" fill="url(#paint1_linear_2659_19603)"/>
                                            </g>
                                            <defs>
                                            <linearGradient id="paint0_linear_2659_19603" x1="0.995117" y1="8.23175" x2="8.98519" y2="8.23175" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2659_19603" x1="3.07715" y1="4.19405" x2="11.0091" y2="4.19405" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <clipPath id="clip0_2659_19603">
                                            <rect width="12" height="12" fill="white" transform="translate(0 0.654297)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="instructors-roadmap__links-item">
                                    <span class="instructors-roadmap__links-legend">
                                        Для успешного прохождения курса рекомендуем
                                    </span>
                                    <a href="/" class="instructors-roadmap__links-link">
                                        <span>
                                            Рейс-курс
                                        </span>
                                        <svg class="instructors-roadmap__links-icon" width="12" height="13" viewBox="0 0 12 13" fill="none" id="link" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2659_19603)">
                                            <path d="M8.26901 5.38335C7.96137 5.07571 7.36376 4.65194 6.49903 4.6674L5.28591 5.88053C5.14671 6.01972 5.14669 6.23849 5.28591 6.37771C5.42513 6.51693 5.64389 6.5169 5.78309 6.37771C6.19575 5.96504 6.86196 5.96504 7.27465 6.37771C7.68731 6.79037 7.68731 7.45658 7.27465 7.86927L4.20073 10.9407C3.78809 11.3533 3.12185 11.3533 2.70917 10.9407C2.2965 10.528 2.29653 9.86174 2.70917 9.4491L3.56067 8.60012C3.4662 8.52557 3.38166 8.45097 3.29714 8.36645C3.0386 8.10791 2.8298 7.80958 2.68064 7.49141L1.71478 8.45474C0.755229 9.41429 0.755229 10.9755 1.71478 11.935C2.67434 12.8946 4.23551 12.8946 5.19506 11.935L8.26899 8.86363C8.85092 8.28175 9.53709 6.65144 8.26901 5.38335Z" fill="url(#paint0_linear_2659_19603)"/>
                                            <path d="M8.7677 4.88577C9.03123 5.1493 9.23509 5.44262 9.3842 5.76081L10.2894 4.85424C11.249 3.89469 11.249 2.33352 10.2894 1.37396C9.32987 0.414408 7.7687 0.414408 6.80914 1.37396L3.79585 4.38859C2.86435 5.32009 2.81117 6.88421 3.79585 7.86887C4.29062 8.36363 4.98125 8.60492 5.56583 8.58481L6.77896 7.37169C6.91817 7.23247 6.91817 7.01373 6.77896 6.87451C6.63974 6.73529 6.42099 6.73529 6.28178 6.87451C5.86914 7.28715 5.2029 7.28717 4.79021 6.87451C4.37753 6.46185 4.37757 5.79559 4.79021 5.38295L7.8035 2.36832C8.21617 1.95566 8.88238 1.95566 9.29507 2.36832C9.70773 2.78099 9.70773 3.4472 9.29507 3.85988L8.50421 4.65207C8.59367 4.72168 8.68318 4.80125 8.7677 4.88577Z" fill="url(#paint1_linear_2659_19603)"/>
                                            </g>
                                            <defs>
                                            <linearGradient id="paint0_linear_2659_19603" x1="0.995117" y1="8.23175" x2="8.98519" y2="8.23175" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2659_19603" x1="3.07715" y1="4.19405" x2="11.0091" y2="4.19405" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <clipPath id="clip0_2659_19603">
                                            <rect width="12" height="12" fill="white" transform="translate(0 0.654297)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="/" class="instructors-roadmap__links-link">
                                        <span>
                                            Фрирайд
                                        </span>
                                        <svg class="instructors-roadmap__links-icon" width="12" height="13" viewBox="0 0 12 13" fill="none" id="link" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2659_19603)">
                                            <path d="M8.26901 5.38335C7.96137 5.07571 7.36376 4.65194 6.49903 4.6674L5.28591 5.88053C5.14671 6.01972 5.14669 6.23849 5.28591 6.37771C5.42513 6.51693 5.64389 6.5169 5.78309 6.37771C6.19575 5.96504 6.86196 5.96504 7.27465 6.37771C7.68731 6.79037 7.68731 7.45658 7.27465 7.86927L4.20073 10.9407C3.78809 11.3533 3.12185 11.3533 2.70917 10.9407C2.2965 10.528 2.29653 9.86174 2.70917 9.4491L3.56067 8.60012C3.4662 8.52557 3.38166 8.45097 3.29714 8.36645C3.0386 8.10791 2.8298 7.80958 2.68064 7.49141L1.71478 8.45474C0.755229 9.41429 0.755229 10.9755 1.71478 11.935C2.67434 12.8946 4.23551 12.8946 5.19506 11.935L8.26899 8.86363C8.85092 8.28175 9.53709 6.65144 8.26901 5.38335Z" fill="url(#paint0_linear_2659_19603)"/>
                                            <path d="M8.7677 4.88577C9.03123 5.1493 9.23509 5.44262 9.3842 5.76081L10.2894 4.85424C11.249 3.89469 11.249 2.33352 10.2894 1.37396C9.32987 0.414408 7.7687 0.414408 6.80914 1.37396L3.79585 4.38859C2.86435 5.32009 2.81117 6.88421 3.79585 7.86887C4.29062 8.36363 4.98125 8.60492 5.56583 8.58481L6.77896 7.37169C6.91817 7.23247 6.91817 7.01373 6.77896 6.87451C6.63974 6.73529 6.42099 6.73529 6.28178 6.87451C5.86914 7.28715 5.2029 7.28717 4.79021 6.87451C4.37753 6.46185 4.37757 5.79559 4.79021 5.38295L7.8035 2.36832C8.21617 1.95566 8.88238 1.95566 9.29507 2.36832C9.70773 2.78099 9.70773 3.4472 9.29507 3.85988L8.50421 4.65207C8.59367 4.72168 8.68318 4.80125 8.7677 4.88577Z" fill="url(#paint1_linear_2659_19603)"/>
                                            </g>
                                            <defs>
                                            <linearGradient id="paint0_linear_2659_19603" x1="0.995117" y1="8.23175" x2="8.98519" y2="8.23175" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2659_19603" x1="3.07715" y1="4.19405" x2="11.0091" y2="4.19405" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#DE525C"/>
                                            <stop offset="1" stop-color="#E97251"/>
                                            </linearGradient>
                                            <clipPath id="clip0_2659_19603">
                                            <rect width="12" height="12" fill="white" transform="translate(0 0.654297)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="instructors-roadmap__links-item">
                                    <span class="instructors-roadmap__links-legend">
                                        Что я получу после обучения?
                                    </span>
                                    <a class="instructors-roadmap__links-link">
                                        <span>
                                            Работа в ГЛЦ наших партнером
                                        </span>
                                    </a>
                                    <a class="instructors-roadmap__links-link">
                                        <span>
                                            Наслаждайся превосходным катанием
                                        </span>
                                    </a>
                                    <a class="instructors-roadmap__links-link">
                                        <span>
                                            Будешь прокаченным в этой категории
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <? } ?>
        </ul>
        <!-- мобилка енд-->
    </div>
</section>
<script defer src="../assets/js/components/instructors-roadmap-slider.js?v=0.0.1.4"></script>
<script defer src="../assets/js/components/instructors-roadmap-mobile.js?v=0.0.1.4"></script>


<section class="catalog instructors-catalog">
    <div class="site-container2" data-anim-fade>
        <div class="instructors-catalog__head-container flex-wrap">
            <div class="instructors-catalog__title-wrap">
                <span class="section-name _white-colored catalog__section-name instructors-catalog__section-name"> Каталог</span>
                <h2 class="second-title catalog__title _white-colored _text-up instructors-catalo__title"> Инструкторские курсы</h2>
            </div>
            <svg class="icon icon-banner-icon instructors-catalog__icon-arrow">
                <use xlink:href="../assets/img/sprite.svg#banner-icon"></use>
            </svg>
        </div>
        <div class="main-grid-content">
            <div class="main-grid-content__block">
                <div class="catalog__show-tags_mobile">
                    <span class="catalog__show-tags-legend _show">
                        Показать направления
                    </span>
                    <span class="catalog__show-tags-legend _hide">
                        Скрыть направления
                    </span>
                    <svg class="icon icon-show-tags">
                        <use xlink:href="../assets/img/sprite.svg#settings"></use>
                    </svg>
                </div>
                <div class="catalog__mobile-tags">
                    <div class="catalog__tags">
                        <span class="catalog__tag  _active">Горнолыжный спорт</span>
                        <span class="catalog__tag">Сноуборд</span>
                        <span class="catalog__tag">Прыжки на батуте</span>
                        <span class="catalog__tag ">Горнолыжный спорт</span>
                        <span class="catalog__tag">Сноуборд</span>
                        <span class="catalog__tag">Прыжки на батуте</span>
                    </div>
                    <button class="button-reset catalog__tags-all"> все</button>
                </div>
            </div>
            <div class="main-grid-content__block">
                <div class="flex-wrap catalog__item-container">
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-skis">
                                <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags">
                                <a href="" class="cart__tag">Инструктору</a>
                                <a href="" class="cart__tag"> Инструктору</a>
                            </div>
                            <h3 class="cart__legend">Курс категории «С» по горнолыжному спорту. Инструктор начального уровня обучения</h3><span
                                class="cart__category"> Горнолыжный спорт</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-board">
                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                            </svg>
                            <span class="cart__discount"> Скидка</span>
                        </div>
                        <div class="cart__info">
                            <span class="cart__discount _mobile"> Скидка</span>
                            <div class="cart__tags">
                                <a href="" class="cart__tag _purple-colored"> Любителю</a>
                            </div>
                            <h3 class="cart__legend">Курс категории «С». Инструктор начального уровня обучения</h3><span
                                class="cart__category"> Сноуборд</span>
                            <div class="cart__price_wrap"><span class="cart__price _colored"> 32 400 ₽</span><span
                                    class="cart__price-old"> 40 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button _dscount-btn"> Подать заявку <span class="icon-arrow"></span></a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-skis">
                                <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags">
                                <a href="" class="cart__tag">Инструктору</a>
                                <a href="" class="cart__tag _purple-colored"> Любителю</a>
                            </div>
                            <h3 class="cart__legend">Курс категории «B-basic»</h3><span class="cart__category">
                                Горнолыжный спорт</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-board">
                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag"> Инструктору</a><a href=""
                                    class="cart__tag _purple-colored"> Любителю</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Сноуборд</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-skis">
                                <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag _green-colored"> Спортсмену</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Горнолыжный спорт</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-board">
                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag"> Инструктору</a><a href=""
                                    class="cart__tag _purple-colored"> Любителю</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Сноуборд</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-board">
                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag"> Инструктору</a><a href=""
                                    class="cart__tag _purple-colored"> Любителю</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Сноуборд</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-board">
                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag"> Инструктору</a><a href=""
                                    class="cart__tag _purple-colored"> Любителю</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Сноуборд</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-skis">
                                <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag _green-colored"> Спортсмену</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Горнолыжный спорт</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-board">
                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                            </svg>
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags"><a href="" class="cart__tag"> Инструктору</a><a href=""
                                    class="cart__tag _purple-colored"> Любителю</a></div>
                            <h3 class="cart__legend"> Курс категории «B-basic»</h3><span class="cart__category">
                                Сноуборд</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                </div><a class="catalog__all-courses" href=""> Все курсы</a>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/catalog.css?v=0.0.0.8">
<link rel="stylesheet" href="../assets/css/components/catalog-cart.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/instructors-catalog.css?v=0.0.0.1">
<script defer src="../assets/js/components/catalog-index-filter.js?v=0.0.0.1"></script>

<section class="instructors-audience" data-anim-fade>
    <div class="site-container2 instructors-audience__container main-grid-content">
        <div class="main-grid-content__block">
            <h2 class="instructors-audience__title">
                Вы можете работать с разной аудиторией
            </h2>
        </div>
        <div class="main-grid-content__block">
            <ul class="instructors-audience__list js-audience-slider">
                <li class="instructors-audience__item">
                    <svg width="38" height="38" class="instructors-audience__item-arrow" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.1991 36.4966L32.7 36.4966L32.6817 8.17434L3.69064 36.3239L0.695429 33.3815L29.3501 4.90149L0.519672 4.88347L0.519672 0.463707H37.1991V36.4966Z" fill="url(#paint0_linear_2659_19912)"/>
                        <defs>
                        <linearGradient id="paint0_linear_2659_19912" x1="35.2287" y1="-1.47194" x2="0.845118" y2="33.5286" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DE525C"/>
                        <stop offset="1" stop-color="#E97251"/>
                        </linearGradient>
                        </defs>
                    </svg>

                    <img class="instructors-audience__item-bg" src="../assets/img/insructors/arrow-audience-lines.svg" alt="Детский инструктор">

                    <span class="instructors-audience__item-tag _children">
                        Детский инструктор
                    </span>

                    <h3 class="instructors-audience__item-legend">
                        Хочу обучать детей
                    </h3>
                    <p>
                        Эти курсы помогут освоить методики обучения детей, узнать больше о детской физиологии и так далее
                    </p>
                    <span class="instructors-audience__item-count">
                        9 курсов
                    </span>
                    <a class="page-link instructors-audience__item-link" href="/"><span>Перейти</span>
                    <svg width="14" height="13" viewBox="0 0 14 13" class="page-link__icon" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                        </svg>
                    </a>
                </li>
                <li class="instructors-audience__item">
                    <svg width="38" height="38" class="instructors-audience__item-arrow" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.1991 36.4966L32.7 36.4966L32.6817 8.17434L3.69064 36.3239L0.695429 33.3815L29.3501 4.90149L0.519672 4.88347L0.519672 0.463707H37.1991V36.4966Z" fill="url(#paint0_linear_2659_19912)"/>
                        <defs>
                        <linearGradient id="paint0_linear_2659_19912" x1="35.2287" y1="-1.47194" x2="0.845118" y2="33.5286" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DE525C"/>
                        <stop offset="1" stop-color="#E97251"/>
                        </linearGradient>
                        </defs>
                    </svg>

                    <img class="instructors-audience__item-bg" src="../assets/img/insructors/arrow-audience-lines.svg" alt="Лектор">

                    <span class="instructors-audience__item-tag _lectors">
                        Лектор
                    </span>

                    <h3 class="instructors-audience__item-legend">
                        Хочу обучать инструкторов
                    </h3>
                    <p>
                        Проходите лекторские сборы и обучайте инструкторов, возможно трудоустройство в НЛИ
                    </p>
                    <span class="instructors-audience__item-count">
                        11 курсов
                    </span>
                    <a class="page-link instructors-audience__item-link" href="/"><span>Перейти</span>
                    <svg width="14" height="13" viewBox="0 0 14 13" class="page-link__icon" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                        </svg>
                    </a>
                </li>
                <li class="instructors-audience__item">
                    <svg width="38" height="38" class="instructors-audience__item-arrow" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.1991 36.4966L32.7 36.4966L32.6817 8.17434L3.69064 36.3239L0.695429 33.3815L29.3501 4.90149L0.519672 4.88347L0.519672 0.463707H37.1991V36.4966Z" fill="url(#paint0_linear_2659_19912)"/>
                        <defs>
                        <linearGradient id="paint0_linear_2659_19912" x1="35.2287" y1="-1.47194" x2="0.845118" y2="33.5286" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DE525C"/>
                        <stop offset="1" stop-color="#E97251"/>
                        </linearGradient>
                        </defs>
                    </svg>

                    <img class="instructors-audience__item-bg" src="../assets/img/insructors/arrow-audience-lines.svg" alt="Лектор">

                    <span class="instructors-audience__item-tag _lectors">
                        Лектор
                    </span>

                    <h3 class="instructors-audience__item-legend">
                        Хочу обучать инструкторов
                    </h3>
                    <p>
                        Проходите лекторские сборы и обучайте инструкторов, возможно трудоустройство в НЛИ
                    </p>
                    <span class="instructors-audience__item-count">
                        11 курсов
                    </span>
                    <a class="page-link instructors-audience__item-link" href="/"><span>Перейти</span>
                    <svg width="14" height="13" viewBox="0 0 14 13" class="page-link__icon" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/instructors-audience.css?v=0.0.0.1">
<script defer src="../assets/js/components/instructors-audience-slider.js?v=0.0.1.4"></script>

<section class="instructors-feaututres" data-anim-fade>
    <div class="site-container2">
        <span class="section-name instructors-feaututres__section-name">
            НЛИ
        </span>
        <h2 class="instructors-feaututres__title second-title _text-up">
            ПРЕИМУЩЕСТВА
        </h2>
        <ul class="instructors-feaututres__list">
            <li class="instructors-feaututres__item">
                <span class="instructors-feaututres__item-caption">
                    Качество образования
                </span>
                <h3 class="instructors-feaututres__item-legend">
                    Учитесь по международным стандартам
                </h3>
                <p>
                    Мы соблюдаем международные стандарты ISIA,а наш подход к обучению основан на методике австрийских коллег, который мы постоянно совершенствуем
                </p>
            </li>
            <li class="instructors-feaututres__item">
                <span class="instructors-feaututres__item-caption">
                    Лучшие кадры
                </span>
                <h3 class="instructors-feaututres__item-legend">
                    Перенимайте опыт профессионалов
                </h3>
                <p>
                    В нашем лекторском составе призеры и победители спортивных соревнований с большим опытом работы
                </p>
            </li>
            <li class="instructors-feaututres__item">
                <span class="instructors-feaututres__item-caption">
                    Все серьезно
                </span>
                <h3 class="instructors-feaututres__item-legend">
                    Выдаем документы государственного образца
                </h3>
                <p>
                    После прохождения курса и итогового тестирования выдаем удостверение о повышении квалификации и включаем в базу данных инструкторов НЛИ
                </p>
            </li>
        </ul>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/instructors-feaututres.css?v=0.0.0.1">


<section class="accreditation acquired-skills" data-anim-fade>
    <div class="site-container2 accreditation__container">
        <span class="section-name acquired-skills__section-name">Подход</span>
        <h2 class="second-title acquired-skills__title _text-up">
            Системный подход к образованию
        </h2>
        <div class="main-grid-content">
            <div class="main-grid-content__block accreditation__col"></div>

            <?
                $acr_arr = [["Лекционные материалы", "book"], ["Практические занятия", "hat"], ["Итоговое тестирование", "plan"], ["Официальные документы ", "licience"]];
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


<section class="reviews mod-insturctors">
    <div class="site-container2 reviews__container" data-anim-fade>
        <div class="reviews__title_wrap flex-wrap">
            <div>
                <span class="section-name reviews__section-name">Отзывы</span>
                <h2 class="reviews__title second-title _text-up">
                    Курс прошли более 10&nbsp;000+ студентов
                </h2>
            </div>
            <a class="reviews__link page-link" href=""><span>все отзывы</span>
            <svg width="14" height="13" viewBox="0 0 14 13" class="page-link__icon" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                        </svg>
            </a>
        </div>
        <div class="main-grid-content reviews__box">
            <div class="main-grid-content__block">
                <div class="reviews__slider-nav slider-arrow-navigation"></div>
            </div>
            <div class="main-grid-content__block">
                <div class="reviews__slider">
                    <div class="reviews__slider-item">
                        <div class="reviews-slider__item">
                            <p class="reviews-slider__text">
                                Проходил курс по скейтборду категории С. Все очень сильно понравилось. Лектор курса Александр все понятно и доходчиво объяснял. Спасибо Лиге!
                            </p>
                            <a href="" class="reviews-slider__read-more" data-popup="reviews">
                                Читать полностью
                                <svg width="14" height="13" viewBox="0 0 14 13" class="reviews-slider__read-more-icon" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                                        </svg>
                            </a>
                            <span class="reviews-slider__author">
                                Марк Гайдукевич
                            </span>
                            <span class="reviews-slider__author-position">
                                Инструктор
                            </span>
                        </div>
                    </div>
                    <div class="reviews__slider-item">
                        <div class="reviews-slider__item">
                            <p class="reviews-slider__text">
                                На Камчатке провели курс тренерам. Станислав столько нужного в работе материала дал, что хочеться продолжение зимнего сезона!
                            </p>
                            <a href="" class="reviews-slider__read-more" data-popup="reviews">
                                Читать полностью 
                                <svg width="14" height="13" viewBox="0 0 14 13" class="reviews-slider__read-more-icon" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                                        </svg> 
                            </a>
                            <span class="reviews-slider__author">
                                Марк Гайдукевич
                            </span>
                            <span class="reviews-slider__author-position">
                                Инструктор
                            </span>
                        </div>
                    </div>
                    <div class="reviews__slider-item">
                        <div class="reviews-slider__item">
                            <p class="reviews-slider__text">
                                На Камчатке провели курс тренерам. Станислав столько нужного в работе материала дал, что хочеться продолжение зимнего сезона!
                            </p>
                            <a href="" class="reviews-slider__read-more" data-popup="reviews">
                                Читать полностью 
                                <svg width="14" height="13" viewBox="0 0 14 13" class="reviews-slider__read-more-icon" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                                        </svg> 
                            </a>
                            <span class="reviews-slider__author">
                                Марк Гайдукевич
                            </span>
                            <span class="reviews-slider__author-position">
                                Инструктор
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/reviews.css?v=0.0.0.4">
<link rel="stylesheet" href="../assets/css/components/reviews-slider.css?v=0.0.0.5">
<script defer src="../assets/js/components/reviews-slider.js?v=0.0.0.2"></script>

<section class="recommend" data-anim-fade>
    <div class="site-container2">
        <div class="recommend__title_wrap"><span class="section-name recommend__section-name"> Мы рекомендуем</span>
            <h2 class="second-title recommend__title _text-up">Полезное для инструкторов</h2>
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
                    </div>
                    <div class="recommend-slider__item">
                        <div class="recommend__grid flex-wrap">
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

<!-- баннер-вопрос -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/question-banner.php'?>
<!-- баннер-вопрос end-->

<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer.php'?>