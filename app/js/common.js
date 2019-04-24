$(function () {



    // Функционал мобильного главного меню
    // Выезжание и скрытие меню навигации справа

    var $left_show_menu = $('.left_show_menu');



    $('.hamburger').click(function () {
        $left_show_menu.css('right', 0);
    });

    $('.left_menu_hide').click(function () {
        $left_show_menu.css('right', 10000);
    });

    $('.left_show_menu ul a').click(function () {
        $left_show_menu.css('right', 10000);
    });

    // Page scroll to id

    $(".top_header ul a, a.arrow_down").mPageScroll2id({
        offset:107
    });


    if ($('.mobile_slider_photo').length > 0 && $(window).outerWidth() < 576) {
        $('.mobile_slider_photo').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            centerMode: true,
            variableWidth: true,
            arrows: false
            // nextArrow: "<div class='next_arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
            // prevArrow: "<div class='prev_arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></div>",
            // appendArrows: $('.slider_arrows_wrap .container')
        });
    }

    if ($('.mobile_slider_customers').length > 0 && $(window).outerWidth() < 576) {
        $('.mobile_slider_customers').slick({
            infinite: true,
            nextArrow: "<div class='next_arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
            prevArrow: "<div class='prev_arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></div>"
            // appendArrows: $('.slider_arrows_wrap .container')
        });
    }


    // Equal bloks matchheights plugin

    $('.why_item h5, .customer_item h3, .faq h3').matchHeight();

    $(window).scroll(function() {
    var scrolled = $(window).scrollTop(); // Высота скролла в px


    // Scroll
    if ( scrolled > 0 ) {
        $('.bottom_header').addClass('scroll');
        $('.blue_header ').addClass('scroll');
    } else {
        $('.bottom_header').removeClass('scroll');
        $('.blue_header ').removeClass('scroll');
    }
    });

    // // Methodology show desc
    // $('.methodology_item').hover




    // Hamburger click обработчик клика по меню "гамбкргер" - открытие, закрытие меню навигации

    // function mobile_nav_click() {
    //     if ($(window).outerWidth() < 992) {
    //         $('header nav').css('display', 'none');
    //         $('.hamburger').removeClass('is-active');
    //         $('header ul li a').click(function () {
    //             $('.hamburger').click();
    //         });
    //
    //         $('.hamburger').click(function () {
    //             $(this).toggleClass('is-active');
    //             $('header nav').slideToggle();
    //         });
    //     }
    //     else {
    //         $('header nav').css('display', 'block');
    //     }
    // }
    //
    // mobile_nav_click();

    // Изменение размера окна браузера
    // $(window).resize(function () {
    //     $('.hamburger').unbind('click');
    //     $('header ul li a').unbind('click');
    //     mobile_nav_click();
    // });


    // Маска поля ввода телевона
    // if( $("input[name='phone']").length > 0){
    //     $("input[name='phone']").mask("+7 (999) 999-99-99");
    // }


    // // Checkbox style Jquery-ua
    // if($("input[type=checkbox]").length > 0){
    //     $("input[type=checkbox]").checkboxradio();
    // }

    // Popup Form from MagnificPopup
    // if($('.popup-with-form').length > 0){
    //     $('.popup-with-form').magnificPopup({
    //         type: 'inline',
    //         preloader: false,
    //         focus: '#name',
    //         closeBtnInside: true,
    //
    //         // When elemened is focused, some mobile browsers in some cases zoom in
    //         // It looks not nice, so we disable it:
    //         callbacks: {
    //             beforeOpen: function () {
    //                 if ($(window).width() < 700) {
    //                     this.st.focus = false;
    //                 } else {
    //                     this.st.focus = '#name';
    //                 }
    //             }
    //         }
    //     });
    //
    //     $('.popup-with-form').click(function () {
    //         // var show = $(this).data('form-click');
    //         // alert(show);
    //
    //         $('#popap-form input[name="formData"]').val($(this).data('form-click'));
    //     });
    // }







    // Calculator

    // Подключение первого слайдера
    // $( "#slider-range-min1" ).slider({
    //     range: "min",
    //     value: 6,
    //     min: 1,
    //     max: 20,
    //     slide: function( event, ui ) {
    //         $( "#amount1" ).val(ui.value );
    //     }
    // });
    // $( "#amount1" ).val( $( "#slider-range-min1" ).slider( "value" ) );
    //
    // // Подключение второго слайдера
    // $( "#slider-range-min2" ).slider({
    //     range: "min",
    //     value: 9,
    //     min: 1,
    //     max: 20,
    //     slide: function( event, ui ) {
    //         $( "#amount2" ).val(ui.value );
    //     }
    // });
    // $( "#amount2" ).val( $( "#slider-range-min2" ).slider( "value" ) );
    //
    // // Стилизация чекбокса
    // $( "input[type='checkbox']" ).checkboxradio();
    //
    // // Подключение табов
    // $( "#tabs1, #tabs2" ).tabs();
    //
    // // Подключение видео
    //
    // $('.pretty-embed').prettyEmbed({
    //     showInfo: false,
    //     showRelated: false,
    //     previewSize: 'hd'
    // });


});
