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
                       <h3>Add New Tag</h3>
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
               <div class="black_box add_tags_form_box">
                  <div class="gif_dashboard_form add_tags_form">
                    <form>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Name</label>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-12">
                          <div class="input_group">
                            <input class="white_input_text" type="text" name="title" placeholder="Category Name">
                          </div>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Slug</label>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-12">
                          <div class="input_group">
                            <input class="white_input_text" type="text" name="c_slug" placeholder="Category Slug">
                          </div>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Description</label>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-12">
                          <div class="input_group">
                            <textarea class="white_input_text" name="c_desc" placeholder="Category Description"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="button_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels"></label>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-12">
                          <div class="input_group">
                            <button class="dashboard_button tag_submit" type="submit">Add Tag</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
               </div>
           </div>
       </div>
       <!-- Content End -->
    </div>
     <!-- Dashboard Wrapper End -->
<?php include 'dashboard_footer.php';?>