<?php   include("sesion.php");
		include ("head.php");
		include ("header.php");
		include ("scripts/conn.php");
		$id=$_GET['id'];
		$bd	= new PDO($dsnw, $userw, $passw, $optPDO);
	?>
	
	<section class="inicial">

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3 >Resume</h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title="">Home</a></li>
									<li><a href="resumes.php" title="">Resumes</a></li>
											
									<li><a href="#" title="">Resume</a></li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section>

		<div class="block remove-bottom">

			<div class="container">

					 <div class="row">
									 			
						<div class="col-lg-9 column">

						
								<?php
								
								$result = $bd->query("SELECT * FROM job WHERE display='yes' AND id=$id");
								foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {	
								$language=$row['language'];
								if($language == "en"){$language = "English";}
								if($language == "fr"){$language = "French";}
								$resume=$row['resume'];
								$country=$row['country'];
								$id=$row['id'];
								$summary=$row['summary'];
								}
								?>
														
						<div class="job-single-sec style3">
				 			<div class="job-wide-devider">
				 				<div class="job-overview divide">
						 			<h3 class="blue more" ><?php echo $row['job']; ?></h3>
						 			<ul>
						 				<li><i class="la la-map-marker"></i><h3>Location </h3><span><?php echo $row['country']; ?></span></li>
						 				<li><i class="la la-star"></i><h3>Reference</h3><span><?php echo $id; ?></span></li>
						 			</ul>						 			
						 			
						 		</div><!-- Job Overview -->
					 			<div class="job-details">
					 				<h3 class="blue"> Short description</h3>
					 				<p><?php echo $row['short_description']; ?> </p>
					 				
					 			</div>
								<div class="job-details">
					 				<h3 class="blue"> About the client</h3>
					 				<p><?php echo $row['about']; ?> </p>
					 				
					 			</div>
								<div class="job-details">
					 				<h3 class="blue"> Job description/role</h3>
					 				<p><?php echo $row['job_description']; ?> </p>
					 				
					 			</div>
								<div class="job-details">
					 				<h3 class="blue"> Requirements</h3>
					 				<p><?php echo $row['requirements']; ?> </p>
					 				
					 			</div>
								<div class="job-details">
					 				<h3 class="blue"> Qualifications</h3>
					 				<p><?php echo $row['qualifications']; ?> </p>
					 				
					 			</div>
								<div class="job-details">
					 				<h3 class="blue"> Location</h3>
					 				<p><?php echo $row['location']; ?> </p>
					 				
					 			</div>
								<div class="job-details">
					 				<h3 class="blue"> Start date</h3>
					 				<p><?php echo $row['start_date']; ?> </p>
					 				
					 			</div>
								<div class="job-details" style="    padding: 30px;">
					 				<button type="button" onclick="saveO();"><i class="la la-plus"></i> Apply for the Job!</button>
					 				
					 			</div>
						 	 </div>
							
								
							 
					 	</div>
				 	


				 			
				 		

				 		

					</div>
					<?php include("sidebar.php"); ?>
				 </div>

			

			</div>

		</div>

	</section>


	
	
	<?php include ("footer.php"); 	?>
	
		  
	</body>
</html>