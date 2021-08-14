<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_23_00{

    public function cross_20_status_TercerTurno_23_00(){

        $valor66 = ControladorCross_20::ctr_cross_20_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new cross_20_status_tercerturno_23_00();
$activar -> cross_20_status_TercerTurno_23_00();