<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_22_30_23{

    public function eje_70_status_TercerTurno_22_30_23(){

        $valor65 = ControladorEje_70::ctr_eje_70_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new eje_70_status_tercerturno_22_30_23();
$activar -> eje_70_status_TercerTurno_22_30_23();