document.addEventListener("DOMContentLoaded", function(event) {
    // мобилка
    let filterFlag = false;
    $(document).on("click", ".catalog__show-tags_mobile", function () {
        switch (filterFlag) {
            case false:
                $(".catalog__mobile-tags").slideDown();
                $(this).find(".catalog__show-tags-legend._show").hide();
                $(this).find(".catalog__show-tags-legend._hide").show(); 
                $(this).addClass("is-open");
                filterFlag = true;
                break;
            case true:
                $(".catalog__mobile-tags").slideUp();
                $(this).find(".catalog__show-tags-legend._show").show();
                $(this).find(".catalog__show-tags-legend._hide").hide(); 
                $(this).removeClass("is-open");
                filterFlag = false;
                break;
        }
    });

    // клик по тегам
    $(document).on("click", ".catalog__tag", function() {

    	var $link = $("a.catalog__all-courses");
    	//$link.hide();

        var $list = $(this).closest(".catalog__tags");
        var $tag = $(this);
        var data = {
            tag: []
        }

        if($tag.hasClass("_active")){
        	$(".catalog__tag").removeClass("_active");
        	$(".catalog__tags-all").toggleClass("_active"); 
        	$link_href = "/catalog/";
        }else{
 
	        $(".catalog__tag, .catalog__tags-all").removeClass("_active");
	        $tag.toggleClass("_active"); 

	        $list.find(".catalog__tag._active").each(function() {
	            var tagId = $(this).attr("data-filter-course"); 
	            data.tag.push(tagId);
	            $link_href = "/catalog/filter/type_of_sport-is-"+tagId.toLowerCase()+"/apply/";
	        });
        }

        $link.attr("href", $link_href);

        showPreloader();
        $.ajax({
            type: 'POST',
            url: "",
            data: data,
            success: function(data){
                var $data = $("<div>"+data+"</div>");
                var html = $data.find(".catalog__item-container").html();
                $(".catalog__item-container").html(html);
                hidePreloader();

                // прокрутка к началу блока
				$('html, body').animate({
					scrollTop: $(".catalog__tags").offset().top - $('.header._fixed').outerHeight()
				}, 300);
            }
        });
        
    });

    $(document).on("click", ".catalog__tags-all", function() {
    	$(".catalog__tag._active").click();
    });
    // клик по тегам END


    /*$(document).on("click", ".catalog__tag", function () {
        $(".catalog__tag").removeClass("_active");
        $(this).addClass("_active");
    });*/
});