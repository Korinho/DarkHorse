 <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
											<form id="saveAdd" action="parsers/query/alta_categoria.php" method="post" enctype="multipart/form-data" >
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Add New Category Menu</h4>
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
																	<label>Enter Menu Category Name</label>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
													<button type="button"  class="btn blue saveAdd">Save + Add New</button>
                                                    <button type="submit" class="btn green">Save</button>
                                                </div>
												</form>
                                            </div>
                                        </div>
                                    </div>
									<script>									
	
	$(document).ready(function () {

	$(".saveAdd").click(function () {	
					
          $.ajax({
            type: 'post',
            url: 'parsers/query/alta_categoryAdd.php',
            data: $('#saveAdd').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });
		
	});	
	


});


</script>
									
 <div class="page-footer-inner"> 2016 &copy Sistema.                           </div>            <div class="scroll-to-top">                <i class="icon-arrow-up"></i>            </div>