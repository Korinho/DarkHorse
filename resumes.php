<?php   
		include ("head.php");
		include ("header.php");



		$candidatos = ControllerCandidato::ctrMostrarCandidatos();
	?>
	
	<section  class="inicial">

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3 >Resumes</h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title="">Home</a></li>

									
									<li><a href="#" title="">Resumes</a></li>

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

				 		<div class="filterbar">

				 			<p>Total of <?php echo count($candidatos); ?> Employer</p>

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

				 		

				 		<div class="emply-list-sec style2">
								<?php
										$item="id_usuario";
									foreach ($candidatos as $key => $row) {
										if($row["display"]==1){
											$usuario = ctrUsuario::ctrMostrarUsuario($item,$row["id_usuario"]);
								?>
								<div class="emply-list">
				 				<div class="emply-list-info edu-hisinfo">
				 					<h3 > <a href="resume.php?resume=<?php echo $row['id']; ?>" title=""><?php echo $usuario['nombre']," ",$row["apellido"]; ?></a></h3>
				 					<h3 class="profile-title"><i class="la la-map-marker"></i> <?php echo $row['pais']; ?>    |   <i class="la la-note"></i> <?php echo $row['resumen']; ?>   |   <i class="la la-language"></i> <?php  echo $row["idioma"];?></h3>
				 					<p><?php echo $row['titulo']; ?></p>

				 				</div>

								</div><!-- Employe List -->
							
							<?php }
							} ?>
									
							
				 			

				 		
				 			<div class="pagination">

								<ul>

									<li class="prev"><a href=""><i class="la la-long-arrow-left"></i> Prev</a></li>

									<li><a href="">1</a></li>

									<li class="active"><a href="">2</a></li>

									<li><a href="">3</a></li>

									<li><span class="delimeter">...</span></li>

									<li><a href="">14</a></li>

									<li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>

								</ul>

							</div><!-- Pagination -->

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