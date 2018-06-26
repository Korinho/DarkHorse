<!-- aditional stylesheets -->

		<!-- responsive table -->

			<link href="js/lib/FooTable/css/footable.core.css" rel="stylesheet" type="text/css"/>

<!--[[ page specific plugins ]]-->

		<!-- responsive table -->

			<script src="js/lib/FooTable/js/footable.js"></script>

			<script src="js/lib/FooTable/js/footable.sort.js"></script>

			<script src="js/lib/FooTable/js/footable.filter.js"></script>

			<script src="js/lib/FooTable/js/footable.paginate.js"></script>



			<script src="js/pages/ebro_responsive_table.js"></script>



	<?php 

$sql_destacada =  "SELECT * FROM adm_personal";
?>

								<div class="panel panel-default">

									<div class="panel-heading">

										<h4 class="panel-title">Equipo</h4>

									</div>

									<div class="panel_controls">

										<div class="row">

										

											<div class="col-sm-4">

												<label for="table_search">B&uacute;squeda:</label>

												<input type="text" id="table_search" class="form-control">

											</div>

											
											<div class="col-sm-3 col-xs-6">

												<label>&nbsp;</label>

												<button class="btn btn-default btn-sm" id="clear-filter">Limpiar búsqueda</button>

											</div>

											<div class="col-sm-2"></div>

											<div class="col-sm-2"><a href="personal.php" class="btn btn-success"> <i class="icon-plus-sign"></i> Nuevo Elemento</div></a>

										</div>

									</div>

									<table id="resp_table" class="table toggle-square" data-filter="#table_search" data-page-size="40">

										<thead>

											<tr>

												<th data-hide="phone,tablet">Nombre</th>

												<th data-hide="phone,tablet">Area</th>

												<th data-toggle="true">especialidad</th>


												<th data-hide="phone,tablet">Acciones</th>

												

											</tr>

										</thead>

										<tbody>

										 <?php

				  

											$result_destacada = mysql_query($sql_destacada, $conn);

											while ($newArray = mysql_fetch_array($result_destacada)) {

												$id = $newArray['id'];

												$nombre = $newArray['nombre'];

												$especialidad = $newArray['especialidad'];

												$categoria = $newArray['categoria'];

												
												

												//$img= "<img src='images/hotel/".$id."_tumb.jpg' class='img-circle'>";

												if($activo=="1"){$activo="<i class='fa fa-check text-success '>";}else{$activo="<i class='fa fa-times text-danger'></i>";}

												 

												$edit="<span class='tip' ><a href='personal.php?id=$id&edit=1' title='Editar' ><i class='icon-pencil'></i></a></span> ";

												$delete="<span class='tip' ><a href='parsers/query/delete_personal.php?id=$id' class='Delete'  name='Band ring' title='Delete'  onclick='return confirm(\"¿Realmente quiere borralo?\");'  ><i class='icon-trash'></i></a></span>";

												//$log="<span class='tip' ><a href='logUser.php?id=$id&nombre=$nombre' class='pop_box' name='Log' title='Log'  ><img src='images/icon/icon_modal.png'></a></span>";

												echo "<tr class='odd gradeX'>

														<td>$nombre</td>";

													if($movil==0){ 

														echo"

														<td>$especialidad</td>

														<td>$categoria</td>

														

														

														";

													}

														echo "<td class='center'>

															 $edit

															 $log

															 $delete

													  </td>

													</tr>";

												$edit="";

												$delete="";

												$log="";

											}

										  ?>

											

											

										</tbody>

										<tfoot class="hide-if-no-paging">

											<tr>

												<td colspan="5" class="text-center">

													<ul class="pagination pagination-sm"></ul>

												</td>

											</tr>

										</tfoot>

									</table>

								</div>

						



                                   

