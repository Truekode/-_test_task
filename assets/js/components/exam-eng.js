document.addEventListener("DOMContentLoaded", function (event) {
    $(document).on("submit", "form[name=exam-form]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();

        if (form.valid()) {
            loadPopup("modalCoursePayment");

            $.ajax({
                type: "POST",
                data: params,
                url: url,
                success: function (data) {
                    // clearForm(form);
                }
            });
        }
    });

    var $form = $("form[name=exam-form]");
    var inputs = $(".js-input");
    var btn = $form.find(".side-block__pay-button");

    let isValid;

    $(document).on('change keyup', '.js-input', function (e) {
        let disabled = true;
        $(".js-input").each(function () {
            let value = this.value
            if ((value) && (value.trim() != '')) {
                disabled = false
            } else {
                disabled = true
                return false
            }
        });

        if (disabled) {
            btn.prop("disabled", true);
        } else {
            btn.prop("disabled", false);
        }
    })
});