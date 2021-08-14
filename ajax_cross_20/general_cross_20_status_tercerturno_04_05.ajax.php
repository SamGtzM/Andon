<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_04_05{

    public function cross_20_status_TercerTurno_04_05(){

        $valor71 = ControladorCross_20::ctr_cross_20_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new cross_20_status_tercerturno_04_05();
$activar -> cross_20_status_TercerTurno_04_05();