<?php 
		include ("dash_head.php");
		include ("dash_header.php");
		require_once("Controller/vacancies.controller.php");
		require_once("Model/vacancies.model.php");
		require_once("Controller/candidate.controller.php");
		require_once("Model/candidate.model.php");
		require_once("Controller/usuario.controller.php");
		require_once("Model/usuario.model.php");
	?>
	<input type="hidden" placeholder=""  name="idR" id="idR" />
	<section>

		<div class="block no-padding">

			<div class="container">

				 <div class="row no-gape">
						<?php   include ("dash_sidebar.php"); ?>
					 	<div class="col-lg-9 column">
				 		<div class="padding-left">
					 		<div class="manage-jobs-sec">
					 			<h3>Manage Candidates</h3>
					 			<!--<div class="extra-job-info">
						 			<span><i class="la la-clock-o"></i><strong>9</strong> Job Posted</span>
						 			<span><i class="la la-file-text"></i><strong>20</strong> Application</span>
						 			<span><a href="job.php"><i class="la la-plus"></i><strong>Add</strong> Post Jobs</a></span>
						 		</div>-->
						 		<table>
						 			<thead>
						 				<tr>
						 					<td>Name</td>
						 					<td>Tittle</td>
						 					<td>Puesto</td>
						 					<td>Action</td>
						 				</tr>
						 			</thead>
						 			<tbody>									
										<?php												
											if(isset($_GET["idv"])){
											$pos = ctrVacantes::ctrMostrarPostulados($_GET["idv"]);
											if(count($pos)==0){
											$item="id_candidato";
											$item2="id_usuario";
											$valor = $pos["id_candidato"];
											$postulados = ControllerCandidato::ctrMostrarCandidatoINT($item,$valor);
											foreach ($postulados as $key => $value) {
												$usuario = ctrUsuario::ctrMostrarUsuario($item2,$value["id_usuario"]);
											?>										
											<tr>
												<td>
													<div class="table-list-title">
														<h3><a href="#" title=""><?php echo $usuario["nombre"]," ",$value["apellido"] ?></a></h3>
														<span><i class="la la-map-marker"></i><?php echo $value["pais"]; ?></span>
													</div>	
												</td>
												<td>
													<span class="applied-field"><?php 
													echo $value["titulo"];
												?>
												</td>
												<td>
													<span><?php echo $value["resumen"]; ?></span>
												</td>
												<td>
													<ul class="action_job">
														<li><span>View Candidate</span><a href="resume.php?id=<?php echo $value['id_candidato'];?>" title=""><i class="la la-eye"></i></a></li>
													</ul>
												</td>
											</tr>
						 				
											<?php } 
										}else{
											echo '<tr><td><span>No hay candidatos</span></td></tr>';
										}
									}else{
											echo '<tr><td><span>No hay candidatos</span></td></tr>';
										}?>									
						 			</tbody>
						 		</table>
					 		</div>
					 	</div>
					</div>
				
					
					
					
				 </div>

			</div>

		</div>

	</section>
	

	<?php   include ("dash_footer.php"); ?>
	<script>
	$(document).ready(function(e) {
		var id=$("#id").val();
		get(id);
		getEx(id);
		getEd(id);
		getO(id);
		
		$('.experience').on('click', function(){
			$('.experience-popup-box').fadeIn('fast');
			$('html').addClass('no-scroll');

		});
		$('.education').on('click', function(){
			$('.education-popup-box').fadeIn('fast');
			$('html').addClass('no-scroll');

		});
		$('.other').on('click', function(){
			$('.other-popup-box').fadeIn('fast');
			$('html').addClass('no-scroll');

		});
		$("#old").blur(function(e){
			var old=$(this).val();
			$.ajax({
		   dataType: "json",
              data: {accion:'validPass', old:old, id:id},
              type: "POST",
              context: this,
              url: "scripts/usuario.php",
              success: function(data){ 
				   console.log(data);
							if(data.sql > 0){
								
								 
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("it does not match")
							$(this).val('');
							}
			  }
		  });
		});
		
	});
	function get(id){
		//alert(id)
		$.ajax({
		url:"scripts/resume.php",
		data: {id:id,accion:"get"},
		type:"POST",
		success:function(data){
			console.log(data)
			if(data === null){}else{
			$("#idR").val(data.id);	
			$(".idR").val(data.id);	
			$("#name").val(data.name);
			$("#lastname").val(data.lastname);
			$("#phone").val(data.phone);
			$("#country").val(data.country);
			$("#email").val(data.email);
			$("#language").val(data.language);
			$("#summary").val(data.summary);
			$("#resume").val(data.resume);
			$("#desired").val(data.desired);
			$("#display").val(data.display);	
			}
		}
	});
	}
	function getEx(id){
		
		$.ajax({
		url:"scripts/resume.php",
		data: {id:id,accion:"getEx"},
		type:"POST",
		success:function(data){
			console.log(data)
			if(data != false){
				$(".ex").empty();
	      		for (var i = 0; i < data.length; i++) {					
										
					$(".ex").append('<div class="edu-history"><i class="la la-briefcase"></i><div class="edu-hisinfo"><h3>'+data[i]['name']+'</h3><i>'+data[i]['star']+' - '+data[i]['end']+'</i><p>'+data[i]['description']+'</p><p><span>Degree:</span>'+data[i]['qualification']+'</p></div><ul class="action_job"><li><span>Edit</span><a href="#" title="" data-id="'+data[i]['id']+'"><i class="la la-pencil"></i></a></li><li><span>Delete</span><a href="#" title="" data-id"'+data[i]['description']+'"><i class="la la-trash-o"></i></a></li></ul></div>');
					
				}
			}
				
			
			
			
		}
	});
	}
	function getEd(id){
		
		$.ajax({
		url:"scripts/resume.php",
		data: {id:id,accion:"getEd"},
		type:"POST",
		success:function(data){
			console.log(data)
			if(data != false){
				$(".ed").empty();
	      		for (var i = 0; i < data.length; i++) {					
										
					$(".ed").append('<div class="edu-history"><i class="la la-graduation-cap"></i><div class="edu-hisinfo"><h3>'+data[i]['name']+'</h3><i>'+data[i]['star']+' - '+data[i]['end']+'</i><p>'+data[i]['description']+'</p><p><span>Degree:</span>'+data[i]['qualification']+'</p></div><ul class="action_job"><li><span>Edit</span><a href="#" title="" data-id="'+data[i]['id']+'"><i class="la la-pencil"></i></a></li><li><span>Delete</span><a href="#" title="" data-id"'+data[i]['description']+'"><i class="la la-trash-o"></i></a></li></ul></div>');
					
				}
			}
				
			
			
			
		}
	});
	}
	function getO(id){
		
		$.ajax({
		url:"scripts/resume.php",
		data: {id:id,accion:"getO"},
		type:"POST",
		success:function(data){
			console.log(data)
			if(data != false){
				$(".ot").empty();
	      		for (var i = 0; i < data.length; i++) {					
										
					$(".ot").append('<div class="edu-history style2"><i></i><div class="edu-hisinfo"><h3>'+data[i]['name']+'</h3><p>'+data[i]['description']+'</p><p><span>Degree:</span>'+data[i]['qualification']+'</p></div><ul class="action_job"><li><span>Edit</span><a href="#" title="" data-id="'+data[i]['id']+'"><i class="la la-pencil"></i></a></li><li><span>Delete</span><a href="#" title="" data-id"'+data[i]['description']+'"><i class="la la-trash-o"></i></a></li></ul></div>');
					
				}
			}
				
			
			
			
		}
	});
	}
	function  save(){
		
		var id=$("#id").val();
		 $.ajax({
		   dataType: "json",
              data: $("#save").serialize(), 
              type: "POST",
              context: this,
              url: "scripts/resume.php",
              success: function(data){ 
				   console.log(data);
							if(data.continuar ==  true){
								alert("Saved Personal Info")
								get(id); 
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("Error")
							}
			  }
		  });
	}
	function  save2(){
		
		var id=$("#id").val();
		 $.ajax({
		   dataType: "json",
              data: $("#save2").serialize(), 
              type: "POST",
              context: this,
              url: "scripts/resume.php",
              success: function(data){ 
				   console.log(data);
							if(data.continuar ==  true){
								alert("Saved Finish")
								get(id); 
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("Error")
							}
			  }
		  });
	}
	function  saveEx(){
		var idR=$("#idR").val();
		var id=$("#id").val();
		if(idR != "" || idR > 0){
		 $.ajax({
		   dataType: "json",
              data: $("#saveEx").serialize()+ "&type=" + 1 + "&id=" + id + "&idR=" + idR, 
              type: "POST",
              context: this,
              url: "scripts/resume.php",
              success: function(data){ 
				   console.log(data);
							if(data.continuar ==  true){
								alert("Saved Experience")
								get(id);
								getEx(id);
							    close();	
								clear();
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("Error")
							}
			  }
		  });
		}else{
			alert("You have to fill out the personal information section")
		}
	}
	function  saveEd(){
		var idR=$("#idR").val();
		var id=$("#id").val();
		if(idR != "" && idR > 0){
		 $.ajax({
		   dataType: "json",
              data: $("#saveEd").serialize()+ "&type=" + 2 + "&id=" + id + "&idR=" + idR, 
              type: "POST",
              context: this,
              url: "scripts/resume.php",
              success: function(data){ 
				   console.log(data);
							if(data.continuar ==  true){
								alert("Saved Education")
								get(id); 
								getEd(id);
								close();
								clear();			
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("Error")
							}
			  }
		  });
		}else{
			alert("You have to fill out the personal information section")
		}
	}
	function  saveO(){
		var idR=$("#idR").val();
		var id=$("#id").val();
		if(idR != "" && idR > 0){
		 $.ajax({
		   dataType: "json",
              data: $("#saveO").serialize()+ "&type=" + 3 + "&id=" + id + "&idR=" + idR, 
              type: "POST",
              context: this,
              url: "scripts/resume.php",
              success: function(data){ 
				   console.log(data);
							if(data.continuar ==  true){
								alert("Saved Other")
								get(id); 
								getO(id);
								close();
								clear();			
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("Error")
							}
			  }
		  });
		}else{
			alert("You have to fill out the personal information section")
		}
	}
	function  updatePass(){
		 $.ajax({
		   dataType: "json",
              data: $("#fpass").serialize(), 
              type: "POST",
              context: this,
              url: "scripts/usuario.php",
              success: function(data){ 
				   console.log(data);
							if(data.continuar ==  true){
								alert("Update Password")
							}
							else{
							alert("Error")
							}
			  }
		  });
	}
	function close(){
		 $('.signin-popup-box').fadeOut('fast');
		$('.experience-popup-box').fadeOut('fast');
		$('.education-popup-box').fadeOut('fast');
		$('.other-popup-box').fadeOut('fast');

        $('html').removeClass('no-scroll');
	}
	function clear(){
		$(".clear").val('');
	}
	</script>
	
</body>

</html>

