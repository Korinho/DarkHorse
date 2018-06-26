 <?php $id=$_GET['id']; ?>
 
 <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Basic Datatables
                                <small>basic datatable samples</small>
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
                            <span class="active">Tables</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					
					
						<?php 
					


?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Menus</span>
                                    </div>
                                    <div class="actions">
                                       
                                                <a href="" class="btn grey-salsa btn-sm" id="option1">Nuevo Menú</a>

                                           
                                                <a href="category.php" class="btn grey-salsa btn-sm" id="">Atras</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Nombre</th>
                                                    <!--<th> Tipo </th>
                                                    <th> Fecha </th>-->
													<th> Estatus </th>
													 <th> Edit </th>
													  <th> Delete </th>
													<th> Acciones </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											
											 <?php
											 	$sql_destacada2 =  "SELECT object_id FROM sis_term_relationships WHERE term_taxonomy_id =$id order by object_id asc";

												$result_destacada2 = mysql_query($sql_destacada2, $conn);
												while($newArray = mysql_fetch_array($result_destacada2)) {
												$id = $newArray['object_id'];					


											 $sql_destacada =  "SELECT * FROM sis_posts WHERE ID=$id order by id desc ";
											$result_destacada = mysql_query($sql_destacada, $conn);

											$newArray = mysql_fetch_array($result_destacada);

												$id = $newArray['ID'];
												$nombre = $newArray['post_name'];	
												$tipo = $newArray['post_type'];
												$status = $newArray['post_status'];	
												$fecha = $newArray['post_date'];	
												$acciones= "<a href='javascript:;' class='btn btn-outline btn-circle btn-sm blue'><i class='fa fa-edit'></i> Editar </a> <a href='javascript:;' class='btn btn-outline btn-circle dark btn-sm black'> <i class='fa fa-trash-o'></i> Eliminar </a>";
												if($status=="publish"){$status= "<span class='label label-sm label-success'> Enable </span>";}	
												if($status=="trash"){$status= "<span class='label label-sm label-error'> Disable </span>";}
												echo "
                                                <tr>
                                                    <td> $id </td>
                                                    <td> $nombre </td>
                                                    <td> $tipo </td>
                                                    <td> $fecha </td>
                                                    <td>
                                                        $status
                                                    </td>
													<td>$acciones</td>
                                                </tr>";
											
												}	?>
											
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
               