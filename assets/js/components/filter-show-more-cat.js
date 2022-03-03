class GraphPageFilter {
    constructor(selector, options) {
        let defaultOptions = {
            highlightClass: 'filter-highlight',
            childClass: 'filter-element',
            hiddenClass: 'filter-hidden',
            onInput: () => {

            }
        }
        this.options = Object.assign(defaultOptions, options);
        this.input = document.querySelector(selector);
        this.itemParent = document.querySelector(`[data-items-target="${this.input.dataset.items}"]`);
        this.items = this.itemParent.querySelectorAll(`.${this.options.childClass}`);
        this.rex = /(<span.+?>)(.+?)(<\/span>)/g;
        this.rexAtt = 'gi';
        this.event();
        this.onStart();
    }

    event() {
        if (this.input) {
            this.input.addEventListener('input', (e) => {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    let filterText = e.currentTarget.value;

                    if (filterText.length) {
                        this.clear();

                        [].filter.call(this.items, (item) => {
                            if (item.textContent.toUpperCase().includes(filterText.toUpperCase())) {


                                let newHtml = item.textContent;
                                item.innerHTML = newHtml.replace(
                                    new RegExp(filterText, this.rexAtt), (match) => {
                                        return [`<span class="${this.options.highlightClass}">${match}</span>`].join("");
                                    }
                                );
                            } else {
                                item.classList.add(this.options.hiddenClass);
                                // если не нужно - удалить
                                item.closest("label").querySelector("input").checked = false;
                            }
                        });
                    } else {
                        this.clear();
                    }
                }

                this.options.onInput(this);
            });
        }
    }

    clear() {
        this.items.forEach(item => {
            item.classList.remove(this.options.hiddenClass);
            item.innerHTML = `${item.innerHTML.replace(new RegExp(this.rex), "$2")}`;
        });
    }

    onStart() {
        let filterText = this.input.value;

        if (filterText.length) {
            this.clear();

            [].filter.call(this.items, (item) => {
                if (item.textContent.toUpperCase().includes(filterText.toUpperCase())) {


                    let newHtml = item.textContent;
                    item.innerHTML = newHtml.replace(
                        new RegExp(filterText, this.rexAtt), (match) => {
                            return [`<span class="${this.options.highlightClass}">${match}</span>`].join("");
                        }
                    );
                } else {
                    item.classList.add(this.options.hiddenClass);
                }
            });
        } else {
            this.clear();
        }
    }
}


document.addEventListener("DOMContentLoaded", function(event) {
    let catFlag = false;
    $(document).on("click", ".js-catalog-filter__show-more1", function(e) {
        e.preventDefault();
        var $th = $(this);

        switch (catFlag) {
            case false:
                $th.closest(".cat-filters-container").find(".catalog-filter__category-filters").removeClass("_only-shown");
                $th.find("._hide").show();
                $th.find("._show").hide();
                catFlag = true;
                break;
            case true:
                $th.closest(".cat-filters-container").find(".catalog-filter__category-filters").addClass("_only-shown");
                $th.find("._hide").hide();
                $th.find("._show").show();
                catFlag = false;
                break;
        }
    });
    let catFlag2 = false;
    $(document).on("click", ".js-catalog-filter__show-more2", function(e) {
        e.preventDefault();
        var $th = $(this);

        switch (catFlag2) {
            case false:
                $th.closest(".cat-filters-container").find(".catalog-filter__category-filters").removeClass("_only-shown");
                $th.find("._hide").show();
                $th.find("._show").hide();
                catFlag2 = true;
                break;
            case true:
                $th.closest(".cat-filters-container").find(".catalog-filter__category-filters").addClass("_only-shown");
                $th.find("._hide").hide();
                $th.find("._show").show();
                catFlag2 = false;
                break;
        }
    })

    // $(document).on("input", ".js-search-filter", function(e){
    //     if($(this).val().length > 3) {
            
    //     }
    // });

    const searchFilter = new GraphPageFilter('.js-search-filter', {
        highlightClass: 'highlight',
        childClass: 'highlight-element',
        hiddenClass: 'custom-hidden',
        onInput: (filter) => {
        }
    });
});