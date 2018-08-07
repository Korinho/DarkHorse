  <?php
session_start();
require 'requirelanguage.php';
require_once("Controller/vacancies.controller.php");
    require_once("Model/vacancies.model.php");
    require_once("Controller/employer.controller.php");
    require_once("Model/employer.model.php");
?>
 <style>
            /* Dropdown Button */
.dropbtn {
    background-color: #222b38;
    color: white;
    font-size: 10px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    margin-top: 31px;
    background-color: #f1f1f1;
    min-width: 145px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 5px 5px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #222b38;}
         </style>
<div class="responsive-header">

		<div class="responsive-menubar">

			<div class="res-logo"><a href="index.php" title=""><img src="images/logob.png" alt="" /></a></div>

			<div class="menu-resaction">

				<div class="res-openmenu">

					<img src="images/icon.png" alt="" /> Menu

				</div>

				<div class="res-closemenu">

					<img src="images/icon2.png" alt="" /> Close

				</div>

			</div>

		</div>

		<div class="responsive-opensec">

			<div class="btn-extars">

				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>

				<ul class="account-btns">

					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>

					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i><?php echo $menu_login; ?></a></li>

				</ul>

			</div><!-- Btn Extras -->

			<form class="res-search">

				<input type="text" placeholder="Job title, keywords or company name" />

				<button type="submit"><i class="la la-search"></i></button>

			</form>

			<div class="responsivemenu">
                   <ul>
                     <li class="menu-item-has-children">
                        <a href="#" title="">Dark Horse </a>
                        <ul>
                           <li><a href="about.php" title=""><?php echo $menu_about_us; ?></a></li>
                           <li><a href="who-we-are.php" title="">Who we are</a></li>
                           <li><a href="recruitment.php" title="">Recruitment</a></li>
                           <li><a href="interim-management.php" title="">Interim Management</a></li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="#" title="">Global Placements </a>
                        <ul>
							<li><a href="it-consulting.php" title="">IT Consulting</a></li>
							<li><a href="sap-consulting.php" title="">SAP Consulting</a></li>
                           <li><a href="management-consulting.php" title=""> Management Consulting</a></li>
                           
                          
                           <!--<li><a href="employer_single1.html" title="">Employer Single 1</a></li>
                              <li><a href="employer_single2.html" title="">Employer Single 2</a></li>-->
                        </ul>
                     </li>
                     <li class="menu-item">							<a href="vacancies.php" title="">Current Vacancies</a>						</li>
                     <li class="menu-item">
                        <a href="resumes.php" title="">CV's & Bios</a>
                        <!--<ul>
                           <li><a href="candidates_list.html" title="">Candidates List 1</a></li>
                           <li><a href="candidates_list2.html" title="">Candidates List 2</a></li>
                           <li><a href="candidates_list3.html" title="">Candidates List 3</a></li>
                           <li><a href="candidates_single.html" title="">Candidates Single 1</a></li>
                           <li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>
                           <li class="menu-item-has-children">
                           	<a href="#" title="">Candidates Dashboard</a>
                           	<ul>
                           		<li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
                           		<li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
                           		<li><a href="candidates_profile.html" title="">Candidates Profile</a></li>
                           		<li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>
                           		<li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>
                           		<li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>
                           		<li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
                           		<li><a href="candidates_change_password.html" title="">Change Password</a></li>
                           		<li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
                           	</ul>
                           </li>
                           </ul>-->
                     </li>
                     <li class="menu-item">
                        <a href="#" title="">Resources </a>
                        <ul>
                           <li><a href="blog.php"> Blog </a></li>
						   <li><a href="industries.php" title="">Industries</a></li>
                           <!--<li><a href="blog_list2.html">Blog List 2</a></li>
                           <li><a href="blog_list3.html">Blog List 3</a></li>
                           <li><a href="blog_single.html">Blog Single</a></li>-->
                           </ul>
                     </li>
                     <!--<li class="menu-item-has-children">
                        <a href="#" title="">Job</a>
                        <ul>
                        	<li><a href="job_list_classic.html">Job List Classic</a></li>
                        	<li><a href="job_list_grid.html">Job List Grid</a></li>
                        	<li><a href="job_list_modern.html">Job List Modern</a></li>
                        	<li><a href="job_single1.html">Job Single 1</a></li>
                        	<li><a href="job_single2.html">Job Single 2</a></li>
                        	<li><a href="job-single3.html">Job Single 3</a></li>
                        </ul>
                        </li>
                        <li class="menu-item-has-children">
                        <a href="#" title="">Pages</a>
                        <ul>
                        	<li><a href="about.html" title="">About Us</a></li>
                        	<li><a href="404.html" title="">404 Error</a></li>
                        	<li><a href="contact.html" title="">Contact Us 1</a></li>
                        	<li><a href="contact2.html" title="">Contact Us 2</a></li>
                        	<li><a href="faq.html" title="">FAQ's</a></li>
                        	<li><a href="how_it_works.html" title="">How it works</a></li>
                        	<li><a href="login.html" title="">Login</a></li>
                        	<li><a href="pricing.html" title="">Pricing Plans</a></li>
                        	<li><a href="register.html" title="">Register</a></li>
                        	<li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>
                        </ul>
                        </li>-->
                  </ul>
               </div>
		</div>

	</div>

	

	<header class="stick-top">

		<div class="menu-sec">

			<div class="container">

				<div class="logo">

					<a href="index.php" title=""><img src="images/horseb.png" alt="" /></a>

				</div><!-- Logo -->

				<div class="my-profiles-sec" style="margin-top:-10px;">

					<span> <?php /* echo $username;*/ ?>
  
          <i class="la la-bars"></i></span>

				</div>
				<nav>

					<ul>
            <li class="menu-item-has-children">
                <a href="#" title="">Dark Horse </a>							
              <ul>
                <li><a href="about.php" title=""><?php echo $menu_about_us; ?></a></li>
                <li><a href="who-we-are.php" title="">Who we are</a></li>
                <li><a href="recruitment.php" title="">Recruitment</a></li>
                <li><a href="interim-management.php" title="">Interim Management</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="#" title="">Global Placements </a>							
              <ul>
                <li><a href="it-consulting.php" title="">IT Consulting</a></li>
							  <li><a href="sap-consulting.php" title="">SAP Consulting</a></li>
                <li><a href="management-consulting.php" title=""> Management Consulting</a></li>
              </ul>
            </li>
            <li class="menu-item"><a  href="vacancies.php" title="">Current Vacancies</a>													</li>
            <li class="menu-item"><a  href="resumes.php" title="">CV's & Bios</a> </li>
            <li class="menu-item"><a href="#" title="">Resources </a>
						   <ul>
                  <li><a href="blog.php" title="">Blog</a></li>
							    <li><a href="industries.php" title="">Industries</a></li>
							 </ul> 
            </li>
            <li class="menu-item-has-children"><a href="#" title=""><?php echo $cambiarIdioma; ?></a>
              <ul>
                <li><a href="changelanguage.php?language=es" title=""><?php echo $spanish; ?></a></li>
                <li><a href="changelanguage.php?language=en" title=""><?php echo $english; ?></a></li>
              </ul>
            </li>
          </ul>

				</nav><!-- Menus -->

			</div>


                     






		</div>

	</header>



	<section class="overlape">

		<div class="block no-padding">

			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->

			<div class="container fluid">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner-header">

							<h3>Welcome <?php /*echo $username; */?></h3>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

