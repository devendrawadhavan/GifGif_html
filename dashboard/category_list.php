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
                       <h3>Add New Category</h3>
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
                     <div class="col-lg-9 col-md-8 col-12">
                       <div class="searchbar_dv">
                            <input class="white_input_text" type="text" name="" placeholder="Search">
                            <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-12 search_right_side">
                        <a href="add_category.php" class="dashboard_button">Add Category</a>
                      </div>
                    </div>
               </div>
               <!-- Searchbar End -->
               <div class="gif_category_listing">
                  <div class="gif_dasboard_table table-responsive">
                    <table class="table dashboard_data_table">
                      <thead>
                        <tr><th>Name</th><th>Slug</th><th>Action</th></tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>people<span class="n_count">(4317)</span></td>
                          <td>people</td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="fas fa-pen"></i></a>
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>animals<span class="n_count">(2072)</span></td>
                          <td>animals</td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="fas fa-pen"></i></a>
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>other<span class="n_count">(1587)</span></td>
                          <td>other</td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="fas fa-pen"></i></a>
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Anime<span class="n_count">(352)</span></td>
                          <td>Anime</td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="fas fa-pen"></i></a>
                            <a href="#" class="a_icon"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Pictures<span class="n_count">(167)</span></td>
                          <td>Pictures</td>
                          <td class="tbl_action_btns">
                            <a href="#" class="a_icon"><i class="fas fa-pen"></i></a>
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