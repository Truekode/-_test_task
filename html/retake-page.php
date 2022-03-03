<?
    define("PERSONAL_CABINET", "Y");
    define("PAGE_TITLE", "Мои курсы");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<section class="my-courses tabs confirmation-of-qualifications course-retake">
    <div class="personal-cabinet-container my-courses__container">
        <? include $_SERVER['DOCUMENT_ROOT'].'/local/html/personal-cabinet-breadcrumbs.php'?>

        <div class="personal-cabinet__title-wrap my-courses__title-wrap flex-wrap">
            <h1 class="personal-cabinet__title">
                Пересдача
            </h1>

            <div class="personal-cabinet__nav">
                <span class="_background-line"></span>
                <a href="" class="personal-cabinet__nav-item _active" data-show="application">Заявки</a>
                <a href="" class="personal-cabinet__nav-item" data-show="archive">Архив</a>
            </div>
        </div>

        <div class="confirmation-of-qualifications__warning">
            <button class="button-reset confirmation-of-qualifications__warning-close">
                <span></span><span></span>
            </button>

            <div class="confirmation-of-qualifications__warning-info">
                <svg class="icon confirmation-of-qualifications__warning-info-icon">
                    <use xlink:href="/local/assets/img/sprite.svg#warn"></use>
                </svg>
                <div class="confirmation-of-qualifications__warning-info-text">
                    <span class="confirmation-of-qualifications__warning-heading">
                        Вы не сдали курс Инструктор категории «B-basic» по сноуборду
                    </span>
                    <span class="confirmation-of-qualifications__warning-heading-time">
                        Сроки проведения: 03.09.21 — 10.10.21
                    </span>
                </div>
            </div>
            <a href="http://isiarussia.artrockets.ru/local/html/retake-course.php" class="confirmation-of-qualifications__warning-link button">Пройти пересдачу</a>
        </div>

        <!-- application -->
        <div class="personal-cabinet__table table course-retake__table" data-item="application">
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
                        <span class="table__heading desktop-hidden">Имя</span>
                        <span class="table__legend _strong">
                            Курс категории “С” по горнолыжному спорту. Инструктор начального уровня
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Вид</span>
                        <span class="table__legend">
                            Миасс, ГЛЦ Солнечная долина
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusAllDone">
                            курс Сдан   
                        </span>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Имя</span>
                        <span class="table__legend _strong">
                            Курс категории «B-basic» по горнолыжному спорту
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Вид</span>
                        <span class="table__legend">
                            Республика Алтай, ВК «Манжерок»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusCancel">
                            курс Не пройден 
                        </span>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Имя</span>
                        <span class="table__legend _strong">
                            Курс категории «B-basic» по горнолыжному спорту
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Вид</span>
                        <span class="table__legend">
                            Красногорск, ВГК «СНЕЖ.КОМ»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend">
                            03.09.21 — 10.10.21
                        </span>
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
                            Наименование
                        </span>
                    </div>
                    <div class="table__item _place">
                        <span class="table__heading">
                            Вид спорта
                        </span>
                    </div>
                    <div class="table__item _time">
                        <span class="table__heading">
                            № удостоверения
                        </span>
                    </div>
                    <div class="table__item _price">
                        <span class="table__heading">
                            Действителен до
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
                        <span class="table__heading desktop-hidden">Имя</span>
                        <span class="table__legend _strong">
                            “С”
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Вид</span>
                        <span class="table__legend">
                            Горнолыжный спорт
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend">
                            46
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Действителен до</span>
                        <span class="table__legend">
                            25.06.2028
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusAllDone">
                            Действителен  
                        </span>
                    </div>
                    <div class="table__item">
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Имя</span>
                        <span class="table__legend _strong">
                            Детский инструктор
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Вид</span>
                        <span class="table__legend">
                            Сноуборд
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend">
                            175
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Действителен до</span>
                        <span class="table__legend">
                            13.10.2024
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Статус</span>
                        <span class="table__legend _status _statusCancel">
                            недейсвителен  
                        </span>
                    </div>
                    <div class="table__item">
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Имя</span>
                        <span class="table__legend _strong">
                            Инструктор категории  «В-basic»
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Вид</span>
                        <span class="table__legend">
                            Горнолыжный спорт
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend">
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Действителен до</span>
                        <span class="table__legend">
                        </span>
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
                        <a href="http://isiarussia.artrockets.ru/local/html/confirmation-request.php" class="button table__buton">
                            Подробнее
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
<link rel="stylesheet" href="../assets/css/components/confirmation-of-qualifications.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/course-retake.css?v=0.0.0.1">
<script defer src="../assets/js/components/personal-cabinet-nav.js?v=0.0.0.1"></script>
<script defer src="../assets/js/components/confirmation-of-qualifications.js?v=0.0.0.1"></script>


<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>