<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_02_03{

    public function llantas_50_status_TercerTurno_02_03(){

        $valor69 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new llantas_status_tercerturno_02_03();
$activar -> llantas_50_status_TercerTurno_02_03();