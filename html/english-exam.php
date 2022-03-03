<?
    define("PERSONAL_CABINET", "Y");
    define("PAGE_TITLE", "Оформление курса");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>

<section class="course-registration course-confirmation exam-page">
    <div class="personal-cabinet-container2 course-registration__container">
        <? include $_SERVER['DOCUMENT_ROOT'].'/local/html/personal-cabinet-breadcrumbs.php'?>
    
        <h1 class="personal-cabinet__title course-registration__title course-confirmation__title">
            Экзамен по английскому языку
        </h1>
        <form action="test.php" class="validate form" name="exam-form">
            <div class="flex-wrap personal-cabinet__flex-container course-registration__flex-container">
                <div class="personal-cabinet-container2__col course-registration__col">
                    <div class="steps__body exam-page__steps-body">
                        <div class="steps__content">
                            <div class="steps__content-block">
                                <span class="steps__legend">
                                    Ваши данные*
                                </span>

                                <div class="input-container">
                                    <input type="text" class="input js-input required" data-mask="fio" name="second-name">
                                    <span class="input-heading">
                                        Фамилия
                                    </span>
                                </div>
                                <div class="input-container">
                                    <input type="text" class="input js-input required" data-mask="fio" name="first-name">
                                    <span class="input-heading">
                                        Имя
                                    </span>
                                </div>
                                <div class="input-container">
                                    <input type="text" class="input js-input required" data-mask="fio" name="third-name">
                                    <span class="input-heading">
                                        Отчество
                                    </span>
                                </div>
                                <div class="flex-wrap steps__flex-wrap _magrin-bottom">
                                    <div class="input-container steps__small-input">
                                        <input type="tel" class="input js-input required" data-mask="phone" name="phone">
                                        <span class="input-heading">
                                            Телефон
                                        </span>
                                    </div>
                                    <div class="input-container _mobile-mb18">
                                        <input type="text" class="input js-input required" data-mask="email" name="email">
                                        <span class="input-heading">
                                            Email
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="steps__content-block">
                                <span class="steps__legend">
                                    Выберите вид спорта и категорию
                                </span>
                                <div class="input-container">
                                    <div class="select">
                                        <input type="text" class="select__input required js-input" name="vid-sporta" value="">
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
                                        <input type="text" class="select__input required js-input" name="kategoria-sporta" value="">
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
                            </div>

                            <div class="steps__agrees">
                                <label class="checkbox__label steps__checkbox">
                                    <input type="checkbox" checked class="checkbox visually-hidden required" name="agree-policy">
                                    <span class="checkbox__name _square">
                                        Я согласен с <a href="">политикой конфиденциальности</a>
                                    </span>
                                </label>
                                <label class="checkbox__label steps__checkbox">
                                    <input type="checkbox" checked class="checkbox visually-hidden required" name="agree-oferta">
                                    <span class="checkbox__name _square">
                                        Я согласен с <a href="">договором оферты</a>
                                    </span>
                                </label>
                                <label class="checkbox__label steps__checkbox">
                                    <input type="checkbox" checked class="checkbox visually-hidden required" name="agree-polozhenie">
                                    <span class="checkbox__name _square">
                                        Я согласен с <a href="">положением</a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="personal-cabinet-container2__col course-registration__col">
                    <div class="course-registration__side-block side-block">
                        <span class="side-block__heading">
                            Экзамен по английскому языку
                        </span>

                        <div class="side-block__row-wrap">
                            
                            <div class="side-block__row">
                                <span class="side-block__legend">
                                    Стоимость
                                </span>
                                <div class="side-block__info">
                                    6 000 ₽
                                </div>
                            </div>
                        </div>
                            
                        <div class="side-block__total-row">
                            <div class="side-block__summ">
                                Итого
                            </div>
                            <div class="side-block__summ-price_normal">
                                6 000 ₽
                            </div>
                        </div>

                        <button class="button-reset button side-block__pay-button" disabled="true">
                            Оплатить
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<link rel="stylesheet" href="../assets/css/components/personal-cabinet.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/side-block.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/course-registration.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/reg-steps.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/payment-modal.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/course-confirmation.css?v=0.0.0.1">
<link rel="stylesheet" href="../assets/css/components/exam-page.css?v=0.0.0.1">
<script src="/local/assets/js/components/exam-eng.js?v=0.0.0.2"></script>

<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>