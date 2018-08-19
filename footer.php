* <?php require_once "Controller/candidate.controller.php" ?>
 <footer class="style2">
            <div class="block">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 column">
                        <div class="widget">
                           <div class="about_widget">
                              <div class="logo">
                                 <a href="#" title=""><img src="images/horseb.png" alt="" /></a>
                              </div>
                              <span><?php echo $finfo?></span>
                              <span><?php echo $ftel?></span>								<span><?php echo $ftel1?></span>								<span><?php echo $ftel2?></span>
                           </div>
                           <!-- About Widget -->
                        </div>
                     </div>
                     <div class="col-lg-2 column">
                        <div class="widget">
                           <h3 class="footer-title"><?php echo $menu_about_us; ?></h3>
                           <div class="link_widgets3 nolines">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <a href="#" title=""><?php echo $menu_about_us; ?></a>
                                    <a href="#" title=""><?php echo $menu_who_are; ?></a>
                                    <a href="#" title=""><?php echo $menu_global_place; ?></a>
                                    <a href="#" title=""><?php echo $menu_recruitment; ?></a>
                                    <a href="#" title=""><?php echo $menu_in_management; ?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 column">
                        <div class="widget">
                           <h3 class="footer-title"><?php echo $footer_follow_us; ?></h3>
                           <div class="link_widgets3 nolines">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <a href="#" title=""><i class="fa fa-facebook"></i> Facebook</a>	
                                    <a href="#" title=""><i class="fa fa-twitter"></i> Twitter</a>	
                                    <a href="#" title=""><i class="la la-google"></i> Google</a>	
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 column">
                        <div class="widget">
                           <h3 class="footer-title"><?php echo $footer_Newsletter; ?></h3>
                           <div class="subscribe_widget">
                              <p></p>
                              <form>
                                 <input type="text" placeholder="<?php echo $correovalido; ?>" />
                                 <button type="submit"><i class="la la-paper-plane"></i></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-line style3">
               <div class="container">
                  <span>© 2018 Dark Horse Consulting</span>
                  <a href="#scrollup" class="back-top" title=""><?php echo $footer_back_top; ?> <i class="la la-long-arrow-up"></i></a>
               </div>
            </div>
         </footer>
      </div>
      <div class="account-popup-area signin-popup-box">
         <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>







            <!--OJO HASTA AQUI-->





          
            <h3>User Login</h3>
            <span>Click To Login With Demo User</span>
            <div class="select-user">
               <span>Candidate</span>
               <span>Employer</span>
            </div>
            <form method="POST" >
               <div class="cfield">
                  <input type="text" placeholder="Email" name="usuario" />
                  <i class="la la-user"></i>
               </div>
               <div class="cfield">
                  <input type="password" name="pass" placeholder="********" />
                  <i class="la la-key"></i>
               </div>
               <p class="remember-label">
                  <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
               </p>
               <a href="#" title="">Forgot Password?</a>
               <p>
               <?php 

              $ingresar = new ControllerCandidato();
                 $ingresar -> ctrIngresoCandidato();

                ?>
             </p>
               <input type="submit" class="button btnIngreso" value="Login">
               
            </form>
            <!--<div class="extra-login">
               <span>Or</span>
               <div class="login-social">
                  <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                  <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
               </div>
            </div>-->
         </div>
      </div>
      <!-- LOGIN POPUP -->
      <div class="account-popup-area signup-popup-box">
         <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Sign Up</h3>
            <div class="select-user">
               <span>Candidates</span>
               <span>Employerssss</span>
            </div>
            <form>
               <div class="cfield">
                  <input type="text" placeholder="Username" />
                  <i class="la la-user"></i>
               </div>
               <div class="cfield">
                  <input type="password" placeholder="********" />
                  <i class="la la-key"></i>
               </div>
               <div class="cfield">
                  <input type="text" placeholder="Email" />
                  <i class="la la-envelope-o"></i>
               </div>
               <div class="dropdown-field">
                  <select data-placeholder="Please Select Specialism" class="chosen">
                     <option>Web Development</option>
                     <option>Web Designing</option>
                     <option>Art & Culture</option>
                     <option>Reading & Writing</option>
                  </select>
               </div>
               <div class="cfield">
                  <input type="text" placeholder="Phone Number" />
                  <i class="la la-phone"></i>
               </div>
               <button type="submit">Signup</button>
            </form>
            <div class="extra-login">
               <span>Or</span>
               <div class="login-social">
                  <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                  <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
               </div>
            </div>
         </div>
      </div>
      <!-- SIGNUP POPUP -->
      <script src="js/jquery.min.js" type="text/javascript"></script>
      <script src="js/modernizr.js" type="text/javascript"></script>
      <script src="js/script.js" type="text/javascript"></script>
      <script src="js/wow.min.js" type="text/javascript"></script>
      <script src="js/slick.min.js" type="text/javascript"></script>
      <script src="js/parallax.js" type="text/javascript"></script>
      <script src="js/select-chosen.js" type="text/javascript"></script>
      <script src="js/counter.js" type="text/javascript"></script>
      <script src="js/mouse.js" type="text/javascript"></script>
      <script src="js/sweetalert.min.js" type="text/javascript"></script>
      <script src="js/usuarios.js" type="text/javascript"></script>

 