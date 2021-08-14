<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_tercerturno_00_01{

    public function llantas_50_status_TercerTurno_00_01(){

        $valor67 = ControladorLlantas::ctr_llantas_50_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new llantas_status_tercerturno_00_01();
$activar -> llantas_50_status_TercerTurno_00_01();