<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_02_03{

    public function cross_10_status_TercerTurno_02_03(){

        $valor69 = ControladorCross_10::ctr_cross_10_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new cross_10_status_tercerturno_02_03();
$activar -> cross_10_status_TercerTurno_02_03();