<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_20_status_primerturno_16_17{

    public function cross_20_status_PrimerTurno_16_17(){

        $valor58 = ControladorCross_20::ctr_cross_20_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new cross_20_status_primerturno_16_17();
$activar -> cross_20_status_PrimerTurno_16_17();