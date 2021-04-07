<?php include 'dashboard_header.php';?>
    <!-- Dashboard Wrapper Start -->
    <div class="gf_dashboard_wrapper">
      <!-- sidebar start -->
       <?php include 'dashboard_sidebar.php';?>
       <!-- sidebar End -->
       <!-- content start -->
       <div class="gf_dash_content">
           <div class="gf_dash_content_inr">
              <!-- dashboard Header -->
               <div class="dash_page_header">
                   <div class="dash_page_title">
                       <h3>settings</h3>
                   </div>
                   <div class="h_right_side">
                       <div class="l_user_dropdown">
                            <a href="javascript:void(0)" class="l_dropdown_btn">
                                <img src="assets/images/user_icon.png" alt="User" class="img-fluid"><span class="user_title">Saurav Roy</span>
                            </a>
                            <ul class="l_user_dropdownmenu">
                                <li><a href="#"><i class="fas fa-user-edit"></i>Edit profile</a></li>
                                <li><a href="#"><i class="fas fa-user-plus"></i>add New user</a></li>
                                <li><a href="#"><i class="fas fa-user-friends"></i>all user</a></li>
                                <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                   </div>
               </div>
               <!-- dashboard Header -->
              <div class="setting_page_wrapper">
                <form>
                  <!-- black box -->
                  <div class="black_box setting_form_box">
                    <div class="gif_dashboard_form gif_setting_form">
                      <h5 class="form_heading">Website Setting</h5>
                        <div class="row">
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Facebook</label>
                            <div class="input_group">
                              <input class="white_input_text" type="url" name="title" value="https://www.facebook.com/">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Twitter</label>
                            <div class="input_group">
                             <input class="white_input_text" type="url" name="title" value="https://twitter.com/">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">pinterest</label>
                            <div class="input_group">
                              <input class="white_input_text" type="url" name="title" value="https://www.pinterest.ca/">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Reddit</label>
                            <div class="input_group">
                              <input class="white_input_text" type="url" name="title" value="https://www.reddit.com/">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Whatsapp</label>
                            <div class="input_group">
                              <input class="white_input_text" type="text" name="title" value="1234567895">
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <!-- black box End-->
                  <!-- black box start-->
                  <div class="black_box setting_form_box">
                    <div class="gif_dashboard_form gif_setting_form">
                      <h5 class="form_heading">Meta tags for Home page</h5>
                        <div class="row">
                          <div class="form_group col-lg-12 col-12">
                            <label class="labels">Meta Tag Title</label>
                            <div class="input_group">
                              <input class="white_input_text" type="text" name="metatitle" value="gifgifmagazine">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Meta Tag Description</label>
                            <div class="input_group">
                              <textarea class="white_input_text" value="gifgifmagazine">gifgifmagazine</textarea>
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Meta Tag Keywords</label>
                            <div class="input_group">
                              <textarea class="white_input_text" value="gifgifmagazine">gifgifmagazine</textarea>
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Logo</label>
                            <div class="input_group">
                              <input type="file" name="logofile" class="white_input_text logo_upload_input">
                              <img src="assets/images/logo.png" alt="Logo" class="upload_imgs" id="logo_preview">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Favicon</label>
                            <div class="input_group">
                              <input type="file" name="faviconfile" class="white_input_text fav_upload_input">
                              <img src="assets/images/favicon.png" alt="Favicon" class="upload_imgs" id="fav_preview">
                            </div>
                          </div>
                        </div>
                        <div class="button_group">
                          <button type="submit" class="dashboard_button">Update</button>
                        </div>
                    </div>
                  </div>
                  <!-- black box End-->
                </form>
              </div>
           </div>
       </div>
       <!-- Content End -->
    </div>
     <!-- Dashboard Wrapper End -->
<?php include 'dashboard_footer.php';?>