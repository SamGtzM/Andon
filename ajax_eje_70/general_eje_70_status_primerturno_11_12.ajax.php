<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_11_12{

    public function eje_70_status_PrimerTurno_11_12(){

        $valor52 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new eje_70_status_primerturno_11_12();
$activar -> eje_70_status_PrimerTurno_11_12();