function menuControl(action) {
    if (action == 'show') {
        $('.sidebar').css('transform', 'translateX(0%)');
    } else if (action == 'close') {
        $('.sidebar').css('transform', 'translateX(-100%)');
    }
}