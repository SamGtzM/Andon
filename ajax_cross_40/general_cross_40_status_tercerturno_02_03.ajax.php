<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_02_03{

    public function cross_40_status_TercerTurno_02_03(){

        $valor69 = ControladorCross_40::ctr_cross_40_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new cross_40_status_tercerturno_02_03();
$activar -> cross_40_status_TercerTurno_02_03();