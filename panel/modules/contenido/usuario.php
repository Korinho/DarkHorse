			<?php if($_GET["edit"]==1){ $idusuario = $_GET["id"]; $edit=$_GET["edit"]; include("parsers/query/query_usuario.php");}?>
<script type="text/javascript">
$(document).ready(function(){
	  
	  jQuery("#formID").validationEngine('attach');
	  
});
</script>
		<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><?php if(edit==1){echo "Editar ";}else{echo "Nuevo ";}?>Usuario </h4>
                                    </div>
                                   
										  
													<div class="panel-body">
														<form id="formID"  action="parsers/query/<?php if($edit==1){echo "update";}else{echo "alta";}?>_usuario.php" method="post" enctype="multipart/form-data" > 
															  <div class="row">
																
																<div class="col-sm-6">
																	<h4 class="heading_a">Nombre :</h4>
																	<input type="text" id="reg_input" name="nombre"class="form-control" value="<?php echo $nombre?>">
																</div>
																<div class="col-sm-6">
																	<h4 class="heading_a">Apellido</h4>
																	<input type="text" id="reg_input" name="apellido" class="form-control" value="<?php echo $apellido?>">
																</div>
															 </div>
															 <div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Sexo:</h4>
																	<div class="make-switch switch-width-large" data-on-label="Masculino" data-off-label="Femenino" >
																		<input type="checkbox" <?php if($sexo==1){echo "checked";}?> name="sexo" >
																	</div>
																</div>
																 <div class="col-sm-6">
																	<h4 class="heading_a">Email:</h4>
																	<input type="text" id="reg_input_email" name="email" class="form-control validate[required,custom[email]]" data-required="true" data-type="email" class="email" value="<?php echo $email?>">
																</div>
															  </div>
															   <div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Direcci&oacute;n:</h4>
																	<input type="text" id="reg_input" name="domicilio" class="form-control" value="<?php echo $domicilio?>">
																</div>
																 <div class="col-sm-6">
																	<h4 class="heading_a">Tel&eacute;fono:</h4>
																	<input type="text" id="reg_input" name="telefono" class="form-control" value="<?php echo $telefono?>">
																</div>
																<input type="hidden" id="reg_input" name="idusuario" class="form-control" value="<?php echo $idusuario?>">
															  </div><?php if($edit!=1){?>
															  <div class="row">   
																<div class="col-sm-6">
																	<h4 class="heading_a">Contraseña</h4>
																	<input type="password" id="password" name="pass" class="form-control validate[required]" >
																</div>
																
																 <div class="col-sm-6">
																	<h4 class="heading_a">Verificar contraseña</h4>
																	<input type="password" id="password2" name="pass" class="form-control validate[required,equals[password]" >
																</div>
															  </div>
															  <?php } ?>
															  <div class="row">  
															  <div class="col-sm-6">
																	<h4 class="heading_a">Tipo Usuario</h4>
																	
																		<select id="reg_select" class="form-control" name="nivel">
																			<option value="">--Seleccione--</option>
																			<option value="1" <?php if($nivel==1){echo "selected";}?>>Administrador</option>
																			<option value="2" <?php if($nivel==2){echo "selected";}?>>Proveedor</option>
																			
																		</select>
																	
																</div>
															  <div class="col-sm-6">
																	<h4 class="heading_a">Activo</h4>
																	<div class="make-switch switch-small" data-on="success">
																		<input type="checkbox" name="activo" <?php if($activo==1){echo "checked";}?> > <!-- checked-->
																	</div>
																</div>
																
															  </div>
															 <div class="row">
																<h4 class="heading_a"></h4>
																<center><button type="submit" class="btn btn-primary btn-xs">Guardar</button></center>
															 </div>
															   
														</form>	  
													</div>
												
									 </div>

		</div>



                                   
