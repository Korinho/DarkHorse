<?php include("parsers/query/query_slide.php");?>
	<div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Slide
                              
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                      </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Slide</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					

                    <div class="row">
                        <div class="col-md-12">
                          
							
							  <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-blue-soft">
                                        <i class="fa fa-gift font-blue-soft"></i>Edit Slider </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_15_1" data-toggle="tab"> Slide 1 </a>
                                            </li>
                                            <li>
                                                <a href="#tab_15_2" data-toggle="tab"> Slide 2 </a>
                                            </li>
                                            <li>
                                                <a href="#tab_15_3" data-toggle="tab"> Slide 3 </a>
                                            </li>
											<li>
                                                <a href="#tab_15_4" data-toggle="tab"> Slide 4 </a>
                                            </li>
											
                                        </ul>
														
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_15_1">
                                                     <div class="portlet-body form">
													 <form action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_slide.php" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data"  method="post">
                                                <!-- BE--><div class="form-horizontal form-bordered form-label-stripped">
															<div class="form-body">
																<div class="form-group">
																	<label class="control-label col-md-3">Texto Slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="texto" value="<?php echo $texto1;?>" />
																	 
																	</div>
																</div>
																<!--<div class="form-group">
																	<label class="control-label col-md-3">Boton slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="descripcion" value="<?php echo $descripcion?>"/>
																  
																	</div>
																</div>-->
																
																<div class="form-group">
																	<label class="control-label col-md-3">Imagen</label>
																	<div class="col-md-9">
																		 <div class="fileinput fileinput-new" data-provides="fileinput">
																			<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><?php if($foto1==""){ } else{ echo "<img src='parsers/query/slide/$foto1' alt=''>";}?>	 </div>
																			<div>
																				<span class="btn red btn-outline btn-file">
																					<?php if($foto1==""){?><span class="fileinput-new"> Select image </span>
																					<span class="fileinput-exists"> Change </span>
																					<input name="file_img" id="file_img" type="file" class="" /><input type="hidden" name="foto" value="1"> </span><?php } else{?>
																					<a href="parsers/query/delete_cv2.php?id=<?php echo $idpersonal;?>&tipo=1" class="btn red fileinput-exists" data-dismiss="fileinput" style="display:inline;"> Remove </a><?php } ?>
																			</div>
																		</div>
																</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-3">Activo</label>
																	<div class="col-md-9">
																		<select class="form-control select2_category" name="estado">
																			<option value="0">Seleccione</option>
																			<option value="1" <?php if($estado1==1){echo "Selected";}?>>Si</option>
																			<option value="0" <?php if($estado1==0){echo "Selected";}?>>No</option>
																		  
																		</select>
																		<input type="hidden" name="tipo" value="1">
																	</div>
																</div>
															 
															
															</div>
														<!-- END FORM-->
															<div class="form-actions">
																<div class="row">
																	<div class="col-md-offset-3 col-md-9">
																		<button type="submit" class="btn green">
																			<i class="fa fa-check"></i> Enviar</button>
																		<button type="button" class="btn default">Cancelar</button>
																	</div>
																</div>
															</div>
															</form>
														</div>
													</div>
												
                                            </div>
                                            <div class="tab-pane" id="tab_15_2">
                                                  <div class="portlet-body form">
												   <form action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_slide.php" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data"  method="post">
                                                <!-- BE--><div class="form-horizontal form-bordered form-label-stripped">
															<div class="form-body">
																<div class="form-group">
																	<label class="control-label col-md-3">Texto Slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="texto" value="<?php echo $texto2;?>" />
																	 
																	</div>
																</div>
																<!--<div class="form-group">
																	<label class="control-label col-md-3">Boton slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="descripcion" value="<?php echo $descripcion2?>"/>
																  
																	</div>
																</div>-->
																
																<div class="form-group">
																	<label class="control-label col-md-3">Imagen</label>
																	<div class="col-md-9">
																		 <div class="fileinput fileinput-new" data-provides="fileinput">
																			<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><?php if($foto2==""){ } else{ echo "<img src='parsers/query/slide/$foto2' alt=''>";}?>	 </div>
																			<div>
																				<span class="btn red btn-outline btn-file">
																					<?php if($foto2==""){?><span class="fileinput-new"> Select image </span>
																					<span class="fileinput-exists"> Change </span>
																					<input name="file_img" id="file_img" type="file" class="" /><input type="hidden" name="foto" value="1"> </span><?php } else{?>
																					<a href="parsers/query/delete_cv2.php?id=<?php echo $idpersonal;?>&tipo=2" class="btn red fileinput-exists" data-dismiss="fileinput" style="display:inline;"> Remove </a><?php } ?>
																			</div>
																		</div>
																</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-3">Activo</label>
																	<div class="col-md-9">
																		<select class="form-control select2_category" name="estado">
																			<option value="0">Seleccione</option>
																			<option value="1" <?php if($estado2==1){echo "Selected";}?>>Si</option>
																			<option value="0" <?php if($estado2==0){echo "Selected";}?>>No</option>
																		  
																		</select>
																		<input type="hidden" name="tipo" value="2">
																	</div>
																</div>
															 
															
															</div>
														<!-- END FORM-->
														<div class="form-actions">
																<div class="row">
																	<div class="col-md-offset-3 col-md-9">
																		<button type="submit" class="btn green">
																			<i class="fa fa-check"></i> Enviar</button>
																		<button type="button" class="btn default">Cancelar</button>
																	</div>
																</div>
															</div>
															</form>
														</div>
													</div>
                                            </div>
                                            <div class="tab-pane" id="tab_15_3">
                                                  <div class="portlet-body form">
												  <form action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_slide.php" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data"  method="post">
                                                <!-- BE--><div class="form-horizontal form-bordered form-label-stripped">
															<div class="form-body">
																<div class="form-group">
																	<label class="control-label col-md-3">Texto Slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="texto" value="<?php echo $texto3;?>" />
																	 
																	</div>
																</div>
																<!--<div class="form-group">
																	<label class="control-label col-md-3">Boton slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="descripcion" value="<?php echo $descripcion?>"/>
																  
																	</div>
																</div>-->
																
																<div class="form-group">
																	<label class="control-label col-md-3">Imagen</label>
																	<div class="col-md-9">
																		 <div class="fileinput fileinput-new" data-provides="fileinput">
																			<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><?php if($foto3==""){ } else{ echo "<img src='parsers/query/slide/$foto3' alt=''>";}?>	 </div>
																			<div>
																				<span class="btn red btn-outline btn-file">
																					<?php if($foto3==""){?><span class="fileinput-new"> Select image </span>
																					<span class="fileinput-exists"> Change </span>
																					<input name="file_img" id="file_img" type="file" class="" /><input type="hidden" name="foto" value="1"> </span><?php } else{?>
																					<a href="parsers/query/delete_cv2.php?id=<?php echo $idpersonal;?>&tipo=3" class="btn red fileinput-exists" data-dismiss="fileinput" style="display:inline;"> Remove </a><?php } ?>
																			</div>
																		</div>
																</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-3">Activo</label>
																	<div class="col-md-9">
																		<select class="form-control select2_category" name="estado">
																			<option value="0">Seleccione</option>
																			<option value="1" <?php if($estado==1){echo "Selected";}?>>Si</option>
																			<option value="0" <?php if($estado==0){echo "Selected";}?>>No</option>
																		  
																		</select>
																		<input type="hidden" name="tipo" value="3">
																	</div>
																</div>
															 
															
															</div>
														<!-- END FORM-->
														<div class="form-actions">
																<div class="row">
																	<div class="col-md-offset-3 col-md-9">
																		<button type="submit" class="btn green">
																			<i class="fa fa-check"></i> Enviar</button>
																		<button type="button" class="btn default">Cancelar</button>
																	</div>
																</div>
															</div>
															</form>
														</div>
													</div>
                                            </div>
											     <div class="tab-pane" id="tab_15_4">
                                                  <div class="portlet-body form">
												  <form action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_slide.php" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data"  method="post">
                                                <!-- BE--><div class="form-horizontal form-bordered form-label-stripped">
															<div class="form-body">
																<div class="form-group">
																	<label class="control-label col-md-3">Texto Slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="texto" value="<?php echo $texto4;?>" />
																	 
																	</div>
																</div>
																<!--<div class="form-group">
																	<label class="control-label col-md-3">Boton slide</label>
																	<div class="col-md-9">
																		<input type="text" placeholder="" class="form-control" name="descripcion" value="<?php echo $descripcion?>"/>
																  
																	</div>
																</div>-->
																
																<div class="form-group">
																	<label class="control-label col-md-3">Imagen</label>
																	<div class="col-md-9">
																		 <div class="fileinput fileinput-new" data-provides="fileinput">
																			<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><?php if($foto4==""){ } else{ echo "<img src='parsers/query/slide/$foto4' alt=''>";}?>	 </div>
																			<div>
																				<span class="btn red btn-outline btn-file">
																					<?php if($foto4==""){?><span class="fileinput-new"> Select image </span>
																					<span class="fileinput-exists"> Change </span>
																					<input name="file_img" id="file_img" type="file" class="" /><input type="hidden" name="foto" value="1"> </span><?php } else{?>
																					<a href="parsers/query/delete_cv2.php?id=<?php echo $idpersonal;?>&tipo=4" class="btn red fileinput-exists" data-dismiss="fileinput" style="display:inline;"> Remove </a><?php } ?>
																			</div>
																		</div>
																</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-3">Activo</label>
																	<div class="col-md-9">
																		<select class="form-control select2_category" name="estado">
																			<option value="0">Seleccione</option>
																			<option value="1" <?php if($estado4==1){echo "Selected";}?>>Si</option>
																			<option value="0" <?php if($estado4==0){echo "Selected";}?>>No</option>
																		  
																		</select>
																		<input type="hidden" name="tipo" value="4">
																	</div>
																</div>
															 
															
															</div>
														<!-- END FORM-->
														<div class="form-actions">
																<div class="row">
																	<div class="col-md-offset-3 col-md-9">
																		<button type="submit" class="btn green">
																			<i class="fa fa-check"></i> Enviar</button>
																		<button type="button" class="btn default">Cancelar</button>
																	</div>
																</div>
															</div>
															</form>
														</div>
													</div>
                                            </div>
                                       
									     
                                        </div>
															
                                    </div>
                               </div>
                            </div>
                           
							
							
							
							
						</div>
                    <!-- END PAGE BASE CONTENT -->
					</div>
								
                               
           </div> 
		 
			