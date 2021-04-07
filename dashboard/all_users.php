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
                       <h3>All Users</h3>
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
               <!-- Searchbar start -->
               <div class="gif_dash_searchbar_box black_box">
                  <div class="row">
                     <div class="col-md-12 col-12">
                       <div class="searchbar_dv">
                            <input class="white_input_text" type="text" name="" placeholder="Search">
                            <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
               </div>
               <!-- Searchbar End -->
               <div class="gif_all_users_table">
                  <div class="gif_dasboard_table table-responsive">
                    <table class="table dashboard_data_table">
                      <thead>
                        <tr>
                          <th>Username</th><th>Role</th><th>Email</th><th>Active</th><th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Vicky Makkad</td>
                          <td><span class="role_text">Administrator</span></td>
                          <td>vmakkadd@gmail.com</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Saurav Roy</td>
                          <td><span class="role_text">Administrator</span></td>
                          <td>saurav.roy31@gmail.com</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Ruslan</td>
                          <td><span class="role_text">Administrator</span></td>
                          <td>testruslan@gmail.com</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>jesenijaomanovic@yahoo.it</td>
                          <td><span class="role_text">user</span></td>
                          <td>jesenijaomanovic@yahoo.it</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>sebaljantun@gmail.com</td>
                          <td><span class="role_text">Administrator</span></td>
                          <td>sebaljantun@gmail.com</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>saurav.roy@landocsventures.com</td>
                          <td><span class="role_text">Administrator</span></td>
                          <td>saurav.roy@landocsventures.com</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
               </div>
           </div>
       </div>
       <!-- Content End -->
    </div>
     <!-- Dashboard Wrapper End -->
<?php include 'dashboard_footer.php';?>