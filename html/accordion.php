<ul class="accordion">
    <? foreach ($accordion_arr as $item) {?>
        <li class="accordion__item">
            <div class="accordion__head">
                <h3 class="accordion__heading">
                    <? echo $item; ?>
                </h3>
                <button class="button-reset accordion__button" aria-label="Открыть"></button>
            </div>
            <div class="accordion__content">
                <p>
                    Главное правило&nbsp;&mdash; обучение начинается с&nbsp;азов&nbsp;&mdash; подготовки инструкторов начального уровня&nbsp;&mdash; и&nbsp;завершается подготовкой инструкторов-экспертов по&nbsp;зимним и&nbsp;летним видам спорта. Поэтому любой желающий стать инструктором вне зависимости от&nbsp;своей технической и&nbsp;профессиональной подготовки сначала должен пройти курс категории &laquo;С&raquo;, потом курс категории &laquo;В&raquo; и&nbsp;только после этого&nbsp;&mdash; курс категории &laquo;А&raquo;. Здесь работает такой&nbsp;же принцип, как и&nbsp;в&nbsp;любом учебном заведении (нельзя сразу поступить в&nbsp;5-й класс, не&nbsp;окончив младшую школу). Главные принципы профессиональной подготовки инструкторов&nbsp;&mdash; это системность и&nbsp;последовательность. Подробнее о&nbsp;правилах прохождения курсов можно прочитать <a href="/">здесь.</a>
                </p>
            </div>
        </li>
    <?}?>
</ul>
<link rel="stylesheet" href="../assets/css/components/accordion.css?v=0.0.0.1">
<script defer src="../assets/js/components/accordion.js?v=0.0.0.2"></script>