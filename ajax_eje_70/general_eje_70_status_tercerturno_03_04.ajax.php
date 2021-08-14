<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_03_04{

    public function eje_70_status_TercerTurno_03_04(){

        $valor70 = ControladorEje_70::ctr_eje_70_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new eje_70_status_tercerturno_03_04();
$activar -> eje_70_status_TercerTurno_03_04();