	<?php  $idpersonal = $_GET["id"]; include("parsers/query/query_seccion.php");?>
	<div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Seccion <?php echo $nombre;?>
                              
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
                            <span class="active"><?php echo $nombre;?></span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
					

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
							 <div class="portlet light bordered form-fit">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-user font-blue-hoki"></i>
                                                    <span class="caption-subject font-blue-hoki bold uppercase"><?php echo $nombre;?></span>
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
                                                <form action="parsers/query/<?php if($edit==1){echo "update";}else{ echo "alta";}?>_seccion.php" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data"  method="post">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Título</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="" class="form-control" name="titulo" value="<?php echo $titulo?>" />
                                                             
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Contenido</label>
                                                            <div class="col-md-9">
																													  <textarea name="editor1" id="editor1" rows="10" cols="80">
																				<?php echo $contenido?>
																			</textarea>
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
		 
			