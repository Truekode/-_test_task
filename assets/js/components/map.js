var maps = [];

function initMaps() {
	if ($('.ya_map').length) {
		$('.ya_map').each(function () {
			if ($(this).attr('id')) {
				var id = $(this).attr('id');
				var dataCenter = $(this).attr('data-center');
				var coords = [55.832915, 37.426608];
				var markers = $(this).attr('data-markers');
				var zoom = $(this).attr('data-zoom') || 16;

				if (markers) {
					markers = JSON.parse(markers);
				}

				if (dataCenter) {
					// Центрируем по меткам
					if (dataCenter == 'markers-center') {
						coords = centerOfCoords(markers)

					// Центрируем по координатам
					} else {
						coords = dataCenter.split(',');
					}
				}

				// Создание карты.
				var myMap = new ymaps.Map(id, {
					center: coords,
					zoom: zoom,
					controls: []
				});

				// Метка
				if (markers) {
					$(markers).each(function (idx, el) {
						addPlacemark(el);
					});
				} else {
					addPlacemark(coords);
				}

				// Добавление меток
				function addPlacemark(coords, onClick) {
					var myPlacemark = new ymaps.Placemark(coords, {
                        balloonContent: "Строительный проезд, 7а к1, Москва, 125362"
                    }, {
						iconLayout: 'default#image',
						iconImageHref: '/local/assets/img/marker-icon-map.svg',
						iconImageSize: [62, 62],
						iconImageOffset: [-31, -31]
					});

					myMap.geoObjects.add(myPlacemark)

				}

				// Сохранение карты в массив
				maps.push({
					id: id,
					map: myMap,
					setCenter: function (coords, zoom) {
						myMap.setCenter(coords, zoom, {
							duration: 500,
							timingFunction: "ease-out"
						});
					},
					addPlacemark: function (coords) {
						addPlacemark(coords);
					},
					removePlacemarks: function () {
						myMap.geoObjects.removeAll()
					}
				});
			}
		});
	}
}

document.addEventListener("DOMContentLoaded", function(event) {
	if ($('.ya_map').length) {
		var tag = document.createElement('script');
		tag.src = "https://api-maps.yandex.ru/2.1/?apikey=b0b15954-57af-4901-b78c-0ad5bd94cda8&lang=ru_RU&onload=initMaps";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	}
})