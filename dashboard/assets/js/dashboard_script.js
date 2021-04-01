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
    $('.multiple_js_select_box').select2();
    //custome file upload preview
    $(".custome_file_upload_input").change(function() {
      readURL(this);
    });
    //custome file upload Url
    $(".custome_file_upload_url").on('keyup', function() {
        let src = $(this).val();
        $('#custom_img_preview').attr('src', src);
    });
})(jQuery);
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#custom_img_preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}