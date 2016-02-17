$('document').ready(function() {
    $('.invisible').click(function(event) {
        event.preventDefault();
        $(this).toggleClass('highlighted');
    });
});