<?php 

require_once "Controller/candidate.controller.php";
require_once "Controller/employer.controller.php";
require_once "Controller/plantilla.controller.php";
require_once "Controller/vacancies.controller.php";
require_once "Controller/notificaciones.controlador.php";


require_once "Model/candidate.model.php";
require_once "Model/employer.model.php";
require_once "Model/vacancies.model.php";
require_once "Model/notificaciones.modelo.php";

require_once "Model/route.php";

$platilla = new Cplantilla();
$platilla->plantilla();