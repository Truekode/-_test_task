<?
    define("PERSONAL_CABINET", "Y");
    define("PAGE_TITLE", "Мои курсы");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<section class="my-courses tabs confirmation-of-qualifications course-fee">
    <div class="personal-cabinet-container my-courses__container">
        <?
            include $_SERVER['DOCUMENT_ROOT'].'/local/html/personal-cabinet-breadcrumbs.php'
        ?>

        <div class="personal-cabinet__title-wrap my-courses__title-wrap flex-wrap">
            <h1 class="personal-cabinet__title">
                Ежегодный взнос
            </h1>

            <div class="personal-cabinet__nav">
                <span class="_background-line"></span>
                <a href="" class="personal-cabinet__nav-item _active" data-show="fee">Действующие взносы</a>
                <a href="" class="personal-cabinet__nav-item" data-show="application">Заявки</a>
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
                        У вас закочился период действия ежегодного взноса категории «B-basic»
                    </span>
                    <span class="confirmation-of-qualifications__warning-heading-time">
                        Срок истек: 10.10.21
                    </span>
                </div>
            </div>
            <a href="http://isiarussia.artrockets.ru/local/html/annual-fee-course.php" class="confirmation-of-qualifications__warning-link button">Сделать взнос</a>
        </div>

        <!-- fee -->
        <div class="personal-cabinet__table table course-fee__table" data-item="fee">
            <div class="table__head">
                <div class="table__row _head-row">
                    <div class="table__item">
                        <span class="table__heading">
                            № удостоверения
                        </span>
                    </div>
                    <div class="table__item _place">
                        <span class="table__heading">
                            Наименование
                        </span>
                    </div>
                    <div class="table__item _time">
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
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend _strong">
                            146
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Наименование</span>
                        <span class="table__legend">
                        Инструктор начального уровня категории “С” по горнолыжному спорту
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
                            активен  
                        </span>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend _strong">
                            32
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Наименование</span>
                        <span class="table__legend">
                            Инструктор категории «B-basic» по сноуборду
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
                            Неактивен
                        </span>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend _strong">
                            32
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Наименование</span>
                        <span class="table__legend">
                            Инструктор категории «B-basic» по сноуборду
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
        <!-- fee -->

        <!-- application -->
        <div class="personal-cabinet__table table course-fee__table" data-item="application" style="display: none">
            <div class="table__head">
                <div class="table__row _head-row">
                    <div class="table__item">
                        <span class="table__heading">
                            № удостоверения
                        </span>
                    </div>
                    <div class="table__item _place">
                        <span class="table__heading">
                            Наименование
                        </span>
                    </div>
                    <div class="table__item _time">
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
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend _strong">
                            146
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Наименование</span>
                        <span class="table__legend">
                        Инструктор начального уровня категории “С” по горнолыжному спорту
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
                            активен  
                        </span>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend _strong">
                            32
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Наименование</span>
                        <span class="table__legend">
                            Инструктор категории «B-basic» по сноуборду
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
                            Неактивен
                        </span>
                    </div>
                </div>
                <div class="table__row">
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">№ удостоверения</span>
                        <span class="table__legend _strong">
                            32
                        </span>
                    </div>
                    <div class="table__item">
                        <span class="table__heading desktop-hidden">Наименование</span>
                        <span class="table__legend">
                            Инструктор категории «B-basic» по сноуборду
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
    </div>
</section>

<link rel="stylesheet" href="../assets/css/components/personal-cabinet.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/personal-cabinet-table.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/my-courses.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/confirmation-of-qualifications.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/course-fee.css?v=0.0.0.1">
<script defer src="../assets/js/components/personal-cabinet-nav.js?v=0.0.0.1"></script>
<script defer src="../assets/js/components/confirmation-of-qualifications.js?v=0.0.0.1"></script>


<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>