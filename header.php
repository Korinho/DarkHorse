  <?php
session_start();
require 'requirelanguage.php';
require_once("Controller/candidate.controller.php");
require_once("Controller/usuario.controller.php");
require_once("Controller/employer.controller.php");
require_once("Controller/experiencia.controller.php");
require_once("Controller/vacancies.controller.php");
require_once("Controller/blog.controller.php");
require_once("Controller/comentario.controller.php");
require_once("Controller/soporte.controller.php");

require_once("Model/candidate.model.php");
require_once("Model/usuario.model.php");
require_once("Model/employer.model.php");
require_once("Model/experiencia.model.php");
require_once("Model/vacancies.model.php");
require_once("Model/blog.model.php");
require_once("Model/comentario.model.php");
require_once("Model/soporte.model.php");

require_once("Model/route.php");
?>
  <div class="responsive-header four">
            <div class="responsive-menubar">
               <div class="res-logo"><a href="index.php" title=""><img src="images/horse.png" alt="" /></a></div>
               <div class="menu-resaction">
                  <div class="res-openmenu">
                     <img src="images/icon5.png" alt="" /> Menu
                  </div>
                  <div class="res-closemenu">
                     <img src="images/icon6.png" alt="" /> Close
                  </div>
               </div>
            </div>
            <div class="responsive-opensec">
               <div class="btn-extars">
                  <!--<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>-->
                  <ul class="account-btns">
                     <li class="signup-popup"><a href="resgiter" title=""><i class="la la-key"></i> CV Posting</a></li>
                     <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
                  </ul>
               </div>
               <!-- Btn Extras -->
               <form class="res-search">
                  <input type="text" placeholder="Job title, keywords or company name" />
                  <button type="submit"><i class="la la-search"></i></button>
               </form>
               <div class="responsivemenu">
                  <ul>
                     <li class="menu-item-has-children">
                        <a href="#" title="">Dark Horse </a>
                        <ul>
                           <li><a href="about" title="">About Us</a></li>
                           <li><a href="who-we-are" title="">Who we are</a></li>
                           <li><a href="recruitment" title="">Recruitment</a></li>
                           <li><a href="interim-management" title="">Interim Management</a></li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="#" title="">Global Placements </a>
                        <ul>
							<li><a href="it-consulting" title="">IT Consulting</a></li>
							<li><a href="sap-consulting" title="">SAP Consulting</a></li>
                           <li><a href="management-consulting" title=""> Management Consulting</a></li>
                           
                          
                           <!--<li><a href="employer_single1.html" title="">Employer Single 1</a></li>
                              <li><a href="employer_single2.html" title="">Employer Single 2</a></li>-->
                        </ul>
                     </li>
                     <li class="menu-item">							<a href="vacancies" title="">Current Vacancies</a>						</li>
                     <li class="menu-item">
                        <a href="resumes" title="">CV's & Bios</a>
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
                           <li><a href="blog"> Blog </a></li>
						   <li><a href="industries" title="">Industries</a></li>
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
         <header class="style4 stick-top forsticky">
            <div class="topbar">
               <div class="container">
                  <ul class="h-social">
                     <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#" title=""><i class="fa fa-pinterest"></i></a></li>
                     <li><a href="#" title=""><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <div class="h-contact">
                     <span><i class="la la-phone"></i><?php echo $menu_call_us; ?> 0850 0000 00 00 </span>
                     <span><i class="la la-envelope-o"></i>info@darkhorserecruitment.com<?php/*echo $username; */?></span>
                     <div class="dropdown">
                       <button class="dropbtn"><?php echo $cambiarIdioma; ?></button>
                       <div class="dropdown-content">
                         <a href="changelanguage.php?language=es"><?php echo $spanish; ?></a>
                         <a href="changelanguage.php?language=en"><?php echo $english; ?></a>
                       </div>
                     </div>
					<?php /* if($id_usuario > 0){?><span><i class="la la-user" style="color:#73fd05;"></i><?php echo $username; ?></span><?php } ?>
					<?php if($id_usuario > 0){?><span><a href="logout"><i class="la la-power-off" style="color:#ff5656;"></i>Logout</span><?php } */?>
                  </div>
               </div>
            </div>
            <div class="menu-sec">
               <div class="container">
                  <div class="logo">
                     <a href="index.php" title=""><img src="images/horse.png" alt="" /></a>
                  </div>
                  <!-- Logo -->
                  <div class="btn-extars">
                     <ul class="account-btns">



                     <?php

            if(isset($_SESSION["validarSesion"])){

               if($_SESSION["validarSesion"] == "ok"){

                  if($_SESSION["modo"] == "directo"){

                     if($_SESSION["foto"] != ""){

                        echo '<li>

                              <img class="img-circle" src="'.$url.$_SESSION["foto"].'" width="10%">

                            </li>';

                     }else{

                        echo '<li>

                           <img class="img-circle" src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" width="10%">

                        </li>';

                     }

                     echo '<li>|</li>
                      <li class=""><a href="'.$url.'dashboard" title="">Dashboard</a></li>
                      <li><a href="'.$url.'salir">Salir</a></li>';


                  }

                  if($_SESSION["modo"] == "facebook"){

                     echo '<li>

                           <img class="img-circle" src="'.$_SESSION["foto"].'" width="10%">

                           </li>
                           <li class=""><a href="'.$url.'dashboard" title="">Dashboard</a></li>
                           <li><a href="'.$url.'salir" class="salir">Salir</a></li>';

                  }

                  if($_SESSION["modo"] == "google"){

                     echo '<li>

                           <img class="img-circle" src="'.$_SESSION["foto"].'" width="10%">

                           </li>
                           <li class=""><a href="'.$url.'dashboard" title="">Dashboard</a></li>
                           <li><a href="'.$url.'salir">Salir</a></li>';

                  }

               }

            }else{

               echo '<li class=""><a href="register" title=""> '.$menu_CVposting.' </a></li>
                        <li class="signin-popup"><a title="">'.$menu_login.'</a></li>';

            }

            ?>

						<!---->
                     </ul>
                  </div>
                  <!-- Btn Extras -->
                  <nav>
                     <ul>
                        <li class="menu-item-has-children">
                           <a href="#" title="">Dark Horse </a>							
                           <ul>
                              <li><a href="about" title=""><?php echo $menu_about_us ?></a></li>
                           <li><a href="who-we-are" title=""><?php echo $menu_who_are; ?></a></li>
                           <li><a href="recruitment" title=""><?php echo $menu_recruitment; ?></a></li>
                           <li><a href="interim-management" title=""><?php echo $menu_in_management; ?></a></li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="#" title=""><?php echo $menu_global_place; ?></a>							
                           <ul>
                             <li><a href="it-consulting" title=""><?php echo $menu_it_consulting; ?></a></li>
							<li><a href="sap-consulting" title=""><?php echo $menu_sap_consulting; ?></a></li>
                           <li><a href="management-consulting" title=""><?php echo $menu_manag_consulting; ?></a></li>
                           </ul>
                        </li>
                        <li class="menu-item"><a  href="vacancies" title=""><?php echo $menu_vacancies; ?></a></li>
                        <li class="menu-item">
                           <a  href="resumes" title="">CV's & Bios</a> 
                        </li>
                        <li class="menu-item">
                           <a href="#" title=""><?php echo $menu_recurses; ?></a>
						   <ul>
                              <li><a href="blog" title=""><?php echo $menu_blog; ?></a></li>
							  <li><a href="industries" title=""><?php echo $menu_industries; ?></a></li>
							 </ul> 
                        </li>
                     </ul>
                  </nav>
                  <!-- Menus -->
               </div>
            </div>
         </header>
       