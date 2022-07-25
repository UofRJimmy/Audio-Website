$(function () {

	var $songDetail = $("#songDetail");// detailpage information

// expend
$("#btnExpandPlayBox").on("click", function () {
    // style: expand playbox
    $("#pageSongDetail").css({
        "top": "60px",
        "right": 0,
        "opacity": 1
    });
});
$("#btnCompressPlayBox").on("click", function () {
    // style: compress
    $("#pageSongDetail").css({
        "top": "100%",
        "right": "100%",
        "opacity": 0
    });
});
});


