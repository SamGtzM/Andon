<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_01_02{

    public function llantas_50_status_TercerTurno_01_02(){

        $valor68 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new llantas_status_tercerturno_01_02();
$activar -> llantas_50_status_TercerTurno_01_02();