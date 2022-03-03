<?
    define("PERSONAL_CABINET", "Y");
    define("PAGE_TITLE", "Оформление курса");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<section class="course-registration course-confirmation">
    <div class="personal-cabinet-container2 course-registration__container">
        <? include $_SERVER['DOCUMENT_ROOT'].'/local/html/personal-cabinet-breadcrumbs.php'?>
    
        <h1 class="personal-cabinet__title course-registration__title course-confirmation__title">
            Пересдача курса категории “С” по горнолыжному спорту. Инструктор начального уровня
        </h1>
        <div class="flex-wrap personal-cabinet__flex-container course-registration__flex-container">
            <div class="personal-cabinet-container2__col course-registration__col">

                <ul class="steps">
                    <li class="steps__item" data-step="1">
                        <div class="steps__preloader" style="display: none;">
                            <svg class="steps__preloader-logo" width="106" height="99" viewBox="0 0 106 99" id="logo-circle3" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <form action="test.php" class="validate form" name="reg-course-step1">
                            <div class="steps__head">
                                <div class="steps__icon">
                                    <svg class="icon icon-pen iconHide">
                                        <use xlink:href="../assets/img/sprite.svg#user_2"></use>
                                    </svg>
                                    <svg class="icon icon-done iconDone hidden">
                                        <use xlink:href="../assets/img/sprite.svg#icon-done"></use>
                                    </svg>   
                                </div>
                                <div class="steps__info">
                                    <div class="steps__heading">
                                        Контактные данные
                                    </div>
                                    <span class="steps__step-count">
                                        Шаг 1
                                    </span>
                                </div>
                                <svg class="icon steps__icon-down icon-down">
                                    <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                </svg> 
                            </div>
                            <div class="steps__body" style="display: none;">
                                <div class="steps__content">
                                    <div class="steps__content-block">
                                        <span class="steps__legend">
                                            Ваши данные*
                                        </span>

                                        <div class="input-container">
                                            <input type="text" class="input required" data-mask="fio" name="second-name">
                                            <span class="input-heading">
                                                Фамилия
                                            </span>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" class="input required" data-mask="fio" name="first-name">
                                            <span class="input-heading">
                                                Имя
                                            </span>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" class="input required" data-mask="fio" name="third-name">
                                            <span class="input-heading">
                                                Отчество
                                            </span>
                                        </div>
                                        <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                            <div class="input-container steps__small-input">
                                                <input type="tel" class="input" data-mask="phone" name="phone">
                                                <span class="input-heading">
                                                    Телефон
                                                </span>
                                            </div>
                                            <div class="input-container _mobile-mb18">
                                                <input type="text" class="input" data-mask="email" name="email">
                                                <span class="input-heading">
                                                    Email
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="steps__content-block">
                                        <span class="steps__legend">
                                            Курсы, на которых вы можете подтвердить квалификацию*
                                        </span>
                                        <div class="input-container">
                                            <div class="select">
                                                <input type="text" class="select__input required" name="vid-sporta" value="">
                                                <div class="select__head">
                                                    <div class="select__val">Вид спорта</div>
                                                    <svg class="icon icon-down select__head_arrow">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                    </svg>
                                                </div>
                                                <div class="select__drop">
                                                    <div class="select__drop_scroll" data-simplebar>
                                                        <? for($i=0; $i<3; $i++) {?>
                                                            <div class="select__item" data-default="" data-value="Вид спорта<?echo $i;?>">
                                                                Вид спорта<?echo $i;?>
                                                            </div>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <div class="select">
                                                <input type="text" class="select__input required" name="kategoria-sporta" value="">
                                                <div class="select__head">
                                                    <div class="select__val">Категория</div>
                                                    <svg class="icon icon-down select__head_arrow">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                    </svg>
                                                </div>
                                                <div class="select__drop">
                                                    <div class="select__drop_scroll" data-simplebar>
                                                        <? for($i=0; $i<3; $i++) {?>
                                                            <div class="select__item" data-default="" data-value="Категория<?echo $i;?>">
                                                                Категория<?echo $i;?>
                                                            </div>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <div class="select">
                                                <input type="text" class="select__input required" name="kurs" value="">
                                                <div class="select__head">
                                                    <div class="select__val">Курс</div>
                                                    <svg class="icon icon-down select__head_arrow">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                    </svg>
                                                </div>
                                                <div class="select__drop">
                                                    <div class="select__drop_scroll" data-simplebar>
                                                        <? for($i=0; $i<3; $i++) {?>
                                                            <div class="select__item" data-default="" data-value="Курс<?echo $i;?>">
                                                                Курс<?echo $i;?>
                                                            </div>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-wrap steps__flex-wrap _magrin-bottom course-confirmation__revert-small-input">
                                            <div class="input-container">
                                                <div class="select">
                                                    <input type="text" class="select__input required" name="kurs" value="">
                                                    <div class="select__head">
                                                        <div class="select__val">Выберите место проведения</div>
                                                        <svg class="icon icon-down select__head_arrow">
                                                            <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="select__drop">
                                                        <div class="select__drop_scroll" data-simplebar>
                                                            <? for($i=0; $i<3; $i++) {?>
                                                                <div class="select__item" data-default="" data-value="Место проведения<?echo $i;?>">
                                                                    Место проведения<?echo $i;?>
                                                                </div>
                                                            <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-container steps__date-input steps__small-input">
                                                <input type="tel" class="input required chooseDate" data-mask="date" name="date">
                                                <span class="input-heading">
                                                    Сроки проведения
                                                </span>
                                                <svg class="icon icon-calendar">
                                                    <use xlink:href="../assets/img/sprite.svg#calendar"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="steps__content-block">
                                        <span class="steps__legend">
                                            Количество дней катания
                                        </span>

                                        <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                            <div class="input-container steps__small-input">
                                                <div class="select">
                                                    <input type="text" class="select__input required required-el" name="numbers-of-days" value="">
                                                    <div class="select__head">
                                                        <div class="select__val">Количество дней</div>
                                                        <svg class="icon icon-down select__head_arrow">
                                                            <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="select__drop">
                                                        <div class="select__drop_scroll" data-simplebar>
                                                            <? for($i=0; $i<3; $i++) {?>
                                                                <div class="select__item" data-default="" data-value="Количество дней<?echo $i;?>">
                                                                    <?echo $i;?>
                                                                </div>
                                                            <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="course-confirmation__text-p">
                                                Вы можете выбрать дополнительные дни катания, чтобы лучше подготовится к итоговому экзамену. Услуга платная
                                            </p>
                                        </div>
                                    </div>

                                    <div class="steps__agrees" style="margin-bottom: 40px;">
                                        <label class="checkbox__label steps__checkbox">
                                            <input type="checkbox" checked class="checkbox visually-hidden required required-el" name="agree-policy">
                                            <span class="checkbox__name _square">
                                                Я согласен с <a href="">политикой конфиденциальности</a>
                                            </span>
                                        </label>
                                        <label class="checkbox__label steps__checkbox">
                                            <input type="checkbox" checked class="checkbox visually-hidden required required-el" name="agree-oferta">
                                            <span class="checkbox__name _square">
                                                Я согласен с <a href="">договором оферты</a>
                                            </span>
                                        </label>
                                        <label class="checkbox__label steps__checkbox">
                                            <input type="checkbox" checked class="checkbox visually-hidden required required-el" name="agree-polozhenie">
                                            <span class="checkbox__name _square">
                                                Я согласен с <a href="">положением</a>
                                            </span>
                                        </label>
                                    </div>

                                    <button class="button-reset button _transparent steps__button-change-step course-confirmation__button" data-next-step="2">
                                        Далее
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="steps__item" data-step="2">
                        <div class="steps__preloader" style="display: none;">
                            <svg class="steps__preloader-logo" width="106" height="99" viewBox="0 0 106 99" id="logo-circle3" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <p>
                                Подождите, идёт формирование документов, это может занять несколько минут
                            </p>
                        </div>
                        <form action="test.php" class="validate form" name="reg-course-step2">
                            <div class="steps__head">
                                <div class="steps__icon">
                                    <svg class="icon icon-pen iconHide">
                                        <use xlink:href="../assets/img/sprite.svg#icon-pen"></use>
                                    </svg>
                                    <svg class="icon icon-done iconDone hidden">
                                        <use xlink:href="../assets/img/sprite.svg#icon-done"></use>
                                    </svg>  
                                </div>
                                <div class="steps__info">
                                    <div class="steps__heading">
                                        Личные данные для заполнения договора
                                    </div>
                                    <span class="steps__step-count">
                                        Шаг 2
                                    </span>
                                </div>
                                <svg class="icon steps__icon-down icon-down">
                                    <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                </svg> 
                            </div>
                            <div class="steps__body" style="display: none;">
                                <div class="steps__content">
                                    <div class="steps__warning _error">
                                        <p class="_text">
                                            Вам необходимо заполнить данные из шага 1
                                        </p>
                                    </div>
                                    <!--  -->
                                    <div class="step-is-closed">
                                        <div class="tabs">
                                            <div class="flex-wrap steps__flex-wrap steps__content-block _mobile-margin">
                                                <span class="steps__small-legend">
                                                    Оформить как
                                                </span>
                                                <label class="checkbox__label steps__checkbox" data-show="fizLico">
                                                    <input type="radio" checked class="checkbox visually-hidden FizLico" name="reg-type" value="fiz-lico">
                                                    <span class="checkbox__name _round">
                                                        Физическое лицо
                                                    </span>
                                                </label>
                                                <label class="checkbox__label steps__checkbox" data-show="UrLico">
                                                    <input type="radio" class="checkbox visually-hidden UrLico" name="reg-type" value="ur-lico">
                                                    <span class="checkbox__name _round">
                                                        Юридическое лицо
                                                    </span>
                                                </label>
                                            </div>
                                        
                                            <div class="steps__ur-lico" data-item="UrLico" style="display: none">
                                                <div class="steps__content-block">
                                                    <span class="steps__legend">
                                                        Данные представителя
                                                    </span>
        
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__small-input">
                                                            <input type="text" class="input required-el" data-mask="letters" disabled name="ur-second-name">
                                                            <span class="input-heading">
                                                                Фамилия
                                                            </span>
                                                        </div>
                                                        <div class="input-container steps__small-input">
                                                            <input type="text" class="input required-el" data-mask="letters" disabled name="ur-first-name">
                                                            <span class="input-heading">
                                                                Имя
                                                            </span>
                                                        </div>
                                                        <div class="input-container steps__small-input">
                                                            <input type="text" class="input required-el" data-mask="letters" disabled name="ur-third-name">
                                                            <span class="input-heading">
                                                                Отчество
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__date-input steps__small-input">
                                                            <input type="tel" class="input required-el chooseDate2" disabled data-mask="date" name="ur-date-of-birth">
                                                            <span class="input-heading">
                                                                Дата рождения
                                                            </span>
                                                            <svg class="icon icon-calendar">
                                                                <use xlink:href="../assets/img/sprite.svg#calendar"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="steps__small-legend">
                                                            Укажите ваш пол
                                                        </span>
                                                        <label class="checkbox__label steps__checkbox">
                                                            <input type="radio" id="sex1" cheked class="checkbox visually-hidden" name="ur-sex" value="male">
                                                            <span class="checkbox__name _round">
                                                                Мужской
                                                            </span>
                                                        </label>
                                                        <label class="checkbox__label steps__checkbox">
                                                            <input type="radio" id="sex2" class="checkbox visually-hidden" name="ur-sex" value="female">
                                                            <span class="checkbox__name _round">
                                                                Женский
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__small-input">
                                                            <div class="select">
                                                                <input type="text" class="select__input required-el" disabled name="ur-сitizenship" value="">
                                                                <div class="select__head">
                                                                    <div class="select__val">Гражданство</div>
                                                                    <svg class="icon icon-down select__head_arrow">
                                                                        <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="select__drop">
                                                                    <div class="select__drop_scroll" data-simplebar>
                                                                        <? for($i=0; $i<3; $i++) {?>
                                                                            <div class="select__item" data-default="" data-value="Гражданство<?echo $i;?>">
                                                                                Гражданство<?echo $i;?>
                                                                            </div>
                                                                        <? } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-container _mobile-mb18">
                                                            <input type="tel" class="input required-el" data-mask="digits" disabled name="ur-passport-series">
                                                            <span class="input-heading">
                                                                Серия паспорта
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required-el" data-mask="snils" disabled name="snils">
                                                        <span class="input-heading">
                                                            СНИЛС
                                                        </span>
                                                    </div>
                                                </div>
        
                                                <div class="steps__content-block">
                                                    <span class="steps__legend">
                                                        Информация об организации*
                                                    </span>
                                                    <div class="input-container">
                                                        <input type="text" class="input required-el" disabled name="ur-organization">
                                                        <span class="input-heading">
                                                            Полное наименование организации
                                                        </span>
                                                    </div>
                                                    <div class="input-container" data-similar-value="pachta">
                                                        <input type="text" class="input required-el" disabled name="ur-adres">
                                                        <span class="input-heading">
                                                            Юридический адрес
                                                        </span>
                                                    </div>
        
                                                    <label class="checkbox__label steps__checkbox steps__ur-lico-checkbox" data-similar-parent="pachta">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="ur-adres-is-pochta">
                                                        <span class="checkbox__name _square">
                                                            Почтовый адрес совпадает с юридическим
                                                        </span>
                                                    </label>
        
                                                    <div class="input-container" data-similar-child="pachta">
                                                        <input type="text" class="input required-el" disabled name="ur-adres-pochta">
                                                        <span class="input-heading">
                                                            Почтовый адрес
                                                        </span>
                                                    </div>
        
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__small-input">
                                                            <input type="tel" class="input required-el" disabled name="ur-phone">
                                                            <span class="input-heading">
                                                                Телефон компании
                                                            </span>
                                                        </div>
                                                        <div class="input-container _mobile-mb18">
                                                            <input type="text" class="input required-el" data-mask="email" disabled name="ur-email">
                                                            <span class="input-heading">
                                                                Email
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required-el" data-mask="digits" disabled name="ur-ogrn">
                                                        <span class="input-heading">
                                                            ОГРН
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required-el" data-mask="digits" disabled name="ur-inn">
                                                        <span class="input-heading">
                                                            ИНН
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required-el" data-mask="digits" disabled name="ur-kpp">
                                                        <span class="input-heading">
                                                            КПП
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="text" class="input required-el" disabled name="ur-bank">
                                                        <span class="input-heading">
                                                            Наименование банка 
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required-el" data-mask="digits" disabled name="ur-schet">
                                                        <span class="input-heading">
                                                            Расчетный счет
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required-el" data-mask="digits" disabled name="ur-bik">
                                                        <span class="input-heading">
                                                            Корреспондентский счет БИК
                                                        </span>
                                                    </div>
        
                                                    <label class="checkbox__label steps__checkbox steps__ur-lico-checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" data-similar="doverennoeLico" name="ur-is-lico-doverennoe" value="yes">
                                                        <span class="checkbox__name _square">
                                                            Договор подписывает доверенное лицо
                                                        </span>
                                                    </label>
        
                                                    <div class="input-container" data-similar-item="doverennoeLico" style="display: none;">
                                                        <input type="text" class="input required-el" data-mask="letters" disabled name="ur-lico-doverennoe">
                                                        <span class="input-heading">
                                                            Должность доверенного лица
                                                        </span>
                                                    </div>
                                                </div>
        
                                                <div class="teps__content-block">
                                                    <span class="steps__legend _file-legend">
                                                        Доверенность
                                                    </span>
                                                    <label class="input-file-container file steps__file">
                                                        <input type="file" multiple name="ur-doverennost" class="input-file visually-hidden required required-el">
                                                        <span class="file__empty flex-wrap file__flex-wrap">
                                                            <svg class="icon file__icon-file">
                                                                <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                            </svg>
            
                                                            <span class="file__text-info">
                                                                <span class="file__legend">
                                                                    Перетащите сюда или <span>загрузите файл</span>
                                                                </span>
                                                                <span class="file__small-legend">
                                                                    Походят изображения JPEG, PNG, объемом не более 2 Мб
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="steps__fiz-lico" data-item="fizLico">
                                                <div class="steps__content-block">
                                                    <span class="steps__legend">
                                                        Паспортные данные*
                                                    </span>
            
                                                    <div class="input-container">
                                                        <input type="text" class="input required required-el" data-mask="fio" name="second-name">
                                                        <span class="input-heading">
                                                            Фамилия
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="text" class="input required required-el" data-mask="fio" name="first-name">
                                                        <span class="input-heading">
                                                            Имя
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="text" class="input required required-el" data-mask="fio" name="third-name">
                                                        <span class="input-heading">
                                                            Отчество
                                                        </span>
                                                    </div>
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__date-input steps__small-input">
                                                            <input type="tel" class="input required required-el chooseDate2" data-mask="date" name="date-of-birth">
                                                            <span class="input-heading">
                                                                Дата рождения
                                                            </span>
                                                            <svg class="icon icon-calendar">
                                                                <use xlink:href="../assets/img/sprite.svg#calendar"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="steps__small-legend">
                                                            Укажите ваш пол
                                                        </span>
                                                        <label class="checkbox__label steps__checkbox">
                                                            <input type="radio" id="sex1" cheked class="checkbox visually-hidden" name="sex" value="male">
                                                            <span class="checkbox__name _round">
                                                                Мужской
                                                            </span>
                                                        </label>
                                                        <label class="checkbox__label steps__checkbox">
                                                            <input type="radio" id="sex2" class="checkbox visually-hidden" name="sex" value="female">
                                                            <span class="checkbox__name _round">
                                                                Женский
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__small-input">
                                                            <div class="select">
                                                                <input type="text" class="select__input required required-el" name="сitizenship" value="">
                                                                <div class="select__head">
                                                                    <div class="select__val">Гражданство</div>
                                                                    <svg class="icon icon-down select__head_arrow">
                                                                        <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="select__drop">
                                                                    <div class="select__drop_scroll" data-simplebar>
                                                                        <? for($i=0; $i<3; $i++) {?>
                                                                            <div class="select__item" data-default="" data-value="Гражданство<?echo $i;?>">
                                                                                Гражданство<?echo $i;?>
                                                                            </div>
                                                                        <? } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-container steps__small-input">
                                                            <input type="tel" class="input required required-el" data-mask="passwordSeria" name="passport-series">
                                                            <span class="input-heading">
                                                                Серия паспорта
                                                            </span>
                                                        </div>
                                                        <div class="input-container steps__small-input">
                                                            <input type="tel" class="input required required-el" data-mask="passwordNumber" name="passport-number">
                                                            <span class="input-heading">
                                                                Номер
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="text" class="input required required-el" name="passport-issued-by">
                                                        <span class="input-heading">
                                                            Кем выдан
                                                        </span>
                                                    </div>
                                                    <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                                        <div class="input-container steps__date-input steps__small-input">
                                                            <input type="tel" class="input required required-el chooseDate2" data-mask="date" name="password-date-of-issue">
                                                            <span class="input-heading">
                                                                Дата выдачи
                                                            </span>
                                                            <svg class="icon icon-calendar">
                                                                <use xlink:href="../assets/img/sprite.svg#calendar"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="input-container steps__small-input">
                                                            <input type="text" class="input required required-el" data-mask="passwordkod" name="password-code">
                                                            <span class="input-heading">
                                                                Код подразделения
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="text" class="input required required-el" name="registration-adres">
                                                        <span class="input-heading">
                                                            Адрес регистрации
                                                        </span>
                                                    </div>
                                                    <div class="input-container">
                                                        <input type="tel" class="input required required-el" data-mask="snils" name="snils">
                                                        <span class="input-heading">
                                                            СНИЛС
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="steps__content-block">
                                                    <span class="steps__legend">
                                                        Образование*
                                                    </span>
                                                    <div class="flex-wrap steps__flex-wrap _wrap-el _50width">
                                                        <div class="_wrapping-el">
                                                            <label class="checkbox__label steps__checkbox">
                                                                <input type="radio" id="educationType" checked class="checkbox visually-hidden" name="education" value="height-proffesional">
                                                                <span class="checkbox__name _round">
                                                                    высшее профессиональное
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="_wrapping-el">
                                                            <label class="checkbox__label steps__checkbox">
                                                                <input type="radio" id="educationType2" class="checkbox visually-hidden" name="education" value="specialized-secondary">
                                                                <span class="checkbox__name _round">
                                                                    Среднее специальное
                                                                </span>
                                                            </label>
                                                        </div>
            
                                                        <div class="_wrapping-el">
                                                            <label class="checkbox__label steps__checkbox">
                                                                <input type="radio" id="educationType3" class="checkbox visually-hidden" name="education" value="student-certificate">
                                                                <span class="checkbox__name _round">
                                                                    Студенческая справка
                                                                </span>
                                                            </label>
                                                        </div>
            
                                                        <div class="_wrapping-el">
                                                            <label class="checkbox__label steps__checkbox">
                                                                <input type="radio" id="educationType4" class="checkbox visually-hidden" name="education" value="absent">
                                                                <span class="checkbox__name _round">
                                                                    Отсутствует
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="steps__content-block tabs deliveryTabs">
                                            <span class="steps__legend">
                                                Адрес для отправки удостоверения*
                                            </span>
                                            <div class="flex-wrap steps__flex-wrap _wrap-el _50width _delivery-choose-nav">
                                                <div class="_wrapping-el">
                                                    <label class="checkbox__label steps__checkbox" data-show="fromOffice">
                                                        <input type="radio" id="deliveryType1" checked class="checkbox visually-hidden" name="deliveryType" value="from-office">
                                                        <span class="checkbox__name _round">
                                                            Самовывоз из нашего офиса
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="_wrapping-el">
                                                    <label class="checkbox__label steps__checkbox" data-show="delivery">
                                                        <input type="radio" id="deliveryType2" class="checkbox visually-hidden" name="deliveryType" value="delivery">
                                                        <span class="checkbox__name _round">
                                                            Доставка
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="" data-item="fromOffice"></div>
                                            <div class="" data-item="delivery" style="display: none;">
                                                <div class="flex-wrap steps__flex-wrap _wrap-el _50width steps__delivery-choose delivery-choose">
                                                    <div class="_wrapping-el">
                                                        <label class="delivery-choose__item">
                                                            <input type="radio" id="deliveryCompany1" class="delivery-choose__input visually-hidden" name="deliveryCompany" value="cdek">
                                                            <img src="../assets/img/sdek.png" alt="cdek" class="delivery-choose__img">
                                                            <span class="delivery-choose__legend">
                                                                от 500 ₽
                                                            </span>
                                                            <span class="delivery-choose__legend-small">
                                                                Доставка курьером 2-3 дня
                                                            </span>
                                                            <span class="delivery-choose__ok-icon">
                                                                <svg class="icon icon-done">
                                                                    <use xlink:href="../assets/img/sprite.svg#icon-done"></use>
                                                                </svg> 
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="_wrapping-el">
                                                        <label class="delivery-choose__item">
                                                            <input type="radio" id="deliveryCompany2" class="delivery-choose__input visually-hidden" name="deliveryCompany" value="cdek">
                                                            <img src="../assets/img/pochta.png" alt="pochta" class="delivery-choose__img">
                                                            <span class="delivery-choose__legend">
                                                                от 100 ₽
                                                            </span>
                                                            <span class="delivery-choose__legend-small">
                                                                Доставка курьером 4-7 дней
                                                            </span>
                                                            <span class="delivery-choose__ok-icon">
                                                                <svg class="icon icon-done">
                                                                    <use xlink:href="../assets/img/sprite.svg#icon-done"></use>
                                                                </svg> 
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-container">
                                                    <input type="text" class="input required-el" data-mask="fio" disabled name="delivery-fio">
                                                    <span class="input-heading">
                                                        ФИО получателя
                                                    </span>
                                                </div>
                                                <div class="flex-wrap _space-between _mobile-delivery-wrap">
                                                    <div class="input-container _50width">
                                                        <input type="text" class="input required-el" data-mask="letters" disabled name="delivery-country">
                                                        <span class="input-heading">
                                                            Страна доставки
                                                        </span>
                                                    </div>
                                                    <div class="input-container _50width">
                                                        <input type="tel" class="input required-el" data-mask="index" disabled name="delivery-index">
                                                        <span class="input-heading">
                                                            Индекс
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex-wrap _space-between _mobile-delivery-wrap">
                                                    <div class="input-container _50width">
                                                        <input type="text" class="input" data-mask="letters" disabled name="delivery-region">
                                                        <span class="input-heading">
                                                            Регион
                                                        </span>
                                                    </div>
                                                    <div class="input-container _50width">
                                                        <input type="text" class="input required-el" data-mask="letters" disabled name="delivery-city">
                                                        <span class="input-heading">
                                                            Город
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="input-container">
                                                    <input type="text" class="input required-el" disabled name="delivery-street">
                                                    <span class="input-heading">
                                                        Улица
                                                    </span>
                                                </div>
                                                <div class="flex-wrap steps__flex-wrap">
                                                    <div class="input-container steps__small-input">
                                                        <input type="text" class="input required-el" data-mask="digits" disabled name="delivery-house">
                                                        <span class="input-heading">
                                                            Дом
                                                        </span>
                                                    </div>
                                                    <div class="input-container steps__small-input">
                                                        <input type="text" class="input" disabled name="delivery-korpus">
                                                        <span class="input-heading">
                                                            Корпус
                                                        </span>
                                                    </div>
                                                    <div class="input-container steps__small-input">
                                                        <input type="text" class="input" data-mask="digits" disabled name="delivery-office">
                                                        <span class="input-heading">
                                                            Кв/Офис
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="steps__content-block">
                                            <span class="steps__legend">
                                                Как вы узнали о курсах?
                                            </span>
                                            <div class="flex-wrap steps__flex-wrap _wrap-el">
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="from-friends">
                                                        <span class="checkbox__name _round">
                                                            От друзей
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="web">
                                                        <span class="checkbox__name _round">
                                                            В интернете
                                                        </span>
                                                    </label>
                                                </div>
    
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="spam">
                                                        <span class="checkbox__name _round">
                                                            Рассылка
                                                        </span>
                                                    </label>
                                                </div>
    
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="adv">
                                                        <span class="checkbox__name _round">
                                                            Реклама
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="etc">
                                                        <span class="checkbox__name _round">
                                                            Другое
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="steps__content-block">
                                            <span class="steps__legend">
                                                Курс рекомендован преподавателем НЛИ
                                            </span>
                                            <div class="input-container">
                                            <div class="select">
                                                <input type="text" class="select__input" name="teacher" value="">
                                                <div class="select__head">
                                                    <div class="select__val">Список преподавателей</div>
                                                    <svg class="icon icon-down select__head_arrow">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                                    </svg>
                                                </div>
                                                <div class="select__drop">
                                                    <div class="select__drop_scroll" data-simplebar>
                                                        <? for($i=0; $i<3; $i++) {?>
                                                            <div class="select__item" data-default="" data-value="Преподаватель<? echo $i ?>">
                                                                Преподаватель<? echo $i ?>
                                                            </div>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="steps__content-block">
                                            <span class="steps__legend">
                                                Выберите способ связи
                                            </span>
                                            <div class="flex-wrap steps__flex-wrap _wrap-el">
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="Telegram">
                                                        <span class="checkbox__name _round">
                                                            Telegram
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="Whats-up">
                                                        <span class="checkbox__name _round">
                                                            What`s up
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="_wrapping-el _33width">
                                                    <label class="checkbox__label steps__checkbox">
                                                        <input type="checkbox" class="checkbox visually-hidden" name="from-email">
                                                        <span class="checkbox__name _round">
                                                            Почта
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="steps__content-block">
                                            <span class="steps__legend">
                                                Комментарии
                                            </span>
                                            <div class="textarea-container">
                                                <textarea class="textarea" name="text" placeholder="Введите текст"></textarea>
                                            </div>
                                        </div>
                                        <div class="steps__agrees">
                                            <label class="checkbox__label steps__checkbox">
                                                <input type="checkbox" checked class="checkbox visually-hidden required required-el" name="agree-oferta">
                                                <span class="checkbox__name _square">
                                                    Я согласен с <a href="">договором оферты</a>
                                                </span>
                                            </label>
                                            <label class="checkbox__label steps__checkbox">
                                                <input type="checkbox" checked class="checkbox visually-hidden required required-el" name="agree-polozhenie">
                                                <span class="checkbox__name _square">
                                                    Я согласен с <a href="">положением</a>
                                                </span>
                                            </label>
                                        </div>
    
                                        <button class="button-reset button _transparent steps__button-change-step" data-next-step="3">
                                            Далее
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="steps__item" data-step="3">
                        <div class="steps__preloader" style="display: none;">
                            <svg class="steps__preloader-logo" width="106" height="99" viewBox="0 0 106 99" id="logo-circle3" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <form action="test.php" class="validate form" name="reg-course-step3" enctype="multipart/form-data">
                            <div class="steps__head">
                                <div class="steps__icon">
                                    <svg class="icon icon-doc iconHide">
                                        <use xlink:href="../assets/img/sprite.svg#icon-doc"></use>
                                    </svg>
                                    <svg class="icon icon-done iconDone hidden">
                                        <use xlink:href="../assets/img/sprite.svg#icon-done"></use>
                                    </svg>   
                                </div>
                                <div class="steps__info">
                                    <div class="steps__heading">
                                        Оформление документов, оплата, доставка
                                    </div>
                                    <span class="steps__step-count">
                                        Шаг 3
                                    </span>
                                </div>
                                <svg class="icon steps__icon-down icon-down">
                                    <use xlink:href="../assets/img/sprite.svg#icon-down"></use>
                                </svg> 
                            </div>
                            <div class="steps__body" style="display: none;">
                                <div class="steps__content">
                                    <div class="steps__warning _error">
                                        <p class="_text">
                                            Вам необходимо заполнить данные из шага 2
                                        </p>
                                    </div>
                                    <!-- step-is-closed -->
                                    <div class="step-is-closed">
                                        <p class="steps__heading-text">
                                            Для отправки формы, необходимо загрузить все документы из списка, отмеченные знаком звездочка
                                        </p>
                                        
                                        <div class="flex-wrap _space-between steps__file-flex-wrap">
                                            <span class="steps__legend _file-legend">
                                                Личное фото*
                                            </span>
                                            <span class="steps__small-info">
                                                Требования к фото
                                            </span>
                                        </div>
                                        <div class="steps__file-block">
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="personal-foto" class="input-file visually-hidden required">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Походят изображения JPEG, PNG, объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <span class="steps__legend _file-legend">
                                                Копия паспорта*
                                            </span>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" multiple name="copy-passport" class="input-file visually-hidden required">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Походят изображения JPEG, PNG, объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <span class="steps__legend _file-legend">
                                                Копия документа об образовании (диплом, справка, если ранее не присылали)
                                            </span>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" multiple name="copy-diplom" class="input-file visually-hidden">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Походят изображения JPEG, PNG, объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <span class="steps__legend _file-legend">
                                                Документ о смене ФИО (при наличии)
                                            </span>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" multiple name="copy-change-name" class="input-file visually-hidden">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Походят изображения JPEG, PNG, объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="steps__file-block">
                                            <p class="steps__heading-text">
                                                Вам необходимо скачать документы, ознакомиться и&nbsp;подписать. После&nbsp;подписания, вам необходимо их&nbsp;загрузить в&nbsp;окно ниже
                                            </p>
                                            <a href="/local/assets/img/test.docx" download class="flex-wrap _space-between _flex-start steps__file-flex-wrap steps__doc-dwnld-link">
                                                <span class="steps__legend _file-legend">
                                                    Договор на оказание образовательных услуг.docx*
                                                </span>
                                                <svg class="icon steps__icon-dwnld">
                                                    <use xlink:href="../assets/img/sprite.svg#dwnld"></use>
                                                </svg>
                                            </a>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="contract" class="input-file visually-hidden required">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Файл объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <a href="/local/assets/img/test.docx" download class="flex-wrap _space-between _flex-start steps__file-flex-wrap steps__doc-dwnld-link">
                                                <span class="steps__legend _file-legend">
                                                    Заявление НЛИ на курс.docx*
                                                </span>
                                                <svg class="icon steps__icon-dwnld">
                                                    <use xlink:href="../assets/img/sprite.svg#dwnld"></use>
                                                </svg>
                                            </a>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="nli-application" class="input-file visually-hidden required">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Файл объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <a href="/local/assets/img/test.docx" download class="flex-wrap _space-between _flex-start steps__file-flex-wrap steps__doc-dwnld-link">
                                                <span class="steps__legend _file-legend">
                                                    Доп.соглашение Учебный договор 2021.doc
                                                </span>
                                                <svg class="icon steps__icon-dwnld">
                                                    <use xlink:href="../assets/img/sprite.svg#dwnld"></use>
                                                </svg>
                                            </a>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="additional-agreement" class="input-file visually-hidden">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Файл объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <a href="/local/assets/img/test.docx" download class="flex-wrap _space-between _flex-start steps__file-flex-wrap steps__doc-dwnld-link">
                                                <span class="steps__legend _file-legend">
                                                    Согласие об использовании персональных данныхи изображения гражданина.docx
                                                </span>
                                                <svg class="icon steps__icon-dwnld">
                                                    <use xlink:href="../assets/img/sprite.svg#dwnld"></use>
                                                </svg>
                                            </a>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="agreement-policy" class="input-file visually-hidden required">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Файл объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <a href="/local/assets/img/test.docx" download class="flex-wrap _space-between _flex-start steps__file-flex-wrap steps__doc-dwnld-link">
                                                <span class="steps__legend _file-legend">
                                                    Акт выполненных работ
                                                </span>
                                                <svg class="icon steps__icon-dwnld">
                                                    <use xlink:href="../assets/img/sprite.svg#dwnld"></use>
                                                </svg>
                                            </a>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="certificate-of-completion" class="input-file visually-hidden">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Файл объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <div class="flex-wrap _space-between _flex-start steps__file-flex-wrap">
                                                <span class="steps__legend _file-legend">
                                                    Чек об оплате (если оплата была по квитанции)
                                                </span>
                                            </div>
                                            <label class="input-file-container file steps__file dropFile">
                                                <input type="file" name="cheque" class="input-file visually-hidden">
                                                <span class="file__empty flex-wrap file__flex-wrap">
                                                    <svg class="icon file__icon-file">
                                                        <use xlink:href="../assets/img/sprite.svg#icon-file"></use>
                                                    </svg>

                                                    <span class="file__text-info">
                                                        <span class="file__legend">
                                                            Перетащите сюда или <span>загрузите файл</span>
                                                        </span>
                                                        <span class="file__small-legend">
                                                            Файл объемом не более 2 Мб
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="steps__file-block">
                                            <span class="steps__legend">
                                                Комментарии
                                            </span>
                                            <div class="textarea-container">
                                                <textarea class="textarea" name="text" placeholder="Введите текст"></textarea>
                                            </div>
                                        </div>

                                        <button class="button-reset button steps__button-change-step _mt0">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="personal-cabinet-container2__col course-registration__col">
                <div class="course-registration__side-block side-block">
                    <span class="side-block__heading">
                        Подтверждение калификации «В-basic»
                    </span>

                    <div class="side-block__row-wrap">
                        
                        <div class="side-block__row">
                            <span class="side-block__legend">
                                Стоиомсть
                            </span>
                            <div class="side-block__info">
                                Бесплатно
                            </div>
                        </div>
                    </div>
                        
                    <div class="side-block__total-row">
                        <div class="side-block__summ">
                            Итого
                        </div>
                        <div class="side-block__summ-price_normal">
                            0 ₽
                        </div>
                    </div>

                    <button class="button-reset button side-block__pay-button _disabled" data-popup="modalCoursePayment">
                        Оплатить
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="../assets/css/components/personal-cabinet.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/side-block.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/course-registration.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/reg-steps.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/may-be-interested.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/payment-modal.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/course-confirmation.css?v=0.0.0.1">
<script defer src="../assets/js/components/course-registration.js?v=0.0.0.2"></script>

<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>