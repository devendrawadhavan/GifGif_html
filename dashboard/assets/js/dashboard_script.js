(function($) {
    "use strict";
    //sidebar menu open js
    $('.nav_toggle').on('click', function() {
        $(".sidebar_fix_menu").addClass("menu_open");
    });
    //dashboard sidebar close
    $('.dash_close_btn').on('click', function() {
        $(".gf_dashboard_wrapper").toggleClass("gif_dashboard_close");
    });
    //user Dropdown Menu
    $('.l_dropdown_btn').on('click', function() {
        $(this).next(".l_user_dropdownmenu").toggleClass("show_menu");
    });
    //dashboard sidebar close on mobile tablet resize
    $(window).on('resize', function(){
        if ($(window).outerWidth() < 1100) {
            $(".gf_dashboard_wrapper").addClass("gif_dashboard_close");
        }
        else{
            $(".gf_dashboard_wrapper").removeClass("gif_dashboard_close");
        }
    });
    //select 2 multiple js
    $('.js-example-basic-multiple').select2();
})(jQuery);