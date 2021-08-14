<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_tercerturno_00_01{

    public function cross_30_status_TercerTurno_00_01(){

        $valor67 = ControladorCross_30::ctr_cross_30_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new cross_30_status_tercerturno_00_01();
$activar -> cross_30_status_TercerTurno_00_01();