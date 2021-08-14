<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_03_04{

    public function cross_50_status_TercerTurno_03_04(){

        $valor70 = ControladorCross_50::ctr_cross_50_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new cross_50_status_tercerturno_03_04();
$activar -> cross_50_status_TercerTurno_03_04();