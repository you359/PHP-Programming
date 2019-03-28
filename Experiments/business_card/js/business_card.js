$(document).mouseup(function(e) {
    if (e.which != 1) return false;

    $('.card--front').toggleClass('card--front--flip');
    $('.card--back').toggleClass('card--back--flip');
});


$('a').mouseup(function(e) {
    e.stopPropagation();
});

