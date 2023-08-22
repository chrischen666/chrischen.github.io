let select = 1;
let preSelect = 1;

$(document).ready(function () {
    let x = "";
    x = `<div class="container">
    <div class="carousel_wrap">
        <div class="carousel_img">
            <img id="show" />
        </div>
        <div id="btnPrev"><img src="./images/btnPrev.png" /></div>
        <div id="btnNext"><img src="./images/btnNext.png" /></div>
        <div id="select"></div>
    </div>
</div> `;
    $(".carousel").html(x);
    for (let i = 1; i <= 4; i++) {
        $("#select").append(`<div id="div${i}" class='click'></div>`);
        $("#div" + i).on("click", { num: i }, add);
    }
    fnChange();
    timer = setInterval(fnNext, 3000);
    function restartTimer() {
        clearInterval(timer);
        timer = setInterval(fnNext, 3000);
    }
    $("#btnNext, #btnPrev,.click").click(restartTimer);
    $("#btnPrev").on("click", fnPrev);
    $("#btnNext").on("click", fnNext);
});
function fnPrev() {
    if ($("#btnPrev").hasClass("disabled")) {
        return;
    } else {
        $("#btnPrev").addClass("disabled");
    }
    setTimeout(function () {
        $("#btnPrev").removeClass("disabled");
    }, 500);
    preSelect = select;
    select -= 1;
    if (select < 1) {
        select = 4;
    }
    fnChange();
}
function fnNext() {
    if ($("#btnNext").hasClass("disabled")) {
        return;
    } else {
        $("#btnNext").addClass("disabled");
    }
    setTimeout(function () {
        $("#btnNext").removeClass("disabled");
    }, 500);

    preSelect = select;
    select += 1;
    if (select > 4) {
        select = 1;
    }
    fnChange();
}

function add(a) {
    select = a.data.num;
    if ($("#div" + select).hasClass("disabled")) {
        return;
    } else {
        $("#div" + select).addClass("disabled");
    }
    setTimeout(function () {
        $("#div" + select).removeClass("disabled");
    }, 500);
    $("#show").hide().fadeIn(500);
    let filename = "./images/pic_" + select + ".png";
    $("#show").attr("src", filename);
    $("#div" + select).addClass("show_click");
    if (preSelect != select) {
        $("#div" + preSelect).removeClass("show_click");
    }
    preSelect = select;
}
function fnChange() {
    $("#show").hide().fadeIn(500);
    let filename = "./images/pic_" + select + ".png";
    $("#show").attr("src", filename);
    $("#div" + select).addClass("show_click");
    if (preSelect != select) {
        $("#div" + preSelect).removeClass("show_click");
    }
    preSelect = select;
}
