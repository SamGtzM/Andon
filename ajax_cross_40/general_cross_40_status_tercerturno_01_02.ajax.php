<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_01_02{

    public function cross_40_status_TercerTurno_01_02(){

        $valor68 = ControladorCross_40::ctr_cross_40_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new cross_40_status_tercerturno_01_02();
$activar -> cross_40_status_TercerTurno_01_02();