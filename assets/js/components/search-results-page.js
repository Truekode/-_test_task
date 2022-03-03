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



document.addEventListener("DOMContentLoaded", function (event) {
    const filter2 = new GraphPageFilter('#search', {
        highlightClass: 'highlight',
        childClass: 'highlight-element',
        hiddenClass: 'custom-hidden',
        onInput: (filter) => {

        }
    });

    const clearInput = document.querySelector("._cross");
    const input = document.querySelector("#search");

    clearInput.addEventListener("click", () => {
        filter2.clear();
        input.value = "";
        input.closest(".site-menu__searh-label").querySelector(".site-menu__input-name").classList.remove("_active");
    });


    $(document).on("click", ".js-btn-cat", function () {
        let attr = $(this).attr('data-anchor');

        console.log(attr);

        $('html, body').animate({ scrollTop: $(`[data-anchor-child=${attr}]`).offset().top - 100 + 'px' });
        
        return false;
    });

    $(document).on("click", ".js-show-more-search", function () {
        var parent = $(this).closest(".content").find("#js-content-search");
        var sectionId = $(this).attr("data-section-id");
        var url = '/local/include/ajax/test.php'

        $.ajax({
            type: "POST",
            data: {
                id: sectionId
            },
            url: url,
            success: function (data) {
                let dataContent = $(data).find(`[data-section-id=${sectionId}]`).find(".js-content");

                parent.append(dataContent);
            }
        });
        
    });
});