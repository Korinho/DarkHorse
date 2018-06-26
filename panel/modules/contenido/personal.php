			<?php if($_GET["edit"]==1){ $idpersonal = $_GET["id"]; $edit=$_GET["edit"]; include("parsers/query/query_personal.php");}?>

<script type="text/javascript">

$(document).ready(function(){

	  

	  jQuery("#formID").validationEngine('attach');

	  
});

</script>

		<div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title"><?php if(edit==1){echo "Editar ";}else{echo "Nuevo ";}?>Elemento </h4>

                                    </div>

                                   

										  

													<div class="panel-body">

														<form id="formID"  action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_personal.php" method="post" enctype="multipart/form-data" > 

															  <div class="row">																

																<div class="col-sm-6">

																	<h4 class="heading_a">Nombre :</h4>

																	<input type="text" id="reg_input" name="nombre"class="form-control" value="<?php echo $nombre?>">

																</div>

																<div class="col-sm-6">

																	<h4 class="heading_a">Especialidad</h4>

																	<input type="text" id="reg_input" name="especialidad" class="form-control" value="<?php echo $especialidad?>">

																</div>
																

															 </div>

															 <div class="row">   
															 <div class="col-sm-12">

																	<h4 class="heading_a">Colegiado</h4>

																	<input type="text" id="reg_input" name="colegiado" class="form-control" value="<?php echo $colegiado?>">

																</div>														

																

															  </div>

															   <div class="row">   

																<div class="col-sm-12">

																	<h4 class="heading_a">Descripción:</h4>

																	 <textarea class="form-control autosize_textarea animated" cols="70" rows="3" name="descripcion"><?php echo $descripcion; ?></textarea>

																</div>

																
																<input type="hidden" id="reg_input" name="idpersonal" class="form-control" value="<?php echo $idpersonal?>">
															</div>
															  

															  <div class="row">  

															  <div class="col-sm-6">

																	<h4 class="heading_a">Especialidades</h4>
																			<input type="text" id="reg_input" name="especialidades" class="form-control" value="<?php echo $especialidades;?>">
																																			
																</div>

															  <div class="col-sm-6">
																	<h4 class="heading_a">Area</h4>

																	<select id="reg_select" class="form-control" name="categoria">

																			<option value="">--Seleccione--</option>
																			<?php
																			$sql_destacada="SELECT * FROM adm_categoria;";
																			$result_destacada = mysql_query($sql_destacada, $conn);
																			while ($newArray = mysql_fetch_array($result_destacada)) {

																				$idcat = $newArray['id'];
																				$ncategoria = $newArray['categoria'];
																				if($idcat==$categoria){$selected="selected";}else{$selected="";}
																				echo $select="<option value='$idcat' $selected>$ncategoria</option>";
																				}
																			?>																		
															
																	</select>

																</div>
																</div>
																 <div class="row"> 
																<div class="col-sm-6">
																	<h4 class="heading_a">Foto</h4>
																	
																		<div class="fileupload fileupload-new" data-provides="fileupload">
																			<div class="fileupload-new img-thumbnail" style="width: 178px; height: 120px;"> <?php if($foto==""){?><img src="img/no_img_180.png" alt=""><?php } else{ echo "<img src='parsers/query/archivos/$foto' alt=''>";}?></div>
																			<div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 178px; height: 120px"></div>
																			<div>
																				<?php if($foto==""){?><span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="file_img" id="file_img" type="file" class="" /><input type="hidden" name="foto" value="1"></span><?php } else{?>
																		<br> <a href="parsers/query/delete_cv.php?id=<?php echo $idpersonal;?>&tipo=foto" target="_Blank">Eliminar Foto</a>
																		<?php } ?>	
																				
																				<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
																			</div>
																		</div>
																		<input name="txtAncho" type="hidden" class="subirimg_input" id="txtAncho" size="10" value="386"/>
																				<input name="txtAlto" type="hidden" class="subirimg_input" id="txtAlto" size="10" value="415" />
																				<input name="chkThumb" type="hidden" class="subirimg_input" id="chkThumb" size="10" value="1" />
																	
																</div>
																<div class="col-sm-6">
																	<h4 class="heading_a">CV</h4>
																		
																		<?php if($cv==""){?>
																		<input type="file" name="uploadedfile" multiple="multiple"><br>
																		<input type="hidden" name="cv" value="1">
																		<?php }else{?>
																		<a href="parsers/query/cv/<?php echo $cv;?>" target="_Blank">Ver Curriculum</a> | <a href="parsers/query/delete_cv.php?id=<?php echo $idpersonal;?>&tipo=cv" target="_Blank">Eliminar Curriculum</a>
																		<?php } ?>		
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







                                   

