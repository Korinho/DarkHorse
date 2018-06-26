			<?php if($_GET["edit"]==1){ $idsorteo= $_GET["id"]; $edit=$_GET["edit"]; include("parsers/query/query_sorteos.php");}?>
<script type="text/javascript">
$(document).ready(function(){
	  
	  jQuery("#formID").validationEngine('attach');
	  
});
</script>
<form id="formID"  action="parsers/query/<?php if($edit==1){echo "update";}else{echo "alta";}?>_sorteo.php" method="post" enctype="multipart/form-data" > 
		<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><?php if(edit==1){echo " ";}else{echo " ";}?><img src="../images/loteria/logo_euromillones.png">&nbsp; Euromillones </h4>
                                    </div>                                  
										     	<div class="panel-body">
															<div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Fecha Resultado</h4>
																		<input class="form-control" type="text" name="fechar" value="<?php echo $fechar?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																 <div class="col-sm-6">
																	<h4 class="heading_a">Fecha </h4>
																	<input class="form-control" type="text" name="fechaf" value="<?php echo $fechaf?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																
															  </div>
															  
															 <div class="row">   
															  <div class="col-sm-6">
																	<h4 class="heading_a">Bote</h4>
																	<input type="text" name="bote" value="<?php echo $bote?>" class="form-control" >
																	
																</div>
																
																<div class="col-sm-6">
																<h4 class="heading_a">Estrellas</h4>
																	<div class="row">
																		<div class="col-sm-3">
																			<input type="text" id="reg_input_email" name="estrella1" class="form-control"    value="<?php echo $estrella1?>">
																		</div>
																		<div class="col-sm-3">	
																			<input type="text" id="reg_input_email" name="estrella2" class="form-control"    value="<?php echo $estrella2?>">
																		</div>
																	</div>
																</div>
															  </div>														  
																
															 
															 <div class="row">
																 <div class="col-sm-12">
																<h4 class="heading_a">Numeros</h4>
																	<div class="row">
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="e1" class="form-control"    value="<?php echo $e1?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="e2" class="form-control"    value="<?php echo $e2?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="e3" class="form-control"    value="<?php echo $e3?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="e4" class="form-control"    value="<?php echo $e4?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="e5" class="form-control"    value="<?php echo $e5?>">
																		</div>
																	</div>
																		
																</div>
																
															 </div>
															   
														  
													</div>
													
												
									 
		</div>
		<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><?php if(edit==1){echo " ";}else{echo " ";}?><img src="../images/loteria/logo_bonoloto.png">&nbsp; BonoLoto </h4>
                                    </div>   
                                    <div class="panel-body">
															<div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Fecha Resultado</h4>
																	<input class="form-control" type="text" name="fecharb" value="<?php echo $fecharb?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																 <div class="col-sm-6">
																	<h4 class="heading_a">Fecha </h4>
																	<input class="form-control" type="text" name="fechafb" value="<?php echo $fechafb?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																
															  </div>
															  
															 <div class="row">   
																<div class="col-sm-4">
																	<h4 class="heading_a">Bote</h4>
																	<input type="text" name="boteb" value="<?php echo $boteb?>" class="form-control" >
																	
																</div>
																<div class="col-sm-4">
																	<h4 class="heading_a">Complementario</h4>
																	<input type="text" name="complementario" value="<?php echo $complementario?>" class="form-control" >
																	
																</div>
																<div class="col-sm-4">
																	<h4 class="heading_a">Reintegro</h4>
																	<input type="text" name="reintegro" value="<?php echo $reintegro?>" class="form-control" >
																	
																</div>
																
																
															  </div>														  
																
															 
															 <div class="row">
																 <div class="col-sm-12">
																<h4 class="heading_a">Numeros</h4>
																	<div class="row">
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="b1" class="form-control"    value="<?php echo $b1?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="b2" class="form-control"    value="<?php echo $b2?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="b3" class="form-control"    value="<?php echo $b3?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="b4" class="form-control"    value="<?php echo $b4?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="b5" class="form-control"    value="<?php echo $b5?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="b6" class="form-control"    value="<?php echo $b6?>">
																		</div>
																	</div>
																		
																</div>
																
															 </div>
															   
														  
													</div>    
                                    
        </div>
        <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><?php if(edit==1){echo "Editar ";}else{echo " ";}?><img src="../images/loteria/logo_gordo.png">&nbsp; El Gordo de la Primitiva </h4>
                                    </div>   
                                    	<div class="panel-body">
															<div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Fecha Resultado</h4>
																	
																		<input class="form-control" type="text" name="fecharg" value="<?php echo $fecharg?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																 <div class="col-sm-6">
																	<h4 class="heading_a">Fecha </h4>
																	<input class="form-control" type="text" name="fechafg" value="<?php echo $fechafg?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																
															  </div>
															  
															 <div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Bote</h4>
																	<input type="text" name="boteg" value="<?php echo $boteg?>" class="form-control" >
																	
																</div>
																<div class="col-sm-6">
																	<h4 class="heading_a">Nº Clave (reintegro)</h4>
																	<input type="text" name="claveg" value="<?php echo $claveg?>" class="form-control" >
																	
																</div>
																
																
															  </div>														  
																
															 
															 <div class="row">
																 <div class="col-sm-12">
																<h4 class="heading_a">Numeros</h4>
																	<div class="row">
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="g1" class="form-control"    value="<?php echo $g1?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="g2" class="form-control"    value="<?php echo $g2?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="g3" class="form-control"    value="<?php echo $g3?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="g4" class="form-control"    value="<?php echo $g4?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="g5" class="form-control"    value="<?php echo $g5?>">
																		</div>
																	</div>
																		
																</div>
																
															 </div>
															   
														  
													</div>
        </div>		
        <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><?php if(edit==1){echo " ";}else{echo " ";}?><img src="../images/loteria/logo_primitiva.png">&nbsp;  La Primitiva </h4>
                                    </div>  
                                    <div class="panel-body">
															<div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Fecha Resultado</h4>
																	
																		<input class="form-control" type="text" name="fecharp" value="<?php echo $fecharp?>"  placeholder="ej. 19 de junio de 2014">
																		
																	
																</div>
																 <div class="col-sm-6">
																	<h4 class="heading_a">Fecha </h4>
																	<input class="form-control" type="text" name="fechafp" value="<?php echo $fechafp?>" placeholder="ej. 19 de junio de 2014">
																	
																</div>
																
															  </div>
															  
															 <div class="row">   
																<div class="col-sm-3">
																	<h4 class="heading_a">Bote</h4>
																	<input type="text" name="botep" value="<?php echo $botep?>" class="form-control" >
																	
																</div>
																<div class="col-sm-3">
																	<h4 class="heading_a">C</h4>
																	<input type="text" name="c" value="<?php echo $c?>" class="form-control" >
																	
																</div>
																<div class="col-sm-3">
																	<h4 class="heading_a">R</h4>
																	<input type="text" name="r" value="<?php echo $r?>" class="form-control" >
																	
																</div>
																<div class="col-sm-3">
																	<h4 class="heading_a">Joker</h4>
																	<input type="text" name="joker" value="<?php echo $joker?>" class="form-control" >
																	
																</div>
																
																
															  </div>														  
																
															 
															 <div class="row">
																 <div class="col-sm-12">
																<h4 class="heading_a">Numeros</h4>
																	<div class="row">
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="p1" class="form-control"    value="<?php echo $p1?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="p2" class="form-control"    value="<?php echo $p2?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="p3" class="form-control"    value="<?php echo $p3?>">
																		</div>
																		<div class="col-sm-2">	
																			<input type="text" id="reg_input_email" name="p4" class="form-control"    value="<?php echo $p4?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="p5" class="form-control"    value="<?php echo $p5?>">
																		</div>
																		<div class="col-sm-2">
																			<input type="text" id="reg_input_email" name="p6" class="form-control"    value="<?php echo $p6?>">
																		</div>
																	</div>
																		
																</div>
																
															 </div>
															   
														  
													</div>
                                    
                                    
        </div>   
        <div class="row">
			<div class="col-sm-12">
				<input type="hidden" name="idsorteo" value = "<?php echo $idsorteo ?>">
				<center><button id="chain_btn" class="btn btn-default" type="submit"><?php if($edit==1){echo "Actualizar";}else{echo "Guardar";}?></button></center>
			</div>   
        
        </div>
                                      							     
		
	</form>



                                   
