<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_05_06{

    public function cross_50_status_TercerTurno_05_06(){

        $valor72 = ControladorCross_50::ctr_cross_50_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new cross_50_status_tercerturno_05_06();
$activar -> cross_50_status_TercerTurno_05_06();