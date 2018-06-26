<?php   include("sesion.php");
		include ("head.php");
		include ("header.php");
		include ("scripts/conn.php");
		
		
	?>
	
	<section>

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3>Register</h3>

								<span>Keep up to date with the latest news</span>

							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="#" title="">Home</a></li>

									<li><a href="#" title="">Pages</a></li>

									<li><a href="#" title="">Register</a></li>

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

					<div class="col-lg-12">

						<div class="account-popup-area signup-popup-box static">

							<div class="account-popup">

								<h3>Register</h3>
								
								<?php 
								
									try{
											$email=$_GET['email'];							
															

											$bd=new PDO($dsnw,$userw,$passw,$optPDO);



									$sql="update Usuarios set
										Estatus = 'Activo'	
										 where email = '$email';";
										$bd->query($sql);
										  
										echo '<span style="color:#24324a">Thank you for your register, login now.</span>';
											
									}catch(PDOException $err){		     
										 echo ' <span style="color:#24324a">User no Register</span>';
									}
								?>

							

								

							</div>

						</div><!-- SIGNUP POPUP -->

					</div>

				</div>

			</div>

		</div>

	</section>


	
	
	<?php include ("footer.php"); 	?>
	