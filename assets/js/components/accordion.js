document.addEventListener("DOMContentLoaded", function(event) {
    var accordion = $(".accordion");
    var accordionItem = $(".accordion").find(".accordion__item");

    accordionItem.on("click", function() {
        var parent = $(this);

        parent.toggleClass("_is-open");

        parent.find(".accordion__content").slideToggle();
    });
});
