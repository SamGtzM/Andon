<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_22_30_23{

    public function cross_50_status_TercerTurno_22_30_23(){

        $valor65 = ControladorCross_50::ctr_cross_50_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new cross_50_status_tercerturno_22_30_23();
$activar -> cross_50_status_TercerTurno_22_30_23();