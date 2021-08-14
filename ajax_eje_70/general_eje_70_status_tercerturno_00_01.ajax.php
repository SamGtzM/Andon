<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_00_01{

    public function eje_70_status_TercerTurno_00_01(){

        $valor67 = ControladorEje_70::ctr_eje_70_status_TercerTurno_00_01();

        echo json_encode($valor67);    

    }

}

$activar = new eje_70_status_tercerturno_00_01();
$activar -> eje_70_status_TercerTurno_00_01();