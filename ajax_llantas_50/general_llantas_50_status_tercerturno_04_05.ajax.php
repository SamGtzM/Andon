<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_04_05{

    public function llantas_50_status_TercerTurno_04_05(){

        $valor71 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new llantas_status_tercerturno_04_05();
$activar -> llantas_50_status_TercerTurno_04_05();