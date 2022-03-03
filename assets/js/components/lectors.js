document.addEventListener("DOMContentLoaded", function(event) {
    $(".lectors__slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
});
