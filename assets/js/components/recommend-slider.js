document.addEventListener("DOMContentLoaded", function(event) {
    $(".recommend-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: false,
        appendArrows: ".recommend-slider__nav",
        prevArrow: "<svg class='icon icon-prev-arrow prev-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#prevArrow'></use></svg>",
        nextArrow: "<svg class='icon icon-next-arrow next-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#nextArrow'></use></svg>"
    });

    if(window.matchMedia("(max-width: 1200px)").matches) {
        $(".recommend-slider").slick("unslick");

        $(".recommend-slider-mobile").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            infinite: false,
            appendArrows: ".recommend-slider__nav",
            prevArrow: "<svg class='icon icon-prev-arrow prev-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#prevArrow'></use></svg>",
            nextArrow: "<svg class='icon icon-next-arrow next-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#nextArrow'></use></svg>",
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                    }
                },
            ]
        });
    }

});
