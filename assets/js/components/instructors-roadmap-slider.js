document.addEventListener("DOMContentLoaded", function(event) {
    $(".js-instructors-roadmap-slider").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1441,
                settings: {
                    slidesToShow: 4,
                    variableWidth: false,
                }
            },
            {
                breakpoint: 921,
                settings: {
                    slidesToShow: 3,
                    variableWidth: false,
                }
            }
        ]
    });
});
