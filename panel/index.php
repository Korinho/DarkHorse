

<?php
	include('parsers/funciones.php');
	//verificamos que no sea vacía la sesion
	$fechaOld= $_SESSION["inicio_sesion"];
	$ahora = date("Y-n-j H:i:s");
	//se calcula el tiempo transcurrido 
	$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaOld));
	//comparamos el tiempo y verificamos si ha transcurrido el tiempo establecido en la variable $tiempo_limite
	if($tiempo_transcurrido<= $time) 
	{				  		   
		 $_SESSION["inicio_sesion"] = $ahora;
		 if(empty($_SESSION['usuario']) || empty($_COOKIE['nombre'])) 
			{
				//setcookie("log", "0", time()-$time);
				include('logout.php');
			}
			else
			{
			?><!DOCTYPE html><!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]--><!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]--><!--[if !IE]><!--><html lang="es">    <!--<![endif]-->    <!-- BEGIN HEAD -->    <head>        <?php include("modules/base/head.php"); ?>	</head>    <!-- END HEAD -->    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">      <?php include("modules/base/header.php"); ?>        <!-- BEGIN HEADER & CONTENT DIVIDER -->        <div class="clearfix"> </div>        <!-- END HEADER & CONTENT DIVIDER -->        <!-- BEGIN CONTAINER -->        <div class="page-container">			<?php include("modules/base/menu.php"); ?>            <!-- BEGIN CONTENT -->            <div class="page-content-wrapper">				<?php include("modules/contenido/index.php"); ?>            </div>			<?php include("modules/base/sidebar.php"); ?>         </div>        <!-- END CONTAINER -->        <!-- BEGIN FOOTER -->        <div class="page-footer">           <?php include("modules/base/footer.php"); ?>        </div>        <!-- END FOOTER -->        <?php include("modules/base/scripts.php"); ?>    </body></html>
	<?php
	mysql_close($conn); 
				
			}
	
	}
	else
	{
		include('logout.php');
	}
  
?>
<?php// ?>

