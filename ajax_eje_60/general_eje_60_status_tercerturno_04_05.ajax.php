<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_04_05{

    public function eje_60_status_TercerTurno_04_05(){

        $valor71 = ControladorEje_60::ctr_eje_60_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new eje_60_status_tercerturno_04_05();
$activar -> eje_60_status_TercerTurno_04_05();