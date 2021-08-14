<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_23_00{

    public function llantas_50_status_TercerTurno_23_00(){

        $valor66 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new llantas_status_tercerturno_23_00();
$activar -> llantas_50_status_TercerTurno_23_00();