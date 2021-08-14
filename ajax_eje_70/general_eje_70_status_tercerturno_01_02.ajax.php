<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_01_02{

    public function eje_70_status_TercerTurno_01_02(){

        $valor68 = ControladorEje_70::ctr_eje_70_status_TercerTurno_01_02();

        echo json_encode($valor68);    

    }

}

$activar = new eje_70_status_tercerturno_01_02();
$activar -> eje_70_status_TercerTurno_01_02();