<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_22_30_23{

    public function cross_10_status_TercerTurno_22_30_23(){

        $valor65 = ControladorCross_10::ctr_cross_10_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new cross_10_status_tercerturno_22_30_23();
$activar -> cross_10_status_TercerTurno_22_30_23();