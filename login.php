    <?php include 'header.php';?>
    <!-- Login Page Start -->
    <div class="sections gif_login_page pad_top_bottom_50">
        <div class="container">
            <div class="gif_login_container">
                <div class="gif_login_box">
                    <div class="login_form_heading">
                        <h4 class="login_title">Login To GifGif Magazine</h4>
                    </div>
                    <div class="gif_login_form">
                        <form>
                            <div class="form_group">
                                <input class="white_input_text" type="email" name="email" placeholder="Enter Your Email">
                                <span class="l_icon"><i class="fas fa-envelope-open"></i></span>
                            </div>
                            <div class="form_group">
                                <input class="white_input_text" type="password" name="pass" placeholder="Enter Your Password">
                                <span class="l_icon"><i class="fas fa-lock"></i></span>
                            </div>
                            <div class="forget_pass_text">
                                <a href="forget_password.php">forget password?</a>
                            </div>
                            <div class="button_group">
                                <!-- <button type="submit" class="site_button login_btn">Login</button> -->
                                <a href="dashboard/add_gif.php" class="site_button login_btn">Login</a>
                            </div>
                            <!-- Or Text -->
                            <div class="form_or_text_dv"><span>Or</span></div>
                            <!-- Or Text -->
                            <div class="other_login_btn">
                                <a href="#" class="login_with_btn google_btn"><span class="icns"><i class="fab fa-google"></i></span><span class="texts">Login With Google</span></a>
                            </div>
                            <div class="other_login_btn">
                                <a href="#" class="login_with_btn fb_btn"><span class="icns"><i class="fab fa-facebook-f"></i></span><span class="texts">Login With facebook<span></a>
                            </div>
                            <div class="account_reg_text">
                                <p>Don't have an account <a href="register.php">Register Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End -->
   <?php include 'footer.php';?>