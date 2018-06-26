 <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Menu
                                <small>Categorías</small>
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

 $sql_destacada =  "SELECT sis_terms.term_id, name FROM sis_terms, sis_term_taxonomy WHERE sis_terms.term_id = sis_term_taxonomy.term_id and sis_term_taxonomy.taxonomy='listing' and parent=0";


?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Categorías</span>
                                    </div>
                                    <div class="actions">
                                      	<a class="btn grey-salsa btn-sm" data-toggle="modal" href="#responsive"> Nuevo Menu </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Nombre</th>
                                                    <th> Slug </th>
                                                    <th> Acciones </th>
												</tr>
                                            </thead>
                                            <tbody>
											
											 <?php
											$result_destacada = mysql_query($sql_destacada, $conn);
											
											while ($newArray = mysql_fetch_array($result_destacada)) {

												$id = $newArray['term_id'];
												$nombre = $newArray['name'];	
												$slug = $newArray['slug'];
												$acciones= "<a href='javascript:;' class='btn btn-outline btn-circle btn-sm blue'><i class='fa fa-edit'></i> Editar </a> <a href='javascript:;' class='btn btn-outline btn-circle dark btn-sm black'> <i class='fa fa-trash-o'></i> Eliminar </a><a href='menus.php?id=$id' class='btn btn-outline btn-circle red btn-sm blue'>
                                                            <i class='fa fa-share'></i> Add Menu Parent </a>";
												echo "
                                                <tr>
                                                    <td> $id </td>
                                                    <td> $nombre </td>
                                                    <td> $slug </td>
                                                    <td> $acciones </td>
                                                   
                                                </tr>";
											}
												?>
											
                                            </tbody>
                                        </table>
										 <!-- responsive -->
                                    <div id="responsive" class="modal fade" tabindex="-1" data-width="600">
									<form action="parsers/query/alta_categoria.php" method="post" enctype="multipart/form-data" >
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Nuevo Menu</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
												
                                                    <h4>Ingrese los datos que le piden</h4>
                                                    <p>
														<label>Nombre</label>
                                                        <input class="form-control" type="text" name="name"> </p>
                                                    <p>
														<label>Slug</label>
                                                        <input class="form-control" type="text" name="slug"> </p>
                                                   
                                                    <p>
														<label>Superior</label>
														<select id="reg_select" class="form-control" name="parent">

																			<option value="">--Seleccione--</option>
																			<?php
																			$sql_destacada="SELECT sis_terms.term_id, name FROM sis_terms, sis_term_taxonomy WHERE sis_terms.term_id = sis_term_taxonomy.term_id and taxonomy='listing' and parent=$id;";
																			$result_destacada = mysql_query($sql_destacada, $conn);
																			while ($newArray = mysql_fetch_array($result_destacada)) {

																				$idcat = $newArray['term_id'];
																				$name = $newArray['name'];
																				if($idcat==$categoria){$selected="selected";}else{$selected="";}
																				echo $select="<option value='$idcat' $selected>$name</option>";
																				}
																			?>																		
															
																	</select>
                                                    <p>
														<label>Descripción</label>
                                                        <input class="form-control" type="text" name="description"> </p>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>	                                            
											<button type="submit" class="btn green">Guardar</button>
                                        </div>
										</form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
               