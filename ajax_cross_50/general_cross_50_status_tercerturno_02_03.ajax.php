<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_02_03{

    public function cross_50_status_TercerTurno_02_03(){

        $valor69 = ControladorCross_50::ctr_cross_50_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new cross_50_status_tercerturno_02_03();
$activar -> cross_50_status_TercerTurno_02_03();