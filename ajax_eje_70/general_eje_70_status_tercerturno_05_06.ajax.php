<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_05_06{

    public function eje_70_status_TercerTurno_05_06(){

        $valor72 = ControladorEje_70::ctr_eje_70_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new eje_70_status_tercerturno_05_06();
$activar -> eje_70_status_TercerTurno_05_06();