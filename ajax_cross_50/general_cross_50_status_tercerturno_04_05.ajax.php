<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_04_05{

    public function cross_50_status_TercerTurno_04_05(){

        $valor71 = ControladorCross_50::ctr_cross_50_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new cross_50_status_tercerturno_04_05();
$activar -> cross_50_status_TercerTurno_04_05();