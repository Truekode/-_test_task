document.addEventListener("DOMContentLoaded", function(event) {
    $(".js-audience-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });
});
