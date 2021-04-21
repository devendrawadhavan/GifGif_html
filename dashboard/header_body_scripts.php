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
                       <h3>Add/Edit body scripts</h3>
                   </div>
                   <div class="h_right_side">
                       <div class="l_user_dropdown">
                            <a href="javascript:void(0)" class="l_dropdown_btn">
                                <img src="assets/images/user_icon.png" alt="User" class="img-fluid"><span class="user_title">Saurav Roy</span>
                            </a>
                            <ul class="l_user_dropdownmenu">
                                <li><a href="edit_profile.php"><i class="fas fa-user-edit"></i>Edit profile</a></li>
                                <li><a href="add_user.php"><i class="fas fa-user-plus"></i>add New user</a></li>
                                <li><a href="all_users.php"><i class="fas fa-user-friends"></i>all user</a></li>
                                <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                   </div>
               </div>
               <!-- dashboard Header -->
                <div class="edit_page_form_wrapper">
                  <!-- black box start-->
                  <div class="black_box header_body_scripts_form">
                    <div class="gif_dashboard_form">
                      <form>
                          <div class="form_group">
                            <label class="labels">Header Scripts</label>
                            <div class="input_group">
                                <textarea class="white_input_text" name="" placeholder="Header Scripts Here.."></textarea>
                            </div>
                          </div>
                          <div class="form_group">
                            <label class="labels">After Body Scripts</label>
                            <div class="input_group">
                                <textarea class="white_input_text" name="" placeholder="After Body Scripts Here.."></textarea>
                            </div>
                          </div>
                        <div class="button_group">
                          <button type="submit" class="dashboard_button">Save Scripts</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- black box End-->
              </div>
           </div>
       </div>
       <!-- Content End -->
    </div>
     <!-- Dashboard Wrapper End -->
    <?php include 'dashboard_footer.php';?>
    <script>
    initSample();
   </script>