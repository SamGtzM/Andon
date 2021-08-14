<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_22_30_23{

    public function eje_65_status_TercerTurno_22_30_23(){

        $valor65 = ControladorEje_65::ctr_eje_65_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new eje_65_status_tercerturno_22_30_23();
$activar -> eje_65_status_TercerTurno_22_30_23();