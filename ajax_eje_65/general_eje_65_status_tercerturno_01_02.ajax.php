<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_01_02{

    public function eje_65_status_TercerTurno_01_02(){

        $valor68 = ControladorEje_65::ctr_eje_65_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new eje_65_status_tercerturno_01_02();
$activar -> eje_65_status_TercerTurno_01_02();