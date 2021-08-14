<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_05_06{

    public function eje_65_status_TercerTurno_05_06(){

        $valor72 = ControladorEje_65::ctr_eje_65_status_TercerTurno_05_06();

        echo json_encode($valor72);    

    }

}

$activar = new eje_65_status_tercerturno_05_06();
$activar -> eje_65_status_TercerTurno_05_06();