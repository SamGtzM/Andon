<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_22_30_23{

    public function cross_40_status_TercerTurno_22_30_23(){

        $valor65 = ControladorCross_40::ctr_cross_40_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new cross_40_status_tercerturno_22_30_23();
$activar -> cross_40_status_TercerTurno_22_30_23();