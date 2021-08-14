<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_05_06{

    public function cross_10_status_TercerTurno_05_06(){

        $valor72 = ControladorCross_10::ctr_cross_10_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new cross_10_status_tercerturno_05_06();
$activar -> cross_10_status_TercerTurno_05_06();