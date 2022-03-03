document.addEventListener("DOMContentLoaded", function (event) {
  
    // отправка данных 2-го шага
    $(document).on("submit", "form[name=reg-course-step2]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();

        if (form.valid()) {
            $.ajax({
                type: "POST",
                data: params,
                url: url,
                beforeSend: function () {
                    form.closest(".steps__item").find(".steps__preloader").show();
                    $("html, body").animate({ scrollTop: form.closest(".steps__item").find(".steps__preloader-logo").offset().top - 200, }, 700);
                },
                success: function (data) {
                    form.closest(".steps__item").removeClass("_is-open");
                    form.closest(".steps__item").addClass("_is-done");
                    form.find(".steps__icon-down").removeClass("_rotate");

                    if($("#deliveryType2").is(':checked')) {
                        console.log("123");
                        $(".side-block__row-delivery").show();
                    }


                    // убираем атрибут disabled у кнопки оплаты и убираем оповещение
                    $(".side-block__pay-button").removeClass("_disabled");
                    $(".course-registration__pay-wraning").remove();
                },
                complete: function () {
                    form.closest(".steps__item").find(".steps__preloader").hide();
                }
            });
        }
    });
});