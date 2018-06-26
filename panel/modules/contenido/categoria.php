			<?php if($_GET["edit"]==1){ $idcategoria = $_GET["id"]; $edit=$_GET["edit"]; include("parsers/query/query_categoria.php");}?>

<script type="text/javascript">

$(document).ready(function(){

	  

	  jQuery("#formID").validationEngine('attach');

	  

});

</script>

		<div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title"><?php if(edit==1){echo "Editar ";}else{echo "Nuevo ";}?>Categoría </h4>

                                    </div>                                 

										  

													<div class="panel-body">

														<form id="formID"  action="parsers/query/<?php if($edit==1){echo "update";}else{echo "alta";}?>_categoria.php" method="post" enctype="multipart/form-data" > 

															  <div class="row">																

																<div class="col-sm-12">

																	<h4 class="heading_a">Nombre Categoría :</h4>
																	<input type="text" id="reg_input" name="categoria"class="form-control" value="<?php echo $categoria?>">
																	<input type="hidden" id="reg_input" name="idcategoria"class="form-control" value="<?php echo $idcategoria?>">
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







                                   

