function canUseWebp () {
	const elem = document.createElement("canvas");

	if (elem.getContext && elem.getContext("2d")) {
		return elem.toDataURL("image/webp").indexOf("data:image/webp") == 0;
	}
	return false;
};

// якорный скролл
function scrollByAnchor(topIndent = 0) {
    $("a[href^='#']").click(function() {
        const _href = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(_href).offset().top - topIndent + 'px' }, 800);
        return false;
    });
}

function validateForm() {
	// Настройки валидации
	$("form.validate").each(function () {
		$(this).validate({
			focusInvalid: false,
			invalidHandler: function(form, validator) {
				var offsetHeight2 = headerHeight + 30;
				if (!validator.numberOfInvalids())
					return;
		
				$('html, body').animate({
					scrollTop: $(validator.errorList[0].element).offset().top - offsetHeight2
				}, 600);
			}
		});
	});
	$("form.validate .required").rules("add", {
		required: true,
	});
	$(document).on("blur", "form.validate input,textarea", function () {
		var el = $(this);
		var form = $(this).parents("form");
		if ($.data(form[0], "validator")) {
			el.valid();
		}
	});
}

function initMasks() {
	// Селекторы для полей
	var fio = $("[data-mask=fio]"), // ФИО
		phone = $("[data-mask=phone]"), // Телефон
		email = $("[data-mask=email]"), // Email
		letters = $("[data-mask=letters]"), // Только буквы
		digits = $("[data-mask=digits]"), // Только цифры
		decimals = $("[data-mask=decimals]"); // Только дробные
		date = $("[data-mask=date]");

	// ФИО
	fio.formatFeild({
		titleCase: true,
		layout: "toRu",
	});
	fio.each(function () {
		$(this).rules("add", {
			minlength: 2,
			maxlength: 100,
		});
	});

	letters.formatFeild({
		lettersOnly: true,
		titleCase: true,
		layout: "toRu"
	});

	digits.formatFeild({
		integerPositive: true,
	});

	phone.mask("+7(999) 999-99-99");

	date.mask("99.99.9999", {
        clearIncomplete: true,
        onincomplete: function () {
            var form = $(this).parents("form");
            if ($.data(form[0], 'validator')) {
                $(this).valid();
            }
        }
    });

	phone.each(function () {
		$(this).rules("add", {
			ruPhone: true,
		});
	});

	// Email
	email.formatFeild({
		layout: "toEn",
		noSpaces: true,
	});
	email.each(function () {
		$(this).rules("add", {
			email: true,
			maxlength: 100,
		});
	});

	$("[data-mask=cyrilic]").formatFeild({
		layout: "toRu",
	});

	// снилс
	$("[data-mask=snils]").mask("999-999-999 99", {
        clearIncomplete: true,
        onincomplete: function () {
            var form = $(this).parents("form");
            if ($.data(form[0], 'validator')) {
                $(this).valid();
            }
        }
    });

	// серия паспорта 
	$("[data-mask=passwordSeria]").mask("9999", {
		clearIncomplete: true,
		onincomplete: function () {
			var form = $(this).parents("form");
			if ($.data(form[0], 'validator')) {
				$(this).valid();
			}
		}
	});
	// номер документа 
	$("[data-mask=passwordNumber]").mask("999999", {
		clearIncomplete: true,
		onincomplete: function () {
			var form = $(this).parents("form");
			if ($.data(form[0], 'validator')) {
				$(this).valid();
			}
		}
	});
	// код подразделения 
	$("[data-mask=passwordkod]").mask("999-999", {
		clearIncomplete: true,
		onincomplete: function () {
			var form = $(this).parents("form");
			if ($.data(form[0], 'validator')) {
				$(this).valid();
			}
		}
	});

	// index
	$("[data-mask=index]").mask('999999', {
		clearIncomplete: true,
		onincomplete: function () {
			var form = $(this).parents("form");
			if ($.data(form[0], 'validator')) {
				$(this).valid();
			}
		}
	});

	// дата
	$("[data-mask=date]").mask('99.99.9999', {
		clearIncomplete: true,
		onincomplete: function () {
			var form = $(this).parents("form");
			if ($.data(form[0], 'validator')) {
				$(this).valid();
			}
		}
	});
	$("[data-mask=date]").each(function () {
		$(this).rules("add", {
			date: true
		})
	});
}

// Очистка формы
function clearForm($form) {
	$form = $("form");

	$form.each(function () {
		this.reset();
	});
	$form.find("input[type=file]").val("");
	$form.find(".valid").each(function () {
		$(this).removeClass("valid");
	});
	$form.find("label.error").remove();
	$form.find(".error").each(function () {
		$(this).removeClass("error");
	});
	$form.find("input").removeAttr("disabled");
	$form.find(".input-heading").removeClass("_active");

	// select reset
	$form.find(".select").each(function () {
		var $th = $(this);
		var $selectItems = $th.find(".select__item");
		var defaultValue =
			$selectItems.eq(0).attr("data-value") || $selectItems.eq(0).html();
		var defaultText = $selectItems.eq(0).html();

		$th.find(".select__input").val(defaultValue);
		$th.find(".select__val").html(defaultText);
	});
}

function showPreloader() {
	$("#preloader-ajax").show();
}

function hidePreloader() {
	$("#preloader-ajax").hide();
}

window.onload = function () {
	$(".preloader").addClass("_is-loaded");

	setTimeout(() => {
		if ($(".js-hero-title").length) {
			gsap.to(".js-hero-title", {
				duration: 0.7,
				y: 0,
				opacity: 1,
				clearProps: "all"
			});
			if($(".js-hero-el").length) {
				gsap.to(".js-hero-el", {
					duration: 0.7,
					y: 0,
					opacity: 1,
					clearProps: "all"
				});
			}
			if($(".js-hero-el1").length) {
				gsap.to(".js-hero-el1", {
					duration: 0.7,
					y: 0,
					opacity: 1,
					clearProps: "all"
				});
			}
		}
	}, 200);
};

const header = document.querySelector(".header");
const headerHeight = header.offsetHeight;
const fixedMagrin = document.querySelector(".header-fixed-margin");

document.addEventListener("DOMContentLoaded", function(event) {
	validateForm();
	initMasks();

	if (canUseWebp() === false) {
		const lazyBgItems = document.querySelectorAll(".lazy[data-bg-fallback]")

		lazyBgItems.forEach(function(item) {
			const srcBgFallback = item.getAttribute("data-bg-fallback");

			item.setAttribute("data-bg", srcBgFallback);
		})
	}

	var lazyLoadInstance = new LazyLoad({
		elements_selector: ".lazy"
	});

	// Валидация номера телефона
	$.validator.addMethod(
		"ruPhone",
		function (value, element) {
			return /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/.test(value);
		},
		"Некорректный номер"
	);

	// Дата
	$.validator.addMethod("date", function (value, element, message) {
        return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value)
    }, "Неверная дата");

	// Табы
	$(document).on("click", ".tabs [data-show]:not(.active)", function () {
		var container = $(this).closest(".tabs"),
			toShow = $(this).attr("data-show") || 1;
			activeTab = container.find('[data-item="' + toShow + '"]');

		if (container.find("form").length) {
			clearForm(container.find("form"));
		}

		if(container.find(".required-el")) {
			if(!container.hasClass("deliveryTabs")) {
				clearForm(container.closest("form"));
			}
			container.find(".required-el").removeClass("required");
			container.find(".required-el").prop("disabled", true);
		}


		container.find("[data-show]").removeClass("active");
		$(this).addClass("active");

		container.find("[data-item]").removeClass("active");
		activeTab.addClass("active");

		container.find("[data-item]").hide();
		container.find('[data-item="' + toShow + '"]').fadeIn(500, function () {
			if (activeTab.find(".required-el")){
				activeTab.find(".required-el").addClass("required");
				activeTab.find(".required-el").removeAttr("disabled");
			}
		});

		container.find('.tabs [data-item]').hide();
		container.find('.tabs [data-item]:not(.hidden)').eq(0).show();
	});

	// Select
	$(document).on("click", ".select__head", function () {
		var parent = $(this).closest(".select");

		if (parent.hasClass("active")) {
			parent.find(".select__drop").fadeOut(200);
			$(".select").removeClass("active");
			$(".select__drop").fadeOut(200);
		} else {
			$(".select").removeClass("active");
			$(".select__drop").fadeOut(200);

			parent.find(".select__drop").fadeIn(200);
			parent.addClass("active");
		}
	});
	$(document).on("click", ".select__item", function (e) {
		e.stopPropagation();
		e.preventDefault();
		var parent = $(this).closest(".select");
		var text = $(this).text();
		var value = $(this).attr("data-value");


		parent.find(".select__item").removeClass("active");
		$(this).addClass("active");

		parent.find("label.error").remove();
		parent.find(".error").removeClass("error");

		// Стандартный селект
		$(".select__drop").fadeOut(200);
		$(".select").removeClass("active");

		parent.find(".select__val").html(text);
		parent.find(".select__input").val(value).trigger("change");
	});
	$(document).on("click", function (e) {
		if (!$(e.target).closest(".select").length) {
			$(".select__drop").fadeOut(200);
			$(".select").removeClass("active");
		}
	});
	// Select END

	// анимация экранов
	const fadeInAnim = document.querySelectorAll("[data-anim-fade]");
	const heroIndex = $(".js-hero-title");

	gsap.registerPlugin(ScrollTrigger);

	// анимация первой секции на главном экране
	if (heroIndex.length) {
		gsap.set(".js-hero-title", {opacity: 0, y: 25});
		if($(".js-hero-el").length) {
			gsap.set(".js-hero-el", {opacity: 0, y: 25});
		}
		if($(".js-hero-el1").length) {
			gsap.set(".js-hero-el1", {opacity: 0, y: 25});
		}
	}

	//	анимация секций
	if (fadeInAnim.length) {
		function animFrom(elem, direction) {
			direction = direction || 1;
			var x = 0,
				y = direction * 100;
			gsap.fromTo(elem, {
				y: y,
				autoAlpha: 0
			}, {
				delay: 0.4,
				duration: 1.25,
				y: 0,
				autoAlpha: 1,
				ease: "expo",
				overwrite: "auto",
				clearProps: "all"
			});
		}
	
		gsap.utils.toArray("[data-anim-fade]").forEach(function (elem) {
			gsap.set(elem, {
				autoAlpha: 0
			});

			ScrollTrigger.create({
				trigger: elem,
				onEnter: function () {
					animFrom(elem);
				},
				onEnterBack: function () {
					animFrom(elem, -1);
				},
				onLeave: function () {
					// gsap.set(elem, {
					// 	autoAlpha: 0
					// });
				}
			});
		});
	}

	// fixed header
	window.addEventListener("scroll", function(){
		let scrollDistance = window.scrollY;

		if (scrollDistance > (headerHeight * 2)) {
			header.classList.add("_fixed");
			fixedMagrin.style.height = `${headerHeight}px`;
		} else {
			fixedMagrin.style.height = null;
			header.classList.remove("_fixed");
		}
	});

	if (window.scrollY > headerHeight) {
		header.classList.add("_fixed");
		fixedMagrin.style.height = `${headerHeight}px`;
	}

	// форма-попап задать вопрос
	$(document).on("submit", "form[name=form-question]", function (e) {
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
					clearForm(form);
                }
            });
        }
    });
});

