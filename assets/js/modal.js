const options = BodyScrollOptions = {
	reserveScrollBarGap: true,
};

// Подгрузка html-контента в конец body
function loadPopup(popupId, onOpen) {
	var popup = $("#" + popupId);
	var data = $(this).data();

	if (popup.attr("data-remove-onclose")) {
		popup.parent().remove();
	}
	bodyScrollLock.clearAllBodyScrollLocks();

	if ($("#" + popupId).length) {
		popup.addClass("active");
		bodyScrollLock.disableBodyScroll(popup.find(".modal__scroll")[0], options);
		if (typeof onOpen === "function") onOpen();
	} else {
		return $.post(
			"/local/include/ajax/modal/" + popupId + ".php",
			data,
			function (data) {
				var data = $("<div>" + data + "</div>");
				var popup = $(data).find("#" + popupId);
				$("body").append(data);
				setTimeout(function () {
					popup.addClass("active");
					bodyScrollLock.disableBodyScroll(popup.find(".modal__scroll")[0], options);
				}, 30);

				if (typeof validateForm === "function") validateForm();
				if (typeof initMasks === "function") initMasks();
			}
		);
	}
}

$(document).ready(function () {
	// Открытие попапов
	$(document).on("click", "[data-popup]", function (e) {
		e.preventDefault();
		var popupId = $(this).attr("data-popup");
		var data = $(this).data();
		var onOpen;
		let siteMenu = $(".site-menu");

		console.log(data);

		if (siteMenu.hasClass("is-open")) {
			siteMenu.find(".site-menu__container").removeClass("_active");
	
			setTimeout(function(){
				siteMenu.css("display", "none");
			}, 200);
		}

		loadPopup.call(this, popupId, onOpen);
	});

	// Закрытие попапа
	$(document).on("click", "[data-close-popup]", function () {
		var popup = $(this).closest(".modal");
		var form = popup.find("form");
		var popupId = popup.attr("id");
		var modalTabs = popup.find(".tabs");
		popup.removeClass("active");

		// опиционально
		if (modalTabs.length) {
			setTimeout(() => {
				popup.find("[data-item]").removeClass("active");
				popup.find("[data-item]").hide();
				popup.find("[data-item]").eq(0).show();
				popup.find("[data-show]").removeClass("active");
				popup.find("[data-show]").hide();
				popup.find("[data-show]").eq(0).show();
			}, 250);
		}

		bodyScrollLock.clearAllBodyScrollLocks();
		$("body").removeAttr("style");

		clearForm(form);
	});

	// закрытие попапа вне окна
	$(document).on("click", function (e) {
		if (!$(e.target).closest(".modal__inner, [data-popup]").length) {
			var popup = $(e.target).closest(".modal");
			var form = popup.find("form");
			var popupId = popup.attr("id");
			var modalTabs = popup.find(".tabs");
			if (popup.length) {
				popup.removeClass("active");

				if (modalTabs.length) {
					setTimeout(() => {
						popup.find("[data-item]").removeClass("active");
						popup.find("[data-item]").hide();
						popup.find("[data-item]").eq(0).show();
						popup.find("[data-show]").removeClass("active");
						popup.find("[data-show]").hide();
						popup.find("[data-show]").eq(0).show();
					}, 250);
				}

				bodyScrollLock.clearAllBodyScrollLocks();
				$("body").removeAttr("style");
				clearForm(form);
			}
		}
	});
});

function closePopup() {
	var popup = $(".modal");
	var form = popup.find("form");
	var popupId = popup.attr("id");
	popup.removeClass("active");
	bodyScrollLock.enableBodyScroll(popup.find(".modal__inner")[0]);
	clearForm(form);
}