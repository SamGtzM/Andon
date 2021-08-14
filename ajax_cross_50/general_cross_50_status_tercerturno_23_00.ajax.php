<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_23_00{

    public function cross_50_status_TercerTurno_23_00(){

        $valor66 = ControladorCross_50::ctr_cross_50_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new cross_50_status_tercerturno_23_00();
$activar -> cross_50_status_TercerTurno_23_00();