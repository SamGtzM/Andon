<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_tercerturno_02_03{

    public function cross_30_status_TercerTurno_02_03(){

        $valor69 = ControladorCross_30::ctr_cross_30_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new cross_30_status_tercerturno_02_03();
$activar -> cross_30_status_TercerTurno_02_03();