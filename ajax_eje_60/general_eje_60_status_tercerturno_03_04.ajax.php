<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_03_04{

    public function eje_60_status_TercerTurno_03_04(){

        $valor70 = ControladorEje_60::ctr_eje_60_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new eje_60_status_tercerturno_03_04();
$activar -> eje_60_status_TercerTurno_03_04();