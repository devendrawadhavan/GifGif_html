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
                       <h3>Edit Page</h3>
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
                  <div class="black_box edit_page_form_box">
                    <div class="gif_dashboard_form edit_page_form">
                      <form>
                        <div class="row">
                          <div class="form_group col-lg-12 col-12">
                            <label class="labels">Page Title</label>
                            <div class="input_group">
                              <input class="white_input_text" type="text" name="page_title" placeholder="Page Title">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Slug</label>
                            <div class="input_group">
                              <input class="white_input_text" type="text" name="page_slug" placeholder="Page Slug">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Status</label>
                            <div class="input_group">
                              <select>
                                <option>Select Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                              </select>
                            </div>
                          </div>
                          <div class="form_group col-lg-12 col-12">
                            <label class="labels">Description</label>
                            <div class="input_group">
                                <div id="editor">
                                  <h1>Hello world!</h1>
                                  <p>ddddd</a>.</p>
                                </div>
                            </div>
                          </div>
                          <div class="form_group col-lg-12 col-12">
                            <label class="labels">Meta Tag Title</label>
                            <div class="input_group">
                              <input class="white_input_text" type="text" name="metatitle" placeholder="Meta Tag Title">
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Meta Tag Description</label>
                            <div class="input_group">
                              <textarea class="white_input_text" placeholder="Page Description"></textarea>
                            </div>
                          </div>
                          <div class="form_group col-lg-6 col-12">
                            <label class="labels">Meta Tag Keywords</label>
                            <div class="input_group">
                              <textarea class="white_input_text" placeholder="Meta Tag Keywords"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="button_group">
                          <button type="submit" class="dashboard_button">Update</button>
                          <input type="reset" id="form_reset" class="reset_button" value="Reset">
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