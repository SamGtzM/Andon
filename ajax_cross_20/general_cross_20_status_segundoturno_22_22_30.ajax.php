<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_22_22_30{

    public function cross_20_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new cross_20_status_primerturno_22_22_30();
$activar -> cross_20_status_PrimerTurno_22_22_30();