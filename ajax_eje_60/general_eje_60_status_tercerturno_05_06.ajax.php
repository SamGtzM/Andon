<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_05_06{

    public function eje_60_status_TercerTurno_05_06(){

        $valor72 = ControladorEje_60::ctr_eje_60_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new eje_60_status_tercerturno_05_06();
$activar -> eje_60_status_TercerTurno_05_06();