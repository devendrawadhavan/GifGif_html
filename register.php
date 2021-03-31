<?php include 'header.php';?>
    <!-- Login Page Start -->
    <div class="sections gif_register_page pad_top_bottom_50">
        <div class="container">
            <div class="gif_login_container">
                <div class="gif_login_box">
                    <div class="login_form_heading">
                       <h4 class="login_title">Register To GifGif Magazine</h4>
                    </div>
                    <div class="gif_login_form">
                        <form>
                            <div class="form_group">
                                <input class="white_input_text" type="text" name="name" placeholder="Enter Your Name">
                                <span class="l_icon"><i class="fas fa-user"></i></span>
                            </div>
                            <div class="form_group">
                                <input class="white_input_text" type="email" name="email" placeholder="Enter Your Email">
                                <span class="l_icon"><i class="fas fa-envelope-open"></i></span>
                            </div>
                            <div class="form_group">
                                <input class="white_input_text" type="password" name="pass" placeholder="Enter Your Password">
                                <span class="l_icon"><i class="fas fa-lock"></i></span>
                            </div>
                            <div class="form_group">
                                <input class="white_input_text" type="password" name="c_pass" placeholder="Confirm Password">
                                <span class="l_icon"><i class="fas fa-lock"></i></span>
                            </div>
                            <div class="button_group">
                                <button type="submit" class="site_button register_btn">Register</button>
                            </div>
                            <div class="account_reg_text">
                                <p>If you have already registered <a href="login.php">Login Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End -->
    <?php include 'footer.php';?>