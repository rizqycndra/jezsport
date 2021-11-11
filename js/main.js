window.onscroll = function() {
    scrollFunction()
};

if ($(window).width() < 768) {
    $('.cart').addClass('cart-mo');
    $('.cart-mo').css('transform', 'translateY(100%)');
} else {
    $('.cart').addClass('cart-pc');
    $('.cart-pc').css('transform', 'translateX(100%)');
}

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $('.nav-c').css('height', '50px');
        $('.nav-brand').css('height', '25px');
        $('.nav-btn').css('font-size', '14px');
        $('.notif').css('top', '60px');
    } else {
        $('.nav-c').css('height', '80px');
        $('.nav-brand').css('height', '35px');
        $('.nav-btn').css('font-size', '16px');
        $('.notif').css('top', '90px');
    }
}

function controlMenu(action) {
    if (action == 'show') {
        $('.menu').css('transform', 'translateX(0)');
    } else {
        $('.menu').css('transform', 'translateX(100%)');
    }
}

function controlCart(action) {
    if (action == 'show') {
        if ($(window).width() < 768) {
            $('.cart-mo').css('transform', 'translateY(0)');
        } else {
            $('.cart-pc').css('transform', 'translateX(0)');
        }
    } else if (action == 'close') {
        if ($(window).width() < 768) {
            $('.cart-mo').css('transform', 'translateY(100%)');
        } else {
            $('.cart-pc').css('transform', 'translateX(100%)');
        }
    } else {
        $('.cart-item-del').toggle();
    }
}

function addNotif(message) {
    $('.notif-container').html('<div class="notif">'+message+'</div>')
}