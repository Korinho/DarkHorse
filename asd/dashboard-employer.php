<?php  /* include("valida.php");*/ 		
		include ("dash_head_empleador.php");		
		include ("dash_header_empleador.php");	
?>
	<section>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">				 					
				 <?php   include ("dash_sidebar_empleador.php"); ?>					
				 	<div class="col-lg-9 column">
					 <?php   if($type == 0){include ("dash_va_empleador.php");}else{include ("dash_empleador.php");} ?>
				 	</div>
				 </div>
			</div>
		</div>
	</section>
	<?php   include ("dash_footer_empleador.php"); ?>
	</body></html>
