<?php   include("sesion.php");
		include ("head.php");
		include ("header.php");
		include ("scripts/conn.php");
		$id=$_GET['resume'];
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
								
								$result = $bd->query("SELECT * FROM resume WHERE display='yes' AND id=$id");
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
						 			<h3 class="blue more" ><?php echo $resume; ?></h3>
						 			<ul>
						 				<li><i class="la la-map-marker"></i><h3>Location </h3><span><?php echo $country; ?></span></li>
						 				<li><i class="la la-star"></i><h3>Reference</h3><span><?php echo $id; ?></span></li>
						 				<li><i class="la la-language"></i><h3>Languaje</h3><span><?php echo $language; ?></span></li>
						 			</ul>						 			
						 			
						 		</div><!-- Job Overview -->
					 			<div class="job-details">
					 				<h3 class="blue"> Short description</h3>
					 				<p><?php echo $summary; ?> </p>
					 				
					 			</div>
						 		<div class="recent-jobs">
					 				<h3 class="blue">Experience</h3>
					 				<div class="job-list-modern">
									
									<?php
								
										$result2 = $bd->query("SELECT e.* FROM experience e, resume r WHERE e.id_user= r.id_user AND e.type=1 AND r.id=$id");
										foreach ($result2 ->fetchAll(PDO::FETCH_ASSOC) as $row2) {	
										
										?>
									 	<div class="job-listings-sec no-border">
											<div class="">
												<div class="job-title-sec">
													<h3 ><a href="#" title=""><?php echo $row2['name']." (".$row2['star']." - ".$row2['end'].")"; ?></a></h3>					
												</div>	
												<div class="job-title-sec">
													<p><?php echo $row2['qualification']; ?></p>					
												</div>													
											</div>
											
										</div>
										<?PHP } ?>
									 </div>
					 			</div>
								<div class="recent-jobs">
					 				<h3 class="blue">Education</h3>
					 				<div class="job-list-modern">
									
									<?php
								
										$result2 = $bd->query("SELECT e.* FROM experience e, resume r WHERE e.id_user= r.id_user AND e.type=2 AND r.id=$id");
										foreach ($result2 ->fetchAll(PDO::FETCH_ASSOC) as $row2) {	
										
										?>
									 	<div class="job-listings-sec no-border">
											<div class="">
												<div class="job-title-sec">
													<h3 ><a href="#" title=""><?php echo $row2['name']." (".$row2['star']." - ".$row2['end'].")"; ?></a></h3>					
												</div>	
												<div class="job-title-sec">
													<p><?php echo $row2['qualification']; ?></p>					
												</div>													
											</div>
											
										</div>
										<?PHP } ?>
									 </div>
					 			</div>
							 </div>
					 	</div>
				 	


				 			<!--<div class="sortby-sec">

				 				<span>Sort by</span>

								<select data-placeholder="20 Per Page" class="chosen">

									<option>30 Per Page</option>

									<option>40 Per Page</option>

									<option>50 Per Page</option>

									<option>60 Per Page</option>

								</select>

				 			</div>-->

				 		</div>

				 		<?php include("sidebar.php"); ?>

				 		

					</div>
					
				 </div>

			

			</div>

		</div>

	</section>


	
	
	<?php include ("footer.php"); 	?>
	
		  
	</body>
</html>