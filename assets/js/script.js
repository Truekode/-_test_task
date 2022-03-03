$(function (){
	// выбор преподавалеля при оформлении заявки на курс
	$('.steps__content-block_teacher .select__item').on('click', function (){
		let teacher = $(this).attr('data-value').trim();
		$('.steps__content-block_teacher input[name="teacher"]').attr('value', teacher);
	});
	// выбор преподавалеля при оформлении заявки на курс END

	//постраничная навигация
	if($('.catalog-page__courses-pagination').length > 0){
		$(document).on("click", ".catalog-page__courses-pagination a", function(e) {
			e.preventDefault();
			var action = $(this).attr('href');
			showPreloader();
			$.post(action).then(function(data) {
				ajaxLoadProducts(data, action);
				hidePreloader();
			});
		});
	}
	// постраничная навигация END

	// Фильтрация
	$('.catalog-filter__button').on('click', function(e) {
		e.preventDefault();
		if($('#modef'). length > 0){
			let action = $('#modef a').attr('href');
			showPreloader();
			$.post(action).then(function(data) {
				ajaxLoadProducts(data, action);
				hidePreloader();
			});
		}

	})
	// Фильтрация END

	// сортировка
	$('.catalog-page__courses-sort .sort__item').on('click', function () {
		let sort = $(this).attr('data-sort');
		let sortOrder = $(this).attr('data-sort-order');
		let sortText = $(this).text().trim();
		$('.sort__heading').html(sortText + '<svg class="icon icon-sort"><use xlink:href="/local/assets/img/sprite.svg#sort"></use></svg>');
		// в action не нужна постраничка
		let action = location.pathname;
		showPreloader();
		$.post(
			action,
			{
				SORT: sort,
			 	SORT_ORDER: sortOrder,
				SORT_TEXT: sortText
			},
			function( data ) {
				ajaxLoadProducts(data, action);
				hidePreloader();
			}
		);
	});
	// сортировка END


	// общее количество товаров
	if($('.catalog-page__item').length > 0){
		let totalCourses = $('.catalog-page__item').attr('data-total-count');
		if(totalCourses){
			$('.catalog-page__course-count').text(totalCourses);
		}
	}
	// общее количество товаров END

	// Сообщение, что курсы не найдены
	let dateText =  $('#no-date-couses-text').html();
	if(dateText) {
		$('.empty-dates__heading').html(dateText);
		$('.catalog-page__empty-dates').show();
		$('.empty-dates__legend').hide();
		$('.catalog-page__courses-sort').hide();
	}
	// Сообщение, что курсы не найдены END

});


// функция аякс подгрузки товаров и постранички
function ajaxLoadProducts(data, action){
	var $data = $("<div>"+data+"</div>");
	var html = $data.find(".catalog-page__courses-container").html();
	var pagination = $data.find(".catalog-courses-pagination-container").html();

	$(".catalog-page__courses-container").html(html);
	$(".catalog-courses-pagination-container").html(pagination);

	let totalCourses = $('.catalog-page__item').attr('data-total-count');
	if(totalCourses){
		$('.catalog-page__course-count').text(totalCourses);
	}

	$('.catalog-filter-modal').removeClass('active');
	$('body').css('overflow', 'visible');

	// прокрутка к началу списка
	$('html, body').animate({
		scrollTop: $(".catalog-page__courses-sort").offset().top - $('.header._fixed').outerHeight()
	}, 300);

	// Сообщение, что курсы не найдены
	let dateText =  $data.find('#no-date-couses-text').html();
	if(dateText) {
		$('.empty-dates__heading').html(dateText);
		$('.catalog-page__empty-dates').show();
		$('.empty-dates__legend').hide();
		$('.catalog-page__courses-sort').hide();
		$('.catalog-page__courses-pagination').hide();
	}else{
		$('.empty-dates__heading').html('');
		$('.catalog-page__empty-dates').hide();
		$('.empty-dates__legend').show();
		$('.catalog-page__courses-sort').show();
		$('.catalog-page__courses-pagination').show();
	}
	// Сообщение, что курсы не найдены END

	window.history.pushState(null, null, action);
}
// функция аякс подгрузки товаров и постранички END


