<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_tercerturno_03_04{

    public function cross_30_status_TercerTurno_03_04(){

        $valor70 = ControladorCross_30::ctr_cross_30_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new cross_30_status_tercerturno_03_04();
$activar -> cross_30_status_TercerTurno_03_04();