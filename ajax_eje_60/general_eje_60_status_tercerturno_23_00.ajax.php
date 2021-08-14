<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_23_00{

    public function eje_60_status_TercerTurno_23_00(){

        $valor66 = ControladorEje_60::ctr_eje_60_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new eje_60_status_tercerturno_23_00();
$activar -> eje_60_status_TercerTurno_23_00();