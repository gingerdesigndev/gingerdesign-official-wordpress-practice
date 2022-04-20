$('.copy-link').on('click', function(e) {
    e.preventDefault();
    const { href } = window.location;
    copyTextToClipboard(href);
    $(this).addClass('done');
});
