<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_tercerturno_23_00{

    public function cross_30_status_TercerTurno_23_00(){

        $valor66 = ControladorCross_30::ctr_cross_30_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new cross_30_status_tercerturno_23_00();
$activar -> cross_30_status_TercerTurno_23_00();