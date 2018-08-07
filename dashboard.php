<?php  /* include("valida.php");*/ 		
		include ("dash_head.php");		
		include ("dash_header.php");	

		$type=0;
?>
	<section>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">		

				 <?php   include ("dash_sidebar.php"); ?>					
				 	<div class="col-lg-9 column">
					 <?php  if($type == 0){include ("dash_va.php");}else{include ("dash_em.php");} ?>
				 	</div>
				 </div>
			</div>
		</div>
	</section>
	<?php   include ("footer.php"); ?>
	</body></html>
