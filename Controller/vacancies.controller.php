<?php 

	class ctrVacantes{


		public function addVacancies(){


		if(isset($_POST["job"])){

				$id_empleador = 1;
				$datos = array("employer"=>$id_empleador,
							   "tittle"=>$_POST["job"],
							   "pais"=>$_POST["country"],	
							   "lenguaje"=> $_POST["lenguage"],
							   "descripcion_corta"=>$_POST["short_description"],
							   "mostrar"=>$_POST["display"],
							   "sobre"=> $_POST["about"],
							   "descripcion"=>$_POST["job_description"],
							   "requerimientos"=> $_POST["requirements"],
							   "categoria" => $_POST["category"],
							   "locacion"=>$_POST["location"],
							   "fecha_inicio"=>$_POST["start_date"],
							   "calificacion"=>$_POST["qualifications"],
							   "salario"=>$_POST["salary"]);

				$tabla = "job";

				$respuesta = ModelVacantes::ModelAddVacante($tabla, $datos);

				if($respuesta == "ok"){

					/*=============================================
					ACTUALIZAR NOTIFICACIONES NUEVOS USUARIOS
					=============================================*/

					/*$traerNotificaciones = ControladorNotificaciones::ctrMostrarNotificaciones();

					$nuevoUsuario = $traerNotificaciones["nuevosUsuarios"] + 1;

					ModeloNotificaciones::mdlActualizarNotificaciones("notificaciones", "nuevosUsuarios", $nuevoUsuario);*/

					/*=============================================
					VERIFICACIÓN CORREO ELECTRÓNICO
					=============================================*/

					echo '<script> 

						swal({
							  title: "¡ERROR!",
							  text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';

				}else{
					echo '<script> 

						swal({
							  title: "¡ERROR!",
							  text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';
				}


		}


	}
	public function ctrMostrarVacantes(){

		$tabla = "job";

		$respuesta = ModelVacantes::mdlMostrarVacantes($tabla);

		return $respuesta;

	}

	public function ctrMostrarVacantesRecientes(){

		$tabla = "job";

		$tabla2 = "empleador";

		$respuesta =  ModelVacantes::ModelMostrarVacantesRecientes($tabla,$tabla2);


		return $respuesta; 

	}
	public function ctrMostrarVacantesVistas(){

		$tabla = "job";

		$tabla2 = "empleador";

		$respuesta =  ModelVacantes::ModelMostrarVacantesVistas($tabla,$tabla2);


		return $respuesta; 

	}
	public function ctrMostrarVacantesEmpleador($id){

		$tabla = "job";

		$respuesta = ModelVacantes::ModelMostrarVacantesEmpleador($tabla,$id);

		return $respuesta;

	}

	public function ctrMostrarVacante($id){

		$tabla = "job";

		$respuesta = ModelVacantes::ModelMostrarVacante($tabla,$id);

		return $respuesta;

	}
	public function ctrEditVacante($id){


		if(isset($_POST["job"])){

				$datos = array("id"=>$id,
							   "tittle"=>$_POST["job"],
							   "pais"=>$_POST["country"],	
							   "lenguaje"=> $_POST["lenguage"],
							   "descripcion_corta"=>$_POST["short_description"],
							   "mostrar"=>$_POST["display"],
							   "sobre"=> $_POST["about"],
							   "descripcion"=>$_POST["job_description"],
							   "requerimientos"=> $_POST["requirements"],
							   "categoria" => $_POST["category"],
							   "locacion"=>$_POST["location"],
							   "fecha_inicio"=>$_POST["start_date"],
							   "calificacion"=>$_POST["qualifications"],
							   "salario"=>$_POST["salary"]);

				$tabla = "job";

				$respuesta = ModelVacantes::ModelActualizarVacante($tabla,$id,$datos);

				if($respuesta == "ok"){

					/*=============================================
					ACTUALIZAR NOTIFICACIONES NUEVOS USUARIOS
					=============================================*/

					/*$traerNotificaciones = ControladorNotificaciones::ctrMostrarNotificaciones();

					$nuevoUsuario = $traerNotificaciones["nuevosUsuarios"] + 1;

					ModeloNotificaciones::mdlActualizarNotificaciones("notificaciones", "nuevosUsuarios", $nuevoUsuario);*/

					/*=============================================
					VERIFICACIÓN CORREO ELECTRÓNICO
					=============================================*/

					echo '<script> 

						swal({
							  title: "¡ERROR!",
							  text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';

				}else{
					echo '<script> 

						swal({
							  title: "¡ERROR!",
							  text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';
				}


		}


	}
	public function ctrMostrarPostulacionCandidato($id_candidato){


		$tabla="job";

		$tabla2="vacante_candidato";

		$respuesta = ModelVacantes::MdlMostrarPostulacionesCandidato($tabla,$tabla2,$id_candidato);

		return $respuesta;

	}

	public function ctrMostrarPostulados($id){

		$tabla = "vacante_candidato";

		$respuesta = ModelVacantes::MdlMostrarPostulaciones($tabla,$id);

		return $respuesta;

	}
}