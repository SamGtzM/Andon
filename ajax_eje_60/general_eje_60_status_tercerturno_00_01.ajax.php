<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_00_01{

    public function eje_60_status_TercerTurno_00_01(){

        $valor67 = ControladorEje_60::ctr_eje_60_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new eje_60_status_tercerturno_00_01();
$activar -> eje_60_status_TercerTurno_00_01();