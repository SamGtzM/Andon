<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_22_30_23{

    public function eje_60_status_TercerTurno_22_30_23(){

        $valor65 = ControladorEje_60::ctr_eje_60_status_TercerTurno_22_30_23();

        echo json_encode($valor65);    

    }

}

$activar = new eje_60_status_tercerturno_22_30_23();
$activar -> eje_60_status_TercerTurno_22_30_23();