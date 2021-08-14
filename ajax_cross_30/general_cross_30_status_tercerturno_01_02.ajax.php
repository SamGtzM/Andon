<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_tercerturno_01_02{

    public function cross_30_status_TercerTurno_01_02(){

        $valor68 = ControladorCross_30::ctr_cross_30_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new cross_30_status_tercerturno_01_02();
$activar -> cross_30_status_TercerTurno_01_02();