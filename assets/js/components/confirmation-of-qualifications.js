document.addEventListener("DOMContentLoaded", function(event) {
    $(document).on("click", ".confirmation-of-qualifications__warning-close", function () {
        var $this = $(this);
        var parent = $this.closest(".confirmation-of-qualifications__warning");

        parent.hide();
    });
});
