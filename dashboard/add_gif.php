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
               <div class="black_box add_gif_form_box">
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
                          <label class="labels">GIF Category</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                         <select class="multiple_js_select_box" name="category[]" multiple="multiple">
                             <option value="Animals">Animals</option>
                            <option value="Anime">Anime</option>
                            <option value="Reactions">Reactions</option>
                            <option value="Trending">Trending</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">GIF Tags</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <select class="multiple_js_select_box" name="post_tags[]" multiple="" required="">
                            <option value="people">people</option>
                            <option value="funny">funny</option>
                            <option value="animals">animals</option>
                            <option value="other">other</option>
                            <option value="girl">girl</option>
                            <option value="man">man</option>
                            <option value="cat">cat</option>
                            <option value="spotr">spotr</option>
                            <option value="whirl">whirl</option>
                            <option value="minions">minions</option>
                            <option value="tramp">Tramp</option>
                            <option value="rastaman">rastaman</option>
                            <option value="beerr">beerr</option>
                            <option value="titanic">titanic</option>
                            <option value="simpsons">simpsons</option>
                            <option value="rome">Rome</option>
                            <option value="toboggan">Toboggan</option>
                            <option value="salvador-dali">Salvador Dali</option>
                            <option value="smoking">smoking</option>
                            <option value="swinging">swinging</option>
                            <option value="heavy-metal">heavy metal</option>
                            <option value="flowers">flowers</option>
                            <option value="universe">universe</option>
                            <option value="lunch">lunch</option>
                            <option value="chainsaw">chainsaw</option>
                            <option value="coffe">coffe</option>
                            <option value="rejocing">rejocing</option>
                            <option value="lemon">lemon</option>
                            <option value="picket">picket</option>
                            <option value="octopus">octopus</option>
                            <option value="moon">moon</option>
                            <option value="peer">peer</option>
                            <option value="pink-panter">pink panter</option>
                            <option value="vizard">vizard</option>
                            <option value="city">city</option>
                            <option value="mapa">mapa</option>
                            <option value="pic">pic</option>
                            <option value="guys">guys</option>
                            <option value="farting">farting</option>
                            <option value="peopel">peopel</option>
                            <option value="paeople">paeople</option>
                            <option value="swimsit">swimsit</option>
                            <option value="yoga">yoga</option>
                            <option value="wifw">wifw</option>
                            <option value="bany">bany</option>
                            <option value="happz">happz</option>
                            <option value="parodz">parodz</option>
                            <option value="fog">fog</option>
                            <option value="aniamsl">aniamsl</option>
                            <option value="peoploe">peoploe</option>
                            <option value="friday">Friday</option>
                            <option value="jike">jike</option>
                            <option value="corona">corona</option>
                            <option value="mous">mous</option>
                            <option value="p">p</option>
                            <option value="blog">blog</option>
                            <option value="candel">candel</option>
                            <option value="much">much</option>
                            <option value="ambitions">ambitions</option>
                            <option value="in">In</option>
                            <option value="laughed">laughed</option>
                            <option value="last">last</option>
                            <option value="club">club</option>
                            <option value="loved" >loved</option>
                            <option value="english">english</option>
                            <option value="congratulate">congratulate</option>
                            <option value="diploma">diploma</option>
                            <option value="celebrate">celebrate</option>
                            <option value="memories">memories</option>
                            <option value="teenage">teenage</option>
                            <option value="spoiled">spoiled</option>
                            <option value="hereby">hereby</option>
                            <option value="kickboxing">kickboxing</option>
                          </select>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Upload GIF</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <label class="img_upload_button">
                            <input class="white_input_text custome_file_upload_input" type='file' id="custome_file_upload_input" />
                            Choose File
                          </label>
                          <div class="or_text">OR</div>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">External GIF URL</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                            <input class="white_input_text custome_file_upload_url" type='text' placeholder="Paste External GIF URL">
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Preview Image</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <div class="img_preview_dv">
                            <img id="custom_img_preview" src="assets/images/no_preview_img.jpg" alt="Gif Image"/>
                          </div>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Meta Tag Keywords</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <input class="white_input_text" type="text" name="title" placeholder="Meta Tag Keywords">
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Meta Tag Description</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <textarea class="white_input_text" placeholder="Enter Description"></textarea>
                        </div>
                      </div>
                      <div class="form_group row">
                        <div class="col-xl-2 col-lg-3 col-12">
                          <label class="labels">Meta Tag Robots</label>
                        </div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <select name="meta_tag_robots">
                              <option value="Index, follow" selected="">Index, follow</option>
                              <option value="Index, no-follow">Index, no-follow</option>
                              <option value="No-index, follow">No-index, follow</option>
                              <option value="No-index, no-follow">No-index, no-follow</option>
                          </select>
                        </div>
                      </div>
                      <div class="button_group row">
                        <div class="col-xl-2 col-lg-3 col-12"></div>
                        <div class="input_group col-xl-10 col-lg-9 col-12">
                          <button type="submit" class="dashboard_button upload_gif_btn">Upload</button>
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