<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_tercerturno_00_01{

    public function cross_50_status_TercerTurno_00_01(){

        $valor67 = ControladorCross_50::ctr_cross_50_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new cross_50_status_tercerturno_00_01();
$activar -> cross_50_status_TercerTurno_00_01();