<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_30_status_primerturno_16_17{

    public function cross_30_status_PrimerTurno_16_17(){

        $valor58 = ControladorCross_30::ctr_cross_30_status_SegundoTurno_16_17();

        echo json_encode($valor58);    

    }

}

$activar = new cross_30_status_primerturno_16_17();
$activar -> cross_30_status_PrimerTurno_16_17();