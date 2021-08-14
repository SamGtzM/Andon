<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_23_00{

    public function cross_10_status_TercerTurno_23_00(){

        $valor66 = ControladorCross_10::ctr_cross_10_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new cross_10_status_tercerturno_23_00();
$activar -> cross_10_status_TercerTurno_23_00();