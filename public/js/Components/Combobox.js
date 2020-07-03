$(".combobox__info").click(function () {
    let items = $(this).parent().find(".combobox__items");
    let arrow = $(this).parent().find(".combobox__info__arrow i");
    if (items.hasClass("disabled")) {
        items.removeClass("disabled");
        arrow.removeClass("fa-angle-down");
        arrow.removeClass("fa-angle-up");
        arrow.addClass("fa-angle-up");
    } else {
        items.addClass("disabled");
        arrow.removeClass("fa-angle-down");
        arrow.removeClass("fa-angle-up");
        arrow.addClass("fa-angle-down");
    }
});

