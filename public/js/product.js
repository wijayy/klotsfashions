$(document).ready(function () {
    $(".small-img").click(function () {
        var newSrc = $(this).attr("src");
        $("#mainImg").fadeOut(100, function () {
            $(this).attr("src", newSrc).fadeIn(300);
        });
    });
});
