<?
    define("PAGE_TITLE", "Инструктор по горнолыжному спорту");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<link rel="stylesheet" href="../assets/css/components/breadcrumbs.css?v=0.0.0.7">
<link rel="stylesheet" href="/local/assets/css/components/kind-of-sports.css?v=0.0.0.1">
<section class="kind-of-sports__hero">
    <div class="site-container2 breadcrumbs__container <? if (defined("MOD") ) { echo MOD ; } ?>">
        <div class="breadcrumbs flex-wrap">
            <a href=""class="breadcrumbs__item breadcrumbs__link">Главная
                <svg class="icon icon-breadcrumbs-arrow">
                    <use xlink:href="../assets/img/sprite.svg#breadcrumbs-arrow"></use>
                </svg>     
            </a>
            <a href=""class="breadcrumbs__item breadcrumbs__link">Каталог
                <svg class="icon icon-breadcrumbs-arrow">
                    <use xlink:href="../assets/img/sprite.svg#breadcrumbs-arrow"></use>
                </svg>     
            </a>
            <span class="breadcrumbs__item">
                Инструктор по горнолыжному спорту
            </span>
        </div>
    </div>

    <div class="site-container2">
        <h1 class="kind-of-sports__title _text-up second-title">
            Инструктор
            <br>
            по горнолыжному спорту
        </h1>
        <div class="main-grid-content">
            <div class="main-grid-content__block">
                <p class="kind-of-sports__text">
                    Удостоверенеие НЛИ и ISIA — пропуск на работу в службы инструкторов российских и международных горнолыжных курортов
                </p>
                <a class="kind-of-sports__button button" href="/">
                    Выбрать курс
                </a>
            </div>
            <div class="main-grid-content__block">
                <img class="kind-of-sports__hero-img" src="/local/assets/img/kind-of-sports/hero.jpg" alt="Двое лыжников стоят на снежной вершине">
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
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                                            </svg>
                                            <span>
                                                Горнолыжный спорт
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                            </svg>
                                            <span>
                                                Сноуборд
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item _opacity">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#ski2"></use>
                                            </svg>
                                            <span>
                                                Горнолыжный спорт
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item _opacity">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#wakeboard"></use>
                                            </svg>
                                            <span>
                                                Сноуборд
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item _opacity">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                            </svg>
                                            <span>
                                                Горнолыжный спорт
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item _opacity">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#wakeboard-boot"></use>
                                            </svg>
                                            <span>
                                                Сноуборд
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item _opacity">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#cart-skis"></use>
                                            </svg>
                                            <span>
                                                Горнолыжный спорт
                                            </span>
                                        </li>
                                        <li class="instructors-roadmap-caption__item _opacity">
                                            <svg class="icon icon-ski instructors-roadmap-caption__icon">
                                                <use xlink:href="../assets/img/sprite.svg#cart-board"></use>
                                            </svg>
                                            <span>
                                                Сноуборд
                                            </span>
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
                    </div>
                </li>
            <? } ?>
        </ul>
        <!-- мобилка енд-->
    </div>
</section>
<script defer src="../assets/js/components/instructors-roadmap-slider.js?v=0.0.1.4"></script>
<script defer src="../assets/js/components/instructors-roadmap-mobile.js?v=0.0.1.4"></script>

<link rel="stylesheet" href="../assets/css/components/career-boundaries.css?v=0.0.0.1">
<section class="career-boundaries">
    <div class="site-container2">
        <h2 class="career-boundaries__title second-title _text-up">
            Открой карьерные границы вместе <span>с картой ISIA</span>
        </h2>

        <div class="main-grid-content">
            <div class="main-grid-content__block"></div>
            <div class="main-grid-content__block">
                <ul class="career-boundaries__list">
                    <li class="career-boundaries__item">
                        <svg width="32" height="32" class="icon icon-globus career-boundaries__item-icon">
                            <use xlink:href="/local/assets/img/sprite.svg#globus2"></use>
                        </svg>
                        <p>
                            Получай марку и карту ISIA от Международного сообществав НЛИ, обучай там, где тебе хочется
                        </p>
                    </li>
                    <li class="career-boundaries__item">
                        <svg width="32" height="32" class="icon icon-mountain career-boundaries__item-icon">
                            <use xlink:href="/local/assets/img/sprite.svg#mountain"></use>
                        </svg>
                        <p>
                            Категория ISIA для тех, кто хочет усилить позиции в профессии, вырасти в доходе, открыть для себя все горнолыжные курорты мира
                        </p>
                    </li>
                </ul>

                <a class="career-boundaries__link" href="/">
                    <span>
                        Подробнее о карте ISIA
                    </span>

                    <svg class="icon icon-mountain career-boundaries__link-icon" width="104" height="104" id="colored-arrow" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M52.7638 101.282L46.6344 95.1522L85.8762 55.8603L7.35208 55.3911L7.35094 47.2311L85.8749 46.7839L46.6221 7.48104L52.7498 1.35334L102.721 51.3245L52.7638 101.282Z" fill="url(#paint0_linear_2534_33884)"/>
                        <defs>
                            <linearGradient id="paint0_linear_2534_33884" x1="102.72" y1="45.9564" x2="7.35076" y2="45.9698" gradientUnits="userSpaceOnUse">
                            <stop class="_icon-color" stop-color="#DE525C"/>
                            <stop class="_icon-color" offset="1" stop-color="#E97251"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="../assets/css/components/worldwide-work.css?v=0.0.0.1">
<section class="worldwide-work">
    <div class="site-container2">
        <div class="worldwide-work__title-wrap flex-wrap">
            <h2 class="worldwide-work__title second-title _text-up">
                Работай по всему миру
            </h2>
            <div class="worldwide-work__text">
                <p>
                    После обучения ты сможешь работатьв лучших горнолыжных центрах мира
                </p>

                <a class="worldwide-work__title-link" href="/">
                    <span>
                        Подробнее
                    </span>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.1521 12.0682L12.1521 12.3745L11.8586 12.3745H10.521L10.2277 12.3745L10.2275 12.0684L10.2225 3.85733L2.10298 12.2315L1.89542 12.4456L1.68905 12.2303L0.798586 11.3011L0.592222 11.0858L0.797378 10.8692L8.82267 2.39665L0.95372 2.39143L0.660356 2.39124L0.660355 2.08512L0.660355 0.689403L0.660355 0.383089L0.953906 0.383089L11.8586 0.383089L12.1521 0.383089L12.1521 0.689402L12.1521 12.0682Z" fill="url(#paint0_linear_2534_33834)" stroke="url(#paint1_linear_2534_33834)" stroke-width="0.6"/>
                        <defs>
                        <linearGradient id="paint0_linear_2534_33834" x1="11.2728" y1="0.0781444" x2="0.422943" y2="10.4759" gradientUnits="userSpaceOnUse">
                        <stop class="_icon-color" stop-color="#DE525C"/>
                        <stop class="_icon-color" offset="1" stop-color="#E97251"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_2534_33834" x1="11.2728" y1="0.0781444" x2="0.422943" y2="10.4759" gradientUnits="userSpaceOnUse">
                        <stop class="_icon-color" stop-color="#DE525C"/>
                        <stop class="_icon-color" offset="1" stop-color="#E97251"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>

        <div class="worldwide-work__map" id="worldwide-work-map">
            <div id="ymap_ctrl_display" style="display: none; width: 100%; height: 100%; position: absolute; background-color: rgba(0, 0, 0, 0.5); z-index: 100; pointer-events: none;">
                <div style="position: relative; top: 50%; left: 0; right: 0; color: white; text-align: center; font-size: 1.8em; pointer-events: none;">Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
            </div>

        </div>
    </div>
</section>

<!-- галлерея -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/gallery.php'?>
<!-- галлерея end -->

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

<link rel="stylesheet" href="/local/assets/css/components/cource-circles.css?v=0.0.0.1">
<section class="cource-circles">
    <div class="site-container2">
        <h2 class="cource-circles__title second-title">
            <span>31&nbsp;профессия и&nbsp;курс</span> по&nbsp;разным направлениям. Вы&nbsp;сможете найти&nbsp;то, что подходит вам
        </h2>
        <div class="cource-circles__container">
            <a href="/" class="cource-circles__item">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img1.jpg" alt="Детский инструктор" class="cource-circles__item-img">
                <span class="cource-circles__item-title">
                    Детский инструктор
                </span>
                <span class="cource-circles__item-subtitle">
                    Перейти
                </span>
            </a>
            <a href="/" class="cource-circles__item">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img2.jpg" alt="UPS" class="cource-circles__item-img">
                <span class="cource-circles__item-title">
                    UPS
                </span>
                <span class="cource-circles__item-subtitle">
                    Перейти
                </span>
            </a>
            <a href="/" class="cource-circles__item cource-circles__item_dark-bg">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img-linies.svg" alt="Повышение категории" class="cource-circles__item-img-lines">
                <span class="cource-circles__item-title">
                    Повышение категории 
                </span>
                <span class="cource-circles__item-subtitle">
                    Посмотреть курсы
                </span>
            </a>
            <a href="/" class="cource-circles__item cource-circles__item_dark-bg">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img-linies.svg" alt="Международная карта инструктора ISIA " class="cource-circles__item-img-lines">
                <span class="cource-circles__item-title">
                    Международная <br> карта инструктора ISIA 
                </span>
                <span class="cource-circles__item-subtitle">
                    Перейти
                </span>
            </a>
            <a href="/" class="cource-circles__item">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img3.jpg" alt="Школа лекторов" class="cource-circles__item-img">
                <span class="cource-circles__item-title">
                    Школа <br> лекторов
                </span>
                <span class="cource-circles__item-subtitle">
                    Перейти
                </span>
            </a>
            <a href="/" class="cource-circles__item">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img4.jpg" alt="Фристайл" class="cource-circles__item-img">
                <span class="cource-circles__item-title">
                    Фристайл
                </span>
                <span class="cource-circles__item-subtitle">
                    Перейти
                </span>
            </a>
            <a href="/" class="cource-circles__item cource-circles__item_dark-bg">
                <img src="/local/assets/img/kind-of-sports/cource-circles-img-linies.svg" alt="Улучшение техники" class="cource-circles__item-img-lines">
                <span class="cource-circles__item-title">
                    Улучшение техники 
                </span>
                <span class="cource-circles__item-subtitle">
                    Посмотреть курсы
                </span>
            </a>
        </div>
    </div>
</section>

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
                            <svg class="icon icon-cart-skis cart__icon-img">
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
                            <svg class="icon icon-cart-board cart__icon-img">
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
                            <a href="" class="button-reset cart__send-button _dscount-btn"> Подать заявку <svg width="14" height="13" viewBox="0 0 14 13" class="cart__send-button-icon" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"></path>
                                    </svg></a>
                        </div>
                    </div>
                    <div class="catalog__item cart">
                        <div class="cart__icon">
                            <svg class="icon icon-cart-skis cart__icon-img">
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
                            <svg class="icon icon-cart-board cart__icon-img cart__icon-img">
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
                            <svg class="icon icon-cart-skis cart__icon-img">
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
                            <svg class="icon icon-cart-board cart__icon-img">
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
                            <svg class="icon icon-cart-board cart__icon-img">
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
                            <svg class="icon icon-cart-board cart__icon-img">
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
                            <svg class="icon icon-cart-skis cart__icon-img">
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
                            <svg class="icon icon-cart-board cart__icon-img">
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

<!-- частые вопросы -->
<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/faq.php'?>
<!-- частые вопросы end -->


<link rel="stylesheet" href="../assets/css/components/help-form.css?v=0.0.0.8">
<section class="help-form" style="background-image: url(/local/assets/img/kind-of-sports/help-form-bg.jpg)">
    <div class="site-container2">
        <div class="main-grid-content">
            <div class="main-grid-content__block">
                <span class="section-name help-form__section-name">
                    каталог
                </span>
            </div>
            <div class="main-grid-content__block">
                <h2 class="second-title _text-up help-form__title">
                    Поможем вам в выборе
                </h2>
                <p class="help-form__heading-text">
                    Оставьте ваши контакты, и наш менеджер свяжется с вамив течении 20 минут и ответ на ваши вопросы
                </p>

                <form action="/" class="help-form__form validate">
                    <div class="help-form__wrapper">
                        <div class="help-form__label-container flex-wrap">
                            <label class="input-container help-form__input-container">
                                <input type="text" class="input help-form__input required" data-mask="fio" name="name">
                                <span class="input-heading">
                                    Имя
                                </span>
                            </label>
    
                            <label class="input-container help-form__input-container">
                                <input type="text" class="input help-form__input required" data-mask="phone" name="tel">
                                <span class="input-heading">
                                    Телефон
                                </span>
                            </label>
    
                            <label class="input-container help-form__input-container">
                                <input type="text" class="input help-form__input required" data-mask="email" name="email">
                                <span class="input-heading">
                                    E-mail
                                </span>
                            </label>
                        </div>
    
                        <label class="checkbox__label">
                            <input type="checkbox" checked class="checkbox visually-hidden required" name="agree-policy">
                            <span class="checkbox__name _square _white-color">
                                Я даю свое согласие на обработку персональных данных
                            </span>
                        </label>
                    </div>

                    <button class="button-reset flex-wrap help-form__button">
                        <span>
                            Отправить заявку
                        </span>

                        <svg width="104" height="104" class="icon help-form__icon-arrow">
                            <use xlink:href="../assets/img/sprite.svg#white-arrow-right"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- карта -->
<script>
    var collections = [
        {
            name: "Миасс, Россия",
            text: "Горнолыжный центр «Солнечная долина»",
            coords: [55.048441, 59.967603],
            img: '/local/assets/img/kind-of-sports/map/icon-worldwide-map.svg',
            imgActive: '/local/assets/img/kind-of-sports/map/icon-worldwide-map-black.svg'
        },
        {
            name: "Сочи, ГК «Роза Хутор»",
            text: "ГК «Роза Хутор»",
            coords: [43.671387, 40.297416],
            img: '/local/assets/img/kind-of-sports/map/icon-worldwide-map.svg',
            imgActive: '/local/assets/img/kind-of-sports/map/icon-worldwide-map-black.svg'
        },
    ]
</script>

<script src="https://api-maps.yandex.ru/2.1/?apikey=b0b15954-57af-4901-b78c-0ad5bd94cda8&lang=ru_RU"></script>
<script defer src="../assets/js/components/worldwide-work-map.js?v=0.0.1.0"></script>

<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer.php'?>