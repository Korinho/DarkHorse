<?php  
		include ("head.php");
		include ("header.php");
		?>
	
	<section  class="inicial">

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3> <?php echo $vacancies; ?></h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title=""><?php echo $home; ?></a></li>

									
									<li><a href="#" title=""><?php echo $vacancies; ?></a></li>

								</ul>

							</div>
	
						</div>

					</div>

				</div>

			</div>

		</div>

	</section>


	<?php 
	if(isset($_GET["pag"])){
		$base = ($_GET["pag"] - 1)*2;
		$tope = 2;
	}else{
		$base = 0;
		$tope = 2;
	}
	$vac = ctrVacantes::ctrMostrarVacantes(); 
	$vacantes = ctrVacantes::ctrMostrarVacantes1($base,$tope); ?>
	<section>

		<div class="block remove-bottom">
			<div class="container">
					 <div class="row">									 			
				 	<div class="col-lg-9 column">
				 		<div class="filterbar">
				 			<p>Total of <?php echo count($vac); ?> Vacancies</p>
				 		</div>
				 		<div class="emply-list-sec style2">
								<?php
									foreach ($vacantes as $key => $row) {
									if($row["display"]==1){
								?>
								<div class="emply-list">
				 				<div class="emply-list-info edu-hisinfo">
				 				<h3 > <a href="vacancy.php?id=<?php echo $row['id']; ?>" title=""><?php echo $row['job']; ?></a></h3>
				 				<h3 class="profile-title"><i class="la la-map-marker"></i> <?php echo $row['country']; ?>    |   <i class="la la-dollar"></i> <?php echo $row["salary"];?>   |   <i class="la la-language"></i> <?php  echo ($row["language"]=="en")? "English" : "frances"; ?></h3>
				 				<p><?php echo $row['short_description']; ?></p>
				 				</div>
								</div><!-- Employe List -->
							
							<?php }
							} ?>


							<?php 

								if(count($vac) != 0){

									$pagProductos = ceil(count($vac)/2);

									if($pagProductos > 4){

										if($_GET["pag"] == 1){

											echo '<div class="pagination"><ul>';

											for($i = 1; $i <= 4; $i ++){

												echo '<li><a href="vacancies?pag=',$i,'">',$i,'</a></li>';
											}

										}			

											else if($_GET["pag"] != $pagProductos && 
												    $_GET["pag"] != 1 &&
												    $_GET["pag"] <  ($pagProductos/2) &&
												    $_GET["pag"] < ($pagProductos-3)
												    ){

													$numPagActual = $_GET["pag"];

													echo '<div class="pagination"><ul>
														  <li class="prev"><a href="vacancies?pag='.($numPagActual-1).'"><i class="la la-long-arrow-left"></i></a></li> ';
												
													for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){

														echo '<li id="item'.$i.'"><a href="vacancies?pag='.$i.'">'.$i.'</a></li>';

													}

													echo ' <li><span class="delimeter">...</span></li>
														   <li id="item'.$pagProductos.'"><a href="vacancies?pag='.$pagProductos.'">'.$pagProductos.'</a></li>
														   <li class="next"><a href="vacancies?pag='.($numPagActual+1).'"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>

													</ul>';

											}
											else if($_GET["pag"] != $pagProductos && 
												    $_GET["pag"] != 1 &&
												    $_GET["pag"] >=  ($pagProductos/2) &&
												    $_GET["pag"] < ($pagProductos-3)
												    ){

													$numPagActual = $_GET["pag"];
												
													echo '<ul class="pagination">
													   <li><a href="vacancies?pag='.($numPagActual-1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
													   <li id="item1"><a href="vacancies?pag=1">1</a></li>
													   <li class="disabled"><a>...</a></li>
													';
												
													for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){

														echo '<li id="item'.$i.'"><a href="vacancies?pag='.$i.'">'.$i.'</a></li>';

													}


													echo '  <li><a href="vacancies?pag='.($numPagActual+1).'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
														</ul>';
											}
											else{

												$numPagActual = $_GET["pag"];

												echo '<ul class="pagination">
													   <li><a href="vacancies?pag='.($numPagActual-1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
													   <li id="item1"><a href="vacancies?pag=1">1</a></li>
													   <li class="disabled"><a>...</a></li>
													';
												
												for($i = ($pagProductos-3); $i <= $pagProductos; $i ++){

													echo '<li id="item'.$i.'"><a href="vacancies?pag='.$i.'">'.$i.'</a></li>';

												}

												echo ' </ul>';

											}


								}else{
										echo '<div class="pagination"><ul>';
						
										for($i = 1; $i <= $pagProductos; $i ++){

											echo '<li><a href="vacancies?pag=',$i,'">',$i,'</a></li>';

										}

										echo '</ul></div>';
									}

								}

							 ?>
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