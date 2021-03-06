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
                       <h3>Not Approved Gifs</h3>
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
                   <div class="searchbar_dv">
                        <input class="white_input_text" type="text" name="" placeholder="Search">
                        <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                    </div>
               </div>
               <!-- Searchbar End -->
               <!-- Gif listing wrapper -->
                <div class="dash_gif_listing_wrap dash_approved_gif_page">
                  <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 gif_listing_colm">
                        <div class="h_gif_item">
                            <div class="gif_image">
                              <img src="assets/images/Gif/gif1.gif" alt="Gif" class="img-fluid">
                              <div class="h_gif_overlay">
                                <div class="h_gif_overlay_text">
                                    <div class="activity_icons">
                                        <a href="#" class="icons"><i class="fas fa-pen"></i></a>
                                        <a href="../gif_single_page.php" class="icons"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="icons"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="gif_title">
                                      <form>
                                        <div class="g_status_button2">
                                          <label class="labels">
                                            <input type="radio" name="gif_status" value="Accept" checked="true">
                                            <span class="round_dv">
                                              <span class="texts">Accept</span><i class="fas fa-check"></i>
                                            </span>
                                          </label>
                                          <label class="labels deny">
                                            <input type="radio" name="gif_status" value="Deny">
                                            <span class="round_dv">
                                              <span class="texts">Deny</span><i class="fas fa-times"></i>
                                            </span>
                                          </label>
                                        </div>
                                      </form>
                                      <h4><a href="../gif_single_page.php">Adorable kittens</a></h4>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 gif_listing_colm">
                        <div class="h_gif_item">
                            <div class="gif_image">
                              <img src="assets/images/Gif/gif2.gif" alt="Gif" class="img-fluid">
                              <div class="h_gif_overlay">
                                <div class="h_gif_overlay_text">
                                    <div class="activity_icons">
                                        <a href="#" class="icons"><i class="fas fa-pen"></i></a>
                                        <a href="../gif_single_page.php" class="icons"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="icons"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="gif_title">
                                      <form>
                                        <div class="g_status_button2">
                                          <label class="labels">
                                            <input type="radio" name="gif_status" value="Accept">
                                            <span class="round_dv">
                                              <span class="texts">Accept</span><i class="fas fa-check"></i>
                                            </span>
                                          </label>
                                          <label class="labels deny">
                                            <input type="radio" name="gif_status" value="Deny" checked="true">
                                            <span class="round_dv">
                                              <span class="texts">Deny</span><i class="fas fa-times"></i>
                                            </span>
                                          </label>
                                        </div>
                                      </form>
                                      <h4><a href="../gif_single_page.php">Adorable kittens</a></h4>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 gif_listing_colm">
                        <div class="h_gif_item">
                            <div class="gif_image">
                              <img src="assets/images/Gif/gif3.gif" alt="Gif" class="img-fluid">
                              <div class="h_gif_overlay">
                                <div class="h_gif_overlay_text">
                                    <div class="activity_icons">
                                        <a href="#" class="icons"><i class="fas fa-pen"></i></a>
                                        <a href="../gif_single_page.php" class="icons"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="icons"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="gif_title">
                                      <form>
                                        <div class="g_status_button2">
                                          <label class="labels">
                                            <input type="radio" name="gif_status" value="Accept">
                                            <span class="round_dv">
                                              <span class="texts">Accept</span><i class="fas fa-check"></i>
                                            </span>
                                          </label>
                                          <label class="labels deny">
                                            <input type="radio" name="gif_status" value="Deny">
                                            <span class="round_dv">
                                              <span class="texts">Deny</span><i class="fas fa-times"></i>
                                            </span>
                                          </label>
                                        </div>
                                      </form>
                                      <h4><a href="../gif_single_page.php">Adorable kittens</a></h4>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 gif_listing_colm">
                        <div class="h_gif_item">
                            <div class="gif_image">
                              <img src="assets/images/Gif/gif1.gif" alt="Gif" class="img-fluid">
                              <div class="h_gif_overlay">
                                <div class="h_gif_overlay_text">
                                    <div class="activity_icons">
                                        <a href="#" class="icons"><i class="fas fa-pen"></i></a>
                                        <a href="../gif_single_page.php" class="icons"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="icons"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="gif_title">
                                      <form>
                                        <div class="g_status_button2">
                                          <label class="labels">
                                            <input type="radio" name="gif_status" value="Accept">
                                            <span class="round_dv">
                                              <span class="texts">Accept</span><i class="fas fa-check"></i>
                                            </span>
                                          </label>
                                          <label class="labels deny">
                                            <input type="radio" name="gif_status" value="Deny">
                                            <span class="round_dv">
                                              <span class="texts">Deny</span><i class="fas fa-times"></i>
                                            </span>
                                          </label>
                                        </div>
                                      </form>
                                      <h4><a href="../gif_single_page.php">Adorable kittens</a></h4>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
               <!-- Gif listing wrapper -->
           </div>
       </div>
       <!-- Content End -->
    </div>
     <!-- Dashboard Wrapper End -->
<?php include 'dashboard_footer.php';?>