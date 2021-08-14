<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_03_04{

    public function cross_10_status_TercerTurno_03_04(){

        $valor70 = ControladorCross_10::ctr_cross_10_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new cross_10_status_tercerturno_03_04();
$activar -> cross_10_status_TercerTurno_03_04();