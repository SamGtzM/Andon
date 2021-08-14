<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_05_06{

    public function cross_40_status_TercerTurno_05_06(){

        $valor72 = ControladorCross_40::ctr_cross_40_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new cross_40_status_tercerturno_05_06();
$activar -> cross_40_status_TercerTurno_05_06();