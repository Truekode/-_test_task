document.addEventListener("DOMContentLoaded", function (event) {
    if (window.matchMedia("(min-width: 767px)").matches) {
        ymaps.ready(init);
    }

    function init() {
        var worldwideWorkMap = new ymaps.Map(
            "worldwide-work-map",
            {
                center: [55.048441, 59.967603],
                zoom: 4,
                controls: [],
            },
            {
                searchControlProvider: "yandex#search",
            }
        ),
            worldwideCollection = new ymaps.GeoObjectCollection(null, {
                hideIconOnBalloonOpen: false,
            });

        collections.forEach(function (collection) {
            var mark = `
                <a data-name="${collection.name}" data-text="${collection.text}" data-img="${collection.img}" data-img-active="${collection.imgActive}" href="#" class="mark">
                    <img src="${collection.img}">
                </a>`

            var infoCoordinates = [
                [0, 0],
                [140, 64],
            ];
            var placemark = new ymaps.Placemark(
                collection.coords,
                {},
                {
                    iconLayout: ymaps.templateLayoutFactory.createClass(collection.img),
                    zIndex: 700,
                    zIndexHover: 800,
                    zIndexActive: 9999,
                    iconShape: {
                        type: "Rectangle",
                        coordinates: infoCoordinates,
                    },
                }
            );

            placemark.options.set(
                "iconLayout",
                ymaps.templateLayoutFactory.createClass(
                    mark
                )
            );

            worldwideCollection.add(placemark);
        });

        worldwideWorkMap.behaviors.disable('scrollZoom')

        var ctrlKey = false;
        var ctrlMessVisible = false;
        var timer;

        // Отслеживаем скролл мыши на карте, чтобы показывать уведомление
        worldwideWorkMap.events.add(['wheel', 'mousedown'], function (e) {
            if (e.get('type') == 'wheel') {
                if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
                    $('#ymap_ctrl_display').fadeIn(300);
                    ctrlMessVisible = true;
                    clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
                    timer = setTimeout(function () {
                        $('#ymap_ctrl_display').fadeOut(300);
                        ctrlMessVisible = false;
                    }, 1500);
                }
                else { // Ctrl нажат, скрываем сообщение
                    $('#ymap_ctrl_display').fadeOut(100);
                }
            }
            if (e.get('type') == 'mousedown' && ctrlMessVisible) { // Скрываем уведомление при клике на карте
                $('#ymap_ctrl_display').fadeOut(100);
            }
        });

        // Обрабатываем нажатие на Ctrl
        $(document).keydown(function (e) {
            if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
                ctrlKey = true;
                worldwideWorkMap.behaviors.enable('scrollZoom');
            }
        });
        $(document).keyup(function (e) { // Ctrl не нажат: выключаем масштабирование мышью
            if (e.which === 17) {
                ctrlKey = false;
                worldwideWorkMap.behaviors.disable('scrollZoom');
            }
        });

        worldwideCollection.events.add("mouseenter", function (e) {
            var el = e.get('target');
            var overlay = el.getOverlaySync();
            var layout = overlay.getLayoutSync();
            var element = layout.getParentElement();
            var markEl = $(element).find(".mark");
            var marImg = $(markEl).attr("data-img");
            var marImgActive = $(markEl).attr("data-img-active");
            var marName = $(markEl).attr("data-name");
            var marText = $(markEl).attr("data-text");

            e.get("target").options.set(
                "iconLayout",
                ymaps.templateLayoutFactory.createClass(
                    `<a href="/" data-name="${marName}" data-text="${marText}" data-img="${marImg}" data-img-active="${marImgActive}" class="mark mod-mark-active">
                        <img src="${marImgActive}">
                        <div class="mark__info">
                            <div class="mark__info-inner">
                                <span class="mark__info-name">
                                    ${marName}
                                </span>
                                <span class="mark__info-text">
                                    ${marText}
                                </span>
                            </div>
                        </div>
                    </a>`
                )
            );
        });

        worldwideCollection.events.add("mouseleave", function (e) {
            var el = e.get('target');
            var overlay = el.getOverlaySync();
            var layout = overlay.getLayoutSync();
            var element = layout.getParentElement();
            var markEl = $(element).find(".mark");
            var marImg = $(markEl).attr("data-img");
            var marImgActive = $(markEl).attr("data-img-active");
            var marName = $(markEl).attr("data-name");
            var marText = $(markEl).attr("data-text");

            e.get("target").options.set(
                "iconLayout",
                ymaps.templateLayoutFactory.createClass(
                    `<a href="/" data-name="${marName}" data-text="${marText}" data-img="${marImg}" data-img-active="${marImgActive}" class="mark mod-mark-active">
                        <img src="${marImg}">
                    </a>`
                )
            );
        });

        worldwideWorkMap.geoObjects.add(worldwideCollection);
    }
})