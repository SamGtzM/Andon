<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_tercerturno_00_01{

    public function cross_20_status_TercerTurno_00_01(){

        $valor67 = ControladorCross_20::ctr_cross_20_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new cross_20_status_tercerturno_00_01();
$activar -> cross_20_status_TercerTurno_00_01();