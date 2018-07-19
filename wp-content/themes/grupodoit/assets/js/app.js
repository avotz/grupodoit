
require('./config');
const $ = require('jquery');
const hoverintent = require('hoverintent');
require('slick-carousel');
require('./vendor/jquery.magnific-popup.min.js');

let $btnMenu = $('#btn-menu'),
    $menu = document.querySelector('.header-menu .menu-item-has-children'),
    $body = $('body');


$btnMenu.on('click', function (e) {

    $body.toggleClass('nav-is-open');

});

var opts = {
    timeout: 200,
    interval: 50
};

hoverintent($menu,
    function () {
        $(this).find(">.sub-menu").slideDown(200);
    }, function () {
        $(this).find(">.sub-menu").slideUp(200);
    }).options(opts);


function isHome() {

    return $('body').hasClass('home');

}
function isSmall() {

    return $('body').hasClass('fp-responsive');;

}
if(isHome()){
    const fullpage = require('fullpage.js');

    new fullpage('#fullpage', {
        //options here
        controlArrows:true,
        fitToSection: true,
        autoScrolling: true,
        scrollHorizontally: false,
        slidesNavigation: false,
        scrollOverflow: true,
        loopBottom: true,
        loopHorizontal: false,
        navigation: false,
        css3: true,
        interlockedSlides:true,
        anchors: ['home', 'history', 'portfolio', 'contact'],
        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',

    });

}

$('.portfolio-item').on('click', 'a', function (e) {
    e.preventDefault();

    if (!isSmall()) {
        window.location.href = $(this).attr('data-href');
    }else{
        window.location.href = $(this).attr('href');
    }
    
});

$('.banner-slider').slick({
    dots: false,
    autoplay:true,
    speed: 500,
    arrows: false,
    cssEase: 'linear',
    fade: true,
    pauseOnHover: false
});

resizes();
$(window).resize(resizes);

function resizes() {
    console.log('disparo resize');
    responsive();

   
}
function responsive() {

    var isResponsive = $('body').hasClass('fp-responsive');
    if (getWindowWidth() < 900) {
        if (!isResponsive) {
            fullpage_api.setAutoScrolling(false, 'internal');
            //fullpage_api.setAllowScrolling(false);
            fullpage_api.setFitToSection(false);
            $('.section-portfolio').addClass('fp-auto-height')
            $('body').addClass('fp-responsive');
        }
    } else if (isResponsive) {
        fullpage_api.setAutoScrolling(true);
        //fullpage_api.setAllowScrolling(true);
        fullpage_api.setFitToSection(true);
        $('body').removeClass('fp-responsive');
        $('.section-portfolio').removeClass('fp-auto-height')
    }


}


function getScrollerWidth() {
    var scr = null;
    var inn = null;
    var wNoScroll = 0;
    var wScroll = 0;

    // Outer scrolling div
    scr = document.createElement('div');
    scr.style.position = 'absolute';
    scr.style.top = '-1000px';
    scr.style.left = '-1000px';
    scr.style.width = '100px';
    scr.style.height = '50px';
    // Start with no scrollbar
    scr.style.overflow = 'hidden';

    // Inner content div
    inn = document.createElement('div');
    inn.style.width = '100%';
    inn.style.height = '200px';

    // Put the inner div in the scrolling div
    scr.appendChild(inn);
    // Append the scrolling div to the doc
    document.body.appendChild(scr);

    // Width of the inner div sans scrollbar
    wNoScroll = inn.offsetWidth;
    // Add the scrollbar
    scr.style.overflow = 'auto';
    // Width of the inner div width scrollbar
    wScroll = inn.offsetWidth;

    // Remove the scrolling div from the doc
    document.body.removeChild(
        document.body.lastChild);

    // Pixel width of the scroller
    return (wNoScroll - wScroll);
}

function getWindowHeight() {
    var windowHeight = 0;
    if (typeof (window.innerHeight) == 'number') {
        windowHeight = window.innerHeight;
    } else {
        if (document.documentElement && document.documentElement.clientHeight) {
            windowHeight = document.documentElement.clientHeight;
        } else {
            if (document.body && document.body.clientHeight) {
                windowHeight = document.body.clientHeight;
            }
        }
    }
    return windowHeight;
}

function getWindowWidth() {
    var windowWidth = 0;
    if (typeof (window.innerWidth) == 'number') {
        windowWidth = window.innerWidth;
    } else {
        if (document.documentElement && document.documentElement.clientWidth) {
            windowWidth = document.documentElement.clientWidth;
        } else {
            if (document.body && document.body.clientWidth) {
                windowWidth = document.body.clientWidth;
            }
        }
    }
    return windowWidth;
}

/*
$('.contact-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
        beforeOpen: function () {

            this.st.mainClass = 'mfp-zoom-out';
            $('body').addClass('mfp-open');
        },
        beforeClose: function () {


            $('body').removeClass('mfp-open');
        }

    }


});

$('.contact-popup-link').on('click', function (e) {

    $('#contact-popup').find('input[name="your-subject"]').val($(this).attr('data-title'));

});*/


console.log('cargado');

