<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_03_04{

    public function cross_40_status_TercerTurno_03_04(){

        $valor70 = ControladorCross_40::ctr_cross_40_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new cross_40_status_tercerturno_03_04();
$activar -> cross_40_status_TercerTurno_03_04();