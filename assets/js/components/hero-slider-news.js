document.addEventListener("DOMContentLoaded", function(event) {
    $(".slider-news__container").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: false,
        appendArrows: ".slider-news__navigation",
        prevArrow: "<svg class='icon icon-prev-arrow prev-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#prevArrow'></use></svg>",
        nextArrow: "<svg class='icon icon-next-arrow next-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#nextArrow'></use></svg>",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
            },
        ]
    });
});
