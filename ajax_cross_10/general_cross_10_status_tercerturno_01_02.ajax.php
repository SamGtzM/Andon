<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_01_02{

    public function cross_10_status_TercerTurno_01_02(){

        $valor68 = ControladorCross_10::ctr_cross_10_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new cross_10_status_tercerturno_01_02();
$activar -> cross_10_status_TercerTurno_01_02();