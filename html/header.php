<!DOCTYPE html>
<html lang="ru">

<?
    $pagetitle;

    if (defined("PAGE_TITLE")) { 
        $pagetitle = PAGE_TITLE;
    } else {
        $pagetitle = "Главная";
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Описание сайта">
    <title><? echo $pagetitle; ?> | НЛИ</title>
    <link rel="stylesheet" href="/local/assets/css/style.css?v=0.0.7.3">
    <link rel="stylesheet" href="/local/assets/css/vendor.min.css?v=0.0.0.4">
    <script src="/local/assets/js/vendor.js?v=0.0.1.0"></script>
</head>

<body class="page-home <? if ($url === "/local/html/personal-cabinet.php") echo "page-personal-cabinet" ?> ">
    <div class="preloader"></div>
    <div class="preloader-ajax" style="display: none;" id="preloader-ajax">
        <svg class="preloader-ajax__logo" width="106" height="99" viewBox="0 0 106 99" id="logo-circle3" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.9414 0C46.1322 0 45.5928 0.629776 45.5928 1.25955L45.7276 27.3323C45.7276 29.4735 42.8954 30.6071 41.277 29.0956L21.9911 10.8321C21.4516 10.3283 20.6424 10.3283 20.103 10.8321C19.5635 11.336 19.5635 12.0917 19.9681 12.5955L46.1322 41.8171C46.2671 41.9431 46.402 41.9431 46.6717 41.8171C48.1552 40.6835 49.9085 39.9278 51.7966 39.6759C51.9315 39.6759 52.0664 39.5499 52.0664 39.424L48.2901 1.1336C48.2901 0.503821 47.7506 0 46.9414 0Z" fill="#0A6F95"/>
            <path d="M86.0446 10.8321C85.5051 10.3283 84.6959 10.3283 84.1564 10.8321L64.7356 29.0956C63.1172 30.6071 60.285 29.5995 60.285 27.3323L60.4199 1.25955C60.4199 0.50382 59.7456 0 59.0712 0C58.3969 0 57.7226 0.503821 57.7226 1.1336L53.9463 39.424C53.9463 39.5499 54.0812 39.6759 54.216 39.6759C56.239 39.8018 57.9923 40.5575 59.4758 41.6911C59.6107 41.8171 59.8804 41.8171 60.0153 41.6911L86.0446 12.5955C86.584 12.0917 86.4492 11.336 86.0446 10.8321Z" fill="#0A6F95"/>
            <path d="M104.523 42.5715L76.6052 42.6975C74.3125 42.6975 73.0987 40.0524 74.7171 38.541L94.4077 20.5294C94.9471 20.0256 94.9471 19.2699 94.4077 18.766C93.8682 18.2622 93.059 18.2622 92.5195 18.6401L61.3653 42.9494C61.2304 43.0754 61.2304 43.2013 61.3653 43.4532C62.5791 44.8387 63.3883 46.4761 63.5232 48.3655C63.5232 48.4914 63.658 48.6174 63.9278 48.6174L104.658 45.2166C105.332 45.2166 105.871 44.5868 105.871 43.957C106.006 43.2013 105.332 42.5715 104.523 42.5715Z" fill="#0A6F95"/>
            <path d="M94.4019 80.3604C94.9414 79.8566 94.9414 79.1009 94.4019 78.597L74.8462 60.4595C73.2278 58.948 74.3068 56.303 76.7344 56.303L104.652 56.4289C105.461 56.4289 106 55.7992 106 55.1694C106 54.5396 105.461 53.9098 104.787 53.9098L63.922 50.509C63.7872 50.509 63.5174 50.635 63.5174 50.7609C63.2477 52.6503 62.4385 54.2877 61.2247 55.6732C61.0898 55.7992 61.0898 56.0511 61.2247 56.177L92.3789 80.4864C93.0533 80.8642 93.8625 80.7383 94.4019 80.3604Z" fill="#0A6F95"/>
            <path d="M58.9364 98.9996C59.7456 98.9996 60.285 98.3698 60.285 97.74L60.1502 71.6673C60.1502 69.5261 62.9824 68.3925 64.6008 69.904L83.8867 88.1674C84.4262 88.6713 85.2354 88.6713 85.7748 88.1674C86.3143 87.6636 86.3143 86.9079 85.9097 86.4041L60.0153 57.3085C59.8804 57.1825 59.7456 57.1825 59.4758 57.3085C57.9923 58.3161 56.239 59.0718 54.216 59.1978C54.0812 59.1978 53.9463 59.3237 53.9463 59.5756L57.5877 97.866C57.7226 98.4958 58.262 98.9996 58.9364 98.9996Z" fill="#0A6F95"/>
            <path d="M19.9603 88.1679C20.4997 88.6717 21.3089 88.6717 21.8484 88.1679L41.1343 69.9044C42.7527 68.393 45.5849 69.4006 45.5849 71.6678L45.4501 97.7405C45.4501 98.4962 46.1244 99 46.7987 99C47.4731 99 48.1474 98.4962 48.1474 97.8664L51.7888 59.4501C51.7888 59.3242 51.654 59.0723 51.5191 59.0723C49.631 58.8204 47.8777 58.0646 46.3941 57.057C46.2593 56.931 45.9895 56.931 45.8547 57.057L19.9603 86.4045C19.4208 86.9084 19.4208 87.6641 19.9603 88.1679Z" fill="#0A6F95"/>
            <path d="M0 55.1682C0 55.924 0.674334 56.4278 1.34867 56.4278L29.2661 56.3018C31.5588 56.3018 32.7726 58.9469 31.1542 60.4583L11.5985 78.4699C11.0591 78.9737 11.0591 79.7295 11.5985 80.2333C12.138 80.7371 12.9472 80.7371 13.4867 80.3592L44.9106 55.798C45.0455 55.672 45.0455 55.5461 44.9106 55.2942C43.8317 53.9087 43.0225 52.2713 42.7528 50.5079C42.7528 50.3819 42.6179 50.256 42.3482 50.256L1.2138 53.7827C0.539467 53.9087 0 54.4125 0 55.1682Z" fill="#0A6F95"/>
            <path d="M11.5985 18.641C11.0591 19.1448 11.0591 19.9006 11.5985 20.4044L31.1542 38.416C32.7726 39.9274 31.6937 42.5725 29.2661 42.5725H1.34867C0.539467 42.5725 0 43.2023 0 43.8321C0 44.4618 0.539467 45.0916 1.2138 45.0916L42.3482 48.4924C42.483 48.4924 42.7528 48.3664 42.7528 48.2405C43.0225 46.4771 43.6968 44.8397 44.7758 43.4542C44.9106 43.3282 44.9106 43.0763 44.7758 42.9504L13.4867 18.641C12.9472 18.1372 12.138 18.2632 11.5985 18.641Z" fill="#0A6F95"/>
            <g clip-path="url(#clip0_221_3554)">
                <path d="M46.9414 0C46.1322 0 45.5928 0.629776 45.5928 1.25955L45.7276 27.3323C45.7276 29.4735 42.8954 30.6071 41.277 29.0956L21.9911 10.8321C21.4516 10.3283 20.6424 10.3283 20.103 10.8321C19.5635 11.336 19.5635 12.0917 19.9681 12.5955L46.1322 41.8171C46.2671 41.9431 46.402 41.9431 46.6717 41.8171C48.1552 40.6835 49.9085 39.9278 51.7966 39.6759C51.9315 39.6759 52.0664 39.5499 52.0664 39.424L48.2901 1.1336C48.2901 0.503821 47.7506 0 46.9414 0Z" fill="currentColor"/>
                <path d="M86.0446 10.8321C85.5051 10.3283 84.6959 10.3283 84.1564 10.8321L64.7356 29.0956C63.1172 30.6071 60.285 29.5995 60.285 27.3323L60.4199 1.25955C60.4199 0.50382 59.7456 0 59.0712 0C58.3969 0 57.7226 0.503821 57.7226 1.1336L53.9463 39.424C53.9463 39.5499 54.0812 39.6759 54.216 39.6759C56.239 39.8018 57.9923 40.5575 59.4758 41.6911C59.6107 41.8171 59.8804 41.8171 60.0153 41.6911L86.0446 12.5955C86.584 12.0917 86.4492 11.336 86.0446 10.8321Z" fill="currentColor"/>
                <path d="M104.523 42.5715L76.6053 42.6975C74.3125 42.6975 73.0987 40.0524 74.7171 38.541L94.4077 20.5294C94.9471 20.0256 94.9471 19.2699 94.4077 18.766C93.8682 18.2622 93.059 18.2622 92.5195 18.6401L61.3653 42.9494C61.2304 43.0754 61.2304 43.2013 61.3653 43.4532C62.5791 44.8387 63.3883 46.4761 63.5232 48.3655C63.5232 48.4914 63.658 48.6174 63.9278 48.6174L104.658 45.2166C105.332 45.2166 105.871 44.5868 105.871 43.957C106.006 43.2013 105.332 42.5715 104.523 42.5715Z" fill="currentColor"/>
                <path d="M94.4014 80.3604C94.9409 79.8566 94.9409 79.1009 94.4014 78.597L74.8457 60.4595C73.2273 58.948 74.3063 56.303 76.7339 56.303L104.651 56.4289C105.461 56.4289 106 55.7992 106 55.1694C106 54.5396 105.461 53.9098 104.786 53.9098L63.9215 50.509C63.7867 50.509 63.5169 50.635 63.5169 50.7609C63.2472 52.6503 62.438 54.2877 61.2242 55.6732C61.0893 55.7992 61.0893 56.0511 61.2242 56.177L92.3784 80.4864C93.0528 80.8642 93.862 80.7383 94.4014 80.3604Z" fill="currentColor"/>
                <path d="M58.9364 98.9995C59.7456 98.9995 60.285 98.3697 60.285 97.7399L60.1502 71.6672C60.1502 69.526 62.9824 68.3924 64.6008 69.9038L83.8867 88.1673C84.4262 88.6711 85.2354 88.6711 85.7748 88.1673C86.3143 87.6635 86.3143 86.9078 85.9097 86.404L60.0153 57.3083C59.8804 57.1824 59.7456 57.1824 59.4758 57.3083C57.9923 58.316 56.239 59.0717 54.216 59.1977C54.0812 59.1977 53.9463 59.3236 53.9463 59.5755L57.5877 97.8659C57.7226 98.4956 58.262 98.9995 58.9364 98.9995Z" fill="currentColor"/>
                <path d="M19.9603 88.1679C20.4997 88.6717 21.3089 88.6717 21.8484 88.1679L41.1343 69.9044C42.7527 68.3929 45.5849 69.4006 45.5849 71.6678L45.4501 97.7405C45.4501 98.4962 46.1244 99 46.7987 99C47.4731 99 48.1474 98.4962 48.1474 97.8664L51.7888 59.4501C51.7888 59.3242 51.6539 59.0723 51.5191 59.0723C49.6309 58.8204 47.8777 58.0646 46.3941 57.057C46.2593 56.931 45.9895 56.931 45.8547 57.057L19.9603 86.4045C19.4208 86.9083 19.4208 87.6641 19.9603 88.1679Z" fill="currentColor"/>
                <path d="M0 55.1682C0 55.924 0.674334 56.4278 1.34867 56.4278L29.2661 56.3018C31.5588 56.3018 32.7726 58.9469 31.1542 60.4583L11.5985 78.4699C11.0591 78.9737 11.0591 79.7295 11.5985 80.2333C12.138 80.7371 12.9472 80.7371 13.4867 80.3592L44.9106 55.798C45.0455 55.672 45.0455 55.5461 44.9106 55.2942C43.8317 53.9087 43.0225 52.2713 42.7528 50.5079C42.7528 50.3819 42.6179 50.256 42.3482 50.256L1.2138 53.7827C0.539467 53.9087 0 54.4125 0 55.1682Z" fill="currentColor"/>
                <path d="M11.5985 18.641C11.0591 19.1448 11.0591 19.9006 11.5985 20.4044L31.1542 38.416C32.7726 39.9274 31.6937 42.5725 29.2661 42.5725H1.34867C0.539467 42.5725 0 43.2023 0 43.8321C0 44.4618 0.539467 45.0916 1.2138 45.0916L42.3482 48.4924C42.483 48.4924 42.7528 48.3664 42.7528 48.2405C43.0225 46.4771 43.6968 44.8397 44.7758 43.4542C44.9106 43.3282 44.9106 43.0763 44.7758 42.9504L13.4867 18.641C12.9472 18.1372 12.138 18.2632 11.5985 18.641Z" fill="currentColor"/>
            </g>
            <defs>
            <clipPath id="clip0_221_3554">
            <rect x="28.5293" y="25.5092" width="49.1679" height="47.9816" rx="23.9908" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </div>
    <div class="site-menu">
        <div class="site-menu__layer"></div>
        <div class="site-container site-menu__container">
            <a class="site-menu__logo" href="" aria-label="На главную">
                <svg class="icon icon-logo logo logo_blue site-menu__icon-logo">
                    <use xlink:href="/local/assets/img/sprite.svg#logo"></use>
                </svg>
            </a>
            <button class="header__logIn site-menu__logIn button-reset" data-popup="logIn">
                <svg class="icon icon-login">
                    <use xlink:href="/local/assets/img/sprite.svg#login"></use>
                </svg> 
                <span class="personal-cabinet-login">Войти</span>
                <span class="personal-cabinet-client-name">Даниил С.</span>
            </button>
            <button class="button-reset site-menu__close-button">
                <svg class="icon icon-icon-cross site-menu__close-icon">
                    <use xlink:href="/local/assets/img/sprite.svg#icon-cross"></use>
                </svg>
            </button>
            <div class="site-menu__heading"> Меню</div>
            <form class="site-menu__search" action="" name="site-menu-search">
                <label class="site-menu__searh-label site-label">
                    <input class="site-menu__input input" type="text">
                    <svg class="icon icon-search-menu site-menu__input-icon">
                        <use xlink:href="/local/assets/img/sprite.svg#search-menu"></use>
                    </svg><span class="site-input-name site-menu__input-name">Поиск по сайту</span>
                </label>
            </form>
            <div class="site-menu__row">
                <div class="site-menu__col">
                    <div class="site-menu__legend"> ИНСТРУКТОРАМ</div>
                    <div class="_wrap flex-wrap">
                        <ul class="site-menu__list _offset-margin">
                            <li class="site-menu__item"><a class="site-menu__link" href="">Горнолыжный спорт</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">UPS</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Лыжный фристайл</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Сноуборд</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Телемарк</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Прыжки на батуте</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Вейкбординг</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Роллер-спорт</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Лонгбординг</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Скейтбординг</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Стать лектором НЛИ</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">МОД</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">ISIA</a></li>
                        </ul>
                        <ul class="site-menu__list">
                            <li class="site-menu__item"><a class="site-menu__link" href="">Полезное</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Соревнования</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Английский язык</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Пересдача</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Проверка удостоверения</a>
                            </li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Подтверждение
                                    квалификации</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Ежегодный взнос</a></li>
                            <li class="site-menu__item"><a class="site-menu__link" href="">Переаттестация</a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-menu__col">
                    <div class="site-menu__legend"> Любителям</div>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">Горнолыжный спорт</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">UPS</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Лыжный фристайл</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Сноуборд</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Телемарк</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Прыжки на батуте</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Вейкбординг</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Роллер-спорт</a></li>
                    </ul>
                    <div class="site-menu__legend"> спортсменам</div>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">Горнолыжный спорт</a></li>
                    </ul>
                    <div class="site-menu__legend"> Тренерам</div>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">Горнолыжный спорт</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Сноуборд</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Теннис</a></li>
                    </ul>
                </div>
                <div class="site-menu__col">
                    <div class="site-menu__legend"> Онлайн-обучение</div>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">Переподготовка</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">МОД</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Вебинары</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Марафоны</a></li>
                    </ul>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">Интернет-магазин</a></li>
                    </ul>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">О компании</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">О нас</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">FAQ</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Вакансии</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Отзывы</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Контакты</a></li>
                    </ul>
                    <ul class="site-menu__list">
                        <li class="site-menu__item"><a class="site-menu__link" href="">Сотрудничество</a></li>
                        <li class="site-menu__item"><a class="site-menu__link" href="">Блог</a></li>
                    </ul>
                    <!-- мобилка 1 -->
                    <div class="site-menu__row-mobile _xs">
                        <a class="button-reset catalog-button site-menu__catalog-link" href=""> Все курсы
                            <svg class="icon icon-burger-two-lines">
                                <use xlink:href="/local/assets/img/sprite.svg#burger-two-lines"></use>
                            </svg>
                        </a>
                        <a href="tel:+74959897051" class="site-menu__tel">+7 495 989 70 51</a>
                        <a class="site-menu__poorvision" href="">
                            <svg class="icon icon-poorVision">
                                <use xlink:href="/local/assets/img/sprite.svg#poorVision"></use>
                            </svg> версия для слабовидящих
                        </a>
                    </div>
                    <!-- мобилка 1 end-->
                </div>
                <div class="site-menu__row-mobile _xxs">
                    <!-- мобилка 1 -->
                    <div class="catalog-button__mobile-wrap">
                        <a class="button-reset catalog-button site-menu__catalog-link" href=""> Все курсы
                            <svg class="icon icon-burger-two-lines">
                                <use xlink:href="/local/assets/img/sprite.svg#burger-two-lines"></use>
                            </svg>
                        </a>
                    </div>
                    <a href="tel:+74959897051" class="site-menu__tel">+7 495 989 70 51</a>
                    <a class="site-menu__poorvision" href="">
                        <svg class="icon icon-poorVision">
                            <use xlink:href="/local/assets/img/sprite.svg#poorVision"></use>
                        </svg> версия для слабовидящих
                    </a>
                    <!-- мобилка 1 end-->
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper <? if ($pagetitle == "Оформление курса") echo "no-overflow" ?>">
        <div class="header-fixed-margin"></div>
        <header class="header">
            <div class="site-container2 header__container">
                <a class="header__link" href="" aria-label="На главную">
                    <svg class="icon icon-logo logo header__logo logo_blue">
                        <use xlink:href="/local/assets/img/sprite.svg#logo"></use>
                    </svg></a>
                <button class="button-reset header__burger-mobile burger-menu js-open-menu"
                    aria-label="Открыть меню"><span></span><span></span><span></span></button>
                <div class="header__nav_container">
                    <div class="_top">
                        <nav class="header__nav_top top-nav">
                            <ul class="top-nav__list">
                                <li class="top-nav__item"><a class="top-nav__link" href="">Онлайн обучение</a></li>
                                <li class="top-nav__item"><a class="top-nav__link" href="">Интернет-магазин</a></li>
                                <li class="top-nav__item"><a class="top-nav__link" href="">Блог</a></li>
                                <li class="top-nav__item"><a class="top-nav__link" href="">О компании</a></li>
                                <li class="top-nav__item"><a class="top-nav__link" href="">Сотрудничество</a></li>
                            </ul>
                        </nav>
                        <div class="header__links <? if ($url === "/local/html/personal-cabinet.php") echo "header__personal-cabinet" ?> "><a class="header__tel" href="tel:+74959897051"> +7 495 989 70 51</a>
                            <button class="header__logIn button-reset" data-popup="logIn">
                                <svg class="icon icon-login">
                                    <use xlink:href="/local/assets/img/sprite.svg#login"></use>
                                </svg> 
                                <span class="personal-cabinet-login">Войти</span>
                                <span class="personal-cabinet-client-name">Даниил С.</span>
                            </button>
                            <button class="button-reset header__poorVision-button" aria-label="версия для слабовидящих">
                                <svg class="icon icon-poorVision">
                                    <use xlink:href="/local/assets/img/sprite.svg#poorVision"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="_bottom">
                        <div class="flex-wrap">
                            <nav class="header__nav_bottom bottom-nav">
                                <ul class="bottom-nav__list">
                                    <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Инструкторам</a>
                                    </li>
                                    <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Любителям</a></li>
                                    <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Спортсменам</a></li>
                                    <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Тренерам</a></li>
                                </ul>
                            </nav>
                            <button class="button-reset header__burger burger-menu js-open-menu"
                                aria-label="Открыть меню"><span></span><span></span><span></span></button>
                            <button class="button-reset search-button js-open-menu" aria-label="Поиск">
                                <svg class="icon icon-search">
                                    <use xlink:href="/local/assets/img/sprite.svg#search"></use>
                                </svg>
                            </button>
                        </div><a class="button-reset catalog-button header__catalog-button" href=""> Все курсы
                            <svg class="icon icon-burger-two-lines">
                                <use xlink:href="/local/assets/img/sprite.svg#burger-two-lines"></use>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="site-container desktop-hidden header__mobile-menu-container">
                <nav class="header__nav_bottom bottom-nav header__mobile-menu">
                    <ul class="bottom-nav__list header__mobile-menu-list">
                        <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Инструкторам</a></li>
                        <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Любителям</a></li>
                        <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Блог</a></li>
                        <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Тренерам</a></li>
                        <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Тренерам</a></li>
                        <li class="bottom-nav__item"><a class="bottom-nav__link" href="">Тренерам</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="page-main main <? if (defined("PERSONAL_CABINET") && PERSONAL_CABINET=="Y" ) { echo "main--personal-cabinet" ; } ?>">