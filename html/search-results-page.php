<?
    define("PAGE_TITLE", "Страница результатов поиска");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php';
?>

<link rel="stylesheet" href="/local/assets/css/components/catalog-cart.css?v=0.0.0.1">
<link rel="stylesheet" href="/local/assets/css/components/section-news-slider.css?v=0.0.0.9">
<link rel="stylesheet" href="/local/assets/css/components/search-results.css?v=0.0.0.1">

<section class="search-results">
    <div class="site-container2">
        <form class="site-menu__search search-results__form" action="" name="site-menu-search">
            <label class="site-menu__searh-label site-label">
                <input class="site-menu__input input" type="text" id="search" data-items="first" value="Инструктор">
                <svg class="icon icon-search-menu site-menu__input-icon">
                    <use xlink:href="/local/assets/img/sprite.svg#search-menu"></use>
                </svg>
                <span class="site-input-name site-menu__input-name _active">Введите запрос</span>
                <span class="_cross">
                    <span></span><span></span>
                </span>
            </label>
        </form>

        <h1 class="search-results__title" data-count="190">
            Результаты по запросу <span>«Инструктор»</span>
        </h1>
        <p class="search-results__sub-title">
            Мы исправили опечатку в запросе <span>Инстрктор</span>
        </p>
    
        <div class="search-results__categories">
            <?
                $arr = [
                    "все (190)",
                    "Полезное (34)",
                    "Курсы (10)",
                    "Блог (70)",
                    "Интернет-магазин (15)",
                    "Сотрудники(3)",
                    "вакансии (7)",
                    "еще (17)"
                ]
            ?>
            <? $is_active = true; ?>
            <?foreach ($arr as $key => $value) {?>
                <button class="button-reset search-results__categories-item js-btn-cat <? echo $is_active ? "is-active" : false?>" data-anchor="<?php echo $key; ?>">
                    <? echo $value; ?>
                </button>
                <?$is_active = false; ?>
            <?}?>
        </div>
    
        <div class="search-results__content" data-items-target="first">
            <div class="search-results__content-section main-grid-content" data-anchor-child="1">
                <div class="main-grid-content__block">
                    <span class="search-results__content-section-name" data-count="34">
                        Полезное
                    </span>
                </div>
                <div class="main-grid-content__block content">
                    <div id="js-content-search">
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Курсы инструкторов — лыжи — Курс категории «B-basic»
                            </h3>
                            <p class="highlight-element">
                                Удостоверение НЛИ НЛИ, являясь членом Международной ассоциации инструкторов, присваивает инструкторам такие категории, которые соответствуют принятым стандартам подготовки инструкторов ISIA. По окончании основных курсов (курсов категорий «С», «В-basic», «В», «А», «Фристайл — базовый уровень») при условии успешной сдачи итогового тестирования слушатель получает удостоверение инструктора НЛИ — пластиковую карту — и автоматически включается в базу данных инструкторов НЛИ. Удостоверение НЛИ свидетельствует о профессиональной…
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Курсы инструкторов — лыжи — Курс категории «C». Инструктор начального уровня
                            </h3>
                            <p class="highlight-element">
                                Удостоверение НЛИ НЛИ, являясь членом Международной ассоциации инструкторов, присваивает инструкторам такие категории, которые соответствуют принятым стандартам подготовки инструкторов ISIA. По окончании основных курсов (курсов категорий «С», «В-basic», «В», «А», «Фристайл — базовый уровень») при условии успешной сдачи итогового тестирования слушатель получает удостоверение инструктора НЛИ — пластиковую карту — и автоматически включается в базу данных инструкторов НЛИ. Удостоверение НЛИ свидетельствует о профессиональной…
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Курсы инструкторов — лыжи — Курс категории «B». Инструктор среднего уровня
                            </h3>
                            <p class="highlight-element">
                                Резервный день — это день, который лектор НЛИ использует по своему усмотрению согласно следующим правилам: в качестве резервного дня для занятий по программе Курса, если в течение этого Курса в какой-либо день отменялись занятия по причине неподходящих погодных условий или в силу иных обстоятельств, не позволяющих работать на склоне; в качестве выходного дня, если до 2-го…
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Курсы инструкторов — лыжи — Курс «Альпинкурс»
                            </h3>
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Революционная методика обучения инструкторов
                            </h3>
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Курсы инструкторов — лыжи — Курс категории «A». Инструктор высшего уровня
                            </h3>
                            <p>
                                Резервный день — это день, который лектор НЛИ использует по своему усмотрению согласно следующим правилам: в качестве резервного дня для занятий по программе Курса, если в течение этого Курса в какой-либо день отменялись занятия по причине неподходящих погодных условий или в силу иных обстоятельств, не позволяющих работать на склоне; в качестве выходного дня, если до 2-го…
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                    </div>
                    <button class="button-reset search-results__content-btn js-show-more-search" data-section-id="1">
                        Показать еще
                    </button>
                </div>
            </div>
            <div class="search-results__content-section main-grid-content" data-anchor-child="2">
                <div class="main-grid-content__block">
                    <span class="search-results__content-section-name" data-count="10">
                        Курсы
                    </span>
                </div>
                <div class="main-grid-content__block content">
                    <div class="search-results__catalog" id="js-content-search">
                        <div class="search-results__catalog-item cart">
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
                        <div class="search-results__catalog-item cart">
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
                                <a href="" class="button-reset cart__send-button _dscount-btn"> Подать заявку
                                    <svg width="14" height="13" viewBox="0 0 14 13" class="cart__send-button-icon" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="search-results__catalog-item cart">
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
                        <div class="search-results__catalog-item cart">
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
                        <div class="search-results__catalog-item cart">
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
                        <div class="search-results__catalog-item cart">
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
                    </div>
                    
                    <button class="button-reset search-results__content-btn js-show-more-search" data-section-id="2">
                        Показать еще
                    </button>
                </div>
            </div>
            <div class="search-results__content-section main-grid-content" data-anchor-child="3">
                <div class="main-grid-content__block">
                    <span class="search-results__content-section-name" data-count="10">
                        Блог
                    </span>
                </div>
                <div class="main-grid-content__block content">
                    
                    <div class="search-results__news" id="js-content-search">
                        <a href="" class="news-slider__item search-results__news-item">
                            <img data-src="../assets/img/news-slider-img1.jpg" src="#" alt="" class="news-slider__img lazy search-results__news-item-img">
                            <div class="news-slider__date search-results__news-item-date">
                                07/04/2021
                            </div>
                            <h3 class="news-slider__heading search-results__news-item-heading highlight-element">
                                Опубликован календарь курсов подготовки инструкторов на зимний сезон 2021-2022
                            </h3>
                        </a>
                        <a href="" class="news-slider__item search-results__news-item">
                            <img data-src="../assets/img/news-slider-img1.jpg" src="#" alt="" class="news-slider__img lazy search-results__news-item-img">
                            <div class="news-slider__date search-results__news-item-date">
                                07/04/2021
                            </div>
                            <h3 class="news-slider__heading search-results__news-item-heading highlight-element">
                                Опубликован календарь курсов подготовки инструкторов на зимний сезон 2021-2022
                            </h3>
                        </a>
                        <a href="" class="news-slider__item search-results__news-item">
                            <img data-src="../assets/img/news-slider-img1.jpg" src="#" alt="" class="news-slider__img lazy search-results__news-item-img">
                            <div class="news-slider__date search-results__news-item-date">
                                07/04/2021
                            </div>
                            <h3 class="news-slider__heading search-results__news-item-heading highlight-element">
                                Опубликован календарь курсов подготовки инструкторов на зимний сезон 2021-2022
                            </h3>
                        </a>
                        <a href="" class="news-slider__item search-results__news-item">
                            <img data-src="../assets/img/news-slider-img1.jpg" src="#" alt="" class="news-slider__img lazy search-results__news-item-img">
                            <div class="news-slider__date search-results__news-item-date">
                                07/04/2021
                            </div>
                            <h3 class="news-slider__heading search-results__news-item-heading highlight-element">
                                Опубликован календарь курсов подготовки инструкторов на зимний сезон 2021-2022
                            </h3>
                        </a>
                        <a href="" class="news-slider__item search-results__news-item">
                            <img data-src="../assets/img/news-slider-img1.jpg" src="#" alt="" class="news-slider__img lazy search-results__news-item-img">
                            <div class="news-slider__date search-results__news-item-date">
                                07/04/2021
                            </div>
                            <h3 class="news-slider__heading search-results__news-item-heading highlight-element">
                                Опубликован календарь курсов подготовки инструкторов на зимний сезон 2021-2022
                            </h3>
                        </a>
                        <a href="" class="news-slider__item search-results__news-item">
                            <img data-src="../assets/img/news-slider-img1.jpg" src="#" alt="" class="news-slider__img lazy search-results__news-item-img">
                            <div class="news-slider__date search-results__news-item-date">
                                07/04/2021
                            </div>
                            <h3 class="news-slider__heading search-results__news-item-heading highlight-element">
                                Опубликован календарь курсов подготовки инструкторов на зимний сезон 2021-2022
                            </h3>
                        </a>
                    </div>

                    <button class="button-reset search-results__content-btn js-show-more-search" data-section-id="3">
                        Показать еще
                    </button>
                </div>
            </div>
            <div class="search-results__content-section main-grid-content" data-anchor-child="4">
                <div class="main-grid-content__block">
                    <span class="search-results__content-section-name" data-count="10">
                        Лекторы
                    </span>
                </div>
                <div class="main-grid-content__block content">
                    
                    <div id="js-content-search">
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Инструкторы курсов категории «C»
                            </h3>
                            <p class="highlight-element">
                                Александр Артёмов, горнолыжный спорт
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Инструкторы курсов категории «A»
                            </h3>
                            <p class="highlight-element">
                                Александр Артёмов, горнолыжный спорт
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Инструкторы курсов категории «B»
                            </h3>
                            <p class="highlight-element">
                                Александр Артёмов, горнолыжный спорт
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Инструкторы курсов категории «A»
                            </h3>
                            <p class="highlight-element">
                                Александр Артёмов, горнолыжный спорт
                            </p>
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Инструкторы курсов категории «A»
                            </h3>
                            <p class="highlight-element">
                                Александр Артёмов, горнолыжный спорт
                            </p>
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                        <div class="search-results__useful">
                            <h3 class="highlight-element">
                                Инструкторы курсов категории «C»
                            </h3>
                            <p class="highlight-element">
                                Александр Артёмов, горнолыжный спорт
                            </p>
    
                            <a href="/">
                                Перейти
                            </a>
                        </div>
                    </div>

                    <button class="button-reset search-results__content-btn js-show-more-search" data-section-id="4">
                        Показать еще
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script defer src="../assets/js/components/search-results-page.js?v=0.0.0.1"></script>


<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer.php'?>