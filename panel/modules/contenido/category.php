	<?php if($_GET["edit"]==1){ $idpersonal = $_GET["id"]; $edit=$_GET["edit"]; include("parsers/query/query_personal.php");}?>
	<div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title ">
                            <h1  class="heade1">Nota
                              
                            </h1>
							
                        </div>
                        <!-- END PAGE TITLE -->
						<img src="img.png" class="img_header">
                      </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                  
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
							 <div class="portlet light bordered form-fit">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-user font-blue-hoki"></i>
                                                    <span class="caption-subject font-blue-hoki bold uppercase">Nota</span>
                                                    <span class="caption-helper"></span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_personal.php" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data"  method="post">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Titulo</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="" class="form-control" name="titulo" value="<?php echo $titulo?>" />
                                                             
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Descripción Corta</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="" class="form-control" name="descripcion" value="<?php echo $descripcion?>"/>
                                                          
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Contenido</label>
                                                            <div class="col-md-9">
																													  <textarea name="editor1" id="editor1" rows="10" cols="80">
																				<?php echo $contenido?>
																			</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Foto</label>
                                                            <div class="col-md-9">
                                                                 <div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><?php if($foto==""){ } else{ echo "<img src='parsers/query/archivos/$foto' alt=''>";}?>	 </div>
																<div>
																	<span class="btn red btn-outline btn-file">
																		<?php if($foto==""){?><span class="fileinput-new"> Select image </span>
																		<span class="fileinput-exists"> Change </span>
																		<input name="file_img" id="file_img" type="file" class="" /><input type="hidden" name="foto" value="1"> </span><?php } else{?>
																		<a href="parsers/query/delete_cv.php?id=<?php echo $idpersonal;?>&tipo=foto" class="btn red fileinput-exists" data-dismiss="fileinput" style="display:inline;"> Remove </a><?php } ?>
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
																<input name="idpersonal" type="hidden" value="<?php echo $idpersonal?>" />
                                                            </div>
                                                        </div>
                                                     </div>
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
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                       
							
							
							
							
							
							
							
							
							
							
                     </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
								
                               
           </div> 
		 
			