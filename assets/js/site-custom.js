$(window).load(function () {

    'use strict';

    $("#pageloader").delay(1200).fadeOut("slow");
    $(".loader-item").delay(700).fadeOut();

});
/* ==============================================
Custom Javascript
=============================================== */

$(document).ready(function () {
    'use strict'

    // On Scroll Animation
    new WOW().init();


    // Dropdown Menu For Mobile
    $('.dropdown-menu a.dropdown-toggle-mob').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
    });

    $('[data-toggle="tooltip"]').tooltip()


    // On Scroll Header Style One
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.header-fullpage').addClass('fixed');
        } else {
            $('.header-fullpage').removeClass('fixed');
        }
    });

    $('#search_home, .overlay-close').on("click", function ($e) {
        $e.preventDefault();
        $(".overlay").toggleClass("open");
    });

    // On Scroll Back To Top Arrow
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#mkdf-back-to-top').addClass('on');
        } else {
            $('#mkdf-back-to-top').removeClass('on');
        }
    });

    $('#mkdf-back-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    // Bootstrap Collapse
    // $('.collapse').on('shown.bs.collapse', function(){
    //     $(this).parent().find(".icofont-rounded-down").removeClass("icofont-rounded-down").addClass("icofont-rounded-up");
    //     }).on('hidden.bs.collapse', function(){
    //     $(this).parent().find(".icofont-rounded-up").removeClass("icofont-rounded-up").addClass("icofont-rounded-down");
    // });

    $('.toggle').click(function () {

        // alert();

        $('.toggle').removeClass("arrow-down");

        if (!$(this).next().hasClass('show')) {
            $(this).parent().children('.collapse.show').collapse('hide');
            $(this).toggleClass('arrow-down');

        }
        $(this).next().collapse('toggle');


    });

    // /* Conter */
    // $('.counter').counterUp({
    //     delay: 10,
    //     time: 1000
    // });

});