<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_01_02{

    public function eje_60_status_TercerTurno_01_02(){

        $valor68 = ControladorEje_60::ctr_eje_60_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new eje_60_status_tercerturno_01_02();
$activar -> eje_60_status_TercerTurno_01_02();