<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_04_05{

    public function cross_10_status_TercerTurno_04_05(){

        $valor71 = ControladorCross_10::ctr_cross_10_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new cross_10_status_tercerturno_04_05();
$activar -> cross_10_status_TercerTurno_04_05();