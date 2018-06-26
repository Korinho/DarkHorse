<?php 

	session_start();

	include('parsers/funciones.php');; 

	if(accesoModulos()) 

	{

		/*if(($_COOKIE['seccion']=="Nacional")||($_COOKIE['seccion']=="General"))

		{*/

?>

<html lang="es">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <?php include("modules/base/head.php"); ?>
	</head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
      <?php include("modules/base/header.php"); ?>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
			<?php include("modules/base/menu.php"); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
				<?php include("modules/contenido/platillo.php"); ?>
            </div>
			<?php include("modules/base/sidebar.php"); ?>
         </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
           <?php include("modules/base/footer.php"); ?>
        </div>
        <!-- END FOOTER -->
        <?php include("modules/base/scripts.php"); ?>
    </body>

</html>


	<?php

				

			}

	

	

	else

	{

		include('logout.php');

	}

  

?>

<?php mysql_close($conn); ?>



