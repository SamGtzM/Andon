<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_03_04{

    public function cross_20_status_TercerTurno_03_04(){

        $valor70 = ControladorCross_20::ctr_cross_20_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new cross_20_status_tercerturno_03_04();
$activar -> cross_20_status_TercerTurno_03_04();