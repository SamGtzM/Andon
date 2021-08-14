<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_50_status_primerturno_16_17{

    public function cross_50_status_PrimerTurno_16_17(){

        $valor58 = ControladorCross_50::ctr_cross_50_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new cross_50_status_primerturno_16_17();
$activar -> cross_50_status_PrimerTurno_16_17();