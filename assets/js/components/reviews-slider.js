document.addEventListener("DOMContentLoaded", function(event) {
    $(".reviews__slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: false,
        appendArrows: ".reviews__slider-nav",
        prevArrow: "<svg class='icon icon-prev-arrow prev-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#prevArrow'></use></svg>",
        nextArrow: "<svg class='icon icon-next-arrow next-arrow slider-arrow'><use xlink:href='../assets/img/sprite.svg#nextArrow'></use></svg>",
        variableWidth: true,
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    arrows: false,
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
});
