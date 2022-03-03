<section class="gallery <? if (defined("MOD") ) { echo MOD ; } ?>" data-anim-fade>
    <div class="site-container2">
        <span class="section-name gallery__section-name">
            Галерея
        </span>
        <h2 class="second-title gallery__second-title">
            Взгляните, как проходят наши курсы
        </h2>
        <div class="main-grid-content">
            <div class="main-grid-content__block">
                <div class="slider-arrow-navigation gallery__nav">
                </div>
            </div>
            <div class="main-grid-content__block">
                <div class="gallery__slider _desctop">
                    <? for($x=0; $x<2; $x++) {?>
                        <div class="gallery__slider-item grid">
                            <? for($i=0; $i<6; $i++) {?>
                                <a href="/local/assets/img/gallery/img<?echo $i;?>.jpg" data-fancybox="gallery" class="gallery__sldier-img">
                                    <img src="/local/assets/img/gallery/img<?echo $i;?>.jpg" alt="Наша галлерея">
                                </a>
                            <? } ?>
                        </div>
                    <? } ?>
                </div>
                <!-- мобилка -->
                <div class="gallery__slider _mobile">
                    <div class="gallery__slider-item grid">
                        <? for($t=0; $t<6; $t++) {?>
                            <a href="/local/assets/img/gallery/img<?echo $t;?>.jpg" data-fancybox="gallery" class="gallery__sldier-img">
                                <img src="/local/assets/img/gallery/img<?echo $t;?>.jpg" alt="Наша галлерея">
                            </a>
                        <? } ?>
                    </div>
                </div>
                <!-- мобилка -->
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="../assets/css/components/gallery.css?v=0.0.0.1">
<script defer src="../assets/js/components/gallery.js?v=0.0.0.1"></script>