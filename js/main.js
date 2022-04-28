$('.copy-link').on('click', function(e) {
    e.preventDefault();
    const { href } = window.location;
    copyTextToClipboard(href);
    $(this).addClass('done');
});

$('.list-faq').children('li').children('h3').on('click', function() {
    $(this).closest('li').toggleClass('active');
});
