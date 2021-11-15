function menuControl(action) {
    if (action == 'show') {
        $('.sidebar').css('transform', 'translateX(0%)');
    } else if (action == 'close') {
        $('.sidebar').css('transform', 'translateX(-100%)');
    }
}


function tabSelect(tabSection) {
    $('.order-tab-content').hide()
    $('.order-tab-active').removeClass('order-tab-active')
    $('#'+tabSection).show()
    $('[tabselect*="'+tabSection+'"]').addClass('order-tab-active')
}