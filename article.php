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

								<h3><?php echo $articulo ?></h3>

							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title=""><?php echo $inicio ?></a></li>
									<li><a href="blog.php" title="" ><?php echo $menu_blog ?></a></li>
											
									<li><a href="#" title="" ><?php echo $articulo ?></a></li>

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
								}
								?>														
								<div class="blog-single">
								<div class="bs-thumb"><img src="panel/parsers/query/archivos/<?php echo $row['imagen']; ?>" alt="" /></div>
								<ul class="post-metas"><li><a href="#" title=""><i class="la la-calendar-o"></i><?php echo $row['fecha']; ?></a></li></ul>
								<h2><?php echo $row['titulo']; ?></h2>
									<div class="artcont">
									<?php echo $row['contenido']; ?>								
									</div>
				 				</div>
							

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