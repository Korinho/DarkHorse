<?php   include("sesion.php");
		include ("head.php");
		include ("header.php");
		include ("scripts/conn.php");
		$id=$_GET['resume'];
		$bd	= new PDO($dsnw, $userw, $passw, $optPDO);
	?>
	
	<section class="inicial">

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3 >Industries</h3>


							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="." title="">Home</a></li>
								
											
									<li><a href="#" title="">Industries</a></li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section class="industries">

		<div class="block remove-bottom">

			<div class="container">

					 <div class="row">
									 			
						<div class="col-lg-12 column">
							
							
							<div id="content" class="whiteContainer">
								<div id="containerGestion" align=middle>
									<div id="centraSolucions" class="paddingFix">
										<div id="solucionesGestionContainer">
										<h1 class="titulo"><span>Industries</span></h1></br>
										</div>
										
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#agri" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/AUTOMOTRIZ.PNG">
										</a>
										<div class="collapse" id="agri">
										  <div class="well">
										  <CENTER>AUTOMOTIVE</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/AUTOMOTRIZ/AUTOPARTES.PNG">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/AUTOMOTRIZ/DISTRIBUIDOR AUTOMOTRIZ.PNG">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/AUTOMOTRIZ/MAQUINARIA Y EQUIPO PESADO.PNG">
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#auto" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES DE CONSUMO.png">
										</a>
										<div class="collapse" id="auto">
										  <div class="well">
										  <CENTER>CONSUMER GOODS</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/ALIMENTOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/BEBIDAS ALCOHOLICAS DESTILADAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/CAFE.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/CALZADO CUERO.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/CERVEZAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/COLCHONES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/EMBOTELLADORAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/HEALTH CARE.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/JUGOS Y NECTARES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/JUGUETES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/LACTEOS Y DERIVADOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/LINEA BLANCA.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/MUEBLES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/BIENES/PERSONAL CARE.png">
											
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#construc" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/CONSTRUCCION E INMOBILIARIO.png">
										</a>
										<div class="collapse" id="construc">
										  <div class="well">
										  <CENTER>CONSTRUCTION AND REAL STATE</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/CONSTRUCCION/CENTROS COMERCIALES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/CONSTRUCCION/CONSTRUCTORAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/CONSTRUCCION/INGENIERIA Y PROYECTOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/CONSTRUCCION/INMOBILIARIAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/CONSTRUCCION/MATERIALES PARA CONSTRUCCION.png">
											
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#consumer" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/EDUCACION.png">
										</a>
										<div class="collapse" id="consumer">
										  <div class="well">
										  <CENTER>EDUCATION</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/EDUCACION/OTRAS ENTIDADES EDUCATIVAS.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/EDUCACION/UNIVERSIDADES.png">				
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#edu" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/ENERGIA.PNG">
										</a>
										<div class="collapse" id="edu">
										   <div class="well">
										  <CENTER>ENERGY</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/ENERGIA/DISTRIBUCION.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/ENERGIA/GENERACION.PNG">				
										  </div>
										</div>
										<!------ end 1 row -->

										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#energy" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/FARMACEUTICO Y SERVICIOS MEDICOS.png">
										</a>
										
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#manuf" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANOFACTURA.PNG">
										</a>
										<div class="collapse" id="manuf">
										  <div class="well">
											<CENTER>MANUFACTURERS</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/ACERO.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/ASTILLEROS, CONSTRUCCION Y MANTENIMIENTO.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/CEMENTO.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/MANOFACTURA.PNG">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/PLASTICO.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/PULPA Y PAPEL.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/TEXTIL.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MANUFACTURA/VIDRIO.png">
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#medios" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MEDIOS Y ENTRETENIMIENTO.png">
										</a>
										<div class="collapse" id="medios">
										  <div class="well">
											<CENTER>MEDIA AND ENTERTAINMENT</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MEDIOS/MEDIOS Y ENTRETENIMIENTO.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MEDIOS/PRENSA.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MEDIOS/RADIO.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MEDIOS/TELEVISION DE PAGA.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/MEDIOS/TELEVISION.png">				
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#metales" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/METALES Y MINERIA.png">
										</a>
										<div class="collapse" id="metales">
										  <div class="well">
											<CENTER>METALS AND MINING</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/METALES/METALES Y MINERIA.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/METALES/METALES.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/METALES/NO METALES.png">				
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#pharma" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/OTROS SERVICIOS.png">
										</a>
										<div class="collapse" id="pharma">
										  <div class="well">
											<CENTER>OTHER SERVICES</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/OTROS/ASOCIACIONES EMPRESARIALES Y CAMARAS.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/OTROS/CLUBES DEPORTIVOS.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/OTROS/LOTERIAS.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/OTROS/ORGANIZACIONES NO GUBERNAMENTALES DE BENEFICENCIA.png">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/OTROS/SERVICIOS CORPORATIVOS.png">				
										  </div>
										</div>
										
										<!------ end 2 row -->

										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#otros" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/PETROLEO Y GAS.PNG">
										</a>
										<div class="collapse" id="otros">
										  <div class="well">
											<CENTER>OIL AND GAS</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/PETROLEO/ESTACIONES DE SERVICIO.PNG">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/PETROLEO/GAS NATURAL.PNG">				
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/PETROLEO/PETROLEO.PNG">				
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#petro" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL.png">
										</a>
										<div class="collapse" id="petro">
										  <div class="well">
											<CENTER>RETAIL</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/FARMACIAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/RESTAURANTES CADENAS Y FRANQUICIAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/SUPERMERCADOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/TIENDAS DE CONVENIENCIA.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/TIENDAS DE ELECTRODOMESTICOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/TIENDAS DE ELECTRONICA.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/TIENDAS DE HOGAR.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/TIENDAS DE MATERIALES DE CONSTRUCCION FERRETERIA Y PINTURA.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/RETAIL/TIENDAS DEPARTAMENTALES.png">
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#retail" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SALUD.png">
										</a>
										<div class="collapse" id="retail">
										  <div class="well">
											<CENTER>HEALTH</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SALUD/HOSPITALES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SALUD/PRESTADORAS DE SALUD.png">
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#salud" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SERVICIOS FINANCIEROS.png">
										</a>
										<div class="collapse" id="salud">
										  <div class="well">
											<CENTER>FINANCIAL SERVICES</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SERVICIOS/ASEGURADORAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SERVICIOS/BANCOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/SERVICIOS/OTRAS INSTITUCIONES FINANCIERAS.png">
										  </div>
										</div>
										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#financieros" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TELECOMINICACIONES.png">
										</a>
										<div class="collapse" id="financieros">
										  <div class="well">
											<CENTER>TELECOMMUNICATIONS</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TELECOMUNICACIONES/SERVICIOS DE INTERNET.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TELECOMUNICACIONES/TELECOMINICACIONES.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TELECOMUNICACIONES/TELEFONIA CELULAR.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TELECOMUNICACIONES/TELEFONIA FIJA.png">
										  </div>
										</div>
										<!------ end 3 row -->

										<a class="btn btn-primary" role="button" data-toggle="collapse" href="#tele" aria-expanded="false" aria-controls="collapseExample">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE VIAJE Y TURISMO.png">
										</a>
										<div class="collapse" id="tele">
										  <div class="well">
											<CENTER>TRANSPORTATION TRAVEL AND TOURISM</CENTER><BR>
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/HOTEL.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/NAVIERAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/OPERADOR LOGISTICO.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/PUERTOS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/SERVICIOS ADUANALES Y ALMASENAJE.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/TRANSPORTE AEREO DE CARGA.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/TRANSPORTE AEREO PERSONAS.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/TRANSPORTE TERRESTRE CARGA.png">
											<img src="http://bpsmarketingonline.com/mca/images/industrias/nuevos_iconos/TRANSPORTE/TRANSPORTE TERRESTRE PERSONAS.png">
										  </div>
										</div>
										
										
										
									<!-- termina centraSolucions -->
								</div>
								<!-- termina containerGestion -->

							<!-- termina Soluciones de Gestión -->
							</div>
							<!-- termina content -->



							</div>

							 <div id="light"> 
								<iframe id="CRMFrame" src="#" width="100%" height="600" >
							  <p>Your browser does not support iframes.</p>
								</iframe>
							</div>
							<div id="fade" onClick="cierralo();"></div> 
						</div>
				 		

					</div>
					
				 </div>

			

			</div>

		</div>

	</section>


	
	
	<?php include ("footer.php"); 	?>
	<link rel="stylesheet" href="css/bootstrap.css" >
	<style>
	*, *::before, *::after {
    box-sizing: unset !important;
}
	</style>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="popup-form.css">
<script type="text/javascript" src="popup-form.js"></script>
	<script>
	function cierralo(){
		document.getElementById("CRMFrame").src="";
		lightbox_close();
	}
</script>
	  
	</body>
</html>