<?php   include("sesion.php");
		include ("head.php");
		include ("header.php");
		include ("scripts/conn.php");
		$bd	= new PDO($dsnw, $userw, $passw, $optPDO);
	?>
	
	<section  class="inicial">

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3 >SAP Consulting</h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title="">Home</a></li>

									
									<li><a href="#" title="">SAP Consulting</a></li>

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

						<div class="about-us">
				 			<div class="row">
				 				<div class="col-lg-12">
				 					<h3>SAP Consulting</h3>
				 				
				 				
				 					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				 				
				 					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				 					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				 				
								</div>
				 			</div>
				 		</div>

				 		
					</div>
					<?php include("sidebar.php"); ?>
				 </div>

			

			</div>

		</div>

	</section>
	<section>
	</br></br></br>
	</section>
	
	<?php include ("footer.php"); 	?>
	
		  
	</body>
</html>