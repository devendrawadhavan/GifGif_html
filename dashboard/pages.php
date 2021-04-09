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
                       <h3>Pages</h3>
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
               <div class="gif_page_tables">
                  <div class="gif_dasboard_table table-responsive">
                    <table class="table dashboard_data_table">
                      <thead>
                        <tr>
                          <th>Name</th><th>Slug</th><th>Created At</th><th>Status</th><th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Page DMCA</td>
                          <td>Page-DMCA</td>
                          <td>02-04-2021 3:00 PM</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="edit_page.php" class="a_icon"><i class="fas fa-pen"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Privacy Policy</td>
                          <td>Privacy-Policy</td>
                          <td>02-04-2021 3:00 PM</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="edit_page.php" class="a_icon"><i class="fas fa-pen"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Cookie Policy</td>
                          <td>Cookie-Policy</td>
                          <td>02-04-2021 3:00 PM</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="edit_page.php" class="a_icon"><i class="fas fa-pen"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Terms Of Service</td>
                          <td>Terms-Service</td>
                          <td>02-04-2021 3:00 PM</td>
                          <td>
                            <label class="switch_checkbox">
                              <input type="checkbox" name="active_user" value="active">
                              <span class="round_dv">
                                <span class="circles"></span>
                              </span>
                            </label>
                          </td>
                          <td class="tbl_action_btns">
                            <a href="edit_page.php" class="a_icon"><i class="fas fa-pen"></i></a>
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