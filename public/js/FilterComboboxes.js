$(document).ready(function () {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const sort = urlParams.get('sort') ?? "name";

    let name = "";

    switch (sort) {
        case "name":
            name = "по названию";
            break;
        case "rating":
            name = "по рейтингу";
            break;

    }
    $("#sort-combobox").find(".combobox__info__text").html(name);
});
