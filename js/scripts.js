function checkScroll() {
    // Update navbar
    var currentLink = '#' + $('.main.page').filter(function (_, element) {
        return $(element).css('left') == '0px';
    }).attr('id') + 'link';

    $('.navlink:not(' + currentLink + ')').removeClass('selected');
    $(currentLink).addClass('selected');
};

jQuery(function () {
    // Setup navbar
    $('.navlink:not(.outbound) a').click(function (event) {
        // Stop from scrolling to page, then back, then animating
        event.preventDefault();

        // Element to scroll to
        var elementToScrollTo = $( this ).attr( 'href' ).substring( 1 );

        var indexToScrollTo = $('.main.page' + elementToScrollTo).index();

        $('.main.page').each(function (index, element) {
            $(element).animate({ left: ((index - indexToScrollTo) * 100) + '%' }, 500, checkScroll);
        });
    });

    checkScroll();

    $(window).scroll(checkScroll);
});
