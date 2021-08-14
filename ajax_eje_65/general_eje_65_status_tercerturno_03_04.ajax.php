<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_03_04{

    public function eje_65_status_TercerTurno_03_04(){

        $valor70 = ControladorEje_65::ctr_eje_65_status_TercerTurno_03_04();

        echo json_encode($valor70);    

    }

}

$activar = new eje_65_status_tercerturno_03_04();
$activar -> eje_65_status_TercerTurno_03_04();