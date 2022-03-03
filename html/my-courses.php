<?
    define("PERSONAL_CABINET", "Y");
    define("PAGE_TITLE", "Мои курсы");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<section class="my-courses tabs">
    <div class="personal-cabinet-container my-courses__container">
        <? include $_SERVER['DOCUMENT_ROOT'].'/local/html/personal-cabinet-breadcrumbs.php'?>

        <div class="personal-cabinet__title-wrap my-courses__title-wrap flex-wrap">
            <h1 class="personal-cabinet__title">
                Мои курсы
            </h1>

            <div class="personal-cabinet__nav">
                <span class="_background-line"></span>
                <a href="" class="personal-cabinet__nav-item _active" data-show="application">Заявки</a>
                <a href="" class="personal-cabinet__nav-item" data-show="archive">Архив</a>
            </div>
        </div>
        <!-- application -->
        <div class="personal-cabinet__table table" data-item="application">
            <div class="table__head">
                <div class="table__row _head-row">
                    <div class="table__item">
                        <span class="table__heading">
                            Курс
                        </span>
                    </div>
                    <div class="table__item _place">
                        <span class="table__heading">
                            Место
                        </span>
                    </div>
                    <div class="table__item _time">
                        <span class="table__heading">
                            Сроки проведения
                        </span>
                    </div>
                    <div class="table__item _price">
                        <span class="table__heading">
                            Стоимость
                        </span>
                    </div>
                    <div class="table__item _status">
                        <span class="table__heading">
                            Статус
                        </span>
                    </div>
                </div>
            </div>
            <div class="table__body">
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Курс категории “С” по горнолыжному спорту. Инструктор начального уровня
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Миасс, ГЛЦ Солнечная долина
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _price">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusOK">
                            Заявка принята
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton">
                            Оформить
                        </a>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Курс категории «B-basic» по горнолыжному спорту
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Красногорск, ВГК «СНЕЖ.КОМ»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _price">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusWait">
                            Ожидает оплаты
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton">
                            Оплатить
                        </a>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Техника катания во фрирайде: сноуборд
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend _empty">
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend _empty">
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _empty">
                        </span>
                        <a href="" class="table__legend _priceAdditional _empty">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusRecruitment" data-popup="modalRecruitment">
                            Группа набирается
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton _empty">
                            Оформить
                        </a>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Курс категории «B-basic» по горнолыжному спорту
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Республика Алтай, ВК «Манжерок»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _price">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusCancel">
                            Отмена
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton _empty">
                            Оформить
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- application end -->

        <!-- archive -->
        <div class="personal-cabinet__table table" data-item="archive" style="display: none">
            <div class="table__head">
                <div class="table__row _head-row">
                    <div class="table__item">
                        <span class="table__heading">
                            Курс
                        </span>
                    </div>
                    <div class="table__item _place">
                        <span class="table__heading">
                            Место
                        </span>
                    </div>
                    <div class="table__item _time">
                        <span class="table__heading">
                            Сроки проведения
                        </span>
                    </div>
                    <div class="table__item _price">
                        <span class="table__heading">
                            Стоимость
                        </span>
                    </div>
                    <div class="table__item _status">
                        <span class="table__heading">
                            Статус
                        </span>
                    </div>
                </div>
            </div>
            <div class="table__body">
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Курс категории “С” по горнолыжному спорту. Инструктор начального уровня
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Миасс, ГЛЦ Солнечная долина
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _price">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusAllDone">
                            Оформлен
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="my-course-formalized.php" class="button table__buton _transparent">
                            Подробнее
                        </a>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Курс категории «B-basic» по горнолыжному спорту
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Красногорск, ВГК «СНЕЖ.КОМ»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _price">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusSuccess">
                            Успешно сдан   
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton _transparent">
                            Подробнее
                        </a>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Техника катания во фрирайде: сноуборд
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Красногорск, ВГК «СНЕЖ.КОМ»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusFailed" data-popup="modalFailedCourse">
                            Не сдан
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton">
                            Пересдача
                        </a>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Курс</span>
                        <span class="table__legend _strong">
                            Курс категории «B-basic» по горнолыжному спорту
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Место</span>
                        <span class="table__legend">
                            Республика Алтай, ВК «Манжерок»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Сроки проведения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Стоимость</span>
                        <span class="table__legend _price">
                            32 600 ₽
                        </span>
                        <a href="" class="table__legend _priceAdditional">Доп. расходы</a>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusCancel">
                            Отмена
                            <svg class="icon icon-question">
                                <use xlink:href="../assets/img/sprite.svg#question"></use>
                            </svg>    
                        </span>
                    </div>
                    <div class="table__item">
                        <a href="" class="button table__buton _empty">
                            Оформить
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- archive end -->
    </div>
</section>

<link rel="stylesheet" href="../assets/css/components/personal-cabinet.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/personal-cabinet-table.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/my-courses.css?v=0.0.0.1">
<script defer src="../assets/js/components/personal-cabinet-nav.js?v=0.0.0.1"></script>


<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>