document.addEventListener("DOMContentLoaded", function (event) {
	const options = BodyScrollOptions = {
		reserveScrollBarGap: true,
	};

	const simpleBar = new SimpleBar(document.querySelector('.site-menu__row'));

	// открытие меню
	const menuButton = $(".js-open-menu");
	const menuButtonClose = $(".site-menu__close-button");
	const menu = $(".site-menu");

	menuButton.on("click", function () {
		menu.addClass("is-open");
		menu.css("display", "block");

		menu.find(".site-menu__container").css("opacity", "0");

		setTimeout(function () {
			menu.find(".site-menu__container").css("opacity", "1");
			menu.find(".site-menu__container").addClass("_active");
			$("body").css("position", "relative");
			$("body").css("height", "100vh");
			$("body").css("overflow", "hidden");
			// bodyScrollLock.disableBodyScroll($(".simplebar-wrapper"), options);
		}, 200);
	});

	// закрытие меню
	menuButtonClose.on("click", function () {
		menu.removeClass("is-open");

		// menu.find(".site-menu__container").css("opacity", "0");
		menu.find(".site-menu__container").removeClass("_active");

		setTimeout(function () {
			menu.css("display", "none");
			$("body").removeAttr("style");
		}, 200);
	});

	$(document).on("click", ".icon-password-eye", function (e) {
		e.preventDefault();
		let $th = $(this);
		let parent = $(this).closest(".modal__input-container");

		if (parent.find(".input").attr("type") == "password") {
			parent.find(".input").attr("type", "text");
			$th.addClass("_active");
		} else {
			parent.find(".input").attr("type", "password");
			$th.removeClass("_active");
		}
	})

	var input = $(".input");

	if (input.length) {
		input.each(function () {
			var $this = $(this);
			var thisVal = $(this).val();

			if (thisVal.length !== 0) {
				$this.closest(".input-container").find(".input-heading").addClass("_active");
			}
		});
	}

	$(document).on("change", ".modal__input, .input", function () {
		let $th = $(this);
		let parent = $(this).closest(".modal__input-container, .input-container, .site-menu__searh-label");
		let inputHeading = parent.find(".input-heading");
		let inputHeadingMenu = parent.find(".site-input-name");
		let val = $th.val();

		if (val.length !== 0) {
			inputHeading.addClass("_active");
			inputHeadingMenu.addClass("_active");
		} else {
			inputHeading.removeClass("_active");
			inputHeadingMenu.removeClass("_active");
		}
	});

	// datepicker
	$(document).on("focus", ".chooseDate", function () {
		var $th = $(this);

		$th.daterangepicker({
			autoUpdateInput: false,
			singleDatePicker: true,
			showDropdowns: false,
			startDate: moment().format('DD.MM.YYYY'),
			minDate: moment(),
			// minYear: 1901,
			// maxYear: parseInt(moment().format('YYYY'), 10),
			maxDate: "12.12.2030",
			parentEl: $th.closest('.input_container'),
			autoApply: true,
			"locale": {
				"format": "DD.MM.YYYY",
				"applyLabel": "Apply",
				"cancelLabel": "Cancel",
				"fromLabel": "From",
				"toLabel": "To",
				"customRangeLabel": "Custom",
				"weekLabel": "W",
				"daysOfWeek": [
					"Вс",
					"Пн",
					"Вт",
					"Ср",
					"Чт",
					"Пт",
					"Сб"
				],
				"monthNames": [
					"Январь",
					"Февраль",
					"Март",
					"Апрель",
					"Май",
					"Июнь",
					"Июль",
					"Август",
					"Сентябрь",
					"Октябрь",
					"Ноябрь",
					"Декабрь"
				],
				"firstDay": 1
			},
		}, function (chosen_date) {
			$th.val(chosen_date.format('DD.MM.YYYY')).trigger('change');
		});
	});

	// datepicker2
	$(".chooseDate2").each(function () {
		$(this).on("focus", function () {
			var $th = $(this);

			$(this).daterangepicker({
				autoUpdateInput: false,
				singleDatePicker: true,
				showDropdowns: true,
				minYear: 1950,
				maxYear: parseInt(moment().format('YYYY'), 10),
				maxDate: "12.12.2050",
				parentEl: $th.closest('.input_container'),
				autoApply: true,
				"locale": {
					"format": "DD.MM.YYYY",
					"applyLabel": "Apply",
					"cancelLabel": "Cancel",
					"fromLabel": "From",
					"toLabel": "To",
					"customRangeLabel": "Custom",
					"weekLabel": "W",
					"daysOfWeek": [
						"Вс",
						"Пн",
						"Вт",
						"Ср",
						"Чт",
						"Пт",
						"Сб"
					],
					"monthNames": [
						"Январь",
						"Февраль",
						"Март",
						"Апрель",
						"Май",
						"Июнь",
						"Июль",
						"Август",
						"Сентябрь",
						"Октябрь",
						"Ноябрь",
						"Декабрь"
					],
					"firstDay": 1
				},
			}, function (chosen_date) {
				$th.val(chosen_date.format('DD.MM.YYYY')).trigger('change');
				$th.closest(".input-container").find("label.error").remove();
			});
		})
	});

	let dpMin;
	let dpMax;

	dpMin = $(".chooseDateMin").daterangepicker({
		autoUpdateInput: false,
		singleDatePicker: true,
		showDropdowns: false,
		startDate: moment().format('DD.MM.YYYY'),
		minDate: moment(),
		maxDate: "12.12.2030",
		parentEl: $(".chooseDateMin").closest('.input_container'),
		autoApply: true,
		"locale": {
			"format": "DD.MM.YYYY",
			"applyLabel": "Apply",
			"cancelLabel": "Cancel",
			"fromLabel": "From",
			"toLabel": "To",
			"customRangeLabel": "Custom",
			"weekLabel": "W",
			"daysOfWeek": [
				"Вс",
				"Пн",
				"Вт",
				"Ср",
				"Чт",
				"Пт",
				"Сб"
			],
			"monthNames": [
				"Январь",
				"Февраль",
				"Март",
				"Апрель",
				"Май",
				"Июнь",
				"Июль",
				"Август",
				"Сентябрь",
				"Октябрь",
				"Ноябрь",
				"Декабрь"
			],
			"firstDay": 1
		},
	}, function (chosen_date) {
		$(".chooseDateMin").val(chosen_date.format('DD.MM.YYYY')).trigger('change');

		dpMax.data('daterangepicker').minDate = chosen_date;
		dpMax.data('daterangepicker').setStartDate(chosen_date);


		$(".chooseDateMin").attr("data-date", chosen_date);
	});

	dpMax = $(".chooseDateMax").daterangepicker({
		autoUpdateInput: false,
		singleDatePicker: true,
		showDropdowns: false,
		startDate: moment().format('DD.MM.YYYY'),
		minDate: moment(),
		maxDate: "12.12.2030",
		parentEl: $(".chooseDateMax").closest('.input_container'),
		autoApply: true,
		"locale": {
			"format": "DD.MM.YYYY",
			"applyLabel": "Apply",
			"cancelLabel": "Cancel",
			"fromLabel": "From",
			"toLabel": "To",
			"customRangeLabel": "Custom",
			"weekLabel": "W",
			"daysOfWeek": [
				"Вс",
				"Пн",
				"Вт",
				"Ср",
				"Чт",
				"Пт",
				"Сб"
			],
			"monthNames": [
				"Январь",
				"Февраль",
				"Март",
				"Апрель",
				"Май",
				"Июнь",
				"Июль",
				"Август",
				"Сентябрь",
				"Октябрь",
				"Ноябрь",
				"Декабрь"
			],
			"firstDay": 1
		},
	}, function (chosen_date) {
		$(".chooseDateMax").val(chosen_date.format('DD.MM.YYYY')).trigger('change');

		dpMin.data('daterangepicker').maxDate = chosen_date;
		$(".chooseDateMax").attr("data-date", chosen_date);
	});
});
