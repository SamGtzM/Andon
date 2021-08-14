<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_23_00{

    public function eje_70_status_TercerTurno_23_00(){

        $valor66 = ControladorEje_70::ctr_eje_70_status_TercerTurno_23_00();

        echo json_encode($valor66);    

    }

}

$activar = new eje_70_status_tercerturno_23_00();
$activar -> eje_70_status_TercerTurno_23_00();