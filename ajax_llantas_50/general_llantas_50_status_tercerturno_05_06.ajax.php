<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_05_06{

    public function llantas_50_status_TercerTurno_05_06(){

        $valor72 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new llantas_status_tercerturno_05_06();
$activar -> llantas_50_status_TercerTurno_05_06();