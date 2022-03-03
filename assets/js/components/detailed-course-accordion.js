document.addEventListener("DOMContentLoaded", function(event) {
    $(document).on("click", ".js-accordion-head", function () {
        var attrVal = $(this).closest(".js-accordion").attr("data-accordion")
        var parent = $(this).closest(`.js-accordion[data-accordion="${attrVal}"]`);

       parent.toggleClass("_is-open");

       parent.find(`.js-accordion-body[data-accordion="${attrVal}"]`).slideToggle();
    });
});
