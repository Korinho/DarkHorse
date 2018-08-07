<aside class="col-lg-3 column border-right">

				 		<div class="widget">

				 			<div class="tree_widget-sec">
									<ul>

										<li class="inner-child active">

											<a href="#" title=""><i class="la la-file-text"></i>My account</a>

											<ul style="display: block;">

												<li><a href="dashboard.php" >Dashboard</a></li>

												<li><a href="account-details.php" >Account Details</a></li>

												

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

				 		</div>

				 		<div class="widget">

				 			<!--<div class="skill-perc">

				 				<h3>Skills Percentage </h3>

				 				<p>Put value for "Cover Image" field to increase your skill up to "15%"</p>

				 				<div class="skills-bar">

				 					<span>85%</span>

				 					<div 

				 						class="second circle" 

				 						data-size="155"

				 						data-thickness="60">

								    </div>

				 				</div>

				 			</div>-->

				 		</div>

				 	</aside>

				 	