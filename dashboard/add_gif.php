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
                       <h3>Add New Gif</h3>
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
               <div class="black_box add_gif_box">
                  <div class="gif_dashboard_form add_gif_form">
                    <form>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Title</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <input class="white_input_text" type="text" name="title" placeholder="Gif Title">
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Title</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                         <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                             <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                          </select>
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