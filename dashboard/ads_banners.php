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
                       <h3>Ads Banners</h3>
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
                  <div class="gif_dasboard_table">
                    <table class="table dashboard_data_table">
                      <thead>
                        <tr>
                          <th>#</th><th>Ads Key</th><th>Ads Name</th><th>Size</th><th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Page455x255_top</td>
                          <td>Homepage Desktop 455X255 top banner</td>
                          <td>455x255</td>
                          <td class="tbl_action_btns">
                            <a href="edit_ads_banners.php" class="dashboard_button">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Page455x255_top</td>
                          <td>Homepage Desktop 455X255 top banner</td>
                          <td>455x255</td>
                          <td class="tbl_action_btns">
                            <a href="edit_ads_banners.php" class="dashboard_button">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Page455x255_top</td>
                          <td>Homepage Desktop 455X255 top banner</td>
                          <td>455x255</td>
                          <td class="tbl_action_btns">
                            <a href="edit_ads_banners.php" class="dashboard_button">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Page455x255_top</td>
                          <td>Homepage Desktop 455X255 top banner</td>
                          <td>455x255</td>
                          <td class="tbl_action_btns">
                            <a href="edit_ads_banners.php" class="dashboard_button">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Page455x255_top</td>
                          <td>Homepage Desktop 455X255 top banner</td>
                          <td>455x255</td>
                          <td class="tbl_action_btns">
                            <a href="edit_ads_banners.php" class="dashboard_button">Edit</a>
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