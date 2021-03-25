(function($) {
    "use strict";
    //sidebar menu open js
    $('.nav_toggle').on('click', function() {
        $(".sidebar_fix_menu").addClass("menu_open");
    });
    $('.sidebar_close_btn').on('click', function() {
        $(".sidebar_fix_menu").removeClass("menu_open");
    });

    //Header Searchbar open js
    $('.h_search_icon').on('click', function() {
        $(".hdr_searchbar").toggleClass("search_open");
        $(this).toggleClass("search_close");
    });
    //Accordion js
    $(".accordion_heading").on("click", function() {
        $(this).toggleClass("active");
        $(this).next(".accordion_content").slideToggle(250);
        $(".accordion_heading").not(this).next(".accordion_content").slideUp(250);
        $(".accordion_heading").not(this).removeClass("active");
    });
    //tabs Menu
    $('.tab_menu .tab_link').on('click', function() {
        $(".tab_content").removeClass("active");
        var tab_data = $(this).attr("data-tab");
        $('.tab_menu .tab_link').removeClass("active");
        $(this).addClass("active");
        $("#" + tab_data).addClass("active");
    });
    //fix header on scroll
    $(window).on('scroll', function(e) {
        if ($(window).scrollTop() > 70) {
            $('.header_section').addClass('fixed_header');
        } else {
            $('.header_section').removeClass('fixed_header');
        }
    });
})(jQuery);