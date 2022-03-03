<? 
    define("PAGE_TITLE", "Личный кабинет");
    include $_SERVER['DOCUMENT_ROOT'].'/local/html/header.php'
?>
    <section class="personal-cabinet">
        <div class="personal-cabinet__container flex-wrap site-container2">
            <div class="personal-cabinet__client">
                <div class="personal-cabinet__client-logo"><img class="personal-cabinet__client-logo-img"
                        src="../assets/img/client-logo.png" alt="Мой аватар"></div>
                <div class="personal-cabinet__client-info">
                    <div class="personal-cabinet__client-name"> Самойлов Даниил Георгиевич</div>
                    <div class="_wrap">
                        <button class="button-reset personal-cabinet__change-info"> Изменить данные</button>
                    </div>
                    <span class="personal-cabinet__legend"> E-mail</span>
                    <span class="personal-cabinet__e-mail"> samoylovdaniil@gmail.com</span>
                    <span class="personal-cabinet__legend"> Телефон</span>
                    <span class="personal-cabinet__tel"> 8 987 654 32 10</span>
                    <button class="button-reset personal-cabinet__exit">
                        <svg class="icon icon-exit personal-cabinet__exit-icon">
                            <use xlink:href="../assets/img/sprite.svg#exit"></use>
                        </svg> Выйти
                    </button>
                </div>
            </div>
            <div class="personal-cabinet__menu">
                <div class="personal-cabinet__menu-heading"> Личный кабинет</div>
                <div class="personal-cabinet__menu-list">
                    <div class="flex-wrap personal-cabinet__grid"><a class="personal-cabinet__menu-item cabinet-box"
                            href="">
                            <svg class="icon icon-arrow-red-top">
                                <use xlink:href="../assets/img/sprite.svg#arrow-red-top"></use>
                            </svg>
                            <div class="cabinet-box__heading">
                                <svg class="icon icon-cabinet-hat cabinet-box__heading-icon">
                                    <use xlink:href="../assets/img/sprite.svg#cabinet-hat"></use>
                                </svg> Мои курсы<span class="cabinet-box__course-quant"> 3</span>
                            </div>
                            <div class="cabinet-box__applications">
                                <div class="_active"><span class="cabinet-box__applications-legend"> Активный
                                        заявки</span><span class="cabinet-box__applications-quant"> 3</span></div>
                                <div class="_archive"><span class="cabinet-box__applications-legend"> Архив
                                        заявок</span><span class="cabinet-box__applications-quant"> 10</span></div>
                            </div>
                        </a><a class="personal-cabinet__menu-item cabinet-box" href="">
                            <svg class="icon icon-arrow-red-top">
                                <use xlink:href="../assets/img/sprite.svg#arrow-red-top"></use>
                            </svg>
                            <div class="cabinet-box__heading">
                                <svg class="icon icon-cabinet-shop cabinet-box__heading-icon">
                                    <use xlink:href="../assets/img/sprite.svg#cabinet-shop"></use>
                                </svg> Магазин
                            </div>
                            <div class="cabinet-box__applications">
                                <div class="_active"><span class="cabinet-box__applications-legend"> Активный
                                        заявки</span><span class="cabinet-box__applications-quant"> 3</span></div>
                                <div class="_archive"><span class="cabinet-box__applications-legend"> Архив
                                        заявок</span><span class="cabinet-box__applications-quant"> 10</span></div>
                            </div>
                        </a><a class="personal-cabinet__menu-item cabinet-box" href="">
                            <svg class="icon icon-arrow-red-top">
                                <use xlink:href="../assets/img/sprite.svg#arrow-red-top"></use>
                            </svg>
                            <div class="cabinet-box__heading">
                                <svg class="icon icon-exchange cabinet-box__heading-icon">
                                    <use xlink:href="../assets/img/sprite.svg#exchange"></use>
                                </svg> Пересдача курса
                            </div><span class="cabinet-box__warning-course"> Вам необходимо пересдать курс</span><span
                                class="cabinet-box__course-text"> «Инструктор начального уровня обучения курс категории
                                «С»</span>
                            <div class="cabinet-box__application-status"><span class="_name"> Заявка на
                                    пересдачу</span><span class="_status"> Обрабатывается</span></div>
                        </a><a class="personal-cabinet__menu-item cabinet-box" href="">
                            <svg class="icon icon-arrow-red-top">
                                <use xlink:href="../assets/img/sprite.svg#arrow-red-top"></use>
                            </svg>
                            <div class="cabinet-box__heading">
                                <svg class="icon icon-quality cabinet-box__heading-icon">
                                    <use xlink:href="../assets/img/sprite.svg#quality"></use>
                                </svg> Квалификации
                            </div><span class="cabinet-box__course-text"> Подтверждение квалификации занимает&nbsp;2-3
                                дня</span>
                            <div class="cabinet-box__application-status">
                                <span class="_name">Заявка на подтверждение</span>
                                <span class="_status"> Обрабатывается</span>
                            </div>
                        </a><a class="personal-cabinet__menu-item cabinet-box _small" href="">
                            <svg class="icon icon-id-card _small-icon">
                                <use xlink:href="../assets/img/sprite.svg#id-card"></use>
                            </svg>
                            <div class="_small-heading"> Список удостоверений</div>
                        </a><a class="personal-cabinet__menu-item cabinet-box _small" href="">
                            <svg class="icon icon-goggles _small-icon">
                                <use xlink:href="../assets/img/sprite.svg#goggles"></use>
                            </svg>
                            <div class="_small-heading"> Ежегодный<br> взнос</div>
                        </a><a class="personal-cabinet__menu-item cabinet-box _small" href="">
                            <svg class="icon icon-flag-uk _small-icon">
                                <use xlink:href="../assets/img/sprite.svg#flag-uk2"></use>
                            </svg>
                            <div class="_small-heading"> Экзамен по английскому языку</div>
                        </a></div>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="/local/assets/css/components/personal-cabinet.css?v=0.0.1.4">
    <link rel="stylesheet" href="/local/assets/css/components/personal-cabinet-client-info.css?v=0.0.1.5">
    <link rel="stylesheet" href="/local/assets/css/components/personal-cabinet-client-menu.css?v=0.0.1.2">
    <link rel="stylesheet" href="/local/assets/css/components/personal-cabinet-box.css?v=0.0.1.4">

<? include $_SERVER['DOCUMENT_ROOT'].'/local/html/footer-personal-cab.php'?>