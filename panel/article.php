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

								<h3 >Article</h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title="">Home</a></li>
									<li><a href="blog.php" title="">Blog</a></li>
											
									<li><a href="#" title="">Article</a></li>

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
								
								$result = $bd->query("SELECT * FROM nota WHERE estado=1 AND id=$id");
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
														
								<div class="blog-single">
				 			<div class="bs-thumb"><img src="panel/parsers/query/archivos/<?php echo $row['imagen']; ?>" alt="" /></div>
				 			<ul class="post-metas"><li><a href="#" title=""><i class="la la-calendar-o"></i><?php echo $row['fecha']; ?></a></li></ul>
				 			<h2><?php echo $row['titulo']; ?></h2>
				 			<?php echo $row['contenido']; ?>
				 			
				 			
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