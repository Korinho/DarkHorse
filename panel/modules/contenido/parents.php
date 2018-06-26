  <?php $id=$_GET['id']; ?>
 <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Menu
                                <small>Parent</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>THEME</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light active" data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Theme Style
                                                    <select class="layout-style-option form-control input-small input-sm">
                                                        <option value="square">Square corners</option>
                                                        <option value="rounded" selected="selected">Rounded corners</option>
                                                    </select>
                                                </li>
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Menu</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					
					
						<?php 

 $sql_destacada =  "SELECT sis_terms.term_id, name,slug, image FROM sis_terms, sis_term_taxonomy WHERE sis_terms.term_id = sis_term_taxonomy.term_id AND parent=$id";


?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Menu Parent</span>
                                    </div>
                                    <div class="actions">
                                     <!--<a class="btn grey-salsa btn-sm" data-toggle="modal" href="#responsive"> Nuevo Menu </a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
													<th>Image</th>
                                                    <th> Name</th>
                                                    <th> Slug </th>
													 <th> Edit </th>
													  <th> Delete </th>
                                                    <th> Actions </th>
												</tr>
                                            </thead>
                                            <tbody>
											
											 <?php
											$result_destacada = mysql_query($sql_destacada, $conn);
											
											while ($newArray = mysql_fetch_array($result_destacada)) {

												$id = $newArray['term_id'];
												$nombre = $newArray['name'];	
												$slug = $newArray['slug'];
												$image = $newArray['image'];
												$parent = mysql_num_rows(mysql_query("SELECT parent FROM sis_term_taxonomy WHERE parent=$id"));
												if($parent > 0){$parents="<a href='parents.php?id=$id' class='btn btn-outline btn-circle red btn-sm '><i class='fa fa-share'></i> View List Menu Parent </a>";}
												 $items = mysql_num_rows(mysql_query( "SELECT object_id FROM sis_term_relationships WHERE term_taxonomy_id =$id order by object_id asc"));
												if($items > 0){	$parents.="<a href='menus.php?id=$id' class='btn btn-outline btn-circle purple btn-sm '><i class='fa fa-share'></i> View List food Items </a>";}
												$acciones= " <a  data-toggle='modal'  data-id='$id' href='#parent' class='btn btn-outline btn-circle green btn-sm  parent_btn' id=''><i class='fa fa-plus'></i> Menu Parent </a> $parents ";
												if($image!=""){$image="<a href='javascript:;' class='thumbnail'><img src='parsers/query/archivos/thumb/tb_$image' style='height: 80px; width: auto; display: block;'> </a>";}
												$edit="<a data-toggle='modal'  data-id='$id' href='#catupdate'  class='btn btn-outline btn-circle btn-sm blue update_btn'><i class='fa fa-edit'></i>  </a> ";
												$delete="<a href='parsers/query/delete_category.php?id=$id&cat=2' class='btn btn-outline btn-circle dark btn-sm black' onclick=\"javascript:return confirm('Segurisisisim@ de que quieres borrar?')\"> <i class='fa fa-trash-o'></i>  </a> ";
												echo "
                                                <tr>
                                                    <td> $id </td>
													<td> $image </td>
                                                    <td> $nombre </td>
                                                    <td> $slug </td>
													<td> $edit </td>
													<td> $delete </td>
                                                    <td> $acciones </td>
                                                   
                                                </tr>";
												$parents="";
												$items="";
												$delete="";
												$edit="";
												$image="";
											}
												?>
											
                                            </tbody>
                                        </table>
										 <!-- responsive -->
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
								
                               
           </div> 
		 	 <div id="parent" class="modal fade" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
											<form action="parsers/query/alta_categoria.php" method="post" enctype="multipart/form-data" >
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Add New Menu Parent</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="scroller" style="height:450px" data-always-visible="1" data-rail-visible1="1">
                                                        <div class="row">
                                                            <div class="col-md-12">
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																		<img src="assets/layouts/layout4/img/bg.jpg" alt="" /> </div>
																	<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
																	<div>
																		<span class="btn default btn-file">
																			<span class="fileinput-new"> Select image </span>
																			<span class="fileinput-exists"> Change </span>
																			<input type="file" name="archivo"> </span>
																		<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
																	</div>
																</div>
																<p>
																	<label>Enter Menu Parent Name</label>
																	<input class="form-control" type="text" name="name"> </p>
																<p>
																	<label>Slug</label>
																	<input class="form-control" type="text" name="slug"> </p>
															   
																<p>
																	<!--<label>Superior</label>
																	<select id="reg_select" class="form-control" name="parent">

																						<option value="">--Seleccione--</option>
																						<?php
																						$sql_destacada="SELECT sis_terms.term_id, name FROM sis_terms, sis_term_taxonomy WHERE sis_terms.term_id = sis_term_taxonomy.term_id and taxonomy='listing';";
																						$result_destacada = mysql_query($sql_destacada, $conn);
																						while ($newArray = mysql_fetch_array($result_destacada)) {

																							$idcat = $newArray['term_id'];
																							$name = $newArray['name'];
																							if($idcat==$categoria){$selected="selected";}else{$selected="";}
																							echo $select="<option value='$idcat' $selected>$name</option>";
																							}
																						?>																		
																		
																				</select>-->
																<p>
														<label>Descripción</label>
                                                        <input class="form-control" type="text" name="description"> </p>
														<input class="form-control" type="hidden" name="idparent" id="idmodal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-outline dark cls" id="close">Close</button>
													<button type="button" data-dismiss="modal" class="btn blue add" id="add">Save + Add New</button>
                                                    <button type="submit" class="btn green" id="save">Save</button>
                                                </div>
												</form>
                                            </div>
                                        </div>
                                    </div>	
									 <div id="catupdate" class="modal fade" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
											<form action="parsers/query/update_categoria.php" method="post" enctype="multipart/form-data" >
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Update Menu Category</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="scroller" style="height:450px" data-always-visible="1" data-rail-visible1="1">
                                                        <div class="row">
                                                            <div class="col-md-12">
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="fileinput-new thumbnail thumb_cat" style="width: 200px; height: 150px;">
																		 </div>
																	<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
																	<div>
																		<span class="btn default btn-file">
																			<span class="fileinput-new"> Select image </span>
																			<span class="fileinput-exists"> Change </span>
																			<input type="file" name="archivo"> </span>
																		<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
																	</div>
																</div>
																<p>
																	<label>Enter Menu Parent Name</label>
																	<input class="form-control" type="text" name="name" id="name"> </p>
																<p>
																	<label>Slug</label>
																	<input class="form-control" type="text" name="slug" id="slug"> </p>
															   
																<p>
																	<!--<label>Superior</label>
																	<select id="reg_select" class="form-control" name="parent">

																						<option value="">--Seleccione--</option>
																						<?php
																						$sql_destacada="SELECT sis_terms.term_id, name FROM sis_terms, sis_term_taxonomy WHERE sis_terms.term_id = sis_term_taxonomy.term_id and taxonomy='listing';";
																						$result_destacada = mysql_query($sql_destacada, $conn);
																						while ($newArray = mysql_fetch_array($result_destacada)) {

																							$idcat = $newArray['term_id'];
																							$name = $newArray['name'];
																							if($idcat==$categoria){$selected="selected";}else{$selected="";}
																							echo $select="<option value='$idcat' $selected>$name</option>";
																							}
																						?>																		
																		
																				</select>-->
																<p>
														<label>Descripción</label>
                                                        <input class="form-control" type="text" name="description" id="descripcion"> </p>
														<input class="form-control" type="hidden" name="idparent" id="idcat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-outline dark cls" id="close">Close</button>
													<button type="button" data-dismiss="modal" class="btn blue add" id="add">Save + Add New</button>
                                                    <button type="submit" class="btn green" id="save">Save</button>
                                                </div>
												</form>
                                            </div>
                                        </div>
                                    </div>	
<script>									
	
	$(document).ready(function () {
    $(".parent_btn").click(function () {
        $('#idmodal').val($(this).data('id'));
		
    });
$(".cls").click(function () {
        $('idmodal').val(" ");
		  $('idcat').val(" ");
		
    });
	$(".add").click(function () {
        $('#idmodal').val(" ");
		  $('idcat').val(" ");
		
    });
	
	 $(".update_btn").click(function () {
					$('#idcat').val($(this).data('id'));
					var id = $(this).data('id');	
				
						
						$.ajax({
							type:"POST",
							dataType:"json",
							url:"parsers/query/query_category.php",
							data: { id: id },
							beforeSend:function(){							  
								alert("entre");									
							  },
							success:function(response){		
								alert("entre");
								$("#name").val(response.name);	
								$("#slug").val(response.slug);
								$('#idcat').val(response.id);
								var foto=response.image;
								if(foto== ""){
									$(".thumb_cat").html("<img src='assets/layouts/layout4/img/bg.jpg' alt='' />");
								}
								else{
									$(".thumb_cat").html("<img src='parsers/query/archivos/"+foto+"' alt='' />");
								}
								
														
								
							}
						})
						
					
								
				});
	
	
	
	
});

</script>
								
								 