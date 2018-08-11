<?php 

	class ctrSoporte{

		public function ctrAgregarTicket(){

			if(isset($_POST["titulo"]) && isset($_POST["texto"])){

				$tabla = "soporte";

				$respuesta = mdlSoporte::mdlAgregarTicket($tabla,$datos);

				if($respuesta == "ok"){

				}

			}

		}

	}