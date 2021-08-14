<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_23_00{

    public function eje_65_status_TercerTurno_23_00(){

        $valor66 = ControladorEje_65::ctr_eje_65_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new eje_65_status_tercerturno_23_00();
$activar -> eje_65_status_TercerTurno_23_00();