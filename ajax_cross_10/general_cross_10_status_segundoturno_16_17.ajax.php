<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_10_status_primerturno_16_17{

    public function cross_10_status_PrimerTurno_16_17(){

        $valor58 = ControladorCross_10::ctr_cross_10_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new cross_10_status_primerturno_16_17();
$activar -> cross_10_status_PrimerTurno_16_17();