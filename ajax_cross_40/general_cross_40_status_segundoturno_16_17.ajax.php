<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_40_status_primerturno_16_17{

    public function cross_40_status_PrimerTurno_16_17(){

        $valor58 = ControladorCross_40::ctr_cross_40_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new cross_40_status_primerturno_16_17();
$activar -> cross_40_status_PrimerTurno_16_17();