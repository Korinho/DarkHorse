<?php  
		include ("head.php");
		include ("header.php");
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
								
								$item="id_candidato";

								$item2="id_usuario";

								$valor = $_GET["id"];

								$candidato = ControllerCandidato::ctrMostrarCandidatoSTR($item,$valor);

								$usuario = ctrUsuario::ctrMostrarUsuario($item2,$candidato["id_usuario"]);

								$experiencia = ctrExperiencia::ctrMostrarExperiencia($candidato["id_candidato"]);
							
								?>
														
						<div class="job-single-sec style3">
				 			<div class="job-wide-devider">
				 				<div class="job-overview divide">
						 			<h3 class="blue more" ><?php echo $usuario["nombre"]," ", $candidato["apellido"]; ?></h3>
						 			<ul>
						 				<li><i class="la la-map-marker"></i><h3>Location </h3><span><?php echo $candidato["pais"]; ?></span></li>
						 				<li><i class="la la-cake"></i><h3>Birthdate</h3><span><?php echo $candidato["fecha_nacimiento"]; ?></span></li>
						 				<li><i class="la la-language"></i><h3>Languaje</h3><span><?php echo $candidato["idioma"]; ?></span></li>
						 			</ul>						 			
						 			
						 		</div><!-- Job Overview -->
					 			<div class="job-details">
					 				<h3 class="blue">Title</h3>
					 				<p><?php echo $candidato["titulo"]; ?> </p>
					 				
					 			</div>
					 			<div class="job-details">
					 				<h3 class="blue">Resume</h3>
					 				<p><?php echo $candidato["resumen"]; ?> </p>
					 				
					 			</div>
					 			<div class="job-details">
					 				<h3 class="blue">Contact</h3>
									<div class="col-lg-6 column">
										<span>Number</span>
										<p><?php echo $candidato["numero"]; ?> </p>
									</div>
									<div class="col-lg-6 column">
										<span>Email</span>
					 					<p><?php echo $usuario["email"]; ?> </p>
									</div>
					 				
					 				
					 				
					 			</div>
						 		<div class="recent-jobs">
					 				<h3 class="blue">Experience</h3>
					 				<div class="job-list-modern">
									
									<?php
									
										foreach ($experiencia as $key =>$exp) {
											if($exp["type"]==1){									
										
										?>
									 	<div class="job-listings-sec no-border">
											<div class="">
												<div class="job-title-sec">
													<h3 ><a href="#" title=""><?php echo $exp['name']." (".$exp['star']." - ".$exp['end'].")"; ?></a></h3>					
												</div>	
												<div class="job-title-sec">
													<p><?php echo $exp['qualification']; ?></p>					
												</div>													
											</div>
											
										</div>
										<?PHP }
									} ?>
									 </div>
					 			</div>
								<div class="recent-jobs">
					 				<h3 class="blue">Education</h3>
					 				<div class="job-list-modern">
									
									<?php
								
										foreach ($experiencia as $key =>$edu) {
											if($edu["type"]==2){
										
										?>
									 	<div class="job-listings-sec no-border">
											<div class="">
												<div class="job-title-sec">
													<h3 ><a href="#" title=""><?php echo $edu['name']." (".$edu['star']." - ".$edu['end'].")"; ?></a></h3>					
												</div>	
												<div class="job-title-sec">
													<p><?php echo $edu['qualification']; ?></p>					
												</div>													
											</div>
											
										</div>
										<?php }
									} ?>
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