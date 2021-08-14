<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_tercerturno_00_01{

    public function cross_40_status_TercerTurno_00_01(){

        $valor67 = ControladorCross_40::ctr_cross_40_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new cross_40_status_tercerturno_00_01();
$activar -> cross_40_status_TercerTurno_00_01();