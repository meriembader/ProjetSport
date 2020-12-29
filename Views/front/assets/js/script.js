(function($) {
    'use strict'

    /*
    ========================================
    Preloader
    ========================================
    */
    $(window).on('load', function() {
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    });


    $(document).ready(function() {

        /*
        ========================================
        Top Nav
        ========================================
        */

        /* var shrinkHeader = 60;
        $(window).on('scroll', function() {
            var scroll = getCurrentScroll();
            if (scroll >= shrinkHeader) {
                $('.top-nav').addClass('topnav');
            } else {
                $('.top-nav').removeClass('topnav');
            }
        });

        function getCurrentScroll() {
            return window.pageYOffset;
        }; */

        /*
        ========================================
        Top Nav 2
        ========================================
        */

        window.onscroll = function() { myFunction() };

        var navbar = document.getElementById("cssmenu");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        };

        /*
        ========================================
        Animate Aos
        ========================================
        */
        AOS.init({
            duration: 1200, // values from 0 to 3000, with step 50ms
        });

        /*
        ========================================
        About Box
        ========================================
        */
        $("#slider-0").slider({
            time: 20,
        });

        /*
        ========================================
        doest work video
        ========================================
        */
        $('.video-play-button').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        /*
        ========================================
        shop single gallery
        ========================================
        */
        $('.shop-single-gallery').magnificPopup({
            delegate: '.sg',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            }
        });

        /*
        ========================================
        Fitner Classes
        ========================================
        */
        $('ul.classes-tabs li').on('click', function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.classes-tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });

        /*
        ========================================
        Bmi Tabs
        ========================================
        */
        $('ul.bmi-tabs li').on('click', function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.bmi-tabs li').removeClass('current');
            $('.tab-content2').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });

        /*
        ========================================
        Shop Single Tab
        ========================================
        */
        $('ul.shop-single-tab li').on('click', function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.shop-single-tab li').removeClass('current');
            $('.tab-content3').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });

        /*
        ========================================
        Counter
        ========================================
        */
        $('.counter').countUp({
            'time': 3000,
            'delay': 10
        });

        /*
        ========================================
        Shop Slider
        ========================================
        */
        $('.shop-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            dots: false,
            asNavFor: '.shop-slider2'
        });
        $('.shop-slider2').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.shop-slider',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: false,
        });

        /*
        ========================================
        Parallax
        ========================================
        */
        $('.parallax').parallax("30%", 0.1);



    });

    /*
    ========================================
    Hero
    ========================================
    */
    $(document).ready(function() {

        var owl = $('.header .owl-carousel');
        // Slider owlCarousel
        $('.fullslider').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            autoplay: true,
            dots: false,
            smartSpeed: 700,
            animateOut: 'fadeOut',

        });

        owl.on('changed.owl.carousel', function(event) {
            var item = event.item.index - 2;
            $('h1').removeClass('animated fadeInLeft');
            $('p').removeClass('animated fadeInRight');
            $('a').removeClass('animated zoomIn');
            $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInLeft');
            $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInRight');
            $('.owl-item').not('.cloned').eq(item).find('a').addClass('animated zoomIn');
        });

    });

    /*
    ========================================
    Hero2
    ========================================
    */
    $(document).ready(function() {

        var owl = $('.header2 .owl-carousel');
        // Slider owlCarousel
        $('.fullslider2').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            autoplay: true,
            dots: false,
            smartSpeed: 700,
            animateOut: 'fadeOut'
        });

        owl.on('changed.owl.carousel', function(event) {
            var item = event.item.index - 2;
            $('h1').removeClass('animated fadeInLeft');
            $('p').removeClass('animated fadeInRight');
            $('a').removeClass('animated zoomIn');
            $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInLeft');
            $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInRight');
            $('.owl-item').not('.cloned').eq(item).find('a').addClass('animated zoomIn');
        });

    });

    /*
    ========================================
    Hero3
    ========================================
    */
    $(document).ready(function() {

        var owl = $('.header3 .owl-carousel');
        // Slider owlCarousel
        $('.fullslider3').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            autoplay: true,
            dots: false,
            smartSpeed: 700,
            animateOut: 'fadeOut'
        });

        owl.on('changed.owl.carousel', function(event) {
            var item = event.item.index - 2;
            $('h1').removeClass('animated fadeInLeft');
            $('p').removeClass('animated fadeInRight');
            $('a').removeClass('animated zoomIn');
            $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInLeft');
            $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInRight');
            $('.owl-item').not('.cloned').eq(item).find('a').addClass('animated zoomIn');
        });

    });

})(jQuery);