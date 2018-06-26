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

								<h3 >Blog</h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title="">Home</a></li>

									
									<li><a href="#" title="">Blog</a></li>

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
				 		<div class="bloglist-sec">
							<?php
								
								$result = $bd->query("SELECT * FROM nota WHERE estado=1 order by id asc");
								foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {	
								
								?>
				 			<div class="blogpost style2">
				 				<div class="blog-posthumb"> <a href="article.php?id=<?php echo $row['id']; ?>" title=""><img src="panel/parsers/query/archivos/<?php echo $row['imagen']; ?>" alt="" /></a> </div>
				 				<div class="blog-postdetail">
				 					<ul class="post-metas"><li><a href="#" title=""><i class="la la-calendar-o"></i><?php echo $row['fecha']; ?></a></li></ul>
				 					<h3><a href="article.php?id=<?php echo $row['id']; ?>" title=""><?php echo $row['titulo']; ?></a></h3>
				 					<p><?php echo $row['descripcion']; ?></p>
				 					<a class="bbutton" href="article.php?id=<?php echo $row['id']; ?>" title="">Read More <i class="la la-long-arrow-right"></i></a>
				 				</div>
				 			</div><!-- Blog Post -->
				 			<?php $language="";   }  ?>
							
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