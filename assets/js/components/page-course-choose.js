document.addEventListener("DOMContentLoaded", function(event) {
    $(document).on("click", ".js-choose-dates-open", function() {
        $(".courses-modal-list").slideDown(200);
        $(".courses-slider").css("opacity", "0");
        $(".courses-slider").css("visbility", "hidden");
        $(".closest-courses__courses-wrapper").css("padding-bottom", height3 + "px")
    });
    $(document).on("click", ".js-choose-dates-close", function() {
        var form = $(this).closest("form");
        $(".courses-modal-list").slideUp(200);
        setTimeout(() => {
            $(".courses-slider").css("opacity", "1");
            $(".courses-slider").css("visbility", "visible");
            clearForm(form);
        }, 200);
    });

    // слайдер курсов
    $(".closest-courses__courses-container").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        infinite: false,
        appendArrows: ".closest-courses__navigation",
        prevArrow: "<button class='button-reset closest-courses__navigation-button' aria-label='Предыдущий слайд'><svg class='icon icon-prev-arrow prev-arrow slider-arrow closest-courses__navigation-arrow'><use xlink:href='../assets/img/sprite.svg#prevArrow'></use></svg></button>",
        nextArrow: "<button class='button-reset closest-courses__navigation-button' aria-label='Следующий слайд'><svg class='icon icon-next-arrow next-arrow slider-arrow closest-courses__navigation-arrow'><use xlink:href='../assets/img/sprite.svg#nextArrow'></use></svg></button>",
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    variableWidth: false,
                    slidesToShow: 1,
                }
            }
        ]
    });

    // отправка формы выбора места
    $(document).on("submit", "form[name=choose-place]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();

        if (form.valid()) {
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
    let timerDelay;
    // показ спсика результатов выбора места
    $(document).on("keyup", ".js-input-choose-place", function (e) {
        e.preventDefault();
        var form = $(this).closest("form");
        var url = form.attr("action");
        var params = form.serialize();
        clearTimeout(timerDelay);

        if (form.valid()) {
            timerDelay = setTimeout(() => {
                $.ajax({
                    type: "POST",
                    data: params,
                    url: url,
                    success: function (data) {
                        if (data.length) {
                            form.find(".course-choose__form-dropdown .simplebar-content").html("");
                            for (let i = 0; i < data.length; i++) {
                                var template = $(`
                                    <li class="courses-modal-list__item course-choose__form-dropdown-item">
                                        <label class="courses-modal-list__label js-course-place">
                                            <input type="checkbox" class="visually-hidden courses-modal-list__input" value="${data[i].place}" name="course-${i}">
                                            <span class="courses-modal-list__where">
                                                ${data[i].place}
                                            </span>
                                        </label>
                                    </li>
                                `);
                                form.find(".course-choose__form-dropdown .simplebar-content").append(template);
                            }
    
                            form.find(".course-choose__form-dropdown").addClass("course-choose__form-dropdown_is-shown");
                        } else {
                            var templateError = $(`
                                <li class="courses-modal-list__item course-choose__form-dropdown-item _error">
                                    По вашему запроосу ничего не найдено
                                </li>
                            `);
    
                            form.find(".course-choose__form-dropdown").addClass("course-choose__form-dropdown_is-shown");
                            form.find(".course-choose__form-dropdown .simplebar-content").html("");
                            form.find(".course-choose__form-dropdown .simplebar-content").append(templateError);
                        }
                    }
                });
            }, 300);
        }
    });
    // очистка спсика результатов выбора места
    $(document).on("click", ".js-input-choose-place-clear", function() {
        var form = $(this).closest("form");

        clearForm(form);
        form.find(".course-choose__form-dropdown").removeClass("course-choose__form-dropdown_is-shown");
        form.find(".course-choose__form-dropdown .simplebar-content").find(".course-choose__form-dropdown-item").remove();
    });
    $(document).on("keyup", ".js-input-choose-place", function (e) {
        var form = $(this).closest("form");

        if (!$(this).val()) {
            form.find(".course-choose__form-dropdown").removeClass("course-choose__form-dropdown_is-shown");
            form.find(".course-choose__form-dropdown .simplebar-content").find(".course-choose__form-dropdown-item").remove();
        }
    });
    $(document).on("click", ".js-course-place", function() {
        var form = $(this).closest("form");
        var val = $(this).find(".courses-modal-list__input").val();

        form.find(".js-input-choose-place").val(val)

        form.find(".course-choose__form-dropdown").removeClass("course-choose__form-dropdown_is-shown");
        form.find(".course-choose__form-dropdown .simplebar-content").find(".course-choose__form-dropdown-item").remove();
    });

    
    // отправка формы выбора периода
    $(document).on("submit", "form[name=choose-period]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();

        if (form.valid()) {
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

    // отправка формы оформления курса
    $(document).on("submit", "form[name=course-reg]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();

        if (form.valid()) {
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
});
