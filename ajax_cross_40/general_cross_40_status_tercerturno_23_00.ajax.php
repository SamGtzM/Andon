<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_23_00{

    public function cross_40_status_TercerTurno_23_00(){

        $valor66 = ControladorCross_40::ctr_cross_40_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new cross_40_status_tercerturno_23_00();
$activar -> cross_40_status_TercerTurno_23_00();