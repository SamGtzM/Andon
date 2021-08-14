<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_22_22_30{

    public function cross_10_status_PrimerTurno_22_22_30(){

        $valor64 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_22_22_30();

        echo json_encode($valor64);    

    }

}

$activar = new cross_10_status_primerturno_22_22_30();
$activar -> cross_10_status_PrimerTurno_22_22_30();