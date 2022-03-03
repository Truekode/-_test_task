var need_ext = ["jpeg", "jpg", "png", "pdf", "doc", "docx"];
// валидация файла
function validatInputFile() {
    $("input.input-file").each(function () {
        $(this).on("change", function () {
            var $this = $(this);
            var form = $this.closest("form");
            var files = $(this).val();
            var thisFiles = this.files;
            var url = '/local/include/ajax/upload-file.php';

            $.each(thisFiles, function (index, file) {
                var file_size = file.size;
                var file_name = file.name.split('.');
                var file_ext = file_name[file_name.length - 1];
                file_name.splice(-1, 1);
                file_name.join(".");
                var fileElement;
                var fileName;

                if (file_size < 26214401) {
                    file_size = file_size / 1048576;
                    file_size = file_size.toFixed(4);

                    if ($.inArray(file_ext.toLowerCase(), need_ext) < 0) {
                        form.find(".steps__button-change-step").addClass("_disabled");

                        fileElement = $(
                            `
                                <span class="file__not-empty">			
                                    <svg class="icon file__icon-file">				
                                        <use xlink:href="/local/assets/img/sprite.svg#file"></use>			
                                    </svg>			
                                    <span class="file__file-name">
                                        ${file_name}.${file_ext}
                                    </span>			
                                    <span class="file__error-msg">
                                        Неверный формат файла
                                    </span>			
                                    <button class="button-reset file__reset-button reset-button _is-active" type="button">
                                        <svg class="icon icon-trash">					
                                            <use xlink:href="/local/assets/img/sprite.svg#trash"></use>				
                                        </svg>
                                        Очистить		
                                    </button>		
                                </span>
                            `
                        );
                        $this.closest(".input-file-container").find(".file__not-empty").remove();
                        $this.closest(".input-file-container").find(".file__empty").hide();
                        $this.closest(".input-file-container").find("label.error").remove();
                        $this.closest(".input-file-container").append(fileElement);
                    } else {
                        form.find(".steps__button-change-step").addClass("_disabled");
                        var formData = new FormData();
                        formData.append("file", file);

                        $.ajax({
                            type: "POST",
                            url: url,
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            error: function () {
                                fileElement = $(
                                    `
                                        <span class="file__not-empty">			
                                            <svg class="icon file__icon-file">				
                                                <use xlink:href="/local/assets/img/sprite.svg#file"></use>			
                                            </svg>			
                                            <span class="file__file-name">
                                                ${file_name}.${file_ext}
                                            </span>			
                                            <span class="file__error-msg">
                                                Ошибка отправки, попробуйте снова1
                                            </span>			
                                            <button class="button-reset file__reset-button reset-button _is-active" type="button">
                                                <svg class="icon icon-trash">					
                                                    <use xlink:href="/local/assets/img/sprite.svg#trash"></use>				
                                                </svg>
                                                Очистить		
                                            </button>		
                                        </span>
                                    `
                                );
                                $this.closest(".input-file-container").find(".file__not-empty").remove();
                                $this.closest(".input-file-container").find(".file__empty").hide();
                                $this.closest(".input-file-container").find("label.error").remove();
                                $this.closest(".input-file-container").append(fileElement);
                            },
                            success: function (data) {
                                $this.closest('.input-file-container').find('input[type=hidden]').val(data.name);
                                let fileName = data.name;
                                form.find(".steps__button-change-step").removeClass('_disabled');
                                form.find("input[name=hiddenInput]").val(data);

                                fileElement = $(
                                    `
                                        <span class="file__not-empty">			
                                            <svg class="icon file__icon-file">				
                                                <use xlink:href="/local/assets/img/sprite.svg#file"></use>			
                                            </svg>			
                                            <span class="file__file-name">
                                                ${file_name}.${file_ext}
                                            </span>		
                                            <button class="button-reset file__reset-button reset-button _is-active" type="button">
                                                <svg class="icon icon-trash">					
                                                    <use xlink:href="/local/assets/img/sprite.svg#trash"></use>				
                                                </svg>
                                                Очистить		
                                            </button>		
                                        </span>
                                    `
                                );
                                $this.closest(".input-file-container").find(".file__not-empty").remove();
                                $this.closest(".input-file-container").find(".file__empty").hide();
                                $this.closest(".input-file-container").find("label.error").remove();
                                $this.closest(".input-file-container").append(fileElement);
                            }
                        });
                    }

                } else {
                    form.find(".popup__submit_btn").addClass("_disabled");

                    fileElement = $(
                        `
                            <span class="file__not-empty">			
                                <svg class="icon file__icon-file">				
                                    <use xlink:href="/local/assets/img/sprite.svg#file"></use>			
                                </svg>			
                                <span class="file__file-name">
                                    ${file_name}.${file_ext}
                                </span>			
                                <span class="file__error-msg">
                                    Файл больше 2мб
                                </span>			
                                <button class="button-reset file__reset-button reset-button _is-active" type="button">
                                    <svg class="icon icon-trash">					
                                        <use xlink:href="/local/assets/img/sprite.svg#trash"></use>				
                                    </svg>
                                    Очистить		
                                </button>		
                            </span>
                        `
                    );
                    $this.closest(".input-file-container").find(".file__not-empty").remove();
                    $this.closest(".input-file-container").find(".file__empty").hide();
                    $this.closest(".input-file-container").find("label.error").remove();
                    $this.closest(".input-file-container").append(fileElement);
                }
            });
        });
    });
}

var dropZones = [];
function initDropzone() {
    // DropZone
    var previewTemplate = `
		<span class="file__not-empty">
			<svg class="icon file__icon-file">
				<use xlink:href="../assets/img/sprite.svg#file"></use>
			</svg>
			<span class="file__file-name" data-dz-name>
				Договор на оказание образовательных услуг Иванов И.И..docx
			</span>
			<span class="dz-error-message file__error-msg" data-dz-errormessage></span>

			<button class="button-reset file__reset-button reset-button _is-active" data-dz-remove type="button">
				<svg class="icon icon-trash">
					<use xlink:href="../assets/img/sprite.svg#trash"></use>
				</svg>
				Очистить
			</button>
		</span>
	`;

    //Отключаем старые формы
    if (dropZones.length) {
        $(dropZones).each(function (d, idx) {
            this.destroy();
        });
    }
    //Отключаем старые формы END

    $(".dropFile").each(function () {
        var minFiles = 0;
        var form = $(this).closest('form');

        $(this).dropzone({
            url: form.attr('action'),
            maxFilesize: 2,
            maxFiles: 1,
            previewTemplate: previewTemplate,
            dictFileTooBig: "Объем файла должен быть не более 2 Мб",
            dictInvalidFileType: "Неверный формат файла",
            acceptedFiles: ".jpeg,.jpg,.png,.pdf,.doc,.docx",
            init: function () {
                this.removeAllFiles();

                var myDropzone = this;
                var myDropzoneEl = this.element;
                var errorMsg = '';

                dropZones.push(myDropzone);

                // form.on('submit', function (e) {
                // 	e.preventDefault();

                // 	minFiles = $(myDropzoneEl).attr('data-min-files');
                // 	minFiles = minFiles ? parseInt(minFiles) : 0;

                // 	// Валидация
                // 	if (minFiles && myDropzone.files.length < minFiles) {
                // 		errorMsg = 'Минимальное количество файлов: ' + minFiles;
                // 	} else if (myDropzone.files.length == 0) {
                // 		errorMsg = 'Обязательно';
                // 	} else {
                // 		errorMsg = '';
                // 		$(myDropzoneEl).find('.error').remove();
                // 		myDropzone.processQueue();
                // 	}

                // 	// Размещение ошибки
                // 	if (errorMsg) {
                // 		errorMsg = '<div class="error">' + errorMsg + '</div>';
                // 		$(myDropzoneEl).find('.error').remove();
                // 		$(myDropzoneEl).append(errorMsg);
                // 	} else {
                // 		$(myDropzoneEl).find('.error').remove();
                // 	}
                // });

                // Success
                myDropzone.on('successmultiple', function (file, data) {

                    this.removeAllFiles();
                });

                // On file added
                myDropzone.on("addedfile", function (file) {
                    if (
                        (minFiles && myDropzone.files.length >= minFiles) ||
                        myDropzone.files.length > 0
                    ) {
                        $(myDropzoneEl).find('.error').remove();
                        $(myDropzoneEl).addClass("_fileUploaded");
                        $(myDropzoneEl).find(".file__empty").hide();
                        $(myDropzoneEl).find("input.input-file").prop("disabled", true);
                    }
                });

                myDropzone.on("sendingmultiple", function (file, xhr, formData) {
                    // Добавление остальных данных формы
                    form.find('input').each(function () {
                        formData.append($(this).attr('name'), $(this).val());
                    });
                });

                myDropzone.on("removedfile", function (file) {
                    if (!$(myDropzoneEl).find(".file__not-empty").length) {
                        $(myDropzoneEl).removeClass("_fileUploaded");
                        $(myDropzoneEl).find(".file__empty").show();
                        $(myDropzoneEl).find("input.input-file").removeAttr("disabled");
                    }
                });

                myDropzone.on("maxfilesexceeded", function (file) {
                    this.removeAllFiles();
                    this.addFile(file);
                });
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", function (event) {
    let flag = false;
    // открытие аккордиона
    let accordionParent = $(".steps");
    let accordionItem = accordionParent.find(".steps__item");

    validatInputFile();
    initDropzone();

    $(document).on("click", ".steps__head", function () {
        var $this = $(this);
        var $thisAccordinItem = $(this).closest(".steps__item");
        var accordinContent = $(this).closest(".steps__item").find(".steps__body");

        if (!$thisAccordinItem.hasClass("_is-done")) {
            accordinContent.slideToggle(700);
            $("html, body").animate({ scrollTop: $($thisAccordinItem).offset().top - 100, }, 700);
            if ($thisAccordinItem.find(".steps__icon-down").hasClass("_rotate")) {
                $(".steps__icon-down").removeClass("_rotate");
                $thisAccordinItem.find(".steps__icon-down").removeClass("_rotate");
            } else {
                $(".steps__icon-down").removeClass("_rotate");
                $thisAccordinItem.find(".steps__icon-down").addClass("_rotate");
            }
        }
    });

    // отправка промокода 
    $(document).on("submit", "form[name=promocode]", function (e) {
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
                    form.addClass("promocodeIsSuccess");
                    form.closest(".side-block__promocode_wrap").find(".side-block__reset-button").addClass("_is-active");

                    loadPopup("discount-promocode");
                }
            });
        }
    });

    // очистка промокода
    $(document).on("click", ".side-block__reset-button", function () {
        var parent = $(this).closest(".side-block__promocode_wrap");
        var form = parent.find(".side-block__promocode");

        form.removeClass("promocodeIsSuccess");
        form.find("input").val("").trigger("change");
        $(this).removeClass("_is-active");
    });

    // отправка данных 1-го шага
    $(document).on("submit", "form[name=reg-course-step1]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();
        var nextStep = form.find(".steps__button-change-step").attr("data-next-step");

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

                    form.find(".steps__body").slideUp(700);

                    $("html, body").animate({ scrollTop: form.closest(".steps__item").offset().top - 100, }, 700);

                    clearForm(form);

                    $(`.steps__item[data-step=${nextStep}]`).addClass("_is-open");
                    $(`.steps__item[data-step=${nextStep}]`).find(".steps__body").slideDown(700);
                    $(`.steps__item[data-step=${nextStep}]`).find(".steps__warning._error").remove();
                    $(`.steps__item[data-step=${nextStep}]`).find(".step-is-closed").removeClass("step-is-closed");
                },
                complete: function () {
                    form.closest(".steps__item").find(".steps__preloader").hide();
                },
                timeout: 180000
            });
        }
    });

    // отправка данных 2-го шага
    $(document).on("submit", "form[name=reg-course-step2]", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var params = form.serialize();
        var nextStep = form.find(".steps__button-change-step").attr("data-next-step");

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
                    if (data) {
                        $('.attachment-files-block').append(data);

                        validatInputFile();
                        initDropzone();
                    }
                    form.closest(".steps__item").removeClass("_is-open");
                    form.closest(".steps__item").addClass("_is-done");
                    form.find(".steps__icon-down").removeClass("_rotate");

                    form.find(".steps__body").slideUp(700);

                    $("html, body").animate({ scrollTop: form.closest(".steps__item").offset().top - 100, }, 700);

                    clearForm(form);

                    $(`.steps__item[data-step=${nextStep}]`).addClass("_is-open");
                    $(`.steps__item[data-step=${nextStep}]`).find(".steps__body").slideDown(700);
                    $(`.steps__item[data-step=${nextStep}]`).find(".steps__warning._error").remove();
                    $(`.steps__item[data-step=${nextStep}]`).find(".step-is-closed").removeClass("step-is-closed");

                    // убираем атрибут disabled у кнопки оплаты и убираем оповещение
                    $(".side-block__pay-button").removeClass("_disabled");
                    $(".course-registration__pay-wraning").remove();
                },
                complete: function () {
                    form.closest(".steps__item").find(".steps__preloader").hide();
                },
                timeout: 180000
            });
        }
    });

    // отправка данных 3-го шага
    $(document).on("click", "form[name=reg-course-step3] .steps__button-change-step", function (e) {
        e.preventDefault();
        var form = $(this).closest("form");
        var url = form.attr("action");
        var params = form.serialize();

        if (form.valid()) {
            $.ajax({
                type: "POST",
                data: params,
                url: url,
                dataType: 'json',
                timeout: 300000,
                beforeSend: function () {
                    form.closest(".steps__item").find(".steps__preloader").show();
                    $("html, body").animate({ scrollTop: form.closest(".steps__item").find(".steps__preloader-logo").offset().top - 200, }, 700);
                },
                success: function (data) {
                    console.log(data);
                    form.closest(".steps__item").removeClass("_is-open");
                    form.closest(".steps__item").addClass("_is-done");
                    form.find(".steps__icon-down").removeClass("_rotate");

                    form.find(".steps__body").slideUp(700);

                    $("html, body").animate({ scrollTop: form.closest(".steps__item").offset().top - 100, }, 700);

                    clearForm(form);
                },
                complete: function () {
                    form.closest(".steps__item").find(".steps__preloader").hide();
                }
            });
        }
    });

    // Почтовый адрес совпадает с юридическим
    $(document).on("change", "[data-similar-parent] input", function () {
        var attrVal = $(this).closest("[data-similar-parent]").attr("data-similar-parent");
        var inputValue = $("[data-similar-value]").find("input").val();

        if ($(this).is(":checked")) {
            $(`[data-similar-child="${attrVal}"]`).find("input").val(inputValue).trigger("change");
            $(`[data-similar-child="${attrVal}"]`).find("input").addClass("_not-active");
            $(`[data-similar-child="${attrVal}"]`).find("label.error").remove();
        } else {
            $(`[data-similar-child="${attrVal}"]`).find("input").removeClass("_not-active");
        }
    });
    $(document).on("change", "[data-similar-value] input", function () {
        var thisVal = $(this).val();
        var thisAttrVal = $(this).closest("[data-similar-value]").attr("data-similar-value");
        if ($("[data-similar-parent] input").is(":checked")) {
            $(`[data-similar-child="${thisAttrVal}"]`).find("input").val(thisVal).trigger("change");
        }
    });

    // Договор подписывает доверенное лицо
    $(document).on("change", "[data-similar]", function () {
        var attrVal = $(this).attr("data-similar");

        if ($(this).is(":checked")) {
            $(`[data-similar-item="${attrVal}"]`).show();
            $(`[data-similar-item="${attrVal}"]`).find("input").prop("disabled", false);
        } else {
            $(`[data-similar-item="${attrVal}"]`).hide();
            $(`[data-similar-item="${attrVal}"]`).find("input").prop("disabled", true);
        }
    });

    // отправка данных модального окна оплаты курса
    $(document).on("submit", "form[name=payment-form]", function (e) {
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
                    // временно
                    if (form.find(".kvitanciya-input").is(":checked")) {
                        loadPopup("payment-kvitanciya");
                    }

                    clearForm(form);
                    closePopup();
                }
            });
        }
    });
    let flag1;
    function checkError(el) {
        if(el.find("label.error").length) {
            flag1 = true;
        } else {
            flag1 = false;
        }
    }

    $(document).on("click", ".input-file-container", function () {
        setTimeout(() => {
            checkError($(this));
        }, 150);
        if (flag1 == true) {
            $(this).removeClass("js-hide-error");
        } else {
            $(this).addClass("js-hide-error");
        }
    });

    $(document).on("click", ".file__reset-button", function (e) {
        // e.preventDefault();
        var parent = $(this).closest(".input-file-container");

        // parent.removeClass("js-hide-error");

        parent.find(".file__not-empty").remove();
        parent.find(".file__empty").show();
        parent.find(".input-file").val("").trigger("change");
    });

    $(document).on("click", ".steps__button-change-step", function () {
        var form = $(this).closest("form");

        form.find(".input-file-container").removeClass("js-hide-error");
    });
});