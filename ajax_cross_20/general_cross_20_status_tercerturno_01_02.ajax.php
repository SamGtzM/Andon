<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_01_02{

    public function cross_20_status_TercerTurno_01_02(){

        $valor68 = ControladorCross_20::ctr_cross_20_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new cross_20_status_tercerturno_01_02();
$activar -> cross_20_status_TercerTurno_01_02();