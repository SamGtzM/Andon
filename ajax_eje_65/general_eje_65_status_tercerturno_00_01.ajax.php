<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_00_01{

    public function eje_65_status_TercerTurno_00_01(){

        $valor67 = ControladorEje_65::ctr_eje_65_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new eje_65_status_tercerturno_00_01();
$activar -> eje_65_status_TercerTurno_00_01();