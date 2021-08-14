<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_05_06{

    public function cross_20_status_TercerTurno_05_06(){

        $valor72 = ControladorCross_20::ctr_cross_20_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new cross_20_status_tercerturno_05_06();
$activar -> cross_20_status_TercerTurno_05_06();