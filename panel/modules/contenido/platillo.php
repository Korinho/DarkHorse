 <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title ">
                            <h1  class="heade1">Noticias
                              
                            </h1>
							
                        </div>
                        <!-- END PAGE TITLE -->
						<img src="img.png" class="img_header">
                      </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					
					
						<?php 

 $sql_destacada =  "SELECT * FROM nota where tipo=0";


?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Noticias</span>
                                    </div>
                                    <div class="actions">
                                       
                                                <a href="nota.php" class="btn grey-salsa btn-sm" id="option1">Nueva Noticia</a>
                                           
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Fecha</th>
                                                    <th> Título </th>
                                                    <th> Estado </th>
													<th> Acciones </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											
											 <?php
											$result_destacada = mysql_query($sql_destacada, $conn);

											while ($newArray = mysql_fetch_array($result_destacada)) {

													$id = $newArray['id'];

												$titulo = $newArray['titulo'];

												$fecha = $newArray['fecha'];

												$estado = $newArray['estado'];

												
												if($estado==1){$estado= "<span class='label label-sm label-success'> Activo </span>";}	
												else{$estado= "<span class='label label-sm label-danger'> Disable </span>";}
												$edit="<a  data-id='$id' href='nota.php?id=$id&edit=1'  class='btn btn-outline btn-circle btn-sm blue update_btn'><i class='fa fa-edit'></i>  </a> ";
												$delete="<a href='parsers/query/delete_category.php?id=$id' class='btn btn-outline btn-circle dark btn-sm black' onclick=\"javascript:return confirm('Segurisisisim@ de que quieres borrar?')\"> <i class='fa fa-trash-o'></i>  </a> ";
												echo "
                                                <tr>
                                                    <td> $id </td>
                                                    <td> $fecha </td>
                                                    <td> $titulo </td>
													<td> $estado </td>
                                                    <td> $edit $delete </td>
                                                   
                                                </tr>";
												$delete="";
												$edit="";
												$imagen="";
											}
												?>
											
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
               