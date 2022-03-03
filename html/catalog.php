 <? 
    define("PAGE_TITLE", "Каталог");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/breadcrumbs.php'?>

<section class="catalog-page">
    <div class="site-container2">
        <h1 class="second-title catalog-page__title _text-up">
            Каталог курсов
            <span class="catalog-page__course-count">
                91 курс
            </span>
        </h1>

        <div class="main-grid-content catalog-page__row">
            <div class="main-grid-content__block catalog-page__col">
                <form class="catalog-page__filter catalog-filter validate">
                    <div class="catalog-filter__category cat-filters-container">
                        <span class="catalog-filter__heading">
                            Направление
                        </span>
                        <div class="catalog-filter__category-filters _only-shown">
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Инструктор
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Любитель
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Спорстмен
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Тренер
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Тренер
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Тренер
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Тренер
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Тренер
                                </span>
                            </label>
                        </div>
                        <a href="" class="catalog-filter__show-more js-catalog-filter__show-more1">
                            <span class="_show">Показать все направления</span>
                            <span class="_hide">Скрыть</span>
                        </a>
                    </div>
                    <div class="catalog-filter__category">
                        <span class="catalog-filter__heading">
                            Формат обучения
                        </span>
                        <div class="catalog-filter__category-filters">
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Оффлайн-курсы
                                </span>
                            </label>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    Онлайн-курсы
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="catalog-filter__category">
                        <span class="catalog-filter__heading">
                            Вид спорта
                        </span>
                        <div class="catalog-filter__category-filters">
                            <? $cat_arr1 = ["Горнолыжный спорт", "UPS", "Лыжный фристайл", "Сноуборд", "Сноуборд фристайл", "Телемарк", "Прыжки на батуте", "Вейкбординг", "Роллер-спорт", "Лонгбординг", "Скейтбординг", "Теннис"] ?>
                            <? foreach ($cat_arr1 as $item) { ?>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    <? echo $item; ?>
                                </span>
                            </label>
                            <? } ?>
                        </div>
                    </div>
                    <div class="catalog-filter__category">
                        <span class="catalog-filter__heading">
                            Категория
                        </span>
                        <div class="catalog-filter__category-filters">
                            <? $cat_arr2 = ["Подготовительные", "Улучшение техники", "C", "B", "В-basic", "A", "Все категории", "МОД", "Лекторские"] ?>
                            <? foreach ($cat_arr2 as $item) { ?>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name">
                                    <? echo $item; ?>
                                </span>
                            </label>
                            <? } ?>
                        </div>
                    </div>
                    <div class="catalog-filter__time">
                        <span class="catalog-filter__heading">
                            Время проведения
                        </span>
                        <div class="_wrap flex-wrap">
                            <label class="catalog-filter__input-container">
                                <svg class="icon icon-calendar">
                                    <use xlink:href="../assets/img/sprite.svg#calendar"></use>
                                </svg>
                                <input type="text" class="catalog-filter__input _time-input chooseDateMin"
                                    placeholder="Начало" data-mask="date">
                            </label>
                            <label class="catalog-filter__input-container">
                                <svg class="icon icon-calendar">
                                    <use xlink:href="../assets/img/sprite.svg#calendar"></use>
                                </svg>
                                <input type="text" class="catalog-filter__input _time-input chooseDateMax"
                                    placeholder="Конец" data-mask="date">
                            </label>
                        </div>
                    </div>
                    <div class="catalog-filter__location cat-filters-container">
                        <span class="catalog-filter__heading">
                            Место проведения
                        </span>
                        <label class="catalog-filter__input-container _location">
                            <svg class="icon icon-search-filter">
                                <use xlink:href="../assets/img/sprite.svg#search-menu"></use>
                            </svg>
                            <input type="text" name="search" data-items="place" data-mask="cyrilic" class="catalog-filter__input required js-search-filter"
                                placeholder="Поиск">
                        </label>
                        <div class="catalog-filter__category-filters" data-items-target="place">
                            <? $cat_arr3 = ["Литва, ВГК «Snow Arena»", "Сочи, ГК «Красная Поляна»", "Сочи, ГК «Роза Хутор»", "Урал, ГЛЦ «Абзаково»", "Узбекистан, ГКЛЦ «Amirsoy»", "Узбекистан, ГКЛЦ «Amirsoy»", "Узбекистан, ГКЛЦ «Amirsoy»", "Узбекистан, ГКЛЦ «Amirsoy»", "Узбекистан, ГКЛЦ «Amirsoy»"] ?>
                            <? foreach ($cat_arr3 as $item) { ?>
                            <label class="catalog-filter__checkbox-container">
                                <input type="checkbox" class="visually-hidden catalog-filter__checkbox">
                                <span class="catalog-filter__checkbox-name highlight-element">
                                    <? echo $item; ?>
                                </span>
                            </label>
                            <? } ?>
                        </div>
                    </div>

                    <button class="button-reset catalog-filter__button">
                        Применить фильтры
                    </button>

                    <button class="button-reset catalog-filter__reset-button">
                        <svg class="icon icon-filter-trash">
                            <use xlink:href="../assets/img/sprite.svg#trash"></use>
                        </svg>
                        Очистить фильтр
                    </button>
                </form>
            </div>
            <div class="main-grid-content__block catalog-page__col">
                <div class="catalog-page__empty-dates">
                    <div class="empty-dates">
                        <svg class="icon icon-search-desabled">
                            <use xlink:href="../assets/img/sprite.svg#search-desabled"></use>
                        </svg>
                        <div class="empty-dates__heading">
                            К сожалению, на период <span class="opend-date">16.08.21</span> - <span
                                class="close-date">20.10.21</span> нет подходящих курсов
                        </div>
                        <div class="_wrap">
                            <span class="empty-dates__offer">
                                Мы можем предложить вам курсы, близкие в ваших датам
                            </span>
                            <a class="empty-dates__link page-link" href="">показать варианты
                                <svg width="14" height="13" viewBox="0 0 14 13" class="empty-dates__link-icon" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.849 11.8852L12.849 12.1901L12.554 12.1901H11.2184L10.9236 12.1901L10.9234 11.8854L10.9184 3.7669L2.81348 12.0481L2.6049 12.2612L2.39753 12.0468L1.50832 11.1276L1.30095 10.9133L1.50711 10.6976L9.51797 2.31923L1.66454 2.31407L1.36974 2.31388L1.36974 2.00913L1.36974 0.628388L1.36974 0.323451L1.66473 0.323451L12.554 0.323451L12.849 0.323451L12.849 0.628387L12.849 11.8852Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="empty-dates__legend">
                        Вам может подойти
                    </div>
                </div>
                <div class="catalog-page__show-filter" data-popup="catalog-mobile-filter">
                    <span class="catalog-page__show-filter-legend _show">
                        фильтр направления
                    </span>
                    <svg class="icon icon-show-filter">
                        <use xlink:href="../assets/img/sprite.svg#settings"></use>
                    </svg>
                </div>
                <div class="catalog-page__courses-sort flex-wrap">
                    <div class="sort">
                        <div class="sort__heading">
                            Сортировать по
                            <svg class="icon icon-sort">
                                <use xlink:href="../assets/img/sprite.svg#sort"></use>
                            </svg>
                        </div>
                        <div class="sort__list">
                            <div class="sort__item">
                                Сортировка 1
                            </div>
                            <div class="sort__item">
                                Сортировка 2
                            </div>
                        </div>
                    </div>
                    <span class="catalog-page__courses-warining">
                        <span>
                            В стоимость курсов не входят дополнительные расходы
                        </span>
                        <div class="tooltip">
                            <svg class="icon icon-courses-warining">
                                <use xlink:href="../assets/img/sprite.svg#courses-warining"></use>
                            </svg>

                            <div class="tooltip__container">
                                <div class="tooltip__content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus commodi beatae, voluptate veniam officiis laboriosam.
                                </div>
                            </div>
                        </div>

                    </span>
                </div>
                <div class="catalog-page__courses-container flex-wrap">
                    <div class="catalog-page__item cart">
                        <div class="cart__icon">
                            <img src="/local/assets/img/cart-skis.jpg" class="cart__icon-img" alt="">
                        </div>
                        <div class="cart__info">
                            <div class="cart__tags">
                                <a href="" class="cart__tag">Инструктору</a>
                                <a href="" class="cart__tag"> Инструктору</a>
                            </div>
                            <h3 class="cart__legend">Курс категории «С» по горнолыжному спорту. Инструктор начального
                                уровня обучения</h3><span class="cart__category"> Горнолыжный спорт</span>
                            <div class="cart__price_wrap"><span class="cart__price"> 32 400 ₽</span></div>
                            <a href="" class="button-reset cart__send-button"> Подать заявку</a>
                        </div>
                    </div>
                    <div class="catalog-page__item cart">
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
                            <a href="" class="button-reset cart__send-button _dscount-btn">Подать заявку
                                <span class="icon-arrow"></span>
                            </a>
                        </div>
                    </div>
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                    <div class="catalog-page__item cart">
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
                <div class="catalog-page__courses-pagination">
                    <ul class="pagination">
                        <li class="pagination__item _active">
                            <a href="" class="pagination__link">
                                01
                            </a>
                        </li>
                        <li class="pagination__item">
                            <a href="" class="pagination__link">
                                02
                            </a>
                        </li>
                        <li class="pagination__item">
                            <a href="" class="pagination__link">
                                03
                            </a>
                        </li>
                        <li class="pagination__item">
                            <a href="" class="pagination__link">
                                04
                            </a>
                        </li>
                        <li class="pagination__item">
                            ...
                        </li>
                        <li class="pagination__item">
                            <a href="" class="pagination__link">
                                15
                            </a>
                        </li>
                    </ul>
                    <div class="catalog-page__paginatin-nav flex-wrap">
                        <a class="catalog-page__nav-link _disabled" href="">
                            <svg class="icon pagination-prev-arrow pagination-arrow">
                                <use xlink:href="../assets/img/sprite.svg#prevArrow"></use>
                            </svg>
                        </a>
                        <a class="catalog-page__nav-link" href="">
                            <svg class="icon pagination-next-arrow pagination-arrow">
                                <use xlink:href="../assets/img/sprite.svg#nextArrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <h3 class="catalog-page__legend">
                    Текст для продвижения
                </h3>
                <p class="catalog-page__text">
                    Программа данного курса полностью соответствует международным стандартам ISIA и учитывает
                    методические рекомендации по реализации дополнительных профессиональных программ (программ повышения
                    квалификации) в сфере подготовки инструкторов по горнолыжному спорту, утверждённые Федерацией
                    горнолыжного спорта и сноуборда России и согласованные с Министерством спорта Российской Федерации,
                    Министерством образования и науки Российской Федерации, Федеральным государственным бюджетным
                    учреждением «Федеральный научный центр физической культуры и спорта».
                </p>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/catalog-cart.css?v=0.0.0.3">
<link rel="stylesheet" href="../assets/css/components/catalog-page.css?v=0.0.2.2">
<link rel="stylesheet" href="../assets/css/components/pagination.css?v=0.0.0.6">
<link rel="stylesheet" href="../assets/css/components/catalog-filter.css?v=0.0.3.0">
<link rel="stylesheet" href="../assets/css/components/catalog-empty-dates.css?v=0.0.0.6">
<script defer src="../assets/js/components/filter-show-more-cat.js?v=0.0.0.1"></script>


<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer.php'?>