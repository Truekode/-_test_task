document.addEventListener("DOMContentLoaded", function(event) {
    var accordion = $(".retake-rules__item-price-info");
    var accordionItem = accordion.find(".retake-rules__item-price-btn");

    accordionItem.on("click", function() {
        var parent = $(this).closest(".retake-rules__item-price-info");

        parent.toggleClass("_is-open");

        parent.find(".retake-rules__item-price-info-content").slideToggle();
    });
});
