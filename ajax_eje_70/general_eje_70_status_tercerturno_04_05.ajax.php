<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_04_05{

    public function eje_70_status_TercerTurno_04_05(){

        $valor71 = ControladorEje_70::ctr_eje_70_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new eje_70_status_tercerturno_04_05();
$activar -> eje_70_status_TercerTurno_04_05();