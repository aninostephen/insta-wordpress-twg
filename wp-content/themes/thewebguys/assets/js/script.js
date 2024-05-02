jQuery(document).ready(function($) {
    var headerElem = $('header.header-container');
    var navoffset = 200;
    var instapost = JSON.parse(localStorage.getItem('instapost'));
    var burgerMenu = $('.burger-nav-mobile').find('img').clone();
    const { pathname } = location;

    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();  

        if ($('.primary-menu-wrapper').hasClass('active')) {
            $('.primary-menu-wrapper').removeClass('active');
            $('.burger-nav-mobile').html(burgerMenu);
        }

        if (scrollPos >= navoffset) {
            $('header.container.header-container .primary-menu li a').addClass('color-blue');
            headerElem.addClass('scrolled');
            $('.back-top').addClass('view');
        } else {
            $('header.container.header-container.scrolled .primary-menu li a').removeClass('color-blue');
            headerElem.removeClass('scrolled');
            $('.back-top').removeClass('view');
        }
    });

    $('.back-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'fast');
    });

    $('.rounded-btn').click(function() {
        var aboutsection = jQuery('.about-section').offset().top
        var navHeight = jQuery('.header-container').height();
        $('html, body').animate({
            scrollTop: aboutsection - (navHeight * 2)
        }, 'fast');
    });

    $('.burger-nav-mobile').click(function(){
        var _elem = $(this);
        var close = 'X';
        if (!$('.primary-menu-wrapper').hasClass('active')) {
            $('.primary-menu-wrapper').addClass('active');
            var _elem = $(this);
            _elem.html(close);
        } else {
            $('.primary-menu-wrapper').removeClass('active');
            _elem.html(burgerMenu);
        }
        
    });


    async function get_instagram_post () {
        fetch(pathname + 'wp-json/instagram/v1/get/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then((data) => {
            if (data && typeof data.data !== 'undefined') {
                localStorage.setItem('instapost', JSON.stringify(data));
                $('.con3-section').html(data.html);
                $('.con3-section .container').css({'background-image': `url(${data.data[0].media_url})`});
            }
        })
        .catch(error => {
            console.error('Error fetching endpoint:', error);
        });
    }
    if (!instapost) {
        get_instagram_post();
    } else {
        $('.con3-section').html(instapost.html);
        $('.con3-section .container').css({'background-image': `url(${instapost.data.data[0].media_url})`});
    }

    function init() {
        var scrollPos = $(window).scrollTop();
        if (scrollPos > 80) {
            $('header.container.header-container .primary-menu li a').addClass('color-blue');
            headerElem.addClass('scrolled');
        } else {
            $('header.container.header-container.scrolled .primary-menu li a').removeClass('color-blue');
            headerElem.removeClass('scrolled');
        }
    }init();
});