<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_02_03{

    public function cross_20_status_TercerTurno_02_03(){

        $valor69 = ControladorCross_20::ctr_cross_20_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new cross_20_status_tercerturno_02_03();
$activar -> cross_20_status_TercerTurno_02_03();