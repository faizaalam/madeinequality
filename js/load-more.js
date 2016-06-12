$(document).ready(function () {
size_li = $(".posts .post").size();
    x=3;
    $('.posts .post:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li;
        $('.posts .post('+x+')').show();
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('.posts .post').not(':lt('+x+')').hide();
    });
});

