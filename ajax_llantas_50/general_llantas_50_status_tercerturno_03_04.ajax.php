<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_03_04{

    public function llantas_50_status_TercerTurno_03_04(){

        $valor70 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new llantas_status_tercerturno_03_04();
$activar -> llantas_50_status_TercerTurno_03_04();