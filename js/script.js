$('.heart').hover(function() {
    $(this).find('.like').hide();
    $(this).find('.unlike').show();
}, function() {
    $(this).find('.unlike').hide();
    $(this).find('.like').show();
});

