<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_04_05{

    public function cross_40_status_TercerTurno_04_05(){

        $valor71 = ControladorCross_40::ctr_cross_40_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new cross_40_status_tercerturno_04_05();
$activar -> cross_40_status_TercerTurno_04_05();