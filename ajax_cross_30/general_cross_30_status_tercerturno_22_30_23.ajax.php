<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_tercerturno_22_30_23{

    public function cross_30_status_TercerTurno_22_30_23(){

        $valor65 = ControladorCross_30::ctr_cross_30_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new cross_30_status_tercerturno_22_30_23();
$activar -> cross_30_status_TercerTurno_22_30_23();