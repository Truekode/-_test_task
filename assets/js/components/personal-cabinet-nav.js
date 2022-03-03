document.addEventListener("DOMContentLoaded", function(event) {
    // навигационная линия
	const nav = $(".personal-cabinet__nav"),
        navLine = $(".personal-cabinet__nav ._background-line"),
        navItem = $(".personal-cabinet__nav-item");
    let navItemFirst = navItem.eq(0);

    setTimeout(() => {
        navLine.css("width", navItemFirst.outerWidth());
    }, 250);


    navItem.each(function(el) {
        $(this).on("click", function(e){
            e.preventDefault();
            var currentTarget = e.currentTarget;
            var currentTargetWidth = $(currentTarget).outerWidth();
            var offsetLeftCurrentTarget = currentTarget.offsetLeft;

            navItem.removeClass("_active");
            $(currentTarget).addClass("_active");

            navLine.css("width", currentTargetWidth);
            navLine.css("left", offsetLeftCurrentTarget);
        });
    });
});