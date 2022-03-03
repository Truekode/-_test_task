document.addEventListener("DOMContentLoaded", function(event) {
    $(".gallery__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: false,
        appendArrows: ".gallery__nav",
        prevArrow: "<svg  width='50' height='44' class='icon icon-prev-arrow prev-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#prevArrow'></use></svg>",
        nextArrow: "<svg width='50' height='44' class='icon icon-next-arrow next-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#nextArrow'></use></svg>",
        variableWidth: false,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    variableWidth: false,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: false,
                    variableWidth: false,
                    slidesToShow: 1,
                }
            },
        ]
    });

    if (window.matchMedia("(max-width: 1200px)").matches) {
        $(".gallery__slider").slick("unslick");
    }
});
