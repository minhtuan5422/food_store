$(document).ready(function() {
    if ($(window).width() < 525) {
        const iconAction = $('.res-none');
        iconAction.show();
        $('.navbar-collapse').append(iconAction);
    }

    const isTouchDevice = 'ontouchstart' in document.documentElement;

    if (!isTouchDevice) {
        $('.nav-item.dropdown').on('mouseenter', function() {
            $(this).addClass('show');
            $(this).find('.dropdown-menu').addClass('show');
        }).on('mouseleave', function() {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        });
    }
});