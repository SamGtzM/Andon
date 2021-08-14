<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_tercerturno_00_01{

    public function cross_10_status_TercerTurno_00_01(){

        $valor67 = ControladorCross_10::ctr_cross_10_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new cross_10_status_tercerturno_00_01();
$activar -> cross_10_status_TercerTurno_00_01();