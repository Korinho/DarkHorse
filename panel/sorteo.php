<?php 
	session_start();
	include('parsers/funciones.php');; 
	if(accesoModulos()) 
	{
		/*if(($_COOKIE['seccion']=="Nacional")||($_COOKIE['seccion']=="General"))
		{*/
?>
<!doctype html>
<html lang="es">
	<head>
		<?php include("modules/base/head.php"); ?>
	</head>
	<body class=" sidebar_hidden side_fixed">
		<div id="wrapper_all">
			<header id="top_header">
				<?php include("modules/base/header.php"); ?>
			</header>						
			<nav id="top_navigation">
				<?php include("modules/base/topnav.php"); ?>
			</nav>
			<!-- mobile navigation -->
			<nav id="mobile_navigation"></nav>
			
			<section id="breadcrumbs">
				<div class="container">
					<ul>
						<li><a href="#">Patrofin Admin</a></li>
						<li><a href="secciones.php"><span>Secciones</span></a></li>	
						<li><span>Sorteo</span></li>							
					</ul>
				</div>
			</section>
			<section class="container clearfix main_section">
				<div id="main_content_outer" class="clearfix">
					<div id="main_content">
						
						<!-- main content -->
						<? include("modules/contenido/sorteo.php"); ?>

					</div>
				</div>
			</section>
			<div id="footer_space"></div>
		</div>
	
        <footer id="footer">
            <?php include("modules/base/footer.php"); ?>
        </footer>
        	
		<nav id="side_fixed_nav">
			<?php include("modules/base/menu2.php"); ?>
		</nav>

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

