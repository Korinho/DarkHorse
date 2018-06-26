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
                              <span>Want to know more? Contact Us</span>
                              <span>America: +1-305-600-4408</span>								<span>EMEA: +33 970 467 059</span>								<span>Asia-Pacific: +61 3 9018 5789</span>
                           </div>
                           <!-- About Widget -->
                        </div>
                     </div>
                     <div class="col-lg-2 column">
                        <div class="widget">
                           <h3 class="footer-title">About Us</h3>
                           <div class="link_widgets3 nolines">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <a href="#" title="">About Us </a>
                                    <a href="#" title="">Who we are</a>
                                    <a href="#" title="">Global Placement </a>
                                    <a href="#" title="">Recruitment </a>
                                    <a href="#" title="">Interim Management</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 column">
                        <div class="widget">
                           <h3 class="footer-title">Follow Us</h3>
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
                           <h3 class="footer-title">Newsletter Subscription</h3>
                           <div class="subscribe_widget">
                              <p></p>
                              <form>
                                 <input type="text" placeholder="Enter Valid Email Address" />
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
                  <a href="#scrollup" class="back-top" title="">Back to top <i class="la la-long-arrow-up"></i></a>
               </div>
            </div>
         </footer>
     

</div>



<div class="profile-sidebar">

	<span class="close-profile"><i class="la la-close"></i></span>

	<div class="can-detail-s">

		<div class="cst"><img src="images/resource/es1.jpg" alt="" /></div>

		<h3><?php echo $username." ".$lastname; ?> </h3>

		<!--<span><i>UX / UI Designer</i> at Atract Solutions</span>-->

		<p><?php echo $email; ?></p>

		<!--<p>Member Since, 2017</p>-->

		<p><i class="la la-map-marker"></i><?php echo $country; ?></p>

	</div>

	<div class="tree_widget-sec">

		<ul>

			<li class="inner-child active">

				<a href="#" title=""><i class="la la-file-text"></i>My account</a>

				<ul style="display: block;">

					<li><a href="#" title="">Dashboard</a></li>

					<li><a href="#" title="">Account Details</a></li>

					

				</ul>

			</li>

			<li class="inner-child">

					<a href="#" title=""><i class="la la-briefcase"></i><?php   if($type == 0){ echo 'Resume';}else{echo 'Manage Jobs';} ?></a>

											<ul>	
												<?php   if($type == 0){ }else{echo '<li><a href="job.php" title="">Add Job</a></li>';} ?>		
												<li><?php   if($type == 0){ echo '<a href="my-resume.php" title="">My Resume</a>';}else{echo '<a href="jobs.php" title="">Jobs</a>';} ?></li>
												

											</ul>

			</li>

			<li class="inner-child">

				<a href="#" title=""><i class="la la-briefcase"></i> Jobs</a>

				<ul>

					<li><a href="#" title="">My Applied Jobs</a></li>

					

				</ul>

			</li>

			<li class="inner-child">

				<a href="#" title=""><i class="la la-paper-plane"></i>Troubleshooting</a>

				<ul>

					<li><a href="#" title="">Report a problem</a></li>

					<li><a href="#" title="">My Submitted Problems</a></li>


				</ul>

			</li>

		

			<li><a href="logout.php" title=""><i class="la la-unlink"></i>Logout</a></li>

		</ul>

	</div>

</div><!-- Profile Sidebar -->



<div class="view-resumesec">

	<div class="view-resumes">

		<span class="close-resume-popup"><i class="la la-close"></i></span>

		<h3>13 Times Viewed By 8 Companies.</h3>

		<div class="job-listing wtabs">

			<div class="job-title-sec">

				<div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>

				<h3><a href="#" title="">Web Designer / Developer</a></h3>

				<span>Massimo Artemisis</span>

				<div class="job-lctn">Sacramento, California</div>

			</div>

			<span class="date-resume">11.02.2017</span>

		</div><!-- Job -->

		<div class="job-listing wtabs">

			<div class="job-title-sec">

				<div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>

				<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>

				<span>Massimo Artemisis</span>

				<div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>

			</div>

			<span class="date-resume">11.02.2017</span>

		</div><!-- Job -->

		<div class="job-listing wtabs">

			<div class="job-title-sec">

				<div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>

				<h3><a href="#" title="">Web Designer / Developer</a></h3>

				<span>Massimo Artemisis</span>

				<div class="job-lctn">Sacramento, California</div>

			</div>

			<span class="date-resume">11.02.2017</span>

		</div><!-- Job -->

		<div class="job-listing wtabs">

			<div class="job-title-sec">

				<div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>

				<h3><a href="#" title="">Web Designer / Developer</a></h3>

				<span>Massimo Artemisis</span>

				<div class="job-lctn">Sacramento, California</div>

			</div>

			<span class="date-resume">11.02.2017</span>

		</div><!-- Job -->

	</div>

</div>



<div class="follow-companiesec">

	<div class="follow-companies">

		<span class="close-follow-company"><i class="la la-close"></i></span>

		<h3>Follow Companies.</h3>

		<ul id="scrollbar">

			<li>

				<div class="job-listing wtabs">

					<div class="job-title-sec">

						<div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>

						<h3><a href="#" title="">Web Designer / Developer</a></h3>

						<div class="job-lctn">Sacramento, California</div>

					</div>

					<a href="#" title="" class="go-unfollow">Unfollow</a>

				</div><!-- Job -->	

			</li>

			<li>

				<div class="job-listing wtabs">

					<div class="job-title-sec">

						<div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>

						<h3><a href="#" title="">Tix Dog</a></h3>

						<div class="job-lctn">Sacramento, California</div>

					</div>

					<a href="#" title="" class="go-unfollow">Unfollow</a>

				</div><!-- Job -->	

			</li>

			<li>

				<div class="job-listing wtabs">

					<div class="job-title-sec">

						<div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>

						<h3><a href="#" title="">StarHealth</a></h3>

						<div class="job-lctn">Sacramento, California</div>

					</div>

					<a href="#" title="" class="go-unfollow">Unfollow</a>

				</div><!-- Job -->	

			</li>

			<li>

				<div class="job-listing wtabs">

					<div class="job-title-sec">

						<div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>

						<h3><a href="#" title="">Altes Bank</a></h3>

						<div class="job-lctn">Sacramento, California</div>

					</div>

					<a href="#" title="" class="go-unfollow">Unfollow</a>

				</div><!-- Job -->	

			</li>

			<li>

				<div class="job-listing wtabs">

					<div class="job-title-sec">

						<div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>

						<h3><a href="#" title="">StarHealth</a></h3>

						<div class="job-lctn">Sacramento, California</div>

					</div>

					<a href="#" title="" class="go-unfollow">Unfollow</a>

				</div><!-- Job -->	

			</li>

			<li>

				<div class="job-listing wtabs">

					<div class="job-title-sec">

						<div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>

						<h3><a href="#" title="">Altes Bank</a></h3>

						<div class="job-lctn">Sacramento, California</div>

					</div>

					<a href="#" title="" class="go-unfollow">Unfollow</a>

				</div><!-- Job -->	

			</li>

		</ul>		

	</div>

</div>



<script src="js/jquery.min.js" type="text/javascript"></script>

<script src="js/modernizr.js" type="text/javascript"></script>

<script src="js/script.js" type="text/javascript"></script>

<script src="js/wow.min.js" type="text/javascript"></script>

<script src="js/slick.min.js" type="text/javascript"></script>

<script src="js/parallax.js" type="text/javascript"></script>

<script src="js/select-chosen.js" type="text/javascript"></script>

<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>

<script src="js/circle-progress.min.js" type="text/javascript"></script>




