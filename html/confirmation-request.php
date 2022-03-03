<?
    define("PERSONAL_CABINET", "Y");
    define("PAGE_TITLE", "Оформление курса");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<section class="formalized-course">
    <div class="personal-cabinet-container2">
        <? 
            define("LINK", "http://isiarussia.artrockets.ru/local/html/confirmation-of-qualifications.php");
            include $_SERVER['DOCUMENT_ROOT'].'/local/html/personal-cabinet-breadcrumbs.php'
        ?>
        <div class="flex-wrap personal-cabinet__flex-container">
            <div class="personal-cabinet-container2__col">
                <span class="formalized-cours__intro">
                    Заявка принята
                </span>
                <h1 class="personal-cabinet__title formalized-course__title">
                    Подтверждение квалификации «В-basic»
                </h1>

                <div class="formalized-cours_mobile">
                    <span class="formalized-cours__intro">
                        Место
                    </span>
    
                    <div class="formalized-cours__place">
                        Миасс, ГЛЦ Солнечная долина
                    </div>
    
                    <span class="formalized-cours__intro">
                        Сроки проведения
                    </span>
                    <div class="formalized-cours__time">
                        03.09. 21 — 10.10.21
                    </div>
                </div>

                <div class="formalized-course__block">
                    <span class="formalized-course__legend">
                        Общая информация
                    </span>
                    <p>
                        Вам будет направлен материал теоретического модуля для самостоятельного изучения — лекции или доступ на дистанционную платформу. Доступ на дистанционную платформу будет открыт до 7 дня курса. Рекомендуем изучить теоретическую часть до начала курса. 
                    </p>
                    <p>
                        За несколько дней до начала курса Вы получите точное расписание занятий, информацию о времени и месте встречи с лектором, а также номер его телефона.
                    </p>
                </div>
            </div>
            <div class="personal-cabinet-container2__col">
                <div class="formalized-cours_desctop">
                    <span class="formalized-cours__intro">
                        Место
                    </span>
    
                    <div class="formalized-cours__place">
                        Миасс, ГЛЦ Солнечная долина
                    </div>
    
                    <span class="formalized-cours__intro">
                        Сроки проведения
                    </span>
                    <div class="formalized-cours__time">
                        03.09. 21 — 10.10.21
                    </div>
                </div>

                <div class="formalized-cours__side-block side-block">
                    <span class="side-block__small-heading">
                        Подсчет стоимости
                    </span>

                    <div class="side-block__row-wrap">
                        <div class="side-block__row">
                            <span class="side-block__legend">
                                Стоимость курса
                            </span>
                            <div class="side-block__info">
                                0 ₽
                            </div>
                        </div>
                        <div class="side-block__row">
                            <span class="side-block__legend">
                                Доставка
                            </span>
                            <div class="side-block__info">
                                + 800 ₽
                            </div>
                        </div>
                    </div>


                    <div class="side-block__total-row">
                        <div class="side-block__summ">
                            Итого
                        </div>
                        <div class="side-block__summ-price_normal">
                            32 800 ₽
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="../assets/css/components/personal-cabinet.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/side-block.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/formalized-course.css?v=0.0.0.1">
<script defer src="../assets/js/components/personal-cabinet-nav.js?v=0.0.0.1"></script>


<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>