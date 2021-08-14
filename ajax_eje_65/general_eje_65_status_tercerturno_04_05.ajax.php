<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_04_05{

    public function eje_65_status_TercerTurno_04_05(){

        $valor71 = ControladorEje_65::ctr_eje_65_status_TercerTurno_04_05();

        echo json_encode($valor71);    

    }

}

$activar = new eje_65_status_tercerturno_04_05();
$activar -> eje_65_status_TercerTurno_04_05();