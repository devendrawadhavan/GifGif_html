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
    //Header Searchbar open js
    $('.s_open_icon').on('click', function() {
        $(".fix_social_icons").toggleClass("open_social_dv");
    });
    //Accordion js
    $(".accordion_heading").on("click", function() {
        $(this).toggleClass("active");
        $(this).next(".accordion_content").slideToggle(250);
        $(".accordion_heading").not(this).next(".accordion_content").slideUp(250);
        $(".accordion_heading").not(this).removeClass("active");
    });
    //Sidebar tabs Menu
    $('.gf_sidebar_tabs .tab_link').on('click', function() {
        //$(".s_tab_content").slideUp(100);
        var tab_data = $(this).attr("data-tab");
        //$('.gf_sidebar_tabs .tab_link').removeClass("active");
        $(this).toggleClass("active");
        $("#"+tab_data).toggleClass("active");
    });
    $('.account_link').on('click', function() {
        $("#w_tags_tab").removeClass("active");
        $('.tag_link').removeClass("active");
    });
    $('.tag_link').on('click', function() {
        $("#w_account_tab").removeClass("active");
        $('.account_link').removeClass("active");
    });
    //fix header on scroll
    $(window).on('scroll', function(e) {
        if ($(window).scrollTop() > 70) {
            $('.gif_header_section').addClass('fixed_header');
        } else {
            $('.gif_header_section').removeClass('fixed_header');
        }
    });
    //user Dropdown Menu
    $('.l_dropdown_btn').on('click', function() {
        $(this).next(".l_user_dropdownmenu").toggleClass("show_menu");
    });
})(jQuery);