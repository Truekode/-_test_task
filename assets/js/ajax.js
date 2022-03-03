document.addEventListener("DOMContentLoaded", function(event) {
    
	// отправка форм
	// $(document).on("submit", "form", function(e){
	// 	e.preventDefault();
	// 	var name = $(this).attr("name");
	// 	var form = $(this);
    //     var url = form.attr("action");
    //     var params = form.serialize();

	// 	if (form.valid()) {

    //         // промокод на странице оформлеия курса
	// 		if(name === "promocode") {
	// 			$.ajax({
	// 				type: "POST",
	// 				data: params,
	// 				url: url,
	// 				success: function(data) {
    //                     form.addClass("promocodeIsSuccess");
    //                     form.closest(".side-block__promocode_wrap").find(".side-block__reset-button").addClass("_is-active");
	// 				}
	// 			})
	// 		}

	// 	}
	// });
});