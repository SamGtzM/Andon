<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_22_30_23{

    public function cross_20_status_TercerTurno_22_30_23(){

        $valor65 = ControladorCross_20::ctr_cross_20_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new cross_20_status_tercerturno_22_30_23();
$activar -> cross_20_status_TercerTurno_22_30_23();