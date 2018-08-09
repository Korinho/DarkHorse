<?php   
		include ("head.php");
		include ("header.php");
		require_once("Controller/vacancies.controller.php");
		require_once("Model/vacancies.model.php");
		require_once("Controller/candidate.controller.php");
		require_once("Model/candidate.model.php");
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
								$id = $_GET["id"];
								$row = ctrVacantes::ctrMostrarVacante($id);
								?>
														
						<div class="job-single-sec style3">
				 			<div class="job-wide-devider">
				 				<div class="job-overview divide">
						 			<h3 class="blue more" ><?php echo $row["job"]; ?></h3>
						 			<ul>
						 				<li><i class="la la-map-marker"></i><h3>Location </h3><span><?php echo $row['country']; ?></span></li>
						 				<li><i class="la la-dollar"></i><h3>Salary</h3><span><?php echo $row["salary"] ?></span></li>
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

										<form method="POST" action="">
											<input type="hidden" name="vacante" Value="<?php echo $row['id'] ?>">

											<input type="hidden" name="candidato" value="1">
												
												<?php $postular = new ControllerCandidato();
													  $postular->ctrPostular();
												 ?>

											<input type="submit" value="Apply for the Job!">
										</form>
									
					 				<!--<button type="button" style="color:#fff;"><i class="la la-plus" style="color:#fff;"></i> Apply for the Job!</button>-->
					 				
	
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